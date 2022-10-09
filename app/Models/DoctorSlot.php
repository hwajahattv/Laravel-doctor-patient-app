<?php

namespace App\Models;
use App\Models\Appointment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorSlot extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    // protected $fillable = ['doctor_slot_id'];
        public function Appointment()
    {
        return $this->hasOne(Appointment::class);
    }
}
