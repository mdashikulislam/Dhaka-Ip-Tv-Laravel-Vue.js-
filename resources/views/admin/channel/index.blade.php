@extends('admin.layouts.app')
@section('content-title')
    Channel List
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="user_table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <style>
        .small-image{
            max-width: 80px;
            height: auto;
        }
        .table td.fit,
        .table th.fit {
            white-space: nowrap;
            width: 1%;
        }
    </style>
@endpush
@push('js')
    <script src="{{ asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script>
        $('#user_table').DataTable({
            processing: true,
            serverSide: true,
            responsive:true,
            "ordering": false,
            ajax: {
                url: "{{ route('channel.index') }}",
            },
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },

                {
                    data: 'image',
                    name: 'image',
                    orderable: false,
                    defaultContent: ""
                },
                {
                    data: 'title',
                    name: 'title',
                    defaultContent: ""
                },
                {
                    data: 'status',
                    name: 'status',
                    defaultContent: ""
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    defaultContent: ""
                }
            ]
        });
    </script>
@endpush
