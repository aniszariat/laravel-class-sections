@extends('base')

@section('title')
    {{ $section->name }}
@endsection
{{-- @dump($section->student) --}}
@section('content')
    <article>
        <h1>{{ $section->name }}</h1>
        <span class="badge bg-secondary"> {{ $section->id . ': ' . $section->slug }}</span>
        <p>
            {{ $section->description }}
        </p>

        <p>
            <a href="{{ route('student.create', null) }}" class="btn btn-outline-primary">ajouter un étudiant</a>
        </p>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#id</th>
                    <th scope="col">Etudiant</th>
                    <th scope="col">Addresse</th>
                    <th scope="col">Voir</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($section->student as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->first_name . ' ' . $student->last_name . ' - ' . $student->age . ' ans' }}
                        </td>
                        <td>{{ $student->addresse }}</td>
                        <td>
                            <div>
                                <a href="{{ route('student.show', $student->id) }}" class="btn btn-primary">voir plus</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{--         <ul>
            @foreach ($section->student as $student)
                <li> <a href="{{ route('student.show', $student->id) }}"></a></li>
            @endforeach
        </ul> --}}
        <p>
            {{-- <a href="{{ route('section.form') }}" class="btn btn-warning">modifier</a> --}}
            <a href="{{ route('section.index') }}" class="btn btn-secondary">retour</a>
        </p>
    </article>
@endsection
