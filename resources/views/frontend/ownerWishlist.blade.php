@extends('frontend.layouts.master')
@section('title', 'Wishlist')
@section('content')



    <main id="main" class="site-main">
        <div class="site-content">
            <div class="member-menu">
                <div class="container">
                    <ul>
                        <li><a href="/ownerDashboard">Dashboard</a></li>
                        <!-- <li><a href="/ownerLeads">Leads</a></li> -->
                        <li><a href="/ownerListing">My places</a></li>
                        <li class="active"><a href="/ownerWishlist">Wishlist</a></li>
                        <li><a href="/ownerProfile">Profile</a></li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="member-wishlist-wrap">
                    <div class="member-wrap-top">
                        <h2>Wishlist</h2>
                        {{-- <p>You are current FREE plan. <a href="pricing-plan.html">Upgrade now</a></p> --}}
                    </div><!-- .member-wrap-top -->
                    <div class="mw-box">

                        @foreach ($Result as $value)

                        @if ($value->status == 1)
                            <div class="col-md-3">
                                <div class="place-item layout-02 place-hover">
                                    <div class="place-inner">
                                        <div class="place-thumb hover-img">
                                            <a class="entry-thumb"
                                                href="{{ URL::to('listingDetail/' . $value->id . '/' . $value->category) }}">

                                                <img src="{{ URL::to('uploads/' . $value->coverImage) }}" />


                                            </a>
                                            <?php 
                                                if(Auth::user()){
                                                ?>
                                            <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist"
                                                data-place-id="{{ $value->id }}" data-business-id="{{ $value->id }}">
                                                <span class="icon-heart">

                                                    @if ($value->bookmark_status != null)
                                                        <i class="la la-bookmark large" style="color: #ffb429;"></i>
                                                    @else
                                                        <i class="la la-bookmark large" style="color:black"></i>
                                                    @endif
                                                </span>
                                            </a>
                                            <?php 
                                            }else{
                                            ?>

                                            <div class="login-container">
                                                <span class="login-message"> <a href="#"
                                                        class=" btn-add-to-wishlist open-login test" data-place-id=""
                                                        data-business-id="">
                                                        <span class="icon-heart">

                                                            <i class="la la-bookmark large"></i>

                                                        </span>
                                                    </a></span>

                                            </div>

                                            <?php }?>


                                            <a class="entry-category rosy-pink" href="#">

                                                @foreach ($submaster as $subvalue)
                                                    @if ($subvalue->title === $value->category)
                                                        <i class="{{ $subvalue->value }}"></i>
                                                    @endif
                                                @endforeach

                                                </i><span>{{ $value->category }}</span>
                                            </a>
                                            <a href="#" class="author" title="Author">
                                                <img src="{{ URL::to('uploads/' . $value->logo) }}"alt="Author" />

                                            </a>
                                            <!-- <div class="feature">Featured</div> -->
                                        </div>
                                        <div class="entry-detail">
                                            <div class="entry-head">
                                                <div class="place-type list-item">
                                                    <span>{{ $value->highlight }}</span>
                                                </div>
                                                <!-- <div class="place-city">
                                                                                                                                                                   <a href="#">Paris</a>
                                                                                                                                                               </div> -->
                                            </div>
                                            <h3 class="place-title">


                                                <a
                                                    href="{{ URL::to('listingDetail/' . $value->id . '/' . $value->category) }}">{{ $value->businessName }}</a>
                                            </h3>
                                            <div class="open-now">
                                                <i class="las la-door-open"></i>Open now
                                            </div>
                                            <div class="entry-bottom">
                                                <div class="place-preview">
                                                    <div class="place-rating">




                                                        <span>{{ $value->rating }}</span>
                                                        <i class="la la-star"></i>
                                                    </div>
                                                    <span class="count-reviews">({{ $value->count }} Reviews)</span>
                                                </div>
                                                <div class="place-price">
                                                    <span>{{ $value->price }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach

                    </div>
                </div><!-- .mw-box -->
            </div><!-- .member-wrap -->
            <br><br>
        </div>
        </div><!-- .site-content -->
    </main><!-- .site-main -->


    <script>
        $(document).ready(function() {
            $('.golo-add-to-wishlist').each(function() {
                var $element = $(this);
                var businessId = $element.data('business-id');
                var isBookmarked = localStorage.getItem('bookmark_' + businessId) == 'true';

                if (!isBookmarked) {
                    $element.addClass('bookmark-added');
                }

                $element.on('click', function(e) {
                    e.preventDefault();
                    isBookmarked = !isBookmarked; // Toggle bookmark state

                    $.ajax({
                        url: '/bookmark/' + businessId,
                        method: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                            businessId: businessId,
                            isBookmarked: isBookmarked,
                        },
                        success: function(data) {
                            if (isBookmarked) {
                                $element.addClass('bookmark-added');
                            } else {
                                $element.removeClass('bookmark-added');
                            }

                            // Store the bookmark state in localStorage
                            localStorage.setItem('bookmark_' + businessId,
                                isBookmarked);

                            // Reload the page after the bookmark state is updated
                            window.location.reload();
                        }
                    });
                });
            });
        });
    </script>

@endsection
