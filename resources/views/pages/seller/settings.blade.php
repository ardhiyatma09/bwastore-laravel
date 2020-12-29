@extends('layouts.seller')

@section('title')
    Settings
@endsection

@section('page-content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">Store Settings</h2>
        <p class="dashboard-subtitle">Make store that profitable</p>
      </div>
      <div class="dashboard-content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <form action="{{route('redirect','settings')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                 <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Store Name</label>
                      <input type="text" name="store_name" class="form-control" value="{{$user->store_name}}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Category</label>
                      <select name="categories_id" class="form-control">
                        <option value="" disabled selected hidden>Select Category...</option>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}" {{($user->categories_id == $category->id) ? 'selected' : ''}}>{{$category->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Store Status</label>
                      <p class="text-muted">
                        Apakah saat ini toko anda buka?
                      </p>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="store_status" id="openStore" value="1" {{$user->store_status == 1 ? 'checked' : ''}}>
                        <label for="openStore" class="custom-control-label">Buka</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="store_status" id="closedStore" value="0" {{$user->store_status == 0 || $user->store_status == NULL ? 'checked' : ''}}>
                        <label for="closedStore" class="custom-control-label">Tutup sementara</label>
                      </div>
                      <button type="submit" class="btn btn-success d-block ml-auto px-5">Save Now</button>
                    </div>
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