@extends('frontend.layouts.app')
@section('title', 'Product')
@section('body-class', 'products')
@section('page')

    <div class="gray py-3">
        <div class="container">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>

                            <li class="breadcrumb-item active" aria-current="page">Product</li>
                        </ol>
                    </nav>
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
        </div>
    </section>

    <div class="page-content">
        <div class="container">

            <div class="shop-content row gutter-lg mb-10">
                <!-- Start of Sidebar, Shop Sidebar -->
                <aside class="sidebar shop-sidebar sticky-sidebar-wrapper sidebar-fixed">
                    <!-- Start of Sidebar Overlay -->
                    <!-- Start of Sidebar Content -->
                    <div class="sidebar-content scrollable">
                        <!-- Start of Sticky Sidebar -->
                        <div class="sticky-sidebar">
                            <div class="filter-actions">
                                <label>Filter :</label>
                            </div>
                            {{-- <form action="{{ route('frontend.product.search') }}" method="GET">
                                <div class=" mb-3">
                                    <input style="max-width: 300px!important;" type="text" name="search" class="form-control col-lg-4" placeholder="Search Treatment"
                                    aria-label="Search" aria-describedby="search-field">
                                </div>
                            </form> --}}
                            <!-- Start of Collapsible widget -->
                            <form action="{{ route('frontend.product.search') }}" method="GET">
                                @csrf
                                <div>
                                    <h3 class=""><label>All Categories</label></h3>
                                    @foreach ($categories as $key => $value)
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio{{ $key }}" name="category"
                                                class="custom-control-input" value='{{ $key }}'
                                                {{ isset($selected_category) && $selected_category == $key ? 'checked' : null }}>
                                            <label class="custom-control-label"
                                                for="customRadio{{ $key }}">{{ $value }}</label>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Filter</button>
                                    <a href="{{ route('frontend.product') }}" class="btn btn-success"
                                        id="reset">Reset</a>
                                </div>
                            </form>
                        </div>
                        <!-- End of Sidebar Content -->
                    </div>
                    <!-- End of Sidebar Content -->
                </aside>

                <div class="main-content">
                    <nav class="toolbox sticky-toolbox sticky-content fix-top">
                        <div class="toolbox-left">
                            <a href="#"
                                class="btn btn-primary btn-outline btn-rounded left-sidebar-toggle
                                btn-icon-left d-block d-lg-none"><i
                                    class="w-icon-category"></i><span>Filters</span></a>
                            <div class="toolbox-item toolbox-sort text-dark">
                            </div>
                        </div>
                    </nav>
                    <div class="product-wrapper row cols-md-3 cols-sm-2 cols-2">
                        @forelse ($products as $product_key=> $product)
                            <div class="col-xl-3 col-lg-4 col-md-6 col-6">
                                <div class="product_grid card b-0">
                                    <div class="badge bg-info text-white position-absolute ft-regular ab-left text-upper">
                                        Sale</div>
                                    <div class="card-body p-0">
                                        <div class="shop_thumb position-relative">
                                            <a class="card-img-top d-block overflow-hidden" href="javascript:void(0);">
                                                <img src="{{ url('products/' . $product->preview_img) }}"
                                                    class="d-block w-100" alt="">
                                            </a>
                                            <div class="product-left-hover-overlay">
                                                <ul class="left-over-buttons">
                                                    <li><a href="javascript:void(0);"
                                                            class="d-inline-flex circle align-items-center justify-content-center"><i
                                                                class="fas fa-expand-arrows-alt position-absolute"></i></a>
                                                    </li>
                                                    <li><a href="javascript:void(0);"
                                                            class="d-inline-flex circle align-items-center justify-content-center snackbar-wishlist"><i
                                                                class="far fa-heart position-absolute"></i></a></li>
                                                    <li><a href="javascript:void(0);"
                                                            class="d-inline-flex circle align-items-center justify-content-center snackbar-addcart"><i
                                                                class="fas fa-shopping-basket position-absolute"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="card-footer b-0 p-0 pt-2 bg-white d-flex align-items-start justify-content-between">
                                        <div class="text-left">
                                            <div class="text-left">
                                                <div class="elso_titl"><span class="small">{{ $product->name }}</span>
                                                </div>
                                                <h5 class="fs-md mb-0 lh-1 mb-1"><a
                                                        href="shop-single-v1.html">{{ $product->category }}</a></h5>

                                                <div>

                                                    @if ($product->custstar == 1)
                                                        <a href="#"style="color: orange">
                                                            <i class="fa-solid fa-star"></i>
                                                        </a>
                                                    @elseif ($product->custstar == 2)
                                                        <a href="#"style="color: orange">
                                                            <i class="fa-solid fa-star"></i>
                                                        </a>
                                                        <a href="#"style="color: orange">
                                                            <i class="fa-solid fa-star"></i>
                                                        </a>
                                                    @elseif ($product->custstar == 3)
                                                        <a href="#"style="color: orange">
                                                            <i class="fa-solid fa-star"></i>
                                                        </a>
                                                        <a href="#"style="color: orange">
                                                            <i class="fa-solid fa-star"></i>
                                                        </a>
                                                        <a href="#"style="color: orange">
                                                            <i class="fa-solid fa-star"></i>
                                                        </a>
                                                    @elseif ($product->custstar == 4)
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
                                                    @elseif ($product->custstar == 5)
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
                                                <div class="elis_rty"><span
                                                        class="ft-bold text-dark fs-sm">{{ $product->price }}</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div>
                                <h3>Not found</h3>
                            </div>
                        @endforelse
                    </div>

                    <div class="d-flex mt-5 justify-content-center">
                        {{ $products->links() }}
                    </div>

                </div>
                <!-- End of Shop Main Content -->
            </div>
            <!-- End of Shop Content -->
        </div>
    </div>
    <!-- End of Page Content -->
@endsection
