  <script>
      $(document).on('click', '.yamm .dropdown-menu', function(e) {
          e.stopPropagation()
      })
  </script>

 <header class="header white-bg">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="fa fa-bars"></span>
              </button>

              <!--logo start-->
              <a href="index.html" class="logo" >Flat<span>lab</span></a>
              <!--logo end-->
                <div class="container">
                    <div id="navbar-collapse-1" class="navbar-collapse collapse yamm mega-menu">
                        <ul class="nav navbar-nav">
                            <!-- Classic list -->
                            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Mega Menu <b class=" fa fa-angle-down"></b></a>
                                <ul class="dropdown-menu wide-full">
                                    <li>
                                        <!-- Content container to add padding -->
                                        <div class="yamm-content">
                                            <div class="row">
                                                <ul class="col-sm-2 list-unstyled">
                                                    <li>
                                                        <p class="title">Standard</p>
                                                    </li>
                                                    <li><a href="#"> Normal Navigation </a></li>
                                                    <li><a href="#"> Execellent menu </a></li>
                                                    <li><a href="#"> Customizable </a></li>
                                                    <li><a href="#"> Huge Components </a></li>
                                                    <li><a href="#"> Bootstrap v3.2 </a></li>
                                                    <li><a href="#"> Fontawesome </a></li>
                                                </ul>
                                                <ul class="col-sm-2 list-unstyled">
                                                    <li>
                                                        <p class="title">Description</p>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span class="d-title">Title Goes Here</span>
                                                            <span class="d-desk">Description goes here</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span class="d-title">Amaging Dashboard</span>
                                                            <span class="d-desk">Build with BS3</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span class="d-title">2000 Satisfied Client</span>
                                                            <span class="d-desk">Max 5 star rating</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span class="d-title">Easy to Cutomize</span>
                                                            <span class="d-desk">Very easy to use</span>
                                                        </a>
                                                    </li>

                                                </ul>
                                                <ul class="col-sm-2 list-unstyled">
                                                    <li>
                                                        <p class="title">Iconic</p>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-arrow-circle-right text-muted"></i>  Right Angle </a></li>
                                                    <li><a href="#"><i class="fa fa-desktop text-muted"></i>  Desktop Icon </a></li>
                                                    <li><a href="#"><i class="fa fa-laptop text-muted"></i>  Laptop Icon</a></li>
                                                    <li><a href="#"><i class="fa fa-mobile text-muted"></i>  Mobile Icon </a></li>
                                                    <li><a href="#"><i class="fa fa-lock text-muted"></i>  Lock Icon </a></li>
                                                </ul>
                                                <ul class="col-sm-3 list-unstyled">
                                                    <li>
                                                        <p class="title">Image + Description</p>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img class="icon-img" src="img/mega_icon1.png" alt=""/>
                                                            <span class="icon-desk">
                                                                <span class="d-title">Title Goes Here</span>
                                                                <span class="d-desk">Description goes here</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img class="icon-img" src="img/mega_icon2.png" alt=""/>
                                                            <span class="icon-desk">
                                                                <span class="d-title">Amaging Dashboard</span>
                                                                <span class="d-desk">Build with BS3</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img class="icon-img" src="img/mega_icon3.png" alt=""/>
                                                            <span class="icon-desk">
                                                                <span class="d-title">2000 Satisfied Client</span>
                                                                <span class="d-desk">Max 5 star rating</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img class="icon-img" src="img/mega_icon4.png" alt=""/>
                                                            <span class="icon-desk">
                                                                <span class="d-title">Easy to Cutomize</span>
                                                                <span class="d-desk">Very easy to use</span>
                                                            </span>
                                                        </a>
                                                    </li>

                                                </ul>
                                                <ul class="col-sm-3 list-unstyled custom-nav-img">
                                                    <li>
                                                        <p class="title">Custom</p>
                                                    </li>
                                                    <li>
                                                        <p class="desk">
                                                            Consectetur ullamcorper purus a rutrum. Etiam dui nisi, hendrerit feugiat serisque et, cursus eu magna.
                                                        </p>
                                                    </li>
                                                    <div class="mega-bg"></div>
                                                </ul>

                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Accordion demo -->
                            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Accordion Menu <b class=" fa fa-angle-down"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="yamm-content">
                                            <div class="row">
                                                <div id="accordion" class="panel-group">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Collapsible Group Item #1</a></h4>
                                                        </div>
                                                        <div id="collapseOne" class="panel-collapse collapse in">
                                                            <div class="panel-body">Ut consectetur ullamcorper purus a rutrum. Etiam dui nisi, hendrerit feugiat scelerisque et, cursus eu magna. </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Collapsible Group Item #2</a></h4>
                                                        </div>
                                                        <div id="collapseTwo" class="panel-collapse collapse">
                                                            <div class="panel-body">Nullam pretium fermentum sapien ut convallis. Suspendisse vehicula, magna non tristique tincidunt, massa nisi luctus tellus, vel laoreet sem lectus ut nibh. </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Collapsible Group Item #3</a></h4>
                                                        </div>
                                                        <div id="collapseThree" class="panel-collapse collapse">
                                                            <div class="panel-body">Praesent leo quam, faucibus at facilisis id, rhoncus sit amet metus. Sed vitae ipsum non nibh mattis congue eget id augue. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Classic dropdown -->
                            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Classic Menu <b class=" fa fa-angle-down"></b></a>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a tabindex="-1" href="#"> Action </a></li>
                                    <li><a tabindex="-1" href="#"> Another action </a></li>
                                    <li><a tabindex="-1" href="#"> Something else here </a></li>
                                    <li class="divider"></li>
                                    <li><a tabindex="-1" href="#"> Separated link </a></li>
                                </ul>
                            </li>
                            <!-- Pictures -->
                            <li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Images Menu <b class=" fa fa-angle-down"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="yamm-content">
                                            <div class="row">
                                                <div class="col-xs-6 col-sm-2"><a href="#" class="m-thumb"><img  src="img/mega-menu/mega-menu-images1.jpg"> Anim pariatur</a></div>
                                                <div class="col-xs-6 col-sm-2"><a href="#" class="m-thumb"><img  src="img/mega-menu/mega-menu-images2.jpg"> Reprehenderit</a></div>
                                                <div class="col-xs-6 col-sm-2"><a href="#" class="m-thumb"><img  src="img/mega-menu/mega-menu-images3.jpg"> Keffiyeh helvetica</a></div>
                                                <div class="col-xs-6 col-sm-2"><a href="#" class="m-thumb"><img  src="img/mega-menu/mega-menu-images4.jpg"> Pariatur cliche</a></div>
                                                <div class="col-xs-6 col-sm-2"><a href="#" class="m-thumb"><img  src="img/mega-menu/mega-menu-images5.jpg"> Food truck quinoa</a></div>
                                                <div class="col-xs-6 col-sm-2"><a href="#" class="m-thumb"><img  src="img/mega-menu/mega-menu-images6.jpg"> Leggings occaecat craft</a></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
          </div>

      </header>
      <!--header end-->