@extends('admin.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-info shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">UPDATE BARANG INVENTORI</h6>
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
                    <form method="POST" action="{{ route('admin.inventories.update', $inventory->id) }}" class="text-start">
                        @csrf
                        @method('patch')

                        <div class="input-group input-group-outline my-3">
                            {{-- <label class="form-label">Name</label> --}}
                            <input type="text" name="name" class="form-control" placeholder="Nama Barang" value="{{ $inventory->name }}">
                        </div>
                        <div class="input-group input-group-outline mb-3">
                            {{-- <label class="form-label">Email</label> --}}
                            <input type="number" name="qty" class="form-control" placeholder="Jumlah Barang" value="{{ $inventory->qty }}">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-success w-100 my-4 mb-1">UPDATE</button>
                        </div>
                    </form>
                  </div>
            </div>
            </div>
        </div>
    </div>
@endsection
