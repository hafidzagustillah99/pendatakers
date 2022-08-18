@extends('layout.v_template')
@section('title', 'Pengajuan | Kabupaten Kutai Timur')

@section('content')
<form action="{{route('kutim.store')}}" method="post" enctype="multipart/form-data">

    <form method="POST" action="{{ route('kutim.index') }}">
        @csrf
    <div class="content">       
    <div class="section-body row">

        <div class="form-group col-sm-6">
        <label for="tentang">Tentang</label>
         <input type="text" name="tentang" class="form-control" id="tentang" required>
        </div>

        <br>
        <br>
        <br>

        <div class="form-group col-sm-6">
        <label for="mou">No.MOU</label>
         <input type="text" name="mou" class="form-control" id="mou" required>
        </div>

        <br>
        <br>
        <br>

        <div class="form-group col-sm-6">
        <label for="pks">No. PKS</label>
         <input type="text" name="pks" class="form-control" id="pks" required>
        </div>

        <br>
        <br>
        <br>

        <div class="form-group col-sm-6">
        <label for="tanggal">Tanggal</label>
         <input type="date" name="tanggal" class="form-control" id="tanggal" required>
        </div>

        <br>
        <br>
        <br>

        <div class="form-group col-sm-6">
        <label for="jangka_waktu">Jangka Waktu</label>
         <input type="text" name="jangka_waktu" class="form-control" id="jangka_waktu" required>
        </div>

        <br>
        <br>
        <br>

        <div class="form-group col-sm-6">
        <label for="unitkerja">Unit Kerja</label>
         <input type="text" name="unitkerja" class="form-control" id="unitkerja" required>
        </div>

        <br>
        <br>
        <br>

        <div class="form-group col-sm-6">
        <label for="mitrakerja">Mitra Kerja</label>
         <input type="text" name="mitrakerja" class="form-control" id="mitrakerja" required>
        </div>

        <br>
        <br>
        <br>

        <div class="form-group col-sm-6">
        <label for="tahapan">Tahapan</label>
         <input type="text" name="tahapan" class="form-control" id="tahapan" required>
        </div>

        <br>
        <br>
        <br>

        <div class="form-group col-sm-6">
            <label for="file">File</label>
            <input type="file" name="file" class="form-control">
        </div>

        <br>
        <br>
        <br>

        <div class="form-group col-sm-6">
        <label for="tahun">Tahun</label>
         <input type="text" name="tahun" class="form-control" id="tahun" required>
        </div>

    <div class="form-group col-sm-12 mt-3">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
        <a href="{{ route('kutim.index') }}" class="btn btn-danger"><i class="fa fa-undo"></i>Cancel</a>
        </form>
</form>
    </div>
</div>
@endsection