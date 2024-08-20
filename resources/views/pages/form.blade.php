@extends('layouts.default')
@section('content')
    @include('sweetalert')
    <div class="container mb-5">
        <div class="form-container">
            <form action="{{ route('form.submit') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label><br>
                    <input type="text" class="form-control" id="name" name="name">
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="surname" class="form-label">Surname</label><br>
                    <input type="text" class="form-control" id="surname" name="surname">
                    @error('surname')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label><br>
                    <textarea class="form-control" id="exp" name="role" rows="5"></textarea>
                    @error('role')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
