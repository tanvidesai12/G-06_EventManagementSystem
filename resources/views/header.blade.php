<head>
<style type="text/css">
.navbar-custom{

			background-color: #25003e /*#00CED1*/;
			opacity: 0.8;			
		
	}
.nav-link{
		color: black;
		font-size: 18px;

	}
	.font-size{
		font-size: 20px;
		color:white;
	}
	
	</style>
<nav class="navbar navbar-custom  navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="#">Event 365</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index">HOME <span class="sr-only">(current)</span></a>
      </li>
      @if(session()->has('user') && (session()->get('usertype')==='customer'))
      <li class="nav-item">
        <a class="nav-link" href="booking_details">BOOK NOW</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="view_bookings" >VIEW BOOKINGS</a>
      </li>
	  <li class="nav-item">
       <div class="dropdown">
  <button class="btn dropdown-toggle nav-link" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   OTHER SERVICES
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="music">Music</a>
    <a class="dropdown-item" href="#">Deco</a>
  </div>
</div>
      </li>
	  
      @endif
	  <li class="nav-item">
        <a class="nav-link" href="contact_us" >CONTACT US</a>
      </li>
      
      <!--<li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li> -->
    </ul>
   <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>-->
	<form class="form-inline my-2 my-lg-0">
    @if(session()->has('user'))
    <a href="logout" class="btn btn-sm  font-weight-bold pr-5 font-size"> <i class="fa fa-user" style="color:#fff;"></i> SIGN OUT </a>
    @else
      <a href="login" class="btn btn-sm  font-weight-bold pr-5 font-size"> <i class="fa fa-user" style="color:#fff;"></i> SIGN IN</a>
    @endif
  </form>
  </div>
</nav>
</head>