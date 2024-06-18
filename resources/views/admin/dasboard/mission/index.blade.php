@extends('admin.dasboard.layouts.maindashboard')

@section('container')
<div class="container mx-auto p-4 text-black">
    <h1 class="text-4xl font-bold mb-9 mt-3 text-red-600">Mission List</h1>

    <table class="min-w-full bg-white border-2 border-black">
        <thead class="bg-red-300 border-2 border-black">
            <tr class="border">
                <th class="py-2 border-r-2 border-black ">Missionary</th>
                <th class="py-2 border-r-2 border-black ">Mission</th>
                <th class="py-2 border-r-2 border-black ">Status</th>
                <th class="py-2  ">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($missions as $mission)
            <tr class="text-center ">
                <td class="py-2 border-r-2 border-black">{{ $mission->missionary->user->name }}</td>
                <td class="py-2 border-r-2 border-black">{{ $mission->mission->title }}</td>
                <td class="py-2 border-r-2 border-black">{{ $mission->mission_complete_at ? 'Completed' : 'Pending' }}</td>
                <td class="py-2">
                    <a href="{{ route('admin.missions.show', $mission->id) }}" class="text-blue-500 hover:underline hover:text-blue-700">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
