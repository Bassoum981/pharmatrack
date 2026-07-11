<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_facture',
        'client_id',
        'medicament_id',
        'quantite',
        'prix_unitaire',
        'prix_total',
        'date_vente',
        'statut',
        'notes',
    ];

    protected $casts = [
        'date_vente' => 'datetime',
        'prix_unitaire' => 'decimal:2',
        'prix_total' => 'decimal:2',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function medicament()
    {
        return $this->belongsTo(Medicament::class);
    }
}
