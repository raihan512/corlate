<?php
require_once('functions/manage.php');
get_header();
?>

    <div class="page-title" style="background-image: url(images/page-title.png)">
        <h1>Portfolio</h1>
    </div>
    
    <section id="portfolio">
        <div class="container">
            <div class="center">
                <h2>Recent work</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>


            <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*">All Works</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".bootstrap">Creative</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".html">Photography</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".wordpress">Web Development</a></li>
            </ul>
            <!--/#portfolio-filter-->

            <div class="row">
                <div class="portfolio-items">
                    <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3 single-work">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/item-1.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <a class="preview" href="images/portfolio/item-1.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.portfolio-item-->

                    <div class="portfolio-item joomla bootstrap col-xs-12 col-sm-4 col-md-3 single-work">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/item-2.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <a class="preview" href="images/portfolio/item-2.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.portfolio-item-->

                    <div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-3 single-work">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/item-3.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <a class="preview" href="images/portfolio/item-3.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.portfolio-item-->

                    <div class="portfolio-item joomla wordpress apps col-xs-12 col-sm-4 col-md-3 single-work">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/item-4.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <a class="preview" href="images/portfolio/item-4.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.portfolio-item-->

                    <div class="portfolio-item joomla html bootstrap col-xs-12 col-sm-4 col-md-3 single-work">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/item-5.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <a class="preview" href="images/portfolio/item-5.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.portfolio-item-->

                    <div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3 single-work">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/item-1.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <a class="preview" href="images/portfolio/item-1.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.portfolio-item-->

                    <div class="portfolio-item joomla html bootstrap col-xs-12 col-sm-4 col-md-3 single-work">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/item-6.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <a class="preview" href="images/portfolio/item-6.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.portfolio-item-->

                    <div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3 single-work">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/item-2.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <a class="preview" href="images/portfolio/item-2.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.portfolio-item-->
                </div>
            </div>
        </div>
    </section>
    <!--/#portfolio-item-->

    <?php
get_footer();
?>