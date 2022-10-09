<?php

namespace App\Services;

use App\Models\DoctorSlot;

class DoctorProfile {

        public static $Mappings = 
        [
        0 => ['12:00' , '12:30'],
        1 => ['12:00' , '12:30'],
        2 => ['12:00' , '12:30'],
        3 => ['12:00' , '12:30'],
        4 => ['12:00' , '12:30'],
        5 => ['12:00' , '12:30'],
        6 => ['12:00' , '12:30'],
        7 => ['12:00' , '12:30'],
        8 => ['12:00' , '12:30'],
        9 => ['12:00' , '12:30'],
       


        ];
        public function saveSchedule($schedule, $docId){
                
                $schedule = json_decode($schedule, true);
                // dd($schedule);
                $days = [1,2,3,4,5,6,7];

                // foreach($schedule as $day => $slots) {
                foreach($days as $day) {
                        if(!isset($schedule[$day])){
                           $slots = [];              
                        }else{
                                $slots = $schedule[$day];
                        }
                        foreach($slots as $slot){
                                // dd($day);
                                $this->saveNew($day, $slot, $docId);
                        }
                        $this->deleteUnselected($day, $slots, $docId);
                }
        }

        public function saveNew($day, $slot, $docId){
                DoctorSlot::firstOrCreate(['doctor_id' => $docId, 'day' => $day, 'slot_number'=>$slot]);
        }

        public function deleteUnselected($day, $slots, $docId){
              //  \DB::enableQueryLog();
                DoctorSlot::where(['day' => $day, 'doctor_id' => $docId])->whereNotIn('slot_number', $slots)->delete();
              //  dd(\DB::getQueryLog());

        }

        public function getSchdules($docId){
                $days = [1,2,3,4,5,6,7];
                $schedule = [];
                foreach($days as $day) {
                        $slots = DoctorSlot::where(['doctor_id' => $docId,'day' => $day])->pluck('slot_number')->toArray();
                        $schedule[$day] = $slots;
                }

                return $schedule;
        }
}
