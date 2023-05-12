<!-- footer widget start -->
<div class="footer-widget">
    <div class="container">
        <aside id="text-2" class="widget widget_text">
            <div class="col-md-3">
                <h2 class="widget-title">About Peace</h2>
                <div class="textwidget"><img src="{{ asset('images/09/5.jpeg') }}" alt="about-place" />
                    <br />
                    <br /> Dramatically strategize economically sound action items for e-business niches. Quickly
                    re-engineer 24/365 potentialities before.
                </div>
            </div><!-- end col md 3 -->
        </aside>

        <aside id="tag_cloud-4" class="widget widget_tag_cloud">
            <div class="col-md-3">
                <h2 class="widget-title">Post Tag</h2>
                <div class="tagcloud">
                    <a href='' class='tag-link-37' title='1 topic' style='font-size: 8pt;'>Christian</a>
                    <a href='' class='tag-link-38' title='1 topic' style='font-size: 8pt;'>Hindu</a>
                    <a href='' class='tag-link-32' title='1 topic' style='font-size: 8pt;'>Magazine</a>
                    {{--   <a href='#' class='tag-link-36' title='1 topic' style='font-size: 8pt;'>Muslims</a>
                    <a href='#' class='tag-link-31' title='1 topic' style='font-size: 8pt;'>News</a>
                    <a href='#' class='tag-link-34' title='1 topic' style='font-size: 8pt;'>SEO</a>
                    <a href='#' class='tag-link-35' title='1 topic' style='font-size: 8pt;'>Themes</a>
                    <a href='#' class='tag-link-33' title='1 topic' style='font-size: 8pt;'>WordPress</a>
                    <a href='#' class='tag-link-33' title='1 topic' style='font-size: 8pt;'>Web Development</a>
                    <a href='#' class='tag-link-33' title='1 topic' style='font-size: 8pt;'>Design</a>
                    <a href='#' class='tag-link-33' title='1 topic' style='font-size: 8pt;'>Photography</a>
                    <a href='#' class='tag-link-33' title='1 topic' style='font-size: 8pt;'>Media</a> --}}
                </div><!-- end tagcloud -->
            </div><!-- end col md 3 -->
        </aside>

        <aside id="ccr_popular_posts-5" class="widget widget_ccr_popular_posts">
            <div class="col-md-3">
                <h2 class="widget-title">Recent Post</h2>
                <ul class="popular-post">
                    <li>
                        <img width="150" height="150" src="{{ asset('images/09/7.jpeg') }}"
                            class="attachment-thumbnail wp-post-image" alt="02" /> <a href="#"
                            title="Collaboratively coordinate.">Collaboratively coordinate.</a>
                        <br>
                        <i class="fa fa-calendar-o"></i>
                        <time class="post-meta-element" datetime="2022-11-16">16 November, 2022</time>
                    </li>
                    <li>
                        <img width="150" height="150" src="{{ asset('images/09/8.jpeg') }}"
                            class="attachment-thumbnail wp-post-image" alt="03" /> <a href="#"
                            title="Quickly develop exceptional">Quickly develop exceptional</a>
                        <br>
                        <i class="fa fa-calendar-o"></i>
                        <time class="post-meta-element" datetime="2022-11-16">16 November, 2022</time>
                    </li>
                    {{--  <li>
                        <img width="150" height="150" src="{{ asset('images/09/01-150x150.jpg') }}"
                            class="attachment-thumbnail wp-post-image" alt="01" /> <a href="#"
                            title="Why you need Peace WordPress Theme?">Why you need Peace WordPress Theme?</a>
                        <br>
                        <i class="fa fa-calendar-o"></i>
                        <time class="post-meta-element" datetime="2015-09-10">10 September, 2015</time>
                    </li> --}}
                </ul><!-- /.latest-post -->
            </div><!-- end col md 3 -->
        </aside>

        <aside id="meta-3" class="widget widget_meta">
            <div class="col-md-3">
                <h2 class="widget-title">Useful Links</h2>
                <ul>
                    <li><a href="/">contact</a></li>
                    <li><a href="#">Donate</li>
                   {{--  <li><a href="#">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                    <li><a href="#"
                            title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress.org</a>
                    </li>
                    <li><a href="#">Google</a></li>
                    <li><a href="#">Envato</a></li> --}}
                </ul>
            </div><!-- end col md 3 -->
        </aside>
    </div><!-- end container -->
</div><!-- end footer widget -->


<!-- footer start  -->
<footer id="footer">
    <div class="container">
        <div class="row">

            <div class="clearfix"></div>
            <div class="logo text-center">
                <a href="/"><img src="{{ asset('images/09/logo.png') }}" alt="Peace"></a>
            </div><!-- /.logo -->

            <div class="copyright">
                <p>Copyright © 2023 <a href="">Peace</a> | Designed by <a href="">EMPIRE-TECH</a></p>
            </div><!-- .copyright -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</footer>
</div><!-- /.peace layout end -->

<!-- js include -->
<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=true&amp;ver=1.0'></script>
<script type='text/javascript' src='{{ asset('assets/js/plugins.js') }}'></script>
<script type='text/javascript' src='{{ asset('assets/js/masterslider.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('assets/js/functions.js') }}'></script>

<script>
    // masterslider
    (function($) {
        "use strict";

        $(function() {
            var masterslider_8dad = new MasterSlider();

            // slider controls
            masterslider_8dad.control('bullets', {
                autohide: true,
                overVideo: true,
                dir: 'h',
                align: 'bottom',
                space: 6,
                margin: 10
            });
            // slider setup
            masterslider_8dad.setup("MS5614c1d9c8dad", {
                width: 1170,
                height: 730,
                minHeight: 0,
                space: 0,
                start: 1,
                grabCursor: true,
                swipe: true,
                mouse: false,
                keyboard: false,
                layout: "fullwidth",
                wheel: false,
                autoplay: true,
                instantStartLayers: false,
                loop: false,
                shuffle: false,
                preload: 1,
                heightLimit: true,
                autoHeight: false,
                smoothHeight: true,
                endPause: false,
                overPause: false,
                fillMode: "fill",
                centerControls: true,
                startOnAppear: false,
                layersMode: "center",
                autofillTarget: "",
                hideLayers: false,
                fullscreenMargin: 0,
                speed: 100,
                dir: "h",
                // parallaxMode: 'mouse',
                view: "fade"
            });



            $("head").append(
                "<link rel='stylesheet' id='ms-fonts'  href='//fonts.googleapis.com/css?family=Roboto:900,regular,700|Yellowtail:regular' type='text/css' media='all' />"
            );

            window.masterslider_instances = window.masterslider_instances || [];
            window.masterslider_instances.push(masterslider_8dad);
        });

    })(jQuery);
</script>
</body>

<!-- Mirrored from demos.codexcoder.com/themeforest/html/peace/peace-html/peace-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Nov 2022 06:13:45 GMT -->

</html>
