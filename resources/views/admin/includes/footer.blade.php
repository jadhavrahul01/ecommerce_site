<div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1"
    aria-labelledby="settings-offcanvas">
    <div class="offcanvas-header settings-panel-header bg-shape">
        <div class="z-index-1 py-1 light">
            <div class="d-flex justify-content-between align-items-center mb-1">
                <h5 class="text-white mb-0 me-2"><span class="fas fa-palette me-2 fs-0"></span>Settings</h5><button
                    class="btn btn-primary btn-sm rounded-pill mt-0 mb-0" data-theme-control="reset"
                    style="font-size:12px">
                    <span class="fas fa-redo-alt me-1" data-fa-transform="shrink-3"></span>Reset</button>
            </div>
            <p class="mb-0 fs--1 text-white opacity-75"> Set your own customized style</p>
        </div><button class="btn-close btn-close-white z-index-1 mt-0" type="button" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
    </div>
    <div class="offcanvas-body scrollbar-overlay px-x1 h-100" id="themeController">
        <h5 class="fs-0">Color Scheme</h5>
        <p class="fs--1">Choose the perfect color mode for your app.</p>
        <div class="btn-group d-block w-100 btn-group-navbar-style">
            <div class="row gx-2">
                <div class="col-6"><input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio"
                        value="light" data-theme-control="theme"><label
                        class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherLight"> <span
                            class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                                src="{{ asset('admin-assets/img/generic/falcon-mode-default.jpg') }}"
                                alt=""></span><span class="label-text">Light</span></label></div>
                <div class="col-6"><input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio"
                        value="dark" data-theme-control="theme"><label
                        class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherDark"> <span
                            class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                                src="{{ asset('admin-assets/img/generic/falcon-mode-dark.jpg') }}"
                                alt=""></span><span class="label-text"> Dark</span></label></div>
            </div>
        </div>
        <hr>



        <h5 class="fs-0 d-flex align-items-center">Vertical Navbar Style</h5>

        <div class="btn-group d-block w-100 btn-group-navbar-style">
            <div class="row gx-2">
                <div class="col-6"><input class="btn-check" id="navbar-style-transparent" type="radio"
                        name="navbarStyle" value="transparent" data-theme-control="navbarStyle"><label
                        class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-transparent"> <img
                            class="img-fluid img-prototype" src="{{ url('admin-assets/img/generic/default.png') }}"
                            alt=""><span class="label-text">
                            Transparent</span></label></div>
                <div class="col-6"><input class="btn-check" id="navbar-style-inverted" type="radio"
                        name="navbarStyle" value="inverted" data-theme-control="navbarStyle"><label
                        class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-inverted"> <img
                            class="img-fluid img-prototype" src="{{ url('admin-assets/img/generic/inverted.png') }}"
                            alt=""><span class="label-text"> Inverted</span></label></div>
                <div class="col-6"><input class="btn-check" id="navbar-style-card" type="radio" name="navbarStyle"
                        value="card" data-theme-control="navbarStyle"><label
                        class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-card"> <img
                            class="img-fluid img-prototype" src="{{ url('admin-assets/img/generic/card.png') }}"
                            alt=""><span class="label-text"> Card</span></label></div>
                <div class="col-6"><input class="btn-check" id="navbar-style-vibrant" type="radio" name="navbarStyle"
                        value="vibrant" data-theme-control="navbarStyle"><label
                        class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-vibrant"> <img
                            class="img-fluid img-prototype" src="{{ url('admin-assets/img/generic/vibrant.png') }}"
                            alt=""><span class="label-text"> Vibrant</span></label></div>
            </div>
        </div>


        <hr>
        <div class="d-flex justify-content-between">
            <div class="d-flex align-items-start"><img class="me-2"
                    src="{{ asset('admin-assets/img/icons/arrows-h.svg') }}" width="20" alt="">
                <div class="flex-1">
                    <h5 class="fs-0">Fluid Layout</h5>
                    <p class="fs--1 mb-0">Toggle container layout system </p>
                </div>
            </div>
            <div class="form-check form-switch"><input class="form-check-input ms-0" id="mode-fluid"
                    type="checkbox" data-theme-control="isFluid"></div>
        </div>

    </div>
</div>

<!-- ===============================================-->
<!--    JavaScripts-->
<!-- ===============================================-->
<script src="{{ asset('admin-assets/vendors/popper/popper.min.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/anchorjs/anchor.min.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/is/is.min.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/chart/chart.min.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/leaflet/leaflet.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/leaflet.markercluster/leaflet.markercluster.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js') }}">
</script>
<script src="{{ asset('admin-assets/vendors/countup/countUp.umd.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('admin-assets/data/world.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/dayjs/dayjs.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/flatpickr.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/fontawesome/all.min.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/lodash/lodash.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/polyfill.min.js') }}?features=window.scroll"></script>
<script src="{{ asset('admin-assets/vendors/list.js/list.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/theme.js') }}"></script>
<script src="{{ asset('admin-assets/js/app.js') }}"></script>
<script src="{{ asset('admin-assets/js/app-menu.js') }}"></script>
<script src="{{ asset('admin-assets/js/app-invoice-list.js') }}"></script>
<script src="{{ asset('admin-assets/js/dashboard-analytics.js') }}"></script>
