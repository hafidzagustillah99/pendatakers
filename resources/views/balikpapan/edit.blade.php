@extends('layout.v_template')
@section('title', 'Update | Kota Balikpapan')

@section('content')
<form action="{{route('balikpapan.update', $balikpapan->id)}}" method="post" enctype="multipart/form-data">
        @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="content">       
    <div class="section-body">
        <div class="card">
            <div class="card-body row">
                <div class="row">
               

        <div class="form-group col-sm-6">
        <label for="tentang">Tentang</label>
         <input type="text" name="tentang" value="{{ $balikpapan->tentang }}" class="form-control" id="tentang" required>
        </div>

        <br>
        <br>
        <br>
</div>

        <div class="form-group col-sm-6">
        <label for="mou">MOU</label>
         <input type="text" name="mou" value="{{ $balikpapan->mou }}" class="form-control" id="mou" required>
        </div>

        <br>
        <br>
        <br>

        <div class="form-group col-sm-6">
        <label for="pks">No. PKS</label>
         <input type="text" name="pks" value="{{ $balikpapan->pks }}" class="form-control" id="pks" required>
        </div>

        <br>
        <br>
        <br>

        <div class="form-group col-sm-6">
        <label for="tanggal">Tanggal</label>
         <input type="date" name="tanggal" value="{{ $balikpapan->tanggal }}" class="form-control" id="tanggal" required>
        </div>

        <br>
        <br>
        <br>

        <div class="form-group col-sm-6">
        <label for="jangka_waktu">Jangka Waktu</label>
         <input type="text" name="jangka_waktu" value="{{ $balikpapan->jangka_waktu }}" class="form-control" id="jangka_waktu" required>
        </div>

        <br>
        <br>
        <br>
        
        <div class="form-group col-sm-6">
        <label for="unitkerja">Unit Kerja</label>
         <input type="text" name="unitkerja" value="{{ $balikpapan->unitkerja }}" class="form-control" id="unitkerja" required>
        </div>

        <br>
        <br>
        <br>

        <div class="form-group col-sm-6">
        <label for="mitrakerja">Mitra Kerja</label>
         <input type="text" name="mitrakerja" value="{{ $balikpapan->mitrakerja }}" class="form-control" id="mitrakerja" required>
        </div>

        <br>
        <br>
        <br>

        <div class="form-group col-sm-6">
        <label for="tahapan">Tahapan</label>
         <input type="text" name="tahapan" value="{{ $balikpapan->tahapan }}" class="form-control" id="tahapan" required>
        </div>

        <br>
        <br>
        <br>

        <div class="form-group col-sm-6">
        <label for="file">FILE</label>
         <input type="file" name="file" value="{{ $balikpapan->file }}" class="form-control" id="file" required>
        </div>

        <br>
        <br>
        <br>

        <div class="form-group col-sm-6">
        <label for="tahun">Tahun</label>
         <input type="text" name="tahun" value="{{ $balikpapan->tahun }}" class="form-control" id="tahun" required>
        </div>

        
    <div class="form-group col-sm-12 mt-3">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('balikpapan.index') }}" class="btn btn-danger"><i class="fa fa-undo"></i>Cancel</a>
        </form>
    </div>
</div>
@endsection