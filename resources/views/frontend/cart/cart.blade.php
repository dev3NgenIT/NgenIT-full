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
                        <div class="cart_header_title">Cart</div>
                        <!-- right -->
                        <div class="cart_header_right">
                            <div class="cart_header_right_inner">
                                <ul>
                                    <li><a href="" onclick="print()">
                                            <span><i class="fa-solid fa-print"></i> </span>
                                            <span>Print</span>
                                        </a></li>
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
                            <div class="your_cart_title">Your cart</div>
                            <div class="your_cart_empty"> 
                             <form action="{{ route('cart.clear') }}" method="POST">
                                @csrf
                                <button class="btn-sm btn-danger">Empty cart</button>
                            </form>
                            </div>
                        </div>

                @foreach ($cartItems as $item)

                        <tr>
                        <!-- your cart item-->
                        <div class="your_cart_item">
                            <!-- wrapper -->
                            <div class="your_cart_item_wrapper">
                                <!-- image -->
                                <div class="cart_item_image">
                                    <img src="{{ asset('storage/Product/'.$item->attributes->image) }}" alt="">
                                </div>

                                <!-- content -->
                                <div class="cart_item_content">
                                    <!-- utitlity -->
                                    <div class="cart_item_content_utitlity">
                                        <div class="cart_content_details">
                                            <!-- name -->
                                            <a href="{{ route('product',['id' => $item->id]) }}" class="cart_produt_name">{{ $item->name }}</a>
                                        </div>

                                        <!-- cart product price -->
                                        <div class="cart_product_price"> <small>USD</small> ${{ $item->price }}</div>

                                        <!-- cart counter-->
                                        <div class="card_product_counter">
                                            <form action="{{ route('cart.update') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $item->id}}" >
                                                <input  type="number" name="quantity" value="{{ $item->quantity }}" class="cart_input" /><br>
                                                 <button type="submit" class="btn-sm btn-success">update</button>
                                              </form>
                                        </div>

                                    </div>
                                    <!-- delete -->
                                    <div class="cart_item_delete">
                                        <form action="{{ route('cart.remove') }}" method="POST">
                                            @csrf
                                            <input type="hidden" value="{{ $item->id }}" name="id">
                                            <button class="fa-solid fa-trash-can"></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </tr>
            @endforeach
                    <!-- top product -->

                    <!-- single popular Product -->

                    <section class="popular_product_section section_padding" style="background: var(--primaryColor); margin-top: 20px;">
                        <!-- container -->
                        <div class="container">
                            <div class="popular_product_section_content">
                                <!-- section title -->
                                <div class="section_title">
                                    <h3 class="title_top_heading">Popular products</h3>
                                </div>
                                <!-- wrapper -->
                                <div class="populer_product_slider">
                            @foreach ($products as $item)

                                    <!-- product_item -->

                                    <div class="product_item">
                                        <!-- image -->
                                        <div class="product_item_thumbnail">
                                            <img src="{{ asset('storage/Product/'.$item->image) }}" alt="">
                                        </div>

                                        <!-- product content -->
                                        <div class="product_item_content">
                                            <a href="{{ route('product',['id' => $item->id]) }}" class="product_item_content_name">{{ $item->title }}</a>

                                            <!-- price -->
                                            <div class="product_item_price">
                                                <span class="price_currency">USD</span>
                                                <span class="price_currency_value">${{ $item->price }}</span>
                                            </div>

                                            <!-- button -->
                                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" value="{{ $item->id }}" name="id">
                                                <input type="hidden" value="{{ $item->title }}" name="name">
                                                <input type="hidden" value="{{ $item->price }}" name="price">
                                                <input type="hidden" value="{{ $item->image }}"  name="image">
                                                <input type="hidden" value="1" name="quantity">
                                                <button class="product_button">Add to Basket</button>
                                            </form>
                                        </div>

                                    </div>
                                @endforeach
                                    <!-- product item -->
                                 </div>
                            </div>
                        </div>
                    </section>

                    <!-- single popular Product end-->
                </div>
                <!-- summury -->
                <div class="cart_sidebar_sumury">
                    <div class="cart_summury_title">Summary</div>

                    <div class="summury_count">
                        <ul>
                            <li class=""><span>Subtotal</span> <span><small>USD</small>100$</span></li>
                            <li class=""><span>*Estimated Shipping</span> <span><small>USD</small>100$</span></li>
                            <li class=""><span>Tax estimate</span> <span><small>USD</small>100$</span></li>
                        </ul>

                        <p class="summury_count_total"> <span>Total</span> <span><small>USD</small> ${{ Cart::getTotal() }}</span></p>

                        <!-- button -->
                     <a href="{{ route('checkout') }}"><div class="submit_button">
                            <input type="submit" value="Checkout">
                        </div>
                     </a>   

                    </div>
                </div>
            </div>

            <!-- card body end-->
        </div>
        <!-- cart page content -->
    </div>

    @include('frontend.footer');


@endsection