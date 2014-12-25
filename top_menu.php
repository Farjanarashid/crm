<!-- Main Navigation: Box -->
<div class="navbar navbar-inverse" id="nav">
    <div class="navbar-inner">
        <ul class="nav">
		      <li class="dropdown">
                <a href="home.php"  ">
                    <i class="icon-align-justify"></i> Home 
                </a>
			  </li>
              <li class="dropdown">
                <a href="home.php?id=0"  data-toggle="dropdown">
                    <i class="icon-align-justify"></i>  View <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="home.php?id=1"><i class="icon-magic"></i> Vendors </a></li>
                    <li><a href="home.php?id=2"><i class="icon-magic"></i>Customers</a></li>
                    <li><a href="home.php?id=0"><i class="icon-magic"></i>  View All</a></li>
                </ul>
              </li>
              <?php if ($r == 0): ?> 
                <li class="dropdown">
                    <a href="home.php?id=0"  data-toggle="dropdown">
                        <i class="icon-align-justify"></i>  Insert Data <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="form.php"><i class="icon-magic"></i> Form </a></li>
                        <li><a href="csv.php"><i class="icon-th-large"></i> Mass input</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="home.php?id=0"  data-toggle="dropdown">
                        <i class="icon-align-justify"></i>  Docs <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="docs_view.php"><i class="icon-magic"></i> View </a></li>
                        <li><a href="add_docs.php"><i class="icon-th-large"></i> Add New</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="home.php?id=0"  data-toggle="dropdown">
                        <i class="icon-align-justify"></i>  Rates <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="rates_view.php"><i class="icon-magic"></i> View Rates</a></li>
                        <li><a href="rates_form.php"><i class="icon-magic"></i> Rates Single Input</a></li>
                        <li><a href="rates.php"><i class="icon-th-large"></i>Rates Mass Input</a></li>
                    </ul>
                </li>
                <?php endif; ?>                    
        </ul>
        <!-- / Main Navigation: Nav -->
    </div>
    <!-- / Main Navigation: Inner -->
</div>
<!-- / Main Navigation: Box -->