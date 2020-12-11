@extends('layouts.admin')

@section('title')
Edit Product
@endsection

@section('page-content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Edit Product</h2>
      <p class="dashboard-subtitle">Update the product</p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-md-12">
          @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                  @endforeach
                </ul>
              </div>
          @endif
          <div class="card">
            <div class="card-body">
              <form action="{{route('product.update',$item->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Name Product</label>
                      <input type="text" name="name" class="form-control" required value="{{$item->name}}">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Owner</label>
                      <select name="users_id" class="form-control" required>
                        <option value="" disabled selected hidden>Select owner</option>
                        @foreach ($users as $user)
                        <option value="{{$user->id}}" {{($item->users_id == $user->id) ? 'selected' : ''}}>{{$user->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Category</label>
                      <select name="categories_id" class="form-control" required>
                        <option value="" disabled selected hidden>Select category</option>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}" {{($item->categories_id == $category->id) ? 'selected' : ''}}>{{$category->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Price</label>
                      <input type="number" name="price" class="form-control" required value="{{$item->price}}">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Description</label>
                      <textarea name="description" id="editor">{!!$item->description!!}"</textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col text-right">
                    <button type="submit" class="btn btn-success px-5">Save Now</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('addon-script')
@push('addon-script')
<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace( 'editor');
</script>
@endpush
@endpush