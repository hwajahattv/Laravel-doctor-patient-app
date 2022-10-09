<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        //     dd($data);
        $user=User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'userType'=> $data['user_type'],
            'registrationNumber' => $data['registration'],

        ]);
        // dd($user);
        if($data['user_type'] === "Doctor"){
            //model call
            $doctor = new Doctor;
            $doctor->name = $data["name"];
            $doctor->email = $data["email"];
            $doctor->user_id=$user->id;
            $doctor->save();
            // if ($category->save() ) {
                // return redirect()->route('categories.index')->with(['success' => 'Category added successfully.']);
                // }
                // return redirect()->back()->with(['fail' => 'Unable to add category.']);
            }
        if($data['user_type'] === "Patient"){
        //model call
        $patient = new Patient;
        $patient->name = $data["name"];
        $patient->email = $data["email"];
        $patient->user_id=$user->id;
        $patient->save();
        // if ($category->save() ) {
            // return redirect()->route('categories.index')->with(['success' => 'Category added successfully.']);
            // }
        }
        return $user;
    }
    // protected function redirectTo()
    // {
        // if (auth()->user()->userType == 'admin') {
        // return '/admin';
        // }
        // $userInfo = Doctor::where(['user_id' => Auth::id()])->first();
        // return view('doctor.profileBuilder',['userInfo'=>$userInfo]);
        // }
}
