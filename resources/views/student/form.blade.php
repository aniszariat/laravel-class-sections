<form action="{{ $student->id ? route('student.update', $student) : route('student.create') }}" method="post">
    {{-- <form method="post"> --}}
    @method($student->id ? 'PATCH' : 'POST')
    @csrf
    @if ($student->id)
        <div class="from-group mb-2"><label for="id">#id</label>
            <input name="id" id="id" type="number" class="form-control" disabled value="{{ $student->id }}">
        </div>
    @endif
    {{-- (@isset($student->id)
        <div class="from-group mb-2"><label for="id"></label><input name="id" id="id" type="number"
                class="from-control" disabled value="{{ $student->id }}"></div>
    @endisset) --}}
    <div class="from-group mb-2"><label for="first_name"> nom</label>
        <input name="first_name" id="first_name" type="text" class="form-control"
            value="{{ old('first_name', $student->first_name) }}">
        @error('first_name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="from-group mb-2"><label for="last_name"> prénom</label>
        <input name="last_name" id="last_name" type="text" class="form-control"
            value="{{ old('last_name', $student->last_name) }}">
        @error('last_name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="from-group mb-2"><label for="addresse"> addresse</label>
        <textarea name="addresse" id="addresse" class="form-control">{{ old('addresse', $student->addresse) }}</textarea>
        @error('addesse')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="from-group mb-2"><label for="age"> age</label>
        <input name="age" id="age" type="number" class="form-control"
            value="{{ old('age', $student->age) }}">
        @error('age')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="from-group mb-2">
        <button class="btn btn-success">
            enregistrer
        </button>

    </div>
</form>
