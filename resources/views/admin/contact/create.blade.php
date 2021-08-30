@extends('admin.admin_master')

@section('admin')

    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Contact Form</h2>
            </div>

            <div class="card-body">
                <form action="{{ route('store.contact') }}" method="POST">

                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Contact Email</label>
                        <input type="text" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea2">Contact Phone</label>
                        <input type="text" name="phone" class="form-control" id="exampleFormControlTextarea1">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Contact Address</label>
                        <textarea name="address" class="form-control" id="exampleFormControlFile1"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>

@endsection
