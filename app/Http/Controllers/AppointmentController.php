<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\User;
use App\Models\Appointment;
use App\Models\DoctorSlot;
use App\Services\DoctorProfile;
use Auth;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    // private $docProfileService;
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct(DoctorProfile $docProfileService)

    {
    $this->docProfileService = $docProfileService;;
    }
        public function registerAppointment() {
                $doctorData = Doctor::all();
                $patientData = Patient::where(['user_id'=>Auth::id()])->first();
                return view('patient.registerAppointment',['doctorData'=>$doctorData,
                'patientData'=>$patientData,'slots'=>[]]);
        }
        public function registerAppointmentOfThisDoctor($id) {
                $doctorData = Doctor::all();
                $thisDoctorData = Doctor::where(['id'=>$id])->first();
                $patientData = Patient::where(['user_id'=>Auth::id()])->first();
                $scheduledSlots = $this->docProfileService->getSchdules($id);
                $availableDay = DoctorSlot::where(['doctor_id'=>$id])->select('day')->distinct()->get();
                // $dayData = json(['dayData',$availableDay]);
                // dd($dayData);
                return view('patient.registerAppointmentOfThisDoctor',['doctorData'=>$doctorData,
                'patientData'=>$patientData,'slots'=>[],
                'thisDoctorData'=>$thisDoctorData,'dayData'=>$availableDay])->with('dayData', json_encode($availableDay,
                true));
        }

        public function registerAppointmentStore(Request $request, $id_received  ){
                $this->validate($request, [
                        'selectSlot' => 'required',
                ]);
                $patientId = Patient::where(['user_id'=>$id_received])->first();
                $AppointmentData = $request;
                
                // dd($AppointmentData);
                $newAppointment = new Appointment();
                $newAppointment->name=$AppointmentData['Name'];
                $newAppointment->email=$AppointmentData['Email'];
                $newAppointment->message=$AppointmentData['form_message'];
                $newAppointment->department=$AppointmentData['Department'];
                $newAppointment->mobileNumber=$AppointmentData['Phone'];
                $newAppointment->day=$AppointmentData['selectDay'];
                $newAppointment->doctor_id=$AppointmentData['doctorId'];
                $newAppointment->patient_id=$patientId->id;;
                $newAppointment->doctor_slot_id=$AppointmentData['selectSlot'];
                $newAppointment->date= date('Y-m-d', strtotime($AppointmentData['Date']));
                $newAppointment->save();
                return redirect()->route('home')->with(['success' => 'Appointment registered successfully.','userInfo'=>Auth::user()]);
        }
        public function appointmentPage() {
                $patientId = Patient::where(['user_id'=>Auth::id()])->first();
                $AppointmentData = Appointment::with('Doctor','doctor_slot')->where(['patient_id'=>$patientId->id])->get();
                return view('patient.appointmentPage',['appointment'=>$AppointmentData]);
        }
        public function showAppointmentsList() {
                $doctorId = Doctor::where(['user_id'=>Auth::id()])->first();
                $AppointmentData = Appointment::with('Doctor','Patient','doctor_slot')->where(['doctor_id'=>$doctorId->id])->get();
                // dd($AppointmentData);
                return view('doctor.showAppointmentsList',['AppointmentData'=>$AppointmentData]);
        }
        public function adminShowAppointments() {
                // $doctorId = Doctor::where(['user_id'=>Auth::id()])->first();
                // $AppointmentData = Appointment::with('Doctor','Patient','doctor_slot')->where(['Doctor_id'=>$doctorId->id])->get();
                $AppointmentData = Appointment::all();
                // dd($AppointmentData);
                return view('admin.doctor.allAppointments',['AppointmentData'=>$AppointmentData]);
        }
        public function doneAppointment ($id) {
                $appointmentSelected = Appointment::where('id',$id)->update(['status'=>'fulfilled']);
                return redirect('showAppointmentsList');
        }
        public function undoneAppointment ($id) {
                $appointmentSelected = Appointment::where('id',$id)->update(['status'=>'pending']);
                return redirect('showAppointmentsList');
        }
}
