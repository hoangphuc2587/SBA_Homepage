<?php
/**
 * Template Name: About Us Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage StarBoardAsia
 * @since StarBoardAsia 1.0
 */

get_header();
?>

<!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials flows-banner">
      <div class="container-testimonials" data-aos="zoom-in">

        <div class="row justify-content-center">
          <div class="col-lg-12">

            <div class="owl-carousel testimonials-carousel">

              <div class="testimonial-item">  
                <img src="<?php echo site_url(); ?>/wp-content/themes/starboardasia/assets/img/bg-flow.png" class="testimonial-img" alt="">
                <div class="container">
                    <div class="caption-text">
                      <h2><span><?php pll_e('Về chúng tôi');?></span></h2>                      
                    </div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->
    <!-- ======= Flows Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

         <header class="section-header">
          <h3><?php pll_e('Về chúng tôi');?></h3>
          <p class="text-name">Starboard Asia Co.,Ltd</p>
        </header> 

        <div class="row pb15">
          <div class="col-lg-2 col-sm-2 col-xs-5">
              <label><?php pll_e('Tên công ty');?>:</label>
          </div>
          <div class="col-lg-10 col-sm-10 col-xs-7">
              <label class="uppercase"><?php pll_e('Starboard Asia Compamy Limited');?></label>
          </div>
        </div>  

         <div class="row pb15">
          <div class="col-lg-2 col-sm-2">
              <label><?php pll_e('Năm thành lập');?>:</label>
          </div>
          <div class="col-lg-10 col-sm-10">
              <label>17/05/2014</label>
          </div>
        </div>  

        <div class="row pb15">
          <div class="col-lg-2 col-sm-2">
              <label><?php pll_e('Người đại điện');?>:</label>
          </div>
          <div class="col-lg-10 col-sm-10">
              <div class="row">
                <div class="col-lg-4"><label><?php pll_e('Giám Đốc Kiêm Đại Diện HĐQT');?>:</label></div>
                <div class="col-lg-8"><label class="uppercase"><?php pll_e('Kyota Saito');?></label></div>
              </div>
               <div class="row">
                <div class="col-lg-4"><label><?php pll_e('Quản Lý Điều Hành');?>:</label></div>
                <div class="col-lg-8"><label class="uppercase"><?php pll_e('Tôn Nữ Quỳnh Anh');?></label></div>
              </div>
          </div>
        </div>

        <div class="row pb15">
          <div class="col-lg-2 col-sm-2 ">
              <label><?php pll_e('Số điện thoại');?>:</label>
          </div>
          <div class="col-lg-10 col-sm-10">
              <label>+84 028-3715-4544</label>
          </div>
        </div>  
        <div class="row pb60">
          <div class="col-lg-2 col-sm-2 col-xs-5">
              <label><?php pll_e('Địa chỉ');?>:</label>
          </div>
          <div class="col-lg-10 col-sm-10 col-xs-7">
              <label><?php pll_e('2F, QTSC1 Building, Street No.14');?>, <?php pll_e('Quang Trung Software City');?>, <?php pll_e('Tan Chanh Hiep Ward, District 12');?>, <?php pll_e('Ho Chi Minh City, VietNam');?></label>
          </div>
        </div>    

        <div class="row">
          <div class="col-lg-12 col-md-12">
              <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.438232718532!2d106.62526991480146!3d10.85423509226877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752a212751d963%3A0x6d58ea8e7cf1f11!2sStarboard%20Asia%20Co.%2Cltd.!5e0!3m2!1svi!2s!4v1588063130112!5m2!1svi!2s" width="100%" height="500" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
          </div>          
        </div> 
        
      </div>  
    </section><!-- End Flows Section -->  

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <header class="section-header" style="margin-bottom: 80px">
          <h3><?php pll_e('Công ty liên kết');?></h3>          
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">            
            <div class="link-company">
               <h3><?php pll_e('Cty Cổ Phần Risortech');?></h3>
               <p><?php pll_e('〒904-0004');?> <br/> <?php pll_e('1-13-17 Chou, Okinawa shi, Okinawa Ken');?></p>
               <p><?php pll_e('ĐT');?>：098-957-3355</p>
            </div>  
          </div>

          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">            
            <div class="link-company">
               <h3><?php pll_e('Cty TNHH Arata');?></h3>
               <p><?php pll_e('〒904-0117');?> <br/> <?php pll_e('1-11-3 Kitamae, Kitatani-cho, Nakato-gun, Okinawa');?></p>
               <p><label style="width: 50px"><?php pll_e('ĐT');?>: </label>098-936-9550</p>
               <p><label style="width: 50px"><?php pll_e('FAX');?>: </label>098-936-9552</p>
            </div>  
          </div>

          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">            
            <div class="link-company">
               <h3><?php pll_e('Cty Cổ Phần Craft Information System');?></h3>
               <p><?php pll_e('〒530-0053');?> <br/> <?php pll_e('3-11 Suehiro cho, Kita-ku, Osaka-shi, Tenshimo Building, 6th Floor');?></p>
               <p><label style="width: 50px"><?php pll_e('ĐT');?>: </label>06-7653-5110</p>
               <p><label style="width: 50px"><?php pll_e('FAX');?>: </label>06-6363-1231</p>
            </div>  
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

<?php get_footer(); ?>
