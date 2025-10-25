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
    <div class="bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-2xl shadow-xl p-8 mb-6 border-4 border-blue-300">
        <div class="flex items-start gap-4">
            <div class="text-4xl">🔑</div>
            <div class="flex-1">
                <h3 class="text-2xl font-bold mb-4">Mot de passe généré avec succès !</h3>
                <div class="bg-white text-gray-900 rounded-xl p-6 mb-4">
                    <p class="text-sm text-gray-600 mb-2">Entreprise: <strong>{{ session('user_name') }}</strong></p>
                    <p class="text-sm text-gray-600 mb-2">Email: <strong>{{ session('user_email') }}</strong></p>
                    <p class="text-sm text-gray-600 mb-4">Téléphone: <strong>{{ session('user_phone') }}</strong></p>
                    <div class="border-t-2 border-gray-200 pt-4">
                        <p class="text-sm text-gray-600 mb-2">Mot de passe temporaire:</p>
                        <div class="flex items-center gap-4">
                            <code class="text-3xl font-bold text-blue-600 bg-blue-50 px-6 py-3 rounded-lg">{{ session('generated_password') }}</code>
                            <button onclick="navigator.clipboard.writeText('{{ session('generated_password') }}')" class="px-4 py-2 bg-gray-900 text-white rounded-lg hover:bg-gray-800 transition">
                                📋 Copier
                            </button>
                        </div>
                    </div>
                </div>
                <div class="bg-yellow-100 text-yellow-900 rounded-lg p-4">
                    <p class="font-semibold mb-2">⚠️ Important:</p>
                    <ul class="text-sm space-y-1 list-disc list-inside">
                        <li>Copiez ce mot de passe maintenant, il ne sera plus affiché</li>
                        <li>Envoyez-le au partenaire par email ou SMS</li>
                        <li>L'utilisateur pourra le changer après sa première connexion</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- Application Details -->
    <div class="bg-white rounded-2xl shadow-lg p-8 mb-6">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-3xl font-bold text-gray-900">{{ $application->business_name }}</h2>
            <span class="px-4 py-2 text-sm font-bold rounded-full
                {{ $application->status === 'pending' ? 'bg-yellow-100 text-yellow-800' : '' }}
                {{ $application->status === 'approved' ? 'bg-green-100 text-green-800' : '' }}
                {{ $application->status === 'rejected' ? 'bg-red-100 text-red-800' : '' }}">
                {{ strtoupper($application->status) }}
            </span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <h3 class="font-semibold text-gray-700 mb-2">👤 Nom du contact</h3>
                <p class="text-gray-900">{{ $application->contact_name }}</p>
            </div>
            <div>
                <h3 class="font-semibold text-gray-700 mb-2">📧 Email</h3>
                <p class="text-gray-900">{{ $application->email }}</p>
            </div>
            <div>
                <h3 class="font-semibold text-gray-700 mb-2">📞 Téléphone</h3>
                <p class="text-gray-900">{{ $application->phone }}</p>
            </div>
            <div>
                <h3 class="font-semibold text-gray-700 mb-2">🏙️ Ville</h3>
                <p class="text-gray-900">{{ $application->city }}</p>
            </div>
            <div>
                <h3 class="font-semibold text-gray-700 mb-2">🤝 Type de partenariat</h3>
                <p class="text-gray-900">{{ $application->partner_type }}</p>
            </div>
            <div>
                <h3 class="font-semibold text-gray-700 mb-2">🏢 Type d'entreprise</h3>
                <p class="text-gray-900">{{ $application->business_type }}</p>
            </div>
            <div class="md:col-span-2">
                <h3 class="font-semibold text-gray-700 mb-2">📍 Adresse</h3>
                <p class="text-gray-900">{{ $application->address }}</p>
            </div>
            <div>
                <h3 class="font-semibold text-gray-700 mb-2">📅 Date de candidature</h3>
                <p class="text-gray-900">{{ $application->created_at->format('d/m/Y à H:i') }}</p>
            </div>
        </div>

        @if($application->description)
        <div class="mt-6 pt-6 border-t border-gray-200">
            <h3 class="font-semibold text-gray-700 mb-2">💬 Description de l'entreprise</h3>
            <p class="text-gray-900 whitespace-pre-wrap">{{ $application->description }}</p>
        </div>
        @endif

        @if($application->admin_notes)
        <div class="mt-6 pt-6 border-t border-gray-200">
            <h3 class="font-semibold text-gray-700 mb-2">📝 Notes de l'administrateur</h3>
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
