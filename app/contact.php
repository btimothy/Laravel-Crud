<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    //
    protected  $fillable =[
        'firstName',
        'lastName',
        'email',
        'city',
        'country',
        'jobtitle',
        'city',
        'country',
    ];
}
