<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poste extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function offres()
    {
        return $this->hasMany(Offre::class, 'poste_id');
    }
}
