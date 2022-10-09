<?php

namespace App\Models;
use App\Models\Appointment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
        public function User(){

        return $this->hasOne (User::class);
        }
        protected $fillable = [
            'name',
           'email',
          'gender',
           'dateOfBirth',
            'designation',
            'specialization',
            'department',
            'profilePicture',
           'fee',
            'licenseNumber',
            'nicNumber',
            'mobileNumber',
            'qualification',
            'institutionOfQualification',
           'institutionOfService',
            'address',
            'city',
         'country',
           'religion',
        ];

}
