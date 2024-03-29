@extends('frontend.layouts.app')
@section('title', 'Contact')
@section('body-class', 'contact-us')
@section('page')

<div class="gray py-3">
    <div class="container">
        <div class="row">
            <div class="colxl-12 col-lg-12 col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>

                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ======================= Top Breadcrubms ======================== -->

<!-- ======================= Contact Page Detail ======================== -->
<section class="middle">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center">
                    <h2 class="off_title">Contact Us</h2>
                    <h3 class="ft-bold pt-3">Get In Touch</h3>
                </div>
            </div>
        </div>

        <div class="row align-items-start justify-content-between">

            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="card-wrap-body mb-4">
                    <h4 class="ft-medium mb-3 theme-cl">Make a Call</h4>
                    <p>1354 Green Street Nashville Drive Dodge City,<br> KS 67801 United States</p>
                    <p class="lh-1"><span class="text-dark ft-medium">Email:</span> dhananjaypreet@gmail.com</p>
                </div>

                <div class="card-wrap-body mb-3">
                    <h4 class="ft-medium mb-3 theme-cl">Make a Call</h4>
                    <h6 class="ft-medium mb-1">Customer Care:</h6>
                    <p class="mb-2">+91 458 753 6924</p>
                    <h6 class="ft-medium mb-1">Careers::</h6>
                    <p>+91 965 784 23658</p>
                </div>

                <div class="card-wrap-body mb-3">
                    <h4 class="ft-medium mb-3 theme-cl">Drop A Mail</h4>
                    <p>Fill out our form and we will contact you within 24 hours.</p>
                    <p class="lh-1 text-dark">dhananjaypreet@gmail.com</p>
                    <p class="lh-1 text-dark">dhananjaypreet@gmail.com</p>
                </div>
            </div>
          @include('admin.message')
            <div class="col-xl-7 col-lg-8 col-md-12 col-sm-12">
                <form  action="{{ route('frontend.contact.store') }}"class="form contact-us-form" method="post">
                    @csrf

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label class="small text-dark ft-medium">Your Name *</label>
                            <input  type="text" name="name"
                                placeholder="Name" class="form-control" value="{{ old('name') }}"  {{ $errors->any() ? 'autofocus' : '' }}>
                            @error('name')
                                <span class="text-danger text-sm">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label class="small text-dark ft-medium">Your Email *</label>
                            <input  type="email" name="email"
                            placeholder="Email" class="form-control" value="{{ old('email') }}">
                        @error('email')
                            <span class="text-danger text-sm">
                                {{ $message }}
                            </span>
                        @enderror
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label class="small text-dark ft-medium">Your Phone Number *</label>
                            <input type="text" name="phone"
                            placeholder="Phone" class="form-control" value="{{ old('phone') }}">
                        @error('phone')
                            <span class="text-danger text-sm">
                                {{ $message }}
                            </span>
                        @enderror
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label class="small text-dark ft-medium">Message</label>
                            <textarea rows="5" name="message" placeholder="Messages"
                                class="form-control">{{ old('message') }}</textarea>
                            @error('message')
                                <span class="text-danger text-sm">
                                    {{ $message }}
                                </span>
                            @enderror
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-dark">Send Message</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</section>

@endsection
