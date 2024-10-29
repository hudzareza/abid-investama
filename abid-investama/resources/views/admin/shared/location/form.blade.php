  <style>
      .pad-bg {
          background: #f8f8f8;
          padding: 40px 20px;
          border-radius: 5px;
          margin-top: 50px;
          margin-bottom: 50px;
          border: 1px solid #e5e5e5;

          h1 {
              padding-bottom: 30px;
              margin-top: 0;
              margin-bottom: 30px;
              border-bottom: 1px dashed #ccc;
          }
      }
  </style>
  <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
          <!-- Default form -->
          <form method="post" action="{{route('location.store')}}" class='pad-bg'>
              @csrf
              <h1 class="text-center">Tambah Lokasi</h1>
              <div class="form-group">
                  <label for="">Nama</label>
                  <input name="nama" type="text" class="i-box form-control input-lg" />
              </div>
              <br>
              <div class="form-group">
                  <label for="">Alamat</label>
                  <textarea name="alamat" id="" class="form-control input-lg"></textarea>
              </div>
              <br>
              <div class="form-group">
                  <label for="">Nomor Telephone</label>
                  <input name="no_telphone" type="text" class="i-box form-control input-lg" />
              </div>
              <br>
              <button type="submit" class="btn btn-success btn-lg">SUBMIT</button>
          </form>
      </div>
  </div>