<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Straight Face</title>

        <!-- Bootstrap -->
        <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="{{ asset('vendors/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
        <!-- NProgress -->
        <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- Animate.css -->
        <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="../build/css/custom.min.css" rel="stylesheet">
    </head>

    <body class="login">
        <div>
            <a class="hiddenanchor" id="signup"></a>
            <a class="hiddenanchor" id="signin"></a>
            {{-- @if($error)
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
            @endif --}}
            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        <form action="{{ route('regi') }}" method="POST">
                            @csrf <!-- Tambahkan token CSRF -->
                            <h1>Login Form</h1>
                            <div>
                                <input type="text" name="id_user" class="form-control" placeholder="Username" required  />
                            </div>
                            <div>
                                <input type="password" name="password" class="form-control" placeholder="Password" required  />
                            </div>
                            <div>
                                <input type="text" name="jabatan" class="form-control" placeholder="Jabatan" required  />
                            </div>
                            <div>
                                <button type="submit" class="btn btn-default submit">Create</button>
                            </div>
                            <div class="clearfix"></div>
                            <div class="separator">
                                <div>
                                    <h1><i class="fa fa-strightfacelogin"></i> Straight Face</h1>
                                    <p>©2023 Proyek 1 Kelompok 6</p>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </body>
</html>