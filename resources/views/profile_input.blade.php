@extends('layouts.template')

@section('content')

    
     <form action="{{ url('Profile-insert') }}" method="POST" enctype="multipart/form-data">
          @csrf
        
        <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y" >
              <div class="row">
                <div class="col-md-6">
                  <div class="card mb-4">
                    <h5 class="card-header"><font size="5"><b>ประวัตินักศึกษา </b>(กรอกข้อมูลก่อนการบันทึกการฝึกงาน)</font></h5>
                    
                    <!-- Account -->
                    <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img
                          src="../assets/img/avatars/1.png"
                          alt="user-avatar"
                          class="d-block rounded"
                          height="100"
                          width="100"
                          id="uploadedAvatar"
                        />

                        <div class="button-wrapper">
                          <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">อัพโหลดรูปภาพ</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input
                              type="file"
                              id="upload"
                              class="account-file-input"
                              hidden
                              accept="image/png, image/jpeg"
                            />
                          </label>

                          <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                            <i class="bx bx-reset d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Reset</span>
                          </button>

                          <p class="text-muted mb-0">ประเภทไฟล์ที่ใช้ได้ : JPG, GIF or PNG. ขนาดไม่เกิน 1MB</p>
                        </div>
                      </div>
                    </div>
                    <hr class="my-0" />

                    <div class="card-body">

                        <div class="row">
                          
                          <div class="mb-3">
                            <label for="name" class="form-label"><font size="3"><b>ชื่อ-สกุล (ระบุคำนำหน้าชื่อ)</b></font></label>
                            <input class="form-control"  type="text" id="name" name="fullname" autofocus  required>
                          </div>
                          <div class="mb-3">
                            <label for="student_id" class="form-label"><font size="3"><b>รหัสประจำตัวนักศึกษา</b> ไม่มีขีด (-)</font></label>
                            <input class="form-control"  type="text"  name="student_id" required />
                          </div>
                          <div class="mb-3">
                            <label for="email" class="form-label"><font size="3"><b>อีเมล</b></font></label>
                            <input class="form-control" value="{{ Auth::user()->email }}" type="text" id="email" name="email" disabled />
                          </div>
                          <div class="mb-3">
                            <label for="level" class="form-label"><font size="3"><b>ชั้นปี</b></font> </label>
                           <input type="text" class="form-control" id="level" name="level" required />
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="major"><font size="3"><b>สาขา</b></font></label>
                            <input type="text" class="form-control" id="major" name="major" required />
                          </div>
                         
                          <div class="mb-3">
                            <label for="birthday" class="form-label"><font size="3"><b>วันเกิด</b></font></label>
                            <input type="date" class="form-control"  id="birthday" name="birthday" required />
                          </div>
                          <div class="mb-3">
                            <label for="age" class="form-label"><font size="3"><b>อายุ</b></font></label>
                            <input class="form-control" type="text"  id="age" name="age"  required />
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="address"><font size="3"><b>ที่อยู่</b></font></label>
                            <div class="input-group input-group-merge">
                              <input type="text" class="form-control"  id="address" name="address" required />
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="telephone"><font size="3"><b>เบอร์โทรศัพท์</b></font></label>
                            <div class="input-group input-group-merge">
                              <input type="text" class="form-control" value="" id="telephone" name="telephone" required />
                            </div>
                          </div>
                        </div>
                      
                    </div>
                    <!-- /Account -->
                  </div>
                </div>
  
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-12">
                      <div class="card mb-4">
                        <h5 class="card-header"><font size="5"><b>ข้อมูลผู้ปกครอง</b></font></h5>
                        <div class="card-body">
                          <div class="mb-3">
                            <label for="parent_name" class="form-label"><font size="3"><b>ชื่อ-สกุล</b></font></label>
                            <input class="form-control" type="text"   name="parent_name" />
                          </div>
                          <div class="mb-3">
                            <label for="parent_age" class="form-label"><font size="3"><b>อายุ</b></font></label>
                            <input class="form-control" type="text"   name="parent_age" />
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="parent_work"><font size="3"><b>อาชีพ</b></font></label> 
                             <input type="text" class="form-control"   name="parent_work" />
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="parent_relationship"><font size="3"><b>ความสัมพันธ์กับนักศึกษา</b></font></label>
                            <div class="input-group input-group-merge">
                              <input type="text" class="form-control"  name="parent_relationship" />
                            </div>          
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="parent_address"><font size="3"><b>ที่อยู่</b></font></label>
                            <div class="input-group input-group-merge">
                              <input type="text" class="form-control"  value="" id="parent_address" name="parent_address" />
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="parent_telephone"><font size="3"><b>เบอร์โทรศัพท์</b></font></label>
                            <div class="input-group input-group-merge">
                              <input type="text" class="form-control" value="" id="parent_telephone" name="parent_telephone" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-12">
                      <div class="card mb-4">
                        <h5 class="card-header"><font size="5"><b>ข้อมูลการฝึกงาน</b></font></h5>
                        <div class="card-body">
                          <div class="mb-3">
                            <label for="position" class="form-label"><font size="3"><b>ฝึกงานตำแหน่ง</b></font></label>
                            <input class="form-control" type="text" value="" name="position_work"  id="position" name="position" required />
                          </div>
                          <div class="mb-3">
                            <label for="address_work" class="form-label"><font size="3"><b>สถานที่ฝึกงาน</b></font></label>
                            <input class="form-control" type="text" value="" id="address_work" name="address_work" required />
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="start_internship"><font size="3"><b>เริ่มฝึกงาน</b></font></label>
                            <div class="input-group input-group-merge">
                              <input type="date" class="form-control" value="" id="start_internship" name="start_internship" required />
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="end_internship"><font size="3"><b>สิ้นสุดการฝึกงาน</b></font></label>
                            <div class="input-group input-group-merge">
                              <input type="date" class="form-control"  value="" id="end_internship" name="end_internship"  required/>
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="supervisor"><font size="3"><b>ผู้ควบคุมการฝึกงาน</b></font></label>
                            <div class="input-group input-group-merge">
                              <input type="text" class="form-control" value="" id="supervisor" name="supervisor" required />
                            </div>
                          </div>

                         
                        </div>
                      </div>
                    </div>
                  </div>
                   <div class="mt-2 text-end ">
                            <button type="submit" class="btn btn-primary me-2">บันทึกข้อมูล</button>
                          </div>
                </div>
              </div>
            </div>
            <!-- / Content -->


<!-- Page JS -->
    <script src="../assets/js/pages-account-settings-account.js"></script>


                        

      </form>
@endsection