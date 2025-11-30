<?php

namespace App\Http\Controllers;

use App\Models\DriverApplication;
use App\Models\PartnerApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class JoinController extends Controller
{
    public function driver()
    {
        return view('join.driver');
    }
    
    public function partner()
    {
        return view('join.partner');
    }
    
    public function storeDriver(Request $request)
    {
        Log::info('Taxi driver application started', ['data' => $request->except(['selfie', 'permis_conduire', 'photo_vehicule', 'carte_grise', 'licence_taxi'])]);
        
        $validated = $request->validate([
            // Step 1: Personal Information
            'gender' => 'required|in:male,female',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email|unique:driver_applications,email',
            'rib' => 'nullable|string|max:255',
            
            // Step 2: Location
            'region' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            
            // Step 3: Vehicle Information
            'has_vehicle' => 'nullable|boolean',
            'has_license' => 'nullable|boolean',
            'vehicle_brand' => 'nullable|required_if:has_vehicle,1|string|max:255',
            'vehicle_model' => 'nullable|required_if:has_vehicle,1|string|max:255',
            'vehicle_year' => 'nullable|required_if:has_vehicle,1|integer|min:2000|max:' . (date('Y') + 1),
            'license_plate' => 'nullable|required_if:has_vehicle,1|string|max:255',
            'license_number' => 'nullable|string|max:255',
            'service_type' => 'required|in:ride,delivery,both',
            
            // Step 4: Documents spécifiques au taxi (10MB max par fichier)
            'selfie' => 'required|image|mimes:jpeg,jpg,png|max:10240',
            'permis_conduire' => 'required|image|mimes:jpeg,jpg,png|max:10240',
            'photo_vehicule' => 'required|image|mimes:jpeg,jpg,png|max:10240',
            'carte_grise' => 'required|image|mimes:jpeg,jpg,png|max:10240',
            'licence_taxi' => 'required|image|mimes:jpeg,jpg,png|max:10240',
        ]);
        
        // Convert checkbox values
        $validated['has_vehicle'] = $request->has('has_vehicle') ? true : false;
        $validated['has_license'] = $request->has('has_license') ? true : false;
        
        // Handle file uploads - 5 taxi-specific documents
        $fileFields = [
            'selfie',
            'permis_conduire',
            'photo_vehicule',
            'carte_grise',
            'licence_taxi'
        ];
        
        foreach ($fileFields as $field) {
            if ($request->hasFile($field)) {
                $validated[$field] = $request->file($field)->store('driver-applications', 'public');
                Log::info('Taxi document uploaded successfully', ['field' => $field, 'path' => $validated[$field]]);
            }
        }
        
        Log::info('Taxi documents processed, creating driver application', ['validated' => array_keys($validated)]);
        
        DriverApplication::create($validated);
        
        Log::info('Taxi driver application created successfully');
        
        return redirect()->back()->with('success', 'Votre candidature de chauffeur de taxi a été envoyée avec succès !');
    }
    
    public function storePartner(Request $request)
    {
        $validated = $request->validate([
            // Section 1: Company Information
            'business_name' => 'required|string|max:255',
            'business_type' => 'required|string|max:255',
            'registration_number' => 'required|string|max:255',
            'address' => 'required|string',
            'website' => 'nullable|url|max:255',
            
            // Section 2: Contact Person
            'contact_name' => 'required|string|max:255',
            'contact_position' => 'required|string|max:255',
            'phone' => 'required|string|size:8',
            'email' => 'required|email|unique:partner_applications,email',
            
            // Section 3: Mobility Needs
            'monthly_rides' => 'required|in:0-100,100-500,500-1000,1000+',
            'schedule' => 'nullable|array',
            'schedule.*' => 'string|in:heures_bureau,24_7,weekends,autres',
            'schedule_other' => 'nullable|string|max:500',
        ], [
            // Custom error messages in French
            'business_name.required' => 'Le nom de l\'entreprise est requis.',
            'business_type.required' => 'Le type d\'activité est requis.',
            'registration_number.required' => 'Le numéro d\'immatriculation est requis.',
            'address.required' => 'L\'adresse complète est requise.',
            'website.url' => 'Le site web doit être une URL valide.',
            'contact_name.required' => 'Le nom et prénom du contact sont requis.',
            'contact_position.required' => 'La fonction du contact est requise.',
            'phone.required' => 'Le numéro de téléphone est requis.',
            'phone.size' => 'Le numéro de téléphone doit contenir exactement 8 chiffres.',
            'email.required' => 'L\'email professionnel est requis.',
            'email.email' => 'L\'email doit être une adresse valide.',
            'email.unique' => 'Cet email est déjà enregistré.',
            'monthly_rides.required' => 'Veuillez sélectionner le nombre estimé de courses mensuelles.',
            'monthly_rides.in' => 'Sélection invalide pour les courses mensuelles.',
        ]);
        
        PartnerApplication::create($validated);
        
        return redirect()->back()->with('success', 'Votre demande Faster Business a été envoyée avec succès ! Nous vous contacterons bientôt.');
    }
}
