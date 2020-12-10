<div class="border-right" id="sidebar-wrapper">
    <div class="sidebar-heading text-center">
      <img src="{{url('template/images/logo-admin.svg')}}" alt="" class="my-4" width="95">
    </div>
    <div class="list-group list-group-flush">
      <a href="{{route('admin-dashboard')}}" class="list-group-item list-group-item-action {{(Request::segment(2) == 'dashboard') ? 'active' : ''}}">
        Dashboard
      </a>
      <a href="" class="list-group-item list-group-item-action {{(Request::segment(2) == 'product') ? 'active' : ''}}">
        Products
      </a>
      <a href="{{route('category.index')}}" class="list-group-item list-group-item-action {{(Request::segment(2) == 'category') ? 'active' : ''}}">
        Categories
      </a>
      <a href="" class="list-group-item list-group-item-action {{(Request::segment(2) == 'transaction') ? 'active' : ''}}">
        Transactions
      </a>
      <a href="{{route('user.index')}}" class="list-group-item list-group-item-action {{(Request::segment(2) == 'user') ? 'active' : ''}}">
        Users
      </a>
      
    </div>
</div>