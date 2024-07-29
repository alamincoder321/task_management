<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Task Management Software</title>
    <link rel="icon" type="image/png" href="{{asset('auth')}}/images/icons/favicon.ico" />
    <link rel="stylesheet" href="{{asset('auth')}}/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('auth')}}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('auth')}}/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="{{asset('auth')}}/vendor/animate/animate.css">
    <link rel="stylesheet" href="{{asset('auth')}}/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="{{asset('auth')}}/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" href="{{asset('auth')}}/css/util.css">
    <link rel="stylesheet" href="{{asset('auth')}}/css/main.css">
    <link rel="stylesheet" href="{{asset('backend')}}/css/toastr.min.css">
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('/auth/images/bg-01.jpg');">
            <div class="wrap-login100 p-t-30 p-b-50">
                <span class="login100-form-title p-b-41">
                    Account Login
                </span>
                <form onsubmit="AdminLogin(event)" class="login100-form validate-form p-b-33 p-t-5">

                    <div class="wrap-input100 validate-input" data-validate="Enter username">
                        <input class="input100" type="text" name="username" placeholder="User name" autocomplete="off">
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                        <p class="error-username m-0" style="font-style: italic;"></p>
                    </div>

                    <div class="wrap-input100 validate-input password" data-validate="Enter password">
                        <input class="input100" type="password" name="password" placeholder="Password" autocomplete="off">
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                        <i class="fa fa-eye" style="position: absolute;top: 40%;right: 30px;cursor:pointer;" onclick="passwordShow(event)"></i>
                        <p class="error-password m-0" style="font-style: italic;"></p>
                    </div>

                    <div class="container-login100-form-btn m-t-32">
                        <button type="submit" class="login100-form-btn">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="{{asset('auth')}}/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="{{asset('auth')}}/vendor/animsition/js/animsition.min.js"></script>
    <script src="{{asset('auth')}}/vendor/bootstrap/js/popper.js"></script>
    <script src="{{asset('auth')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{asset('auth')}}/js/main.js"></script>
    <script src="{{asset('backend')}}/js/toastr.min.js"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function AdminLogin(event) {
            event.preventDefault();
            $("#login").prop("disabled", true);
            var formdata = new FormData(event.target)
            $.ajax({
                url: "/login",
                method: "POST",
                data: formdata,
                contentType: false,
                processData: false,
                beforeSend: () => {
                    $(".error-username").text('').removeClass("text-danger")
                    $(".error-password").text('').removeClass("text-danger")
                },
                success: res => {
                    location.href = "/dashboard"
                },
                error: err => {
                    $("#login").prop("disabled", false);
                    toastr.error(err.responseJSON.message);
                    if (typeof err.responseJSON.errors == 'object') {
                        $.each(err.responseJSON.errors, (index, value) => {
                            $(".error-" + index).text(value).addClass("text-danger")
                        })
                        return
                    }
                    console.log(err.responseJSON.errors);
                }
            })
        }
        // show password
        function passwordShow(event) {
            let password = $(".password").find('input').prop('type');
            if (password == 'password') {
                $(".password").find('i').removeProp('class').prop('class', 'fa fa-eye-slash')
                $(".password").find('input').removeProp('type').prop('type', 'text');
            } else {
                $(".password").find('i').removeProp('class').prop('class', 'fa fa-eye')
                $(".password").find('input').removeProp('type').prop('type', 'password');
            }
        }
    </script>
</body>

</html>