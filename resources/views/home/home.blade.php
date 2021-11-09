@extends('layouts.app', ['title' => 'Home'])

@section('content')
<!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
        </div>
        <div class="banner-item-02">
        </div>
        <div class="banner-item-03">
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Sự kiện</h2>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="/book-table"><img src="images/other/other1.jpg" alt=""></a>
              <div class="down-content">
                <a href="/book-table"><h4>Tiệc cưới</h4></a>

                <p>Steireck Restaurant nằm trong top những nhà hàng tổ chức tiệc cưới vô cùng uy tín, chất lượng. Cung cấp đầy đủ các dịch vụ trọn gói cho ngày cưới như: cung cấp hội trường và các bữa ăn, party cưới trọn gói cũng như hỗ trợ cặp đôi với dịch vụ từ A-Z trong ngày cưới.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="/book-table"><img src="images/other/other2.jpg" alt=""></a>
              <div class="down-content">
                <a href="/book-table"><h4>Tiệc sinh nhật</h4></a>

                <p>Lựa chọn Steireck Restaurant cho bữa tiệc sinh nhật của mình, bạn sẽ được phục vụ tận tình và chuyên nghiệp nhất đến từ đội ngũ nhân viên. Trong không gian ấm cúng, sang trọng, bạn có thể thoải mái tận hưởng từng phút giây vui vẻ cùng gia đình, bè bạn.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="/book-table"><img src="images/other/other3.jpg" alt=""></a>
              <div class="down-content">
                <a href="/book-table"><h4>Tiệc kỷ niệm</h4></a>

                <p>Không cầu kỳ, không tiểu tiết nhưng nhờ sự kết hợp hài hòa từ ánh sáng, màu sắc đã tạo cho nơi đây một vẻ đẹp vừa sang trọng, hiện đại vừa lung linh, huyền ảo và đầy lãng mạn. Steireck Restaurant luôn là sự lựa chọn hàng đầu cho những buổi tiệc kỷ niệm.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Về chúng tôi</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <p>không gian thoáng đãng, sạch sẽ, từng mảng vị trí trong nhà hàng đều được chăm chút cẩn thận, được chạm nét, sơn phủ bằng những chất liệu mang âm hưởng hoàng gia ấn tượng. Thiết kế của Steireck Restaurant độc đáo, sang trọng tạo cho thực khách sự thú vị khi thưởng thức các món ăn tại đây.</p>
              <ul class="featured-list">
                <li><a href="#">Hơn 50 phòng VIP, Super VIP đa dạng</a></li>
                <li><a href="#">Sảnh tiệc sang trọng với sức chứa lên đến 200 khách</a></li>
                <li><a href="#">khoảng sân vườn rộng – sân thượng, rooftop skyview phù hợp cho những bữa tiệc chiêu đãi, hội họp, tiệc sinh nhật – thôi nôi, tiệc báo hỷ</a></li>
              </ul>
              <a href="/about-us" class="filled-button">Đọc thêm</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="images/about/about.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="services" style="background-image: url(images/other/other-fullscreen.jpg);" >
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Những bài blog gần đây</h2>

              <a href="#">Đọc thêm <i class="fa fa-angle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="#" class="services-item-image"><img src="images/blog/blog1.jpg" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="#">Steireck Restaurant, điểm đến không thể bỏ lỡ cho những tín đồ ăn uống</a></h4>

                <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 21/10/2021 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="#" class="services-item-image"><img src="images/blog/blog2.jpg" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="#">Menu Steireck Restaurant có món gì ngon?</a></h4>

                <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 18/10/2021 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="#" class="services-item-image"><img src="images/blog/blog3.jpg" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="#">Không gian Steireck Restaurant như một cung điện thu nhỏ</a></h4>

                <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 15/10/2021 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Liên hệ với chúng tôi tại đây.</h4>
                  <p>Mọi ý kiến hoặc thắc mắc sẽ được chúng tôi tiếp nhận và trả lời trong 24h.</p>
                </div>
                <div class="col-lg-4 col-md-6 text-right">
                  <a href="/contact" class="filled-button">Liên hệ</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection