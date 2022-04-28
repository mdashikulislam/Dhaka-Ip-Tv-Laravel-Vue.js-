@extends('admin.layouts.app')
@section('content-title')
    Channel Category
    <a href="{{route('channel.category.create')}}" class="btn btn-success"><i class="fa fa-plus fa-fw"></i>Create Category</a>
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
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Status</th>
                                <th>Homepage</th>
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
                url: "{{ route('channel.category.index') }}",
            },
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },

                {
                    data: 'name',
                    name: 'name',
                    defaultContent: ""
                },
                {
                    data: 'slug',
                    name: 'slug',
                    defaultContent: ""
                },
                {
                    data: 'status',
                    name: 'status',
                    defaultContent: ""
                },
                {
                    data: 'homepage',
                    name: 'homepage',
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
        $(document).on('click','.delete',function (e){
           e.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "Are you want to delete this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $(this).parent('div').children('form').submit();
                }
            })
        });
    </script>
@endpush
