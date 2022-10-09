<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\User;
use App\Models\DoctorSlot;
use App\Services\DoctorProfile;

use Illuminate\Http\Request;
use Auth;
use Image;

class HomeController extends Controller
{

        private $docProfileService;
        /**
         * Create a new controller instance.
         *
         * @return void
         */
        public function __construct(DoctorProfile $docProfileService)

        {
        $this->docProfileService = $docProfileService;;
        }

        /**
         * Show the application dashboard.
         *
         * @return \Illuminate\Contracts\Support\Renderable
         */
        public function index()
        {
                $userData=Auth::user();

                if($userData==null){
                        // $userData=Auth::Guest();
                        // dd($userData);
                        return view('Guest.GuestDashboard');
                }
                // dd($userData);
                if($userData->userType=='Doctor')
                {
                        $userData = Doctor::where(['user_id'=>Auth::id()])->first();
                        return view('doctor.dashboard',['userInfo'=>$userData]);
                }elseif($userData->userType=='Admin'){
                        return view('admin.home');
                }
                else{
                        $userData = Patient::where(['user_id'=>Auth::id()])->first();
                        // dd($userData);
                        return view('patient.dashboard',['userInfo'=>$userData]);
                }
        }
        public function profile($id)
        {
                $userData=Doctor::where(['user_id'=>$id])->first();
                // dd($userData);
                return view('doctor.profileView',['userInfo'=>$userData]);
        }
        public function profileBuilder($id)
        {
                $userData=Doctor::where(['user_id'=>$id])->first();
                $scheduledSlots = $this->docProfileService->getSchdules($userData->id);
                //dd($scheduledSlots);
                // dd($userData);
                
                return view('doctor.profileBuilder',['userInfo'=>$userData, 'scheduledSlots'=>$scheduledSlots]);
        }
        public function profileBuilderUpdate(Request $request, $id_received){
                $data = $request->all();
                // dd($data);
                //model call
                $doctorInfo = new Doctor;
                $schedule = $data["scheduledSlots"];
                // dd($schedule);

                $doctor = Doctor::where(['user_id'=>$id_received])->first();
                $this->docProfileService->saveSchedule($schedule, $doctor->id);

                //image validation
                if($request->hasfile('doctorImageName')){
                        $img_tmp = $request->file('doctorImageName');
                        $extension = $img_tmp->getClientOriginalExtension();
                        $filename = uniqid().'.'.$extension;
                        $img_path = 'images/uploads/doctor/profilePic/'.$filename;
                        Image::make($img_tmp)->resize(400,400)->save($img_path);
                        $doctorInfo->profilePicture = $filename;
                }
                else
                {
                        $filename=$data['current_image'];
                }
                $doctor->update([
                        'name' => $data["first_name"],
                        'mobileNumber' => $data["mobileNumber"],
                        'email' => $data["emailAddress"],
                        'address' => $data["mailingAddress"],
                        'gender' => $data["gender"],
                        'dateOfBirth' => $data["DOB"],
                        'city' => $data["city"],
                        'country' => $data["country"],
                        'licenseNumber' => $data["licenseNumber"],
                        'nicNumber' => $data["NIC#"],
                        'qualification' => $data["qualification"],
                        'institutionOfQualification' => $data["institutionOfQualification"],
                        'institutionOfService' => $data["institutionOfService"],
                        'designation' => $data["designation"],
                        'specialization' => $data["specialization"],
                        'department' => $data["department"],
                        'profilePicture'=>$filename
                ]);
                        if (Auth::user()->userType=='Doctor'){
                                return redirect('profile/'.Auth::id());
                        }else{
                                return redirect('/showDoctors');

                        }
        }
        
        


        
//      Patient functions



        public function patientProfileBuilderUpdate(Request $request, $id_received){
                       $data = $request->all();
                       // dd($data);
               //model call
       
               $patientInfo = new Patient;

                $patientInfo->name = $data["first_name"];
                $patientInfo->mobileNumber = $data["mobileNumber"];
                $patientInfo->email = $data["emailAddress"];
                $patientInfo->address = $data["mailingAddress"];
                $patientInfo->gender = $data["gender"];
                $patientInfo->dateOfBirth = $data["DOB"];
                $patientInfo->city = $data["city"];
                $patientInfo->country = $data["country"];
                $patientInfo->insuranceNumber = $data["insuranceNumber"];
                $patientInfo->nicNumber = $data["NIC#"];
                $patientInfo->insuranceCompany = $data["insuranceCompany"];
       
               //image validation
                if($request->hasfile('patientImageName')){
                        $img_tmp = $request->file('patientImageName');
                        $extension = $img_tmp->getClientOriginalExtension();
                        $filename = uniqid().'.'.$extension;
                        $img_path = 'images/uploads/patient/profilePic/'.$filename;
                        Image::make($img_tmp)->resize(400,400)->save($img_path);
                        $patientInfo->profilePicture = $filename;
                }
               else
               {
                       $filename=$data['current_image'];
               }
               Patient::where(['user_id'=>$id_received])->update([
                       'name' => $data["first_name"],
                       'mobileNumber' => $data["mobileNumber"],
                       'email' => $data["emailAddress"],
                       'address' => $data["mailingAddress"],
                       'gender' => $data["gender"],
                       'dateOfBirth' => $data["DOB"],
                       'city' => $data["city"],
                       'country' => $data["country"],
                       'insuranceNumber' => $data["insuranceNumber"],
                       'nicNumber' => $data["NIC#"],
                       'insuranceCompany' => $data["insuranceCompany"],
                       'profilePicture'=>$filename
               ]);
                               if (Auth::user()->userType=='Patient'){
                                       return redirect('profilePatient/'.Auth::id());
                               }else{
                                       return redirect('/showPatients');
                               }
               }

        public function getAvailableDays($id) {
                $scheduledSlots = $this->docProfileService->getSchdules($id);
                $availableDay = DoctorSlot::where(['doctor_id'=>$id])->select('day')->distinct()->get();
                // dd($availableSlots);
                return response()->json(['dayData' => $availableDay, 'slots' => $scheduledSlots]);
        }
        public function getAvailableSlots($id , $day) {
                // $availableSlots = DoctorSlot::where(['doctor_id'=>$id])->get();
                $availableSlots = DoctorSlot::where(['doctor_id'=>$id])->where(['day'=>$day])->orderBy('slot_number',
                'ASC')->get();
                // dd($availableSlots);
                return response()->json(['slotData' => $availableSlots]);
        }
        public function team(){
                $doctorData =Doctor::all();
                return view('Guest.team',['doctorData'=>$doctorData]);
        }
        public function services(){
                
                $doctorData =Doctor::all();
                return view('Guest.services',['doctorData'=>$doctorData]);
        }
        public function aboutUs(){
                return view('about');
        }
        public function contactUs(){
                return view('contact');
        }
}
