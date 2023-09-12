@extends('frontend.layouts.master')
@section('title', 'Wishlist')
@section('content')
    

<main id="main" class="site-main">
    <div class="site-content">
        <div class="member-menu">
            <div class="container">
                        <ul>
                            <li ><a href="/ownerDashboard">Dashboard</a></li>
                            <li><a href="/ownerLeads">Leads</a></li>
                            <li><a href="/ownerListing">Listings</a></li>
                            <li class="active"><a href="/ownerWishlist">Wishlist</a></li>
                            <li><a href="/ownerProfile">Profile</a></li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="member-wishlist-wrap">
                    <div class="member-wrap-top">
                    <h2>Wishlish</h2>
                    <p>You are current FREE plan. <a href="pricing-plan.html">Upgrade now</a></p>
                </div><!-- .member-wrap-top -->
                <div class="mw-box">
                    <h2>Paris</h2>
                    <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="place-item layout-02 place-hover">
                        <div class="place-inner">
                            <div class="place-thumb">
                                <a class="entry-thumb" href="04_place-details-1.html"><img src="images/listing/03.jpg" alt=""></a>
                                <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist " data-place-id="185">
                                    <span class="icon-heart">
                                        <i class="la la-bookmark large"></i>
                                    </span>                                    
                                </a>       
                                <a class="entry-category purple" href="#">
                                    <i class="las la-spa"></i><span>Massage</span>
                                </a>
                                <a href="#" class="author" title="Author"><img src="images/avatars/male-4.jpg" alt="Author"></a>
                            </div>       
                            <div class="entry-detail">
                                <div class="entry-head">
                                    <div class="place-type list-item">
                                        <span>Massage</span>
                                       </div>
                                    <div class="place-city">
                                        <a href="#">Lyon</a>
                                    </div>
                                </div>
                                <h3 class="place-title"><a href="04_place-details-1.html">Vivi Body Spa</a></h3>
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
                    <div class="col-lg-3 col-md-6">
                        <div class="place-item layout-02 place-hover" >
                        <div class="place-inner">
                            <div class="place-thumb">
                                <a class="entry-thumb" href="04_place-details-1.html"><img src="images/listing/07.jpg" alt=""></a>
                                <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist " data-place-id="185">
                                    <span class="icon-heart">
                                        <i class="la la-bookmark large"></i>
                                    </span>                                    
                                </a>       
                                <a class="entry-category orange" href="#">
                                    <i class="las la-cocktail"></i><span>Nightlife</span>
                                </a>
                                <a href="#" class="author" title="Author"><img src="images/avatars/male-3.jpg" alt="Author"></a>
                            </div>       
                            <div class="entry-detail">
                                <div class="entry-head">
                                    <div class="place-type list-item">
                                        <span>Nightlife</span>
                                       </div>
                                    <div class="place-city">
                                        <a href="#">Bordeaux</a>
                                    </div>
                                </div>
                                <h3 class="place-title"><a href="04_place-details-1.html">Jardin Club</a></h3>
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
                    <div class="col-lg-3 col-md-6">
                        <div class="place-item layout-02 place-hover" >
                        <div class="place-inner">
                            <div class="place-thumb">
                                <a class="entry-thumb" href="04_place-details-1.html"><img src="images/listing/01.jpg" alt=""></a>
                                <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist " data-place-id="185">
                                    <span class="icon-heart">
                                        <i class="la la-bookmark large"></i>
                                    </span>                                    
                                </a>       
                                <a class="entry-category rosy-pink" href="#">
                                    <i class="las la-utensils"></i><span>Restaurant</span>
                                </a>
                                <a href="#" class="author" title="Author"><img src="images/avatars/female-4.jpg" alt="Author"></a>
                            </div>       
                            <div class="entry-detail">
                                <div class="entry-head">
                                    <div class="place-type list-item">
                                        <span>Restaurant</span>
                                       </div>
                                    <div class="place-city">
                                        <a href="#">Paris</a>
                                    </div>
                                </div>
                                <h3 class="place-title"><a href="04_place-details-1.html">Vago Restaurant</a></h3>
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
                    <div class="col-lg-3 col-md-6">
                        <div class="place-item layout-02 place-hover" >
                        <div class="place-inner">
                            <div class="place-thumb">
                                <a class="entry-thumb" href="04_place-details-1.html"><img src="images/listing/04.jpg" alt=""></a>
                                <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist " data-place-id="185">
                                    <span class="icon-heart">
                                        <i class="la la-bookmark large"></i>
                                    </span>                                    
                                </a>       
                                <a class="entry-category charcoal-purple" href="#">
                                    <i class="las la-shopping-bag"></i><span>Shop</span>
                                </a>
                                <a href="#" class="author" title="Author"><img src="images/avatars/male-2.jpg" alt="Author"></a>
                            </div>       
                            <div class="entry-detail">
                                <div class="entry-head">
                                    <div class="place-type list-item">
                                        <span>Shopping</span>
                                       </div>
                                    <div class="place-city">
                                        <a href="#">Paris</a>
                                    </div>
                                </div>
                                <h3 class="place-title"><a href="04_place-details-1.html">Antoinette</a></h3>
                                <div class="entry-bottom">
                                    <div class="place-preview">
                                        <span class="no-reviews">(no reviews)</span>
                                    </div>
                                    <div class="place-price">
                                        <span>Free</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div><!-- .mw-box -->
            </div><!-- .member-wrap -->
            <br><br>
        </div>
    </div><!-- .site-content -->
</main><!-- .site-main -->


@endsection