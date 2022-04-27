@extends('admin.layouts.app')

@section('title', 'Criar Posts')

@section('content')
<h1>Novo Post</h1>

<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    @include('admin.posts._partials.form')
</form>

@endsection
