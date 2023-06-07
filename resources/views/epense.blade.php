<!DOCTYPE html>
<html lang="en">
<head>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav class="navbar bg-primary fixed-top">
        <div class="container-fluid">
          <span class="fw-bold">Welcom {{$mama->name}}</span>
          <button class="navbar-toggler bg-dark navbar-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href='/dashboard/{{$mama->id}}' >Home</a>
                </li>
                <li class="nav-item">
            <a href="/">      <button class="btn btn-danger">Logout</button></a>
                  </li>
                      <hr class="dropdown-divider">
             
                  </ul>
                </li>
              </ul>
            
            </div>
          </div>
        </div>
      </nav>
 
    <table class="table caption-top mt-5">
    
        <thead>
          <tr>
            <th scope="col"> <button class="navbar-toggler bg-dark navbar-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Add Expense</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="Add Expense">
                    <form method="POST" action="{{route('add')}}">
                      @csrf
                <div class="form-group">
                  <label class="m-3 " for="exampleInputEmail1">Name</label>
                  <input name="name"  style="width: 90%" type="name" class="form-control m-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                 
              <span style="color: red">@error('name')
                  {{$message}}
              @enderror
              </span>
              </div>
                <div class="form-group">
                  <label class="m-3" for="exampleInputPassword1">Type</label>
                  <input name="type" style="width: 90%"  type="text" class="form-control m-2" id="exampleInputPassword1" placeholder="Type">
                  <span style="color: red">@error('type')
                      {{$message}}
                  @enderror
                  </span>
              </div>
              
                <div class="form-group">
                  <label class="m-3" for="ticketNum">Price</label>
                  <input name="price" style="width: 90%"  id="ticketNum" type="number"  class="form-control m-2"  placeholder="Price">
                  <span style="color: red">@error('price')
                      {{$message}}
                  @enderror
                  </span>
              </div>
              <input type="text"  value="{{$mama->id}}" name="id" hidden>
                <button type="submit" class="btn btn-primary m-5">Submit</button>
              </form>
                </div>
                 </th>
            <th scope="col">Name</th>
            <th scope="col">Type</th>
            <th scope="col">Price</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($hama as $hama)
          <tr>
            <th scope="row">{{$hama->id}}</th>
            <td>{{$hama->name}}</td>
            <td>{{$hama->type}}</td>
            <td>{{$hama->price}}$</td>
          </tr>
          @endforeach
        
      </table>
</body>
</html>