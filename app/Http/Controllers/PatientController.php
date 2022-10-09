<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    //
        public function profilePatient($id)
        {
                $userData=Patient::where(['user_id'=>$id])->first();
                // dd($userData);
                return view('Patient.PatientProfileView',['userInfo'=>$userData]);
        }

        public function patientProfileBuilder($id)
        {
                $userData=Patient::where(['user_id'=>$id])->first();
                // dd($userData);
                return view('patient.patientProfileBuilder',['userInfo'=>$userData]);
        }

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
}
