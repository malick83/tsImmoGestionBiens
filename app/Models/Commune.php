<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commune extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'departement_id'];

    /**
     * Get the user that owns the Commune
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }
    
    /**
     * Get all of the comments for the Commune
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quartiers(): HasMany
    {
        return $this->hasMany(Quartier::class);
    }
}
