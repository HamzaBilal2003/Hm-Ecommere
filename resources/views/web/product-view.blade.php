@extends('layout.main')
@section('content')
       <div class="container">
            <div class="empty-space col-xs-b15 col-sm-b30"></div>
            <div class="breadcrumbs">
                <a href="#">home</a>
                <a href="#">accessories</a>
                <a href="#">gadgets</a>
                <a href="#">sport gadgets</a>
            </div>
            <div class="empty-space col-xs-b15 col-sm-b50 col-md-b100"></div>
            <div class="row">
                <div class="col-md-9 col-md-push-3">
                    <div class="row">
                        <div class="col-sm-6 col-xs-b30 col-sm-b0">
                            
                            <div class="main-product-slider-wrapper swipers-couple-wrapper">
                                <div class="swiper-container swiper-control-top">
                                   <div class="swiper-button-prev hidden"></div>
                                   <div class="swiper-button-next hidden"></div>
                                   <div class="swiper-wrapper">
                                       <div class="swiper-slide">
                                            <div class="swiper-lazy-preloader"></div>
                                            <div class="product-big-preview-entry swiper-lazy" data-background="{{asset("assets/img/product-preview-4.jpg")}}"></div>
                                       </div>
                                       <div class="swiper-slide">
                                            <div class="swiper-lazy-preloader"></div>
                                            <div class="product-big-preview-entry swiper-lazy" data-background="{{asset("assets/img/product-preview-5.jpg")}}"></div>
                                       </div>
                                       <div class="swiper-slide">
                                            <div class="swiper-lazy-preloader"></div>
                                            <div class="product-big-preview-entry swiper-lazy" data-background="{{asset("assets/img/product-preview-6.jpg")}}"></div>
                                       </div>
                                       <div class="swiper-slide">
                                            <div class="swiper-lazy-preloader"></div>
                                            <div class="product-big-preview-entry swiper-lazy" data-background="{{asset("assets/img/product-preview-7.jpg")}}"></div>
                                       </div>
                                       <div class="swiper-slide">
                                            <div class="swiper-lazy-preloader"></div>
                                            <div class="product-big-preview-entry swiper-lazy" data-background="{{asset("assets/img/product-preview-8.jpg")}}"></div>
                                       </div>
                                       <div class="swiper-slide">
                                            <div class="swiper-lazy-preloader"></div>
                                            <div class="product-big-preview-entry swiper-lazy" data-background="{{asset("assets/img/product-preview-9.jpg")}}"></div>
                                       </div>
                                       <div class="swiper-slide">
                                            <div class="swiper-lazy-preloader"></div>
                                            <div class="product-big-preview-entry swiper-lazy" data-background="{{asset("assets/img/product-preview-10.jpg")}}"></div>
                                       </div>
                                   </div>
                                </div>

                                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                                <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="4" data-slides-per-view="5" data-center="1" data-click="1">
                                   <div class="swiper-button-prev hidden"></div>
                                   <div class="swiper-button-next hidden"></div>
                                   <div class="swiper-wrapper">
                                       <div class="swiper-slide">
                                            <div class="product-small-preview-entry">
                                                <img src="{{ asset('assets/img/product-preview-4_.jpg') }}" alt="" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-small-preview-entry">
                                                <img src="{{ asset('assets/img/product-preview-5_.jpg') }}" alt="" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-small-preview-entry">
                                                <img src="{{ asset('assets/img/product-preview-6_.jpg') }}" alt="" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-small-preview-entry">
                                                <img src="{{ asset('assets/img/product-preview-7_.jpg') }}" alt="" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-small-preview-entry">
                                                <img src="{{ asset('assets/img/product-preview-8_.jpg') }}" alt="" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-small-preview-entry">
                                                <img src="{{ asset('assets/img/product-preview-9_.jpg') }}" alt="" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-small-preview-entry">
                                                <img src="{{ asset('assets/img/product-preview-10_.jpg') }}" alt="" />
                                            </div>
                                       </div>

                                   </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6">
                            <div class="simple-article size-3 grey col-xs-b5">SMART WATCHES</div>
                            <div class="h3 col-xs-b25">watch 42mm smartwatch</div>
                            <div class="row col-xs-b25">
                                <div class="col-sm-6">
                                    <div class="simple-article size-5 grey">PRICE: <span class="color">$225.00</span></div>        
                                </div>
                                <div class="col-sm-6 col-sm-text-right">
                                    <div class="rate-wrapper align-inline">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="simple-article size-2 align-inline">128 Reviews</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">127-#5238</span></div>
                                </div>
                                <div class="col-sm-6 col-sm-text-right">
                                    <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">YES</span></div>
                                </div>
                            </div>
                            <div class="simple-article size-3 col-xs-b30">Vivamus in tempor eros. Phasellus rhoncus in nunc sit amet mattis. Integer in ipsum vestibulum, molestie arcu ac, efficitur tellus. Phasellus id vulputate erat.</div>
                            <div class="row col-xs-b40">
                                <div class="col-sm-3">
                                    <div class="h6 detail-data-title size-1">size:</div>
                                </div>
                                <div class="col-sm-9">
                                    <select class="SlectBox">
                                        <option disabled="disabled" selected="selected">Choose size</option>
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row col-xs-b40">
                                <div class="col-sm-3">
                                    <div class="h6 detail-data-title">color:</div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="color-selection size-1">
                                        <div class="entry active" style="color: #a7f050;"></div>
                                        <div class="entry" style="color: #50e3f0;"></div>
                                        <div class="entry" style="color: #eee;"></div>
                                        <div class="entry" style="color: #4d900c;"></div>
                                        <div class="entry" style="color: #edb82c;"></div>
                                        <div class="entry" style="color: #7d3f99;"></div>
                                        <div class="entry" style="color: #3481c7;"></div>
                                        <div class="entry" style="color: #bf584b;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row col-xs-b40">
                                <div class="col-sm-3">
                                    <div class="h6 detail-data-title size-1">quantity:</div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="quantity-select">
                                        <span class="minus"></span>
                                        <span class="number">1</span>
                                        <span class="plus"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row m5 col-xs-b40">
                                <div class="col-sm-6 col-xs-b10 col-sm-b0">
                                    <a class="button size-2 style-2 block" href="#">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="{{ asset('assets/img/icon-2.png') }}" alt=""></span>
                                            <span class="text">add to cart</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    <a class="button size-2 style-1 block noshadow" href="#">
                                    <span class="button-wrapper">
                                        <span class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                                        <span class="text">add to favourites</span>
                                    </span>
                                </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="h6 detail-data-title size-2">share:</div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="follow light">
                                        <a class="entry" href="#"><i class="fa fa-facebook"></i></a>
                                        <a class="entry" href="#"><i class="fa fa-twitter"></i></a>
                                        <a class="entry" href="#"><i class="fa fa-linkedin"></i></a>
                                        <a class="entry" href="#"><i class="fa fa-google-plus"></i></a>
                                        <a class="entry" href="#"><i class="fa fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="empty-space col-xs-b35 col-md-b70"></div>

                    <div class="tabs-block">
                        <div class="tabulation-menu-wrapper text-center">
                            <div class="tabulation-title simple-input">description</div>
                            <ul class="tabulation-toggle">
                                <li><a class="tab-menu active">description</a></li>
                                <li><a class="tab-menu">technical specs</a></li>
                                <li><a class="tab-menu">testimonials</a></li>
                            </ul>
                        </div>
                        <div class="empty-space col-xs-b30 col-sm-b60"></div>

                        <div class="tab-entry visible">
                            <div class="row">
                                <div class="col-sm-6 col-xs-b30 col-sm-b0">
                                    <div class="simple-article">
                                        <img class="rounded-image" src="{{ asset('assets/img/thumbnail-15.jpg') }}" alt="" />
                                    </div>
                                    <div class="empty-space col-xs-b25"></div>
                                    <div class="h5">Nullam et massa nulla</div>
                                    <div class="empty-space col-xs-b20"></div>
                                    <div class="simple-article size-2">Sed sodales sed orci molestie tristique. Nunc dictum, erat id molestie vestibulum, ex leo vestibulum justo, luctus tempor erat sem quis diam. Lorem ipsum dolor sit amet.</div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="simple-article">
                                        <img class="rounded-image" src="{{ asset('assets/img/thumbnail-16.jpg') }}" alt="" />
                                    </div>
                                    <div class="empty-space col-xs-b25"></div>
                                    <div class="h5">Vivamus ut posuere nunc</div>
                                    <div class="empty-space col-xs-b20"></div>
                                    <div class="simple-article size-2">Sed sodales sed orci molestie tristique. Nunc dictum, erat id molestie vestibulum, ex leo vestibulum justo, luctus tempor erat sem quis diam. Lorem ipsum dolor sit amet.</div>
                                </div>
                            </div>

                            <div class="empty-space col-xs-b35 col-md-b70"></div>

                            <div class="left-right-entry clearfix align-right">
                                <div class="preview-wrapper">
                                    <img class="preview" src="{{ asset('assets/img/thumbnail-17.jpg') }}" alt="" />
                                </div>
                                <div class="description">
                                    <div class="h5">Aenean a tincidunt felis</div>
                                    <div class="empty-space col-xs-b15"></div>
                                    <div class="simple-article size-2">Sed sodales sed orci molestie tristique. Nunc dictum, erat id molestie vestibulum, ex leo vestibulum justo, luctus tempor erat sem quis diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur vulputate elit.</div>
                                    <div class="empty-space col-xs-b30 col-sm-b45"></div>
                                    <div class="h5">Nulla sed arcu ipsum</div>
                                    <div class="empty-space col-xs-b15"></div>
                                    <div class="simple-article size-2">Nullam et massa nulla. Quisque nec magna ornare tellus consequat lacinia a quis sem. Vivamus ut posuere nunc. Praesent porttitor vitae augue in semper. Vestibulum non leo et nisi facilisis consequat. Ut volutpat augue faucibus, fermentum turpis convallis, lobortis augue.</div>
                                </div>
                            </div>

                            <div class="empty-space col-xs-b35 col-md-b70"></div>

                            <div class="left-right-entry clearfix">
                                <div class="preview-wrapper">
                                    <img class="preview" src="{{ asset('assets/img/thumbnail-18.jpg') }}" alt="" />
                                </div>
                                <div class="description">
                                    <div class="h5">Aenean a tincidunt felis</div>
                                    <div class="empty-space col-xs-b15"></div>
                                    <div class="simple-article size-2">Sed sodales sed orci molestie tristique. Nunc dictum, erat id molestie vestibulum, ex leo vestibulum justo, luctus tempor erat sem quis diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur vulputate elit.</div>
                                    <div class="empty-space col-xs-b30 col-sm-b45"></div>
                                    <div class="h5">Nulla sed arcu ipsum</div>
                                    <div class="empty-space col-xs-b15"></div>
                                    <div class="simple-article size-2">Nullam et massa nulla. Quisque nec magna ornare tellus consequat lacinia a quis sem. Vivamus ut posuere nunc. Praesent porttitor vitae augue in semper. Vestibulum non leo et nisi facilisis consequat. Ut volutpat augue faucibus, fermentum turpis convallis, lobortis augue.</div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-entry">
                            <div class="h5">watch 38mm</div>
                            <div class="empty-space col-xs-b15"></div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="product-description-entry row nopadding">
                                        <div class="col-xs-6">
                                            <div class="h6">height:</div>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <div class="simple-article size-2">38.6mm</div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-sm-6">
                                    <div class="product-description-entry row nopadding">
                                        <div class="col-xs-6">
                                            <div class="h6">width:</div>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <div class="simple-article size-2">33.3mm</div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-sm-6">
                                    <div class="product-description-entry row nopadding">
                                        <div class="col-xs-6">
                                            <div class="h6">depth:</div>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <div class="simple-article size-2">10.5mm</div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-sm-6">
                                    <div class="product-description-entry row nopadding">
                                        <div class="col-xs-6">
                                            <div class="h6">case:</div>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <div class="simple-article size-2">40g</div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-sm-6">
                                    <div class="product-description-entry row nopadding">
                                        <div class="col-xs-6">
                                            <div class="h6">material:</div>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <div class="simple-article size-2">Stainless Steel</div>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                            <div class="empty-space col-xs-b30 col-sm-b60"></div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="simple-article size-2 text-center">
                                        <img src="{{ asset('assets/img/thumbnail-19.jpg') }}" alt="" />
                                        <p><br/>Stainless Steel</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="simple-article size-2 text-center">
                                        <img src="{{ asset('assets/img/thumbnail-20.jpg') }}" alt="" />
                                        <p><br/>Space Black Stainless Steel</p>
                                    </div>
                                </div>
                            </div>
                            <div class="empty-space col-xs-b30 col-sm-b60"></div>
                            <div class="h5">watch 42mm</div>
                            <div class="empty-space col-xs-b15"></div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="product-description-entry row nopadding">
                                        <div class="col-xs-6">
                                            <div class="h6">height:</div>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <div class="simple-article size-2">42.0mm</div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-sm-6">
                                    <div class="product-description-entry row nopadding">
                                        <div class="col-xs-6">
                                            <div class="h6">width:</div>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <div class="simple-article size-2">35.9mm</div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-sm-6">
                                    <div class="product-description-entry row nopadding">
                                        <div class="col-xs-6">
                                            <div class="h6">depth:</div>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <div class="simple-article size-2">10.5mm</div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-sm-6">
                                    <div class="product-description-entry row nopadding">
                                        <div class="col-xs-6">
                                            <div class="h6">case:</div>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <div class="simple-article size-2">50g</div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-sm-6">
                                    <div class="product-description-entry row nopadding">
                                        <div class="col-xs-6">
                                            <div class="h6">material:</div>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <div class="simple-article size-2">Space Black Stainless Steel</div>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                            <div class="empty-space col-xs-b30 col-sm-b60"></div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="simple-article size-2 text-center">
                                        <img src="{{ asset('assets/img/thumbnail-21.jpg') }}" alt="" />
                                        <p><br/>Stainless Steel</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="simple-article size-2 text-center">
                                        <img src="{{ asset('assets/img/thumbnail-22.jpg') }}" alt="" />
                                        <p><br/>Space Black Stainless Steel</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-entry">
                            <div class="testimonial-entry">
                                <div class="row col-xs-b20">
                                    <div class="col-xs-8">
                                        <img class="preview" src="{{ asset('assets/img/testimonial-1.jpg') }}" alt="" />
                                        <div class="heading-description">
                                            <div class="h6 col-xs-b5">Dorian gray</div>
                                            <div class="rate-wrapper align-inline">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 text-right">
                                        <div class="simple-article size-1 grey">20:45 APR 07 / 15</div>
                                    </div>
                                </div>
                                <div class="simple-article size-2 col-xs-b15">Sed sodales sed orci molestie tristique. Nunc dictum, erat id molestie vestibulum, ex leo vestibulum justo, luctus tempor erat sem quis diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur vulputate elit. </div>
                                <div class="pros">
                                    <div class="simple-article size-2 col-xs-b15">Runc dictum, erat id molestie vestibulum, ex leo vestibulum justo, luctus tempor erat sem quis</div>
                                </div>
                                <div class="cons">
                                    <div class="simple-article size-2 col-xs-b25">Do not have</div>
                                </div>
                            </div>
                            <div class="testimonial-entry">
                                <div class="row col-xs-b20">
                                    <div class="col-xs-8">
                                        <img class="preview" src="{{ asset('assets/img/testimonial-2.jpg') }}" alt="" />
                                        <div class="heading-description">
                                            <div class="h6 col-xs-b5">alan doe</div>
                                            <div class="rate-wrapper align-inline">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 text-right">
                                        <div class="simple-article size-1 grey">20:45 APR 07 / 15</div>
                                    </div>
                                </div>
                                <div class="simple-article size-2 col-xs-b15">Sed sodales sed orci molestie tristique. Nunc dictum, erat id molestie vestibulum, ex leo vestibulum justo, luctus tempor erat sem quis diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur vulputate elit. </div>
                                <div class="pros">
                                    <div class="simple-article size-2 col-xs-b15">Runc dictum, erat id molestie vestibulum, ex leo vestibulum justo, luctus tempor erat sem quis</div>
                                </div>
                                <div class="cons">
                                    <div class="simple-article size-2 col-xs-b25">Do not have</div>
                                </div>
                            </div>
                            <div class="testimonial-entry">
                                <div class="row col-xs-b20">
                                    <div class="col-xs-8">
                                        <img class="preview" src="{{ asset('assets/img/testimonial-3.jpg') }}" alt="" />
                                        <div class="heading-description">
                                            <div class="h6 col-xs-b5">samantha rae</div>
                                            <div class="rate-wrapper align-inline">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 text-right">
                                        <div class="simple-article size-1 grey">20:45 APR 07 / 15</div>
                                    </div>
                                </div>
                                <div class="simple-article size-2 col-xs-b15">Sed sodales sed orci molestie tristique. Nunc dictum, erat id molestie vestibulum, ex leo vestibulum justo, luctus tempor erat sem quis diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur vulputate elit. </div>
                                <div class="pros">
                                    <div class="simple-article size-2 col-xs-b15">Runc dictum, erat id molestie vestibulum, ex leo vestibulum justo, luctus tempor erat sem quis</div>
                                </div>
                                <div class="cons">
                                    <div class="simple-article size-2 col-xs-b25">Do not have</div>
                                </div>
                            </div>
                            <form>
                                <div class="row m10">
                                    <div class="col-sm-6">
                                        <input class="simple-input" type="text" value="" placeholder="Your name" />
                                        <div class="empty-space col-xs-b20"></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <input class="simple-input" type="text" value="" placeholder="Your name" />
                                        <div class="empty-space col-xs-b20"></div>
                                    </div>
                                    <div class="col-sm-12">
                                        <input class="simple-input" type="text" value="" placeholder="Describe the pros" />
                                        <div class="empty-space col-xs-b20"></div>
                                    </div>
                                    <div class="col-sm-12">
                                        <input class="simple-input" type="text" value="" placeholder="Describe cons" />
                                        <div class="empty-space col-xs-b20"></div>
                                    </div>
                                    <div class="col-sm-12">
                                        <textarea class="simple-input" placeholder="Your comment"></textarea>
                                        <div class="empty-space col-xs-b20"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="align-inline">
                                            <div class="empty-space col-xs-b5"></div>
                                            <div class="simple-article size-3">Rating&nbsp;&nbsp;&nbsp;</div>
                                            <div class="empty-space col-xs-b5"></div>
                                        </div>
                                        <div class="rate-wrapper set align-inline">
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <div class="button size-2 style-3">
                                            <span class="button-wrapper">
                                                <span class="icon"><img src="{{ asset('assets/img/icon-4.png') }}" alt=""></span>
                                                <span class="text">submit</span>
                                            </span>
                                            <input type="submit" value="">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="empty-space col-xs-b35 col-md-b70"></div>

                    <div class="swiper-container rounded">
                        <div class="swiper-button-prev style-1 hidden"></div>
                        <div class="swiper-button-next style-1 hidden"></div>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="banner-shortcode style-1">
                                    <div class="background" style="background-image: url({{asset("assets/img/thumbnail-14.jpg")}});"></div>
                                    <div class="description valign-middle">
                                        <div class="valign-middle-content">
                                            <div class="simple-article size-3 light fulltransparent">DON'T MISS!</div>
                                            <div class="banner-title color">UP TO 70%</div>
                                            <div class="h4 light">best android tv box</div>
                                            <div class="empty-space col-xs-b25"></div>
                                            <a class="button size-1 style-3" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="{{ asset('assets/img/icon-4.png') }}" alt=""></span>
                                                    <span class="text">learn more</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="empty-space col-xs-b60 col-sm-b0"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="banner-shortcode style-1">
                                    <div class="background" style="background-image: url({{asset("assets/img/thumbnail-10.jpg")}});"></div>
                                    <div class="description valign-middle">
                                        <div class="valign-middle-content">
                                            <div class="simple-article size-3 light fulltransparent">DON'T MISS!</div>
                                            <div class="banner-title color">UP TO 70%</div>
                                            <div class="h4 light">best android tv box</div>
                                            <div class="empty-space col-xs-b25"></div>
                                            <a class="button size-1 style-3" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="{{ asset('assets/img/icon-4.png') }}" alt=""></span>
                                                    <span class="text">learn more</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="empty-space col-xs-b60 col-sm-b0"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                    <div class="empty-space col-xs-b35 col-md-b70"></div>
                    <div class="empty-space col-md-b70"></div>

                </div>
                <div class="col-md-3 col-md-pull-9">
                    <div class="h4 col-xs-b10">popular categories</div>
                    <ul class="categories-menu transparent">
                        <li>
                            <a href="#">laptops &amp; computers</a>
                            <div class="toggle"></div>
                            <ul>
                                <li>
                                    <a href="#">laptops &amp; computers</a>
                                    <div class="toggle"></div>
                                    <ul>
                                        <li>
                                            <a href="#">laptops &amp; computers</a>
                                        </li>
                                        <li>
                                            <a href="#">video &amp; photo cameras</a>
                                        </li>
                                        <li>
                                            <a href="#">smartphones</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">video &amp; photo cameras</a>
                                    <div class="toggle"></div>
                                    <ul>
                                        <li>
                                            <a href="#">video &amp; photo cameras</a>
                                        </li>
                                        <li>
                                            <a href="#">smartphones</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">smartphones</a>
                                </li>
                                <li>
                                    <a href="#">tv &amp; audio</a>
                                </li>
                                <li>
                                    <a href="#">gadgets</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">video &amp; photo cameras</a>
                            <div class="toggle"></div>
                            <ul>
                                <li>
                                    <a href="#">laptops &amp; computers</a>
                                    <div class="toggle"></div>
                                    <ul>
                                        <li>
                                            <a href="#">laptops &amp; computers</a>
                                        </li>
                                        <li>
                                            <a href="#">video &amp; photo cameras</a>
                                        </li>
                                        <li>
                                            <a href="#">smartphones</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">video &amp; photo cameras</a>
                                    <div class="toggle"></div>
                                    <ul>
                                        <li>
                                            <a href="#">laptops &amp; computers</a>
                                        </li>
                                        <li>
                                            <a href="#">smartphones</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">smartphones</a>
                                </li>
                                <li>
                                    <a href="#">tv &amp; audio</a>
                                </li>
                                <li>
                                    <a href="#">gadgets</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">smartphones</a>
                            <div class="toggle"></div>
                            <ul>
                                <li>
                                    <a href="#">laptops &amp; computers</a>
                                    <div class="toggle"></div>
                                    <ul>
                                        <li>
                                            <a href="#">laptops &amp; computers</a>
                                        </li>
                                        <li>
                                            <a href="#">video &amp; photo cameras</a>
                                        </li>
                                        <li>
                                            <a href="#">smartphones</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">video &amp; photo cameras</a>
                                    <div class="toggle"></div>
                                    <ul>
                                        <li>
                                            <a href="#">video &amp; photo cameras</a>
                                        </li>
                                        <li>
                                            <a href="#">smartphones</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">smartphones</a>
                                </li>
                                <li>
                                    <a href="#">tv &amp; audio</a>
                                </li>
                                <li>
                                    <a href="#">gadgets</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">tv &amp; audio</a>
                            <div class="toggle"></div>
                            <ul>
                                <li>
                                    <a href="#">laptops &amp; computers</a>
                                    <div class="toggle"></div>
                                    <ul>
                                        <li>
                                            <a href="#">laptops &amp; computers</a>
                                        </li>
                                        <li>
                                            <a href="#">video &amp; photo cameras</a>
                                        </li>
                                        <li>
                                            <a href="#">smartphones</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">video &amp; photo cameras</a>
                                    <div class="toggle"></div>
                                    <ul>
                                        <li>
                                            <a href="#">video &amp; photo cameras</a>
                                        </li>
                                        <li>
                                            <a href="#">smartphones</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">smartphones</a>
                                </li>
                                <li>
                                    <a href="#">tv &amp; audio</a>
                                </li>
                                <li>
                                    <a href="#">gadgets</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">gadgets</a>
                            <div class="toggle"></div>
                            <ul>
                                <li>
                                    <a href="#">laptops &amp; computers</a>
                                    <div class="toggle"></div>
                                    <ul>
                                        <li>
                                            <a href="#">laptops &amp; computers</a>
                                        </li>
                                        <li>
                                            <a href="#">video &amp; photo cameras</a>
                                        </li>
                                        <li>
                                            <a href="#">smartphones</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">video &amp; photo cameras</a>
                                    <div class="toggle"></div>
                                    <ul>
                                        <li>
                                            <a href="#">video &amp; photo cameras</a>
                                        </li>
                                        <li>
                                            <a href="#">smartphones</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">smartphones</a>
                                </li>
                                <li>
                                    <a href="#">tv &amp; audio</a>
                                </li>
                                <li>
                                    <a href="#">gadgets</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">car electronics</a>
                            <div class="toggle"></div>
                            <ul>
                                <li>
                                    <a href="#">laptops &amp; computers</a>
                                    <div class="toggle"></div>
                                    <ul>
                                        <li>
                                            <a href="#">laptops &amp; computers</a>
                                        </li>
                                        <li>
                                            <a href="#">video &amp; photo cameras</a>
                                        </li>
                                        <li>
                                            <a href="#">smartphones</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">video &amp; photo cameras</a>
                                    <div class="toggle"></div>
                                    <ul>
                                        <li>
                                            <a href="#">video &amp; photo cameras</a>
                                        </li>
                                        <li>
                                            <a href="#">smartphones</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">smartphones</a>
                                </li>
                                <li>
                                    <a href="#">tv &amp; audio</a>
                                </li>
                                <li>
                                    <a href="#">gadgets</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">video games &amp; consoles</a>
                        </li>
                        <li>
                            <a href="#">software</a>
                        </li>
                        <li>
                            <a href="#">offeci accessories</a>
                        </li>
                        <li>
                            <a href="#">accessories</a>
                        </li>
                    </ul>

                    <div class="empty-space col-xs-b25 col-sm-b50"></div>

                    <div class="h4 col-xs-b25">Price</div>
                    <div id="prices-range"></div>
                    <div class="simple-article size-1">PRICE: <span class="grey">$<span class="min-price">40</span> - $<span class="max-price">300</span></span></div>

                    <div class="empty-space col-xs-b25 col-sm-b50"></div>

                    <div class="h4 col-xs-b25">Brands</div>
                    <label class="checkbox-entry">
                        <input type="checkbox"><span>LG</span>
                    </label>
                    <div class="empty-space col-xs-b10"></div>
                    <label class="checkbox-entry">
                        <input type="checkbox"><span>SAMSUNG</span>
                    </label>
                    <div class="empty-space col-xs-b10"></div>
                    <label class="checkbox-entry">
                        <input type="checkbox"><span>Apple</span>
                    </label>
                    <div class="empty-space col-xs-b10"></div>
                    <label class="checkbox-entry">
                        <input type="checkbox"><span>HTC</span>
                    </label>
                    <div class="empty-space col-xs-b10"></div>
                    <label class="checkbox-entry">
                        <input type="checkbox"><span>Google</span>
                    </label>

                    <div class="empty-space col-xs-b25 col-sm-b50"></div>

                    <div class="h4 col-xs-b25">Choose Color</div>
                    <div class="color-selection size-1">
                        <div class="entry active" style="color: #a7f050;"></div>
                        <div class="entry" style="color: #50e3f0;"></div>
                        <div class="entry" style="color: #eee;"></div>
                        <div class="entry" style="color: #4d900c;"></div>
                        <div class="entry" style="color: #edb82c;"></div>
                        <div class="entry" style="color: #7d3f99;"></div>
                        <div class="entry" style="color: #3481c7;"></div>
                        <div class="entry" style="color: #bf584b;"></div>
                    </div>

                    <div class="empty-space col-xs-b25 col-sm-b50"></div>

                    <div class="h4 col-xs-b25">Operation System</div>
                    <label class="checkbox-entry">
                        <input type="checkbox"><span>Android</span>
                    </label>
                    <div class="empty-space col-xs-b10"></div>
                    <label class="checkbox-entry">
                        <input type="checkbox"><span>IOS</span>
                    </label>
                    <div class="empty-space col-xs-b10"></div>
                    <label class="checkbox-entry">
                        <input type="checkbox"><span>Windows Phone</span>
                    </label>
                    <div class="empty-space col-xs-b10"></div>
                    <label class="checkbox-entry">
                        <input type="checkbox"><span>Symbian</span>
                    </label>
                    <div class="empty-space col-xs-b10"></div>
                    <label class="checkbox-entry">
                        <input type="checkbox"><span>Blackberry OS</span>
                    </label>

                    <div class="empty-space col-xs-b25 col-sm-b50"></div>

                    <div class="h4 col-xs-b25">Popular Tags</div>
                    <div class="tags light clearfix">
                        <a class="tag">headphoness</a>
                        <a class="tag">accessories</a>
                        <a class="tag">new</a>
                        <a class="tag">wireless</a>
                        <a class="tag">cables</a>
                        <a class="tag">devices</a>
                        <a class="tag">gadgets</a>
                        <a class="tag">brands</a>
                        <a class="tag">replacements</a>
                        <a class="tag">cases</a>
                        <a class="tag">cables</a>
                        <a class="tag">professional</a>
                    </div>

                    <div class="empty-space col-xs-b25 col-sm-b60"></div>


                </div>
            </div>

            <div class="swiper-container arrows-align-top" data-breakpoints="1" data-xs-slides="1" data-sm-slides="3" data-md-slides="4" data-lt-slides="4" data-slides-per-view="5">
                <div class="h4 swiper-title">accessories</div>
                <div class="empty-space col-xs-b20"></div>
                <div class="swiper-button-prev style-1"></div>
                <div class="swiper-button-next style-1"></div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="product-shortcode style-1 small">
                            <div class="title">
                                <div class="simple-article size-1 color col-xs-b5"><a href="#">ACCESSORIES</a></div>
                                <div class="h6 animate-to-green"><a href="#">usb watch charger</a></div>
                            </div>
                            <div class="preview">
                                <img src="{{ asset('assets/img/product-49.jpg') }}" alt="">
                                <div class="preview-buttons valign-middle">
                                    <div class="valign-middle-content">
                                        <a class="button size-2 style-2" href="#">
                                            <span class="button-wrapper">
                                                <span class="icon"><img src="{{ asset('assets/img/icon-1.png') }}" alt=""></span>
                                                <span class="text">Learn More</span>
                                            </span>
                                        </a>
                                        <a class="button size-2 style-3" href="#">
                                            <span class="button-wrapper">
                                                <span class="icon"><img src="{{ asset('assets/img/icon-3.png') }}" alt=""></span>
                                                <span class="text">Add To Cart</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price">
                                <div class="simple-article size-4 dark">$630.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-shortcode style-1 small">
                            <div class="title">
                                <div class="simple-article size-1 color col-xs-b5"><a href="#">ACCESSORIES</a></div>
                                <div class="h6 animate-to-green"><a href="#">usb watch charger</a></div>
                            </div>
                            <div class="preview">
                                <img src="{{ asset('assets/img/product-50.jpg') }}" alt="">
                                <div class="preview-buttons valign-middle">
                                    <div class="valign-middle-content">
                                        <a class="button size-2 style-2" href="#">
                                            <span class="button-wrapper">
                                                <span class="icon"><img src="{{ asset('assets/img/icon-1.png') }}" alt=""></span>
                                                <span class="text">Learn More</span>
                                            </span>
                                        </a>
                                        <a class="button size-2 style-3" href="#">
                                            <span class="button-wrapper">
                                                <span class="icon"><img src="{{ asset('assets/img/icon-3.png') }}" alt=""></span>
                                                <span class="text">Add To Cart</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price">
                                <div class="simple-article size-4 dark">$630.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-shortcode style-1 small">
                            <div class="title">
                                <div class="simple-article size-1 color col-xs-b5"><a href="#">ACCESSORIES</a></div>
                                <div class="h6 animate-to-green"><a href="#">usb watch charger</a></div>
                            </div>
                            <div class="preview">
                                <img src="{{ asset('assets/img/product-51.jpg') }}" alt="">
                                <div class="preview-buttons valign-middle">
                                    <div class="valign-middle-content">
                                        <a class="button size-2 style-2" href="#">
                                            <span class="button-wrapper">
                                                <span class="icon"><img src="{{ asset('assets/img/icon-1.png') }}" alt=""></span>
                                                <span class="text">Learn More</span>
                                            </span>
                                        </a>
                                        <a class="button size-2 style-3" href="#">
                                            <span class="button-wrapper">
                                                <span class="icon"><img src="{{ asset('assets/img/icon-3.png') }}" alt=""></span>
                                                <span class="text">Add To Cart</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price">
                                <div class="simple-article size-4 dark">$630.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-shortcode style-1 small">
                            <div class="title">
                                <div class="simple-article size-1 color col-xs-b5"><a href="#">ACCESSORIES</a></div>
                                <div class="h6 animate-to-green"><a href="#">usb watch charger</a></div>
                            </div>
                            <div class="preview">
                                <img src="{{ asset('assets/img/product-52.jpg') }}" alt="">
                                <div class="preview-buttons valign-middle">
                                    <div class="valign-middle-content">
                                        <a class="button size-2 style-2" href="#">
                                            <span class="button-wrapper">
                                                <span class="icon"><img src="{{ asset('assets/img/icon-1.png') }}" alt=""></span>
                                                <span class="text">Learn More</span>
                                            </span>
                                        </a>
                                        <a class="button size-2 style-3" href="#">
                                            <span class="button-wrapper">
                                                <span class="icon"><img src="{{ asset('assets/img/icon-3.png') }}" alt=""></span>
                                                <span class="text">Add To Cart</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price">
                                <div class="simple-article size-4 dark">$630.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-shortcode style-1 small">
                            <div class="title">
                                <div class="simple-article size-1 color col-xs-b5"><a href="#">ACCESSORIES</a></div>
                                <div class="h6 animate-to-green"><a href="#">usb watch charger</a></div>
                            </div>
                            <div class="preview">
                                <img src="{{ asset('assets/img/product-53.jpg') }}" alt="">
                                <div class="preview-buttons valign-middle">
                                    <div class="valign-middle-content">
                                        <a class="button size-2 style-2" href="#">
                                            <span class="button-wrapper">
                                                <span class="icon"><img src="{{ asset('assets/img/icon-1.png') }}" alt=""></span>
                                                <span class="text">Learn More</span>
                                            </span>
                                        </a>
                                        <a class="button size-2 style-3" href="#">
                                            <span class="button-wrapper">
                                                <span class="icon"><img src="{{ asset('assets/img/icon-3.png') }}" alt=""></span>
                                                <span class="text">Add To Cart</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price">
                                <div class="simple-article size-4 dark">$630.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-shortcode style-1 small">
                            <div class="title">
                                <div class="simple-article size-1 color col-xs-b5"><a href="#">ACCESSORIES</a></div>
                                <div class="h6 animate-to-green"><a href="#">usb watch charger</a></div>
                            </div>
                            <div class="preview">
                                <img src="{{ asset('assets/img/product-54.jpg') }}" alt="">
                                <div class="preview-buttons valign-middle">
                                    <div class="valign-middle-content">
                                        <a class="button size-2 style-2" href="#">
                                            <span class="button-wrapper">
                                                <span class="icon"><img src="{{ asset('assets/img/icon-1.png') }}" alt=""></span>
                                                <span class="text">Learn More</span>
                                            </span>
                                        </a>
                                        <a class="button size-2 style-3" href="#">
                                            <span class="button-wrapper">
                                                <span class="icon"><img src="{{ asset('assets/img/icon-3.png') }}" alt=""></span>
                                                <span class="text">Add To Cart</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price">
                                <div class="simple-article size-4 dark">$630.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-shortcode style-1 small">
                            <div class="title">
                                <div class="simple-article size-1 color col-xs-b5"><a href="#">ACCESSORIES</a></div>
                                <div class="h6 animate-to-green"><a href="#">usb watch charger</a></div>
                            </div>
                            <div class="preview">
                                <img src="{{ asset('assets/img/product-55.jpg') }}" alt="">
                                <div class="preview-buttons valign-middle">
                                    <div class="valign-middle-content">
                                        <a class="button size-2 style-2" href="#">
                                            <span class="button-wrapper">
                                                <span class="icon"><img src="{{ asset('assets/img/icon-1.png') }}" alt=""></span>
                                                <span class="text">Learn More</span>
                                            </span>
                                        </a>
                                        <a class="button size-2 style-3" href="#">
                                            <span class="button-wrapper">
                                                <span class="icon"><img src="{{ asset('assets/img/icon-3.png') }}" alt=""></span>
                                                <span class="text">Add To Cart</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price">
                                <div class="simple-article size-4 dark">$630.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination relative-pagination visible-xs"></div>
            </div>

            <div class="empty-space col-xs-b35 col-md-b70"></div>
            <div class="empty-space col-md-b70"></div>

            <div class="swiper-container arrows-align-top" data-breakpoints="1" data-xs-slides="1" data-sm-slides="3" data-md-slides="4" data-lt-slides="4" data-slides-per-view="5">
                <div class="h4 swiper-title">accessories</div>
                <div class="empty-space col-xs-b20"></div>
                <div class="swiper-button-prev style-1"></div>
                <div class="swiper-button-next style-1"></div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="product-shortcode style-1 small">
                            <div class="title">
                                <div class="simple-article size-1 color col-xs-b5"><a href="#">ACCESSORIES</a></div>
                                <div class="h6 animate-to-green"><a href="#">usb watch charger</a></div>
                            </div>
                            <div class="preview">
                                <img src="{{ asset('assets/img/product-54.jpg') }}" alt="">
                                <div class="preview-buttons valign-middle">
                                    <div class="valign-middle-content">
                                        <a class="button size-2 style-2" href="#">
                                            <span class="button-wrapper">
                                                <span class="icon"><img src="{{ asset('assets/img/icon-1.png') }}" alt=""></span>
                                                <span class="text">Learn More</span>
                                            </span>
                                        </a>
                                        <a class="button size-2 style-3" href="#">
                                            <span class="button-wrapper">
                                                <span class="icon"><img src="{{ asset('assets/img/icon-3.png') }}" alt=""></span>
                                                <span class="text">Add To Cart</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price">
                                <div class="simple-article size-4 dark">$630.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-shortcode style-1 small">
                            <div class="title">
                                <div class="simple-article size-1 color col-xs-b5"><a href="#">ACCESSORIES</a></div>
                                <div class="h6 animate-to-green"><a href="#">usb watch charger</a></div>
                            </div>
                            <div class="preview">
                                <img src="{{ asset('assets/img/product-55.jpg') }}" alt="">
                                <div class="preview-buttons valign-middle">
                                    <div class="valign-middle-content">
                                        <a class="button size-2 style-2" href="#">
                                            <span class="button-wrapper">
                                                <span class="icon"><img src="{{ asset('assets/img/icon-1.png') }}" alt=""></span>
                                                <span class="text">Learn More</span>
                                            </span>
                                        </a>
                                        <a class="button size-2 style-3" href="#">
                                            <span class="button-wrapper">
                                                <span class="icon"><img src="{{ asset('assets/img/icon-3.png') }}" alt=""></span>
                                                <span class="text">Add To Cart</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price">
                                <div class="simple-article size-4 dark">$630.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-shortcode style-1 small">
                            <div class="title">
                                <div class="simple-article size-1 color col-xs-b5"><a href="#">ACCESSORIES</a></div>
                                <div class="h6 animate-to-green"><a href="#">usb watch charger</a></div>
                            </div>
                            <div class="preview">
                                <img src="{{ asset('assets/img/product-56.jpg') }}" alt="">
                                <div class="preview-buttons valign-middle">
                                    <div class="valign-middle-content">
                                        <a class="button size-2 style-2" href="#">
                                            <span class="button-wrapper">
                                                <span class="icon"><img src="{{ asset('assets/img/icon-1.png') }}" alt=""></span>
                                                <span class="text">Learn More</span>
                                            </span>
                                        </a>
                                        <a class="button size-2 style-3" href="#">
                                            <span class="button-wrapper">
                                                <span class="icon"><img src="{{ asset('assets/img/icon-3.png') }}" alt=""></span>
                                                <span class="text">Add To Cart</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price">
                                <div class="simple-article size-4 dark">$630.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-shortcode style-1 small">
                            <div class="title">
                                <div class="simple-article size-1 color col-xs-b5"><a href="#">ACCESSORIES</a></div>
                                <div class="h6 animate-to-green"><a href="#">usb watch charger</a></div>
                            </div>
                            <div class="preview">
                                <img src="{{ asset('assets/img/product-57.jpg') }}" alt="">
                                <div class="preview-buttons valign-middle">
                                    <div class="valign-middle-content">
                                        <a class="button size-2 style-2" href="#">
                                            <span class="button-wrapper">
                                                <span class="icon"><img src="{{ asset('assets/img/icon-1.png') }}" alt=""></span>
                                                <span class="text">Learn More</span>
                                            </span>
                                        </a>
                                        <a class="button size-2 style-3" href="#">
                                            <span class="button-wrapper">
                                                <span class="icon"><img src="{{ asset('assets/img/icon-3.png') }}" alt=""></span>
                                                <span class="text">Add To Cart</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price">
                                <div class="simple-article size-4 dark">$630.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-shortcode style-1 small">
                            <div class="title">
                                <div class="simple-article size-1 color col-xs-b5"><a href="#">ACCESSORIES</a></div>
                                <div class="h6 animate-to-green"><a href="#">usb watch charger</a></div>
                            </div>
                            <div class="preview">
                                <img src="{{ asset('assets/img/product-58.jpg') }}" alt="">
                                <div class="preview-buttons valign-middle">
                                    <div class="valign-middle-content">
                                        <a class="button size-2 style-2" href="#">
                                            <span class="button-wrapper">
                                                <span class="icon"><img src="{{ asset('assets/img/icon-1.png') }}" alt=""></span>
                                                <span class="text">Learn More</span>
                                            </span>
                                        </a>
                                        <a class="button size-2 style-3" href="#">
                                            <span class="button-wrapper">
                                                <span class="icon"><img src="{{ asset('assets/img/icon-3.png') }}" alt=""></span>
                                                <span class="text">Add To Cart</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price">
                                <div class="simple-article size-4 dark">$630.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-shortcode style-1 small">
                            <div class="title">
                                <div class="simple-article size-1 color col-xs-b5"><a href="#">ACCESSORIES</a></div>
                                <div class="h6 animate-to-green"><a href="#">usb watch charger</a></div>
                            </div>
                            <div class="preview">
                                <img src="{{ asset('assets/img/product-49.jpg') }}" alt="">
                                <div class="preview-buttons valign-middle">
                                    <div class="valign-middle-content">
                                        <a class="button size-2 style-2" href="#">
                                            <span class="button-wrapper">
                                                <span class="icon"><img src="{{ asset('assets/img/icon-1.png') }}" alt=""></span>
                                                <span class="text">Learn More</span>
                                            </span>
                                        </a>
                                        <a class="button size-2 style-3" href="#">
                                            <span class="button-wrapper">
                                                <span class="icon"><img src="{{ asset('assets/img/icon-3.png') }}" alt=""></span>
                                                <span class="text">Add To Cart</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price">
                                <div class="simple-article size-4 dark">$630.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-shortcode style-1 small">
                            <div class="title">
                                <div class="simple-article size-1 color col-xs-b5"><a href="#">ACCESSORIES</a></div>
                                <div class="h6 animate-to-green"><a href="#">usb watch charger</a></div>
                            </div>
                            <div class="preview">
                                <img src="{{ asset('assets/img/product-50.jpg') }}" alt="">
                                <div class="preview-buttons valign-middle">
                                    <div class="valign-middle-content">
                                        <a class="button size-2 style-2" href="#">
                                            <span class="button-wrapper">
                                                <span class="icon"><img src="{{ asset('assets/img/icon-1.png') }}" alt=""></span>
                                                <span class="text">Learn More</span>
                                            </span>
                                        </a>
                                        <a class="button size-2 style-3" href="#">
                                            <span class="button-wrapper">
                                                <span class="icon"><img src="{{ asset('assets/img/icon-3.png') }}" alt=""></span>
                                                <span class="text">Add To Cart</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="price">
                                <div class="simple-article size-4 dark">$630.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination relative-pagination visible-xs"></div>
            </div>

            <div class="empty-space col-xs-b35 col-md-b70"></div>
            <div class="empty-space col-md-b70"></div>

            <div class="row">
                <div class="col-sm-6 col-md-3 col-xs-b25">
                    <div class="h4 col-xs-b25">Hot Sale</div>
                    <div class="product-shortcode style-4 rounded clearfix">
                        <a class="preview" href="#"><img src="{{ asset('assets/img/product-28.jpg') }}" alt="" /></a>
                        <div class="description">
                            <div class="simple-article color size-1 col-xs-b5">WIRELESS</div>
                            <h6 class="h6 col-xs-b10"><a href="#">wireless headphones</a></h6>
                            <div class="simple-article dark">$98.00</div>
                        </div>
                    </div>
                    <div class="col-xs-b10"></div>
                    <div class="product-shortcode style-4 rounded clearfix">
                        <a class="preview" href="#"><img src="{{ asset('assets/img/product-29.jpg') }}" alt="" /></a>
                        <div class="description">
                            <div class="simple-article color size-1 col-xs-b5">CASES</div>
                            <h6 class="h6 col-xs-b10"><a href="#">earphones case</a></h6>
                            <div class="simple-article dark">$12.00</div>
                        </div>
                    </div>
                    <div class="col-xs-b10"></div>
                    <div class="product-shortcode style-4 rounded clearfix">
                        <a class="preview" href="#"><img src="{{ asset('assets/img/product-30.jpg') }}" alt="" /></a>
                        <div class="description">
                            <div class="simple-article color size-1 col-xs-b5">CASES</div>
                            <h6 class="h6 col-xs-b10"><a href="#">headphones case</a></h6>
                            <div class="simple-article"><span class="color">$24.00</span>&nbsp;&nbsp;&nbsp;<span class="line-through">$32.00</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-xs-b25">
                    <div class="h4 col-xs-b25">Top Rated</div>
                    <div class="product-shortcode style-4 rounded clearfix">
                        <a class="preview" href="#"><img src="{{ asset('assets/img/product-31.jpg') }}" alt="" /></a>
                        <div class="description">
                            <div class="simple-article color size-1 col-xs-b5">WIRELESS</div>
                            <h6 class="h6 col-xs-b10"><a href="#">wireless headphones</a></h6>
                            <div class="simple-article dark">$98.00</div>
                        </div>
                    </div>
                    <div class="col-xs-b10"></div>
                    <div class="product-shortcode style-4 rounded clearfix">
                        <a class="preview" href="#"><img src="{{ asset('assets/img/product-32.jpg') }}" alt="" /></a>
                        <div class="description">
                            <div class="simple-article color size-1 col-xs-b5">CASES</div>
                            <h6 class="h6 col-xs-b10"><a href="#">earphones case</a></h6>
                            <div class="simple-article dark">$12.00</div>
                        </div>
                    </div>
                    <div class="col-xs-b10"></div>
                    <div class="product-shortcode style-4 rounded clearfix">
                        <a class="preview" href="#"><img src="{{ asset('assets/img/product-33.jpg') }}" alt="" /></a>
                        <div class="description">
                            <div class="simple-article color size-1 col-xs-b5">CASES</div>
                            <h6 class="h6 col-xs-b10"><a href="#">headphones case</a></h6>
                            <div class="simple-article dark">$4.00</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-xs-b25">
                    <div class="h4 col-xs-b25">Popular</div>
                    <div class="product-shortcode style-4 rounded clearfix">
                        <a class="preview" href="#"><img src="{{ asset('assets/img/product-34.jpg') }}" alt="" /></a>
                        <div class="description">
                            <div class="simple-article color size-1 col-xs-b5">WIRELESS</div>
                            <h6 class="h6 col-xs-b10"><a href="#">wireless headphones</a></h6>
                            <div class="simple-article dark">$98.00</div>
                        </div>
                    </div>
                    <div class="col-xs-b10"></div>
                    <div class="product-shortcode style-4 rounded clearfix">
                        <a class="preview" href="#"><img src="{{ asset('assets/img/product-35.jpg') }}" alt="" /></a>
                        <div class="description">
                            <div class="simple-article color size-1 col-xs-b5">CASES</div>
                            <h6 class="h6 col-xs-b10"><a href="#">earphones case</a></h6>
                            <div class="simple-article dark">$12.00</div>
                        </div>
                    </div>
                    <div class="col-xs-b10"></div>
                    <div class="product-shortcode style-4 rounded clearfix">
                        <a class="preview" href="#"><img src="{{ asset('assets/img/product-36.jpg') }}" alt="" /></a>
                        <div class="description">
                            <div class="simple-article color size-1 col-xs-b5">CASES</div>
                            <h6 class="h6 col-xs-b10"><a href="#">headphones case</a></h6>
                            <div class="simple-article dark">$4.00</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-xs-b25">
                    <div class="h4 col-xs-b25">Best Choice</div>
                    <div class="product-shortcode style-4 rounded clearfix">
                        <a class="preview" href="#"><img src="{{ asset('assets/img/product-37.jpg') }}" alt="" /></a>
                        <div class="description">
                            <div class="simple-article color size-1 col-xs-b5">WIRELESS</div>
                            <h6 class="h6 col-xs-b10"><a href="#">wireless headphones</a></h6>
                            <div class="simple-article dark">$98.00</div>
                        </div>
                    </div>
                    <div class="col-xs-b10"></div>
                    <div class="product-shortcode style-4 rounded clearfix">
                        <a class="preview" href="#"><img src="{{ asset('assets/img/product-38.jpg') }}" alt="" /></a>
                        <div class="description">
                            <div class="simple-article color size-1 col-xs-b5">CASES</div>
                            <h6 class="h6 col-xs-b10"><a href="#">earphones case</a></h6>
                            <div class="simple-article dark">$12.00</div>
                        </div>
                    </div>
                    <div class="col-xs-b10"></div>
                    <div class="product-shortcode style-4 rounded clearfix">
                        <a class="preview" href="#"><img src="{{ asset('assets/img/product-39.jpg') }}" alt="" /></a>
                        <div class="description">
                            <div class="simple-article color size-1 col-xs-b5">CASES</div>
                            <h6 class="h6 col-xs-b10"><a href="#">headphones case</a></h6>
                            <div class="simple-article dark">$4.00</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="empty-space col-xs-b15 col-sm-b45"></div>
        <div class="empty-space col-md-b70"></div>
@endsection