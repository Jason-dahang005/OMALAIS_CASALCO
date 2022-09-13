<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    protected $table='membership_app';
    protected $fillable = [
        'Fname',
        'Mname',
        'Lname',
        'suffix',
        'gender',
        'dob',
        'Bplace',
        'address',
        'unit',
        'occupation',
        'educ',
        'MI',
        'civilStatus',
        'religion',
        'contactNum',
        'TIN',
        'SSSnum',
        'email',
        'numDependents',
        'spouseFname',
        'spouseAge',
        'spouseOcc',
        'spouseMI',
        'spouseEmplrName',
        'spouseConNum',
        'benName',
        'benRelation',
        'benAge',
        'benAddress',
        'benMothersLname',
        'benMothersFname',
        'benMothersMname',
        'selfiepic',
        'empIDpic'


    ];
}
