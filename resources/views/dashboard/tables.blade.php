@extends('layouts.dashboard')

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-plain">
          <div class="card-header card-header-primary">
            <h3 class="card-title mt-0"> Bảng danh sách nhân viên</h3>
            <form class="navbar-form col-md-3 float-right" method="post" action="/tables">
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
                  <th>Họ tên</th>
                  <th>Chức vụ</th>
                  <th>Địa chỉ</th>
                  <th>Số điện thoại</th>
                  <th>Lương</th>
                  @can('admin')
                  <th>Chỉnh sửa</th>
                  @endcan
                </thead>
                <tbody>
                  <?php foreach($nhanVien as $nv): ?>
                      <tr id="<?=$nv->id?>">
                          <td>
                            <span class="editSpan nameSpan"><?=$nv->name?></span>
                            <input class="editInput form-control nameInput" type="text" name="name" value="<?=$nv->name?>" style="display: none;">
                          </td>
                          <td>
                            <span class="editSpan positionSpan"><?=$nv->position?></span>
                            <input class="editInput form-control positionInput" type="text" name="position" value="<?=$nv->position?>" style="display: none;">
                          </td>
                          <td>
                            <span class="editSpan addressSpan"><?=$nv->address?></span>
                            <input class="editInput form-control addressInput" type="text" name="address" value="<?=$nv->address?>" style="display: none;">
                          </td>
                          <td>
                            <span class="editSpan phoneSpan"><?=$nv->phone?></span>
                            <input class="editInput form-control phoneInput" type="text" name="phone" value="<?=$nv->phone?>" style="display: none;">
                          </td>
                          <td>
                            <span class="editSpan salarySpan">$<?=$nv->salary?></span>
                            <input class="editInput form-control salaryInput" type="number" name="salary" value="<?=$nv->salary?>" style="display: none;">
                          </td>
                          @can('admin')
                          <td>
                            <button type="button" class="btn btn-sm btn-primary editBtn" onclick="edit_button($(this))" style="float: none;"><span class="material-icons">edit</span></button>
                            <button type="button" class="btn btn-sm btn-default deleteBtn" onclick="delete_button($(this))" style="float: none;"><span class="material-icons">delete</span></button>
                            <button type="button" class="btn btn-sm btn-success saveNVBtn" onclick="saveNV_button($(this))" style="float: none; display: none;"><span class="material-icons">save</span></button>
                            <button type="button" class="btn btn-sm btn-warning confirmStaffBtn" onclick="confirm_button($(this))" style="float: none; display: none;"><span class="material-icons">check</span></button>
                            <button type="button" class="btn btn-sm btn-danger cancelBtn" onclick="cancel_button($(this))" style="float: none; display: none;"><span class="material-icons">cancel</span></button>
                          </td>
                          @endcan
                      </tr>
                  <?php endforeach ?>
                  @can('admin')
                  <tr class="trAdd">
                    <td colspan="6"><button type="button" class="btn btn-sm btn-primary addNVBtn" style="float: none;"><span class="material-icons">add</span></button></td>
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