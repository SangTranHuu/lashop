@extends('customers.layout.master')
@section('title')
<title>Home</title>
@endsection

@push('scripts')
    {!! Html::script('assets/plugins/sweetalert/sweetalert.min.js') !!}
@endpush
@push('styles')
    {!! Html::style('assets/plugins/sweetalert/sweetalert.css') !!}
@section('content')
@include('customers.layout.sections.slideshow')
<div class="offer-banner-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-xs-12 col-md-4 col-sm-4 wow"><a href="#"><img alt="offer banner1" src="{{ asset('assets/images/promo-banner1.jpg') }}"></a></div>
            <div class="col-lg-4 col-xs-12 col-md-4 col-sm-4 wow"><a href="#"><img alt="offer banner1" src="{{ asset('assets/images/promo-banner2.jpg') }}"></a></div>
            <div class="col-lg-4 col-xs-12 col-md-4 col-sm-4 wow"><a href="#"><img alt="offer banner1" src="{{ asset('assets/images/promo-banner3.jpg') }}"></a></div>
        </div>
    </div>
</div>
<section class="main-container col1-layout home-content-container">
</section>
<section class="recommend container">
<div class="new-pro-slider small-pr-slider" style="overflow:visible">
    <div class="slider-items-products">
        <div class="new_title center">
            <h2>FEATURED PRODUCTS</h2>
        </div>
        <div id="recommend-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col3">
                <!-- Item -->
                @include('customers.components.main-product')
                <!-- End Item --> 
            </div>
        </div>
    </div>
</div>
<!-- End middle slider --> 
<!-- promo banner section -->
</div>
<!-- Featured Slider -->
@include('customers.components.feature-slider')

<!-- End Featured Slider --> 
@endsection
@push('scripts')
    <script type="text/javascript">
        $('.form-add').submit(function (e){
            e.preventDefault();
            console.log($(this).attr('action'));
            $.ajax({
                url : $(this).attr('action'),
                data : $(this).serialize(),
                type : "POST",
                success : function(data){
                    console.log(data);
<<<<<<< 2f30dee7b9201dfdfc29cc9894b322010e41bb4d
                    $('#cart-sidebar').html(data.cartContent);
                    $('#cart-total').html(data.total);
                    $('.top-subtotal .price').html('$' + data.subTotal)  
=======
                    if (data.total > 10) {
                        sweetAlert("Oops...", "Something went wrong!", "error");
                    }
                    $('#cart-sidebar').html(data.cartContent);
                    $('#cart-total').html(data.total);
                    $('.price').html('$' + data.subTotal)  
>>>>>>> active-Cart
                }
            });
        });
    </script>
<<<<<<< 2f30dee7b9201dfdfc29cc9894b322010e41bb4d
@endpush

=======
@endpush
>>>>>>> active-Cart
