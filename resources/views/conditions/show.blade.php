@extends('layouts.app_main')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb mt-7">
            <div class="pull-left">
                <h2> Show condition</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('conditions.index') }}"> Back</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $condition->name }}
            </div>
        </div>

    </div>
</div>
@endsection
