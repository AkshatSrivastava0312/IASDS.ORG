<?php
session_start();
 include './admin/connection.php';
$sql = "SELECT * FROM `incumbancy`";
$result = mysqli_query($conn, $sql);
# print_r($result);
?>
<!DOCTYPE html>
<html lang="en">
    <?php include './headerlinks.php'; ?>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>

    <body class="body-wrapper">

        <div class="main_wrapper">

            <?php include './header.php'; ?>


            <style>
                .timeline {
                    list-style: none;
                    padding: 20px 0 20px;
                    position: relative;
                }
                .timeline:before {
                    top: 0;
                    bottom: 0;
                    position: absolute;
                    content: " ";
                    width: 5px;
                    background-color: #eeeeee;
                    left: 10%;
                    margin-left: -1.5px;
                }
                .timeline > li {
                    margin-bottom: 20px;
                    position: relative;
                    width: 90%;
                    float: left;
                    clear: left;
                }
                .timeline > li:before,
                .timeline > li:after {
                    content: " ";
                    display: table;
                }
                .timeline > li:after {
                    clear: both;
                }
                .timeline > li:before,
                .timeline > li:after {
                    content: " ";
                    display: table;
                }
                .timeline > li:after {
                    clear: both;
                }
                .timeline > li > .timeline-panel {
                    width: 95%;
                    float: left;
                    border: 1px solid #d4d4d4;
                    /*border-radius: 2px;*/
                    /*padding: 20px;*/
                    position: relative;
                    -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
                    box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
                }

                .timeline > li > .timeline-panel:before {
                    position: absolute;
                    top: 26px;
                    right: -15px;
                    display: inline-block;
                    border-top: 15px solid transparent;
                    border-left: 15px solid #ccc;
                    border-right: 0 solid #ccc;
                    border-bottom: 15px solid transparent;
                    content: " ";
                }
                .timeline > li > .timeline-panel:after {
                    position: absolute;
                    top: 27px;
                    right: -14px;
                    display: inline-block;
                    border-top: 14px solid transparent;
                    border-left: 14px solid #fff;
                    border-right: 0 solid #fff;
                    border-bottom: 14px solid transparent;
                    content: " ";
                }
                .timeline > li > .timeline-badge {
                    color: #fff;
                    width: 24px;
                    height: 24px;
                    line-height: 50px;
                    font-size: 1.4em;
                    text-align: center;
                    position: absolute;
                    top: 16px;
                    right: -12px;
                    /*background-color: #999999;*/
                    z-index: 100;
                    /*
                    border-top-right-radius: 50%;
                    border-top-left-radius: 50%;
                    border-bottom-right-radius: 50%;
                    border-bottom-left-radius: 50%;
                    */
                }
                .timeline > li.timeline-inverted > .timeline-panel {
                    float: right;
                }
                .timeline > li.timeline-inverted > .timeline-panel:before {
                    border-left-width: 0;
                    border-right-width: 15px;
                    left: -15px;
                    right: auto;
                }
                .timeline > li.timeline-inverted > .timeline-panel:after {
                    border-left-width: 0;
                    border-right-width: 14px;
                    left: -14px;
                    right: auto;
                }
                .timeline-badge > a {
                    color: #C5C7C5 !important;
                }
                .timeline-badge a:hover {
                    color: #000 !important;
                }
                .timeline-title {
                    margin-top: 0;
                    color: inherit;
                }
                .timeline-body > p,
                .timeline-body > ul {
                    padding:20px;
                    margin-bottom: 0;
                }
                .timeline-body > p + p {
                    margin-top: 5px;
                }
                .timeline-footer{
                    padding:20px;
                    background-color:#f4f4f4;
                }
                .timeline-footer > a{
                    cursor: pointer;
                    text-decoration: none;
                }
                .tooltip{

                    position:absolute;
                    z-index:1020;
                    display:block;
                    visibility:visible;
                    padding:5px;
                    font-size:11px;
                    opacity:0;
                    filter:alpha(opacity=0);

                }
                .tooltip.in{
                    /*opacity:0;
                    filter:alpha(opacity=80);*/

                }
                .tooltip.top{
                    margin-top:-2px;
                }
                .tooltip.right{
                    margin-left:2px;
                }
                .tooltip.bottom{
                    margin-top:2px;
                }
                .tooltip.left{
                    margin-left:-2px;
                }
                .tooltip.top .tooltip-arrow{
                    bottom:0;
                    left:0;
                    margin-left:0;
                    border-left:0 solid transparent;
                    border-right:5px solid transparent;
                    border-top:0 solid #000;
                }
                .tooltip.left .tooltip-arrow{
                    bottom:0;
                    left:0;
                    margin-left:0;
                    border-left:0 solid transparent;
                    border-right:5px solid transparent;
                    border-top:0 solid #000;
                }
                .tooltip.bottom .tooltip-arrow{
                    bottom:0;
                    left:0;
                    margin-left:0;
                    border-left:0 solid transparent;
                    border-right:5px solid transparent;
                    border-top:0 solid #000;
                }
                .tooltip.right .tooltip-arrow{
                    bottom:0;
                    left:0;
                    margin-left:0;
                    border-left:0 solid transparent;
                    border-right:5px solid transparent;
                    border-top:0 solid #000;
                }
                .tooltip-inner{
                    width:200px;
                    padding:3px 8px;
                    color:#fff;
                    text-align:center;
                    text-decoration:none;
                    background-color:#313131;
                    -webkit-border-radius:0px;
                    -moz-border-radius:0px;
                    border-radius:0px;
                }
                .tooltip-arrow{
                    position:absolute;
                    width:0;
                    height:0;
                }
                .timeline > li.timeline-inverted{
                    float: right; 
                    clear: right;
                    margin-top: 30px;
                    margin-bottom: 30px;
                }
                .timeline > li:nth-child(2){
                    margin-top: 60px;
                }
                .timeline > li.timeline-inverted > .timeline-badge{
                    left: -12px;
                }

                @media (max-width: 767px) {
                    ul.timeline:before {
                        left: 40px;
                    }

                    ul.timeline > li {
                        margin-bottom: 20px;
                        position: relative;
                        width:100%;
                        float: left;
                        clear: left;
                    }
                    ul.timeline > li > .timeline-panel {
                        width: calc(100% - 90px);
                        width: -moz-calc(100% - 90px);
                        width: -webkit-calc(100% - 90px);
                    }

                    ul.timeline > li > .timeline-badge {
                        left: 28px;
                        margin-left: 0;
                        top: 16px;
                    }

                    ul.timeline > li > .timeline-panel {
                        float: right;
                    }

                    ul.timeline > li > .timeline-panel:before {
                        border-left-width: 0;
                        border-right-width: 15px;
                        left: -15px;
                        right: auto;
                    }

                    ul.timeline > li > .timeline-panel:after {
                        border-left-width: 0;
                        border-right-width: 14px;
                        left: -14px;
                        right: auto;
                    }

                    .timeline > li.timeline-inverted{
                        float: left; 
                        clear: left;
                        margin-top: 30px;
                        margin-bottom: 30px;
                    }

                    .timeline > li.timeline-inverted > .timeline-badge{
                        left: 28px;
                    }
                }
            </style>
        </head>
        <div class="single_banner">
            <div class="container-fluid">
                <div class="single_banner_inner">
                    <img src="img/home/slider/1.JPG" alt="" />
                    <div class="single_caption">
                        <h1>Incumbency</h1>

                    </div><!--end single caption-->
                </div>
            </div><!--end container-->
        </div>
        <div class="container">
            <div class="page-header text-center">
                <h1 id="timeline">Timeline</h1>
            </div>
            <ul class="timeline">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <li class="timeline-inverted">
                        <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record" rel="tooltip" title="11 hours ago via Twitter" id=""></i></a></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">

                                <div class="row">
                                    <div class="col-lg-2" >
                                        <img class="img-thumbnail" src="admin/<?php echo $row['image']; ?>" />
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="list_block sidebar_item">

                                            <ul class="contact_info" style="padding-left:20px" >
                                                <li style="font-weight:bold"><i  class="fa fa-user-circle" aria-hidden="true"></i><?php echo $row['name']; ?></li>
                                                <li><i class="fa fa-id-badge" aria-hidden="true"></i><?php echo $row['desig']; ?></li>

                                                <li><i class="fa fa-globe"></i> <a href="#"><?php echo $row['duration']; ?></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-body">
                                <p style="text-align:justify"><?php echo $row['descrip']; ?></p>

                            </div>


                        </div>
                    </li>        

                    <?php
                }
                ?>

                <li class="clearfix" style="float: none;"></li>
            </ul>
        </div>                

        <?php include './footer.php'; ?>

    </div>

    <!-- JQUERY SCRIPTS -->
    <?php include './footerlinks.php'; ?>
</body>

</html>

