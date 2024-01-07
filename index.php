<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/custom.css" />
    <script
      src="https://code.jquery.com/jquery-3.7.1.js"
      integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>CRUDE PROJECT</title>
  </head>
  <body>
    <div class="container">
      <div class="row p-3">
        <div class="col-lg-1 .col-12 mx-auto">
          <h3>CRUD</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-5 mx-auto">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title text-center">กรอกข้อมูล</h4>
              <hr />
              <form>
                <div class="row">
                  <div class="col-lg">
                    <div class="mb-3">
                      <label for="firstname" class="form-label">ชื่อจริง</label>
                      <input type="text" class="form-control" id="firstname" />
                    </div>
                  </div>

                  <div class="col-lg">
                    <div class="mb-3">
                      <label for="lastname" class="form-label">นามสกุล</label>
                      <input type="text" class="form-control" id="lastname" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg">
                    <label for="sex" class="form-label">เพศ</label>
                    <select class="form-select" id="sex" required>
                      <option selected disabled>เลือก...</option>
                      <option value="ชาย">ชาย</option>
                      <option value="หญิง">หญิง</option>
                      <option value="ไม่ระบุ">ไม่ระบุ</option>
                    </select>
                  </div>
                  <div class="col-lg">
                    <label for="age" class="form-label">อายุ</label>
                    <input type="number" class="form-control" id="age" />
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg">
                    <label for="address" class="form-label">ที่อยู่</label>
                    <textarea
                      class="form-control"
                      id="address"
                      rows="3"
                    ></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg">
                    <label for="rank" class="form-label">ตำแหน่ง</label>
                    <input type="text" class="form-control" id="rank" />
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-lg">
                    <div class="d-grid gap-2">
                      <button class="btn btn-primary" id="btn-submit" type="button">
                        บันทึก
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

  <script src="js/crud.js"></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"
  ></script>
</html>
