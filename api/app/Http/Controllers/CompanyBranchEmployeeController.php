<?php

namespace App\Http\Controllers;

use App\CompanyBranchEmployee;
use Illuminate\Http\Request;

class CompanyBranchEmployeeController extends APIController
{
    function __construct(){
        $this->model = new CompanyBranchEmployee();
       
        $this->requiredForeignTabe = array(
          'company_branches'
        );
        $this->foreignTable = array(
          'account_informations',
          'company_branches'
        );
    }
}
