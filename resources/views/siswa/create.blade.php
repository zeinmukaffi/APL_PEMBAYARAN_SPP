@extends('layout.layout')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<section class="section">
    <h3>Add Siswa</h3>
    <div class="card">
        <div class="card-body">
            <form class="form form-horizontal" action="{{ url('siswa') }}" method="POST">
                @csrf
                <div class="form-body">
                    <a href="{{ url('siswa') }}"><i class="bi bi-arrow-left"></i> Back</a>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <label>Nama Siswa</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" class="form-control" name="nama_siswa"
                                placeholder="Nama Siswa" />
                            @error('nama_siswa')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label>NISN</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="number" class="form-control" name="nisn" placeholder="NISN" />
                            @error('nisn')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label>Kelas</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <select class="form-select js-example-tags" name="kelas_id" id="basicSelect">
                                <option></option>
                                @foreach ($kelas as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_kelas }}</option>
                                @endforeach
                            </select>
                            @error('kelas_id')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label>SPP</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <select class="form-select" name="spp_id" id="basicSelect">
                                <option></option>
                                @foreach ($spp as $item)
                                <option value="{{ $item->id }}">{{ $item->tahun }} : {{ $item->nominal }}</option>
                                @endforeach
                              </select>
                            @error('spp_id')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label>Alamat</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3"></textarea>
                            @error('alamat')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-sm-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">
                                Submit
                            </button>
                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                                Reset
                            </button>
                            <i class="arrow-circle-left"></i>
                        </div>
                        
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<script>
    $(".js-example-tags").select2({
  tags: true
});
</script>
@endsection
