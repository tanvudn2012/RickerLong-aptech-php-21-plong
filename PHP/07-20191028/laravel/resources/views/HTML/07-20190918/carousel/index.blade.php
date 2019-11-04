<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <title>Title</title>
</head>

<body>
    <div class=" Hader container-fluid bg-dark fixed-top ">
        <div class=" Hader__1st-Row row ">
            <div class="Hader__1st-Row__1st-Col col-9 align-items-center py-3">
                <ul class=" nav ">
                    <h5 class=" text-white">Carousel</h5>
                    <li class=" ml-3"><a class=" text-white">Home</a></li>
                    <li class=" ml-3"><a class=" text-secondary text-decoration-none" href="">Link</a></li>
                    <li class=" ml-3"><a>Disabled </a></li>
                </ul>
            </div>
            <div class=" Hader__1st-Row__2nd-Col col-3 ">
                <form class=" d-flex pt-2 ">
                    <input class=" form-control mr-sm-2" type="text" name="" id="">
                    <button class=" ml-2 btn btn-outline-success text-success">Search</button>
                </form>
            </div>
        </div>

    </div>


    <!--- Carousel-->


    <div class="Carousel bd-example container-fluid p-0 " style=" margin-top: 64px;">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://www.internship.edu.vn/wp-content/uploads/anhr-1.png " height="400px" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://www.internship.edu.vn/wp-content/uploads/anhr-1.png"height="400px"  class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://www.internship.edu.vn/wp-content/uploads/anhr-1.png" height="400px"  class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

                    <!--- End Carousel-->


                    <!-- Section-->
                    
    <div class=" Section container  " >
        <div class="Section__1st-Row row mt-5 ">
            <div class="Section__1st-Row__1st-Col col-12 col-md-4 ">
                <div class=" d-flex flex-column align-items-center card-deck">
                    <div class="  card-header bg-dark" style=" height: 100px; width: 100px; border-radius: 50%;">

                    </div>
                    <div class=" pt-0 text-center card-body">
                        <h1>Heading</h1>
                        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                        <a class=" btn btn-secondary " href="">View details >></a>
                    </div>
                </div>
            </div>
            <div class="Section__1st-Row__2nd-Col col-12 col-md-4 ">
                <div class=" d-flex flex-column align-items-center card-deck">
                    <div class="  card-header bg-dark" style=" height: 100px; width: 100px; border-radius: 50%;">

                    </div>
                    <div class=" pt-0 text-center card-body">
                        <h1>Heading</h1>
                        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                        <a class=" btn btn-secondary " href="">View details >></a>
                    </div>
                </div>
            </div>
            <div class="Section__1st-Row__3th-Col col-12 col-md-4">
                <div class=" d-flex flex-column align-items-center card-deck">
                    <div class="  card-header bg-dark" style=" height: 100px; width: 100px; border-radius: 50%;">

                    </div>
                    <div class=" pt-0 text-center card-body">
                        <h1>Heading</h1>
                        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                        <a class=" btn btn-secondary " href="">View details >></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="Section__2nd-Row row border-bottom border-secondary mt-5 mb-5">
        </div>
        <div class="row Section__3th-Row ">
            <div class="Section__3th-Row__1st-Col col-12 col-md-7 d-flex flex-column justify-content-center">
                <h1>First featurette heading. <span class=" text-secondary"> It’ll blow your mind.</span></h1>
                <p class=" text-muted">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p> 
            </div>
            <div class="Section__3th-Row__2nd-Col col-12 col-md-5">
                <img src="https://9mobi.vn/cf/images/2015/03/nkk/anh-dep-1.jpg" height=" 350px" width="100%" alt="">
            </div>
        </div>
        <div class="Section__4th-Row row border-bottom border-secondary mt-5 mb-5"></div>
        <div class="Section__5th-Row row row d-flex flex-row-reverse">
            <div class="Section__5th-Row__1st-Col col-12 col-md-7 d-flex flex-column justify-content-center">
                <h1>Oh yeah, it’s that good. <span class=" text-muted"> See for yourself.</span></h1>
                <p class=" text-muted">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p> 
            </div>
            <div class="Section__5th-Row__2st-Col col-12 col-md-5">
                <img src="https://9mobi.vn/cf/images/2015/03/nkk/anh-dep-1.jpg" height="350px" width="100%"  alt="">
            </div>
        </div>
        <div class="Section__6th-Row row border-bottom border-secondary mt-5 mb-5">
        </div>
        <div class="Section__7th-Row row">
            <div class="Section__7th-Row__1st-Col col-12 col-md-7 d-flex flex-column justify-content-center">
                <h1>And lastly, this one. <span class=" text-muted"> Checkmate. </span></h1>
                <p class=" text-muted">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p> 
            </div>
            <div class="Section__7th-Row__2nd-Col col-12 col-md-5">
                <img src="https://9mobi.vn/cf/images/2015/03/nkk/anh-dep-1.jpg" height=" 350px" width="100%" alt="">
            </div>
        </div>
        <div class="Section__8th-Row row border-bottom border-secondary mt-5 mb-5"></div>
    </div>

            <!-- End Section -->

    <div class="container">
        <div class="row">
            <div class="col-10">
                <ul  class=" nav d-flex">
                    <p>© 2017-2019 Company, Inc.</p>
                    <li class=" ml-3"><a href="">Privacy</a></li>
                    <li class=" ml-3"><a href="">Terms</a></li>
                </ul>
            </div>
            <div class=" col-2 pr-0">
                <a class=" float-right" href="">Back to top</a>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>