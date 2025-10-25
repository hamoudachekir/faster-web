@extends('admin.layout')

@section('title', 'Messages de Contact')

@section('content')

<div class="bg-white rounded-2xl shadow-lg p-6">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-2xl font-bold text-gray-900">Liste des messages de contact</h2>
        <div class="text-sm text-gray-600">Total: <span class="font-bold">{{ $submissions->total() }}</span></div>
    </div>

    @if($submissions->count() > 0)
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="border-b-2 border-gray-200">
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Nom</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Contact</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Sujet</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Message</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Statut</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Date</th>
                        <th class="text-center py-3 px-4 font-semibold text-gray-700">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($submissions as $submission)
                    <tr class="border-b border-gray-100 hover:bg-gray-50 {{ $submission->status === 'new' ? 'bg-blue-50' : '' }}">
                        <td class="py-4 px-4">
                            <div class="flex items-center gap-2">
                                <div class="font-semibold text-gray-900">{{ $submission->name }}</div>
                                @if($submission->status === 'new')
                                    <span class="px-2 py-0.5 bg-red-500 text-white text-xs font-bold rounded-full">NOUVEAU</span>
                                @endif
                            </div>
                        </td>
                        <td class="py-4 px-4">
                            <div class="text-sm text-gray-900">{{ $submission->email }}</div>
                            @if($submission->phone)
                                <div class="text-sm text-gray-600">{{ $submission->phone }}</div>
                            @endif
                        </td>
                        <td class="py-4 px-4">
                            <span class="px-3 py-1 bg-indigo-100 text-indigo-800 text-xs font-bold rounded-full">
                                {{ $submission->subject }}
                            </span>
                        </td>
                        <td class="py-4 px-4">
                            <div class="text-sm text-gray-600 max-w-xs truncate">{{ $submission->message }}</div>
                        </td>
                        <td class="py-4 px-4">
                            <span class="px-3 py-1 text-xs font-bold rounded-full
                                {{ $submission->status === 'new' ? 'bg-red-100 text-red-800' : '' }}
                                {{ $submission->status === 'read' ? 'bg-blue-100 text-blue-800' : '' }}
                                {{ $submission->status === 'replied' ? 'bg-green-100 text-green-800' : '' }}
                                {{ $submission->status === 'archived' ? 'bg-gray-100 text-gray-800' : '' }}">
                                {{ strtoupper($submission->status ?? 'NEW') }}
                            </span>
                        </td>
                        <td class="py-4 px-4 text-sm text-gray-600">{{ $submission->created_at->format('d/m/Y H:i') }}</td>
                        <td class="py-4 px-4 text-center">
                            <a href="{{ route('admin.contacts.show', $submission->id) }}" class="inline-block px-4 py-2 bg-[#2BD834] text-white text-sm font-medium rounded-lg hover:bg-[#22b028] transition">
                                Voir message
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-6">
            {{ $submissions->links() }}
        </div>
    @else
        <div class="text-center py-12">
            <div class="text-6xl mb-4">�</div>
            <p class="text-gray-500 text-lg">Aucun message de contact pour le moment</p>
        </div>
    @endif
</div>

@endsection
