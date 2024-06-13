@extends('base')
@section('content')
    <div>
        @foreach ($sections as $section)
            <article>
                <h1>{{ $section->name }}</h1>
                <p>
                    {{ substr($section->description, 0, 50) . '...' }}
                </p>
                <p>
                    <a href="{{ route('section.show', $section->slug) }}" class="btn btn-primary">voir plus</a>
                </p>
            </article>
        @endforeach
        {{ $sections->links() }}
    </div>
@endsection
