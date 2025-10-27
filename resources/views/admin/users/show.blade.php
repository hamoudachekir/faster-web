@extends('admin.layout')

@section('title', 'Détails de l\'Utilisateur')

@section('content')

<div class="mb-8">
    <a href="{{ route('admin.users.index') }}" class="inline-flex items-center text-[#2BD834] hover:text-[#22b028] font-semibold transition">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
        </svg>
        Retour à la liste
    </a>
</div>

@if(session('success'))
    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-lg">
        <div class="flex items-center">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
            </svg>
            {{ session('success') }}
        </div>
    </div>
@endif

@if(session('error'))
    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded-lg">
        <div class="flex items-center">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
            </svg>
            {{ session('error') }}
        </div>
    </div>
@endif

<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    <!-- Left Column: User Info -->
    <div class="lg:col-span-2 space-y-6">
        <!-- User Profile Card -->
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="bg-gradient-to-r from-[#2BD834] to-[#22b028] p-8">
                <div class="flex items-center">
                    <div class="flex-shrink-0 h-20 w-20 bg-white rounded-full flex items-center justify-center text-[#2BD834] font-bold text-3xl shadow-lg">
                        {{ strtoupper(substr($user->name, 0, 1)) }}
                    </div>
                    <div class="ml-6">
                        <h1 class="text-3xl font-bold text-white">{{ $user->name }}</h1>
                        <p class="text-green-100 mt-1 text-lg">ID: #{{ $user->id }}</p>
                    </div>
                </div>
            </div>
            
            <div class="p-8">
                <form action="{{ route('admin.users.update', $user->id) }}" method="POST" id="updateUserForm">
                    @csrf
                    @method('PUT')
                    
                    <div class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Nom -->
                            <div>
                                <label for="name" class="block text-sm font-bold text-gray-700 mb-2">Nom Complet</label>
                                <input type="text" 
                                       id="name" 
                                       name="name" 
                                       value="{{ old('name', $user->name) }}" 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition @error('name') border-red-500 @enderror"
                                       required>
                                @error('name')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-sm font-bold text-gray-700 mb-2">Email</label>
                                <input type="email" 
                                       id="email" 
                                       name="email" 
                                       value="{{ old('email', $user->email) }}" 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition @error('email') border-red-500 @enderror"
                                       required>
                                @error('email')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        
                        <!-- Téléphone -->
                        <div>
                            <label for="phone" class="block text-sm font-bold text-gray-700 mb-2">Téléphone</label>
                            <input type="tel" 
                                   id="phone" 
                                   name="phone" 
                                   value="{{ old('phone', $user->phone) }}" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition @error('phone') border-red-500 @enderror"
                                   placeholder="+216 XX XXX XXX">
                            @error('phone')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="flex justify-end">
                            <button type="submit" class="px-6 py-3 bg-[#2BD834] text-white font-bold rounded-lg hover:bg-[#22b028] transition flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Enregistrer les modifications
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <!-- Additional Details Card -->
        <div class="bg-white rounded-2xl shadow-lg p-8">
            <h2 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
                <svg class="w-6 h-6 mr-2 text-[#2BD834]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Informations Supplémentaires
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="border-l-4 border-purple-500 pl-4">
                    <p class="text-sm text-gray-600 mb-1">Date d'inscription</p>
                    <p class="text-lg font-semibold text-gray-900">{{ $user->created_at->format('d/m/Y à H:i') }}</p>
                    <p class="text-xs text-gray-500 mt-1">{{ $user->created_at->diffForHumans() }}</p>
                </div>
                
                <div class="border-l-4 border-blue-500 pl-4">
                    <p class="text-sm text-gray-600 mb-1">Dernière connexion</p>
                    <p class="text-lg font-semibold text-gray-900">
                        @if($user->last_login_at)
                            {{ $user->last_login_at->format('d/m/Y à H:i') }}
                        @else
                            Jamais connecté
                        @endif
                    </p>
                    @if($user->last_login_at)
                        <p class="text-xs text-gray-500 mt-1">{{ $user->last_login_at->diffForHumans() }}</p>
                    @endif
                </div>
                
                <div class="border-l-4 border-yellow-500 pl-4">
                    <p class="text-sm text-gray-600 mb-1">Email vérifié</p>
                    <p class="text-lg font-semibold text-gray-900">
                        @if($user->email_verified_at)
                            <span class="text-green-600">✓ Vérifié</span>
                        @else
                            <span class="text-red-600">✗ Non vérifié</span>
                        @endif
                    </p>
                </div>
                
                <div class="border-l-4 border-green-500 pl-4">
                    <p class="text-sm text-gray-600 mb-1">Statut du compte</p>
                    <p class="text-lg font-semibold">
                        @if($user->is_active)
                            <span class="text-green-600">✓ Actif</span>
                        @else
                            <span class="text-red-600">✗ Désactivé</span>
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Right Column: Actions -->
    <div class="lg:col-span-1 space-y-6">
        <!-- Status Card -->
        <div class="bg-white rounded-2xl shadow-lg p-6">
            <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center">
                <svg class="w-5 h-5 mr-2 text-[#2BD834]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Statut du compte
            </h3>
            
            @if($user->is_active)
                <div class="bg-green-50 border border-green-200 rounded-lg p-4 mb-4">
                    <div class="flex items-center">
                        <svg class="w-8 h-8 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <div>
                            <p class="font-bold text-green-900">Compte Actif</p>
                            <p class="text-sm text-green-700">L'utilisateur peut se connecter</p>
                        </div>
                    </div>
                </div>
                
                <form action="{{ route('admin.users.toggle-status', $user->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir désactiver ce compte ?');">
                    @csrf
                    <button type="submit" class="w-full px-4 py-3 bg-red-600 text-white font-bold rounded-lg hover:bg-red-700 transition flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Désactiver le compte
                    </button>
                </form>
            @else
                <div class="bg-red-50 border border-red-200 rounded-lg p-4 mb-4">
                    <div class="flex items-center">
                        <svg class="w-8 h-8 text-red-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <div>
                            <p class="font-bold text-red-900">Compte Désactivé</p>
                            <p class="text-sm text-red-700">L'utilisateur ne peut pas se connecter</p>
                        </div>
                    </div>
                </div>
                
                <form action="{{ route('admin.users.toggle-status', $user->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full px-4 py-3 bg-green-600 text-white font-bold rounded-lg hover:bg-green-700 transition flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Activer le compte
                    </button>
                </form>
            @endif
        </div>
        
        <!-- Reset Password Card -->
        <div class="bg-white rounded-2xl shadow-lg p-6">
            <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center">
                <svg class="w-5 h-5 mr-2 text-[#2BD834]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                </svg>
                Sécurité
            </h3>
            
            <form action="{{ route('admin.users.reset-password', $user->id) }}" method="POST" onsubmit="return confirm('Un nouveau mot de passe sera généré et envoyé par email. Continuer ?');">
                @csrf
                <button type="submit" class="w-full px-4 py-3 bg-yellow-500 hover:bg-yellow-600 transition font-bold rounded-lg flex items-center justify-center mb-3">
                    <svg class="w-5 h-5 mr-2 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                    </svg>
                    <span class="text-gray-900">Réinitialiser le mot de passe</span>
                </button>
            </form>
            
            <p class="text-xs text-gray-600 text-center">
                Un nouveau mot de passe sera généré automatiquement et envoyé par email
            </p>
        </div>
        
        <!-- Delete Account Card -->
        <div class="bg-white rounded-2xl shadow-lg p-6 border-2 border-red-200">
            <h3 class="text-lg font-bold text-red-900 mb-4 flex items-center">
                <svg class="w-5 h-5 mr-2 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                </svg>
                Zone de danger
            </h3>
            
            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('⚠️ ATTENTION: Cette action est irréversible! Toutes les données de l\'utilisateur seront définitivement supprimées. Êtes-vous absolument sûr ?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="w-full px-4 py-3 bg-red-600 hover:bg-red-700 transition font-bold rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                    </svg>
                    <span class="text-gray-900">Supprimer définitivement</span>
                </button>
            </form>
            
            <p class="text-xs text-red-600 text-center mt-3 font-semibold">
                ⚠️ Cette action est irréversible
            </p>
        </div>
    </div>
</div>

@endsection
