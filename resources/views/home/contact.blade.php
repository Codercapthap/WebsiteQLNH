@extends('layouts.app', ['title' => 'Contact'])

@section('content')

    <div class="page-heading contact-heading header-text" style="background-image: url(images/heading/heading.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Steireck Restaurant</h4>
              <h2>Liên hệ</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="find-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Vị trí của chúng tôi trên bản đồ</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div id="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15738110.955688218!2d96.86300237702814!3d15.628352495661526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31157a4d736a1e5f%3A0xb03bb0c9e2fe62be!2sVietnam!5e0!3m2!1sen!2s!4v1634724248432!5m2!1sen!2s" width="100%" height="330px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
          <div class="col-md-4">
            <div class="left-content">
              <h4>Thông tin liên hệ của chúng tôi</h4>
              <p>MỞ CỬA TỪ THỨ HAI ĐẾN CHỦ NHẬT <br>
              PHỤC VỤ TỪ 7 GIỜ ĐẾN 22 GIỜ TRONG NGÀY <br> <br>
              Số điện thoại: (+84-28) 39918964<br>

              Email : lienhe@SteireckRestaurant.com <br>

              Địa chỉ : 306 – 308 Đường số 1, phường 1, quận Tân Bình, thành phố Hồ Chí Minh.</p>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fab fa-behance"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Gửi tin nhắn cho chúng tôi</h2>
            </div>
          </div>
          <div class="col-md-12">
            <form class="form contact-form" onsubmit="return false">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Họ tên" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="email" class="form-control" id="email" placeholder="Địa chỉ Email" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Chủ đề" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Nội dung tin nhắn" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="message-submit" class="filled-button">Gửi</button>
                    </fieldset>
                  </div>
                </div>
            </form>
          </div>
          <div class="modal fade-scale modalSuccess" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="successModalLabel">Thành công</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Tin nhắn đã được gửi thành công
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
      </div>
    </div>
@endsection
