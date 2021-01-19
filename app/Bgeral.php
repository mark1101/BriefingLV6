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
        'twitter',
        'history',
        'youtube',
        'tiktok',
        'origem',
        'source',
        'transparency',
        'proposito',
        'mission',
        'services',
        'vision',
        'slogan',
        'challenge',
        'objetive',
        'meta',
        'differential',
        'sex',
        'formation',
        'class',
        'location',
        'age',
        'power',
        'habits',
        'resume',
        'competitionD',
        'competitionI',
        'persona',
    ];

    public function cliente(){
        return $this->hasOne(Client::class, 'id', 'client_id');
    }
}
