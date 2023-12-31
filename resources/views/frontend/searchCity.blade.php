@extends('frontend.layouts.master')
@section('title', 'Search City')
@section('content')

    <main id="main" class="site-main">
        <div class="page-title" style="background-image: url(images/city/paris-lager.jpg);">
            <div class="container">
                <div class="page-title__content">
                    <h4 class="page-title__capita">France</h4>
                    <h1 class="page-title__name">Paris</h1>
                    <p class="page-title__slogan">the city of love</p>
                </div>
            </div>
        </div><!-- .page-title -->
        <div class="filter-group filter-business">
            <div class="container">
                <div class="filter layout-02">
                    <div class="select-group">
                        <div class="select-box select-country">
                            <select name="Categories" class="Categories">
                                <option value="">All Categories</option>
                                <option value="London">London</option>
                                <option value="NewYork">New York</option>
                                <option value="Rome">Rome</option>
                                <option value="Tokyo">Tokyo</option>
                                <option value="Chicago">Chicago</option>
                            </select>
                            <div class="filter-control" tabindex="0">
                                <span class="current">All Destinations</span>
                                <ul class="list">
                                    <li data-value="paris" class="option selected focus">Paris</li>
                                    <li data-value="london" class="option">London</li>
                                    <li data-value="newyork" class="option">New York</li>
                                    <li data-value="rome" class="option">Rome</li>
                                    <li data-value="tokyo" class="option">Tokyo</li>
                                    <li data-value="chicago" class="option">Chicago</li>
                                </ul>
                            </div>
                        </div>
                        <div class="select-box select-cat">
                            <select name="Categories" class="Categories">
                                <option value="">All Categories</option>
                                <option value="Restaurant">Restaurant</option>
                                <option value="Beauty">Beauty</option>
                                <option value="Nightlife">Nightlife</option>
                                <option value="Shopping">Shopping</option>
                                <option value="Cinema">Cinema</option>
                            </select>
                            <div class="filter-control" tabindex="0">
                                <span class="current">All Categories</span>
                                <ul class="list">
                                    <li data-value="gym" class="option">Restaurant</li>
                                    <li data-value="massage" class="option">Beauty</li>
                                    <li data-value="clothing" class="option">Fitness</li>
                                    <li data-value="spa" class="option">Nightlife</li>
                                    <li data-value="spa" class="option">Shopping</li>
                                    <li data-value="spa" class="option">Cinema</li>
                                </ul>
                            </div>
                        </div>
                        <div class="select-box select-place-type">
                            <select name="placetype" class="placetype">
                                <option value="">Place Type</option>
                                <option value="coffee">Coffe Shop</option>
                                <option value="clothing">Clothing Shop</option>
                                <option value="spa">Spa</option>
                                <option value="market">Market</option>
                                <option value="park">Park</option>
                            </select>
                            <div class="filter-control" tabindex="0">
                                <span class="current">Place Type</span>
                                <ul class="list">
                                    <li value="Coffe_shop">Coffe Shop</li>
                                    <li value="Clothing_shop">Clothing Shop</li>
                                    <li value="spa">Spa</li>
                                    <li value="bar">Bar</li>
                                    <li value="market">Market</li>
                                    <li value="park">Park</li>
                                </ul>
                            </div>
                        </div>
                        <div class="select-box select-amenities">
                            <select name="Amenities" class="amenities">
                                <option value="">Amenities</option>
                                <option value="wifi">Free Wifi</option>
                                <option value="air">Air conditioner</option>
                                <option value="car_parking">Car parking</option>
                                <option value="credit_cards">Credit cards</option>
                                <option value="restroom">Restroom</option>
                            </select>
                            <div class="filter-control" tabindex="0">
                                <span class="current">Amenities</span>
                                <ul class="list">
                                    <li data-value="wifi" class="option">Free Wifi</li>
                                    <li data-value="air" class="option">Air conditioner</li>
                                    <li data-value="car" class="option">Car parking</li>
                                    <li data-value="credit_cards" class="option">Credit cards</li>
                                    <li data-value="restroom" class="option">Restroom</li>
                                </ul>
                            </div>
                        </div>
                        <div class="select-box select-price">
                            <select name="price" class="price">
                                <option value="">Price</option>
                                <option value="Free">Free</option>
                                <option value="$">$</option>
                                <option value="$$">$$</option>
                                <option value="$$$">$$$</option>
                            </select>
                            <div class="filter-control" tabindex="0">
                                <span class="current">Price</span>
                                <ul class="list">
                                    <li data-value="Free" class="option">Free</li>
                                    <li data-value="$" class="option">$</li>
                                    <li data-value="$$" class="option">$$</li>
                                    <li data-value="$$$" class="option">$$$</li>
                                </ul>
                            </div>
                        </div>
                        <a href="#" class="clear-filter">Clear filter</a>
                    </div>
                    <div class="show-map">
                        <span>Map</span>
                        <a href="#" class="icon-toggle"></a>
                    </div>
                </div><!-- .filter -->
            </div>
        </div><!-- .filter-group -->
        <div class="archive-city layout-02">
            <div class="col-left">
                <div class="archive-filter">
                    <form action="#" class="filterForm" id="filterForm">
                        <div class="filter-head">
                            <h2>Filter</h2>
                            <a href="#" class="clear-filter"><i class="fal fa-sync"></i>Clear all</a>
                            <a href="#" class="close-filter"><i class="las la-times"></i></a>
                        </div>
                        <div class="filter-box">
                            <h3>Categories</h3>
                            <div class="filter-list">
                                <div class="filter-group">
                                    <div class="field-check">
                                        <label for="restaurant">
                                            <input type="checkbox" id="restaurant" value="">
                                            Restaurant
                                            <span class="checkmark"><i class="la la-check"></i></span>
                                        </label>
                                    </div>
                                    <div class="field-check">
                                        <label for="shopping">
                                            <input type="checkbox" id="shopping" value="">
                                            Shopping
                                            <span class="checkmark"><i class="la la-check"></i></span>
                                        </label>
                                    </div>
                                    <div class="field-check">
                                        <label for="nightlife">
                                            <input type="checkbox" id="nightlife" value="">
                                            Nightlife
                                            <span class="checkmark"><i class="la la-check"></i></span>
                                        </label>
                                    </div>
                                    <div class="field-check">
                                        <label for="hostel">
                                            <input type="checkbox" id="hostel" value="">
                                            Hostel
                                            <span class="checkmark"><i class="la la-check"></i></span>
                                        </label>
                                    </div>
                                    <div class="field-check">
                                        <label for="luxury">
                                            <input type="checkbox" id="luxury" value="">
                                            Luxury
                                            <span class="checkmark"><i class="la la-check"></i></span>
                                        </label>
                                    </div>
                                    <div class="field-check">
                                        <label for="market">
                                            <input type="checkbox" id="market" value="">
                                            Market
                                            <span class="checkmark"><i class="la la-check"></i></span>
                                        </label>
                                    </div>
                                </div>
                                <a href="#" class="more open-more" data-close="Close" data-more="More">More</a>
                            </div>
                        </div>
                        <div class="filter-box">
                            <h3>Place Type</h3>
                            <div class="filter-list">
                                <div class="filter-group">
                                    <div class="field-check">
                                        <label for="coffe_shop">
                                            <input type="checkbox" id="coffe_shop" value="">
                                            Coffe Shop
                                            <span class="checkmark"><i class="la la-check"></i></span>
                                        </label>
                                    </div>
                                    <div class="field-check">
                                        <label for="clothing_shop">
                                            <input type="checkbox" id="clothing_shop" value="">
                                            Clothing Shop
                                            <span class="checkmark"><i class="la la-check"></i></span>
                                        </label>
                                    </div>
                                    <div class="field-check">
                                        <label for="spa">
                                            <input type="checkbox" id="spa" value="">
                                            Spa
                                            <span class="checkmark"><i class="la la-check"></i></span>
                                        </label>
                                    </div>
                                </div>
                                <a href="#" class="more open-more" data-close="Close" data-more="More">More</a>
                            </div>
                        </div>
                        <div class="filter-box">
                            <h3>Amenities</h3>
                            <div class="filter-list">
                                <div class="filter-group">
                                    <div class="field-check">
                                        <label for="amen_res">
                                            <input type="checkbox" id="amen_res" value="">
                                            Restaurant
                                            <span class="checkmark"><i class="la la-check"></i></span>
                                        </label>
                                    </div>
                                    <div class="field-check">
                                        <label for="amen_coffee">
                                            <input type="checkbox" id="amen_coffee" value="">
                                            Coffee Shop
                                            <span class="checkmark"><i class="la la-check"></i></span>
                                        </label>
                                    </div>
                                    <div class="field-check">
                                        <label for="museum">
                                            <input type="checkbox" id="museum" value="">
                                            Museum
                                            <span class="checkmark"><i class="la la-check"></i></span>
                                        </label>
                                    </div>
                                </div>
                                <a href="#" class="more open-more" data-close="Close" data-more="More">More</a>
                            </div>
                        </div>
                        <div class="form-button align-center">
                            <a href="#" class="btn">Apply</a>
                        </div>
                    </form>
                    <form action="#" class="sortForm" id="sortForm">
                        <div class="filter-head">
                            <h2>Sort</h2>
                            <a href="#" class="clear-filter">Clear filter</a>
                            <a href="#" class="close-filter"><i class="las la-times"></i></a>
                        </div>
                        <div class="filter-box">
                            <h3>Sort by</h3>
                            <div class="filter-list">
                                <div class="field-check">
                                    <label for="newest">
                                        <input type="checkbox" id="newest" value="">
                                        Newest
                                        <span class="checkmark"><i class="la la-check"></i></span>
                                    </label>
                                </div>
                                <div class="field-check">
                                    <label for="average_rating">
                                        <input type="checkbox" id="average_rating" value="">
                                        Average rating
                                        <span class="checkmark"><i class="la la-check"></i></span>
                                    </label>
                                </div>
                                <div class="field-check">
                                    <label for="featured">
                                        <input type="checkbox" id="featured" value="">
                                        Featured
                                        <span class="checkmark"><i class="la la-check"></i></span>
                                    </label>
                                </div>
                                <div class="field-check">
                                    <label for="lth">
                                        <input type="checkbox" id="lth" value="">
                                        Price: Low to high
                                        <span class="checkmark"><i class="la la-check"></i></span>
                                    </label>
                                </div>
                                <div class="field-check">
                                    <label for="htl">
                                        <input type="checkbox" id="htl" value="">
                                        Price: High to low
                                        <span class="checkmark"><i class="la la-check"></i></span>
                                    </label>
                                </div>
                                <a href="#" class="more open-more" data-close="Close" data-more="More">More</a>
                            </div>
                        </div>
                        <div class="form-button align-center">
                            <a href="#" class="btn">Apply</a>
                        </div>
                    </form>
                </div><!-- .archive-fillter -->
                <div class="main-primary">
                    <div class="filter-mobile">
                        <ul>
                            <li><a class="mb-filter mb-open" href="#filterForm">Filter</a></li>
                            <li><a class="mb-sort mb-open" href="#sortForm">Sort</a></li>
                        </ul>
                        <div class="mb-maps"><a class="mb-maps" href="#"><i class="las la-map-marked-alt"></i></a>
                        </div>
                    </div>
                    <div class="top-area top-area-filter">
                        <div class="filter-left">
                            <span class="result-count"><span class="count">24</span> results</span>
                        </div>
                        <div class="filter-center">
                            <div class="place-layout">
                                <a class="active" href="#" data-layout="layout-grid"><i
                                        class="las la-border-all icon-large"></i></a>
                                <a class="" href="#" data-layout="layout-list"><i
                                        class="las la-list icon-large"></i></a>
                            </div>
                        </div>
                        <div class="filter-right">
                            <div class="select-box">
                                <select name="sort_by" class="sort-by">
                                    <option value="">Sort by</option>
                                    <option value="newest">Newest</option>
                                    <option value="rating">Average rating</option>
                                    <option value="featured">Featured</option>
                                </select>
                                <div class="filter-control" tabindex="0">
                                    <span class="current">Sort by</span>
                                    <ul class="list">
                                        <li data-value="" class="option selected focus">Sort by</li>
                                        <li data-value="newest" class="option">Newest</li>
                                        <li data-value="rating" class="option">Average rating</li>
                                        <li data-value="featured" class="option">Featured</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="area-places layout-3col">
                        <div class="place-item layout-02 place-hover" data-maps_name="mattone_restaurant">
                            <div class="place-inner">
                                <div class="place-thumb">
                                    <a class="entry-thumb" href="single-1.html"><img src="images/listing/01.jpg"
                                            alt=""></a>
                                    <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist "
                                        data-place-id="185">
                                        <span class="icon-heart">
                                            <i class="la la-bookmark large"></i>
                                        </span>
                                    </a>
                                    <a class="entry-category rosy-pink" href="#">
                                        <i class="las la-utensils"></i><span>Restaurant</span>
                                    </a>
                                    <a href="#" class="author" title="Author"><img src="images/avatars/male-3.jpg"
                                            alt="Author"></a>
                                </div>
                                <div class="entry-detail">
                                    <div class="entry-head">
                                        <div class="place-type">
                                            <span>Restaurant</span>
                                        </div>
                                        <div class="place-city">
                                            <a href="#">Paris</a>
                                        </div>
                                    </div>
                                    <h3 class="place-title"><a href="single-1.html">Mattone Restaurant</a></h3>
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
                        <div class="place-item layout-02 place-hover" data-maps_name="retro_fitness">
                            <div class="place-inner">
                                <div class="place-thumb">
                                    <a class="entry-thumb" href="single-1.html"><img src="images/listing/02.jpg"
                                            alt=""></a>
                                    <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist "
                                        data-place-id="185">
                                        <span class="icon-heart">
                                            <i class="la la-bookmark large"></i>
                                        </span>
                                    </a>
                                    <a class="entry-category blue" href="#">
                                        <i class="las la-dumbbell"></i><span>Gym</span>
                                    </a>
                                    <a href="#" class="author" title="Author"><img src="images/avatars/male-2.jpg"
                                            alt="Author"></a>
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
                                    <h3 class="place-title"><a href="single-1.html">Retro Fitness</a></h3>
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
                        <div class="place-item layout-02 place-hover" data-maps_name="body_spa">
                            <div class="place-inner">
                                <div class="place-thumb">
                                    <a class="entry-thumb" href="single-1.html"><img src="images/listing/03.jpg"
                                            alt=""></a>
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
                                            src="images/avatars/female-3.jpg" alt="Author"></a>
                                </div>
                                <div class="entry-detail">
                                    <div class="entry-head">
                                        <div class="place-type">
                                            <span>Massage</span>
                                        </div>
                                        <div class="place-city">
                                            <a href="#">Lyon</a>
                                        </div>
                                    </div>
                                    <h3 class="place-title"><a href="single-1.html">Renew Body Spa</a></h3>
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
                        <div class="place-item layout-02 place-hover" data-maps_name="antoinette">
                            <div class="place-inner">
                                <div class="place-thumb">
                                    <a class="entry-thumb" href="single-1.html"><img src="images/listing/04.jpg"
                                            alt=""></a>
                                    <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist "
                                        data-place-id="185">
                                        <span class="icon-heart">
                                            <i class="la la-bookmark large"></i>
                                        </span>
                                    </a>
                                    <a class="entry-category charcoal-purple" href="#">
                                        <i class="las la-shopping-bag"></i><span>Clothing Shop</span>
                                    </a>
                                    <a href="#" class="author" title="Author"><img src="images/avatars/male-4.jpg"
                                            alt="Author"></a>
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
                                    <h3 class="place-title"><a href="single-1.html">Antoinette</a></h3>
                                    <div class="close-now"><i class="las la-door-closed"></i>Close now</div>
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
                        <div class="place-item layout-02 place-hover" data-maps_name="kathay_cinema">
                            <div class="place-inner">
                                <div class="place-thumb">
                                    <a class="entry-thumb" href="single-1.html"><img src="images/listing/06.jpg"
                                            alt=""></a>
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
                                            src="images/avatars/female-3.jpg" alt="Author"></a>
                                </div>
                                <div class="entry-detail">
                                    <div class="entry-head">
                                        <div class="place-type ">
                                            <span>Restaurant</span>
                                        </div>
                                        <div class="place-city">
                                            <a href="#">Paris</a>
                                        </div>
                                    </div>
                                    <h3 class="place-title"><a href="single-1.html">Kathay Cinema</a></h3>
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
                        <div class="place-item layout-02 place-hover" data-maps_name="jardin_club">
                            <div class="place-inner">
                                <div class="place-thumb">
                                    <a class="entry-thumb" href="single-1.html"><img src="images/listing/07.jpg"
                                            alt=""></a>
                                    <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist "
                                        data-place-id="185">
                                        <span class="icon-heart">
                                            <i class="la la-bookmark large"></i>
                                        </span>
                                    </a>
                                    <a class="entry-category orange" href="#">
                                        <i class="las la-cocktail"></i><span>Nightlife</span>
                                    </a>
                                    <a href="#" class="author" title="Author"><img src="images/avatars/male-5.jpg"
                                            alt="Author"></a>
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
                                    <h3 class="place-title"><a href="single-1.html">Jardin Club</a></h3>
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
                    {{-- <div class="pagination">
                        <div class="pagination__numbers">
                            <span>1</span>
                            <a title="2" href="#">2</a>
                            <a title="3" href="#">3</a>
                            <a title="Next" href="#">
                                <i class="la la-angle-right"></i>
                            </a>
                        </div>
                    </div> --}}
                </div><!-- .main-primary -->
            </div><!-- .col-left -->
            <div class="col-right">
                <div class="filter-head">
                    <h2>Maps</h2>
                    <a href="#" class="close-maps">Close</a>
                </div>
                <div class="entry-map">
                    <div id="place-map-filter"></div>
                </div>
            </div><!-- .col-right -->
        </div><!-- .archive-city -->
    </main><!-- .site-main -->


@endsection
