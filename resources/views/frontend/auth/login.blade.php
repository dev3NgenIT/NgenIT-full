@extends('frontend.master')

@section('content')

    <!-- header section -->
    @include('frontend.header')
    <!-- header section End -->


    <!-- Login page -->

    <div class="log_in_page">

        <!-- login form -->
        <div class="Login_form">
            <div class="Login_form_content">
                <div class="Login_form_title">Log in</div>
                <!-- inner -->
             <form method="POST" action="{{ route('login') }}">
                    @csrf
                <div class="login_fomr_inner">
                    <label for="username">Email or username</label>
                    <input type="text" name="email" id="username">
                </div>

                <!-- inner -->
                <div class="login_fomr_inner">
                    <label for="Password">Password</label>
                    <input type="password" name="password" id="Password">
                </div>

                <!-- forget password -->
                <a href="" class="forgot_pass">Forgot password?</a>

                <!-- submit buttton -->

                <div class="submit_button">
                    <input type="submit" value="Log in">
                </div>
            </div>

            <!-- create account -->

            <a href="{{ route('register') }}" class="create_account">
                <span>New to NgenIt?</span>
                <span>Create an account</span>
            </a>
        </div>

    </form>

    </div>

    <!-- Login page End -->

    @include('frontend.footer')


    @endsection