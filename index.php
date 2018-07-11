<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="/assets/css/main.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/aside.php'); ?>
    
    <!-- Content -->
    <main id="content">
        <!-- jumbotrons slider -->
        <div class="jumbotrons">
            <div class="visual-list slide-1">
                <div class="container-fluid">
                    <div class="details">
                        <small>MISSION</small>
                        <h3>Internation Projects</h3>
                        <p>
                            We bring hope to neighbors in despair <br class="d-sm-block d-md-none">
                            around the world
                        </p>
                        <div class="bar">
                            <span class="left"></span>
                            <span class="right"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="visual-list slide-2">
                <div class="container-fluid">
                    <div class="details">
                        <small>MISSION</small>
                        <h3>Internation Projects</h3>
                        <p>
                            We bring hope to neighbors in despair <br class="d-sm-block d-md-none">
                            around the world
                        </p>
                        <div class="bar">
                            <span class="left"></span>
                            <span class="right"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="visual-list slide-3">
                <div class="container-fluid">
                    <div class="details">
                        <small>MISSION</small>
                        <h3>Internation Projects</h3>
                        <p>
                            We bring hope to neighbors in despair <br class="d-sm-block d-md-none">
                            around the world
                        </p>
                        <div class="bar">
                            <span class="left"></span>
                            <span class="right"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <section class="international">
			<div class="container">
				<div class="section-header">
					<h3>International Sponsorship<br class="d-sm-block d-md-none"> Establishment</h3>
					<p>
						<b class="or">17 overseas</b> branches are closely connected,<br class="d-md-none"> 
						coorperating in diverse sharing activities<br class="d-md-none">
						<b class="bl">all around the world</b>
					</p>
					<div class="btn-more">
				        <a href="#" class="btn btn-default btn-orange" role="button">more</a>
					</div>
				</div>
				<div class="section-content">
					<div class="maps">
						<p class="d-md-none">
							<img src="/assets/images/main/img_international_map_sm.gif" class="img-fluid" alt="">
						</p>
						<p class="map-lg d-none d-md-block item">
							<img src="/assets/images/main/img_international_lg_map.jpg" class="img-fluid international-map" alt="">
							<img src="/assets/images/main/icon_national_flag.png" class="img-fluid icon-national-flag" alt="">
						</p>
					</div>
				</div>
			</div>
		</section>
   
        <section class="personal">
            <article class="donation">
                <div class="icon-img">
                    <img src="/assets/images/main/img_content01.jpg" class="img-fluid" alt="">
                </div>
                <div class="details">
                    <img src="/assets/images/main/bg_none_img.jpg" class="img-fluid" alt="">
                    <div class="container">
                        <div class="position-box">
                            <div class="v-align">
                                <div>
                                    <h3>Personal Donation</h3>
                                    <p>Please contact us to make a donation.</p>
                                    <ul class="contact">
                                        <li class="tel"><a href="tel:0607001544">060-700-1544</a></li>
                                        <li class="mail"><a href="mailto:help@goodpeople.co.kr">help@goodpeople.co.kr</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="partner">
                <div class="icon-img">
                    <img src="/assets/images/main/img_content02.jpg" class="img-fluid" alt="">
                </div>
                <div class="details">
                    <img src="/assets/images/main/bg_none_img.jpg" class="img-fluid" alt="">
                    <div class="container">
                        <div class="position-box">
                            <div class="v-align">
                                <div>
                                    <h3>Contribution Partner</h3>
                                    <P>
                                        In contemporary society, a corporate philanthropy has shifted  from an option to a requirement.<br class="d-none d-xl-block">  It has become<br class="d-none d-md-block d-xl-none"> increasingly important in establishing a corporate’s positive image.<br class="d-none d-xl-block"> Moreover, corporat philanthropy s timulate<br class="d-none d-md-block d-xl-none"> employee participation and unity, and  sense of<br class="d-none d-xl-block"> worthwhile through giving. Goodpeople is waiting for<br class="d-none d-md-block d-xl-none"> partnership with corporation  who will<br class="d-none d-xl-block"> participate in making the world a better place to live.
                                    </P>
                                    <div class="btn-more">
                                        <a href="#" class="btn btn-default btn-white" role="button">more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="/assets/js/main.js"></script>
    <script>
        (function($){
            // 지도 관련
            $(window).on('scroll', function() {
                $('.item').each(function(index, elem) {
                    if ($(window).scrollTop() > $(elem).offset().top - ($(window).height() / 1.3)) {
                        $(elem).addClass('on');
                    }
                });
            });
        })(jQuery);
    </script>
</body>
</html>