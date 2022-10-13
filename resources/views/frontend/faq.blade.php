@extends('frontend.master')

@section('content')

<!-- header section -->
@include('frontend.header')
<!-- header section End -->


<!-- contact us banner -->


<section class="contact_banner">
    <div class="container">
        <!-- content -->
        <div class="contact_banner_content">
            <h2 class="banner_content_title">FAQ</h2>
        </div>
    </div>
</section>

<!-- contact us banner end -->


<!-- contact body -->

<div class="contact_body section_padding">
    <div class="container">
        <!-- wrapper -->
        <div class="contact_body_wrapper">
            <!-- faq form -->
            <div class="faq_form">

                <div class="faq_wrapper">
                    <div class="nav flex-column nav-pills faq_tab_left" id="v-pills-tab">

                        <p class="faq_tab_title">FAQ</p>

                        <button class="nav-link active faq_item" id="v-pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-home" type="button">   IT SERVICES </button>

                        <button class="nav-link faq_item" id="v-pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-profile" type="button">E-COMMERCE</button>

                        <button class="nav-link faq_item" id="v-pills-messages-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-messages" type="button">CONSULTANCY</button>

                        <button class="nav-link faq_item" id="v-pills-settings-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-settings" type="button">TRADING</button>

                        <button class="nav-link  faq_item" id="v-pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-home" type="button">CONSUMERS</button>       
                    </div>

                    <div class="tab-content faq_tab_content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi culpa maxime distinctio repellendus quibusdam dolore error aliquid placeat quis animi corporis dolor itaque laborum, sed, quos voluptas molestias, explicabo quo.</div>

                        <div class="tab-pane fade" id="v-pills-profile">Lorem ipsum dolor sit amet.</div>

                        <div class="tab-pane fade" id="v-pills-messages">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente, repellendus.</div>

                        <div class="tab-pane fade" id="v-pills-settings">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quam similique dignissimos natus. Officiis modi distinctio sunt laboriosam amet sint?</div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>


<!-- contact body end-->


@include('frontend.footer')


@endsection
