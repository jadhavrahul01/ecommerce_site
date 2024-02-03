@extends('admin.includes.app')
@section('title', 'Profile')
@section('content')

    <div class="row g-0 mt-4">
        @if (session('status') === 'profile-updated')
            <div class="alert alert-success border-0 d-flex align-items-center" role="alert">
                <div class="bg-success me-3 icon-item"><svg class="svg-inline--fa fa-check-circle fa-w-16 text-white fs-6"
                        aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                        </path>
                    </svg>
                </div>
                <p class="mb-0 flex-1">{{ __('Profile Saved Successfully.') }}</p><button class="btn-close" type="button"
                    data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="col-lg-8 pe-lg-2">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="mb-0">Profile Settings</h5>
                </div>
                <div class="card-body bg-light">
                    <form method="post" enctype="multipart/form-data" action="{{ route('profile.update') }}"
                        class="row g-3">
                        @csrf
                        @method('patch')
                        <div style="    display: flex;
                        gap: 20px;" class="mb-20 media">
                            <a href="javascript:void(0);" class="mr-25">
                                <img src="{{ Auth::user()->profile_img ? url('profiles/' . Auth::user()->profile_img) : url('profiles/user.jpg') }}"
                                    id="account-upload-img" class="rounded mr-50"
                                    alt="{{ Auth::user()->name }} profile image" height="80" width="80">
                            </a>
                            <div class="media-body mt-75 ml-1" style="   margin-top: 23px;">
                                <button type="button" class="btn btn-sm btn-primary mr-0 mr-sm-1 mb-1 mb-sm-0"
                                    data-toggle="modal" data-target="#addImagePopup">
                                    Change Profile Picture
                                </button>
                                @if (Auth::user()->profile_img)
                                    <a href="{{ route('profile.image.destroy') }}"
                                        onclick="confirm('are your sure you want to delete your profile picture')"
                                        class="btn btn-sm btn-danger mr-0 mr-sm-1 mb-1 mb-sm-0">
                                        Delete Profile Picture
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input name="name" type="text" class="form-control"
                                value="{{ Auth::user()->name }}" autofocus autocomplete="name" />
                            <x-input-error class="alert alert-danger mt-1 alert-validation-msg err-msg mt-2 "
                                :messages="$errors->get('name')" />
                        </div>
                        <div class="col-lg-6">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input name="email" type="email" class="form-control"
                                value="{{ Auth::user()->email }}" autofocus autocomplete="email" />
                            <x-input-error class="alert alert-danger mt-1 alert-validation-msg err-msg mt-2 "
                                :messages="$errors->get('email')" />
                        </div>
                        <div class="col-lg-6">
                            <x-input-label for="phone_no" :value="__('Phone no')" />
                            <x-text-input name="phone_no" type="text" class="form-control"
                                value="{{ Auth::user()->phone_no }}" autofocus autocomplete="phone_no" />
                            <x-input-error :messages="$errors->get('phone_no')"
                                class="alert alert-danger mt-1 alert-validation-msg err-msg mt-2 " />
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4 ps-lg-2">
            <div class="sticky-sidebar">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="mb-0">Change Password</h5>
                    </div>
                    <div class="card-body bg-light">
                        <form method="post" action="{{ route('password.update') }}">
                            @csrf
                            @method('put')
                            <div class="mb-3"><label class="form-label" for="old-password">Current Password</label>
                                <div class="input-group form-password-toggle input-group-merge">
                                    <x-text-input id="current_password" name="current_password" type="password"
                                        class="form-control" autocomplete="current-password" />
                                </div>
                                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="err-msg" />
                            </div>
                            <div class="mb-3"><label class="form-label" for="new-password">New Password</label>
                                <div class="input-group form-password-toggle input-group-merge">
                                    <x-text-input id="password" name="password" type="password" class="form-control"
                                        autocomplete="new-password" />
                                </div>
                                <x-input-error :messages="$errors->updatePassword->get('password')" class="err-msg" />
                            </div>
                            <div class="mb-3"><label class="form-label" for="confirm-password">Confirm
                                    Password</label>
                                <div class="input-group form-password-toggle input-group-merge">
                                    <x-text-input id="password_confirmation" name="password_confirmation" type="password"
                                        class="form-control" autocomplete="new-password" />
                                </div>
                                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')"class="err-msg" />
                            </div><button class="btn btn-primary d-block w-100" type="submit">Update Password </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="addImagePopup" tabindex="-1" role="dialog" aria-labelledby="addImagePopupLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addImagePopupLabel">
                        Add Image
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form" action="{{ route('profile.image.update') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class=" col-12">
                                <div class="form-group">
                                    <label for="profile_image">
                                        Profile Image
                                    </label>
                                    <div class="custom-file">
                                        <input type="file" name="profile_image" class="form-control"
                                            id="profile_image">
                                    </div>
                                    @error('profile_image')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <button type="submit" class="btn btn-primary mr-1">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    @if ($errors->any())
        <script>
            $('#addImagePopup').modal('show')
        </script>
    @endif
@endsection
