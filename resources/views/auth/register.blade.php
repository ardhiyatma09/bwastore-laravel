@extends('layouts.auth')

@section('page-content')
<div class="container" hidden>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="page-content page-auth" id="signup">
    <section class="store-auth" data-aos="fade-up">
      <div class="container">
        <div class="row align-items-center justify-content-center row-login">
          <div class="col-lg-4">
            <h2>
              Memulai untuk jual beli <br>dengan cara terbaru
            </h2>
            <form action="" class="mt-3">
              <div class="form-group">
                <label for="">Full Name</label>
                <input type="text" name="fullname" class="form-control is-valid" v-model="fullname" autofocus>
              </div>
              <div class="form-group">
                <label for="">Email Address</label>
                <input type="email" name="email" class="form-control is-invalid" v-model="email">
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="email" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Store</label>
                <p class="text-muted">
                  Apakah anda juga ingin membuka toko?
                </p>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" name="is_store_open" id="openStoreTrue" v-model="is_store_open" :value="true">
                  <label for="openStoreTrue" class="custom-control-label">Iya, boleh</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" name="is_store_open" id="openStoreFalse" v-model="is_store_open" :value="false">
                  <label for="openStoreFalse" class="custom-control-label">Enggak, makasih</label>
                </div>
              </div>
              <div class="form-group" v-if="is_store_open">
                <label for="">Nama Toko</label>
                <input type="text" name="store" class="form-control" >
              </div>
              <div class="form-group" v-if="is_store_open">
                <label for="">Category</label>
                <select name="category" class="form-control">
                  <option value="" disabled>Select Category</option>
                </select>
              </div>
              <div>
                <button type="submit" class="btn btn-success w-100 mt-4">
                  Sign Up Now
                </button>
                <a href="signup.html" class="btn btn-signup w-100 mt-2">
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
<script>
  Vue.use(Toasted);

  let register = new Vue({
    el: '#signup',
    mounted() {
      AOS.init();
      this.$toasted.error(
        "Maaf, tampaknya email sudah terdaftar pada sistem kami.",
        {
          position: "top-center",
          className: "rounded",
          duration: 1000
        }
      );
    },
    data: {
      fullname: "Ardhiyatma R",
      email: "ardi@testing.com",
      password: "",
      is_store_open: "",
      store: "",
    }
  })
</script>
@endpush
