@extends('layouts.dashboard')

@section('content')
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <h3 class="card-title">Danh sách yêu cầu đặt bàn</h3>
              <p class="card-category"></p>
            </div>
            <div class="card-body">
              <div class="row">
                <?php foreach($books as $book): ?>
                <div id="<?=$book->id?>" class="card card-alert">
                  <div class="card-header card-header-success">
                    <button type="button" class="close book-close" data-dismiss="card" aria-label="Close">
                      <i class="material-icons">close</i>
                    </button>
                    <div class="form-check" style="float: right">
                      <label class="form-check-label" style="position: unset;">
                        <input class="form-check-input" name="check" type="checkbox" value="" <?php if($book->checked == '1') echo "checked"?>>
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                    <h3 class="card-title"><?=$book->bookDay . " - " . $book->bookTime?></h3>
                    <p class="card-category">Họ tên: <?=$book->hoten?></p>
                    <p class="card-category">Email: <?=$book->email?></p>
                    <p class="card-category">Số lượng: <?=$book->sl?></p>
                      <?php if(isset($book->notes)): ?>
                        <div class="alert">
                          <span><?=$book->notes?></span>
                        </div>
                      <?php endif?>
                  </div>
                </div>
                <?php endforeach?>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection