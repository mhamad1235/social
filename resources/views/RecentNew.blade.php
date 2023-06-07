<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    @foreach ($post as $post)

    <div  class="card  rounded-5 mb-3">
      <div class="card-header text-start ps-5 fs-3 fw-bold text-primary  ">
      <span>{{$post->name}}</span>
      </div>
      <div class="card-body">
        <h5 class="card-title">{{$post->title}}</h5>
    </div>
    
  
  @endforeach
</body>
</html>