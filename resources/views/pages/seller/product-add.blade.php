@extends('layouts.seller')

@section('title')
    Add Product
@endsection

@section('page-content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">Add New Product</h2>
        <p class="dashboard-subtitle">Create your own product</p>
      </div>
      <div class="dashboard-content">
        <div class="row">
          <div class="col-12">
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="users_id" value="{{Auth::user()->id}}">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Product Name</label>
                        <input type="text" name="name" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Price</label>
                        <input type="number" name="price" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="">Category</label>
                        <select name="categories_id" class="form-control">
                          <option value="" disabled selected hidden>Select Category...</option>
                          @foreach ($categories as $category)
                          <option value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="editor1">
                          
                        </textarea>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="photo">Photos</label>
                        <input type="file" multiple="" class="form-control pt-1" name="photo">
                        <small class="text-muted">
                          Kamu dapat memilih lebih dari satu file
                        </small>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <button class="btn btn-success w-100 mt-2" type="submit">Save Now</button>
                  </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection

@push('addon-script')
<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace( 'editor1');
</script>
@endpush