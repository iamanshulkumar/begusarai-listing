@extends('frontend.layouts.master')
@section('title', 'Owner Page')
@section('content')


    <main id="main" class="site-main">
        <div class="owner-top">
            <div class="container">
                <div class="owner-top-inner">
                    <div class="owner-top-info">
                        <div class="avatar"><img src="images/avatars/male-3.jpg" alt="Roman"></div>
                        <div class="info">
                            <h3>Roman<span class="verified">(Verified)</span></h3>
                            <p>12 places, 33 reviews</p>
                        </div>
                    </div>
                    <div class="owner-top-button">
                        <a href="#" class="btn" title="Send Message"><i class="las la-envelope"></i>Send a
                            message</a>
                    </div>
                </div>
            </div>
        </div><!-- .owner-top -->
        <div class="owner-page-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="owner-page-content">
                            <h2>Roman's places (12)</h2>
                            <div class="area-places layout-3col">
                                <div class="place-item layout-02 place-hover" data-maps="tartine_manufactory">
                                    <div class="place-inner">
                                        <div class="place-thumb">
                                            <a class="entry-thumb" href="04_place-details-1.html"><img
                                                    src="images/listing/01.jpg" alt=""></a>
                                            <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist "
                                                data-place-id="185">
                                                <span class="icon-heart">
                                                    <i class="la la-bookmark large"></i>
                                                </span>
                                            </a>
                                            <a class="entry-category rosy-pink" href="#">
                                                <i class="las la-utensils"></i><span>Restaurant</span>
                                            </a>
                                            <a href="#" class="author" title="Author"><img
                                                    src="images/avatars/male-3.jpg" alt="Author"></a>
                                        </div>
                                        <div class="entry-detail">
                                            <div class="entry-head">
                                                <div class="place-type  ">
                                                    <span>Restaurant</span>
                                                </div>
                                                <div class="place-city">
                                                    <a href="#">Paris</a>
                                                </div>
                                            </div>
                                            <h3 class="place-title"><a href="04_place-details-1.html">Mattone Restaurant</a>
                                            </h3>
                                            <div class="open-now"><i class="las la-door-open"></i>Open now</div>
                                            <div class="entry-bottom">
                                                <div class="place-preview">
                                                    <div class="place-rating">
                                                        <span>5.0</span>
                                                        <i class="la la-star"></i>
                                                    </div>
                                                    <span class="count-reviews">(2 Reviews)</span>
                                                </div>
                                                <div class="place-price">
                                                    <span>$$</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="place-item layout-02 place-hover" data-maps="manly_beach">
                                    <div class="place-inner">
                                        <div class="place-thumb">
                                            <a class="entry-thumb" href="04_place-details-1.html"><img
                                                    src="images/listing/02.jpg" alt=""></a>
                                            <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist "
                                                data-place-id="185">
                                                <span class="icon-heart">
                                                    <i class="la la-bookmark large"></i>
                                                </span>
                                            </a>
                                            <a class="entry-category blue" href="#">
                                                <i class="las la-dumbbell"></i><span>Gym</span>
                                            </a>
                                            <a href="#" class="author" title="Author"><img
                                                    src="images/avatars/male-3.jpg" alt="Author"></a>
                                        </div>
                                        <div class="entry-detail">
                                            <div class="entry-head">
                                                <div class="place-type  ">
                                                    <span>Gym</span>
                                                </div>
                                                <div class="place-city">
                                                    <a href="#">Bordeaux</a>
                                                </div>
                                            </div>
                                            <h3 class="place-title"><a href="04_place-details-1.html">Retro Fitness</a></h3>
                                            <div class="open-now"><i class="las la-door-open"></i>Open now</div>
                                            <div class="entry-bottom">
                                                <div class="place-preview">
                                                    <div class="place-rating">
                                                        <span>5.0</span>
                                                        <i class="la la-star"></i>
                                                    </div>
                                                    <span class="count-reviews">(2 Reviews)</span>
                                                </div>
                                                <div class="place-price">
                                                    <span>$$</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="place-item layout-02 place-hover" data-maps="bondi_beach">
                                    <div class="place-inner">
                                        <div class="place-thumb">
                                            <a class="entry-thumb" href="04_place-details-1.html"><img
                                                    src="images/listing/03.jpg" alt=""></a>
                                            <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist "
                                                data-place-id="185">
                                                <span class="icon-heart">
                                                    <i class="la la-bookmark large"></i>
                                                </span>
                                            </a>
                                            <a class="entry-category purple" href="#">
                                                <i class="las la-spa"></i><span>Massage</span>
                                            </a>
                                            <a href="#" class="author" title="Author"><img
                                                    src="images/avatars/male-3.jpg" alt="Author"></a>
                                        </div>
                                        <div class="entry-detail">
                                            <div class="entry-head">
                                                <div class="place-type  ">
                                                    <span>Massage</span>
                                                </div>
                                                <div class="place-city">
                                                    <a href="#">Lyon</a>
                                                </div>
                                            </div>
                                            <h3 class="place-title"><a href="04_place-details-1.html">Renew Body Spa</a>
                                            </h3>
                                            <div class="open-now"><i class="las la-door-open"></i>Open now</div>
                                            <div class="entry-bottom">
                                                <div class="place-preview">
                                                    <div class="place-rating">
                                                        <span>5.0</span>
                                                        <i class="la la-star"></i>
                                                    </div>
                                                    <span class="count-reviews">(2 Reviews)</span>
                                                </div>
                                                <div class="place-price">
                                                    <span>$$</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="place-item layout-02 place-hover" data-maps="coogee_beach">
                                    <div class="place-inner">
                                        <div class="place-thumb">
                                            <a class="entry-thumb" href="04_place-details-1.html"><img
                                                    src="images/listing/04.jpg" alt=""></a>
                                            <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist "
                                                data-place-id="185">
                                                <span class="icon-heart">
                                                    <i class="la la-bookmark large"></i>
                                                </span>
                                            </a>
                                            <a class="entry-category charcoal-purple" href="#">
                                                <i class="las la-shopping-bag"></i><span>Clothing Shop</span>
                                            </a>
                                            <a href="#" class="author" title="Author"><img
                                                    src="images/avatars/male-3.jpg" alt="Author"></a>
                                        </div>
                                        <div class="entry-detail">
                                            <div class="entry-head">
                                                <div class="place-type  ">
                                                    <span>Clothing Shop</span>
                                                </div>
                                                <div class="place-city">
                                                    <a href="#">Nantes</a>
                                                </div>
                                            </div>
                                            <h3 class="place-title"><a href="04_place-details-1.html">Antoinette</a></h3>
                                            <div class="open-now"><i class="las la-door-open"></i>Open now</div>
                                            <div class="entry-bottom">
                                                <div class="place-preview">
                                                    <span class="no-reviews">(no reviews)</span>
                                                </div>
                                                <div class="place-price">
                                                    <span>$$$</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="place-item layout-02 place-hover" data-maps="cronulla_beach">
                                    <div class="place-inner">
                                        <div class="place-thumb">
                                            <a class="entry-thumb" href="04_place-details-1.html"><img
                                                    src="images/listing/06.jpg" alt=""></a>
                                            <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist "
                                                data-place-id="185">
                                                <span class="icon-heart">
                                                    <i class="la la-bookmark large"></i>
                                                </span>
                                            </a>
                                            <a class="entry-category green" href="#">
                                                <i class="las la-film"></i><span>Cinema</span>
                                            </a>
                                            <a href="#" class="author" title="Author"><img
                                                    src="images/avatars/male-3.jpg" alt="Author"></a>
                                        </div>
                                        <div class="entry-detail">
                                            <div class="entry-head">
                                                <div class="place-type  ">
                                                    <span>Restaurant</span>
                                                </div>
                                                <div class="place-city">
                                                    <a href="#">Paris</a>
                                                </div>
                                            </div>
                                            <h3 class="place-title"><a href="04_place-details-1.html">Kathay Cinema</a>
                                            </h3>
                                            <div class="close-now"><i class="las la-door-closed"></i>Close now</div>
                                            <div class="entry-bottom">
                                                <div class="place-preview">
                                                    <span class="no-reviews">(no reviews)</span>
                                                </div>
                                                <div class="place-price">
                                                    <span>$$</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="place-item layout-02 place-hover" data-maps="tartine_manufactory">
                                    <div class="place-inner">
                                        <div class="place-thumb">
                                            <a class="entry-thumb" href="04_place-details-1.html"><img
                                                    src="images/listing/07.jpg" alt=""></a>
                                            <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist "
                                                data-place-id="185">
                                                <span class="icon-heart">
                                                    <i class="la la-bookmark large"></i>
                                                </span>
                                            </a>
                                            <a class="entry-category orange" href="#">
                                                <i class="las la-cocktail"></i><span>Nightlife</span>
                                            </a>
                                            <a href="#" class="author" title="Author"><img
                                                    src="images/avatars/male-3.jpg" alt="Author"></a>
                                        </div>
                                        <div class="entry-detail">
                                            <div class="entry-head">
                                                <div class="place-type  ">
                                                    <span>Nightlife</span>
                                                </div>
                                                <div class="place-city">
                                                    <a href="#">Paris</a>
                                                </div>
                                            </div>
                                            <h3 class="place-title"><a href="04_place-details-1.html">Jardin Club</a></h3>
                                            <div class="close-now"><i class="las la-door-closed"></i>Close now</div>
                                            <div class="entry-bottom">
                                                <div class="place-preview">
                                                    <div class="place-rating">
                                                        <span>5.0</span>
                                                        <i class="la la-star"></i>
                                                    </div>
                                                    <span class="count-reviews">(2 Reviews)</span>
                                                </div>
                                                <div class="place-price">
                                                    <span>$$</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination">
                                <div class="pagination__numbers">
                                    <span>1</span>
                                    <a title="2" href="#">2</a>
                                    <a title="3" href="#">3</a>
                                    <a title="Next" href="#">
                                        <i class="la la-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="review-wrap">
                                <h2>Reviews (33)</h2>
                                <ul class="place__comments">
                                    <li>
                                        <div class="place__author">
                                            <div class="place__author__avatar">
                                                <a title="Sebastian" href="#"><img src="images/avatars/male-2.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="place__author__info">
                                                <a title="Sebastian" href="#">Sebastian</a>
                                                <div class="place__author__star">
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <span style="width: 72%">
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                    </span>
                                                </div>
                                                <span class="time">October 1, 2019</span>
                                            </div>
                                        </div>
                                        <div class="place__comments__content">
                                            <p>Went there last Saturday for the first time to watch my favorite djs (Kungs,
                                                Sam Feldet and Watermat) and really had a great experience. The atmosphere
                                                is amazing and I am going next week.</p>
                                        </div>
                                        <p>On <a href="#">Think Coffe</a></p>
                                    </li>
                                    <li>
                                        <div class="place__author">
                                            <div class="place__author__avatar">
                                                <a title="Nitithorn" href="#"><img
                                                        src="images/avatars/female-1.jpg" alt=""></a>
                                            </div>
                                            <div class="place__author__info">
                                                <a title="Nitithorn" href="#">Nitithorn</a>
                                                <div class="place__author__star">
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <span style="width: 72%">
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                    </span>
                                                </div>
                                                <span class="time">October 1, 2019</span>
                                            </div>
                                        </div>
                                        <div class="place__comments__content">
                                            <p>Went there last Saturday for the first time to watch my favorite djs (Kungs,
                                                Sam Feldet and Watermat) and really had a great experience.</p>
                                        </div>
                                        <p>On <a href="#">Think Coffe</a></p>
                                    </li>
                                    <li>
                                        <div class="place__author">
                                            <div class="place__author__avatar">
                                                <a title="Nitithorn" href="#"><img src="images/avatars/male-4.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="place__author__info">
                                                <a title="Nitithorn" href="#">Lisa</a>
                                                <div class="place__author__star">
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <i class="la la-star"></i>
                                                    <span style="width: 72%">
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                    </span>
                                                </div>
                                                <span class="time">October 1, 2019</span>
                                            </div>
                                        </div>
                                        <div class="place__comments__content">
                                            <p>Went there last Saturday for the first time to watch my favorite djs (Kungs,
                                                Sam Feldet and Watermat) and really had a great experience.</p>
                                        </div>
                                        <p>On <a href="#">Think Coffe</a></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="pagination">
                                <div class="pagination__numbers">
                                    <span>1</span>
                                    <a title="2" href="#">2</a>
                                    <a title="3" href="#">3</a>
                                    <a title="Next" href="#">
                                        <i class="la la-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="sidebar">
                            <aside class="widget widget-text">
                                <h3 class="widget-title">About</h3>
                                <div class="widget-content">
                                    <p>Quisque rhoncus tellus et suscipit pellentesque. Donec viverra eros sed justo
                                        dignissim laoreet. Aenean justo risus, imperdiet id massa ac, convallis condimentum
                                        risus.</p>
                                    <p class="info"><span>Email: </span><a
                                            href="https://golohtml.uxper.co/cdn-cgi/l/email-protection"
                                            class="__cf_email__"
                                            data-cfemail="abd9c4c6cac5ebccc6cac2c785c8c4c6">[email&#160;protected]</a></p>
                                    <p class="info"><span>Website: </span>https://www.abc.com</p>
                                    <ul>
                                        <li>
                                            <a title="Facebook" href="#">
                                                <i class="la la-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a title="Twitter" href="#">
                                                <i class="la la-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a title="Youtube" href="#">
                                                <i class="la la-youtube"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a title="Instagram" href="#">
                                                <i class="la la-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- .site-main -->


@endsection
