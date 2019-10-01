<?php
function sendSMS($restaurant, $user_id, $time, $date){
    $hotel_name ="";
    $mobile = "";
    global $connection;
    $query = "SELECT * FROM hotels WHERE hid = $restaurant";
    $result = mysqli_query($connection, $query);
    if($row = mysqli_fetch_assoc($result)){
        extract($row);
    }
    $query = "SELECT * FROM users WHERE id = $user_id";
    $result = mysqli_query($connection, $query);
    if($row = mysqli_fetch_assoc($result)){
        extract($row);
    }
    $msg = "Your reservation at $hotel_name on $date and $time is successfully made.
Please do enjoy!
Fine 'O' Dine";
    //Your authentication key
    $authKey = "199642Atc1ZubqM5a911dbc";



    //Multiple mobiles numbers separated by comma
    $mobileNumber = "$mobile";

    //Sender ID,While using route4 sender id should be 6 characters long.
    $senderId = "102234";

    //Your message to send, Add URL encoding here.
    $message = urlencode($msg);

//    echo $message . " " . $mobile;
    //Define route
    $route = "default";
    //	Prepare you post parameters
    $postData = array(
        'authkey' => $authKey,
        'mobiles' => $mobileNumber,
        'message' => $message,
        'sender' => $senderId,
        'route' => $route
    );

    //API URL
    $url="https://control.msg91.com/api/sendhttp.php";

    // init the resource
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $postData
        //,CURLOPT_FOLLOWLOCATION => true
    ));


    //Ignore SSL certificate verification
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


    //get response
    $output = curl_exec($ch);

    //Print error if any
    if(curl_errno($ch))
    {
        echo 'error:' . curl_error($ch);
    }

    curl_close($ch);

    echo $output;
}

if(!isset($_SESSION['user_id'])){
    session_start();
}

$user_id = $_SESSION['user_id'];
if(isset($_POST['submit'])){
    extract($_POST);
    $date = date("Y-m-d", strtotime($date));
    $query = "INSERT INTO hotel_registration(hid, user_id, guest, timing, dor) VALUES($restaurant, $user_id, $pax, '$time', '$date')";
    if(mysqli_query($connection, $query)){
        sendSMS($restaurant, $user_id, $time, $date);
        header("Location: hotel.php?city=$city&hotel_id=$hotel_id&q=success");
    }else{
        header("Location: $restaurant.php?q=failure");
    }
}
?>
<div class="padding-20 bg-white shadow"><h2 class="h4">BOOK A TABLE</h2>

    <form id="form-search-slots" method="post" action="">
        <input type="hidden" name="restaurant" value="<?php echo $hotel_id; ?>"/>

        <div class="input-group margin-t-20"><span class="ico"><svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 60.56 63.02">
                    <g>
                        <ellipse cx="15.59" cy="10.26" rx="9.28" ry="9.25"
                                 style="fill:none;stroke:#fa4616;stroke-linejoin:round;stroke-width:2.018522388147056px"/>
                        <path
                            d="M32,25.39H2.73c0,10.78,4.39,17.08,9.28,19.83V62.5H22.72V45.22C27.61,42.47,32,36.17,32,25.39Z"
                            transform="translate(-1.72 -0.49)"
                            style="fill:none;stroke:#fa4616;stroke-linejoin:round;stroke-width:2.018522388147056px"/>
                        <ellipse cx="44.87" cy="10.26" rx="9.28" ry="9.25"
                                 style="fill:none;stroke:#fa4616;stroke-linejoin:round;stroke-width:2.018522388147056px"/>
                        <path
                            d="M46.59,24.07C38.53,24.07,32,36,32,49.28h9.28V62.5H52V49.28h9.28C61.17,36,54.64,24.07,46.59,24.07Z"
                            transform="translate(-1.72 -0.49)"
                            style="fill:none;stroke:#fa4616;stroke-linejoin:round;stroke-width:2.018522388147056px"/>
                    </g>
                </svg></span>

            <div class="select"><select name="pax">
                    <option value="1">1 Guest</option>
                    <option value="2" selected>2 Guest</option>
                    <option value="3">3 Guest</option>
                    <option value="4">4 Guest</option>
                    <option value="5">5 Guest</option>
                    <option value="6">6 Guest</option>
                    <option value="7">7 Guest</option>
                    <option value="8">8 Guest</option>
                </select></div>
        </div>
        <div class="input-group margin-t-20"><span class="ico"><svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 62.88 62.94">
                    <g>
                        <polyline
                            points="11.63 6.25 0.97 6.25 0.97 61.97 61.91 61.97 61.91 6.25 51.24 6.25"
                            style="fill:none;stroke:#fa4616;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.9370360182267976px"/>
                        <rect x="11.63" y="0.97" width="7.92" height="10.68"
                              style="fill:none;stroke:#fa4616;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.9370360182267976px"/>
                        <rect x="43.32" y="0.97" width="7.92" height="10.68"
                              style="fill:none;stroke:#fa4616;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.9370360182267976px"/>
                        <line x1="19.55" y1="6.26" x2="43.32" y2="6.26"
                              style="fill:none;stroke:#fa4616;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.9370360182267976px"/>
                        <line x1="0.97" y1="19.57" x2="61.91" y2="19.57"
                              style="fill:none;stroke:#fa4616;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.9370360182267976px"/>
                    </g>
                </svg></span><input type="text" class="input datepicker booking-date-detail pointer"
                                    name="date" placeholder="Date"/></div>
        <div class="input-group margin-t-20"><span class="ico"><svg
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 63 63">
                    <g>
                        <path d="M62,32A30,30,0,1,1,32,2,30,30,0,0,1,62,32Z"
                              transform="translate(-0.5 -0.5)"
                              style="fill:none;stroke:#fa4616;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px"/>
                        <polyline points="30.2 17.1 30.2 31.5 45.9 45.9"
                                  style="fill:none;stroke:#fa4616;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px"/>
                    </g>
                </svg></span>

            <div class="select"><select name="time">
                    <option value="12:00 AM">12:00 AM</option>
                    <option value="12:30 AM">12:30 AM</option>
                    <option value="01:00 AM">01:00 AM</option>
                    <option value="01:30 AM">01:30 AM</option>
                    <option value="02:00 AM">02:00 AM</option>
                    <option value="02:30 AM">02:30 AM</option>
                    <option value="03:00 AM">03:00 AM</option>
                    <option value="03:30 AM">03:30 AM</option>
                    <option value="04:00 AM">04:00 AM</option>
                    <option value="04:30 AM">04:30 AM</option>
                    <option value="05:00 AM">05:00 AM</option>
                    <option value="05:30 AM">05:30 AM</option>
                    <option value="06:00 AM">06:00 AM</option>
                    <option value="06:30 AM">06:30 AM</option>
                    <option value="07:00 AM">07:00 AM</option>
                    <option value="07:30 AM">07:30 AM</option>
                    <option value="08:00 AM">08:00 AM</option>
                    <option value="08:30 AM">08:30 AM</option>
                    <option value="09:00 AM">09:00 AM</option>
                    <option value="09:30 AM">09:30 AM</option>
                    <option value="10:00 AM">10:00 AM</option>
                    <option value="10:30 AM">10:30 AM</option>
                    <option value="11:00 AM">11:00 AM</option>
                    <option value="11:30 AM">11:30 AM</option>
                    <option value="12:00 PM">12:00 PM</option>
                    <option value="12:30 PM">12:30 PM</option>
                    <option value="01:00 PM">01:00 PM</option>
                    <option value="01:30 PM">01:30 PM</option>
                    <option value="02:00 PM">02:00 PM</option>
                    <option value="02:30 PM">02:30 PM</option>
                    <option value="03:00 PM">03:00 PM</option>
                    <option value="03:30 PM">03:30 PM</option>
                    <option value="04:00 PM">04:00 PM</option>
                    <option value="04:30 PM">04:30 PM</option>
                    <option value="05:00 PM">05:00 PM</option>
                    <option value="05:30 PM">05:30 PM</option>
                    <option value="06:00 PM">06:00 PM</option>
                    <option value="06:30 PM" selected>06:30 PM</option>
                    <option value="07:00 PM">07:00 PM</option>
                    <option value="07:30 PM">07:30 PM</option>
                    <option value="08:00 PM">08:00 PM</option>
                    <option value="08:30 PM">08:30 PM</option>
                    <option value="09:00 PM">09:00 PM</option>
                    <option value="09:30 PM">09:30 PM</option>
                    <option value="10:00 PM">10:00 PM</option>
                    <option value="10:30 PM">10:30 PM</option>
                    <option value="11:00 PM">11:00 PM</option>
                    <option value="11:30 PM">11:30 PM</option>
                </select></div>
        </div>
        <div class="text-center margin-t-20" id="slots-loader">
            <button class="button" type="submit" name="submit">Book</button>
        </div>
    </form>

</div>