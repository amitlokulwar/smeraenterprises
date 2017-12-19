<?php
/**
 * Template Name: Home Page
 *
 */
 ?>
<?php get_header(); ?>

<!--slider section starts-->
    <section class="home_slider">
        <div class="main-slider owl-carousel owl-theme">
            <?php
                  $args = array( 'posts_per_page' => -1, 'post_type' => 'slider', 'order' => 'ASC' , 'orderby' => 'date');
                  $myposts = get_posts( $args );
                  foreach ( $myposts as $post ) : setup_postdata( $post ); 
            ?>
            <div class="item">
                <div class="slide_content">
                    <?php the_post_thumbnail('full', array('class' => 'img-responsive') ); ?>
                    <!-- <div class="overlay-box">
                       <p>lorem ipsum</p>
                    </div> -->
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
    <!--slider section ends-->

    <!-- Promo Block-->
        <section class="promo-section" id="intro">
            <div class="container-fluid no-column-space">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="fullscreen-static-image1 fullheight promo-block">
                            <div class="promo-block__content g-pr-50">
                                <div class="text-right pull-right">
                                    <span class="promo__pretitle g-dp-block g-mb-20">We professionally do</span>
                                    <h1 class="promo__title promo__title--right-bar g-pr-30 font-main g-mb-30">Interior<br> works</h1>
                                    <a href="#" class="btn-u btn-u--construction trim">Read more <i class="g-ml-10 fa btn-u__fa fa-arrow-left"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="fullscreen-static-image2 fullheight promo-block">
                            <div class="promo-block__content g-pl-50">
                                <div class="text-left pull-left">
                                    <span class="promo__pretitle g-dp-block g-mb-20">We professionally do</span>
                                    <h1 class="promo__title g-pl-30 promo__title--left-bar font-main g-mb-30">Exterior<br> works</h1>
                                    <a href="#" class="btn-u btn-u--construction trim"><i class="g-mr-10 fa btn-u__fa fa-arrow-right"></i> Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Promo Block -->

        <!-- About -->
        <section id="about">
            <div class="container-fluid no-padding with-bg with-bg--1">
                <div class="color-overlay"></div>
                <div class="container">
                    <!-- call to action -->
                    <div class=" row g-pt-20 g-pb-30">
                        <div class="col-md-8 col-sm-12 col-md-offset-4">
                            <div class="call-action-v1 call-action-v1-boxed">
                    <div class="call-action-v1-box">
                        <div class="call-action-v1-in">
                            <h3 class="cta__title font-main">Need to do calculations?</h3>
                            <p class="cta__text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
                        </div>
                        <div class="call-action-v1-in inner-btn page-scroll">
                            <a href="#" class="btn-u btn-u--construction trim"><i class="g-mr-10 fa btn-u__fa fa-arrow-right"></i> Get a Quote</a>
                        </div>
                    </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="g-pt-70 g-pb-80">
                    <div class="row">
                        <div class="col-md-5 g-pt-30">
                            <img class="img-responsive about__img g-mb-30" src="<?php bloginfo('template_directory'); ?>/assets/img-temp/about/about2.jpg" alt="">
                            <h3 class="about__title font-main g-mb-20">Building since 1943</h3>
                            <p class="about__text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
                        </div>
                        <!-- Tabs -->
                        <div class="col-md-7">
                            <!-- Accordion v1 -->
                            <div class="panel-group acc-v1 plus-toggle " id="accordion-1">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle g-pt-0" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-One">
                                                <span class="icon-user tab__icon g-mr-10"></span> Who we are
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse-One" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <p>Anim pariatur cliche reprehenderit, 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</p>

                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-Two">
                                                <span class="icon-calendar tab__icon g-mr-10"></span> Our history
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse-Two" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Food truck quinoa nesciunt laborum eiusmod.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-Three">
                                                <span class="icon-settings tab__icon g-mr-10"></span> Our services
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse-Three" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-Four">
                                                <span class="icon-diamond tab__icon g-mr-10"></span> Our values
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse-Four" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. nesciunt laborum eiusmod.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Accordion v1 -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About -->

        <!-- Our Services -->
        <section id="services">
            <!-- best services -->
            <div class="container-fluid no-column-space">
                <div class="row">
                    <div class="col-md-6">
                        <div class="best-service best-service--1 text-center">
                            <div class="valign__middle">
                                <h2 class="best-service__title font-main g-mb-20">Building</h2>
                                <p class="best-service__text g-mb-30">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
                                <a href="#" class="btn-u btn-u--construction trim"><i class="g-mr-10 fa btn-u__fa fa-arrow-right"></i> Read more</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="best-service best-service--2 text-center">
                            <div class="valign__middle">
                                <h2 class="best-service__title font-main g-mb-20">Plumbing works</h2>
                                <p class="best-service__text g-mb-30">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
                                <a href="#" class="btn-u btn-u--construction trim"><i class="g-mr-10 fa btn-u__fa fa-arrow-right"></i> Read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="best-service best-service--3 text-center">
                            <div class="valign__middle">
                                <h2 class="best-service__title font-main g-mb-20">Painting</h2>
                                <p class="best-service__text g-mb-30">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
                                <a href="#" class="btn-u btn-u--construction trim"><i class="g-mr-10 fa btn-u__fa fa-arrow-right"></i> Read more</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="best-service best-service--4 text-center">
                            <div class="valign__middle">
                                <h2 class="best-service__title font-main g-mb-20">Reconstruction</h2>
                                <p class="best-service__text g-mb-30">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
                                <a href="#" class="btn-u btn-u--construction trim"><i class="g-mr-10 fa btn-u__fa fa-arrow-right"></i> Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container content-lg g-pb-90">
                <div class="heading-v14 text-center g-mb-100">
                    <span class="heading-v14__block-name g-dp-block g-mb-20">Our services</span>
                    <h1 class="heading-v14__title font-main">What we can do</h1>
                </div>
                <!-- Tab v3 -->
                <div class="row tab-v3">
                    <div class="col-sm-3">
                        <ul class="nav nav-pills nav-stacked">
                            <li class="active">
                                <a href="#planning" data-toggle="tab">
                                    <i class="g-mr-10 fa tab__fa fa-arrow-right"></i> Project Planning
                                </a>
                            </li>
                            <li>
                                <a href="#documentation" data-toggle="tab">
                                    <i class="g-mr-10 fa tab__fa fa-arrow-right"></i> Project Documentation
                                </a>
                            </li>
                            <li>
                                <a href="#materials" data-toggle="tab">
                                    <i class="g-mr-10 fa tab__fa fa-arrow-right"></i> Selection of materials
                                </a>
                            </li>
                            <li>
                                <a href="#exterior-d" data-toggle="tab">
                                    <i class="g-mr-10 fa tab__fa fa-arrow-right"></i> Exterior Design
                                </a>
                            </li>
                            <li class="last">
                                <a href="#interior-d" data-toggle="tab">
                                    <i class="g-mr-10 fa tab__fa fa-arrow-right"></i> Interior Design
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-9">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="planning">
                                <div class="row">
                                    <div class="col-sm-4 g-sm-mb-50">
                                        <img class="img-responsive g-mb-20" src="<?php bloginfo('template_directory'); ?>/assets/img-temp/services/service5.jpg" alt="">
                                        <h3 class="service__title font-main g-mb-10"><a href="#">Saepe eveniet ut</a></h3>
                                        <p class="service__text">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                                    </div>

                                    <div class="col-sm-4 g-sm-mb-50">
                                        <img class="img-responsive g-mb-20" src="<?php bloginfo('template_directory'); ?>/assets/img-temp/services/service13.jpg" alt="">
                                        <h3 class="service__title font-main g-mb-10"><a href="#">voluptate velit esse</a></h3>
                                        <p class="service__text">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                                    </div>

                                    <div class="col-sm-4">
                                        <img class="img-responsive g-mb-20" src="<?php bloginfo('template_directory'); ?>/assets/img-temp/services/service12.jpg" alt="">
                                        <h3 class="service__title font-main g-mb-10"><a href="#">Temporibus autem quibusdam</a></h3>
                                        <p class="service__text">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade in" id="documentation">
                                <div class="row">
                                    <div class="col-sm-4 g-sm-mb-50">
                                        <img class="img-responsive g-mb-20" src="<?php bloginfo('template_directory'); ?>/assets/img-temp/services/service7.jpg" alt="">
                                        <h3 class="service__title font-main g-mb-10"><a href="#">Saepe eveniet ut</a></h3>
                                        <p class="service__text">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                                    </div>

                                    <div class="col-sm-4 g-sm-mb-50">
                                        <img class="img-responsive g-mb-20" src="<?php bloginfo('template_directory'); ?>/assets/img-temp/services/service8.jpg" alt="">
                                        <h3 class="service__title font-main g-mb-10"><a href="#">voluptate velit esse</a></h3>
                                        <p class="service__text">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                                    </div>

                                    <div class="col-sm-4">
                                        <img class="img-responsive g-mb-20" src="<?php bloginfo('template_directory'); ?>/assets/img-temp/services/service9.jpg" alt="">
                                        <h3 class="service__title font-main g-mb-10"><a href="#">Temporibus autem quibusdam</a></h3>
                                        <p class="service__text">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade in" id="materials">
                                <div class="row">
                                    <div class="col-sm-4 g-sm-mb-50">
                                        <img class="img-responsive g-mb-20" src="assets/img-temp/services/service10.jpg" alt="">
                                        <h3 class="service__title font-main g-mb-10"><a href="#">Saepe eveniet ut</a></h3>
                                        <p class="service__text">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                                    </div>

                                    <div class="col-sm-4 g-sm-mb-50">
                                        <img class="img-responsive g-mb-20" src="assets/img-temp/services/service4.jpg" alt="">
                                        <h3 class="service__title font-main g-mb-10"><a href="#">voluptate velit esse</a></h3>
                                        <p class="service__text">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                                    </div>

                                    <div class="col-sm-4">
                                        <img class="img-responsive g-mb-20" src="assets/img-temp/services/service1.jpg" alt="">
                                        <h3 class="service__title font-main g-mb-10"><a href="#">Temporibus autem quibusdam</a></h3>
                                        <p class="service__text">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade in" id="exterior-d">
                                <div class="row">
                                    <div class="col-sm-4 g-sm-mb-50">
                                        <img class="img-responsive g-mb-20" src="<?php bloginfo('template_directory'); ?>/assets/img-temp/services/service17.jpg" alt="">
                                        <h3 class="service__title font-main g-mb-10"><a href="#">Saepe eveniet ut</a></h3>
                                        <p class="service__text">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                                    </div>

                                    <div class="col-sm-4 g-sm-mb-50">
                                        <img class="img-responsive g-mb-20" src="<?php bloginfo('template_directory'); ?>/assets/img-temp/services/service11.jpg" alt="">
                                        <h3 class="service__title font-main g-mb-10"><a href="#">voluptate velit esse</a></h3>
                                        <p class="service__text">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                                    </div>

                                    <div class="col-sm-4">
                                        <img class="img-responsive g-mb-20" src="<?php bloginfo('template_directory'); ?>/assets/img-temp/services/service15.jpg" alt="">
                                        <h3 class="service__title font-main g-mb-10"><a href="#">Temporibus autem quibusdam</a></h3>
                                        <p class="service__text">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade in" id="interior-d">
                                <div class="row">
                                    <div class="col-sm-4 g-sm-mb-50">
                                        <img class="img-responsive g-mb-20" src="<?php bloginfo('template_directory'); ?>/assets/img-temp/services/service2.jpg" alt="">
                                        <h3 class="service__title font-main g-mb-10"><a href="#">Saepe eveniet ut</a></h3>
                                        <p class="service__text">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                                    </div>

                                    <div class="col-sm-4 g-sm-mb-50">
                                        <img class="img-responsive g-mb-20" src="<?php bloginfo('template_directory'); ?>/assets/img-temp/services/service3.jpg" alt="">
                                        <h3 class="service__title font-main g-mb-10"><a href="#">voluptate velit esse</a></h3>
                                        <p class="service__text">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                                    </div>

                                    <div class="col-sm-4">
                                        <img class="img-responsive g-mb-20" src="<?php bloginfo('template_directory'); ?>/assets/img-temp/services/service20.jpg" alt="">
                                        <h3 class="service__title font-main g-mb-10"><a href="#">Temporibus autem quibusdam</a></h3>
                                        <p class="service__text">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tab v3 -->
            </div>
        </section>
        <!-- End Our Services -->

        <!-- Recent Projects -->
        <section id="projects">
            <div class="container-fluid with-bg with-bg--2 no-padding">
                <div class="color-overlay"></div>
                <div class="container content-lg">
                    <div class="heading-v14 heading-v14--diff text-center g-mb-100">
                        <span class="heading-v14__block-name g-dp-block g-mb-20">Recent Projects</span>
                        <h1 class="heading-v14__title font-main">Projects in progress</h1>
                    </div>

                    <div class="row">
                        <div class="col-md-4 g-sm-mb-50">
                            <span class="project__cat">Building</span>
                            <h3 class="project__title font-main g-mb-20">Excepteur sint occaecat cupidatat</h3>
                            <img class="project__img img-responsive g-mb-20" src="<?php bloginfo('template_directory'); ?>/assets/img-temp/projects/project1.jpg" alt="">
                            <p class="project__text g-mb-40">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <a href="#" class="btn-u btn-u--construction trim"><i class="g-mr-10 fa btn-u__fa fa-arrow-right"></i> View Project</a>
                        </div>

                        <div class="col-md-4 g-sm-mb-50">
                            <span class="project__cat">Building</span>
                            <h3 class="project__title font-main g-mb-20">Excepteur sint occaecat cupidatat</h3>
                            <img class="project__img img-responsive g-mb-20" src="<?php bloginfo('template_directory'); ?>/assets/img-temp/projects/project2.jpg" alt="">
                            <p class="project__text g-mb-40">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <a href="#" class="btn-u btn-u--construction trim"><i class="g-mr-10 fa btn-u__fa fa-arrow-right"></i> View Project</a>
                        </div>

                        <div class="col-md-4">
                            <span class="project__cat">Building</span>
                            <h3 class="project__title font-main g-mb-20">Excepteur sint occaecat cupidatat</h3>
                            <img class="project__img img-responsive g-mb-20" src="<?php bloginfo('template_directory'); ?>/assets/img-temp/projects/project3.jpg" alt="">
                            <p class="project__text g-mb-40">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <a href="#" class="btn-u btn-u--construction trim"><i class="g-mr-10 fa btn-u__fa fa-arrow-right"></i> View Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Recent Projects -->

        <!-- Testimonials -->
        <section id="testimonials">
            <div class="container-fluid with-bg--3">
                <div class="content-lg">
                    <div class="heading-v14 text-center g-mb-40">
                        <span class="heading-v14__block-name g-dp-block g-mb-20">Testimonials</span>
                        <h1 class="heading-v14__title font-main g-mb-60">What clients say</h1>
                        <p class="heading-v14__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                    <!-- Owl Carousel v1-->
                    <div class="owl2-carousel-v1 owl-theme">
                        <div class="item text-center g-pt-60">
                            <div class="testi">
                                <img class="testi__img rounded-x" src="<?php bloginfo('template_directory'); ?>/assets/img-temp/testimonials/testi1.jpg" alt="">
                                <span class="testi__name g-dp-block">Simone Gomez</span>
                                <span class="testi__company g-dp-block g-mb-30">Anderson industry</span>
                                <i class="icon-custom testi__fa icon-sm rounded-x fa fa-quote-left"></i>
                                <p class="testi__text">Mauris sodales tellus vel felis dapibus, sit amet porta nibh egestas. Sed dignissim tellus quis sapien sagittis cursus. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
                            </div>
                        </div>
                        <div class="item text-center g-pt-60">
                            <div class="testi">
                                <img class="testi__img rounded-x" src="<?php bloginfo('template_directory'); ?>/assets/img-temp/testimonials/testi2.jpg" alt="">
                                <span class="testi__name g-dp-block">Carla Harris</span>
                                <span class="testi__company g-dp-block g-mb-30">HNN consultation corp</span>
                                <i class="icon-custom testi__fa icon-sm rounded-x fa fa-quote-left"></i>
                                <p class="testi__text">Mauris sodales tellus vel felis dapibus, sit amet porta nibh egestas. Sed dignissim tellus quis sapien sagittis cursus. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
                            </div>
                        </div>
                        <div class="item text-center g-pt-60">
                            <div class="testi">
                                <img class="testi__img rounded-x" src="<?php bloginfo('template_directory'); ?>/assets/img-temp/testimonials/testi3.jpg" alt="">
                                <span class="testi__name g-dp-block">Dianna Kimwealth</span>
                                <span class="testi__company g-dp-block g-mb-30">Robo construction</span>
                                <i class="icon-custom testi__fa icon-sm rounded-x fa fa-quote-left"></i>
                                <p class="testi__text">Mauris sodales tellus vel felis dapibus, sit amet porta nibh egestas. Sed dignissim tellus quis sapien sagittis cursus. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
                            </div>
                        </div>
                        <div class="item text-center g-pt-60">
                            <div class="testi">
                                <img class="testi__img rounded-x" src="<?php bloginfo('template_directory'); ?>/assets/img-temp/testimonials/testi4.jpg" alt="">
                                <span class="testi__name g-dp-block">John Wellberg</span>
                                <span class="testi__company g-dp-block g-mb-30">Solid iron corp</span>
                                <i class="icon-custom testi__fa icon-sm rounded-x fa fa-quote-left"></i>
                                <p class="testi__text">Mauris sodales tellus vel felis dapibus, sit amet porta nibh egestas. Sed dignissim tellus quis sapien sagittis cursus. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
                            </div>
                        </div>
                        <div class="item text-center g-pt-60">
                            <div class="testi">
                                <img class="testi__img rounded-x" src="<?php bloginfo('template_directory'); ?>/assets/img-temp/testimonials/testi5.jpg" alt="">
                                <span class="testi__name g-dp-block">Sarah Rahman</span>
                                <span class="testi__company g-dp-block g-mb-30">South Conton architecture</span>
                                <i class="icon-custom testi__fa icon-sm rounded-x fa fa-quote-left"></i>
                                <p class="testi__text">Mauris sodales tellus vel felis dapibus, sit amet porta nibh egestas. Sed dignissim tellus quis sapien sagittis cursus. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
                            </div>
                        </div>
                        <div class="item text-center g-pt-60">
                            <div class="testi">
                                <img class="testi__img rounded-x" src="<?php bloginfo('template_directory'); ?>/assets/img-temp/testimonials/testi6.jpg" alt="">
                                <span class="testi__name g-dp-block">Derek Fineman</span>
                                <span class="testi__company g-dp-block g-mb-30">Fineman construction company</span>
                                <i class="icon-custom testi__fa icon-sm rounded-x fa fa-quote-left"></i>
                                <p class="testi__text">Mauris sodales tellus vel felis dapibus, sit amet porta nibh egestas. Sed dignissim tellus quis sapien sagittis cursus. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
                            </div>
                        </div>
                        <div class="item text-center g-pt-60">
                            <div class="testi">
                                <img class="testi__img rounded-x" src="<?php bloginfo('template_directory'); ?>/assets/img-temp/testimonials/testi7.jpg" alt="">
                                <span class="testi__name g-dp-block">William Mountcon</span>
                                <span class="testi__company g-dp-block g-mb-30">Mountcon brothers</span>
                                <i class="icon-custom testi__fa icon-sm rounded-x fa fa-quote-left"></i>
                                <p class="testi__text">Mauris sodales tellus vel felis dapibus, sit amet porta nibh egestas. Sed dignissim tellus quis sapien sagittis cursus. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
                            </div>
                        </div>
                        <div class="item text-center g-pt-60">
                            <div class="testi">
                                <img class="testi__img rounded-x" src="<?php bloginfo('template_directory'); ?>/assets/img-temp/testimonials/testi8.jpg" alt="">
                                <span class="testi__name g-dp-block">Cathy Bollak</span>
                                <span class="testi__company g-dp-block g-mb-30">Simon/well company</span>
                                <i class="icon-custom testi__fa icon-sm rounded-x fa fa-quote-left"></i>
                                <p class="testi__text">Mauris sodales tellus vel felis dapibus, sit amet porta nibh egestas. Sed dignissim tellus quis sapien sagittis cursus. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid no-padding with-bg with-bg--4">
                <div class="color-overlay"></div>
                <div class="container content-md">
                    <!-- Owl Carousel v2-->
                    <div class="owl2-carousel-v2 owl-theme">
                        <div class="item">
                            <a href="#"><img class="client__img" src="<?php bloginfo('template_directory'); ?>/assets/img-temp/clients/img-white01.png" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"><img class="client__img" src="<?php bloginfo('template_directory'); ?>/assets/img-temp/clients/img-white03.png" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"><img class="client__img" src="<?php bloginfo('template_directory'); ?>/assets/img-temp/clients/img-white04.png" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"><img class="client__img" src="<?php bloginfo('template_directory'); ?>/assets/img-temp/clients/img-white05.png" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"><img class="client__img" src="<?php bloginfo('template_directory'); ?>/assets/img-temp/clients/img-white06.png" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"><img class="client__img" src="<?php bloginfo('template_directory'); ?>/assets/img-temp/clients/img-white07.png" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"><img class="client__img" src="<?php bloginfo('template_directory'); ?>/assets/img-temp/clients/img-white08.png" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"><img class="client__img" src="<?php bloginfo('template_directory'); ?>/assets/img-temp/clients/img-white09.png" alt=""></a>
                        </div>
                    </div>  
                </div>
            </div>
        </section>
        <!-- End Testimonials -->

        <!-- Gallery -->
        <section id="gallery">
            <div class="container-fluid no-side-padding g-pt-100">
                <div class="heading-v14 text-center g-mb-60">
                    <span class="heading-v14__block-name g-dp-block g-mb-20">Gallery</span>
                    <h1 class="heading-v14__title font-main g-mb-60">Our works</h1>
                </div>
                <!--=== Cube-Portfdlio ===-->
                <div class="cube-portfolio margin-bottom-20">
                    <div class="content-xs g-pb-0">
                        <div id="filters-container" class="cbp-l-filters-text content-xs">
                            <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> All </div> 
                            <div data-filter=".buidling" class="cbp-filter-item cbp-filter-item--1"> Building </div> 
                            <div data-filter=".electricity" class="cbp-filter-item cbp-filter-item--2"> Electricity </div> 
                            <div data-filter=".painting" class="cbp-filter-item cbp-filter-item--3"> Painting </div> 
                            <div data-filter=".plumbing" class="cbp-filter-item cbp-filter-item--4"> Plumbing </div> 
                            <div data-filter=".construction" class="cbp-filter-item cbp-filter-item--5"> Construction </div>
                        </div><!--/end Filters Container-->
                    </div>

                    <div id="grid-container" class="cbp-l-grid-fullWidth">
                        <div class="cbp-item buidling">
                            <a href="<?php bloginfo('template_directory'); ?>/assets/img-temp/gallery/gallery1.jpg" class="cbp-caption cbp-lightbox" data-title="    custom title 1">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img-temp/gallery/gallery1.jpg" alt="">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignLeft">
                                        <div class="cbp-l-caption-body">
                                            <span class="g-dp-block cbp-cat g-mb-10">Building</span>
                                            <div class="cbp-l-caption-title">Skyscraper</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item electricity">
                            <a href="<?php bloginfo('template_directory'); ?>/assets/img-temp/gallery/gallery2.jpg" class="cbp-caption cbp-lightbox" data-title="    custom title 2">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img-temp/gallery/gallery2.jpg" alt="">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignLeft">
                                        <div class="cbp-l-caption-body">
                                            <span class="g-dp-block cbp-cat g-mb-10">Electricity</span>
                                            <div class="cbp-l-caption-title">Skyscraper</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item painting">
                            <a href="<?php bloginfo('template_directory'); ?>/assets/img-temp/gallery/gallery3.jpg" class="cbp-caption cbp-lightbox" data-title="    custom title 3">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img-temp/gallery/gallery3.jpg" alt="">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignLeft">
                                        <div class="cbp-l-caption-body">
                                            <span class="g-dp-block cbp-cat g-mb-10">Painting</span>
                                            <div class="cbp-l-caption-title">House</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item buidling">
                            <a href="<?php bloginfo('template_directory'); ?>/assets/img-temp/gallery/gallery4.jpg" class="cbp-caption cbp-lightbox" data-title="    custom title 4">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img-temp/gallery/gallery4.jpg" alt="">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignLeft">
                                        <div class="cbp-l-caption-body">
                                            <span class="g-dp-block cbp-cat g-mb-10">Building</span>
                                            <div class="cbp-l-caption-title">Offices</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item painting">
                            <a href="<?php bloginfo('template_directory'); ?>/assets/img-temp/gallery/gallery5.jpg" class="cbp-caption cbp-lightbox" data-title="    custom title 5">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img-temp/gallery/gallery5.jpg" alt="">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignLeft">
                                        <div class="cbp-l-caption-body">
                                            <span class="g-dp-block cbp-cat g-mb-10">Painting</span>
                                            <div class="cbp-l-caption-title">Offices</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item electricity">
                            <a href="<?php bloginfo('template_directory'); ?>/assets/img-temp/gallery/gallery6.jpg" class="cbp-caption cbp-lightbox" data-title="    custom title 6">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img-temp/gallery/gallery6.jpg" alt="">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignLeft">
                                        <div class="cbp-l-caption-body">
                                            <span class="g-dp-block cbp-cat g-mb-10">Electricity</span>
                                            <div class="cbp-l-caption-title">Skyscraper</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div> 
                        <div class="cbp-item painting">
                            <a href="<?php bloginfo('template_directory'); ?>/assets/img-temp/gallery/gallery7.jpg" class="cbp-caption cbp-lightbox" data-title="    custom title 7">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img-temp/gallery/gallery7.jpg" alt="">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignLeft">
                                        <div class="cbp-l-caption-body">
                                            <span class="g-dp-block cbp-cat g-mb-10">Painting</span>
                                            <div class="cbp-l-caption-title">Skyscraper</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item buidling">
                            <a href="<?php bloginfo('template_directory'); ?>/assets/img-temp/gallery/gallery8.jpg" class="cbp-caption cbp-lightbox" data-title="    custom title 8">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img-temp/gallery/gallery8.jpg" alt="">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignLeft">
                                        <div class="cbp-l-caption-body">
                                            <span class="g-dp-block cbp-cat g-mb-10">Building</span>
                                            <div class="cbp-l-caption-title">Skyscraper</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item buidling">
                            <a href="<?php bloginfo('template_directory'); ?>/assets/img-temp/gallery/gallery9.jpg" class="cbp-caption cbp-lightbox" data-title="    custom title 9">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img-temp/gallery/gallery9.jpg" alt="">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignLeft">
                                        <div class="cbp-l-caption-body">
                                            <span class="g-dp-block cbp-cat g-mb-10">Building</span>
                                            <div class="cbp-l-caption-title">Skyscraper</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item plumbing">
                            <a href="<?php bloginfo('template_directory'); ?>/assets/img-temp/gallery/gallery10.jpg" class="cbp-caption cbp-lightbox" data-title="   custom title 10">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img-temp/gallery/gallery10.jpg" alt="">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignLeft">
                                        <div class="cbp-l-caption-body">
                                            <span class="g-dp-block cbp-cat g-mb-10">Plumbing</span>
                                            <div class="cbp-l-caption-title">Skyscraper</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item construction">
                            <a href="<?php bloginfo('template_directory'); ?>/assets/img-temp/gallery/gallery11.jpg" class="cbp-caption cbp-lightbox" data-title="   custom title 11">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img-temp/gallery/gallery11.jpg" alt="">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignLeft">
                                        <div class="cbp-l-caption-body">
                                            <span class="g-dp-block cbp-cat g-mb-10">Construction</span>
                                            <div class="cbp-l-caption-title">Recreation Center</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item construction">
                            <a href="<?php bloginfo('template_directory'); ?>/assets/img-temp/gallery/gallery12.jpg" class="cbp-caption cbp-lightbox" data-title="   custom title 12">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img-temp/gallery/gallery12.jpg" alt="">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignLeft">
                                        <div class="cbp-l-caption-body">
                                            <span class="g-dp-block cbp-cat g-mb-10">Construction</span>
                                            <div class="cbp-l-caption-title">House</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div><!--/end Grid Container-->
                </div>
                <!--=== End Cube-Portfdlio ===-->
            </div>
        </section>
        <!-- End Gallery -->

        <!-- Career -->
        <section id="career">
            <div class="container g-pt-80">
                <div class="heading-v14 text-center g-mb-60">
                    <span class="heading-v14__block-name g-dp-block g-mb-20">Career</span>
                    <h1 class="heading-v14__title font-main g-mb-60">Work with us</h1>
                    <p class="heading-v14__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                </div>
            </div>

            <div class="container-fluid with-bg with-bg--5 no-padding">
                <div class="color-overlay"></div>
                <div class="container content-lg g-pt-90">
                    <!-- Owl Carousel v3-->
                    <div class="owl2-carousel-v3 owl-theme controls-v3">
                        <div class="item text-center">
                            <h2 class="career__title font-main g-mb-40">Welder</h2>
                            <p class="career__text g-mb-40">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p>
                            <a href="#" class="btn-u btn-u--construction trim"><i class="g-mr-10 fa btn-u__fa fa-arrow-right"></i> Submit resume</a>
                        </div>
                        <div class="item text-center">
                            <h2 class="career__title font-main g-mb-40">Mollitia</h2>
                            <p class="career__text g-mb-40">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p>
                            <a href="#" class="btn-u btn-u--construction trim"><i class="g-mr-10 fa btn-u__fa fa-arrow-right"></i> Submit resume</a>
                        </div>
                        <div class="item text-center">
                            <h2 class="career__title font-main g-mb-40">Cupiditate</h2>
                            <p class="career__text g-mb-40">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p>
                            <a href="#" class="btn-u btn-u--construction trim"><i class="g-mr-10 fa btn-u__fa fa-arrow-right"></i> Submit resume</a>
                        </div>
                    </div>  
                </div>
            </div>
        </section>
        <!-- End Career -->

        <!-- Contact -->
        <section id="contact">
            <div class="container content-lg">
                <div class="heading-v14 text-center g-mb-60">
                    <span class="heading-v14__block-name g-dp-block g-mb-20">Contact us</span>
                    <h1 class="heading-v14__title font-main g-mb-60">Get in touch</h1>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-unstyled contact__table">
                            <li class="contact__cell contact__cell--1 text-center">
                                <ul class="list-unstyled">
                                    <li><span class=" icon-anchor contact-list__icon g-dp-block g-mb-30"></span></li>
                                    <li class="contact-list__item-1">Address</li>
                                    <li class="contact-list__item-2">Sit amet adipiscing</li>
                                </ul>
                            </li>
                            <li class="contact__cell contact__cell--2 text-center">
                                <ul class="list-unstyled">
                                    <li><span class=" icon-call-in contact-list__icon g-dp-block g-mb-30"></span></li>
                                    <li class="contact-list__item-1">Phone Number</li>
                                    <li class="contact-list__item-2">+402 5448 569</li>
                                </ul>
                            </li>
                            <li class="contact__cell contact__cell--3 text-center">
                                <ul class="list-unstyled">
                                    <li><span class="icon-envelope-open contact-list__icon g-dp-block g-mb-30"></span></li>
                                    <li class="contact-list__item-1">Email</li>
                                    <li class="contact-list__item-2">info@unify.com</li>
                                </ul>
                            </li>
                            <li class="contact__cell contact__cell--4 text-center">
                                <ul class="list-unstyled">
                                    <li><span class="icon-earphones-alt contact-list__icon g-dp-block g-mb-30"></span></li>
                                    <li class="contact-list__item-1">Toll free</li>
                                    <li class="contact-list__item-2">+402 5897 660</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]');?>
                            <!-- <form action="#" method="post" id="sky-form3" class="sky-form contact-style">
                                <fieldset class="contact__form-fieldset">
                                    <div class="row">
                                        <div class="col-md-12 g-mb-10">
                                            <div>
                                                <input type="text" name="name" id="name" class="form-control contact__form-control" placeholder="Your name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 g-mb-10">
                                            <div>
                                                <input type="text" name="phone" id="phone" class="form-control contact__form-control" placeholder="Your phone">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 g-mb-10">
                                            <div>
                                                <input type="text" name="subject" id="subject" class="form-control contact__form-control" placeholder="Subject">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 g-mb-40">
                                            <div>
                                                <textarea rows="5" name="message" id="message" class="form-control contact__form-control g-textarea-noresize" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="btn-u btn-u--construction trim">
                                                <i class="g-mr-20 fa btn-u__fa fa-arrow-right"></i> Send message
                                            </button>
                                        </div>
                                    </div>
                                </fieldset>

                                <div class="message text-center">
                                    <i class="rounded-x fa fa-check"></i>
                                    <p>Your message was successfully sent!</p>
                                </div>
                            </form> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact -->
        
<?php 
$p=1;
if($p==0):?>
    <!--about section starts-->
    <section class="home-about-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 hidden-xs">
                    <div class="about_images">
                        <img src="http://nandshailfitness.com/wp-content/uploads/2017/11/about.png">
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                    <div class="about_content">
                    	 	 <?php
                  $args = array( 'posts_per_page' => -1, 'post_type' => 'page','include'=> '7', 'order' => 'ASC' , 'orderby' => 'date');
                  $myposts = get_posts( $args );
                  foreach ( $myposts as $post ) : setup_postdata( $post ); 
                  // echo "<pre>";
                  // print_r($post);
                 // endforeach;
                  $url=get_permalink($post->ID);
           		 ?>
                        <div class="section_title">
                            <h2>About <span>Nandshail</span></h2>
                            <img src="http://nandshailfitness.com/wp-content/uploads/2017/11/line.png">
                        </div>
                        <p><?php the_excerpt();?></p>
                        <div class="read_more">
                            <a href="<?php echo $url?>">Read More</a>
                        </div>
                    </div>
                <?php endforeach;?>
                </div>
            </div>
            <div class="row">
                <div class="ab-count">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center no_mp">
                        <div class="counters about-counter-list part-one">
                            <div class="overley">
                                <div class="informations">
                                    <span class="countr_icon">
                                        <i class="fa fa-bullseye" aria-hidden="true"></i>
                                    </span>
                                    <span class="counter">12</span>
                                    <h4>Trainers</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center no_mp">
                        <div class="counters about-counter-list part-two">
                            <div class="overley">
                                <div class="informations">
                                    <span class="countr_icon">
                                        <i class="fa fa-bullseye" aria-hidden="true"></i>
                                    </span>
                                    <span class="counter">10</span>
                                    <h4>Training Room</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center no_mp">
                        <div class="counters about-counter-list part-three">
                            <div class="overley">
                                <div class="informations">
                                    <span class="countr_icon">
                                        <i class="fa fa-users" aria-hidden="true"></i>
                                    </span>
                                    <span class="counter">128</span>
                                    <h4>Total Members</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about section ends-->

    <!--trainer section starts-->
    <section class="trainer_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="section_title">
                        <h2>Our <span>Trainers</span></h2>
                        <img src="http://nandshailfitness.com/wp-content/uploads/2017/11/line.png">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="team-slider owl-carousel owl-theme">
                    	 <?php
                  $args = array( 'posts_per_page' => -1, 'post_type' => 'our_trainers', 'order' => 'ASC' , 'orderby' => 'date');
                  $myposts = get_posts( $args );
                  foreach ( $myposts as $post ) : setup_postdata( $post ); 
                  // echo "<pre>";
                  // print_r($post);
                 // endforeach;
                  $url=get_permalink($post->ID);
                   $content=trim(substr($post->post_content, 0, 100));
           		 ?>
                        <div class="item">
                            <div class="images">
                                <a href="<?php echo $url?>">
                                	<?php echo get_the_post_thumbnail( $post->ID, 'full', array( 'class' => 'img-responsive' ) );?>
                                   <!--  <img class="img-responsive" src="http://nandshailfitness.com/wp-content/uploads/2017/11/3.jpg"> -->
                                </a>
                                <div class="overlay">
                                    <h3><a href="<?php echo $url?>"><?php echo $post->post_title;?></a></h3>
                                    <div class="others">
                                        <p><?php echo $content;?></p>
                                    </div>
                                </div>
                                <div class="social_media">
                                    
                                </div>
                            </div>
                        </div>
                    <?php  endforeach;?>
                    </div> 
                </div>
            </div>
        </div>
    </section>
    <!--trainer section ends-->

    <!--Classes section starts-->
    <section class="classes_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="section_title">
                         <h2>Our <span>Classes</span></h2>
                         <img src="http://nandshailfitness.com/wp-content/uploads/2017/11/line.png">
                     </div>
                </div>
            </div>
            <div class="row">
            	 <?php
                  $args = array( 'posts_per_page' => -1, 'post_type' => 'classes', 'order' => 'ASC' , 'orderby' => 'date');
                  $myposts = get_posts( $args );
                  foreach ( $myposts as $post ) : setup_postdata( $post ); 
                 $url=get_permalink($post->ID);
           		 ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="single-classes">
                        <div class="details">
                            <h3><a href="<?php echo $url?>"><?php the_title(); ?></a></h3>
                            <span><?php the_content();?></span>
                        </div>
                        <div class="image">
                            <a href="<?php echo $url?>">
                            	<?php echo get_the_post_thumbnail( $post->ID, 'full', array( 'class' => 'img-responsive' ) );?>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach?>
            </div>
        </div>
    </section>
    <!--Classes section ends-->

    <!--Testimonials section starts-->
    <section class="testimonials_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="section_title">
                         <h2>Our <span>Testimonial</span></h2>
                         <img src="http://nandshailfitness.com/wp-content/uploads/2017/11/line.png">
                     </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="testimonial-slider owl-carousel owl-theme">
                        <?php
                        $args = array( 'posts_per_page' => -1, 'post_type' => 'testimonials', 'order' => 'ASC' , 'orderby' => 'date');
                        $myposts = get_posts( $args );
                        foreach ( $myposts as $post ) : setup_postdata( $post ); 
                        $url=get_permalink($post->ID);
                        ?>
                        <div class="item">
                            <div class="slider_content text-center">
                                <?php echo get_the_post_thumbnail( $post->ID, 'full', array( 'class' => 'img-responsive' ) );?>
                                <div class="testimonials-title">
                                    <p><?php the_title();?></p>
                                    <!-- <span>UI Designer, Apple</span> -->
                                </div>
                                <p><?php the_content();?></p>
                            </div> 
                        </div>
                    <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonials section ends-->

    <!--Gallery section starts-->
    <section class="gallery_area">
        <div class="container cube-portfolio">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="section_title">
                         <h2>Our <span>Gallery</span></h2>
                         <img src="http://nandshailfitness.com/wp-content/uploads/2017/11/line.png">
                     </div>
                </div>
            </div>
            <div class="content-xs">
                <div id="filters-container" class="cbp-l-filters-text content-xs">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> All </div> |
                    <div data-filter=".running" class="cbp-filter-item"> Running </div> |
                    <div data-filter=".fitness" class="cbp-filter-item"> Fitness </div> |
                    <div data-filter=".yoga" class="cbp-filter-item"> Yoga </div> |
                    <div data-filter=".zumba" class="cbp-filter-item"> Zumba </div>
                </div><!--/end Filters Container-->
            </div>

            <div id="grid-container" class="cbp-l-grid-agency">
                <div class="cbp-item yoga">
                    <div class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="http://nandshailfitness.com/wp-content/uploads/2017/11/yoga.jpg" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <ul class="link-captions">
                                        <li><a href="http://nandshailfitness.com/wp-content/uploads/2017/11/yoga.jpg" class="cbp-lightbox"><i class="rounded-x fa fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-item fitness zumba">
                    <div class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="http://nandshailfitness.com/wp-content/uploads/2017/11/yoga.jpg" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <ul class="link-captions">
                                        <li><a href="http://nandshailfitness.com/wp-content/uploads/2017/11/yoga.jpg" class="cbp-lightbox"><i class="rounded-x fa fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-item yoga zumba">
                    <div class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="http://nandshailfitness.com/wp-content/uploads/2017/11/yoga.jpg" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <ul class="link-captions">
                                        <li><a href="http://nandshailfitness.com/wp-content/uploads/2017/11/yoga.jpg" class="cbp-lightbox"><i class="rounded-x fa fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-item fitness yoga">
                    <div class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="http://nandshailfitness.com/wp-content/uploads/2017/11/yoga.jpg" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <ul class="link-captions">
                                        <li><a href="http://nandshailfitness.com/wp-content/uploads/2017/11/yoga.jpg" class="cbp-lightbox"><i class="rounded-x fa fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-item running fitness">
                    <div class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="http://nandshailfitness.com/wp-content/uploads/2017/11/yoga.jpg" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <ul class="link-captions">
                                        <li><a href="http://nandshailfitness.com/wp-content/uploads/2017/11/yoga.jpg" class="cbp-lightbox"><i class="rounded-x fa fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-item running fitness">
                    <div class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="http://nandshailfitness.com/wp-content/uploads/2017/11/yoga.jpg" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <ul class="link-captions">
                                        <li><a href="http://nandshailfitness.com/wp-content/uploads/2017/11/yoga.jpg" class="cbp-lightbox"><i class="rounded-x fa fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-item fitness running">
                    <div class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="http://nandshailfitness.com/wp-content/uploads/2017/11/yoga.jpg" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <ul class="link-captions">
                                        <li><a href="http://nandshailfitness.com/wp-content/uploads/2017/11/yoga.jpg" class="cbp-lightbox"><i class="rounded-x fa fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-item running logo">
                    <div class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="http://nandshailfitness.com/wp-content/uploads/2017/11/yoga.jpg" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <ul class="link-captions">
                                        <li><a href="http://nandshailfitness.com/wp-content/uploads/2017/11/yoga.jpg" class="cbp-lightbox"><i class="rounded-x fa fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-item yoga">
                    <div class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="http://nandshailfitness.com/wp-content/uploads/2017/11/yoga.jpg" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <ul class="link-captions">
                                        <li><a href="http://nandshailfitness.com/wp-content/uploads/2017/11/yoga.jpg" class="cbp-lightbox"><i class="rounded-x fa fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-item fitness zumba">
                    <div class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="http://nandshailfitness.com/wp-content/uploads/2017/11/yoga.jpg" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <ul class="link-captions">
                                        <li><a href="http://nandshailfitness.com/wp-content/uploads/2017/11/yoga.jpg" class="cbp-lightbox"><i class="rounded-x fa fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-item yoga zumba">
                    <div class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="http://nandshailfitness.com/wp-content/uploads/2017/11/yoga.jpg" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <ul class="link-captions">
                                        <li><a href="http://nandshailfitness.com/wp-content/uploads/2017/11/yoga.jpg" class="cbp-lightbox"><i class="rounded-x fa fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cbp-item fitness yoga">
                    <div class="cbp-caption">
                        <div class="cbp-caption-defaultWrap">
                            <img src="http://nandshailfitness.com/wp-content/uploads/2017/11/yoga.jpg" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <ul class="link-captions">
                                        <li><a href="http://nandshailfitness.com/wp-content/uploads/2017/11/yoga.jpg" class="cbp-lightbox"><i class="rounded-x fa fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif;?>
    
<?php get_footer(); ?>