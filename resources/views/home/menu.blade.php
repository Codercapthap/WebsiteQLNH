@extends('layouts.app', ['title' => 'Menu'])

@section('content')
    <div class="page-heading about-heading header-text" style="background-image: url(images/heading/heading.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Steireck Restaurant</h4>
              <h2>Menu</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
          <?php foreach($foods as $food): ?>
            <div class="col-md-4">
              <div class="product-item">
                <a href="#"><img src="images/product/<?=$food->imgName?>.jpg" alt="" width="auto" height="229px"></a>
                <div class="down-content">
                  <a href="#"><h4><?=$food->name?></h4></a>
                  <h6>$<?=$food->price?></h6>
                  <p><?=$food->description?></p>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        </div>
      </div>
    </div>
@endsection