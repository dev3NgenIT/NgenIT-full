@extends('frontend.master')

@section('content')

    <!-- header section -->
    @include('frontend.header')
    <!-- header section End -->



    <div class="cart_page">
        <!-- cart page content -->
        <div class="cart_page_content">
            <!-- cart header -->
            <div class="cart_header">
                <div class="cart_header_content">
                    <!-- wrapper -->
                    <div class="cart_header_wrapper">
                        <!-- title -->
                        <div class="cart_header_title">Checkout</div>
                        <!-- right -->
                        <div class="cart_header_right">
                            <div class="cart_header_right_inner">
                                <ul>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- cart header end-->

            <!-- card body -->

            <div class="cart_body_wrapper">
                <!-- left -->
                <div class="cart_body_left">
                    <div class="your_cart">
                        <!-- header -->
                        <div class="your_cart_header">
                            <div class="your_cart_title">Your information</div>
                        </div>

                    <!-- check out form -->
                    <div class="checkout_form">
                        <div class="checkout_form_wrapper">

                            <!-- form item -->
                            <div class="check_form_inner">
                                <label for="name">Name <sup>*</sup> </label>
                                <input type="text" class="check_form" id="name">
                            </div>

                            <!-- form item -->
                            <div class="check_form_inner">
                                <label for="Phone">Phone <sup>*</sup> </label>
                                <input type="tel" class="check_form" id="Phone">
                            </div>

                            <!-- form item -->
                            <div class="check_form_inner">
                                <label for="Email">Email <sup>*</sup> </label>
                                <input type="email" class="check_form" id="Email">
                            </div>

                            <!-- form item -->
                            <div class="check_form_inner">
                                <label for="Email">Upload <sup>*</sup> </label>
                                <input type="file" class="check_form" id="Email">
                            </div>


                        </div>
                    </div>


                    </div>
                </div>
                <!-- summury -->
                <div class="cart_sidebar_sumury">
                    <div class="cart_summury_title">Summary</div>

                    <div class="summury_count">
                        <ul>
                            <li class=""><span>Subtotal</span> <span><small>USD</small>244$</span></li>
                            <li class=""><span>*Estimated Shipping</span> <span><small>USD</small>425$</span></li>
                            <li class=""><span>Tax estimate</span> <span><small>USD</small>200$</span></li>
                        </ul>

                        <p class="summury_count_total"> <span>Total</span> <span><small>USD</small> 140000$</span></p>

                        <!-- button -->
                        <div class="submit_button">
                            <input type="submit" value="Checkout">
                        </div>

                    </div>
                </div>
            </div>

            <!-- card body end-->
        </div>
        <!-- cart page content -->
    </div>

    @include('frontend.footer');


@endsection
 
