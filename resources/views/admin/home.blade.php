@extends('template')
{{--<!doctype html>--}}
{{--<html lang="pt-br">--}}
{{--<head>--}}
{{--    <title>Hello, world!</title>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta content="width=device-width, initial-scale=1.0" name="viewport" />--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />--}}
{{--    <link rel="stylesheet" type="text/css"--}}
{{--          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />--}}
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">--}}
{{--    <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />--}}
{{--</head>--}}
{{--<body class="wrapper ">--}}

<aside class="sidebar" data-color="green" data-background-color="white" data-image="">
    <div class="logo">
        <a href="#" class="simple-text logo-normal">
            [Sua Empresa]
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item active  ">
                <a class="nav-link" href="#0">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
        </ul>
    </div>
</aside>
<section class="main-panel">
    <header class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <nav class="container-fluid">
            <div class="navbar-wrapper">
                <a class="navbar-brand" href="#">Dashboard</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
                <form class="navbar-form">
                        <span class="bmd-form-group">
                            <div class="input-group no-border">
                                <input type="text" class="form-control" placeholder="Pesquisar...">
                                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                    <i class="material-icons">search</i>
                                    <div class="ripple-container"></div>
                                </button>
                            </div>
                        </span>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">notifications</i>
                            <span class="notification">5</span>
                            <p class="d-lg-none d-md-block">Algumas Notificações</p>
                            <div class="ripple-container"></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a href="#" class="dropdown-item">Gustavo 1</a>
                            <a href="#" class="dropdown-item">Gustavo 1</a>
                            <a href="#" class="dropdown-item">Gustavo 1</a>
                            <a href="#" class="dropdown-item">Gustavo 1</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">person</i>
                            <p class="d-lg-none d-md-block">Conta</p>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                            <a href="#" class="dropdown-item">Perfil</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Log out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="content">
        <div class="container-fluid">
            <!-- your content here -->
        </div>
    </main>
    <footer class="footer">
        <div class="container-fluid">
            <nav class="float-left">
                <ul>
                    <li>
                        <a href="#">
                            [Minha Empresa]
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright float-right">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>,
            </div>
        </div>
    </footer>
</section>
{{--<script src="assets/js/core/jquery.min.js"></script>--}}
{{--<script src="assets/js/core/popper.min.js"></script>--}}
{{--<script src="assets/js/core/bootstrapmaterialdesign.js"></script>--}}
{{--<script src="assets/js/plugins/perfectscrollbar.js"></script>--}}
{{--<script src="assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>--}}
{{--<script src="assets/js/main.js"></script>--}}
{{--</body>--}}
{{--</html>--}}
