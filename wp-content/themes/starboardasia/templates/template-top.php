<?php
/**
 * Template Name: Homepage Template
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

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">

      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h3><?php pll_e('Về chúng tôi');?></h3>
          <p class="text-name">Starboard Asia Co.,Ltd</p>
        </header>
        <div class="row">
          <div class="col-lg-6 col-md-6 d-block d-sm-none">
            <div class="about-img" data-aos="fade-left" data-aos-delay="100">
              <img src="<?php echo site_url(); ?>/wp-content/themes/starboardasia/assets/img/about-us.png" alt="">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 left-content">
            <div class="about-content" data-aos="fade-right" data-aos-delay="100">
              <h2><img src="<?php echo site_url(); ?>/wp-content/themes/starboardasia/assets/img/icon-about-us.png" /> <?php echo __('Tổng Quan', 'starboardasia');?></h2>              
              <div class="row pb15" style="margin-top: 100px">
                <div class="col-lg-5 col-sm-5 col-xs-5">
                    <label><?php pll_e('Tên công ty');?>:</label>
                </div>
                <div class="col-lg-7 col-sm-7 col-xs-7">
                    <label class="uppercase"><?php pll_e('Starboard Asia Compamy Limited');?></label>
                </div>
              </div>  

              <div class="row pb15">
                <div class="col-lg-5 col-sm-5">
                    <label><?php pll_e('Năm thành lập');?>:</label>
                </div>
                <div class="col-lg-7 col-sm-7">
                    <label>17/05/2014</label>
                </div>
              </div>  

              <div class="row pb15">
                <div class="col-lg-5 col-sm-5">
                    <label><?php pll_e('GĐ Kiêm Đại Diện HĐQT');?>:</label>
                </div>
                <div class="col-lg-7 col-sm-7">
                    <label class="uppercase"><?php pll_e('Kyota Saito');?></label>
                </div>
              </div>  

              <div class="row pb15">
                <div class="col-lg-5 col-sm-5">
                    <label><?php pll_e('Quản Lý Điều Hành');?>:</label>
                </div>
                <div class="col-lg-7 col-sm-7">
                    <label class="uppercase"><?php pll_e('Tôn Nữ Quỳnh Anh');?></label>
                </div>
              </div>              
              <p class="text-right"><a href="<?php echo home_url(); ?>/about-us" class="view-more"><i class="icon-arrow-right"></i><span><?php pll_e('Xem thêm'); ?></span></a> </p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 d-none d-sm-block">
            <div class="about-img" data-aos="fade-left" data-aos-delay="100">
              <img src="<?php echo site_url(); ?>/wp-content/themes/starboardasia/assets/img/about-us.png" alt="">
            </div>
          </div>
        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <header class="section-header" style="margin-bottom: 20px">
          <h3><?php pll_e('Dịch vụ');?></h3>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-aos="zoom-in" data-aos-delay="100">            
            <div class="box">
              <img src="<?php echo site_url(); ?>/wp-content/themes/starboardasia/assets/img/services/service-1.png" class="img-fluid" alt=""> 
              <div class="text-content">
                <h4 class="title"><?php pll_e('Hệ thống nghiệp vụ');?></h4>
                <p class="description"><?php pll_e('Chúng tôi có khả năng đáp ứng rộng rãi, từ việc phát triển hệ thống mới đến việc di chuyển hệ thống cũ.');?></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <img src="<?php echo site_url(); ?>/wp-content/themes/starboardasia/assets/img/services/service-2.png" class="img-fluid" alt="">
              <div class="text-content">
                <h4 class="title"><?php pll_e('Hệ thống WEB');?></h4>
                <p class="description"><?php pll_e('Chúng tôi có khả năng xây dựng các trang WEB có quy mô khác nhau từ WEB BtoB, BtoC đến hệ thống web nội bộ hay phát triển các trang WEB dành cho sự kiện.');?></p>
              </div>  
            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="box">
              <img src="<?php echo site_url(); ?>/wp-content/themes/starboardasia/assets/img/services/service-3.png" class="img-fluid" alt="">
              <div class="text-content">
                <h4 class="title"><?php pll_e('Ứng dụng');?></h4>
                <p class="description"><?php pll_e('Chúng tôi có thể đáp ứng các nhu cầu khác nhau như các ứng dụng độc lập và ứng dụng di động được liên kết với các hệ thống WEB.');?></p>
              </div>  
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <img src="<?php echo site_url(); ?>/wp-content/themes/starboardasia/assets/img/services/service-4.png" class="img-fluid" alt="">
              <div class="text-content">
                <h4 class="title"><?php pll_e('Dịch vụ kỹ thuật hệ thống');?></h4>
                <p class="description"><?php pll_e('Đề xuất một kỹ sư thích hợp trong một thời hạn phù hợp cho những nơi thiếu nguồn lực.');?></p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200"">
            <div class=" box">
              <img src="<?php echo site_url(); ?>/wp-content/themes/starboardasia/assets/img/services/service-5.png" class="img-fluid" alt="">
              <div class="text-content">
                <h4 class="title"><?php pll_e('Đại lý OJT');?></h4>
                <p class="description"><?php pll_e('Giúp sử dụng hiệu quả thời gian trong khi chờ được cấp VISA, chúng tôi sẽ đào tạo cho ứng viên về tiếng Nhật cũng như quy trình phát triển của ứng dụng.');?></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="box">
              <img src="<?php echo site_url(); ?>/wp-content/themes/starboardasia/assets/img/services/service-6.png" class="img-fluid" alt="">
              <div class="text-content">
                <h4 class="title"><?php pll_e('Dạy tiếng Nhật (PKG)');?></h4>
                <p class="description">
                   <?php pll_e('Giúp cải thiện trình độ tiếng Nhật trong công ty.');?> <br/>
                  <img src="<?php echo site_url(); ?>/wp-content/themes/starboardasia/assets/img/services/edcity.png" style="margin-top: 10px" class="img-fluid" alt="">
                </p>
              </div>
            </div>
          </div>

      </div>

      </div>
    </section><!-- End Services Section -->

     <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="zoom-out">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title"><?php pll_e('Quy trình hoạt động');?></h3>
            <p class="cta-text">
              <?php pll_e('Bằng sự tư duy sáng tạo được kết hợp với công nghệ tiên phong và chất lượng quản lý tiêu chuẩn cao, StarboardAsia đem toàn bộ sự tự tin đặt vào dự án để giúp khách hàng thỏa mãn về thái độ tích cực, mức độ chuyên môn của đội ngũ kỹ sư và chất lượng sản phẩm.');?>
            </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="<?php echo home_url(); ?>/flow-activities"><?php pll_e('Xem thêm');?></a>
          </div>
        </div>

      </div>
    </section><!--  End Call To Action Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3 class="section-title"><?php pll_e('Hoạt động');?></h3>
        </header>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <input type="hidden" name="filter-type" id="filter-type" value="top">
          <div class="col-lg-4 col-md-6 portfolio-item filter-top">
            <a href="<?php echo home_url(); ?>/activities/team-building#portfolio">
              <div class="portfolio-wrap">
                <img src="<?php echo site_url(); ?>/wp-content/themes/starboardasia/assets/img/portfolio/img-1.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?php pll_e('Team Building');?></h4>
                </div>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-top" data-wow-delay="0.1s">
            <a href="<?php echo home_url(); ?>/activities/tourism#portfolio">
              <div class="portfolio-wrap">
                <img src="<?php echo site_url(); ?>/wp-content/themes/starboardasia/assets/img/portfolio/img-2.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?php pll_e('Du Lịch');?></h4>
                </div>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-top" data-wow-delay="0.2s">
            <a href="<?php echo home_url(); ?>/activities/business-japan#portfolio">
              <div class="portfolio-wrap">
                <img src="<?php echo site_url(); ?>/wp-content/themes/starboardasia/assets/img/portfolio/img-3.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?php pll_e('Công Tác Nhật Bản');?></h4>
                </div>
              </div>
            </a> 
          </div>         

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    
    <!-- ======= Recruit Section ======= -->
    <section id="recruit" class="recruit">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="100">
                <div class="left-recruit-content">
                  <h3 class="text-center"><?php pll_e('Form ứng tuyển');?></h3>
                  <p class="text-left"><?php pll_e('Mời bạn điền thông tin và gửi về cho chúng tôi, nhận phản hồi sớm nhất');?></p>
                  <div class="form">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                      <div class="row">

                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="<?php pll_e('Họ tên');?>" data-rule="required" data-msg="<?php pll_e('Vui lòng nhập họ tên');?>" />
                            <div class="validate"></div>
                          </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="form-group">
                            <input type="text" class="form-control" name="birthday" id="birthday" placeholder="<?php pll_e('Năm sinh');?>" data-rule="required" data-msg="<?php pll_e('Vui lòng nhập năm sinh');?>" />
                            <div class="validate"></div>
                          </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="form-group">
                            <input type="text" name="phone" class="form-control" id="phone" placeholder="<?php pll_e('Số điện thoại');?>" data-rule="required" data-msg="<?php pll_e('Vui lòng nhập số điện thoại');?>" />
                            <div class="validate"></div>
                          </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="form-group">
                            <input type="text" name="address" class="form-control" id="address" placeholder="<?php pll_e('Địa chỉ');?>" data-rule="required" data-msg="<?php pll_e('Vui lòng nhập địa chỉ');?>" />
                            <div class="validate"></div>
                          </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="form-group">
                            <input type="text" name="company_applicant" class="form-control" id="company-applicant" placeholder="<?php pll_e('Công ty ứng tuyển');?>" data-rule="required" data-msg="<?php pll_e('Vui lòng nhập công ty ứng tuyển');?>" />
                            <div class="validate"></div>
                          </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="form-group">
                            <input type="text" name="position" class="form-control" id="position" placeholder="<?php pll_e('Vị trí');?>" data-rule="required" data-msg="<?php pll_e('Vui lòng nhập vị trí');?>" />
                            <div class="validate"></div>
                          </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <div class="form-group">
                            <textarea class="form-control" name="message" rows="3" data-rule="required" data-msg="<?php pll_e('Vui lòng nhập nội dung');?>" placeholder="<?php pll_e('Mong muốn');?>..."></textarea>
                            <div class="validate"></div>
                          </div>
                        </div>

                      </div>
                      <div class="mb-3">
                        <div class="loading"><?php pll_e('Loading');?></div>
                        <div class="error-message"></div>
                        <div class="sent-message"><?php pll_e('Your message has been sent. Thank you!');?></div>
                      </div>

                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 file-upload text-right">                          
                           <span><a id href='#'><?php pll_e('Tải lên CV');?> <i class="fa fa-upload"></i></a>
                           	<input id="file-upload" class="form-control" name="file" type='file' data-rule="required" data-msg="<?php pll_e('Vui lòng tải lên CV');?>"/>
                           </span>
                        </div>  
                        <div class="col-lg-6 col-md-6 col-sm-12 text-left btn-submit">
                          <button type="submit" title="Gửi Ngay"><?php pll_e('Gửi ngay');?></button>
                        </div>
                      </div>  
                    </form>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="200">
                <div class="right-recruit-content">
                  <h3 class="text-center"><?php pll_e('Tuyển dụng');?></h3>
                  <p class="text-left title-recruit">"<?php pll_e('Tuyển dụng việc làm uy tín và chất lượng nhất hiện nay dành cho bạn');?>"</p>
                  <div class="text-center recruit-content">
                    <img src="<?php echo site_url(); ?>/wp-content/themes/starboardasia/assets/img/line-1.png" class="img-fluid" alt="">
                    <p class="text-left">
                      <?php pll_e('Trước áp lực cạnh tranh và những biến động của nền kinh tế toàn cầu, việc lèo lái con thuyền doanh nghiệp đi đúng ‘quỹ đạo” theo kế hoạch đề ra đang dần trở nên trắc trở nhiều hơn. Với vai trò quan trọng trong việc kiến thiết và phát triển yếu tố cốt lõi của tổ chức là nguồn nhân lực, các nhà quản lý nhân sự lại càng phải không ngừng tìm kiếm lộ trình tốt nhất và phù hợp để doanh nghiệp có thể tồn tại và phát triển với tiêu chí hiệu quả luôn được đặt lên hàng đầu.');?>	
                      
                    </p>
                    <ul class="row">
                       <li class="col-lg-6 col-md-6 col-sm-12 text-left"><?php pll_e('WEB – Engineer');?></li>
                       <li class="col-lg-6 col-md-6 col-sm-12 text-left"><?php pll_e('SmartPhone – Engineer');?></li>
                       <li class="col-lg-6 col-md-6 col-sm-12 text-left"><?php pll_e('System – Engineer');?></li>
                       <li class="col-lg-6 col-md-6 col-sm-12 text-left"><?php pll_e('Frontend – Engineer');?></li>                     
                    </ul> 

                    <div class="row">
                      <div class="col-lg-12 col-md-12 text-center">                         
                          <a href="#" class="view-more"> <?php pll_e('Xem thêm');?></a>
                      </div>
                    </div> 
                  </div>                   
                </div>
              </div>  

            </div>  
          </div>
        </div>
      </div>
    </section><!-- End Team Section -->

     <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <header class="section-header">
          <h3 class="section-title"><?php pll_e('Form liên hệ');?></h3>
        </header>       
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="(*) <?php pll_e('Họ tên');?>" data-rule="required" data-msg="<?php pll_e('Vui lòng nhập họ tên');?>" />
                <div class="validate"></div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="form-group">
                <input type="text" name="address" class="form-control" id="address" placeholder="(*) <?php pll_e('Địa chỉ');?>" data-rule="required" data-msg="<?php pll_e('Vui lòng nhập địa chỉ');?>" />
                <div class="validate"></div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="form-group">
                <input type="text" name="phone" class="form-control" id="phone" placeholder="(*) <?php pll_e('Số điện thoại');?>" data-rule="required" data-msg="<?php pll_e('Vui lòng nhập số điện thoại');?>" />
                <div class="validate"></div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="form-group">
                <input type="email" name="email" class="form-control" id="email" placeholder="(*) <?php pll_e('Email');?>" data-rule="email" data-msg="<?php pll_e('Vui lòng nhập email');?>" />
                <div class="validate"></div>
              </div>
            </div>           

            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="form-group">
                <textarea class="form-control" name="message" rows="4" data-rule="required" data-msg="<?php pll_e('Vui lòng nhập nội dung');?>" placeholder="(*) <?php pll_e('Nội dung');?>"></textarea>
                <div class="validate"></div>
              </div>
            </div>

          </div> 
          <div class="mb-3">
            <div class="loading"><?php pll_e('Loading');?></div>
            <div class="error-message"></div>
            <div class="sent-message"><?php pll_e('Your message has been sent. Thank you!');?></div>
          </div>  
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">                         
              <button type="submit" title="Send Message"><?php pll_e('Gửi đi');?></button>
            </div>
          </div>  
        </form>       
      </div>
    </section><!-- End Clients Section -->


<?php get_footer(); ?>
