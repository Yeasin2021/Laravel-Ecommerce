@extends('admin.layouts.index')
@section('content')
@push('css')
<link rel="stylesheet" href="{{ asset('panel') }}/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('panel') }}/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
@endpush
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Table</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Nm</th>
                                    <th>Icon</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $key=>$item )
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $item->icon }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td style="text-align: center">
                                            <a href=""><i class="ti-pencil-alt" style="color: rgb(68, 255, 0);font-size:30px;"></i></a>
                                            <a href=""><i class="ti-trash" style="color: red; font-size:30px;"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->

@push('js')
<script src="{{ asset('panel') }}/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('panel') }}/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('panel') }}/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('panel') }}/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('panel') }}/vendors/jszip/dist/jszip.min.js"></script>
    <script src="{{ asset('panel') }}/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="{{ asset('panel') }}/vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="{{ asset('panel') }}/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('panel') }}/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('panel') }}/vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="{{ asset('panel') }}/assets/js/init-scripts/data-table/datatables-init.js"></script>
@endpush
@endsection
