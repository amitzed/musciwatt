<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="profile" href="http://gmpg.org/xfn/11">

<title>Music Watt</title>

<body <?php body_class(); ?>>
  <div class="container-head">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="top-logo">
        <a target="_blank" class="navbar-brand" href="https://amitzaman.com/">
          <img class="logoTop" src="<?php echo get_template_directory_uri(); ?>/images/MW-LOGO.jpg">

        <div class="tagLine">
          <h4>music watt</h4>
        </div>
</a>
     </div>

     <div class="top-menu">
        <ul id="nav-bar-middle" style="list-style: none;">
          <span class="nav-line">
            <li class="product-nav"><a href="#" style="text-decoration: none;"><div class="parent">Categories</div></a>
              <div id="drop-menu" class="box">
                <div class="drop-menu-items container flex-cont">
<!-- Product Menu Dropdown Box: -->
                  <ul>
                  <div class="product-items flex-col">
                    <a href="#">
                      <li><span class="dropdown-pic">
                        <img class="dropdown-img" src="<?php echo get_template_directory_uri(); ?>/images/media-player.png"></br>
                        Studio & Recording</span>
                    </a>

                    <a href="#">
                      <span class="dropdown-pic">
                        <img class="dropdown-img" src="<?php echo get_template_directory_uri(); ?>/images/laptop-media.png"></br>
                        Software & Plugins</span>
                    </a>

                    <a href="#">
                      <span class="dropdown-pic">
                        <img class="dropdown-img" src="<?php echo get_template_directory_uri(); ?>/images/synth.png"></br>
                        Keyboards & Synthesizers</span>
                    </a>

                    <a href="#">
                      <span class="dropdown-pic">
                        <img class="dropdown-img" src="<?php echo get_template_directory_uri(); ?>/images/record-studio.png"></br>
                        Assessories</span></li>
                    </a>
                  </div>
                 </ul>
                </div>
              </div>
            </li>
          </span>

          <span class="nav-line"><li class="about-nav"><a href="#" style="text-decoration: none;"><div class="parent">What's New</div></a>
            <div id="drop-menu" class="box">
              <div class="drop-menu-items container flex-cont">

<!-- About Menu Dropdown Box: -->
                <ul>
                <div class="about-items flex-col">
                  <a href="#">
                    <li><span class="dropdown-pic">
                      <img class="dropdown-img" src="<?php echo get_template_directory_uri(); ?>/images/allProds.png"></br>
                      All Products</span>
                  </a>

                  <a href="#">
                    <span class="dropdown-pic">
                      <img class="dropdown-img" src="<?php echo get_template_directory_uri(); ?>/images/rec-software.png"></br>
                      Recording & Software</span>
                  </a>

                  <a href="#">
                    <span class="dropdown-pic">
                      <img class="dropdown-img" src="<?php echo get_template_directory_uri(); ?>/images/guitars.ico"></br>
                      Guitars</span>
                  </a>

                </div>
               </ul>
              </div>

            </div>
          </li>
        </span>
<!-- News & Events and Contact Us -->
          <span class="nav-line"><li class="news-nav" ><a href="#" style="text-decoration: none;"><div class="parent" id="news-contact-menu">About Us</div></a></li></span>

          <span class="nav-line"><li class="contact-nav" ><a href="#" style="text-decoration: none;"><div class="parent" id="news-contact-menu">Support</div></a></li></span>
        </ul>
      </div>
<!-- Package Cart and Search ICONS -->
      <div class="top-icons">
        <ul class="nav-bar-right" style="list-style: none;">
        <li class="phone-num-nav"><a></a>800.555.1212</li>
          <div id="box-icon">
            <li class="icon-nav"><a></a>
              <i class="fas fa-cart-arrow-down" style="font-size:25px;"></i>
            </li>
          </div>
            <!-- Search Icon -->
          <div id="search-icon" class="row">
            <div class="col-md-12 text-center">
              <div class="dropdown btn-group">
                <button class="btn btn-muted dropdown-toggle" type="button" data-toggle="dropdown">
                  <li class="icon-nav"><a</a>
                    <i class="fas fa-search" style="font-size:25px;"></i>
                  </li>
                </button>

                <ul class="dropdown-menu">
                  <li><a href="#"><form class="searchForm">
                   <div class="form-group-search">
                     <h1><label class=""><input type="search" class="form-control-search" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="  &#128269; Let's Find Some Awesome Gear...">
                     <div class="inputAndBtn">
                       <span><button id="search-btn" type="submit" class="btn btn-success">Search</button></span>
                     </div></label></h1>
                     </br>
                   </div>
                 </form></a></li>
                </ul>

              </div>
            </div>
          </div>
        </ul>
      </div>

    </nav>
  </div>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
