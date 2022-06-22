@extends('admin.app')

@section('content')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-info shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">TABLE DATA INVENTORI</h6>
                </div>
                <a href="{{ route('admin.inventories.create') }}" class="btn bg-gradient-success w-100 my-4 mb-2">Create</a>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-20">ID</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-20">NAMA PENGIMPOR</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-20">NAMA BARANG</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-20">JUMLAH</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-20">AKSI</th></th>
                                    <th class="text-uppercase text-secondary"></th>
                                </tr>
                             </thead>
                            <tbody>
                                @foreach ($inventories as $inventories)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $inventories->id }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $inventories->user->name }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $inventories->name }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $inventories->qty }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                <td class="align-middle">
                                   @if (auth()->user()->roles_id == 1)
                                   <a href="{{ route('admin.inventories.edit', $inventories->id) }}" class="button type button class= btn btn-success p-2"><span class="material-icons">edit</span></button data-toggle="tooltip" data-original-title="Edit user">
                                   </a>
                                   <form action="inventories/hapus/{{$inventories->id}}}" method="POST" class="d-inline">
                                       @csrf
                                       @method('delete')
                                       <button class="btn btn-danger p-2"  href="{{ route('logout') }}" onclick="return confirm('Apakah anda akan menghapus data ini?')">
                                           <span class="material-icons">delete</span>
                                       </button>
                                   </form>
                                   @else
                                   <a class="btn btn-success p-2 onlyadmin1">
                                    <span class="material-icons" onclick="return confirm('Oops, Maaf Terjadi Kesalahan Autentikasi :)')" >edit</span>
                                   </a>
                                   </a>
                                       <a class="btn btn-danger p-2 onlyadmin1" onclick="return confirm('Oops, Maaf Terjadi Kesalahan Autentikasi')" >
                                           <span class="material-icons">delete</span>
                                       </a>
                                   @endif
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
    </div>
@endsection
