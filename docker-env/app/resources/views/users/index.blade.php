@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">users.index</div>
                <div class="card-body">
                    <ul>
                        <li><a href="{{ route('users.create') }}">users.create</a></li>
                        <li><a href="{{ route('users.show', ['user' => $id]) }}">users.show</a></li>
                        <li><a href="{{ route('users.edit', ['user' => $id]) }}">users.edit</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
     