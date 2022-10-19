<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Throwable;

class EmployeeController extends Controller
{


    public $employees = array(
        "0" => array(
            "First Name" => "Tim",
            "Last Name"  => "Cook",
            "Company" => "Apple"
        ),
        "1" => array(
            "First Name" => "Satya",
            "Last Name"  => "Nadella",
            "Company" => "Microsoft"
        ),
        "2" => array(
            "First Name" => "Hopefully",
            "Last Name"  => "You",
            "Company" => "Drovox"
        )
    );
    // define the Array

    public function getEmployees()
    {
        return $this->employees;
    }
    //  returns all the employees.

    public function getEmployeeById($id)
    {
        try {
         return  $this->employees[$id];

        } catch (Throwable $e) {
            // report($e->getMessage());
            echo "Something went wrong!";
            return false;
        }
        //  use try  and catch for if employees[$id] does not exist

    }
    // returns an employee by Id.
}
