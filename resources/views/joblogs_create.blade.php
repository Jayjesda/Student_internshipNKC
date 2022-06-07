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
                    <div class="card-body demo-vertical-spacing demo-only-elemen t"></div>

                    <div class="input-group ">
                        <span class="input-group-text" id="basic-addon11"><b>ชื่อ</b></span>
                        <input
                          type="text"
                          class="form-control "
                          placeholder="{{ Auth::user()->name }}"
                          disabled
                        />
                    </div>

                    <div class="input-group ">
                        <span class="input-group-text" id="basic-addon11"><b>สถานที่ฝึกงาน</b></span>
                        <input
                          type="text"
                          class="form-control "
                          placeholder="KKU COMPANY / แผนก IT Support /ตำแหน่งนักศึกษาฝึกงาน "
                          disabled
                        />
                    </div>


                      <div class="input-group ">
                        <span class="input-group-text" id="basic-addon11"><b>วันที่</b></span>
                        <input
                          type="date"
                          class="form-control "
                          placeholder="หัวข้อการฝึกงาน"
                         
                        />
                      </div>

                      <div class="input-group">
                         <span class="input-group-text" id="title"><b>หัวข้อการฝึกงาน</b></span>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="หัวข้อการฝึกงานประจำวัน"
                          aria-label="หัวข้อการฝึกงานประจำวัน"
                          
                        />
                       
                      </div>
                      <div class="input-group">
                         <span class="input-group-text" id="Details"><b>รายละเอียด</b></span>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="รายละเอียดการฝึกงานประจำวัน"
                          aria-label="รายละเอียดการฝึกงานประจำวัน"
                          aria-describedby="basic-addon13"
                        />
                      </div>

                      <div class="input-group">
                        <span class="input-group-text" id="time_start"><b>เวลาเข้างาน</b></span>
                        <input
                          type="time"
                          class="form-control"
                          placeholder="URL"
                          id="basic-url1"
                        />
                      </div>

                      <div class="input-group">
                        <span class="input-group-text" id="time_end"><b>เวลาออกงาน</b></span>
                        <input
                          type="time"
                          class="form-control"
                          placeholder="URL"
                          id="basic-url1"
                        />
                      </div>
                      <center>

                      <button type="button" class="btn btn-primary ">บันทึกการฝึกงาน</button>
                      </center>
                      

                      
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