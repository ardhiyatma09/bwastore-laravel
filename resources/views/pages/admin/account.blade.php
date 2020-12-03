@extends('layouts.admin')

@section('title')
    Account
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
            <form action="">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Store Name</label>
                        <input type="text" name="storename" class="form-control" value="La Casa De Papel">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Store Name</label>
                        <input type="text" name="storename" class="form-control" value="La Casa De Papel">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Store Name</label>
                        <input type="text" name="storename" class="form-control" value="La Casa De Papel">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Store Name</label>
                        <input type="text" name="storename" class="form-control" value="La Casa De Papel">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="">Category</label>
                        <select name="category" class="form-control">
                          <option value="">Furniture</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="">Category</label>
                        <select name="category" class="form-control">
                          <option value="">Furniture</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="">Store Name</label>
                        <input type="text" name="storename" class="form-control" value="La Casa De Papel">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Store Name</label>
                        <input type="text" name="storename" class="form-control" value="La Casa De Papel">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Store Name</label>
                        <input type="text" name="storename" class="form-control" value="La Casa De Papel">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <button class="btn btn-success px-5 d-block ml-auto" type="submit">Save Now</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection