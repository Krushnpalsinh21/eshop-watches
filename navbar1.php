
	<nav id="nav" class="navbar navbar-expand-sm navbar-expand-md navbar-expand-lg fixed-top ">
		  	<a class="navbar-brand" href="index.php"><img src="images/lo.png" alt="logo" style="width:110px "></a>
		 		 <button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		   			 <i class="fa fa-bars" aria-hidden="true" style="color: white; "></i>
		  		</button>
		 <div class="collapse navbar-collapse" id="collapsibleNavbar">
		    <ul id="mes" class="navbar-nav">
				     <li class="li" class="nav-item">
				        <a class="nav-link" href="news.php" style="color: white;">NEWS</a>
				     </li>
				     <li class="li" class="nav-item">
				        <a class="nav-link" href="watches.php"  style="color: white;"  >WATCHES</a>
				     </li>
				     <li class="li" class="nav-item">
				        <a class="nav-link" href="classic.php"  style="color: white;" >CLASSIC</a>
				     </li> 
				     <li class="li" class="nav-item">
						<a class="nav-link" href="straps.php"  style="color: white;"  >WATCH STRAPS</a>
				     </li>
		      
		    </ul>

		    <ul class="navbar-nav ml-auto">

				     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="color: white;" ><i class="fa fa-user" aria-hidden="true"></i>
       Profile
      </a>
      <div id="drop" class="dropdown-menu">
        <a class="dropdown-item" href="profileupdate.php" style="color: white;"> Update Profile</a>
        <?php
        if ($_SESSION['admin']==1) {
        	?>
        	 <a class="dropdown-item" href="productss.php" style="color: white;"> Products</a>
        	 <?php
        }
        ?>
         <a class="dropdown-item" href="buynow.php" style="color: white;">Cart</a>

		 <a class="dropdown-item" href="admin/login.php" style="color: white;">Admin login</a>
        
        <a class="dropdown-item" href="loggout.php" style="color: white;">Log Out</a>
       
       
      </div>
    </li>
		    </ul>
		 </div>  
	</nav>
