@extends('layouts.app')

@section('title', 'Devenir Partenaire - Faster Business')

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-[#0000ff] via-[#0000cc] to-[#2BD834] text-white overflow-hidden">
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="text-center" data-aos="fade-up">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">
                Faster Business
            </h1>
            <p class="text-xl md:text-2xl text-orange-100">
                Solutions de mobilité professionnelle pour votre entreprise
            </p>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">
                Avantages Faster Business
            </h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center p-8 bg-gradient-to-br from-green-50 to-blue-50 rounded-2xl" data-aos="fade-up" data-aos-delay="0">
                <div class="w-16 h-16 bg-gradient-to-br from-[#2BD834] to-[#22b028] rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-3xl">🚗</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Mobilité simplifiée</h3>
                <p class="text-gray-600">Transport pour vos employés et clients</p>
            </div>
            
            <div class="text-center p-8 bg-gradient-to-br from-green-50 to-blue-50 rounded-2xl" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-gradient-to-br from-[#2BD834] to-[#22b028] rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-3xl">📊</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Facturation centralisée</h3>
                <p class="text-gray-600">Gestion comptable facilitée</p>
            </div>
            
            <div class="text-center p-8 bg-gradient-to-br from-green-50 to-blue-50 rounded-2xl" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-gradient-to-br from-[#2BD834] to-[#22b028] rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-3xl">💼</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Support dédié</h3>
                <p class="text-gray-600">Un account manager pour vous</p>
            </div>
        </div>
    </div>
</section>

<!-- Application Form -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-green-50 relative overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <!-- Multiple floating bubbles with different sizes and positions -->
        <div class="absolute top-10 left-10 w-72 h-72 bg-gradient-to-br from-[#2BD834]/20 to-[#0000ff]/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-gradient-to-br from-[#0000ff]/15 to-[#2BD834]/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/2 left-1/3 w-64 h-64 bg-gradient-to-br from-green-300/20 to-blue-300/15 rounded-full blur-2xl animate-bounce" style="animation-duration: 6s;"></div>
        
        <!-- Additional medium bubbles -->
        <div class="absolute top-1/4 right-1/3 w-48 h-48 bg-gradient-to-br from-[#2BD834]/15 to-green-200/10 rounded-full blur-2xl animate-pulse" style="animation-delay: 2.5s;"></div>
        <div class="absolute bottom-1/3 left-1/4 w-56 h-56 bg-gradient-to-br from-blue-300/20 to-[#0000ff]/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 3s;"></div>
        <div class="absolute top-40 right-20 w-40 h-40 bg-gradient-to-br from-green-400/25 to-[#2BD834]/15 rounded-full blur-2xl animate-bounce" style="animation-duration: 8s;"></div>
        
        <!-- Small floating bubbles -->
        <div class="absolute top-20 left-1/2 w-32 h-32 bg-gradient-to-br from-[#0000ff]/20 to-blue-200/15 rounded-full blur-xl animate-pulse" style="animation-delay: 1.5s;"></div>
        <div class="absolute bottom-40 right-1/4 w-36 h-36 bg-gradient-to-br from-[#2BD834]/25 to-green-300/10 rounded-full blur-2xl animate-pulse" style="animation-delay: 4s;"></div>
        <div class="absolute top-60 left-20 w-44 h-44 bg-gradient-to-br from-blue-300/15 to-[#0000ff]/20 rounded-full blur-2xl animate-bounce" style="animation-duration: 7s;"></div>
        <div class="absolute bottom-60 right-40 w-28 h-28 bg-gradient-to-br from-green-200/20 to-[#2BD834]/15 rounded-full blur-xl animate-pulse" style="animation-delay: 2s;"></div>
        
        <!-- Tiny accent bubbles -->
        <div class="absolute top-1/3 left-10 w-20 h-20 bg-gradient-to-br from-[#2BD834]/30 to-green-400/20 rounded-full blur-lg animate-bounce" style="animation-duration: 5s;"></div>
        <div class="absolute bottom-1/4 right-10 w-24 h-24 bg-gradient-to-br from-[#0000ff]/25 to-blue-300/15 rounded-full blur-xl animate-pulse" style="animation-delay: 3.5s;"></div>
        
        <!-- Moving particles -->
        <div class="absolute w-2 h-2 bg-[#2BD834] rounded-full animate-particle opacity-40" style="top: 20%; left: 10%;"></div>
        <div class="absolute w-3 h-3 bg-[#0000ff] rounded-full animate-particle opacity-30" style="top: 60%; left: 80%; animation-delay: 2s;"></div>
        <div class="absolute w-2 h-2 bg-green-400 rounded-full animate-particle opacity-50" style="top: 80%; left: 30%; animation-delay: 4s;"></div>
        <div class="absolute w-2 h-2 bg-blue-400 rounded-full animate-particle opacity-40" style="top: 40%; left: 70%; animation-delay: 1s;"></div>
        <div class="absolute w-2 h-2 bg-[#2BD834] rounded-full animate-particle opacity-35" style="top: 50%; left: 15%; animation-delay: 3s;"></div>
        <div class="absolute w-3 h-3 bg-blue-300 rounded-full animate-particle opacity-45" style="top: 30%; left: 85%; animation-delay: 5s;"></div>
    </div>

    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-2xl p-8 md:p-12 border border-white/50" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">
                Formulaire d'Enregistrement – Faster Business
            </h2>
            
            @if(session('success'))
            <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-lg text-green-800">
                {{ session('success') }}
            </div>
            @endif
            
            @if($errors->any())
            <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-lg text-red-800" x-data x-init="
                // Automatically navigate to step with errors
                if({{ $errors->has('business_name') || $errors->has('business_type') || $errors->has('registration_number') || $errors->has('address') || $errors->has('website') ? 'true' : 'false' }}) {
                    $dispatch('set-step', 1);
                } else if({{ $errors->has('contact_name') || $errors->has('contact_position') || $errors->has('phone') || $errors->has('email') ? 'true' : 'false' }}) {
                    $dispatch('set-step', 2);
                } else if({{ $errors->has('monthly_rides') || $errors->has('schedule') || $errors->has('schedule_other') ? 'true' : 'false' }}) {
                    $dispatch('set-step', 3);
                }
            ">
                <div class="font-bold mb-2">❌ Erreurs de validation :</div>
                <ul class="list-disc list-inside space-y-1">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            
            <form action="{{ route('join.partner.store') }}" method="POST" class="space-y-8" x-data="{ step: 1 }" x-init="window.addEventListener('set-step', (e) => { step = e.detail; })">
                @csrf
                
                <!-- Progress Bar -->
                <div class="mb-8">
                    <div class="flex items-center justify-between mb-4">
                        <!-- Step 1 -->
                        <button type="button" @click="step = 1" class="flex flex-col items-center cursor-pointer group">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center mb-2 transition-all duration-300"
                                 :class="step >= 1 ? 'bg-[#2BD834] text-white shadow-lg' : 'bg-gray-200 text-gray-400 group-hover:bg-gray-300'">
                                <span class="font-bold">1</span>
                            </div>
                            <span class="text-xs font-semibold text-center" :class="step >= 1 ? 'text-[#2BD834]' : 'text-gray-400'">Entreprise</span>
                        </button>

                        <!-- Connector Line 1-2 -->
                        <div class="flex-1 h-1 mx-2 rounded-full transition-all duration-300" :class="step >= 2 ? 'bg-[#2BD834]' : 'bg-gray-200'"></div>

                        <!-- Step 2 -->
                        <button type="button" @click="step = 2" class="flex flex-col items-center cursor-pointer group">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center mb-2 transition-all duration-300"
                                 :class="step >= 2 ? 'bg-[#2BD834] text-white shadow-lg' : 'bg-gray-200 text-gray-400 group-hover:bg-gray-300'">
                                <span class="font-bold">2</span>
                            </div>
                            <span class="text-xs font-semibold text-center" :class="step >= 2 ? 'text-[#2BD834]' : 'text-gray-400'">Contact</span>
                        </button>

                        <!-- Connector Line 2-3 -->
                        <div class="flex-1 h-1 mx-2 rounded-full transition-all duration-300" :class="step >= 3 ? 'bg-[#2BD834]' : 'bg-gray-200'"></div>

                        <!-- Step 3 -->
                        <button type="button" @click="step = 3" class="flex flex-col items-center cursor-pointer group">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center mb-2 transition-all duration-300"
                                 :class="step >= 3 ? 'bg-[#2BD834] text-white shadow-lg' : 'bg-gray-200 text-gray-400 group-hover:bg-gray-300'">
                                <span class="font-bold">3</span>
                            </div>
                            <span class="text-xs font-semibold text-center" :class="step >= 3 ? 'text-[#2BD834]' : 'text-gray-400'">Mobilité</span>
                        </button>
                    </div>
                </div>
                
                <!-- Section 1: Informations sur l'Entreprise -->
                <div x-show="step === 1" x-transition>
                    <div class="bg-gradient-to-br from-blue-50 to-green-50 rounded-2xl p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <span class="w-10 h-10 bg-gradient-to-br from-[#2BD834] to-[#22b028] rounded-full flex items-center justify-center text-white font-bold mr-3">1</span>
                            Informations sur l'Entreprise
                        </h3>
                    
                    <div class="space-y-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Nom de l'entreprise *</label>
                            <input type="text" name="business_name" value="{{ old('business_name') }}" required
                                oninvalid="this.setCustomValidity('Veuillez entrer le nom de votre entreprise')"
                                oninput="this.setCustomValidity('')"
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                            @error('business_name')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Type d'activité *</label>
                            <input type="text" name="business_type" value="{{ old('business_type') }}" required
                                placeholder="Ex: Commerce, Services, Industrie..."
                                oninvalid="this.setCustomValidity('Veuillez entrer le type d\'activité')"
                                oninput="this.setCustomValidity('')"
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                            @error('business_type')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Numéro d'immatriculation / Registre de commerce *</label>
                            <input type="text" name="registration_number" value="{{ old('registration_number') }}" required
                                placeholder="Ex: A123456789"
                                oninvalid="this.setCustomValidity('Veuillez entrer votre numéro d\'immatriculation')"
                                oninput="this.setCustomValidity('')"
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                            @error('registration_number')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Adresse complète *</label>
                            <textarea name="address" rows="3" required
                                placeholder="Rue, Ville, Code postal"
                                oninvalid="this.setCustomValidity('Veuillez entrer l\'adresse complète')"
                                oninput="this.setCustomValidity('')"
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">{{ old('address') }}</textarea>
                            @error('address')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Site web (optionnel)</label>
                            <input type="url" name="website" value="{{ old('website') }}"
                                placeholder="https://www.example.com"
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                            @error('website')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <button type="button" @click="step = 2"
                            class="w-full mt-6 px-8 py-4 bg-gradient-to-r from-[#2BD834] to-[#22b028] text-white rounded-full font-bold text-lg hover:shadow-2xl transform hover:scale-105 transition duration-200"
                            onclick="if(!this.closest('form').querySelector('[name=business_name]').checkValidity() || !this.closest('form').querySelector('[name=business_type]').checkValidity() || !this.closest('form').querySelector('[name=registration_number]').checkValidity() || !this.closest('form').querySelector('[name=address]').checkValidity()) { this.closest('form').querySelector('[name=business_name]').reportValidity() || this.closest('form').querySelector('[name=business_type]').reportValidity() || this.closest('form').querySelector('[name=registration_number]').reportValidity() || this.closest('form').querySelector('[name=address]').reportValidity(); return false; }">
                            Continuer
                        </button>
                    </div>
                    </div>
                </div>
                
                <!-- Section 2: Personne de Contact -->
                <div x-show="step === 2" x-transition>
                    <button type="button" @click="step = 1" class="mb-6 flex items-center text-gray-600 hover:text-[#2BD834] transition">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                        Retour
                    </button>
                    
                    <div class="bg-gradient-to-br from-green-50 to-blue-50 rounded-2xl p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <span class="w-10 h-10 bg-gradient-to-br from-[#2BD834] to-[#22b028] rounded-full flex items-center justify-center text-white font-bold mr-3">2</span>
                            Personne de Contact
                        </h3>
                    
                    <div class="space-y-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Nom & Prénom *</label>
                            <input type="text" name="contact_name" value="{{ old('contact_name') }}" required
                                oninvalid="this.setCustomValidity('Veuillez entrer le nom et prénom du contact')"
                                oninput="this.setCustomValidity('')"
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                            @error('contact_name')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Fonction *</label>
                            <input type="text" name="contact_position" value="{{ old('contact_position') }}" required
                                placeholder="Ex: Directeur, Responsable RH..."
                                oninvalid="this.setCustomValidity('Veuillez entrer la fonction du contact')"
                                oninput="this.setCustomValidity('')"
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                            @error('contact_position')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">Numéro de téléphone *</label>
                                <div class="flex">
                                    <span class="inline-flex items-center gap-2 px-3 border border-r-0 border-gray-300 rounded-l-xl bg-white">
                                        <img src="{{ asset('images/tunisiac-logo-png-transparent.png') }}" alt="Tunisia" class="w-4 h-4 rounded-sm object-cover">
                                        <span class="text-gray-900 font-medium text-sm">+216</span>
                                    </span>
                                    <input type="tel" name="phone" value="{{ old('phone') }}" required 
                                        pattern="[0-9]{8}" maxlength="8" minlength="8"
                                        placeholder="12345678"
                                        oninvalid="this.setCustomValidity('Veuillez entrer exactement 8 chiffres')"
                                        oninput="this.setCustomValidity(''); if(this.value.length > 0 && (this.value.length !== 8 || !/^[0-9]{8}$/.test(this.value))) { this.setCustomValidity('Le numéro doit contenir exactement 8 chiffres'); } else { this.setCustomValidity(''); }"
                                        class="flex-1 px-4 py-3 border border-gray-300 rounded-r-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                                </div>
                                <p class="text-xs text-gray-500 mt-1">8 chiffres exactement</p>
                                @error('phone')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">E-mail professionnel *</label>
                                <input type="email" name="email" value="{{ old('email') }}" required
                                    placeholder="contact@entreprise.com"
                                    oninvalid="this.setCustomValidity('Veuillez entrer une adresse email valide')"
                                    oninput="this.setCustomValidity('')"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                                @error('email')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        
                        <button type="button" @click="step = 3"
                            class="w-full mt-6 px-8 py-4 bg-gradient-to-r from-[#2BD834] to-[#22b028] text-white rounded-full font-bold text-lg hover:shadow-2xl transform hover:scale-105 transition duration-200"
                            onclick="if(!this.closest('form').querySelector('[name=contact_name]').checkValidity() || !this.closest('form').querySelector('[name=contact_position]').checkValidity() || !this.closest('form').querySelector('[name=phone]').checkValidity() || !this.closest('form').querySelector('[name=email]').checkValidity()) { this.closest('form').querySelector('[name=contact_name]').reportValidity() || this.closest('form').querySelector('[name=contact_position]').reportValidity() || this.closest('form').querySelector('[name=phone]').reportValidity() || this.closest('form').querySelector('[name=email]').reportValidity(); return false; }">
                            Continuer
                        </button>
                    </div>
                    </div>
                </div>
                
                <!-- Section 3: Besoins en Mobilité -->
                <div x-show="step === 3" x-transition>
                    <button type="button" @click="step = 2" class="mb-6 flex items-center text-gray-600 hover:text-[#2BD834] transition">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                        Retour
                    </button>
                    
                    <div class="bg-gradient-to-br from-blue-50 to-green-50 rounded-2xl p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <span class="w-10 h-10 bg-gradient-to-br from-[#2BD834] to-[#22b028] rounded-full flex items-center justify-center text-white font-bold mr-3">3</span>
                            Besoins en Mobilité
                        </h3>
                    
                    <div class="space-y-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-3">Nombre estimé de courses mensuelles *</label>
                            <div class="space-y-3">
                                <label class="flex items-center p-4 border-2 border-gray-300 rounded-xl hover:border-[#2BD834] cursor-pointer transition">
                                    <input type="radio" name="monthly_rides" value="0-100" {{ old('monthly_rides') === '0-100' ? 'checked' : '' }} required
                                        class="w-5 h-5 text-[#2BD834] border-gray-300 focus:ring-[#2BD834]">
                                    <span class="ml-3 text-gray-700 font-medium">0 – 100 courses</span>
                                </label>
                                <label class="flex items-center p-4 border-2 border-gray-300 rounded-xl hover:border-[#2BD834] cursor-pointer transition">
                                    <input type="radio" name="monthly_rides" value="100-500" {{ old('monthly_rides') === '100-500' ? 'checked' : '' }} required
                                        class="w-5 h-5 text-[#2BD834] border-gray-300 focus:ring-[#2BD834]">
                                    <span class="ml-3 text-gray-700 font-medium">100 – 500 courses</span>
                                </label>
                                <label class="flex items-center p-4 border-2 border-gray-300 rounded-xl hover:border-[#2BD834] cursor-pointer transition">
                                    <input type="radio" name="monthly_rides" value="500-1000" {{ old('monthly_rides') === '500-1000' ? 'checked' : '' }} required
                                        class="w-5 h-5 text-[#2BD834] border-gray-300 focus:ring-[#2BD834]">
                                    <span class="ml-3 text-gray-700 font-medium">500 – 1 000 courses</span>
                                </label>
                                <label class="flex items-center p-4 border-2 border-gray-300 rounded-xl hover:border-[#2BD834] cursor-pointer transition">
                                    <input type="radio" name="monthly_rides" value="1000+" {{ old('monthly_rides') === '1000+' ? 'checked' : '' }} required
                                        class="w-5 h-5 text-[#2BD834] border-gray-300 focus:ring-[#2BD834]">
                                    <span class="ml-3 text-gray-700 font-medium">1 000+ courses</span>
                                </label>
                            </div>
                            @error('monthly_rides')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label class="block text-gray-700 font-semibold mb-3">Horaires d'utilisation *</label>
                            <div class="space-y-3">
                                <label class="flex items-center p-4 border-2 border-gray-300 rounded-xl hover:border-[#2BD834] cursor-pointer transition">
                                    <input type="checkbox" name="schedule[]" value="heures_bureau" {{ is_array(old('schedule')) && in_array('heures_bureau', old('schedule')) ? 'checked' : '' }}
                                        class="w-5 h-5 text-[#2BD834] border-gray-300 rounded focus:ring-[#2BD834]">
                                    <span class="ml-3 text-gray-700 font-medium">Heures de bureau (8h - 18h)</span>
                                </label>
                                <label class="flex items-center p-4 border-2 border-gray-300 rounded-xl hover:border-[#2BD834] cursor-pointer transition">
                                    <input type="checkbox" name="schedule[]" value="24_7" {{ is_array(old('schedule')) && in_array('24_7', old('schedule')) ? 'checked' : '' }}
                                        class="w-5 h-5 text-[#2BD834] border-gray-300 rounded focus:ring-[#2BD834]">
                                    <span class="ml-3 text-gray-700 font-medium">24/7</span>
                                </label>
                                <label class="flex items-center p-4 border-2 border-gray-300 rounded-xl hover:border-[#2BD834] cursor-pointer transition">
                                    <input type="checkbox" name="schedule[]" value="weekends" {{ is_array(old('schedule')) && in_array('weekends', old('schedule')) ? 'checked' : '' }}
                                        class="w-5 h-5 text-[#2BD834] border-gray-300 rounded focus:ring-[#2BD834]">
                                    <span class="ml-3 text-gray-700 font-medium">Week-ends uniquement</span>
                                </label>
                                <label class="flex items-start p-4 border-2 border-gray-300 rounded-xl hover:border-[#2BD834] cursor-pointer transition">
                                    <input type="checkbox" name="schedule[]" value="autres" {{ is_array(old('schedule')) && in_array('autres', old('schedule')) ? 'checked' : '' }}
                                        class="w-5 h-5 text-[#2BD834] border-gray-300 rounded focus:ring-[#2BD834] mt-1">
                                    <div class="ml-3 flex-1">
                                        <span class="text-gray-700 font-medium block mb-2">Autres :</span>
                                        <input type="text" name="schedule_other" value="{{ old('schedule_other') }}"
                                            placeholder="Précisez vos horaires..."
                                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition text-sm">
                                    </div>
                                </label>
                            </div>
                            @error('schedule')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <button type="submit"
                            class="w-full mt-6 px-8 py-4 bg-gradient-to-r from-[#2BD834] to-[#22b028] text-white rounded-full font-bold text-lg hover:shadow-2xl transform hover:scale-105 transition duration-200 shadow-lg">
                            <span class="flex items-center justify-center">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Envoyer ma demande
                            </span>
                        </button>
                    </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Custom Animation Styles -->
<style>
    @keyframes particle {
        0% { transform: translateY(0) translateX(0); opacity: 0; }
        10% { opacity: 0.5; }
        50% { opacity: 0.3; }
        90% { opacity: 0.5; }
        100% { transform: translateY(-100vh) translateX(50px); opacity: 0; }
    }
    
    .animate-particle {
        animation: particle 15s linear infinite;
    }
    
    /* Hover effect on form container */
    .bg-white\/90:hover {
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
        transition: box-shadow 0.3s ease;
    }
</style>

<!-- AOS Animation Library -->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        once: true,
    });
</script>

@endsection
