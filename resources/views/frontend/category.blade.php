@extends('frontend.layouts.master')
@section('title', 'Packages')
@section('content')

    <style>
        .price-container {
            display: flex;
            justify-content: center;
        }

        .price {
            font-weight: lighter;
            margin-right: 8px;
            /* Adjust spacing as needed */
        }

        .strike {
            text-decoration: line-through;
            color: gray;
            /* Adjust color as needed */
        }
    </style>
    <main id="main" class="site-main">
        <div class="page-title page-title--small align-left" style="background-image: url(images/bg/bg-checkout.png);">
            <div class="container">
                <div class="page-title__content">
                    <h1 class="page-title__name">Our Ranking</h1>
                </div>
            </div>
        </div><!-- .page-title -->

        <div class="site-content">
            <div class="pricing-area">

                @foreach ($packages as $package)
                @endforeach

                <div class="container">
                    <h2 class="title align-center">Choose the right category to rank in.</h2>
                    <div class="pricing-inner">
                        <div class="row">

                            @foreach ($ranking as $value)
                                <div class="col-lg-4">
                                    <div class="pricing-item">
                                        <h3>{{ $value->title }}</h3>
                                        <p>{{ $value->noOfPlace }} For Rank</p>
                                        <div class="price"><span class="currency">₹</span>{{ $value->price }}<span
                                                class="time">{{ $package->durationMY == 0 ? 'Monthly' : 'Yearly' }}</span>
                                        </div>

                                        @php
                                            $isActive = false;
                                            
                                            switch ($value->featuredType) {
                                                case 'city_listing':
                                                    $isActive = $businesses->city_ranking == '11';
                                                    break;
                                                case 'category_listing':
                                                    $isActive = $businesses->category_ranking == '11';
                                                    break;
                                                case 'home_featured':
                                                    $isActive = $businesses->home_featured == '11';
                                                    break;
                                                case 'search_results':
                                                    $isActive = $businesses->search_results == '11';
                                                    break;
                                            }
                                        @endphp

                                        @if ($isActive)
                                            <a href="/checkoutPage/{{ $businessId }}/{{ $userId }}/{{ $value->id }}"
                                                class="btn" title="Get Started">Get Started</a>
                                        @else
                                            <a href="#" class="btn" style="background-color:gray" title="Get Started">Already Racking Plan
                                                Active</a>
                                        @endif
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div><!-- .pricing-inner -->
                    <div class="payment-method">

                        <p>Our business listing packages help small and medium businesses get seen online and attract more
                            customers. With customizable profiles, linking to social media accounts, customer reviews and
                            online bookings, you can choose the package that best fits your budget and needs. Our support
                            team is available to help with any issues. Get the boost your business needs with our packages
                            today. </p>
                    </div><!-- .payment-method -->
                </div>

            </div><!-- .pricing-area -->

        </div><!-- .site-content -->

    </main><!-- .site-main -->

@endsection