@extends('layouts.guest.master')


@section('page_level_style')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.css" />
<style>
   label.search-labels{
        font-weight: 700;
    font-size: 20px;
   }
</style>
@endsection

@section('content')

<section class="page-header" style="background-image: url(guest/images/events/events-d-1.jpg);">
			<div class="container">
				<ul class="list-unstyled breadcrumb-one">
					<li><a href="{{ route('homepage') }}">Home</a></li>
					<li><span>Events</span></li>
				</ul><!-- /.list-unstyled breadcrumb-one -->
				<h2 class="page-header__title">Events page</h2>
			</div><!-- /.container -->
		</section><!-- /.page-header -->

		<section class="sec-pad-top sec-pad-bottom">
			<div class="container">
				<div class="row">
					<div class="col-4">
						<div class="form-group">
							<label class="search-labels">Keywords</label>
							<input type="text" class="form-control" id="keywords" name="keywords" placeholder="Search By Keywords">
						</div>
					</div>
					<div class="col-4">	
						<div class="form-group">
							<label class="search-labels">Location</label>
							<input type="text" class="form-control" id="location" name="location" placeholder="Search By Location">
						</div>
					</div>
					<div class="col-4">
						<label for="daterange" class="search-labels">Select Date Range</label>
                        <input type="text" id="reportrange" name="reportrange" class="form-control" placeholder="Pick a date range">  
					</div>	
				</div>
				<br>
                <br>
                

                @if($event->isNotEmpty())
				<div id="products">
            		@include('guest.event.partial_list')
        		</div>

        		<div id="pagination">
            		@include('guest.event.pagination')
        		</div>
                @else
            		@include('guest.event.no_data')
                @endif
				<div class="row gutter-y-30">
			</div>
				
			</div><!-- /.container -->
		</section><!-- /.sec-pad-top sec-pad-bottom -->
@endsection

@section('page_level_script')
<script type="text/javascript" src="https://momentjs.com/downloads/moment.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.min.js"></script>



<script type="text/javascript">
$(document).ready(function() {
            function fetchProducts(page = 1) {
                var keywords = $('#keywords').val();
                var location = $('#location').val();
                var dateRange = $('#reportrange').val();
                var startDate = dateRange ? dateRange.split(' - ')[0] : '';
                var endDate = dateRange ? dateRange.split(' - ')[1] : '';
                console.log(startDate)
                console.log(endDate)

                $.ajax({
                    url: '{{ route('events.list') }}',
                    method: 'GET',
                    data: {
                        keywords: keywords,
                        location: location,
                        start_date: startDate,
                        end_date: endDate,
                        page: page
                    },
                    success: function(response) {
                        $('#products').html(response.event);
                            $('#pagination').html(response.pagination);
                            console.log(response.event)
                        // if (response.event && response.event.length > 0) {
                            
                        // } else {
                        //     console.log(response.event)
                        // // If response.event is empty, show a message or handle the empty state
                        // console.log('No events found.');
                        // }

                        
                    }
                });
            }

            // Fetch products on filter change
            $('#keywords, #location').on('keyup', function() {
                // console.log('dsadasds');
                fetchProducts();
            });

            // Fetch products on date range picker change
             // Initialize the date range picker
        $('#reportrange').daterangepicker({
            autoUpdateInput: false,
            locale: {
                cancelLabel: 'Clear'
            }
            
        });

        // Set the input field with the selected date range
        $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('YYYY-MM-DD') + ' - ' + picker.endDate.format('YYYY-MM-DD'));
            fetchProducts();
        });

        // Clear the input field if the user cancels the selection
        $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
            fetchProducts();
            
        });

            // Fetch products on pagination link click
            $(document).on('click', '.pagination a', function(e) {
                e.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                fetchProducts(page);
            });
        });
</script>
@endsection