@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Update Profile
                    </div>
                    <div class="card-body">
                        <form action="{{ route('profile.update') }}" method="POST">
                            @method('PUT')
                            @csrf
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                            <div class="d-flex justify-content-end mt-4">
                                <button class="btn btn-info btn-sm" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
