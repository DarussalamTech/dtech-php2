<!doctype html>
<html>
    <head>
    	
        <script src="<?php echo Yii::app()->baseUrl; ?>/packages/jui/js/jquery.js"></script>

        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/frontend/js/dtech.js" ></script>
        <meta charset="utf-8">

        <link href="<?php echo Yii::app()->baseUrl; ?>/frontend/css/style.css" type="text/css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->baseUrl; ?>/frontend/css/customStyle.css" type="text/css" rel="stylesheet" />


        <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/packages/jui/colorbox/colorbox.css">
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/packages/jui/carousal/coin-slider-styles.css">

        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/packages/jui/colorbox/jquery.colorbox.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/packages/jui/carousal/coin-slider.min.js"></script>


        <title>D-Tech Systems</title>

        <script type="text/javascript">
            jQuery(document).ready(function() {

           

                if (window.location.hash != "" && window.location.hash != "#") {
                    dtech.scrolltoSection(window.location.hash.substring(1, window.location.hash.length));
                }
                $(".inline").colorbox({inline: true, width: "50%", scrolling: true, height: "500px"});
                $(".pad").colorbox({inline: true, width: "50%", scrolling: true, height: "500px"});
                $(".design").colorbox({inline: true, width: "50%", scrolling: true, height: "500px"});
                $(".brand").colorbox({inline: true, width: "55%", scrolling: true, height: "500px"});

                $(".social_media_images div a img").hover(function() {
                    $(this).attr("src", $(this).attr("hover"));
                }, function() {
                    $(this).attr("src", $(this).attr("un-hover"));
                });


	


            })
        </script>
       
<!-- bxSlider Javascript file -->
<script src="<?php echo Yii::app()->baseUrl; ?>/packages/jui/responsive/jquery.bxslider.min.js"></script>
<!-- bxSlider CSS file -->
<link href="<?php echo Yii::app()->baseUrl; ?>/packages/jui/css/jquery.bxslider.css" rel="stylesheet" />

<script type="text/javascript">
jQuery(document).ready(function(){
  jQuery('.bxslider').bxSlider({auto:true});
});

</script>
        <!-- Gumby -->
        	<meta charset="utf-8">

	<!-- Use the .htaccess and remove these lines to avoid edge case issues.
			 More info: h5bp.com/b/378 -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >

	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="humans.txt" >

	<link rel="shortcut icon" href="favicon.png" type="image/x-icon" />

	<!-- Facebook Metadata /-->
	<meta property="fb:page_id" content="" />
	<meta property="og:image" content="" />
	<meta property="og:description" content="" />
	<meta property="og:title" content="" />

	<!-- Google+ Metadata /-->
	<meta itemprop="name" content="" >
	<meta itemprop="description" content="" >
	<meta itemprop="image" content="" >

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

	<!-- We highly recommend you use SASS and write your custom styles in sass/_custom.scss.
			 However, there is a blank style.css in the css directory should you prefer -->
	<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/frontend/css/gumby.css">
	<!-- <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/frontend/css/gumby_style.css"> -->
    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/packages/jui/responsive/libs/modernizr-2.6.2.min.js"></script>
    <!-- Gumby -->
    </head>

<body>
  	<div class="navbar" id="nav1">
  		<div id="header">
       		<div class="banner_part">
           		<div class="row">
               		<div class="three columns">
                  		<div class="logo">
                     		<a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/logo_img_02.png" /></a>
                  		</div>
                  	</div>
                	<div class="mainnavbar" id="nav1">
                  		<a class="toggle" gumby-trigger="#nav1 > .row > ul" href="#"><i class="icon-menu"></i></a>
                      	<div class="row">
                       		<ul class="six columns">
                        		<li><a href="#main_about_us" onclick="dtech.scrolltoSection('main_about_us')">About Us</a></li>
                            	<li><a href="#our_work" onclick="dtech.scrolltoSection('our_work')">How do we Work</a></li>
                              	<li><a href="#services" onclick="dtech.scrolltoSection('services')">Services</a></li>
                            	<li><a href="#contact_us" onclick="dtech.scrolltoSection('contact_us')">Contact us</a></li>
                        	</ul>
                    	</div>
                 	</div>
             	</div>
          	</div>
       	</div>
   	</div>
  	<div id="banner">
    	<div class="row">
         	<div class="banner_part">
				<div class="twelve columns">
                	<div class="main_banner">
                    	<div class="middle_banner" id="coin">
                    		<div id="container">
                                <ul class="bxslider">
                                    <li><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/banner_slider_1.png" /></li>
                                    <li><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/banner_slider_2.png" /></li>
                                    <li><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/banner_slider_3.png" /></li>
                                </ul>
                            </div>
                     	</div>
                        <div class="social_media">
                            <a href="https://twitter.com/dtechnet"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/banner_tweeter_03.png" /></a>
                            <a href="http://facebook.com/dtech.co" target="_blank"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/banner_facebook_03.png" /></a>
                            <a href="javascript:void(0)"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/banner_linkedin_03.png" /></a>
                    	</div>
                	</div>
            	</div>
        	</div>
  		</div>
    </div>
  	<div id="main_about_us">
    	<div class="row">
       		<div class="back_to_up">
          		<a href="javascript:void(0)" onclick="dtech.scrolltoTopOfPage()"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/back_to_up_03.jpg" /></a>
          	</div>
            <div id="about_us">
            	<div class="twelve columns">
             		<div class="about_us_content">
                 		<h1>About<span>Us</span></h1>
                      	<p>The twenty-first century is a century of technical advancements. D-tech uses cutting edge technology and ongoing training and development to stay up to date with the la	test advancements in technology and market trends. We believe in novelty and innovation. Our approach is unorthodox and that is what gives us our competitive edge. Providing a free consultation and one-week trial are some of the options that we offer to our worthy clients to ensure that they are fully satisfied. It’s a “been there, done that” scenario. We know how it works. Let us take care of all your worries while you sit back and relax. More significantly, we say we are done only when we are satisfied with our work. We guarantee quality results every time.</p>
                    	<p>With dynamic leadership skills, a novel approach and an inexhaustible drive to deliver the best, our management makes a strong team that can be relied upon. We take pride in our highly competent, well qualified personnel who have a history of success in their respective fields of expertise.</p>
                      	<p>We have vast experience in reference to business development, market research, project management, brand management, marketing management, strategic marketing, product development, financial research, financial analysis, and much more.</p>
                    	<p>The D-tech team comprises of professionals who are highly skilled in a wide variety of fields. Our software development wing holds expertise in:</p>
                     	<p>PHP (Yii, zend, codeigniter, cake php, core php, Wordpress, Joomla, sugar crm), Javascript (Jquery, protype js, angular js), Python (django), JAVA, .NET (asp.net, c#, vb.net).</p>
                   		<p>Our mobile application and game development wing comprises of both iOS and Android development teams. The iOS application and game development team specializes in: Cocoa Touch, Cocos2d-x, Unity 3d and Engine.</p>
               		</div>
            	</div>
        	</div>
     	</div>
	</div>
	<div id="our_work">
   		<div class="row">
         	<div class="back_to_up">
      			<a href="javascript:void(0)" onclick="dtech.scrolltoTopOfPage()"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/back_to_up_03.jpg" /></a>
          	</div>
            <div class="main_work">
          		<div class="left_work">
               		<div class="six columns">
                    	<h1>Our</h1>
                    	<h2>Work</h2>
                    	<h3>Methodology</h3>
                    	<p>Using agile methodology as an approach to development, we break large projects into smaller parts. Planning is the key to our work.</p>
                    	<p>We report to our clients on a daily basis, thus ensuring that our clients are always up to date on the progress of their project. Detailed conversations with our clients helps us to develop a functionality plan and Acceptance Test Criteria (ATC) at the start of any project.</p>
                    	<p>Once the initial requirements are set and we are good to go, clients can choose to assign a project manager from their company to liaise with us or they can deal with us directly themselves.</p>
                    	<p>When the requirements are completed a sprint document is shared with the client. The sprint document shows how many hours each resource will work on the project and the project delivery date.</p>
                    	<p>The project manager liaising with us will receive daily updates via email or on the phone about their project.</p>
                	</div>
               	</div>
                <div class="six columns">
                	<div class="right_work">
                    	<div class="big_circle">
                        	<div class="cirlce_upper_part">
                            	<a href="javascript:void()"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/tab_like_img_03.png" /></a>
                            	<p>Requirements</p>
                        	</div>
                        	<div class="cirlce_left_part">
                            	<a href="javascript:void()"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/releasing_img_03.png" /></a>
                            	<p>Release</p>
                        	</div>
                        	<div class="cirlce_right_part">
                            	<a href="javascript:void()"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/brush_big_img_03.png" /></a>
                            	<p>Design</p>
                        	</div>
                        	<div class="cirlce_bottom_part">
                            	<p>Development</p>
                            	<a href="javascript:void()"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/keyboard_img_03.png" /></a>
                        	</div>
                    	</div>
                	</div>
				</div>
            </div>
        </div>
   	</div>
  	<div id="services">
     	<div class="row">
      		<div class="back_to_up_services">
          		<a href="javascript:void(0)" onclick="dtech.scrolltoTopOfPage()"><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/back_to_up_03.jpg" /></a>
          	</div>
            <div class="main_services">
         		<div class="our_services">
					<div class="twelve columns">
                    	<div class="services_text">
                        	<h1>Our</h1>
                        	<h2>Services</h2>
                     	</div>
                	</div>
             	</div>
                <div class="services_img">
                	<div class="three columns">
                  		<div class="cirlce">
                       		<a class ="inline" href="#inline_content" ><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/lcd_03.png" /></a>
                            <p>Web Applications</p>
                        </div>
                	</div>
                    <div class="three columns">
                    	<div class="cirlce" id="app-cirle">
                        	<a class="pad" href="#pad_content" ><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/pad_img_03.png" /></a>
                        	<p>IOS/Android</p>
                    	</div>
                    </div>
                    <div class="three columns">
                    	<div class="cirlce" id="brush-cirle cirlce_data">
                        	<a class="design" href="#design_content" ><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/brush_img_03.png" /></a>
                        	<p>Web Design</p>
                    	</div>
                    </div>
                    <div class="three columns">	
                        <div class="cirlce" id="back-cirle">
                            <a class="brand" href="#brand_content" ><img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/comments_img_03-2.png" /></a>
                            <p>Brand Identity</p>
                    	</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="contact_us">
		<div class="row">
        	<?php echo $content; ?>
      	</div>
    </div>
    <div style='display:none'>
        <div id='inline_content' style='padding:10px; background:#fff;'>
            <div class="content_image">
                <img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/lcd_03.png" /> 
            </div>
            <section>Web Bases Social Networking Setups</section>
            <p>We provide open source and custom based social networking setups like Facebook and other social apps. We have expertise in also handling open source plugins for social networks under Wordpress or developing apps according to our own custom platform.</p>
            <section>Web Based CRM's</section>
            <p>Our CRM team has complete command over the Sugar framework and SOAP architecture; allowing us to build extensive custom products on top of SugarCRM, along with confidently mapping their unique business process requirements onto SugarCRM via customizations and integrations.</p>
            <section>Web Based CMS</section>
            <p>We simplify website management in order to allow business owners and non-technical personnel to update their web content on the fly with multilingual support. Our customized Content Management System (CMS) puts messaging in the hands of the people who know it best in regards to workflows, approvals, and permissions. In addition to maintaining a complete history of any changes made. Editing content is as easy as editing a document with our CMS integration. Wordpress and Joomla are our expertise.</p>
            <section>Web Based Business Applications</section>
            <p>We simplify the management of developing business applications according to the requirements of our clientele, for example in regards to: sales, orders, purchases and project management systems. Our system will provide all the features such as data storing, reporting, emailing and access control security.</p>
            <section>Web Based Business Accounting</section>
            <p>We also provide business accounting web development solutions and provide services to synchronize a company’s software with other accounting systems using web services like xero integration.</p>
            <section>Ecommerce Development</section>
            <p>We provide the simplest ecommerce solutions; we have the expertise of custom based ecommerce development as well as providing other open source platforms like Wordpress ecommerce plugins, Open Cart and Magento.</p>
            <section>Facebook applications</section>
            <p>We are able to convert any application into a Facebook application. We have expertise in handling small or larger (business) apps on Facebook, with features such as automatically posting on walls, sharing options and in following the Facebook Application Program Interface (API).</p>
        </div>
        <div id='pad_content' style='padding:10px; background:#fff;'>
            <div class="content_image">
                <img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/pad_img_03.jpg" />
            </div>
            <section style="text-align:center;">iOS &AMP; Android Applications and Game Development</section>
            <p>The spiking prevalence of smartphones and tablets usage has led to a new marketing tool within the sphere of the digital world: mobile applications. D-tech has extensive experience in mobile applications and games development for both iOS and Android.</p>
        </div>
        <div id='design_content' style='padding:10px; background:#fff;'>
            <div class="content_image">
                <img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/brush_img_03.jpg" />
            </div>
            <section>Website Designing</section>
            <p>Your website is your presence on the web and your online presence is often your first interaction with potential customers. We at D-tech thoroughly plan and implement tailored designs to meet your particular needs and depict your brand identity in the perfect fashion. We take the utmost care in web designing for you. We bring innovation, originality and creativity at your doorstep within the purview of your organizational goals and brand strategy.</p>
            <section> Slicing Services</section>
            <p> Our html CSS coders have awesome expertise in handling browser compatibility and responsive design. We work with html 5, CSS 3.0, web 2.0 standards to handle all html requirements.</p>
            <section>Digitization of Books</section>
            <p>We provide superior quality digitization of books on all major platforms such as iBooks, Amazon Kindle Store, Nooks etc.</p>
        </div>
        <div id='brand_content' style='padding:20px; background:#fff;'>
            <div class="content_image">
                <img src="<?php echo Yii::app()->baseUrl; ?>/frontend/images/comments_img_03.jpg" />
            </div>
            <section>
                Brand Identity
            </section>
            <p>The brand is the personality of your product as perceived by your consumer. Therefore, brand identity comprises the elements that speaks for the ‘personality’ and ‘expresses’ it for the consumer. Brand identity services are crucial for any business to build the right kind of perception in the consumers’ mind. It is one of the focal points of positioning in the overall product strategy planning.</p>
            <p>Our Brand Identity services include:</p>
            <li>Strategic planning</li>
            <p>Strategy gives you direction and strategic planning; answering these questions requires expertise, professional experience and foresight. D-tech provides a platform more like a one stop shop, where we take care of all your worries and handle everything related to your brand identity needs with the utmost care.</p>
            <li>Logo design</li>
            <li>Banner design</li>
            <li>Business card design</li>
            <li>Stationery design</li>
            <li>Interfaces</li>
            <!--
            <ul class="brand_ul">
            	<li>Strategic planning</li>
                <p>
                    Strategy gives you direction and strategic planning; answering these questions requires expertise, professional experience and foresight. D-tech provides a platform more like a one stop shop, where we take care of all your worries and handle everything related to your brand identity needs with the utmost care.
                </p>
           	</ul>
            <ul class="brand_ul">
                <li>Internet Marketing, Website Marketing, SEO & Social Media Marketing</li>
                <p>
                    We provide a free consultation to all our clients to help build a better working relationship. It also gives clients an opportunity to see the work being done here at D-tech.
                </p>
                <p>
                    We provide full-fledged services for web marketing, search engine optimization (SEO) and Social Media Marketing (SMM).
                </p>
                <p>
                    Advertising and marketing efforts using web and email require the right kind of expertise to correctly target the potential customer base. These efforts must be customized to address the marketing strategy and goals set for the world wide web.
                </p>
            </ul>


            <ul class="brand_ul">
                <li class="noline">Logo design , Banner design , Business card design , Stationery design , Interfaces</li>
          

            </ul>
            <p>
                The logo, banner, business cards, stationery and interfaces are all outward expressions of your brand. You have to brand these to get noticed by the customer, and to effectively communicate and relate with the customer.
                Brand identity is crucial at any setup, be it commercial or non-commercial. Therefore, you need to have it all planned so that the direction of the advertising and marketing efforts can be truly and accurately defined for all the stakeholders. Moreover, a well-planned strategy will precisely define the brand identity of the brand (and company) in the customer’s mind.
            </p>
            -->
            <p>The logo, banner, business cards, stationery and interfaces are all outward expressions of your brand. You have to brand these to get noticed by the customer, and to effectively communicate and relate with the customer.</p>
            <p>Brand identity is crucial at any setup, be it commercial or non-commercial. Therefore, you need to have it all planned so that the direction of the advertising and marketing efforts can be truly and accurately defined for all the stakeholders. Moreover, a well-planned strategy will precisely define the brand identity of the brand (and company) in the customer’s mind.</p>
      	</div>
    </div>
<!-- Grab Google CDN's jQuery, fall back to local if offline -->
	<!-- 2.0 for modern browsers, 1.10 for .oldie -->


	<!--
	Include gumby.js followed by UI modules.
	Or concatenate and minify into a single file
	<script src="js/libs/gumby.js"></script>
	<script src="js/libs/ui/gumby.retina.js"></script>
	<script src="js/libs/ui/gumby.fixed.js"></script>
	<script src="js/libs/ui/gumby.skiplink.js"></script>
	<script src="js/libs/ui/gumby.toggleswitch.js"></script>
	<script src="js/libs/ui/gumby.checkbox.js"></script>
	<script src="js/libs/ui/gumby.radiobtn.js"></script>
	<script src="js/libs/ui/gumby.tabs.js"></script>
	<script src="js/libs/ui/gumby.navbar.js"></script>
	<script src="js/libs/ui/gumby.fittext.js"></script>
	<script src="js/libs/ui/jquery.validation.js"></script>
	<script src="js/libs/gumby.init.js"></script>-->

	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/packages/jui/responsive/libs/gumby.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/packages/jui/responsive/plugins.js"></script>
	

	<!-- Change UA-XXXXX-X to be your site's ID -->
	<!--<script>
	window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
	Modernizr.load({
	  load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
	});
	</script>-->

	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
	   chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7 ]>
	<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
	<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->

</body>
</html>