@extends('layouts.template')

@section('content')

     <form action="/Profile-update/{{ $request->id }}" method="post"   enctype="multipart/form-data">
          @csrf
          @method('put')
        <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y" >
              <div class="row">
                <div class="col-md-6">
                  <div class="card mb-4">
                    <h5 class="card-header"><font size="5"><b>ประวัตินักศึกษา</b></font></h5>
                    
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
                            <label for="name" class="form-label"><font size="3"><b>ชื่อ-สกุล</b></font></label>
                            <input class="form-control" value="{{ $request->fullname }}" type="text" id="fullname" name="fullname" autofocus />
                          </div>
                          <div class="mb-3">
                            <label for="student_id" class="form-label"><font size="3"><b>รหัสประจำตัวนักศึกษา</b></font></label>
                            <input class="form-control" value="{{ $request->student_id }}" type="text" id="student_id"  name="student_id" />
                          </div>
                          <div class="mb-3">
                            <label for="email" class="form-label"><font size="3"><b>อีเมล</b></font></label>
                            <input class="form-control" value="{{ Auth::user()->email }}" type="text" id="email" name="email" disabled />
                          </div>
                          <div class="mb-3">
                            <label for="level" class="form-label"><font size="3"><b>ชั้นปี</b></font> </label>  
                            <input class="form-control" value="{{ $request->level }}" type="text" id="level" name="level" />
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="major"><font size="3"><b>สาขา</b></font></label> 
                            <input class="form-control" value="{{ $request->major }}" type="text" id="major" name="major" />
                          </div>
                          <div class="mb-3">
                            <label for="faculty" class="form-label"><font size="3"><b>คณะ</b></font></label>
                            <input type="text" class="form-control" id="faculty" name="faculty" value="สหวิทยาการ" disabled/>
                          </div>
                          <div class="mb-3">
                            <label for="birthday" class="form-label"><font size="3"><b>วันเกิด</b></font></label>
                            <input type="date" class="form-control" value="{{ $request->birthday }}" id="birthday" name="birthday" />
                          </div>
                          <div class="mb-3">
                            <label for="age" class="form-label"><font size="3"><b>อายุ</b></font></label>
                            <input class="form-control" type="text" value="{{ $request->age }}" id="age" name="age"  />
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="address"><font size="3"><b>ที่อยู่</b></font></label>
                            <div class="input-group input-group-merge">
                              <input type="text" class="form-control" value="{{ $request->address }}" id="address" name="address" />
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="telephone"><font size="3"><b>เบอร์โทรศัพท์</b></font></label>
                            <div class="input-group input-group-merge">
                              <input type="text" class="form-control" value="{{ $request->telephone }}" id="telephone" name="telephone"  />
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
                            <input class="form-control" type="text" value="{{ $request->parent_name }}" id="parent_name" name="parent_name" />
                          </div>
                          <div class="mb-3">
                            <label for="parent_age" class="form-label"><font size="3"><b>อายุ</b></font></label>
                            <input class="form-control" type="text" value="{{ $request->parent_age }}" id="parent_age" name="parent_age" />
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="parent_work"><font size="3"><b>อาชีพ</b></font></label>
                             <input class="form-control" type="text" value="{{ $request->parent_work }}" id="parent_w" name="parent_work" />
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="parent_ relationship"><font size="3"><b>ความสัมพันธ์กับนักศึกษา</b></font></label>
                            <div class="input-group input-group-merge">
                              <input type="text" class="form-control" value="{{ $request->parent_relationship }}"  id="parent_relationship" name="parent_relationship" />
                            </div>          
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="parent_address"><font size="3"><b>ที่อยู่</b></font></label>
                            <div class="input-group input-group-merge">
                              <input type="text" class="form-control"  value="{{ $request->parent_address }}" id="parent_address" name="parent_address" />
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="parent_telephone"><font size="3"><b>เบอร์โทรศัพท์</b></font></label>
                            <div class="input-group input-group-merge">
                              <input type="text" class="form-control" value="{{ $request->parent_telephone }}" id="parent_telephone" name="parent_telephone" />
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
                            <input class="form-control" type="text" value="{{ $request->position_work }}" name="position_work"  id="position" name="position" />
                          </div>
                          <div class="mb-3">
                            <label for="address_work" class="form-label"><font size="3"><b>สถานที่ฝึกงาน</b></font></label>
                            <input class="form-control" type="text" value="{{ $request->address_work }}" id="address_work" name="address_work" />
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="start_internship"><font size="3"><b>เริ่มฝึกงาน</b></font></label>
                            <div class="input-group input-group-merge">
                              <input type="date" class="form-control" value="{{ $request->start_internship}}" id="start_internship" name="start_internship" />
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="end_internship"><font size="3"><b>สิ้นสุดการฝึกงาน</b></font></label>
                            <div class="input-group input-group-merge">
                              <input type="date" class="form-control"  value="{{ $request->end_internship}}" id="end_internship" name="end_internship" />
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="supervisor"><font size="3"><b>ผู้ควบคุมการฝึกงาน</b></font></label>
                            <div class="input-group input-group-merge">
                              <input type="text" class="form-control" value="{{ $request->supervisor }}" id="supervisor" name="supervisor" />
                            </div>
                          </div>

                          
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>

                <div class="mt-2 text-end ">
                            <button type="submit" class="btn btn-primary me-2">อัพเดทข้อมูล</button>
                          </div>
              </div>
            </div>
            <!-- / Content -->


<!-- Page JS -->
    <script src="../assets/js/pages-account-settings-account.js"></script>


                        

      </form>
@endsection