<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\User;
use Auth;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
        public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
        }
        public function showDoctors() {
                $allDoctorData = Doctor::all();
                return view('admin.doctor.show',['alldata'=>$allDoctorData]);
        }
        public function deleteDoctor(Doctor $id){
        // Doctor::where(['user_id'=>$id])->delete();
        $id->delete();

        return redirect()->back()->with('success','Doctor Data deleted successfully');
        }
        public function showPatients() {
                $allPatientData = Patient::all();
                return view('admin.patient.show',['alldata'=>$allPatientData]);
        }
        public function deletePatient($id){
        Patient::where(['user_id'=>$id])->delete();
        User::where(['id'=>$id])->delete();
        return redirect()->back()->with('success','Patient Data deleted successfully');
        }
        public function showAdmins() {
                $allAdminstData = User::where(['userType'=>'Admin'])->get();
                // dd($allAdminstData);
                return view('admin.admin.show',['alldata'=>$allAdminstData]);
        }
        public function deleteAdmin($id){
        // Patient::where(['user_id'=>$id])->delete();
        User::where(['id'=>$id])->delete();
        return redirect()->back()->with('success','Admin deleted successfully');
        }

}
