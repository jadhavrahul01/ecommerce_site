@extends('admin.includes.app')
@section('title', 'Dashboard')
@section('content')

    <div class="row mb-3 mt-4">
        <div class="col">
            <div class="card bg-100 shadow-none border">
                <div class="row gx-0 flex-between-center">
                    <div class="col-sm-auto d-flex align-items-center">
                        <img class="ms-n2" src="{{ asset('admin-assets/img/illustrations/crm-bar-chart.png') }}"
                            alt="" width="90">
                        <div>
                            <h6 class="text-primary fs--1 mb-0">Welcome </h6>
                            <h4 class="text-primary fw-bold mb-0"> <span
                                    class="text-info fw-medium"></span></h4>
                        </div><img class="ms-n4 d-md-none d-lg-block"
                            src="{{ asset('admin-assets/img/illustrations/crm-line-chart.png') }}" alt=""
                            width="150">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3 g-3">
        <div class="col-lg-4  ">
            <div class="card overflow-hidden" style="min-width: 12rem">
                <div class="bg-holder bg-card"
                    style="background-image:url(/backend/img/icons/spot-illustrations/corner-2.png);"></div>
                <div class="card-body position-relative">
                    <h6>Total Blogs<span class="badge badge-subtle-warning rounded-pill ms-2"> </span></h6>
                    <div class="display-4 fs-5 mb-2 fw-normal font-sans-serif text-warning"></div>
                    <a class="fw-semi-bold fs-10 text-nowrap" href="">See all
                        <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card overflow-hidden" style="min-width: 12rem">
                <div class="bg-holder bg-card" style="background-image:url(/admin-assets/img/icons/spot-illustrations/corner-2.png);"></div>
                <div class="card-body position-relative">
                    <h6>Total Contact Form Entries<span class="badge badge-subtle-warning rounded-pill ms-2"> </span></h6>
                    <div class="display-4 fs-5 mb-2 fw-normal font-sans-serif text-warning"></div>
                    <a class="fw-semi-bold fs-10 text-nowrap" href="">See all
                        <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card overflow-hidden" style="min-width: 12rem">
                <div class="bg-holder bg-card" style="background-image:url(/admin-assets/img/icons/spot-illustrations/corner-2.png);"></div>
                <div class="card-body position-relative">
                    <h6>Total Testimonials<span class="badge badge-subtle-warning rounded-pill ms-2"> </span></h6>
                    <div class="display-4 fs-5 mb-2 fw-normal font-sans-serif text-warning">
                    </div>
                    <a class="fw-semi-bold fs-10 text-nowrap" href="">See all
                        <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span>
                    </a>
                </div>
            </div>
        </div>
    @endsection
