<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Account extends APIModel
{
    protected $hidden = array('password');

    public function account_informations(){
      return $this->hasOne('App\AccountInformation');
    }

    public function account_profile_pictures(){
      return $this->hasOne('App\AccountProfilePicture');
    }

    public function account_positions(){
      return $this->hasOne('App\AccountPosition');
    }

    public function employee_status(){
       return $this->hasOne('App\EmployeeStatus');
    }

    public function account_schedules(){
        return $this->hasOne('App\AccountSchedule');
    }
}