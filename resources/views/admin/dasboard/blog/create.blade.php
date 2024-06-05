@extends('admin.dasboard.layouts.maindashboard')

@section('container')
<x-forms.tinymce-editor :categories="$categories"/>
@endsection
