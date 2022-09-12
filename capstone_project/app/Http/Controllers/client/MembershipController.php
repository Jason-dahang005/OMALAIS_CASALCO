<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function membership_app(Request $r)
    {
        // $bus_number=$req->bus_number;
        // $liner=$req->liner;
        // $from=$req->from;
        // $to=$req->to;
        // $departure=$req->departure;
        // $arrival=$req->arrival;
        // $check_busnumber=Bus::where('bus_number',$bus_number)->get();
  
        // if (count($check_busnumber)>0) {
        //     return redirect('admin_buslist')->with('msg', 'Bus Already Exist');
  
        // }else {
        // $Abus= new Bus;
  
        // $Abus->bus_number=$bus_number;
        // $Abus->liner=$liner;
        // $Abus->from=$from;
        // $Abus->to=$to;
        // $Abus->departure=$departure;
        // $Abus->arrival=$arrival;
  
        // $created=$Abus->save();
  
        // if($created){
  
        //     return redirect('admin_buslist')->with('msg', 'Bus Added Successfully');
        // }
        $Fname=$r->Fname;
        $Mname=$r->Mname;
        $Lname=$r->Lname;
        $gender=$r->gender;
        $dob=$r->dob;
        $Bplace=$r->Bplace;
        $suffix=$r->suffix;
        $suffix=$r->suffix;
        $suffix=$r->suffix;
  
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
