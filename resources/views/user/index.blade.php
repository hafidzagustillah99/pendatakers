@extends('layout.v_template')
@section('title', 'Users')

@section('content')
<div class="row">
    <div class="col-md-12">
        <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px;float:right"
    href="{{ route('user.create') }}"><i class="fa fa-plus"></i>Tambah Data
</a>
<br>
<div class="section-body">
    <div class="card">
        <div class="card-body">
            <div class="table table-responsive">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Password</th>

                    </tr>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach($users as $item)
                        <tr>
                            <td>{{ $no ++}}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->password }}</td>

                            </form>
                            </td>
                        </tr>
                        @endforeach

                </table>
            </div>
        </div>
    </div>
</div>x
    </div>
</div>
            @endsection
