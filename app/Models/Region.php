<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Region extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'pays_id'];

    /**
     * Get all of the comments for the Region
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function departements(): HasMany
    {
        return $this->hasMany(Departement::class);
    }

    /**
     * Get the user that owns the Region
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pays()
    {
        return $this->belongsTo(Pays::class);
    }
}
