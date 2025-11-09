<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        // Create Ride service
        Service::create([
            'name' => 'Transport de Passagers',
            'slug' => 'ride',
            'short_description' => 'Service de transport rapide et sécurisé',
            'full_description' => 'Notre service de transport vous permet de vous déplacer rapidement et en toute sécurité dans la ville. Réservez un trajet en quelques clics et profitez d\'un transport confortable avec nos conducteurs vérifiés.',
            'features' => json_encode([
                'Transport rapide et fiable',
                'Conducteurs vérifiés et expérimentés',
                'Tarifs transparents et abordables',
                'Géolocalisation en temps réel',
                'Paiement sécurisé'
            ]),
            'is_active' => true,
            'order' => 1
        ]);

        // Create Delivery service
        Service::create([
            'name' => 'Livraison',
            'slug' => 'delivery',
            'short_description' => 'Livraison rapide et fiable',
            'full_description' => 'Service de livraison pour tous vos besoins, des courses aux colis. Nous livrons vos commandes rapidement et en toute sécurité à l\'adresse de votre choix.',
            'features' => json_encode([
                'Livraison express',
                'Suivi en temps réel',
                'Paiement sécurisé',
                'Livraison dans la journée',
                'Service client disponible'
            ]),
            'is_active' => true,
            'order' => 2
        ]);

        // Create Business service
        Service::create([
            'name' => 'Solutions Business',
            'slug' => 'business',
            'short_description' => 'Solutions professionnelles sur mesure',
            'full_description' => 'Des solutions adaptées aux besoins de votre entreprise. Gérez efficacement vos transports et livraisons d\'entreprise avec nos outils professionnels.',
            'features' => json_encode([
                'API disponible pour intégration',
                'Facturation entreprise',
                'Support technique dédié',
                'Tableaux de bord analytiques',
                'Gestion des équipes'
            ]),
            'is_active' => true,
            'order' => 3
        ]);

        $this->command->info('Services créés avec succès!');
    }
}