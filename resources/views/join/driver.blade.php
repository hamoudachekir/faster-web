@extends('layouts.app')

@section('title', 'Devenir Taxi - Faster')

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-[#0000ff] via-[#0000cc] to-[#2BD834] text-white overflow-hidden">
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="text-center" data-aos="fade-up">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">
                Devenez Taxi Faster
            </h1>
            <p class="text-xl md:text-2xl text-blue-100">
                Gagnez de l'argent en toute autonomie
            </p>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">
                Pourquoi rejoindre Faster ?
            </h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center p-8 bg-gradient-to-br from-green-50 to-blue-50 rounded-2xl" data-aos="fade-up" data-aos-delay="0">
                <div class="w-16 h-16 bg-gradient-to-br from-[#2BD834] to-[#22b028] rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-3xl">💰</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Revenus attractifs</h3>
                <p class="text-gray-600">Fixez vos propres horaires et maximisez vos gains</p>
            </div>
            
            <div class="text-center p-8 bg-gradient-to-br from-green-50 to-blue-50 rounded-2xl" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-gradient-to-br from-[#2BD834] to-[#22b028] rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-3xl">⚡</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Paiements rapides</h3>
                <p class="text-gray-600">Recevez vos revenus chaque semaine</p>
            </div>
            
            <div class="text-center p-8 bg-gradient-to-br from-green-50 to-blue-50 rounded-2xl" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-gradient-to-br from-[#2BD834] to-[#22b028] rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-3xl">🤝</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Support 24/7</h3>
                <p class="text-gray-600">Une équipe dédiée pour vous accompagner</p>
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

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-2xl p-8 md:p-12 border border-white/50" data-aos="fade-up">
            
            @if(session('success'))
            <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-lg text-green-800">
                {{ session('success') }}
            </div>
            @endif
            
            @if($errors->any())
            <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-lg text-red-800">
                <div class="font-bold mb-2">❌ Erreurs de validation :</div>
                <ul class="list-disc list-inside space-y-1">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            
            <form action="{{ route('join.driver.store') }}" method="POST" class="space-y-8" enctype="multipart/form-data" x-data="{
                step: 1,
                hasVehicle: false,
                region: '',
                vehicleBrand: '',
                files: {
                    profile_photo: null,
                    license_front: null,
                    license_back: null,
                    vehicle_registration_front: null,
                    vehicle_registration_back: null,
                    vehicle_photo_front: null,
                    vehicle_photo_side: null
                },
                delegations: {
                    'Tunis': ['La Médina', 'Bab Bhar', 'Bab Souika', 'Omrane', 'Omrane Supérieur', 'El Tahrir', 'El Menzah', 'Cité El Khadra', 'Bardo', 'Le Kram', 'La Goulette', 'Carthage', 'Sidi Bou Saïd', 'La Marsa', 'Sidi Hassine', 'Hrairia', 'Ouardia', 'El Kabaria', 'Sidi El Béchir', 'Djebel Jelloud', 'Séjoumi', 'El Ouardia'],
                    'Ariana': ['Ariana Ville', 'Ettadhamen', 'Mnihla', 'Kalâat el-Andalous', 'Raoued', 'Sidi Thabet', 'Soukra'],
                    'Ben Arous': ['Ben Arous', 'El Mourouj', 'Hammam Lif', 'Hammam Chott', 'Bou Mhel el-Bassatine', 'Ezzahra', 'Radès', 'Megrine', 'Mohamedia', 'Fouchana', 'Mornag', 'Nouvelle Médina'],
                    'Manouba': ['Manouba', 'Den Den', 'Douar Hicher', 'Oued Ellil', 'Mornaguia', 'Borj El Amri', 'El Battan', 'Tebourba'],
                    'Nabeul': ['Nabeul', 'Dar Chaabane El Fehri', 'Béni Khiar', 'El Mida', 'Hammamet', 'Grombalia', 'Bou Argoub', 'Hammam Ghezèze', 'Soliman', 'Menzel Temime', 'Korba', 'El Haouaria', 'Takelsa', 'Menzel Bouzelfa', 'Kélibia', 'Béni Khalled'],
                    'Zaghouan': ['Zaghouan', 'Zriba', 'Bir Mcherga', 'El Fahs', 'Nadhour', 'Saouaf'],
                    'Bizerte': ['Bizerte Nord', 'Bizerte Sud', 'Jarzouna', 'Mateur', 'Ghezala', 'Menzel Bourguiba', 'Tinja', 'Ghar El Melh', 'Menzel Jemil', 'El Alia', 'Ras Jebel', 'Sejnane', 'Joumine', 'Utique'],
                    'Béja': ['Béja Nord', 'Béja Sud', 'Amdoun', 'Nefza', 'Téboursouk', 'Tibar', 'Testour', 'Goubellat', 'Mejez el-Bab'],
                    'Jendouba': ['Jendouba', 'Jendouba Nord', 'Bou Salem', 'Tabarka', 'Aïn Draham', 'Fernana', 'Balta-Bou Aouane', 'Ghardimaou', 'Oued Meliz'],
                    'Kef': ['Le Kef Est', 'Le Kef Ouest', 'Nebeur', 'Sakiet Sidi Youssef', 'Tajerouine', 'Kalaat Senan', 'Kalâat Khasba', 'Jerissa', 'El Ksour', 'Dahmani', 'Sers'],
                    'Siliana': ['Siliana Nord', 'Siliana Sud', 'Bou Arada', 'Gaâfour', 'El Krib', 'El Aroussa', 'Bargou', 'Kesra', 'Rouhia', 'Makthar', 'Sidi Bou Rouis'],
                    'Sousse': ['Sousse Ville', 'Sousse Jawhara', 'Sousse Riadh', 'Sousse Sidi Abdelhamid', 'Hammam Sousse', 'Akouda', 'Kalâa Kebira', 'Sidi Bou Ali', 'Hergla', 'Enfidha', 'Bouficha', 'Kondar', 'Sidi El Hani', 'M\'saken', 'Kalâa Seghira', 'Zaouiet Sousse'],
                    'Monastir': ['Monastir', 'Ouerdanine', 'Sahline', 'Zéramdine', 'Beni Hassen', 'Jammel', 'Bembla', 'Moknine', 'Bekalta', 'Téboulba', 'Ksar Helal', 'Ksibet el-Médiouni', 'Sayada-Lamta-Bou Hajar'],
                    'Mahdia': ['Mahdia', 'Boumerdès', 'Ouled Chamekh', 'Chorbane', 'Hbira', 'Souassi', 'El Jem', 'Chebba', 'Melloulèche', 'Sidi Alouane', 'Ksour Essef'],
                    'Sfax': ['Sfax Ville', 'Sfax Ouest', 'Sakiet Ezzit', 'Sakiet Eddaïer', 'Sfax Sud', 'Thyna', 'Agareb', 'Jebiniana', 'El Amra', 'El Hencha', 'Menzel Chaker', 'Ghraïba', 'Bir Ali Ben Khalifa', 'Skhira', 'Mahares', 'Kerkennah'],
                    'Kairouan': ['Kairouan Nord', 'Kairouan Sud', 'Chebika', 'Sbikha', 'Oueslatia', 'Haffouz', 'El Alâa', 'Hajeb El Ayoun', 'Nasrallah', 'Cherarda', 'Bouhajla'],
                    'Kasserine': ['Kasserine Nord', 'Kasserine Sud', 'Ezzouhour', 'Hassi El Ferid', 'Sbeitla', 'Sbiba', 'Djedeliane', 'El Ayoun', 'Thala', 'Hidra', 'Foussana', 'Feriana', 'Mejel Bel Abbès'],
                    'Sidi Bouzid': ['Sidi Bouzid Ouest', 'Sidi Bouzid Est', 'Cebbala Ouled Asker', 'Bir El Hafey', 'Sidi Ali Ben Aoun', 'Menzel Bouzaiane', 'Meknassy', 'Souk Jedid', 'Mezzouna', 'Regueb', 'Ouled Haffouz', 'Jilma'],
                    'Gabès': ['Gabès Ville', 'Gabès Ouest', 'Gabès Sud', 'Ghannouch', 'El Metouia', 'Menzel El Habib', 'Nouvelle Matmata', 'Matmata', 'Mareth', 'El Hamma'],
                    'Médenine': ['Médenine Nord', 'Médenine Sud', 'Beni Khedache', 'Ben Gardane', 'Zarzis', 'Djerba - Houmt Souk', 'Djerba - Midoun', 'Djerba - Ajim', 'Sidi Makhlouf'],
                    'Tataouine': ['Tataouine Nord', 'Tataouine Sud', 'Bir Lahmar', 'Ghomrassen', 'Dhehiba', 'Remada', 'Smar'],
                    'Gafsa': ['Gafsa Nord', 'Gafsa Sud', 'Sidi Aïch', 'El Ksar', 'Moularès', 'Redeyef', 'Métlaoui', 'Mdhila', 'El Guettar', 'Sned', 'Belkhir'],
                    'Tozeur': ['Tozeur', 'Degache', 'Tameghza', 'Nefta', 'Hazoua'],
                    'Kébili': ['Kébili Sud', 'Kébili Nord', 'Souk Lahad', 'Douz Nord', 'Douz Sud', 'El Faouar']
                },
                carModels: {
                    'Renault': ['Clio', 'Mégane', 'Fluence', 'Symbol', 'Logan', 'Sandero', 'Duster', 'Captur', 'Kadjar', 'Koleos', 'Talisman', 'Twingo', 'Zoe'],
                    'Peugeot': ['208', '301', '308', '408', '508', '2008', '3008', '5008', 'Partner', 'Rifter', 'Expert'],
                    'Citroën': ['C3', 'C4', 'C5', 'C-Elysée', 'C3 Aircross', 'C4 Cactus', 'C5 Aircross', 'Berlingo', 'Jumpy'],
                    'Volkswagen': ['Polo', 'Golf', 'Jetta', 'Passat', 'Tiguan', 'Touareg', 'T-Roc', 'T-Cross', 'Arteon', 'Caddy'],
                    'Hyundai': ['i10', 'i20', 'i30', 'Accent', 'Elantra', 'Sonata', 'Tucson', 'Santa Fe', 'Kona', 'Creta', 'Venue'],
                    'Kia': ['Picanto', 'Rio', 'Cerato', 'Optima', 'Sportage', 'Sorento', 'Stonic', 'Seltos', 'Niro', 'Soul'],
                    'Toyota': ['Yaris', 'Corolla', 'Camry', 'Avensis', 'RAV4', 'Land Cruiser', 'Hilux', 'C-HR', 'Prius', 'Auris'],
                    'Nissan': ['Micra', 'Sunny', 'Sentra', 'Altima', 'Qashqai', 'X-Trail', 'Juke', 'Kicks', 'Patrol', 'Navara'],
                    'Ford': ['Fiesta', 'Focus', 'Fusion', 'Mondeo', 'EcoSport', 'Kuga', 'Edge', 'Explorer', 'Ranger', 'Mustang'],
                    'Fiat': ['Panda', '500', 'Tipo', 'Punto', 'Bravo', 'Linea', '500X', '500L', 'Doblo', 'Fiorino'],
                    'Seat': ['Ibiza', 'Leon', 'Toledo', 'Arona', 'Ateca', 'Tarraco', 'Alhambra'],
                    'Skoda': ['Fabia', 'Rapid', 'Octavia', 'Superb', 'Kamiq', 'Karoq', 'Kodiaq'],
                    'Dacia': ['Sandero', 'Logan', 'Duster', 'Lodgy', 'Dokker'],
                    'Suzuki': ['Alto', 'Celerio', 'Swift', 'Baleno', 'Dzire', 'Ciaz', 'Vitara', 'S-Cross', 'Jimny'],
                    'Mazda': ['Mazda2', 'Mazda3', 'Mazda6', 'CX-3', 'CX-5', 'CX-9', 'MX-5'],
                    'Mercedes-Benz': ['Classe A', 'Classe B', 'Classe C', 'Classe E', 'Classe S', 'CLA', 'CLS', 'GLA', 'GLB', 'GLC', 'GLE', 'GLS', 'Vito', 'Sprinter'],
                    'BMW': ['Serie 1', 'Serie 2', 'Serie 3', 'Serie 4', 'Serie 5', 'Serie 7', 'X1', 'X2', 'X3', 'X4', 'X5', 'X6', 'X7', 'Z4'],
                    'Audi': ['A1', 'A3', 'A4', 'A5', 'A6', 'A7', 'A8', 'Q2', 'Q3', 'Q5', 'Q7', 'Q8', 'TT'],
                    'Autre': []
                },
                get filteredDelegations() {
                    return this.region ? (this.delegations[this.region] || []) : [];
                },
                get filteredModels() {
                    return this.vehicleBrand ? (this.carModels[this.vehicleBrand] || []) : [];
                },
                previewFile(input, key) {
                    const file = input.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = (e) => {
                            this.files[key] = { name: file.name, url: e.target.result };
                        };
                        reader.readAsDataURL(file);
                    }
                },
                removeFile(key) {
                    this.files[key] = null;
                    document.getElementById(key).value = '';
                }
            }" 
            x-init="window.addEventListener('set-step', (e) => { step = e.detail; })"
            enctype="multipart/form-data">
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
                            <span class="text-xs font-semibold text-center" :class="step >= 1 ? 'text-[#2BD834]' : 'text-gray-400'">Info<br>personnelles</span>
                        </button>

                        <!-- Connector Line 1-2 -->
                        <div class="flex-1 h-1 mx-2 rounded-full transition-all duration-300" :class="step >= 2 ? 'bg-[#2BD834]' : 'bg-gray-200'"></div>

                        <!-- Step 2 -->
                        <button type="button" @click="step = 2" class="flex flex-col items-center cursor-pointer group">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center mb-2 transition-all duration-300"
                                 :class="step >= 2 ? 'bg-[#2BD834] text-white shadow-lg' : 'bg-gray-200 text-gray-400 group-hover:bg-gray-300'">
                                <span class="font-bold">2</span>
                            </div>
                            <span class="text-xs font-semibold text-center" :class="step >= 2 ? 'text-[#2BD834]' : 'text-gray-400'">Localisation</span>
                        </button>

                        <!-- Connector Line 2-3 -->
                        <div class="flex-1 h-1 mx-2 rounded-full transition-all duration-300" :class="step >= 3 ? 'bg-[#2BD834]' : 'bg-gray-200'"></div>

                        <!-- Step 3 -->
                        <button type="button" @click="step = 3" class="flex flex-col items-center cursor-pointer group">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center mb-2 transition-all duration-300"
                                 :class="step >= 3 ? 'bg-[#2BD834] text-white shadow-lg' : 'bg-gray-200 text-gray-400 group-hover:bg-gray-300'">
                                <span class="font-bold">3</span>
                            </div>
                            <span class="text-xs font-semibold text-center" :class="step >= 3 ? 'text-[#2BD834]' : 'text-gray-400'">Véhicule</span>
                        </button>

                        <!-- Connector Line 3-4 -->
                        <div class="flex-1 h-1 mx-2 rounded-full transition-all duration-300" :class="step >= 4 ? 'bg-[#2BD834]' : 'bg-gray-200'"></div>

                        <!-- Step 4 -->
                        <button type="button" @click="step = 4" class="flex flex-col items-center cursor-pointer group">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center mb-2 transition-all duration-300"
                                 :class="step >= 4 ? 'bg-[#2BD834] text-white shadow-lg' : 'bg-gray-200 text-gray-400 group-hover:bg-gray-300'">
                                <span class="font-bold">4</span>
                            </div>
                            <span class="text-xs font-semibold text-center" :class="step >= 4 ? 'text-[#2BD834]' : 'text-gray-400'">Documents</span>
                        </button>
                    </div>
                </div>                <!-- Step 1: Personal Information -->
                <div x-show="step === 1" x-transition>
                    <div class="bg-gradient-to-br from-blue-50 to-green-50 rounded-2xl p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <span class="w-10 h-10 bg-gradient-to-br from-[#2BD834] to-[#22b028] rounded-full flex items-center justify-center text-white font-bold mr-3">1</span>
                            Informations du taxi
                        </h3>

                    <div class="space-y-6">
                        <!-- Gender -->
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Sexe *</label>
                            <select name="gender" required
                                oninvalid="this.setCustomValidity('Veuillez sélectionner votre sexe')"
                                oninput="this.setCustomValidity('')"
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                                <option value="">Sélectionnez...</option>
                                <option value="male" {{ old('gender') === 'male' ? 'selected' : '' }}>Homme</option>
                                <option value="female" {{ old('gender') === 'female' ? 'selected' : '' }}>Femme</option>
                            </select>
                            @error('gender')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">Prénom *</label>
                                <input type="text" name="first_name" value="{{ old('first_name') }}" required
                                    oninvalid="this.setCustomValidity('Veuillez entrer votre prénom')"
                                    oninput="this.setCustomValidity('')"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                                @error('first_name')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">Nom *</label>
                                <input type="text" name="last_name" value="{{ old('last_name') }}" required
                                    oninvalid="this.setCustomValidity('Veuillez entrer votre nom')"
                                    oninput="this.setCustomValidity('')"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                                @error('last_name')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Date of Birth -->
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Date de naissance *</label>
                            <input type="date" name="date_of_birth" value="{{ old('date_of_birth') }}" required
                                oninvalid="this.setCustomValidity('Veuillez sélectionner votre date de naissance')"
                                oninput="this.setCustomValidity('')"
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                            @error('date_of_birth')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">Email *</label>
                                <input type="email" name="email" value="{{ old('email') }}" required
                                    oninvalid="this.setCustomValidity('Veuillez entrer une adresse email valide')"
                                    oninput="this.setCustomValidity('')"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                                @error('email')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            
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
                        </div>
                        <!-- Checkboxes -->
                        <div class="space-y-3">
                            <label class="flex items-start">
                                <input type="checkbox" name="has_license" value="1" {{ old('has_license') ? 'checked' : '' }}
                                    class="w-5 h-5 text-[#2BD834] border-gray-300 rounded focus:ring-[#2BD834] mt-1">
                                <span class="ml-3 text-gray-700">J'ai un permis de conduire valide de plus de 2 ans</span>
                            </label>
                        </div>

                        <button type="button" @click="step = 2"
                            class="w-full px-8 py-4 bg-gradient-to-r from-[#2BD834] to-[#22b028] text-white rounded-full font-bold text-lg hover:shadow-2xl transform hover:scale-105 transition duration-200"
                            onclick="if(!this.closest('form').querySelector('[name=gender]').checkValidity() || !this.closest('form').querySelector('[name=first_name]').checkValidity() || !this.closest('form').querySelector('[name=last_name]').checkValidity() || !this.closest('form').querySelector('[name=date_of_birth]').checkValidity() || !this.closest('form').querySelector('[name=email]').checkValidity() || !this.closest('form').querySelector('[name=phone]').checkValidity()) { this.closest('form').querySelector('[name=gender]').reportValidity() || this.closest('form').querySelector('[name=first_name]').reportValidity() || this.closest('form').querySelector('[name=last_name]').reportValidity() || this.closest('form').querySelector('[name=date_of_birth]').reportValidity() || this.closest('form').querySelector('[name=email]').reportValidity() || this.closest('form').querySelector('[name=phone]').reportValidity(); return false; }">
                            Continuer
                        </button>
                    </div>
                    </div>
                </div>

                <!-- Step 2: Location -->
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
                            Localisation
                        </h3>

                    <div class="space-y-6">
                        <!-- Region -->
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Région *</label>
                            <select name="region" x-model="region" required
                                oninvalid="this.setCustomValidity('Veuillez sélectionner votre région')"
                                oninput="this.setCustomValidity('')"
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                                <option value="">Sélectionnez votre région</option>
                                <option value="Tunis">Tunis</option>
                                <option value="Ariana">Ariana</option>
                                <option value="Ben Arous">Ben Arous</option>
                                <option value="Manouba">Manouba</option>
                                <option value="Nabeul">Nabeul</option>
                                <option value="Zaghouan">Zaghouan</option>
                                <option value="Bizerte">Bizerte</option>
                                <option value="Béja">Béja</option>
                                <option value="Jendouba">Jendouba</option>
                                <option value="Kef">Kef</option>
                                <option value="Siliana">Siliana</option>
                                <option value="Sousse">Sousse</option>
                                <option value="Monastir">Monastir</option>
                                <option value="Mahdia">Mahdia</option>
                                <option value="Sfax">Sfax</option>
                                <option value="Kairouan">Kairouan</option>
                                <option value="Kasserine">Kasserine</option>
                                <option value="Sidi Bouzid">Sidi Bouzid</option>
                                <option value="Gabès">Gabès</option>
                                <option value="Médenine">Médenine</option>
                                <option value="Tataouine">Tataouine</option>
                                <option value="Gafsa">Gafsa</option>
                                <option value="Tozeur">Tozeur</option>
                                <option value="Kébili">Kébili</option>
                            </select>
                            @error('region')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Delegation / City -->
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Délégation *</label>
                            <select name="city" required
                                :disabled="!region"
                                oninvalid="this.setCustomValidity('Veuillez sélectionner votre délégation')"
                                oninput="this.setCustomValidity('')"
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition disabled:bg-gray-100 disabled:cursor-not-allowed">
                                <option value="" x-show="!region">Veuillez d'abord sélectionner une région</option>
                                <option value="" x-show="region">Sélectionnez votre délégation</option>
                                <template x-for="delegation in filteredDelegations" :key="delegation">
                                    <option :value="delegation" x-text="delegation"></option>
                                </template>
                            </select>
                            @error('city')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="button" @click="step = 3"
                            class="w-full px-8 py-4 bg-gradient-to-r from-[#2BD834] to-[#22b028] text-white rounded-full font-bold text-lg hover:shadow-2xl transform hover:scale-105 transition duration-200"
                            onclick="if(!this.closest('form').querySelector('[name=region]').checkValidity() || !this.closest('form').querySelector('[name=city]').checkValidity()) { this.closest('form').querySelector('[name=region]').reportValidity() || this.closest('form').querySelector('[name=city]').reportValidity(); return false; }">
                            Continuer
                        </button>
                    </div>
                    </div>
                </div>

                <!-- Step 3: Vehicle Information -->
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
                            Informations du véhicule taxi
                        </h3>

                    <div class="space-y-6">
                        <!-- Car Brand -->
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Marque *</label>
                            <select name="vehicle_brand" x-model="vehicleBrand"
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                                <option value="">Sélectionnez la marque</option>
                                <option value="Renault">Renault</option>
                                <option value="Peugeot">Peugeot</option>
                                <option value="Citroën">Citroën</option>
                                <option value="Volkswagen">Volkswagen</option>
                                <option value="Hyundai">Hyundai</option>
                                <option value="Kia">Kia</option>
                                <option value="Toyota">Toyota</option>
                                <option value="Nissan">Nissan</option>
                                <option value="Ford">Ford</option>
                                <option value="Fiat">Fiat</option>
                                <option value="Seat">Seat</option>
                                <option value="Skoda">Skoda</option>
                                <option value="Dacia">Dacia</option>
                                <option value="Suzuki">Suzuki</option>
                                <option value="Mazda">Mazda</option>
                                <option value="Mercedes-Benz">Mercedes-Benz</option>
                                <option value="BMW">BMW</option>
                                <option value="Audi">Audi</option>
                                <option value="Autre">Autre</option>
                            </select>
                            @error('vehicle_brand')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Car Model -->
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Modèle *</label>
                            <select name="vehicle_model"
                                :disabled="!vehicleBrand"
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition disabled:bg-gray-100 disabled:cursor-not-allowed">
                                <option value="" x-show="!vehicleBrand">Veuillez d'abord sélectionner une marque</option>
                                <option value="" x-show="vehicleBrand">Sélectionnez un modèle</option>
                                <template x-for="model in filteredModels" :key="model">
                                    <option :value="model" x-text="model"></option>
                                </template>
                            </select>
                            @error('vehicle_model')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Year -->
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">Année *</label>
                                <select name="vehicle_year"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                                    <option value="">Année</option>
                                    @for($year = date('Y'); $year >= 2000; $year--)
                                        <option value="{{ $year }}">{{ $year }}</option>
                                    @endfor
                                </select>
                                @error('vehicle_year')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- License Plate -->
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">Plaque d'immatriculation *</label>
                                <input type="text" name="license_plate" value="{{ old('license_plate') }}"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                                @error('license_plate')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- License Number -->
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Numéro de permis de conduire</label>
                            <input type="text" name="license_number" value="{{ old('license_number') }}"
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                            @error('license_number')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Service Type -->
                    <div class="mt-6">
                        <label class="block text-gray-700 font-semibold mb-2">Type de service *</label>
                        <select name="service_type" required
                            oninvalid="this.setCustomValidity('Veuillez sélectionner le type de service')"
                            oninput="this.setCustomValidity('')"
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                            <option value="ride" {{ old('service_type') === 'ride' ? 'selected' : '' }}>Transport de personnes (Ride)</option>
                            <option value="delivery" {{ old('service_type') === 'delivery' ? 'selected' : '' }}>Livraison (Delivery)</option>
                            <option value="both" {{ old('service_type') === 'both' ? 'selected' : '' }}>Les deux</option>
                        </select>
                        @error('service_type')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="button" @click="step = 4"
                        class="w-full px-8 py-4 bg-gradient-to-r from-[#2BD834] to-[#22b028] text-white rounded-full font-bold text-lg hover:shadow-2xl transform hover:scale-105 transition duration-200"
                        onclick="if(!this.closest('form').querySelector('[name=service_type]').checkValidity()) { this.closest('form').querySelector('[name=service_type]').reportValidity(); return false; }">
                        Continuer
                    </button>
                    </div>
                </div>

                <!-- Step 4: Documents Upload -->
                <div x-show="step === 4" x-transition>
                    <button type="button" @click="step = 3" class="mb-6 flex items-center text-gray-600 hover:text-[#2BD834] transition">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                        Retour
                    </button>

                    <div class="bg-gradient-to-br from-green-50 to-blue-50 rounded-2xl p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2 flex items-center justify-center">
                            <span class="w-10 h-10 bg-gradient-to-br from-[#2BD834] to-[#22b028] rounded-full flex items-center justify-center text-white font-bold mr-3">4</span>
                            Documents requis pour chauffeur de taxi
                        </h3>
                        <p class="text-gray-600 text-center mb-8">Veuillez télécharger les 5 documents obligatoires ci-dessous</p>

                    <div class="space-y-6">
                        <!-- 1. Selfie du conducteur -->
                        <div class="border-2 border-dashed border-gray-300 rounded-2xl p-6 hover:border-[#2BD834] transition">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mr-4">
                                    <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center">
                                        <span class="text-3xl">📷</span>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-bold text-gray-900 mb-1">Selfie du taxi</h3>
                                    <p class="text-sm text-gray-600 mb-3">Une photo claire de votre visage pour identification</p>
                                    <ul class="space-y-2 text-sm mb-4">
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="text-gray-700"><strong>Face visible:</strong> Regardez directement la caméra, visage bien éclairé</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="text-gray-700"><strong>Sans accessoires:</strong> Pas de chapeau, casquette ou lunettes de soleil</span>
                                        </li>
                                    </ul>
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="text-gray-700"><strong>Face visible:</strong> Regardez directement la caméra, visage bien éclairé</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="text-gray-700"><strong>Sans accessoires:</strong> Pas de chapeau, casquette ou lunettes de soleil</span>
                                        </li>
                                    </ul>
                                    
                                    <!-- File Upload Button (shown when no file) -->
                                    <div x-show="!files.selfie">
                                        <input type="file" name="selfie" accept="image/*" class="hidden" id="selfie" 
                                               @change="previewFile($event.target, 'selfie')">
                                        <label for="selfie" class="inline-flex items-center px-6 py-3 bg-purple-600 text-gray-900 rounded-full font-semibold hover:bg-purple-700 transition cursor-pointer">
                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                            </svg>
                                            Ajouter depuis mon appareil
                                        </label>
                                    </div>

                                    <!-- File Preview (shown when file uploaded) -->
                                    <div x-show="files.selfie" x-transition class="mt-4">
                                        <div class="flex items-center space-x-4">
                                            <div class="relative">
                                                <img :src="files.selfie?.url" alt="Aperçu" class="w-32 h-32 object-cover rounded-xl border-2 border-gray-200">
                                            </div>
                                            <div class="flex-1">
                                                <div class="flex items-center justify-between bg-green-50 border-2 border-green-500 rounded-xl px-4 py-3">
                                                    <div class="flex items-center space-x-3">
                                                        <svg class="w-6 h-6 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                        </svg>
                                                        <div>
                                                            <p class="font-semibold text-gray-900">Fichier ajouté</p>
                                                            <p class="text-sm text-gray-600" x-text="files.selfie?.name"></p>
                                                        </div>
                                                    </div>
                                                    <button type="button" @click="removeFile('selfie')" class="p-2 hover:bg-red-100 rounded-lg transition">
                                                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="mt-2 flex items-center text-sm text-gray-600">
                                                    <svg class="w-4 h-4 mr-1 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                                                    </svg>
                                                    Aperçu disponible
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 2. Permis de conduire -->
                        <div class="border-2 border-dashed border-gray-300 rounded-2xl p-6 hover:border-[#2BD834] transition">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mr-4">
                                    <div class="w-16 h-16 bg-pink-100 rounded-xl flex items-center justify-center">
                                        <span class="text-3xl">🪪</span>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-bold text-gray-900 mb-1">Permis de conduire</h3>
                                    <p class="text-sm text-gray-600 mb-3">Votre permis de conduire valide (recto et verso visible)</p>
                                    <ul class="space-y-2 text-sm mb-4">
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="text-gray-700"><strong>Document complet:</strong> Photo claire, tous les détails lisibles</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="text-gray-700"><strong>Valide:</strong> Permis non expiré avec catégorie appropriée</span>
                                        </li>
                                    </ul>
                                    
                                    <!-- File Upload Button (shown when no file) -->
                                    <div x-show="!files.permis_conduire">
                                        <input type="file" name="permis_conduire" accept="image/*" class="hidden" id="permis_conduire" 
                                               @change="previewFile($event.target, 'permis_conduire')">
                                        <label for="permis_conduire" class="inline-flex items-center px-6 py-3 bg-purple-600 text-gray-900 rounded-full font-semibold hover:bg-purple-700 transition cursor-pointer">
                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                            </svg>
                                            Ajouter depuis mon appareil
                                        </label>
                                    </div>

                                    <!-- File Preview (shown when file uploaded) -->
                                    <div x-show="files.permis_conduire" x-transition class="mt-4">
                                        <div class="flex items-center space-x-4">
                                            <div class="relative">
                                                <img :src="files.permis_conduire?.url" alt="Aperçu" class="w-32 h-32 object-cover rounded-xl border-2 border-gray-200">
                                            </div>
                                            <div class="flex-1">
                                                <div class="flex items-center justify-between bg-green-50 border-2 border-green-500 rounded-xl px-4 py-3">
                                                    <div class="flex items-center space-x-3">
                                                        <svg class="w-6 h-6 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                        </svg>
                                                        <div>
                                                            <p class="font-semibold text-gray-900">Fichier ajouté</p>
                                                            <p class="text-sm text-gray-600" x-text="files.permis_conduire?.name"></p>
                                                        </div>
                                                    </div>
                                                    <button type="button" @click="removeFile('permis_conduire')" class="p-2 hover:bg-red-100 rounded-lg transition">
                                                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="mt-2 flex items-center text-sm text-gray-600">
                                                    <svg class="w-4 h-4 mr-1 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                                                    </svg>
                                                    Aperçu disponible
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 3. Photo du véhicule taxi -->
                        <div class="border-2 border-dashed border-gray-300 rounded-2xl p-6 hover:border-[#2BD834] transition">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mr-4">
                                    <div class="w-16 h-16 bg-yellow-100 rounded-xl flex items-center justify-center">
                                        <span class="text-3xl">🚕</span>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-bold text-gray-900 mb-1">Photo du véhicule taxi</h3>
                                    <p class="text-sm text-gray-600 mb-3">Photo claire de votre taxi avec plaque visible</p>
                                    <ul class="space-y-2 text-sm mb-4">
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="text-gray-700"><strong>Vue complète:</strong> Plaque d'immatriculation visible</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="text-gray-700"><strong>Bonne qualité:</strong> Photo nette, éclairage suffisant</span>
                                        </li>
                                    </ul>
                                    
                                    <!-- File Upload Button (shown when no file) -->
                                    <div x-show="!files.photo_vehicule">
                                        <input type="file" name="photo_vehicule" accept="image/*" class="hidden" id="photo_vehicule" 
                                               @change="previewFile($event.target, 'photo_vehicule')">
                                        <label for="photo_vehicule" class="inline-flex items-center px-6 py-3 bg-purple-600 text-gray-900 rounded-full font-semibold hover:bg-purple-700 transition cursor-pointer">
                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                            </svg>
                                            Ajouter depuis mon appareil
                                        </label>
                                    </div>

                                    <!-- File Preview (shown when file uploaded) -->
                                    <div x-show="files.photo_vehicule" x-transition class="mt-4">
                                        <div class="flex items-center space-x-4">
                                            <div class="relative">
                                                <img :src="files.photo_vehicule?.url" alt="Aperçu" class="w-32 h-32 object-cover rounded-xl border-2 border-gray-200">
                                            </div>
                                            <div class="flex-1">
                                                <div class="flex items-center justify-between bg-green-50 border-2 border-green-500 rounded-xl px-4 py-3">
                                                    <div class="flex items-center space-x-3">
                                                        <svg class="w-6 h-6 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                        </svg>
                                                        <div>
                                                            <p class="font-semibold text-gray-900">Fichier ajouté</p>
                                                            <p class="text-sm text-gray-600" x-text="files.photo_vehicule?.name"></p>
                                                        </div>
                                                    </div>
                                                    <button type="button" @click="removeFile('photo_vehicule')" class="p-2 hover:bg-red-100 rounded-lg transition">
                                                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="mt-2 flex items-center text-sm text-gray-600">
                                                    <svg class="w-4 h-4 mr-1 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                                                    </svg>
                                                    Aperçu disponible
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 4. Carte grise (Certificat d'immatriculation) -->
                        <div class="border-2 border-dashed border-gray-300 rounded-2xl p-6 hover:border-[#2BD834] transition">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mr-4">
                                    <div class="w-16 h-16 bg-gray-100 rounded-xl flex items-center justify-center">
                                        <span class="text-3xl">📄</span>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-bold text-gray-900 mb-1">Carte grise (Certificat d'immatriculation)</h3>
                                    <p class="text-sm text-gray-600 mb-3">Document officiel d'immatriculation du véhicule</p>
                                    <ul class="space-y-2 text-sm mb-4">
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="text-gray-700"><strong>Document complet:</strong> Recto et verso lisibles</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="text-gray-700"><strong>À jour:</strong> Certificat valide et à votre nom</span>
                                        </li>
                                    </ul>
                                    
                                    <!-- File Upload Button (shown when no file) -->
                                    <div x-show="!files.carte_grise">
                                        <input type="file" name="carte_grise" accept="image/*" class="hidden" id="carte_grise" 
                                               @change="previewFile($event.target, 'carte_grise')">
                                        <label for="carte_grise" class="inline-flex items-center px-6 py-3 bg-purple-600 text-gray-900 rounded-full font-semibold hover:bg-purple-700 transition cursor-pointer">
                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                            </svg>
                                            Ajouter depuis mon appareil
                                        </label>
                                    </div>

                                    <!-- File Preview (shown when file uploaded) -->
                                    <div x-show="files.carte_grise" x-transition class="mt-4">
                                        <div class="flex items-center space-x-4">
                                            <div class="relative">
                                                <img :src="files.carte_grise?.url" alt="Aperçu" class="w-32 h-32 object-cover rounded-xl border-2 border-gray-200">
                                            </div>
                                            <div class="flex-1">
                                                <div class="flex items-center justify-between bg-green-50 border-2 border-green-500 rounded-xl px-4 py-3">
                                                    <div class="flex items-center space-x-3">
                                                        <svg class="w-6 h-6 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                        </svg>
                                                        <div>
                                                            <p class="font-semibold text-gray-900">Fichier ajouté</p>
                                                            <p class="text-sm text-gray-600" x-text="files.carte_grise?.name"></p>
                                                        </div>
                                                    </div>
                                                    <button type="button" @click="removeFile('carte_grise')" class="p-2 hover:bg-red-100 rounded-lg transition">
                                                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="mt-2 flex items-center text-sm text-gray-600">
                                                    <svg class="w-4 h-4 mr-1 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                                                    </svg>
                                                    Aperçu disponible
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 5. Licence de taxi -->
                        <div class="border-2 border-dashed border-gray-300 rounded-2xl p-6 hover:border-[#2BD834] transition">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mr-4">
                                    <div class="w-16 h-16 bg-green-100 rounded-xl flex items-center justify-center">
                                        <span class="text-3xl">📋</span>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-bold text-gray-900 mb-1">Licence de taxi</h3>
                                    <p class="text-sm text-gray-600 mb-3">Votre licence officielle d'exploitation de taxi</p>
                                    <ul class="space-y-2 text-sm mb-4">
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="text-gray-700"><strong>Document officiel:</strong> Licence valide délivrée par les autorités</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="text-gray-700"><strong>En cours de validité:</strong> Tous les détails clairement visibles</span>
                                        </li>
                                    </ul>
                                    
                                    <!-- File Upload Button (shown when no file) -->
                                    <div x-show="!files.licence_taxi">
                                        <input type="file" name="licence_taxi" accept="image/*" class="hidden" id="licence_taxi" 
                                               @change="previewFile($event.target, 'licence_taxi')">
                                        <label for="licence_taxi" class="inline-flex items-center px-6 py-3 bg-purple-600 text-gray-900 rounded-full font-semibold hover:bg-purple-700 transition cursor-pointer">
                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                            </svg>
                                            Ajouter depuis mon appareil
                                        </label>
                                    </div>

                                    <!-- File Preview (shown when file uploaded) -->
                                    <div x-show="files.licence_taxi" x-transition class="mt-4">
                                        <div class="flex items-center space-x-4">
                                            <div class="relative">
                                                <img :src="files.licence_taxi?.url" alt="Aperçu" class="w-32 h-32 object-cover rounded-xl border-2 border-gray-200">
                                            </div>
                                            <div class="flex-1">
                                                <div class="flex items-center justify-between bg-green-50 border-2 border-green-500 rounded-xl px-4 py-3">
                                                    <div class="flex items-center space-x-3">
                                                        <svg class="w-6 h-6 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                        </svg>
                                                        <div>
                                                            <p class="font-semibold text-gray-900">Fichier ajouté</p>
                                                            <p class="text-sm text-gray-600" x-text="files.licence_taxi?.name"></p>
                                                        </div>
                                                    </div>
                                                    <button type="button" @click="removeFile('licence_taxi')" class="p-2 hover:bg-red-100 rounded-lg transition">
                                                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="mt-2 flex items-center text-sm text-gray-600">
                                                    <svg class="w-4 h-4 mr-1 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                                                    </svg>
                                                    Aperçu disponible
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button (visible only on step 4) -->
                    <div class="mt-8">
                        <button type="submit"
                            onclick="return validateAllSteps()"
                            class="w-full px-8 py-4 bg-gradient-to-r from-[#2BD834] to-[#22b028] text-white rounded-full font-bold text-lg hover:shadow-2xl transform hover:scale-105 transition duration-200 shadow-lg">
                            <span class="flex items-center justify-center">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Soumettre ma candidature
                            </span>
                        </button>
                    </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<script>
function validateAllSteps() {
    const form = document.querySelector('form');
    
    // Étape 1: Informations personnelles
    const step1Fields = ['gender', 'first_name', 'last_name', 'date_of_birth', 'email', 'phone'];
    for (let fieldName of step1Fields) {
        const field = form.querySelector(`[name="${fieldName}"]`);
        if (field && !field.checkValidity()) {
            // Retourner à l'étape 1
            window.dispatchEvent(new CustomEvent('set-step', { detail: 1 }));
            setTimeout(() => field.reportValidity(), 100);
            return false;
        }
    }
    
    // Étape 2: Localisation
    const step2Fields = ['region', 'city'];
    for (let fieldName of step2Fields) {
        const field = form.querySelector(`[name="${fieldName}"]`);
        if (field && !field.checkValidity()) {
            // Retourner à l'étape 2
            window.dispatchEvent(new CustomEvent('set-step', { detail: 2 }));
            setTimeout(() => field.reportValidity(), 100);
            return false;
        }
    }
    
    // Étape 3: Type de service
    const serviceField = form.querySelector('[name="service_type"]');
    if (serviceField && !serviceField.checkValidity()) {
        // Retourner à l'étape 3
        window.dispatchEvent(new CustomEvent('set-step', { detail: 3 }));
        setTimeout(() => serviceField.reportValidity(), 100);
        return false;
    }
    
    return true;
}
</script>

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

