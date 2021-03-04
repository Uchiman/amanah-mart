@extends('layouts.admin', ['title' => "Daftar Produk - Amanah.com"])

@section('style')
    <link href="{{ asset('template/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <div aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <i class="fas fa-home mt-0_5 breadcrumb-item"></i>
                    <li class="breadcrumb-item"> <a class="text-decoration-none" href=""> Home </a> </li>
                    <li class="breadcrumb-item active" aria-current="page"> <a class="text-decoration-none" href="{{route('penjualan.index')}}">Penjualan</a> </li>
                    <li class="breadcrumb-item active" aria-current="page">Show</li>
                </ol>
            </div>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header d-flex justify-content-between py-3">
                <h6 class="m-0 font-weight-bold text-primary">DAFTAR PENJUALAN</h6>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>nama</th>
                                <th>barcode</th>
                                <th>jumlah produk</th>
                                <th>harga</th>
                                <th>jumlah harga</th>
                                <th>tanggal</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>nama</th>
                                <th>barcode</th>
                                <th>jumlah produk</th>
                                <th>harga</th>
                                <th>jumlah harga</th>
                                <th>tanggal</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($Cart as $cart)
                                <tr>

                                    <td>{{ $cart->name }}</td>
                                    <td>{{ $cart->barcode }}</td>
                                    <td>{{ $cart->jumlah_product }}</td>
                                    <td>{{ $cart->harga }}</td>
                                    <td>{{ $cart->jumlah_harga }}</td>
                                    <td>{{ $cart->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <form action="{{route ('penjualan.index')}}" method="get">
                        <button class="btn btn-warning"type="submit">BALI</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

@endsection

@section('script')

    <script src="{{ asset('template/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('template/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/datatables.js') }}"></script>

    {{-- jquery --}}
    <script src="{{ asset('js/script.js') }}"></script>

@endsection
