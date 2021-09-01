@extends('admin.admin_master')

@section('admin')
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Change Password</h2>
        </div>
        <div class="card-body">
            <div class="form-pill">
                <form action="{{ route('password.update') }}" class="form-pill" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="current_password">Current Password</label>
                        <input type="password" name="oldpassword" class="form-control" id="current_password"
                            placeholder="Current Password">
                        @error('oldpassword')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input type="password" name="password" class="form-control" id="password"
                            placeholder="New Password">
                        @error('password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation"
                            placeholder="Confirm Password">
                        @error('password_confirmation')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-default"> Save </button>
                </form>
            </div>
        </div>
    </div>
@endsection
