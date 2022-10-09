<?php

namespace App\Models;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\DoctorSlot;
use App\Http\Controllers\AppointmentController;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
        public function Doctor()
        {
              return $this->belongsTo(Doctor::class);
        }
            public function Patient()
        {
             return $this->belongsTo(Patient::class);
        }
        public function doctor_slot()
        {
             return $this->belongsTo(DoctorSlot::class);
        }
}
