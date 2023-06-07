<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>iPortfolio Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="stylesheet" href="bower_components/aos/dist/aos.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="bower_components/aos/dist/aos.js"></script>
  <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
  <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
  <!-- Favicons -->

<script
type="text/javascript"
src="C:\xampp\htdocs\pxpx\resources\assets\vendor\bootstrap\js"></script>

<!-- MDB -->
<script>
  
  $(document).ready(function(){
      $(".dropdown").hover(function(){
          var dropdownMenu = $(this).children(".dropdown-menu");
          if(dropdownMenu.is(":visible")){
              dropdownMenu.parent().toggleClass("open");
          }
      });
  });     
  </script>
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
  rel="stylesheet"
/>

 <!-- Template Main CSS File -->
 <link href="/assets/css/main.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
  <script
  type="text/javascript"
  src="C:\xampp\htdocs\pxpx\resources\js\main.js"></script>
  <style>
    .search {
  position: absolute;
 left:47.5%;
 top: 10%;
  
  -webkit-transform: translateX(-50%) translateY(-50%);
          transform: translateX(-50%) translateY(-50%);
}
.search * {
  outline: none;
  box-sizing: border-box;
}
.search__wrapper {
  position: relative;
}
.search__field {
  width: 50px;
  height: 50px;
  color: transparent;
  font-family: Lato, sans-serif;
  font-size: 1.35em;
  padding: 0.35em 50px 0.35em 0;
  border: 1px solid transparent;
  border-radius: 0;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
}
.search__field:focus {
  border-bottom-color:none;
  width: 50vw;
  color: #2b2b2b;
  cursor: default;
}
.search__field:focus ~ .search__icon {
  background-color: transparent;
  cursor: pointer;
  pointer-events: auto;
}
.search__icon {
  position: absolute;
  top: 0;
  right: 0;
  background-color:none;
  width: 50px;
  height: 50px;
  font-size: 1.35em;
  text-align: center;
  border-color: transparent;
  border-radius: 50%;
  pointer-events: none;
  display: inline-block;
  transition: background-color 0.2s ease-in-out;
}
.search__field::-webkit-input-placeholder {
  position: relative;
  top: 0;
  left: 0;
  transition-property: top, color;
  transition-duration: .1s;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-perspective: 1000;
  perspective: 1000;
}
.search__field:-moz-placeholder {
  position: relative;
  top: 0;
  left: 0;
  transition-property: top, color;
  transition-duration: .1s;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-perspective: 1000;
  perspective: 1000;
}
.search__field::-moz-placeholder {
  position: relative;
  top: 0;
  left: 0;
  transition-property: top, color;
  transition-duration: .1s;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-perspective: 1000;
  perspective: 1000;
}
.search__field:-ms-input-placeholder {
  position: relative;
  top: 0;
  left: 0;
  transition-property: top, color;
  transition-duration: .1s;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-perspective: 1000;
  perspective: 1000;
}
.search__field::-webkit-input-placeholder[style*=hidden] {
  color: none
  font-size: .65em;
  font-weight: normal;
  top: -20px;
  opacity: 1;
  visibility: visible !important;
}
.search__field:-moz-placeholder[style*=hidden] {
  color: none;
  font-size: .65em;
  font-weight: normal;
  top: -20px;
  opacity: 1;
  visibility: visible !important;
}
.search__field::-moz-placeholder[style*=hidden] {
  color:none;
  font-size: .65em;
  font-weight: normal;
  top: -20px;
  opacity: 1;
  visibility: visible !important;
}
.search__field:-ms-input-placeholder[style*=hidden] {
  color: none;
  font-size: .65em;
  font-weight: normal;
  top: -20px;
  opacity: 1;
  visibility: visible !important;
}
    body{
background:none;
}
.form-control-borderless {
    border: none;
}

.form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
    border: none;
    outline: none;
    box-shadow: none;
}
.dropdown:hover .dropdown-menu{
        display: block;
    }
    .dropdown-menu{
        margin-top: 0;
    }
.hiddenText {
      display: none;
   }
   .hoverDiv:hover + .hiddenText {
      display: block;
      color: rgb(71, 0, 65);
      font-size: 22px;
      font-weight: bold;
   }
  </style>
</head>
<body style="">
  <script>
    AOS.init();
    </script>
   
 

<nav style="background: #E44D26;  /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #F16529, #E44D26);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #F16529, #E44D26); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
" class="navbar bg-sunny-morning-gradient color-block fixed-top">
    <div class="container-fluid ">
      <span class="fw-bold text-white">Welcom {{$hama->name}}</span>
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
              <a class="nav-link active" aria-current="page" href='/dashboard/{{$hama->id}}' >Home</a>
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
  
  
  <div class="container-fluid mt-3 data-aos="fade-up" >
    
    <button class="btn fw-bold " style="margin-top:10%;font-size:13px;background: #FFAFBD;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to left, #ffc3a0, #FFAFBD);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to left, #ffc3a0, #FFAFBD); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasForm" aria-controls="offcanvasNavbar">
  Add post
    </button>
    <div class="offcanvas offcanvas-top "style="height:50%" tabindex="-1" id="offcanvasForm" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Welcom</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <form method="POST" action="{{route('addpost')}}">
          @csrf
    <div class="form-group">
      <label class="m-3 " for="exampleInputEmail1">Title</label>
      <input name="title"  style="width: 90%" type="text" class="form-control m-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
      <small id="emailHelp" class="form-text text-muted m-2">We'll never share your email with anyone else.</small>
  <span style="color: red">@error('name')
      {{$message}}
  @enderror
  </span>
 <input name="naw" value={{$hama->name}} hidden type="text">
 <input name="index" value={{$hama->id}} hidden type="text">
    <button type="submit" class="btn btn-primary m-5">Submit</button>         <button type="button" class="btn btn-danger" data-bs-dismiss="offcanvas" aria-label="Close">Exit</button>
  </form>
      
      </div>
    </div>
  </div>
  <form>
  <div style="margin-top:10%;" class="input-group">
    <input style="border:none; border-bottom:solid 1px black; border-left:solid 1px black;" value="@php if($search){echo $search;} @endphp"  name="search" type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
    <button  type="submit" class="btn btn-info rounded ms-2"  data-mdb-ripple-color="dark">search</button>
  </div> 
</form>
<div>
<span class="fs-5 ms-1 text-primary">Your post</span>
@if($noty=='yes')
<span style="font-size: 10px;height:40px;" class="card shadow   text-center ">No post yet</span>
@endif

@foreach ($taibat as $taibat)


  <div  class="card  rounded-5 mb-3">
    <div class="card-header text-start ps-5 fs-3 fw-bold text-primary  ">
    <span>{{$taibat->name}}</span>
    </div>
    <div class="card-body">
      <h5 class="card-title">{{$taibat->title}}</h5>
  </div>
  

@endforeach

</div>
<span class="fs-5 ms-1 text-primary">Another post</span>
@if ($noresult=="yes")
<span style="position: relative; left:30%" class="fs-5 ms-5 text-danger alert alert-danger">No result</span>
@endif
 @foreach ($lokk as $lokk)
  <div class="card " data-aos="fade-up"  data-aos-delay="300">
    <div class="card-header  rounded-5 text-start ps-5 fs-3 fw-bold">
    <span>{{$lokk->name}}</span>
    </div>
    <div class="card-body" >
   
      <div class="col-xl-3 col-md-6" >
        {{$lokk->name}}
        <div class="icon-box">
          {{$lokk->title}}
          <div class="icon"><i class="bi bi-gem"></i></div>
       
        </div>
      </div>
      @if(in_array($hama->id, $lokk->fav))
        <a  href="/del/{{$lokk->id}}/{{$hama->id}}">  <svg  onClick="window.location.reload()" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-balloon-heart-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M8.49 10.92C19.412 3.382 11.28-2.387 8 .986 4.719-2.387-3.413 3.382 7.51 10.92l-.234.468a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2.376 2.376 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224l-.235-.468ZM6.726 1.269c-1.167-.61-2.8-.142-3.454 1.135-.237.463-.36 1.08-.202 1.85.055.27.467.197.527-.071.285-1.256 1.177-2.462 2.989-2.528.234-.008.348-.278.14-.386Z"/>
        </svg></a>  
      
        
              @else
                <a href="/fav/{{$lokk->id}}/{{$hama->id}}" class="btn btn-primary">  <svg  onClick="window.location.reload()" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-balloon-heart" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721L8 2.42Zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063.045.041.089.084.132.129.043-.045.087-.088.132-.129 3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3.177 3.177 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398Z"/>
      </svg> </a>
          @endif
          <span class="nav-item dropdown">{{$lokk->zhmara}}
   
      <div class="dropdown-menu text-center fw-bold">
      @if (count($lokk->fav) != 0)
      @for ($j = 0; $j < count($a); $j++)
@for ($i = 0; $i < count($lokk['fav']); $i++)
  @if ($a[$j]['id']==$lokk['fav'][$i])
  
  {{$a[$j]['name']}} <br/>
  @endif
 
@endfor
@endfor


@else
<span></span>
@endif
@if ($lokk->zhmara==0)
    <span>None</span>
@endif
  </div>
    </div>
  
    @if (count($lokk->coment) != 0)
    <div class="text-center" style="width: 100%;">
    <button style="width: 25%;background: #F7971E;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to left, #FFD200, #F7971E);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to left, #FFD200, #F7971E); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    " class="btn" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
      <svg style="width: 50%" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-down" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
      </svg>
     </button>
     
    <br/>
    </div>
    
     @foreach (array_combine($lokk->coment, $lokk->comentuid) as $code => $name)
     
   
    <ol style="width: 100%" id="collapseExample" class="list-group list-group-light list-group">
      <li  class="list-group-item d-flex justify-content-between align-items-start">
        <div  style="width:100%"class="ms-2 ">
          <div class="fw-bold fs-4">Comment</div>
         <span style="font-size: 10px" class="fw-bold   border-bottom" style="align-items: center;margin-left:5%;"> 
        @if ($name==$hama->name)
            
      You :{{$code}} @else {{$name}}   :{{$code}} 
         @endif
        </span>
        </div>
      </li>
    </ol>
    
    @endforeach
     @endif 
     <div style="width:50%;height:50px" class="form-outline border border-1 mb-1 ms-2 rounded text-center ">
 <form method="POST" action="{{route('addcoment')}}">
  @csrf
  <input hidden name="id" type="text" value={{$lokk->id}}>
  <input hidden name="name" type="text" value={{$hama->name}}>
    <input name="coment" type="text"  id="typeText" class="form-control" />
    <label style="border:none" class="form-label" for="typeText">Comment</label>
    <div style="position: relative;bottom:30px;left:80%"> <button type="submit" class="btn btn-primary">Add</button></div>
 </form>
</div>  
 
  @endforeach 
</span>



</body>
</html>