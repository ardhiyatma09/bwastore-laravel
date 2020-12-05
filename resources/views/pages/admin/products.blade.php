@extends('layouts.admin')

@section('title')
    Product Page
@endsection

@section('page-content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">My Products</h2>
        <p class="dashboard-subtitle">Manage it well and get money</p>
        <a href="{{route('products.add')}}" class="btn btn-success">Add New Product</a>
      </div>
      <div class="dashboard-content">
        
      </div>
    </div>
</div>
@endsection