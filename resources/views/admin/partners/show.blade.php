@extends('admin.layout')

@section('title', 'Détails Candidature Partenaire')

@section('content')

<div class="max-w-4xl">
    <!-- Back Button -->
    <a href="{{ route('admin.partners.index') }}" class="inline-flex items-center text-[#2BD834] font-medium mb-6 hover:underline">
        ← Retour à la liste
    </a>

    <!-- Password Generated Alert -->
    @if(session('generated_password'))
    <div class="bg-white rounded-2xl shadow-2xl p-8 mb-6 border-4 border-blue-500">
        <div class="flex items-start gap-4">
            <div class="flex-shrink-0 w-16 h-16 bg-blue-500 rounded-2xl flex items-center justify-center">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"/>
                </svg>
            </div>
            <div class="flex-1">
                <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                    <svg class="w-6 h-6 text-blue-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    Mot de passe généré avec succès !
                </h3>
                <div class="bg-gray-50 rounded-xl p-6 mb-4 border-2 border-gray-200">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                        <div>
                            <p class="text-xs text-gray-500 mb-1">Entreprise</p>
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
                            <div class="flex-1 bg-gradient-to-r from-blue-50 to-cyan-50 border-2 border-blue-500 rounded-xl px-6 py-4">
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
                                    <span>Envoyez-le au partenaire par <strong>email ou SMS sécurisé</strong></span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-yellow-600 mr-2">•</span>
                                    <span>Le partenaire pourra le modifier après sa première connexion</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- Application Details -->
    <div class="bg-white rounded-2xl shadow-lg p-8 mb-6">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-2">{{ $application->business_name }}</h2>
                <p class="text-sm text-gray-500">🏢 {{ $application->business_type }}</p>
            </div>
            <span class="px-4 py-2 text-sm font-bold rounded-full
                {{ $application->status === 'pending' ? 'bg-yellow-100 text-yellow-800' : '' }}
                {{ $application->status === 'approved' ? 'bg-green-100 text-green-800' : '' }}
                {{ $application->status === 'rejected' ? 'bg-red-100 text-red-800' : '' }}">
                {{ strtoupper($application->status) }}
            </span>
        </div>

        <!-- Section 1: Company Information -->
        <div class="mb-8">
            <div class="flex items-center gap-2 mb-4">
                <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg">
                    1
                </div>
                <h3 class="text-xl font-bold text-gray-900">Informations de l'entreprise</h3>
            </div>
            <div class="pl-12 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h4 class="font-semibold text-gray-700 mb-2">🏢 Nom de l'entreprise</h4>
                    <p class="text-gray-900 font-medium">{{ $application->business_name }}</p>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-700 mb-2">🏭 Type d'activité</h4>
                    <p class="text-gray-900">{{ $application->business_type }}</p>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-700 mb-2">📋 Numéro d'immatriculation</h4>
                    <p class="text-gray-900 font-mono bg-gray-50 px-3 py-2 rounded-lg inline-block">{{ $application->registration_number ?? 'Non renseigné' }}</p>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-700 mb-2">🌐 Site web</h4>
                    @if($application->website)
                        <a href="{{ $application->website }}" target="_blank" class="text-blue-600 hover:underline">{{ $application->website }}</a>
                    @else
                        <p class="text-gray-400">Non renseigné</p>
                    @endif
                </div>
                <div class="md:col-span-2">
                    <h4 class="font-semibold text-gray-700 mb-2">📍 Adresse complète</h4>
                    <p class="text-gray-900 bg-gray-50 px-4 py-3 rounded-lg">{{ $application->address }}</p>
                </div>
            </div>
        </div>

        <!-- Section 2: Contact Person -->
        <div class="mb-8 pt-6 border-t border-gray-200">
            <div class="flex items-center gap-2 mb-4">
                <div class="w-10 h-10 bg-gradient-to-br from-green-500 to-emerald-500 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg">
                    2
                </div>
                <h3 class="text-xl font-bold text-gray-900">Personne de contact</h3>
            </div>
            <div class="pl-12 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h4 class="font-semibold text-gray-700 mb-2">👤 Nom et prénom</h4>
                    <p class="text-gray-900 font-medium">{{ $application->contact_name }}</p>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-700 mb-2">💼 Fonction</h4>
                    <p class="text-gray-900">{{ $application->contact_position ?? 'Non renseignée' }}</p>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-700 mb-2">📞 Téléphone</h4>
                    <p class="text-gray-900 font-medium">
                        <span class="text-gray-600">+216</span> {{ $application->phone }}
                    </p>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-700 mb-2">📧 Email professionnel</h4>
                    <p class="text-gray-900">{{ $application->email }}</p>
                </div>
            </div>
        </div>

        <!-- Section 3: Mobility Needs -->
        <div class="pt-6 border-t border-gray-200">
            <div class="flex items-center gap-2 mb-4">
                <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg">
                    3
                </div>
                <h3 class="text-xl font-bold text-gray-900">Besoins en mobilité</h3>
            </div>
            <div class="pl-12 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h4 class="font-semibold text-gray-700 mb-2">🚗 Courses mensuelles estimées</h4>
                    <p class="text-gray-900 font-bold text-lg">
                        @if($application->monthly_rides === '0-100')
                            0 - 100 courses
                        @elseif($application->monthly_rides === '100-500')
                            100 - 500 courses
                        @elseif($application->monthly_rides === '500-1000')
                            500 - 1,000 courses
                        @elseif($application->monthly_rides === '1000+')
                            Plus de 1,000 courses
                        @else
                            {{ $application->monthly_rides ?? 'Non renseigné' }}
                        @endif
                    </p>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-700 mb-2">📅 Horaires de service</h4>
                    @if($application->schedule && is_array($application->schedule))
                        <div class="flex flex-wrap gap-2">
                            @foreach($application->schedule as $time)
                                <span class="px-3 py-1 bg-gradient-to-r from-[#2BD834] to-[#22b028] text-white text-sm font-semibold rounded-full">
                                    @if($time === 'heures_bureau')
                                        🕐 Heures de bureau
                                    @elseif($time === '24_7')
                                        🌙 24/7
                                    @elseif($time === 'weekends')
                                        📅 Weekends
                                    @elseif($time === 'autres')
                                        ⚙️ Autres
                                    @else
                                        {{ $time }}
                                    @endif
                                </span>
                            @endforeach
                        </div>
                    @else
                        <p class="text-gray-400">Non renseigné</p>
                    @endif
                </div>
                @if($application->schedule_other)
                <div class="md:col-span-2">
                    <h4 class="font-semibold text-gray-700 mb-2">💬 Autres horaires spécifiés</h4>
                    <p class="text-gray-900 bg-blue-50 px-4 py-3 rounded-lg">{{ $application->schedule_other }}</p>
                </div>
                @endif
            </div>
        </div>

        <!-- Additional Info -->
        <div class="mt-8 pt-6 border-t border-gray-200 grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <h4 class="font-semibold text-gray-700 mb-2">📅 Date de candidature</h4>
                <p class="text-gray-900">{{ $application->created_at->format('d/m/Y à H:i') }}</p>
            </div>
            @if($application->approved_at)
            <div>
                <h4 class="font-semibold text-gray-700 mb-2">✅ Date d'approbation</h4>
                <p class="text-gray-900">{{ $application->approved_at->format('d/m/Y à H:i') }}</p>
            </div>
            @endif
        </div>

        @if($application->admin_notes)
        <div class="mt-6 pt-6 border-t border-gray-200">
            <h4 class="font-semibold text-gray-700 mb-2">📝 Notes de l'administrateur</h4>
            <p class="text-gray-900 whitespace-pre-wrap bg-yellow-50 p-4 rounded-lg">{{ $application->admin_notes }}</p>
        </div>
        @endif
    </div>

    <!-- Status Update Form -->
    <div class="bg-white rounded-2xl shadow-lg p-8 mb-4">
        <h3 class="text-xl font-bold text-gray-900 mb-6">Gérer la candidature</h3>
        
        <form action="{{ route('admin.partners.status', $application->id) }}" method="POST">
            @csrf
            
            <div class="mb-6">
                <label class="block font-semibold text-gray-700 mb-3">Statut</label>
                <div class="flex gap-4">
                    <label class="flex-1">
                        <input type="radio" name="status" value="pending" {{ $application->status === 'pending' ? 'checked' : '' }} class="mr-2">
                        <span class="px-4 py-2 bg-yellow-100 text-yellow-800 rounded-lg inline-block">⏳ En attente</span>
                    </label>
                    <label class="flex-1">
                        <input type="radio" name="status" value="approved" {{ $application->status === 'approved' ? 'checked' : '' }} class="mr-2">
                        <span class="px-4 py-2 bg-green-100 text-green-800 rounded-lg inline-block">✅ Approuvé</span>
                    </label>
                    <label class="flex-1">
                        <input type="radio" name="status" value="rejected" {{ $application->status === 'rejected' ? 'checked' : '' }} class="mr-2">
                        <span class="px-4 py-2 bg-red-100 text-red-800 rounded-lg inline-block">❌ Rejeté</span>
                    </label>
                </div>
            </div>

            <div class="mb-6">
                <label for="notes" class="block font-semibold text-gray-700 mb-2">Notes administrateur</label>
                <textarea
                    name="notes"
                    id="notes"
                    rows="4"
                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-[#2BD834]"
                    placeholder="Ajoutez des notes internes ici...">{{ $application->admin_notes }}</textarea>
            </div>

            <button type="submit" class="w-full px-6 py-3 bg-gradient-to-r from-[#2BD834] to-[#22b028] text-white font-bold rounded-xl hover:shadow-xl transition">
                💾 Enregistrer les modifications
            </button>
        </form>

        <!-- Delete Form (separate) -->
        <form action="{{ route('admin.partners.destroy', $application->id) }}" method="POST" class="mt-4" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette candidature ?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="w-full px-6 py-3 bg-red-500 text-white font-bold rounded-xl hover:bg-red-600 transition">
                🗑️ Supprimer la candidature
            </button>
        </form>
    </div>

    <!-- Password Management -->
    @if($application->status === 'approved' && $application->password)
    <div class="bg-white rounded-2xl shadow-lg p-8">
        <h3 class="text-xl font-bold text-gray-900 mb-4">🔑 Gestion du mot de passe</h3>
        <p class="text-gray-900 mb-4 font-medium">
            Ce partenaire a déjà un mot de passe. Pour des raisons de sécurité, les mots de passe sont cryptés et ne peuvent pas être affichés.
            Vous pouvez générer un nouveau mot de passe si nécessaire.
        </p>
        <form action="{{ route('admin.partners.regenerate-password', $application->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir générer un nouveau mot de passe ? L\'ancien ne fonctionnera plus.')">
            @csrf
            <button type="submit" class="px-6 py-3 bg-gradient-to-r from-gray-900 to-gray-800 text-white font-bold rounded-xl hover:shadow-xl transition">
                🔄 Générer un nouveau mot de passe
            </button>
        </form>
    </div>
    @endif
</div>

@endsection
