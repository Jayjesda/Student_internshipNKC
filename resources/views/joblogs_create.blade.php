@extends('layouts.template')

@section('content')

<!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                        
                  <img src="../assets/img/imges/bginernship.png" class="img-fluid" alt="Responsive image">
                  </div>
                </div>
                
                 <!-- Basic -->
                <div class="col-md-12">
                  <div class="card mb-4">
                    <h5 class="card-header">บันทึกการฝึกงาน</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                      <div class="input-group ">
                        <span class="input-group-text" id="basic-addon11">วัน/เดือน/ปี</span>
                        <input
                          type="date"
                          class="form-control "
                          placeholder="หัวข้อการฝึกงาน"
                          aria-describedby="basic-addon11"
                        />

                      </div>


                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Recipient's username"
                          aria-label="Recipient's username"
                          aria-describedby="basic-addon13"
                        />
                        <span class="input-group-text" id="basic-addon13">@example.com</span>
                      </div>

                     

                      <div class="input-group">
                        <span class="input-group-text" id="basic-addon14">https://example.com/users/</span>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="URL"
                          id="basic-url1"
                          aria-describedby="basic-addon14"
                        />
                      </div>

                      <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Amount"
                          aria-label="Amount (to the nearest dollar)"
                        />
                        <span class="input-group-text">.00</span>
                      </div>

                      <div class="input-group">
                        <span class="input-group-text">With textarea</span>
                        <textarea class="form-control" aria-label="With textarea" placeholder="Comment"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                

              </div>
              <div class="row">
                
               
                  
                </div>
                <!--/ Transactions -->
              </div>
            </div>
            <!-- / Content -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
@endsection