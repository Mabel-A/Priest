@extends('layouts.footer')
@extends('layouts.header')
@section('content')
    <!-- Blog Heading -->
    <section id="blog-heading">
        <div class="heading-section">
            <div class="container">
                <div class="heading-text pull-left">
                    <h1 class="blog-title">Event</h1>
                </div><!-- /.heading-text -->

                <div class="breadcrumb pull-right">
                    <a href="#">Home</a><i class="fa fa-angle-double-right"></i> Event
                </div><!-- end breadcrumb -->
            </div><!-- /.container -->
        </div><!-- /.heading-fullwidth -->
    </section><!-- end blog heading -->

    <!-- Blog Page Container -->
    <section id="blog-page-container" class="event-three-column">
        <div class="container">
            <div class="row">
                <!-- all event start  -->
                <div class="col-md-4">
                    <div class="all-event">
                        <div class="event-post">
                            <div class="feature-img">
                                <img width="300" height="206" src="{{ asset('images/09/10.jpeg') }}"
                                    class="attachment-medium wp-post-image" alt="gallery27" />
                            </div><!-- end feature img -->

                            <div class="events-date">
                                <span class="event-date">10</span>
                                <br>
                                <span class="event-month">Nov</span>
                            </div><!-- end event date -->

                            <h2 class="uppercase"><a href="#" title="Open Rededication 1">Open Rededication 1</a></h2>

                            <div class="event-period">
                                <div class="row">
                                    <p class="col-md-10 col-sm-10 col-xs-10 period-session">
                                        <i class="fa fa-clock-o"></i> 10am - 12pm
                                        <br>
                                        <i class="fa fa-map-marker"></i> PO Box 16122, Collins Street
                                    </p>

                                    <p class="col-md-2 col-sm-2 col-xs-2 comments-share">
                                        <span class="cmnt"><i class="fa fa-comments-o"></i> <a
                                                href="event-three-columncff1.html?p=1#comments">10</a></span>
                                        <i class="fa fa-share-alt">
                                            <span class="social-button">
                                                <a href="#" onclick="window.open(this.href); return false;"><i
                                                        class="fa fa-facebook"></i></a>
                                                <a href="#" title="Share this post on Twitter!" target="_blank"><i
                                                        class="fa fa-twitter"></i></a>
                                                <a href="#" title="Share this post on google plus!" target="_blank"><i
                                                        class="fa fa-google-plus"></i></a>
                                                <a class="linkedin" href="#" title="Share on LinkedIn"
                                                    rel="external nofollow" target="_blank"><i
                                                        class="fa fa-linkedin"></i></a>
                                                <a class="pinterest" href="#" title="Pinterest" rel="nofollow"
                                                    target="_blank"><i class="fa fa-pinterest"></i></a>
                                            </span>
                                        </i>
                                    </p><!-- /.comments-share -->
                                </div><!-- end row -->
                            </div><!-- /.event-period -->

                            <div class="event-description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                            </div><!-- event description -->
                        </div><!-- end event post -->
                    </div><!-- end all event -->
                </div><!-- end col md 4 -->


                <!-- all event start  -->
                <div class="col-md-4">
                    <div class="all-event">
                        <div class="event-post">
                            <div class="feature-img">
                                <img width="300" height="206" src="{{ asset('images/09/11.jpeg') }}"
                                    class="attachment-medium wp-post-image" alt="event5" />
                            </div>

                            <div class="events-date">
                                <span class="event-date">10</span>
                                <br>
                                <span class="event-month">Jan</span>
                            </div>
                            <h2 class="uppercase"><a href="#" title="Big Event This Year">Big Event This Year</a></h2>

                            <div class="event-period">
                                <div class="row">
                                    <p class="col-md-10 col-sm-10 col-xs-10 period-session">
                                        <i class="fa fa-clock-o"></i> 02pm - 04pm
                                        <br>
                                        <i class="fa fa-map-marker"></i> PO Box 16122, Collins Street
                                    </p>
                                    <p class="col-md-2 col-sm-2 col-xs-2 comments-share">
                                        <span class="cmnt"><i class="fa fa-comments-o"></i> <a
                                                href="event-three-columncff1.html?p=1#comments">10</a></span>
                                        <i class="fa fa-share-alt">
                                            <span class="social-button">
                                                <a href="#" onclick="window.open(this.href); return false;"><i
                                                        class="fa fa-facebook"></i></a>
                                                <a href="#" title="Share this post on Twitter!" target="_blank"><i
                                                        class="fa fa-twitter"></i></a>
                                                <a href="#" title="Share this post on google plus!" target="_blank"><i
                                                        class="fa fa-google-plus"></i></a>
                                                <a class="linkedin" href="#" title="Share on LinkedIn"
                                                    rel="external nofollow" target="_blank"><i
                                                        class="fa fa-linkedin"></i></a>
                                                <a class="pinterest" href="#" title="Pinterest" rel="nofollow"
                                                    target="_blank"><i class="fa fa-pinterest"></i></a>
                                            </span>
                                        </i>
                                    </p><!-- /.comments-share -->
                                </div>
                            </div><!-- /.event-period -->

                            <div class="event-description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                            </div><!-- event desc  -->
                        </div><!-- end event post -->
                    </div><!-- end all event -->
                </div><!-- end col md 4 -->

                <!-- all event start  -->
                <div class="col-md-4">
                    <div class="all-event">
                        <div class="event-post">
                            <div class="feature-img">
                                <img width="300" height="206" src="{{ asset('images/09/12.jpeg') }}"
                                    class="attachment-medium wp-post-image" alt="event4" />
                            </div>
                            <div class="events-date">
                                <span class="event-date">16</span>
                                <br>
                                <span class="event-month">Dec</span>
                            </div>
                            <h2 class="uppercase"><a href="#" title="Church Evert 2">Church Evert 2</a></h2>
                            <div class="event-period">
                                <div class="row">
                                    <p class="col-md-10 col-sm-10 col-xs-10 period-session">
                                        <i class="fa fa-clock-o"></i> 08am - 11am
                                        <br>
                                        <i class="fa fa-map-marker"></i> PO Box 16122, Collins Street
                                    </p>
                                    <p class="col-md-2 col-sm-2 col-xs-2 comments-share">
                                        <span class="cmnt"><i class="fa fa-comments-o"></i> <a
                                                href="event-three-columncff1.html?p=1#comments">10</a></span>
                                        <i class="fa fa-share-alt">
                                            <span class="social-button">
                                                <a href="#" onclick="window.open(this.href); return false;"><i
                                                        class="fa fa-facebook"></i></a>
                                                <a href="#" title="Share this post on Twitter!" target="_blank"><i
                                                        class="fa fa-twitter"></i></a>
                                                <a href="#" title="Share this post on google plus!"
                                                    target="_blank"><i class="fa fa-google-plus"></i></a>
                                                <a class="linkedin" href="#" title="Share on LinkedIn"
                                                    rel="external nofollow" target="_blank"><i
                                                        class="fa fa-linkedin"></i></a>
                                                <a class="pinterest" href="#" title="Pinterest" rel="nofollow"
                                                    target="_blank"><i class="fa fa-pinterest"></i></a>
                                            </span>
                                        </i>
                                    </p>
                                    <!-- /.comments-share -->
                                </div>
                            </div>
                            <!-- /.event-period -->
                            <div class="event-description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                            </div><!-- event desc  -->
                        </div><!-- end event post -->
                    </div><!-- end all event -->
                </div><!-- end col md 4 -->

                <div class="col-md-4">
                    <div class="all-event">
                        <div class="event-post">
                            <div class="feature-img">
                                <img width="300" height="206" src="{{ asset('images/09/13.jpeg') }}"
                                    class="attachment-medium wp-post-image" alt="gallery27" />
                            </div><!-- end feature img -->

                            <div class="events-date">
                                <span class="event-date">10</span>
                                <br>
                                <span class="event-month">Nov</span>
                            </div><!-- end event date -->

                            <h2 class="uppercase"><a href="#" title="Open Rededication 1">Open Rededication 1</a>
                            </h2>

                            <div class="event-period">
                                <div class="row">
                                    <p class="col-md-10 col-sm-10 col-xs-10 period-session">
                                        <i class="fa fa-clock-o"></i> 10am - 12pm
                                        <br>
                                        <i class="fa fa-map-marker"></i> PO Box 16122, Collins Street
                                    </p>

                                    <p class="col-md-2 col-sm-2 col-xs-2 comments-share">
                                        <span class="cmnt"><i class="fa fa-comments-o"></i> <a
                                                href="event-three-columncff1.html?p=1#comments">10</a></span>
                                        <i class="fa fa-share-alt">
                                            <span class="social-button">
                                                <a href="#" onclick="window.open(this.href); return false;"><i
                                                        class="fa fa-facebook"></i></a>
                                                <a href="#" title="Share this post on Twitter!" target="_blank"><i
                                                        class="fa fa-twitter"></i></a>
                                                <a href="#" title="Share this post on google plus!"
                                                    target="_blank"><i class="fa fa-google-plus"></i></a>
                                                <a class="linkedin" href="#" title="Share on LinkedIn"
                                                    rel="external nofollow" target="_blank"><i
                                                        class="fa fa-linkedin"></i></a>
                                                <a class="pinterest" href="#" title="Pinterest" rel="nofollow"
                                                    target="_blank"><i class="fa fa-pinterest"></i></a>
                                            </span>
                                        </i>
                                    </p><!-- /.comments-share -->
                                </div><!-- end row -->
                            </div><!-- /.event-period -->

                            <div class="event-description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                            </div><!-- event description -->
                        </div><!-- end event post -->
                    </div><!-- end all event -->
                </div><!-- end col md 4 -->


                <!-- all event start  -->
                <div class="col-md-4">
                    <div class="all-event">
                        <div class="event-post">
                            <div class="feature-img">
                                <img width="300" height="206" src="{{ asset('images/09/14.jpeg') }}"
                                    class="attachment-medium wp-post-image" alt="event5" />
                            </div>

                            <div class="events-date">
                                <span class="event-date">10</span>
                                <br>
                                <span class="event-month">Jan</span>
                            </div>
                            <h2 class="uppercase"><a href="#" title="Big Event This Year">Big Event This Year</a>
                            </h2>

                            <div class="event-period">
                                <div class="row">
                                    <p class="col-md-10 col-sm-10 col-xs-10 period-session">
                                        <i class="fa fa-clock-o"></i> 02pm - 04pm
                                        <br>
                                        <i class="fa fa-map-marker"></i> PO Box 16122, Collins Street
                                    </p>
                                    <p class="col-md-2 col-sm-2 col-xs-2 comments-share">
                                        <span class="cmnt"><i class="fa fa-comments-o"></i> <a
                                                href="event-three-columncff1.html?p=1#comments">10</a></span>
                                        <i class="fa fa-share-alt">
                                            <span class="social-button">
                                                <a href="#" onclick="window.open(this.href); return false;"><i
                                                        class="fa fa-facebook"></i></a>
                                                <a href="#" title="Share this post on Twitter!" target="_blank"><i
                                                        class="fa fa-twitter"></i></a>
                                                <a href="#" title="Share this post on google plus!"
                                                    target="_blank"><i class="fa fa-google-plus"></i></a>
                                                <a class="linkedin" href="#" title="Share on LinkedIn"
                                                    rel="external nofollow" target="_blank"><i
                                                        class="fa fa-linkedin"></i></a>
                                                <a class="pinterest" href="#" title="Pinterest" rel="nofollow"
                                                    target="_blank"><i class="fa fa-pinterest"></i></a>
                                            </span>
                                        </i>
                                    </p><!-- /.comments-share -->
                                </div>
                            </div><!-- /.event-period -->

                            <div class="event-description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                            </div><!-- event desc  -->
                        </div><!-- end event post -->
                    </div><!-- end all event -->
                </div><!-- end col md 4 -->

                <!-- all event start  -->
                <div class="col-md-4">
                    <div class="all-event">
                        <div class="event-post">
                            <div class="feature-img">
                                <img width="300" height="206" src="{{ asset('images/09/15.jpeg') }}"
                                    class="attachment-medium wp-post-image" alt="event4" />
                            </div>
                            <div class="events-date">
                                <span class="event-date">16</span>
                                <br>
                                <span class="event-month">Dec</span>
                            </div>
                            <h2 class="uppercase"><a href="#" title="Church Evert 2">Church Evert 2</a></h2>
                            <div class="event-period">
                                <div class="row">
                                    <p class="col-md-10 col-sm-10 col-xs-10 period-session">
                                        <i class="fa fa-clock-o"></i> 08am - 11am
                                        <br>
                                        <i class="fa fa-map-marker"></i> PO Box 16122, Collins Street
                                    </p>
                                    <p class="col-md-2 col-sm-2 col-xs-2 comments-share">
                                        <span class="cmnt"><i class="fa fa-comments-o"></i> <a
                                                href="event-three-columncff1.html?p=1#comments">10</a></span>
                                        <i class="fa fa-share-alt">
                                            <span class="social-button">
                                                <a href="#" onclick="window.open(this.href); return false;"><i
                                                        class="fa fa-facebook"></i></a>
                                                <a href="#" title="Share this post on Twitter!" target="_blank"><i
                                                        class="fa fa-twitter"></i></a>
                                                <a href="#" title="Share this post on google plus!"
                                                    target="_blank"><i class="fa fa-google-plus"></i></a>
                                                <a class="linkedin" href="#" title="Share on LinkedIn"
                                                    rel="external nofollow" target="_blank"><i
                                                        class="fa fa-linkedin"></i></a>
                                                <a class="pinterest" href="#" title="Pinterest" rel="nofollow"
                                                    target="_blank"><i class="fa fa-pinterest"></i></a>
                                            </span>
                                        </i>
                                    </p>
                                    <!-- /.comments-share -->
                                </div>
                            </div>
                            <!-- /.event-period -->
                            <div class="event-description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                            </div><!-- event desc  -->
                        </div><!-- end event post -->
                    </div><!-- end all event -->
                </div><!-- end col md 4 -->

                <div class="col-md-4">
                    <div class="all-event">
                        <div class="event-post">
                            <div class="feature-img">
                                <img width="300" height="206" src="{{ asset('images/09/16.jpeg') }}"
                                    class="attachment-medium wp-post-image" alt="gallery27" />
                            </div><!-- end feature img -->

                            <div class="events-date">
                                <span class="event-date">10</span>
                                <br>
                                <span class="event-month">Nov</span>
                            </div><!-- end event date -->

                            <h2 class="uppercase"><a href="#" title="Open Rededication 1">Open Rededication 1</a>
                            </h2>

                            <div class="event-period">
                                <div class="row">
                                    <p class="col-md-10 col-sm-10 col-xs-10 period-session">
                                        <i class="fa fa-clock-o"></i> 10am - 12pm
                                        <br>
                                        <i class="fa fa-map-marker"></i> PO Box 16122, Collins Street
                                    </p>

                                    <p class="col-md-2 col-sm-2 col-xs-2 comments-share">
                                        <span class="cmnt"><i class="fa fa-comments-o"></i> <a
                                                href="event-three-columncff1.html?p=1#comments">10</a></span>
                                        <i class="fa fa-share-alt">
                                            <span class="social-button">
                                                <a href="#" onclick="window.open(this.href); return false;"><i
                                                        class="fa fa-facebook"></i></a>
                                                <a href="#" title="Share this post on Twitter!" target="_blank"><i
                                                        class="fa fa-twitter"></i></a>
                                                <a href="#" title="Share this post on google plus!"
                                                    target="_blank"><i class="fa fa-google-plus"></i></a>
                                                <a class="linkedin" href="#" title="Share on LinkedIn"
                                                    rel="external nofollow" target="_blank"><i
                                                        class="fa fa-linkedin"></i></a>
                                                <a class="pinterest" href="#" title="Pinterest" rel="nofollow"
                                                    target="_blank"><i class="fa fa-pinterest"></i></a>
                                            </span>
                                        </i>
                                    </p><!-- /.comments-share -->
                                </div><!-- end row -->
                            </div><!-- /.event-period -->

                            <div class="event-description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                            </div><!-- event description -->
                        </div><!-- end event post -->
                    </div><!-- end all event -->
                </div><!-- end col md 4 -->


                <!-- all event start  -->
                <div class="col-md-4">
                    <div class="all-event">
                        <div class="event-post">
                            <div class="feature-img">
                                <img width="300" height="206" src="{{ asset('images/09/17.jpeg') }}"
                                    class="attachment-medium wp-post-image" alt="event5" />
                            </div>

                            <div class="events-date">
                                <span class="event-date">10</span>
                                <br>
                                <span class="event-month">Jan</span>
                            </div>
                            <h2 class="uppercase"><a href="#" title="Big Event This Year">Big Event This Year</a>
                            </h2>

                            <div class="event-period">
                                <div class="row">
                                    <p class="col-md-10 col-sm-10 col-xs-10 period-session">
                                        <i class="fa fa-clock-o"></i> 02pm - 04pm
                                        <br>
                                        <i class="fa fa-map-marker"></i> PO Box 16122, Collins Street
                                    </p>
                                    <p class="col-md-2 col-sm-2 col-xs-2 comments-share">
                                        <span class="cmnt"><i class="fa fa-comments-o"></i> <a
                                                href="event-three-columncff1.html?p=1#comments">10</a></span>
                                        <i class="fa fa-share-alt">
                                            <span class="social-button">
                                                <a href="#" onclick="window.open(this.href); return false;"><i
                                                        class="fa fa-facebook"></i></a>
                                                <a href="#" title="Share this post on Twitter!" target="_blank"><i
                                                        class="fa fa-twitter"></i></a>
                                                <a href="#" title="Share this post on google plus!"
                                                    target="_blank"><i class="fa fa-google-plus"></i></a>
                                                <a class="linkedin" href="#" title="Share on LinkedIn"
                                                    rel="external nofollow" target="_blank"><i
                                                        class="fa fa-linkedin"></i></a>
                                                <a class="pinterest" href="#" title="Pinterest" rel="nofollow"
                                                    target="_blank"><i class="fa fa-pinterest"></i></a>
                                            </span>
                                        </i>
                                    </p><!-- /.comments-share -->
                                </div>
                            </div><!-- /.event-period -->

                            <div class="event-description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                            </div><!-- event desc  -->
                        </div><!-- end event post -->
                    </div><!-- end all event -->
                </div><!-- end col md 4 -->

                <!-- all event start  -->
                <div class="col-md-4">
                    <div class="all-event">
                        <div class="event-post">
                            <div class="feature-img">
                                <img width="300" height="206" src="{{ asset('images/09/18.jpeg') }}"
                                    class="attachment-medium wp-post-image" alt="event4" />
                            </div>
                            <div class="events-date">
                                <span class="event-date">16</span>
                                <br>
                                <span class="event-month">Dec</span>
                            </div>
                            <h2 class="uppercase"><a href="#" title="Church Evert 2">Church Evert 2</a></h2>
                            <div class="event-period">
                                <div class="row">
                                    <p class="col-md-10 col-sm-10 col-xs-10 period-session">
                                        <i class="fa fa-clock-o"></i> 08am - 11am
                                        <br>
                                        <i class="fa fa-map-marker"></i> PO Box 16122, Collins Street
                                    </p>
                                    <p class="col-md-2 col-sm-2 col-xs-2 comments-share">
                                        <span class="cmnt"><i class="fa fa-comments-o"></i> <a
                                                href="event-three-columncff1.html?p=1#comments">10</a></span>
                                        <i class="fa fa-share-alt">
                                            <span class="social-button">
                                                <a href="#" onclick="window.open(this.href); return false;"><i
                                                        class="fa fa-facebook"></i></a>
                                                <a href="#" title="Share this post on Twitter!" target="_blank"><i
                                                        class="fa fa-twitter"></i></a>
                                                <a href="#" title="Share this post on google plus!"
                                                    target="_blank"><i class="fa fa-google-plus"></i></a>
                                                <a class="linkedin" href="#" title="Share on LinkedIn"
                                                    rel="external nofollow" target="_blank"><i
                                                        class="fa fa-linkedin"></i></a>
                                                <a class="pinterest" href="#" title="Pinterest" rel="nofollow"
                                                    target="_blank"><i class="fa fa-pinterest"></i></a>
                                            </span>
                                        </i>
                                    </p>
                                    <!-- /.comments-share -->
                                </div>
                            </div>
                            <!-- /.event-period -->
                            <div class="event-description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                            </div><!-- event desc  -->
                        </div><!-- end event post -->
                    </div><!-- end all event -->
                </div><!-- end col md 4 -->

                <div class="pagination-nav">
                    <ul>
                        <li><a href="#"><i class="fa fa-angle-double-left"></i> Prev Page</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">--</a></li>
                        <li><a href="#">8</a></li>
                        <li><a href="#">9</a></li>
                        <li><a href="#">Next Page <i class="fa fa-angle-double-right"></i></a></li>
                    </ul>
                </div><!-- end pagination -->
            </div><!-- row -->
        </div><!-- #container -->
    </section><!-- end blog page container -->



    <div class="clearfix"></div>

    <!-- loaction start -->
    <div id="location">
        <div class="container">
            <div class="row">
                <div class="social-icons">
                    <ul>
                        <li class="facebook"><a href="http://facebook.com/id"><i
                                    class="fa fa-facebook"></i><span>Facebook</span></a></li>
                        <li class="twitter"><a href="http://twitter.com/id"><i
                                    class="fa fa-twitter"></i><span>Twitter</span></a></li>
                        <li class="vimeo"><a href="http://vimeo.com/id"><i
                                    class="fa fa-vimeo-square"></i><span>Vimeo</span></a></li>
                        <li class="behance"><a href="http://behance.com/id"><i
                                    class="fa fa-behance"></i><span>Behance</span></a></li>
                    </ul>
                </div><!-- end social icon-->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- end loaction-->
@endsection

@push('scripts')
@endpush
