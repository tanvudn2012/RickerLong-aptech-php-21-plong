<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
    <div class="row">
      <div class="col">
        <table class="table ">
          <thead class="thead-inverse">
            <tr>
                <th class="border">Id</th>
                <th class="border">Name</th>
                <th class="border">Email</th>
                <th class="border">Password</th>
                <th class="border">Role</th>
                <th class="border">Active</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $row)
                <tr>
                    <td class="border">{{$row -> id}}</td>
                    <td class="border">{{$row -> name}}</td>
                    <td class="border">{{$row -> email}}</td>
                    <td class="border">{{$row -> password}}</td>
                    <td class="border">{{$row ->Role->role}}</td>
                    <td class="border d-flex">
                      <form class="m-auto" action="http://localhost:8000/{{$row->id}}" method="GET">
                        <button type="submit" class="btn btn-primary">Show</button>
                      </form>
                      <form class="m-auto" action="{{ asset('/'.$row->id.'/edit')}}" method="GET">
                        <button type="submit" class="btn btn-warning">Edit</button>
                      </form>
                      <form class="m-auto" action="http://localhost:8000/{{$row->id}}" method="POST">
                        <input type="hidden" name="_token" value={{csrf_token()}}>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-primary">Delete</button>
                      </form>
                    </td>
                </tr>
            @endforeach
          </tbody>
        </table>
        <form class="d-flex justify-content-end" action="{{asset('/create'  )}}" method="GET">
          <button type="submit" class="btn btn-primary">CREATE AN USER</button>
        </form>
      </div>
    </div>
  </div>
  
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>