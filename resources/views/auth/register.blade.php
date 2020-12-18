@extends('layouts.auth')

@section('page-content')
<div class="page-content page-auth" id="signup">
  <section class="store-auth" data-aos="fade-up">
    <div class="container">
      <div class="row align-items-center justify-content-center row-login">
        <div class="col-lg-4">
          <h2>
            Memulai untuk jual beli <br>dengan cara terbaru
          </h2>
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
              <label for="">Full Name</label>
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" v-model="name"
                value="{{ old('name') }}" required autocomplete="name" autofocus>

              @error('name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="">Email Address</label>
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" v-model="email"
                @change="checkForEmail()" :class="{'is-invalid' : this.email_unavailable}" name="email"
                value="{{ old('email') }}" required autocomplete="email">

              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" required autocomplete="new-password">

              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="">Password Confirm</label>
              <input id="password_confirmation" type="password"
                class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation"
                required autocomplete="new-password">

              @error('password_confirmation')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="">Store</label>
              <p class="text-muted">
                Apakah anda juga ingin membuka toko?
              </p>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="is_store_open" id="openStoreTrue"
                  v-model="is_store_open" :value="true">
                <label for="openStoreTrue" class="custom-control-label">Iya, boleh</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" name="is_store_open" id="openStoreFalse"
                  v-model="is_store_open" :value="false">
                <label for="openStoreFalse" class="custom-control-label">Enggak, makasih</label>
              </div>
            </div>
            <div class="form-group" v-if="is_store_open">
              <label for="">Nama Toko</label>
              <input type="text" name="store_name" class="form-control @error('store_name') is-invalid @enderror"
                v-model="store_name" id="store_name" required autocomplete autofocus>

              @error('store_name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="form-group" v-if="is_store_open">
              <label for="">Category</label>
              <select name="categories_id" class="form-control">
                <option value="" disabled selected hidden>Select Category</option>
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
              </select>
            </div>
            <div>
              <button type="submit" class="btn btn-success w-100 mt-4" :disabled="this.email_unavailable">
                Sign Up Now
              </button>
              <a href="{{route('login')}}" class="btn btn-signup w-100 mt-2">
                Back to Sign In
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection

@push('addon-script')
<script src="{{url('template/vendor/vue/vue.js')}}"></script>
<script src="https://unpkg.com/vue-toasted"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
  Vue.use(Toasted);

  let register = new Vue({
    el: '#signup',
    mounted() {
      AOS.init();
    },
    methods: {
      checkForEmail : function(){
        var self = this;
        axios.get('{{route('api-register-check')}}', {
          params: {
            email: this.email
          }
        })
        .then(function(response) {
          if(response.data == "Available") {
            self.$toasted.show(
              "Email anda bisa di gunakan",
              {
                position: "top-center", 
                className: "rounded",
                duration: 1000
              }
            );
            self.email_unavailable = false;
          }
          else{
            self.$toasted.error(
              "Maaf, tampaknya email sudah terdaftar pada sistem kami.",
              {
                position: "top-center",
                className: "rounded",
                duration: 1000
              }
            );
            self.email_unavailable = true;
          }
        })
      }
    },
    data() {
      return {
        name: "",
        email: "",
        is_store_open: true,
        store_name: "",
        email_unavailable: false
      } 
    }
  })
</script>
@endpush