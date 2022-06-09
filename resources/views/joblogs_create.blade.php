@extends('layouts.template')

@section('content')

  <form action="{{ url('insert_joblogs') }}" method="POST" enctype="multipart/form-data">
          @csrf
          
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
                
                <!-- HTML5 Inputs -->
                  <div class="card mb-4">
                    <h5 class="card-header"><font color="#E67E22" size="4px"><b>INTERNSHIP RECORD : บันทึกการฝึกงานประจำวัน</b></font></h5>
                    <div class="card-body">

                      <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label"><font color="#212F3C" size="3px"><b>ชื่อ</b></font></label>
                        <div class="col-md-10">
                          <input class="form-control" type="text" placeholder="นายทดสอบ การบันทึก" id="html5-text-input" disabled />
                        </div>
                      </div>

                      <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label"><font color="#212F3C" size="3px"><b>สถานที่ฝึกงาน</b></font></label>
                        <div class="col-md-10">
                          <input class="form-control" type="text" placeholder="บริษัท KKU UNIVERSITY / แผนก เทคโนโลยีสารสนเทศ / ตำแหน่งนักศึกษาฝึกงาน" id="html5-text-input" disabled />
                        </div>
                      </div>

                      <div class="mb-4 row">
                        <label for="html5-date-input" class="col-md-2 col-form-label"><font color="#212F3C" size="3px"> <b>วันที่</b></font></label>
                        <div class="col-md-10">
                          <input class="form-control" type="date"  name="Date" required />
                           
                        </div>
                      </div>

                      <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label"><font color="#212F3C" size="3px"><b>หัวข้อการฝึกงานประจำวัน</b></font></label>
                        <div class="col-md-10">
                          <input class="form-control" type="text" placeholder="หัวข้อการฝึกงาน"  name="Title" required />
                        </div>
                      </div>
                      <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-message"><font color="#212F3C" size="3px"><b>รายละเอียด</b></font></label>
                          <div class="col-sm-10">
                            <textarea

                              type="text"
                              class="form-control"
                              placeholder="รายละเอียดการฝึกงานประจำวัน"
                              name="Deatails" required 
                            ></textarea>
                          </div>
                        </div>

                        <div class="mb-3 row">
                        <label for="html5-time-input" class="col-md-2 col-form-label"><font color="#212F3C" size="3px"><b>เวลาเริ่มงาน</b></font></label>
                        <div class="col-md-10">
                          <input class="form-control" type="time" value="08:30:00"  name="Time_start" required />
                        </div>
                        </div>

                        <div class="mb-3 row">
                        <label for="html5-time-input" class="col-md-2 col-form-label"><font color="#212F3C" size="3px"><b>เวลาเลิกงาน</b></font></label>
                        <div class="col-md-10">
                          <input class="form-control" type="time" value="16:30:00" name="Time_end" required />
                        </div>
                        </div>
                      
                      
                     
                      <center> <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button></center>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
            </div>
          </div>
        </div>
     </div>
  </div>
 </div>
</div>
  
</form>
@endsection