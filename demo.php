<!DOCTYPE <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Film-s Cinema</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./demo.css" rel="stylesheet" type="text/css" media="screen,print" />
    <link rel="stylesheet" type="btl.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src="jquery-3.3.1.min.js"></script>
    <script src="doc.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row" style="color: rgb(248, 3, 52)">
            <div class="col-md-4">
                <h3>
                    SOI PHIM
                </h3>
            </div>
            <div class="col-md-4">
                <form class="form-inline">
                    <input class="form-control mr-sm-3" type="text" />
                    <button class="btn btn-primary my-1 my-sm-1" type="submit">
                        Search
                    </button>
                </form>
            </div>
            <div class="col-md-4">
                <center>
                    <button type="button" class="btn btn-success my-1 my-sm-1">
                        Sign-in
                    </button>
                    <button type="button" class="btn btn-success">
                        Sign-up
                    </button>
                </center>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="menu">
                    <ul>
                        <li><a href="#">Trang Chủ</a></li>
                        <li><a href="#">Phim điện ảnh</a></li>
                        <li><a href="#">Phim bộ</a></li>
                        <li><a href="#">Thông tin vé</a></li>
                        <li><a href="#">Bảng xếp hạng</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row my-sm-3">
            <div class="col-md-12">
                <div class="carousel slide" id="carousel-463603">
                    <ol class="carousel-indicators">
                        <li data-slide-to="0" data-target="#carousel-463603" class="active">
                        </li>
                        <li data-slide-to="1" data-target="#carousel-463603">
                        </li>
                        <li data-slide-to="2" data-target="#carousel-463603">
                        </li>
                        <li data-slide-to="3" data-target="#carousel-463603">
                        </li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" alt="Carousel Bootstrap First" src=".\banner5.jpg" height="440" />
                            <div class="carousel-caption">
                                <h4>
                                    First Thumbnail label
                                </h4>
                                <p>
                                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
                                    porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" alt="Carousel Bootstrap Second" src=".\banner2.jpg" height="440" />
                            <div class="carousel-caption">
                                <h4>
                                    Second Thumbnail label
                                </h4>
                                <p>
                                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
                                    porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" alt="Carousel Bootstrap Third" src=".\banner3.png" height="440" />
                            <div class="carousel-caption">
                                <h4 style="color:brown">

                                </h4>
                                <p style="color:gold">
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" alt="Carousel Bootstrap Third" src=".\banner4.png" height="440" />
                            <div class="carousel-caption">
                                <h4>
                                    Third Thumbnail label
                                </h4>
                                <p>
                                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
                                    porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                </p>
                            </div>
                        </div>
                    </div> <a class="carousel-control-prev" href="#carousel-463603" data-slide="prev"><span class="carousel-control-prev-icon"></span>
                        <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-463603"
                        data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
                </div>
            </div>
        </div>
        <div class="row my-2 my-sm-3">
            <div class="col-md-8">
                <div class="tabbable" id="tabs-199755">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active show" href="#tab1" data-toggle="tab">Phim đang chiếu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tab2" data-toggle="tab">Phim sắp chiếu</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="panel-657129">
                            <div class="row my-sm-3">
                                <div class="col-md-3">
                                    <a href="/w3images/lights.jpg">
                                        <img src=".\vn.jpg" alt="Lights" width="200" height="300">
                                        <div class="caption">
                                            <p>Park Hang Seo-Người truyền lửa</p>
                                            <p></p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="/w3images/lights.jpg">
                                        <img src="./film2.jpg" alt="Lights" width="200" height="300">
                                        <div class="caption">
                                            <p>Park Hang Seo: Người truyền lửa - Kiến trúc sư đại tài cho một năm lịch
                                                sử của bóng đá Việt Nam</p>
                                            <p>Thời gian:</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="/w3images/lights.jpg">
                                        <img src="./film3.jpg" alt="Lights" width="200" height="300">
                                        <div class="caption">
                                            <p>Giá:</p>
                                            <p>Thời gian:</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="/w3images/lights.jpg">
                                        <img src="./film4.jpg" alt="Lights" width="200" height="300">
                                        <div class="caption">
                                            <p>Giá:</p>
                                            <p>Thời gian:</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="/w3images/lights.jpg">
                                        <img src="./film1.jpg" alt="Lights" width="200" height="300">
                                        <div class="caption">
                                            <p>Giá:</p>
                                            <p>Thời gian:</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="/w3images/lights.jpg">
                                        <img src="./film1.jpg" alt="Lights" width="200" height="300">
                                        <div class="caption">
                                            <p>Giá:</p>
                                            <p>Thời gian:</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="/w3images/lights.jpg">
                                        <img src="./film4.jpg" alt="Lights" width="200" height="300">
                                        <div class="caption">
                                            <p>Giá:</p>
                                            <p>Thời gian:</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="/w3images/lights.jpg">
                                        <img src="./film1.jpg" alt="Lights" width="200" height="300">
                                        <div class="caption">
                                            <p>Giá:</p>
                                            <p>Thời gian:</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="/w3images/lights.jpg">
                                        <img src="./film1.jpg" alt="Lights" width="200" height="300">
                                        <div class="caption">
                                            <p>Giá:</p>
                                            <p>Thời gian:</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab2">
                            <h2>
                                Heading
                            </h2>
                            <p>
                                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus
                                commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam
                                porta sem malesuada magna mollis euismod. Donec sed odio dui.
                            </p>
                            <p>
                                <a class="btn" href="#">View details »</a>
                            </p>
                            <h2>
                                Heading
                            </h2>
                            <p>
                                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus
                                commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam
                                porta sem malesuada magna mollis euismod. Donec sed odio dui.
                            </p>
                            <p>
                                <a class="btn" href="#">View details »</a>
                            </p>
                            <h2>
                                Heading
                            </h2>
                            <p>
                                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus
                                commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam
                                porta sem malesuada magna mollis euismod. Donec sed odio dui.
                            </p>
                            <p>
                                <a class="btn" href="#">View details »</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-2 my-sm-6">
                <img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" /><img
                    alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>
                                TRANG WEB REVIEW PHIM SOI PHIM
                            </td>
                            <td>
                                Email: supportsoiphim@gmail.com
                            </td>
                        </tr>
                        <tr class="table-active">
                            <td>
                                Trang Web Review - Cập Nhật Thông Tin Phim Nhanh Nhất
                            </td>
                            <td>
                                SĐT: 0123456789
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>