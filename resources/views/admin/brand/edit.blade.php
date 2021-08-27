<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Brand <b></b>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"> Edit Brand </div>
                        <div class="card-body">
                            <form action="{{ url('brand/update/'.$brands->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="old_image" value="{{ $brands->brand_image }}">
                                <div class="form-group">
                                    <label for="brand_name" class="form-label">Update Brand Name</label>
                                    <input type="text" name="brand_name" class="form-control"
                                           id="brand_name" aria-describedby="emailHelp" value="{{ $brands->brand_name }}" />

                                    @error('brand_name')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="brand_image" class="form-label">Update Brand Image</label>
                                    <input type="file" name="brand_image" class="form-control" id="brand_name" aria-describedby="emailHelp">

                                    @error('brand_image')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <img src="{{ asset($brands->brand_image) }}" style="width: 400px; height: 200px; object-fit: cover;" alt="">
                                </div>

                                <button type="submit" class="btn btn-primary">Update Category</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>