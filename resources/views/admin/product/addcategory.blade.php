@extends('admin.includes.app')
@section('title', 'Add Category')
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
                                    <h3 class="mb-2 mb-md-0">Add Category</h3>
                                    <div class="breadcrumb-wrapper">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                            </li>
                                            <li class="breadcrumb-item active">Add Category
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
                            <form action="{{ route('admin.product.storecategory') }}" name="stype_name" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="content-body">
                                    <!-- Basic Tables start -->
                                    <div class="row" id="basic-table">
                                        <div class="col-12">
                                            <div class="">


                                                {{-- <select name="typeid" id="typeid" value="" class="form-control">
                                                    <option class="form-control">All Service Types</option>
                                                    @foreach ($pservices as $ps)
                                                        <option value="{{ $ps->id }}">{{ $ps->service_name }}</option>
                                                    @endforeach
                                                </select> --}}
                                                {{-- <div class="card-header">
                                                    <h4 class="card-title">Table Basic</h4>
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text">
                                                        Using the most basic table Leanne Grahamup, here’s how <code>.table</code>-based tables look in Bootstrap. You
                                                        can use any example of below table for your table and it can be use with any type of bootstrap tables.
                                                    </p>
                                                </div> --}}
                                                <input style="width: 93%" type="text" name="stype_name" id="stype_name" class="form-control m-1"
                                                placeholder="Add New Category" required>
                                               <a href="{{ route('admin.product.create') }}"class="mt-4 mb-4">
                                                <button style="    width: 100px;
                                                " type="submit" class="btn btn-primary mr-1 mb-4 mt-4">Submit</button></a>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Category</th>

                                                                {{-- <th>Edit</th> --}}
                                                                <th>Delete</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>


                                                            @foreach ($categories as $category)
                                                                <tr style="vertical-align: center;">
                                                                    <td>{{ $category->stype_name }}</td>

                                                                    {{-- <td>
                                                                        <a href="/admin/typeedit/{{ $type->id }}"
                                                                            class="btn btn-sm btn-outline-primary">
                                                                            Edit
                                                                        </a>
                                                                    </td> --}}
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

                </div>
            @endsection
