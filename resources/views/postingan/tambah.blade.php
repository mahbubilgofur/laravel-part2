  @extends ('layout.dasboard')

@section('contents')

 <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Horizontal Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               <form class="form-horizontal" action="/postingan/tampil" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">ID POST</label>
                    <div class="col-sm-10">
                      <input type="text" name="id_post" class="form-control @error('id_post') is-invalid @enderror " id="id_post" placeholder="id_post"  value="{{ old('email') }}">
                    </div>
                     @error('id_post')
        <div class="invalid-feedback">
          {{ $message  }}
        </div>
        @enderror
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">JUDUL</label>
                    <div class="col-sm-10">
                      <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror " id="judul" placeholder="judul"  value="{{ old('email') }}">
                    </div>
                     @error('judul')
        <div class="invalid-feedback">
          {{ $message  }}
        </div>
        @enderror
                  </div>
                   <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">ISI</label>
                    <div class="col-sm-10">
                      <input type="text"  name="isi"  class="form-control @error('isi') is-invalid @enderror " id="isi" placeholder="isi"  value="{{ old('email') }}">
                    </div>
                     @error('isi')
        <div class="invalid-feedback">
          {{ $message  }}
        </div>
        @enderror
                  </div>
                   <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">TGL POST</label>
                    <div class="col-sm-10">
                      <input type="date" name="tgl_post" class="form-control @error('tgl_post') is-invalid @enderror " id="tgl_post" placeholder="tgl_post"  value="{{ old('email') }}">
                    </div>
                     @error('tgl_post')
        <div class="invalid-feedback">
          {{ $message  }}
        </div>
        @enderror
                  </div>
                     <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">LINK</label>
                    <div class="col-sm-10">
                      <input type="text" name="link" class="form-control" id="link" placeholder="link">
                    </div>
                    
                  </div>
                 
                  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save Data</button>
      </div>
                 
                <!-- /.card-body -->
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          @endsection