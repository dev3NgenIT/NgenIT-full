@extends('frontend.master')

@section('content')

    <!-- header section -->
    @include('frontend.header')
    <!-- header section End -->


    <!-- banner start -->
    @include('frontend.banner')
    <!-- banner start end-->

<!-- home card -->
<section class="home_card_section">
    <div class="container">
        <!-- wrapper -->
        <div class="home_card_wrapper">

            <!-- home card item -->
            <div class="home_card_item">
                <h5 class="home_card_item_title">Explore NGen IT solutions</h5>
                <div href="" class="home_card_button">
                    <a href="/blogs">View Solutions</a>
                </div>

                <!-- button -->
            </div>

            <!-- home card item -->
            <div class="home_card_item">
                <h5 class="home_card_item_title">Shop products</h5>
                <div href="" class="home_card_button">
                    <a href="">Shop Now</a>
                </div>
                <!-- button -->
            </div>
        </div>
    </div>
</section>
<!-- home card end -->


<!-- business section -->
<section class="business_seftion section_padding">
    <div class="container">
        <div class="business_seftion_content">
            <!-- home title -->
            <div class="home_title">
                <h5 class="home_title_heading"> <Span>T</Span>op businesses across industries have trusted Insight to
                    achieve their ambitious business goals.</h5>

                <p class="home_title_text">Our technical expertise, broad solutions portfolio and supply chain
                    capabilities give us the right resources and scale to achieve more for you.</p>
            </div>

            <!-- business item wrapper -->
            <div class="business_seftion_wrapper">

                <!-- item -->
                <div href="#" class="business_item">

                    <!-- image -->
                    <div class="business_item_icon">
                        <img src="assets/frontend/image/business icon/outcomes-client-experience-icon.png" alt="">
                        {{-- <img src="{{asset('frontend/image/business icon/outcomes-client-experience-icon.png')}}" alt=""> --}}
                    </div>

                    <!-- content -->
                    <div class="business_item_content">
                        <p class="business_item_title">Client experience</p>
                        <p class="business_item_text">Serve your customers better with the right IT infrastructure,
                            hardware, software and applications.</p>
                        <a href="" class="business_item_button"><span>Learn More</span> <span
                                class="business_item_button_icon"><i
                                    class="fa-solid fa-arrow-right-long"></i></span></a>
                    </div>
                </div>

                <!-- item -->
                <div href="#" class="business_item">

                    <!-- image -->
                    <div class="business_item_icon">
                        <img src="assets/frontend/image/business icon/outcomes-grow-revenue-icon.png" alt="">
                        {{-- <img src="{{asset('frontend/image/business icon/outcomes-grow-revenue-icon.png')}}" alt=""> --}}
                    </div>

                    <!-- content -->
                    <div class="business_item_content">
                        <p class="business_item_title">Client experience</p>
                        <p class="business_item_text">Serve your customers better with the right IT infrastructure,
                            hardware, software and applications.</p>
                        <a href="" class="business_item_button"><span>Learn More</span> <span
                                class="business_item_button_icon"><i
                                    class="fa-solid fa-arrow-right-long"></i></span></a>
                    </div>
                </div>


                <!-- item -->
                <div href="#" class="business_item">

                    <!-- image -->
                    <div class="business_item_icon">
                        <img src="assets/frontend/image/business icon/outcomes-manage-cost-icon.png" alt="">
                        {{-- <img src="{{asset('frontend/image/business icon/outcomes-manage-cost-icon.png')}}" alt=""> --}}
                    </div>

                    <!-- content -->
                    <div class="business_item_content">
                        <p class="business_item_title">Client experience</p>
                        <p class="business_item_text">Serve your customers better with the right IT infrastructure,
                            hardware, software and applications.</p>
                        <a href="" class="business_item_button"><span>Learn More</span> <span
                                class="business_item_button_icon"><i
                                    class="fa-solid fa-arrow-right-long"></i></span></a>
                    </div>
                </div>

                <!-- item -->
                <div href="#" class="business_item">

                    <!-- image -->
                    <div class="business_item_icon">
                        <img src="assets/frontend/image/business icon/outcomes-mitigate-risk-icon.png" alt="">
                    </div>

                    <!-- content -->
                    <div class="business_item_content">
                        <p class="business_item_title">Client experience</p>
                        <p class="business_item_text">Serve your customers better with the right IT infrastructure,
                            hardware, software and applications.</p>
                        <a href="" class="business_item_button"><span>Learn More</span> <span
                                class="business_item_button_icon"><i
                                    class="fa-solid fa-arrow-right-long"></i></span></a>
                    </div>
                </div>


                <!-- item -->
                <div href="#" class="business_item">

                    <!-- image -->
                    <div class="business_item_icon">
                        <img src="assets/frontend/image/business icon/outcomes-operational-efficiencies-icon.png" alt="">
                    </div>

                    <!-- content -->
                    <div class="business_item_content">
                        <p class="business_item_title">Client experience</p>
                        <p class="business_item_text">Serve your customers better with the right IT infrastructure,
                            hardware, software and applications.</p>
                        <a href="" class="business_item_button"><span>Learn More</span> <span
                                class="business_item_button_icon"><i
                                    class="fa-solid fa-arrow-right-long"></i></span></a>
                    </div>
                </div>


            </div>

            <!-- button -->
            <div class="business_seftion_button">
                <a href="#">Explore business outcomes</a>
            </div>
        </div>
    </div>
</section>
<!-- business section end-->


<!-- learn client history -->
<div class="learn_clint_hustory section_padding">
    <div class="container">
        <div class="learn_clint_hustory_content">
            <!-- title -->
            <div class="section_title">
                <h3 class="title_top_heading">Learn more in our client stories.</h3>
            </div>

            <!-- wrapper -->
            <div class="learn_clint_hustory_wrapper">                
                @foreach ($blogs as $blog)
                <a href="blogs/{{$blog['id']}}">
                    <div class="product_item">
                        <!-- image -->
                        <div class="feature_content_item_thumbnail">
                            <img src="{{ asset('storage/'. $blog->logo) }}" alt="">
                        </div>

                        <div class="feature_content_item_content">
                            <p class="feature_content_item_name">
                                    {{$blog['title']}}
                            </p>
                            <p class="feature_content_item_text"> {{$blog['header1']}}</p>
                        </div>
                    </div>
                </a>
                @endforeach
               
                <!-- item -->
                {{-- <a href="/blog/show" class="feature_content_item"> --}}
                    <a href="blogs/1" class="feature_content_item">
                        <!-- image -->
                        <div class="feature_content_item_thumbnail">
                            <img src="assets/frontend/image/clint/clint1.jpg" alt="">
                        </div>

                        <!-- content -->
                        <div class="feature_content_item_content">
                            <p class="feature_content_item_name">Solution brief</p>
                            <p class="feature_content_item_text">How Westerra Prioritized Digital Transformation in the
                                Face of Disruption</p>
                        </div>
                    </a>


                    <!-- item -->
                    <a href="blogs/2" class="feature_content_item">
                        <!-- image -->
                        <div class="feature_content_item_thumbnail">
                            <img src="assets/frontend/image/clint/clint2.jpg" alt="">
                        </div>

                        <!-- content -->
                        <div class="feature_content_item_content">
                            <p class="feature_content_item_name"> Solution brief </p>
                            <p class="feature_content_item_text">Why Insight for Microsoft Cloud</p>
                        </div>
                    </a>


                    {{-- item 
                    <a href="blogs/3" class="feature_content_item">
                        image 
                        <div class="feature_content_item_thumbnail">
                            <img src="assets/frontend/image/clint/clint3.jpg" alt="">
                        </div>

                        content
                        <div class="feature_content_item_content">
                            <p class="feature_content_item_name"> Solution brief </p>
                            <p class="feature_content_item_text">Why Insight for Microsoft Cloud</p>
                        </div>
                    </a>


                    item 
                    <a href="blogs/4" class="feature_content_item">
                        image 
                        <div class="feature_content_item_thumbnail">
                            <img src="assets/frontend/image/clint/clint4.jpg" alt="">
                        </div>

                        content 
                        <div class="feature_content_item_content">
                            <p class="feature_content_item_name"> Solution brief </p>
                            <p class="feature_content_item_text">Why Insight for Microsoft Cloud</p>
                        </div>
                    </a> --}}


            </div>

            <!-- button -->
            <div class="learn_clint_history_btn">
                <a href="blogs">See all client stories</a>
            </div>

        </div>
    </div>
</div>
<!-- learn client history End-->


<!-- shop product section -->
<div class="shop_product_section section_padding">
    <div class="container">
        <div class="shop_product_wrapper">
            <!-- content -->
            <div class="shop_product_content">
                <div class="home_title" style="width: 100%; margin: 0px;">
                    <h5 class="home_title_heading" style="text-align: left;"> Shop products and hardware</h5>

                    <p class="home_title_text" style="text-align: left; font-size: 18px !important;">With more than
                        600,000 products and 7,500 in-house brand experts at your fingertips, we’ll get you the
                        technology you need to achieve your goals. And, you can manage it all seamlessly through your
                        myInsight account.</p>

                    <div class="business_seftion_button" style="text-align: left;">
                        <a href="#">Shop Now</a>
                    </div>
                </div>
            </div>

            <!-- product brand -->
            <div class="shop_product_brand_list">
                <ul>
                    <li><a href="">Product categories</a></li>
                    <li><a href="">Brands</a></li>
                    <li><a href="">Tech deals</a></li>
                    <li><a href="">Account benefits</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>
<!-- shop product section end -->


<!-- top product section -->


    <section class="popular_product_section section_padding">
        <!-- container -->
        <div class="container">
            <div class="popular_product_section_content">
                <!-- section title -->
                <div class="section_title">
                    <h3 class="title_top_heading">Popular products</h3>
                </div>
                <!-- wrapper -->
                <div class="populer_product_slider">

                    <!-- product_item -->
                    @foreach ($products as $item )
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

    <!-- top product section end -->


    <!-- magazine section -->

    {{-- <div class="magazine_section section_padding">
        <div class="container"> 
            <!-- wrapper -->
            <div class="magazine_section_wrapper">
                <!-- image -->
                <div class="magazine_wrapper_image">
                    <img src="assets/frontend/image/clint/magazine.png" alt="">
                </div>

                <!-- content -->

                <div class="magazine_wrapper_content">
                    <!-- title -->
                    <div class="magazine_content_title">Tech Journal magazine</div>

                    <div class="magazine_content_heading">Exploring New Horizons in IT</div>

                    <div class="magazine_content_text">From the intelligent edge and employee experience tracking to application modernization and next-gen retail solutions, discover the technology transforming how we do business, interact with our world and engage with one another.</div>

                    <div class="magazine_content_button">
                        <a href="">Read the magazine</a>
                    </div>
                </div>

            </div>
        </div>
    </div> --}}

    <!-- magazine section end-->

    <!-- our success section -->

    {{-- <section class="our_success section_padding">
        <div class="container">
            <!-- title -->
            <div class="section_title">
                <h3 class="title_top_heading">Popular products</h3>
            </div>
            <!-- wrapper -->
            <div class="populer_product_slider">

                <!-- product_item -->

                <div class="product_item">
                    <!-- image -->
                    <div class="product_item_thumbnail">
                        <img src="assets/frontend/image/single page/single product/product5.jpg" alt="">
                    </div>

                    <!-- product content -->
                    <div class="product_item_content">
                        <a href="" class="product_item_content_name">Microsoft Wireless Desktop 2000 - keyboard and
                            mouse set - QWERTY - US - black</a>

                        <!-- price -->
                        <div class="product_item_price">
                            <span class="price_currency">usd</span>
                            <span class="price_currency_value">$856</span>
                        </div>

                        <!-- button -->
                        <a href="" class="product_button">Add to Basket</a>
                    </div>

                </div>
                <!-- product item -->

                <!-- product_item -->

                <div class="product_item">
                    <!-- image -->
                    <div class="product_item_thumbnail">
                        <img src="assets/frontend/image/single page/single product/product5.jpg" alt="">
                    </div>

                    <!-- product content -->
                    <div class="product_item_content">
                        <a href="" class="product_item_content_name">Microsoft Wireless Desktop 2000 - keyboard and
                            mouse set - QWERTY - US - black</a>

                        <!-- price -->
                        <div class="product_item_price">
                            <span class="price_currency">usd</span>
                            <span class="price_currency_value">$856</span>
                        </div>

                        <!-- button -->
                        <a href="" class="product_button">Add to Basket</a>
                    </div>

                </div>
                <!-- product item -->


                <!-- product_item -->

                <div class="product_item">
                    <!-- image -->
                    <div class="product_item_thumbnail">
                        <img src="assets/frontend/image/single page/single product/product2.jpg" alt="">
                    </div>

                    <!-- product content -->
                    <div class="product_item_content">
                        <a href="" class="product_item_content_name">Microsoft Wireless Desktop 2000 - keyboard and
                            mouse set - QWERTY - US - black</a>

                        <!-- price -->
                        <div class="product_item_price">
                            <span class="price_currency">usd</span>
                            <span class="price_currency_value">$856</span>
                        </div>

                        <!-- button -->
                        <a href="" class="product_button">Add to Basket</a>
                    </div>

                </div>
                <!-- product item -->



                <!-- product_item -->

                <div class="product_item">
                    <!-- image -->
                    <div class="product_item_thumbnail">
                        <img src="assets/frontend/image/single page/single product/product3.jpg" alt="">
                    </div>

                    <!-- product content -->
                    <div class="product_item_content">
                        <a href="" class="product_item_content_name">Microsoft Wireless Desktop 2000 - keyboard and
                            mouse set - QWERTY - US - black</a>

                        <!-- price -->
                        <div class="product_item_price">
                            <span class="price_currency">usd</span>
                            <span class="price_currency_value">$856</span>
                        </div>

                        <!-- button -->
                        <a href="" class="product_button">Add to Basket</a>
                    </div>

                </div>
                <!-- product item -->


                <!-- product_item -->

                <div class="product_item">
                    <!-- image -->
                    <div class="product_item_thumbnail">
                        <img src="assets/frontend/image/single page/single product/product4.jpg" alt="">
                    </div>

                    <!-- product content -->
                    <div class="product_item_content">
                        <a href="" class="product_item_content_name">Microsoft Wireless Desktop 2000 - keyboard and
                            mouse set - QWERTY - US - black</a>

                        <!-- price -->
                        <div class="product_item_price">
                            <span class="price_currency">usd</span>
                            <span class="price_currency_value">$856</span>
                        </div>

                        <!-- button -->
                        <a href="" class="product_button">Add to Basket</a>
                    </div>

                </div>
                <!-- product item -->


            </div>
        </div>
    </div>
   </section> --}}

<!-- top product section end -->

 <!-- our success section -->

 <section class="our_success section_padding">
    <div class="container">
        <!-- title -->
        <div class="section_title">
            <h3 class="title_top_heading">Our success starts with our culture.</h3>
        </div>
        <!-- wrapper -->
        <div class="our_success_wrapper">
            
            <!-- item -->
            <div class="our_success_item">
                <p class="our_success_item_title">Hunger</p>
                
                <div class="our_success_item_body">
                    We are change agents, united in our passion to improve every day and deliver outstanding results for our clients, partners and Insight.
                </div>
            </div>

            <!-- item -->
            <div class="our_success_item">
                <p class="our_success_item_title our_success_item_title2">Hunger</p>
                
                <div class="our_success_item_body">
                    We are change agents, united in our passion to improve every day and deliver outstanding results for our clients, partners and Insight.
                </div>
            </div>

            <!-- item -->
            <div class="our_success_item"> 
                <p class="our_success_item_title our_success_item_title3">Hunger</p>
                
                <div class="our_success_item_body">
                    We are change agents, united in our passion to improve every day and deliver outstanding results for our clients, partners and Insight.
                </div>
            </div>


        </div>
    </div>
</section>

<!-- our success section end -->

    @include('frontend.footer');


@endsection
