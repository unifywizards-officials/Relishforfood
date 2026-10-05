@extends('layouts.admin.master')

@section('title','Product Edit')

@section('page_level_style')
<!-- Select2 -->
<link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<!-- Select2 -->
@endsection

@section('content')

@if(Auth::user()->role=='admin')
<?php $route_update='admin.manage-product.update';?>
<?php $route_index='admin.manage-product.index';?>
@else
@endif

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Product</h1>
            </div>
            <div class="col-sm-6">
                <!-- <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol> -->
            </div>
        </div>
    </div>
</div>


<section class="content">
    <div class="container-fluid">
        <div class="col-12">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Product</h3>
                </div>

                <div class="card-body">
                    <!--------Messages ------------------------------------>
                    @include('layouts.admin.alertmessage')
                    <!------------EndMessages-------------------------------->
                    <form action="{{ route($route_update,$product->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name"
                                        placeholder="Enter Product Name" value="{{$product->name}}">
                                </div>
                            </div>


                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label>Slug(URL EndPoint)</label>
                                    <input type="text" class="form-control" name="slug" placeholder="Enter Product Title"
                                        value="{{$product->slug}}">
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Select Category</label>
                                    <div class="select2-purple">
                                        <select class="select2" name="category_id"
                                            data-placeholder="Select a Category"
                                            data-dropdown-css-class="select2-purple" style="width: 100%;">
                                            @foreach($category as $data)
                                            <option value="{{$data->id}}"
                                                {{ $data->id ? 'selected' : '' }}>
                                                {{$data->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            
                            </div>


                        </div>

                        

                        @if($product->image)
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="exampleInputFile">Product Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    {!! fileinstruction !!}
                                    <br>
                                    <span class="span-bold">file dimentions :(370px width and 288px height)</span>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <img src="{{asset($product->image)}}" width="250" height="100" alt="Post Image">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Product Image Alt Tag</label>
                                    <input type="text" class="form-control" name="image_alt"
                                        placeholder="Product Image Alt Tag" value="{{$product->image_alt}}" required>
                                </div>
                            </div>
                        </div>

                        @else
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="exampleInputFile">Product Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    {!! fileinstruction !!}
                                    <br>
                                    <span class="span-bold">file dimentions :(370px width and 288px height)</span>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Product Image Alt Tag</label>
                                    <input type="text" class="form-control" name="image_alt"
                                        placeholder="Product Image Alt Tag" value="{{$product->image_alt}}" required>
                                </div>
                            </div>
                        </div>
                        @endif


                        <div class="row">

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Select Product Ratings</label>
                                    <div class="select2-purple">
                                        <select class="select2"  name="rating"
                                            data-placeholder="Select a Rating"
                                            data-dropdown-css-class="select2-purple" style="width: 100%;">
                                            <option value="1" @if($product->rating == '1')  selected @else @endif>1</option>
                                            <option value="2" @if($product->rating == '2')  selected @else @endif>2</option>
                                            <option value="3" @if($product->rating == '3')  selected @else @endif>3</option>
                                            <option value="4" @if($product->rating == '4')  selected @else @endif>4</option>
                                            <option value="5" @if($product->rating == '5')  selected @else @endif>5</option> 
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Select Product Type</label>
                                    <div class="select2-purple">
                                        <select class="select2"  name="type"
                                            data-placeholder="Select a Type"
                                            data-dropdown-css-class="select2-purple" style="width: 100%;">
                                            <option value="1" @if($product->type == '1')  selected @else @endif>New Arrivals</option>
                                            <option value="2" @if($product->type == '2')  selected @else @endif>Recently Saled</option>
                                            <option value="3" @if($product->type == '3')  selected @else @endif>Hot</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Price(₹)</label>
                                    <input type="number" id="price" class="form-control" name="price"
                                        placeholder="Enter Price" value="{{$product->price}}" required>
                                </div>
                            </div> 

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Discount(In %)</label>
                                    <input type="text" id="discount" class="form-control" name="discount"
                                        placeholder="Enter Discount in %" value="{{$product->discount}}" required>
                                </div>
                            </div>    

                        </div> 



                        <div class="row">
                            <div class="col-sm-12">

                                <div class="form-group">
                                    <label>Short Description</label>
                                    <textarea class="form-control" id="" rows="3" name="short_description"
                                        placeholder="Enter Short Description"
                                        required>{{$product->short_description}}</textarea>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-12">

                                <div class="form-group">
                                    <label>Long Description</label>
                                    <textarea class="form-control editorsummernote" id="" rows="3"
                                        name="long_description"
                                        placeholder="Enter Long Description">{{$product->long_description}}</textarea>
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <h3 for="customRange3">Seo Content <i class="nav-icon fas fa-search"></i></h3>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label>Meta Title</label>
                                    <input type="text" class="form-control" name="meta_title"
                                        placeholder="Enter Meta Title" value="{{$product->meta_title}}" required>
                                </div>
                            </div>

                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label>Meta Keyword</label>
                                    <input type="text" class="form-control" name="meta_keyword"
                                        placeholder="Enter Meta Keyword" required value="{{$product->meta_keyword}}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">

                                <div class="form-group">
                                    <label>Meta Description</label>
                                    <textarea class="form-control" id="" rows="3" name="meta_description"
                                        placeholder="Enter Meta Description">{{$product->meta_description}}</textarea>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-12">

                                <div class="form-group">
                                    <label>Meta Open Graph</label>
                                    <textarea class="form-control" id="" rows="8" name="meta_og"
                                        placeholder="Enter Meta Open Graph">{{$product->meta_og}}</textarea>
                                </div>
                            </div>

                        </div>


                        <button type="submit" class="btn btn-success btn-user float-right mb-3">Update</button>
                        <a class="btn btn-primary float-right mr-3 mb-3"
                            href="{{ route($route_index) }}">Cancel</a>


                    </form>
                </div>

            </div>

        </div>

    </div>
</section>
@endsection

@section('page_level_script')
<!-- Select2 -->
<script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('assets/js/bootstrap4-toggle.min.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

<script>
$(document).ready(function() {
    $('.select2').select2();
})
</script>

<script>
$(document).ready(function() {
    $('.editorsummernote').summernote();
});
</script>
<script>
$(document).ready(function() {
        $('#discount').on('input', function() {
            var value = $(this).val();
            
            // Allow only numbers and a single dot
            value = value.replace(/[^0-9.]/g, '');
            
            // Ensure only one decimal point
            if (value.split('.').length > 2) {
                value = value.replace(/\.+$/, "");
            }

            // Limit to 1 decimal place
            if (value.indexOf('.') !== -1) {
                var parts = value.split('.');
                if (parts[1].length > 1) {
                    parts[1] = parts[1].slice(0, 1);
                    value = parts.join('.');
                }
            }

            // Ensure the value is between 0 and 100
            if (value !== '') {
                var floatValue = parseFloat(value);
                if (floatValue > 100) {
                    value = '100';
                } else if (floatValue < 0) {
                    value = '0';
                }
            }

            $(this).val(value);
        });
    });
</script>
@endsection