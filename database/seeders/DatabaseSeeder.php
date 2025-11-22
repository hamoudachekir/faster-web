<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Update or Create Services
        Service::updateOrCreate(
            ['slug' => 'ride'],
            [
                'name' => 'Faster Ride',
                'icon' => 'car',
                'short_description' => 'Se déplacer facilement et rapidement',
                'full_description' => 'Avec Faster Ride, commandez votre trajet en quelques secondes. Des conducteurs professionnels vous emmènent où vous voulez, en toute sécurité.',
                'features' => [
                    'Réservation instantanée',
                    'Conducteurs vérifiés',
                    'Tarifs transparents',
                    'Paiement sécurisé',
                    'Suivi en temps réel',
                ],
                'is_active' => true,
                'order' => 1,
            ]
        );

        Service::updateOrCreate(
            ['slug' => 'delivery'],
            [
                'name' => 'Faster Delivery',
                'icon' => 'truck',
                'short_description' => 'Livrer tout, partout, rapidement',
                'full_description' => 'Commandez vos repas préférés ou faites livrer vos colis. Faster Delivery assure des livraisons rapides et fiables.',
                'features' => [
                    'Livraison ultra-rapide',
                    'Large choix de restaurants',
                    'Suivi de commande',
                    'Support client 24/7',
                    'Livraison de colis',
                ],
                'is_active' => true,
                'order' => 2,
            ]
        );

        Service::updateOrCreate(
            ['slug' => 'business'],
            [
                'name' => 'Faster Business',
                'icon' => 'briefcase',
                'short_description' => 'Solutions pour entreprises et partenaires',
                'full_description' => 'Des solutions logistiques sur mesure pour votre entreprise. Gestion de flotte, livraisons professionnelles, et bien plus.',
                'features' => [
                    'Gestion de flotte',
                    'Tarifs entreprise',
                    'Facturation simplifiée',
                    'API d\'intégration',
                    'Support dédié',
                ],
                'is_active' => true,
                'order' => 3,
            ]
        );

        // Create Testimonials (if not exist)
        if (Testimonial::count() === 0) {
            Testimonial::create([
                'name' => 'Amadou Diallo',
                'role' => 'Utilisateur',
                'content' => 'Faster a changé ma façon de me déplacer ! Service rapide et conducteurs très professionnels.',
                'rating' => 5,
                'is_featured' => true,
                'is_active' => true,
            ]);

            Testimonial::create([
                'name' => 'Fatou Sow',
                'role' => 'Conductrice',
                'content' => 'Travailler avec Faster me permet d\'être autonome et de gagner un bon revenu. Je recommande !',
                'rating' => 5,
                'is_featured' => true,
                'is_active' => true,
            ]);

            Testimonial::create([
                'name' => 'Restaurant Le Palmier',
                'role' => 'Partenaire',
                'content' => 'Grâce à Faster Delivery, nos commandes ont augmenté de 40%. Excellent service !',
                'rating' => 5,
                'is_featured' => true,
                'is_active' => true,
            ]);
        }

        // Create test user (if not exist)
        if (!User::where('email', 'admin@faster.com')->exists()) {
            User::factory()->create([
                'name' => 'Admin Faster',
                'email' => 'admin@faster.com',
            ]);
        }
    }
}
