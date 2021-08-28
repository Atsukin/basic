@extends('admin.admin_master')

@section('admin')
    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
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
                                <th scope="col">SL No</th>
                                <th scope="col">Slider Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @php($i=1)
                            @foreach($sliders as $slider)
                                <tr>
                                    <td> {{ $sliders->firstItem()+$loop->index }} </td>
                                    <td> {{ $slider->title }} </td>
                                    <td> {{ $slider->description }} </td>
                                    <td> <img src="{{ asset($slider->image) }}" style="height: 40px; width: 70px; object-fit: cover;" alt=""> </td>
                                    <td>
                                        @if($slider->created_at == NULL)
                                            <span class="text-danger"> No Date Set</span>
                                        @else
                                            {{ Carbon\Carbon::parse($slider->created_at)->diffForHumans() }}
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('slider/edit/'.$slider->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ url('slider/delete/'.$slider->id) }}" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
{{--                        {{ $brands->links() }}--}}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header"> Add Brand </div>
                        <div class="card-body">
                            <form action="{{ route('store.brand') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="brand_name" class="form-label">Brand Name</label>
                                    <input type="text" name="brand_name" class="form-control" id="brand_name" aria-describedby="emailHelp">
                                    @error('brand_name')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="brand_image" class="form-label">Brand Image</label>
                                    <input type="file" name="brand_image" class="form-control" id="brand_name" aria-describedby="emailHelp">
                                    @error('brand_image')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Add Brand</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
