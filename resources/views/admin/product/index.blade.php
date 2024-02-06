@extends('admin.includes.app')
@section('title', 'All Projects')
@section('content')


    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row mt-4 mb-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="flex-between-center row">
                                <div class="col-md">
                                    <h3 class="mb-2 mb-md-0">All Product</h3>
                                    <div class="breadcrumb-wrapper">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                            </li>
                                            <li class="breadcrumb-item active">All Product
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <a href="{{ route('admin.product.create') }}">
                                        <button type="submit" class="btn btn-primary">Add Product</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="row" id="basic-table">
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">#No</th>
                                            <th style="text-align: center;">Media</th>
                                            <th style="text-align: center;">Product Name</th>
                                            <th style="text-align: center;">Rating</th>
                                            <th style="text-align: center;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($products as $key => $product)
                                            <tr style="vertical-align: middle;">
                                                <th style="text-align: center;" scope="row">
                                                    {{ $key + 1 }}</th>
                                                <td style="text-align: center;">
                                                    <img src="{{ url('products/' . $product->preview_img) }}"
                                                        class="img-responsive" style="max-height:100px; max-width:100px"
                                                        alt="">
                                                </td>
                                                <td>{{ $product->name }}</td>
                                                <td>

                                                    <div >

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
                                                </td>
                                                <td style="text-align: center;"><a
                                                    href=" {{ route('admin.product.edit', $product->id) }}"
                                                    class="btn btn-primary border">Edit</a>
                                            </td>
                                                 <td>
                                                    <a class="btn btn-danger border"
                                                        onclick="return confirm('Are you sure?');"
                                                        href="{{ route('admin.product.destroy', $product->id) }}">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="10" class="text-center">No records found!</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{ $products->links() }}
                    </div>
                </div>



            </div>
        </div>
    </div>

@endsection
