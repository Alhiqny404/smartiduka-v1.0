
@extends('layouts.userlayout')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifikasi Email Anda') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Pendaftaran Anda Telah Berhasil Silahkan periksa email anda untuk verifikasi!') }}
                    {{ __('Jika Belum menerima email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __(', Klik disini untuk mengirim email verifikasi kembali') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
