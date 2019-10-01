<!DOCTYPE html>
<?php
ob_start();
$city = $_GET['city'];
$hotel_id = $_GET['hotel_id'];
?>
<html>
<head>
    <meta name="viewport" id="customViewPort" content="width=device-width,initial-scale=1,user-scalable=0">
    <link rel="icon" type="image/png" href="../images/favicon.png" />
    <meta name="format-detection" content="telephone=no">
    <meta charset="utf-8">
    <title>Best restaurants in <?php echo $city; ?> | Book a Table online @ Fine Dine</title>
    <meta name="description" content="Fine Dine offers online restaurant reservation with a guaranteed deal in Mumbai.
    Find reviews and expert opinions on the top and best restaurants and bars in Mumbai" />
    <link rel="canonical" href="mumbai.html" />

    <link media="all" type="text/css" rel="stylesheet" href="../plugins/intl-tel-input/build/css/intlTelInput.css">
    <link media="all" type="text/css" rel="stylesheet" href="../build/web/groot/css/base208d.css?id=ff0dc9fde3cfa214af11">
    <link media="all" type="text/css" rel="stylesheet" href="../build/web/groot/css/homee7fa.css?id=7ccd153e9afc40322ce3">
    <script src="../plugins/jquery/jquery-3.1.1.min.js"></script>
    <script src="../plugins/jquery-ui-1.12.1/jquery-ui.min.js"></script>

    <script defer="defer" src="../build/web/groot/js/city9a24.js?id=e284c8bb3f94a3acd44f"></script>
    <script>
        var IMAGE_URL = 'https://d4t7t8y8xqo0t.cloudfront.net/';

    </script>
</head>
<body>


<?php
include_once("includes/header.php");
?>




<div class="container">
    <div id="ad-golden" class="margin-t-20 relative shadow hidden"></div>
</div>
<?php
include_once("../includes/database.php");
$query = "SELECT * FROM hotels WHERE hid = $hotel_id";
$result_set = mysqli_query($connection, $query);
if($row = mysqli_fetch_assoc($result_set)) {
    extract($row);

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

                        <div class="w-12-12 w-lg-12-12">
                            <?php
                            $images = scandir("../images/menu/$city/$hotel_name");
                            for($i = 0; $i<count($images); $i++) {
                                $return_value = strpos($images[$i], "png");
                                if($return_value !== false){
                                ?>

                                <div class="bg-white shadow ">
                                    <div class="img1"><img
                                            src="../images/menu/<?php echo $city; ?>/<?php echo $hotel_name ."/".$images[$i]?>"
                                            alt="<?php echo $hotel_name; ?>"></div>
                                </div>
                                <?php
                                }
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="w-6-12 w-lg-4-12">

                <?php
                include_once("includes/booking.php");
                ?>

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
include_once("includes/footer.php");

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