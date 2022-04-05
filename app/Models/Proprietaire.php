<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Proprietaire extends Model
{
    use HasFactory;
    protected $casts = [
        'sexe' => \App\Enum\ProprietaireSexeEnum::class
    ];

    protected $guarded = ['id'];

    /**
     * Get the user that owns the Departement
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function personne()
    {
        return $this->belongsTo(Personne::class);
    }

    /**
     * Get all of the comments for the Departement
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function proprietes(): HasMany
    {
        return $this->hasMany(Propriete::class);
    }
}

