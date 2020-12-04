@extends('layouts.admin')

@section('title')
    Transaction Detail
@endsection

@section('page-content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">#STORE0839</h2>
        <p class="dashboard-subtitle">Transaction Details</p>
      </div>
      <div class="dashboard-content">
        <div id="transactionDetails" class="dashboard-content">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-12 col-md-4">
                      <img src="https://picsum.photos/id/404/500" alt="" class="w-100 mb-3 rounded-lg">
                    </div>
                    <div class="col-12 col-md-8">
                      <div class="row">
                        <div class="col-12 col-md-6">
                          <div class="product-title">Customer Name</div>
                          <div class="product-subtitle">Angga Risky</div>
                        </div>
                        <div class="col-12 col-md-6">
                          <div class="product-title">Product Name</div>
                          <div class="product-subtitle">
                            Shirup Marzzan
                          </div>
                        </div>
                        <div class="col-12 col-md-6">
                          <div class="product-title">
                            Date of Transaction
                          </div>
                          <div class="product-subtitle">
                            12 Januari, 2020
                          </div>
                        </div>
                        <div class="col-12 col-md-6">
                          <div class="product-title">Payment Status</div>
                          <div class="product-subtitle text-danger">
                            PENDING
                          </div>
                        </div>
                        <div class="col-12 col-md-6">
                          <div class="product-title">Total Amount</div>
                          <div class="product-subtitle">$280,409</div>
                        </div>
                        <div class="col-12 col-md-6">
                          <div class="product-title">Mobile</div>
                          <div class="product-subtitle">
                            +628 2020 11111
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 mt-4">
                      <h5>
                        Shipping Informations
                      </h5>
                      <div class="row">
                        <div class="col-12 col-md-6">
                          <div class="product-title">Address 1</div>
                          <div class="product-subtitle">
                            Setra Duta Cemara
                          </div>
                        </div>
                        <div class="col-12 col-md-6">
                          <div class="product-title">Address 2</div>
                          <div class="product-subtitle">
                            Blok B2 No. 34
                          </div>
                        </div>
                        <div class="col-12 col-md-6">
                          <div class="product-title">
                            Province
                          </div>
                          <div class="product-subtitle">
                            West Java
                          </div>
                        </div>
                        <div class="col-12 col-md-6">
                          <div class="product-title">City</div>
                          <div class="product-subtitle">
                            Bandung
                          </div>
                        </div>
                        <div class="col-12 col-md-6">
                          <div class="product-title">Postal Code</div>
                          <div class="product-subtitle">123999</div>
                        </div>
                        <div class="col-12 col-md-6">
                          <div class="product-title">Country</div>
                          <div class="product-subtitle">
                            Indonesia
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="row">
                            <div class="col-md-3">
                              <div class="product-title">Shipping Status</div> 
                              <select name="status" id="status" class="form-control" v-model="status">
                                <option value="PENDING">Pending</option>
                                <option value="SHIPPING">Shipping</option>
                                <option value="SUCCESS">Success</option>
                              </select>
                            </div>
                            <template v-if="status == 'SHIPPING'">
                              <div class="col-md-3">
                                <div class="product-title">
                                  Input Resi
                                </div>
                                <input type="text" name="resi" id="openStoreTrue" class="form-control" v-model="resi">
                              </div>
                              <div class="col-md-2">
                                <button type="submit" class="btn btn-success btn-block mt-4">
                                  Update Resi
                                </button>
                              </div>
                            </template>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="col-12 text-right">
                      <button type="submit" class="btn btn-success mt-4">
                        Save Now
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
</div>
@endsection

@push('addon-script')
<script src="{{url('template/vendor/vue/vue.js')}}"></script>
<script>
  var transactionDetails = new Vue({
    el: '#transactionDetails',
    data: {
      status: "SHIPPING",
      resi: "BDO2131312P",
    },
  })
</script>
@endpush