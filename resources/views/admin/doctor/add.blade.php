@extends('admin.master.parent')

@section('content1')
<div class="container bg-warning">
<h1 class="text-center display-3">Add new category</h1>
@if(session()->has('$success'))
<div class="jumbotron">{{$success}}</div>
@endif

<form action="{{url('/')}}/addCategory" method="post" enctype="multipart/form-data">
    @csrf
    <x-Input type="text" name="categoryName" placeholder="Enter the category name"/>
    <x-Input type="text" name="categoryDescription" placeholder="Give details about category"/>
    <div class="form-group col-md-6">
        <input type="file" name="categoryThumbnail" class="form-control">
    </div>
    <div class="form-group col-md-6">
       <div class="row">
        <label for="exampleFormControlSelect1">Select parent category (Leave blank for master category)</label>
          <select class="form-control col-md-2" id="selectParentCategory" name="parentCategory">
            <option default selected value="">Parent</option>
            @foreach ( $category_data as $catdata)
                  @if($catdata->parent_id=="")
                      <option value="{{$catdata->id}}">{{$catdata->name}}</option>
                      @endif
            @endforeach
          </select>
          </div>
            <input type="submit" class="btn btn-success"/>  
    </div>
</form>
</div>
@endsection