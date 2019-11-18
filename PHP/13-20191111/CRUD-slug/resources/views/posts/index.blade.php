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
                <h1 class="text-center text-secondary">DEMO Show all Post</h1>
                <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Content</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <th scope="row">{{$post->id}}</th>
                        <td>{{$post->title}}</td>
                        <td>{{$post->description}}</td>
                        <td>{{$post->content}}</td>
                        <td class="d-flex ">
                            <form action="{{route('post.show',$post->slug)}}" method="GET">
                                <button type="submit" class="btn btn-primary">SHOW</button>
                            </form>
                            <form class="ml-1" action="{{route('post.edit',$post->id,$post->title)}}" method="GET">
                                <button typep="submit" class="btn btn-warning">Edit</button>
                            </form>
                            <form class="ml-1" action="{{route('post.destroy',$post->id)}}" method="POST">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-warning">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                </table>
                <div class="row">
                    <div class="col-12">
                        <a class="btn btn-secondary float-right" href="{{route('post.create')}}">Create an Post</a>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    
  </body>
</html>