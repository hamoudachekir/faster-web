@extends('admin.layout')

@section('title', 'Détails Candidature Conducteur')

@section('content')
<div class="max-w-7xl mx-auto">
    <!-- Back Button -->
    <a href="{{ route('admin.drivers.index') }}" class="inline-flex items-center text-[#2BD834] font-medium mb-6 hover:underline">
        ← Retour à la liste
    </a>

    <!-- Password Generated Alert -->
    @if(session('generated_password'))
    <div class="bg-white rounded-2xl shadow-2xl p-8 mb-6 border-4 border-green-500">
        <div class="flex items-start gap-4">
            <div class="flex-shrink-0 w-16 h-16 bg-green-500 rounded-2xl flex items-center justify-center">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"/>
                </svg>
            </div>
            <div class="flex-1">
                <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                    <svg class="w-6 h-6 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    Mot de passe généré avec succès !
                </h3>
                <div class="bg-gray-50 rounded-xl p-6 mb-4 border-2 border-gray-200">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                        <div>
                            <p class="text-xs text-gray-500 mb-1">Utilisateur</p>
                            <p class="text-sm font-bold text-gray-900">{{ session('user_name') }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 mb-1">Email</p>
                            <p class="text-sm font-bold text-gray-900">{{ session('user_email') }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 mb-1">Téléphone</p>
                            <p class="text-sm font-bold text-gray-900">{{ session('user_phone') }}</p>
                        </div>
                    </div>
                    <div class="border-t-2 border-gray-200 pt-4">
                        <p class="text-sm font-semibold text-gray-700 mb-3">Mot de passe temporaire:</p>
                        <div class="flex items-center gap-3">
                            <div class="flex-1 bg-gradient-to-r from-green-50 to-emerald-50 border-2 border-green-500 rounded-xl px-6 py-4">
                                <code class="text-2xl font-bold text-gray-900 tracking-wider">{{ session('generated_password') }}</code>
                            </div>
                            <button onclick="navigator.clipboard.writeText('{{ session('generated_password') }}')" class="px-6 py-4 bg-gray-900 hover:bg-gray-800 text-white rounded-xl transition-all duration-200 font-semibold flex items-center gap-2 shadow-lg hover:shadow-xl transform hover:scale-105">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                                </svg>
                                Copier
                            </button>
                        </div>
                    </div>
                </div>
                <div class="bg-yellow-50 border-l-4 border-yellow-500 rounded-lg p-4">
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-yellow-600 mr-3 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                        <div class="flex-1">
                            <p class="font-bold text-yellow-900 mb-2">Important - À faire maintenant:</p>
                            <ul class="text-sm text-yellow-900 space-y-1.5">
                                <li class="flex items-start">
                                    <span class="text-yellow-600 mr-2">•</span>
                                    <span>Copiez ce mot de passe <strong>immédiatement</strong>, il ne sera plus affiché</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-yellow-600 mr-2">•</span>
                                    <span>Envoyez-le au conducteur par <strong>email ou SMS sécurisé</strong></span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-yellow-600 mr-2">•</span>
                                    <span>Le conducteur pourra le modifier après sa première connexion</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Left: Profile Card -->
        <div class="space-y-6">
            <div class="bg-white rounded-2xl shadow-lg p-8">
                <div class="flex flex-col items-center text-center">
                    <!-- Profile Photo -->
                    <div class="mb-6">
                        @if($application->profile_photo)
                            <img src="{{ asset('storage/' . $application->profile_photo) }}" alt="Portrait du conducteur" class="w-40 h-40 rounded-full object-cover border-4 border-gray-100 shadow-lg">
                        @else
                            <div class="w-40 h-40 rounded-full bg-gray-100 flex items-center justify-center text-6xl border-4 border-gray-100">{{ $application->gender === 'male' ? '👨' : '👩' }}</div>
                        @endif
                    </div>

                    <!-- Name & Status -->
                    <h2 class="text-3xl font-bold text-gray-900 mb-3">{{ $application->first_name }} {{ $application->last_name }}</h2>
                    <span class="px-4 py-2 rounded-full text-sm font-bold mb-6
                        {{ $application->status === 'pending' ? 'bg-yellow-100 text-yellow-800' : '' }}
                        {{ $application->status === 'approved' ? 'bg-green-100 text-green-800' : '' }}
                        {{ $application->status === 'rejected' ? 'bg-red-100 text-red-800' : '' }}">
                        {{ strtoupper($application->status) }}
                    </span>

                    <!-- Contact Info -->
                    <div class="w-full space-y-4 text-left">
                        <div class="flex items-start gap-3">
                            <span class="text-xl">📧</span>
                            <div class="flex-1">
                                <p class="text-sm text-gray-600 mb-1">Email</p>
                                <p class="text-gray-900 font-medium break-all">{{ $application->email }}</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="text-xl">📞</span>
                            <div class="flex-1">
                                <p class="text-sm text-gray-600 mb-1">Téléphone</p>
                                <p class="text-gray-900 font-medium">{{ $application->phone }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full border-t border-gray-200 my-6"></div>

                    <!-- Location Grid -->
                    <div class="w-full grid grid-cols-2 gap-4 text-left">
                        <div class="flex items-start gap-2">
                            <span class="text-lg">🏙️</span>
                            <div>
                                <p class="text-xs text-gray-600 mb-1">Ville</p>
                                <p class="text-gray-900 font-medium text-sm">{{ $application->city }}</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-2">
                            <span class="text-lg">🌍</span>
                            <div>
                                <p class="text-xs text-gray-600 mb-1">Région</p>
                                <p class="text-gray-900 font-medium text-sm">{{ $application->region ?: 'Non renseigné' }}</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-2">
                            <span class="text-lg">🏢</span>
                            <div>
                                <p class="text-xs text-gray-600 mb-1">Délégation</p>
                                <p class="text-gray-900 font-medium text-sm">{{ $application->delegation ?: 'Non renseigné' }}</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-2">
                            <span class="text-lg">🎂</span>
                            <div>
                                <p class="text-xs text-gray-600 mb-1">Date de naissance</p>
                                <p class="text-gray-900 font-medium text-sm">{{ $application->date_of_birth ? \Carbon\Carbon::parse($application->date_of_birth)->format('d/m/Y') : 'Non renseigné' }}</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-2">
                            <span class="text-lg">🏦</span>
                            <div>
                                <p class="text-xs text-gray-600 mb-1">RIB</p>
                                <p class="text-gray-900 font-medium text-sm">{{ $application->rib ?: 'Non renseigné' }}</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-2">
                            <span class="text-lg">🕒</span>
                            <div>
                                <p class="text-xs text-gray-600 mb-1">Candidature</p>
                                <p class="text-gray-900 font-medium text-sm">{{ $application->created_at->format('d/m/Y') }} à {{ $application->created_at->format('H:i') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Vehicle & Service Info -->
            <div class="bg-white rounded-2xl shadow-lg p-6">
                <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center">
                    <span class="text-2xl mr-2">🚗</span> Véhicule & Service
                </h3>
                <div class="space-y-4">
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Type de service</p>
                        <p class="text-gray-900 font-medium">
                            @if($application->service_type === 'ride') 🚗 Transport de personnes
                            @elseif($application->service_type === 'delivery') 📦 Livraison
                            @else 🚗📦 Les deux @endif
                        </p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Type de véhicule</p>
                        <p class="text-gray-900 font-medium">{{ $application->vehicle_type ?: 'Non renseigné' }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Numéro de permis</p>
                        <p class="text-gray-900 font-medium">{{ $application->license_number ?: 'Non renseigné' }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600 mb-1">Possède un véhicule</p>
                        <p class="text-gray-900 font-medium">{{ $application->has_vehicle ? '✅ Oui' : '❌ Non' }}</p>
                    </div>
                    @if($application->has_vehicle && ($application->vehicle_brand || $application->vehicle_model))
                    <div class="border-t border-gray-200 pt-4">
                        <p class="text-sm text-gray-600 mb-3 font-semibold">Détails du véhicule</p>
                        @if($application->vehicle_brand || $application->vehicle_model)
                        <div class="mb-2">
                            <p class="text-xs text-gray-600">Marque / Modèle</p>
                            <p class="text-gray-900 font-medium">{{ $application->vehicle_brand ?: '—' }} {{ $application->vehicle_model ?: '' }}</p>
                        </div>
                        @endif
                        @if($application->vehicle_year)
                        <div class="mb-2">
                            <p class="text-xs text-gray-600">Année</p>
                            <p class="text-gray-900 font-medium">{{ $application->vehicle_year }}</p>
                        </div>
                        @endif
                        @if($application->license_plate)
                        <div>
                            <p class="text-xs text-gray-600">Plaque d'immatriculation</p>
                            <p class="text-gray-900 font-medium">{{ $application->license_plate }}</p>
                        </div>
                        @endif
                    </div>
                    @endif
                </div>
            </div>

            @if($application->message)
            <div class="bg-blue-50 rounded-2xl border-2 border-blue-200 p-6">
                <h3 class="text-lg font-bold text-blue-900 mb-3 flex items-center"><span class="text-xl mr-2">�</span> Message du candidat</h3>
                <p class="text-blue-900 whitespace-pre-wrap text-sm">{{ $application->message }}</p>
            </div>
            @endif
        </div>

        <!-- Middle: Documents & Photos -->
        <div class="space-y-6">
            <!-- Documents -->
            <div class="bg-white rounded-2xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center">
                    <span class="text-2xl mr-2">�</span> Documents
                </h3>
                @if($application->license_front || $application->license_back || $application->vehicle_registration_front || $application->vehicle_registration_back)
                <div class="space-y-4">
                    @if($application->license_front)
                    <div>
                        <p class="text-sm font-semibold text-gray-700 mb-2">🪪 Permis de conduire (Recto)</p>
                        <a href="{{ asset('storage/' . $application->license_front) }}" target="_blank" class="block">
                            <img src="{{ asset('storage/' . $application->license_front) }}" alt="Permis recto" class="w-full h-48 object-cover rounded-lg border-2 border-gray-200 hover:border-[#2BD834] hover:shadow-lg transition cursor-pointer">
                        </a>
                    </div>
                    @endif
                    @if($application->license_back)
                    <div>
                        <p class="text-sm font-semibold text-gray-700 mb-2">🪪 Permis de conduire (Verso)</p>
                        <a href="{{ asset('storage/' . $application->license_back) }}" target="_blank" class="block">
                            <img src="{{ asset('storage/' . $application->license_back) }}" alt="Permis verso" class="w-full h-48 object-cover rounded-lg border-2 border-gray-200 hover:border-[#2BD834] hover:shadow-lg transition cursor-pointer">
                        </a>
                    </div>
                    @endif
                    @if($application->vehicle_registration_front)
                    <div>
                        <p class="text-sm font-semibold text-gray-700 mb-2">📋 Carte grise (Recto)</p>
                        <a href="{{ asset('storage/' . $application->vehicle_registration_front) }}" target="_blank" class="block">
                            <img src="{{ asset('storage/' . $application->vehicle_registration_front) }}" alt="Carte grise recto" class="w-full h-48 object-cover rounded-lg border-2 border-gray-200 hover:border-[#2BD834] hover:shadow-lg transition cursor-pointer">
                        </a>
                    </div>
                    @endif
                    @if($application->vehicle_registration_back)
                    <div>
                        <p class="text-sm font-semibold text-gray-700 mb-2">📋 Carte grise (Verso)</p>
                        <a href="{{ asset('storage/' . $application->vehicle_registration_back) }}" target="_blank" class="block">
                            <img src="{{ asset('storage/' . $application->vehicle_registration_back) }}" alt="Carte grise verso" class="w-full h-48 object-cover rounded-lg border-2 border-gray-200 hover:border-[#2BD834] hover:shadow-lg transition cursor-pointer">
                        </a>
                    </div>
                    @endif
                </div>
                @else
                <div class="bg-gray-50 border-2 border-gray-200 rounded-lg p-6 text-center">
                    <p class="text-gray-600 text-sm">📭 Aucun document téléchargé</p>
                </div>
                @endif
            </div>

            <!-- Vehicle Photos -->
            @if($application->vehicle_photo_front || $application->vehicle_photo_side)
            <div class="bg-white rounded-2xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center"><span class="text-2xl mr-2">📷</span> Photos du véhicule</h3>
                <div class="space-y-4">
                    @if($application->vehicle_photo_front)
                    <div>
                        <p class="text-sm font-semibold text-gray-700 mb-2">Vue de face</p>
                        <img src="{{ asset('storage/' . $application->vehicle_photo_front) }}" alt="Véhicule (vue de face)" class="w-full h-48 object-cover rounded-lg border-2 border-gray-200">
                    </div>
                    @endif
                    @if($application->vehicle_photo_side)
                    <div>
                        <p class="text-sm font-semibold text-gray-700 mb-2">Vue de profil</p>
                        <img src="{{ asset('storage/' . $application->vehicle_photo_side) }}" alt="Véhicule (vue de profil)" class="w-full h-48 object-cover rounded-lg border-2 border-gray-200">
                    </div>
                    @endif
                </div>
            </div>
            @endif
        </div>

        <!-- Right: Actions & Notes -->
                <!-- Right: Actions & Management -->
        <div class="space-y-6">
            <!-- Quick Info Card -->
            <div class="bg-white rounded-2xl shadow-lg p-6">
                <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center">
                    <span class="text-xl mr-2">ℹ️</span> Informations rapides
                </h3>
                <div class="space-y-3">
                    <div class="flex items-center justify-between py-2 border-b border-gray-100">
                        <span class="text-sm text-gray-600 flex items-center gap-2">
                            <span>📅</span> Candidature
                        </span>
                        <span class="text-sm font-semibold text-gray-900">{{ $application->created_at->format('d/m/Y') }}</span>
                    </div>
                    <div class="flex items-center justify-between py-2 border-b border-gray-100">
                        <span class="text-sm text-gray-600 flex items-center gap-2">
                            <span>⏰</span> Heure
                        </span>
                        <span class="text-sm font-semibold text-gray-900">{{ $application->created_at->format('H:i') }}</span>
                    </div>
                    @if($application->approved_at)
                    <div class="flex items-center justify-between py-2 border-b border-gray-100">
                        <span class="text-sm text-gray-600 flex items-center gap-2">
                            <span>✅</span> Approuvé le
                        </span>
                        <span class="text-sm font-semibold text-gray-900">{{ $application->approved_at->format('d/m/Y') }}</span>
                    </div>
                    @endif
                    @if($application->last_login_at)
                    <div class="flex items-center justify-between py-2">
                        <span class="text-sm text-gray-600 flex items-center gap-2">
                            <span>🔐</span> Dernière connexion
                        </span>
                        <span class="text-sm font-semibold text-gray-900">{{ $application->last_login_at->format('d/m/Y') }}</span>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Status Management -->
            <div class="bg-white rounded-2xl shadow-lg p-6">
                <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center">
                    <span class="text-xl mr-2">⚙️</span> Gérer la candidature
                </h3>
                <form action="{{ route('admin.drivers.status', $application->id) }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <fieldset>
                            <legend class="block font-semibold text-gray-700 mb-3 text-sm">Statut</legend>
                            <div class="space-y-2">
                                <label class="flex items-center p-3 border-2 rounded-xl cursor-pointer hover:bg-yellow-50 transition {{ $application->status === 'pending' ? 'border-yellow-400 bg-yellow-50' : 'border-gray-200' }}">
                                    <input type="radio" name="status" value="pending" {{ $application->status === 'pending' ? 'checked' : '' }} class="mr-3">
                                    <span class="text-sm font-medium flex items-center gap-2">
                                        <span>⏳</span> En attente
                                    </span>
                                </label>
                                <label class="flex items-center p-3 border-2 rounded-xl cursor-pointer hover:bg-green-50 transition {{ $application->status === 'approved' ? 'border-green-400 bg-green-50' : 'border-gray-200' }}">
                                    <input type="radio" name="status" value="approved" {{ $application->status === 'approved' ? 'checked' : '' }} class="mr-3">
                                    <span class="text-sm font-medium flex items-center gap-2">
                                        <span>✅</span> Approuvé
                                    </span>
                                </label>
                                <label class="flex items-center p-3 border-2 rounded-xl cursor-pointer hover:bg-red-50 transition {{ $application->status === 'rejected' ? 'border-red-400 bg-red-50' : 'border-gray-200' }}">
                                    <input type="radio" name="status" value="rejected" {{ $application->status === 'rejected' ? 'checked' : '' }} class="mr-3">
                                    <span class="text-sm font-medium flex items-center gap-2">
                                        <span>❌</span> Rejeté
                                    </span>
                                </label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="mb-4">
                        <label for="notes" class="block font-semibold text-gray-700 mb-2 text-sm">Notes administrateur</label>
                        <textarea name="notes" id="notes" rows="4" class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-[#2BD834] text-sm resize-none" placeholder="Ajoutez des notes internes...">{{ $application->admin_notes }}</textarea>
                    </div>
                    <button type="submit" class="w-full px-4 py-3 bg-gradient-to-r from-[#2BD834] to-[#22b028] text-white font-bold rounded-xl hover:shadow-lg transition text-sm">
                        💾 Enregistrer les modifications
                    </button>
                </form>
            </div>

            <!-- Admin Notes Display (if exists) -->
            @if($application->admin_notes)
            <div class="bg-amber-50 rounded-2xl border-2 border-amber-200 p-6">
                <h3 class="text-base font-bold text-amber-900 mb-3 flex items-center">
                    <span class="text-lg mr-2">📝</span> Notes actuelles
                </h3>
                <p class="text-sm text-amber-900 whitespace-pre-wrap">{{ $application->admin_notes }}</p>
            </div>
            @endif

            <!-- Password Management -->
            @if($application->status === 'approved')
            <div class="bg-white rounded-2xl shadow-lg p-6">
                <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center">
                    <span class="text-xl mr-2">🔑</span> Mot de passe
                </h3>
                <p class="text-sm text-gray-900 mb-4 leading-relaxed">
                    {{ $application->password ? 'Le conducteur a un mot de passe actif. Générez-en un nouveau si nécessaire.' : 'Aucun mot de passe. Générez des identifiants pour activer le compte.' }}
                </p>
                <form action="{{ route('admin.drivers.regenerate-password', $application->id) }}" method="POST" onsubmit="return confirm('⚠️ Confirmer la génération d\'un nouveau mot de passe ? L\'ancien sera invalide.')">
                    @csrf
                    <button type="submit" class="w-full px-4 py-3 bg-gradient-to-r from-purple-600 to-purple-700 text-gray-900 font-bold rounded-xl hover:from-purple-700 hover:to-purple-800 hover:shadow-lg transform hover:scale-[1.02] transition-all duration-200 text-sm flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                        </svg>
                        <span>{{ $application->password ? 'Régénérer' : 'Générer' }} le mot de passe</span>
                    </button>
                </form>
            </div>
            @endif

            <!-- Danger Zone -->
            <div class="bg-gradient-to-br from-red-50 to-orange-50 rounded-2xl border-2 border-red-300 shadow-sm p-6">
                <h3 class="text-lg font-bold text-red-800 mb-2 flex items-center">
                    <span class="text-2xl mr-2">⚠️</span> Zone dangereuse
                </h3>
                <p class="text-sm text-red-700 mb-4 leading-relaxed">
                    <span class="font-semibold">⚡ Attention :</span> La suppression est définitive et irréversible.
                </p>
                <form action="{{ route('admin.drivers.destroy', $application->id) }}" method="POST" onsubmit="return confirm('⚠️ ATTENTION : Êtes-vous absolument sûr de vouloir supprimer cette candidature ? Cette action est IRRÉVERSIBLE.')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="w-full px-4 py-3 bg-gradient-to-r from-red-600 to-red-700 text-gray-900 font-bold rounded-xl hover:from-red-700 hover:to-red-800 hover:shadow-lg transform hover:scale-[1.02] transition-all duration-200 text-sm flex items-center justify-center gap-2">
                        <span class="text-lg">🗑️</span>
                        <span>Supprimer définitivement</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
