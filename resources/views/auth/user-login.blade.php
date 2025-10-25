@extends('layouts.app')

@section('title', 'Connexion Utilisateur - Faster')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-[#0000ff]/10 via-white to-[#2BD834]/10 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full">
        <div class="bg-white rounded-3xl shadow-2xl p-8">
            <!-- Logo & Title -->
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center">
                    <img src="{{ asset('images/faster-logos.png') }}" alt="Faster" class="h-16 w-16 rounded-full object-cover ring-4 ring-[#2BD834] shadow-lg">
                </div>
                <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
                    Connexion Utilisateur
                </h2>
                <p class="mt-2 text-sm text-gray-600">
                    Accédez à votre compte Faster
                </p>
            </div>

            <!-- Error Messages -->
            @if ($errors->any())
                <div class="mb-6 bg-red-50 border-l-4 border-red-500 p-4 rounded">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-red-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-red-700">
                                {{ $errors->first() }}
                            </p>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Login Form -->
            <form method="POST" action="{{ route('user.login.post') }}" class="space-y-6">
                @csrf
                
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                        Adresse email
                    </label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition"
                           placeholder="votre@email.com">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                        Mot de passe
                    </label>
                    <input type="password" id="password" name="password" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition"
                           placeholder="••••••••">
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember" name="remember" value="1"
                               class="h-4 w-4 text-[#2BD834] focus:ring-[#2BD834] border-gray-300 rounded">
                        <label for="remember" class="ml-2 block text-sm text-gray-700">
                            Se souvenir de moi
                        </label>
                    </div>
                </div>

                <button type="submit" class="w-full flex justify-center items-center px-6 py-3 bg-gradient-to-r from-[#2BD834] to-[#22b028] text-white font-semibold rounded-xl hover:shadow-xl transition duration-300 transform hover:scale-105">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                    </svg>
                    Se connecter
                </button>
            </form>

            <!-- Register Link -->
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    Pas encore de compte ?
                    <a href="{{ route('user.register') }}" class="font-semibold text-[#2BD834] hover:text-[#22b028] transition">
                        S'inscrire maintenant
                    </a>
                </p>
            </div>

            <!-- Other Login Options -->
            <div class="mt-8 pt-6 border-t border-gray-200">
                <p class="text-center text-sm text-gray-600 mb-4">Ou se connecter en tant que</p>
                <div class="grid grid-cols-2 gap-4">
                    <a href="{{ route('driver.login') }}" class="flex items-center justify-center px-4 py-2 border border-gray-300 rounded-xl hover:bg-gray-50 transition text-sm">
                        <span class="mr-2">👨‍✈️</span> Conducteur
                    </a>
                    <a href="{{ route('partner.login') }}" class="flex items-center justify-center px-4 py-2 border border-gray-300 rounded-xl hover:bg-gray-50 transition text-sm">
                        <span class="mr-2">🤝</span> Partenaire
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
