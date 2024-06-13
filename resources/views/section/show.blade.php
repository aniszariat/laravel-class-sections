@extends('base')

@section('title')
    {{ $section->name }}
@endsection
{{-- @dump($section) --}}
@section('content')
    <article>
        <h1>{{ $section->name }}</h1>
        <p>
            {{ $section->description }}
        </p>
        <p>
            <a href="{{ route('section.form') }}" class="btn btn-warning">modifier</a>
            <a href="{{ route('section.index') }}" class="btn btn-secondary">retour</a>
        </p>
    </article>
@endsection
