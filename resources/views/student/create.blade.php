@extends('base')
@section('title')
    nouvel étudiant
@endsection

@section('content')
    @include('student/form', ['student' => $student])
@endsection
