@extends('layout.v_template')
@section('title', 'Update | Kota Bontang')

@section('content')
<form action="{{route('bontang.update', $bontang->id)}}" method="post" enctype="multipart/form-data">
        @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="content">       
    <div class="section-body">
        <div class="card">
            <div class="card-body row">
                <div class="row">
               

        <div class="form-group col-sm-6">
        <label for="tentang">Tentang</label>
         <input type="text" name="tentang" value="{{ $bontang->tentang }}" class="form-control" id="tentang" required>
        </div>

        <br>
        <br>
        <br>
</div>

        <div class="form-group col-sm-6">
        <label for="mou">MOU</label>
         <input type="text" name="mou" value="{{ $bontang->mou }}" class="form-control" id="mou" required>
        </div>

        <br>
        <br>
        <br>

        <div class="form-group col-sm-6">
        <label for="pks">No. PKS</label>
         <input type="text" name="pks" value="{{ $bontang->pks }}" class="form-control" id="pks" required>
        </div>

        <br>
        <br>
        <br>

        <div class="form-group col-sm-6">
        <label for="tanggal">Tanggal</label>
         <input type="date" name="tanggal" value="{{ $bontang->tanggal }}" class="form-control" id="tanggal" required>
        </div>

        <br>
        <br>
        <br>

        <div class="form-group col-sm-6">
        <label for="jangka_waktu">Jangka Waktu</label>
         <input type="text" name="jangka_waktu" value="{{ $bontang->jangka_waktu }}" class="form-control" id="jangka_waktu" required>
        </div>

        <br>
        <br>
        <br>
        
        <div class="form-group col-sm-6">
        <label for="unitkerja">Unit Kerja</label>
         <input type="text" name="unitkerja" value="{{ $bontang->unitkerja }}" class="form-control" id="unitkerja" required>
        </div>

        <br>
        <br>
        <br>

        <div class="form-group col-sm-6">
        <label for="mitrakerja">Mitra Kerja</label>
         <input type="text" name="mitrakerja" value="{{ $bontang->mitrakerja }}" class="form-control" id="mitrakerja" required>
        </div>

        <br>
        <br>
        <br>

        <div class="form-group col-sm-6">
        <label for="tahapan">Tahapan</label>
         <input type="text" name="tahapan" value="{{ $bontang->tahapan }}" class="form-control" id="tahapan" required>
        </div>

        <br>
        <br>
        <br>

        <div class="form-group col-sm-6">
        <label for="file">FILE</label>
         <input type="file" name="file" value="{{ $bontang->file }}" class="form-control" id="file" required>
        </div>

        <br>
        <br>
        <br>

        <div class="form-group col-sm-6">
        <label for="tahun">Tahun</label>
         <input type="text" name="tahun" value="{{ $bontang->tahun }}" class="form-control" id="tahun" required>
        </div>

        
    <div class="form-group col-sm-12 mt-3">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('bontang.index') }}" class="btn btn-danger"><i class="fa fa-undo"></i>Cancel</a>
        </form>
    </div>
</div>
@endsection