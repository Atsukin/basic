@extends('admin.admin_master')

@section('admin')

    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Edit About</h2>
            </div>

            <div class="card-body">
                <form action="{{ url('update/homeabout/'.$homeabout->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">About Title</label>
                        <input type="text" name="title" class="form-control" id="exampleFormControlInput1"
                            value="{{ $homeabout->title }}">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea2">Short Description</label>
                        <textarea name="short_dis" class="form-control" id="exampleFormControlTextarea1" rows="3">
                            {{ $homeabout->short_dis }}
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Long Description</label>
                        <textarea name="long_dis" class="form-control" id="exampleFormControlFile1">
                            {{ $homeabout->long_dis }}
                        </textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>

                </form>
            </div>
        </div>
    </div>

@endsection
