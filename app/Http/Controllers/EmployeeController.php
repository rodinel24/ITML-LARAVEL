<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $employees =  Employee::all();

        // $employee = Employee::where([
        //     [ 'company' , '!=' , Null],
        //     [function ($query) use ($request)
        //     {
        //         if(($term = $request->term))
        //         {
        //             $query->orWhere('company' , 'LIKE' , '%' .$term. '%')->get();
        //         }
        //     }

        // ]
        // ]

        // )
        //     ->orderBy("id" , "desc")->paginate(5);
        $employee = $request->get('term');

        // $employees = Employee::where('company' , $employee->company)
        //         ->where('companyEmail' , $employee->companyEmail)
        //         ->where('companyPhone' , $employee->companyPhone)
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
            $employees = Employee::where('company','like','%'.$employee.'%' )->oldest()->paginate(5) ;
        }if ($comemail ) {
            $employees = Employee::where('companyEmail','like','%'.$employee.'%' )->oldest()->paginate(5) ;
        }if($comphone ){
            $employees = Employee::where('companyPhone','like','%'.$employee.'%' )->oldest()->paginate(5) ;
        }
        if($comname  && $comemail ){
            $employees = Employee::where('company','like','%'.$employee.'%' )->orWhere('companyEmail','like','%'.$employee.'%' )->oldest()->paginate(5) ;
        }
        if($comname  && $comphone  ){
            $employees = Employee::where('company','like','%'.$employee.'%' )->orWhere('companyPhone','like','%'.$employee.'%' )->oldest()->paginate(5) ;
        }

        if($comemail && $comphone && $comname ){
             $employees = Employee::where('companyPhone','like','%'.$employee.'%' )->orWhere('companyEmail','like','%'.$employee.'%' )->orWhere('company','like','%'.$employee.'%' )->oldest()->paginate(5);
        }



        // $employees = Employee::select('*')
        // ->where('company','like','%'.$employee.'%' )
        // ->where('companyEmail','like','%'.$employee.'%' )
        // ->get();



        $count=0;

        return view('data', compact('employees','count'))->with(request()->input('page'));

      }





    // public function employee(Request $request)
    // {
    //     $articles = Article::where('company', 'LIKE', "%{$request->employee}%")->get();

    //     return view('data');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate( $request,[


            'name'=> 'required',
            'first'=> 'required',
            'last'=> 'required',
            'email'=> 'required',
            'phone1'=> 'required',
            'phone2'=> 'required',
            'street'=> 'required',
            'city'=> 'required',
            'address'=> 'required',
            'state'=> 'required',
            'zip'=> 'required',
            'isCompany'=> 'required',
            'company'=> 'required',
            'companyAddress'=> 'required',
            'companyEmail'=> 'required',
            'companyPhone'=> 'required',
            'position'=> 'required',
            'website'=> 'required',
            'industry'=> 'required',
            'income'=> 'required',
            'notes'=> 'required',
            'source'=> 'required'
        ]);


        $employees = new Employee;

        $employees->name = $request->input('name');
        $employees->first = $request->input('first');
        $employees->last = $request->input('last');
        $employees->email = $request->input('email');
        $employees->phone1 = $request->input('phone1');
        $employees->phone2 = $request->input('phone2');
        $employees->street = $request->input('street');
        $employees->city = $request->input('city');
        $employees->address = $request->input('address');
        $employees->state = $request->input('state');
        $employees->zip = $request->input('zip');
        $employees->isCompany = $request->input('isCompany');
        $employees->company = $request->input('company');
        $employees->companyAddress = $request->input('companyAddress');
        $employees->companyEmail = $request->input('companyEmail');
        $employees->companyPhone = $request->input('companyPhone');
        $employees->position = $request->input('position');
        $employees->website = $request->input('website');
        $employees->industry = $request->input('industry');
        $employees->income = $request->input('income');
        $employees->notes = $request->input('notes');
        // $employees->active = 1;
        $employees->source = $request->input('source');
        // dd($request->all());
        $employees->save();

        return redirect('data')->with('Success', 'Data Saved');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $id = $request->input('id');
        $employees=Employee::find($id);

        $employees->name = $request->input('update_name');
        $employees->first = $request->input('update_first');
        $employees->last = $request->input('update_last');
        $employees->email = $request->input('update_email');
        $employees->phone1 = $request->input('update_phone1');
        $employees->phone2 = $request->input('update_phone2');
        $employees->street = $request->input('update_street');
        $employees->city = $request->input('update_city');
        $employees->address = $request->input('update_address');
        $employees->state = $request->input('update_state');
        $employees->zip = $request->input('update_zip');
        $employees->isCompany = $request->input('update_isCompany');
        $employees->company = $request->input('update_company');
        $employees->companyAddress = $request->input('update_companyAddress');
        $employees->companyEmail = $request->input('update_companyEmail');
        $employees->companyPhone = $request->input('update_companyPhone');
        $employees->position = $request->input('update_position');
        $employees->website = $request->input('update_website');
        $employees->industry = $request->input('update_industry');
        $employees->income = $request->input('update_income');
        $employees->notes = $request->input('update_notes');
        $employees->source = $request->input('update_source');

        $employees->update();
        return redirect('data')->with('Success', 'Data UpdATED');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function remove(Request $request)

    {
        //
        $id = $request->input('id');
        $employees=Employee::find($id);
        $employees->active = $request->input('active');
        $employees->update();
        return redirect('data')->with('Success', 'Data UpdATED');
    }






}
