@extends('layouts.template')

@section('content')
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/532f8733fa.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />
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
                    
                    <!-- Bootstrap Table with Header - Light -->
              <div class="card">
                
                <h5 class="card-header" >บันทึกการฝึกงาน  :  {{ $request->fullname }} </h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead class="table-light">
                      <tr>
                        <th><i class="fa-solid fa-calendar-check"></i>&nbsp; <font color="#4D3B3B" size="3px"><b>วัน/เดือน/ปี</b></th>
                        <th><i class="fa-solid fa-book"></i>&nbsp; <font color="#4D3B3B" size="3px"><b>หัวข้อการบันทึกประจำวัน</b></th>
                        <th><i class="fa-solid fa-circle-info"></i>&nbsp;<font color="#4D3B3B" size="3px"><b>รายละเอียด</b></th>
                        <th><i class="fa-solid fa-circle"></i>&nbsp;<font color="#4D3B3B" size="3px"><b>สถานะการบันทึก</b></th>
                        <th><i class="fa-solid fa-location-arrow"></i>&nbsp;<font color="#4D3B3B" size="3px"><b>จัดการข้อมูล</b></th>
                      </tr>
                    </thead>

                    <tbody class="table-border-bottom-0">
                      
                      @foreach ($joblogs as $data)


                      @endforeach
                      <tr>
                        <td> 11/05/2565</td>
                        <td>จัดทำ UX/UI </td>
                        <td> ทำ UX ต่อจากวันที่ 10/05/2565 เสร็จ</td>
                        <td>
                          <span class="badge bg-label-success me-1">อนุมัติ</span>
                        </td>
                        <td>
                          <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i></a>
                          <td><a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i></td> 
                        </td>
                        
                      </tr>

                       <tr>
                        <td> 11/05/2565</td>
                        <td>จัดทำ UX/UI </td>
                        <td> ทำ UX ต่อจากวันที่ 10/05/2565 เสร็จ</td>
                        <td>
                          <span class="badge bg-label-primary me-1">กำลังดำเนินการ</span>
                        </td>
                        <td>
                          <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i></a>
                          <td><a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i></td> 
                        </td>
                        
                      </tr>
                      
                      
                      
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- Bootstrap Table with Header - Light -->
                    

                    


                      

                      
                     

                      
                      
                      

                      
                    </div>
                  </div>
                </div>
                

              </div>
              
                <!--/ Transactions -->
              </div>
            </div>
            <!-- / Content -->

           
          </div>
        </div>
      </div>
    </div>

@endsection