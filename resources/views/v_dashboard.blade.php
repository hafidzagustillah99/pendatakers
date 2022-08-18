@extends('layout.v_template')
@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-sm-6  mb-3">
        <div class="block block-rounded d-flex flex-column h-100 mb-0">
            <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                <dl class="mb-0">
                    <dt class="fs-3 fw-bold">10 Kota/Kabupaten</dt>
                    <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">DATA DAERAH</dd>
                </dl>
                <div class="item item-rounded-lg bg-body-light">
                    <i class="fas fa-city fs-3 text-primary"></i>
                </div>
            </div>
            <div class="bg-body-light rounded-bottom">
                <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                    href="/daftar_daerah">
                    <span>Lihat</span>
                    <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="col-sm-6 mb-3">
        <div class="block block-rounded d-flex flex-column h-100 mb-0">
            <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                <dl class="mb-0">
                    <dt class="fs-3 fw-bold">USERS</dt>
                    <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">USERS</dd>
                </dl>
                <div class="item item-rounded-lg bg-body-light">
                    <i class="far fa-user fs-3 text-primary"></i>
                </div>
            </div>
            <div class="bg-body-light rounded-bottom">
                <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                    href="/user">
                    <span>Lihat</span>
                    <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="block block-rounded">
            <div class="block-content">
                <div class="row items-push">
                    <div class="col-md-4 col-lg-5">
                        <a class="img-link img-link-simple" href="be_pages_blog_story.html">
                            <img class="img-fluid rounded" src="{{ asset('template/dist/img/gedungkltm.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="col-md-8 col-lg-7 d-md-flex align-items-center">
                        <div>
                            <h4 class="mb-1">
                                <a class="text-dark" href="#">Selamat Datang di Sistem Pendataan Perjanjian Kerjasama</a>
                            </h4>
                            <div class="fs-sm fw-medium mb-3">
                                <a href="#">Kalimantan Timur</a> {{date("d F Y", strtotime(NOW ()))}} 
                            </div>
                            <p class="fs-sm text-muted">
                                Jangan Merasa Gagal Sebelum Mendata, Usaha dan Doa akan membuat tidak mungkin menjadi mungkin
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection
