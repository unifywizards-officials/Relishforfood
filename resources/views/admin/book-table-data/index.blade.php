@extends('layouts.admin.master')

@section('title', 'Booking Table Data Listing')

@section('page_level_style')
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Booking Table Data Listing</h1>
                </div>
                <div class="col-sm-6">

                </div>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone Number</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>No Of Guest</th>
                                        <th>Reservation Type</th>
                                        <th>Special Request</th>
                                        <th>Last Updated At</th>
                                        <th>Created At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($book_table as $data)
                                        <tr>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->phone_no }}</td>
                                            <td>{{ $data->date }}</td>
                                            <td>{{ $data->time }}</td>
                                            <td>{{ $data->no_of_guest }}</td>
                                            <td>{{ $data->reservation_type }}</td>
                                            <td>{{ $data->special_request }}</td>
                                            <td>{{ \Carbon\Carbon::parse($data->updated_at)->diffForHumans() }}</td>
                                            <td>{{ Date_Format($data->created_at, 'd-M-Y') }}</td>
                                            <!-- <td>{{ Date_Format($data->created_at, 'd-M-Y h-i-s') }}</td> -->
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
@endsection

@section('page_level_script')

    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#example2').DataTable({
                ordering: false,
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'copy',
                        title: 'Relish For Food |Booking Table| Leads',
                        filename: 'Relish For Food |Booking Table| Leads'
                    },
                    {
                        extend: 'csv',
                        title: 'Relish For Food |Booking Table| Leads',
                        filename: 'Relish For Food |Booking Table| Leads'
                    },
                    {
                        extend: 'excel',
                        title: 'Relish For Food |Booking Table| Leads',
                        filename: 'Relish For Food |Booking Table| Leads'
                    },
                    {
                        extend: 'pdf',
                        title: 'Relish For Food |Booking Table| Leads',
                        filename: 'Relish For Food |Booking Table| Leads'
                    },
                    {
                        extend: 'print',
                        title: 'Relish For Food |Booking Table| Leads',
                        filename: 'Relish For Food |Booking Table| Leads'
                    }
                ]
            });
        });
    </script>
@endsection
