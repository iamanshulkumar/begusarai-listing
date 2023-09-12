@extends('frontend.layouts.master')
@section('title', 'Listings')
@section('content')

    <style>
        .payment-button {
            background-color: #ffad2d;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .status-label {
            color: green;
            font-weight: bold;
        }
    </style>
    <main id="main" class="site-main">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="site-content owner-content">
            <div class="member-menu">
                <div class="container">
                    <ul>
                        <li><a href="/ownerDashboard">Dashboard</a></li>
                        <li><a href="/ownerLeads">Leads</a></li>
                        <li class="active"><a href="/ownerListing">Listings</a></li>
                        <li><a href="/ownerWishlist">Wishlist</a></li>
                        <li><a href="/ownerProfile">Profile</a></li>

                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="member-place-wrap">
                    <div class="member-wrap-top">
                        <h2>My Listings</h2>
                        <p>You are current FREE plan. <a href="pricing-plan.html">Upgrade now</a></p>
                    </div><!-- .member-wrap-top -->
                    <div class="member-filter">
                        <div class="mf-left">
                            <form action="#" method="GET">
                                <div class="field-select">


                                    <select name="place_cities">
                                        <option value="0">All cities</option>

                                    </select>
                                    <i class="la la-angle-down"></i>
                                </div>
                                <div class="field-select">
                                    <select name="place_cities">
                                        <option value="0">All categories</option>

                                    </select>
                                    <i class="la la-angle-down"></i>
                                </div>
                            </form>
                        </div><!-- .mf-left -->
                        <div class="mf-right">
                            <form action="#" class="site__search__form" method="GET">
                                <div class="site__search__field">
                                    <span class="site__search__icon">
                                        <i class="la la-search"></i>
                                    </span><!-- .site__search__icon -->
                                    <input class="site__search__input" type="text" name="s" placeholder="Search">
                                </div><!-- .search__input -->
                            </form><!-- .search__form -->
                        </div><!-- .mf-right -->
                    </div><!-- .member-filter -->









                    <table class="member-place-list table-responsive">
                        <caption>List of Businesses</caption> <!-- Add a caption for the table -->
                        <thead>
                            <tr>
                                <th>
                                    <div class="field-check">
                                        <label for="all">
                                            <input id="all" type="checkbox" value="all">
                                            <span class="checkmark">
                                                <i class="la la-check"></i>
                                            </span>
                                        </label>
                                    </div>
                                </th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>City</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Payment</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($businesses as $business)
                                <tr>
                                    <td>
                                        <div class="field-check">
                                            <label for="place{{ $business->id }}">
                                                <input id="place{{ $business->id }}" type="checkbox"
                                                    value="{{ $business->id }}">
                                                <span class="checkmark">
                                                    <i class="la la-check"></i>
                                                </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $business->businessName }}</td>
                                    <td>{{ $business->city }}</td>
                                    <td>{{ $business->category }}</td>
                                    <td style="color: {{ $business->status == 0 ? '#ffad2d' : 'green' }}">
                                        {{ $business->status == 0 ? 'Pending' : 'Approved' }}
                                    </td>
                                    <td>
                                        @if ($business->planStatus == 0)
                                            <button href="#" class="payment-button"
                                                style="background-color: #ffad2d; color: white;">
                                                <i class="fas fa-money-bill" style="font-size: 20px; color:white;"></i> Pay
                                                Now
                                            </button>
                                        @else
                                            <span class="status-label" style="color: green;">
                                                <i class="fas fa-check-circle " style="font-size: 20px;"></i>
                                                Done
                                            </span>
                                        @endif
                                    </td>




                                    <td class="place-action">
                                        <a href="{{ route('editPlace', ['id' => $business->id]) }}" class="edit"
                                            title="Edit">
                                            <i class="las la-edit"></i>
                                        </a>


                                        <a href="#" class="view" title="View"><i class="la la-eye"></i></a>
                                        <a href="#" class="delete" title="Delete"><i class="la la-trash-alt"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div><!-- .member-place-wrap -->
            </div>
        </div><!-- .site-content -->
    </main><!-- .site-main -->


@endsection