@extends('layouts.admin.master')

@section('title', 'Category Edit')

@section('page_level_style')

@endsection

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Category</h1>
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
                        <h3 class="card-title">Edit Category</h3>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.category.update', $category->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="col-12">

                                <div class="form-group">
                                    <label>Category</label>
                                    <input type="text" class="form-control" name="category_name"
                                        placeholder="Enter Category" value="{{ $category->category_name }}" required>
                                </div>
                            </div>

                            {{-- <div class="col-12">

                                <div class="form-group">
                                    <label>Slug(URL EndPoint)</label>
                                    <input type="text" class="form-control" name="slug"
                                        placeholder="Enter Category Title" value="{{ $category->slug }}">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Show On Navbar</label>
                                    <select class="form-control" name="is_nav_menu" id="exampleFormControlSelect1">
                                        <option value="0" @if ($category->is_nav_menu == '0') selected @else @endif>No
                                        </option>
                                        <option value="1" @if ($category->is_nav_menu == '1') selected @else @endif>Yes
                                        </option>
                                    </select>
                                </div>
                            </div> --}}


                            <button type="submit" class="btn btn-success btn-user float-right mb-3">Save</button>
                            <a class="btn btn-primary float-right mr-3 mb-3"
                                href="{{ route('admin.category.index') }}">Cancel</a>

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
