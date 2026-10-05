@extends('layouts.admin.master')

@section('title', 'Gallery Create')

@section('page_level_style')

@endsection

@section('content')

    @if (Auth::user()->role == 'admin')
        <?php $route_create = 'admin.manage-gallery.store'; ?>
        <?php $route_index = 'admin.manage-gallery.index'; ?>
    @elseif(Auth::user()->role == 'event-manager')
        <?php $route_create = 'event-manager.manage-gallery.store'; ?>
        <?php $route_index = 'event-manager.manage-gallery.index'; ?>
    @else
    @endif
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create Gallery</h1>
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
                        <h3 class="card-title">Create Gallery</h3>
                    </div>

                    <div class="card-body">
                        <!--------Messages ------------------------------------>
                        @include('layouts.admin.alertmessage')
                        <!------------EndMessages-------------------------------->
                        <form method="POST" action="{{ route($route_create) }}" enctype="multipart/form-data">
                            @csrf

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Select Menu</label>
                                    <div class="select2-purple">
                                        <select class="form-control" name="gallery_categories_id" style="width: 100%;"
                                            required>
                                            @foreach ($category as $data)
                                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">


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
                                        <span class="span-bold">file dimentions :(1080px width and 1080px height)</span>
                                </div>

                                <div class="form-group">
                                    <label>Image Alt</label>
                                    <input type="text" class="form-control" name="image_alt"
                                        placeholder="Enter Image Alt" value="{{ old('image_alt') }}" required>
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
    <script></script>
@endsection
