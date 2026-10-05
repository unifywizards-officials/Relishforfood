@extends('layouts.admin.master')

@section('title', 'Gallery Category Create')

@section('page_level_style')

@endsection

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create Gallery Category</h1>
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
                        <h3 class="card-title">Create Gallery Category</h3>
                    </div>

                    <div class="card-body">
                        <!--------Messages ------------------------------------>
                        @include('layouts.admin.alertmessage')
                        <!------------EndMessages-------------------------------->
                        <form method="POST" action="{{ route('admin.manage-gallery-category.store') }}"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="col-12">

                                <div class="form-group">
                                    <label>Category</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter Category"
                                        required>
                                </div>
                            </div>

                            {{-- <div class="col-12">

                                <div class="form-group">
                                    <label>Slug(URL EndPoint)</label>
                                    <input type="text" class="form-control" name="slug"
                                        placeholder="Enter Category Slug" value="{{ old('slug') }}">
                                </div>
                        </div> --}}

                            {{-- <div class="col-12">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Show On Navbar</label>
                                    <select class="form-control" name="is_nav_menu" id="exampleFormControlSelect1">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div> --}}

                            <button type="submit" class="btn btn-success btn-user float-right mb-3">Save</button>
                            <a class="btn btn-primary float-right mr-3 mb-3"
                                href="{{ route('admin.manage-gallery-category.index') }}">Cancel</a>


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
