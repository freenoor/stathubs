<?php /* Template Name: Home */ 
include("includes/headers/demo2.php"); 
?>
<div class="page-home">

<section class="banner__section">
    <div class="container">
        <div class="up">
        <h1> <?php the_field('banner-title'); ?></h1>
        <p> <?php the_field('banner-sub'); ?></p>
        <ul><?php dynamic_sidebar('widget-2'); ?></ul>
        </div>
        <div class="partners">
        <div class="inner-img"><img src="<?php echo get_bloginfo('template_directory'); ?>/src/img/meta.svg" alt=""></div>
        <div class="inner-img"><img src="<?php echo get_bloginfo('template_directory'); ?>/src/img/ganalytic.svg" alt=""></div>
        <div class="inner-img"><img src="<?php echo get_bloginfo('template_directory'); ?>/src/img/amazon.svg" alt=""></div>
        <div class="inner-img"><img src="<?php echo get_bloginfo('template_directory'); ?>/src/img/shopw.svg" alt=""></div>
        </div>
        
        <div class="services d-none-mobile">
            <div class="leftside">
                <div class="box">
                <img src="<?php echo ( get_field('group_services')['imgone-values'] );?>" alt="">
                    <h2><?php echo ( get_field('group_services')['title'] );?></h2>
                    <p><?php echo ( get_field('group_services')['subtitle'] );?></p>
                </div>
                <div class="box">
                <img src="<?php echo ( get_field('group_services')['imgone-values2'] );?>" alt="">
                    <h2><?php echo ( get_field('group_services')['title2'] );?></h2>
                    <p><?php echo ( get_field('group_services')['subtitle2'] );?></p>
                </div>
            </div>
            <div class="center">
            <div class="inner-img"><img src="<?php echo get_bloginfo('template_directory'); ?>/src/img/banner phone-desk.svg" alt=""></div>
            </div>
            <div class="rightside">
                <div class="box">
                <img src="<?php echo ( get_field('group_services')['imgone-values3'] );?>" alt="">
                    <h2><?php echo ( get_field('group_services')['title3'] );?></h2>
                    <p><?php echo ( get_field('group_services')['subtitle3'] );?></p>    
                </div>
                <div class="box">
                <img src="<?php echo ( get_field('group_services')['imgone-values4'] );?>" alt="">
                   <h2><?php echo ( get_field('group_services')['title4'] );?></h2>
                   <p><?php echo ( get_field('group_services')['subtitle2'] );?></p>    
                </div>
            </div>
        </div>
        <div class="services d-none-desktop">
            <div class="leftside">
            <div class="center">
            <div class="inner-img"><img src="<?php echo get_bloginfo('template_directory'); ?>/src/img/banner phone-mob.svg" alt=""></div>
            </div>
            </div>
        </div>
    </div>
</section>


<section class="swiper mySwiper slider__section d-none-desktop">
    <div class="swiper-wrapper slider">
        <div class="swiper-slide">
            <div class="box">
            <img src="<?php echo ( get_field('group_services')['imgone-values'] );?>" alt="">
            <h2><?php echo ( get_field('group_services')['title'] );?></h2>
            <p><?php echo ( get_field('group_services')['subtitle'] );?></p>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="box">
            <img src="<?php echo ( get_field('group_services')['imgone-values2'] );?>" alt="">
            <h2><?php echo ( get_field('group_services')['title2'] );?></h2>
            <p><?php echo ( get_field('group_services')['subtitle2'] );?></p>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="box">
            <img src="<?php echo ( get_field('group_services')['imgone-values3'] );?>" alt="">
            <h2><?php echo ( get_field('group_services')['title3'] );?></h2>
            <p><?php echo ( get_field('group_services')['subtitle3'] );?></p>   
            </div>
        </div>
        <div class="swiper-slide">
            <div class="box">
            <img src="<?php echo ( get_field('group_services')['imgone-values4'] );?>" alt="">
            <h2><?php echo ( get_field('group_services')['title4'] );?></h2>
            <p><?php echo ( get_field('group_services')['subtitle2'] );?></p>
            </div>   
        </div>
    </div>
</section>

<section class="section__three" id="nav1">
    <div class="container">
        <div class="title">
            <h1><?php echo ( get_field('group_second')['section_title'] );?></h1>
        </div>
        <div class="swiper mySwiper slider__section-three">
            <div class="swiper-wrapper slider">
                <div class="swiper-slide">
                    <div class="box">
                    <div class="img">
                    <img src="<?php echo ( get_field('group_second')['imgone-values'] );?>" alt="">
                    </div>
                    <h2><?php echo ( get_field('group_second')['title'] );?></h2>
                    <p><?php echo ( get_field('group_second')['subtitle'] );?></p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                    <div class="img">
                    <img src="<?php echo ( get_field('group_second')['imgone-values2'] );?>" alt="">
                    </div>
                    <h2><?php echo ( get_field('group_second')['title2'] );?></h2>
                    <p><?php echo ( get_field('group_second')['subtitle2'] );?></p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                    <div class="img">
                    <img src="<?php echo ( get_field('group_second')['imgone-values3'] );?>" alt="">
                    </div>
                    <h2><?php echo ( get_field('group_second')['title3'] );?></h2>
                    <p><?php echo ( get_field('group_second')['subtitle3'] );?></p>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="between-sections">
    <?php include("includes/sections/fast-call.php");  ?>
</div>

<section class="our-ecommerce-section" id="nav2">
    <div class="container">
        <div class="title">
            <h1><?php echo ( get_field('group_third')['section_title'] );?></h1>
            <h2><?php echo ( get_field('group_third')['section_subtitle'] );?></h2>
        </div>
    </div>
    <div class="container">
        <div class="content">
            <div class="lefts">
            <div class="img"><div class="inner-img inprogress"><img src="<?php echo ( get_field('group_third')['partner11'] );?>" alt=""></div></div>
            <div class="img"><div class="inner-img "><img src="<?php echo ( get_field('group_third')['partner22'] );?>" alt=""></div></div>
            <div class="img"><div class="inner-img inprogress"><img src="<?php echo ( get_field('group_third')['partner33'] );?>" alt=""></div></div>
            <div class="img"><div class="inner-img inprogress"><img src="<?php echo ( get_field('group_third')['partner44'] );?>" alt=""></div></div>
            <div class="img"><div class="inner-img inprogress"><img src="<?php echo ( get_field('group_third')['partner55'] );?>" alt=""></div></div>
            <div class="circles-svg">
                <span></span>
            </div>
            </div>
            <div class="rights">
            <div class="inner-img"><img src="<?php echo get_bloginfo('template_directory'); ?>/src/img/e-commerce-phone.svg" alt=""></div>
            </div>
        </div>
    </div>
</section>

<section class="so-funktioniert__section" id="nav3">
    <div class="container">
        <div class="up">
            <div class="leftside">
            <div class="img"><img src="<?php the_field('img-funk'); ?>" alt=""></div>
            </div>
            <div class="rightside">
            <h1><?php the_field('title-funk'); ?></h1>
            <p><?php the_field('subtitle-funk'); ?></p>
            <ul><?php dynamic_sidebar('widget-2'); ?></ul>
            </div>
        </div>
        <div class="down">
            <div class="box">
                <div class="img">
                    <img src="<?php echo ( get_field('group_fourth')['imgone-values'] );?>" alt=""></div>
                    <h2><?php echo ( get_field('group_fourth')['title'] );?></h2>
                    <p><?php echo ( get_field('group_fourth')['subtitle'] );?></p>
            </div>
            <div class="box">
                <div class="img m-3p">
                    <img src="<?php echo ( get_field('group_fourth')['imgone-values2'] );?>" alt=""></div>
                    <h2><?php echo ( get_field('group_fourth')['title2'] );?></h2>
                    <p><?php echo ( get_field('group_fourth')['subtitle2'] );?></p>
            </div>
            <div class="box">
                <div class="img m-3p">
                    <img src="<?php echo ( get_field('group_fourth')['imgone-values3'] );?>" alt=""></div>
                    <h2><?php echo ( get_field('group_fourth')['title3'] );?></h2>
                    <p><?php echo ( get_field('group_fourth')['subtitle3'] );?></p>
            </div>
            <div class="box">
                <div class="img m-3p">
                    <img src="<?php echo ( get_field('group_fourth')['imgone-values4'] );?>" alt=""></div>
                    <h2><?php echo ( get_field('group_fourth')['title4'] );?></h2>
                    <p><?php echo ( get_field('group_fourth')['subtitle4'] );?></p>
            </div>
        </div>
    </div>
</section>


<section class="anbindung__section" id="nav4">
    <div class="container">
        <div class="title">
            <h1><?php echo ( get_field('group_sld')['section_titlee'] );?></h1>
            <h2><?php echo ( get_field('group_sld')['section_subtitlee'] );?></h2>
        </div>
        <div class="swiper-arrows">
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        </div>
    </div>
    
    <div class="container">
        <div class="swiper mySwiper anbindung-slider">
            <div class="swiper-wrapper slider">
                <?php
                $args = array(
                'post_type' => 'so-funksioniert',
                'posts_per_page' => '-6',
                'order' => 'ASC',
                'categorys' => $term->slug,
                );
                $loop = new WP_Query($args);
                while($loop->have_posts()):
                $loop->the_post();
                ?>
                <div class="swiper-slide inner">
                    <div class="inn">
                    <div class="nr"><?php the_excerpt(); ?></div>
                    <h1><?php the_title(); ?></h1>
                    <div class="description"><?php the_content(); ?></div>
                    </div>
                </div>
                <?php endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</section>


<section class="blog__section" id="blog">
    <div class="container">
        <div class="title">
            <h1><?php the_field('blog-title'); ?></h1>
            <h2><?php the_field('blog-sub'); ?></h2>
        </div>
        <div class="blogs">
            <?php 
            $args = array(
            'posts_per_page' => 4,
            ); 
            $the_query = new WP_Query( $args );
            if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
            ?>  
                <div class="blog-b">
                    <a href="<?php the_permalink(); ?>">
                    <div class="img" style="<?php echo (empty(the_post_thumbnail_url())) ? 'background-color: #F0F2F6;' : ''; ?>">
                    <img src="<?php the_post_thumbnail_url();?>" alt="abc" onerror="this.style.display='none'"/>
                    </div>
                    <div class="bottom-content">
                    <div class="cat-date"><h1><?php 
                    $category = get_the_category( $post->ID );
                    echo $category[0]->cat_name;?>
                    </h1>
                    <h1><?php the_time('F j, Y'); ?></h1>
                    </div>
                    <h2><?php the_title(); ?></h2>
                    </div>
                    </a>
                </div>
            <?php
            endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>

<div class="between-sections-second">
    <?php include("includes/sections/fast-call.php");  ?>
</div>

<section class="accordion__section" id="accordion">
    <div class="container">
        <div class="title">
            <h1><?php the_field('accordion-sectiontitle'); ?></h1>
        </div>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <?php if (get_field('group_acc')['acc_title']): ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            <?php echo (get_field('group_acc')['acc_title']); ?>
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <?php echo (get_field('group_acc')['acc_sub']); ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (get_field('group_acc')['acc_title2']): ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            <?php echo (get_field('group_acc')['acc_title2']); ?>
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <?php echo (get_field('group_acc')['acc_sub2']); ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (get_field('group_acc')['acc_title3']): ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            <?php echo (get_field('group_acc')['acc_title3']); ?>
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <?php echo (get_field('group_acc')['acc_sub3']); ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <div class="accordion accordion-flush" id="accordionFlushExample2">
            <?php if (get_field('group_acc')['acc_title4']): ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                            <?php echo (get_field('group_acc')['acc_title4']); ?>
                        </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <?php echo (get_field('group_acc')['acc_sub4']); ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (get_field('group_acc')['acc_title5']): ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                            <?php echo (get_field('group_acc')['acc_title5']); ?>
                        </button>
                    </h2>
                    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <?php echo (get_field('group_acc')['acc_sub5']); ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>




<section class="contact__section" id="contact">
    <div class="container">
        <div class="flex d-none-mobile">
            <div class="col7">
                <div class="title">
                    <h2><?php echo ( get_field('footer')['main_title'] );?></h2>
                    <p><?php echo ( get_field('footer')['main_paragraph'] );?></p>
                </div>

                <div class="footer-number-row">
                    <div class="footer-number-row-title">
                        <h3><?php echo ( get_field('footer')['row_number_1'] );?></h3>
                        <div class="footer-number-row-subtitle">
                            <h4><?php echo ( get_field('footer')['row_1_title'] );?></h4>
                            <p><?php echo ( get_field('footer')['row_1_subtitle'] );?></p>
                        </div>
                    </div>
                    <div class="footer-number-row-title">
                        <h3><?php echo ( get_field('footer')['row_number_2'] );?></h3>
                        <div class="footer-number-row-subtitle">
                            <h4><?php echo ( get_field('footer')['row_2_title'] );?></h4>
                            <p><?php echo ( get_field('footer')['row_2_subtitle'] );?></p>
                        </div>
                    </div>
                    <div class="footer-number-row-title">
                        <h3><?php echo ( get_field('footer')['row_number_3'] );?></h3>
                        <div class="footer-number-row-subtitle">
                            <h4><?php echo ( get_field('footer')['row_3_title'] );?></h4>
                            <p><?php echo ( get_field('footer')['row_3_subtitle'] );?></p>
                        </div>
                    </div>
                </div> 
            </div>

            <div class="col5">
                <ul><?php dynamic_sidebar('widget-3'); ?></ul>
            </div>

        </div>

        <div class="flex d-none-desktop">
            <div class="col7">
                <div class="title">
                    <h2><?php echo ( get_field('footer')['main_title'] );?></h2>
                    <p><?php echo ( get_field('footer')['main_paragraph'] );?></p>
                </div>

                <div class="col5">
                    <ul><?php dynamic_sidebar('widget-3'); ?></ul>
                </div>
                <div class="footer-number-row">
                <div class="footer-number-row-title">
                    <h3><?php echo ( get_field('footer')['row_number_1'] );?></h3>
                    <div class="footer-number-row-subtitle">
                        <h4><?php echo ( get_field('footer')['row_1_title'] );?></h4>
                        <p><?php echo ( get_field('footer')['row_1_subtitle'] );?></p>
                    </div>
                </div>
                <div class="footer-number-row-title">
                    <h3><?php echo ( get_field('footer')['row_number_2'] );?></h3>
                    <div class="footer-number-row-subtitle">
                        <h4><?php echo ( get_field('footer')['row_2_title'] );?></h4>
                        <p><?php echo ( get_field('footer')['row_2_subtitle'] );?></p>
                    </div>
                </div>
                <div class="footer-number-row-title">
                    <h3><?php echo ( get_field('footer')['row_number_3'] );?></h3>
                    <div class="footer-number-row-subtitle">
                        <h4><?php echo ( get_field('footer')['row_3_title'] );?></h4>
                        <p><?php echo ( get_field('footer')['row_3_subtitle'] );?></p>
                    </div>
                </div>
                </div>
        </div>
    </div>
</section>

</div>
<?php include("includes/footers/demo1.php");  ?>