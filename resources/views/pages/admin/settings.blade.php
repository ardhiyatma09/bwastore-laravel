@extends('layouts.admin')

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
                <form action="">
                  <div class="form-group">
                    <label for="">Store Name</label>
                    <input type="text" name="storename" class="form-control w-50" value="La Casa De Papel">
                  </div>
                  <div class="form-group">
                    <label for="">Category</label>
                    <select name="category" class="form-control w-50">
                      <option value="">Furniture</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Store Status</label>
                    <p class="text-muted">
                      Apakah saat ini toko anda buka?
                    </p>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" class="custom-control-input" name="is_open_or_close" id="openStore">
                      <label for="openStore" class="custom-control-label">Buka</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" class="custom-control-input" name="is_open_or_close" id="closedStore">
                      <label for="closedStore" class="custom-control-label">Tutup sementara</label>
                    </div>
                    <button class="btn btn-success d-block ml-auto px-5">Save Now</button>
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