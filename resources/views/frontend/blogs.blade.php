@extends('frontend.layouts.master')
@section('title', 'Blogs')
@section('content')

    <main id="main" class="site-main">
        <div class="page-title page-title--small page-title--blog align-left"
            style="background-image: url({{ asset('/frontend-assets/images/bg/bg-blog.png') }});">
            <div class="container">
                <div class="page-title__content">
                    <h1 class="page-title__name">Blog Fullwidth</h1>
                    <p class="page-title__slogan">Let our experts inspire you</p>
                </div>
            </div>
        </div><!-- .page-title -->
        <div class="page-content isotope">
            <div class="container">
                <div class="isotope__nav">
                    <ul>
                        <li><a title="All" href="#" class="active" data-filter="*">All (59)</a></li>
                        <li><a title="Beaches" href="#" data-filter=".beaches">Beaches (8)</a></li>
                        <li><a title="Tips & Tricks" href="#" data-filter=".tip">Tips & Tricks (12)</a></li>
                        <li><a title="Take a break" href="#" data-filter=".take">Take a break (23)</a></li>
                        <li><a title="Unique Stay" href="#" data-filter=".unique">Unique Stay (44)</a></li>
                        <li><a title="Road Trips" href="#" data-filter=".road">Road Trips (17)</a></li>
                    </ul>
                </div><!-- .isotope__nav -->
                <div class="isotope__grid post-grid columns-3">
                    <article class="hover__box isotope__grid__item post beaches">
                        <div class="post__thumb hover__box__thumb">
                            <a title="Scuba diving for beginners: tips for your first diving trip"
                                href="blog-detail.html"><img src="{{ asset('images/blog/thumb-01.jpg')}}"
                                    alt="Scuba diving for beginners: tips for your first diving trip"></a>
                        </div>
                        <div class="post__info">
                            <ul class="post__category">
                                <li><a title="Beachers" href="#">Beachers</a></li>
                            </ul>
                            <h3 class="post__title"><a title="Scuba diving for beginners: tips for your first diving trip"
                                    href="blog-detail.html">Scuba diving for beginners: tips for your first diving trip</a>
                            </h3>
                        </div>
                    </article>
                    <article class="hover__box isotope__grid__item post tip">
                        <div class="post__thumb hover__box__thumb">
                            <a title="How to Get Around Rome on the Cheap in 2019" href="blog-detail.html"><img
                                    src="images/blog/thumb-02.jpg" alt="How to Get Around Rome on the Cheap in 2019"></a>
                        </div>
                        <div class="post__info">
                            <ul class="post__category">
                                <li><a title="Tips & Tricks" href="#">Tips & Tricks</a></li>
                            </ul>
                            <h3 class="post__title"><a title="How to Get Around Rome on the Cheap in 2019"
                                    href="blog-detail.html">How to Get Around Rome on the Cheap in 2019</a></h3>
                        </div>
                    </article>
                    <article class="hover__box isotope__grid__item post tip">
                        <div class="post__thumb hover__box__thumb">
                            <a title="Europe Explained in Fewer than 140 Characters" href="blog-detail.html"><img
                                    src="images/blog/thumb-03.jpg" alt="Europe Explained in Fewer than 140 Characters"></a>
                        </div>
                        <div class="post__info">
                            <ul class="post__category">
                                <li><a title="Tips & Tricks" href="#">Tips & Tricks</a></li>
                            </ul>
                            <h3 class="post__title"><a title="Europe Explained in Fewer than 140 Characters"
                                    href="blog-detail.html">Europe Explained in Fewer than 140 Characters</a></h3>
                        </div>
                    </article>
                    <article class="hover__box isotope__grid__item post take">
                        <div class="post__thumb hover__box__thumb">
                            <a title="Travel: Expectations vs. Reality, Best of 2019" href="blog-detail.html"><img
                                    src="images/blog/thumb-04.jpg" alt="Travel: Expectations vs. Reality, Best of 2019"></a>
                        </div>
                        <div class="post__info">
                            <ul class="post__category">
                                <li><a title="Take a break" href="#">Take a break</a></li>
                            </ul>
                            <h3 class="post__title"><a title="Travel: Expectations vs. Reality, Best of 2019"
                                    href="blog-detail.html">Travel: Expectations vs. Reality, Best of 2019</a></h3>
                        </div>
                    </article>
                    <article class="hover__box isotope__grid__item post unique">
                        <div class="post__thumb hover__box__thumb">
                            <a title="You Had a Million Dollars, Where Would You Go?" href="blog-detail.html"><img
                                    src="images/blog/thumb-05.jpg" alt="You Had a Million Dollars, Where Would You Go?"></a>
                        </div>
                        <div class="post__info">
                            <ul class="post__category">
                                <li><a title="Unique stay" href="#">Unique stay</a></li>
                            </ul>
                            <h3 class="post__title"><a title="You Had a Million Dollars, Where Would You Go?"
                                    href="blog-detail.html">You Had a Million Dollars, Where Would You Go?</a></h3>
                        </div>
                    </article>
                    <article class="hover__box isotope__grid__item post unique">
                        <div class="post__thumb hover__box__thumb">
                            <a title="Getting Summer-Ready: How to Prepare for Caravan Trips" href="blog-detail.html"><img
                                    src="images/blog/thumb-06.jpg"
                                    alt="Getting Summer-Ready: How to Prepare for Caravan Trips"></a>
                        </div>
                        <div class="post__info">
                            <ul class="post__category">
                                <li><a title="Unique stay" href="#">Unique stay</a></li>
                            </ul>
                            <h3 class="post__title"><a title="Getting Summer-Ready: How to Prepare for Caravan Trips"
                                    href="blog-detail.html">Getting Summer-Ready: How to Prepare for Caravan Trips</a></h3>
                        </div>
                    </article>
                    <article class="hover__box isotope__grid__item post road">
                        <div class="post__thumb hover__box__thumb">
                            <a title="Hofmeisterei Hirtzberger – The Taste of Wachau" href="blog-detail.html"><img
                                    src="images/blog/thumb-07.jpg"
                                    alt="Hofmeisterei Hirtzberger – The Taste of Wachau"></a>
                        </div>
                        <div class="post__info">
                            <ul class="post__category">
                                <li><a title="Road trip" href="#">Road trip</a></li>
                            </ul>
                            <h3 class="post__title"><a title="Hofmeisterei Hirtzberger – The Taste of Wachau"
                                    href="blog-detail.html">Hofmeisterei Hirtzberger – The Taste of Wachau</a></h3>
                        </div>
                    </article>
                    <article class="hover__box isotope__grid__item post shopping">
                        <div class="post__thumb hover__box__thumb">
                            <a title="J. & L. Lobmeyr Vienna 1823 – World-famous Glass Craftmanship"
                                href="blog-detail.html"><img src="images/blog/thumb-08.jpg"
                                    alt="J. & L. Lobmeyr Vienna 1823 – World-famous Glass Craftmanship"></a>
                        </div>
                        <div class="post__info">
                            <ul class="post__category">
                                <li><a title="Shopping" href="#">Shopping</a></li>
                            </ul>
                            <h3 class="post__title"><a
                                    title="J. & L. Lobmeyr Vienna 1823 – World-famous Glass Craftmanship"
                                    href="blog-detail.html">J. & L. Lobmeyr Vienna 1823 – World-famous Glass
                                    Craftmanship</a></h3>
                        </div>
                    </article>
                    <article class="hover__box isotope__grid__item post shopping">
                        <div class="post__thumb hover__box__thumb">
                            <a title="Staudigl Perfumery and Health Shop – Caress your Soul" href="blog-detail.html"><img
                                    src="images/blog/thumb-09.jpg"
                                    alt="Staudigl Perfumery and Health Shop – Caress your Soul"></a>
                        </div>
                        <div class="post__info">
                            <ul class="post__category">
                                <li><a title="Shopping" href="#">Shopping</a></li>
                            </ul>
                            <h3 class="post__title"><a title="Staudigl Perfumery and Health Shop – Caress your Soul"
                                    href="blog-detail.html">Staudigl Perfumery and Health Shop – Caress your Soul</a></h3>
                        </div>
                    </article>
                    <article class="hover__box isotope__grid__item post eating">
                        <div class="post__thumb hover__box__thumb">
                            <a title="The 8 Most Affordable Michelin Restaurants in Paris" href="blog-detail.html"><img
                                    src="images/blog/thumb-10.jpg"
                                    alt="The 8 Most Affordable Michelin Restaurants in Paris"></a>
                        </div>
                        <div class="post__info">
                            <ul class="post__category">
                                <li><a title="Eating" href="#">Eating</a></li>
                            </ul>
                            <h3 class="post__title"><a title="The 8 Most Affordable Michelin Restaurants in Paris"
                                    href="blog-detail.html">The 8 Most Affordable Michelin Restaurants in Paris</a></h3>
                        </div>
                    </article>
                    <article class="hover__box isotope__grid__item post natural">
                        <div class="post__thumb hover__box__thumb">
                            <a title="Altstadt Vienna – A Boutique Hotel full of Modern Art" href="blog-detail.html"><img
                                    src="images/blog/thumb-11.jpg"
                                    alt="Altstadt Vienna – A Boutique Hotel full of Modern Art"></a>
                        </div>
                        <div class="post__info">
                            <ul class="post__category">
                                <li><a title="Natural" href="#">Natural</a></li>
                            </ul>
                            <h3 class="post__title"><a title="Altstadt Vienna – A Boutique Hotel full of Modern Art"
                                    href="blog-detail.html">Altstadt Vienna – A Boutique Hotel full of Modern Art</a></h3>
                        </div>
                    </article>
                    <article class="hover__box isotope__grid__item post natural">
                        <div class="post__thumb hover__box__thumb">
                            <a title="Hollmann Beletage – Soft Colours for Cosy Homeliness" href="blog-detail.html"><img
                                    src="images/blog/thumb-12.jpg"
                                    alt="Hollmann Beletage – Soft Colours for Cosy Homeliness"></a>
                        </div>
                        <div class="post__info">
                            <ul class="post__category">
                                <li><a title="Natural" href="#">Natural</a></li>
                            </ul>
                            <h3 class="post__title"><a title="Hollmann Beletage – Soft Colours for Cosy Homeliness"
                                    href="blog-detail.html">Hollmann Beletage – Soft Colours for Cosy Homeliness</a></h3>
                        </div>
                    </article>
                </div><!-- .isotope__grid -->
                <div class="pagination">
                    <div class="pagination__numbers">
                        <span>1</span>
                        <a title="2" href="#">2</a>
                        <a title="Next" href="#">
                            <i class="la la-angle-right"></i>
                        </a>
                    </div>
                </div><!-- .pagination -->
            </div>
        </div>
    </main><!-- .site-main -->


@endsection
