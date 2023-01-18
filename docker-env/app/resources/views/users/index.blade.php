@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">NAME</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control is-invalid" name="name" value="{{ old('name') }}" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
