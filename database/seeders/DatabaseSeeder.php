<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create(); // celle ci crée 10 utilisateurs avec données aléatoires

        // \App\Models\User::factory()->create([   // celle ci crée 1 utilisateur avec son nom et son mail 
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

// fichier utilisé pour insérer des données dans la bdd pendant le dvlpmnt, ça permet de tester et de dev des fonctionnalités sans insérer les 
// données manuellement