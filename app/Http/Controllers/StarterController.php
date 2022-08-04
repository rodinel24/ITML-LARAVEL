<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
use App\Models\User;




class StarterController extends Controller
{
    //

    public function index()
    {
        $employees =  Employee::all();
        $users =  User::all();


        $activeEmployee=0;
        $inactiveEmployee=0;
        $userCounter = 0;
        $adminCounter = 0;


        foreach ($employees as $employee) {
            # code...
            if($employee->active== 1)
            {
                $activeEmployee++;
            } else
            {
                $inactiveEmployee++;
            }


        }


        foreach ($users as $user) {
            # code...
            if($user->role== 1)
            {
                $adminCounter++;
            } else
            {
                $userCounter++;
            }


        }

        return view('starter', compact('activeEmployee','inactiveEmployee', 'adminCounter' ,'userCounter'));
    }

}
