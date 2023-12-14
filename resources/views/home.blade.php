@extends('layouts.master');

@section('content')
    <main role="main" class="container">
        <img src="{{asset('storage/images/1U3i8aCTJsJVStvlZo9zlkLP3LqQLHcYvoG78VZU.jpg')}}"  style="width: 500px; height: 500px" alt="">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                    <form action="{{route('upload-file')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Upload</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success mt-2">Submit</button>
                        </div>
                        <a class="btn btn-primary" style="margin-left: 120px" href="{{route('download')}}">
                            Download Image
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
