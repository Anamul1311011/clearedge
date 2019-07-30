@extends('layouts.frontend')

@section('content')
<div class="wrapper">

<div id="content" class="col-full home">
  <section>
      <div class="container" style="margin-bottom:60px">
      @foreach($page_data as $data)

      <h2 class="page-title" style='background-image: url("{{ asset($data->featured_image)  }}")'>{{ $data->title }}</h2>
      <p>{{ $data->page_content }}</p>

      @endforeach
    </div>
</section>
<div class="fix"></div>

<section>
    <div class="container" style="margin-bottom:60px">
        <div class="row">
            @foreach ($whyuses as $whyus)
            <div class="col-lg-4">
                <div id="text-3" class="widget widget_text" style="text-align: center">
                    <h3>{{ $whyus->heading }}</h3>
                    <div class="textwidget">
                        <p>{{ $whyus->p1 }}</p>
                        <p>{{ $whyus->p2 }}</p>
                        <p>{{ $whyus->p3 }}</p>
                    </div>
                </div>
            </div>
            @endforeach




            <div class="col-lg-4">
                <div class="block footer-widget-2" style="text-align: center">



                    <div id="text-6" class="widget widget_text">
                        <h3><span style="text-align: center">Important Links</span></h3>
                        @foreach ($links as $link)
                        <div class=""><a href="/contact-us/"> {{ $link->title1 }} </a><br>
                            <a href="/about-us/"> {{ $link->title2 }} </a><br>
                            <a href="/news/">{{ $link->title3 }}</a><br>
                            <a href="/faqs/"> {{ $link->title4 }}</a><br>
                            <a href="/shipping/"> {{ $link->title5 }}</a><br>

                            @endforeach

                        </div>


                        <div id="woo_subscribe-2" class="widget widget_woo_subscribe" style="margin-top: 50px">
                            <aside id="connect" class="fix">
                                <h3>Follow Us Online</h3>

                                <div>


                                    @foreach ($sociallinks as $sociallink)
                                    <div class="social-jony">
                                        <a target="_blank" href="{{ $sociallink->link1 }}" class="twitter" title="Twitter"><i class="fa fa-twitter"></i></a>

                                        <a target="_blank" href="{{ $sociallink->link2 }}" class="facebook" title="Facebook"><i class="fa fa-facebook"></i></a>

                                        <a target="_blank" href="{{ $sociallink->link3 }}" class="linkedin" title="LinkedIn"><i class="fa fa-linkedin"></i></a>

                                        <a target="_blank" href="{{ $sociallink->link4 }}" class="youtube" title="youtube"><i class="fa fa-youtube"></i></a>

                                    </div>

                                    @endforeach


                                </div><!-- col-left -->


                            </aside>
                        </div>
                        <div id="text-15" class="widget widget_text">
                            @foreach ($payments as $payment)
                            <div class="textwidget">
                                <p><img class="alignnone size-full wp-image-19429" src="{{ asset($payment->image1) }}" alt="" width="168" height="100"></p>
                                <p><strong><a href="{{ $payment->link1 }}">{{ $payment->title1 }}</a></strong></p>
                                <p><strong><a href="{{ $payment->link2 }}">{{ $payment->title2 }}</a></strong></p>
                            </div>
                        </div>
                        <div id="black-studio-tinymce-3" class="widget widget_black_studio_tinymce">
                            <h3>{{ $payment->text1 }}</h3>
                            <div class="textwidget">
                                <p><img class="alignnone size-full wp-image-4273 aligncenter" src="{{ asset($payment->image2) }}" alt="paypal-verified-logo_0" width="250" height="128"></p>
                                <p><img class="alignnone size-full wp-image-4274 aligncenter" src="{{ asset($payment->image3) }}" alt="wire_transfer" width="210" height="133"></p>
                                <h3 style="text-align: center;">{{ $payment->text2 }}<br>
                                </h3>
                                <p style="text-align: center;">{{ $payment->text3 }}</p>
                            </div>
                        </div>
                        @endforeach



                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="block footer-widget-3">
                    <div id="nav_menu-2" class="widget widget_nav_menu">
                        <h3>Dhaka and Chittagong City</h3>
                        <div class="menu-cities-container">
                            @foreach ($cities as $city)
                            <ul id="menu-cities" class="menu">
                                <li id="menu-item-17499" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17499"><a href="{{ $city->link }}">{{ $city->title }}</a></li>

                            </ul>
                            @endforeach

                        </div>
                    </div>
                    @foreach ($offices as $office)
                    <div id="custom_html-2" class="widget_text widget widget_custom_html" style="margin-top:25px">
                        <h3>{{ $office->heading }}</h3>
                        <div class="textwidget custom-html-widget">
                            <h4>{{ $office->title1 }}</h4>
                            {{ $office->title2 }}<br>
                            {{ $office->title3 }}<br>
                            {{ $office->title4 }}<br>
                            {{ $office->title5 }}<br>
                            {{ $office->title6 }}<br>
                            <br>
                            <h4>{{ $office->title7 }}</h4>
                            {{ $office->title8 }}<br>
                            {{ $office->title9 }}<br>
                            {{ $office->title10 }}<br>
                            {{ $office->title11 }} <br>
                            {{ $office->title12 }}<br>
                            {{ $office->title13 }} <br><br>
                            <h4>{{ $office->title14 }}</h4>
                            {{ $office->title15 }}<br>
                            {{ $office->title16 }}<br>
                            {{ $office->title17 }}<br>
                        </div>
                    </div>
                    @endforeach



                </div>
            </div>
        </div>
    </div>
</section>



<footer id="footer" class="col-full">
    @foreach ($footers as $footer)
    <div class="footer-inner">

        <div id="copyright" class="col-left">

            {{ $footer->text1 }}
        </div>

        <div id="credit" class="col-right">
            {{ $footer->text2 }}

        </div>
    </div>
    @endforeach


</footer>


<div style="display:none">
    <div id="sg-popup-content-wrapper-5">
        <h2 style="text-align: center;"><span style="color: #ffffff;">Stay Up-To-Date</span></h2>
        <h5 style="text-align: center;"><span style="color: #ffffff;">&nbsp;Want to know when new products are available or what specials and deals we have? <br>Sign up for our newsletter and stay informed!</span></h5>
        <p style="text-align: center;"></p>
        <div role="form" class="wpcf7" id="wpcf7-f3930-o1" dir="ltr" lang="en-US">
            <div class="screen-reader-response"></div>
            <form action="/#wpcf7-f3930-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                <div style="display: none;">
                    <input type="hidden" name="_wpcf7" value="3930">
                    <input type="hidden" name="_wpcf7_version" value="5.1.1">
                    <input type="hidden" name="_wpcf7_locale" value="en_US">
                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f3930-o1">
                    <input type="hidden" name="_wpcf7_container_post" value="0">
                    <input type="hidden" name="g-recaptcha-response" value="">
                </div>
                <div style="text-align:center;">
                    <div class="input" style="color:#fff;">Name*</div>
                    <div class="field"><span class="wpcf7-form-control-wrap FirstName"><input type="text" name="FirstName" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span></div>
                    <div class="input" style="color:#fff;">Email*</div>
                    <div class="field"><span class="wpcf7-form-control-wrap Email"><input type="email" name="Email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span></div>
                    <p><span id="wpcf7-5cc7e3503792a" class="wpcf7-form-control-wrap honeypot-506-wrap" style="display:none !important; visibility:hidden !important;"><label class="hp-message">Please leave this field empty.</label><input class="wpcf7-form-control wpcf7-text" type="text" name="honeypot-506" value="" size="40" tabindex="-1" autocomplete="nope"></span></p>
                    <p align="center"><input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span></p>
                </div>
                <div class="wpcf7-response-output wpcf7-display-none"></div>
            </form>
        </div>
        <p></p>
        <p>&nbsp;</p>
    </div>
</div>


<style type="text/css" media="all" id="siteorigin-panels-layouts-footer">
.page-title{
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  padding:50px 0;
  background-position: center center;
  text-align: center;
  color:#fff;
}
    /* Layout 9 */
    #pgc-9-0-0,
    #pgc-9-2-0,
    #pgc-9-5-0,
    #pgc-9-8-0 {
        width: 100%;
        width: calc(100% - (0 * 30px))
    }

    #pl-9 #panel-9-0-0-0,
    #pl-9 #panel-9-1-0-0,
    #pl-9 #panel-9-1-0-1,
    #pl-9 #panel-9-1-0-2,
    #pl-9 #panel-9-1-1-0,
    #pl-9 #panel-9-1-1-1,
    #pl-9 #panel-9-1-1-2,
    #pl-9 #panel-9-1-2-0,
    #pl-9 #panel-9-1-2-1,
    #pl-9 #panel-9-1-2-2,
    #pl-9 #panel-9-2-0-0,
    #pl-9 #panel-9-3-0-0,
    #pl-9 #panel-9-3-1-0,
    #pl-9 #panel-9-4-0-0,
    #pl-9 #panel-9-4-0-1,
    #pl-9 #panel-9-4-1-0,
    #pl-9 #panel-9-4-1-1,
    #pl-9 #panel-9-4-2-0,
    #pl-9 #panel-9-4-2-1,
    #pl-9 #panel-9-4-3-0,
    #pl-9 #panel-9-4-3-1,
    #pl-9 #panel-9-5-0-0,
    #pl-9 #panel-9-6-0-0,
    #pl-9 #panel-9-6-0-1,
    #pl-9 #panel-9-6-1-0,
    #pl-9 #panel-9-6-1-1,
    #pl-9 #panel-9-6-2-0,
    #pl-9 #panel-9-6-2-1,
    #pl-9 #panel-9-7-0-0,
    #pl-9 #panel-9-7-0-1,
    #pl-9 #panel-9-7-1-0,
    #pl-9 #panel-9-7-1-1,
    #pl-9 #panel-9-7-2-0,
    #pl-9 #panel-9-7-2-1,
    #pl-9 #panel-9-8-0-0 {}

    #pg-9-0,
    #pg-9-1,
    #pg-9-2,
    #pg-9-3,
    #pg-9-4,
    #pg-9-5,
    #pg-9-6,
    #pg-9-7,
    #pl-9 .so-panel {
        margin-bottom: 30px
    }

    #pgc-9-1-0,
    #pgc-9-1-1,
    #pgc-9-1-2,
    #pgc-9-6-0,
    #pgc-9-6-1,
    #pgc-9-6-2,
    #pgc-9-7-0,
    #pgc-9-7-1,
    #pgc-9-7-2 {
        width: 33.3333%;
        width: calc(33.3333% - (0.666666666667 * 30px))
    }

    #pgc-9-3-0,
    #pgc-9-3-1 {
        width: 50%;
        width: calc(50% - (0.5 * 30px))
    }

    #pgc-9-4-0,
    #pgc-9-4-1,
    #pgc-9-4-2,
    #pgc-9-4-3 {
        width: 25%;
        width: calc(25% - (0.75 * 30px))
    }

    #pl-9 .so-panel:last-child {
        margin-bottom: 0px
    }

    #pg-9-0.panel-no-style,
    #pg-9-0.panel-has-style>.panel-row-style,
    #pg-9-1.panel-no-style,
    #pg-9-1.panel-has-style>.panel-row-style,
    #pg-9-2.panel-no-style,
    #pg-9-2.panel-has-style>.panel-row-style,
    #pg-9-3.panel-no-style,
    #pg-9-3.panel-has-style>.panel-row-style,
    #pg-9-4.panel-no-style,
    #pg-9-4.panel-has-style>.panel-row-style,
    #pg-9-5.panel-no-style,
    #pg-9-5.panel-has-style>.panel-row-style {
        -webkit-align-items: flex-start;
        align-items: flex-start
    }

    #panel-9-1-0-1>.panel-widget-style,
    #panel-9-1-1-1>.panel-widget-style,
    #panel-9-1-2-1>.panel-widget-style,
    #panel-9-6-0-1>.panel-widget-style,
    #panel-9-6-1-1>.panel-widget-style,
    #panel-9-6-2-1>.panel-widget-style,
    #panel-9-7-0-1>.panel-widget-style,
    #panel-9-7-1-1>.panel-widget-style,
    #panel-9-7-2-1>.panel-widget-style {
        padding: 0px 40px 0px 40px
    }

    #panel-9-2-0-0>.panel-widget-style {
        padding: 25pxpx 25pxpx 25pxpx 25pxpx
    }

    #pg-9-3>.panel-row-style {
        background-color: #e2e2e2
    }

    #panel-9-3-0-0>.panel-widget-style,
    #panel-9-3-1-0>.panel-widget-style {
        padding: 15px 0px 0px 20px
    }

    #panel-9-8-0-0>.panel-widget-style {
        padding: 100px 0px 0px 0px
    }

    @media(max-width:780px) {

        #pg-9-0.panel-no-style,
        #pg-9-0.panel-has-style>.panel-row-style,
        #pg-9-1.panel-no-style,
        #pg-9-1.panel-has-style>.panel-row-style,
        #pg-9-2.panel-no-style,
        #pg-9-2.panel-has-style>.panel-row-style,
        #pg-9-3.panel-no-style,
        #pg-9-3.panel-has-style>.panel-row-style,
        #pg-9-4.panel-no-style,
        #pg-9-4.panel-has-style>.panel-row-style,
        #pg-9-5.panel-no-style,
        #pg-9-5.panel-has-style>.panel-row-style,
        #pg-9-6.panel-no-style,
        #pg-9-6.panel-has-style>.panel-row-style,
        #pg-9-7.panel-no-style,
        #pg-9-7.panel-has-style>.panel-row-style,
        #pg-9-8.panel-no-style,
        #pg-9-8.panel-has-style>.panel-row-style {
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column
        }

        #pg-9-0>.panel-grid-cell,
        #pg-9-0>.panel-row-style>.panel-grid-cell,
        #pg-9-1>.panel-grid-cell,
        #pg-9-1>.panel-row-style>.panel-grid-cell,
        #pg-9-2>.panel-grid-cell,
        #pg-9-2>.panel-row-style>.panel-grid-cell,
        #pg-9-3>.panel-grid-cell,
        #pg-9-3>.panel-row-style>.panel-grid-cell,
        #pg-9-4>.panel-grid-cell,
        #pg-9-4>.panel-row-style>.panel-grid-cell,
        #pg-9-5>.panel-grid-cell,
        #pg-9-5>.panel-row-style>.panel-grid-cell,
        #pg-9-6>.panel-grid-cell,
        #pg-9-6>.panel-row-style>.panel-grid-cell,
        #pg-9-7>.panel-grid-cell,
        #pg-9-7>.panel-row-style>.panel-grid-cell,
        #pg-9-8>.panel-grid-cell,
        #pg-9-8>.panel-row-style>.panel-grid-cell {
            width: 100%;
            margin-right: 0
        }

        #pgc-9-1-0,
        #pgc-9-1-1,
        #pgc-9-3-0,
        #pgc-9-4-0,
        #pgc-9-4-1,
        #pgc-9-4-2,
        #pgc-9-6-0,
        #pgc-9-6-1,
        #pgc-9-7-0,
        #pgc-9-7-1 {
            margin-bottom: 30px
        }

        #pl-9 .panel-grid-cell {
            padding: 0
        }

        #pl-9 .panel-grid .panel-grid-cell-empty {
            display: none
        }

        #pl-9 .panel-grid .panel-grid-cell-mobile-last {
            margin-bottom: 0px
        }

        #panel-9-3-0-0>.panel-widget-style {
            padding: 10px 10px 10px 10px
        }
    }

</style>
@endsection
