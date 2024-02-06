@extends('admin.includes.app')
@section('title', 'Contact Form')
@section('content')


    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="flex-between-center row">
                            <div class="col-md">
                                <h3 class="mb-2 mb-md-0">Contact Form</h3>
                                <div class="breadcrumb-wrapper">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item active">Contact Form
                                        </li>
                                    </ol>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <form action="{{ route('admin.message.export') }}" method="post">
                                    <div class="row">
                                        @csrf
                                        <div class="col-sm-4 ">
                                            <input class=" form-control" type="date" name="start_date" id="">
                                            @error('start_date')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-sm-4 ">
                                            <input class=" form-control" type="date" name="end_date" id="">
                                            @error('end_date')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                        <div  class="col-sm-2">
                                            <button class="btn btn-primary mr-1">Export </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body mt-3">
                <div class="row" id="table-striped">
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-inbox table-hover text-nowrap">
                                    @if ($forms->isNotEmpty())
                                        <thead>
                                            <tr>
                                                <th>#No</th>
                                                 <th>Name</th>
                                                 <th>Email</th>
                                                <th>Phone no</th>
                                                <th>Date</th>
                                                <th>Message</th>

                                                <th class="text-center">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($forms as $key => $fm)
                                                @csrf
                                                @method('put')
                                                <a href="javascript:void(0);">
                                                    <tr class="emailForm">
                                                        <th style="text-align: left;" scope="row">
                                                            {{ $key + 1 }}</th>
                                                        <td class="view-message dont-show font-weight-semibold">
                                                            <a href="javascript:void(0);">
                                                                {{ $fm->name }}
                                                            </a>
                                                        </td>
                                                        <td class="view-message dont-show font-weight-semibold">
                                                            <a href="javascript:void(0);">
                                                                {{ $fm->email }}
                                                            </a>
                                                        </td>
                                                        <td class="view-message dont-show font-weight-semibold">
                                                            <a href="javascript:void(0);">
                                                                {{ $fm->phone }}
                                                            </a>
                                                        </td>
                                                        <td class="view-message dont-show font-weight-semibold">
                                                            <a href="javascript:void(0);">
                                                                {{ $fm->created_at->format('d M-Y') }}
                                                            </a>
                                                        </td>
                                                        <td class="view-message dont-show font-weight-semibold">
                                                            <a href="javascript:void(0);">
                                                                {{ $fm->message }}
                                                            </a>
                                                        </td>

                                                        <td colspan="1">
                                                            <a href="{{ route('admin.message.destroy', $fm->id) }}"
                                                                class="btn btn-danger"
                                                                onclick="return confirm('Are you sure?');">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor" class="bi bi-trash"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                                    <path
                                                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                                                </svg>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </a>
                                            @endforeach
                                         @else
                                            <tr>
                                                <td class="text-center" colspan="5">
                                                    No messages found!
                                                </td>
                                            </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{ $forms->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

