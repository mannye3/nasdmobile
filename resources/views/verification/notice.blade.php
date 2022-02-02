@extends('layouts.app')

@section('content')
<div class="nk-content ">
    <div class="nk-split nk-split-page nk-split-md">
        <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
            <div class="absolute-top-right d-lg-none p-3 p-sm-5">

            </div>
            <div class="nk-block nk-block-middle nk-auth-body">
                <div class="brand-logo pb-5">
                    <a href="#" class="logo-link">
                        <img class="logo-light logo-img logo-img-lg" src="{{ asset('/assets/images/nasdlogop.jpg')}}" srcset="./images/nasdlogop.jpg 2x" alt="logo">
                        <img class="logo-dark logo-img logo-img-lg" src="{{ asset('assets/images/nasdlogop.jpg')}}" srcset="./images/nasdlogop.jpg 2x" alt="logo-dark">
                    </a>
                </div>
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <h5 class="nk-block-title">Verify Your Email Address</h5>
                         @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif
                        <div class="nk-block-des">
                            Before proceeding, please check your email for a verification link. If you did not receive the email,
                             <form action="{{ route('verification.resend') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-lg btn-primary btn-block">
                        click here to request another
                    </button>.
                </form>
                        </div>
                    </div>
                </div><!-- .nk-block-head -->






            </div><!-- .nk-block -->


@endsection
