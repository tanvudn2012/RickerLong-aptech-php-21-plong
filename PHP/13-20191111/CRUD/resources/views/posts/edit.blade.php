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
            <h1 class="text-center text-secondary">DEMO Update an Post</h1>
            <div>
                <form method="POST" action="{{route('post.update',$post->id)}}">
                    <input type="hidden" value={{csrf_token()}} name="_token">
                    <input type="hidden" value="PUT" name="_method">
                    <div class="form-group">
                      <label for="">Title</label>
                      <input type="text" name="title" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">Please enter the title to edit</small>
                    </div>
                    <div class="form-group">
                      <label for="">Description</label>
                      <input type="text" name="description"  class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">Please enter the description to edit</small>
                    </div>
                    <div class="form-group">
                      <label for="">Content</label>
                      <textarea class="form-control" name="content" id="CKE" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            </div>
        </div>
    </div>
    <!-- <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replate('CKE');
    </script>  -->
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('CKE');
    </script>
  </body>
</html>