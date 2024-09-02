@extends('templates.master')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Blank Page</h1>

  </div><!-- End Page Title -->
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Example Card</h5>
      <form action="/add/{{ $lapor->id_lapor}}/update" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="hidden" class="form-control" name="id_lapor[0]" value="{{ $lapor->id_lapor }}">

        <!-- Other form fields... -->
        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">NIK</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="NIK[0]">
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nama[0]">
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Umur</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="umur[0]">
          </div>
        </div>

        <fieldset class="row mb-3">
          <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender[0]" id="gender1" value="Laki-Laki" checked="">
              <label class="form-check-label" for="gender1">
                Laki-Laki
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender[0]" id="gender2" value="Perempuan">
              <label class="form-check-label" for="gender2">
                Perempuan
              </label>
            </div>
        </fieldset>

        <div class="row mb-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Kondisi</label>
          <div class="col-sm-10">
            <textarea class="form-control" style="height: 100px" name="kondisi[0]"></textarea>
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputFile" class="col-sm-2 col-form-label">Foto</label>
          <div class="col-sm-10">
            <input type="file" class="form-control" name="foto_upload[0]" onchange="previewImage(this, 0)">
            <input type="hidden" name="foto[0]" id="foto[0]">
            </div>
        </div>
        <div class="row mb-3">
          <label for="inputFile" class="col-sm-2 col-form-label">Preview</label>
          <div class="col-sm-10">
            <img src="" id="preview_0" class="img-fluid img-thumbnail">
          </div>
        </div>

        <div id="form_dinamis">
        </div>

        <div class="row">
          <div class="col-auto">
            <button type="button" id="tambah" class="btn btn-primary btn-sm"><i data-feather="plus"></i>
            </button>
          </div>
          <div class="col-auto">
            <button type="button" id="hapus" class="btn btn-danger btn-sm"><i data-feather="minus"></i>
              </i></button>
          </div>
        </div>

        <div class="form-group row">
          <div class="col-sm-12 col-md-10 mt-3">
            <input class="btn btn-primary" type="submit" value="Submit">
          </div>
        </div>

    </div>

    </form>
  </div>
  </div>
</main>

@endsection

@push('js')
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

<script>
  $(document).ready(function() {
    var id = 0;

    $('#tambah').click(function() {
      id++;
      $('#form_dinamis').append(`
      <div id="NIK` + id + `">
        <input type="hidden" class="form-control" name="id_lapor[` + id + `]" value="{{ $lapor->id_lapor }}" >
        
        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">NIK</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="NIK[` + id + `]">
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nama[` + id + `]">
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Umur</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="umur[` + id + `]">
          </div>
        </div>

        <fieldset class="row mb-3">
          <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender[` + id + `]" id="gender1" value="Laki-Laki" checked="">
              <label class="form-check-label" for="gender1">
                Laki-Laki
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender[` + id + `]" id="gender2" value="Perempuan">
              <label class="form-check-label" for="gender2">
                Perempuan
              </label>
            </div>
        </fieldset>

        <div class="row mb-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Kondisi</label>
          <div class="col-sm-10">
            <textarea class="form-control" style="height: 100px" name="kondisi[` + id + `]"></textarea>
          </div>
        </div>
        
        <div class="row mb-3">
          <label for="inputFile" class="col-sm-2 col-form-label">Foto</label>
          <div class="col-sm-10">
            <input type="file" class="form-control" name="foto[` + id + `]" onchange="previewImage(this, ` + id + `)">
            <input type="text" name="foto[` + id + `]" id="foto[` + id + `]">
          </div>
        </div>

        <div class="row mb-3">
          <label for="inputFile" class="col-sm-2 col-form-label">Preview</label>
          <div class="col-sm-10">
            <img src="" id="preview_` + id + `" class="img-fluid img-thumbnail">
          </div>
        </div>
      </div>
    `);
    });

    $('#hapus').click(function() {
      $('#NIK' + id).remove();
      id--;
    });

  });

  function previewImage(input, id) {
    var file = input.files[0];
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#preview_' + id).attr('src', e.target.result);
    };

    if (file) {
      reader.readAsDataURL(file);
      uploadImage(file, id);
    }
  }

  function uploadImage(file, id) {
    var formData = new FormData();
    formData.append('file', file);

    $.ajax({
      url: '{{ route("upload") }}',
      type: 'POST',
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      data: formData,
      processData: false,
      contentType: false,
      success: function(data) {
        $('input[name="foto[' + id + ']"]').val(data.success);
      }
    });
  }
</script>
@endpush