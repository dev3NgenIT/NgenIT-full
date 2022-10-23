
// ========================

// nav toggler

var navToggoler = document.getElementsByClassName("nav_toogler")
var subNav = document.getElementsByClassName("sub_nav")

;[...navToggoler].forEach(element => {
    element.addEventListener("click", function () {
        ;[...navToggoler].forEach(subNav => {
            subNav.classList.remove("active")
        })
        this.classList.toggle("active")
    })
})


// focus in search

// var headerSearch = document.getElementById('header_search_m')
// var searchInner = document.getElementById('search')

// searchInner.addEventListener("focusin", function () {
//     headerSearch.style.cssText = "max-width: calc(100% - 15%); position: absolute ;right: 20px;"
// })

// window.addEventListener("focusout", function () {
//     headerSearch.style.cssText = "position: relative; max-width: 270px;"
// })

// jquery slider in banner or product

$('.banner_slider').slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    arrows: false,
    autoplay: true
});


$(document).ready(function () {
    $('.populer_product_slider, .product_veiw_details_wrapper').slick({
        dots: true,
        autoplay: false,
        arrows: true,
        infinite: true,
        slidesToShow: 4,
        speed: 200,

        centerPadding: '80px',
        responsive: [{
                breakpoint: 760,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    items: 1,
                }

            },

            {
                breakpoint: 540,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    items: 1,
                }

            },

        ]
    });
});



var techDealsItem = document.getElementById('tech_deals_item')

var productTech = ""


for (var i = 0; i < 21; i++) {
    productTech += `
                  <div class="techdeals_product_item">
                        <!-- thumbnail -->
                        <div class="techdeals_product_thumbnail">
                            <img src="assets/frontend/image/brand/tech.jpg" alt="">
                        </div>
                        <!-- content -->
                        <div class="techdeals_product_content">
                            <p class = "techdeals_product_title" > HP EliteBook 840 G8 Notebook - 14 " - Core i5 1145 G7 - vPro - 16 GB RAM - 256 GB SSD - US </p>
                            <!-- price -->
                            <p class="techdeals_product_price">
                                <span>$449.99</span>
                                <span>USD </span>
                            </p>
                            <!-- button -->
                            <div class="techdeals_product_button">
                                <a href="#">Shop now</a>
                            </div>
                        </div>
                    </div> `
}

techDealsItem.innerHTML = productTech



// ****************
var techCateWrapper = document.getElementById('refur_category_wrapper')
var techDealsCate = ''

for(var i = 0; i < 3; i++){
    techDealsCate += `
              <div class="refur_category_item">
                    <div class="refur_cateItem_thumbnail">
                        <img src="assets/frontend/image/brand/refur1.png" alt="">
                    </div>
                    
                    <div class="refur_cateItem_name">
                        <a href="#">Refurbished notebooks</a>
                    </div>
                </div>
    `
}

techCateWrapper.innerHTML = techDealsCate

// *************

var techBrandWrap = document.getElementById('refur_brand_wrapper')

var techBrandItem = ""

for (let index = 0; index < 8; index++) {
    techBrandItem +=`
      <div class="refur_brand_item">
        <img src="assets/frontend/image/brand/techbrand.png" alt="">
    </div>
    `  
}

techBrandWrap.innerHTML = techBrandItem;

console.log(techBrandWrap);




// techdeals product
