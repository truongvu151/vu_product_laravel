<!DOCTYPE html>

<head>
    <title>Vu Product</title>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <base href="{{asset('')}}">
    <link rel="stylesheet" type="text/css" href="style/layout.css">
</head>

<body>
    <!--Jumbotron-->
    <div class="jumbotron jumbotron-fluid bg-primary">
        <div class="container-sm text-center">
            <h1>ĐIỆN MÁY ABD</h1>
        </div>
    </div>
    <!--Nav-->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">Trang chủ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Thêm sản phẩm</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Danh mục sản phẩm</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Ưu đãi</a>
            </li>
        </ul>
    </nav>
    @yield('content')
    <!--Product-->

    <!-- Footer -->
    <footer>
        <p> Copyright @ @php echo date("m.Y") @endphp </p>
    </footer>

</body>

</html>