// FOR NAVBAR FIXED WHEN SCROLL
$(window).on("scroll", function(){
    var scrolling = $(this).scrollTop();
    if (scrolling > 130){
        $(".navbar-part").addClass("navbar-fixed");
    }else{
        $(".navbar-part").removeClass("navbar-fixed");
    }
});


// FOR CART POPUP CARD
$(".cart-icon").on("click", function(){
    $(".cart-popup").addClass("active");
    $(".cross-btn").on('click', function(){
        $(".cart-popup").removeClass("active");
    });
});


// FOR WISHLIST POPUP CARD
$(".wish-icon").on("click", function(){
    $(".wish-popup").addClass("active");
    $(".cross-btn").on('click', function(){
        $(".wish-popup").removeClass("active");
    });
});


// FOR LEFT NAV SIDEBAR SHOW & HIDE
$(".menu-bar").on("click", function(){
    $(".navbar-slide").addClass("active");
    $(".cross-btn").on('click', function(){
        $(".navbar-slide").removeClass("active");
    });
});


// FOR RESPONSIVE DROPDOWN MENU
$(function () {
    $(".navbar-dropdown a").click(function() {
        $(this).next().toggle();
        if($('.dropdown-list:visible').length > 1) {
            $('.dropdown-list:visible').hide();
            $(this).next().show();
        }
    }); 
});


// FOR GRID SYSTEM PRODUCT CARD
$('.grid-hori').on('click', function(){
    $('.grid-hori').addClass('active');
    $('.grid-verti').removeClass('active');
    $('.grid-verti').on('click', function(){
        $('.grid-verti').addClass('active');
        $('.grid-hori').removeClass('active');
    });
});


// FOR NASTED DROPDOWN
$(function () {
    $(".nasted-dropdown a").click(function() {
        $(this).next().toggle();
        if($('.nasted-dropdown li ul:visible').length > 1) {
            $('.nasted-dropdown li ul:visible').hide();
            $(this).next().show();
        }
    }); 
});


// FOR PASSWORD HIDE & SHOW
$(".eye").on('click', function(){
    $(".eye").toggleClass("fa-eye-slash");
    $(".eye").toggleClass("fa-eye");

    var input = $("#pass");
    if (input.attr("type") === "password") {
        input.attr("type", "text");
    }
    else {
        input.attr("type", "password");
    }
});



function BerandaBtmbarPart(){
    url = '../dashboard/model/beranda-btmbar-part.php'
    url = url.replace(/ /g, '%20')
    $('#beranda-btmbar-part').load(url)
}
function BerandaBannerPart(){
    url = '../dashboard/model/beranda-banner-part.php'
    url = url.replace(/ /g, '%20')
    $('#beranda-banner-part').load(url)
}
function BerandaTrendPart(){
    url = '../dashboard/model/beranda-trend-part.php'
    url = url.replace(/ /g, '%20')
    $('#beranda-trend-part').load(url)
}
function BerandaBestPart(){
    url = '../dashboard/model/beranda-best-part.php'
    url = url.replace(/ /g, '%20')
    $('#beranda-best-part').load(url)
}
function BerandaBlogPart(){
    url = '../dashboard/model/beranda-blog-part.php'
    url = url.replace(/ /g, '%20')
    $('#beranda-blog-part').load(url)
}
function BerandaFeaturePart(){
    url = '../dashboard/model/beranda-feature-part.php'
    url = url.replace(/ /g, '%20')
    $('#beranda-feature-part').load(url)
}

function ListBtmbarPart(){
    url = '../dashboard/model/list-btmbar-part.php'
    url = url.replace(/ /g, '%20')
    $('#list-btmbar-part').load(url)
}
function ListSingleBannerPart(){
    url = '../dashboard/model/list-singlebanner-part.php'
    url = url.replace(/ /g, '%20')
    $('#list-singlebanner-part').load(url)
}
function ListProductListPart(){
    url = '../dashboard/model/list-product-list-part.php'
    url = url.replace(/ /g, '%20')
    $('#list-product-list-part').load(url)
}

function DetilBtmbarPart(){
    url = '../dashboard/model/detil-btmbar-part.php'
    url = url.replace(/ /g, '%20')
    $('#detil-btmbar-part').load(url)
}
function DetilSingleBannerPart(){
    url = '../dashboard/model/detil-single-banner-part.php'
    url = url.replace(/ /g, '%20')
    $('#detil-single-banner-part').load(url)
}
function DetilProductPart(){
    url = '../dashboard/model/detil-product-part.php'
    url = url.replace(/ /g, '%20')
    $('#detil-product-part').load(url)
}
function DetilRelatedPart(){
    url = '../dashboard/model/detil-related-part.php'
    url = url.replace(/ /g, '%20')
    $('#detil-related-part').load(url)
}

function HeaderPart(){
    url = '../dashboard/model/header-part.php'
    url = url.replace(/ /g, '%20')
    $('#header-part').load(url)
}
function NavbarPart(){
    url = '../dashboard/model/navbar-part.php'
    url = url.replace(/ /g, '%20')
    $('#navbar-part').load(url)
}
function NewPart(){
    url = '../dashboard/model/new-part.php'
    url = url.replace(/ /g, '%20')
    $('#new-part').load(url)
}
function NewsPart(){
    url = '../dashboard/model/news-part.php'
    url = url.replace(/ /g, '%20')
    $('#news-part').load(url)
}
function FooterPart(){
    url = '../dashboard/model/footer-part.php'
    url = url.replace(/ /g, '%20')
    $('#footer-part').load(url)
}
function FooterBottomPart(){
    url = '../dashboard/model/footer-bottom-part.php'
    url = url.replace(/ /g, '%20')
    $('#footer-bottom-part').load(url)
}