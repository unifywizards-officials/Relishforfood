@extends('layouts.admin.master')

@section('title', 'Catering Menu Item Listing')

@section('page_level_style')
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('content')

    @if (Auth::user()->role == 'admin')
        <?php $route_create = 'admin.manage-catering-menu-item.create'; ?>
        <?php $route_edit = 'admin.manage-catering-menu-item.edit'; ?>
    @elseif(Auth::user()->role == 'event-manager')
        <?php $route_create = 'event-manager.manage-catering-menu-item.create'; ?>
        <?php $route_edit = 'event-manager.manage-catering-menu-item.edit'; ?>
    @else
    @endif
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Catering Menu Item Listing</h1>
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
                        <div class="card-header align-right">
                            <a href="{{ route($route_create) }}"
                                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-end">
                                <i class="fas fa-arrow-left fa-sm text-white-50"></i> Add Catering Menu Item</a>
                        </div>

                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        @if (Auth::user()->role == 'admin')
                                            <a href="javascript:;" id="deleteAllSelected" class="btn btn-danger m-2"
                                                data-table="menus">
                                                <i class="">Delete All</i>
                                            </a>

                                            <th>
                                                <input type="checkbox" id="select-all">Select All
                                            </th>
                                        @endif
                                        <th>Menu Item</th>
                                        <th>Menu</th>
                                        <th>Images</th>
                                        <th>Price</th>
                                        <th>Last Updated At</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($banner as $data)
                                        <tr data-id="{{ $data->id }}">
                                            @if (Auth::user()->role == 'admin')
                                                <td><input type="checkbox" name="ids" class="row-checkbox"
                                                        value="{{ $data->id }}" data-id="{{ $data->id }}"></td>
                                            @endif

                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->catering_menu->name }}</td>
                                            <td>
                                                @if ($data->image)
                                                    <img src="{{ asset($data->image) }}" style="height: 50px; width: 50px;">
                                                @else
                                                    <img src="{{ placeHoldercateringImage }}"
                                                        style="height: 50px; width: 50px;">
                                                @endif
                                            </td>
                                            <td>${{ $data->price }}</td>

                                            <td>{{ \Carbon\Carbon::parse($data->updated_at)->diffForHumans() }}</td>

                                            <td>{{ Date_Format($data->created_at, 'd-M-Y') }}</td>

                                            <td>
                                                <a href="{{ route($route_edit, [$data->id]) }}"
                                                    class="btn btn-primary m-2">
                                                    <i class="fa fa-pen"></i>
                                                </a>
                                                @if ($data->is_active == '1')
                                                    <a href="javascript:;" data-id="{{ $data->id }}" data-status="0"
                                                        title="deactive" data-heading="You want to deactivate"
                                                        data-buttonstatus="Yes! Change it"
                                                        class="btn btn-success m-2 deleteRecord">
                                                        <i class="fa fa-check"></i>
                                                    </a>
                                                @else
                                                    <a href="javascript:;" data-id="{{ $data->id }}" data-status="1"
                                                        title="active" data-heading="You want to activate"
                                                        data-buttonstatus="Yes! Change it"
                                                        class="btn btn-danger m-2 deleteRecord">
                                                        <i class="fa fa-ban"></i>
                                                    </a>
                                                @endif
                                                @if (Auth::user()->role == 'admin')
                                                    <a href="javascript:;" data-id="{{ $data->id }}"
                                                        data-method="DELETE" data-status="1" title="active"
                                                        data-heading="You want to delete this record"
                                                        data-buttonstatus="Yes! Delete it"
                                                        class="btn btn-danger m-2 deleteRecord">
                                                        <i class="fa fa-trash" title="delete"></i>
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
                "pageLength": 30, // Set the number of records per page
                "lengthMenu": [10, 25, 30, 50, 100], // Optional: Customize the page length options
            });
            $('#example2 tbody').sortable({
                update: function(event, ui) {
                    var items = [];
                    $('#example2 tbody tr').each(function(index, element) {
                        items.push($(element).data('id'));
                    });
                    // Table name (replace with your actual table name)
                    var tableName =
                        'catering_menu_items'; // You can dynamically set this based on your context
                    // console.log(items);return false;

                    $.ajax({
                        url: '{{ route('updateOrder') }}',
                        method: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                            items: items,
                            tableName: tableName
                        },
                        success: function(response) {
                            if (response.success) {
                                toastr.options = {
                                    "closeButton": true,
                                    "newestOnTop": true,
                                    "positionClass": "toast-top-right",
                                    "timeOut": 2000
                                };
                                toastr.success(response.success);
                                setTimeout(function() {
                                    location.reload(true);
                                }, 1000)
                            }
                        },
                        error: function(xhr, status, error) {
                            // Handle error if needed
                        }
                    });
                }
            });

        });
    </script>
@endsection
