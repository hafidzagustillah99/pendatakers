@extends('layout.v_template')
@section('title', 'Users')

@section('content')
<form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">

    <form method="POST" action="{{ route('user.index') }}">
        @csrf
    <div class="content">
    <div class="section-body">


        <div class="form-group col-sm-6">
        <label for="name">Nama</label>
         <input type="text" name="name" class="form-control" id="name" required>
        </div>

        <div class="form-group col-sm-6">
        <label for="email">Email</label>
         <input type="text" name="email" class="form-control" id="email" required>
        </div>

        <div class="form-group col-sm-6">
        <label for="password">Password</label>
         <input type="password" name="password" class="form-control" id="password" required>
        </div>

        <div class="form-group col-sm-6">
            <label for="daftar_daerah_id">User Daerah</label>
            <select name="daftar_daerah_id" class="form-control">
                <option>Pilih Daerah untuk User</option>
                @foreach ($daerah as $key => $value)
                    <option value="{{ $key }}"
                        @if ($key == old('daftar_daerah_id', $users->daftar_daerah_id))
                        selected="selected"
                        @endif
                    >{{ $value }}</option>
                @endforeach
            </select>
{{--            <input type="text" name="daftar_daerah_id" class="form-control" id="daftar_daerah_id" required>--}}
        </div>


    <div class="form-group col-sm-12 mt-3">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
        <a href="{{ route('user.index') }}" class="btn btn-danger"><i class="fa fa-undo"></i>Cancel</a>
        </form>
</form>
    </div>
</div>
@endsection
