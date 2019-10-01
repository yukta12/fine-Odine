<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />


<?php
include_once("includes/database.php");
$city = "";
if(isset($_GET['city'])){
    $city = $_GET['city'];
}
?>


<head>
    <meta name="viewport" id="customViewPort" content="width=device-width,initial-scale=1,user-scalable=0">
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <meta name="format-detection" content="telephone=no">
    <meta charset="utf-8">
    <title>Best restaurants in <?php echo $city; ?> | Book a Table online @ Fine Dine</title>
    <meta name="description" content="Fine Dine offers online restaurant reservation with a guaranteed deal in Mumbai. Find reviews and expert opinions on the top and best restaurants and bars in Mumbai" />
    <link rel="canonical" href="mumbai.html" />

    <link media="all" type="text/css" rel="stylesheet" href="plugins/intl-tel-input/build/css/intlTelInput.css">
    <link media="all" type="text/css" rel="stylesheet" href="build/web/groot/css/base208d.css?id=ff0dc9fde3cfa214af11">
    <link media="all" type="text/css" rel="stylesheet" href="build/web/groot/css/homee7fa.css?id=7ccd153e9afc40322ce3">
    <script src="plugins/jquery/jquery-3.1.1.min.js"></script>
    <script src="plugins/jquery-ui-1.12.1/jquery-ui.min.js"></script>
    <link rel="search" href="opensearchdescription.xml" type="application/opensearchdescription+xml" title="eazydiner.com" />
    <script defer="defer" src="build/web/groot/js/city9a24.js?id=e284c8bb3f94a3acd44f"></script>
    <script>
        var IMAGE_URL = 'https://d4t7t8y8xqo0t.cloudfront.net/';

    </script>
</head>


<body>
<?php
include_once("includes/header.php");
?>
<?php include_once("includes/banner.php");?>


<!--backup collection-->
<div class="container margin-t-60">
    <a href="view-all.php?city=<?php echo $city;?>" class="grey">
        <h2 class="h4 font-24 grey text-center bold center">New On FineDine In <?php echo $city;?> <span class="grey-light padding-r-10 padding-l-10 font-18">|</span><span class="normal font-14">See All</span></h2>
    </a>
    <div id="container-restaurants">
    <div class="margin-t-30">
        <div class="grid gutter-grid">
            <div class="marg"></div>
            <?php
            $hotels_per_page = 9;
            if(isset($_GET['page'])){
                $page = $_GET['page'];
            }else{
                $page=1;
            }
            if($page=="" || $page == 1){
                $limit_start = 0;
            }else{
                $limit_start = ($page * $hotels_per_page) - $hotels_per_page;
            }
            $query = "SELECT count(*) as num_rows FROM hotels WHERE city = '$city'";
            $result = mysqli_query($connection, $query);
            $total_count = 0;
            if($row = mysqli_fetch_assoc($result)){
                $total_count = $row['num_rows'];
            }else{
                die("error while retrieving total count of the table");
            }
            $count = ceil($total_count/$hotels_per_page);

            $query = "SELECT * FROM hotels WHERE city = '$city' ORDER BY hid DESC LIMIT $limit_start, $hotels_per_page";

            $resultSet = mysqli_query($connection, $query);

            if(!$resultSet){
                echo mysqli_error($connection);
            }
            while($row = mysqli_fetch_assoc($resultSet)){
                $hotel_name = $row['hotel_name'];
                $hotel_id = $row['hid'];

                ?>

                <div class="w-4-12 w-lg-4-12">
                    <div class="bg-white shadow">
                        <div class="img1-8 img-hover"><a href="<?php echo "hotels/hotel.php?city=$city&hotel_id=$hotel_id";?>"><img src="images/hotels/<?php echo $city."/".trim($hotel_id," ");?>/image1.png"  alt="<?php echo $hotel_name;?>"></a></div>
                        <div class="padding-20">
                            <a href="<?php echo "hotels/hotel.php?city=$city&hotel_id=$hotel_id";?>">
                                <h3 class="grey text-bold font-18"><?php echo $hotel_name;?></h3>
                                <h4 class="grey ellipsis margin-t-2 font-13"><?php echo $row['location'];?></h4>
                            </a>
                            <div class="margin-t-10">
                                <div class="grid">
                                    <div class="w-5-12 w-lg-4-12 grey-light">Cost for two</div>
                                    <div class="w-7-12 w-lg-8-12 grey"> Rs <?php echo $row['costfor2'];?> </div>
                                    <div class="w-5-12 w-lg-4-12 grey-light margin-t-12">Cuisine</div>
                                    <div class="w-7-12 w-lg-8-12 grey ellipsis margin-t-12"> <?php echo $row['cuisine'];?> </div>
                                </div>
                            </div>
                            <div class="margin-t-20 grid v-center">
                                <div class="w-3-12 text-right">
                                    <a href="<?php echo "hotels/hotel.php?city=$city&hotel_id=$hotel_id";?>" class="button-hollow btn-explore small" role="button">Explore</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php

            }
            ?>
            <hr>

        <div class="margin-b-30 padding-20 bg-white shadow text-center w-12-12">
            <ul class="pagination">
                <?php
                if($page>1)
                    $temp_small = $page - 1;
                else
                    $temp_small = 1;


                echo "<li><a href='view-all.php?page=$temp_small&city=$city'>&lt;&lt;</a></li>";

                for($i=1; $i<=$count; $i++){
                    if($i == $page)
                        echo "<li><a class='page-active' href='view-all.php?page=$i&city=$city'>$i</a></li>";
                    else
                        echo "<li><a href='view-all.php?page=$i&city=$city'>$i</a></li>";
                }

                if($page<$count)
                    $temp_up = $page + 1;
                else
                    $temp_up = $count;

                echo "<li><a href='view-all.php?page=$temp_up&city=$city'>&gt;&gt;</a></li>";
                ?>

            </ul>
        </div>


        </div>
    </div>
</div>
</div>

<?php
include_once("includes/cuisines.php");
?>

<div class="container margin-t-60">
    <h2 class="h4 text-center bold font-24 grey">Why Book With Fine 'O' Dine</h2>
    <div id="why-book1">
        <div class="grid gutter-grid margin-t-20">
            <div class="w-4-12 w-lg-4-12">
                <div class="bg-white h-100 padding-20 padding-t-b-30 shadow">
                    <ul class="list">
                        <li>
                            <div class="grid">
                                <div class="w-2-12 v-center"><span class="ico ico-lg-md"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 63.91 64"><g><path d="M56.38,43.56a10.66,10.66,0,0,1-12.9,12.88,2.27,2.27,0,0,0-2.44,1,10.6,10.6,0,0,1-14.73,3.45,10.2,10.2,0,0,1-3.45-3.45,2.18,2.18,0,0,0-2.44-1,10.72,10.72,0,0,1-12.8-13A2.26,2.26,0,0,0,6.6,41,10.57,10.57,0,0,1,3.15,26.32,10.2,10.2,0,0,1,6.6,22.87a2.18,2.18,0,0,0,1-2.43A10.92,10.92,0,0,1,15.54,7.55a10.75,10.75,0,0,1,5.08,0,2.27,2.27,0,0,0,2.44-1A10.6,10.6,0,0,1,37.79,3.09a12.47,12.47,0,0,1,3.35,3.55,2.18,2.18,0,0,0,2.44,1,10.55,10.55,0,0,1,12.8,7.81,10.7,10.7,0,0,1,0,5.07,2.26,2.26,0,0,0,1,2.43A10.57,10.57,0,0,1,61,37.58a10.8,10.8,0,0,1-3.56,3.55A2.26,2.26,0,0,0,56.38,43.56Z" transform="translate(-0.06 0)" style="fill:none;stroke:#616161;stroke-miterlimit:10;stroke-width:2.9131819921207036px"/><polygon points="18.01 44.92 45.23 17.73 45.59 18.09 18.37 45.28 18.01 44.92" style="fill:none;stroke:#616161;stroke-miterlimit:10;stroke-width:2px"/><circle cx="27.27" cy="27.34" r="2.54" style="fill:none;stroke:#616161;stroke-miterlimit:10;stroke-width:2.9131819921207036px"/><circle cx="36.21" cy="36.26" r="2.54" style="fill:none;stroke:#616161;stroke-miterlimit:10;stroke-width:2.9131819921207036px"/></g></svg></span></div>
                                <div class="w-10-12 padding-l-20">
                                    <h5 class="h5 bold">Deals</h5>
                                    <p class="margin-t-5">Super hot free deals with every reservation</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-4-12 w-lg-4-12">
                <div class="bg-white padding-20 h-100 padding-t-b-30 shadow">
                    <ul class="list">
                        <li>
                            <div class="grid">
                                <div class="w-2-12 v-center"><span class="ico ico-lg-md"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 61.18 62.92"><g><line x1="1.43" y1="41.09" x2="21.16" y2="41.09" style="fill:none;stroke:#616161;stroke-linecap:round;stroke-linejoin:round;stroke-width:2.859452215418886px"/><line x1="13.25" y1="26.12" x2="21.16" y2="26.12" style="fill:none;stroke:#616161;stroke-linecap:round;stroke-linejoin:round;stroke-width:2.859452215418886px"/><line x1="9.34" y1="33.65" x2="21.16" y2="33.65" style="fill:none;stroke:#616161;stroke-linecap:round;stroke-linejoin:round;stroke-width:2.859452215418886px"/><polyline points="33.64 21.83 33.64 34.13 45.93 44.81" style="fill:none;stroke:#616161;stroke-linecap:round;stroke-linejoin:round;stroke-width:2.859452215418886px"/><line x1="31.07" y1="1.43" x2="36.31" y2="1.43" style="fill:none;stroke:#616161;stroke-linecap:round;stroke-linejoin:round;stroke-width:2.859452215418886px"/><line x1="33.64" y1="1.43" x2="33.64" y2="9.25" style="fill:none;stroke:#616161;stroke-linecap:round;stroke-linejoin:round;stroke-width:2.859452215418886px"/><line x1="54.61" y1="9.25" x2="58.51" y2="13.16" style="fill:none;stroke:#616161;stroke-linecap:round;stroke-linejoin:round;stroke-width:2.859452215418886px"/><line x1="56.51" y1="11.15" x2="51.46" y2="16.21" style="fill:none;stroke:#616161;stroke-linecap:round;stroke-linejoin:round;stroke-width:2.859452215418886px"/><path d="M35,9.79A26.12,26.12,0,1,1,18.56,56.21" transform="translate(-1.41 -0.54)" style="fill:none;stroke:#616161;stroke-linecap:round;stroke-linejoin:round;stroke-width:2.859452215418886px"/></g></svg></span></div>
                                <div class="w-10-12 padding-l-20">
                                    <h3 class="h5 bold">Quick Booking</h3>
                                    <p class="margin-t-5">Instant booking in 20 seconds</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-4-12 w-lg-4-12">
                <div class="bg-white h-100 padding-20 padding-t-b-30 shadow">
                    <ul class="list">
                        <li>
                            <div class="grid">
                                <div class="w-2-12 v-center"><span class="ico ico-lg-md"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 63.05 57.79"><g><path d="M62,28.3a4.67,4.67,0,0,1-4.48,4.84H47a4.73,4.73,0,0,1-4.57-4.74V25.07A4.67,4.67,0,0,1,47,20.23H57.43A4.58,4.58,0,0,1,61.9,25v.09Z" transform="translate(-0.48 -3.05)" style="fill:none;stroke:#616161;stroke-miterlimit:10;stroke-width:3.0522653513642877px"/><ellipse cx="48.48" cy="23.54" rx="1.33" ry="1.33" style="fill:none;stroke:#616161;stroke-linecap:round;stroke-linejoin:round;stroke-width:3.0522653513642877px"/><ellipse cx="28.67" cy="46.02" rx="10.29" ry="10.25" style="fill:none;stroke:#616161;stroke-linejoin:round;stroke-width:3.0522653513642877px"/><line x1="24.38" y1="50.29" x2="33.05" y2="41.66" style="fill:none;stroke:#616161;stroke-linecap:round;stroke-linejoin:round;stroke-width:3.0522653513642877px"/><line x1="33.05" y1="50.29" x2="24.38" y2="41.66" style="fill:none;stroke:#616161;stroke-linecap:round;stroke-linejoin:round;stroke-width:3.0522653513642877px"/><path d="M47,33.14a4.58,4.58,0,0,1-4.48-4.74V25.07A4.67,4.67,0,0,1,47,20.23h9.81V13.69a9.17,9.17,0,0,0-9-9.11H7.24A5.27,5.27,0,0,0,2,9.8H2V43.57a5.27,5.27,0,0,0,5.24,5.22H18.86v.28a10.29,10.29,0,0,0,20.57,0v-.28h8.19a9.11,9.11,0,0,0,9.14-9V33.23L47,33.14Z" transform="translate(-0.48 -3.05)" style="fill:none;stroke:#616161;stroke-linejoin:round;stroke-width:3.0522653513642877px"/></g></svg></span></div>
                                <div class="w-10-12 padding-l-20">
                                    <h3 class="h5 bold">Free Cancellation</h3>
                                    <p class="margin-t-5">Free cancellation always flexible always free</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="margin-t-60 bg-white shadow">
</div>
<?php
include_once("includes/footer.php");

?>

<div class="back-top"><a href="#header"><img class="ico-lg" alt="Back To Top" src="images/arrow-up.svg"></a></div>
<script src="plugins/intl-tel-input/build/js/intlTelInput.min.js"></script>
<script src="plugins/zebra-datepicker/javascript/zebra_datepicker.js"></script>
<script src="build/web/groot/js/base1427.js?id=6f1b7673fc80c5bd3dbb"></script>
<script>
    function logoClicked() {
        clevertap.event.push("Logo Clicked", {
            "View Name": "City Page",
            'City Name': 'Mumbai'
        });
    }
    $(document).on('click', '#ad-platinum>a', function(e) {
        e.preventDefault();
        var href = $(this).attr('href');
        var id = $(this).data('id');
        clevertap.event.push("Ad Clicked", {
            "View Name": "City Page",
            'City Name': 'Mumbai',
            'Medium': 'Desktop Website',
            'Ad ID': id,
            'Type': 'Platinum'
        });
        window.location.href = href;
    });

</script>
<script>
    var AD_URL = 'ad.html';
    var VIEW_NAME = 'cityhome';
    showAds('3568', '2', null, null);

</script>
</body>


</html>
