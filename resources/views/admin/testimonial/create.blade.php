@extends('admin.includes.app')
@section('title', 'Add Testimonials')
@section('content')

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="flex-between-center row">
                            <div class="col-md">
                                <h3 class="mb-2 mb-md-0">Add Testimonial</h3>
                                <div class="breadcrumb-wrapper">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item active">Add Testimonial
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3 mb-3">
                    <div class="card-body mb-4">
                        <div class="tab-content">
                            <form action="{{ route('admin.testimonial.store') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label class="form-label" for="basic-form-name"> Customer Name</label>
                                            <input type="text" class="form-control" placeholder="Customer Name Goes Here"
                                                name="name" value="{{ old('name') }}">
                                            @error('name')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                     <div class="mb-3">
                                        <label class="form-label" for="basic-form-name"> Customer Designation</label>
                                        <input type="text" class="form-control"
                                            placeholder="Customer Designation Goes Here" name="custdesignation"
                                            value="{{ old('name') }}">
                                        @error('name')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror

                                    </div>
                                     {{-- <div class="mb-3">
                                        <label class="form-label" for="basic-form-name"> Customer Company Name</label>
                                        <input type="text" class="form-control"
                                            placeholder="Customer Company name Goes Here" name="custcompany"
                                            value="{{ old('name') }}">
                                        @error('name')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div> --}}

                                     {{-- <div class="mb-3"><label class="form-label" for="basic-form-dob">Date </label>
                                        <input type="date" class="form-control" placeholder="Customer Designation"
                                            name="date" value="{{ old('date') }}">
                                        @error('date')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div> --}}
                                </div>
                                 <div class="mb-3">
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <label for="customFile" name="cover" class="form-label">Upload
                                                Image</label>
                                            <input class="form-control" type="file" name="cover">
                                            @error('cover')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3"><label class="form-label" for="basic-form-textarea">Description</label>
                                    <textarea class="form-control" name="review" id="" cols="30" rows="3">{{ old('review') }}</textarea>
                                    @error('review')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12">
                                    <label>Customer Rating</label>
                                    <div style="display: flex;flex-direction: row;" class="star-rating-bx p-1">
                    <div class="star-widget">
                        <input type="radio" name="custstar" id="rate-5"
                            value="5">
                        <label for="rate-5" class="fa-solid fa-star"></label>
                        <input type="radio" name="custstar" id="rate-4"
                            value="4">
                        <label for="rate-4" class="fa-solid fa-star"></label>
                        <input type="radio" name="custstar" id="rate-3"
                            value="3">
                        <label for="rate-3" class="fa-solid fa-star"></label>
                        <input type="radio" name="custstar" id="rate-2"
                            value="2">
                        <label for="rate-2" class="fa-solid fa-star"></label>
                        <input type="radio" name="custstar" id="rate-1"
                            value="1">
                        <label for="rate-1" class="fa-solid fa-star"></label>
                        <p id="error-rating"></p>
                        <p class="rating-desc"></p>
                        <div class="modal fade" id="simpleModal" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title" id="exampleModalLabel">
                                            Thank you</h3>
                                        <button type="button" class="btn-close"
                                            data-bs-dismiss="modal" aria-label="Close"
                                            onClick="reload"></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                @endsection
