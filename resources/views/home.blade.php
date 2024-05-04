@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <div class="carousel_top">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class= "carousel-inner ">
                <div class= "item active ">
                    <a href="javascript:;">
                        <img onclick="javascript:;"
                            src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/10/01/6e/30/outdoor-pool.jpg?w=700&h=-1&s=1 size"
                            alt="100-hotel-banner">
                    </a>
                </div>
                <div class= "item">
                    <img src="https://carouselhotel.com/wp-content/uploads/2023/09/29-Carousel-29.jpg" alt="Spring-Banner">
                </div>
                <div class="item">
                    <img src="https://aw-d.tripcdn.com/images/0221e12000b9ze3w96137_R_600_400_R5.webp" alt="Hampi">
                </div>
                <div class= "item">
                    <a href="">
                        <img onclick="javascript:;"
                            src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/10/01/6e/30/outdoor-pool.jpg?w=700&h=-1&s=1"
                            alt="Open now">
                    </a>
                </div>
                <div class="item">
                    <a href=" ">
                        <img onclick="javascript:;"
                            src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/10/01/6e/30/outdoor-pool.jpg?w=700&h=-1&s=1"
                            alt="Sun-sand-banner">
                    </a>
                </div>
                <div class= "item">
                    <a href="#">
                        <img onclick="https://www.royalorchidhotels.com/regenta-kabini-springs-resort/overview" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/10/01/6e/30/outdoor-pool.jpg?w=700&h=-1&s=1" alt="Kabini">
                        </a>
                    </div>
                <div class= "item"><a href="#"><img
                            onclick="location='https://www.royalorchidhotels.com/'"
                            src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/10/01/6e/30/outdoor-pool.jpg?w=700&h=-1&s=1"
                            alt="metropole"></a></div>
                <div class= "item"><a href="#"><img
                            onclick="location='https://www.royalorchidhotels.com/driving-holidays'"
                            src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/10/01/6e/30/outdoor-pool.jpg?w=700&h=-1&s=1"
                            alt="Driving Holidays"></a>
                </div>
            </div>
            <div class="carousel-arrows"> <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <img src="https://www.royalorchidhotels.com/images/arrow_left.png" alt="Royal Orchid Hotel">
                </a> <a class="right carousel-control" href="#myCarousel" data-slide="next"> <img
                        src="https://www.royalorchidhotels.com/images/arrow_right.png" alt="Royal Orchid Hotel">
                </a> </div>
        </div>
        <div class="banner-text booking_ul_new wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
            <div class="col-md-12 form-group has-feedback"> <a href="#" class="booking_close_btn">X</a>
                <ul class="booking_ul">
                    <li> <label>City</label> <select name="BookingEngine$DdlCity" id="BookingEngine_DdlCity"
                            class="form-control" onchange="sethotel();">
                            <option value="0">City</option>
                            <option value="1113">agra</option>
                            <option value="1">ahmedabad</option>
                            <option value="1033">ajmer</option>
                            <option value="1094">ambala</option>
                            <option value="2">amritsar</option>
                            <option value="3">bangalore</option>
                            <option value="1064">belagavi</option>
                            <option value="1057">bharatpur</option>
                            <option value="4">bharuch</option>
                            <option value="1085">bhopal</option>
                            <option value="1004">bhuj</option>
                            <option value="1005">chandigarh</option>
                            <option value="1028">chennai</option>
                            <option value="1056">dahej</option>
                            <option value="1034">dehradun</option>
                            <option value="1082">dharamshala</option>
                            <option value="1088">digha</option>
                            <option value="1103">gangtok</option>
                            <option value="1007">goa</option>
                            <option value="1098">greater noida</option>
                            <option value="1092">guhagar</option>
                            <option value="1075">gurugram</option>
                            <option value="1009">hampi</option>
                            <option value="1026">haridwar</option>
                            <option value="1106">igatpuri</option>
                            <option value="1039">indore</option>
                            <option value="1012">jaipur</option>
                            <option value="1110">jamnagar</option>
                            <option value="1083">jhansi</option>
                            <option value="1074">kabini wildlife</option>
                            <option value="1041">kanpur</option>
                            <option value="2110">kasauli</option>
                            <option value="1076">kedarnath</option>
                            <option value="1100">kolhapur</option>
                            <option value="1024">kolkata</option>
                            <option value="1078">ladakh</option>
                            <option value="1070">lonavala</option>
                            <option value="1093">lucknow</option>
                            <option value="1031">ludhiana</option>
                            <option value="1014">mahabaleshwar</option>
                            <option value="1062">manali</option>
                            <option value="1097">mcleod ganj</option>
                            <option value="1084">mohali</option>
                            <option value="1069">morbi</option>
                            <option value="1111">mumbai</option>
                            <option value="1015">mussoorie</option>
                            <option value="1016">mysore</option>
                            <option value="1058">nagpur</option>
                            <option value="1046">nashik</option>
                            <option value="1018">navi mumbai</option>
                            <option value="1096">nellore</option>
                            <option value="2109">nepal</option>
                            <option value="1068">noida</option>
                            <option value="1112">panchkula</option>
                            <option value="1066">pench</option>
                            <option value="1087">phagwara</option>
                            <option value="1019">pune</option>
                            <option value="1022">rajkot</option>
                            <option value="1027">ranthambore</option>
                            <option value="1067">rishikesh</option>
                            <option value="1107">sakleshpur</option>
                            <option value="1073">sambalpur</option>
                            <option value="1071">shimla</option>
                            <option value="1021">shimoga</option>
                            <option value="1055">somnath</option>
                            <option value="1099">sri lanka</option>
                            <option value="1042">srinagar</option>
                            <option value="1072">udaipur</option>
                            <option value="1023">vadodara</option>
                            <option value="1060">vapi</option>
                            <option value="1079">varanasi</option>
                        </select> <input type="hidden" name="BookingEngine$hidCityAbb" id="BookingEngine_hidCityAbb" />
                    </li>
                    <li class="drop_hotel"> <label>Hotel</label>
                        <div class="form-group"> <select name="BookingEngine$DdlHotel" id="BookingEngine_DdlHotel"
                                class="form-control">
                                <option value="0">Select Hotel</option>
                            </select> </div>
                    </li>
                    <li> <label>Check In</label>
                        <div class="form-group"> <input id="dp1" type="text"
                                class="form-control clickable input-md" readonly placeholder="Arrival"><i
                                class="far fa-calendar-alt  form-control-feedback"></i> </div>
                    </li>
                    <li> <label>Check Out</label>
                        <div class="form-group"> <input id="dp2" type="text"
                                class="form-control clickable input-md" readonly placeholder="Departure"><i
                                class="far fa-calendar-alt  form-control-feedback"></i> </div>
                    </li>
                    <li> <label>Rooms</label> <select name="room" id="room" class="form-control">
                            <option value="0">Rooms</option>
                            <option value="1" selected="selected">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select> </li>
                    <li> <label>Adults</label> <select class="form-control" name="adut" id="adut">
                            <option value="1">Adults</option>
                            <option value="1">1</option>
                            <option value="2" selected="selected">2</option>
                            <option value="3">3</option>
                        </select> </li>
                    <li> <label>Children</label> <select class="form-control" id="child">
                            <option value="0">Children</option>
                            <option value="0" selected="selected">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select> </li>
                    <li> <label>Promo Code</label>
                        <div class="form-group"> <input class="form-control" id="PromoCode" autocomplete="off"
                                type="text" placeholder="Promo Code"> </div>
                    </li>
                    <li> <label></label> <input name="bth" id="bth" value="Book Now"
                            onclick="return ValidateBookingHotelCorparate();" class="bkbtn" type="button" />
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="belowSliderContent">
        <div class="container">
            <div class="row">
                <h1 class="ash1" style="text-transform: inherit;">Distinctly Warm Indian Hospitality </h1>
                <span class="Business-Hotels" style="font-size:14px;display:block;margin:10px 0px;"> Business
                    Hotels | Holiday Destinations | Wildlife Parks | Wedding Destinations | Religious Sites |
                    Historic Sites </span>
                <p class="text-center"> Stay, dine and celebrate at 100+ hotels across 65+ locations in India &
                    Abroad. Discover hotels that have a soul, a reflection of our distinctly warm, Indian
                    Hospitality. </p>
            </div>
        </div>
    </div>
@endsection
