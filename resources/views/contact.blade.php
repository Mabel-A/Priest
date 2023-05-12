@extends('layouts.footer')
@extends('layouts.header')
@section('content')
    <!-- start contact us section -->
    <div class="contact-us-section">
        <div class="container">
            <div class="content-section">
                <div class="content-wrapper">
                    <h2 class="section-title">Send Us a Message</h2>

                    <div class="section-detail">Enthusiastically underwhelm quality benefits rather than professional outside
                        the box thinking. Distinctively network highly efficient leadership skills</div>
                    <!-- /.section-detail -->

                    <div role="form" class="wpcf7" id="wpcf7-f7-p367-o1" lang="en-US" dir="ltr">
                        <div class="screen-reader-response"></div>

                        <form action="#" method="post" class="wpcf7-form" novalidate="novalidate">
                            <div style="display: none;">
                                <input type="hidden" name="_wpcf7" value="7" />
                                <input type="hidden" name="_wpcf7_version" value="4.2.2" />
                                <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f7-p367-o1" />
                                <input type="hidden" name="_wpnonce" value="bfbea92b91" />
                            </div><!-- end display -->

                            <div class="col-md-6 form-group">
                                <label class="sr-only">Full Name</label>
                                <span class="wpcf7-form-control-wrap your-name">
                                    <input type="text" name="your-name" value="" size="40"
                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                        aria-required="true" aria-invalid="false" placeholder="Full Name" />
                                </span>
                            </div><!-- end form group -->

                            <div class="col-md-6 form-group">
                                <label class="sr-only">Email Address</label>
                                <span class="wpcf7-form-control-wrap your-email">
                                    <input type="email" name="your-email" value="" size="40"
                                        class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control"
                                        aria-required="true" aria-invalid="false" placeholder="Email Address" />
                                </span>
                            </div><!-- end form group -->

                            <div class="form-group col-md-12">
                                <label class="sr-only">Subject</label>
                                <span class="wpcf7-form-control-wrap your-subject">
                                    <input type="text" name="your-subject" value="" size="40"
                                        class="wpcf7-form-control wpcf7-text form-control" aria-invalid="false"
                                        placeholder="Subject" />
                                </span>
                            </div><!-- end form group -->

                            <div class="form-group col-md-12">
                                <span class="wpcf7-form-control-wrap your-message">
                                    <textarea name="your-message" cols="40" rows="5"
                                        class="wpcf7-form-control wpcf7-textarea form-control input-md" aria-invalid="false" placeholder="YOUR MESSAGE"></textarea>
                                </span>
                            </div><!-- end form group -->

                            <p class="event-btn-container col-md-12">
                                <input type="submit" value="SEND NOW"
                                    class="wpcf7-form-control wpcf7-submit btn custom-btn" />
                            </p>

                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                        </form>
                    </div><!-- end wpcf7 -->
                </div><!-- end content wrapper -->
            </div><!-- end contact section -->
        </div><!-- end container -->
    </div><!-- end contact us -->



    <!--  start full width -->
    <div class="full-width">
        <div class="row-fluid">
            <div class="content-section">
                <div class="content-wrapper">
                    <div class="map-container">
                        <div class="googleMaps google-map-container"></div>

                        <div class="contact-info col-md-6 pull-right wow fadeInRight">
                            <div class="contact-person">
                                <h2>Contact Person</h2>
                                <img width="150" height="150" src="{{ asset('images/09/personimg03.jpeg') }}"
                                    class="img-circle" alt="team-3">
                                <div class="info">
                                    <h3>FR Maurice akwa</h3>
                                    <p>Parish priest</p>
                                    <span><b>TEL:</b> +237</span>
                                    <br>
                                    <span><b>Email:</b> gmail.com</span>
                                </div><!-- /.info -->
                            </div><!-- /.contact-person -->

                            <div class="contact-information">
                                <h2>Contact Info</h2>
                                <div class="address">
                                    <div class="media">
                                        <div class="media-left"><i class="fa fa-map-marker base-color"></i></div>
                                        <div class="media-body">6222 Franconia Road, 
                                            <br /> Alexandria, VA 22310.
                                            <br>
                                        </div><!-- end media body -->
                                    </div><!-- end media -->

                                    <div class="media">
                                        <div class="media-left"><i class="fa fa-clock-o base-color"></i></div>
                                        <div class="media-body"><strong>Monday-Thursday :</strong> 06:00 am - 09:00 pm
                                            <br />
                                            <strong>Friday :</strong> 10:30 am - 05:30 pm
                                            <br />
                                            <strong>Saturday :</strong> 10:30 am - 05:30 pm
                                            <br />
                                            <strong>Sunday :</strong> Opened
                                        </div><!-- end media body -->
                                    </div><!-- end media -->
                                </div><!-- /.info -->
                            </div><!-- /.contact-person -->
                        </div><!-- end contact info -->
                    </div><!-- Google Map Section End -->
                </div><!-- end content wrapper -->
            </div><!-- end contect section -->
        </div><!-- end row fluid -->
    </div><!-- end full width -->
@endsection

@push('scripts')
@endpush
