@extends('layouts.dashboard')

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-plain">
          <div class="card-header card-header-primary">
            <h3 class="card-title mt-0">Bảng danh sách món ăn</h3>
            <form method="POST" action="/foods" class="navbar-form col-md-3 float-right">
              @csrf
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Tìm kiếm..." name="name">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead class="">
                  <th>Tên</th>
                  <th>Hình ảnh</th>
                  <th>Giá</th>
                  <th>Mô tả</th>
                  @can('admin')
                  <th>Chỉnh sửa</th>
                  @endcan
                </thead>
                <tbody>
                  <?php foreach($foods as $food): ?>
                      <tr id="<?=$food->id?>">
                          <td>
                            <span class="editSpan nameSpan"><?=$food->name?></span>
                            <textarea class="editInput form-control nameInput" type="text" name="name" style="display: none;"><?=$food->name?></textarea>
                          </td>
                          <td>
                            <span class="editSpan imgSpan"><img src="/images/product/<?=$food->imgName?>.jpg" alt="productImg" width="70px" class="productImg"></span>
                            <input class="editInput form-control imgInput" type="file" name="imgName" style="display: none;">
                          </td>
                          <td>
                            <span class="editSpan priceSpan">$<?=$food->price?></span>
                            <input class="editInput form-control priceInput" type="number" name="price" style="display: none;" value="<?=$food->price?>">
                          </td>
                          <td>
                            <span class="editSpan desSpan"><?=$food->description?></span>
                            <textarea class="editInput form-control descriptionInput" type="text" name="description" style="display: none;"><?=$food->description?></textarea>
                          </td>
                          @can('admin')
                          <td>
                            <button type="button" class="btn btn-sm btn-primary editBtn" onclick="edit_button($(this))" style="float: none;"><span class="material-icons">edit</span></button>
                            <button type="button" class="btn btn-sm btn-default deleteBtn" onclick="delete_button($(this))" style="float: none;"><span class="material-icons">delete</span></button>
                            <button type="button" class="btn btn-sm btn-success saveFoodBtn" onclick="saveFood_button($(this))" style="float: none; display: none;"><span class="material-icons">save</span></button>
                            <button type="button" class="btn btn-sm btn-warning confirmFoodBtn" onclick="confirm_button($(this))" style="float: none; display: none;"><span class="material-icons">check</span></button>
                            <button type="button" class="btn btn-sm btn-danger cancelBtn" onclick="cancel_button($(this))" style="float: none; display: none;"><span class="material-icons">cancel</span></button>
                          </td>  
                          @endcan('admin')
                      </tr>
                  <?php endforeach ?>
                  @can('admin')
                  <tr class="trAdd">
                    <td colspan="5"><button type="button" class="btn btn-sm btn-primary addFoodBtn" style="float: none;"><span class="material-icons">add</span></button></td>
                  </tr>
                  @endcan
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection