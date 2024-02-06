@extends('admin.includes.app')
@section('title', 'Website Data')
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
                                <h3 class="mb-2 mb-md-0"> Website Settings</h3>
                                <div class="breadcrumb-wrapper">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item active">Website Settings
                                        </li>
                                    </ol>
                                </div>
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
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">#No</th>
                                            <th>Setting Name</th>
                                            <th>Value</th>
                                            <th style="text-align: center;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($settings as $key => $setting)
                                            <tr style="vertical-align: middle;">
                                                <th style="text-align: center;" scope="row">
                                                    {{ $key + 1 }}</th>

                                                <td>{{ $setting->name }}</td>
                                                <td>{{ $setting->value }}</td>

                                                <td style="text-align: center;">
                                                    <a href="{{ route('admin.website-settings.edit', $setting->slug) }}"
                                                        class="btn btn-success border">

                                                        Edit
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

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
