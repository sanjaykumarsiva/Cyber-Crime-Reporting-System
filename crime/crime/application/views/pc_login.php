<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cyber Crime management system</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Legal Adviser Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- bootstrap-css -->
    <link href="<?php echo base_url()?>design/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!--// bootstrap-css -->
    <!-- css -->
    <link rel="stylesheet" href="<?php echo base_url()?>design/css/style.css" type="text/css" media="all" />
    <!--// css -->
    <!-- font-awesome icons -->
    <link href="<?php echo base_url()?>design/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- font -->
    <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- //font -->
</head>

<body>
<!-- banner -->
<div class="banner" id="home">
    <!-- agileinfo-dot -->
    <div class="agileinfo-dot">
        <div class="head">
            <div class="navbar-top">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand logo ">
                        <h4><a href="index.html" style="color:white;">
                            Cyber Crime<br>Management System<i class="fa fa-balance-scale" aria-hidden="true"></i>
                        </a></h4>
                    </div>

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav link-effect-4">
                        <li><a href="<?php echo base_url()?>home" data-hover="Home">Home</a> </li>
                        <li class="active"><a href="<?php echo base_url()?>login" class="scroll">Login</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </div>
    </div>
    <!-- //agileinfo-dot -->
</div>
<!-- //banner -->

<!-- login -->
<div class="free_agile_consultation contact" id="login">
    <div class="col-md-6"><br>
        <img src="<?php echo base_url()?>design/images/fbilogin.png" class="img-responsive" width="450px" height="550px">
    </div>
    <div class="col-md-6 free_consultation_agile">
        <h4>FBI Login</h4>
        <h6>Please use your valid user name and password for login</h6>
        <?php if($otp==0){?>
        <form action="<?php echo base_url()?>pc_login/login" method="post">
            <div class="contact-left agileits-w3layouts free_w3ls_agile">
                <input name="user" type="text" placeholder="User ID" required="" style="text-transform: uppercase">
                <input class="email" type="password" name="password" placeholder="PASSWORD" required="">
                <input type="submit" value="SUBMIT">
            </div>
        </form>
        <?php } if($otp==1){?>
        <form action="<?php echo base_url()?>pc_login/otp" method="post">
            <div class="contact-left agileits-w3layouts free_w3ls_agile">
                <input type="hidden" value="<?php echo $user; ?>" name="user">
                <input type="password" name="otp" placeholder="OTP" required="">
                <input type="submit" value="LOGIN">
            </div>
        </form>
        <?php }?>
    </div>
    <div class="clearfix"> </div>
</div>
<!-- //login -->

<!-- register -->

<!-- //register -->

<!-- footer -->
<?php include_once ('application/views/include/footer.php')?>
<!-- //footer -->
<!-- //footer -->
<script src="<?php echo base_url()?>design/js/jquery-2.1.4.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider4").responsiveSlides({
            auto: true,
            pager: true,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider3").responsiveSlides({
            auto: true,
            pager: false,
            nav: false,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<script src="<?php echo base_url()?>design/js/responsiveslides.min.js"></script>
<script src="<?php echo base_url()?>design/js/bars.js"></script>
<script src="<?php echo base_url()?>design/js/jarallax.js"></script>
<script src="<?php echo base_url()?>design/js/SmoothScroll.min.js"></script>
<script type="text/javascript">
    /* init Jarallax */
    $('.jarallax').jarallax({
        speed: 0.5,
        imgWidth: 1366,
        imgHeight: 768
    })
</script>
<script type="text/javascript" src="<?php echo base_url()?>design/js/easing.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>design/js/move-top.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!-- //here ends scrolling icon -->
<script src="<?php echo base_url()?>design/js/bootstrap.js"></script>
</body>

</html>