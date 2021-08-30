@extends('admin.admin_master')

@section('admin')

    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Contact Form</h2>
            </div>

            <div class="card-body">
                <form action="{{ route('store.about') }}" method="POST">

                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Contact Email</label>
                        <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Slider Title">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea2">Contact Phone</label>
                        <textarea name="short_dis" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Contact Address</label>
                        <textarea name="long_dis" class="form-control" id="exampleFormControlFile1"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>

@endsection
