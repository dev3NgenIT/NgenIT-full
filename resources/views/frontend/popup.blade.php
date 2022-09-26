@extends('frontend.master')

@section('content')

{{-- modal --}}

<div class="popup_modal">
    {{-- content --}}
    <div class="popup_modal_content">
        <div class="popup_modal_content_wrapper">
            {{-- item --}}
            <div class="modal_product_item">
                <div class="modal_product_item_left">
                    <div class="modal_product_item_image">
                        <img src="assets/frontend/image/logo/modal.jpg" alt="">
                    </div>
                    <div class="modal_product_item_content">
                        <p class="modal_product_name">Microsoft Surface Pro 8 - 13" - Core i3 1115G4 - 8 GB RAM - 128 GB SSD</p>
                        <p class="added_cart"><span><img src="assets/frontend/image/logo/checkmark-blue.png" alt=""></span>Added to Your Basket</p>
                    </div>
                </div>
                <div class="modal_product_item_right">
                    <div class="modal_product_details">
                        <ul>
                            <li><span>NgenIt</span> <span> 00885</span></li>
                            <li><span>Mfr #:</span> <span>8PM-00001</span></li>
                            <li><span>Quantity:</span> <span>1</span></li>
                            <li><span>Totla</span> <span>USD $999</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- item end --}}

            {{-- modal buttton --}}

            <p class="added_cart added_cart_mobile"><span><img src="assets/frontend/image/logo/checkmark-blue.png" alt=""></span>Added to Your Basket</p>

            <div class="modal_button_wrapper">
                <a href="" class="product_button product_button_modal" tabindex="0">Add to Basket</a>
                <a href="" class="single_banner_button product_button_modal2">Talk to a specialist</a>
            </div>

            {{-- crose button --}}
            <div class="cross_btn">
                <span><i class="fa-solid fa-xmark"></i></span>
            </div>

        </div>
    </div>
</div>

{{-- modal end --}}

@endsection
