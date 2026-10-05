@extends('layouts.admin.master')

@section('title', 'Catering Menu Create')

@section('page_level_style')

@endsection

@section('content')

    @if (Auth::user()->role == 'admin')
        <?php $route_create = 'admin.manage-catering-menu.store'; ?>
        <?php $route_index = 'admin.manage-catering-menu.index'; ?>
    @elseif(Auth::user()->role == 'event-manager')
        <?php $route_create = 'event-manager.manage-catering-menu.store'; ?>
        <?php $route_index = 'event-manager.manage-catering-menu.index'; ?>
    @else
    @endif
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create Catering Menu</h1>
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
                        <h3 class="card-title">Create Catering Menu</h3>
                    </div>

                    <div class="card-body">
                        <!--------Messages ------------------------------------>
                        @include('layouts.admin.alertmessage')
                        <!------------EndMessages-------------------------------->
                        <form method="POST" action="{{ route($route_create) }}" enctype="multipart/form-data">
                            @csrf

                            <div class="col-12">

                                <div class="form-group">
                                    <label>Catering Menu Name</label>
                                    <input type="text" class="form-control" name="name"
                                        placeholder="Enter Catering Menu Name" value="{{ old('name') }}" required>
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
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Alt Image</label>
                                        <input type="text" class="form-control" name="image_alt"
                                            placeholder="Enter Image Alt" value="{{ old('image_alt') }}" required>
                                    </div>
                                </div>


                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" id="" rows="3" name="description" placeholder="Enter Description">{{ old('description') }}</textarea>
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
    <script></script>
@endsection
