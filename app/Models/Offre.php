<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function poste(){
        return $this->belongsTo(Poste::class, 'poste_id', 'id');
    }

    public function country(){
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

    public function contrat(){
        return $this->belongsTo(Contrat::class, 'contrat_id', 'id');
    }

    public function candidatures()
    {
        return $this->hasMany(Candidature::class);
    }
}
