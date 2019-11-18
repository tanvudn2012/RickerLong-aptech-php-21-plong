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
                <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th class="text-center" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($articles as $article)
                    <tr>
                        <td scope="row">{{$article->title}}</td>
                        <td>{{$article->description}}</td>
                        <td class="d-flex ">
                            <form action="{{route('article.show',$article->id)}}" method="GET">
                                <button type="submit" class="btn btn-primary">SHOW</button>
                            </form>
                            <form action="{{route('article.edit',$article->id)}}" method="GET">
                                <button type="submit" class="btn btn-warning">EDIT</button>
                            </form>
                            <form action="{{route('article.show',$article->id)}}" method="POST">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger">DELETE</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                </table>
                <DIV>
                    <a class="btn btn-secondary float-right" href="{{route('article.create')}}">Create an Post</a>
                </div>
            </div>
        </div>
    </div>
    
  </body>
</html>