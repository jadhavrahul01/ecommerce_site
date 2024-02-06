@extends('admin.includes.app')
@section('title', 'Category')
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
                                    <h3 class="mb-2 mb-md-0">All Category</h3>
                                    <div class="breadcrumb-wrapper">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                            </li>
                                            <li class="breadcrumb-item active">AllCategory
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
                            <form action="{{ route('admin.product.store') }}" name="stype_name" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="content-body">
                                    <!-- Basic Tables start -->
                                    <div class="row" id="basic-table">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Category</th>
                                                                <th>Delete</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($categorys as $category)
                                                            <tr style="vertical-align: center;">
                                                                    <td>{{ $category->stype_name }}</td>
                                                                <td style="text-align: center;"><a
                                                                        href=" {{ route('admin.product.index', $category->id) }}"
                                                                        class="btn btn-primary border">Edit</a>
                                                                </td>
                                                                    <td>
                                                                        <a class="btn btn-danger border"
                                                                            onclick="return confirm('Are you sure?');"
                                                                            href="{{ route('admin.product.destroys', $category->id) }}">
                                                                             Delete
                                                                         </a>
                                                                    </td>
                                                            </tr>
                                                            @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                        </form>
                    </div>
                </div>
            @endsection
