<!doctype html>
<html lang="vi">
<head>
    <meta charset="utf-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>{{ $title }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Additional CSS Files -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/owl.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style-home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="icon" type="image/png" href="images/icons/logoHome.png">
    <style>
        .dropdown-menu{
            margin-bottom: 10px;
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
<body>
    <div id="app">
        <header class="">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="index.html"><h2>Steireck <em>Restaurant</em></h2></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto pagination">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Trang chủ
                                <span class="sr-only">(current)</span>
                                </a>
                            </li> 

                            <li class="nav-item"><a class="nav-link" href="/book-table">Đặt bàn</a></li>

                            <li class="nav-item"><a class="nav-link" href="/menu">Menu</a></li>

                            <li class="nav-item"><a class="nav-link" href="/about-us">Về chúng tôi</a></li>
                            
                            <li class="nav-item"><a class="nav-link" href="/contact">Liên hệ</a></li>

                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Đăng nhập') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a href="/home" class="dropdown-item">Trang quản lí</a>

                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Đăng xuất') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        

        <main class="">
            @yield('content')
        </main>
        <footer>
            <div class="container">
                <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                    <p>© 2021Copyright Steireck - Steireck Restaurant</p>
                    </div>
                </div>
                </div>
            </div>
        </footer>
    </div>
    
    <script src="js/app.js"></script>
    <!-- Additional Scripts -->
    <script src="js/custom.js"></script>
    <script src="js/owl.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() { 
            $path = window.location.pathname.split("/").pop();
            $(".pagination li").removeClass('active');
            $target = $(".pagination li a[href='/"+$path+"']");
            $target.addClass('active');
        });
    </script>
    <script>
        $.validator.addMethod("validatePhone", function(value, element) {
            return this.optional(element) || /([0-9]{10})|(\([0-9]{3}\)\s+[0-9]{3}\-[0-9]{4})/i.test(value);
        }, "Hãy nhập đúng định dạng số điện thoại");
        $.validator.addMethod("validateDate", function(value, element){
            return this.optional(element) || /^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[13-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d))/i.test(value);
        }, "Hãy nhập đúng định dạng ngày");
        $.validator.addMethod("validateTime", function(value, element){
            return this.optional(element) || /^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/i.test(value);
        }, "Hãy nhập đúng định dạng giờ");
        var bookValidate = $(".book-form").validate({
            errorClass: "invalid-feedback",
            rules: {
                day: {
                    required: true,
                    validateDate: true
                },
                time: {
                    required: true,
                    validateTime: true
                },
                name: {
                    required: true,
                    maxlength: 50
                },
                email: {
                    required: true,
                    email: true,
                    maxlength: 50
                },
                message: {
                    maxlength: 200
                },
                phone: {
                    required: true,
                    validatePhone: true,
                    minlength: 10,
                    maxlength: 10
                },
            },

            messages: {
                day:{
                    required: "Hãy nhập ngày vào",
                },
                time:{
                    required: "Hãy nhập thời gian vào",
                },
                name: {
                    required: "Hãy nhập họ tên vào",
                    maxlength: "Họ tên chỉ nhập tối đa 50 kí tự"
                },
                email: {
                    required: "Hãy nhập email vào",
                    maxlength: "Email chỉ nhập tối đa 50 kí tự",
                    email: "Hãy nhập đúng định dạng email"
                },
                message: {
                    maxlength: "ghi chú không dài quá 200 kí tự"
                },
            },
            errorPlacement: function(error, element) {
                error.insertAfter(element);
            },
            highlight: function(element, errorClass) {
                $(element).removeClass(errorClass);
            }
        });

        var contactValidate = $(".contact-form").validate({
            errorClass: "invalid-feedback",
            rules: {
                day: {
                    required: true,
                    validateDate: true
                },
                time: {
                    required: true,
                    validateTime: true
                },
                name: {
                    required: true,
                    maxlength: 50
                },
                email: {
                    required: true,
                    email: true,
                    maxlength: 50
                },
                message: {
                    maxlength: 200
                },
                phone: {
                    required: true,
                    validatePhone: true,
                    minlength: 10,
                    maxlength: 10
                },
            },

            messages: {
                subject:{
                    required: "Hãy nhập chủ đề vào",
                    maxlength: "Chủ đề chỉ nhập tối đa 20 kí tự"
                },
                name: {
                    required: "Hãy nhập họ tên vào",
                    maxlength: "Họ tên chỉ nhập tối đa 50 kí tự"
                },
                email: {
                    required: "Hãy nhập email vào",
                    maxlength: "Email chỉ nhập tối đa 50 kí tự",
                    email: "Hãy nhập đúng định dạng email"
                },
                message: {
                    required: "Hãy nhập thông điệp vào",
                    maxlength: "Thông điệp không dài quá 500 kí tự"
                },
            },
            errorPlacement: function(error, element) {
                error.insertAfter(element);
            },
            highlight: function(element, errorClass) {
                $(element).removeClass(errorClass);
            }
        });
        $(document).ready(function() { 
            $("#book-submit").click(function(){
                $(".book-form").valid();
                if(bookValidate.numberOfInvalids() === 0){
                    var row = $(this).closest('.row');
                    var bookDay = row.find('input[name="day"]').val();
                    var bookTime = row.find('input[name="time"]').val();
                    var options = row.find('select').children();
                    var email = row.find('input[name="email"]').val();
                    var hoten = row.find('input[name="name"]').val();
                    var notes = row.find('textarea[name="message"]').val();
                    for (var i = 0; i < options.length; i++){
                        if (options[i].selected){
                            var sl = options[i].value;
                        }
                    }
                    $.ajax({
                        type:'POST',
                        url: '/books/add',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            "bookDay": bookDay, 
                            "bookTime": bookTime, 
                            "sl": sl, 
                            "notes": notes, 
                            "hoten": hoten, 
                            "email": email, 
                        },
                        success:function(response){
                            if(response == 'ok'){
                                $(".modalSuccess").modal('show');
                            }else{
                                console.log(response);
                            }
                        }
                    })
                }
            })
            $('#message-submit').click(function(){
                $(".contact-form").valid();
                if(contactValidate.numberOfInvalids() === 0){
                    var row = $(this).closest('.row');
                    var name = row.find('input[name="name"]').val();
                    var email = row.find('input[name="email"]').val();
                    var subject = row.find('input[name="subject"]').val();
                    var message = row.find('textarea[name="message"]').val();
                    $.ajax({
                        type:'POST',
                        url: '/messages/add',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            'name': name,
                            'email': email,
                            'subject': subject,
                            'message': message
                        },
                        success:function(response){
                            if(response == 'ok'){
                                $(".modalSuccess").modal('show');
                            }else{
                                console.log(response);
                            }
                        }
                    })
                }
            });
        });
    </script>
  </body>
</html>
