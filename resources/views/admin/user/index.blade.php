@extends('admin.app')

@section('content')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-info shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">TABLE DATA USER</h6>
                </div>
                @if (auth()->user()->roles_id == 1)

                <a href="{{ route('admin.users.create') }}" class="btn bg-gradient-success w-100 my-4 mb-2">Create</a>

                @else

                <a class="btn bg-gradient-success w-100 my-4 mb-2 onlyadmin2" onclick="return confirm('Maaf, Hanya Admin Yang Bisa Menambahkan Data :)')">
                    Create</a>

                @endif
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-20">ID</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-20">Nama</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-20">Email</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-20">KELAS</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-20">ROLE</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                             </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $user->id }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $user->name }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $user->email }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $user->kelas->name }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $user->role->name }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                <td class="align-middle">
                                   @if (auth()->user()->roles_id == 1)
                                    <a href="{{ route('admin.users.edit', $user->id) }}" class="button type button class= btn btn-success p-2">
                                        <span class="material-icons">edit</span>
                                   </a>
                                   <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="d-inline">
                                       @csrf
                                       @method('delete')
                                       <button class="btn btn-danger p-2"  href="{{ route('logout') }}" onclick="return confirm('Apakah anda akan menghapus data ini?')">
                                           <span class="material-icons">delete</span>
                                       </button>
                                   </form>
                                   @else
                                   <a class="btn btn-success p-2 onlyadmin1">
                                    <span class="material-icons" onclick="return confirm('Oops, Maaf Terjadi Kesalahan Autentikasi :)')" >edit</span>
                                </button data-toggle="tooltip" data-original-title="Edit user">
                                   </a>
                                       <a class="btn btn-danger p-2 onlyadmin1" >
                                           <span class="material-icons" onclick="return confirm('Maaf Lagi-Lagi Terjadi Kesalahan Autentikasi :)')" >delete</span>
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
