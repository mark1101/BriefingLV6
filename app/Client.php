<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['name', 'whats' , 'name_responsible', 'tel' , 'email' , 'cnpj' , 'state_id' , 'city_id' ,
        'address', 'points' , 'points_hired','fundation' , 'service' , 'color' , 'logo' , 'active'];
}
