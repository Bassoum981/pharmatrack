<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicament extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'code_produit',
        'prix_unitaire',
        'quantite_stock',
        'quantite_minimum',
        'date_expiration',
        'fournisseur',
        'categorie',
        'is_active',
    ];

    protected $casts = [
        'date_expiration' => 'date',
        'is_active' => 'boolean',
        'prix_unitaire' => 'decimal:2',
    ];

    public function ventes()
    {
        return $this->hasMany(Vente::class);
    }

    public function isLowStock(): bool
    {
        return $this->quantite_stock <= $this->quantite_minimum;
    }

    public function isExpired(): bool
    {
        return $this->date_expiration?->isPast() ?? false;
    }
}
