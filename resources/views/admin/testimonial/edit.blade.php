@extends('admin.includes.app')
@section('title', 'Edit Testimonials')
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
                                <h3 class="mb-2 mb-md-0">Edit Testimonial</h3>
                                <div class="breadcrumb-wrapper">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item active">Edit Testimonial
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3 mt-4 bg-light">
                    <div class="card-body bg-light">
                        <div class="tab-content">
                            <form action="{{ route('admin.testimonial.update', $testimonials->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label class="form-label" for="basic-form-name"> Customer Name</label>
                                            <input type="text" id="first-name-column" class="form-control"
                                                value="{{ $testimonials->custname }}" placeholder="name" name="name">
                                            @error('name')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                     <div class="mb-3">
                                        <label class="form-label" for="basic-form-name"> Customer Designation</label>
                                        <input type="text" id="first-name-column" class="form-control"
                                            value="{{ $testimonials->custdesignation }}" placeholder="Customer Designation"
                                            name="custdesignation">
                                        @error('custdesignation')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-form-name"> Customer Company Name</label>
                                        <input type="text" id="first-name-column" class="form-control"
                                            value="{{ $testimonials->custcompany }}" placeholder="Customer Company name"
                                            name="custcompany">
                                        @error('custcompany')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3"><label class="form-label" for="basic-form-dob">Date of Birth</label>
                                        <input type="date" id="first-name-column" class="form-control"
                                            value="{{ $testimonials->date }}" placeholder="Customer Designation"
                                            name="date">
                                        @error('date')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div> 
                                </div>
                                 <div class="mb-3">
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <label for="customFile" name="cover"class="form-label">Upload Image</label>
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
                                    <textarea class="form-control" name="review" id="" cols="30" rows="3">{{ old('review') }}{{ $testimonials->custreview }}</textarea>
                                    @error('review')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror

                                </div>
                                <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                        </form>
                    </div>

                @endsection
