<div id="main" style="background-image: url(images/homepage_banner.jpg);">
    <div class="container padding-b-30 padding-t-10">
        <div class="w-9-12">
            <ul class="small list" itemscope itemtype="http://schema.org/BreadcrumbList">
                <li class="inline-block" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                        itemprop="item" href="mumbai.php"><span itemprop="name" class="grey">Home</span></a>
                    <meta itemprop="position" content="1"/>
                </li>
                /
                <li class="inline-block active" itemprop="itemListElement" itemscop
                    itemtype="http://schema.org/ListItem"><span itemprop="name" class="grey"><?php echo $city; ?></span>
                    <meta itemprop="position" content="2"/>
                </li>
            </ul>
        </div>
    </div>
    <div class="padding-20" id="homepage-info">
        <div class="container grey">
            <h1 class="h3 font-24 bold margin-t-10 grey">Discover &amp; Book Best Restaurants
                In <?php echo $city; ?></php></h1>

            <h2 class="font-12 padding-t-10 uppercase regular grey">The fastest &amp; easiest way to book your table
                online!</h2>
        </div>
        <div class="container">
            <div id="search-widget-home" class="relative margin-t-10">
                <div class="grid">
                    <div class="w-12-12">
                        <form id="form-search" method="get" action="" autocomplete="off" class="clear glow-border">
                            <div class="input-group radius-0 w-2-12 pull-left h-50 bd-grey grey"><span class="ico"><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62.88 62.94">
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
                                    </svg></span><input type="text" class="input datepicker pointer bg-down-arrow"
                                                        name="date" placeholder="Date" value="21 Dec, 2017"/></div>
                            <div class="input-group radius-0 w-2-12 pull-left h-50 bd-left-0"><span class="ico"><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 63 63">
                                        <g>
                                            <path d="M62,32A30,30,0,1,1,32,2,30,30,0,0,1,62,32Z"
                                                  transform="translate(-0.5 -0.5)"
                                                  style="fill:none;stroke:#fa4616;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px"/>
                                            <polyline points="30.2 17.1 30.2 31.5 45.9 45.9"
                                                      style="fill:none;stroke:#fa4616;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px"/>
                                        </g>
                                    </svg></span>

                                <div class="select grey"><select name="time">
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
                                        <option value="06:00 PM" selected>06:00 PM</option>
                                        <option value="06:30 PM">06:30 PM</option>
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
                            <div class="input-group radius-0 w-2-12 pull-left h-50 bd-left-0"><span class="ico"><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60.56 63.02">
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

                                <div class="select grey"><select name="pax">
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
                            <div class="input-group h-50 radius-0 w-4-12 pull-left bd-left-0 grey-light"><span
                                    class="ico margin-l-20"><svg xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 0 62.9 62.9">
                                        <defs>
                                            <style>.a {
                                                    fill: #616161;
                                                }</style>
                                        </defs>
                                        <title>searchpath</title>
                                        <path class="a"
                                              d="M26.7,52.9A26.2,26.2,0,1,1,52.9,26.7,26.23,26.23,0,0,1,26.7,52.9Zm0-51.4A25.2,25.2,0,1,0,51.9,26.7,25.22,25.22,0,0,0,26.7,1.5Z"
                                              transform="translate(-0.5 -0.5)"/>
                                        <rect class="a" x="53.46" y="41.11" width="1" height="25.7"
                                              transform="translate(-22.85 53.46) rotate(-45)"/>
                                    </svg></span><input class="input autocomplete padding-l-5"
                                                        data-container="#search-widget-home" value=""
                                                        placeholder="Search Address, Restaurant"/><input id="location"
                                                                                                         type="hidden"
                                                                                                         name="location"
                                                                                                         value="mumbai"/>
                            </div>
                            <div class="padding-5 hidden error-msg"><span class="primary small">Please select a location or restaurant!</span>
                            </div>
                            <div class="input-group w-2-12 radius-0 pull-left search h-50">
                                <button class="button btn-search text-bold">Find a Restaurant</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>