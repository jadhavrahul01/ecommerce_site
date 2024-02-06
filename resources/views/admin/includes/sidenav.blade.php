<nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" data-double-top-nav="data-double-top-nav"
    style="display: none;">

</nav>
<nav class="navbar navbar-light navbar-vertical navbar-expand-xl" style="display: none;">
    <script>
        var navbarStyle = localStorage.getItem("navbarStyle");
        if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
        }
    </script>
    <div class="d-flex align-items-center">
        <div style="margin-right: 1px;" class="toggle-icon-wrapper">
            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip"
                data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span
                        class="toggle-line"></span></span></button>
        </div>
        <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
            <div class="d-flex align-items-center py-3"><img class="me-2"
                    src="{{ asset('frontend/img/logo.png')}}" alt="" height="30">
            </div>
        </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.dashboard') }}" role="button">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-chart-pie"></span></span><span
                                class="nav-link-text ps-1">Dashboard</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.profile') }}" role="button">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-sun"></span></span><span
                                class="nav-link-text ps-1">Account Settings</span>
                        </div>
                    </a>
                </li>


                <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Testimonial</div>
                    <div class="col ps-0">
                        <hr class="mb-0 navbar-vertical-divider">
                    </div>
                </div>
                <li class="nav-item  ">
                    <a class="nav-link" href="{{ route('admin.testimonial.index') }}" role="button">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-comments"></span></span><span
                                class="nav-link-text ps-1">Testimonial</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link" href=" {{ route('admin.testimonial.create') }}" role="button">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-plus"></span></span><span class="nav-link-text ps-1">Add
                                Testimonial</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item dropdown"><a class="nav-link " href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="apps">Products</a>
                <li class="nav-item  ">
                    <a class="nav-link" href=" {{ route('admin.product.index') }}" role="button" >
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="far fa-list-alt"></span></span><span class="nav-link-text ps-1"> All Product</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link" href=" {{ route('admin.product.create') }}" role="button" >
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-comments"></span></span><span class="nav-link-text ps-1"> Add Product</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link" href=" {{ route('admin.product.addcategory') }}" role="button" >
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="far fa-plus-square"></span></span><span class="nav-link-text ps-1">Add Category</span>
                        </div>
                    </a>
                </li>

            
                <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Forms</div>
                    <div class="col ps-0">
                        <hr class="mb-0 navbar-vertical-divider">
                    </div>
                </div>

                <li class="nav-item  ">
                    <a class="nav-link" href="{{ route('admin.message.index') }}" role="button">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-user"></span></span><span class="nav-link-text ps-1">Contact
                                Form</span>
                        </div>
                    </a>
                </li>

                <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Integrations</div>
                    <div class="col ps-0">
                        <hr class="mb-0 navbar-vertical-divider">
                    </div>
                </div>
                <li class="nav-item  ">
                    <a class="nav-link" href="{{ route('admin.website-settings.index') }} " role="button">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-wrench"></span></span><span class="nav-link-text ps-1">Website
                                settings</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" style="display: none;">
    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
        data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard"
        aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                class="toggle-line"></span></span></button>
    <a class="navbar-brand me-1 me-sm-3" href="../index.html">
        <div class="d-flex align-items-center"><img class="me-2"
                src="{{ asset('frontend/img/logo.png')}}" alt="" width="40"> </div>
    </a>
    <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
        <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    id="dashboards">Dashboard</a>
            </li>

        </ul>
    </div>
    <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
    </ul>
</nav>
