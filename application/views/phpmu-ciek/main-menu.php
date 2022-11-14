<header id="masthead" class="site-header">
            <div id="site-header-wrap" class="header-layout1 header-transparent fixed-height is-sticky">
                <div id="headroom" class="site-header-main">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-12 col-sm-12">
                                <div class="header-main-inner">
                                    <div class="site-branding clearfix"> <a class="logo-light" href="index.html"
                                            title="Logisti" rel="home"><img
                                                src="plugin/wp-content/themes/logisti/assets/images/logo-light.png"
                                                alt="Logisti" /></a><a class="logo-dark" href="index.html"
                                            title="Logisti" rel="home"><img
                                                src="plugin/wp-content/themes/logisti/assets/images/logo-dark.png"
                                                alt="Logisti" /></a><a class="logo-mobile" href="index.html"
                                            title="Logisti" rel="home"><img
                                                src="plugin/wp-content/themes/logisti/assets/images/logo-dark.png"
                                                alt="Logisti" /></a></div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-12 col-sm-12" style="align-self: flex-end">
                                <div class="site-header-top">
                                    <div class="header-top-right">
                                        <div class="site-contact-item clearfix"> <i class="zmdi zmdi-phone"></i>
                                            <p>085781571742</p>
                                        </div>
                                        <div class="language-dropdow">
                                            <ul>
                                                <li class="lang-item"> <a class="lang-sel" href="#"> <img
                                                            src="plugin/wp-content/themes/logisti/assets/images/lang-icon.png"
                                                            alt="language_icon"> <span>En</span> </a>
                                                    <ul class="lang-submenu">
                                                        <li class="lang-item"> <a href="#">German</a></li>
                                                        <li class="lang-item"> <a href="#">Russian</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="header-button"> <a href="plugin/request-a-quote/index.html" target="_blank"
                                                class="btn btn--icon"><i class="zmdi zmdi-file-text"></i>Request A
                                                Quote</a></div>
                                    </div>
                                </div>
                                <nav id="site-navigation" class="main-navigation clearfix">
                                    <div class="icon-in-nav">
                                        <div class="search-icon h-btn-search"> <i class="fa fa-search"
                                                aria-hidden="true"></i></div>
                                    </div>
                                    <!-- dari  sini -->
          <ul id="mastmenu" class="primary-menu clearfix">
                                    <!-- ini php -->
              <?php $botm = $this->model_utama->mainmenu();
                foreach ($botm->result_array() as $row){
                    $dropdown = $this->model_utama->submenu($row['id_main'])->num_rows();
                    if ($dropdown == 0){
                      echo "<li><a href='".base_url()."$row[link]'> $row[nama_menu]</a></li>";
                    }else{
                      echo "<li id='menu-item-11'
                      class='menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children menu-item-11'>
                            <a href='".base_url()."$row[link]' > $row[nama_menu] 
                            <span class='caret'></span></a>
                            <ul class='sub-menu'>";
                              $dropmenu = $this->model_utama->submenu($row['id_main']);
                              foreach ($dropmenu->result_array() as $row){
                                $dropdown1 = $this->model_utama->submenu1($row['id_sub'])->num_rows();
                                if ($dropdown1 == 0){
                                  if(preg_match("/^http/", $row['link_sub'])) {
                                    echo "<li><a href='$row[link_sub]'>$row[nama_sub]</a></li>";
                                  }else{
                                    echo "<li><a href='".base_url()."$row[link_sub]'>$row[nama_sub]</a></li>";
                                  }

                                }
                                else
                                {
                                  echo "<li class='dropdown-submenu'>
                                          <a href='".base_url()."$row[link_sub]' > $row[nama_sub] </a>
                                          <ul class='dropdown-menu'>";
                                              $dropmenu1 = $this->model_utama->submenu1($row['id_sub']);
                                              foreach ($dropmenu1->result_array() as $row){
                                                $dropdown2 = $this->model_utama->submenu1($row['id_sub'])->num_rows();
                                                if ($dropdown2 == 0){
                                                  if(preg_match("/^http/", $row['link_sub'])) {
                                                    echo "<li><a tabindex='-1' href='$row[link_sub]'>$row[nama_sub]</a></li>";
                                                  }else{
                                                    echo "<li><a tabindex='-1' href='".base_url()."$row[link_sub]'>$row[nama_sub]</a></li>";
                                                  }
                                                }else{
                                                  echo "<li class='dropdown-submenu'>
                                                          <a href='".base_url()."$row[link_sub]' > $row[nama_sub] </a>
                                                          <ul class='dropdown-menu'>";
                                                              $dropmenu2 = $this->model_utama->submenu1($row['id_sub']);
                                                              foreach ($dropmenu2->result_array() as $row){
                                                                if(preg_match("/^http/", $row['link_sub'])) {
                                                                  echo "<li><a tabindex='-1' href='$row[link_sub]'>$row[nama_sub]</a></li>";
                                                                }else{
                                                                  echo "<li><a tabindex='-1' href='".base_url()."$row[link_sub]'>$row[nama_sub]</a></li>";
                                                                }
                                                              }
                                                  echo "</ul></li>";
                                                }
                                              }
                                  echo "</ul></li>";
                                }
                              }
                            echo "</ul>
                          </li>";
                    }
                }
            ?>
                                         
          </ul>
                                </nav>
                            </div>
                            <div id="main-menu-mobile">
                                <div class="icon-in-nav mobile-icon">
                                    <div class="search-icon h-btn-search"> <i class="fa fa-search"
                                            aria-hidden="true"></i></div>
                                </div> <span class="btn-nav-mobile open-menu"> <span></span> </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>