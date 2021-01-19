<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreditHistory extends Model
{
    protected $fillable = [
        'piece_id',
        'value',
        'funcionario_id',
        'client_id',
        'id_service',
        'observation'
    ];

    public function categoria(){
        return $this->hasOne(Category::class, 'id', 'id_category');
    }

    public function peca()
    {
        return $this->hasOne(Piece::class, 'id', 'piece_id');
    }

    public function funcionario(){
        return $this->hasOne(User::class, 'id' , 'funcionario_id');
    }
}
