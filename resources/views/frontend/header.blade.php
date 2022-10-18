<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NgenIt Corporate</title>
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;900&display=swap"
        rel="stylesheet">
    <!-- fontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="assets/frontend/css/slick.css">
    <link rel="stylesheet" href="assets/frontend/css/slick-theme.css">
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- css link -->
    <link rel="stylesheet" href="assets/frontend/css/component.css">
    <link rel="stylesheet" href="assets/frontend/css/default.css">
    <link rel="stylesheet" href="assets/frontend/css/main.css">
    <link rel="stylesheet" href="assets/frontend/css/global.css">
    <link rel="stylesheet" href="assets/frontend/css/responsive.css">
</head>

<body>
    <header class="header_section">
        <!-- header_top -->
        <div class="header_top">
            <div class="header_top_wrapper">
                <!-- left -->
                <div class="header_top_left">
                    <a href="" class="header_logo_top">
                        <img src="assets/frontend/image/Logo/logo.png" alt="">
                    </a>
                    <div class="header_top_nav">
                        <ul>
                            <li class="nav_respons">
                                <span>Tools</span>
                                <span class="header_top_svg"><svg class="c-icon c-icon--dropdown" viewBox="0 0 192 512">
                                        <polygon points="0,208 96,304 192,208"></polygon>
                                    </svg></span>

                                <!-- Top hover sub nav -->
                                <div class="top_header_subNav">
                                    <ul>
                                        <li><a href=""> Track an order</a></li>
                                        <li><a href=""> Learn more about our tools</a></li>
                                        <li><a href=""> Cloud Management Platform</a></li>
                                        <li><a href=""> Dashboards</a></li>
                                        <li><a href=""> Order tracking & reporting</a></li>
                                        <li><a href=""> Personalization & preferences</a></li>
                                        <li><a href=""> Procurement integration</a></li>
                                        <li><a href=""> Purchasing options</a></li>
                                        <li><a href=""> Renewals & Warranty Manager</a></li>
                                        <li><a href=""> Software asset management tools</a></li>
                                    </ul>
                                </div>

                            </li>
                            <li class="nav_respons">
                                <span>Support</span>
                                <span class="header_top_svg"><svg class="c-icon c-icon--dropdown" viewBox="0 0 192 512">
                                        <polygon points="0,208 96,304 192,208"></polygon>
                                    </svg></span>

                                <!-- Top hover sub nav -->
                                <div class="top_header_subNav">
                                    <ul>
                                        <li><a href="">Chat With Us</a></li>
                                        <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                                        <li><a href="">Call Support</a></li>
                                        <li><a href="">Knowdlge Base</a></li>
                                        <li><a href="">Web Support Assistance</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- middile -->
                <div class="header_top_middile">
                    <div class="header_top_nav">
                        <ul>
                            <li class="nav_respons"> <span class="nav_top_ic"><i class="fa-brands fa-whatsapp"></i>
                                </span> <a href="tel:01782998660">01714243446</a></li>
                            <li><a href="mailto:sales.ngenitltd@gmail.com"> <span class="nav_top_ic"><i class="fa-regular fa-envelope"></i>
                                </span>sales.ngenitltd@gmail.com</a></li>
                        </ul>
                    </div>
                </div>

                <!-- right -->
                <div class="header_top_right">
                    <div class="header_top_nav">
                        <ul>
                            @if(Auth::check())
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li><a class="dropdown-item" href="#">Order List</a></li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{url('logout')}}">Logout</a>
                                    </li>
                                </ul>
                            </div>
                            @else

                            <li class="nav-item px-3 usermargin active nav_respons">
                                <a class="nav-link" href="{{url('login')}}">Login</a>
                            </li>

                            <li class="nav_respons">
                                <a href="{{ route('register') }}">Create an Account</a>
                            </li>

                            @endif

                            <li class="nav_response_card">
                                <a href="{{ route('cart.list') }}">
                                    <i class="fa fa-shopping-cart"><span
                                            style="color: #fff">{{ Cart::getTotalQuantity()}}</span></i>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- main header -->
        <div class="main_header">
            <div class="main_header_wrapper">
                <!-- logo -->
                <a href="" class="header_logo">
                    <img src="{{asset('assets/frontend/image/Logo/logo.png')}}" alt="">
                </a>
                <!-- nav -->
                <div class="header_nav">
                    <ul>
                        <!-- nav item -->
                        <li class="nav_toogler">
                            <a>
                                <span>Our Services</span>
                                <span class="header_top_svg"><svg class="c-icon c-icon--dropdown" viewBox="0 0 192 512">
                                        <polygon points="0,208 96,304 192,208"></polygon>
                                    </svg></span>
                            </a>

                            <!-- sub nav -->

                            <div class="sub_nav">
                                <!-- content -->
                                <div class="sub_nav_content">
                                    <div class="sub_nav_wrapper">

                                        <!-- item -->
                                        <div class="sub_nav_item">
                                            <!-- title -->
                                            <div class="sub_nav_item_title">
                                                <a href="">
                                                    <span class="nav_item_saparate"></span> Products
                                                </a>
                                            </div>
                                            <p class="sub_nav_item_text">Harness the power of technology to achieve your
                                                most ambitious goals.</p>
                                            <!-- list -->
                                            <div class="sub_nav_item_list">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span>Hardwares</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Softwares</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Digital Services</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>



                                                    <li>
                                                        <a href="">
                                                            <span>View All Products</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <!-- item -->


                                        <!-- item -->
                                        <div class="sub_nav_item">
                                            <!-- title -->
                                            <div class="sub_nav_item_title">
                                                <a href="">
                                                    <span class="nav_item_saparate nav_item_saparate2"></span>Solutions
                                                </a>
                                            </div>
                                            <p class="sub_nav_item_text">Our deep expertise and end-to-end capabilities
                                                help you navigate complex IT challenges.</p>
                                            <!-- list -->
                                            <div class="sub_nav_item_list">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span></span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>


                                                    <li>
                                                        <a href="">
                                                            <span>View All Solutions</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <!-- item -->


                                        <!-- item -->
                                        <div class="sub_nav_item">
                                            <!-- title -->
                                            <div class="sub_nav_item_title">
                                                <a href="">Industry
                                                    <span class="nav_item_saparate nav_item_saparate3"></span>
                                                </a>
                                            </div>
                                            <p class="sub_nav_item_text">Our service offerings — spanning cloud,
                                                collaboration and more — drive new business outcomes.</p>
                                            <!-- list -->
                                            <div class="sub_nav_item_list">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span>Financial</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Healthcare</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Manufacturing</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Public sector</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>View All industries</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>

                                        <!-- item -->
                                        <div class="sub_nav_item">
                                            <!-- title -->
                                            <div class="sub_nav_item_title">
                                                <a href="">
                                                    Services
                                                    <span class="nav_item_saparate nav_item_saparate4"></span>
                                                </a>
                                            </div>
                                            <p class="sub_nav_item_text">Our industry specialists have the knowledge and
                                                experience to meet your unique needs.</p>
                                            <!-- list -->
                                            <div class="sub_nav_item_list">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span>Consulting services</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Managed services
                                                            </span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Digital HR Services </span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Support Services</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>View All Services </span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <!-- item -->

                                    </div>
                                </div>
                                <!-- submenu bottom -->
                                <div class="sub_menu_botttom">
                                    <div class="sub_menu_botttom_content">
                                        <a href="" class="sub_botttom_text">View all solutions</a>
                                    </div>
                                </div>
                            </div>

                        </li>

                        <!-- nav item -->
                        <li class="nav_toogler ">
                            <a>
                                <span>Tech Contents</span>
                                <span class="header_top_svg"><svg class="c-icon c-icon--dropdown" viewBox="0 0 192 512">
                                        <polygon points="0,208 96,304 192,208"></polygon>
                                    </svg></span>
                            </a>


                            <!-- sub menu -->
                            <div class="sub_nav">
                                <!-- content -->
                                <div class="sub_nav_content">
                                    <div class="sub_nav_wrapper">

                                        <!-- item -->
                                        <div class="sub_nav_item">
                                            <!-- title -->
                                            <div class="sub_nav_item_title">
                                                <a href="">
                                                    <span class="nav_item_saparate"></span> By Industry
                                                </a>
                                            </div>
                                            <p class="sub_nav_item_text">Harness the power of technology to achieve your
                                                most ambitious goals.</p>
                                            <!-- list -->
                                            <div class="sub_nav_item_list">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span>Education</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Healthcare</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Manufacturing</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Public sector
                                                            </span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>View All industries</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <!-- item -->


                                        <!-- item -->
                                        <div class="sub_nav_item">
                                            <!-- title -->
                                            <div class="sub_nav_item_title">
                                                <a href="">
                                                    <span class="nav_item_saparate nav_item_saparate2"></span> By
                                                    Solution
                                                </a>
                                            </div>
                                            <p class="sub_nav_item_text">Our deep expertise and end-to-end capabilities
                                                help you navigate complex IT challenges.</p>
                                            <!-- list -->
                                            <div class="sub_nav_item_list">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span>Modern infrastructure
                                                            </span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Networking
                                                            </span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Procurement
                                                            </span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Real-time data</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>View All Solutions</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <!-- item -->


                                        <!-- item -->
                                        <div class="sub_nav_item">
                                            <!-- title -->
                                            <div class="sub_nav_item_title">
                                                <a href="">By Technology
                                                    <span class="nav_item_saparate nav_item_saparate3"></span>
                                                </a>
                                            </div>
                                            <p class="sub_nav_item_text">Our service offerings — spanning cloud,
                                                collaboration and more — drive new business outcomes.</p>
                                            <!-- list -->
                                            <div class="sub_nav_item_list">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span>AI & IoT</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>IT optimization</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Cloud</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Cybersecurity </span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>View All Technologies</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>

                                        <!-- item -->
                                        <div class="sub_nav_item">
                                            <!-- title -->
                                            <div class="sub_nav_item_title">
                                                <a href="">
                                                    By Contents
                                                    <span class="nav_item_saparate nav_item_saparate4"></span>
                                                </a>
                                            </div>
                                            <p class="sub_nav_item_text">Our industry specialists have the knowledge and
                                                experience to meet your unique needs.</p>
                                            <!-- list -->
                                            <div class="sub_nav_item_list">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span>Analyst Report</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span> Article
                                                            </span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Client story
                                                            </span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Tech Journal</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>View All Contents </span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <!-- item -->

                                    </div>
                                </div>
                                <!-- submenu bottom -->
                                <div class="sub_menu_botttom">
                                    <div class="sub_menu_botttom_content">
                                        <a href="" class="sub_botttom_text">View all solutions</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- nav item -->
                        <li class="nav_toogler ">
                            <a>
                                <span>Partner & Clients</span>
                                <span class="header_top_svg"><svg class="c-icon c-icon--dropdown" viewBox="0 0 192 512">
                                        <polygon points="0,208 96,304 192,208"></polygon>
                                    </svg></span>
                            </a>


                            <!-- sub menu -->
                            <div class="sub_nav">
                                <!-- content -->
                                <div class="sub_nav_content">
                                    <div class="sub_nav_wrapper">

                                        <!-- item -->
                                        <div class="sub_nav_item">
                                            <!-- title -->
                                            <div class="sub_nav_item_title">
                                                <a href="">
                                                    <span class="nav_item_saparate"></span> Partners
                                                </a>
                                            </div>
                                            <p class="sub_nav_item_text">Harness the power of technology to achieve your
                                                most ambitious goals.</p>
                                            <!-- list -->
                                            <div class="sub_nav_item_list">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span>Optimum</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Intimicy</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Leads Innovation</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Yongkhar</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>View All Partners</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <!-- item -->


                                        <!-- item -->
                                        <div class="sub_nav_item">
                                            <!-- title -->
                                            <div class="sub_nav_item_title">
                                                <a href="">
                                                    <span class="nav_item_saparate nav_item_saparate2"></span>Clients
                                                </a>
                                            </div>
                                            <p class="sub_nav_item_text">Our deep expertise and end-to-end capabilities
                                                help you navigate complex IT challenges.</p>
                                            <!-- list -->
                                            <div class="sub_nav_item_list">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span> icddr'b
                                                            </span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>UNDP
                                                            </span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span> Chevron
                                                            </span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Bangladesh Bank</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>View All Clients</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>


                                                </ul>
                                            </div>
                                        </div>
                                        <!-- item -->


                                        <!-- item -->
                                        <div class="sub_nav_item">
                                            <!-- title -->
                                            <div class="sub_nav_item_title">
                                                <a href="">Principals
                                                    <span class="nav_item_saparate nav_item_saparate3"></span>
                                                </a>
                                            </div>
                                            <p class="sub_nav_item_text">Our service offerings — spanning cloud,
                                                collaboration and more — drive new business outcomes.</p>
                                            <!-- list -->
                                            <div class="sub_nav_item_list">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span>Acronis
                                                            </span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Riverbed</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Pepperel + Fuschs</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Schnieder </span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>View All Principals</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- item -->
                                        <div class="sub_nav_item">
                                            <!-- title -->
                                            <div class="sub_nav_item_title">
                                                <a href="">Investors
                                                    <span class="nav_item_saparate nav_item_saparate4"></span>
                                                </a>
                                            </div>
                                            <p class="sub_nav_item_text">Our industry specialists have the knowledge and
                                                experience to meet your unique needs.</p>
                                            <!-- list -->
                                            <div class="sub_nav_item_list">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span>Not Done</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span> Healthcare </span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Manufacturing </span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span> Public sector</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>View All Investors</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <!-- item -->

                                    </div>
                                </div>
                                <!-- submenu bottom -->
                                <div class="sub_menu_botttom">
                                    <div class="sub_menu_botttom_content">
                                        <a href="" class="sub_botttom_text">View all solutions</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- nav item -->
                        <li class="nav_toogler">
                            <a>
                                <span>Connect Us</span>
                                <span class="header_top_svg"><svg class="c-icon c-icon--dropdown" viewBox="0 0 192 512">
                                        <polygon points="0,208 96,304 192,208"></polygon>
                                    </svg></span>
                            </a>


                            <!-- sub menu -->
                            <div class="sub_nav">
                                <!-- content -->
                                <div class="sub_nav_content">
                                    <div class="sub_nav_wrapper">

                                        <!-- item -->
                                        <div class="sub_nav_item">
                                            <!-- title -->
                                            <div class="sub_nav_item_title">
                                                <a href="">
                                                    <span class="nav_item_saparate"></span> Contacts
                                                </a>
                                            </div>
                                            <p class="sub_nav_item_text">Harness the power of technology to achieve your
                                                most ambitious goals.</p>
                                            <!-- list -->
                                            <div class="sub_nav_item_list">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span>Direct Reach</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Social Connects</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Datasheets</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>About Us</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Social logos</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <!-- item -->


                                        <!-- item -->
                                        <div class="sub_nav_item">
                                            <!-- title -->
                                            <div class="sub_nav_item_title">
                                                <a href="">
                                                    <span class="nav_item_saparate nav_item_saparate2"></span>Service
                                                </a>
                                            </div>
                                            <p class="sub_nav_item_text">Our deep expertise and end-to-end capabilities
                                                help you navigate complex IT challenges.</p>
                                            <!-- list -->
                                            <div class="sub_nav_item_list">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span> Webinars
                                                            </span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Presentations
                                                            </span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span> PoCs
                                                            </span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Knowledgebase</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Request Service Call</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>


                                                </ul>
                                            </div>
                                        </div>
                                        <!-- item -->


                                        <!-- item -->
                                        <div class="sub_nav_item">
                                            <!-- title -->
                                            <div class="sub_nav_item_title">
                                                <a href="">Events
                                                    <span class="nav_item_saparate nav_item_saparate3"></span>
                                                </a>
                                            </div>
                                            <p class="sub_nav_item_text">Our service offerings — spanning cloud,
                                                collaboration and more — drive new business outcomes.</p>
                                            <!-- list -->
                                            <div class="sub_nav_item_list">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span>Online
                                                            </span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Venues</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Newsroom</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Request Events</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- item -->
                                        <div class="sub_nav_item">
                                            <!-- title -->
                                            <div class="sub_nav_item_title">
                                                <a href="">Career
                                                    <span class="nav_item_saparate nav_item_saparate4"></span>
                                                </a>
                                            </div>
                                            <p class="sub_nav_item_text">Our industry specialists have the knowledge and
                                                experience to meet your unique needs.</p>
                                            <!-- list -->
                                            <div class="sub_nav_item_list">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span>Join our team</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span> Available Jobs </span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Request Free Trainings</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <!-- item -->

                                    </div>
                                </div>
                                <!-- submenu bottom -->
                                <div class="sub_menu_botttom">
                                    <div class="sub_menu_botttom_content">
                                        <a href="" class="sub_botttom_text">View all solutions</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- nav item -->
                        <li class="nav_toogler">
                            <a>
                                <span>Connect Us</span>
                                <span class="header_top_svg"><svg class="c-icon c-icon--dropdown" viewBox="0 0 192 512">
                                        <polygon points="0,208 96,304 192,208"></polygon>
                                    </svg></span>
                            </a>


                            <!-- sub menu -->
                            <div class="sub_nav">
                                <!-- content -->
                                <div class="sub_nav_content">
                                    <div class="sub_nav_wrapper">

                                        <!-- item -->
                                        <div class="sub_nav_item">
                                            <!-- title -->
                                            <div class="sub_nav_item_title">
                                                <a href="">
                                                    <span class="nav_item_saparate"></span> Contacts
                                                </a>
                                            </div>
                                            <p class="sub_nav_item_text">Harness the power of technology to achieve your
                                                most ambitious goals.</p>
                                            <!-- list -->
                                            <div class="sub_nav_item_list">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span>Direct Reach</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Social Connects</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Datasheets</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>About Us</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Social logos</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <!-- item -->


                                        <!-- item -->
                                        <div class="sub_nav_item">
                                            <!-- title -->
                                            <div class="sub_nav_item_title">
                                                <a href="">
                                                    <span class="nav_item_saparate nav_item_saparate2"></span>Service
                                                </a>
                                            </div>
                                            <p class="sub_nav_item_text">Our deep expertise and end-to-end capabilities
                                                help you navigate complex IT challenges.</p>
                                            <!-- list -->
                                            <div class="sub_nav_item_list">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span> Webinars
                                                            </span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Presentations
                                                            </span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span> PoCs
                                                            </span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Knowledgebase</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Request Service Call</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>


                                                </ul>
                                            </div>
                                        </div>
                                        <!-- item -->


                                        <!-- item -->
                                        <div class="sub_nav_item">
                                            <!-- title -->
                                            <div class="sub_nav_item_title">
                                                <a href="">Events
                                                    <span class="nav_item_saparate nav_item_saparate3"></span>
                                                </a>
                                            </div>
                                            <p class="sub_nav_item_text">Our service offerings — spanning cloud,
                                                collaboration and more — drive new business outcomes.</p>
                                            <!-- list -->
                                            <div class="sub_nav_item_list">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span>Online
                                                            </span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Venues</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Newsroom</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Request Events</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- item -->
                                        <div class="sub_nav_item">
                                            <!-- title -->
                                            <div class="sub_nav_item_title">
                                                <a href="">Career
                                                    <span class="nav_item_saparate nav_item_saparate4"></span>
                                                </a>
                                            </div>
                                            <p class="sub_nav_item_text">Our industry specialists have the knowledge and
                                                experience to meet your unique needs.</p>
                                            <!-- list -->
                                            <div class="sub_nav_item_list">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <span>Join our team</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span> Available Jobs </span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="">
                                                            <span>Request Free Trainings</span>
                                                            <span><i class="fa-solid fa-angle-right"></i></span>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <!-- item -->

                                    </div>
                                </div>
                                <!-- submenu bottom -->
                                <div class="sub_menu_botttom">
                                    <div class="sub_menu_botttom_content">
                                        <a href="" class="sub_botttom_text">View all solutions</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        
                    </ul>
                </div>

                <!-- header serch box -->
                <div class="header_search">
                    <div class="header_search_inner">
                        <form action="" method="POST">
                            <input type="text" name="title" placeholder="What can we help you find?"
                                class="input_control" id="search">
                            <!-- icon -->
                            <div class="search_icon">
                                <span><svg class="cx_1630815321671header_icon_size cx_1630815321671_primary_search_icon"
                                        id="search" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        viewBox="0 0 20 20">
                                        <path class="cx_1630815321671_svg_icons" id="Search-2" data-name="Search"
                                            d="M19.724,18.547,14.757,13.58a8.336,8.336,0,1,0-1.177,1.177l4.968,4.968a.832.832,0,1,0,1.177-1.177ZM8.317,14.975a6.658,6.658,0,1,1,6.658-6.658,6.658,6.658,0,0,1-6.658,6.658Z"
                                            transform="translate(0.032 0.032)" fill="#1E272E"></path>
                                    </svg></span>
                            </div>
                        </form>
                        <table class="table table-striped table-inverse table-responsive d-table"
                            style="background-color: white">
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- mobile header -->
        <!-- <div id="dl-menu" class="dl-menuwrapper">
            <button id="mobileBNT" class="dl-trigger">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </button>
            <ul class="dl-menu">
                
                {{-- item --}}
                <li>
                    <a href="#">Our Services</a>
                    <ul class="dl-submenu">
                        <li>
                            <a href="#">Products</a>
                            <ul class="dl-submenu">
                                <li><a href="#">Hardwares</a></li>
                                <li><a href="#">Softwares</a></li>
                                <li><a href="#">Digital Services</a></li>
                                <li><a href="#">View All Products</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">Solutions</a>
                            <ul class="dl-submenu">
                                <li><a href="#">View All Solution</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">Industry</a>
                            <ul class="dl-submenu">
                                 <li><a href="#">Financial</a></li>
                                 <li><a href="#">Healthcare</a></li>
                                 <li><a href="#">Manufacturing</a></li>
                                 <li><a href="#">Public sector</a></li>
                                 <li><a href="#">View All industries</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">Service</a>
                            <ul class="dl-submenu">
                                <li><a href="#">Consulting services</a></li>
                                <li><a href="#">Managed services</a></li>
                                <li><a href="#">Digital HR Services</a></li>
                                <li><a href="#">Support Services</a></li>
                                <li><a href="#">View All Services</a></li>
                            </ul>
                        </li>
                    
                    </ul>
                </li>
                
                {{-- item --}}
                <li>
                    <a href="#">Tech Contents</a>
                    <ul class="dl-submenu">
                        <li>
                            <a href="#">By Industry</a>
                            <ul class="dl-submenu">
                           
                                <li><a href="#">Education</a></li>
                                <li><a href="#">Healthcare</a></li>
                                <li><a href="#">Manufacturing</a></li>
                                <li><a href="#">Public sector</a></li>
                                <li><a href="#">View All industries</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">By Solution</a>
                            <ul class="dl-submenu">
                                <li><a href="#">Modern infrastructure</a></li>
                                <li><a href="#">Networking</a></li>
                                <li><a href="#">Procurement</a></li>
                                <li><a href="#">Real-time data</a></li>
                                <li><a href="#">View All Solutions</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">By Technology</a>
                            <ul class="dl-submenu">
                                <li><a href="#">AI & IoT</a></li>
                                <li><a href="#">IT optimization</a></li>
                                <li><a href="#">Cloud</a></li>
                                <li><a href="#">Cybersecurity</a></li>
                                <li><a href="#">View All Technologies</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">By Contebts</a>
                            <ul class="dl-submenu">
                                <li><a href="#">Analyst Report</a></li>
                                <li><a href="#">Article</a></li>
                                <li><a href="#">Client story</a></li>
                                <li><a href="#">Tech Journal</a></li>
                                <li><a href="#">View All Contents</a></li>
                            </ul>
                        </li>
                    
                    </ul>
                </li>
                
                {{-- item --}}
                <li>
                    <a href="#">Partner & Clints</a>
                    <ul class="dl-submenu">
                        <li>
                            <a href="#">Partner</a>
                            <ul class="dl-submenu">
                                {{-- pr --}}

                                <li><a href="#">icddr'b</a></li>
                                <li><a href="#">UNDP</a></li>
                                <li><a href="#">Chevron</a></li>
                                <li><a href="#">Bangladesh Bank</a></li>
                                <li><a href="#">View All Clients</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">Clints</a>
                            <ul class="dl-submenu">
                                <li><a href="#">Optimum</a></li>
                                <li><a href="#">Intimicy</a></li>
                                <li><a href="#">Leads Innovation</a></li>
                                <li><a href="#">Yongkhar</a></li>
                                <li><a href="#">View All Partner</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">Principals</a>
                            <ul class="dl-submenu">
                                <li><a href="#">Acronis</a></li>
                                <li><a href="#">Riverbed</a></li>
                                <li><a href="#">Pepperel + Fuschs</a></li>
                                <li><a href="#">Schnieder</a></li>
                                <li><a href="#">View All Principals</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">Investor</a>
                            <ul class="dl-submenu">
                                <li><a href="#">Not Done</a></li>
                                <li><a href="#">Healthcare</a></li>
                                <li><a href="#">Manufacturing</a></li>
                                <li><a href="#">Public sector</a></li>
                                <li><a href="#">View All Investors</a></li>
                            </ul>
                        </li>
                    
                    </ul>
                </li>
                
                {{-- item --}}
                <li>
                    <a href="#">Contact Us</a>
                    <ul class="dl-submenu">
                        <li>
                            <a href="#">Contact</a>
                            <ul class="dl-submenu">
                                <li><a href="#">Direct Reach</a></li>
                                <li><a href="#">Social Connects</a></li>
                                <li><a href="#">Datasheets</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Social logos</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">service</a>
                            <ul class="dl-submenu">
                                <li><a href="#">Webinars</a></li>
                                <li><a href="#">Presentations</a></li>
                                <li><a href="#">PoCs</a></li>
                                <li><a href="#">Knowledgebase</a></li>
                                <li><a href="#">Request Service Call</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">Event</a>
                            <ul class="dl-submenu">
                                <li><a href="#">Online</a></li>
                                <li><a href="#">Venues</a></li>
                                <li><a href="#">Newsroom</a></li>
                                <li><a href="#">Request Events</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">Career</a>
                            <ul class="dl-submenu">
                                <li><a href="#">Join our team</a></li>
                                <li><a href="#">Available Jobs</a></li>
                                <li><a href="#">Request Free Trainings</a></li>
                            </ul>
                        </li>
                    
                    </ul>
                </li>


                {{-- item --}}
                <li>
                    <a href="#">Shop</a>
                    <ul class="dl-submenu">
                        <li><a href="#">By Industry</a></li>
                        <li><a href="#">Hardware</a></li>
                        <li><a href="#">Software</a></li>
                    </ul>
                </li>

            </ul>
        </div> -->
        <!-- mobile header end -->

    </header>

    <!-- bootstrap jsBundle -->
    <script src="assets/frontend/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jquery cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <!-- slick slider -->
    <script src="assets/frontend/js/slick.min.js"></script>

    <!-- js link -->
    <script src="assets/frontend/js/modernizr.custom.js"></script>
    <script src="assets/frontend/js/jquery.dlmenu.js"></script>

    <script>
        $(function () {
            $('#dl-menu').dlmenu({
                animationClasses: {
                    classin: 'dl-animate-in-2',
                    classout: 'dl-animate-out-2'
                }
            });
        });

    </script>
</body>

</html>
