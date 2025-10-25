@extends('layouts.app')

@section('title', 'Devenir Partenaire - Faster')

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-[#0000ff] via-[#0000cc] to-[#2BD834] text-white overflow-hidden">
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="text-center" data-aos="fade-up">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">
                Devenez Partenaire Faster
            </h1>
            <p class="text-xl md:text-2xl text-orange-100">
                Développez votre activité avec nos solutions de livraison
            </p>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">
                Avantages pour les partenaires
            </h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center p-8 bg-gradient-to-br from-green-50 to-blue-50 rounded-2xl" data-aos="fade-up" data-aos-delay="0">
                <div class="w-16 h-16 bg-gradient-to-br from-[#2BD834] to-[#22b028] rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-3xl">📈</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Augmentez vos ventes</h3>
                <p class="text-gray-600">Accédez à des milliers de nouveaux clients</p>
            </div>
            
            <div class="text-center p-8 bg-gradient-to-br from-green-50 to-blue-50 rounded-2xl" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-gradient-to-br from-[#2BD834] to-[#22b028] rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-3xl">🚀</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Visibilité accrue</h3>
                <p class="text-gray-600">Votre marque sur l'application Faster</p>
            </div>
            
            <div class="text-center p-8 bg-gradient-to-br from-green-50 to-blue-50 rounded-2xl" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-gradient-to-br from-[#2BD834] to-[#22b028] rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-3xl">💼</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Support dédié</h3>
                <p class="text-gray-600">Une équipe pour vous accompagner</p>
            </div>
        </div>
    </div>
</section>

<!-- Application Form -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-green-50">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-3xl shadow-2xl p-8 md:p-12" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">
                Demande de partenariat
            </h2>
            
            @if(session('success'))
            <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-lg text-green-800">
                {{ session('success') }}
            </div>
            @endif
            
            <form action="{{ route('join.partner.store') }}" method="POST" class="space-y-6">
                @csrf
                
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Nom de l'entreprise *</label>
                    <input type="text" name="business_name" value="{{ old('business_name') }}" required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                    @error('business_name')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Nom du contact *</label>
                    <input type="text" name="contact_name" value="{{ old('contact_name') }}" required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                    @error('contact_name')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Email *</label>
                        <input type="email" name="email" value="{{ old('email') }}" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                        @error('email')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Téléphone *</label>
                        <input type="tel" name="phone" value="{{ old('phone') }}" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                        @error('phone')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Ville *</label>
                    <input type="text" name="city" value="{{ old('city') }}" required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                    @error('city')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Type de partenaire *</label>
                    <select name="partner_type" required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                        <option value="restaurant" {{ old('partner_type') === 'restaurant' ? 'selected' : '' }}>Restaurant</option>
                        <option value="store" {{ old('partner_type') === 'store' ? 'selected' : '' }}>Commerce/Boutique</option>
                        <option value="enterprise" {{ old('partner_type') === 'enterprise' ? 'selected' : '' }}>Entreprise</option>
                    </select>
                    @error('partner_type')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Type d'activité</label>
                    <input type="text" name="business_type" value="{{ old('business_type') }}"
                        placeholder="Ex: Restaurant italien, Épicerie, etc."
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                    @error('business_type')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Adresse complète *</label>
                    <textarea name="address" rows="3" required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">{{ old('address') }}</textarea>
                    @error('address')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Description de votre activité</label>
                    <textarea name="description" rows="4"
                        placeholder="Parlez-nous de votre activité et de vos objectifs..."
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">{{ old('description') }}</textarea>
                    @error('description')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <button type="submit"
                    class="w-full px-8 py-4 bg-gradient-to-r from-[#2BD834] to-[#22b028] text-white rounded-full font-bold text-lg hover:shadow-2xl transform hover:scale-105 transition duration-200">
                    Envoyer ma demande
                </button>
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
