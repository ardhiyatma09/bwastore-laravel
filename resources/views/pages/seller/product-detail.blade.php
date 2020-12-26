@extends('layouts.seller')

@section('title')
    Product Detail
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
            <form action="{{route('products.update',$product->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <input type="hidden" name="users_id" value="{{Auth::user()->id}}">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Product Name</label>
                        <input type="text" name="name" class="form-control" value="{{$product->name}}">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Price</label>
                        <input type="number" name="price" class="form-control" value="{{$product->price}}">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="">Category</label>
                        <select name="categories_id" class="form-control">
                          <option value="" disabled selected hidden>Select Category...</option>
                          @foreach ($categories as $category)
                          <option value="{{$category->id}}" {{($product->categories_id == $category->id) ? 'selected' : ''}}>{{$category->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="editor1">
                          {!! $product->description !!}
                        </textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <button class="btn btn-success w-100 mt-2" type="submit">Update Product</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-12">
            <div class="card card-dashboard-addphoto">
              <div class="card-body">
                <div class="row">
                  @foreach ($product->galleries as $gallery)
                  <div class="col-md-4">
                    <div class="gallery-container">
                      <img src="{{Storage::url($gallery->photos ?? '')}}" class="w-100" alt="">
                      <form action="{{route('products.delete-gallery', $gallery->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-gallery" style="border: none;background: transparent;outline:none;">
                          <img src="{{urL('template/images/delete-icon.svg')}}" alt="">
                        </button>
                      </form>
                    </div>
                  </div>
                  @endforeach
                  <div class="col-12 mt-3">
                    <form action="{{route('products.upload-gallery')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" name="products_id" value="{{$product->id}}">
                      <input type="file" id="file" style="display: none;" name="photos" onchange="form.submit()">
                      <button type="button" class="btn btn-secondary btn-photo btn-block" onclick="thisFileUpload();">
                        Add Photo
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection

@push('addon-script')
<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace('editor1');
</script>
<script>
  function thisFileUpload() {
      document.getElementById("file").click();
    }
</script>
@endpush