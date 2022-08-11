@extends('layout.v_template')
@section('title', 'Update')

@section('content')
<form action="{{route('pemprov.update', $pemprov->id)}}" method="post" enctype="multipart/form-data">
        @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="content">       
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <div class="row">
               

        <div class="form-group col-sm-6">
        <label for="tentang">Tentang</label>
         <input type="text" name="tentang" value="{{ $pemprov->tentang }}" class="form-control" id="tentang" required>
        </div>

        
</div>

        <div class="form-group col-sm-6">
        <label for="mou">MOU</label>
         <input type="text" name="mou" value="{{ $pemprov->mou }}" class="form-control" id="mou" required>
        </div>


        <div class="form-group col-sm-6">
        <label for="pks">No. PKS</label>
         <input type="text" name="pks" value="{{ $pemprov->pks }}" class="form-control" id="pks" required>
        </div>

        <div class="form-group col-sm-6">
        <label for="tanggal">Tanggal</label>
         <input type="date" name="tanggal" value="{{ $pemprov->tanggal }}" class="form-control" id="tanggal" required>
        </div>

       

        <div class="form-group col-sm-6">
        <label for="jangka_waktu">Jangka Waktu</label>
         <input type="text" name="jangka_waktu" value="{{ $pemprov->jangka_waktu }}" class="form-control" id="jangka_waktu" required>
        </div>
        
        <div class="form-group col-sm-6">
        <label for="unitkerja">Unit Kerja</label>
         <input type="text" name="unitkerja" value="{{ $pemprov->unitkerja }}" class="form-control" id="unitkerja" required>
        </div>

        <div class="form-group col-sm-6">
        <label for="mitrakerja">Mitra Kerja</label>
         <input type="text" name="mitrakerja" value="{{ $pemprov->mitrakerja }}" class="form-control" id="mitrakerja" required>
        </div>

        <div class="form-group col-sm-6">
        <label for="tahapan">Tahapan</label>
         <input type="text" name="tahapan" value="{{ $pemprov->tahapan }}" class="form-control" id="tahapan" required>
        </div>

        <div class="form-group col-sm-6">
        <label for="provinsi">Provinsi</label>
         <input type="text" name="provinsi" value="{{ $pemprov->provinsi }}" class="form-control" id="provinsi" required>
        </div>

        <div class="form-group col-sm-6">
        <label for="nama_daerah">Kota/Kabupaten</label>
         <input type="text" name="nama_daerah" value="{{ $pemprov->nama_daerah }}" class="form-control" id="nama_daerah" required>
        </div>

        <div class="form-group col-sm-6">
        <label for="file">FILE</label>
         <input type="file" name="file" value="{{ $pemprov->file }}" class="form-control" id="file" required>
        </div>

        <div class="form-group col-sm-6">
        <label for="tahun">Tahun</label>
         <input type="text" name="tahun" value="{{ $pemprov->tahun }}" class="form-control" id="tahun" required>
        </div>

        
    <div class="form-group col-sm-12">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('pemprov.index') }}" class="btn btn-danger"><i class="fa fa-undo">Cancel</i></a>
        </form>
    </div>
</div>
@endsection