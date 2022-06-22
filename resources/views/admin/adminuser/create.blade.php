@extends('admin.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-info shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">BUAT DATA ADMIN</h6>
                    </div>
                </div>
                @if ($errors->any())
                    <div>
                        <div class="m-4 mb-2" style="font-size: 18px; color: red;">
                            {{ __('Whoops! Something went wrong.') }}
                        </div>

                        <ul class="mt-0 ms-4 list-disc list-inside text-sm" style="color: red;">
                            @foreach ($errors->all() as $error)
                                <li class="list-group-items ">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.adminusers.store') }}" class="text-start">
                        @csrf

                        <div class="input-group input-group-outline my-3">
                            {{-- <label class="form-label">Name</label> --}}
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="input-group input-group-outline mb-3">
                            {{-- <label class="form-label">Email</label> --}}
                            <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="input-group input-group-outline mb-3">
                            {{-- <label class="form-label">Password</label> --}}
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="input-group input-group-outline mb-3">
                            {{-- <label class="form-label">Confirm Password</label> --}}
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Password Confirmation">
                        </div>

                        <div class="dropdown">
                            <select  class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" name="roles_id"
                            style="background-color:#f49507 ; color: #fff; ">
                                @foreach ($role as $role)
                                    <option value="{{ $role->id }}" {{ old('roles_id') || ($role->id == 1) ? 'selected' : '' }}>{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-success w-100 my-4 mb-1">CREATE</button>
                        </div>
                    </form>
                  </div>
            </div>
            </div>
        </div>
    </div>
@endsection
