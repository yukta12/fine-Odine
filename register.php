<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>


<?php
include_once("includes/database.php");
$city = "Mumbai";
?>


<head>
    <meta name="viewport" id="customViewPort" content="width=device-width,initial-scale=1,user-scalable=0">
    <link rel="icon" type="image/png" href="images/favicon.png"/>
    <meta name="format-detection" content="telephone=no">
    <meta charset="utf-8">
    <title>Best restaurants in <?php echo $city; ?> | Book a Table online @ Fine Dine</title>
    <meta name="description"
          content="Fine Dine offers online restaurant reservation with a guaranteed deal in Mumbai. Find reviews and expert opinions on the top and best restaurants and bars in Mumbai"/>
    <link rel="canonical" href="mumbai.html"/>
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link media="all" type="text/css" rel="stylesheet" href="plugins/intl-tel-input/build/css/intlTelInput.css">
    <link media="all" type="text/css" rel="stylesheet" href="build/web/groot/css/base208d.css?id=ff0dc9fde3cfa214af11">
    <link media="all" type="text/css" rel="stylesheet" href="build/web/groot/css/homee7fa.css?id=7ccd153e9afc40322ce3">

    <script src="plugins/jquery/jquery-3.1.1.min.js"></script>
    <script src="plugins/jquery-ui-1.12.1/jquery-ui.min.js"></script>
    <link rel="search" href="opensearchdescription.xml" type="application/opensearchdescription+xml"
          title="eazydiner.com"/>
    <script defer="defer" src="build/web/groot/js/city9a24.js?id=e284c8bb3f94a3acd44f"></script>
    <script>
        var IMAGE_URL = 'https://d4t7t8y8xqo0t.cloudfront.net/';

    </script>
</head>


<body>
<?php
include_once("includes/header.php");
include_once("includes/database.php");

if(isset($_POST['submit'])){
    extract($_POST);
    $query = "INSERT INTO users(name, email, mobile, password) VALUES('$name', '$email', '$number', '$password')";
    if(mysqli_query($connection, $query)){
        
     echo "inserted";
        
    }else{
        echo mysqli_error($connection);
    }
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 margin-t-20">

            <form action="" method="POST" role="form">


                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name ="name" placeholder="Enter your name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name ="email" placeholder="Enter your email" required>
                </div>

                <div class="form-group">
                    <label for="number">Mobile Number</label>
                    <input type="text" class="form-control" id="number" name ="number" placeholder="Enter your number" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name ="password" placeholder="Enter your password" required>
                </div>

                <button type="submit" class="button" name="submit">Register</button>
            </form>
        </div>
    </div>
</div>


<div class="margin-t-60 bg-white shadow">
</div>
<div class="bg-white">
    <div class="container padding-v-20">
        <div class="grid footer flex flex-between">
            <div class="">
                <div class="text-bold padding-t-20 padding-b-10 grey">Created By</div>
                <p class="red">Arjun Parmani, Aakash Patil, Priyanka Patil &amp; Yukta Peswani</p>
            </div>

            <div class="">
                <div class="text-bold padding-t-20 padding-b-10 grey">Group Guide:</div>
                <p class="grey">Dashrath Kale</p>
            </div>
        </div>

        <hr class="hr margin-t-10">
        <div class="grid margin-t-30">
            <div class="w-6-12">
                <div class="flex"><span class="ico"><img src="images/sticky_logo.png" alt="Fine O Dine"></span><span
                        class="padding-l-10"> &copy; Fine O Dine Private Limited.</span></div>
            </div>
        </div>
    </div>
</div>

<script src="assets/js/bootstrap.min.js"></script>
</body>


</html>
