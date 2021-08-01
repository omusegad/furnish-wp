<?php get_header();?>
   
    <!--====== SLIDER PART START ======-->
    
    <section id="home" class="slider-area pt-100">
        <div class="container-fluid position-relative">
            <div class="slider-active">
            <?php 
            $args = array(
                'post_type' => 'slider',
                'posts_per_page' => -1, 
            );
                // the query
                $the_query = new WP_Query( $args ); ?>
                <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <div class="single-slider">
                    <div class="slider-bg">
                        <div class="row no-gutters align-items-center ">
                            <div class="col-lg-4 col-md-5">
                                <div class="slider-product-image d-none d-md-block">
                                   <?php the_post_thumbnail(); ?>
                                    <div class="slider-discount-tag">
                                        <p> <?php echo get_field('free_quotes_or_discounts'); ?></p>
                                    </div>
                                </div> <!-- slider product image -->
                            </div>
                            <div class="col-lg-8 col-md-7">
                                <div class="slider-product-content">
                                    <h1 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s">
                                        <!-- <span>Sofa</span> and <span>Armchairs</span> -->
                                        <?php the_title(); ?>
                                    </h1>
                                    <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s">
                                       <?php the_content(); ?>
                                  </p>
                                    <a class="main-btn mt-3" href="#" data-animation="fadeInUp" data-delay="1.5s">  
                                         <?php echo get_field('button_lable'); ?>
                                        <?php echo get_field('url_link'); ?>
                                         <i class="lni-chevron-right"></i></a>
                                </div> <!-- slider product content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                </div> <!-- single slider -->

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>

            </div> <!-- slider active -->

            <div class="slider-social">
                <div class="row justify-content-end">
                    <div class="col-lg-7 col-md-6">
                        <ul class="social text-right">
                            <li><a href <?php echo get_field('socialfacebook'); ?>"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href=" <?php echo get_field('socialtwitter'); ?>"><i class="lni-twitter-original"></i></a></li>
                            <li><a href=" <?php echo get_field('socialinstagram'); ?>"><i class="lni-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- container fluid -->
    </section>
    
    <!--====== SLIDER PART ENDS ======-->
   
    <!--====== DISCOUNT PRODUCT PART START ======-->
    
    <section id="discount-product" class="discount-product pt-100">
        <div class="container">
            <div class="row">
            <?php 
            $args = array(
                'post_type' => 'offer_collections',
                'posts_per_page' => 2, 
            );
                // the query
                $the_query = new WP_Query( $args ); ?>
                <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="col-lg-6">
                            <div class="single-discount-product mt-30">
                                <div class="product-image">
                                    <?php the_post_thumbnail(); ?>
                                </div> <!-- product image -->
                                <div class="product-content">
                                    <h4 class="content-title mb-15"><?php the_title(); ?></h4>
                                    <a href=" <?php echo get_field('view_collection_btn_link'); ?>"> <?php echo get_field('view_collection_button_lable'); ?> <i class="lni-chevron-right"></i></a>
                                </div> <!-- product content -->
                            </div> <!-- single discount product -->
                        </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>

                
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== DISCOUNT PRODUCT PART ENDS ======-->

        <!--====== SERVICES PART START ======-->
    
        <section id="service" class="services-area pt-125 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-30">
                        <h5 class="mb-15">Our Story</h5>
                        <h3 class="title mb-15"> <?php echo get_field('our_title'); ?></h3>
                        <p> <?php echo get_field('our_story_content'); ?></p>
                    </div> <!-- section title -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="services-left mt-45">
                        <div class="services">
                        <?php  $image = get_field('our_story_image');  ?>
                             <?php if( !empty( $image ) ): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                            <a href ="<?php echo get_field('our_story_button_link'); ?>" class="main-btn mt-30">
                            <?php echo get_field('our_story_button_lable'); ?>
                                <i class="lni-chevron-right"></i></a>
                        </div> <!-- services btn -->
                    </div> <!-- services left -->
                </div>
                <div class="col-lg-6">
                    
                    <div class="services-right mt-45">
                        <?php  the_content(); ?>
                    </div> <!-- services right -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== SERVICES PART ENDS ======-->
   
    <!--====== PRODUCT PART START ======-->

 <?php  
  get_template_part( 'template-parts/getProducts' ); 
  $categories = new getProducts();
  $cat_result = $categories->getCategories();
  
  ?>

    
  <!--====== PRODUCT PART START ======-->
    
  <section id="product" class="product-area pt-100 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="collection-menu text-center mt-30">
                        <h4 class="collection-tilte">OUR COLLECTION</h4>
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <?php if($cat_result){ ?>
                            <?php 
                                foreach($cat_result as $cat){
                                    $number = 0;
                                for ($x = 0; $x <count($cat); $x++) { 
                                     $number++;   
                                    ?>
                                        <a  <?php if($number == 0) { echo 'class="active"';} ?>  id="v-pills-<?php echo $cat[$x]['id'];  ?>-tab"  data-toggle="pill" href="#v-pills-<?php echo $cat[$x]['id'];  ?>" role="tab" aria-controls="v-pills-<?php echo $cat[$x]['id'];  ?>" aria-selected="false">
                                            <?php echo $cat[$x]['productCategoryName']; ?>
                                        </a>
                                    <?php }  } ?>
                          
                         <?php  } ?>
                        </div> <!-- nav -->
                    </div> <!-- collection menu -->
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="tab-content" id="v-pills-tabContent">

                    <?php if($cat_result){ ?>
                            <?php 
                                $i = 0;
                                foreach($cat_result as $cat){
                                for ($x = 0; $x <count($cat); $x++) { 
                                    $i++;

                                   //print_r($cat[$x]['products']);

                            ?>
                          
                            <?php 
                             if($cat[$x]['productCategoryName']) {  ?>
                             <div <?php if ($i == 1) { echo 'class="tab-pan fade show  active"'; } else { echo 'class="tab-pane"'; } ?>  id="v-pills-<?php echo $cat[$x]['id'];  ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo $cat[$x]['id'];  ?>-tab">
                                        <div class="product-items mt-30">
                                            <div class="row product-items-active">
                                                <?php 
                                                
                                                foreach($cat[$x]['products'] as $prod){
                                                ?>
                                                    <div class="col-md-4">
                                                        <div class="single-product-items">
                                                            <div class="product-item-image">
                                                                <a href="#">
                                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/product/p-1.jpg" alt="Product">
                                                                </a>
                                                                <div class="product-discount-tag">
                                                                    <p>- <?php echo $prod['offer_percentage']; ?> %</p>
                                                                </div>
                                                            </div>
                                                            <div class="product-item-content text-center mt-30">
                                                                <h5 class="product-title">
                                                                    <a href="#"><?php echo $prod['product_name'] ?></a>
                                                                </h5>
                                                                <ul class="rating">
                                                                    <li><i class="lni-star-filled"></i></li>
                                                                    <li><i class="lni-star-filled"></i></li>
                                                                    <li><i class="lni-star-filled"></i></li>
                                                                    <li><i class="lni-star-filled"></i></li>
                                                                </ul>
                                                                <span class="regular-price">
                                                                <?php echo $prod['sale_price']; ?>
                                                                </span>
                                                                <span class="discount-price">
                                                                    
                                                                    <?php echo $prod['regular_price']; ?>
                                                                </span>
                                                            </div>
                                                        </div> <!-- single product items -->
                                                    </div>
                                               <?php  } ?>

                                            </div> <!-- row -->
                                        </div> <!-- product items -->
                                    </div> <!-- tab pane -->
       
                          
                         <?php  }}}} ?>

                    </div> <!-- tab content --> 
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PRODUCT PART ENDS ======-->
 <!--====== CONTACT PART START ======-->
    
 <section id="contact" class="contact-area pt-115">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="contact-title text-center">
                        <h2 class="title">Get In Touch</h2>
                    </div> <!-- contact title -->
                </div>
            </div> <!-- row -->
            <div class="contact-box mt-70">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-info pt-25">
                            <h4 class="info-title"> <?php echo get_field('contact_title'); ?></h4>
                            <?php echo get_field('contact_info'); ?>
                           
                        </div> <!-- contact info -->
                    </div> 
                    <div class="col-lg-8">
                        <div class="contact-form">
                        <?php echo do_shortcode('[contact-form-7 id="50" title="home contact form"]' );  ?>

                        </div> <!-- row -->
                    </div> 
                </div> <!-- row -->
            </div> <!-- contact box -->
        </div> <!-- container -->
    </section>
    

    <!--====== SHOWCASE PART START ======-->
    
    <section id="showcase" class="showcase-area pt-100 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="showcase-title pt-25">
                        <h2 class="title"> <?php echo get_field('showcase_title'); ?></h2>
                    </div> <!-- showcase title -->
                </div> 
                <div class="col-lg-6">
                    <div class="showcase-title pt-25">
                        <p> <?php echo get_field('showcase_description'); ?></p>
                    </div> <!-- showcase title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="showcase-active mt-65">
                        <div class="single-showcase">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/showcase/t-1.jpg" alt="Testimonial">
                            <a href="#" class="main-btn">Full Preview</a>
                        </div> <!-- single showcase -->
                        <div class="single-showcase">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/showcase/t-2.jpg" alt="Testimonial">
                            <a href="#" class="main-btn">Full Preview</a>
                        </div> <!-- single showcase -->
                    </div> <!-- showcase active -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== SHOWCASE PART ENDS ======-->


    
    <!--======  BLOG PART START ======-->
    
    <section id="blog" class="blog-area pt-125">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-25">
                        <h3 class="title mb-15">From The <?php $catName = get_cat_name(1); echo ucfirst($catName); ?></h3>
                        <p><?php $catDescription = category_description(1); echo $catDescription; ?></p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
            <?php 
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3, 
               'cat' => 1,
            );
                // the query
                $the_query = new WP_Query( $args ); ?>
                <?php if ( $the_query->have_posts() ) : ?>
                
                    <!-- pagination here -->
                
                    <!-- the loop -->
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


                    <div class="col-lg-4 col-md-6">
                    <div class="single-blog mt-30">
                        <div class="blog-image">
                            <?php if ( has_post_thumbnail() ) {
                                    the_post_thumbnail();
                                }?>
                        </div>
                        <div class="blog-content">
                            <div class="content">
                                <h4 class="title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <span class="text-uppercase">
                                    <?php 
                                          $post_date = get_the_date('j, F Y' );
                                           echo $post_date; 
                                    ?>
                                </span>
                            </div>
                            <div class="meta d-flex justify-content-between align-items-center">
                                <div class="meta-admin d-flex align-items-center">
                                    <div class="image">
                                        <a href="#">
                                        <?php  
                                        $author_id = get_the_author_meta( 'ID' );
                                         echo get_avatar( get_the_author_meta( 'email', $author_id ), '50' );  ?> 
                                        </a>
                                    </div>
                                    <div class="admin-title">
                                        <h6 class="title"><a href="#">
                                        <?php the_author(); ?>
                                        </a></h6>
                                    </div>
                                </div>  <!-- meta admin -->
                                <div class="meta-icon">
                                    <ul>
                                        <li><a href="#"><i class="lni-share"></i></a></li>
                                        <li><a href="#"><i class="lni-heart"></i></a></li>
                                    </ul>
                                </div> <!-- meta icon -->
                            </div> <!-- meta -->
                        </div>
                    </div> <!-- single blog -->
                </div>


                    <?php endwhile; ?>
                 
                
                    <?php wp_reset_postdata(); ?>
                
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
               
                
               
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--======  BLOG PART ENDS ======-->


    <!--====== TEAM PART START ======-->
    
    <section id="team" class="team-area pt-125 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-25">
                        <h3 class="title mb-15">
                            <?php echo get_field('team_title'); ?>
                        </h3>
                        <p>
                            <?php echo get_field('team_description'); ?>
                    </p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
              
                <?php 
                              $args = array(
                                'post_type' => 'team',
                                'posts_per_page' => -1, 
                            );
                                // the query
                                $the_query = new WP_Query( $args ); ?>
                                <?php if ( $the_query->have_posts() ) : ?>
                                    <!-- the loop -->
                                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                    <div class="col-lg-3 col-md-6 col-sm-8">
                                        <div class="single-temp text-center mt-30">
                                            <div id="team-box" class="team-image">
                                                <?php the_post_thumbnail(); ?>
                                            </div>
                                            <div class="team-content mt-30">
                                                <h4 class="title mb-10"><a href="#">
                                                    <?php the_title();?>
                                                </a></h4>
                                                <span><?php echo get_field('designaton_'); ?></span>
                                                <ul class="social mt-15">
                                                    <li><a href="<?php echo get_field('facebook'); ?>"><i class="lni-facebook-filled"></i></a></li>
                                                    <li><a href="<?php echo get_field('twitter'); ?>"><i class="lni-twitter-original"></i></a></li>
                                                    <li><a href="<?php echo get_field('instagram'); ?>"><i class="lni-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div> <!-- single temp -->
                                    </div>

                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                    <?php else : ?>
                                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                                    <?php endif; ?>

           
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== TEAM PART ENDS ======-->

    <!--====== TESTIMONIAL PART START ======-->
    
    <section id="testimonial" class="testimonial-area pt-200">
        <div class="testimonial-bg bg_cover"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-8">
                    <div class="testimonial-content">
                        <div class="testimonial-active">
                            <?php 
                              $args = array(
                                'post_type' => 'testimonials',
                                'posts_per_page' => -1, 
                            );
                                // the query
                                $the_query = new WP_Query( $args ); ?>
                                <?php if ( $the_query->have_posts() ) : ?>
                                    <!-- the loop -->
                                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                        <div class="single-testimonial">
                                            <i class="lni-quotation"></i>
                                            <p class="mb-30"><?php the_content(); ?></p>
                                            <h6 class="title"><?php the_title() ?></h6>
                                            <span> <?php echo get_field('designation'); ?></span>
                                        </div> <!-- single testimonial -->
                                <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                            <?php else : ?>
                                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                            <?php endif; ?>
                        
                        </div> <!-- testimonial active -->
                    </div> <!-- testimonial content -->
                </div>
                <div class="col-lg-7 col-md-4">
                    <div class="testimonial-play text-right d-none d-md-block">
                        <a class="Video-popup" href="https://www.youtube.com/watch?v=l8ccw7BMrMA" ><i class="lni-play"></i></a>
                    </div> <!-- testimonial play -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== TESTIMONIAL PART ENDS ======-->

   
<?php get_footer();?>

