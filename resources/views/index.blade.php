@extends('layouts.frontend')

@section('content')
<div class="wrapper">

    <div id="content" class="col-full home">


        <section class="homepage-area fullwidth">

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    @php $i=1; @endphp
                    @foreach($banners as $banner)
                    <div class="carousel-item @if($i==1) active @endif">
                        <img class="d-block w-100" src="{{ asset($banner->banner_image) }}" alt="First slide">
                    </div>
                    @php $i++; @endphp
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>



            <div style="visibility:hidden;display:none" class="tp-leftarrow hidearrows tparrows round">
                <div class="tp-arr-allwrapper">
                    <div class="tp-arr-iwrapper">
                        <div class="tp-arr-imgholder" style="visibility: inherit; opacity: 1; background-image: url(&quot;https://gaotek.com/wp-content/uploads/2017/06/homepage-slide.jpg&quot;);"></div>
                        <div class="tp-arr-imgholder2"></div>
                        <div class="tp-arr-titleholder"></div>
                        <div class="tp-arr-subtitleholder"></div>
                    </div>
                </div>
            </div>
            <div style="visibility:hidden;display:none" class="tp-rightarrow hidearrows tparrows round">
                <div class="tp-arr-allwrapper">
                    <div class="tp-arr-iwrapper">
                        <div class="tp-arr-imgholder" style="visibility: inherit; opacity: 1; background-image: url(&quot;https://gaotek.com/wp-content/uploads/2017/06/homepage-slide.jpg&quot;);"></div>
                        <div class="tp-arr-imgholder2"></div>
                        <div class="tp-arr-titleholder"></div>
                        <div class="tp-arr-subtitleholder"></div>
                    </div>
                </div>
            </div>
    </div>

</div><!-- END REVOLUTION SLIDER -->
</div>
</div>
<div id="black-studio-tinymce-2" class="widget widget_black_studio_tinymce" style="margin-top:50px">
    <div class="textwidget">
        <p>&nbsp;</p>
        <h1 style="text-align: center;">Proudly Supplying Customers for Over Two Decades in North America and Across the Globe with Quality Engineering Products</h1>
    </div>
</div>
</section><!-- /#main -->

</div>

<div class="col-full">

    <section id="main" class="homepage-area fullwidth">

        <section id="page-content">
            <div class="container">
                <article class="post-9 page type-page status-publish hentry">

                    <div class="inner">

                        <header>
                            <h1></h1>
                        </header>

                        <section class="entry">

                            <div id="pl-9" class="panel-layout">

                                <div id="pg-9-0" class="panel-grid panel-no-style">
                                    <div id="pgc-9-0-0" class="panel-grid-cell">
                                        <div id="panel-9-0-0-0" class="so-panel widget widget_text panel-first-child panel-last-child" data-index="0">
                                            <div class="textwidget" style="margin-bottom: 50px;">
                                                <h2 align="center">Trusted &amp; Leading Global Supplier of Test&nbsp;and Measurement&nbsp;Equipment</h2>
                                                <h2></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="pg-9-1" class="panel-grid panel-no-style" style="text-align:center">
                                    @foreach ($services as $service)
                                    <div id="pgc-9-1-0" class="panel-grid-cell">
                                        <div id="panel-9-1-0-0" class="so-panel widget widget_sow-image panel-first-child" data-index="1">
                                            <div class="so-widget-sow-image so-widget-sow-image-default-b37b538aacbf">
                                                <h3 class="widget-title"></h3>
                                                <div class="sow-image-container">
                                                    <a href="#"> <img src="{{ asset($service->image) }}" alt="">
                                                    </a></div>

                                            </div>
                                        </div>
                                        <div id="panel-9-1-0-1" class="so-panel widget widget_sow-editor" data-index="2">
                                            <div class="panel-widget-style panel-widget-style-for-9-1-0-1">
                                                <div class="so-widget-sow-editor so-widget-sow-editor-base">
                                                    <div class="siteorigin-widget-tinymce textwidget">
                                                        <p style="text-align: center;"><b>{{ $service->title }}</b></p>
                                                        <ul>
                                                            <li><a href="#">{{ $service->link1 }}</a></li>
                                                            <li><a href="#">{{ $service->link2 }}</a></li>
                                                            <li><a href="#">{{ $service->link3 }}</a></li>
                                                            <li><a href="#">{{ $service->link4 }}</a></li>
                                                            <li><a href="#">{{ $service->link5 }}</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="panel-9-1-0-2" class="so-panel widget widget_lsow-button panel-last-child" data-index="3">
                                            <div class="so-widget-lsow-button so-widget-lsow-button-default-6fe64960107f">
                                                <div class="lsow-button-wrap" style="clear: both; text-align:center;"><a class="lsow-button  lsow-black lsow-small lsow-animate-on-scroll lsow-visible-on-scroll" data-animation="fadeIn" href="#" target="&quot;_blank&quot;" style="opacity: 0;">View All Market Reports</a></div>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach


                                </div>
                                <div id="pg-9-2" class="panel-grid panel-no-style" style="text-align:center">
                                    <div id="pgc-9-2-0" class="panel-grid-cell">
                                        <div id="panel-9-2-0-0" class="so-panel widget widget_text panel-first-child panel-last-child" data-index="10">
                                            <div class="panel-widget-style panel-widget-style-for-9-2-0-0">
                                                <div class="textwidget">
                                                    <h2>Featured Products</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="" class="" style="text-align:center">
                                    <div class="">
                                        <div id="" class="" style="text-align: center; width: 100%">
                                            <div id="" class="" data-index="11">
                                                <div class="addition">
                                                    <div class="textwidget" style="padding-bottom: 20px">
                                                        <p><span style="text-align: center; margin-left:80px; background:#E2E2E2">In addition to the featured products below we also have more featured products currently on sale. Browse now by clicking the
                                                                button</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="pgc-9-3-1" class="panel-grid-cell">
                                            <div id="panel-9-3-1-0" class="so-panel widget widget_lsow-button panel-first-child panel-last-child" data-index="12">
                                                <div class="panel-widget-style panel-widget-style-for-9-3-1-0">
                                                    <div class="so-widget-lsow-button so-widget-lsow-button-default-dd79f2df2bf1">
                                                        <div class="lsow-button-wrap" style="clear: both; text-align:center;"><a class="lsow-button  lsow-red lsow-large lsow-animate-on-scroll lsow-visible-on-scroll" data-animation="fadeIn" href="#" target="&quot;_blank&quot;" style="opacity: 0;">View Our Sales Products</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>

                                <div id="pg-9-4" class="panel-grid panel-no-style" style="text-align:center">
                                    @foreach ($products as $product)
                                    <div id="pgc-9-4-0" class="panel-grid-cell">
                                        <div id="panel-9-4-0-0" class="so-panel widget widget_text panel-first-child" data-index="13">
                                            <div class="textwidget">
                                                <p><img class="alignnone wp-image-19101 size-medium aligncenter" src="{{ asset($product->product_image) }}" alt="" width="300" height="300"></p>
                                                <h3 class="product_title entry-title" style="text-align: center;">{{ $product->product_name }}</h3>
                                                <div class="product_meta" style="text-align: center;"><span class="sku_wrapper">ID:&nbsp;<span class="sku">{{ $product->product_ID }}</span></span></div>
                                            </div>
                                        </div>
                                        <div id="panel-9-4-0-1" class="so-panel widget widget_sow-button panel-last-child" data-index="14">
                                            <div class="so-widget-sow-button so-widget-sow-button-atom-4a75a8acc3b6">
                                                <div class="ow-button-base ow-button-align-center">
                                                    <a href="#" class="ow-icon-placement-left ow-button-hover">
                                                        <span>

                                                            Learn More </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach


                                </div>
                                <div id="pg-9-5" class="panel-grid panel-no-style">
                                    <div id="pgc-9-5-0" class="panel-grid-cell">
                                        <div id="panel-9-5-0-0" class="so-panel widget widget_lsow-accordion panel-first-child panel-last-child" data-index="21">
                                            <div class="so-widget-lsow-accordion so-widget-lsow-accordion-default-d75171398898">
                                                <div class="lsow-accordion style1" data-toggle="false" data-expanded="false">
                                                    <div class="lsow-panel" id="">
                                                        <div class="lsow-panel-title">More Featured Products</div>
                                                        <div class="lsow-panel-content">
                                                            <div class="woocommerce columns-4 ">
                                                                <ul class="products">
                                                                    <li class="product type-product post-8522 status-publish first outofstock product_cat-dc-ground-fault-locators has-post-thumbnail featured taxable shipping-taxable purchasable product-type-simple">

                                                                        <script type="text/javascript">
                                                                            jQuery(document).ready(function() {
                                                                                if (jQuery('li.post-8522 .mg-brand-wrapper-category').length < 1) {
                                                                                    jQuery('<span class="mg-brand-wrapper mg-brand-wrapper-category"><b>Brand:</b> <a href="">GAOTek</a></span>')
                                                                                        .insertAfter('li.post-8522 h2');
                                                                                }
                                                                            });

                                                                        </script>
                                                                        <a href="https://gaotek.com/product/gao-gfl-101-portable-dc-ground-fault-detector/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img src="" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset=" 250w,  400w,  300w,  768w, 1024w,  150w,  1200w" sizes="(max-width: 250px) 100vw, 250px" width="250" height="163">
                                                                            <div class="product-details">
                                                                                <h2 class="woocommerce-loop-product__title">GAO-GFL-101 Portable DC Ground Fault Detector</h2><span class="mg-brand-wrapper mg-brand-wrapper-category"><b>Brand:</b>
                                                                                    <a href="">GAOTek</a></span><span itemprop="productID" class="sku">ID: GAO-GFL-101</span>



                                                                                <span class="price">USD <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>2,450.00</span></span>


                                                                                <span class="excerpt">
                                                                                    <p>DC power system grounding is an abnormal occurrence which may lead to system damage.</p>
                                                                                </span>
                                                                            </div>
                                                                            <!--/.product-details-->
                                                                        </a>
                                                                        <div class="yith-ywraq-add-to-quote add-to-quote-8522">
                                                                            <div class="yith-ywraq-add-button show" style="display:block">

                                                                                <a href="#" class="add-request-quote-button button" data-product_id="8522" data-wp_nonce="e85f7d8ff0">
                                                                                    Request a Quote</a>
                                                                            </div>
                                                                            <div class="yith_ywraq_add_item_response-8522 yith_ywraq_add_item_response_message hide" style="display:none">The product is already in quote request list!</div>
                                                                            <div class="yith_ywraq_add_item_browse-list-8522 yith_ywraq_add_item_browse_message  hide" style="display:none"><a href="#">Browse the
                                                                                    list</a></div>
                                                                            <div class="yith_ywraq_add_item_product-response-8522 yith_ywraq_add_item_product_message hide" style="display:'none'"></div>
                                                                        </div>

                                                                        <div class="clear"></div>
                                                                    </li>
                                                                    <li class="product type-product post-7927 status-publish outofstock product_cat-fusion-splicers product_cat-deals product_tag-ffs-auto-mode product_tag-ffs-core-to-core product_tag-ffs-half-automation-mode product_tag-ffs-manual-mode product_tag-ffs-multi-mode product_tag-ffs-multifunctional product_tag-ffs-protection-sleeve product_tag-ffs-single-mode has-post-thumbnail featured taxable shipping-taxable purchasable product-type-simple">

                                                                        <script type="text/javascript">
                                                                            jQuery(document).ready(function() {
                                                                                if (jQuery('li.post-7927 .mg-brand-wrapper-category').length < 1) {
                                                                                    jQuery('<span class="mg-brand-wrapper mg-brand-wrapper-category"><b>Brand:</b> <a href="https://gaotek.com/brands/gao-tek/">GAOTek</a></span>')
                                                                                        .insertAfter('li.post-7927 h2');
                                                                                }
                                                                            });

                                                                        </script>
                                                                        <a href="https://gaotek.com/product/fiber-fusion-splicer-with-various-splicing-modes/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img src="https://gaotek.com/wp-content/uploads/2017/01/Fiber-Fusion-Splicer-with-Various-Splicing-Modes.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://gaotek.com/wp-content/uploads/2017/01/Fiber-Fusion-Splicer-with-Various-Splicing-Modes.png 293w, https://gaotek.com/wp-content/uploads/2017/01/Fiber-Fusion-Splicer-with-Various-Splicing-Modes-150x133.png 150w, https://gaotek.com/wp-content/uploads/2017/01/Fiber-Fusion-Splicer-with-Various-Splicing-Modes-250x221.png 250w" sizes="(max-width: 250px) 100vw, 250px" width="250" height="221">
                                                                            <div class="product-details">
                                                                                <h2 class="woocommerce-loop-product__title">GAOTek Fiber Fusion Splicer with Various Splicing Modes</h2><span class="mg-brand-wrapper mg-brand-wrapper-category"><b>Brand:</b> <a href="https://gaotek.com/brands/gao-tek/">GAOTek</a></span><span itemprop="productID" class="sku">ID: GAO-FFS-103</span>



                                                                                <span class="price">USD <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>2,100.00</span></span>


                                                                                <span class="excerpt">
                                                                                    <p>Fiber Fusion Splicer with Various Splicing Modes is a light-weight device with a user-friendly interface. It uses innovative fiber imaging and digital design
                                                                                        to produce a clear image.</p>
                                                                                </span>
                                                                            </div>
                                                                            <!--/.product-details-->
                                                                        </a>
                                                                        <div class="yith-ywraq-add-to-quote add-to-quote-7927">
                                                                            <div class="yith-ywraq-add-button show" style="display:block">

                                                                                <a href="#" class="add-request-quote-button button" data-product_id="7927" data-wp_nonce="6cb65fd05c">
                                                                                    Request a Quote</a>
                                                                            </div>
                                                                            <div class="yith_ywraq_add_item_response-7927 yith_ywraq_add_item_response_message hide" style="display:none">The product is already in quote request list!</div>
                                                                            <div class="yith_ywraq_add_item_browse-list-7927 yith_ywraq_add_item_browse_message  hide" style="display:none"><a href="https://gaotek.com/request-quote/">Browse the
                                                                                    list</a></div>
                                                                            <div class="yith_ywraq_add_item_product-response-7927 yith_ywraq_add_item_product_message hide" style="display:'none'"></div>
                                                                        </div>

                                                                        <div class="clear"></div>
                                                                    </li>
                                                                    <li class="product type-product post-7855 status-publish outofstock product_cat-xdsl-testers product_tag-xdsl-adsl product_tag-xdsl-adsl2 product_tag-xdsl-attenuation product_tag-xdsl-copper-test product_tag-xdsl-dmm product_tag-xdsl-multi-protocol product_tag-xdsl-noise-margin product_tag-xdsl-readsl product_tag-xdsl-xdsl-tester has-post-thumbnail featured taxable shipping-taxable purchasable product-type-simple">

                                                                        <script type="text/javascript">
                                                                            jQuery(document).ready(function() {
                                                                                if (jQuery('li.post-7855 .mg-brand-wrapper-category').length < 1) {
                                                                                    jQuery('<span class="mg-brand-wrapper mg-brand-wrapper-category"><b>Brand:</b> <a href="https://gaotek.com/brands/gao-tek/">GAOTek</a></span>')
                                                                                        .insertAfter('li.post-7855 h2');
                                                                                }
                                                                            });

                                                                        </script>
                                                                        <a href="https://gaotek.com/product/xdsl-tester-with-data-storage-multi-protocol-support/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img src="https://gaotek.com/wp-content/uploads/2017/01/xDSL-Tester-with-Data-Storage-Multi-Protocol-Support.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://gaotek.com/wp-content/uploads/2017/01/xDSL-Tester-with-Data-Storage-Multi-Protocol-Support.png 600w, https://gaotek.com/wp-content/uploads/2017/01/xDSL-Tester-with-Data-Storage-Multi-Protocol-Support-150x150.png 150w, https://gaotek.com/wp-content/uploads/2017/01/xDSL-Tester-with-Data-Storage-Multi-Protocol-Support-300x300.png 300w, https://gaotek.com/wp-content/uploads/2017/01/xDSL-Tester-with-Data-Storage-Multi-Protocol-Support-100x100.png 100w, https://gaotek.com/wp-content/uploads/2017/01/xDSL-Tester-with-Data-Storage-Multi-Protocol-Support-250x250.png 250w, https://gaotek.com/wp-content/uploads/2017/01/xDSL-Tester-with-Data-Storage-Multi-Protocol-Support-400x400.png 400w" sizes="(max-width: 250px) 100vw, 250px" width="250" height="250">
                                                                            <div class="product-details">
                                                                                <h2 class="woocommerce-loop-product__title">xDSL Tester with Data Storage (Multi-Protocol Support)</h2><span class="mg-brand-wrapper mg-brand-wrapper-category"><b>Brand:</b> <a href="https://gaotek.com/brands/gao-tek/">GAOTek</a></span><span itemprop="productID" class="sku">ID: GT00ZZ00ZX</span>



                                                                                <span class="price">USD <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>399.00</span></span>


                                                                                <span class="excerpt">
                                                                                    <p>Handheld device that provides full testing and analysis of ADSL; ADSL2; ADSL2+; READSL quickly and accurately</p>
                                                                                </span>
                                                                            </div>
                                                                            <!--/.product-details-->
                                                                        </a>
                                                                        <div class="yith-ywraq-add-to-quote add-to-quote-7855">
                                                                            <div class="yith-ywraq-add-button show" style="display:block">

                                                                                <a href="#" class="add-request-quote-button button" data-product_id="7855" data-wp_nonce="2915408d70">
                                                                                    Request a Quote</a>
                                                                            </div>
                                                                            <div class="yith_ywraq_add_item_response-7855 yith_ywraq_add_item_response_message hide" style="display:none">The product is already in quote request list!</div>
                                                                            <div class="yith_ywraq_add_item_browse-list-7855 yith_ywraq_add_item_browse_message  hide" style="display:none"><a href="https://gaotek.com/request-quote/">Browse the
                                                                                    list</a></div>
                                                                            <div class="yith_ywraq_add_item_product-response-7855 yith_ywraq_add_item_product_message hide" style="display:'none'"></div>
                                                                        </div>

                                                                        <div class="clear"></div>
                                                                    </li>
                                                                    <li class="product type-product post-7780 status-publish last outofstock product_cat-mega-micro-ohmmeters has-post-thumbnail featured taxable shipping-taxable purchasable product-type-simple">

                                                                        <script type="text/javascript">
                                                                            jQuery(document).ready(function() {
                                                                                if (jQuery('li.post-7780 .mg-brand-wrapper-category').length < 1) {
                                                                                    jQuery('<span class="mg-brand-wrapper mg-brand-wrapper-category"><b>Brand:</b> <a href="https://gaotek.com/brands/gao-tek/">GAOTek</a></span>')
                                                                                        .insertAfter('li.post-7780 h2');
                                                                                }
                                                                            });

                                                                        </script>
                                                                        <a href="https://gaotek.com/product/micro-ohmmeter-with-data-hold-remote-trigger/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img src="https://gaotek.com/wp-content/uploads/2017/01/Micro-Ohmmeter.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://gaotek.com/wp-content/uploads/2017/01/Micro-Ohmmeter.jpg 383w, https://gaotek.com/wp-content/uploads/2017/01/Micro-Ohmmeter-300x183.jpg 300w, https://gaotek.com/wp-content/uploads/2017/01/Micro-Ohmmeter-150x91.jpg 150w, https://gaotek.com/wp-content/uploads/2017/01/Micro-Ohmmeter-250x152.jpg 250w" sizes="(max-width: 250px) 100vw, 250px" width="250" height="152">
                                                                            <div class="product-details">
                                                                                <h2 class="woocommerce-loop-product__title">Micro ohmmeter with data hold (Remote trigger)</h2><span class="mg-brand-wrapper mg-brand-wrapper-category"><b>Brand:</b>
                                                                                    <a href="https://gaotek.com/brands/gao-tek/">GAOTek</a></span><span itemprop="productID" class="sku">ID: GT00YL00ZY</span>



                                                                                <span class="price">USD <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>1,990.00</span></span>


                                                                                <span class="excerpt">
                                                                                    <p>This Micro Ohmmeter with data hold and remote trigger is designed to measure high, medium and low value resistances for a wide measuring range from&nbsp; 0.001
                                                                                        mΩ ~ 20.100 MΩ</p>
                                                                                </span>
                                                                            </div>
                                                                            <!--/.product-details-->
                                                                        </a>
                                                                        <div class="yith-ywraq-add-to-quote add-to-quote-7780">
                                                                            <div class="yith-ywraq-add-button show" style="display:block">

                                                                                <a href="#" class="add-request-quote-button button" data-product_id="7780" data-wp_nonce="9ddc2ae5a2">
                                                                                    Request a Quote</a>
                                                                            </div>
                                                                            <div class="yith_ywraq_add_item_response-7780 yith_ywraq_add_item_response_message hide" style="display:none">The product is already in quote request list!</div>
                                                                            <div class="yith_ywraq_add_item_browse-list-7780 yith_ywraq_add_item_browse_message  hide" style="display:none"><a href="https://gaotek.com/request-quote/">Browse the
                                                                                    list</a></div>
                                                                            <div class="yith_ywraq_add_item_product-response-7780 yith_ywraq_add_item_product_message hide" style="display:'none'"></div>
                                                                        </div>

                                                                        <div class="clear"></div>
                                                                    </li>
                                                                    <li class="product type-product post-7632 status-publish first outofstock product_cat-conductivity-testers has-post-thumbnail featured taxable shipping-taxable purchasable product-type-simple">

                                                                        <script type="text/javascript">
                                                                            jQuery(document).ready(function() {
                                                                                if (jQuery('li.post-7632 .mg-brand-wrapper-category').length < 1) {
                                                                                    jQuery('<span class="mg-brand-wrapper mg-brand-wrapper-category"><b>Brand:</b> <a href="https://gaotek.com/brands/gao-tek/">GAOTek</a></span>')
                                                                                        .insertAfter('li.post-7632 h2');
                                                                                }
                                                                            });

                                                                        </script>
                                                                        <a href="https://gaotek.com/product/conductivity-meter-with-tds-measuring-mode-high-accuracy/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img src="https://gaotek.com/wp-content/uploads/2017/01/GAOTek-Conductivity-Meter-with-TDS-Measuring-Mode-High-Accuracy.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://gaotek.com/wp-content/uploads/2017/01/GAOTek-Conductivity-Meter-with-TDS-Measuring-Mode-High-Accuracy.png 270w, https://gaotek.com/wp-content/uploads/2017/01/GAOTek-Conductivity-Meter-with-TDS-Measuring-Mode-High-Accuracy-260x300.png 260w, https://gaotek.com/wp-content/uploads/2017/01/GAOTek-Conductivity-Meter-with-TDS-Measuring-Mode-High-Accuracy-150x173.png 150w, https://gaotek.com/wp-content/uploads/2017/01/GAOTek-Conductivity-Meter-with-TDS-Measuring-Mode-High-Accuracy-217x250.png 217w" sizes="(max-width: 250px) 100vw, 250px" width="250" height="288">
                                                                            <div class="product-details">
                                                                                <h2 class="woocommerce-loop-product__title">Conductivity Meter with TDS Measuring Mode (High Accuracy)</h2><span class="mg-brand-wrapper mg-brand-wrapper-category"><b>Brand:</b> <a href="https://gaotek.com/brands/gao-tek/">GAOTek</a></span><span itemprop="productID" class="sku">ID: GT00YZ00ZH</span>



                                                                                <span class="price">USD <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>599.00</span></span>


                                                                                <span class="excerpt">
                                                                                    <p>This Conductivity Meter with TDS Measuring Mode (High Accuracy) is designed by 1 to 3 points push-button calibration with an accuracy of 1% F.S.</p>
                                                                                </span>
                                                                            </div>
                                                                            <!--/.product-details-->
                                                                        </a>
                                                                        <div class="yith-ywraq-add-to-quote add-to-quote-7632">
                                                                            <div class="yith-ywraq-add-button show" style="display:block">

                                                                                <a href="#" class="add-request-quote-button button" data-product_id="7632" data-wp_nonce="1f52de4d67">
                                                                                    Request a Quote</a>
                                                                            </div>
                                                                            <div class="yith_ywraq_add_item_response-7632 yith_ywraq_add_item_response_message hide" style="display:none">The product is already in quote request list!</div>
                                                                            <div class="yith_ywraq_add_item_browse-list-7632 yith_ywraq_add_item_browse_message  hide" style="display:none"><a href="https://gaotek.com/request-quote/">Browse the
                                                                                    list</a></div>
                                                                            <div class="yith_ywraq_add_item_product-response-7632 yith_ywraq_add_item_product_message hide" style="display:'none'"></div>
                                                                        </div>

                                                                        <div class="clear"></div>
                                                                    </li>
                                                                    <li class="product type-product post-5709 status-publish outofstock product_cat-vibration-meters has-post-thumbnail featured taxable shipping-taxable purchasable product-type-simple">

                                                                        <script type="text/javascript">
                                                                            jQuery(document).ready(function() {
                                                                                if (jQuery('li.post-5709 .mg-brand-wrapper-category').length < 1) {
                                                                                    jQuery('<span class="mg-brand-wrapper mg-brand-wrapper-category"><b>Brand:</b> <a href="https://gaotek.com/brands/gao-tek/">GAOTek</a></span>')
                                                                                        .insertAfter('li.post-5709 h2');
                                                                                }
                                                                            });

                                                                        </script>
                                                                        <a href="https://gaotek.com/product/3-channel-vibration-meter-high-quality-accelerometer/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img src="https://gaotek.com/wp-content/uploads/2016/12/GT00YS00ZP-4.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://gaotek.com/wp-content/uploads/2016/12/GT00YS00ZP-4.png 357w, https://gaotek.com/wp-content/uploads/2016/12/GT00YS00ZP-4-150x149.png 150w, https://gaotek.com/wp-content/uploads/2016/12/GT00YS00ZP-4-300x298.png 300w, https://gaotek.com/wp-content/uploads/2016/12/GT00YS00ZP-4-200x200.png 200w, https://gaotek.com/wp-content/uploads/2016/12/GT00YS00ZP-4-250x250.png 250w" sizes="(max-width: 250px) 100vw, 250px" width="250" height="249">
                                                                            <div class="product-details">
                                                                                <h2 class="woocommerce-loop-product__title">GAOTek 3 Channel Vibration Meter (High Quality Accelerometer)</h2><span class="mg-brand-wrapper mg-brand-wrapper-category"><b>Brand:</b> <a href="https://gaotek.com/brands/gao-tek/">GAOTek</a></span><span itemprop="productID" class="sku">ID: GAO-VIBM-102</span>



                                                                                <span class="price">USD <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>1,090.00</span></span>


                                                                                <span class="excerpt">
                                                                                    <p>This 3 Channel Vibration Meter (High Quality Accelerometer) is used for measuring periodic motion, to check the imbalance and deflecting of moving machinery.
                                                                                    </p>
                                                                                </span>
                                                                            </div>
                                                                            <!--/.product-details-->
                                                                        </a>
                                                                        <div class="yith-ywraq-add-to-quote add-to-quote-5709">
                                                                            <div class="yith-ywraq-add-button show" style="display:block">

                                                                                <a href="#" class="add-request-quote-button button" data-product_id="5709" data-wp_nonce="3db5a32dec">
                                                                                    Request a Quote</a>
                                                                            </div>
                                                                            <div class="yith_ywraq_add_item_response-5709 yith_ywraq_add_item_response_message hide" style="display:none">The product is already in quote request list!</div>
                                                                            <div class="yith_ywraq_add_item_browse-list-5709 yith_ywraq_add_item_browse_message  hide" style="display:none"><a href="https://gaotek.com/request-quote/">Browse the
                                                                                    list</a></div>
                                                                            <div class="yith_ywraq_add_item_product-response-5709 yith_ywraq_add_item_product_message hide" style="display:'none'"></div>
                                                                        </div>

                                                                        <div class="clear"></div>
                                                                    </li>
                                                                    <li class="product type-product post-5350 status-publish outofstock product_cat-sound-level-meters has-post-thumbnail featured taxable shipping-taxable purchasable product-type-simple">

                                                                        <script type="text/javascript">
                                                                            jQuery(document).ready(function() {
                                                                                if (jQuery('li.post-5350 .mg-brand-wrapper-category').length < 1) {
                                                                                    jQuery('<span class="mg-brand-wrapper mg-brand-wrapper-category"><b>Brand:</b> <a href="https://gaotek.com/brands/gao-tek/">GAOTek</a></span>')
                                                                                        .insertAfter('li.post-5350 h2');
                                                                                }
                                                                            });

                                                                        </script>
                                                                        <a href="https://gaotek.com/product/sound-level-meter-calibrator-nd9a-nd9b/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img src="https://gaotek.com/wp-content/uploads/2016/12/Sound-Level-Meter-Calibrator-ND9a-ND9b-1.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://gaotek.com/wp-content/uploads/2016/12/Sound-Level-Meter-Calibrator-ND9a-ND9b-1.png 307w, https://gaotek.com/wp-content/uploads/2016/12/Sound-Level-Meter-Calibrator-ND9a-ND9b-1-150x150.png 150w, https://gaotek.com/wp-content/uploads/2016/12/Sound-Level-Meter-Calibrator-ND9a-ND9b-1-300x300.png 300w, https://gaotek.com/wp-content/uploads/2016/12/Sound-Level-Meter-Calibrator-ND9a-ND9b-1-200x200.png 200w, https://gaotek.com/wp-content/uploads/2016/12/Sound-Level-Meter-Calibrator-ND9a-ND9b-1-250x250.png 250w" sizes="(max-width: 250px) 100vw, 250px" width="250" height="250">
                                                                            <div class="product-details">
                                                                                <h2 class="woocommerce-loop-product__title">GAOTek Sound Level Meter Calibrator (ND9a, ND9b)</h2><span class="mg-brand-wrapper mg-brand-wrapper-category"><b>Brand:</b> <a href="https://gaotek.com/brands/gao-tek/">GAOTek</a></span><span itemprop="productID" class="sku">ID: GT00X900ZY</span>



                                                                                <span class="price">USD <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>229.00</span></span>


                                                                                <span class="excerpt">
                                                                                    <p>This Sound Level Meter Calibrator (ND9a, ND9b) is designed for calibration of sound level meters and sound measuring system with a frequency of 1000 Hz.</p>
                                                                                </span>
                                                                            </div>
                                                                            <!--/.product-details-->
                                                                        </a>
                                                                        <div class="yith-ywraq-add-to-quote add-to-quote-5350">
                                                                            <div class="yith-ywraq-add-button show" style="display:block">

                                                                                <a href="#" class="add-request-quote-button button" data-product_id="5350" data-wp_nonce="6d82f861e3">
                                                                                    Request a Quote</a>
                                                                            </div>
                                                                            <div class="yith_ywraq_add_item_response-5350 yith_ywraq_add_item_response_message hide" style="display:none">The product is already in quote request list!</div>
                                                                            <div class="yith_ywraq_add_item_browse-list-5350 yith_ywraq_add_item_browse_message  hide" style="display:none"><a href="https://gaotek.com/request-quote/">Browse the
                                                                                    list</a></div>
                                                                            <div class="yith_ywraq_add_item_product-response-5350 yith_ywraq_add_item_product_message hide" style="display:'none'"></div>
                                                                        </div>

                                                                        <div class="clear"></div>
                                                                    </li>
                                                                    <li class="product type-product post-4952 status-publish last outofstock product_cat-optical-fiber-identifier product_cat-deals product_tag-ofi-maximum-test-range has-post-thumbnail featured taxable shipping-taxable purchasable product-type-simple">

                                                                        <script type="text/javascript">
                                                                            jQuery(document).ready(function() {
                                                                                if (jQuery('li.post-4952 .mg-brand-wrapper-category').length < 1) {
                                                                                    jQuery('<span class="mg-brand-wrapper mg-brand-wrapper-category"><b>Brand:</b> <a href="https://gaotek.com/brands/gao-tek/">GAOTek</a></span>')
                                                                                        .insertAfter('li.post-4952 h2');
                                                                                }
                                                                            });

                                                                        </script>
                                                                        <a href="https://gaotek.com/product/optical-fiber-identifier-with-large-range-long-battery/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img src="https://gaotek.com/wp-content/uploads/2016/12/GAOTek-Optical-Fiber-Identifier-with-Large-Range-Long-Battery.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://gaotek.com/wp-content/uploads/2016/12/GAOTek-Optical-Fiber-Identifier-with-Large-Range-Long-Battery.png 230w, https://gaotek.com/wp-content/uploads/2016/12/GAOTek-Optical-Fiber-Identifier-with-Large-Range-Long-Battery-150x183.png 150w, https://gaotek.com/wp-content/uploads/2016/12/GAOTek-Optical-Fiber-Identifier-with-Large-Range-Long-Battery-205x250.png 205w" sizes="(max-width: 230px) 100vw, 230px" width="230" height="280">
                                                                            <div class="product-details">
                                                                                <h2 class="woocommerce-loop-product__title">GAOTek Optical Fiber Identifier with Large Range (Long Battery)</h2><span class="mg-brand-wrapper mg-brand-wrapper-category"><b>Brand:</b> <a href="https://gaotek.com/brands/gao-tek/">GAOTek</a></span><span itemprop="productID" class="sku">ID: GAO-OFI-106</span>



                                                                                <span class="price">USD <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>3,750.00</span></span>


                                                                                <span class="excerpt">
                                                                                    <p>This Optical Fiber Identifier with Large Range (Long Battery) uses fiber interference technology for quick

                                                                                        identification of cables which are usually buried in the wells or wire poles for

                                                                                        a maximum test range of 37.28 mi

                                                                                        (60 km).</p>
                                                                                </span>
                                                                            </div>
                                                                            <!--/.product-details-->
                                                                        </a>
                                                                        <div class="yith-ywraq-add-to-quote add-to-quote-4952">
                                                                            <div class="yith-ywraq-add-button show" style="display:block">

                                                                                <a href="#" class="add-request-quote-button button" data-product_id="4952" data-wp_nonce="3b64d3a384">
                                                                                    Request a Quote</a>
                                                                            </div>
                                                                            <div class="yith_ywraq_add_item_response-4952 yith_ywraq_add_item_response_message hide" style="display:none">The product is already in quote request list!</div>
                                                                            <div class="yith_ywraq_add_item_browse-list-4952 yith_ywraq_add_item_browse_message  hide" style="display:none"><a href="https://gaotek.com/request-quote/">Browse the
                                                                                    list</a></div>
                                                                            <div class="yith_ywraq_add_item_product-response-4952 yith_ywraq_add_item_product_message hide" style="display:'none'"></div>
                                                                        </div>

                                                                        <div class="clear"></div>
                                                                    </li>
                                                                    <li class="product type-product post-4771 status-publish first outofstock product_cat-industrial-gas-detectors has-post-thumbnail featured taxable shipping-taxable purchasable product-type-simple">

                                                                        <script type="text/javascript">
                                                                            jQuery(document).ready(function() {
                                                                                if (jQuery('li.post-4771 .mg-brand-wrapper-category').length < 1) {
                                                                                    jQuery('<span class="mg-brand-wrapper mg-brand-wrapper-category"><b>Brand:</b> <a href="https://gaotek.com/brands/gao-tek/">GAOTek</a></span>')
                                                                                        .insertAfter('li.post-4771 h2');
                                                                                }
                                                                            });

                                                                        </script>
                                                                        <a href="https://gaotek.com/product/gas-detector-for-methanethiol-wide-rangedata-record/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img src="https://gaotek.com/wp-content/uploads/2016/12/Gas-Detector-for-Methanethiol-Wide-Range-Data-Recod.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://gaotek.com/wp-content/uploads/2016/12/Gas-Detector-for-Methanethiol-Wide-Range-Data-Recod.png 600w, https://gaotek.com/wp-content/uploads/2016/12/Gas-Detector-for-Methanethiol-Wide-Range-Data-Recod-150x150.png 150w, https://gaotek.com/wp-content/uploads/2016/12/Gas-Detector-for-Methanethiol-Wide-Range-Data-Recod-300x300.png 300w, https://gaotek.com/wp-content/uploads/2016/12/Gas-Detector-for-Methanethiol-Wide-Range-Data-Recod-100x100.png 100w, https://gaotek.com/wp-content/uploads/2016/12/Gas-Detector-for-Methanethiol-Wide-Range-Data-Recod-250x250.png 250w, https://gaotek.com/wp-content/uploads/2016/12/Gas-Detector-for-Methanethiol-Wide-Range-Data-Recod-400x400.png 400w" sizes="(max-width: 250px) 100vw, 250px" width="250" height="250">
                                                                            <div class="product-details">
                                                                                <h2 class="woocommerce-loop-product__title">Gas Detector for Methanethiol (Wide Range/Data Record)</h2><span class="mg-brand-wrapper mg-brand-wrapper-category"><b>Brand:</b> <a href="https://gaotek.com/brands/gao-tek/">GAOTek</a></span><span itemprop="productID" class="sku">ID: GT00Z200Z2</span>



                                                                                <span class="price">USD <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>1,699.00</span></span>


                                                                                <span class="excerpt">
                                                                                    <p>GAOTek Gas Detector for Methanethiol detects concentration of methanethiol gas, records data, and offers wide range of measurement.</p>
                                                                                </span>
                                                                            </div>
                                                                            <!--/.product-details-->
                                                                        </a>
                                                                        <div class="yith-ywraq-add-to-quote add-to-quote-4771">
                                                                            <div class="yith-ywraq-add-button show" style="display:block">

                                                                                <a href="#" class="add-request-quote-button button" data-product_id="4771" data-wp_nonce="f8a2cdab8e">
                                                                                    Request a Quote</a>
                                                                            </div>
                                                                            <div class="yith_ywraq_add_item_response-4771 yith_ywraq_add_item_response_message hide" style="display:none">The product is already in quote request list!</div>
                                                                            <div class="yith_ywraq_add_item_browse-list-4771 yith_ywraq_add_item_browse_message  hide" style="display:none"><a href="https://gaotek.com/request-quote/">Browse the
                                                                                    list</a></div>
                                                                            <div class="yith_ywraq_add_item_product-response-4771 yith_ywraq_add_item_product_message hide" style="display:'none'"></div>
                                                                        </div>

                                                                        <div class="clear"></div>
                                                                    </li>
                                                                    <li class="product type-product post-3787 status-publish outofstock product_cat-optical-attenuator product_tag-attenuators-catv product_tag-attenuators-insertion-loss product_tag-attenuators-short-distance product_tag-attenuators-variable-attenuation has-post-thumbnail featured taxable shipping-taxable product-type-simple">

                                                                        <script type="text/javascript">
                                                                            jQuery(document).ready(function() {
                                                                                if (jQuery('li.post-3787 .mg-brand-wrapper-category').length < 1) {
                                                                                    jQuery('<span class="mg-brand-wrapper mg-brand-wrapper-category"><b>Brand:</b> <a href="https://gaotek.com/brands/gao-tek/">GAOTek</a></span>')
                                                                                        .insertAfter('li.post-3787 h2');
                                                                                }
                                                                            });

                                                                        </script>
                                                                        <a href="https://gaotek.com/product/optical-attenuator/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img src="https://gaotek.com/wp-content/uploads/2016/07/C0270002-1.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://gaotek.com/wp-content/uploads/2016/07/C0270002-1.png 450w, https://gaotek.com/wp-content/uploads/2016/07/C0270002-1-150x150.png 150w, https://gaotek.com/wp-content/uploads/2016/07/C0270002-1-300x300.png 300w, https://gaotek.com/wp-content/uploads/2016/07/C0270002-1-100x100.png 100w, https://gaotek.com/wp-content/uploads/2016/07/C0270002-1-250x250.png 250w, https://gaotek.com/wp-content/uploads/2016/07/C0270002-1-400x400.png 400w" sizes="(max-width: 250px) 100vw, 250px" width="250" height="250">
                                                                            <div class="product-details">
                                                                                <h2 class="woocommerce-loop-product__title">GAOTek Optical Attenuator</h2><span class="mg-brand-wrapper mg-brand-wrapper-category"><b>Brand:</b> <a href="https://gaotek.com/brands/gao-tek/">GAOTek</a></span><span itemprop="productID" class="sku">ID: GAO-VOA-102</span>



                                                                                <span class="price">USD <strong>Call for Quote</strong></span>


                                                                                <span class="excerpt">
                                                                                    <p>This Optical Attenuator is used in measuring the parameters of fiber optical system, testing FTTX, attenuate the short distance in fiber optical networks.</p>
                                                                                </span>
                                                                            </div>
                                                                            <!--/.product-details-->
                                                                        </a>
                                                                        <div class="yith-ywraq-add-to-quote add-to-quote-3787">
                                                                            <div class="yith-ywraq-add-button show" style="display:block">

                                                                                <a href="#" class="add-request-quote-button button" data-product_id="3787" data-wp_nonce="fa0d9319ab">
                                                                                    Request a Quote</a>
                                                                            </div>
                                                                            <div class="yith_ywraq_add_item_response-3787 yith_ywraq_add_item_response_message hide" style="display:none">The product is already in quote request list!</div>
                                                                            <div class="yith_ywraq_add_item_browse-list-3787 yith_ywraq_add_item_browse_message  hide" style="display:none"><a href="https://gaotek.com/request-quote/">Browse the
                                                                                    list</a></div>
                                                                            <div class="yith_ywraq_add_item_product-response-3787 yith_ywraq_add_item_product_message hide" style="display:'none'"></div>
                                                                        </div>

                                                                        <div class="clear"></div>
                                                                    </li>
                                                                    <li class="product type-product post-3721 status-publish outofstock product_cat-signal-level-meters product_tag-slm-digital-analog-signal-analysis product_tag-slm-multifunction product_tag-slm-trunk-cable-voltage has-post-thumbnail featured taxable shipping-taxable purchasable product-type-simple">

                                                                        <script type="text/javascript">
                                                                            jQuery(document).ready(function() {
                                                                                if (jQuery('li.post-3721 .mg-brand-wrapper-category').length < 1) {
                                                                                    jQuery('<span class="mg-brand-wrapper mg-brand-wrapper-category"><b>Brand:</b> <a href="https://gaotek.com/brands/gao-tek/">GAOTek</a></span>')
                                                                                        .insertAfter('li.post-3721 h2');
                                                                                }
                                                                            });

                                                                        </script>
                                                                        <a href="https://gaotek.com/product/handheld-catv-signal-level-meter/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img src="https://gaotek.com/wp-content/uploads/2016/06/GAO-Tek-Handheld-CATV-Signal-Level-Meter.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://gaotek.com/wp-content/uploads/2016/06/GAO-Tek-Handheld-CATV-Signal-Level-Meter.png 422w, https://gaotek.com/wp-content/uploads/2016/06/GAO-Tek-Handheld-CATV-Signal-Level-Meter-290x300.png 290w, https://gaotek.com/wp-content/uploads/2016/06/GAO-Tek-Handheld-CATV-Signal-Level-Meter-150x155.png 150w, https://gaotek.com/wp-content/uploads/2016/06/GAO-Tek-Handheld-CATV-Signal-Level-Meter-241x250.png 241w, https://gaotek.com/wp-content/uploads/2016/06/GAO-Tek-Handheld-CATV-Signal-Level-Meter-386x400.png 386w" sizes="(max-width: 250px) 100vw, 250px" width="250" height="259">
                                                                            <div class="product-details">
                                                                                <h2 class="woocommerce-loop-product__title">GAOTek Handheld CATV Signal Level Meter</h2><span class="mg-brand-wrapper mg-brand-wrapper-category"><b>Brand:</b> <a href="https://gaotek.com/brands/gao-tek/">GAOTek</a></span><span itemprop="productID" class="sku">ID: A0N0003tek</span>



                                                                                <span class="price">USD <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>349.00</span></span>


                                                                                <span class="excerpt">
                                                                                    <p>This Signal Level Meter is a multi-functional portable signal meter which features a large character TN LCD for clear display of test results and can also
                                                                                        measure 2 channels at the same time.</p>
                                                                                </span>
                                                                            </div>
                                                                            <!--/.product-details-->
                                                                        </a>
                                                                        <div class="yith-ywraq-add-to-quote add-to-quote-3721">
                                                                            <div class="yith-ywraq-add-button show" style="display:block">

                                                                                <a href="#" class="add-request-quote-button button" data-product_id="3721" data-wp_nonce="8956dd1e18">
                                                                                    Request a Quote</a>
                                                                            </div>
                                                                            <div class="yith_ywraq_add_item_response-3721 yith_ywraq_add_item_response_message hide" style="display:none">The product is already in quote request list!</div>
                                                                            <div class="yith_ywraq_add_item_browse-list-3721 yith_ywraq_add_item_browse_message  hide" style="display:none"><a href="https://gaotek.com/request-quote/">Browse the
                                                                                    list</a></div>
                                                                            <div class="yith_ywraq_add_item_product-response-3721 yith_ywraq_add_item_product_message hide" style="display:'none'"></div>
                                                                        </div>

                                                                        <div class="clear"></div>
                                                                    </li>
                                                                    <li class="product type-product post-387 status-publish last outofstock product_cat-function-generators has-post-thumbnail featured taxable shipping-taxable product-type-simple">

                                                                        <script type="text/javascript">
                                                                            jQuery(document).ready(function() {
                                                                                if (jQuery('li.post-387 .mg-brand-wrapper-category').length < 1) {
                                                                                    jQuery('<span class="mg-brand-wrapper mg-brand-wrapper-category"><b>Brand:</b> <a href="https://gaotek.com/brands/gao-tek/">GAOTek</a></span>')
                                                                                        .insertAfter('li.post-387 h2');
                                                                                }
                                                                            });

                                                                        </script>
                                                                        <a href="https://gaotek.com/product/dds-function-generator/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img src="https://gaotek.com/wp-content/uploads/2016/02/A0230004tek.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="DDS function generator" srcset="https://gaotek.com/wp-content/uploads/2016/02/A0230004tek.png 279w, https://gaotek.com/wp-content/uploads/2016/02/A0230004tek-150x150.png 150w, https://gaotek.com/wp-content/uploads/2016/02/A0230004tek-100x100.png 100w, https://gaotek.com/wp-content/uploads/2016/02/A0230004tek-250x250.png 250w" sizes="(max-width: 250px) 100vw, 250px" width="250" height="250">
                                                                            <div class="product-details">
                                                                                <h2 class="woocommerce-loop-product__title">GAOTek DDS Function Generator</h2><span class="mg-brand-wrapper mg-brand-wrapper-category"><b>Brand:</b> <a href="https://gaotek.com/brands/gao-tek/">GAOTek</a></span><span itemprop="productID" class="sku">ID: A0230004tek</span>



                                                                                <span class="price">USD <strong>Call for Quote</strong></span>


                                                                                <span class="excerpt">
                                                                                    <p>This DDS(Direct Digital Synthesized) function

                                                                                        generator has a highly accurate and highly stable

                                                                                        output. It’s designed based on DDS(Direct Digital

                                                                                        Synthesized) technology. Its frequency range is 40

                                                                                        µHz to 10 MHz and output waveforms includes Sine,

                                                                                        Square, Pulse and DC</p>
                                                                                </span>
                                                                            </div>
                                                                            <!--/.product-details-->
                                                                        </a>
                                                                        <div class="yith-ywraq-add-to-quote add-to-quote-387">
                                                                            <div class="yith-ywraq-add-button show" style="display:block">

                                                                                <a href="#" class="add-request-quote-button button" data-product_id="387" data-wp_nonce="f7850da1fc">
                                                                                    Request a Quote</a>
                                                                            </div>
                                                                            <div class="yith_ywraq_add_item_response-387 yith_ywraq_add_item_response_message hide" style="display:none">The product is already in quote request list!</div>
                                                                            <div class="yith_ywraq_add_item_browse-list-387 yith_ywraq_add_item_browse_message  hide" style="display:none"><a href="https://gaotek.com/request-quote/">Browse the
                                                                                    list</a></div>
                                                                            <div class="yith_ywraq_add_item_product-response-387 yith_ywraq_add_item_product_message hide" style="display:'none'"></div>
                                                                        </div>

                                                                        <div class="clear"></div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div><!-- .lsow-panel -->
                                                </div><!-- .lsow-accordion -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="moreproduct" class="row">
                                    @foreach ($mproducts as $mproduct)
                                    <div id="" class="col-md-4">
                                        <div id="panel-9-6-0-0" class="so-panel widget widget_sow-image panel-first-child" data-index="22">
                                            <div class="so-widget-sow-image so-widget-sow-image-default-b37b538aacbf">
                                                <h3 class="widget-title">fiber-icon</h3>
                                                <div class="sow-image-container">
                                                    <a href=""> <img src="{{ asset($mproduct->mproduct_image) }}" title="fiber-icon" alt="" class="" width="100" height="100">
                                                    </a></div>

                                            </div>
                                        </div>
                                        <div id="panel-9-6-0-1" class="so-panel widget widget_sow-editor panel-last-child" data-index="23">
                                            <div class="panel-widget-style panel-widget-style-for-9-6-0-1">
                                                <div class="so-widget-sow-editor so-widget-sow-editor-base">
                                                    <div class="siteorigin-widget-tinymce textwidget">
                                                        <p style="text-align: center;"><strong>{{ $mproduct->heading }}</strong></p>
                                                        <p>{{ $mproduct->title }}<span><a onclick="read_toggle(274279165, 'Read More', 'Read Less'); return false;" class="read-link" id="readlink274279165" style="readlink" href="#">Read More</a></span>
                                                        </p>
                                                        <div class="read_div" id="read274279165" style="display: none;">
                                                            {{ $mproduct->detail }}
                                                        </div>
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </section>

                    </div>

                </article>
            </div>


        </section>

    </section>


    <div class="fix"></div>

</div>









</div>








<div class="footer-shop" style="background:url(https://gaotek.com/wp-content/uploads/2016/03/ask-background.jpg) center center no-repeat; background-size:100%;">
    <div class="inner">
        <div class="footer-shop-content">
            <p>Not sure what product best fits your needs? Ask an Expert! </p><a href="" class="button">Ask an Expert</a>
        </div>
        <!--/.footer-shop-content-->
    </div>
    <!--/.inner-->
</div>
<!--/.footer-shop-->
<div class="fix"></div>










<div class="wrapper-footer">

    <div id="footerback">
        @foreach ($footers as $footer)
        <div id="advantage"><img src="{{ asset($footer->footer_image) }}"></div>
        @endforeach


        <div id="footertopcon">
            @foreach ($supports as $support)
            <div id="footer_top1">
                <aside id="text-7" class="widget widget_text">
                    <div class="textwidget">
                        <div id="fttop">
                            <div id="icon"><img src="{{ asset($support->image) }}" align="left"></div>
                            <div id="fttitle">
                                <h1>{{ $support->heading }}</h1>
                            </div>
                        </div>
                        <br>
                        {{ $support->details }}
                    </div>
                </aside>
            </div>
            @endforeach


        </div>

    </div>

</div>




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
