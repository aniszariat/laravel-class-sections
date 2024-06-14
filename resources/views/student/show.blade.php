@extends('base')
@section('title')
    {{ $student->first_name . ' ' . $student->last_name }}
@endsection
@section('content')
    <div class="card" style="width: 100%;">
        {{-- <img src="..." class="card-img-top" alt="..."> --}}
        <div class="card-body">
            <h5 class="card-title">{{ $student->first_name . ' ' . $student->last_name }}</h5>
            <p class="card-text">{{ $student->addresse }}</p>
            <p class="card-text">{{ $student->age }}</p>
            <a href="{{ route('student.edit', $student->id) }}" class="btn btn-warning">edit</a>
            <a href="#" class="btn btn-danger">delete</a>
        </div>
    </div>
@endsection
