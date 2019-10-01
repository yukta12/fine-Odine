<!DOCTYPE html>
<?php
ob_start();
$city = "Mumbai";
$hotel_id = "159";
?>
<html>
<head>
    <meta name="viewport" id="customViewPort" content="width=device-width,initial-scale=1,user-scalable=0">
    <link rel="icon" type="image/png" href="../../images/favicon.png" />
    <meta name="format-detection" content="telephone=no">
    <meta charset="utf-8">
    <title>Best restaurants in <?php echo $city; ?> | Book a Table online @ Fine Dine</title>
    <meta name="description" content="Fine Dine offers online restaurant reservation with a guaranteed deal in Mumbai. Find reviews and expert opinions on the top and best restaurants and bars in Mumbai" />
    <link rel="canonical" href="mumbai.html" />

    <link media="all" type="text/css" rel="stylesheet" href="../../plugins/intl-tel-input/build/css/intlTelInput.css">
    <link media="all" type="text/css" rel="stylesheet" href="../../build/web/groot/css/base208d.css?id=ff0dc9fde3cfa214af11">
    <link media="all" type="text/css" rel="stylesheet" href="../../build/web/groot/css/homee7fa.css?id=7ccd153e9afc40322ce3">
    <script src="../../plugins/jquery/jquery-3.1.1.min.js"></script>
    <script src="../../plugins/jquery-ui-1.12.1/jquery-ui.min.js"></script>
    <link rel="search" href="opensearchdescription.xml" type="application/opensearchdescription+xml" title="eazydiner.com" />
    <script defer="defer" src="../../build/web/groot/js/city9a24.js?id=e284c8bb3f94a3acd44f"></script>
    <script>
        var IMAGE_URL = 'https://d4t7t8y8xqo0t.cloudfront.net/';

    </script>
</head>
<body>


<?php
include_once("../includes/header.php");
?>




<div class="container">
    <div id="ad-golden" class="margin-t-20 relative shadow hidden"></div>
</div>
<?php
include_once("../../includes/database.php");
$query = "SELECT * FROM hotels WHERE hid = $hotel_id";
$result_set = mysqli_query($connection, $query);
if($row = mysqli_fetch_assoc($result_set)) {


    ?>
    <div class="container margin-t-30">
        <div class="grid gutter-grid">
            <div class="w-6-12 w-lg-8-12">
                <div class="padding-20 bg-white shadow">
                    <div class="grid gutter-grid grid-content-center">
                        <div class="w-6-12 w-lg-8-12 v-center">
                            <div class="inline-block">
                                <h1 class="h3">
                                    <div><?php echo $row['hotel_name'];?></div>
                                    <div class="regular margin-t-10 ellipsis"><?php echo $row['location'];?></div>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="margin-t-20">
                    <div class="grid gutter-grid grid-reverse">
                        <div class="w-12-12 w-lg-6-12">
                            <div class="bg-white shadow">
                                <div class="padding-20 ">
                                    <div class="v-center"><span class="ico margin-r-5"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 63 63">
                                                <g data-name="cost for two">
                                                    <path
                                                        d="M53.8,12.06a31.23,31.23,0,0,0-22.3-9.2,31.65,31.65,0,0,0-22.3,9.2A31.23,31.23,0,0,0,0,34.36a31.65,31.65,0,0,0,9.2,22.3,31.23,31.23,0,0,0,22.3,9.2,31.65,31.65,0,0,0,22.3-9.2A31.06,31.06,0,0,0,63,34.36a31.65,31.65,0,0,0-9.2-22.3Zm-1.4,43.2A29.5,29.5,0,0,1,2,34.36a29.68,29.68,0,0,1,8.6-20.9,29.26,29.26,0,0,1,20.9-8.6,29.68,29.68,0,0,1,20.9,8.6,29.35,29.35,0,0,1,8.7,20.9,29.77,29.77,0,0,1-8.7,20.9Z"
                                                        transform="translate(0 -2.86)" style="fill:#616161"/>
                                                    <path
                                                        d="M19.7,18.66v2h7.9a15.12,15.12,0,0,1,5,1,7.91,7.91,0,0,1,3.7,2.9H19.7v2H37.2a6.48,6.48,0,0,1,.2,2c0,2.4-.6,4.5-2.2,5.7-3,2.3-7.5,2.2-7.7,2.2H19.6v2.4L34.7,53l1.3-1.4L22,38.46h5.4c.2,0,5.6.5,9.1-2.7a9.05,9.05,0,0,0,2.8-7.1,12.31,12.31,0,0,0-.2-2h4.1v-2H38.5a8.55,8.55,0,0,0-3.6-3.9h8.4v-2l-23.6-.1Z"
                                                        transform="translate(0 -2.86)" style="fill:#616161"/>
                                                </g>
                                            </svg></span> Rs <?php echo $row['costfor2'];?> for two
                                    </div>
                                    <span
                                        class="small grey-light">This price is indicative and exclusive of taxes</span>

                                    <div class="margin-t-10 v-center"><span class="ico margin-r-5"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 63.2 34.4">
                                                <g>
                                                    <line x1="59" y1="32.9" x2="4.2" y2="32.9"
                                                          style="fill:none;stroke:#616161;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px"/>
                                                    <line x1="1.5" y1="32.9" x2="61.7" y2="32.9"
                                                          style="fill:none;stroke:#616161;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px"/>
                                                    <circle cx="31.6" cy="5.4" r="3.9"
                                                            style="fill:none;stroke:#616161;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px"/>
                                                    <path d="M482,129.1a23.5,23.5,0,0,1,47,0"
                                                          transform="translate(-473.9 -96.2)"
                                                          style="fill:none;stroke:#616161;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px"/>
                                                </g>
                                            </svg></span> <?php echo $row['cuisine'];?>
                                    </div>
                                    <div class="margin-t-10 v-center"><span class="ico margin-r-5"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 63 63">
                                                <g>
                                                    <path d="M62,32A30,30,0,1,1,32,2,30,30,0,0,1,62,32Z"
                                                          transform="translate(-0.5 -0.5)"
                                                          style="fill:none;stroke:#616161;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px"/>
                                                    <polyline points="30.2 17.1 30.2 31.5 45.9 45.9"
                                                              style="fill:none;stroke:#616161;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px"/>
                                                </g>
                                            </svg></span><span class="margin-r-5">Today, 12:00 PM to 03:30 PM, 07:00 PM to 12:00 AM</span>
                                    </div>
                                    <div class="margin-t-10 bd-grey padding-10">
                                        <div> <?php echo $row['address'];?></div>

                                    </div>
                                </div>

                                <hr class="grey-light hr">


                                <div class="padding-b-20 padding-l-20 padding-r-20 ">
                                    <div class="margin-t-20">
                                        <div class="grid">
                                            <div class="w-6-12">
                                                <div class="grid">
                                                    <div class="w-2-12"><span class="ico"><svg
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 63 52">
                                                                <g>
                                                                    <path
                                                                        d="M.5,8V46.1a1.2,1.2,0,0,0,.7,1L32,58V16.3L3.2,6.1A2.05,2.05,0,0,0,.5,8Z"
                                                                        transform="translate(-0.5 -6)"
                                                                        style="fill:#cd4d4d"/>
                                                                    <path
                                                                        d="M63.5,8V46.1a1.2,1.2,0,0,1-.7,1L32,58V16.3L60.8,6.1A2.05,2.05,0,0,1,63.5,8Z"
                                                                        transform="translate(-0.5 -6)"
                                                                        style="fill:#b14444"/>
                                                                    <path
                                                                        d="M41.4,56.5c.3.3,1.4-.1,1.7-.5l.6-.6c.3-.3.8-1.4.5-1.7l-8.5-8.1-2.2,2.3Z"
                                                                        transform="translate(-0.5 -6)"
                                                                        style="fill:#fff"/>
                                                                    <path
                                                                        d="M27.3,37.8c1.1-1.9.5-4.3-1.2-6-2.1-2.1-6.5-4.1-8.6-2s0,6.5,2,8.6c1.7,1.7,4,2.3,5.9,1.3l4,4.3,2.1-2Z"
                                                                        transform="translate(-0.5 -6)"
                                                                        style="fill:#fff"/>
                                                                    <path
                                                                        d="M37.8,37.8l-16.9,16c-.3.3.1,1.4.5,1.7l.6.6a2.23,2.23,0,0,0,1.3.6.6.6,0,0,0,.4-.1l16.1-17a5.73,5.73,0,0,0,1.4.4,5.37,5.37,0,0,0,4.1-1.7c4.1-4.1,4.8-5,3.5-6.5L44,36.4a.76.76,0,0,1-.4.2c-.1,0-.3-.1-.4-.1l-.2-.2c-.1-.1-.1-.2-.1-.4a.52.52,0,0,1,.2-.4l4.3-5.1-.3-.3-.5-.5L41.5,34a.52.52,0,0,1-.4.2c-.1,0-.3-.1-.4-.1l-.1-.1c-.1-.1-.1-.2-.1-.4a.52.52,0,0,1,.2-.4l4.6-4.8c-1.5-1.1-2.4-.2-6.3,3.7a5,5,0,0,0-1.6,4.5A1.57,1.57,0,0,0,37.8,37.8Z"
                                                                        transform="translate(-0.5 -6)"
                                                                        style="fill:#fff"/>
                                                                </g>
                                                            </svg></span></div>
                                                    <div class="w-10-12 grey"><a
                                                            href="barbeque-nation-nerul-220813/menu"
                                                            class="grey"> Menu </a>

                                                        <div class="small grey-light"> Explore the dishes</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-6-12">
                                                <div class="grid">
                                                    <div class="w-2-12"><span class="ico"><svg
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47 63">
                                                                <g>
                                                                    <path
                                                                        d="M50.4,38.6A24.16,24.16,0,0,0,55.5,24a23.5,23.5,0,0,0-47,0,24.16,24.16,0,0,0,5.1,14.6C18.3,44.7,32,63.5,32,63.5S45.7,44.7,50.4,38.6Z"
                                                                        transform="translate(-8.5 -0.5)"
                                                                        style="fill:#8ac651"/>
                                                                    <path
                                                                        d="M50.4,38.6A24.16,24.16,0,0,0,55.5,24,23.47,23.47,0,0,0,32,.5v63S45.7,44.7,50.4,38.6Z"
                                                                        transform="translate(-8.5 -0.5)"
                                                                        style="fill:#8ac651"/>
                                                                    <path
                                                                        d="M32,41.4A17.4,17.4,0,1,1,49.4,24,17.41,17.41,0,0,1,32,41.4Z"
                                                                        transform="translate(-8.5 -0.5)"
                                                                        style="fill:#00a551"/>
                                                                    <path
                                                                        d="M32,39.4A15.4,15.4,0,1,1,47.4,24,15.41,15.41,0,0,1,32,39.4Z"
                                                                        transform="translate(-8.5 -0.5)"
                                                                        style="fill:#fff"/>
                                                                    <path
                                                                        d="M35.1,29.4c.1.1.5,0,.7-.2L36,29c.1-.1.3-.5.2-.7l-3.3-3.1-.9,1Z"
                                                                        transform="translate(-8.5 -0.5)"
                                                                        style="fill:#8ac651"/>
                                                                    <path
                                                                        d="M29.7,22.2a1.89,1.89,0,0,0-.5-2.3c-.8-.8-2.5-1.6-3.3-.8s0,2.5.8,3.3a1.89,1.89,0,0,0,2.3.5l1.6,1.6.8-.8Z"
                                                                        transform="translate(-8.5 -0.5)"
                                                                        style="fill:#8ac651"/>
                                                                    <path
                                                                        d="M33.7,22.2l-6.6,6.2c-.1.1,0,.5.2.7l.2.2a.76.76,0,0,0,.5.2h.1l6.2-6.6c.2.1.4.1.5.2a1.83,1.83,0,0,0,1.6-.7c1.6-1.6,1.9-1.9,1.4-2.5l-1.9,1.8a.35.35,0,0,1-.2.1c-.1,0-.1,0-.1-.1h0l-.1-.1c0-.1,0-.1.1-.2l1.7-2-.1-.1-.2-.2-2,1.7a.35.35,0,0,1-.2.1c-.1,0-.1,0-.1-.1h-.1l-.1-.1c0-.1,0-.1.1-.2l1.8-1.8c-.6-.4-.9-.1-2.4,1.4a1.92,1.92,0,0,0-.6,1.7C33.6,21.8,33.6,22,33.7,22.2Z"
                                                                        transform="translate(-8.5 -0.5)"
                                                                        style="fill:#00a551"/>
                                                                    <polygon
                                                                        points="23.4 63 0.1 31.5 0.1 3.7 23.4 0 23.4 63"
                                                                        style="fill:#fff;opacity:0.209999993443489;isolation:isolate"/>
                                                                </g>
                                                            </svg></span></div>
                                                    <div class="w-10-12 grey"><a href="barbeque-nation-nerul-220813/map"
                                                                                 class="grey"> Map </a>

                                                        <div class="small grey-light"> Visit the restaurant</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="margin-t-30">
                                        <h3 class="h5"><span class="ico"><svg xmlns="http://www.w3.org/2000/svg"
                                                                              viewBox="0 0 60.4 63.2">
                                                    <g>
                                                        <path
                                                            d="M445.8,111.9a17.2,17.2,0,0,0-34.4,0,17,17,0,0,0,12.9,16.6v3.3h8.6v-3.3A17.1,17.1,0,0,0,445.8,111.9Z"
                                                            transform="translate(-398.3 -81.8)"
                                                            style="fill:none;stroke:#616161;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px"/>
                                                        <line x1="31.6" y1="61.7" x2="28.8" y2="61.7"
                                                              style="fill:none;stroke:#616161;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px"/>
                                                        <line x1="34.5" y1="56" x2="25.9" y2="56"
                                                              style="fill:none;stroke:#616161;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px"/>
                                                        <line x1="30.2" y1="1.5" x2="30.2" y2="7.2"
                                                              style="fill:none;stroke:#616161;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px"/>
                                                        <line x1="58.9" y1="30.1" x2="53.2" y2="30.1"
                                                              style="fill:none;stroke:#616161;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px"/>
                                                        <line x1="1.5" y1="30.1" x2="7.3" y2="30.1"
                                                              style="fill:none;stroke:#616161;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px"/>
                                                        <line x1="7.9" y1="7.8" x2="14" y2="13.9"
                                                              style="fill:none;stroke:#616161;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px"/>
                                                        <line x1="52.6" y1="7.8" x2="46.4" y2="13.9"
                                                              style="fill:none;stroke:#616161;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px"/>
                                                    </g>
                                                </svg></span> INSIDER TIPS
                                        </h3>
                                        <div class="margin-t-10">
                                            <ul class="list-simple static-p">
                                                <li> Opt for the seats offering a balcony view</li>
                                                <li>The pasta counter offers interesting variations in the sauces</li>
                                                <li>Weekends here can get extremely noisy</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-12-12 w-lg-6-12">
                            <div class="bg-white shadow ">
                                <div class="img1-8"><img
                                        src="../../images/hotels/<?php echo $city;?>/<?php echo $hotel_id;?>/image1.png"
                                        alt="Barbeque Nation-Nerul, Navi Mumbai-menu320170118072511.jpg"></div>
                            </div>
                            <div class="bg-white shadow margin-t-20">
                                <div class="img1-8"><img
                                        src="../../images/hotels/<?php echo $city;?>/<?php echo $hotel_id;?>/image2.png"
                                        alt="Barbeque Nation-Nerul, Navi Mumbai-menu020170118072511.jpg"></div>
                            </div>
                            <div class="bg-white shadow margin-t-20">
                                <div class="img1-8"><img
                                        src="../../images/hotels/<?php echo $city;?>/<?php echo $hotel_id;?>/image3.png"
                                        alt="Barbeque Nation-Nerul, Navi Mumbai-menu120170118072511.jpg"></div>
                            </div>
                            <div class="bg-white shadow margin-t-20">
                                <div class="img1-8"><img
                                        src="../../images/hotels/<?php echo $city;?>/<?php echo $hotel_id;?>/image4.png"
                                        alt="Barbeque Nation-Nerul, Navi Mumbai-menu220170118072511.jpg"></div>
                            </div>
                            <div class="bg-white shadow margin-t-20">
                                <div class="img1-8"><img
                                        src="../../images/hotels/<?php echo $city;?>/<?php echo $hotel_id;?>/image5.png"
                                        alt="Barbeque Nation-Nerul, Navi Mumbai-menu420170118072511.jpg"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-6-12 w-lg-4-12">
                <?php include_once("../includes/booking.php");?>


                <div class="margin-t-20 hidden" id="ad-silver-box">
                    <div id="ad-silver" class="grid gutter-grid" data-size="12"></div>
                </div>
            </div>
        </div>
        <div id="about" class="padding-20 bg-white margin-t-30 static-p"><h2 class="h5 capitalize">About <?php echo $row['hotel_name'];?>, <?php echo $row['location'];?></h2><br/>

            <p>At the risk of being called a gastronomic snob, we confess to like more than a bit of variety in our meals. Why stick to just one plate of pasta or a bowl of curry when you can have it all by sitting on one table. You don&rsquo;t have to walk down to the next restaurant to have a different cuisine for your main course, rather just drive down to a multi-cuisine restaurant. We find all-day dining establishments to have a more diverse menu as they are crafted to satisfy a various kinds of diners. These are the kind of places that suits us perfectly. If you happen to be in the Bandra Kurla Complex vicinity, then drive down to Sofitel Hotel, where &lsquo;Pondichery Caf&eacute;&rsquo; is located. <strong>This lobby level eatery is the hotel&rsquo;s busiest corners</strong>.</p><p><strong>Open throughout the day and night, Pondichery Caf&eacute; enjoys a lavish all-encompassing menu</strong>. Featuring everything from French to European to Asian to North Indian, the menu cleverly handpicks the best dishes from all cuisines. Italian is however their forte. <strong>They put out quite a generous buffet spreads, something that draws loads of regulars</strong>. Begin your day by gobbling down a hefty breakfast. Follow it up with a luxurious three-course meal, beginning with the appetizers. Our snob radar is happy with, goujons, lasooni jhinga, sushi, Thai papaya salad, foie gras, gilafi sheekh kebab, pan-seared scallops, bruschetta and sunheri Makai paneer ka tikka. Main course is enriched by, croque madame, Pondichery chicken curry, teriyaki salmon, quiche Lorraine, four cheese pizza, angel hair gamberi, braised pork ribs, goong makham and paneer butter masala. The list is endless.</p><p>Treat your sweet tooth to a smorgasbord of delectable desserts. Polish off, chocolate fudge, red velvet cake, vanilla cr&egrave;me brulee, classic baked cheese cake, banoffee pie, assorted kulfi, gulab jamun and array of sorbet/ice cream selection. Pondichery Caf&eacute; is usually full of office goers and corporates by lunch. The name Pondichery Caf&eacute; doesn&rsquo;t relate much to either the d&eacute;cor or the menu. Interiors are your standard hotel interior with thick carpet beneath your feet and glossy glass walls. D&eacute;cor is mostly done in wooden tones. The restaurant sprawls generously sectioned by formal dining tables and glass partitions. Due to patterned carpet and patterned upholstery, the d&eacute;cor looks a bit intense visually. An impressive wine library stands tall and proud in middle of the room. Bill will be fat, watch out.</p></div>

    </div>
    <?php
}

?>
<div class="margin-t-60 bg-white shadow">
</div>
<?php
include_once("../includes/footer.php");

?>

<div class="back-top"><a href="#header"><img class="ico-lg" alt="Back To Top" src="../images/arrow-up.svg"></a></div>
<script src="../plugins/intl-tel-input/build/js/intlTelInput.min.js"></script>
<script src="../plugins/zebra-datepicker/javascript/zebra_datepicker.js"></script>
<script src="../build/web/groot/js/base1427.js?id=6f1b7673fc80c5bd3dbb"></script>
<script> var shawmanMaxDays = null;
    var shawmanMinDays = null; </script>
<script src="../build/web/groot/js/booking33ef.js?id=24001aa28c98572b35c5"></script>
<script src="../build/web/groot/js/restaurant/reviewb595.js?id=4ff0330ddd46a6bf7d44"></script>
<script> $(function () {
        clevertap.event.push("Restaurant Viewed", {
            "ID": '220813',
            "Name": 'Barbeque Nation',
            'Category': 'Casual Dining',
            'Cost for 2': '1600',
            'Critic Rating': '3.3',
            'Country': 'India',
            'City': 'Mumbai',
            'Region': 'Navi Mumbai',
            'Area': 'Nerul',
            'Sub Area': '',
            'Group': '',
            'Source': 'Desktop Website'
        });
    });
    $('button.book_button').on('click', function (e) {
        e.preventDefault();
        clevertap.event.push("Book Button Clicked", {
            "Time": $('#form-booking input:checked[name="time"]').val(),
            "Date": $('#form-booking input[name="date"]').val(),
            "Name": $('#form-booking input[name="restaurant_name"]').val(),
            "Pax": $('#form-booking input[name="pax"]').val(),
            "Restaurant ID": $('#form-booking input[name="restaurant"]').val(),
            "Source": "Restaurant Details",
            "Medium": "Desktop Website"
        });
    });
    $(document).on('click', '#ad-golden>a', function (e) {
        e.preventDefault();
        var href = $(this).attr('href');
        var id = $(this).data('id');
        clevertap.event.push("Ad Clicked", {
            "Source": "Restaurant Details",
            'City Name': 'Mumbai',
            'Medium': 'Desktop Website',
            'Ad ID': id,
            'Type': 'Golden'
        });
        window.location.href = href;
    });
    $(document).on('click', '#ad-silver a', function (event) {
        event.preventDefault();
        var href = $(this).attr('href');
        var id = $(this).data('id');
        clevertap.event.push("Ad Clicked", {
            "Source": "Restaurant Details",
            'City Name': 'Mumbai',
            'Medium': 'Desktop Website',
            'Ad ID': id,
            'Type': 'Silver'
        });
        window.location.href = href;
    }); </script>
<script> var AD_URL = '../ad.html';
    var VIEW_NAME = 'restaurantdetail';
    showAds('220813', '2', null, null); </script>
</body>
</html>