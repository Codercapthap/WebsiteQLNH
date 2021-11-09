@extends('layouts.app', ['title' => 'Book Table'])

@section('content')
    <div class="page-heading about-heading header-text" style="background-image: url(images/heading/heading.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Steireck Restaurant</h4>
              <h2>Đặt bàn</h2>
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
              <h2>Gửi thông tin đặt bàn cho chúng tôi tại đây</h2>
            </div>
          </div>
          <div class="col-md-12">
            <form class="form book-form" onsubmit="return false">
                <div class="row">
                  <div class="col-sm-6">
                    <fieldset>
                      <input name="day" type="text" class="form-control" id="date" placeholder="20.10.2021">
                    </fieldset>
                  </div>

                  <div class="col-sm-6">
                    <fieldset>
                      <input name="time" type="text" class="form-control" id="time" placeholder="09:00">
                    </fieldset>
                  </div>

                  <div class="col-sm-6">
                    <fieldset>
                      <select class="form-control sl">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                      </select>
                    </fieldset>
                  </div>

                  <div class="col-sm-6">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Họ tên">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" placeholder="Địa chỉ Email">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Chi chú"></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" data-toggle="modal" id="book-submit" class="filled-button">Đặt bàn ngay</button>
                    </fieldset>
                  </div>
                </div>
            </form>
          </div>
        </div>
        <div class="modal fade-scale modalSuccess" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="successModalLabel">Thành công</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Yêu cầu đặt bàn đã được gửi thành công
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    @endsection