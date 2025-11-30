@extends('admin.layout')

@section('title', 'Candidatures Conducteurs')

@section('content')

<div class="bg-white rounded-2xl shadow-lg p-6">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-2xl font-bold text-gray-900">Liste des candidatures conducteurs</h2>
        <div class="text-sm text-gray-600">Total: <span class="font-bold">{{ $applications->total() }}</span></div>
    </div>

    @if($applications->count() > 0)
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="border-b-2 border-gray-200">
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Taxi</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Contact</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Localisation</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Service</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Statut</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Date</th>
                        <th class="text-center py-3 px-4 font-semibold text-gray-700">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($applications as $application)
                    <tr class="border-b border-gray-100 hover:bg-gray-50">
                        <td class="py-4 px-4">
                            <div class="flex items-center gap-3">
                                @if($application->selfie)
                                    <img src="{{ asset('storage/' . $application->selfie) }}" alt="{{ $application->first_name }}" class="w-12 h-12 rounded-full object-cover border-2 border-gray-200">
                                @else
                                    <div class="w-12 h-12 rounded-full bg-gray-100 flex items-center justify-center text-xl">{{ $application->gender === 'male' ? '👨' : '👩' }}</div>
                                @endif
                                <div>
                                    <div class="font-semibold text-gray-900">{{ $application->first_name }} {{ $application->last_name }}</div>
                                    <div class="text-xs text-gray-600">{{ $application->gender === 'male' ? 'Homme' : 'Femme' }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-4">
                            <div class="text-sm text-gray-900">📧 {{ $application->email }}</div>
                            <div class="text-sm text-gray-600">📞 +216 {{ $application->phone }}</div>
                        </td>
                        <td class="py-4 px-4">
                            <div class="text-sm text-gray-900">{{ $application->city }}</div>
                            <div class="text-xs text-gray-600">{{ $application->region }}</div>
                        </td>
                        <td class="py-4 px-4">
                            <span class="px-3 py-1 bg-blue-100 text-blue-800 text-xs font-bold rounded-full">
                                {{ $application->service_type }}
                            </span>
                        </td>
                        <td class="py-4 px-4">
                            <span class="px-3 py-1 text-xs font-bold rounded-full
                                {{ $application->status === 'pending' ? 'bg-yellow-100 text-yellow-800' : '' }}
                                {{ $application->status === 'approved' ? 'bg-green-100 text-green-800' : '' }}
                                {{ $application->status === 'rejected' ? 'bg-red-100 text-red-800' : '' }}">
                                {{ strtoupper($application->status) }}
                            </span>
                        </td>
                        <td class="py-4 px-4 text-sm text-gray-600">{{ $application->created_at->format('d/m/Y') }}</td>
                        <td class="py-4 px-4 text-center">
                            <a href="{{ route('admin.drivers.show', $application->id) }}" class="inline-block px-4 py-2 bg-[#2BD834] text-white text-sm font-medium rounded-lg hover:bg-[#22b028] transition">
                                Voir détails
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-6">
            {{ $applications->links() }}
        </div>
    @else
        <div class="text-center py-12">
            <div class="text-6xl mb-4">🚗</div>
            <p class="text-gray-500 text-lg">Aucune candidature conducteur pour le moment</p>
        </div>
    @endif
</div>

@endsection
