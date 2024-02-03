@extends('admin.includes.app')
@section('title', 'All Testimonials')
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
                                    <h3 class="mb-2 mb-md-0">Testimonial</h3>
                                    <div class="breadcrumb-wrapper">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                            </li>
                                            <li class="breadcrumb-item active">Testimonial
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <a href="{{ route('admin.testimonial.create') }}">
                                        <button type="submit" class="btn btn-primary">Add Testimonial</button></a>
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
                                            <th>Client Logo</th>
                                            <th>Customer Name</th>
                                            <th>Customer Designation</th>
                                            <th>Customer Company</th>
                                            <th>Date</th>
                                            <th style="text-align: center;">Edit</th>
                                            <th style="text-align: center;">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($testimonials as $tsti)
                                            <tr style="vertical-align: middle;">
                                                <td>
                                                    <img src="/testiimages/{{ $tsti->custimg }}" class="img-responsive"
                                                      alt=""
                                                        srcset="">
                                                </td>
                                                <td>{{ $tsti->custname }}</td>
                                                <td>{{ $tsti->custdesignation }}</td>
                                                <td>{{ $tsti->custcompany }}</td>
                                                <td>{{ $tsti->date }}</td>
                                                <td style="text-align: center;"><a
                                                        href=" {{ route('admin.testimonial.edit', $tsti->id) }}"
                                                        class="btn btn-primary border">Edit</a>
                                                </td>
                                                <td style="text-align: center;">
                                                    <a class="btn btn-danger border"
                                                    onclick="return confirm('Are you sure?');"
                                                    href="{{ route('admin.testimonial.destroy', $tsti->id) }}">
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
    </div>


@endsection

