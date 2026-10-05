 @extends('layouts.admin.master')

@section('title','Blog Listing')


@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Schemas</h1>
        <a href="{{route('schemas.create')}}" class="btn btn-sm btn-primary">
            <i class="fas fa-plus"></i> Add New
        </a>
    </div>

   
    <!-- Card -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Schemas</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%">
                    
                    <thead>
                        <tr>
                            <th width="10%">ID</th>
                           
                            <th width="30%">Page Name</th>
                            <th width="15%">Status</th>
                            <th width="25%">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($schemas as $schema)
                            <tr>
                                <td>{{ $schema->id }}</td>
                                
                                <td> @foreach($schema->pages as $page)
                                                {{ $page->page }} 
                                            @endforeach
                                        </td></td>

                                <td>
                                    @if($schema->status)
                                        <span class="badge badge-success">Active</span>
                                    @else
                                        <span class="badge badge-danger">Inactive</span>
                                    @endif
                                </td>

                                <td style="display:flex;">
                                    
                                    <!-- Edit -->
                                    <a href="{{ route('schemas.edit', $schema->id) }}" 
                                       class="btn btn-primary m-1">
                                        <i class="fa fa-pen"></i>
                                    </a>

                                    <!-- Delete -->
                                    <form method="POST" action="{{ route('schemas.destroy', $schema->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger m-1" type="submit"
                                            onclick="return confirm('Are you sure?')">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>

</div>
@endsection