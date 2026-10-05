 @extends('layouts.admin.master')

@section('title','Blog Listing')


@section('content')
<div class="container-fluid">

<div class="card shadow">
<div class="card-header">
    <h4>Edit Schema</h4>
</div>

<form method="POST" action="{{ route('schemas.update',$schema->id) }}">
@csrf
@method('PUT')

<div class="card-body">

<div class="form-group">
    <label>Page URL</label>
    @foreach($schema->pages as $p)
    <input type="text" name="pages[]" value="{{ $p->page }}" class="form-control mb-2">
    @endforeach
</div>

@php
$schemas = ['blog','author','faq','event','review','breadcrumb','howto','local','organization','video'];
@endphp

@foreach($schemas as $type)
<div class="border p-3 mb-3">

<label>
<input type="checkbox" class="schemaCheck"
name="schema_types[]" value="{{ $type }}"
{{ isset($json[$type]) ? 'checked' : '' }}>

<strong>{{ ucfirst($type) }}</strong>
</label>

<div class="schemaBox mt-2" style="{{ isset($json[$type]) ? '' : 'display:none;' }}">

<textarea name="json_data[{{ $type }}]" class="form-control" rows="6">
{{ isset($json[$type]) ? json_encode($json[$type],JSON_PRETTY_PRINT) : '' }}
</textarea>

</div>

</div>
@endforeach

</div>

<div class="card-footer">
<button class="btn btn-success">Update</button>
</div>

</form>
</div>
</div>

@endsection

@section('page_level_script')
<script>
$(function(){
$('.schemaCheck').change(function(){
let parent=$(this).closest('.border');
parent.find('.schemaBox').toggle(this.checked);
});
});
</script>

@endsection