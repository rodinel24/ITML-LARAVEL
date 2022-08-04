<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lead;
use App\Models\User;




class StarterController extends Controller
{
    //

    public function index(Request $request)
    {
        $leads =  Lead::all();
        $users =  User::all();


        $activeEmployee=0;
        $inactiveEmployee=0;
        $userCounter = 0;
        $adminCounter = 0;


        foreach ($leads as $lead) {
            # code...
            if($lead->active== 1)
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


       // $leads = Lead::oldest()->paginate(5);
       $leadSearch = $request->get('term');

       // $leads = Lead::where('company' , $lead->company)
       //         ->where('companyEmail' , $lead->companyEmail)
       //         ->where('companyPhone' , $lead->companyPhone)
       //         ->get();

             if($request->input('companyPhone')!= ""){
               $comphone = true;
           }else{ $comphone = false;}

           if($request->input('companyName')!= ""){
               $comname = true;
           }else{ $comname = false;}

           if($request->input('companyEmail')!= ""){
               $comemail = true;
           }else{ $comemail = false;}
           //$comphone = true;


           if($request->input('companyName')== "" && $request->input('companyEmail')== ""&& $request->input('companyPhone')== ""){
               $comname = true;
               $comemail = true;
               $comphone = true;

           }

       if($comname){
           $leads = Lead::where('company','like','%'.$leadSearch.'%' )->oldest()->paginate(5) ;
       }if ($comemail ) {
        $leads  = Lead::where('companyEmail','like','%'.$leadSearch.'%' )->oldest()->paginate(5) ;
       }if($comphone ){
        $leads  = Lead::where('companyPhone','like','%'.$leadSearch.'%' )->oldest()->paginate(5) ;
       }
       if($comname  && $comemail ){
        $leads  = Lead::where('company','like','%'.$leadSearch.'%' )->orWhere('companyEmail','like','%'.$leadSearch.'%' )->oldest()->paginate(5) ;
       }
       if($comname  && $comphone  ){
        $leads  = Lead::where('company','like','%'.$leadSearch.'%' )->orWhere('companyPhone','like','%'.$leadSearch.'%' )->oldest()->paginate(5) ;
       }

       if($comemail && $comphone && $comname ){
        $leads  = Lead::where('companyPhone','like','%'.$leadSearch.'%' )->orWhere('companyEmail','like','%'.$leadSearch.'%' )->orWhere('company','like','%'.$leadSearch.'%' )->oldest()->paginate(5);
       }


        return view('starter', compact('leads','activeEmployee','inactiveEmployee', 'adminCounter' ,'userCounter'))->with(request()->input('page'));
    }

}
