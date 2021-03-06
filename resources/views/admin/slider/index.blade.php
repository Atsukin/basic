@extends('admin.admin_master')

@section('admin')
    <div class="py-12">
        <div class="container">
            <div class="row">
                <h2>Home Slider</h2>
                <a href="{{ route('add.slider') }}"><button class="btn btn-info">Add Slider</button></a>
                <div class="col-md-12">
                    <div class="card">
                        @if(session('success'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                </button>
                            </div>
                        @endif
                        <div class="card-header"> All Sliders </div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th width="5%" scope="col">SL </th>
                                <th width="15%" scope="col">Slider Title</th>
                                <th width="15%" scope="col">Description</th>
                                <th width="15%" scope="col">Image</th>
                                <th width="15%" scope="col">Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @php($i=1)
                            @foreach($sliders as $slider)
                                <tr>
                                    <td> {{ $i++ }} </td>
                                    <td> {{ $slider->title }} </td>
                                    <td> {{ $slider->description }} </td>
                                    <td> <img src="{{ asset($slider->image) }}" style="height: 40px; width: 70px; object-fit: cover;" alt=""> </td>
                                    <td>
                                        <a href="{{ url('slider/edit/'.$slider->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ url('slider/delete/'.$slider->id) }}" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger">Delete</a>
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
