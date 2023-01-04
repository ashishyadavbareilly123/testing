<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<p>hello Ashish</p>
<p>hello Ashish</p>
<p>hello Ashish3 How are you</p>

<div class="container">
  <h2>Edit Form</h2>
  <form action="{{url('edit-save')}}" method = "post">
    @csrf
    <div class="form-group">
      <label for="email">Title:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter title" name="title" value = "{{$post_detail->title}}">
      <input type="hidden" class="form-control" id="email" placeholder="Enter title" name="hidden_post_id" value = "{{$post_detail->id}}">
    </div>
    <div class="form-group">
      <label for="pwd">Body:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter text" name="body" value = "{{$post_detail->body}}">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
