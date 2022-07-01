@extends('layouts.appp')
 

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="d-lg-flex half">
             <div class="bg order-1 order-md-2" style="background-image: url('images/hero_1.jpg');"></div>
                    <div class="contents order-2 order-md-1">
                        <div class="container">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-7 py-5">
                                    <h3> Eliana Connect Sales Agent</h3>
                                    <div class="card">
                                        <div class="card-header">{{ __('Verify Your Email Address') }}</div>
                                            <div class="card-body">
                                                @if (session('resent'))
                                                    <div class="alert alert-success" role="alert">
                                                        {{ __('A fresh verification link has been sent to your email address.') }}
                                                    </div>
                                                @endif

                                                {{ __('Before proceeding, please check your email for a verification link.') }}
                                                {{ __('If you did not receive the email') }},
                                                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                                    @csrf
                                                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                                                </form>
                                        </div>
                                    </div>
                                    
                                
                                </div>
                            </div>
                        </div>
                    </div>
             </div>



</div>
@endsection
