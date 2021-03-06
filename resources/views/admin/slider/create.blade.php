@extends('admin.admin_master')

@section('admin')

    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Create Slider</h2>
            </div>

            <div class="card-body">
                <form action="{{ route('store.slider') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Slider Title</label>
                        <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Slider Title">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Slider Description</label>
                        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Slider Image</label>
                        <input type="file" name="image" class="form-control" id="exampleFormControlFile1">
                    </div>

                    <button type="submit" class="btn btn-primary">Add Slider</button>

                </form>
            </div>
        </div>
    </div>

@endsection
