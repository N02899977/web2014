<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">Fit Track</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="profile"><a href="profile.html">Profile</a></li>
        <li class="fitness"><a href="fitness.html">Fitness</a></li>
        <li class="diet"><a href="diet.html">Diet</a></li>
        <li class="goals"><a href="goals.html">Goals</a></li>
      </ul>
      
      <form class="navbar-form navbar-right" role="search">
        	<button id="login" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" href="login.html">
			  Sign in
			</button>
      		<i style="font-style: normal;"> or </i>
      		<a href="signup.html">Sign up</a>
	  </form>
	  
      <form class="navbar-form navbar-right" role="search">
        <div class="input-group add-on">
	      <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
	      <div class="input-group-btn">
	        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
	      </div>
	    </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Report a Problem</a></li>
            <li><a href="#">Help</a></li>
            <li class="divider"></li>
            <li><a href="#">Log Out</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>