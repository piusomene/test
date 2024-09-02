<?php
		error_reporting(E_ALL ^ E_NOTICE);
		require_once('config.php');
		require_once('class/Themis.class.php');
		$Themis=new Themis($page,$options);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

    <head>

        <title><?php $Themis->_getTitle(); ?></title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="keywords" content="<?php $Themis->_getMeta('keywords'); ?>"/>
		<meta name="description" content="<?php $Themis->_getMeta('description'); ?>"/>

        <link rel="stylesheet" type="text/css" href="style/jquery.qtip.css"/> 
        <link rel="stylesheet" type="text/css" href="style/jquery.popeye.css"/> 
        <link rel="stylesheet" type="text/css" href="style/jquery.jScrollPane.css"/>
        <link rel="stylesheet" type="text/css" href="style/base.css"/> 
        <link rel="stylesheet" type="text/css" href="style/page.css"/> 

        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Voces"/>
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Noticia+Text:400,400italic,700,700italic"/>
        
        <script type="text/javascript" src="script/jquery.min.js"></script>
        <script type="text/javascript" src="script/jquery.easing.js"></script>
        <script type="text/javascript" src="script/jquery.blockUI.js"></script>
        <script type="text/javascript" src="script/jquery.bxSlider.js"></script>
        <script type="text/javascript" src="script/jquery.qtip.min.js"></script>
		<script type="text/javascript" src="script/jquery.popeye.min.js"></script>
        <script type="text/javascript" src="script/jquery.ba-bqq.min.js"></script>
        <script type="text/javascript" src="script/jquery.mousewheel.js"></script>
        <script type="text/javascript" src="script/jquery.jScrollPane.js"></script>
		
        <script type="text/javascript" src="script/script.js"></script>
        <script type="text/javascript" src="script/themis.js"></script>
        <script type="text/javascript" src="script/main.js"></script>
        <script type="text/javascript" src="plugin/contact-form/contact-form.js"></script>

    </head>

    <body>
        
		<!-- Main -->
        <div class="main box-center">
            
			<!-- Header -->
            <div class="header overflow-fix">
                
                <div class="layout-7030 overflow-fix">
                    
					<!-- Left column -->
                    <div class="layout-7030-left overflow-fix">
							
						<!-- Logo -->
						<div class="header-logo">
							<a href="<?php $Themis->_getURL('main'); ?>">
								<span class="title">Mark Anthony</span>
								<span class="subtitle">Private Lawyer</span>
							</a>
						</div>
						<!-- /Logo -->

						<!-- Quote -->
						<div class="header-quote">
							<h5>Realize your constitutional right</h5>
							<h5><span>with qualified help</span></h5>
						</div>
						<!-- /Quote -->
                        
                    </div>
					<!-- /Left column -->
                    
					<!-- Right column -->
                    <div class="layout-7030-right">
                    
						<!-- Phone number -->
                        <div class="header-phone">
                            <h5>Phone</h5>
                            <h5><span>1.800.353.252</span></h5>
                        </div>
						<!-- /Phone number -->
                        
                    </div>
					<!-- /Right column -->      
					
                </div>
                
            </div>
			<!-- /Header -->
            
			
			<!-- Content -->
            <div class="content">
                
                <div id="themis">
                    
					<!-- Vertical menu -->
                    <ul id="themis-vertical-menu">
                    
						<!-- About -->
                        <li class="themis-vertical-menu-box-1">
							
							<div class="themis-vertical-menu-box-wrapper">
                            
								<!-- Background -->
								<div class="themis-vertical-menu-box-background"></div>
								<div class="themis-vertical-menu-box-foreground"></div>
								<!-- /Background -->

								<!-- Foreground -->
								<div class="themis-vertical-menu-box-foreground-hover"></div>
								<!-- /Foreground -->
								
								<!-- Icon -->
								<div class="themis-vertical-menu-box-icon"></div>
								<div class="themis-vertical-menu-box-icon-hover"></div>
								<!-- /Icon -->
								
								<!-- Header -->
								<h3>About</h3>
								<h6>Mark Anthony</h6>
								<!-- /Header -->

								<!-- Link -->
								<a href="<?php $Themis->_getURL('about'); ?>"></a>
								<!-- /Link -->

							</div>
                            
                        </li>
						<!-- /About -->
                        
						<!-- Services -->
                        <li class="themis-vertical-menu-box-2">
							
							<div class="themis-vertical-menu-box-wrapper">
                            
								<div class="themis-vertical-menu-box-background"></div>
								<div class="themis-vertical-menu-box-foreground"></div>
								<div class="themis-vertical-menu-box-foreground-hover"></div>

								<div class="themis-vertical-menu-box-icon"></div>
								<div class="themis-vertical-menu-box-icon-hover"></div>

								<h3>Services</h3>
								<h6>Legal Services</h6>

								<a href="<?php $Themis->_getURL('services'); ?>"></a>
							
							</div>
                            
                        </li>
						<!-- /Services -->
                        
						<!-- Clients -->
                        <li class="themis-vertical-menu-box-3">
							
							<div class="themis-vertical-menu-box-wrapper">
                            
								<div class="themis-vertical-menu-box-background"></div>
								<div class="themis-vertical-menu-box-foreground"></div>
								<div class="themis-vertical-menu-box-foreground-hover"></div>

								<div class="themis-vertical-menu-box-icon"></div>
								<div class="themis-vertical-menu-box-icon-hover"></div>

								<h3>Clients</h3>
								<h6>Testimonials</h6>

								<a href="<?php $Themis->_getURL('clients'); ?>"></a>
							
							</div>
                            
                        </li>
						<!-- /Clients -->
                        
						<!-- Practice -->
                        <li class="themis-vertical-menu-box-4">
							
							<div class="themis-vertical-menu-box-wrapper">
                            
								<div class="themis-vertical-menu-box-background"></div>
								<div class="themis-vertical-menu-box-foreground"></div>
								<div class="themis-vertical-menu-box-foreground-hover"></div>

								<div class="themis-vertical-menu-box-icon"></div>
								<div class="themis-vertical-menu-box-icon-hover"></div>

								<h3>Practice</h3>
								<h6>Practice Of Law</h6>

								<a href="<?php $Themis->_getURL('practice'); ?>"></a>
							
							</div>
                            
                        </li>
                        <!-- /Practice -->
						
						<!-- Contact -->
                        <li class="themis-vertical-menu-box-5">
							
							<div class="themis-vertical-menu-box-wrapper">
                            
								<div class="themis-vertical-menu-box-background"></div>
								<div class="themis-vertical-menu-box-foreground"></div>
								<div class="themis-vertical-menu-box-foreground-hover"></div>

								<div class="themis-vertical-menu-box-icon"></div>
								<div class="themis-vertical-menu-box-icon-hover"></div>

								<h3>Contact</h3>
								<h6>Get In Touch</h6>

								<a href="<?php $Themis->_getURL('contact'); ?>"></a>
							
							</div>
                            
                        </li>
						<!-- /Contact -->
                        
                    </ul>
					<!-- Vertical menu -->
                    
					<!-- Window -->
                    <div id="themis-window">
                        
						<!-- Close button -->
                        <a href="<?php $Themis->_getURL('main'); ?>" id="themis-close-button"></a>
                        <!-- /Close button -->
						
						<!-- Page content -->
                        <div id="themis-window-scroll">
                            <div id="themis-window-content">
								<?php $Themis->loadFile(); ?>
							</div>
                        </div>
						<!-- /Page content -->
						
						<div id="themis-horizontal-menu-wrapper">
						
							<!-- Horizontal menu -->
							<ul id="themis-horizontal-menu">
								
								<!-- About -->
								<li class="themis-horizontal-menu-box-1">
									
									<a href="<?php $Themis->_getURL('about'); ?>">
										
										<!-- Icon -->
										<span class="themis-horizontal-menu-icon"></span>
										<span class="themis-horizontal-menu-icon-hover"></span>
										<!-- /Icon -->
										
										<!-- Header -->
										<span class="title">About</span>
										<span class="subtitle">Mark Anthony</span>
										<!-- /Header -->
										
									</a>
									
								</li>
								<!-- /About -->
								
								<!-- Services -->
								<li class="themis-horizontal-menu-box-2">
									<a href="<?php $Themis->_getURL('services'); ?>">
										<span class="themis-horizontal-menu-icon"></span>
										<span class="themis-horizontal-menu-icon-hover"></span>
										<span class="title">Services</span>
										<span class="subtitle">Legal Services</span>
									</a>
								</li>
								<!-- /Services -->
								
								<!-- Clients -->
								<li class="themis-horizontal-menu-box-3">
									<a href="<?php $Themis->_getURL('clients'); ?>">
										<span class="themis-horizontal-menu-icon"></span>
										<span class="themis-horizontal-menu-icon-hover"></span>
										<span class="title">Clients</span>
										<span class="subtitle">Testimonials</span>
									</a>
								</li>
								<!-- /Clients -->
								
								<!-- Practice -->
								<li class="themis-horizontal-menu-box-4">
									<a href="<?php $Themis->_getURL('practice'); ?>">
										<span class="themis-horizontal-menu-icon"></span>
										<span class="themis-horizontal-menu-icon-hover"></span>
										<span class="title">Practice</span>
										<span class="subtitle">Practice of Law</span>
									</a>
								</li>
								<!-- /Practice -->
								
								<!-- Contact -->
								<li class="themis-horizontal-menu-box-5">
									<a href="<?php $Themis->_getURL('contact'); ?>">
										<span class="themis-horizontal-menu-icon"></span>
										<span class="themis-horizontal-menu-icon-hover"></span>
										<span class="title">Contact</span>
										<span class="subtitle">Get In Touch</span>
									</a>
								</li>
								<!-- /Contact -->
								
							</ul>
							<!-- /Horizontal menu -->
							
						</div>
                        
                    </div>
					<!-- Window -->
                    
                </div>
                
            </div>
			<!-- /Content -->

            <!-- Footer -->
            <div class="footer">

                <div class="layout-33 overflow-fix clear-fix">

					<!-- Left column -->
                    <div class="layout-33-left">
                        
                        <h5 class="footer-header-column-1">Latest news</h5>

						<!-- Latest news -->
                        <ul class="no-list news-list">

                            <li>
                                <div class="news-list-date">
                                    27<span>DEC</span>
                                </div>
                                <div class="news-list-content">
                                    <h6>Mauris rhoncus, diam non soda</h6>
                                    <p>Sed eget aliquet ipsum. Nunc cursus lig ut nisl egestas eu aliquet lorem tempor.</p>
                                </div>
                            </li>

                            <li>
                                <div class="news-list-date">
                                    01<span>DEC</span>
                                </div>
                                <div class="news-list-content">
                                    <h6>Sed accumsan lobortis adipiscing</h6>
                                    <p>Fusce quam leo, ultricies non malesuad quis, hendrerit in nulla. Proin eu lectusle.</p>
                                </div>
                            </li>

                            <li>
                                <div class="news-list-date">
                                    11<span>NOV</span>
                                </div>
                                <div class="news-list-content">
                                    <h6>Nulla malesuada massa eu arcu</h6>
                                    <p>Vivamus tincidunt enim eu mauris feugi rutrum id id lectus. Donec nec nulla duil.</p>
                                </div>
                            </li>

                            <li>
                                <div class="news-list-date">
                                    17<span>OCT</span>
                                </div>
                                <div class="news-list-content">
                                    <h6>Fusce erat massa, euismod id con</h6>
                                    <p>Fusce velit mi, aliquam id volutpat in, ulc nec urna. Morbi pellentesque fentum ar.</p>
                                </div>
                            </li>

                        </ul>
						<!-- /Latest news -->

                    </div>
					<!-- /Left column -->

					<!-- Center column -->
                    <div class="layout-33-center">
                    
                        <h5 class="footer-header-column-2">Testimonials</h5>
                        
						<!-- Testimonials -->
                        <ul class="no-list testimonials-list">

                            <li>
								<h6>Gemma Britt, Smooth Comm</h6>
								<p>Nulla lacinia volutpat dignissim. Curabit cursus lobortis consectetur. Maurisase.</p>
                            </li>

                            <li>
								<h6>Alex Cruise, Suites Ltd</h6>
								<p>Quisque semper congue elit eu aliquam. Aenean dolor mi, gravida eget fermente.</p>
                            </li>

                            <li>
								<h6>Ann Green, Deloitte Greece</h6>
								<p>Suspendisse sit amet nisi est. Ut id eros tortorad blandit tincidunt. Vel su.</p>
                            </li>

                            <li>
								<h6>Joe Doe, Director, DeCompany</h6>
								<p>Sed semper, risus eget laoreet dictum, neques velit gravida nunc, id eleifend er.</p>
                            </li>

                        </ul>
						<!-- /Testimonials -->
                        
                    </div>
					<!-- /Center column -->

					<!-- Right column -->
                    <div class="layout-33-right">
                        
                        <h5 class="footer-header-column-3">Legal topics</h5>
                        
						<!-- Legal links -->
                        <ul class="no-list legal-links">
                            <li class="left">
                                <a href="#">Business Law</a>
                            </li>
                            <li class="right">
                                <a href="#">Consumer</a>
                            </li>
                            <li class="left">
                                <a href="#">Criminal Law</a>
                            </li>
                            <li class="right">
                                <a href="#">Child Custody</a>
                            </li>
                            <li class="left">
                                <a href="#">Civil Rights</a>
                            </li>
                            <li class="right">
                                <a href="#">Bankrupcty</a>
                            </li>
                            <li class="left">
                                <a href="#">Education</a>
                            </li>
                            <li class="right">
                                <a href="#">Car Accidents</a>
                            </li>
                            <li class="left">
                                <a href="#">Divorce</a>
                            </li>
                            <li class="right">
                                <a href="#">Discrimination</a>
                            </li>
                        </ul>
						<!-- /Legal links -->
                        
                    </div>
					<!-- /Right column -->

                </div>

            </div>
			<!-- /Footer -->
             
        </div>
		<!-- /Main -->
       
		<!-- Footer bottom -->
        <div class="footer-bottom">

            <hr/>
            
            <div class="main box-center">    
                
                <div class="overflow-fix clear-fix layout-50">

                    <div class="layout-50-left">
                        <a href="#">Copyright 2012 Mark Anthony</a>
                    </div>

                    <div class="layout-50-right">
                        <ul class="no-list footer-bottom-menu">
                            <li><a href="<?php $Themis->_getURL('about'); ?>">About</a></li>
                            <li><a href="<?php $Themis->_getURL('services'); ?>">Services</a></li>
                            <li><a href="<?php $Themis->_getURL('clients'); ?>">Clients</a></li>
                            <li><a href="<?php $Themis->_getURL('practice'); ?>">Practice</a></li>
                            <li><a href="<?php $Themis->_getURL('contact'); ?>">Contact</a></li>
                        </ul>
                    </div>
                    
                </div>

            </div>

        </div>
		<!-- /Footer bottom -->
		
		<script type="text/javascript">
			
			var page=<?php echo Themis::encode($page); ?>;
			var options=<?php echo Themis::encode($options); ?>;
			var request='<?php echo $Themis->getRequest(); ?>';
			
			$(document).ready(function() 
			{
				$('#themis').themis(page,options,request);
			});
			
		</script>

    </body>

</html>