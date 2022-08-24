<li class="nav-main-item " style="padding-left: 5px">MENU</li>

<li>
	<a class="nav-main-link" href="/dashboard">
		<i class="nav-main-link-icon fa fa-book"></i>
		<span class="nav-main-link-name">Dashboard</span>
	</a>
</li>
<li>
	<a class="nav-main-link" href="{{route('user.index')}}">
		<i class="nav-main-link-icon fa fa-user"></i>
		<span class="nav-main-link-name">User</span>
	</a>
</li>
<li>
	<a class="nav-main-link" href="{{route('daftar_daerah.index')}}">
		<i class="nav-main-link-icon fa fa-folder"></i>
		<span class="nav-main-link-name">Kota/Kabupaten Kaltim</span>
	</a>
</li>


<li class="nav-main-item">
    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false"
        href="#">
        <i class="nav-main-link-icon si si-badge"></i>
        <span class="nav-main-link-name">Pendataan Perjanjian</span>
    </a>
    <ul class="nav-main-submenu">
        @if(\Illuminate\Support\Facades\Auth::user()->daftar_daerah_id==1)
            <li class="nav-main-item"><a class="nav-main-link" href="{{route('samarinda.index')}}"><i
                        class="fa fa-circle-o"></i> Kota Samarinda</a></li>
        @elseif(\Illuminate\Support\Facades\Auth::user()->daftar_daerah_id==2)
            <li class="nav-main-item"><a class="nav-main-link" href="{{route('bontang.index')}}"><i
                        class="fa fa-circle-o"></i> Kota Bontang</a></li>
        @elseif(\Illuminate\Support\Facades\Auth::user()->daftar_daerah_id==3)
            <li class="nav-main-item"><a class="nav-main-link" href="{{route('balikpapan.index')}}"><i
                        class="fa fa-circle-o"></i> Kota Balikpapan</a></li>
        @elseif(\Illuminate\Support\Facades\Auth::user()->daftar_daerah_id==4)
            <li class="nav-main-item"><a class="nav-main-link" href="{{route('kukar.index')}}"><i
                        class="fa fa-circle-o"></i> Kab. Kutai Kartanegara</a></li>
        @elseif(\Illuminate\Support\Facades\Auth::user()->daftar_daerah_id==5)
            <li class="nav-main-item"><a class="nav-main-link" href="{{route('kutim.index')}}"><i
                        class="fa fa-circle-o"></i> Kab. Kutai Timur</a></li>
        @elseif(\Illuminate\Support\Facades\Auth::user()->daftar_daerah_id==6)
            <li class="nav-main-item"><a class="nav-main-link" href="{{route('kubar.index')}}"><i
                        class="fa fa-circle-o"></i> Kab. Kutai Barat</a></li>
        @elseif(\Illuminate\Support\Facades\Auth::user()->daftar_daerah_id==7)
            <li class="nav-main-item"><a class="nav-main-link" href="{{route('berau.index')}}"><i
                        class="fa fa-circle-o"></i> Kab. Berau</a></li>
        @elseif(\Illuminate\Support\Facades\Auth::user()->daftar_daerah_id==8)
            <li class="nav-main-item"><a class="nav-main-link" href="{{route('mahakam.index')}}"><i
                        class="fa fa-circle-o"></i> Kab. Mahakam Ulu</a></li>
        @elseif(\Illuminate\Support\Facades\Auth::user()->daftar_daerah_id==9)
            <li class="nav-main-item"><a class="nav-main-link" href="{{route('penajam.index')}}"><i
                        class="fa fa-circle-o"></i> Kab. Penajam Paser Utara</a></li>
        @elseif(\Illuminate\Support\Facades\Auth::user()->daftar_daerah_id==10)
            <li class="nav-main-item"><a class="nav-main-link" href="{{route('paser.index')}}"><i
                        class="fa fa-circle-o"></i> Kab. Paser</a></li>
        @elseif(\Illuminate\Support\Facades\Auth::user()->daftar_daerah_id==11)
            <li class="nav-main-item"><a class="nav-main-link" href="{{route('pemprov.index')}}"><i
                        class="fa fa-circle-o"></i> Provinsi Kalimantan Timur</a></li>
        @else
            <li class="nav-main-item"><a class="nav-main-link" href="{{route('pemprov.index')}}"><i
                        class="fa fa-circle-o"></i> Provinsi Kalimantan Timur</a></li>
            <li class="nav-main-item"><a class="nav-main-link" href="{{route('samarinda.index')}}"><i
                        class="fa fa-circle-o"></i> Kota Samarinda</a></li>
            <li class="nav-main-item"><a class="nav-main-link" href="{{route('balikpapan.index')}}"><i
                        class="fa fa-circle-o"></i> Kota Balikpapan</a></li>
            <li class="nav-main-item"><a class="nav-main-link" href="{{route('bontang.index')}}"><i
                        class="fa fa-circle-o"></i> Kota Bontang</a></li>
            <li class="nav-main-item"><a class="nav-main-link" href="{{route('kukar.index')}}"><i
                        class="fa fa-circle-o"></i> Kab. Kutai Kartanegara</a></li>
            <li class="nav-main-item"><a class="nav-main-link" href="{{route('kutim.index')}}"><i
                        class="fa fa-circle-o"></i> Kab. Kutai Timur</a></li>
            <li class="nav-main-item"><a class="nav-main-link" href="{{route('kubar.index')}}"><i
                        class="fa fa-circle-o"></i> Kab. Kutai Barat</a></li>
            <li class="nav-main-item"><a class="nav-main-link" href="{{route('berau.index')}}"><i
                        class="fa fa-circle-o"></i> Kab. Berau</a></li>
            <li class="nav-main-item"><a class="nav-main-link" href="{{route('mahakam.index')}}"><i
                        class="fa fa-circle-o"></i> Kab. Mahakam Ulu</a></li>
            <li class="nav-main-item"><a class="nav-main-link" href="{{route('penajam.index')}}"><i
                        class="fa fa-circle-o"></i> Kab. Penajam Paser Utara</a></li>
            <li class="nav-main-item"><a class="nav-main-link" href="{{route('paser.index')}}"><i
                        class="fa fa-circle-o"></i> Kab. Paser</a></li>
        @endif
    </ul>
</li>
