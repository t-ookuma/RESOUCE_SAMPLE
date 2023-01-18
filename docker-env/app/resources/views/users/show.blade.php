@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        @foreach($users as $value)
        <div class="col-md-8 mb-3">
            <div class="card">
                <div class="card-header">users.index</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col"><input type="text" class="form-control text-center" name="name" value="{{ $value->name }}" readonly></div>
                        <div class="col">
                            <form action="/users/{{ $value->id }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-danger">delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
