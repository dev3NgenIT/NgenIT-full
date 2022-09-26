@extends('frontend.master')

@section('content')

    <!-- header section -->
    @include('frontend.header')
    <!-- header section End -->



      <!-- sign in page -->

      <div class="log_in_page">

        <!-- login form -->
        <div class="Login_form">
            <div class="Login_form_content">
                <div class="Login_form_title">Create an account</div>
                
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                <!-- inner -->
                <div class="login_fomr_inner">
                    <label for="username">Name</label>
                    <input type="text" name="name" id="username">
                </div>

                <!-- inner -->
                <div class="login_fomr_inner">
                    <label for="username">Email</label>
                    <input type="text" name="email" id="username">
                </div>

                <!-- inner -->
                <div class="login_fomr_inner">
                    <label for="Password">Password</label>
                    <input type="password" name="password" id="Password">
                </div>

                <!-- inner -->
                <div class="login_fomr_inner">
                    <label for="Confirm">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="Confirm">
                </div>

                <!-- submit buttton -->

                <div class="submit_button">
                    <input type="submit" value="Sign in">
                </div>

            </form>
            </div>
        </div>

      </div>

    <!-- sign in page End -->


   @include('frontend.footer')

    @endsection

  
