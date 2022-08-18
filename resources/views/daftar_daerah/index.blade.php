@extends('layout.v_template')
@section('title', 'Nama Daerah')

@section('content')
    <a type="button" class="btn btn-primary" href="{{ route('daftar_daerah.create') }}" style="margin-top: -10px;margin-bottom: 5px;float:right" ><i class="fa fa-plus"> </i>Tambah
    </a>
    <br>
<div class="section-body">
<div class="card">
<div class="card-body">
<div class="table table-responsive">
<table class="table table-bordered table-striped">
            <tr>
        <th>No</th>
        <th>Nama Daerah</th>
        
            </tr>
            <tbody>
                <?php $no = 1; ?>
        @foreach($daftar_daerah as $daftar_daerah)
            <tr>
            <td>{{ $no ++}}</td>
            <td>{{ $daftar_daerah->daftar}}</td>
           
            

            
            </tr>
            
        @endforeach

       
        </tbody>
    </table>
</div>
@endsection