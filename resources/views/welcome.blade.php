@extends('layouts.public')

@php
$title = '';
$subTitle = '';
$script = '<script>
var rtlDirection = $("html").attr("dir") === "rtl";
// Carousel with progress bar
jQuery(document).ready(function($) {
    var sliderTimer = 8000;
    var beforeEnd = 500;
    var $imageSlider = $(".progress-carousel");
    $imageSlider.slick({
        autoplay: true,
        autoplaySpeed: sliderTimer,
        speed: 1000,
        arrows: false,
        dots: false,
        adaptiveHeight: true,
        pauseOnFocus: false,
        pauseOnHover: false,
        rtl: rtlDirection
    });

    function progressBar() {
        $(".slider-progress").find("span").removeAttr("style");
        $(".slider-progress").find("span").removeClass("active");
        setTimeout(function() {
            $(".slider-progress").find("span").css("transition-duration", (sliderTimer / 1000) + "s").addClass("active");
        }, 100);
    }

    progressBar();
    $imageSlider.on("beforeChange", function(e, slick) {
        progressBar();
    });

    $imageSlider.on("afterChange", function(e, slick, nextSlide) {
        titleAnim(nextSlide);
    });

    // Title Animation JS
    function titleAnim(ele) {
        $imageSlider.find(".slick-current").find("h1").addClass("show");
        setTimeout(function() {
            $imageSlider.find(".slick-current").find("h1").removeClass("show");
        }, sliderTimer - beforeEnd);
    }

    titleAnim();
});
</script>';
@endphp

@section('content')

@include('landing/home/banner')
@include('landing/home/faq')

@endsection