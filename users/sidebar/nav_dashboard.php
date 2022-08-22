<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <img alt="image" class="rounded-circle" src="master/img/profile_small.png" width="30%">
                     <span class="block m-t-xs font-bold"><?php echo $_SESSION["name"]; ?></span>
                </div>
                <div class="box"></div><br>
            </li>
            <li class="active"> <a href="mailbox.php"><i class="fa fa-inbox"style="font-size:20px;color:white"></i> <span class="nav-label">Inbox</span></a> </li>
            <li class=""> <a href="add_note.php"><i class="fa fa-sticky-note-o"style="font-size:20px;color:yellow"></i> <span class="nav-label">Keep Note</span></a> </li>
            <li class=""> <a href="../3-calendar.php"><i class="fa fa-calendar"style="font-size:20px;color:pink"></i> <span class="nav-label">Calendar</span></a> </li>
            <li class=""> <a href="address_book.php"><i class="fa fa-address-book"style="font-size:20px;color:ligthblue"></i> <span class="nav-label">Contacts</span></a> </li> 
            <li class=""> <a href="welcome.php"><i class="fa fa-cog"style="font-size:20px;color:white"></i> <span class="nav-label">Settings </span></a> </li>
            <li class=""> <a href="logout.php"><i class="fa fa-sign-out"style="font-size:20px;color:red"></i> <span class="nav-label">Logout</span></a> </li>
            
        </ul>
    </div>
</nav>