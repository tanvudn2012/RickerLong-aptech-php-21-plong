<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
<title>Title</title>
</head>
<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
  <div class=" Header pos-f-t" id="Head">
    <div class="collapse bg-dark" id="Hiddenbar">
      <div class=" container bg-dark p-4">
        <div class="row">
          <div class="col-8">   
            <h4 class="text-white">About</h4>
            <span class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</span>
          </div>
          <div class="col-4 text-white">
            <h3>Contact</h3>
            <ul class=" nav d-flex flex-column ">
              <li><a class=" text-white" href="">asdasd</a> </li>
              <li><a class=" text-white" href="">asdasd</a></li>
              <li><a class=" text-white" href="">asdasd</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-dark bg-dark  ">
      <div class=" container">
          <div class="d-flex align-items-center">
            <i class="fas fa-camera"></i>
            <h3 class=" text-white ml-2">Album</h3>
          </div>
          <button id="Hide" class=" float-right btn btn-outline-secondary " type="button" >
            <span class=" float-right navbar-toggler-icon"></span>
          </button>
          <script>
            function hidemenu(){
            }

           $(document).ready(function(){
              $('#Hide').click(function(){
                var a = true;
                
                console.log(a=='#Hide')
                if(a==true){
                  $('#Hiddenbar').show();
                }else{
                  $('#Hiddenbar').hide(); 
                }
              })
            });
          </script>   
      </div>
    </nav>
    <div class="container Albumexample ">
      <div class=" row"> 
        <div class="col-2">
          
        </div>
        <div class="col-8 text-center mt-5 mb-5" >
          <div class=" p-5">
            <h1>Album example</h1>
            <p class=" text-secondary">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
            <div>
              <a class="btn btn-primary" href="">Main call to action</a>
              <a class="btn btn-secondary" href="">Main call to action</a>
            </div>
          </div>
        </div>
        <div class="col-2">
          
        </div>
      </div>
    </div>
  </div>
  <div class="Section bg-light">
    <div class=" container Section__Box pt-5 pb-5 ">
      <div class=" Section__Box__1st-Row row">
        <div class=" col-4 ">
          <div class=" card"> 
              <img class="card-img-top" src="http://www.haihaylam.com/data/upload/040b-1520333040-.jpg" alt="Card image cap">
            <div class=" card-body">
              <p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="">
                <a class=" btn btn-outline-secondary"  href="">View</a>
                <a class=" btn btn-outline-secondary" style=" margin-left:-6px; border-left: none; border-top-left-radius: none" href="">Edit</a>
                <small class="text-muted float-right mt-2 " >9mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class=" col-4 ">
          <div class=" card"> 
              <img class="card-img-top" src="http://www.haihaylam.com/data/upload/040b-1520333040-.jpg" alt="Card image cap">
            <div class=" card-body">
              <p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="">
                <a class=" btn btn-outline-secondary"  href="">View</a>
                <a class=" btn btn-outline-secondary" style=" margin-left:-6px; border-left: none; border-top-left-radius: none" href="">Edit</a>
                <small class="text-muted float-right mt-2 " >9mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class=" col-4 ">
          <div class=" card"> 
              <img class="card-img-top" src="http://www.haihaylam.com/data/upload/040b-1520333040-.jpg" alt="Card image cap">
            <div class=" card-body">
              <p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="">
                <a class=" btn btn-outline-secondary"  href="">View</a>
                <a class=" btn btn-outline-secondary" style=" margin-left:-6px; border-left: none; border-top-left-radius: none" href="">Edit</a>
                <small class="text-muted float-right mt-2 " >9mins</small>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=" Section__Box__2nd-Row row">
        <div class=" col-4 ">
          <div class=" card"> 
              <img class="card-img-top" src="http://www.haihaylam.com/data/upload/040b-1520333040-.jpg" alt="Card image cap">
            <div class=" card-body">
              <p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="">
                <a class=" btn btn-outline-secondary"  href="">View</a>
                <a class=" btn btn-outline-secondary" style=" margin-left:-6px; border-left: none; border-top-left-radius: none" href="">Edit</a>
                <small class="text-muted float-right mt-2 " >9mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class=" col-4 ">
          <div class=" card"> 
              <img class="card-img-top" src="http://www.haihaylam.com/data/upload/040b-1520333040-.jpg" alt="Card image cap">
            <div class=" card-body">
              <p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="">
                <a class=" btn btn-outline-secondary"  href="">View</a>
                <a class=" btn btn-outline-secondary" style=" margin-left:-6px; border-left: none; border-top-left-radius: none" href="">Edit</a>
                <small class="text-muted float-right mt-2 " >9mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class=" col-4 ">
          <div class=" card"> 
              <img class="card-img-top" src="http://www.haihaylam.com/data/upload/040b-1520333040-.jpg" alt="Card image cap">
            <div class=" card-body">
              <p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="">
                <a class=" btn btn-outline-secondary"  href="">View</a>
                <a class=" btn btn-outline-secondary" style=" margin-left:-6px; border-left: none; border-top-left-radius: none" href="">Edit</a>
                <small class="text-muted float-right mt-2 " >9mins</small>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=" Section__Box__3th-Row row">
        <div class=" col-4 ">
          <div class=" card"> 
              <img class="card-img-top" src="http://www.haihaylam.com/data/upload/040b-1520333040-.jpg" alt="Card image cap">
            <div class=" card-body">
              <p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="">
                <a class=" btn btn-outline-secondary"  href="">View</a>
                <a class=" btn btn-outline-secondary" style=" margin-left:-6px; border-left: none; border-top-left-radius: none" href="">Edit</a>
                <small class="text-muted float-right mt-2 " >9mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class=" col-4 ">
          <div class=" card"> 
              <img class="card-img-top" src="http://www.haihaylam.com/data/upload/040b-1520333040-.jpg" alt="Card image cap">
            <div class=" card-body">
              <p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="">
                <a class=" btn btn-outline-secondary"  href="">View</a>
                <a class=" btn btn-outline-secondary" style=" margin-left:-6px; border-left: none; border-top-left-radius: none" href="">Edit</a>
                <small class="text-muted float-right mt-2 " >9mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class=" col-4 ">
          <div class=" card"> 
              <img class="card-img-top" src="http://www.haihaylam.com/data/upload/040b-1520333040-.jpg" alt="Card image cap">
            <div class=" card-body">
              <p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="">
                <a class=" btn btn-outline-secondary"  href="">View</a>
                <a class=" btn btn-outline-secondary" style=" margin-left:-6px; border-left: none; border-top-left-radius: none" href="">Edit</a>
                <small class="text-muted float-right mt-2 " >9mins</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 <div class="Footer container mt-5 mb-5">
  <div class="row">
    <div class="col-8">
      <p class=" text-secondary">Album example is © Bootstrap, but please download and customize it for yourself!</p>
      <p class=" text-secondary"> New to Bootstrap? <a href=""> Visit the homepage</a> or read our <a href="">getting started guide.</a> </p>
    </div>
    <div class="col-4 d-flex justify-content-end">
      <a href="#Head">Back to top</a>
    </div>
  </div>
 </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
