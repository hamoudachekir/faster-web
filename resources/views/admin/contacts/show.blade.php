@extends('admin.layout')

@section('title', 'Détails Message Contact')

@section('content')

<div class="max-w-4xl">
    <!-- Back Button -->
    <a href="{{ route('admin.contacts.index') }}" class="inline-flex items-center text-[#2BD834] font-medium mb-6 hover:underline">
        ← Retour à la liste
    </a>

    <!-- Message Details -->
    <div class="bg-white rounded-2xl shadow-lg p-8 mb-6">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-3xl font-bold text-gray-900">{{ $submission->name }}</h2>
            <span class="px-4 py-2 text-sm font-bold rounded-full
                {{ $submission->status === 'new' ? 'bg-red-100 text-red-800' : '' }}
                {{ $submission->status === 'read' ? 'bg-blue-100 text-blue-800' : '' }}
                {{ $submission->status === 'replied' ? 'bg-green-100 text-green-800' : '' }}
                {{ $submission->status === 'archived' ? 'bg-gray-100 text-gray-800' : '' }}">
                {{ strtoupper($submission->status ?? 'NEW') }}
            </span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <div>
                <h3 class="font-semibold text-gray-700 mb-2">📧 Email</h3>
                <p class="text-gray-900">{{ $submission->email }}</p>
            </div>
            @if($submission->phone)
            <div>
                <h3 class="font-semibold text-gray-700 mb-2">📞 Téléphone</h3>
                <p class="text-gray-900">{{ $submission->phone }}</p>
            </div>
            @endif
            <div>
                <h3 class="font-semibold text-gray-700 mb-2">📋 Sujet</h3>
                <p class="text-gray-900">{{ $submission->subject }}</p>
            </div>
            <div>
                <h3 class="font-semibold text-gray-700 mb-2">📅 Date</h3>
                <p class="text-gray-900">{{ $submission->created_at->format('d/m/Y à H:i') }}</p>
            </div>
        </div>

        <div class="pt-6 border-t border-gray-200">
            <h3 class="font-semibold text-gray-700 mb-4">💬 Message</h3>
            <div class="bg-gray-50 rounded-xl p-6">
                <p class="text-gray-900 whitespace-pre-wrap leading-relaxed">{{ $submission->message }}</p>
            </div>
        </div>

        @if($submission->admin_notes)
        <div class="mt-6 pt-6 border-t border-gray-200">
            <h3 class="font-semibold text-gray-700 mb-2">📝 Notes de l'administrateur</h3>
            <p class="text-gray-900 whitespace-pre-wrap bg-yellow-50 p-4 rounded-lg">{{ $submission->admin_notes }}</p>
        </div>
        @endif
    </div>

    <!-- Status Update Form -->
    <div class="bg-white rounded-2xl shadow-lg p-8">
        <h3 class="text-xl font-bold text-gray-900 mb-6">Gérer le message</h3>
        
        <form action="{{ route('admin.contacts.status', $submission->id) }}" method="POST">
            @csrf
            
            <div class="mb-6">
                <label class="block font-semibold text-gray-700 mb-3">Statut</label>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                    <label class="cursor-pointer">
                        <input type="radio" name="status" value="new" {{ ($submission->status ?? 'new') === 'new' ? 'checked' : '' }} class="sr-only peer">
                        <div class="px-4 py-3 bg-gray-50 border-2 border-gray-200 rounded-lg text-center peer-checked:border-red-500 peer-checked:bg-red-50 transition">
                            <div class="text-2xl mb-1">🆕</div>
                            <div class="text-sm font-medium">Nouveau</div>
                        </div>
                    </label>
                    <label class="cursor-pointer">
                        <input type="radio" name="status" value="read" {{ $submission->status === 'read' ? 'checked' : '' }} class="sr-only peer">
                        <div class="px-4 py-3 bg-gray-50 border-2 border-gray-200 rounded-lg text-center peer-checked:border-blue-500 peer-checked:bg-blue-50 transition">
                            <div class="text-2xl mb-1">📖</div>
                            <div class="text-sm font-medium">Lu</div>
                        </div>
                    </label>
                    <label class="cursor-pointer">
                        <input type="radio" name="status" value="replied" {{ $submission->status === 'replied' ? 'checked' : '' }} class="sr-only peer">
                        <div class="px-4 py-3 bg-gray-50 border-2 border-gray-200 rounded-lg text-center peer-checked:border-green-500 peer-checked:bg-green-50 transition">
                            <div class="text-2xl mb-1">✅</div>
                            <div class="text-sm font-medium">Répondu</div>
                        </div>
                    </label>
                    <label class="cursor-pointer">
                        <input type="radio" name="status" value="archived" {{ $submission->status === 'archived' ? 'checked' : '' }} class="sr-only peer">
                        <div class="px-4 py-3 bg-gray-50 border-2 border-gray-200 rounded-lg text-center peer-checked:border-gray-500 peer-checked:bg-gray-100 transition">
                            <div class="text-2xl mb-1">📦</div>
                            <div class="text-sm font-medium">Archivé</div>
                        </div>
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
                    placeholder="Ajoutez des notes internes ici...">{{ $submission->admin_notes }}</textarea>
            </div>

            <div class="flex gap-4">
                <button type="submit" class="flex-1 px-6 py-3 bg-gradient-to-r from-[#2BD834] to-[#22b028] text-white font-bold rounded-xl hover:shadow-xl transition">
                    💾 Enregistrer les modifications
                </button>
            </div>
        </form>
        
        <!-- Separate Delete Form -->
        <form action="{{ route('admin.contacts.destroy', $submission->id) }}" method="POST" class="mt-4" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce message ?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="w-full px-6 py-3 bg-red-500 text-white font-bold rounded-xl hover:bg-red-600 transition">
                🗑️ Supprimer le message
            </button>
        </form>
    </div>
</div>

@endsection
