@extends('layouts.admin.master')

@section('title', 'Booking Catering Data Listing')

@section('page_level_style')
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
<style>
    .card-body {
        overflow-x: scroll;
    }

    .catering-items-column {
        width: 300px;
        /* Adjust width as needed */
    }

    .catering-items-column {
        width: 300px;
        word-wrap: break-word;
        white-space: normal;
    }
</style>
@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Booking Catering Data Listing</h1>
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
                                    <th>Company Name</th>
                                    <th>Company Email</th>
                                    <th>Company Address</th>
                                    <!-- <th>Phone Number</th> -->
                                    <th>Client Phone Number</th>
                                    <!-- <th>Company Phone Number</th> -->

                                    <th>Delivery Date</th>
                                    <th>Delivery Time</th>
                                    <th>Coupon Code</th>
                                    <th class="catering-items-column">Catering Items</th>
                                    <th>Specific Dietary Requirements</th>
                                    <th>Last Updated At</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($book_catering as $data)
                                <tr>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->company_name }}</td>
                                    <td>{{ $data->company_email }}</td>
                                    <td>{{ $data->company_address }}</td>
                                    <!-- <td>{{ $data->po_no }}</td> -->
                                    <td>{{ $data->client_phone_no }}</td>
                                    <!-- <td>{{ $data->company_phone_no }}</td> -->

                                    <td>{{ $data->delivery_date }}</td>
                                    <td>{{ $data->delivery_time }}</td>
                                    <td>{{ $data->coupon_code }}</td>
                                    <td>



                                        @php
                                        // Decode JSON and check for errors
                                        $items = json_decode($data->catering_items, true);
                                        @endphp

                                        @php

                                        // Check for JSON errors and valid structure
                                        if (json_last_error() !== JSON_ERROR_NONE || !is_array($items)) {
                                        $items = []; // Set $items to an empty array if JSON decoding fails
                                        }
                                        @endphp



                                        @if($data->olditem)
                                        @if (!empty($items))
                                        <ul class="list-unstyled mb-0">
                                            @foreach ($items as $name => $quantity)
                                            <li>
                                                <strong>Name:</strong> {{ htmlspecialchars($name) }},
                                                <strong>Qty:</strong> {{ htmlspecialchars($quantity) }},
                                            </li><br>
                                            @endforeach
                                        </ul>
                                        @endif
                                        @else
                                       

                                        @if (is_array($items) && !empty($items))
                                        <ul class="list-unstyled mb-0">

                                            @foreach ($items as $item)
                                            <li>
                                                <strong>Name:</strong> {{ $item['name'] ?? 'N/A' }},
                                                <strong>Qty:</strong> {{ $item['quantity'] ?? 0 }},
                                                <strong>Price:</strong> ${{ number_format($item['price'] ?? 0, 2) }}
                                            </li><br>
                                            @endforeach
                                        </ul>
                                        @else
                                        <em>{{$data->catering_items}}</em>
                                        @endif
                                        @endif
                                    </td>
                                    <td>{{ $data->special_dietary_requirement }}</td>
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
                    title: 'Relish For Food |Booking Catering| Leads',
                    filename: 'Relish For Food |Booking Catering| Leads'
                },
                {
                    extend: 'csv',
                    title: 'Relish For Food |Booking Catering| Leads',
                    filename: 'Relish For Food |Booking Catering| Leads'
                },
                {
                    extend: 'excel',
                    title: 'Relish For Food |Booking Catering| Leads',
                    filename: 'Relish For Food |Booking Catering| Leads'
                },
                {
                    extend: 'pdf',
                    title: 'Relish For Food |Booking Catering| Leads',
                    filename: 'Relish For Food |Booking Catering| Leads'
                },
                {
                    extend: 'print',
                    title: 'Relish For Food |Booking Catering| Leads',
                    filename: 'Relish For Food |Booking Catering| Leads'
                }
            ]
        });
    });
</script>
@endsection