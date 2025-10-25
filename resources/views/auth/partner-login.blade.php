@extends('layouts.app')

@section('title', 'Connexion Partenaire - Faster')

@section('content')

<section class="min-h-screen bg-gradient-to-br from-[#0000ff] via-[#0000cc] to-[#2BD834] flex items-center justify-center py-20">
    <div class="max-w-md w-full mx-4">
        <div class="bg-white rounded-3xl shadow-2xl p-8" data-aos="fade-up">
            <!-- Logo & Title -->
            <div class="text-center mb-8">
                <div class="w-20 h-20 bg-gradient-to-br from-[#0000ff] to-[#0000cc] rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <span class="text-white font-bold text-3xl">🤝</span>
                </div>
                <h1 class="text-3xl font-bold text-gray-900 mb-2">Espace Partenaire</h1>
                <p class="text-gray-600">Connectez-vous à votre compte entreprise</p>
            </div>

            @if(session('success'))
                <div class="mb-6 p-4 bg-green-100 border-l-4 border-green-500 text-green-700 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="mb-6 p-4 bg-red-100 border-l-4 border-red-500 text-red-700 rounded-lg">
                    {{ session('error') }}
                </div>
            @endif

            <!-- Login Form -->
            <form action="{{ route('partner.login.post') }}" method="POST">
                @csrf
                
                <div class="mb-6">
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                        📧 Adresse email
                    </label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:ring-2 focus:ring-[#0000ff] focus:border-[#0000ff] transition"
                        placeholder="contact@entreprise.com"
                    >
                    @error('email')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">
                        🔒 Mot de passe
                    </label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        required
                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:ring-2 focus:ring-[#0000ff] focus:border-[#0000ff] transition"
                        placeholder="••••••••"
                    >
                    @error('password')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <button
                    type="submit"
                    class="w-full px-6 py-3 bg-gradient-to-r from-[#0000ff] to-[#0000cc] text-white font-bold rounded-xl hover:shadow-xl transition duration-300 transform hover:scale-105"
                >
                    Se connecter
                </button>
            </form>

            <!-- Links -->
            <div class="mt-6 text-center space-y-3">
                <p class="text-sm text-gray-600">
                    Vous n'êtes pas encore partenaire?
                </p>
                <a href="{{ route('join.partner') }}" class="block text-[#0000ff] font-semibold hover:underline">
                    Devenir partenaire Faster →
                </a>
                <a href="{{ route('driver.login') }}" class="block text-[#2BD834] font-semibold hover:underline">
                    Vous êtes conducteur? Cliquez ici →
                </a>
                <a href="{{ route('home') }}" class="block text-gray-600 hover:text-gray-900">
                    ← Retour à l'accueil
                </a>
            </div>

            <!-- Info Box -->
            <div class="mt-8 p-4 bg-blue-50 rounded-xl">
                <p class="text-sm text-gray-700 text-center">
                    <strong>Note:</strong> Votre compte entreprise sera activé après validation de votre partenariat par notre équipe.
                </p>
            </div>
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
