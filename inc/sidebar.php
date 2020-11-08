<div class="sidebar" data-background-color="white" data-active-color="primary">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

<div class="sidebar-wrapper">
      <div class="logo">
        <a href="#" class="simple-text">
		<img src="assets/img/logo.gif" />
         <strong> FAWE </strong> Zanzibar
        </a>
      </div>

<ul class="nav">
        <li <?php if($_SESSION['active']=="home"){ echo 'class="active"'; } ?>>
          <a href="dashboard.php">
            <i class="fa fa-dashboard"></i>
            <p>Dashboard</p>
          </a>
        </li>
			 
		
		
        <li <?php if($_SESSION['active']=="members-add" || $_SESSION['active']=="members-view" ){ echo 'class="active"'; } ?>> 
          <a  href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i class="fa fa-users"></i>
            <p>Members</p>
          </a>
		   <ul <?php if($_SESSION['active']=="members-add" || $_SESSION['active']=="members-view"){ echo 'class=" list-unstyled nav2"'; }else{ echo 'class="collapse list-unstyled nav2"'; } ?> id="homeSubmenu">
                <li <?php if($_SESSION['active']=="members-add"){ echo 'class="active-drop" '; } ?>>
					<p><a href="add_member.php">Add Member  <i class="fa fa-user"></i></a></p>
                </li> 
				<li <?php if($_SESSION['active']=="members-view"){ echo 'class="active-drop" '; } ?>>
					<p><a href="members.php">View Members  <i class="fa fa-eye"></i></a></p>
                </li> 
				
            </ul>
        </li>
		<li <?php if($_SESSION['active']=="branch"){ echo 'class="active"'; } ?>>
          <a href="branch.php">
            <i class="fa fa-building"></i>
            <p>Branch</p>
          </a>
        </li>
		<!--
        <li>
          <a href="table.html">
            <i class="ti-view-list-alt"></i>
            <p>Users</p>
          </a>
        </li>-->
        <li>
          <a href="#">
            <i class="fa fa-user"></i>
            <p>Profile</p>
          </a>
        </li>
        <li>
          <a href="logout.php" onclick="return confirm('Are you sure?')">
            <i class="fa fa-sign-out"></i>
            <p>Logout</p>
          </a>
        </li>
       <!-- <li>
          <a href="notifications.html">
            <i class="ti-bell"></i>
            <p>Notifications</p>
          </a>
        </li>-->
       
      </ul>
	  
	  
	  </div>
</div>