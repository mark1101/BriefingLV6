<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banuncio extends Model
{
    protected $fillable = [
        'id_client',
        'resume',
        'to_do',
        'insta_login',
        'insta_pass',
        'face_login',
        'face_pass',
        'google_login',
        'google_pass',
        'rg_responsible',
        'cnpj',
        'social_reason',
        'address',
        'tel',
        'email',
        'email_pass',
        'payment_preference'
    ];
}
