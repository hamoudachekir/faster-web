@extends('layouts.app')

@section('title', 'Devenir Conducteur - Faster')

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-[#0000ff] via-[#0000cc] to-[#2BD834] text-white overflow-hidden">
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="text-center" data-aos="fade-up">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">
                Devenez Conducteur Faster
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
<section class="py-20 bg-gradient-to-br from-gray-50 to-green-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-3xl shadow-2xl p-8 md:p-12" data-aos="fade-up">
            
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
            }" enctype="multipart/form-data">
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
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">
                        Informations du conducteur
                    </h2>

                    <div class="space-y-6">
                        <!-- Gender -->
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Sexe *</label>
                            <select name="gender" required
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
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                                @error('first_name')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">Nom *</label>
                                <input type="text" name="last_name" value="{{ old('last_name') }}" required
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
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                            @error('date_of_birth')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">Email</label>
                                <input type="email" name="email" value="{{ old('email') }}"
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
                                        class="flex-1 px-4 py-3 border border-gray-300 rounded-r-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                                </div>
                                @error('phone')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- RIB -->
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">RIB</label>
                            <input type="text" name="rib" value="{{ old('rib') }}"
                                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                            @error('rib')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Checkboxes -->
                        <div class="space-y-3">
                            <label class="flex items-start">
                                <input type="checkbox" name="has_vehicle" value="1" {{ old('has_vehicle') ? 'checked' : '' }}
                                    x-model="hasVehicle"
                                    class="w-5 h-5 text-[#2BD834] border-gray-300 rounded focus:ring-[#2BD834] mt-1">
                                <span class="ml-3 text-gray-700">J'ai ma propre voiture</span>
                            </label>
                            
                            <label class="flex items-start">
                                <input type="checkbox" name="has_license" value="1" {{ old('has_license') ? 'checked' : '' }}
                                    class="w-5 h-5 text-[#2BD834] border-gray-300 rounded focus:ring-[#2BD834] mt-1">
                                <span class="ml-3 text-gray-700">J'ai un permis de conduire valide de plus de 2 ans</span>
                            </label>
                        </div>

                        <button type="button" @click="step = 2"
                            class="w-full px-8 py-4 bg-gradient-to-r from-[#2BD834] to-[#22b028] text-white rounded-full font-bold text-lg hover:shadow-2xl transform hover:scale-105 transition duration-200">
                            Continuer
                        </button>
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

                    <h2 class="text-3xl font-bold text-gray-900 mb-6">
                        Informations du conducteur
                    </h2>

                    <div class="space-y-6">
                        <!-- Region -->
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Région *</label>
                            <select name="region" x-model="region" required
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
                            class="w-full px-8 py-4 bg-gradient-to-r from-[#2BD834] to-[#22b028] text-white rounded-full font-bold text-lg hover:shadow-2xl transform hover:scale-105 transition duration-200">
                            Continuer
                        </button>
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

                    <h2 class="text-3xl font-bold text-gray-900 mb-6">
                        vehicle info
                    </h2>

                    <div class="space-y-6" x-show="hasVehicle">
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

                    <!-- No Vehicle Message -->
                    <div x-show="!hasVehicle" class="text-center py-8">
                        <div class="text-5xl mb-4">🚗</div>
                        <p class="text-gray-600 mb-2">Vous n'avez pas de véhicule ?</p>
                        <p class="text-sm text-gray-500">Pas de problème ! Nous pouvons vous aider à trouver une solution.</p>
                    </div>

                    <!-- Service Type -->
                    <div class="mt-6">
                        <label class="block text-gray-700 font-semibold mb-2">Type de service *</label>
                        <select name="service_type" required
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
                        class="w-full px-8 py-4 bg-gradient-to-r from-[#2BD834] to-[#22b028] text-white rounded-full font-bold text-lg hover:shadow-2xl transform hover:scale-105 transition duration-200">
                        Continuer
                    </button>
                </div>

                <!-- Step 4: Documents Upload -->
                <div x-show="step === 4" x-transition>
                    <button type="button" @click="step = 3" class="mb-6 flex items-center text-gray-600 hover:text-[#2BD834] transition">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                        Retour
                    </button>

                    <h2 class="text-3xl font-bold text-gray-900 mb-2 text-center">
                        Documents relatif au conducteur et au véhicule
                    </h2>
                    <p class="text-gray-600 text-center mb-8">Téléchargez vos documents requis</p>

                    <div class="space-y-6">
                        <!-- Photo de profil -->
                        <div class="border-2 border-dashed border-gray-300 rounded-2xl p-6 hover:border-[#2BD834] transition">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mr-4">
                                    <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center">
                                        <span class="text-3xl">📷</span>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-bold text-gray-900 mb-1">Photo de profil</h3>
                                    <p class="text-sm text-gray-600 mb-3">Veuillez fournir une photo claire pour que vos passagers puissent vous reconnaître facilement</p>
                                    <ul class="space-y-2 text-sm mb-4">
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="text-gray-700"><strong>Caméra faciale:</strong> Le conducteur doit faire face à la caméra directement, les yeux et la bouche clairement visibles</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="text-gray-700"><strong>Pas de chapeaux, casquettes ou lunettes de soleil:</strong> Le conducteur doit se présenter sans chapeau, casquette ou lunettes de soleil, avec une vue dégagée sur le visage</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="text-gray-700"><strong>Clair, pas flou:</strong> La photo doit être bien éclairée avec un fond neutre, montrant le visage complet du conducteur</span>
                                        </li>
                                    </ul>
                                    
                                    <!-- File Upload Button (shown when no file) -->
                                    <div x-show="!files.profile_photo">
                                        <input type="file" name="profile_photo" accept="image/*" class="hidden" id="profile_photo" 
                                               @change="previewFile($event.target, 'profile_photo')">
                                        <label for="profile_photo" class="inline-flex items-center px-6 py-3 bg-purple-600 text-gray-900 rounded-full font-semibold hover:bg-purple-700 transition cursor-pointer">
                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                            </svg>
                                            Ajouter depuis mon appareil
                                        </label>
                                    </div>

                                    <!-- File Preview (shown when file uploaded) -->
                                    <div x-show="files.profile_photo" x-transition class="mt-4">
                                        <div class="flex items-center space-x-4">
                                            <div class="relative">
                                                <img :src="files.profile_photo?.url" alt="Aper�u" class="w-32 h-32 object-cover rounded-xl border-2 border-gray-200">
                                            </div>
                                            <div class="flex-1">
                                                <div class="flex items-center justify-between bg-green-50 border-2 border-green-500 rounded-xl px-4 py-3">
                                                    <div class="flex items-center space-x-3">
                                                        <svg class="w-6 h-6 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                        </svg>
                                                        <div>
                                                            <p class="font-semibold text-gray-900">Fichier ajouté</p>
                                                            <p class="text-sm text-gray-600" x-text="files.profile_photo?.name"></p>
                                                        </div>
                                                    </div>
                                                    <button type="button" @click="removeFile('profile_photo')" class="p-2 hover:bg-red-100 rounded-lg transition">
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

                        <!-- Permis de conduire (Recto) -->
                        <div class="border-2 border-dashed border-gray-300 rounded-2xl p-6 hover:border-[#2BD834] transition">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mr-4">
                                    <div class="w-16 h-16 bg-pink-100 rounded-xl flex items-center justify-center">
                                        <span class="text-3xl">🪪</span>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-bold text-gray-900 mb-1">Permis de conduire (Recto)</h3>
                                    <p class="text-sm text-gray-600 mb-3">Veuillez fournir une photo claire du document</p>
                                    <ul class="space-y-2 text-sm mb-4">
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="text-gray-700"><strong>Image claire et lisible:</strong> La photo doit être claire, sans éblouissement ni reflets qui obscurcissent le texte</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="text-gray-700"><strong>Bon alignement:</strong> L'ensemble du document doit être visible et aligné correctement dans le cadre</span>
                                        </li>
                                    </ul>
                                    
                                    <!-- File Upload Button (shown when no file) -->
                                    <div x-show="!files.license_front">
                                        <input type="file" name="license_front" accept="image/*" class="hidden" id="license_front" 
                                               @change="previewFile($event.target, 'license_front')">
                                        <label for="license_front" class="inline-flex items-center px-6 py-3 bg-purple-600 text-gray-900 rounded-full font-semibold hover:bg-purple-700 transition cursor-pointer">
                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                            </svg>
                                            Ajouter depuis mon appareil
                                        </label>
                                    </div>

                                    <!-- File Preview (shown when file uploaded) -->
                                    <div x-show="files.license_front" x-transition class="mt-4">
                                        <div class="flex items-center space-x-4">
                                            <div class="relative">
                                                <img :src="files.license_front?.url" alt="Aper�u" class="w-32 h-32 object-cover rounded-xl border-2 border-gray-200">
                                            </div>
                                            <div class="flex-1">
                                                <div class="flex items-center justify-between bg-green-50 border-2 border-green-500 rounded-xl px-4 py-3">
                                                    <div class="flex items-center space-x-3">
                                                        <svg class="w-6 h-6 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                        </svg>
                                                        <div>
                                                            <p class="font-semibold text-gray-900">Fichier ajouté</p>
                                                            <p class="text-sm text-gray-600" x-text="files.license_front?.name"></p>
                                                        </div>
                                                    </div>
                                                    <button type="button" @click="removeFile('license_front')" class="p-2 hover:bg-red-100 rounded-lg transition">
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

                        <!-- Permis de conduire (Verso) -->
                        <div class="border-2 border-dashed border-gray-300 rounded-2xl p-6 hover:border-[#2BD834] transition">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mr-4">
                                    <div class="w-16 h-16 bg-pink-100 rounded-xl flex items-center justify-center">
                                        <span class="text-3xl">🪪</span>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-bold text-gray-900 mb-1">Permis de conduire (Verso)</h3>
                                    <p class="text-sm text-gray-600 mb-3">Veuillez fournir une photo claire du document</p>
                                    <ul class="space-y-2 text-sm mb-4">
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="text-gray-700"><strong>Image claire et lisible:</strong> La photo doit être claire, sans éblouissement ni reflets qui obscurcissent le texte</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="text-gray-700"><strong>Bon alignement:</strong> L'ensemble du document doit être visible et aligné correctement dans le cadre</span>
                                        </li>
                                    </ul>
                                    
                                    <!-- File Upload Button (shown when no file) -->
                                    <div x-show="!files.license_back">
                                        <input type="file" name="license_back" accept="image/*" class="hidden" id="license_back" 
                                               @change="previewFile($event.target, 'license_back')">
                                        <label for="license_back" class="inline-flex items-center px-6 py-3 bg-purple-600 text-gray-900 rounded-full font-semibold hover:bg-purple-700 transition cursor-pointer">
                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                            </svg>
                                            Ajouter depuis mon appareil
                                        </label>
                                    </div>

                                    <!-- File Preview (shown when file uploaded) -->
                                    <div x-show="files.license_back" x-transition class="mt-4">
                                        <div class="flex items-center space-x-4">
                                            <div class="relative">
                                                <img :src="files.license_back?.url" alt="Aper�u" class="w-32 h-32 object-cover rounded-xl border-2 border-gray-200">
                                            </div>
                                            <div class="flex-1">
                                                <div class="flex items-center justify-between bg-green-50 border-2 border-green-500 rounded-xl px-4 py-3">
                                                    <div class="flex items-center space-x-3">
                                                        <svg class="w-6 h-6 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                        </svg>
                                                        <div>
                                                            <p class="font-semibold text-gray-900">Fichier ajouté</p>
                                                            <p class="text-sm text-gray-600" x-text="files.license_back?.name"></p>
                                                        </div>
                                                    </div>
                                                    <button type="button" @click="removeFile('license_back')" class="p-2 hover:bg-red-100 rounded-lg transition">
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

                        <div x-show="hasVehicle">
                            <!-- Carte Grise (Recto) -->
                            <div class="border-2 border-dashed border-gray-300 rounded-2xl p-6 hover:border-[#2BD834] transition">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 mr-4">
                                        <div class="w-16 h-16 bg-gray-100 rounded-xl flex items-center justify-center">
                                            <span class="text-3xl">📄</span>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="font-bold text-gray-900 mb-1">Carte Grise (Recto)</h3>
                                        <p class="text-sm text-gray-600 mb-3">Veuillez fournir une photo nette et lisible de la carte grise</p>
                                        <ul class="space-y-2 text-sm mb-4">
                                            <li class="flex items-start">
                                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="text-gray-700"><strong>Document complet:</strong> L'ensemble du document doit être visible. Il ne doit manquer aucune partie</span>
                                            </li>
                                            <li class="flex items-start">
                                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="text-gray-700"><strong>Bon alignement:</strong> Assurez-vous que la carte grise soit bien alignée dans le cadre de la photo. Évitez toute inclinaison qui pourrait rendre certaines informations illisibles</span>
                                            </li>
                                        </ul>
                                        
                                        <!-- File Upload Button (shown when no file) -->
                                        <div x-show="!files.vehicle_registration_front">
                                            <input type="file" name="vehicle_registration_front" accept="image/*" class="hidden" id="vehicle_registration_front" 
                                                   @change="previewFile($event.target, 'vehicle_registration_front')">
                                            <label for="vehicle_registration_front" class="inline-flex items-center px-6 py-3 bg-purple-600 text-gray-900 rounded-full font-semibold hover:bg-purple-700 transition cursor-pointer">
                                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                                </svg>
                                                Ajouter depuis mon appareil
                                            </label>
                                        </div>

                                        <!-- File Preview (shown when file uploaded) -->
                                        <div x-show="files.vehicle_registration_front" x-transition class="mt-4">
                                            <div class="flex items-center space-x-4">
                                                <div class="relative">
                                                    <img :src="files.vehicle_registration_front?.url" alt="Aper�u" class="w-32 h-32 object-cover rounded-xl border-2 border-gray-200">
                                                </div>
                                                <div class="flex-1">
                                                    <div class="flex items-center justify-between bg-green-50 border-2 border-green-500 rounded-xl px-4 py-3">
                                                        <div class="flex items-center space-x-3">
                                                            <svg class="w-6 h-6 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                            </svg>
                                                            <div>
                                                                <p class="font-semibold text-gray-900">Fichier ajouté</p>
                                                                <p class="text-sm text-gray-600" x-text="files.vehicle_registration_front?.name"></p>
                                                            </div>
                                                        </div>
                                                        <button type="button" @click="removeFile('vehicle_registration_front')" class="p-2 hover:bg-red-100 rounded-lg transition">
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

                            <!-- Carte Grise (Verso) -->
                            <div class="border-2 border-dashed border-gray-300 rounded-2xl p-6 hover:border-[#2BD834] transition">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 mr-4">
                                        <div class="w-16 h-16 bg-gray-100 rounded-xl flex items-center justify-center">
                                            <span class="text-3xl">📄</span>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="font-bold text-gray-900 mb-1">Carte Grise (Verso)</h3>
                                        <p class="text-sm text-gray-600 mb-3">Veuillez fournir une photo nette et lisible de la carte grise</p>
                                        <ul class="space-y-2 text-sm mb-4">
                                            <li class="flex items-start">
                                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="text-gray-700"><strong>Document complet:</strong> L'ensemble du document doit être visible. Il ne doit manquer aucune partie</span>
                                            </li>
                                            <li class="flex items-start">
                                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="text-gray-700"><strong>Bon alignement:</strong> Assurez-vous que la carte grise soit bien alignée dans le cadre de la photo</span>
                                            </li>
                                        </ul>
                                        
                                        <!-- File Upload Button (shown when no file) -->
                                        <div x-show="!files.vehicle_registration_back">
                                            <input type="file" name="vehicle_registration_back" accept="image/*" class="hidden" id="vehicle_registration_back" 
                                                   @change="previewFile($event.target, 'vehicle_registration_back')">
                                            <label for="vehicle_registration_back" class="inline-flex items-center px-6 py-3 bg-purple-600 text-gray-900 rounded-full font-semibold hover:bg-purple-700 transition cursor-pointer">
                                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                                </svg>
                                                Ajouter depuis mon appareil
                                            </label>
                                        </div>

                                        <!-- File Preview (shown when file uploaded) -->
                                        <div x-show="files.vehicle_registration_back" x-transition class="mt-4">
                                            <div class="flex items-center space-x-4">
                                                <div class="relative">
                                                    <img :src="files.vehicle_registration_back?.url" alt="Aper�u" class="w-32 h-32 object-cover rounded-xl border-2 border-gray-200">
                                                </div>
                                                <div class="flex-1">
                                                    <div class="flex items-center justify-between bg-green-50 border-2 border-green-500 rounded-xl px-4 py-3">
                                                        <div class="flex items-center space-x-3">
                                                            <svg class="w-6 h-6 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                            </svg>
                                                            <div>
                                                                <p class="font-semibold text-gray-900">Fichier ajouté</p>
                                                                <p class="text-sm text-gray-600" x-text="files.vehicle_registration_back?.name"></p>
                                                            </div>
                                                        </div>
                                                        <button type="button" @click="removeFile('vehicle_registration_back')" class="p-2 hover:bg-red-100 rounded-lg transition">
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

                            <!-- Photo du véhicule (de face) -->
                            <div class="border-2 border-dashed border-gray-300 rounded-2xl p-6 hover:border-[#2BD834] transition">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 mr-4">
                                        <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center">
                                            <span class="text-3xl">🚗</span>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="font-bold text-gray-900 mb-1">Photo du véhicule (de face)</h3>
                                        <p class="text-sm text-gray-600 mb-3">Veuillez fournir une photo de votre véhicule vu de l'avant</p>
                                        <ul class="space-y-2 text-sm mb-4">
                                            <li class="flex items-start">
                                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="text-gray-700"><strong>Vue de face avec plaque d'immatriculation visible:</strong> La voiture doit être photographiée de face, avec la plaque d'immatriculation visible</span>
                                            </li>
                                            <li class="flex items-start">
                                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="text-gray-700"><strong>Bon alignement:</strong> La voiture doit être cadrée correctement, montrant tout l'avant de la voiture sans obstruction (par exemple, aucun autre véhicule ne bloque la vue)</span>
                                            </li>
                                        </ul>
                                        
                                        <!-- File Upload Button (shown when no file) -->
                                        <div x-show="!files.vehicle_photo_front">
                                            <input type="file" name="vehicle_photo_front" accept="image/*" class="hidden" id="vehicle_photo_front" 
                                                   @change="previewFile($event.target, 'vehicle_photo_front')">
                                            <label for="vehicle_photo_front" class="inline-flex items-center px-6 py-3 bg-purple-600 text-gray-900 rounded-full font-semibold hover:bg-purple-700 transition cursor-pointer">
                                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                                </svg>
                                                Ajouter depuis mon appareil
                                            </label>
                                        </div>

                                        <!-- File Preview (shown when file uploaded) -->
                                        <div x-show="files.vehicle_photo_front" x-transition class="mt-4">
                                            <div class="flex items-center space-x-4">
                                                <div class="relative">
                                                    <img :src="files.vehicle_photo_front?.url" alt="Aperçu photo véhicule" class="w-32 h-32 object-cover rounded-xl border-2 border-gray-200">
                                                </div>
                                                <div class="flex-1">
                                                    <div class="flex items-center justify-between bg-green-50 border-2 border-green-500 rounded-xl px-4 py-3">
                                                        <div class="flex items-center space-x-3">
                                                            <svg class="w-6 h-6 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                            </svg>
                                                            <div>
                                                                <p class="font-semibold text-gray-900">Fichier ajouté</p>
                                                                <p class="text-sm text-gray-600" x-text="files.vehicle_photo_front?.name"></p>
                                                            </div>
                                                        </div>
                                                        <button type="button" @click="removeFile('vehicle_photo_front')" class="p-2 hover:bg-red-100 rounded-lg transition">
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

                            <!-- Photo du véhicule (de profil) -->
                            <div class="border-2 border-dashed border-gray-300 rounded-2xl p-6 hover:border-[#2BD834] transition">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 mr-4">
                                        <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center">
                                            <span class="text-3xl">🚗</span>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="font-bold text-gray-900 mb-1">Photo du véhicule (de profil)</h3>
                                        <p class="text-sm text-gray-600 mb-3">Veuillez fournir une photo de votre véhicule vu de côté</p>
                                        <ul class="space-y-2 text-sm mb-4">
                                            <li class="flex items-start">
                                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="text-gray-700"><strong>Vue latérale avec les deux portes visibles:</strong> La voiture doit être photographiée de côté, avec les deux portières visibles</span>
                                            </li>
                                            <li class="flex items-start">
                                                <svg class="w-5 h-5 text-green-500 mr-2 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="text-gray-700"><strong>Bon alignement:</strong> La voiture doit être cadrée correctement, montrant les deux côtés de la voiture sans obstruction (par exemple, aucun autre véhicule ne doit bloquer la vue)</span>
                                            </li>
                                        </ul>
                                        
                                        <!-- File Upload Button (shown when no file) -->
                                        <div x-show="!files.vehicle_photo_side">
                                            <input type="file" name="vehicle_photo_side" accept="image/*" class="hidden" id="vehicle_photo_side" 
                                                   @change="previewFile($event.target, 'vehicle_photo_side')">
                                            <label for="vehicle_photo_side" class="inline-flex items-center px-6 py-3 bg-purple-600 text-gray-900 rounded-full font-semibold hover:bg-purple-700 transition cursor-pointer">
                                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                                </svg>
                                                Ajouter depuis mon appareil
                                            </label>
                                        </div>

                                        <!-- File Preview (shown when file uploaded) -->
                                        <div x-show="files.vehicle_photo_side" x-transition class="mt-4">
                                            <div class="flex items-center space-x-4">
                                                <div class="relative">
                                                    <img :src="files.vehicle_photo_side?.url" alt="Aperçu photo véhicule" class="w-32 h-32 object-cover rounded-xl border-2 border-gray-200">
                                                </div>
                                                <div class="flex-1">
                                                    <div class="flex items-center justify-between bg-green-50 border-2 border-green-500 rounded-xl px-4 py-3">
                                                        <div class="flex items-center space-x-3">
                                                            <svg class="w-6 h-6 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                            </svg>
                                                            <div>
                                                                <p class="font-semibold text-gray-900">Fichier ajouté</p>
                                                                <p class="text-sm text-gray-600" x-text="files.vehicle_photo_side?.name"></p>
                                                            </div>
                                                        </div>
                                                        <button type="button" @click="removeFile('vehicle_photo_side')" class="p-2 hover:bg-red-100 rounded-lg transition">
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
                    </div>

                    <button type="submit"
                        class="w-full mt-8 px-8 py-4 bg-gradient-to-r from-[#2BD834] to-[#22b028] text-white rounded-full font-bold text-lg hover:shadow-2xl transform hover:scale-105 transition duration-200">
                        Soumettre ma candidature
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

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


