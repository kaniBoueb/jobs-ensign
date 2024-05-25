<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function offres()
    {
        return $this->hasMany(Offre::class, 'contrat_id');
    }
}
