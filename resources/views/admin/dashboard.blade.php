@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')

<!-- Stats Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
    <!-- Pending Drivers -->
    <div class="bg-white rounded-2xl shadow-lg p-6 border-l-4 border-yellow-500">
        <div class="flex items-center justify-between mb-4">
            <div class="text-3xl">🚗</div>
            <span class="px-3 py-1 bg-yellow-100 text-yellow-800 text-xs font-bold rounded-full">EN ATTENTE</span>
        </div>
        <div class="text-3xl font-bold text-gray-900 mb-2">{{ $stats['pending_drivers'] }}</div>
        <div class="text-sm text-gray-600">Candidatures conducteurs</div>
        <a href="{{ route('admin.drivers.index') }}" class="mt-4 inline-block text-sm text-[#2BD834] font-medium hover:underline">
            Voir tous →
        </a>
    </div>

    <!-- Approved Drivers -->
    <div class="bg-white rounded-2xl shadow-lg p-6 border-l-4 border-green-500">
        <div class="flex items-center justify-between mb-4">
            <div class="text-3xl">✅</div>
            <span class="px-3 py-1 bg-green-100 text-green-800 text-xs font-bold rounded-full">APPROUVÉS</span>
        </div>
        <div class="text-3xl font-bold text-gray-900 mb-2">{{ $stats['approved_drivers'] }}</div>
        <div class="text-sm text-gray-600">Conducteurs actifs</div>
    </div>

    <!-- Pending Partners -->
    <div class="bg-white rounded-2xl shadow-lg p-6 border-l-4 border-yellow-500">
        <div class="flex items-center justify-between mb-4">
            <div class="text-3xl">🤝</div>
            <span class="px-3 py-1 bg-yellow-100 text-yellow-800 text-xs font-bold rounded-full">EN ATTENTE</span>
        </div>
        <div class="text-3xl font-bold text-gray-900 mb-2">{{ $stats['pending_partners'] }}</div>
        <div class="text-sm text-gray-600">Candidatures partenaires</div>
        <a href="{{ route('admin.partners.index') }}" class="mt-4 inline-block text-sm text-[#2BD834] font-medium hover:underline">
            Voir tous →
        </a>
    </div>

    <!-- Approved Partners -->
    <div class="bg-white rounded-2xl shadow-lg p-6 border-l-4 border-green-500">
        <div class="flex items-center justify-between mb-4">
            <div class="text-3xl">✅</div>
            <span class="px-3 py-1 bg-green-100 text-green-800 text-xs font-bold rounded-full">APPROUVÉS</span>
        </div>
        <div class="text-3xl font-bold text-gray-900 mb-2">{{ $stats['approved_partners'] }}</div>
        <div class="text-sm text-gray-600">Partenaires actifs</div>
    </div>

    <!-- Unread Messages -->
    <div class="bg-white rounded-2xl shadow-lg p-6 border-l-4 border-blue-500">
        <div class="flex items-center justify-between mb-4">
            <div class="text-3xl">📧</div>
            <span class="px-3 py-1 bg-blue-100 text-blue-800 text-xs font-bold rounded-full">NOUVEAUX</span>
        </div>
        <div class="text-3xl font-bold text-gray-900 mb-2">{{ $stats['unread_contacts'] }}</div>
        <div class="text-sm text-gray-600">Messages non lus</div>
        <a href="{{ route('admin.contacts.index') }}" class="mt-4 inline-block text-sm text-[#2BD834] font-medium hover:underline">
            Lire →
        </a>
    </div>

    <!-- Total Messages -->
    <div class="bg-white rounded-2xl shadow-lg p-6 border-l-4 border-gray-500">
        <div class="flex items-center justify-between mb-4">
            <div class="text-3xl">💬</div>
            <span class="px-3 py-1 bg-gray-100 text-gray-800 text-xs font-bold rounded-full">TOTAL</span>
        </div>
        <div class="text-3xl font-bold text-gray-900 mb-2">{{ $stats['total_contacts'] }}</div>
        <div class="text-sm text-gray-600">Messages total</div>
    </div>
    
    <!-- Total Users -->
    <div class="bg-white rounded-2xl shadow-lg p-6 border-l-4 border-purple-500">
        <div class="flex items-center justify-between mb-4">
            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
            </svg>
            <span class="px-3 py-1 bg-purple-100 text-purple-800 text-xs font-bold rounded-full">UTILISATEURS</span>
        </div>
        <div class="text-3xl font-bold text-gray-900 mb-2">{{ $stats['total_users'] }}</div>
        <div class="text-sm text-gray-600">Utilisateurs inscrits</div>
        <a href="{{ route('admin.users.index') }}" class="mt-4 inline-block text-sm text-[#2BD834] font-medium hover:underline">
            Gérer →
        </a>
    </div>
    
    <!-- Active Users -->
    <div class="bg-white rounded-2xl shadow-lg p-6 border-l-4 border-indigo-500">
        <div class="flex items-center justify-between mb-4">
            <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <span class="px-3 py-1 bg-indigo-100 text-indigo-800 text-xs font-bold rounded-full">ACTIFS</span>
        </div>
        <div class="text-3xl font-bold text-gray-900 mb-2">{{ $stats['active_users'] }}</div>
        <div class="text-sm text-gray-600">Comptes actifs</div>
    </div>
</div>

<!-- Recent Activity -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <!-- Recent Drivers -->
    <div class="bg-white rounded-2xl shadow-lg p-6">
        <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center">
            <span class="text-2xl mr-2">🚗</span>
            Conducteurs récents
        </h3>
        @if($recent_drivers->count() > 0)
            <div class="space-y-3">
                @foreach($recent_drivers as $driver)
                <a href="{{ route('admin.drivers.show', $driver->id) }}" class="block p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition">
                    <div class="flex items-center justify-between">
                        <div class="flex-1">
                            <div class="font-semibold text-gray-900">{{ $driver->first_name }} {{ $driver->last_name }}</div>
                            <div class="text-sm text-gray-600">{{ $driver->email }} · {{ $driver->phone }}</div>
                            <div class="text-xs text-gray-500 mt-1">{{ $driver->created_at->diffForHumans() }}</div>
                        </div>
                        <span class="px-3 py-1 text-xs font-bold rounded-full
                            {{ $driver->status === 'pending' ? 'bg-yellow-100 text-yellow-800' : '' }}
                            {{ $driver->status === 'approved' ? 'bg-green-100 text-green-800' : '' }}
                            {{ $driver->status === 'rejected' ? 'bg-red-100 text-red-800' : '' }}">
                            {{ strtoupper($driver->status) }}
                        </span>
                    </div>
                </a>
                @endforeach
            </div>
        @else
            <p class="text-gray-500 text-center py-8">Aucune candidature conducteur</p>
        @endif
    </div>

    <!-- Recent Partners -->
    <div class="bg-white rounded-2xl shadow-lg p-6">
        <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center">
            <span class="text-2xl mr-2">🤝</span>
            Partenaires récents
        </h3>
        @if($recent_partners->count() > 0)
            <div class="space-y-3">
                @foreach($recent_partners as $partner)
                <a href="{{ route('admin.partners.show', $partner->id) }}" class="block p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition">
                    <div class="flex items-center justify-between">
                        <div class="flex-1">
                            <div class="font-semibold text-gray-900">{{ $partner->business_name }}</div>
                            <div class="text-sm text-gray-600">{{ $partner->contact_name }} · {{ $partner->email }}</div>
                            <div class="text-xs text-gray-500 mt-1">{{ $partner->created_at->diffForHumans() }}</div>
                        </div>
                        <span class="px-3 py-1 text-xs font-bold rounded-full
                            {{ $partner->status === 'pending' ? 'bg-yellow-100 text-yellow-800' : '' }}
                            {{ $partner->status === 'approved' ? 'bg-green-100 text-green-800' : '' }}
                            {{ $partner->status === 'rejected' ? 'bg-red-100 text-red-800' : '' }}">
                            {{ strtoupper($partner->status) }}
                        </span>
                    </div>
                </a>
                @endforeach
            </div>
        @else
            <p class="text-gray-500 text-center py-8">Aucune candidature partenaire</p>
        @endif
    </div>
</div>

<!-- Recent Messages -->
<div class="mt-6 bg-white rounded-2xl shadow-lg p-6">
    <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center">
        <span class="text-2xl mr-2">📧</span>
        Messages récents
    </h3>
    @if($recent_contacts->count() > 0)
        <div class="space-y-3">
            @foreach($recent_contacts as $contact)
            <a href="{{ route('admin.contacts.show', $contact->id) }}" class="block p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition">
                <div class="flex items-center justify-between">
                    <div class="flex-1">
                        <div class="flex items-center gap-2">
                            <div class="font-semibold text-gray-900">{{ $contact->name }}</div>
                            @if($contact->status === 'new')
                                <span class="px-2 py-0.5 bg-red-500 text-white text-xs font-bold rounded-full">NOUVEAU</span>
                            @endif
                        </div>
                        <div class="text-sm text-gray-600">{{ $contact->subject }}</div>
                        <div class="text-sm text-gray-500 mt-1">{{ Str::limit($contact->message, 100) }}</div>
                        <div class="text-xs text-gray-400 mt-1">{{ $contact->created_at->diffForHumans() }}</div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    @else
        <p class="text-gray-500 text-center py-8">Aucun message</p>
    @endif
</div>

@endsection
