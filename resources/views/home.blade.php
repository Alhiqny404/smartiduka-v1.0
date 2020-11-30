

@extends('layouts.userlayout')

@section('title','Dashboard')

@section('content')

<!-- Main content -->
<section class="content">
<div class="container-fluid">
    @if(
    empty(auth()->user()->profile->name) ||
    empty(auth()->user()->profile->kota_lahir) ||
    empty(auth()->user()->profile->tgl_lahir) ||
    empty(auth()->user()->profile->jk))
    <div class="alert alert-danger" role="alert">
    Silahkan Lengkapi Profile anda <a href="{{route('profile.edit',auth()->user()->profile->id)}}">Klik disini</a>
    </div>
    @endif
	<div class="row">
		<div class="col-xs-12 col-md-8">
            <div class="row">
                <form method="post" action="{{route('lokerfilterkategori')}}">
                    @csrf
                    <select name="kategori">
                        <option value="" holder>Semua kategori</option>
                        @foreach(kategori() as $ktgr)
                        <option value="{{$ktgr->id}}">{{$ktgr->name}}</option>
                        <option value="{{$ktgr->slug}}" class="d-none"></option>
                        @endforeach
                    </select>
                    <button type="submit">Filter</button>
                </form>
            </div>
			@foreach($post as $post)
			<div class="panel bg-white p-3">
                <div class="panel-body">
                    <div class='position-title header-text'>
                        <a class="position-title-link" href="{{route('detail.lowongan-kerja',$post->slug)}}">
                        <h2>{{ $post->title }}</h2></a>
                    </div>
                    <h3 class="company-name">
                        <a class="company-name" href="#"><span>{{$post->user->profileCompany->name}}</span></a>
                    </h3>
                    <ul class="list-unstyled">
                        <li>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fa fa-map-marker" aria-hidden="true">
                            </i>&nbsp;&nbsp;&nbsp;&nbsp;<span>{{ $post->lokasi }}</span>
                        </li>
                        <li>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-graduation-cap" aria-hidden="true">
                            </i>&nbsp;&nbsp;<font class="">{{ $post->kualifikasi }}</font>
                        </li>
                        <li class="text-success">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fa fa-usd" aria-hidden="true">
                            </i>&nbsp;&nbsp;&nbsp;&nbsp;<font class="">IDR {{ $post->min_gaji }} - {{ $post->max_gaji }}</font>
                        </li>
                    </ul>
                    <ul class="list-unstyled hidden-xs ">
                        <li>{!! substr($post->deskripsi,0,300) !!} <span style="color:grey;"> lihat Selengkapnya... </span></li>
                    </ul>
                    <div>
                        <span class="job-date-text text-muted">{{ $post->created_at }}</span>
                    </div>
                    <a href="#">Simpan Lowongan</a>
                </div>
            </div>
			@endforeach
		</div>
		<div class="col-xs-12 col-md-4">
			
		</div>
	</div>

</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection



