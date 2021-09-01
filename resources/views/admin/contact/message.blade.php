@extends('admin.admin_master')

@section('admin')
    <div class="py-12">
        <div class="container">
            <div class="row">
                <h4>Contact Page</h4>
                <a href="{{ route('admin.add.contact') }}"><button class="btn btn-info">Add Contact</button></a>
                <div class="col-md-12">
                    <div class="card">
                        @if(session('success'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                </button>
                            </div>
                        @endif
                        <div class="card-header"> All Contact Data </div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th width="5%" scope="col">SL </th>
                                <th width="15%" scope="col">Contact Address</th>
                                <th width="15%" scope="col">Contact email</th>
                                <th width="25%" scope="col">Contact Phone</th>
                                <th width="15%" scope="col">Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @php($i=1)
                            @foreach($contacts as $con)
                                <tr>
                                    <td scope="row"> {{ $i++ }} </td>
                                    <td> {{ $con->address }} </td>
                                    <td> {{ $con->email }} </td>
                                    <td> {{ $con->phone }} </td>
                                    <td>
                                        <a href="{{ url('contact/edit/'.$con->id) }}" class="btn btn-info">Edit</a>
                                        <a href="{{ url('contact/delete/'.$con->id) }}" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger">Delete</a>
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
