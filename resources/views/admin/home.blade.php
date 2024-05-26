@extends('layouts.main')
  
@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div>
                    <a href="">to the list</a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <x-forms.tinymce-editor/>

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                    <button class="inline-flex justify-center items-center py-2 lg:px-14 text-lg font-medium text-center mt-5 text-white rounded-full bg-red-400 border-2 shadow-xl shadow-slate-600 hover:bg-black focus:ring-4 focus:ring-red-300 ">
                        Logout                       
                    </button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection