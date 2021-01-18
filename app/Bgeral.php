<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bgeral extends Model
{
    protected $fillable = [
        'client_id',
        'instagram',
        'facebook',
        'site',
        'youtube',
        'tiktok',
        'state_id',
        'city_id',
        'street',
        'complement',
        'cnpj',
        'source',
        'transparency',
        'mission',
        'services',
        'challenge',
        'objetive',
        'differential',
        'formation',
        'class',
        'location',
        'age',
        'power',
        'habits',
        'resume',
        'competition',
        'persona',
    ];
}
