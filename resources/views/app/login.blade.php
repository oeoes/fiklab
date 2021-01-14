<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIK-Laboratorium - Login</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-4/bootstrap.min.css') }}">
    <style>
        .error {
            border-color: #dc3545
        }

        .flex-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .on {
            display: inline;
        }

        .off {
            display: none;
        }

        .show_password {
            position: relative;
        }

        .show_password_btn {
            position: absolute;
            right: 15px;
            top: -28px;
            cursor: pointer
        }

        .show_password_btn:hover {
            color: blue;
        }

        body {
            background-image: url("{{ asset('images/bg.jpg') }}");
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="container h-100">
        <div class="row align-items-center justify-content-center" style="height: 100vh">
            <div class="col-md-8 align-self-center card p-4 border-0 shadow-sm animate__animated animate__flipInX" style="background: rgba(255,255,255,.5);">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('images/slider/logolab.png') }}" class="mx-auto d-block" alt="" style="max-width: 100%;">
                    </div>
                    <div class="col-md-8">
                        <div class="h2">Login</div>
                        <div class="h5">Sign in to your account</div>
                        <form id="form-login" action="{{ route('login.validate') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" name="email" type="email" class="form-control rounded-pill outline-danger" required>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input id="password" name="password" type="password" class="form-control rounded-pill" required>
                                <div class="show_password">
                                    <div class="show_password_btn">
                                        <i data-feather="eye" class="off"></i>
                                        <i data-feather="eye-off" class="on"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form">
                                <div class="custom-control custom-checkbox">
                                    <input name="remember" type="checkbox" class="custom-control-input" id="rememberMe" value="true">
                                    <label class="custom-control-label" for="rememberMe">Ingat saya.</label>
                                </div>
                            </div>

                            <div class="form-group mt-4">
                                <button id="login" class="btn btn-sm rounded-pill btn-outline-primary mb-3 pr-3 pl-3">Masuk</button>
                            </div>

                            @if(count($errors))
                            <div class="alert alert-danger alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Invalid Credentials!</strong> Periksa kembali email dan password anda.
                            </div>
                            @endif

                            <div class="text-muted text-right">
                                <!-- <small><a href="">Forget password?</a></small> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- axios -->
    <script src="{{ asset('js/axios.js') }}"></script>
    <!-- <script>
        $(document).ready(function() {
            $('.show_password_btn').click(function() {
                if ($('#password').attr('type') == 'text') {
                    $('#password').attr('type', 'password')
                    $('.on').css('display', 'inline');
                    $('.off').css('display', 'none');
                } else {
                    $('#password').attr('type', 'text')
                    $('.on').css('display', 'none');
                    $('.off').css('display', 'inline');
                }

            })

            $(document).on('submit', '#form-login', function(e) {
                e.preventDefault()
            })

            // login
            $(document).on('click', '#login', function() {
                $('#login').text('Memeriksa...');
                axios.post('/login', {
                    email: $('#email').val(),
                    password: $('#password').val(),
                    rememberMe: $('#rememberMe').prop('checked'),
                }).then(function(response) {
                    if (response.data.status) {
                        
                    }
                }).catch(function(error) {
                    if (!error.response.data.status) {
                        $('#email').addClass('error')
                        $('#email').addClass('animate__animated animate__headShake')

                        $('#password').addClass('error')
                        $('#password').addClass('animate__animated animate__headShake')

                    }
                }).finally(function() {
                    $('#login').text('Masuk');
                    setTimeout(() => {
                        $('#email').removeClass('error')
                        $('#email').removeClass('animate__animated animate__headShake')

                        $('#password').removeClass('error')
                        $('#password').removeClass('animate__animated animate__headShake')
                    }, 3500);
                })
            })
        })
    </script> -->
</body>

</html>