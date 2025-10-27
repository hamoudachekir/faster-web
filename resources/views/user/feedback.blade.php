@extends('layouts.app')

@section('title', 'Commentaires - Faster')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-[#0000ff]/5 via-white to-[#2BD834]/5 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-6">
            <a href="{{ route('user.dashboard') }}" class="inline-flex items-center text-gray-600 hover:text-[#2BD834] transition">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Retour au tableau de bord
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

        <div class="bg-white rounded-3xl shadow-xl p-8">
            <div class="flex items-center space-x-4 mb-8">
                <div class="w-16 h-16 bg-gradient-to-br from-[#0000ff] to-[#0000cc] rounded-xl flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                </div>
                <div>
                    <h1 class="text-3xl font-bold text-gray-900">Commentaires sur l'application</h1>
                    <p class="text-gray-600">Votre avis compte pour nous</p>
                </div>
            </div>

            <!-- Feedback Form -->
            <form action="{{ route('user.feedback.store') }}" method="POST" class="space-y-6" x-data="{ rating: 0 }">
                @csrf
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Note globale *</label>
                    <div class="flex gap-2 items-center">
                        @for($i = 1; $i <= 5; $i++)
                        <button type="button" 
                                @click="rating = {{ $i }}"
                                class="hover:scale-110 transition-transform">
                            <svg class="w-10 h-10" 
                                 :class="rating >= {{ $i }} ? 'text-yellow-400' : 'text-gray-300'" 
                                 fill="currentColor" 
                                 viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        </button>
                        @endfor
                        <span class="ml-3 text-sm text-gray-600" x-show="rating > 0">
                            <span x-text="rating"></span>/5 étoiles
                        </span>
                    </div>
                    <input type="hidden" name="rating" :value="rating" required>
                    @error('rating')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Catégorie *</label>
                    <select id="category" name="category" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition @error('category') border-red-500 @enderror" required>
                        <option value="">Sélectionnez une catégorie</option>
                        <option value="Suggestion d'amélioration" {{ old('category') === "Suggestion d'amélioration" ? 'selected' : '' }}>Suggestion d'amélioration</option>
                        <option value="Signaler un problème" {{ old('category') === 'Signaler un problème' ? 'selected' : '' }}>Signaler un problème</option>
                        <option value="Félicitations" {{ old('category') === 'Félicitations' ? 'selected' : '' }}>Félicitations</option>
                        <option value="Autre" {{ old('category') === 'Autre' ? 'selected' : '' }}>Autre</option>
                    </select>
                    @error('category')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Votre message *</label>
                    <textarea id="message" 
                              name="message" 
                              rows="6" 
                              class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition @error('message') border-red-500 @enderror" 
                              placeholder="Partagez votre expérience avec Faster..." 
                              required>{{ old('message') }}</textarea>
                    @error('message')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="w-full bg-gradient-to-r from-[#2BD834] to-[#22b028] text-white font-semibold px-6 py-3 rounded-xl hover:shadow-xl transition duration-300 transform hover:scale-105">
                    Envoyer mon commentaire
                </button>
            </form>

            <hr class="my-8">

            <!-- Previous Feedback -->
            <h2 class="text-xl font-bold text-gray-900 mb-6">Mes commentaires précédents</h2>
            
            @if($feedbacks->count() > 0)
                <div class="space-y-4">
                    @foreach($feedbacks as $feedback)
                    <div class="border border-gray-200 rounded-xl p-6 hover:shadow-md transition">
                        <div class="flex items-start justify-between mb-3">
                            <div class="flex items-center space-x-2">
                                @for($i = 1; $i <= 5; $i++)
                                <svg class="w-5 h-5 {{ $i <= $feedback->rating ? 'text-yellow-400' : 'text-gray-300' }}" 
                                     fill="currentColor" 
                                     viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                @endfor
                                <span class="text-sm font-semibold text-gray-700">{{ $feedback->rating }}/5</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="px-3 py-1 text-xs font-semibold rounded-full
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
                        
                        <div class="mb-3">
                            <span class="inline-block px-3 py-1 bg-gray-100 text-gray-700 text-sm rounded-full">
                                {{ $feedback->category }}
                            </span>
                        </div>
                        
                        <p class="text-gray-700 mb-3">{{ $feedback->message }}</p>
                        
                        @if($feedback->admin_response)
                        <div class="mt-4 p-4 bg-green-50 border-l-4 border-green-500 rounded">
                            <p class="text-sm font-semibold text-green-900 mb-1">Réponse de l'équipe Faster:</p>
                            <p class="text-sm text-green-800">{{ $feedback->admin_response }}</p>
                        </div>
                        @endif
                        
                        <div class="mt-3 text-xs text-gray-500">
                            {{ $feedback->created_at->format('d/m/Y à H:i') }} · {{ $feedback->created_at->diffForHumans() }}
                        </div>
                    </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-8">
                    <div class="text-5xl mb-3">📝</div>
                    <p class="text-gray-600">Vous n'avez pas encore envoyé de commentaires</p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
