<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Medicament;
use App\Models\Client;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Créer les utilisateurs par défaut
        User::create([
            'name' => 'Admin PharmaTrack',
            'email' => 'admin@pharmatrack.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
            'is_active' => true,
        ]);

        User::create([
            'name' => 'Pharmacien Test',
            'email' => 'pharmacien@pharmatrack.com',
            'password' => bcrypt('password'),
            'role' => 'pharmacien',
            'is_active' => true,
        ]);

        User::create([
            'name' => 'Client Test',
            'email' => 'client@pharmatrack.com',
            'password' => bcrypt('password'),
            'role' => 'client',
            'is_active' => true,
        ]);

        // Créer des médicaments de test
        $medicaments = [
            ['name' => 'Paracétamol 500mg', 'code_produit' => 'PARA500', 'prix_unitaire' => 500, 'quantite_stock' => 100, 'categorie' => 'Antalgiques'],
            ['name' => 'Amoxicilline 250mg', 'code_produit' => 'AMOX250', 'prix_unitaire' => 1200, 'quantite_stock' => 50, 'categorie' => 'Antibiotiques'],
            ['name' => 'Ibuprofen 200mg', 'code_produit' => 'IBU200', 'prix_unitaire' => 800, 'quantite_stock' => 75, 'categorie' => 'Anti-inflammatoires'],
            ['name' => 'Vitamine C 1000mg', 'code_produit' => 'VITC1000', 'prix_unitaire' => 1500, 'quantite_stock' => 200, 'categorie' => 'Vitamines'],
            ['name' => 'Aspirine 500mg', 'code_produit' => 'ASP500', 'prix_unitaire' => 400, 'quantite_stock' => 150, 'categorie' => 'Antalgiques'],
        ];

        foreach ($medicaments as $med) {
            Medicament::create(array_merge($med, [
                'description' => "Description du médicament {$med['name']}",
                'fournisseur' => 'Fournisseur Mali',
                'quantite_minimum' => 10,
                'is_active' => true,
            ]));
        }

        // Créer des clients de test
        $clients = [
            ['nom' => 'Diallo', 'prenom' => 'Mohamed', 'email' => 'diallo@example.com', 'telephone' => '+223 66123456'],
            ['nom' => 'Traore', 'prenom' => 'Fatou', 'email' => 'traore@example.com', 'telephone' => '+223 66234567'],
            ['nom' => 'Ba', 'prenom' => 'Ibrahim', 'email' => 'ba@example.com', 'telephone' => '+223 66345678'],
            ['nom' => 'Sow', 'prenom' => 'Aissatou', 'email' => 'sow@example.com', 'telephone' => '+223 66456789'],
        ];

        foreach ($clients as $client) {
            Client::create(array_merge($client, [
                'adresse' => 'Bamako, Mali',
                'date_inscription' => now(),
                'is_active' => true,
            ]));
        }
    }
}
