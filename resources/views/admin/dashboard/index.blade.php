@extends('admin.app')

@section('content')

<div class="container-fluid py-4">
    <div class="row">
    <div class="col-4 mb-xl-0 mb-4">
        <div class="card" style="">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
              <i class="material-icons opacity-10">house</i>
            </div>
            <div class="text-end pt-1">
           <a class="text info font-weight-bold" target="_blank">KELAS</a>
              <h4 class="mb-0">{{ $totalkelas }}</h4>
            </div>
          </div>
          <hr class="dark horizontal my-0">
          <div class="card-footer p-4">
          </div>
        </div>
      </div>

      <div class="col-4 mb-xl-0 mb-4">
        <div class="card" style="">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-warning shadow-warning text-center border-radius-xl mt-n4 position-absolute">
              <i class="material-icons opacity-10">archive</i>
            </div>
            <div class="text-end pt-1">
           <a class="text info font-weight-bold" target="_blank">INVENTORI</a>
              <h4 class="mb-0">{{ $inventories }}</h4>
            </div>
          </div>
          <hr class="dark horizontal my-0">
          <div class="card-footer p-4">
          </div>
        </div>
      </div>
    <div class="col-4 mb-xl-0 mb-4">
        <div class="card" style="">
          <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-success shadow-primary text-center border-radius-xl mt-n4 position-absolute">
              <i class="material-icons opacity-10">person</i>
            </div>
            <div class="text-end pt-1">
           <a class="text info font-weight-bold" target="_blank">ADMIN</a>
              <h4 class="mb-0">{{ $totaladmin }}</h4>
            </div>
          </div>
          <hr class="dark horizontal my-0">
          <div class="card-footer p-4">
          </div>
        </div>
      </div>
    </div>
  </div>

{{-- DATA INVENTORI TERBARU --}}
    <div class="container-fluid py-4">
      <div class="col-12">
        <div class="card">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-success shadow-primary border-radius-lg pt-4 pb-3">
                <h5  class="text-white text-capitalize ps-3">Import Inventori Terbaru</h5>
            </div>
          </div>

          <div class="card-body px-0 pb-2">
            <div class="table-responsive">
                <table class="table align-items-center mb-0 overflow-auto">
                          <thead>                              
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-20">ICON</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-20">NAMA BARANG</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-20">JUMLAH</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-20">WAKTU MASUK</th>
                                <th class="text-uppercase text-secondary"></th>
                            </tr>
                          </thead>
                    <tbody>
                        <div class="style1">
                            <div class="style1 bg-gradient-info w-10"  aria-valuenow="10" aria-valuemin="0" aria-valuemax="15"></div>
                        </div>
                        @foreach ($inventoriestotal as $inventori )
                          <tr>
                            <td>
                              <div class="d-flex px-2 py-1">
                                  <div>
                                      <span class="material-icons m-2 me-4">archive</span></button data-toggle="tooltip" data-original-title="profile userr">
                                  </div>
                            </td>
                            <td>
                              <div class="d-flex flex-column justify-content-center mt-1">
                                   <h6 class="mb-0 text-sm">{{ $inventori->name }}</h6>
                            </td>
                            <td>
                             <div class="d-flex px-2 py-1">
                                  <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">{{ $inventori->qty }}</h6>
                                  </div>
                              </div>
                            </td>
                            <td>
                                <span class="mb-0 text-sm">{{ $inventori->created_at->diffForHumans() }}</span>
                            </td>
                                    </div>
                                </div>
                            </td>
                            @endforeach
                          </tr>
                    </tbody>
                </table>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection