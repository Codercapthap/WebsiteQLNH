@extends('layouts.dashboard')

@section('content')
      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <h3 class="card-title">Danh sách tin nhắn</h3>
              <p class="card-category"></p>
            </div>
            <div class="card-body">
              <div class="row">
                <?php foreach($messages as $message): ?>
                <div id="<?=$message->id?>" class="card card-alert">
                  <div class="card-header card-header-success">
                    <button type="button" class="close mes-close" data-dismiss="card" aria-label="Close">
                      <i class="material-icons">close</i>
                    </button>
                    <h3 class="card-title"><?=$message->subject?></h3>
                    <p class="card-category"><?=$message->hoten . " - " . $message->email?></p>
                      <div class="alert">
                        <span><?=$message->content?></span>
                      </div>
                  </div>
                </div>
                <?php endforeach?>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection