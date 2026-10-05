@extends('layouts.admin.master')

@section('title', 'Catering Menu Item Create')

@section('page_level_style')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection

@section('content')

    @if (Auth::user()->role == 'admin')
        <?php $route_create = 'admin.manage-catering-menu-item.store'; ?>
        <?php $route_index = 'admin.manage-catering-menu-item.index'; ?>
    @elseif(Auth::user()->role == 'event-manager')
        <?php $route_create = 'event-manager.manage-catering-menu-item.store'; ?>
        <?php $route_index = 'event-manager.manage-catering-menu-item.index'; ?>
    @else
    @endif
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create Catering Menu Item</h1>
                </div>
                <div class="col-sm-6">
                </div>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="container-fluid">
            <div class="col-12">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Create Catering Menu Item</h3>
                    </div>

                    <div class="card-body">
                        <!--------Messages ------------------------------------>
                        @include('layouts.admin.alertmessage')
                        <!------------EndMessages-------------------------------->
                        <form method="POST" action="{{ route($route_create) }}" enctype="multipart/form-data">
                            @csrf

                            <div class="col-12">

                                <div class="form-group">
                                    <label>Menu Item Name</label>
                                    <input type="text" class="form-control" name="name"
                                        placeholder="Enter Menu Item Name" value="{{ old('name') }}" required>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Select Menu</label>
                                        <div class="select2-purple">
                                            <select class="form-control" name="catering_menu_id" style="width: 100%;"
                                                required>
                                                @foreach ($menu as $data)
                                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="text" class="form-control" name="price" placeholder="Enter Price"
                                            value="{{ old('price') }}" required>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input"
                                                    id="exampleInputFile" required>
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                        {!! fileinstruction !!}
                                        <br>
                                        <span class="span-bold">file dimentions :(399px width and 420 height)</span>
                                    </div>
                                </div>

                                <!-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Alt Image</label>
                                        <input type="text" class="form-control" name="image_alt"
                                            placeholder="Enter Image Alt" value="{{ old('image_alt') }}" required>
                                    </div>
                                </div> -->


                            </div>



                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control editorsummernote" id="" rows="3" name="description" placeholder="Enter Description">{{ old('description') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Is Popular</label>
                                <div class="select2-purple">
                                    <select class="form-control" name="is_popular" style="width: 100%;">
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success btn-user float-right mb-3">Save</button>
                            <a class="btn btn-primary float-right mr-3 mb-3" href="{{ route($route_index) }}">Cancel</a>


                        </form>
                    </div>

                </div>

            </div>

        </div>
    </section>
@endsection

@section('page_level_script')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.editorsummernote').summernote();
        });
    </script>
@endsection
