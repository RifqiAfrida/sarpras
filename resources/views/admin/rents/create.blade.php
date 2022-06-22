@extends('admin.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-info shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Halaman Peminjaman</h6>
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
                    <form method="POST" action="{{ route('admin.rents.store') }}" class="text-start">
                        @csrf

                        <div class="input-group input-group-outline my-3">
                            <input type="text" name="namapeminjam" class="form-control" placeholder="Nama Peminjam">
                        </div>
                        <div class="dropdown">
                            <select  class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" name="kelas_id"
                            style="background-color:#075ef4 ; color: #fff; ">
                                @foreach ($kelas as $kelas)
                                    <option value="{{ $kelas->id }} {{ old('kelas_id') ? 'selected' : '' }}" style="">{{ $kelas->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="dropdown">
                            <select  class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" name="inventories_id"
                            style="background-color:#075ef4 ; color: #fff; ">
                                @forelse ($inventories as $inventori)
                                    <option value="{{ $inventori->id }}" {{ old('inventories_id') ? 'selected' : '' }}>{{ $inventori->name }}</option>
                                @empty
                                    <option selected disabled>ga ada barang bos!</option>
                                @endforelse
                            </select>
                        </div>

                        <div class="input-group input-group-outline mb-3">
                            <input type="number" name="total" class="form-control" placeholder="Jumlah Barang">
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-success w-100 my-4 mb-1">Create</button>
                        </div>
                    </form>
                  </div>
            </div>
            </div>
        </div>
    </div>
@endsection
