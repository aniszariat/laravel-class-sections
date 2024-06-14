@extends('base')
@section('title')
    {{ $student->first_name . ' ' . $student->last_name . ' - Modifier' }}
@endsection
@section('content')
    @include('student.form', ['student' => $student])
@endsection
