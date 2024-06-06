@extends('admin.dasboard.layouts.maindashboard')

@section('container')
<div class="pt-16 mx-20">
    <h1 class="text-red-600 text-4xl font-bold ">Question Admin</h1>
    <div class="grid grid-cols-1 gap-4 lg:grid-cols-6 lg:gap-2 border-2 p-3 rounded-lg shadow-lg shadow-gray-300 mt-8">
        @foreach ($questions as $question)
        <a href="{{ route('question.show', $question->id) }}" class="h-12 max-w-full rounded-lg bg-red-500 hover:bg-red-400 shadow-lg shadow-red-100 flex justify-center items-center">
            <h1 class="text-center px-2 text-white font-medium text-lg">{{ $question->first_name }}</h1>
        </a>
        @endforeach
    </div>
</div>
@endsection
