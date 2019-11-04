<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/style15.css')}}">
    <title>Title</title>
</head>

<body>
    <header class="Header container px-0">
        <div class="row py-1">
            <div class="col-2 d-flex align-items-center ">
                <button class="d-none d-md-block btn btn-outline-danger ">SIGN UP NOW</button>
            </div>
            <div class="col-8">
                <div class=" text-center">
                   <a href="" class=" text-decoration-none"> <h1 class=" text-success">NEWS</h1> </a>
                </div>
            </div>
            <div class="col-2 d-flex justify-content-between align-items-center">
                    <a class=" text-decoration-none" href=""> <i
                            class="fas fa-search  text-muted d-none d-md-block text-muted "></i></a>
                    <a href="#" class="btn btn-outline-success m-2 d-none d-md-block"> SIGN IN</a>
                    <button tyle="button" class="btn  btn-outline-success  d-block d-md-none btn-sm "
                        data-toggle="collapse" href="#navbar" role="button" aria-expanded="true"
                        aria-controls="navbar" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                    </a>

                </div>
        </div>
    </header>

    <!--End header-->

    <nav class="Nav container px-0 " id="navbar"> 
        <div class=" row ">
            <div class="col-12 px-0 border-bottom  ">
                <ul class=" nav d-flex flex-column d-md-flex flex-md-row">
                    <li class=" nav-item d-none d-md-flex "><a class="pl-0   nav-link text-secondary" href=""><i class="fas fa-less-than"></i></a></li>
                    <li class="m-0 m-md-auto nav-item "><a class=" nav-link text-dark" href="">Home</a></li>
                    <li class="m-0 m-md-auto nav-item "><a class=" nav-link text-secondary" href="">HTML</a></li>
                    <li class="m-0 m-md-auto nav-item "><a class=" nav-link text-secondary" href="">CSS</a></li>
                    <li class="m-0 m-md-auto nav-item "><a class=" nav-link text-secondary" href="">JavaScript</a></li>
                    <li class="m-0 m-md-auto nav-item "><a class=" nav-link text-secondary" href="">PHP</a></li>
                    <li class="m-0 m-md-auto nav-item "><a class=" nav-link text-secondary" href="">React JS</a></li>
                    <li class="m-0 m-md-auto nav-item "><a class=" nav-link text-secondary" href="">Laravel</a></li>
                    <li class="  nav-item d-none d-md-flex "><a class="pr-0 nav-link text-secondary font-weight-bold" href=""><i class="fas fa-greater-than"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!--End Nav-->

    <section>
        <div class="Section container px-0 mt-3">
            <div class="Section__1st-Row row d-flex border-bottom pb-3 ">
                <div class="Section__1st-Row__1st-Col__1st col-6 col-md-8 ">
                    <div class=" card-group h-100  ">
                        <div class=" card h-100">
                            <div class="Section__1st-Row__1st-Col__1st-Card h-100"></div>
                            <div
                                class=" card-img-overlay d-flex flex-column justify-content-end card-img-overlay text-white">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                        <div class="d-none d-md-block card h-100">
                            <div class="Section__1st-Row__1st-Col__2nd-Card h-100"></div>
                            <div
                                class=" card-img-overlay d-flex flex-column justify-content-end card-img-overlay text-white">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Hot News
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex"> <span class=" text-truncate">Lorem ipsum dolor sit amet, consectetur a...</span> <span class=" badge badge-success"><i class="fab fa-node-js"></i></span></li>
                            <li class="list-group-item d-flex"><span class=" text-truncate">A expedita, fuga! Ab atque facilis, itaque lasds</span><span class=" badge badge-danger "><i class="fab fa-css3-alt "></i></span></li>
                            <li class="list-group-item d-flex"><span class=" text-truncate">Lorem ipsum dolor sit amet, consectetur asadasda</span><span class=" badge-warning badge"><i class=" fab fa-js-square"></i></span></li>
                            <li class="list-group-item d-flex justify-content-between "><span class=" text-truncate">Cupiditate fuga illum quaerat!</span><span class=" badge badge-success"><i class="fab fa-node-js"></i></li>
                            <li class="list-group-item d-flex"><span class=" text-truncate">magnam magni minus nihil perferendis quis </span><span class=" badge badge-success"><i class="fab fa-html5" ></i></span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="Section__2nd-Row row">
                <div class="col-8">
                    <div>
                        <a class=" badge badge-success text-white"><small>Feature</small></a>
                    </div>
                </div>
                <div class=" col-4 ">
                    <div class=" d-flex justify-content-end ">
                        <a class="text-secondary" href=""><small>MORE <span
                                    class="font-weight-bold ">&#62;</span></small></a>
                    </div>
                </div>
            </div>
            <div class="Section__3th-Row row border-bottom pb-3 ">
                <div class="col-12 col-md-8">
                    <div class="card-deck">
                        <div class="card">
                            <img class="card-img-top IMG"
                                src="https://github.com/namnh06/html-demo/blob/master/news/assets/images/3.jpg?raw=true"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This card has supporting text below as a...</p>
                            </div>
                            <div class=" card-footer">
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top IMG "
                                src="https://github.com/namnh06/html-demo/blob/master/news/assets/images/4.jpg?raw=true"
                                alt="Card image cap">
                            <div class="card-body ">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This card has supporting text below as a...</p>
                            </div>
                            <div class=" card-footer">
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-deck mt-2">
                        <div class="card">
                            <img class="card-img-top IMG"
                                src="https://github.com/namnh06/html-demo/blob/master/news/assets/images/5.jpg?raw=true"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This card has supporting text below as a...</p>
                            </div>
                            <div class=" card-footer">
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top IMG "
                                src="https://github.com/namnh06/html-demo/blob/master/news/assets/images/6.jpg?raw=true"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This card has supporting text below as a...</p>
                            </div>
                            <div class=" card-footer">
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-4 d-none d-md-block ">
                            <div class="card h-100">
                                <img class="card-img-top h-50"
                                    src="https://github.com/namnh06/html-demo/blob/master/news/assets/images/7.jpg?raw=true"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi incidunt minus dolorem totam? Explicabo commodi consectetur, totam deleniti, rerum sunt obcaecati, provident quam aspernatur suscipit qui.</p>
                                </div>
                                <div class=" card-footer">
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                        </div>
                    </div>
            </div>
            <div class="Section__4th-Row row">
                <div class="col-8">
                    <div>
                        <a class=" badge badge-danger text-white"><small>Hot</small></a>
                    </div>
                </div>
                <div class=" col-4 ">
                    <div class=" d-flex justify-content-end ">
                        <a class="text-secondary" href=""><small>MORE <span
                                    class="font-weight-bold ">&#62;</span></small></a>
                    </div>
                </div>
            </div>
            <div class="Section__5th-Row row  py-3 ">
                <div class="col-4 d-none d-md-block">
                            <div class="card h-100">
                                <img class="card-img-top h-50"
                                    src="https://github.com/namnh06/html-demo/blob/master/news/assets/images/8.jpg?raw=true"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi incidunt minus dolorem totam? Explicabo commodi consectetur, totam deleniti, rerum sunt obcaecati, provident quam aspernatur suscipit qui .</p>
                                </div>
                                <div class=" card-footer">
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                        </div>
                    </div>
                <div class="col-12 col-md-8">
                    <div class="card-deck">
                        <div class="card">
                            <img class="card-img-top IMG"
                                src="https://github.com/namnh06/html-demo/blob/master/news/assets/images/9.jpg?raw=true"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This card has supporting text below as a...</p>
                            </div>
                            <div class=" card-footer">
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top IMG "
                                src="https://github.com/namnh06/html-demo/blob/master/news/assets/images/10.jpg?raw=true"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This card has supporting text below as a...</p>
                            </div>
                            <div class=" card-footer">
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="d-none d-md-flex card-deck mt-2  ">
                        <div class="card ">
                            <img class="card-img-top IMG"
                                src="https://github.com/namnh06/html-demo/blob/master/news/assets/images/11.jpg?raw=true"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This card has supporting text below as a...</p>
                            </div>
                            <div class=" card-footer">
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top IMG "
                                src="https://github.com/namnh06/html-demo/blob/master/news/assets/images/12.jpg?raw=true"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This card has supporting text below as a...</p>
                            </div>
                            <div class=" card-footer">
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                    </div>
            </div>
    </section>

    <!--End Section-->

    <div class="container-fluid Footer  border-top">
            <div class="row Footer__1st-Row  ">
                <div class="Footer__1st-Row__1st-Col col-10 col-md-6 pl-5">
                    <div>
                        <h5>Hệ thống đào lập trình viên quốc tế SOFTECH APTECH </h5>
                        <P>địa chỉ tòa nhà VNPT, 38 Yên Bái, Quận Hải Châu, Thành phố Đà Nẵng </P>
                        <p>Điện thoại: 0236.3.799.799 - Fax: 0236.3.79.555</p>
                        <p>Email: tuyensinh@softech.vn</p>
                        <img src="https://github.com/namnh06/html-demo/blob/master/aptech-home-page/assets/images/banner-aptech.jpg?raw=true"
                            height=" 75px" width="50%" alt="">
                    </div>
                </div>
                <div class="Footer__1st-Row__2nd-Col col-md-3 d-none d-md-block">
                    <h5>Navigation</h5>
                    <ul class=" nav d-flex flex-column">
                        <li class=" nav-item"><a class=" nav-item text-muted" href="">Home </a></li>
                        <li class=" nav-item"><a class=" nav-item text-muted" href="">HTML </a></li>
                        <li class=" nav-item"><a class=" nav-item text-muted" href="">CSS </a></li>
                        <li class=" nav-item"><a class=" nav-item text-muted" href="">JAVASCRIPT </a></li>
                        <li class=" nav-item"><a class=" nav-item text-muted" href="">PHP </a></li>
                        <li class=" nav-item"><a class=" nav-item text-muted" href="">Contact </a></li>
                    </ul>
                </div>
                <div class="Footer__1st-Row__3th-Col col-2 col-md-3">
                    <div>
                        <h5>About</h5>
                        <ul class=" nav d-flex flex-column">
                            <li class=" nav-item"><a class=" nav-item text-muted" href="">Team </a></li>
                            <li class=" nav-item"><a class=" nav-item text-muted" href="">Location </a></li>
                            <li class=" nav-item"><a class=" nav-item text-muted" href="">Privacy </a></li>
                            <li class=" nav-item"><a class=" nav-item text-muted" href="">Terms </a></li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>

    <!--End Footer-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>