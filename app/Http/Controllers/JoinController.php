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
        Log::info('Driver application started', ['data' => $request->except(['profile_photo', 'license_front', 'license_back', 'vehicle_registration_front', 'vehicle_registration_back', 'vehicle_photo_front', 'vehicle_photo_side'])]);
        
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
            
            // Step 4: Documents (increased to 10MB per file)
            'profile_photo' => 'nullable|image|mimes:jpeg,jpg,png|max:10240',
            'license_front' => 'nullable|image|mimes:jpeg,jpg,png|max:10240',
            'license_back' => 'nullable|image|mimes:jpeg,jpg,png|max:10240',
            'vehicle_registration_front' => 'nullable|image|mimes:jpeg,jpg,png|max:10240',
            'vehicle_registration_back' => 'nullable|image|mimes:jpeg,jpg,png|max:10240',
            'vehicle_photo_front' => 'nullable|image|mimes:jpeg,jpg,png|max:10240',
            'vehicle_photo_side' => 'nullable|image|mimes:jpeg,jpg,png|max:10240',
        ]);
        
        // Convert checkbox values
        $validated['has_vehicle'] = $request->has('has_vehicle') ? true : false;
        $validated['has_license'] = $request->has('has_license') ? true : false;
        
        // Handle file uploads
        $fileFields = [
            'profile_photo',
            'license_front',
            'license_back',
            'vehicle_registration_front',
            'vehicle_registration_back',
            'vehicle_photo_front',
            'vehicle_photo_side'
        ];
        
        foreach ($fileFields as $field) {
            if ($request->hasFile($field)) {
                $validated[$field] = $request->file($field)->store('driver-applications', 'public');
                Log::info('File uploaded successfully', ['field' => $field, 'path' => $validated[$field]]);
            }
        }
        
        Log::info('Files processed, creating driver application', ['validated' => array_keys($validated)]);
        
        DriverApplication::create($validated);
        
        Log::info('Driver application created successfully');
        
        return redirect()->back()->with('success', 'Votre candidature a été envoyée avec succès !');
    }
    
    public function storePartner(Request $request)
    {
        $validated = $request->validate([
            'business_name' => 'required|string|max:255',
            'contact_name' => 'required|string|max:255',
            'email' => 'required|email|unique:partner_applications,email',
            'phone' => 'required|string|max:20',
            'city' => 'required|string|max:255',
            'partner_type' => 'required|in:restaurant,store,enterprise',
            'business_type' => 'nullable|string|max:255',
            'address' => 'required|string',
            'description' => 'nullable|string',
        ]);
        
        PartnerApplication::create($validated);
        
        return redirect()->back()->with('success', 'Votre demande de partenariat a été envoyée avec succès !');
    }
}
