@extends('admin.layout')

@section('title', 'Détails du Commentaire')

@section('content')

<div class="mb-8">
    <a href="{{ route('admin.feedback.index') }}" class="inline-flex items-center text-[#2BD834] hover:text-[#22b028] font-semibold transition">
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

<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    <!-- Main Content -->
    <div class="lg:col-span-2">
        <div class="bg-white rounded-2xl shadow-lg p-8">
            <!-- User Info -->
            <div class="flex items-center space-x-4 mb-6 pb-6 border-b border-gray-200">
                <div class="flex-shrink-0 h-16 w-16 bg-gradient-to-br from-[#2BD834] to-[#22b028] rounded-full flex items-center justify-center text-white font-bold text-2xl">
                    {{ strtoupper(substr($feedback->user->name, 0, 1)) }}
                </div>
                <div class="flex-1">
                    <h2 class="text-xl font-bold text-gray-900">{{ $feedback->user->name }}</h2>
                    <p class="text-sm text-gray-600">{{ $feedback->user->email }}</p>
                    <p class="text-sm text-gray-600">{{ $feedback->user->phone ?? 'Pas de téléphone' }}</p>
                </div>
                <div>
                    <span class="px-3 py-1 text-xs font-bold rounded-full
                        {{ $feedback->status === 'new' ? 'bg-blue-100 text-blue-800' : '' }}
                        {{ $feedback->status === 'read' ? 'bg-yellow-100 text-yellow-800' : '' }}
                        {{ $feedback->status === 'responded' ? 'bg-green-100 text-green-800' : '' }}">
                        @if($feedback->status === 'new')
                            Nouveau
                        @elseif($feedback->status === 'read')
                            Lu
                        @else
                            Répondu
                        @endif
                    </span>
                </div>
            </div>

            <!-- Rating -->
            <div class="mb-6">
                <h3 class="text-sm font-bold text-gray-700 mb-2">Note globale</h3>
                <div class="flex items-center space-x-2">
                    @for($i = 1; $i <= 5; $i++)
                    <svg class="w-8 h-8 {{ $i <= $feedback->rating ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    @endfor
                    <span class="ml-2 text-lg font-bold text-gray-700">{{ $feedback->rating }}/5</span>
                </div>
            </div>

            <!-- Category -->
            <div class="mb-6">
                <h3 class="text-sm font-bold text-gray-700 mb-2">Catégorie</h3>
                <span class="inline-block px-4 py-2 bg-gray-100 text-gray-700 text-sm font-semibold rounded-full">
                    {{ $feedback->category }}
                </span>
            </div>

            <!-- Message -->
            <div class="mb-6">
                <h3 class="text-sm font-bold text-gray-700 mb-2">Message</h3>
                <div class="p-4 bg-gray-50 rounded-xl">
                    <p class="text-gray-700 leading-relaxed">{{ $feedback->message }}</p>
                </div>
            </div>

            <!-- Date -->
            <div class="text-sm text-gray-500">
                Envoyé le {{ $feedback->created_at->format('d/m/Y à H:i') }} ({{ $feedback->created_at->diffForHumans() }})
            </div>

            <!-- Admin Response -->
            @if($feedback->admin_response)
            <div class="mt-6 p-6 bg-green-50 border-l-4 border-green-500 rounded-lg">
                <h3 class="text-sm font-bold text-green-900 mb-2 flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6"/>
                    </svg>
                    Votre réponse
                </h3>
                <p class="text-green-800">{{ $feedback->admin_response }}</p>
            </div>
            @endif
        </div>
    </div>

    <!-- Sidebar Actions -->
    <div class="lg:col-span-1 space-y-6">
        <!-- Respond Card -->
        @if(!$feedback->admin_response)
        <div class="bg-white rounded-2xl shadow-lg p-6">
            <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center">
                <svg class="w-5 h-5 mr-2 text-[#2BD834]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6"/>
                </svg>
                Répondre
            </h3>
            <form action="{{ route('admin.feedback.respond', $feedback->id) }}" method="POST">
                @csrf
                <textarea name="admin_response" 
                          rows="5" 
                          class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition mb-3" 
                          placeholder="Votre réponse à l'utilisateur..."
                          required></textarea>
                <button type="submit" class="w-full px-4 py-3 bg-[#2BD834] text-white font-bold rounded-xl hover:bg-[#22b028] transition">
                    Envoyer la réponse
                </button>
            </form>
        </div>
        @endif

        <!-- Delete Card -->
        <div class="bg-white rounded-2xl shadow-lg p-6 border-2 border-red-200">
            <h3 class="text-lg font-bold text-red-900 mb-4 flex items-center">
                <svg class="w-5 h-5 mr-2 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                </svg>
                Zone de danger
            </h3>
            <form action="{{ route('admin.feedback.destroy', $feedback->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce commentaire ?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="w-full px-4 py-3 bg-red-600 hover:bg-red-700 transition font-bold rounded-xl flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                    </svg>
                    <span class="text-gray-900">Supprimer le commentaire</span>
                </button>
            </form>
        </div>
    </div>
</div>

@endsection
