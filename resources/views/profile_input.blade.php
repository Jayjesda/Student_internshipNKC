@extends('layouts.template')

@section('content')
        <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-md-6">
                  <div class="card mb-4">
                    <h5 class="card-header">ประวัติของนักศึกษา</h5>
                    <!-- Account -->
                    <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img
                          src="../assets/img/imges/TempProfile.jpg"
                          alt="user-avatar"
                          class="d-block rounded"
                          height="200"
                          width="200"
                          id="uploadedAvatar"
                        />
                        <div class="input-group">
                          <input type="file" class="form-control" id="inputGroupFile02" />
                          <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                      </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                      <form id="formAccountSettings" method="POST" onsubmit="return false">
                        <div class="row">
                          <div class="mb-3">
                            <label for="studentID" class="form-label">รหัสประจำตัวนักศึกษา</label>
                            <input class="form-control" type="text" id="studentID" name="studentID" />
                          </div>
                          <div class="mb-3">
                            <label for="name" class="form-label">ชื่อ-สกุล</label>
                            <input class="form-control" type="text" id="name" name="name" autofocus />
                          </div>
                          <div class="mb-3">
                            <label for="email" class="form-label">อีเมล</label>
                            <input class="form-control" type="text" name="email" id="email" value="##" disabled />
                          </div>
                          <div class="mb-3">
                            <label for="level" class="form-label">ชั้นปี</label>
                            <select id="level" class="select2 form-select">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                            </select>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="major">สาขา</label>
                            <select id="major" class="select2 form-select">
                              <option value="วิทยาการคอมพิวเตอร์และสารสนเทศ">วิทยาการคอมพิวเตอร์และสารสนเทศ</option>
                              <option value="วิทยาการข้อมูลและปัญญาประดิษฐ์">วิทยาการข้อมูลและปัญญาประดิษฐ์</option>
                              <option value="เทคโนโลยีการผลิตสัตว์น้ำ">เทคโนโลยีการผลิตสัตว์น้ำ</option>
                              <option value="เทคโนโลยีและนวัตกรรมอาหาร">เทคโนโลยีและนวัตกรรมอาหาร</option>
                              <option value="วิทยาศาสตร์สิ่งแวดล้อมและทรัพยากรธรรมชาติ">วิทยาศาสตร์สิ่งแวดล้อมและทรัพยากรธรรมชาติ</option>
                              <option value="ววิทยาศาสตร์การกีฬาและการออกกำลังการ">วิทยาศาสตร์การกีฬาและการออกกำลังการ</option>
                              <option value="การเงินธุรกิจ">การเงินธุรกิจ</option>
                              <option value="ธุรกิจระหว่างประเทศ">ธุรกิจระหว่างประเทศ</option>
                              <option value="การท่องเที่ยวและอุตสาหกรรมการบริการ">การท่องเที่ยวและอุตสาหกรรมการบริการ</option>
                              <option value="บัญชีบัณฑิต">บัญชีบัณฑิต</option>
                              <option value="เศษฐศาสตร์ธุรกิจและการจัดการ">เศษฐศาสตร์ธุรกิจและการจัดการ</option>
                              <option value="นิติศาสตร์">นิติศาสตร์</option>
                              <option value="รัฐประศาสนศาสตร์">รัฐประศาสนศาสตร์</option>
                              <option value="ภาษาอังกฤษเพื่อการจัดการธุรกิจ">ภาษาอังกฤษเพื่อการจัดการธุรกิจ</option>
                              <option value="การสอนภาษอังกฤษในฐานะภาษาต่างประเทศ">การสอนภาษอังกฤษในฐานะภาษาต่างประเทศ</option>
                            </select>
                          </div>
                          <div class="mb-3">
                            <label for="faculty" class="form-label">คณะ</label>
                            <input type="text" class="form-control" id="faculty" name="faculty" value="สหวิทยาการ" disabled/>
                          </div>
                          <div class="mb-3">
                            <label for="birthday" class="form-label">วันเกิด</label>
                            <input type="date" class="form-control" id="birthday" name="birthday" />
                          </div>
                          <div class="mb-3">
                            <label for="age" class="form-label">อายุ</label>
                            <input class="form-control" type="text" id="age" name="age" />
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="address">ที่อยู่</label>
                            <div class="input-group input-group-merge">
                              <input type="text" class="form-control" id="address" name="address" />
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="telephone">เบอร์โทรศัพท์</label>
                            <div class="input-group input-group-merge">
                              <input type="text" class="form-control" id="telephone" name="telephone" />
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="row">
                    <div class="col-12">
                      <div class="card mb-4">
                        <h5 class="card-header">ข้อมูลผู้ปกครอง</h5>
                        <div class="card-body">
                          <div class="mb-3">
                            <label for="parent_name" class="form-label">ชื่อ-สกุล</label>
                            <input class="form-control" type="text" id="parent_name" name="parent_name" />
                          </div>
                          <div class="mb-3">
                            <label for="parent_age" class="form-label">อายุ</label>
                            <input class="form-control" type="text" id="parent_age" name="parent_age" />
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="parent_work">อาชีพ</label>
                            <select id="parent_ relationship" class="select2 form-select">
                              <option value="ข้าราชการ">ข้าราชการ</option>
                              <option value="พนักงานรัฐวิสาหกิจ">พนักงานรัฐวิสาหกิจ</option>
                              <option value="พนักงานบริษัท">พนักงานบริษัท</option>
                              <option value="ค้าขาย/ประกอบกิจการส่วนตัว">ค้าขาย/ประกอบกิจการส่วนตัว</option>
                              <option value="รับจ้างทั่วไป">รับจ้างทั่วไป</option>
                              <option value="เกษตรกร">เกษตรกร</option>
                              <option value="ว่างงาน">ว่างงาน</option>
                            </select>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="parent_ relationship">ความสัมพันธ์กับนักศึกษา</label>
                            <div class="input-group input-group-merge">
                              <input type="text" class="form-control" id="parent_ relationship" name="parent_ relationship" />
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="parent_address">ที่อยู่</label>
                            <div class="input-group input-group-merge">
                              <input type="text" class="form-control" id="parent_address" name="parent_address" />
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="parent_telephone">เบอร์โทรศัพท์</label>
                            <div class="input-group input-group-merge">
                              <input type="text" class="form-control" id="parent_telephone" name="parent_telephone" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-12">
                      <div class="card mb-4">
                        <h5 class="card-header">ข้อมูลการฝึกงาน</h5>
                        <div class="card-body">
                          <div class="mb-3">
                            <label for="position" class="form-label">ฝึกงานตำแหน่ง</label>
                            <input class="form-control" type="text" id="position" name="position" />
                          </div>
                          <div class="mb-3">
                            <label for="workaddress" class="form-label">สถานที่ฝึกงาน</label>
                            <input class="form-control" type="text" id="workaddress" name="workaddress" />
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="start_internship">เริ่มฝึกงาน</label>
                            <div class="input-group input-group-merge">
                              <input type="date" class="form-control" id="start_internship" name="start_internship" />
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="end_internship">สิ้นสุดการฝึกงาน</label>
                            <div class="input-group input-group-merge">
                              <input type="date" class="form-control" id="end_internship" name="end_internship" />
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="supervisor">ผู้ควบคุมการฝึกงาน</label>
                            <div class="input-group input-group-merge">
                              <input type="text" class="form-control" id="supervisor" name="supervisor" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mt-2 text-end">
                    <button type="submit" class="btn btn-primary me-2">บันทึกข้อมูล</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->
@endsection