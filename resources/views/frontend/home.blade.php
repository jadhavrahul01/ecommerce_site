@extends('frontend.layouts.app')
@section('title', 'Home')
@section('body-class', 'home')
@section('page')

<div class="home-slider margin-bottom-0">
    <!-- Slide -->
    <div data-background-image="{{ asset('frontend/img/banner-12.png')}}" class="item">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="home-slider-container">

                        <!-- Slide Title -->
                        <div class="home-slider-desc">
                            <div class="home-slider-title mb-4">
                                <h5 class="text-light fs-sm ft-ragular mb-0">New Collection</h5>
                                <h1 class="mb-1 ft-bold lg-heading text-light">The Standard<br>With Smartness</h1>
                                <span class="trending text-light">Apple 10 comes with 6.5 inches full HD + High Valume</span>
                            </div>

                            <a href="#" class="btn btn-white stretched-link">Buy Now<i class="lni lni-arrow-right ml-2"></i></a>
                        </div>
                        <!-- Slide Title / End -->

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Slide -->
    <div data-background-image="{{ asset('frontend/img/banner-27.png')}}" class="item">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="home-slider-container">

                        <!-- Slide Title -->
                        <div class="home-slider-desc">
                            <div class="home-slider-title mb-4">
                                <h5 class="text-light fs-sm ft-ragular mb-0">Super Sale</h5>
                                <h1 class="mb-1 ft-bold lg-heading text-light">The Standard<br>With Smartness</h1>
                                <span class="trending text-light">Xiomi Redmi 10 comes with 6.5 inches full HD + LCD Screen</span>
                            </div>

                            <a href="#" class="btn btn-white stretched-link">Shop Now<i class="lni lni-arrow-right ml-2"></i></a>
                        </div>
                        <!-- Slide Title / End -->

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Slide -->
    <div data-background-image="{{ asset('frontend/img/banner-28.png')}}" class="item">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="home-slider-container">

                        <!-- Slide Title -->
                        <div class="home-slider-desc">
                            <div class="home-slider-title mb-4">
                                <h5 class="theme-cl fs-sm ft-ragular mb-0">Winter Collection</h5>
                                <h1 class="mb-1 ft-bold lg-heading">New Winter<br>Collections 2021</h1>
                                <span class="trending">There's nothing like trend</span>
                            </div>

                            <a href="#" class="btn stretched-link borders">Shop Now<i class="lni lni-arrow-right ml-2"></i></a>
                        </div>
                        <!-- Slide Title / End -->

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<section class="middle">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center">
                    <h2 class="off_title">Trendy Products</h2>
                    <h3 class="ft-bold pt-3">Our Trending Products</h3>
                </div>
            </div>
        </div>
        <div class="row align-items-center rows-products">
            <!-- Single -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                <div class="product_grid card b-0">
                    <div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">Sale</div>
                    <div class="card-body p-0">
                        <div class="shop_thumb position-relative">
                            <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/shop/9.png')}}" alt="..."></a>
                            <div class="product-left-hover-overlay">
                                <ul class="left-over-buttons">
                                    <li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
                                    <li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
                                    <li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                        <div class="text-left">
                            <div class="text-left">
                                <div class="elso_titl"><span class="small">Mobiles</span></div>
                                <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Killore iPhone 12</a></h5>
                                <div class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $129</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                <div class="product_grid card b-0">
                    <div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">Sale</div>
                    <div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-40%</div>
                    <div class="card-body p-0">
                        <div class="shop_thumb position-relative">
                            <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/shop/10.png')}}" alt="..."></a>
                            <div class="product-left-hover-overlay">
                                <ul class="left-over-buttons">
                                    <li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
                                    <li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
                                    <li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                        <div class="text-left">
                            <div class="text-left">
                                <div class="elso_titl"><span class="small">Headphones</span></div>
                                <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Killore Headphone</a></h5>
                                <div class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$129</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                <div class="product_grid card b-0">
                    <div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
                    <div class="card-body p-0">
                        <div class="shop_thumb position-relative">
                            <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/shop/11.png')}}" alt="..."></a>
                            <div class="product-left-hover-overlay">
                                <ul class="left-over-buttons">
                                    <li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
                                    <li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
                                    <li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                        <div class="text-left">
                            <div class="text-left">
                                <div class="elso_titl"><span class="small">Mobiles</span></div>
                                <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Ziome iPhone 11</a></h5>
                                <div class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                </div>
                                <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $129</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                <div class="product_grid card b-0">
                    <div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">New</div>
                    <div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-55%</div>
                    <div class="card-body p-0">
                        <div class="shop_thumb position-relative">
                            <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/shop/4.png')}}" alt="..."></a>
                            <div class="product-left-hover-overlay">
                                <ul class="left-over-buttons">
                                    <li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
                                    <li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
                                    <li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                        <div class="text-left">
                            <div class="text-left">
                                <div class="elso_titl"><span class="small">Mobiles</span></div>
                                <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Pillos Android Phone</a></h5>
                                <div class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$50 - $149</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                <div class="product_grid card b-0">
                    <div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
                    <div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-30%</div>
                    <div class="card-body p-0">
                        <div class="shop_thumb position-relative">
                            <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/shop/5.png')}}" alt="..."></a>
                            <div class="product-left-hover-overlay">
                                <ul class="left-over-buttons">
                                    <li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
                                    <li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
                                    <li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                        <div class="text-left">
                            <div class="text-left">
                                <div class="elso_titl"><span class="small">Camera</span></div>
                                <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Phot Video Camera</a></h5>
                                <div class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$199</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                <div class="product_grid card b-0">
                    <div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">New</div>
                    <div class="card-body p-0">
                        <div class="shop_thumb position-relative">
                            <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/shop/6.png')}}" alt="..."></a>
                            <div class="product-left-hover-overlay">
                                <ul class="left-over-buttons">
                                    <li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
                                    <li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
                                    <li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                        <div class="text-left">
                            <div class="text-left">
                                <div class="elso_titl"><span class="small">Headphone</span></div>
                                <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">New Croft Headphone</a></h5>
                                <div class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$110 - $600</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                <div class="product_grid card b-0">
                    <div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
                    <div class="card-body p-0">
                        <div class="shop_thumb position-relative">
                            <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/shop/7.png')}}" alt="..."></a>
                            <div class="product-left-hover-overlay">
                                <ul class="left-over-buttons">
                                    <li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
                                    <li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
                                    <li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                        <div class="text-left">
                            <div class="text-left">
                                <div class="elso_titl"><span class="small">TV/LCD</span></div>
                                <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">32 Inch Sony TV</a></h5>
                                <div class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $110</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                <div class="product_grid card b-0">
                    <div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">New</div>
                    <div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-60%</div>
                    <div class="card-body p-0">
                        <div class="shop_thumb position-relative">
                            <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/shop/8.png')}}" alt="..."></a>
                            <div class="product-left-hover-overlay">
                                <ul class="left-over-buttons">
                                    <li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center"><i class="fas fa-expand-arrows-alt position-absolute"></i></a></li>
                                    <li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i class="far fa-heart position-absolute"></i></a></li>
                                    <li><a href="javascript:void(0);" class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i class="fas fa-shopping-basket position-absolute"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                        <div class="text-left">
                            <div class="text-left">
                                <div class="elso_titl"><span class="small">Headphone</span></div>
                                <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Xiomi 13 Headphone</a></h5>
                                <div class="star-rating align-items-center d-flex justify-content-left mb-2 p-0">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$119</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="position-relative text-center">
                    <a href="shop-style-1.html" class="btn stretched-link borders">Explore More<i class="lni lni-arrow-right ml-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="middle">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center">
                    <h2 class="off_title">Popular Categories</h2>
                    <h3 class="ft-bold pt-3">Trending Categories</h3>
                </div>
            </div>
        </div>

        <div class="row align-items-center justify-content-center">
            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
                <div class="cats_side_wrap text-center mx-auto mb-3">
                    <div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border"><a href="javascript:void(0);" class="d-block"><img src="{{ asset('frontend/img/headphones.png')}}" class="img-fluid" width="40" alt=""></a></div></div>
                    <div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Headphones</a></h6></div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
                <div class="cats_side_wrap text-center mx-auto mb-3">
                    <div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border"><a href="javascript:void(0);" class="d-block"><img src="{{ asset('frontend/img/watch.png')}}" class="img-fluid" width="40" alt=""></a></div></div>
                    <div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Watches</a></h6></div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
                <div class="cats_side_wrap text-center mx-auto mb-3">
                    <div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border"><a href="javascript:void(0);" class="d-block"><img src="{{ asset('frontend/img/washing-machine.png')}}" class="img-fluid" width="40" alt=""></a></div></div>
                    <div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Washing Machine</a></h6></div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
                <div class="cats_side_wrap text-center mx-auto mb-3">
                    <div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border"><a href="javascript:void(0);" class="d-block"><img src="{{ asset('frontend/img/cell-phone.png')}}" class="img-fluid" width="40" alt=""></a></div></div>
                    <div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">iPhones</a></h6></div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
                <div class="cats_side_wrap text-center mx-auto mb-3">
                    <div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border"><a href="javascript:void(0);" class="d-block"><img src="{{ asset('frontend/img/safety-goggles.png')}}" class="img-fluid" width="40" alt=""></a></div></div>
                    <div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Goggles</a></h6></div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
                <div class="cats_side_wrap text-center mx-auto mb-3">
                    <div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border"><a href="javascript:void(0);" class="d-block"><img src="{{ asset('frontend/img/camera.png')}}" class="img-fluid" width="40" alt=""></a></div></div>
                    <div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Video Camera</a></h6></div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
                <div class="cats_side_wrap text-center mx-auto mb-3">
                    <div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border"><a href="javascript:void(0);" class="d-block"><img src="{{ asset('frontend/img/fashion.png')}}" class="img-fluid" width="40" alt=""></a></div></div>
                    <div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Men's Wear</a></h6></div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
                <div class="cats_side_wrap text-center mx-auto mb-3">
                    <div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border"><a href="javascript:void(0);" class="d-block"><img src="{{ asset('frontend/img/tshirt.png')}}" class="img-fluid" width="40" alt=""></a></div></div>
                    <div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Kid's Wear</a></h6></div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
                <div class="cats_side_wrap text-center mx-auto mb-3">
                    <div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border"><a href="javascript:void(0);" class="d-block"><img src="{{ asset('frontend/img/accessories.png')}}" class="img-fluid" width="40" alt=""></a></div></div>
                    <div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Accessories</a></h6></div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
                <div class="cats_side_wrap text-center mx-auto mb-3">
                    <div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border"><a href="javascript:void(0);" class="d-block"><img src="{{ asset('frontend/img/sneakers.png')}}" class="img-fluid" width="40" alt=""></a></div></div>
                    <div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Men's Shoes</a></h6></div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
                <div class="cats_side_wrap text-center mx-auto mb-3">
                    <div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border"><a href="javascript:void(0);" class="d-block"><img src="{{ asset('frontend/img/television.png')}}" class="img-fluid" width="40" alt=""></a></div></div>
                    <div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Television</a></h6></div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-4">
                <div class="cats_side_wrap text-center mx-auto mb-3">
                    <div class="sl_cat_01"><div class="d-inline-flex align-items-center justify-content-center p-4 circle mb-2 border"><a href="javascript:void(0);" class="d-block"><img src="{{ asset('frontend/img/pant.png')}}" class="img-fluid" width="40" alt=""></a></div></div>
                    <div class="sl_cat_02"><h6 class="m-0 ft-medium fs-sm"><a href="javascript:void(0);">Men's Pants</a></h6></div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- ======================= Product List ======================== -->

<!-- ======================= Tag Wrap Start ============================ -->
<section class="bg-cover" style="background:url(frontend/img/e-middle-banner.png) no-repeat;">
    <div class="ht-60"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="tags_explore text-center">
                    <h2 class="mb-0 text-white ft-bold">Big Sale Up To 70% Off</h2>
                    <p class="text-light fs-lg mb-4">Exclussive Offers For Limited Time</p><p>
                    <a href="#" class="btn btn-lg bg-white px-5 text-dark ft-medium">Explore Your Order</a>
                </p></div>
            </div>
        </div>
    </div>
    <div class="ht-60"></div>
</section>
<!-- ======================= Tag Wrap Start ============================ -->

<!-- ======================= All Category ======================== -->
<section class="space min">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center">
                    <h2 class="off_title">Arrival Products</h2>
                    <h3 class="ft-bold pt-3">New Arrivals</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <ul class="nav nav-tabs b-0 d-flex align-items-center justify-content-center simple_tab_links mb-4" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="all-tab" href="#all" data-toggle="tab" role="tab" aria-controls="all" aria-selected="true">All</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" href="#mens" id="mens-tab" data-toggle="tab" role="tab" aria-controls="mens" aria-selected="false">Men's</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="#women" id="women-tab" data-toggle="tab" role="tab" aria-controls="women" aria-selected="false">Women</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="#kids" id="kids-tab" data-toggle="tab" role="tab" aria-controls="kids" aria-selected="false">Kids</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <!-- All Content -->
                    <div class="tab-pane fade" id="all" role="tabpanel" aria-labelledby="all-tab">
                        <div class="tab_product">
                            <div class="row rows-products">

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                    <div class="product_grid card b-0">
                                        <div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">Sale</div>
                                        <div class="card-body p-0">
                                            <div class="shop_thumb position-relative">
                                                <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/product/2.jpg')}}" alt="..."></a>
                                                <div class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                    <div class="edlio"><a href="javascript:void(0);" class="text-underline fs-sm ft-bold snackbar-addcart">Add To Cart</a></div>
                                                    <div class="edlio d-flex align-items-center">
                                                        <button class="btn auto btn_love mr-2 snackbar-wishlist"><i class="far fa-heart"></i></button>
                                                        <a href="#" class="text-underline" data-toggle="modal" data-target="#quickview"><i class="fas fa-expand-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                            <div class="text-left">
                                                <div class="text-left">
                                                    <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span class="small">(5 Reviews)</span>
                                                    </div>
                                                    <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Women Striped Shirt Dress</a></h5>
                                                    <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $129</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                    <div class="product_grid card b-0">
                                        <div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">Sale</div>
                                        <div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-40%</div>
                                        <div class="card-body p-0">
                                            <div class="shop_thumb position-relative">
                                                <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/product/3.jpg')}}" alt="..."></a>
                                                <div class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                    <div class="edlio"><a href="javascript:void(0);" class="text-underline fs-sm ft-bold snackbar-addcart">Add To Cart</a></div>
                                                    <div class="edlio d-flex align-items-center">
                                                        <button class="btn auto btn_love mr-2 snackbar-wishlist"><i class="far fa-heart"></i></button>
                                                        <a href="#" class="text-underline" data-toggle="modal" data-target="#quickview"><i class="fas fa-expand-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                            <div class="text-left">
                                                <div class="text-left">
                                                    <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span class="small">(0 Reviews)</span>
                                                    </div>
                                                    <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Boys Solid Sweatshirt</a></h5>
                                                    <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$129</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                    <div class="product_grid card b-0">
                                        <div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
                                        <div class="card-body p-0">
                                            <div class="shop_thumb position-relative">
                                                <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/product/1.jpg')}}" alt="..."></a>
                                                <div class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                    <div class="edlio"><a href="javascript:void(0);" class="text-underline fs-sm ft-bold snackbar-addcart">Add To Cart</a></div>
                                                    <div class="edlio d-flex align-items-center">
                                                        <button class="btn auto btn_love mr-2 snackbar-wishlist"><i class="far fa-heart"></i></button>
                                                        <a href="#" class="text-underline" data-toggle="modal" data-target="#quickview"><i class="fas fa-expand-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                            <div class="text-left">
                                                <div class="text-left">
                                                    <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <span class="small">(32 Reviews)</span>
                                                    </div>
                                                    <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Girls Floral Print Jumpsuit</a></h5>
                                                    <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $129</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                    <div class="product_grid card b-0">
                                        <div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">New</div>
                                        <div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-55%</div>
                                        <div class="card-body p-0">
                                            <div class="shop_thumb position-relative">
                                                <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/product/6.jpg')}}" alt="..."></a>
                                                <div class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                    <div class="edlio"><a href="javascript:void(0);" class="text-underline fs-sm ft-bold snackbar-addcart">Add To Cart</a></div>
                                                    <div class="edlio d-flex align-items-center">
                                                        <button class="btn auto btn_love mr-2 snackbar-wishlist"><i class="far fa-heart"></i></button>
                                                        <a href="#" class="text-underline" data-toggle="modal" data-target="#quickview"><i class="fas fa-expand-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                            <div class="text-left">
                                                <div class="text-left">
                                                    <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span class="small">(0 Reviews)</span>
                                                    </div>
                                                    <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Girls Solid A-Line Dress</a></h5>
                                                    <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$50 - $149</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                    <div class="product_grid card b-0">
                                        <div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
                                        <div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-30%</div>
                                        <div class="card-body p-0">
                                            <div class="shop_thumb position-relative">
                                                <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/product/7.jpg')}}" alt="..."></a>
                                                <div class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                    <div class="edlio"><a href="javascript:void(0);" class="text-underline fs-sm ft-bold snackbar-addcart">Add To Cart</a></div>
                                                    <div class="edlio d-flex align-items-center">
                                                        <button class="btn auto btn_love mr-2 snackbar-wishlist"><i class="far fa-heart"></i></button>
                                                        <a href="#" class="text-underline" data-toggle="modal" data-target="#quickview"><i class="fas fa-expand-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                            <div class="text-left">
                                                <div class="text-left">
                                                    <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span class="small">(0 Reviews)</span>
                                                    </div>
                                                    <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Printed Straight Kurta</a></h5>
                                                    <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$199</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                    <div class="product_grid card b-0">
                                        <div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">New</div>
                                        <div class="card-body p-0">
                                            <div class="shop_thumb position-relative">
                                                <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/product/3.jpg')}}" alt="..."></a>
                                                <div class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                    <div class="edlio"><a href="javascript:void(0);" class="text-underline fs-sm ft-bold snackbar-addcart">Add To Cart</a></div>
                                                    <div class="edlio d-flex align-items-center">
                                                        <button class="btn auto btn_love mr-2 snackbar-wishlist"><i class="far fa-heart"></i></button>
                                                        <a href="#" class="text-underline" data-toggle="modal" data-target="#quickview"><i class="fas fa-expand-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                            <div class="text-left">
                                                <div class="text-left">
                                                    <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span class="small">(42 Reviews)</span>
                                                    </div>
                                                    <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Women Printed A-Line Dress</a></h5>
                                                    <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$110 - $600</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                    <div class="product_grid card b-0">
                                        <div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
                                        <div class="card-body p-0">
                                            <div class="shop_thumb position-relative">
                                                <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/product/9.jpg')}}" alt="..."></a>
                                                <div class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                    <div class="edlio"><a href="javascript:void(0);" class="text-underline fs-sm ft-bold snackbar-addcart">Add To Cart</a></div>
                                                    <div class="edlio d-flex align-items-center">
                                                        <button class="btn auto btn_love mr-2 snackbar-wishlist"><i class="far fa-heart"></i></button>
                                                        <a href="#" class="text-underline" data-toggle="modal" data-target="#quickview"><i class="fas fa-expand-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                            <div class="text-left">
                                                <div class="text-left">
                                                    <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span class="small">(0 Reviews)</span>
                                                    </div>
                                                    <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Girls Fit and Flare Dress</a></h5>
                                                    <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $110</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                    <div class="product_grid card b-0">
                                        <div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">New</div>
                                        <div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-60%</div>
                                        <div class="card-body p-0">
                                            <div class="shop_thumb position-relative">
                                                <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/product/6.jpg')}}" alt="..."></a>
                                                <div class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                    <div class="edlio"><a href="javascript:void(0);" class="text-underline fs-sm ft-bold snackbar-addcart">Add To Cart</a></div>
                                                    <div class="edlio d-flex align-items-center">
                                                        <button class="btn auto btn_love mr-2 snackbar-wishlist"><i class="far fa-heart"></i></button>
                                                        <a href="#" class="text-underline" data-toggle="modal" data-target="#quickview"><i class="fas fa-expand-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                            <div class="text-left">
                                                <div class="text-left">
                                                    <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span class="small">(15 Reviews)</span>
                                                    </div>
                                                    <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Girls Self Design Jumpsuit</a></h5>
                                                    <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$119</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade show active" id="mens" role="tabpanel" aria-labelledby="mens-tab">
                        <div class="tab_product">
                            <div class="row rows-products">

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                    <div class="product_grid card b-0">
                                        <div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">Sale</div>
                                        <div class="card-body p-0">
                                            <div class="shop_thumb position-relative">
                                                <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/product/1.jpg')}}" alt="..."></a>
                                                <div class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                    <div class="edlio"><a href="javascript:void(0);" class="text-underline fs-sm ft-bold snackbar-addcart">Add To Cart</a></div>
                                                    <div class="edlio d-flex align-items-center">
                                                        <button class="btn auto btn_love mr-2 snackbar-wishlist"><i class="far fa-heart"></i></button>
                                                        <a href="#" class="text-underline" data-toggle="modal" data-target="#quickview"><i class="fas fa-expand-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                            <div class="text-left">
                                                <div class="text-left">
                                                    <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span class="small">(5 Reviews)</span>
                                                    </div>
                                                    <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Women Striped Shirt Dress</a></h5>
                                                    <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $129</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                    <div class="product_grid card b-0">
                                        <div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">Sale</div>
                                        <div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-40%</div>
                                        <div class="card-body p-0">
                                            <div class="shop_thumb position-relative">
                                                <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/product/2.jpg')}}" alt="..."></a>
                                                <div class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                    <div class="edlio"><a href="javascript:void(0);" class="text-underline fs-sm ft-bold snackbar-addcart">Add To Cart</a></div>
                                                    <div class="edlio d-flex align-items-center">
                                                        <button class="btn auto btn_love mr-2 snackbar-wishlist"><i class="far fa-heart"></i></button>
                                                        <a href="#" class="text-underline" data-toggle="modal" data-target="#quickview"><i class="fas fa-expand-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                            <div class="text-left">
                                                <div class="text-left">
                                                    <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span class="small">(0 Reviews)</span>
                                                    </div>
                                                    <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Boys Solid Sweatshirt</a></h5>
                                                    <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$129</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                    <div class="product_grid card b-0">
                                        <div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
                                        <div class="card-body p-0">
                                            <div class="shop_thumb position-relative">
                                                <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/product/9.jpg')}}" alt="..."></a>
                                                <div class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                    <div class="edlio"><a href="javascript:void(0);" class="text-underline fs-sm ft-bold snackbar-addcart">Add To Cart</a></div>
                                                    <div class="edlio d-flex align-items-center">
                                                        <button class="btn auto btn_love mr-2 snackbar-wishlist"><i class="far fa-heart"></i></button>
                                                        <a href="#" class="text-underline" data-toggle="modal" data-target="#quickview"><i class="fas fa-expand-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                            <div class="text-left">
                                                <div class="text-left">
                                                    <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <span class="small">(32 Reviews)</span>
                                                    </div>
                                                    <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Girls Floral Print Jumpsuit</a></h5>
                                                    <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $129</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                    <div class="product_grid card b-0">
                                        <div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">New</div>
                                        <div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-55%</div>
                                        <div class="card-body p-0">
                                            <div class="shop_thumb position-relative">
                                                <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/product/10.jpg')}}" alt="..."></a>
                                                <div class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                    <div class="edlio"><a href="javascript:void(0);" class="text-underline fs-sm ft-bold snackbar-addcart">Add To Cart</a></div>
                                                    <div class="edlio d-flex align-items-center">
                                                        <button class="btn auto btn_love mr-2 snackbar-wishlist"><i class="far fa-heart"></i></button>
                                                        <a href="#" class="text-underline" data-toggle="modal" data-target="#quickview"><i class="fas fa-expand-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                            <div class="text-left">
                                                <div class="text-left">
                                                    <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span class="small">(0 Reviews)</span>
                                                    </div>
                                                    <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Girls Solid A-Line Dress</a></h5>
                                                    <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$50 - $149</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                    <div class="product_grid card b-0">
                                        <div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
                                        <div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-30%</div>
                                        <div class="card-body p-0">
                                            <div class="shop_thumb position-relative">
                                                <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/product/11.jpg')}}" alt="..."></a>
                                                <div class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                    <div class="edlio"><a href="javascript:void(0);" class="text-underline fs-sm ft-bold snackbar-addcart">Add To Cart</a></div>
                                                    <div class="edlio d-flex align-items-center">
                                                        <button class="btn auto btn_love mr-2 snackbar-wishlist"><i class="far fa-heart"></i></button>
                                                        <a href="#" class="text-underline" data-toggle="modal" data-target="#quickview"><i class="fas fa-expand-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                            <div class="text-left">
                                                <div class="text-left">
                                                    <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span class="small">(0 Reviews)</span>
                                                    </div>
                                                    <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Printed Straight Kurta</a></h5>
                                                    <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$199</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                    <div class="product_grid card b-0">
                                        <div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">New</div>
                                        <div class="card-body p-0">
                                            <div class="shop_thumb position-relative">
                                                <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/product/12.jpg')}}" alt="..."></a>
                                                <div class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                    <div class="edlio"><a href="javascript:void(0);" class="text-underline fs-sm ft-bold snackbar-addcart">Add To Cart</a></div>
                                                    <div class="edlio d-flex align-items-center">
                                                        <button class="btn auto btn_love mr-2 snackbar-wishlist"><i class="far fa-heart"></i></button>
                                                        <a href="#" class="text-underline" data-toggle="modal" data-target="#quickview"><i class="fas fa-expand-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                            <div class="text-left">
                                                <div class="text-left">
                                                    <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span class="small">(42 Reviews)</span>
                                                    </div>
                                                    <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Women Printed A-Line Dress</a></h5>
                                                    <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$110 - $600</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                    <div class="product_grid card b-0">
                                        <div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
                                        <div class="card-body p-0">
                                            <div class="shop_thumb position-relative">
                                                <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/product/13.jpg')}}" alt="..."></a>
                                                <div class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                    <div class="edlio"><a href="javascript:void(0);" class="text-underline fs-sm ft-bold snackbar-addcart">Add To Cart</a></div>
                                                    <div class="edlio d-flex align-items-center">
                                                        <button class="btn auto btn_love mr-2 snackbar-wishlist"><i class="far fa-heart"></i></button>
                                                        <a href="#" class="text-underline" data-toggle="modal" data-target="#quickview"><i class="fas fa-expand-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                            <div class="text-left">
                                                <div class="text-left">
                                                    <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span class="small">(0 Reviews)</span>
                                                    </div>
                                                    <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Girls Fit and Flare Dress</a></h5>
                                                    <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $110</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                    <div class="product_grid card b-0">
                                        <div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">New</div>
                                        <div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-60%</div>
                                        <div class="card-body p-0">
                                            <div class="shop_thumb position-relative">
                                                <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/product/14.jpg')}}" alt="..."></a>
                                                <div class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                    <div class="edlio"><a href="javascript:void(0);" class="text-underline fs-sm ft-bold snackbar-addcart">Add To Cart</a></div>
                                                    <div class="edlio d-flex align-items-center">
                                                        <button class="btn auto btn_love mr-2 snackbar-wishlist"><i class="far fa-heart"></i></button>
                                                        <a href="#" class="text-underline" data-toggle="modal" data-target="#quickview"><i class="fas fa-expand-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                            <div class="text-left">
                                                <div class="text-left">
                                                    <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span class="small">(15 Reviews)</span>
                                                    </div>
                                                    <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Girls Self Design Jumpsuit</a></h5>
                                                    <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$119</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Women Content -->
                    <div class="tab-pane fade" id="women" role="tabpanel" aria-labelledby="women-tab">
                        <div class="tab_product">
                            <div class="row rows-products">

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                    <div class="product_grid card b-0">
                                        <div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">Sale</div>
                                        <div class="card-body p-0">
                                            <div class="shop_thumb position-relative">
                                                <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/product/1.jpg')}}" alt="..."></a>
                                                <div class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                    <div class="edlio"><a href="javascript:void(0);" class="text-underline fs-sm ft-bold snackbar-addcart">Add To Cart</a></div>
                                                    <div class="edlio d-flex align-items-center">
                                                        <button class="btn auto btn_love mr-2 snackbar-wishlist"><i class="far fa-heart"></i></button>
                                                        <a href="#" class="text-underline" data-toggle="modal" data-target="#quickview"><i class="fas fa-expand-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                            <div class="text-left">
                                                <div class="text-left">
                                                    <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span class="small">(5 Reviews)</span>
                                                    </div>
                                                    <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Women Striped Shirt Dress</a></h5>
                                                    <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $129</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                    <div class="product_grid card b-0">
                                        <div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">Sale</div>
                                        <div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-40%</div>
                                        <div class="card-body p-0">
                                            <div class="shop_thumb position-relative">
                                                <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/product/2.jpg')}}" alt="..."></a>
                                                <div class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                    <div class="edlio"><a href="javascript:void(0);" class="text-underline fs-sm ft-bold snackbar-addcart">Add To Cart</a></div>
                                                    <div class="edlio d-flex align-items-center">
                                                        <button class="btn auto btn_love mr-2 snackbar-wishlist"><i class="far fa-heart"></i></button>
                                                        <a href="#" class="text-underline" data-toggle="modal" data-target="#quickview"><i class="fas fa-expand-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                            <div class="text-left">
                                                <div class="text-left">
                                                    <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span class="small">(0 Reviews)</span>
                                                    </div>
                                                    <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Boys Solid Sweatshirt</a></h5>
                                                    <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$129</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                    <div class="product_grid card b-0">
                                        <div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
                                        <div class="card-body p-0">
                                            <div class="shop_thumb position-relative">
                                                <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/product/3.jpg')}}" alt="..."></a>
                                                <div class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                    <div class="edlio"><a href="javascript:void(0);" class="text-underline fs-sm ft-bold snackbar-addcart">Add To Cart</a></div>
                                                    <div class="edlio d-flex align-items-center">
                                                        <button class="btn auto btn_love mr-2 snackbar-wishlist"><i class="far fa-heart"></i></button>
                                                        <a href="#" class="text-underline" data-toggle="modal" data-target="#quickview"><i class="fas fa-expand-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                            <div class="text-left">
                                                <div class="text-left">
                                                    <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <span class="small">(32 Reviews)</span>
                                                    </div>
                                                    <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Girls Floral Print Jumpsuit</a></h5>
                                                    <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $129</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                    <div class="product_grid card b-0">
                                        <div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">New</div>
                                        <div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-55%</div>
                                        <div class="card-body p-0">
                                            <div class="shop_thumb position-relative">
                                                <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/product/4.jpg')}}" alt="..."></a>
                                                <div class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                    <div class="edlio"><a href="javascript:void(0);" class="text-underline fs-sm ft-bold snackbar-addcart">Add To Cart</a></div>
                                                    <div class="edlio d-flex align-items-center">
                                                        <button class="btn auto btn_love mr-2 snackbar-wishlist"><i class="far fa-heart"></i></button>
                                                        <a href="#" class="text-underline" data-toggle="modal" data-target="#quickview"><i class="fas fa-expand-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                            <div class="text-left">
                                                <div class="text-left">
                                                    <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span class="small">(0 Reviews)</span>
                                                    </div>
                                                    <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Girls Solid A-Line Dress</a></h5>
                                                    <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$50 - $149</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                    <div class="product_grid card b-0">
                                        <div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
                                        <div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-30%</div>
                                        <div class="card-body p-0">
                                            <div class="shop_thumb position-relative">
                                                <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/product/5.jpg')}}" alt="..."></a>
                                                <div class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                    <div class="edlio"><a href="javascript:void(0);" class="text-underline fs-sm ft-bold snackbar-addcart">Add To Cart</a></div>
                                                    <div class="edlio d-flex align-items-center">
                                                        <button class="btn auto btn_love mr-2 snackbar-wishlist"><i class="far fa-heart"></i></button>
                                                        <a href="#" class="text-underline" data-toggle="modal" data-target="#quickview"><i class="fas fa-expand-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                            <div class="text-left">
                                                <div class="text-left">
                                                    <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span class="small">(0 Reviews)</span>
                                                    </div>
                                                    <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Printed Straight Kurta</a></h5>
                                                    <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$199</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                    <div class="product_grid card b-0">
                                        <div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">New</div>
                                        <div class="card-body p-0">
                                            <div class="shop_thumb position-relative">
                                                <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/product/6.jpg')}}" alt="..."></a>
                                                <div class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                    <div class="edlio"><a href="javascript:void(0);" class="text-underline fs-sm ft-bold snackbar-addcart">Add To Cart</a></div>
                                                    <div class="edlio d-flex align-items-center">
                                                        <button class="btn auto btn_love mr-2 snackbar-wishlist"><i class="far fa-heart"></i></button>
                                                        <a href="#" class="text-underline" data-toggle="modal" data-target="#quickview"><i class="fas fa-expand-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                            <div class="text-left">
                                                <div class="text-left">
                                                    <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span class="small">(42 Reviews)</span>
                                                    </div>
                                                    <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Women Printed A-Line Dress</a></h5>
                                                    <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$110 - $600</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                    <div class="product_grid card b-0">
                                        <div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
                                        <div class="card-body p-0">
                                            <div class="shop_thumb position-relative">
                                                <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/product/8.jpg')}}" alt="..."></a>
                                                <div class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                    <div class="edlio"><a href="javascript:void(0);" class="text-underline fs-sm ft-bold snackbar-addcart">Add To Cart</a></div>
                                                    <div class="edlio d-flex align-items-center">
                                                        <button class="btn auto btn_love mr-2 snackbar-wishlist"><i class="far fa-heart"></i></button>
                                                        <a href="#" class="text-underline" data-toggle="modal" data-target="#quickview"><i class="fas fa-expand-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                            <div class="text-left">
                                                <div class="text-left">
                                                    <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span class="small">(0 Reviews)</span>
                                                    </div>
                                                    <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Girls Fit and Flare Dress</a></h5>
                                                    <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $110</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                    <div class="product_grid card b-0">
                                        <div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">New</div>
                                        <div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-60%</div>
                                        <div class="card-body p-0">
                                            <div class="shop_thumb position-relative">
                                                <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/product/7.jpg')}}" alt="..."></a>
                                                <div class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                    <div class="edlio"><a href="javascript:void(0);" class="text-underline fs-sm ft-bold snackbar-addcart">Add To Cart</a></div>
                                                    <div class="edlio d-flex align-items-center">
                                                        <button class="btn auto btn_love mr-2 snackbar-wishlist"><i class="far fa-heart"></i></button>
                                                        <a href="#" class="text-underline" data-toggle="modal" data-target="#quickview"><i class="fas fa-expand-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                            <div class="text-left">
                                                <div class="text-left">
                                                    <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span class="small">(15 Reviews)</span>
                                                    </div>
                                                    <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Girls Self Design Jumpsuit</a></h5>
                                                    <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$119</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="kids" role="tabpanel" aria-labelledby="kids-tab">
                        <div class="tab_product">
                            <div class="row rows-products">

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                    <div class="product_grid card b-0">
                                        <div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">Sale</div>
                                        <div class="card-body p-0">
                                            <div class="shop_thumb position-relative">
                                                <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/product/1.jpg')}}" alt="..."></a>
                                                <div class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                    <div class="edlio"><a href="javascript:void(0);" class="text-underline fs-sm ft-bold snackbar-addcart">Add To Cart</a></div>
                                                    <div class="edlio d-flex align-items-center">
                                                        <button class="btn auto btn_love mr-2 snackbar-wishlist"><i class="far fa-heart"></i></button>
                                                        <a href="#" class="text-underline" data-toggle="modal" data-target="#quickview"><i class="fas fa-expand-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                            <div class="text-left">
                                                <div class="text-left">
                                                    <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span class="small">(5 Reviews)</span>
                                                    </div>
                                                    <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Women Striped Shirt Dress</a></h5>
                                                    <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $129</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                    <div class="product_grid card b-0">
                                        <div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">Sale</div>
                                        <div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-40%</div>
                                        <div class="card-body p-0">
                                            <div class="shop_thumb position-relative">
                                                <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/product/4.jpg')}}" alt="..."></a>
                                                <div class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                    <div class="edlio"><a href="javascript:void(0);" class="text-underline fs-sm ft-bold snackbar-addcart">Add To Cart</a></div>
                                                    <div class="edlio d-flex align-items-center">
                                                        <button class="btn auto btn_love mr-2 snackbar-wishlist"><i class="far fa-heart"></i></button>
                                                        <a href="#" class="text-underline" data-toggle="modal" data-target="#quickview"><i class="fas fa-expand-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                            <div class="text-left">
                                                <div class="text-left">
                                                    <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span class="small">(0 Reviews)</span>
                                                    </div>
                                                    <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Boys Solid Sweatshirt</a></h5>
                                                    <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$129</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                    <div class="product_grid card b-0">
                                        <div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
                                        <div class="card-body p-0">
                                            <div class="shop_thumb position-relative">
                                                <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/product/5.jpg')}}" alt="..."></a>
                                                <div class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                    <div class="edlio"><a href="javascript:void(0);" class="text-underline fs-sm ft-bold snackbar-addcart">Add To Cart</a></div>
                                                    <div class="edlio d-flex align-items-center">
                                                        <button class="btn auto btn_love mr-2 snackbar-wishlist"><i class="far fa-heart"></i></button>
                                                        <a href="#" class="text-underline" data-toggle="modal" data-target="#quickview"><i class="fas fa-expand-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                            <div class="text-left">
                                                <div class="text-left">
                                                    <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <span class="small">(32 Reviews)</span>
                                                    </div>
                                                    <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Girls Floral Print Jumpsuit</a></h5>
                                                    <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $129</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                    <div class="product_grid card b-0">
                                        <div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">New</div>
                                        <div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-55%</div>
                                        <div class="card-body p-0">
                                            <div class="shop_thumb position-relative">
                                                <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/product/3.jpg')}}" alt="..."></a>
                                                <div class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                    <div class="edlio"><a href="javascript:void(0);" class="text-underline fs-sm ft-bold snackbar-addcart">Add To Cart</a></div>
                                                    <div class="edlio d-flex align-items-center">
                                                        <button class="btn auto btn_love mr-2 snackbar-wishlist"><i class="far fa-heart"></i></button>
                                                        <a href="#" class="text-underline" data-toggle="modal" data-target="#quickview"><i class="fas fa-expand-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                            <div class="text-left">
                                                <div class="text-left">
                                                    <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span class="small">(0 Reviews)</span>
                                                    </div>
                                                    <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Girls Solid A-Line Dress</a></h5>
                                                    <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$50 - $149</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                    <div class="product_grid card b-0">
                                        <div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
                                        <div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-30%</div>
                                        <div class="card-body p-0">
                                            <div class="shop_thumb position-relative">
                                                <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/product/2.jpg')}}" alt="..."></a>
                                                <div class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                    <div class="edlio"><a href="javascript:void(0);" class="text-underline fs-sm ft-bold snackbar-addcart">Add To Cart</a></div>
                                                    <div class="edlio d-flex align-items-center">
                                                        <button class="btn auto btn_love mr-2 snackbar-wishlist"><i class="far fa-heart"></i></button>
                                                        <a href="#" class="text-underline" data-toggle="modal" data-target="#quickview"><i class="fas fa-expand-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                            <div class="text-left">
                                                <div class="text-left">
                                                    <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span class="small">(0 Reviews)</span>
                                                    </div>
                                                    <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Printed Straight Kurta</a></h5>
                                                    <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$199</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                    <div class="product_grid card b-0">
                                        <div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">New</div>
                                        <div class="card-body p-0">
                                            <div class="shop_thumb position-relative">
                                                <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/product/8.jpg')}}" alt="..."></a>
                                                <div class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                    <div class="edlio"><a href="javascript:void(0);" class="text-underline fs-sm ft-bold snackbar-addcart">Add To Cart</a></div>
                                                    <div class="edlio d-flex align-items-center">
                                                        <button class="btn auto btn_love mr-2 snackbar-wishlist"><i class="far fa-heart"></i></button>
                                                        <a href="#" class="text-underline" data-toggle="modal" data-target="#quickview"><i class="fas fa-expand-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                            <div class="text-left">
                                                <div class="text-left">
                                                    <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span class="small">(42 Reviews)</span>
                                                    </div>
                                                    <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Women Printed A-Line Dress</a></h5>
                                                    <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$110 - $600</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                    <div class="product_grid card b-0">
                                        <div class="badge bg-success text-white position-absolute ft-regular ab-left text-upper">Sale</div>
                                        <div class="card-body p-0">
                                            <div class="shop_thumb position-relative">
                                                <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/product/7.jpg')}}" alt="..."></a>
                                                <div class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                    <div class="edlio"><a href="javascript:void(0);" class="text-underline fs-sm ft-bold snackbar-addcart">Add To Cart</a></div>
                                                    <div class="edlio d-flex align-items-center">
                                                        <button class="btn auto btn_love mr-2 snackbar-wishlist"><i class="far fa-heart"></i></button>
                                                        <a href="#" class="text-underline" data-toggle="modal" data-target="#quickview"><i class="fas fa-expand-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                            <div class="text-left">
                                                <div class="text-left">
                                                    <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span class="small">(0 Reviews)</span>
                                                    </div>
                                                    <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Girls Fit and Flare Dress</a></h5>
                                                    <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$99 - $110</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                    <div class="product_grid card b-0">
                                        <div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">New</div>
                                        <div class="badge bg-danger text-white position-absolute ft-regular ab-right text-upper">-60%</div>
                                        <div class="card-body p-0">
                                            <div class="shop_thumb position-relative">
                                                <a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img class="card-img-top" src="{{ asset('frontend/img/product/9.jpg')}}" alt="..."></a>
                                                <div class="product-hover-overlay d-flex align-items-center justify-content-between">
                                                    <div class="edlio"><a href="javascript:void(0);" class="text-underline fs-sm ft-bold snackbar-addcart">Add To Cart</a></div>
                                                    <div class="edlio d-flex align-items-center">
                                                        <button class="btn auto btn_love mr-2 snackbar-wishlist"><i class="far fa-heart"></i></button>
                                                        <a href="#" class="text-underline" data-toggle="modal" data-target="#quickview"><i class="fas fa-expand-arrows-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                            <div class="text-left">
                                                <div class="text-left">
                                                    <div class="star-rating align-items-center d-flex justify-content-left mb-1 p-0">
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span class="small">(15 Reviews)</span>
                                                    </div>
                                                    <h5 class="fs-md mb-0 lh-1 mb-1"><a href="shop-single-v1.html">Girls Self Design Jumpsuit</a></h5>
                                                    <div class="elis_rty"><span class="ft-bold text-dark fs-sm">$119</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
</section>
<!-- ======================= All Category ======================== -->

<!-- ======================= Customer Review ======================== -->
<section class="gray">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center">
                    <h2 class="off_title">Testimonials</h2>
                    <h3 class="ft-bold pt-3">Client Reviews</h3>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12">

                <div class="reviews-slide px-3">
                    @foreach ($testimonials as $tt)
                    <!-- single review -->
                    <div class="single_review">
                        <div class="sng_rev_thumb">
                            <figure class="testimonial-author-thumbnail ">
                                <img src="/testiimages/{{ $tt->custimg }}" class="img-fluid circle"
                                      alt="" />
                            </figure>
                           </div>
                        <div class="sng_rev_caption text-center">
                            <div class="rev_desc mb-4">
                                <p class="fs-md">{{ $tt->custreview }}</p>
                            </div>
                            <div class="rev_author">
                                <h4 class="mb-0">{{ $tt->custname }}</h4>
                                <span class="fs-sm">{{ $tt->custdesignation }}</span>
                                <div >

                                    @if ($tt->custstar == 1)
                                        <a href="#"style="color: orange">
                                            <i class="fa-solid fa-star"></i>
                                        </a>
                                    @elseif ($tt->custstar == 2)
                                        <a href="#"style="color: orange">
                                            <i class="fa-solid fa-star"></i>
                                        </a>
                                        <a href="#"style="color: orange">
                                            <i class="fa-solid fa-star"></i>
                                        </a>
                                    @elseif ($tt->custstar == 3)
                                        <a href="#"style="color: orange">
                                            <i class="fa-solid fa-star"></i>
                                        </a>
                                        <a href="#"style="color: orange">
                                            <i class="fa-solid fa-star"></i>
                                        </a>
                                        <a href="#"style="color: orange">
                                            <i class="fa-solid fa-star"></i>
                                        </a>
                                    @elseif ($tt->custstar == 4)
                                        <a href="#"style="color: orange">
                                            <i class="fa-solid fa-star"></i>
                                        </a>
                                        <a href="#"style="color: orange">
                                            <i class="fa-solid fa-star"></i>
                                        </a>
                                        <a href="#"style="color: orange">
                                            <i class="fa-solid fa-star"></i>
                                        </a>
                                        <a href="#" style="color: orange">
                                            <i class="fa-solid fa-star"></i>
                                        </a>
                                    @elseif ($tt->custstar == 5)
                                        <a href="#"style="color: orange">
                                            <i class="fa-solid fa-star"></i>
                                        </a>
                                        <a href="#"style="color: orange">
                                            <i class="fa-solid fa-star"></i>
                                        </a>
                                        <a href="#"style="color: orange">
                                            <i class="fa-solid fa-star"></i>
                                        </a>
                                        <a href="#"style="color: orange">
                                            <i class="fa-solid fa-star"></i>
                                        </a>
                                        <a href="#"style="color: orange">
                                            <i class="fa-solid fa-star"></i>
                                        </a>
                                    @endif
                            </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ======================= Top Seller Start ============================ -->

<!-- ======================= Top Seller Start ============================ -->

<!-- ======================= Brand Start ============================ -->
<section class="p-0">
    <div class="container">
        <div class="row">

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="d-flex align-items-center justify-content-start py-3 px-3 border my-3">
                    <div class="d_ico">
                        <i class="fas fa-shopping-basket"></i>
                    </div>
                    <div class="d_capt">
                        <h5 class="mb-0">Free Shipping</h5>
                        <span class="text-muted">Capped at $10 per order</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="d-flex align-items-center justify-content-start py-3 px-3 border my-3">
                    <div class="d_ico">
                        <i class="far fa-credit-card"></i>
                    </div>
                    <div class="d_capt">
                        <h5 class="mb-0">Secure Payments</h5>
                        <span class="text-muted">Up to 6 months installments</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="d-flex align-items-center justify-content-start py-3 px-3 border my-3">
                    <div class="d_ico">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="d_capt">
                        <h5 class="mb-0">15-Days Returns</h5>
                        <span class="text-muted">Shop with fully confidence</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="d-flex align-items-center justify-content-start py-3 px-3 border my-3">
                    <div class="d_ico">
                        <i class="fas fa-headphones-alt"></i>
                    </div>
                    <div class="d_capt">
                        <h5 class="mb-0">24x7 Fully Support</h5>
                        <span class="text-muted">Get friendly support</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="middle">
    <div class="container">
        <div class="row align-items-center justify-content-between">

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="abt_caption">
                    <img src="{{ asset('frontend/img/about-2.png')}}" class="img-fluid rounded" alt="" />
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="abt_caption">
                    <h2 class="ft-medium mb-4">Justin Lisiakir</h2>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <p class="mb-4">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</p>
                    <div class="form-group mt-4">
                        <a href="#" class="btn btn-dark">See More Info</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
