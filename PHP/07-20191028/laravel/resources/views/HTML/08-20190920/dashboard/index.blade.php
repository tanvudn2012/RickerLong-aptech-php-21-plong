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
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <div class=" Header container-fluid bg-dark fixed-top ">
        <div class="row  ">
            <div class="col-2  py-1 d-flex flex-column justify-content-center " style=" background-color: #000;">
                <a class="text-decoration-none text-white " href="#">Company name</a>
            </div>
            <div class="col-10  py-1 pl-0">
                <form action="" class="  d-flex">
                    <input class=" w-100 pl-3 form-control-range " type="text" placeholder="Seach" name="" id="">
                    <a class=" nav-link text-nowrap text-secondary" href="">Sign out</a>
                </form>
            </div>
        </div>
    </div>

                        <!-- End Header-->

    <div class="container-fluid " style=" padding-top: 48px">
        <div class="row ">
            <div class="col-2 bg-light border-right border-secondary pl-0 sticky-top  " >
                <ul class=" nav flex-column">
                    <li class=" nav-item">
                        <a class=" nav-link text-decoration-none " href="#"><i class="fas fa-home text-primary  "></i>
                            <small class="font-weight-bold text-primary">Dashboard</small></a>
                    </li>
                    <li class=" nav-item">
                        <a class=" nav-link text-decoration-none text-secondary" href="#"><i
                                class="far fa-sticky-note"></i> <small
                                class="font-weight-bold text-dark">Orders</small></a>
                    </li>
                    <li class=" nav-item">
                        <a class=" nav-link text-decoration-none text-secondary" href="#"><i
                                class="fas fa-shopping-cart"></i> <small
                                class="font-weight-bold text-dark">Products</small></a>
                    </li>
                    <li class=" nav-item">
                        <a class=" nav-link text-decoration-none text-secondary" href="#"><i
                                class="fas fa-user-friends"></i> <small
                                class="font-weight-bold text-dark">Customers</small></a>
                    </li>
                    <li class=" nav-item">
                        <a class=" nav-link text-decoration-none text-secondary" href="#"><i
                                class="fas fa-chart-bar"></i> <small
                                class="font-weight-bold text-dark">Reports</small></a>
                    </li>
                    <li class=" nav-item">
                        <a class=" nav-link text-decoration-none text-secondary" href="#"><i class="fab fa-codepen"></i>
                            <small class="font-weight-bold text-dark">Integrations</small></a>
                    </li>
                </ul>
                <div class=" p-3">
                    <small class=" font-weight-bold text-muted">SAVED REPORTS</small>
                    <i class=" pt-1 float-right far fa-plus-square"></i>
                </div>
                <ul class=" nav flex-column">
                    <li class=" nav-item">
                        <a class=" nav-link text-decoration-none text-secondary" href="#"><i
                                class="far fa-newspaper"></i> <small class="font-weight-bold text-dark">Curren
                                month</small></a>
                    </li>
                    <li class=" nav-item">
                        <a class=" nav-link text-decoration-none text-secondary" href="#"><i
                                class="far fa-newspaper"></i> <small class="font-weight-bold text-dark">Last
                                quarter</small></a>
                    </li>
                    <li class=" nav-item">
                        <a class=" nav-link text-decoration-none text-secondary" href="#"><i
                                class="far fa-newspaper"></i> <small class="font-weight-bold text-dark">Social
                                engagement</small></a>
                    </li>
                    <li class=" nav-item">
                        <a class=" nav-link text-decoration-none text-secondary" href="#"><i
                                class="far fa-newspaper"></i> <small class="font-weight-bold text-dark">Year-end
                                sale</small></a>
                    </li>
                </ul>
            </div>
            <div class="col-10 bg-white ">
                <div class=" pt-3" style=" height: 50px;">
                    <div class=" float-left">
                        <h2>Drashboard</h2>
                    </div>
                    <div class=" float-right">
                        <button class=" btn btn-outline-secondary">Share</button>
                        <button class=" btn btn-outline-secondary">Export</button>
                        <button class=" btn btn-outline-secondary"><i class="far fa-calendar-alt"></i> This week <i
                        class="fas fa-caret-down"></i></button>
                    </div>
                </div>
                <hr>
                <div class=" Char">
                    <canvas id="myChart"></canvas>
                    <script>
                        var ctx = document.getElementById('myChart').getContext('2d');
                        var myChart = new Chart(ctx, {
                            type: 'line',
                            data: {
                                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                                datasets: [{
                                    label: '# of Votes',
                                    data: [12, 19, 3, 5, 2, 3],
                                    backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(255, 206, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(153, 102, 255, 0.2)',
                                        'rgba(255, 159, 64, 0.2)'
                                    ],
                                    borderColor: [
                                        'rgba(255, 99, 132, 1)',
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 206, 86, 1)',
                                        'rgba(75, 192, 192, 1)',
                                        'rgba(153, 102, 255, 1)',
                                        'rgba(255, 159, 64, 1)'
                                    ],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true
                                        }
                                    }]
                                }
                            }
                        });
                        </script>
                </div>
                <div class=" Table mt-3 " >
                    <h2>Section title</h2>
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Header</th>
                            <th scope="col">Header</th>
                            <th scope="col">Header</th>
                            <th scope="col">Header</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Lorem</td>
                            <td>ipsum</td>
                            <td>dolor</td>
                            <td>sit</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>amet</td>
                            <td>consectetur	</td>
                            <td>adipiscing	</td>
                            <td>elit</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Integer	</td>
                            <td>nec</td>
                            <td>odio</td>
                            <td>Praesent</td>
                          </tr>
                          <tr>
                            <th scope="row">1</th>
                            <td>Lorem</td>
                            <td>ipsum</td>
                            <td>dolor</td>
                            <td>sit</td>
                          </tr>
                          <tr>
                            <th scope="row">1</th>
                            <td>Lorem</td>
                            <td>ipsum</td>
                            <td>dolor</td>
                            <td>sit</td>
                          </tr>
                          <tr>
                            <th scope="row">1</th>
                            <td>Lorem</td>
                            <td>ipsum</td>
                            <td>dolor</td>
                            <td>sit</td>
                          </tr>
                          <tr>
                            <th scope="row">1</th>
                            <td>Lorem</td>
                            <td>ipsum</td>
                            <td>dolor</td>
                            <td>sit</td>
                          </tr>
                          <tr>
                            <th scope="row">1</th>
                            <td>Lorem</td>
                            <td>ipsum</td>
                            <td>dolor</td>
                            <td>sit</td>
                          </tr>
                          <tr>
                            <th scope="row">1</th>
                            <td>Lorem</td>
                            <td>ipsum</td>
                            <td>dolor</td>
                            <td>sit</td>
                          </tr>
                          <tr>
                            <th scope="row">1</th>
                            <td>Lorem</td>
                            <td>ipsum</td>
                            <td>dolor</td>
                            <td>sit</td>
                          </tr>
                          <tr>
                            <th scope="row">1</th>
                            <td>Lorem</td>
                            <td>ipsum</td>
                            <td>dolor</td>
                            <td>sit</td>
                          </tr>
                          <tr>
                            <th scope="row">1</th>
                            <td>Lorem</td>
                            <td>ipsum</td>
                            <td>dolor</td>
                            <td>sit</td>
                          </tr>

                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>


    <!-- End Header-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
</body>

</html>
