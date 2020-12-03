<div class="border-right" id="sidebar-wrapper">
    <div class="sidebar-heading text-center">
      <img src="{{url('template/images/logo.svg')}}" alt="" class="my-4" width="95">
    </div>
    <div class="list-group list-group-flush">
      <a href="{{route('dashboard')}}" class="list-group-item list-group-item-action @if(Request::segment(2) == 'dashboard') active @endif">
        Dashboard
      </a>
      <a href="{{route('products')}}" class="list-group-item list-group-item-action @if(Request::segment(2) == 'products') active @endif">
        My Products
      </a>
      <a href="{{route('transaction')}}" class="list-group-item list-group-item-action @if(Request::segment(2) == 'transaction') active @endif">
        Transaction
      </a>
      <a href="{{route('settings')}}" class="list-group-item list-group-item-action @if(Request::segment(2) == 'settings') active @endif">
        Store Settings
      </a>
      <a href="{{route('account')}}" class="list-group-item list-group-item-action @if(Request::segment(2) == 'account') active @endif">
        My Account
      </a>
      
    </div>
</div>