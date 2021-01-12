<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Piece extends Model
{
    protected $fillable = [
        'id_category','name','value'
    ];

    public function categoria(){
        return $this->hasOne(Category::class, 'id', 'id_category');
    }
}
