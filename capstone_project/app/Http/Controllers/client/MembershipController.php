<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Membership;

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
        // $Fname=$r->Fname;
        // $Mname=$r->Mname;
        // $Lname=$r->Lname;
        // $suffix=$r->suffix;
        // $gender=$r->gender;
        // $dob=$r->dob;
        // $Bplace=$r->Bplace;
        // $address=$r->address;
        // $unit=$r->unit;
        // $occupation=$r->occupation;
        // $educ=$r->educ;
        // $MI=$r->MI;
        // $civilStatus=$r->civilStatus;
        // $religion=$r->religion;
        // $contactNum=$r->contactNum;
        // $TIN=$r->TIN;
        // $SSSnum=$r->SSSnum;
        // $email=$r->email;
        // $numDependents=$r->numDependents;
        // $spouseFname=$r->spouseFname;
        // $spouseAge=$r->spouseAge;
        // $spouseOcc=$r->spouseOcc;
        // $spouseMI=$r->spouseMI;
        // $spouseEmplrName=$r->spouseEmplrName;
        // $spouseConNum=$r->spouseConNum;
        // $benName=$r->benName;
        // $benAddress=$r->benAddress;
        // $benMothersLname=$r->benMothersLname;
        // $benMothersFname=$r->benMothersFname;
        // $benMothersMname=$r->benMothersMname;
        // $selfiepic=$r->selfiepic;
        // $empIDpic=$r->empIDpic;
        // $check_name=Membership::where('Lname',$Lname)->get();

        // if(count($check_name) > 0){
        //     return redirect('membership-application')->with('msg','You have already applied');
        // }else{
        //     $insertMember = new Membership;
        // $Fname=$r->Fname;
        // $Mname=$r->Mname;
        // $Lname=$r->Lname;
        // $suffix=$r->suffix;
        // $gender=$r->gender;
        // $dob=$r->dob;
        // $Bplace=$r->Bplace;
        // $address=$r->address;
        // $unit=$r->unit;
        // $occupation=$r->occupation;
        // $educ=$r->educ;
        // $MI=$r->MI;
        // $civilStatus=$r->civilStatus;
        // $religion=$r->religion;
        // $contactNum=$r->contactNum;
        // $TIN=$r->TIN;
        // $SSSnum=$r->SSSnum;
        // $email=$r->email;
        // $numDependents=$r->numDependents;
        // $spouseFname=$r->spouseFname;
        // $spouseAge=$r->spouseAge;
        // $spouseOcc=$r->spouseOcc;
        // $spouseMI=$r->spouseMI;
        // $spouseEmplrName=$r->spouseEmplrName;
        // $spouseConNum=$r->spouseConNum;
        // $benName=$r->benName;
        // $benAddress=$r->benAddress;
        // $benMothersLname=$r->benMothersLname;
        // $benMothersFname=$r->benMothersFname;
        // $benMothersMname=$r->benMothersMname;
        // $selfiepic=$r->selfiepic;
        // $empIDpic=$r->empIDpic;

        // $created=$insertMember->save();
        
        // if($created){
        //     return redirect('membership-app')->with('msg','Application Submit Successfully');
        // }
        // }
        $insertMember = new Membership;

        $insertMember->Fname=$r->Fname;
        $insertMember->Mname=$r->Mname;
        $insertMember->Lname=$r->Lname;
        $insertMember->suffix=$r->suffix;
        $insertMember->gender=$r->gender;
        $insertMember->dob=$r->dob;
        $insertMember->Bplace=$r->Bplace;
        $insertMember->address=$r->address;
        $insertMember->unit=$r->unit;
        $insertMember->occupation=$r->occupation;
        $insertMember->educ=$r->educ;
        $insertMember->MI=$r->MI;
        $insertMember->civilStatus=$r->civilStatus;
        $insertMember->religion=$r->religion;
        $insertMember->contactNum=$r->contactNum;
        $insertMember->TIN=$r->TIN;
        $insertMember->SSSnum=$r->SSSnum;
        $insertMember->email=$r->email;
        $insertMember->numDependents=$r->numDependents;
        $insertMember->spouseFname=$r->spouseFname;
        $insertMember->spouseAge=$r->spouseAge;
        $insertMember->spouseOcc=$r->spouseOcc;
        $insertMember->spouseMI=$r->spouseMI;
        $insertMember->spouseEmplrName=$r->spouseEmplrName;
        $insertMember->spouseConNum=$r->spouseConNum;
        $insertMember->benName=$r->benName;
        $insertMember->benAge=$r->benAge;
        $insertMember->benRelation=$r->benRelation;
        $insertMember->benAddress=$r->benAddress;
        $insertMember->benMothersLname=$r->benMothersLname;
        $insertMember->benMothersFname=$r->benMothersFname;
        $insertMember->benMothersMname=$r->benMothersMname;
        $insertMember->selfiepic=$r->selfiepic;
        $insertMember->empIDpic=$r->empIDpic;

        $created=$insertMember->save();
        
         if($created){
             return redirect('membership_appication')->with('msg','Application Submit Successfully');
         }
  
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
