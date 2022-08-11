<x-frontend.layout.master>

<x-slot:title>
    Gadget store
</x-slot:title>

<main class="main home mt-lg-0 mt-4">
            <div class="page-content">
                <section class="intro-section container">
                    <div class="row grid">
                        <div class="grid-item col-lg-8 height-x2 appear-animate"
                            data-animation-options="{'name': 'fadeInRightShorter'}">
                            <div class="intro-slider animation-slider owl-carousel owl-theme owl-dot-inner row cols-1 gutter-no"
                                data-owl-options="{
                                    'items': 1,
                                    'loop': true,
                                    'autoplay': false,
                                    'margin': 1
                                }">
                                <div class="intro-slide1 banner banner-fixed" style="background-color: #f5f6f8">
                                    <figure>
                                        <img src="{{asset('ui/frontend')}}/images/demos/demo27/slides/1.jpg" alt="banner" width="785"
                                            height="433" />
                                    </figure>
                                    <div class="banner-content y-50">
                                        <h4 class="banner-subtitle mb-0">Over 200 Products
                                            with discounts</h4>
                                        <h3 class="banner-title text-uppercase">Camera Sale
                                        </h3>
                                        <p class="banner-price text-uppercase mb-5">starting at
                                            <span><sup>$</sup>299.<sup>99</sup></span></p>
                                        <a href="/product"
                                            class="btn btn-outline btn-white btn-md mb-2 btn-rounded">Shop
                                            now</a>
                                    </div>
                                </div>
                                <div class="intro-slide2 banner banner-fixed" style="background-color: #f5f6f8">
                                    <figure>
                                        <img src="{{asset('ui/frontend')}}/images/demos/demo27/slides/1-1.jpg" alt="banner" width="785"
                                            height="433" />
                                    </figure>
                                    <div class="banner-content w-100 x-50 text-center">
                                        <h3 class="banner-title ls-m">iPhone X.</h3>
                                        <h4 class="banner-subtitle mb-5 font-weight-normal text-body">Find the best
                                            super powerful for you!</h4>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="grid-item col-lg-4 col-sm-6 height-x2 appear-animate"
                            data-animation-options="{'name': 'fadeInDownShorter'}">
                            <div class="intro-banner1 banner banner-fixed">
                                <a href="#">
                                    <figure>
                                        <img src="{{asset('ui/frontend')}}/images/demos/demo27/banner/2.jpg" alt="banner" width="385"
                                            height="433" />
                                    </figure>
                                </a>
                                <div class="banner-content w-100 x-50 text-center">
                                    <h4 class="banner-subtitle mb-3">Trade-in your phone
                                        for up to $30</h4>
                                    <h3 class="banner-title mb-0 font-weight-bold">New Galaxy S9</h3>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item col-sm-6 height-x1 appear-animate"
                            data-animation-options="{'name': 'fadeInUpShorter'}">
                            <div class="intro-banner2 banner banner-fixed overlay-light">
                                <figure>
                                    <img src="{{asset('ui/frontend')}}/images/demos/demo27/banner/3.jpg" alt="banner" width="585" height="213" />
                                </figure>
                                <div class="banner-content w-100 y-50">
                                    <h3 class="banner-title mb-2 ls-m text-uppercase">Nikon 850<span
                                            class="d-block text-normal">Launch Party</span></h3>
                                    <h4 class="banner-subtitle font-secondary">Free Event</h4>
                                    <div class="banner-price-info ls-m font-weight-semi-bold text-dark"><ins
                                            class="mr-2">$299.99</ins><del>$400.99</del></div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item col-sm-6 height-x1 appear-animate"
                            data-animation-options="{'name': 'fadeInLeftShorter'}">
                            <div class="intro-banner3 banner banner-fixed overlay-dark">
                                <figure>
                                    <img src="{{asset('ui/frontend')}}/images/demos/demo27/banner/4.jpg" alt="banner" width="585" height="213" />
                                </figure>
                                <div class="banner-content w-100 y-50">
                                    <h4 class="banner-subtitle mb-1 text-white">New Arrivals</h4>
                                    <h3 class="banner-title ls-m text-white">Airpod Collection</h3>
                                    <p class="font-weight-semi-bold text-white ls-m">Wireless, Effortiess, Magical
                                    </p>
                                    <h4 class="banner-desc text-white mb-0">Discount <span class="text-secondary">20%
                                            Off</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="grid-space col-1"></div>
                    </div>
                </section>
                <section class="product-wrapper container mt-10 pt-3 appear-animate"
                    data-animation-options="{'delay': '.3s'}">
                    <div class="title-wrapper">
                        <h2 class="title mr-md-4 mt-1 mb-1">Today’s Best Deals</h2>
                        <div class="countdown-container d-flex align-items-center font-weight-normal text-white">
                            <label>Ends In:</label>
                            <span class="countdown countdown-compact" data-format="DHMS" data-until="2021, 8, 22"
                                data-compact="true">00:00:00
                            </span>
                        </div>
                        <a href="/product" class="btn btn-link">View more<i class="d-icon-arrow-right"></i></a>
                    </div>
                    <div class="product-grid">
                        <div class="grid grid-float row gutter-no">
                            <div class="grid-item col-lg-3 col-sm-6 height-x3">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="/product">
                                            <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/1.jpg" alt="product" width="318"
                                                height="358">
                                        </a>
                                        <div class="product-label-group">
                                            <label class="product-label label-sale">25% off</label>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="/product">Electronic Waffle Iron</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item col-lg-3 col-sm-6 height-x1">
                                <div class="product product-list-sm">
                                    <figure class="product-media">
                                        <a href="/product">
                                            <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/2.jpg" alt="product" width="133"
                                                height="149">
                                        </a>
                                    </figure>
                                    <div class="product-label-group">
                                        <label class="product-label label-sale">25% off</label>
                                    </div>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="/product">Virtual Enviroment Glasses</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item col-lg-3 col-sm-6 height-x1">
                                <div class="product product-list-sm">
                                    <figure class="product-media">
                                        <a href="/product">
                                            <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/3.jpg" alt="product" width="133"
                                                height="149">
                                        </a>
                                    </figure>
                                    <div class="product-label-group">
                                        <label class="product-label label-sale">25% off</label>
                                    </div>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="/product">Tea Maker</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item col-lg-3 col-sm-6 height-x1">
                                <div class="product product-list-sm">
                                    <figure class="product-media">
                                        <a href="/product">
                                            <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/4.jpg" alt="product" width="133"
                                                height="149">
                                        </a>
                                    </figure>
                                    <div class="product-label-group">
                                        <label class="product-label label-sale">25% off</label>
                                    </div>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="/product">Apple Sports Watch</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item col-lg-3 col-sm-6 height-x1">
                                <div class="product product-list-sm">
                                    <figure class="product-media">
                                        <a href="/product">
                                            <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/5.jpg" alt="product" width="133"
                                                height="149">
                                        </a>
                                    </figure>
                                    <div class="product-label-group">
                                        <label class="product-label label-sale">25% off</label>
                                    </div>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="/product">FTPS Coffee Maker</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item col-lg-3 col-sm-6 height-x1">
                                <div class="product product-list-sm">
                                    <figure class="product-media">
                                        <a href="/product">
                                            <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/6.jpg" alt="product" width="133"
                                                height="149">
                                        </a>
                                    </figure>
                                    <div class="product-label-group">
                                        <label class="product-label label-sale">25% off</label>
                                    </div>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="/product">Sports Watch</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item col-lg-3 col-sm-6 height-x1">
                                <div class="product product-list-sm">
                                    <figure class="product-media">
                                        <a href="/product">
                                            <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/7.jpg" alt="product" width="133"
                                                height="149">
                                        </a>
                                    </figure>
                                    <div class="product-label-group">
                                        <label class="product-label label-sale">25% off</label>
                                    </div>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="/product">Tiny USB Camera</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item col-lg-3 col-sm-6 height-x1">
                                <div class="product product-list-sm">
                                    <figure class="product-media">
                                        <a href="/product">
                                            <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/8.jpg" alt="product" width="133"
                                                height="149">
                                        </a>
                                    </figure>
                                    <div class="product-label-group">
                                        <label class="product-label label-sale">25% off</label>
                                    </div>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="/product">Virtual Enviroment Glasses</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item col-lg-3 col-sm-6 height-x1">
                                <div class="product product-list-sm">
                                    <figure class="product-media">
                                        <a href="/product">
                                            <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/9.jpg" alt="product" width="133"
                                                height="149">
                                        </a>
                                    </figure>
                                    <div class="product-label-group">
                                        <label class="product-label label-sale">25% off</label>
                                    </div>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="/product">Tea Maker</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item col-lg-3 col-sm-6 height-x1">
                                <div class="product product-list-sm">
                                    <figure class="product-media">
                                        <a href="/product">
                                            <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/10.jpg" alt="product" width="133"
                                                height="149">
                                        </a>
                                    </figure>
                                    <div class="product-label-group">
                                        <label class="product-label label-sale">25% off</label>
                                    </div>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="/product">Apple Sports Watch</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="banner-group row gutter-no mt-10 pt-4">
                    <div class="col-lg-6">
                        <div class="banner1 banner banner-fixed" style="background-color: #1b72d3">
                            <figure>
                                <img src="{{asset('ui/frontend')}}/images/demos/demo27/banner/5.jpg" alt="banner" width="951" height="353" />
                            </figure>
                            <div class="banner-content y-50">
                                <h3 class="banner-title text-white ls-m appear-animate"
                                    data-animation-options="{'name':'blurIn', 'duration': '1.2s'}">Don’t Miss<br />Get
                                    Our Special Offer</h3>
                                <p class="appear-animate" data-animation-options="{
                                    'name': 'fadeInUpShorter',
                                    'delay': '.3s'
                                }">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nibh id
                                    elit.</p>
                                <a href="/store" class="btn btn-outline btn-white appear-animate"
                                    data-animation-options="{
                                    'name': 'fadeInUpShorter',
                                    'delay': '.5s'
                                }">Shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner2 banner banner-fixed" style="background-color: #202022">
                            <figure>
                                <img src="{{asset('ui/frontend')}}/images/demos/demo27/banner/6.jpg" alt="banner" width="951" height="353" />
                            </figure>
                            <div class="banner-content y-50">
                                <h3 class="banner-title text-white ls-m appear-animate"
                                    data-animation-options="{'name':'blurIn', 'duration': '1.2s'}">New Arrivals <span
                                        class="text-uppercase text-primary">HD8</span><br />for Education</h3>
                                <p class="appear-animate appear-animate" data-animation-options="{
                                    'name': 'fadeInUpShorter',
                                    'delay': '.3s'
                                }">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nibh id
                                    elit.</p>
                                <a href="/product" class="btn btn-primary appear-animate"
                                    data-animation-options="{
                                    'name': 'fadeInUpShorter',
                                    'delay': '.5s'
                                }">Shop now</a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="product-wrapper grey-section pb-4 pt-10 appear-animate"
                    data-animation-options="{'delay': '.3s'}">
                    <div class="container pb-10 pt-3">
                        <div class="title-wrapper with-filters align-items-center justify-content-between">
                            <h2 class="title title-simple">
                                Best Selling Products
                            </h2>
                            <ul class="nav-filters product-filters filter-underline" data-target="#products-grid">
                                <li><a href="#" class="nav-filter active" data-filter="*">All</a></li>
                                <li><a href="#" class="nav-filter" data-filter=".mobile">Mobile</a></li>
                                <li><a href="#" class="nav-filter" data-filter=".headphone">Headphone</a></li>
                                <li><a href="#" class="nav-filter" data-filter=".camera">Camera</a></li>
                                <li><a href="#" class="nav-filter" data-filter=".drone">Drone</a></li>
                                <li><a href="#" class="nav-filter" data-filter=".speaker">Speaker</a></li>
                            </ul>
                        </div>
                        <div class="grid-border">
                            <div class="row grid products-grid gutter-no" id="products-grid" data-grid-options="{
                                'layoutMode': 'fitRows',
                                'percentPosition': 'true'
                            }">
                                <div class="grid-item col-xl-5col col-lg-3 col-sm-4 col-6 speaker">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="/product">
                                                <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/11-1.jpg" alt="product"
                                                    width="256" height="288">
                                                <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/11-2.jpg"
                                                    class="product-hover-image" alt="product" width="256" height="288">
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="/product">Speaker Sets</a>
                                            </h3>
                                            <div class="product-price">
                                                <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:100%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="/product" class="rating-reviews">( 2 )</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item col-xl-5col col-lg-3 col-sm-4 col-6 camera">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="/product">
                                                <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/12-1.jpg" alt="product"
                                                    width="256" height="288">
                                                <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/12-2.jpg"
                                                    class="product-hover-image" alt="product" width="256" height="288">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to cart"><i
                                                        class="d-icon-bag"></i></a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="/product">Tiny USB Camera</a>
                                            </h3>
                                            <div class="product-price">
                                                <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:100%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="/product" class="rating-reviews">( 2 )</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item col-xl-5col col-lg-3 col-sm-4 col-6 headphone">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="/product">
                                                <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/13-1.jpg" alt="product"
                                                    width="256" height="288">
                                                <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/13-2.jpg"
                                                    class="product-hover-image" alt="product" width="256" height="288">
                                            </a>
                                            <div class="product-label-group">
                                                <label class="product-label label-sale">25% off</label>
                                            </div>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to cart"><i
                                                        class="d-icon-bag"></i></a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="/product">Bluetooth Headphone</a>
                                            </h3>
                                            <div class="product-price">
                                                <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:100%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="/product" class="rating-reviews">( 2 )</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item col-xl-5col col-lg-3 col-sm-4 col-6 mobile">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="/product">
                                                <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/14-1.jpg" alt="product"
                                                    width="256" height="288">
                                                <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/14-2.jpg"
                                                    class="product-hover-image" alt="product" width="256" height="288">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to cart"><i
                                                        class="d-icon-bag"></i></a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="/product">iPad 7</a>
                                            </h3>
                                            <div class="product-price">
                                                <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:100%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="/product" class="rating-reviews">( 2 )</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item col-xl-5col col-lg-3 col-sm-4 col-6 mobile">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="/product">
                                                <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/15-1.jpg" alt="product"
                                                    width="256" height="288">
                                                <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/15-2.jpg"
                                                    class="product-hover-image" alt="product" width="256" height="288">
                                            </a>
                                            <div class="product-label-group">
                                                <label class="product-label label-sale">25% off</label>
                                            </div>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to cart"><i
                                                        class="d-icon-bag"></i></a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="/product">XBox Gaming Pad</a>
                                            </h3>
                                            <div class="product-price">
                                                <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:100%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="/product" class="rating-reviews">( 2 )</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item col-xl-5col col-lg-3 col-sm-4 col-6 headphone">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="/product">
                                                <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/16-1.jpg" alt="product"
                                                    width="256" height="288">
                                                <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/16-2.jpg"
                                                    class="product-hover-image" alt="product" width="256" height="288">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to cart"><i
                                                        class="d-icon-bag"></i></a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="/product">Virtual 3D Glasses</a>
                                            </h3>
                                            <div class="product-price">
                                                <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:100%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="/product" class="rating-reviews">( 2 )</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item col-xl-5col col-lg-3 col-sm-4 col-6 mobile">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="/product">
                                                <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/17-1.jpg" alt="product"
                                                    width="256" height="288">
                                                <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/17-2.jpg"
                                                    class="product-hover-image" alt="product" width="256" height="288">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to cart"><i
                                                        class="d-icon-bag"></i></a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="/product">Virtual 3D Glasses</a>
                                            </h3>
                                            <div class="product-price">
                                                <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:100%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="/product" class="rating-reviews">( 2 )</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item col-xl-5col col-lg-3 col-sm-4 col-6 camera">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="/product">
                                                <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/18-1.jpg" alt="product"
                                                    width="256" height="288">
                                                <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/18-2.jpg"
                                                    class="product-hover-image" alt="product" width="256" height="288">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to cart"><i
                                                        class="d-icon-bag"></i></a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="/product">Fashion Sports Watch</a>
                                            </h3>
                                            <div class="product-price">
                                                <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:100%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="/product" class="rating-reviews">( 2 )</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item col-xl-5col col-lg-3 col-sm-4 col-6 speaker">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="/product">
                                                <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/19-1.jpg" alt="product"
                                                    width="256" height="288">
                                                <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/19-2.jpg"
                                                    class="product-hover-image" alt="product" width="256" height="288">
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to cart"><i
                                                        class="d-icon-bag"></i></a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="/product">Virtual 3D Glasses</a>
                                            </h3>
                                            <div class="product-price">
                                                <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:100%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="/product" class="rating-reviews">( 2 )</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item col-xl-5col col-lg-3 col-sm-4 col-6 speaker">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="/product">
                                                <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/20-1.jpg" alt="product"
                                                    width="256" height="288">
                                                <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/20-2.jpg"
                                                    class="product-hover-image" alt="product" width="256" height="288">
                                            </a>
                                            <div class="product-label-group">
                                                <label class="product-label label-new">new</label>
                                            </div>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to cart"><i
                                                        class="d-icon-bag"></i></a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="/product">Apple Sports Watch</a>
                                            </h3>
                                            <div class="product-price">
                                                <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:100%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="/product" class="rating-reviews">( 2 )</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="product-wrapper container mt-10 pt-1 pb-4 appear-animate"
                    data-animation-options="{'delay': '.3s'}">
                    <h2 class="title title-simple with-link">
                        Our Featured
                        <a href="/product">View more<i class="d-icon-arrow-right"></i></a>
                    </h2>
                    <div class="product-grid">
                        <div class="grid row gutter-no grid-float">
                            <div class="grid-item col-lg-3 col-sm-6 height-x3">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="/product">
                                            <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/1-1.jpg" alt="product" width="318"
                                                height="358">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                data-target="#addCartModal" title="Add to cart"><i
                                                    class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                    class="d-icon-heart"></i></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="/product">Electronic Waffle Iron</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item col-lg-3 col-sm-6 height-x1">
                                <div class="product product-list-sm">
                                    <figure class="product-media">
                                        <a href="/product">
                                            <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/2.jpg" alt="product" width="133"
                                                height="149">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="/product">Virtual 3D Glasses</a>
                                        </h3>
                                        <div class="product-price">
                                            <span class="price">$39.00</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item col-lg-3 col-sm-6 height-x1">
                                <div class="product product-list-sm">
                                    <figure class="product-media">
                                        <a href="/product">
                                            <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/3.jpg" alt="product" width="133"
                                                height="149">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="/product">FTPS Tea Maker</a>
                                        </h3>
                                        <div class="product-price">
                                            <span class="price">$39.00</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item col-lg-3 col-sm-6 height-x1">
                                <div class="product product-list-sm">
                                    <figure class="product-media">
                                        <a href="/product">
                                            <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/4.jpg" alt="product" width="133"
                                                height="149">
                                        </a>
                                        <div class="product-label-group">
                                            <label class="product-label label-sale">25% off</label>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="/product">Apple Sports Watch</a>
                                        </h3>
                                        <div class="product-price">
                                            <span class="price">$39.00</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item col-lg-3 col-sm-6 height-x1">
                                <div class="product product-list-sm">
                                    <figure class="product-media">
                                        <a href="/product">
                                            <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/5.jpg" alt="product" width="133"
                                                height="149">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="/product">FTPS Coffee Maker</a>
                                        </h3>
                                        <div class="product-price">
                                            <span class="price">$39.00</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item col-lg-3 col-sm-6 height-x1">
                                <div class="product product-list-sm">
                                    <figure class="product-media">
                                        <a href="/product">
                                            <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/6.jpg" alt="product" width="133"
                                                height="149">
                                        </a>
                                        <div class="product-label-group">
                                            <label class="product-label label-new">New</label>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="/product">Fashion Sports Watch</a>
                                        </h3>
                                        <div class="product-price">
                                            <span class="price">$39.00</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item col-lg-3 col-sm-6 height-x1">
                                <div class="product product-list-sm">
                                    <figure class="product-media">
                                        <a href="/product">
                                            <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/7.jpg" alt="product" width="133"
                                                height="149">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="/product">Tiny USB Camera</a>
                                        </h3>
                                        <div class="product-price">
                                            <span class="price">$39.00</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item col-lg-3 col-sm-6 height-x1">
                                <div class="product product-list-sm">
                                    <figure class="product-media">
                                        <a href="/product">
                                            <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/3.jpg" alt="product" width="133"
                                                height="149">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="/product">FTPS Tea Maker</a>
                                        </h3>
                                        <div class="product-price">
                                            <span class="price">$39.00</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item col-lg-3 col-sm-6 height-x1">
                                <div class="product product-list-sm">
                                    <figure class="product-media">
                                        <a href="/product">
                                            <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/4.jpg" alt="product" width="133"
                                                height="149">
                                        </a>
                                        <div class="product-label-group">
                                            <label class="product-label label-sale">25% off</label>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="/product">Apple Sports Watch</a>
                                        </h3>
                                        <div class="product-price">
                                            <span class="price">$39.00</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item col-lg-3 col-sm-6 height-x1">
                                <div class="product product-list-sm">
                                    <figure class="product-media">
                                        <a href="/product">
                                            <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/5.jpg" alt="product" width="133"
                                                height="149">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="/product">FTPS Coffee Maker</a>
                                        </h3>
                                        <div class="product-price">
                                            <span class="price">$39.00</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="banner3 banner mt-10"
                    style="background-image: url(images/demos/demo27/banner/7.jpg); background-color: #252628">
                    <div class="container">
                        <div class="banner-content d-block d-lg-flex justify-content-between align-items-center">
                            <h3 class="banner-title mb-lg-0 mr-8 ls-normal text-white text-uppercase font-weight-normal appear-animate"
                                data-animation-options="{'name':'fadeInLeft', 'delay': '.3s'}"><strong>Black</strong>
                                Friday Sale</h3>
                            <h4 class="banner-subtitle mb-lg-0 mr-8 ls-normal font-italic text-white text-uppercase font-weight-normal appear-animate"
                                data-animation-options="{'name':'blurIn'}">Only Pay for <strong>Electronics you
                                    love</strong></h4>
                            <a href="/store" class="btn btn-primary btn-rounded appear-animate"
                                data-animation-options="{'name':'fadeInRight', 'delay': '.3s'}">Shop now</a>
                        </div>
                    </div>
                </section>
                <section class="product-wrapper pt-10 pb-10 grey-section appear-animate"
                    data-animation-options="{'delay': '.3s'}">
                    <div class="container pt-3 pb-4">
                        <h2 class="title title-simple with-link">
                            Most Viewed
                            <a href="/product">View more<i class="d-icon-arrow-right"></i></a>
                        </h2>
                        <div class="owl-carousel owl-theme owl-nav-inner owl-split row cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2 bg-white"
                            data-owl-options="{
                            'items': 5,
                            'margin': 1,
                            'loop': false,
                            'nav': true,
                            'dots': false,
                            'responsive': {
                                '0': {
                                    'items': 2
                                },
                                '576': {
                                    'items': 3
                                },
                                '768': {
                                    'items': 4
                                },
                                '992': {
                                    'items': 5
                                }
                            }
                        }">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="/product">
                                        <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/11-1.jpg" alt="product" width="256"
                                            height="288">
                                        <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/11-2.jpg" class="product-hover-image"
                                            alt="product" width="256" height="288">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-name">
                                        <a href="/product">Speaker Sets</a>
                                    </h3>
                                    <div class="product-price">
                                        <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:100%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="/product" class="rating-reviews">( 2 )</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="/product">
                                        <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/13-1.jpg" alt="product" width="256"
                                            height="288">
                                        <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/13-2.jpg" class="product-hover-image"
                                            alt="product" width="256" height="288">
                                    </a>
                                    <div class="product-label-group">
                                        <label class="product-label label-sale">25% off</label>
                                    </div>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="d-icon-bag"></i></a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                            View</a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-name">
                                        <a href="/product">Bluetooth Headphone</a>
                                    </h3>
                                    <div class="product-price">
                                        <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:100%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="/product" class="rating-reviews">( 2 )</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="/product">
                                        <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/14-1.jpg" alt="product" width="256"
                                            height="288">
                                        <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/14-2.jpg" class="product-hover-image"
                                            alt="product" width="256" height="288">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="d-icon-bag"></i></a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                            View</a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-name">
                                        <a href="/product">iPad 7</a>
                                    </h3>
                                    <div class="product-price">
                                        <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:100%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="/product" class="rating-reviews">( 2 )</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="/product">
                                        <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/16-1.jpg" alt="product" width="256"
                                            height="288">
                                        <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/16-2.jpg" class="product-hover-image"
                                            alt="product" width="256" height="288">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="d-icon-bag"></i></a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                            View</a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-name">
                                        <a href="/product">Virtual 3D Glasses</a>
                                    </h3>
                                    <div class="product-price">
                                        <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:100%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="/product" class="rating-reviews">( 2 )</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="/product">
                                        <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/18-1.jpg" alt="product" width="256"
                                            height="288">
                                        <img src="{{asset('ui/frontend')}}/images/demos/demo27/products/18-2.jpg" class="product-hover-image"
                                            alt="product" width="256" height="288">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="d-icon-bag"></i></a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                            View</a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-name">
                                        <a href="/product">Fashion Sports Watch</a>
                                    </h3>
                                    <div class="product-price">
                                        <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:100%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="/product" class="rating-reviews">( 2 )</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="blog mt-10 pt-3 pb-lg-5">
                    <div class="container">
                        <h2 class="title title-simple text-left">Latest news</h2>
                        <div class="owl-carousel owl-theme row owl-nav-full cols-lg-3 cols-sm-2 cols-1 appear-animate"
                            data-animation-options="{'name': 'fadeInRightShorter', 'delay': '.1s'}" data-owl-options="{
                            'items': 2,
                            'margin': 20,
                            'dots': false,
                            'loop': false,
                            'responsive': {
                                '0': {
                                    'items': 1
                                },
                                '768': {
                                    'items': 2
                                }
                            }
                        }">
                            <div class="post post-list overlay-zoom overlay-light">
                                <figure class="post-media">
                                    <a href="post-single.html">
                                        <img src="{{asset('ui/frontend')}}/images/demos/demo27/blog/1.jpg" width="280" height="210" alt="post" />
                                    </a>
                                    <div class="post-calendar">
                                        <span class="post-day">06</span>
                                        <span class="post-month">SEP</span>
                                    </div>
                                </figure>
                                <div class="post-details">
                                    <div class="post-meta">
                                        <a href="#" class="post-author">By Casper Dalin</a> - <a href="#"
                                            class="post-date">Sep 6, 2020</a>
                                    </div>
                                    <h3 class="post-title"><a href="post-single.html">Just a cool blog post with
                                            Images</a></h3>
                                    <p class="post-content">Sed pretium, ligula sollicitudin laoreet viverra, tortor
                                        libero sodales leo,…</p>
                                    <a href="blog-classic.html"
                                        class="btn btn-outline btn-primary btn-sm btn-rounded">Read More<i
                                            class="d-icon-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="post post-list overlay-zoom overlay-light">
                                <figure class="post-media">
                                    <a href="post-single.html">
                                        <img src="{{asset('ui/frontend')}}/images/demos/demo27/blog/2.jpg" width="280" height="210" alt="post" />
                                    </a>
                                    <div class="post-calendar">
                                        <span class="post-day">06</span>
                                        <span class="post-month">SEP</span>
                                    </div>
                                </figure>
                                <div class="post-details">
                                    <div class="post-meta">
                                        <a href="#" class="post-author">By Casper Dalin</a> - <a href="#"
                                            class="post-date">Sep 6, 2020</a>
                                    </div>
                                    <h3 class="post-title"><a href="post-single.html">Just a cool blog post with
                                            Images</a></h3>
                                    <p class="post-content">Sed pretium, ligula sollicitudin laoreet viverra, tortor
                                        libero sodales leo,…</p>
                                    <a href="blog-classic.html"
                                        class="btn btn-outline btn-primary btn-sm btn-rounded">Read More<i
                                            class="d-icon-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="post post-list overlay-zoom overlay-light">
                                <figure class="post-media">
                                    <a href="post-single.html">
                                        <img src="{{asset('ui/frontend')}}/images/demos/demo27/blog/3.jpg" width="280" height="210" alt="post" />
                                    </a>
                                    <div class="post-calendar">
                                        <span class="post-day">19</span>
                                        <span class="post-month">JAN</span>
                                    </div>
                                </figure>
                                <div class="post-details">
                                    <div class="post-meta">
                                        <a href="#" class="post-author">By Casper Dalin</a> - <a href="#"
                                            class="post-date">Sep 6, 2020</a>
                                    </div>
                                    <h3 class="post-title"><a href="post-single.html">Just a cool blog post with
                                            Images</a></h3>
                                    <p class="post-content">Sed pretium, ligula sollicitudin laoreet viverra, tortor
                                        libero sodales leo,…</p>
                                    <a href="blog-classic.html"
                                        class="btn btn-outline btn-primary btn-sm btn-rounded">Read More<i
                                            class="d-icon-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="post post-list overlay-zoom overlay-light">
                                <figure class="post-media">
                                    <a href="post-single.html">
                                        <img src="{{asset('ui/frontend')}}/images/demos/demo27/blog/4.jpg" width="280" height="210" alt="post" />
                                    </a>
                                    <div class="post-calendar">
                                        <span class="post-day">19</span>
                                        <span class="post-month">JAN</span>
                                    </div>
                                </figure>
                                <div class="post-details">
                                    <div class="post-meta">
                                        <a href="#" class="post-author">By Casper Dalin</a> - <a href="#"
                                            class="post-date">Sep 6, 2020</a>
                                    </div>
                                    <h3 class="post-title"><a href="post-single.html">Just a cool blog post with
                                            Images</a></h3>
                                    <a href="blog-classic.html"
                                        class="btn btn-outline btn-primary btn-sm btn-rounded">Read More<i
                                            class="d-icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="banner banner-newsletter bg-primary">
                    <div class="container">
                        <div class="banner-content row">
                            <div class="col-lg-5 d-flex">
                                <div class="icon-box icon-box-side appear-animate"
                                    data-animation-options="{'name': 'fadeInLeftShorter'}">
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title font-weight-bold text-white">Subscribe to the
                                            newsletter</h4>
                                        <p class="text-white">Stay up to date regarding the newest product & offers</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 d-lg-block d-flex justify-content-center">
                                <form action="#" method="get"
                                    class="input-wrapper input-wrapper-inline ml-lg-auto appear-animate"
                                    data-animation-options="{'name': 'fadeInRightShorter'}">
                                    <input type="email" class="form-control font-primary font-italic form-solid"
                                        name="email" id="email" placeholder="Enter Your E-mail Address..." required="">
                                    <button class="btn btn-dark" type="submit">Subscribe<i
                                            class="d-icon-arrow-right"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </main>
    
</x-frontend.layout.master>