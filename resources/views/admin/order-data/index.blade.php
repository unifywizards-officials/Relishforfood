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
                                        <th>Coupon Code</th>
                                        <th>Order Items</th>
                                        <th>Special Instruction</th>
                                        <th>Last Updated At</th>
                                        <th>Created At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order as $data)
                                        <tr>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->phone_no }}</td>
                                            <td>{{ $data->date }}</td>
                                            <td>{{ $data->time }}</td>
                                            <td>{{ $data->coupon_code }}</td>

                                            <td>
                                                @php
                                                    $items = json_decode($data->catering_items, true);
                                                @endphp
                                                @if(is_array($items))
                                                    <ul class="list-unstyled mb-0">
                                                        @foreach ($items as $item)
                                                            <li>
                                                                <strong>Name:</strong> {{ $item['name'] }},
                                                                <strong>Qty:</strong> {{ $item['quantity'] }},
                                                                <strong>Price:</strong> ${{ number_format($item['price'], 2) }}
                                                            </li><br>
                                                        @endforeach
                                                    </ul>
                                                @else
                                                    <em>No items found</em>
                                                @endif
                                            </td>

                                            <td>{{ $data->special_request }}</td>
                                            <td>{{ \Carbon\Carbon::parse($data->updated_at)->diffForHumans() }}</td>
                                            <td>{{ Date_Format($data->created_at, 'd-M-Y') }}</td>
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
