<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    use HasFactory;
    protected $fillable = [

        'name',
        'first',
        'last',
        'email',
        'phone1',
        'phone2',
        'street',
        'city',
        'address',
        'state',
        'zip',
        'isCompany',
        'company',
        'companyAddress',
        'companyEmail',
        'companyPhone',
        'position',
        'website',
        'industry',
        'income',
        'notes',
        'active',
        'source',


    ];

    // public function getStatusAttribute($value)
    // {
    //     return  $value=Model::where('status' , '0')->count();

    // }


}

