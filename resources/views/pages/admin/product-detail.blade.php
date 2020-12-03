@extends('layouts.admin')

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
            <form action="">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Product Name</label>
                        <input type="text" name="productname" class="form-control" value="Nganu ini">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Price</label>
                        <input type="number" name="price" class="form-control" value="200">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="">Category</label>
                        <select name="category" class="form-control">
                          <option value="">Furniture</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="editor1">
                          The Nike Air Max 720 SE goes bigger than ever before with Nike's tallest Air unit yet for unimaginable, all-day comfort. There's super breathable fabrics on the upper, while colours add a modern edge. Bring the past into the future with the Nike Air Max 2090, a bold look inspired by the DNA of the iconic Air Max 90. Brand-new Nike Air cushioning
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
                  <div class="col-md-4">
                    <div class="gallery-container">
                      <img src="https://picsum.photos/id/222/500/360" class="w-100" alt="">
                      <a href="#" class="delete-gallery">
                        <img src="images/delete-icon.svg" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="gallery-container">
                      <img src="https://picsum.photos/id/444/500/360" class="w-100" alt="">
                      <a href="#" class="delete-gallery">
                        <img src="images/delete-icon.svg" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="gallery-container">
                      <img src="https://picsum.photos/id/500/500/360" class="w-100" alt="">
                      <a href="#" class="delete-gallery">
                        <img src="images/delete-icon.svg" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="col mt-3">
                    <input type="file" id="file" style="display: none;" multiple="">
                    <button class="btn btn-secondary btn-photo btn-block" onclick="thisFileUpload();">
                      Add Photo
                    </button>
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