<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Propriete;

class Quartier extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'commune_id'];

    public function proprietes(): HasMany {
        return $this->hasMay(Propriete::class);
    }
    /**
     * Get the user that owns the Quartier
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function commune()
    {
        return $this->belongsTo(Commune::class);
    }
}
