@extends('admin.admin_master')

@section('admin')
    <div class="py-12">
        <div class="container">
            <div class="row">
                <h2>All About</h2>
                <a href="{{ route('add.about') }}"><button class="btn btn-info">Add About</button></a>
                <div class="col-md-12">
                    <div class="card">
                        @if(session('success'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                </button>
                            </div>
                        @endif
                        <div class="card-header"> All About Data </div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th width="5%" scope="col">SL </th>
                                <th width="15%" scope="col">Home Title</th>
                                <th width="15%" scope="col">Short Description</th>
                                <th width="25%" scope="col">Long Description</th>
                                <th width="15%" scope="col">Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @php($i=1)
                            @foreach($homeabout as $about)
                                <tr>
                                    <td> {{ $i++ }} </td>
                                    <td> {{ $about->title }} </td>
                                    <td> {{ $about->short_dis }} </td>
                                    <td> {{ $about->long_dis }} </td>
                                    <td>
                                        <a href="{{ url('about/edit/'.$about->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ url('about/delete/'.$about->id) }}" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
