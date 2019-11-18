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
            <div class="col-12">
                <div>
                    <h1 class="text-center ">TanVu-Aptech-PHP21-Laravel</h1>
                </div>
                <form action="{{route('article.update',$article->id)}}" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                      <label for="">Title</label>
                      <input type="text" name="title" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                      <label for="">Description</label>
                      <input type="text" name="description" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <button type="submit" class="w-25 btn btn-primary">UPDATE</button>
                </form>
            </div>
        </div>
    </div>
    
  </body>
</html>