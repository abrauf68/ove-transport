<div class="topbar">
    <div class="container-xl d-flex justify-content-between align-items-center flex-wrap">
        <div class="topbar-left d-flex align-items-center gap-3">
            <a href="{{ route('frontend.about') }}" class="topbar-link">About</a>
            <a href="{{ route('frontend.contact') }}" class="topbar-link">Contact</a>
            <a href="{{ route('frontend.pricing') }}" class="topbar-link">Pricing</a>
        </div>
        <div class="topbar-center">
            <div class="ticker-wrapper">
                <div class="ticker-content">
                    <p>
                        {{ \App\Helpers\Helper::getCompanyName() }} has
                        <span style="color: #029046;">safely shipped 1,000,000+ vehicles</span>
                        to all 50 states. Read our
                        <span style="color: #00a1ef;">100,000+ online reviews </span>
                        to hear more about our
                        <span style="color: #00a1ef;">5-star customer service</span>.
                    </p>
                    <p>
                        {{ \App\Helpers\Helper::getCompanyName() }} has
                        <span style="color: #029046;">safely shipped 1,000,000+ vehicles</span>
                        to all 50 states. Read our
                        <span style="color: #00a1ef;">100,000+ online reviews </span>
                        to hear more about our
                        <span style="color: #00a1ef;">5-star customer service</span>.
                    </p>
                </div>
            </div>
        </div>

        <div class="topbar-right">
            <a href="tel:{{ \App\Helpers\Helper::getCompanyPhone() }}" class="topbar-phone">
                <i class="fas fa-phone-alt me-1"></i> {{ \App\Helpers\Helper::getCompanyPhone() }}
            </a>
        </div>
    </div>
</div>

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid position-relative d-flex align-items-center">

        <a href="{{ route('frontend.home') }}" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img class="header-image" src="{{ asset(\App\Helpers\Helper::getLogoLight()) }}" alt="">
            {{-- {!! \App\Helpers\Helper::optimizeImage('{{ \App\Helpers\Helper::getLogoLight() }}', 'Logo', 'header-image') !!} --}}
            {{-- <h1 class="sitename">{{ \App\Helpers\Helper::getCompanyName() }}</h1> --}}
        </a>

        <nav id="navmenu" class="navmenu">
            <ul class="desktop-menu">
                <li class="dropdown">
                    <a href="#">
                        <span>HOW IT WORKS</span> <i class="fas fa-chevron-down toggle-dropdown"></i>
                    </a>
                    <div class="dropdown-menu">
                        @if (count(\App\Helpers\Helper::getHowItWorks()) > 0)
                            @php
                                $howItWorkChunks = \App\Helpers\Helper::getHowItWorks()->chunk(7); // Split services into groups of 7
                            @endphp
                            @foreach ($howItWorkChunks as $howItWorkchunk)
                                <div class="dropdown-column">
                                    @foreach ($howItWorkchunk as $howItWork)
                                        <div class="menu-item">
                                            <a href="{{ route('frontend.howItWorks', $howItWork->slug) }}">
                                                <div class="menu-link">
                                                    <span class="item-name">{{ $howItWork->name }}</span>
                                                    <span class="item-meta">{{ $howItWork->meta_title }}</span>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        @endif
                    </div>
                </li>
                @if (count(\App\Helpers\Helper::getServiceCategories()) > 0)
                    @foreach (\App\Helpers\Helper::getServiceCategories() as $index => $category)
                        <li class="dropdown">
                            <a href="#">
                                <span>{{ strtoupper($category->name) }}</span> <i
                                    class="fas fa-chevron-down toggle-dropdown"></i>
                            </a>

                            <div class="dropdown-menu"
                                style="width: 730px; {{ $index == 0 ? 'left: 0 !important;' : 'right: 0 !important;' }}">
                                @if (isset($category->ServiceSubCategories) && count($category->ServiceSubCategories) > 0)
                                    @foreach ($category->ServiceSubCategories as $subcategory)
                                        @php
                                            $servicesChunks = $subcategory->companyServices->chunk(7); // Split services into groups of 7
                                        @endphp

                                        @foreach ($servicesChunks as $chunk)
                                            <div class="dropdown-column">
                                                <h4>{{ strtoupper($subcategory->name) }}</h4>

                                                @foreach ($chunk as $service)
                                                    <div class="menu-item">
                                                        <a href="{{ route('frontend.services', $service->slug) }}">
                                                            <div class="menu-link">
                                                                <span class="item-name">{{ $service->name }}</span>
                                                                <span
                                                                    class="item-meta">{{ $service->meta_title }}</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endforeach
                                    @endforeach
                                @endif
                            </div>
                        </li>
                    @endforeach
                @endif
                <li class="dropdown">
                    <a href="#">
                        <span>WHY CAR CARRIAGE</span> <i class="fas fa-chevron-down toggle-dropdown"></i>
                    </a>

                    <div class="dropdown-menu">
                        @if (count(\App\Helpers\Helper::getCompanyInfoCategories()) > 0)
                            @foreach (\App\Helpers\Helper::getCompanyInfoCategories() as $companyInfoCategory)
                                @php
                                    $companyInfoChunks = $companyInfoCategory->companyInfo->chunk(7); // Split services into groups of 7
                                @endphp

                                @foreach ($companyInfoChunks as $companyInfoChunk)
                                    <div class="dropdown-column">
                                        <h4>{{ strtoupper($companyInfoCategory->name) }}</h4>

                                        @foreach ($companyInfoChunk as $companyInfo)
                                            <div class="menu-item">
                                                <a href="{{ route('frontend.whyUs', $companyInfo->slug) }}">
                                                    <div class="menu-link">
                                                        <span class="item-name">{{ $companyInfo->name }}</span>
                                                        <span class="item-meta">{{ $companyInfo->meta_title }}</span>
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                            @endforeach
                        @endif
                    </div>
                </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none fas fa-bars"></i>
        </nav>

        <a class="btn-getstarted" style="font-size: 12px; white-space: nowrap;"
            href="{{ route('frontend.get-a-quote') }}">Get a Free Quote</a>

    </div>
</header>

<!-- Mobile Sidebar -->
<div class="mobile-sidebar d-xl-none" id="mobileSidebar">
    <div class="sidebar-header d-flex justify-content-between align-items-center mb-4">
        {{-- {!! \App\Helpers\Helper::optimizeImage('{{ \App\Helpers\Helper::getLogoDark() }}', 'Logo', 'sidebar-logo') !!} --}}
        <img src="{{ asset(\App\Helpers\Helper::getLogoDark()) }}" alt="Logo" class="sidebar-logo">
        <button id="closeSidebar" class="btn-close"></button>
    </div>
    <ul class="mobile-menu list-unstyled">
        <li class="has-dropdown">
            <a href="#">HOW IT WORKS <i class="fas fa-chevron-down float-end"></i></a>
            <ul class="submenu list-unstyled">
                @foreach (\App\Helpers\Helper::getHowItWorks() as $item)
                    <li><a href="{{ route('frontend.howItWorks', $item->slug) }}">{{ $item->name }}</a></li>
                @endforeach
            </ul>
        </li>
        @if (count(\App\Helpers\Helper::getServiceCategories()) > 0)
            @foreach (\App\Helpers\Helper::getServiceCategories() as $index => $category)
                <li class="has-dropdown">
                    <a href="#">{{ strtoupper($category->name) }} <i
                            class="fas fa-chevron-down float-end"></i></a>
                    <ul class="submenu list-unstyled">
                        @if (isset($category->ServiceSubCategories) && count($category->ServiceSubCategories) > 0)
                            @foreach ($category->ServiceSubCategories as $subcategory)
                                <h6>{{ strtoupper($subcategory->name) }}</h6>
                                @foreach ($subcategory->companyServices as $service)
                                    <li>
                                        <a href="{{ route('frontend.services', $service->slug) }}">{{ $service->name }}</a>
                                    </li>
                                @endforeach
                            @endforeach
                        @endif
                    </ul>
                </li>
            @endforeach
        @endif
        <li class="has-dropdown">
            <a href="#">WHY CAR CARRIAGE <i class="fas fa-chevron-down float-end"></i></a>
            <ul class="submenu list-unstyled">
                @if (count(\App\Helpers\Helper::getCompanyInfoCategories()) > 0)
                    @foreach (\App\Helpers\Helper::getCompanyInfoCategories() as $companyInfoCategory)
                        <h6>{{ strtoupper($companyInfoCategory->name) }}</h6>
                        @foreach ($companyInfoCategory->companyInfo as $companyInfo)
                            <a href="{{ route('frontend.whyUs', $companyInfo->slug) }}">{{ $companyInfo->name }}</a>
                        @endforeach
                    @endforeach
                @endif
            </ul>
        </li>
    </ul>

    <div class="text-center my-3">
        <a href="{{ route('frontend.get-a-quote') }}" class="btn btn-primary w-100 mb-2">Get an Instant Free Quote</a>
        {{-- <a href="#" class="btn btn-outline-primary w-100">Check My Order</a> --}}
    </div>

    <div class="text-center text-primary fw-bold fs-5 mt-4 mb-2">
        {{ \App\Helpers\Helper::getCompanyPhone() }}
    </div>

    <ul class="list-unstyled text-center small">
        <li><a style="color: inherit;" href="{{ route('frontend.about') }}">ABOUT US</a></li>
        <li><a style="color: inherit;" href="{{ route('frontend.contact') }}">CONTACT US</a></li>
        <li><a style="color: inherit;" href="{{ route('frontend.pricing') }}">PRICING & PACKAGES</a></li>
    </ul>
</div>

<div class="sidebar-backdrop d-xl-none" id="sidebarBackdrop"></div>
