<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propriete extends Model
{
    use HasFactory;
    protected $casts = [
        'typePropriete' => \App\Enum\ProprieteTypeEnum::class
    ];
    protected $guarded = ['id'];

    /**
     * Get the user that owns the Departement
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function agence()
    {
        return $this->belongsTo(Agence::class);
    }
    
    public function quartier()
    {
        return $this->belongsTo(Quartier::class);
    
    }

    public function proprietaire()
    {
        return $this->belongsTo(Proprietaire::class);
    
    }
}
