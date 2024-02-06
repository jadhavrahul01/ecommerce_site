@extends('admin.includes.app')
@section('title', 'Add Product')
@section('content')


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="card mt-4" style="margin-bottom: 30px;">
                <div class="card-body">
                    <div class="flex-between-center row">
                        <div class="col-md">
                            <h3 class="mb-2 mb-md-0">Add Product</h3>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">Add Product
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         <div class="card mb-3">
      <div class="card-header">
      <div class="row flex-between-end">
        <div class="col-auto align-self-center">
        </div>
      </div>
     </div>
        <div class="card-body bg-light">
      <div class="tab-content">

        <form action="{{ route('admin.product.store') }}" method="post"
         enctype="multipart/form-data">
         @csrf
         <div class="row">
            <div class="mb-3">
             <div class="form-group">
                <label class="form-label" for="basic-form-name"> Product Name</label>
                <input type="text" id="first-name-column" class="form-control"
                placeholder="Name of the product Goes Here" name="name"
                value="{{ old('name') }}">
              @error('name')
                <span class="text-danger">
                    {{ $message }}
                </span>
              @enderror
             </div>
            </div>
          <div class="mb-3 col-12">
            <label class="form-label" for="basic-form-name"> Category of product</label>

<div class="d-flex">
    <div class="">
        <select name="category" id="stype_name"  value="{{ old('category') }}" class="form-control" >
            <option value="{{ old('stype_name') }}" name="stype_name"><- Select Category Type -></option>
            @foreach ($categories as $category)
            <option value="{{ $category->stype_name }}">{{ $category->stype_name }}
            </option>
            @endforeach
        </select>
    </div>
    <div class="">
        <a href="{{ route('admin.product.addcategory') }}">
            <p style="margin-left: 30px;" class="btn btn-primary ">Add Category</p></a>
        </div>
    </div>
          @error('category')
            <span class="text-danger">
                {{ $message }}
            </span>
          @enderror
          </div>
            <div class="mb-3">
            <label class="form-label" for="basic-form-name"> Product Price</label>
            <input type="text" id="first-name-column" class="form-control"
            placeholder="Price of the Product Goes Here"  name="price"
            value="{{ old('price') }}">
          @error('price')
            <span class="text-danger">
                {{ $message }}
            </span>
           @enderror
             </div>
            </div>
            <div class="mb-3 ">
              <div class="form-group">
                <div class="custom-file">
                  <label for="customFile"  name="preview_img"class="form-label">Upload Image</label>
                  <input class="form-control" type="file" name="preview_img"    value="{{ old('preview_img') }}">

                  @error('preview_img')
                   <span class="text-danger">
                    {{ $message }}
                  </span>
                 @enderror
                </div>
              </div>
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
