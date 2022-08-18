@extends('layout.v_template')
@section('title', 'Kota Balikpapan')

@section('content')
<a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px;float:right" href="{{ route('balikpapan.create') }}"><i class="fa fa-plus"></i>Tambah Data
</a>

<form method="GET" action="{{ url('balikpapan') }}">
    <div class="input-group mb-3" style="width:350px">
            <input type="text" class="form-control" placeholder="Cari Data Perjanjian" name="keyword" value="{{ $keyword }}">
            <div class="input-group-append">
                <button  type="submit" class="btn btn-primary">Search</button>
            </div>
    </div>
</form>
<br>

<a href="/balikpapan.cetakku" target="_blank" class="btn btn-primary btn-sm">Cetak</a> <br> <br>



<div class="section-body">
<div class="card">
<div class="card-body">
<div class="table table-responsive">
<table class="table table-bordered table-striped">
            <tr>
        <th>No</th>
        <th>Tentang</th>
        <th>No. MOU</th>
        <th>No. PKS</th>
        <th>Tanggal</th>
        <th>Jangka Waktu</th>
        <th>Unit Kerja</th>
        <th>Mitra Kerja</th>
        <th>Tahapan</th>
        <th>Tahun</th>
        <th>File</th>
        <th colspan="2">Action</th>
            </tr>
            <tbody>
            <?php $no = 1; ?>
        @foreach($balikpapan as $item)
            <tr>
            <td>{{ $no ++}}</td>
            <td>{{ $item->tentang }}</td>
            <td>{{ $item->mou }}</td>
            <td>{{ $item->pks }}</td>
            <td>{{ $item->tanggal }}</td>
            <td>{{ $item->jangka_waktu }}</td>
            <td>{{ $item->unitkerja }}</td>
            <td>{{ $item->mitrakerja }}</td>
            <td>{{ $item->tahapan }}</td>
            <td>{{ $item->tahun }}</td>
            <td align="center">
                <p>
                    <a href="{{ asset('storage/file/'.$item->file) }}" class="btn btn-xs btn-success" download="">Download</a>
                </p>
            </td>


            <td><a href="{{ route('balikpapan.edit', [$item->id]) }}" class='btn btn-success'><i class="fa fa-edit"></i>edit</a></td>

            <td>
            <form action="{{ url('balikpapan/'.$item->id) }}" method="POST">
                @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i>delete</button>
            </form>
        </td>
            </tr>
        @endforeach
       
    </table>
    {{ $balikpapan->links() }}
    </section>
</div>
</section>
@endsection