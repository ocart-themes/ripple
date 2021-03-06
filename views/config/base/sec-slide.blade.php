@php
    $banner = get_banner();
@endphp
<div class="slide-home owl-carousel owl-theme relative">
    @if(!empty($banner) && is_array($banner))
        @foreach($banner as $item)
            <div class="item">
                <img src="{{ $item->img }}">
            </div>
        @endforeach
    @endif
</div>
<script>
    $(document).ready(function () {
        $('.slide-home').owlCarousel({
            loop: false,
            dots: true,
            nav: false,
            animateOut: 'fadeOut',
            autoPlay: 3000,
            items: 1,
            margin: 0,
        })
    });

</script>
<style>
    .owl-carousel:not(.owl-loaded) {
        opacity: 0;
        visibility: hidden;
        height: 354px;
    }

    .owl-carousel .owl-dots {
        position: absolute;
        bottom: 0px;
        width: 100%;
    }

    .owl-nav {
        font-size: 3rem;
    }

    .owl-prev:focus,
    .owl-next:focus {
        outline: none;
    }

    .owl-prev {
        position: absolute;
        top: 50%;
        left: 5px;
        transform: translateY(-50%);

    }

    .owl-next {
        position: absolute;
        top: 50%;
        right: 5px;
        transform: translateY(-50%);
    }

    .owl-prev span,
    .owl-next span {
        color: grey;
    }

    .owl-prev span:hover,
    .owl-next span:hover {
        color: black;
    }

    .owl-carousel button:hover, .owl-carousel button:focus, .owl-carousel button:focus-visible {
        outline: none;
        background: none !important;
    }
</style>
