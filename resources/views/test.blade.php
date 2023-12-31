<!DOCTYPE html>
<html lang="en">
<head>
  <title>Image Upload</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

  <div class="row justify-content-center ">
    <div class="col-sm-6 mt-4">
      <div class="card p-4">
        <form method="POST" action="/upload-image" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label>Image</label>
            <input type="file" name="profile"  class="form-control" />
          </div> 
           <button type="submit" class="btn btn-success">Upload</button>
        </form>
      </div>
    </div>
  </div>

  <div class="row">
    @foreach($images as $image)
    <img class="img-thumbnail" src="{{asset('storage/image/'. $image->name)}}">
    <div class="col-sm-6">
    </div>
    @endforeach
  </div>



</body>
</html>
