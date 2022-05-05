 <!-- Header bar area Start -->
  <div class="header-bar-area position-fixed w-100">
     <div class="container-fluid">
         <div class="row align-items-center">
             <div class="col-lg-3">
                 <a class="navbar-brand p-0 m-0" href="#">
                     <h1>Journey</h1>
                 </a>
             </div>
             <div class="col-lg-9 text-right">
             <?php wp_nav_menu( array( 
                'theme-location' => 'nav', 
                'container_class' => 'main-menu',
                ) ); ?>
                 <ul id="mainNav" class="main-menu pb-2 pb-lg-0">
                    <!-- <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about-wrap">About</a>
                    </li> -->
                            <!-- <li class="nav-item"> -->
                                <!-- <a class="nav-link js-scroll-trigger" href="#press_wrap">Press</a>
                            </li> --> 
                <?php 
				// if ( 
				// 	get_field('shop1', 'option') || 
				// 	get_field('shop2', 'option') ||
				// 	get_field('shop3', 'option') ||
				// 	get_field('shop4', 'option') ||
				// 	get_field('shop5', 'option') ||
				// 	get_field('shop6', 'option') ||
				// 	get_field('shop7', 'option') ||
				// 	get_field('shop8', 'option')
				// ): 
                // echo '
              
                // ';
                // endif;
                ?>
                  <!-- <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#preorder_wrap"> Order</a>
                </li> -->
                 </ul>
                 <div class="hamburger-menu">
                     <span class="line-top"></span>
                     <span class="line-center"></span>
                     <span class="line-bottom"></span>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Header bar area End -->
 <!-- Ofcanvas-menu -->
 <div class="ofcavas-menu">
     <ul id="mainNav" class="navbar-nav ml-auto pb-2 pb-lg-0">
     <?php wp_nav_menu( array( 
                'theme-location' => 'nav', 
                'container_class' => 'main-menu',
                ) ); ?>
         <!-- <li class="nav-item" style="margin-top: 20px">
             <a class="nav-link js-scroll-trigger" href="#about-wrap">About</a>
         </li> -->
         <!-- <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#press_wrap">Press</a>
                </li> -->
                <!-- <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#preorder_wrap"> Order</a>
            </li> -->
                <?php 
				// if ( 
				// 	get_field('shop1', 'option') || 
				// 	get_field('shop2', 'option') ||
				// 	get_field('shop3', 'option') ||
				// 	get_field('shop4', 'option') ||
				// 	get_field('shop5', 'option') ||
				// 	get_field('shop6', 'option') ||
				// 	get_field('shop7', 'option') ||
				// 	get_field('shop8', 'option')
				// ): 
                // echo '
          
            // ';
            //     endif;
                ?>
     </ul>
 </div>
 <!-- Ofcanvas-menu END-->