<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class FixServiceFeaturesSeeder extends Seeder
{
    public function run()
    {
        // Update existing services with proper features arrays
        $services = [
            'ride' => [
                'Transport rapide et fiable',
                'Conducteurs vérifiés et expérimentés',
                'Tarifs transparents et abordables',
                'Géolocalisation en temps réel',
                'Paiement sécurisé'
            ],
            'delivery' => [
                'Livraison express',
                'Suivi en temps réel',
                'Paiement sécurisé',
                'Livraison dans la journée',
                'Service client disponible'
            ],
            'business' => [
                'API disponible pour intégration',
                'Facturation entreprise',
                'Support technique dédié',
                'Tableaux de bord analytiques',
                'Gestion des équipes'
            ]
        ];

        foreach ($services as $slug => $features) {
            $service = Service::where('slug', $slug)->first();
            if ($service) {
                $service->update(['features' => $features]);
                $this->command->info("Updated features for service: {$service->name}");
            }
        }

        $this->command->info('Service features updated successfully!');
    }
}