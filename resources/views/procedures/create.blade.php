@extends('layouts.app_main')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb mt-7">
                <div class="pull-left">
                    <h2>Add New procedure</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('procedures.index') }}"> Back</a>
                </div>
            </div>
        </div>


        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{ route('procedures.store') }}" method="POST">
            @csrf


             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <select class="form-control select2" id="example-select" name="name">
                            <option value="">Select Procedure Name</option>
                            @foreach ($procedure_names as $procedure_name)
                                <option value="{{$procedure_name->name}}">{{$procedure_name->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Doctor:</strong>
                        <select name="doctor_id" id="" class="form-control">
                            <option value="">Please Select Doctor</option>
                            @foreach ($doctors as $doctor)
                            <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Fee:</strong>
                        <input type="number" name="fee" class="form-control" placeholder="Fee">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>


        </form>


    </div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $(".select2").select2({
        placeholder: "-- Choose Procedure Name --"
        });
    });
</script>
@endsection
