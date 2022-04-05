<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pays extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'indicatif'];

    /**
     * Get all of the comments for the Pays
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function regions(): HasMany
    {
        return $this->hasMany(Region::class);
    }
}
