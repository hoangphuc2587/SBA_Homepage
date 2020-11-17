<?php
/**
 * Template Name: Activities Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage StarBoardAsia
 * @since StarBoardAsia 1.0
 */

get_header();
?>

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container-testimonials" data-aos="zoom-in">

        <div class="row justify-content-center">
          <div class="col-lg-12">

            <div class="owl-carousel testimonials-carousel">

              <div class="testimonial-item">  
                <img src="<?php echo site_url(); ?>/wp-content/themes/starboardasia/assets/img/banner.png" class="testimonial-img" alt="">
                <div class="container">
                    <div class="caption-text">
                      <h2><?php pll_e('Tuyển Dụng Việc Làm'); ?></h2>
                      <h3><?php pll_e('Hàng trăm công việc hấp dẫn đang đợi bạn');?></h3>
                      <div>
                        <a href="tel:02837154544" class="btn-get-started scrollto"><?php pll_e('Liên hệ');?>: 028-3715-4544</a>
                      </div>
                    </div>
                </div>
              </div>

              <div class="testimonial-item">  
                <img src="<?php echo site_url(); ?>/wp-content/themes/starboardasia/assets/img/banner-2.png" class="testimonial-img" alt="">
                <div class="container">
                    <div class="caption-text caption-text-right">
                      <h4>Starboard Asia</h4>
                      <h2><?php pll_e('Tuyển Dụng Việc Làm');?></h2>
                      <h5><?php pll_e('Email');?>: sba@starboardasia.com</h5>
                      <h5><?php pll_e('Tel');?>: 028-3715-4544</h5>
                      <div>
                        <a href="tel:02837154544" class="btn-get-started scrollto"><?php pll_e('Liên hệ ngay');?></a>
                      </div>
                    </div>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <?php 
        global $post;
        $post_slug = $post->post_name;
    ?> 
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3 class="section-title" style="margin-bottom: 60px;"><?php pll_e('Hoạt động');?></h3>
        </header>
        <input type="hidden" name="filter-type" id="filter-type" value="<?php echo $post_slug;?>">
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">
            <ul id="portfolio-flters">              
              <li<?php echo $post_slug === 'team-building' ? ' class="filter-active"' : '' ?> data-filter=".filter-team-building"><?php pll_e('Team Building');?></li>
              <li<?php echo $post_slug === 'tourism' ? ' class="filter-active"' : '' ?> data-filter=".filter-tourism"><?php pll_e('Du Lịch');?></li>
              <li<?php echo $post_slug === 'business-japan' ? ' class="filter-active"' : '' ?> data-filter=".filter-business-japan"><?php pll_e('Công Tác Nhật Bản');?></li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item portfolio-element filter-team-building"> 
            <a href="<?php echo site_url(); ?>/wp-content/themes/starboardasia/assets/img/portfolio/img-1.png" class="link-preview venobox" data-gall="portfolioGallery" title="App 2">
              <div class="portfolio-wrap">
                <img src="<?php echo site_url(); ?>/wp-content/themes/starboardasia/assets/img/portfolio/img-1.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Quà tặng cuối năm cho nhân viên công ty</h4>
                </div>
              </div>
            </a>
          </div>

           <div class="col-lg-4 col-md-6 portfolio-item portfolio-element filter-team-building"> 
            <a href="<?php echo site_url(); ?>/wp-content/themes/starboardasia/assets/img/portfolio/img-2.png" class="link-preview venobox" data-gall="portfolioGallery" title="App 2">
              <div class="portfolio-wrap">
                <img src="<?php echo site_url(); ?>/wp-content/themes/starboardasia/assets/img/portfolio/img-2.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Sinh nhật thành viên trong công ty</h4>
                </div>
              </div>
            </a>
          </div>


           <div class="col-lg-4 col-md-6 portfolio-item portfolio-element filter-business-japan"> 
            <a href="<?php echo site_url(); ?>/wp-content/themes/starboardasia/assets/img/portfolio/img-3.png" class="link-preview venobox" data-gall="portfolioGallery" title="App 2">
              <div class="portfolio-wrap">
                <img src="<?php echo site_url(); ?>/wp-content/themes/starboardasia/assets/img/portfolio/img-3.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Du lịch Thái Lan</h4>
                </div>
              </div>
            </a>
          </div>
        

        </div>

        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 text-center">
            <button type="button" class="btn-view-more">Xem thêm</button>
          </div>  
        </div>  



      </div>
    </section><!-- End Portfolio Section -->

<?php get_footer(); ?>
