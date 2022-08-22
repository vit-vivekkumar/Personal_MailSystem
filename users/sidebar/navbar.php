<div class="row border-bottom">
    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header"> <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search"> </div>
            </form>
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li style="padding: 20px"> <span class="m-r-sm text-muted welcome-message">Welcome to Personal Mail -</span><strong> <?php echo $_SESSION["name"]; ?></strong></li>
            <li>
                <a href="logout.php"> <i class="fa fa-sign-out"></i> Log out </a>
            </li>
        </ul>
    </nav>
</div>