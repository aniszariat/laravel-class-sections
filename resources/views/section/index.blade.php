@extends('base')
@section('content')
    <div>
        @foreach ($sections as $section)
            <article>
                <h1>{{ $section->name }}</h1>
                <p>
                    {{ $section->description }}
                </p>
            </article>
        @endforeach
    </div>
@endsection
