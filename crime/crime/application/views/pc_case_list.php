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
                        <h4>
                            <a href="index.html" style="color:white;">
                                Cyber Crime<br>Management System <i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                            </h1>
                    </div>

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav link-effect-4">
                        <li><a href="pc_home">Case Register</a></li>
                        <li><a href="pc_comment">Messages</a></li>
                        <li><a href="pc_case">Add News</a></li>
                        <?php if(isset($_SESSION['pc'])){?>
                            <li><a href="pc_login/logout">Logout</a></li>
                        <?php } else{?>
                            <li><a href="login">Login</a></li>
                        <?php }?>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </div>
    </div>
    <!-- //agileinfo-dot -->
</div>
<!-- //banner -->

<!-- emergency list -->
<div class="about" id="elist">
    <div class="container">
        <h1 align="center">FIR List</h1>
        <div class="w3l-about-grids_inner">
            <table class="table table-bordered table-responsive">
                <thead>
                <th>S.No</th>
                <th>FIR Number</th>
                <th>FIR From</th>
                <th>Crime Type</th>
                <th>Status</th>
                <th>Details</th>
                <th>Action</th>
                </thead>
                <tbody>
                <?php $i=1; foreach ($cases as $crime){?>
                    <tr>
                        <td><?php echo $i?></td>
                        <td><?php echo $crime['fir_number']?></td>
                        <td><?php echo $crime['station_id']?></td>
                        <td><?php echo ucwords($crime['crime_type'])?></td>
                        <td><?php echo ucwords($crime['status'])?></td>
                        <td><?php echo ucwords($crime['fir_details'])?></td>
                        <?php if ($crime['status2']['status']=='not'){?>
                        <td><button class="btn btn-primary" onclick="myrequest(<?php echo $crime['id']?>)">Request</button></td>
                        <?php } else if($crime['status2']['status']==0){ ?>
                        <td><button class="btn btn-primary" disabled>Requested</button></td>
                        <?php } else if($crime['status2']['status']==1){ ?>
                        <td><a href="upload_files/case_files/<?php echo $crime['case_doc']?>" download><button class="btn btn-success">Download</button></a></td>
                        <?php } else{?>
                        <td><button class="btn btn-danger" disabled>Rejected</button></td>
                        <?php }?>
                    </tr>
                <?php } $i++;?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- //emergency list -->
<hr/>
<!-- user list -->
<div class="about" id="elist">
    <div class="container">
        <h1 align="center">Requested Files to You</h1>
        <div class="w3l-about-grids_inner">
            <table class="table table-bordered table-responsive">
                <thead>
                <th>S.No</th>
                <th>FIR Number</th>
                <th>Request From</th>
                <th>Granted</th>
                <th>Denied</th>
                </thead>
                <tbody>
                <?php $i=1; foreach ($casess as $crime){?>
                    <tr>
                        <td><?php echo $i?></td>
                        <td><?php echo $crime['fir_number']?></td>
                        <td><?php echo $crime['station_id']?></td>
                        <td><button class="btn btn-success" onclick="myaccept(<?php echo $crime['id']?>)">Accept</button></td>
                        <td><button class="btn btn-danger" onclick="myreject(<?php echo $crime['id']?>)">Reject</button></td>
                    </tr>
                <?php } $i++;?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- //user list -->
<hr/>

<!-- footer -->
<?php include_once ('application/views/include/footer.php')?>
<!-- //footer -->
<!-- //footer -->
<script src="<?php echo base_url()?>design/js/jquery-2.1.4.min.js"></script>

<script>
    function myrequest(id) {
        $.ajax({
           url:'pc_case_list/file_request',
            type:'post',
            data:{'id':id},
            success:function (data) {
                alert(data);
                location.reload();
            }
        });
    }
    function myaccept(id) {
        $.ajax({
            url:'pc_case_list/file_accept',
            type:'post',
            data:{'id':id},
            success:function (data) {
                alert(data);
                location.reload();
            }
        });
    }
    function myreject(id) {
        $.ajax({
            url:'pc_case_list/file_reject',
            type:'post',
            data:{'id':id},
            success:function (data) {
                alert(data);
                location.reload();
            }
        });
    }
</script>



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