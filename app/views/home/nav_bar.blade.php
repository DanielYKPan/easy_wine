<div class="login-links container">
	<div class="login-links-content pull-right">
        <h4>{{{"Welcome to Easy Wine"}}}</h4>
	</div>
</div>

<div class="inner-center container">
	{{HTML::linkRoute('home','',array(),array('class'=>'logo img-responsive', 'title'=>'Easy Wine - Buy Wine Online'))}}
</div>

<nav class="navbar navbar-default yamm home-navbar" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#js-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="js-navbar-collapse">
      <ul class="nav navbar-nav home-navbar-nav">
        <li class="dropdown yamm-fw">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">reds</a>
            <ul class="dropdown-menu row" role="menu">
                <li class="col-sm-3 deal-of-the-day">
                    <ul>
                        <li class="header text-uppercase">deal of the day</li>
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="#">
                                                {{ HTML::image('uploads/images/wines/260/C988X.png', 'a picture', array('class' => 'img-deal-of-the-day img-responsive')) }}
                                            </a>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="wine-label text-capitalize">
                                                {{{"Wine Name Displayed Here"}}}
                                            </div>
                                            <div class="wine-was-price">
                                                {{{"Was $10.00"}}}              
                                            </div>
                                            <div class="wine-now-price">
                                                {{{"Now $8.00"}}}
                                            </div>
                                            <div class="wine-save-amount">
                                                {{{"Save $2.00"}}}
                                            </div>
                                        </div>
                                    </div> 
                                    <button href="#" class="btn btn-primary" type="button"><span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart</button>
                                </div>
                                <!-- End Item -->
                            </div>
                            <!-- End Carousel Inner -->
                        </div>
                        <!-- /.carousel -->
                        <li class="divider"></li>
                        <li><a href="#">View all Red Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a>
                        </li>
                    </ul>
                </li>
                <li class="col-sm-3">
                    <ul>
                        <li class="dropdown-header">Red</li>
                        <li><a href="#">All Red</a>
                        </li>
                        <li><a href="#">Awards</a>
                        </li>
                        <li><a href="#">Auto Carousel</a>
                        </li>
                        <li><a href="#">Imported</a>
                        </li>
                        <li><a href="#">Mixed Cases</a>
                        </li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Variety</li>
                        <li><a href="#">Variety 1</a>
                        </li>
                        <li><a href="#">Variety 1</a>
                        </li>
                        <li><a href="#">Variety 1</a>
                        </li>
                        <li><a href="#">Variety 1</a>
                        </li>
                        <li><a href="#">Variety 1</a>
                        </li>
                        <li><a href="#">Variety 1</a>
                        </li>
                    </ul>
                </li>
                <li class="col-sm-3">
                    <ul>
                        <li class="dropdown-header">Country</li>
                        <li><a href="#">Country 1</a>
                        </li>
                        <li><a href="#">Country 1</a>
                        </li>
                        <li><a href="#">Country 1</a>
                        </li>
                        <li><a href="#">Country 1</a>
                        </li>
                        <li><a href="#">Country 1</a>
                        </li>
                        <li><a href="#">Country 1</a>
                        </li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Region</li>
                        <li><a href="#">Region 1</a>
                        </li>
                        <li><a href="#">Region 1</a>
                        </li>
                        <li><a href="#">Region 1</a>
                        </li>
                        <li><a href="#">Region 1</a>
                        </li>
                    </ul>
                </li>
                <li class="col-sm-3">
                    <ul>
                        <li class="dropdown-header">Price</li>
                        <li><a href="#">Price 1</a>
                        </li>
                        <li><a href="#">Price 1</a>
                        </li>
                        <li><a href="#">Price 1</a>
                        </li>
                        <li><a href="#">Price 1</a>
                        </li>
                        <li><a href="#">Price 1</a>
                        </li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Search</li>
                        <form class="form" role="form">
                            <div class="form-group">
                                <label class="sr-only" for="search">Search</label>
                                <input type="search" class="form-control" id="search" placeholder="Exceptional Wine, Extraordinary Prices">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-search"></span></button>
                        </form>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="#">whites</a></li>
        <li><a href="#">mixs</a></li>
        <li><a href="#">sparklings</a></li>
        <li><a href="#">others</a></li>
        <li><a href="#" style="color:red">clearance</a></li>
        <li><a href="#">winemakers</a></li>
        <li><a href="#">more</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-navbar -->
</nav>