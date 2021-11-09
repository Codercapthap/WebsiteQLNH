<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="images/icons/logoAdmin.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>
    Trang admin
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <style>
    .form-check .form-check-sign .check{
      background-color: white;
    }
  </style>
  <link href="css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <style>
    .editInput{
      color: black;
    }
    .fade-scale {
      transform: scale(0);
      opacity: 0;
      -webkit-transition: all .25s linear;
      -o-transition: all .25s linear;
      transition: all .25s linear;
    }
    .fade-scale.show {
      opacity: 1;
      transform: scale(1);
    }
  </style>
</head>
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange" data-background-color="white" data-image="images/sidebar/sidebar-1.jpg">
      <div class="logo"><a href="/" class="simple-text logo-normal">
          <img src="images/icons/favicon.ico" alt="Home Page">
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="/home">
              <i class="material-icons">dashboard</i>
              <p>Tổng quan</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/tables">
              <i class="material-icons">content_paste</i>
              <p>Nhân viên</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/foods">
              <i class="material-icons">library_books</i>
              <p>Thức ăn</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/map">
              <i class="material-icons">location_ons</i>
              <p>Bản đồ</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/notifications">
              <i class="material-icons">notifications</i>
              <p>Tin nhắn</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/books">
              <i class="material-icons">table_restaurant</i>
              <p>Yêu cầu đặt bàn</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <p class="navbar-brand">Trang quản lí</p>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Tài khoản
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                    <div class="">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Đăng xuất') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>

@yield('content')

      <div class="modal fade-scale modalSuccess" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="successModalLabel">Thất bại</h5>
                        <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                    </div>
                    <div class="modal-body">
                      Có lỗi bất ngờ xảy ra, xin thử lại sau
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  
  <!--   Core JS Files   -->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/dashboard/popper.min.js"></script>
  <script src="js/dashboard/bootstrap-material-design.min.js"></script>
  <!-- Chartist JS -->
  <script src="js/dashboard/chartist.min.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="js/dashboard/material-dashboard.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;


          } else {


            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      md.initDashboardPageCharts();
    })
  </script>
  
    <script>
      $(document).ready(function(){
        window.edit_button = function(_this){
            //hide edit span
            var trObj = _this.closest("tr");
            trObj.find(".editSpan").hide();
            
            //show edit input
            trObj.find(".editInput").show();
            
            //hide edit button
            trObj.find(".editBtn").hide();
            trObj.find(".deleteBtn").hide();
            
            //show edit button
            trObj.find(".saveNVBtn").show();
            trObj.find(".saveFoodBtn").show();
            trObj.find(".cancelBtn").show();
        };
        
        window.saveNV_button = function(_this){
            var trObj = _this.closest("tr");
            var ID = _this.closest("tr").attr('id');
            var inputName = trObj.find(".nameInput").val();
            var inputPosition = trObj.find(".positionInput").val();
            var inputAddress = trObj.find(".addressInput").val();
            var inputPhone = trObj.find(".phoneInput").val();
            var inputSalary = trObj.find(".salaryInput").val();
            $.ajax({
                type:'POST',
                url:'/tables/edit',
                data:{
                  "_token": "{{ csrf_token() }}",
                  "id": ID,
                  "name": inputName,
                  "position": inputPosition,
                  "address": inputAddress,
                  "phone": inputPhone,
                  "salary": inputSalary
                },
                success:function(response){
                    if(response.status == 'ok'){
                        console.log(response.data);
                        if(ID == "null"){
                          trObj.attr('id', response.data.id);
                        }
                        trObj.find(".editSpan.nameSpan").text(response.data.name);
                        trObj.find(".editSpan.positionSpan").text(response.data.position);
                        trObj.find(".editSpan.addressSpan").text(response.data.address);
                        trObj.find(".editSpan.phoneSpan").text(response.data.phone);
                        trObj.find(".editSpan.salarySpan").text("$" + response.data.salary);
                        
                        trObj.find(".editInput.nameInput").text(response.data.name);
                        trObj.find(".editInput.positionInput").text(response.data.position);
                        trObj.find(".editInput.addressInput").text(response.data.address);
                        trObj.find(".editInput.phoneInput").text(response.data.phone);
                        trObj.find(".editInput.salaryInput").text(response.data.salary);
                        
                        trObj.find(".editInput").hide();
                        trObj.find(".saveNVBtn").hide();
                        trObj.find(".deleteBtn").show();
                        trObj.find(".cancelBtn").hide();
                        trObj.find(".editSpan").show();
                        trObj.find(".editBtn").show();
                    }else{
                        $(".modal-body").text(response.msg);
                        $(".modalSuccess").modal('show');
                    }
                }
            });
        };

        window.saveFood_button = function(_this){
            var trObj = _this.closest("tr");
            var ID = _this.closest("tr").attr('id');
            var inputName = trObj.find(".nameInput").val();
            var inputPrice = trObj.find(".priceInput").val();
            var inputDescription = trObj.find(".descriptionInput").val();
            var fd = new FormData();
            var files = trObj.find('.imgInput')[0].files;
            if(files.length > 0 ){
                fd.append('file',files[0]);
            }
            fd.append('ID', ID);
            fd.append('name', inputName);
            fd.append('price', inputPrice);
            fd.append('description', inputDescription);
            console.log(fd.get("ID"));
            $.ajax({
                processData: false,
                contentType: false,
                type:'POST',
                url: '/foods/edit',
                data: fd,
                success:function(response){
                    if(response.status == 'ok'){
                        if(ID == "null"){
                          trObj.attr('id', response.data.id);
                        }
                        trObj.find(".editSpan.nameSpan").text(response.data.name);
                        trObj.find(".editSpan.priceSpan").text("$" + response.data.price);
                        trObj.find(".productImg").attr("src", response.data.file_loca);
                        trObj.find(".editSpan.desSpan").text(response.data.description);
                        
                        trObj.find(".editEdit.nameEdit").text(response.data.name);
                        trObj.find(".editEdit.priceEdit").text(response.data.price);
                        trObj.find(".editEdit.desEdit").text(response.data.description);
                        
                        trObj.find(".editInput").hide();
                        trObj.find(".saveFoodBtn").hide();
                        trObj.find(".deleteBtn").show();
                        trObj.find(".cancelBtn").hide();
                        trObj.find(".editSpan").show();
                        trObj.find(".editBtn").show();
                    }else{
                        $(".modal-body").text(response.msg);
                        $(".modalSuccess").modal('show');
                    }
                }
            });
        };

        $('.addFoodBtn').click(function() {
            if ($('tr[id="null"]').length > 0) {
                $('tr[id="null"]').find('[name="name"]').focus()
                return false;
            }
            var tr = $('<tr>')
            tr.attr('id', 'null');
            tr.append(`<td>
                          <span class="editSpan nameSpan"  style="display: none;"></span>
                          <textarea class="editInput form-control nameInput" type="text" name="name"></textarea>
                      </td>`)
            tr.append(`<td>
                          <span class="editSpan imgSpan"  style="display: none;"><img src="" alt="productImg" width="70px" class="productImg"></span>
                          <input class="editInput form-control imgInput" type="file" name="imgName">
                      </td>`)
            tr.append(`<td>
                          <span class="editSpan priceSpan" style="display: none;"></span>
                          <input class="editInput form-control priceInput" type="number" name="price"></input>
                      </td>`)
            tr.append(`<td>
                          <span class="editSpan desSpan" style="display: none;"></span>
                          <textarea class="editInput form-control descriptionInput" type="text" name="description"></textarea>
                      </td>`)
            tr.append(`<td>
                        <button type="button" class="btn btn-sm btn-primary editBtn" onclick="edit_button($(this))" style="float: none; display: none;"><span class="material-icons">edit</span></button>
                        <button type="button" class="btn btn-sm btn-default deleteBtn" onclick="delete_button($(this))" style="float: none; display: none;"><span class="material-icons">delete</span></button>
                        <button type="button" class="btn btn-sm btn-success saveFoodBtn" onclick="saveFood_button($(this))" style="float: none;"><span class="material-icons">save</span></button>
                        <button type="button" class="btn btn-sm btn-warning confirmFoodBtn" onclick="confirm_button($(this))" style="float: none; display: none;"><span class="material-icons">check</span></button>
                        <button type="button" class="btn btn-sm btn-danger cancelBtn" onclick="cancel_button($(this))" style="float: none;"><span class="material-icons">cancel</span></button>
                      </td>`);
            $(tr).insertBefore('.trAdd');
            tr.find('[name="name"]').focus()
        })

        $('.addNVBtn').click(function() {
            if ($('tr[id="null"]').length > 0) {
                $('tr[id="null"]').find('[name="name"]').focus()
                return false;
            }
            var tr = $('<tr>')
            tr.attr('id', 'null');
            tr.append(`<td>
                          <span class="editSpan nameSpan" style="display: none;"></span>
                          <input class="editInput form-control nameInput" type="text" name="name" value="">
                      </td>`)
            tr.append(`<td>
                          <span class="editSpan positionSpan" style="display: none;"></span>
                          <input class="editInput form-control positionInput" type="text" name="position" value="">
                      </td>`)
            tr.append(`<td>
                          <span class="editSpan addressSpan" style="display: none;"></span>
                          <input class="editInput form-control addressInput" type="text" name="address" value="">
                      </td>`)
            tr.append(`<td>
                          <span class="editSpan phoneSpan" style="display: none;"></span>
                          <input class="editInput form-control phoneInput" type="text" name="phone" value="">
                      </td>`)
            tr.append(`<td>
                          <span class="editSpan salarySpan" style="display: none;">$</span>
                          <input class="editInput form-control salaryInput" type="number" name="salary" value="">
                      </td>`)
            tr.append(`<td>
                        <button type="button" class="btn btn-sm btn-primary editBtn" onclick="edit_button($(this))" style="float: none; display: none;"><span class="material-icons">edit</span></button>
                        <button type="button" class="btn btn-sm btn-default deleteBtn" onclick="delete_button($(this))" style="float: none; display: none;"><span class="material-icons">delete</span></button>
                        <button type="button" class="btn btn-sm btn-success saveNVBtn" onclick="saveNV_button($(this))" style="float: none;"><span class="material-icons">save</span></button>
                        <button type="button" class="btn btn-sm btn-warning confirmStaffBtn" onclick="confirm_button($(this))" style="float: none; display: none;"><span class="material-icons">check</span></button>
                        <button type="button" class="btn btn-sm btn-danger cancelBtn" onclick="cancel_button($(this))" style="float: none;"><span class="material-icons">cancel</span></button>
                      </td>`);
            $(tr).insertBefore('.trAdd');
            tr.find('[name="name"]').focus()
        })

        window.cancel_button = function(_this) {
            if (_this.closest('tr').attr('id') == "null") {
                _this.closest('tr').remove();
            } else {
              var trObj = _this.closest("tr");
              trObj.find(".editInput").hide();
              trObj.find(".saveNVBtn").hide();
              trObj.find(".saveFoodBtn").hide();
              trObj.find(".deleteBtn").show();
              trObj.find(".cancelBtn").hide();
              trObj.find(".editSpan").show();
              trObj.find(".editBtn").show();
              trObj.find(".confirmStaffBtn").hide();
              trObj.find(".confirmFoodBtn").hide();
            }
        }

        window.delete_button = function(_this) {
            var trObj = _this.closest("tr");
            trObj.find(".confirmStaffBtn").show();
            trObj.find(".confirmFoodBtn").show();
            trObj.find(".deleteBtn").hide();
            trObj.find(".cancelBtn").show();
            trObj.find(".editBtn").hide();
        };
        
        window.confirm_button = function(_this){
            var trObj = _this.closest("tr");
            var id = _this.closest("tr").attr('id');
            var desURL = "/foods/delete";
            if(_this.hasClass("confirmStaffBtn")){
              desURL = "/staffs/delete";
            }
            $.ajax({
                url: desURL,
                method: 'POST',
                data: { 
                  "_token": "{{ csrf_token() }}",
                  'id': id 
                },
                success:function(response){
                    if(response.status == 'ok'){
                        trObj.remove();
                    }else{
                        trObj.find(".confirmBtn").hide();
                        trObj.find(".deleteBtn").show();
                        trObj.find(".cancelBtn").hide();
                        trObj.find(".editBtn").show();
                        $(".modalSuccess").modal('show');
                    }
                }
            });
          };
      });
      $('.mes-close').click(function(){
        var cardObj = $(this).closest(".card");
        var id = cardObj.attr('id');
        console.log(id);
        $.ajax({
          url: '/messages/delete',
          method: 'POST',
          data: {
            "_token": "{{ csrf_token() }}",
            'id': id, 
          },
          success:function(response){
            if(response == 'ok'){
              cardObj.fadeOut();
            }else{
              $(".modalSuccess").modal('show');
            }
          }
        })
      })
      $('.book-close').click(function(){
        var cardObj = $(this).closest(".card");
        var id = cardObj.attr('id');
        console.log(id);
        $.ajax({
          url: '/books/delete',
          method: 'POST',
          data: {
            "_token": "{{ csrf_token() }}",
            'id': id, 
          },
          success:function(response){
            if(response == 'ok'){
              cardObj.fadeOut();
            }else{
              $(".modalSuccess").modal('show');
            }
          }
        })
      })
      $("input[name='check']").click(function(){
        var id = $(this).closest(".card").attr('id');
        var checked = false;
        if ($(this).attr('checked') == null){
          checked = true;
        }
        $.ajax({
          url: '/books/check',
          method: 'POST',
          data: {
            "_token": "{{ csrf_token() }}",
            'id': id,
            'check': checked
          },
          success:function(response){
            if(response == 'ok'){
            }
            else{
              $(this).attr('checked', false);
              $(".modalSuccess").modal('show');
            }
          }
        })
      });
  </script>


  <script>
        $(document).ready(function() { 
            $(".nav li").removeClass('active');
            $path = window.location.pathname.split("/").pop();
            $target = $(".nav li a[href='/"+$path+"']");
            $target.parent().addClass('active');
        });
        if ( window.history.replaceState ) {
          window.history.replaceState( null, null, window.location.href );
        }
    </script>
</body>

</html>