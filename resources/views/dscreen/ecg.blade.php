@extends('dscreen.layout')

@section('content')

<div class="container">


            <div class="pull-right">
                <a class="btn btn-primary" href="{{ url()->previous() }}"> Back</a>
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


        <h2 class="text-center my-5">Patient Data</h2>

            <form action="{{ route('doctor-screen.ecg_store') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <input type="hidden" name="patient_id" value="{{$patient->id}}">



                <div class="row">

                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                      </div><br><br>

                    <div class="col-lg-12 col-sm-12 col-md-12 mb-12">
                        <textarea type="text" class="form-control" placeholder="Comments" name="comment"></textarea>
                    </div><br><br><br>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </div>
            </form>
</div>

@endsection
@section('scripts1')
<script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
    </script>
@endsection
