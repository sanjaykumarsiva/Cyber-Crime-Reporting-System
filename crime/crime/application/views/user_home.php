<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cyber Crime Management System</title>
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
<div id="home">
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
                            Cyber Crime <br>Management System <i class="fa fa-balance-scale" aria-hidden="true"></i></a></h4>
                    </div>

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav link-effect-4">
                        <li class="active"><a href="home" data-hover="Home">Home</a> </li>
                        <li><a href="#clist" class="scroll">Complaint List</a></li>
                        <li><a href="login">Logout</a></li>
                        <!--                        <li><a href="#contact" class="scroll">Contact</a></li>-->
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </div>
    </div>
    <!-- //agileinfo-dot -->
</div>
<!-- //banner -->

<!-- New Complaint -->
<div class="free_agile_consultation contact" id="login">
    <div class="col-md-6 free_consultation_agile">
        <h4>Raise your Cyber Complaint</h4>
        <h6>please raise your complaint here and check your complaint status below list.</h6>
        <form action="user_home/register" method="post" enctype="multipart/form-data">
            <div class="contact-left agileits-w3layouts free_w3ls_agile">
                <select class="form-control" name="type">
                <option>Cyber Crime Category</option>
                    <option value="phishing">phishing</option>
                    <option value="identity theft">identity theft</option>
                    <option value="hacking">hacking</option>
                    <option value="distributing child pornography">distributing child pornography</option>
                    <option value="grooming">grooming</option>
                    <option value="Online Job Fraud">Online Job Fraud</option>
                    <option value="Unauthorized access">Unauthorized access</option>
                    <option value="Online Business Fraud">Online Business Fraud</option>
                    <option>Other</option>
                </select>
                <input class="email" name="location" type="text" placeholder="Location" required="">
                <input name="files" type="file" placeholder="Email" required="">
                <textarea name="message" placeholder="Crime Details" required=""></textarea>
                <input type="submit" value="Raise your Complaint">
            </div>
        </form>
    </div>
    <div class="col-md-6 free_agile_consultaion_img">
    </div>
    <div class="clearfix"> </div>
</div>
<!-- //New Complaint -->

<!-- about -->
<div class="about" id="clist">
    <div class="container">
        <h1 align="center">Your Complaint List</h1>
        <div class="w3l-about-grids_inner">
            <table class="table table-bordered table-responsive">
                <thead>
                <th>S.No</th>
                <th>Crime Type</th>
                <th>Image</th>
                <th>Location</th>
                <th>Status</th>
                <th>Description</th>
                </thead>
                <tbody>
                <?php $i=1; foreach ($crimes as $crime){?>
                <tr>
                    <td><?php echo $i?></td>
                    <td><?php echo $crime['crime_type']?></td>
                    <td><img src="upload_files/user_crime/<?php echo $crime['crime_image']?>" style="width: 75px;height: 75px"></td>
                    <td><?php echo $crime['location']?></td>
                    <td><?php echo $crime['status']?> <?php if($crime['status']=='not accept') echo '<br>'.$crime['solution']?></td>
                    <td><?php echo $crime['crime_details']?></td>
                </tr>
                <?php $i++;} ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<center><button onclick="window.print()">Print this page</button></center>
<!-- //about -->

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