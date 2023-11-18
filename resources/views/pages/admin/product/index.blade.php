@extends('layouts.admin')

@section('title')
    Product
@endsection

@section('content')
     <!-- Section Content -->
        <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
            <h2 class="dashboard-title">Product</h2>
            <p class="dashboard-subtitle">Daftar Product</p>
            </div>
            <!-- Dashboard Content -->
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="{{ route('product.create') }}" class="btn btn-primary mb-3">
                                 + Tambah Product Baru
                                </a>

                                <div class="table-responsive">
                                    <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama</th>
                                                <th>Pemilik</th>
                                                <th>kategori</th>
                                                <th>Harga</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- 10:36 CRUD Kategori List --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dashboard Content -->
        </div>
        </div>
    <!-- Section Content -->
@endsection

@push('addon-script')
    <script>
        var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: '{!! url()->current() !!}', // Perhatikan Pengetikan URL
            },
            columns: [
                { data: 'id', name: 'id'},
                { data: 'name', name: 'name'},
                { data: 'user.name', name: 'user.name'},
                { data: 'category.name', name: 'category.name'},
                { data: 'price', name: 'price'},
                { 
                  data: 'action', 
                  name: 'action',
                  orderable: false,
                  searchable: false,
                  width: '15%'
                },
            ]
        });
    </script>
@endpush