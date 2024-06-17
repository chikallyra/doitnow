@extends('admin.dasboard.layouts.maindashboard')

@section('container')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Mission List</h1>

    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="py-2">Missionary</th>
                <th class="py-2">Mission</th>
                <th class="py-2">Status</th>
                <th class="py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($missions as $mission)
            <tr>
                <td class="py-2">{{ $mission->missionary->user->name }}</td>
                <td class="py-2">{{ $mission->mission->title }}</td>
                <td class="py-2">{{ $mission->mission_complete_at ? 'Completed' : 'Pending' }}</td>
                <td class="py-2">
                    <a href="{{ route('admin.missions.show', $mission->id) }}" class="text-blue-500">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
