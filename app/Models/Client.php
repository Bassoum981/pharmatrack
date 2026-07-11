<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'telephone',
        'adresse',
        'points_fidelite',
        'date_inscription',
        'is_active',
    ];

    protected $casts = [
        'date_inscription' => 'date',
        'is_active' => 'boolean',
    ];

    public function ventes()
    {
        return $this->hasMany(Vente::class);
    }

    public function getFullNameAttribute(): string
    {
        return "{$this->prenom} {$this->nom}";
    }
}
