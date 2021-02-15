<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
    protected $table='personal_information';
    protected $fillable = [
        'name','country','language','address','profession','experience','photo'
    ];
}
