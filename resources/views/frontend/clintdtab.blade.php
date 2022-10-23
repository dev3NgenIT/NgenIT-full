@extends('frontend.master')

@section('content')

<section class="clint_tab_section section_padding">
    <div class="container">

        <div class="clint_tab_content">
            <!-- home title -->
            <div class="home_title" style="max-width: 980px;">
                <h5 class="home_title_heading"> Client</h5>
                <p class="home_title_text">See how we’ve helped organizations of all sizes — across every industry —
                    maximize the value of their IT solutions, leverage emerging technologies and create fresh
                    experiences.</p>
            </div>

            <!-- clint_tab_content_button  -->

            <div class="clint_tab_button">
                <!-- tab button content -->
                <div class="clint_tab_btn_content">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" data-bs-target="#clintFirstTab"
                                data-bs-toggle="pill">HEALTHCARE</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-target="#clintSecondTab"
                                data-bs-toggle="pill">HIGHER EDUCATION</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-target="#clintThirdTab"
                                data-bs-toggle="pill">MINING</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-target="#clintFourthTab"
                                data-bs-toggle="pill">ENERGY</a></li>
                    </ul>
                </div>
            </div>

            <!-- clint tab contet area -->

            <div class="clint_tab_area_main tab-content">

                <!-- single area -->
                <div class="clint_tab_area tab-pane fade active show" id="clintFirstTab">

                    <div class="d-flex align-items-start">

                        <div class="nav flex-column nav-pills clint_sub_tabs" id="v-pills-tab">

                            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-home" type="button">Home</button>

                            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-profile" type="button">Profile</button>

                            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-messages" type="button">Messages</button>

                            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-settings" type="button">Settings</button>

                        </div>

                        <div class="tab-content tabContent_content" id="v-pills-tabContent">

                            <!-- content block -->
                            <div class="tab-pane fade active show" id="v-pills-home">

                                <div class="clint_tab_area_wrapper">
                                    <!-- thumbanial -->
                                    <div class="clint_tab_area_thumbnail">
                                        <div class="clint_tab_area_thumbnail_image">
                                            <img src="assets/frontend/image/tabs image/steward-health-care-transforms-care.jpg"
                                                alt="">
                                        </div>

                                        <div class="clint_tab_area_thumbnail_caption">
                                            <p>Steward Health Care reduces patient length of stay and improves care
                                                coordination
                                                with real-time data analytics.</p>
                                        </div>

                                    </div>

                                    <!-- content -->
                                    <div class="clint_tab_area_content">
                                        <p class="clint_tab_content_title">Steward Health Care Transforms Care Through
                                            Digital
                                            Innovation</p>

                                        <div class="clint_tab_content_text_area">
                                            <p class="clint_tab_content_text_title">Challenge</p>
                                            <p class="clint_tab_content_text_paragraph">Steward Health Care wanted to
                                                reduce
                                                patient length of stay and improve the overall patient experience.</p>
                                        </div>

                                        <div class="clint_tab_content_text_area">
                                            <p class="clint_tab_content_text_title">solutions</p>
                                            <p class="clint_tab_content_text_paragraph">Microsoft Azure role-based
                                                access
                                                control and encryption provide HIPAA-compliant security for a unified
                                                data
                                                monitoring platform that leverages real-time business data and
                                                analytics.</p>
                                        </div>

                                        <div class="clint_tab_content_text_area_list">
                                            <p class="clint_tab_content_text_title">Results</p>

                                            <ul>
                                                <li>98% accurate prediction of patient load out to a week at a time</li>
                                                <li>Reduced patient length of stay by 1.5 dayss</li>
                                                <li>Predictable staffing</li>
                                                <li>Reduced operational costs — saving millions of dollars per hospital,
                                                    per
                                                    year</li>
                                            </ul>
                                        </div>

                                        <!-- button -->
                                        <div class="business_seftion_button" style="text-align: left;">
                                            <a href="#">Explore business outcomes</a>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- sub content block -->
                            <div class="tab-pane fade active show" id="v-pills-profile">

                                <div class="clint_tab_area_wrapper">
                                    <!-- thumbanial -->
                                    <div class="clint_tab_area_thumbnail">
                                        <div class="clint_tab_area_thumbnail_image">
                                            <img src="assets/frontend/image/tabs image/steward-health-care-transforms-care.jpg"
                                                alt="">
                                        </div>

                                        <div class="clint_tab_area_thumbnail_caption">
                                            <p>Steward Health Care reduces patient length of stay and improves care
                                                coordination
                                                with real-time data analytics.</p>
                                        </div>

                                    </div>

                                    <!-- content -->
                                    <div class="clint_tab_area_content">
                                        <p class="clint_tab_content_title">Steward Health Care Transforms Care Through
                                            Digital
                                            Innovation</p>

                                        <div class="clint_tab_content_text_area">
                                            <p class="clint_tab_content_text_title">Challenge</p>
                                            <p class="clint_tab_content_text_paragraph">Steward Health Care wanted to
                                                reduce
                                                patient length of stay and improve the overall patient experience.</p>
                                        </div>

                                        <div class="clint_tab_content_text_area">
                                            <p class="clint_tab_content_text_title">solutions</p>
                                            <p class="clint_tab_content_text_paragraph">Microsoft Azure role-based
                                                access
                                                control and encryption provide HIPAA-compliant security for a unified
                                                data
                                                monitoring platform that leverages real-time business data and
                                                analytics.</p>
                                        </div>

                                        <div class="clint_tab_content_text_area_list">
                                            <p class="clint_tab_content_text_title">Results</p>

                                            <ul>
                                                <li>98% accurate prediction of patient load out to a week at a time</li>
                                                <li>Reduced patient length of stay by 1.5 dayss</li>
                                                <li>Predictable staffing</li>
                                                <li>Reduced operational costs — saving millions of dollars per hospital,
                                                    per
                                                    year</li>
                                            </ul>
                                        </div>

                                        <!-- button -->
                                        <div class="business_seftion_button" style="text-align: left;">
                                            <a href="#">Explore business outcomes</a>
                                        </div>

                                    </div>

                                </div>

                            </div>
                            
                            <!-- sub content block -->
                            <div class="tab-pane fade active show" id="v-pills-Messages">

                                <div class="clint_tab_area_wrapper">
                                    <!-- thumbanial -->
                                    <div class="clint_tab_area_thumbnail">
                                        <div class="clint_tab_area_thumbnail_image">
                                            <img src="assets/frontend/image/tabs image/steward-health-care-transforms-care.jpg"
                                                alt="">
                                        </div>

                                        <div class="clint_tab_area_thumbnail_caption">
                                            <p>Steward Health Care reduces patient length of stay and improves care
                                                coordination
                                                with real-time data analytics.</p>
                                        </div>

                                    </div>

                                    <!-- content -->
                                    <div class="clint_tab_area_content">
                                        <p class="clint_tab_content_title">Steward Health Care Transforms Care Through
                                            Digital
                                            Innovation</p>

                                        <div class="clint_tab_content_text_area">
                                            <p class="clint_tab_content_text_title">Challenge</p>
                                            <p class="clint_tab_content_text_paragraph">Steward Health Care wanted to
                                                reduce
                                                patient length of stay and improve the overall patient experience.</p>
                                        </div>

                                        <div class="clint_tab_content_text_area">
                                            <p class="clint_tab_content_text_title">solutions</p>
                                            <p class="clint_tab_content_text_paragraph">Microsoft Azure role-based
                                                access
                                                control and encryption provide HIPAA-compliant security for a unified
                                                data
                                                monitoring platform that leverages real-time business data and
                                                analytics.</p>
                                        </div>

                                        <div class="clint_tab_content_text_area_list">
                                            <p class="clint_tab_content_text_title">Results</p>

                                            <ul>
                                                <li>98% accurate prediction of patient load out to a week at a time</li>
                                                <li>Reduced patient length of stay by 1.5 dayss</li>
                                                <li>Predictable staffing</li>
                                                <li>Reduced operational costs — saving millions of dollars per hospital,
                                                    per
                                                    year</li>
                                            </ul>
                                        </div>

                                        <!-- button -->
                                        <div class="business_seftion_button" style="text-align: left;">
                                            <a href="#">Explore business outcomes</a>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- sub tab body -->
                            <div class="tab-pane fade active show" id="v-pills-settings">

                                <div class="clint_tab_area_wrapper">
                                    <!-- thumbanial -->
                                    <div class="clint_tab_area_thumbnail">
                                        <div class="clint_tab_area_thumbnail_image">
                                            <img src="assets/frontend/image/tabs image/steward-health-care-transforms-care.jpg"
                                                alt="">
                                        </div>

                                        <div class="clint_tab_area_thumbnail_caption">
                                            <p>Steward Health Care reduces patient length of stay and improves care
                                                coordination
                                                with real-time data analytics.</p>
                                        </div>

                                    </div>

                                    <!-- content -->
                                    <div class="clint_tab_area_content">
                                        <p class="clint_tab_content_title">Steward Health Care Transforms Care Through
                                            Digital
                                            Innovation</p>

                                        <div class="clint_tab_content_text_area">
                                            <p class="clint_tab_content_text_title">Challenge</p>
                                            <p class="clint_tab_content_text_paragraph">Steward Health Care wanted to
                                                reduce
                                                patient length of stay and improve the overall patient experience.</p>
                                        </div>

                                        <div class="clint_tab_content_text_area">
                                            <p class="clint_tab_content_text_title">solutions</p>
                                            <p class="clint_tab_content_text_paragraph">Microsoft Azure role-based
                                                access
                                                control and encryption provide HIPAA-compliant security for a unified
                                                data
                                                monitoring platform that leverages real-time business data and
                                                analytics.</p>
                                        </div>

                                        <div class="clint_tab_content_text_area_list">
                                            <p class="clint_tab_content_text_title">Results</p>

                                            <ul>
                                                <li>98% accurate prediction of patient load out to a week at a time</li>
                                                <li>Reduced patient length of stay by 1.5 dayss</li>
                                                <li>Predictable staffing</li>
                                                <li>Reduced operational costs — saving millions of dollars per hospital,
                                                    per
                                                    year</li>
                                            </ul>
                                        </div>

                                        <!-- button -->
                                        <div class="business_seftion_button" style="text-align: left;">
                                            <a href="#">Explore business outcomes</a>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>

                </div>
                <!-- single area end -->



                <!-- single area -->
                <div class="clint_tab_area tab-pane fade" id="clintSecondTab">
                    Lorem, ipsum dolor.
                </div>
                <!-- single area end -->



                <!-- single area -->
                <div class="clint_tab_area tab-pane fade" id="clintThirdTab">
                    Lorem, ipsum.
                </div>
                <!-- single area end -->


                <!-- single area -->
                <div class="clint_tab_area tab-pane fade" id="clintFourthTab">
                    Lorem ipsum dolor sit amet.
                </div>
                <!-- single area end -->

            </div>

        </div>
    </div>
</section>

@endsection
