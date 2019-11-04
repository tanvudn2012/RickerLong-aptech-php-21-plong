<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
<title>Title</title>
</head>
<body >
    <div class=" container Header   " >
        <div class=" row Header__1st-Row">
            <div class=" col-12 Header__1st-Row__1st-Col text-center p-5">
                <img src="https://getbootstrap.com/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" height="72px" width="72px">
                <h2>Checkout form</h2>
                <p>Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a  state that can be triggered by attempting to submit the form without completing it.</p>
            </div>
        </div>
    </div>
    <div class=" container Section mb-5 ">
        <div class="row d-flex">
            <div class="col-8" >
                <h3 >Billing address</h3>
                <form action="">
                    <div class="row">
                        <div class=" col-6 d-flex flex-column">
                            <label for="">First name</label>
                            <input class=" form-control" type="text" name="" id="">
                        </div>
                        <div class=" col-6 d-flex flex-column">
                                <label for="">Last name</label>
                                <input class=" form-control" type="text" name="" id="">
                            </div>
                    </div>
                    <div class="row ">
                        <div class=" col-12 d-flex flex-column ">
                            <label for="">Username</label>
                            <input class=" form-control" type="text" placeholder="  Username">
                        </div>
                    </div>
                    <div class="row ">
                        <div class=" col-12 d-flex flex-column ">
                            <label for="">Email <span class=" text-secondary">(Optional)</span></label>
                            <input class=" form-control" type="text" placeholder=" you@example.com ">
                            
                        </div>
                    </div>
                    <div class="row ">
                        <div class=" col-12 d-flex flex-column ">
                            <label for=" ">Address</label>
                            <input class=" form-control" type="text" placeholder=" 1234 Main St ">
                        </div>
                    </div>
                    <div class="row ">
                        <div class=" col-12 d-flex flex-column ">
                            <label for="">Address 2<span class=" text-secondary">(Optional)</span></label>
                            <input class=" form-control" type="text" placeholder=" Apartment or suite">
                        </div>
                    </div>
                    <div class=" row d-flex ">
                        <div class=" col-5 d-flex flex-column">
                            <label for="">Country</label>
                            <select class=" custom-select d-block w-100">
                                <option value="">Choose...</option>
                                <option>United States</option>
                                <div class=" invalid-feedback">
                            </select>
                        </div>
                        <div class=" col-4 d-flex flex-column">
                            <label for="">State</label>
                            <select class=" custom-select" >
                                <option value="">Choose...</option>
                                <option >ádsadsad</option>
                            </select>
                        </div>
                        <div class=" col-3 d-flex flex-column ">
                            <label for="">Zip</label>
                            <input class=" form-control" type="text">
                        </div>
                    </div>
                    <hr class=" mt- mt-4">
                    <div class="row">
                        <div class=" col-12">
                            <input type="checkbox">
                            <label >Shipping address is the same as my billing address</label>
                        </div>
                        <div class=" col-12">
                            <input type="checkbox">
                            <label>Save this information for next time</label>
                        </div>
                    </div>
                    <hr>
                    <div class=" row ">
                        <div class=" col-12">
                            <h3>Payment</h3>
                        </div>
                        <div class=" col-12">
                            <input type="radio" name="" id="">
                            <label for=""> Credit card</label>
                        </div>
                        <div class=" col-12">
                            <input type="radio" name="" id="">
                            <label for=""> Debit card</label>
                        </div>
                        <div class=" col-12">
                            <input type="radio" name="" id="">
                            <label for=""> Debit card</label>
                        </div>
                    </div>
                    <div class=" row  d-flex">
                        <div class=" col-6 d-flex flex-column">
                            <label for="">Name on card</label>
                            <input class=" form-control "  type="text" name="" id="">
                            <small>Full name as displayed on cards</small>
                        </div>
                        <div class=" col-6 d-flex flex-column">
                            <label for="">Credit card number</label>
                            <input  class=" form-control " type="text" name="" id="">
                        </div>
                    </div>
                    <div class=" row mt-3 border-secondary ">
                        <div class=" col-6 d-flex ">
                            <div class=" d-flex flex-column ">
                                <label for="">Expiration</label>
                                <input  class=" form-control  w-75   " type="text" name="" id="">
                            </div>
                            <div class=" d-flex flex-column ">
                                <label for="">CVV</label>
                                <input  class=" form-control w-75    " type="text" name="" id="">
                            </div>
                        </div>
                        <div class=" col-6">

                        </div>
                    </div>
                    <div class=" row mt-5">
                        <div class="col-12">
                            <button class=" btn btn-primary btn-lg btn-block"> Continue to checkout</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class=" col-4  ">
                <div class=" d-flex justify-content-between ">
                            <h3 class=" text-secondary"> Your cart</h3>
                            <span class="badge badge-pill badge-secondary mt-1 ml-5 " style=" height: 25px ; font-size: 17px ;">3</span>
                </div>
                <div>
                    <ul class=" nav flex-column list-group">
                        <li class=" justify-content-between d-flex list-group-item">
                            <div class="">
                                <h6 class="  mb-0">Product name            </h6>
                                <small>Brief description</small>
                            </div>
                            <h6 class=" text-secondary ">$12</h6>
                        </li>
                        <li class=" justify-content-between d-flex list-group-item">
                            <div class=" ">
                                <h6 class= "mb-0 ">Second product
                                    </h6>
                                <small>Brief description</small>
                            </div>
                            <h6 class= " text-secondary">$8</h6>
                        </li>
                        <li class=" justify-content-between d-flex list-group-item">
                            <div class=" ">
                                <h6 class= "mb-0 ">Third item</h6>
                                <small>Brief description</small>
                            </div>
                            <h6 class=" text-secondary ">$5</h6>
                        </li>
                        <li class=" justify-content-between d-flex list-group-item">
                            <div class=" text-success">
                                <h6 class= "mb-0 ">Promo code</h6>
                                <small>Brief description</small>
                            </div>
                            <h6 class=" text-success ">-$5</h6>
                        </li>
                        <li class=" justify-content-between d-flex list-group-item">
                            <div class=" ">
                                <h6 class= "mb-0 ">Total (USD)
                                    </h6>
                                <small>Brief description</small>
                            </div>
                            <h6 class= " text-secondary">$20</h6>
                        </li>
                    </ul>
                </div>
                <div class=" border border-secondary rounded mt-3">
                    <form   method="" class="d-flex m-2">       
                        <input class=" form-control " type="text" place holder="Promo code" name="" id="">
                        <button class=" btn-secondary btn">Redeem</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <div class=" container Footer pt-5 pb-5">
        <div class="row">
            <div class=" col-12 text-center">
                <p class= " mb-0 text-secondary">© 2017-2019 Company Name</p>
                <a href="">Privacy</a>
                <a  class=" ml-2" href="">Terms</a>
                <a class=" ml-2"  href="">Support</a>
            </div>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>