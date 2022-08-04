<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $leads =  Lead::all();

        // $leadSearch = Lead::where([
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
        $leadSearch = $request->get('term');

        // $leads = Lead::where('company' , $leadSearch->company)
        //         ->where('companyEmail' , $leadSearch->companyEmail)
        //         ->where('companyPhone' , $leadSearch->companyPhone)
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
            $leads = Lead::where('companyEmail','like','%'.$leadSearch.'%' )->oldest()->paginate(5) ;
        }if($comphone ){
            $leads = Lead::where('companyPhone','like','%'.$leadSearch.'%' )->oldest()->paginate(5) ;
        }
        if($comname  && $comemail ){
            $leads = Lead::where('company','like','%'.$leadSearch.'%' )->orWhere('companyEmail','like','%'.$leadSearch.'%' )->oldest()->paginate(5) ;
        }
        if($comname  && $comphone  ){
            $leads = Lead::where('company','like','%'.$leadSearch.'%' )->orWhere('companyPhone','like','%'.$leadSearch.'%' )->oldest()->paginate(5) ;
        }

        if($comemail && $comphone && $comname ){
             $leads = Lead::where('companyPhone','like','%'.$leadSearch.'%' )->orWhere('companyEmail','like','%'.$leadSearch.'%' )->orWhere('company','like','%'.$leadSearch.'%' )->oldest()->paginate(5);
        }



        // $leads = Lead::select('*')
        // ->where('company','like','%'.$leadSearch.'%' )
        // ->where('companyEmail','like','%'.$leadSearch.'%' )
        // ->get();



        $count=0;

        return view('data', compact('leads','count'))->with(request()->input('page'));

      }





    // public function leadSearch(Request $request)
    // {
    //     $articles = Article::where('company', 'LIKE', "%{$request->leadSearch}%")->get();

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


        //  $this->validate( $request,[

        //  'name'=> ['regex:/^[a-zA-Z]+$/u'],
        // //     // 'first'=> ['regex:/^[a-zA-Z]+$/u'],
        // //     // 'last'=> ['regex:/^[a-zA-Z]+$/u'],
        // //     'email'=>  [ 'string', 'email', 'max:255', 'unique:leads'],
        // //     'phone1'=> 'required|numeric',
        // //     'phone2'=> 'required|numeric',
        // //     'city'=> ['regex:/^[a-zA-Z]+$/u'],
        // //     'state'=> ['regex:/^[a-zA-Z]+$/u'],
        // //     'companyEmail'=>  [ 'string', 'email', 'max:255', 'unique:leads'],
        // //     'companyPhone'=> 'required|numeric',
        // //     'position'=> ['regex:/^[a-zA-Z]+$/u'],
        // //     'industry'=> ['regex:/^[a-zA-Z]+$/u'],
        // //     'income'=> 'numeric',
        // ]);




        $leads = new Lead;
        $leads->name = $request->input('name');
        $leads->first = $request->input('first');
        $leads->last = $request->input('last');
        $leads->email = $request->input('email');
        $leads->phone1 = $request->input('phone1');
        $leads->phone2 = $request->input('phone2');
        $leads->street = $request->input('street');
        $leads->city = $request->input('city');
        $leads->address = $request->input('address');
        $leads->state = $request->input('state');
        $leads->zip = $request->input('zip');
        $leads->isCompany = $request->input('isCompany');
        $leads->company = $request->input('company');
        $leads->companyAddress = $request->input('companyAddress');
        $leads->companyEmail = $request->input('companyEmail');
        $leads->companyPhone = $request->input('companyNumber');
        $leads->position = $request->input('position');
        $leads->website = $request->input('website');
        $leads->industry = $request->input('industry');
        $leads->income = $request->input('income');
        $leads->notes = $request->input('notes');
        // $leads->active = 1;
        $leads->source = $request->input('source');
        // dd($request->all());
        $leads->save();

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
        $leads=Lead::find($id);

        $leads->name = $request->input('update_name');
        $leads->first = $request->input('update_first');
        $leads->last = $request->input('update_last');
        $leads->email = $request->input('update_email');
        $leads->phone1 = $request->input('update_phone1');
        $leads->phone2 = $request->input('update_phone2');
        $leads->street = $request->input('update_street');
        $leads->city = $request->input('update_city');
        $leads->address = $request->input('update_address');
        $leads->state = $request->input('update_state');
        $leads->zip = $request->input('update_zip');
        $leads->isCompany = $request->input('update_isCompany');
        $leads->company = $request->input('update_company');
        $leads->companyAddress = $request->input('update_companyAddress');
        $leads->companyEmail = $request->input('update_companyEmail');
        $leads->companyPhone = $request->input('update_companyPhone');
        $leads->position = $request->input('update_position');
        $leads->website = $request->input('update_website');
        $leads->industry = $request->input('update_industry');
        $leads->income = $request->input('update_income');
        $leads->notes = $request->input('update_notes');
        $leads->source = $request->input('update_source');

        $leads->update();
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
        $leads=Lead::find($id);
        $leads->active = $request->input('active');
        $leads->update();
        return redirect('data')->with('Success', 'Data UpdATED');
    }






}
