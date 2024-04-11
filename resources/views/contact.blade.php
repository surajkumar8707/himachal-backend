@extends('layouts.app')

@section('title', 'Contact Us')
@push('styles')
    <style>
        #all_tabs .tab-content>.tab-pane {
            display: block !important;
            visibility: visible !important;
        }

        .iconss-new {
            margin: 40px 65px;
        }

        .iconss-new a {
            padding: 13px 18px;
            margin-bottom: 0;
            background: #943c90;
            color: #fff !important;
            text-transform: capitalize;
            border-radius: 5px;
        }

        .modal select {
            width: 100%;
            padding: 10px;
        }

        .modal-dialog label.form-check-label {
            font-size: 11px;
            position: relative;
            bottom: 25px;
            margin-left: 18px;
        }

        section.contact_sec.contact-us-cs-sc section.media_section .mediasection_tabcontent .tab-content .tab-pane {
            width: 100%;
        }
    </style>
@endpush
@section('content')
    <section class="career_banner_image">
        <img src="https://www.shutterstock.com/image-photo/call-center-contact-us-concept-600nw-1762447328.jpg" class="img-responsive_ img-thumbnail w-100"
            alt="{{ getSettings()->app_name }}" width="100%" height="400px !important">
        </section>
    <section class="contact_sec contact-us-cs-sc">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 co-md-12 col-sm-12 col-xs-12">
                    <h1 class="ash1"><span itemprop="name">Contact Us</span></h1>
                    <section class="media_section">
                        <ul class="nav nav-tabs nav-pills" id="interest_tabs"> <!--top level tabs-->
                            <li class="active"><a href="#media_tab4" data-toggle="tab">Hotel Contact</a></li>
                            <li><a href="#media_tab2" data-toggle="tab">Sales Offices</a></li>
                            <li><a href="#media_tab1" data-toggle="tab">Corporate Office</a></li>
                        </ul>
                        <div class="mediasection_tabcontent">
                            <div class="row">
                                <div class="col-lg-12 co-md-12 col-sm-12 col-xs-12">
                                    <div class="tab-content">
                                        <div id="media_tab1" class="tab-pane">


                                            <div class="box_warp1">
                                                <h3>Management </h3>
                                                <p><strong>Mr. Gaurav Tiwari</strong><br>
                                                    Director Business Development (South)<br> <span
                                                        style="line-height: 1.6em;"><i class="fa fa-phone"></i> <a
                                                            href="tel:+91{{ getSettings()->contact }}">+91
                                                            {{ getSettings()->contact }}</a></span><br> <span
                                                        style="line-height: 1.6em;"><i class="fa fa-envelope"></i> <a
                                                            href="mailto:{{ getSettings()->email }}">{{ getSettings()->email }}</a></span>
                                                </p>
                                            </div>
                                        </div>
                                        {{-- <div id="media_tab1" class="tab-pane">
                                            <div class="col-md-6">
                                                <div class="box_warp2">
                                                    <h3>Lucknow</h3>
                                                    <p><b><i class="fa fa-map-marker"></i> </b> {{ getSettings()->address }}</p>
                                                    <p><b><i class="fa fa-mobile"></i> </b><a
                                                            href="tel:+91 {{ getSettings()->contact }}"> +91 {{ getSettings()->contact }} </a></p>
                                                    <p><b><i class="fa fa-phone"></i> </b><a
                                                            href="tel:+91 {{ getSettings()->contact }}"> +91 {{ getSettings()->contact }}</a> </p>
                                                    <p><b><i class="fa fa-envelope"></i> </b><a
                                                            href="mailto:{{ getSettings()->email }}">
                                                            {{ getSettings()->email }}</a> </p>
                                                </div>
                                                <div class="box_warp1">
                                                    <h3>Franchise &amp; Management </h3>
                                                    <p><strong>Mr. K. Muthukrishna</strong><br>
                                                        Director Business Development (South)<br> <span
                                                            style="line-height: 1.6em;"><i class="fa fa-phone"></i> <a
                                                                href="tel:+91{{ getSettings()->contact }}">+91 {{ getSettings()->contact }} getSettings()->contact }}</a{{ getSettings()->contact }}span><br> <span
                                                            style="line-height: 1.6em;"><i class="fa fa-envelope"></i> <a
                                                                href="mailto:{{ getSettings()->email }}">{{ getSettings()->email }}</a></span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="box_warp1">
                                                    <h3>Feedback </h3>
                                                    <p><strong>Ms. Asma</strong><br>
                                                        AVP - Service Excellence<br> <span
                                                            style="line-height: 1.6em;"><strong><i
                                                                    class="fa fa-phone"></i></strong><a
                                                                href="tel:+91 8041783000">+91 8041783000</a></span><br>
                                                        <span style="line-height: 1.6em;"><strong><i
                                                                    class="fa fa-envelope"></i></strong> <a
                                                                href="mailto:asma@royalorchidhotels.com">asma@royalorchidhotels.com
                                                            </a></span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="box_warp1">
                                                    <h3>Careers </h3>
                                                    <p><strong>Mr. Sundeep Shenava</strong><br>
                                                        Assistant Vice President - Human Resources<br> <span
                                                            style="line-height: 1.6em;"><strong><i
                                                                    class="fa fa-phone"></i></strong><a
                                                                href="tel:+91 8040612345">+91 804061 2345</a></span><br>
                                                        <span style="line-height: 1.6em;"><strong><i
                                                                    class="fa fa-envelope"></i></strong> <a
                                                                href="mailto:sundeep@royalorchidhotels.com">sundeep@royalorchidhotels.com</a></span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="box_warp1">
                                                    <h3>Investor Contact </h3>
                                                    <p><strong>Dr. (H.C.) Ranabir Sanyal</strong><br>
                                                        Company Secretary and Compliance Officer<br><span><strong><i
                                                                    class="fa fa-phone"></i></strong><a
                                                                href="tel:+91 8041783000">+91 804178 3000</a></span><br>
                                                        <span style="line-height: 1.6em;"><strong><i
                                                                    class="fa fa-envelope"></i></strong> <a
                                                                href="mailto:cosec@royalorchidhotels.com">cosec@royalorchidhotels.com</a></span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="box_warp1">
                                                    <h3>Loyalty Program </h3>
                                                    <p> <span style="line-height: 20.8px;"><i class="fa fa-phone"></i><a
                                                                href="tel:+91 8041783000">+91 8041783000</a></span><br>
                                                        <span style:="line-height:20.8px;&quot;"><i
                                                                class="fa fa-envelope"></i> <a
                                                                href="mailto:loyalty@royalorchidhotels.com">loyalty@royalorchidhotels.com</a>
                                                        </span> <br><span style="line-height: 20.8px;"><i
                                                                class="fa fa-clock-o"></i> 9:30 AM- 6:30 PM</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div id="media_tab2" class="tab-pane">
                                            <div class="box_warp2">
                                                {{-- @dd(getSettings()) --}}
                                                <h3>Lucknow</h3>
                                                <p><b><i class="fa fa-map-marker"></i> </b> {{ getSettings()->address }}</p>
                                                <p><b><i class="fa fa-mobile"></i> </b><a
                                                        href="tel:+91 {{ getSettings()->contact }}"> +91
                                                        {{ getSettings()->contact }} </a></p>
                                                <p><b><i class="fa fa-phone"></i> </b><a
                                                        href="tel:+91 {{ getSettings()->contact }}"> +91
                                                        {{ getSettings()->contact }}</a> </p>
                                                <p><b><i class="fa fa-envelope"></i> </b><a
                                                        href="mailto:{{ getSettings()->email }}">
                                                        {{ getSettings()->email }}</a> </p>
                                            </div>
                                            {{-- <div class="col-md-6">
                                                <div class="box_warp2">
                                                    <h3>Bangalore </h3>
                                                    <p><i class="fa fa-map-marker"></i> Royal Orchid Central, 47/1,
                                                        Dickenson Road, Manipal Centre, Bangalore - 560 042</p>
                                                    <p>Ms. Mary Anita<br> <i class="fa fa-ticket" aria-hidden="true"></i>
                                                        Reservations - South Reservations<br> <span
                                                            style="line-height: 1.6em;"><strong><i
                                                                    class="fa fa-phone"></i></strong><a
                                                                href="tel:919880606190"> +91 9880606190</a></span><br> <span
                                                            style="line-height: 1.6em;"><strong><i
                                                                    class="fa fa-envelope"></i></strong> <a
                                                                href="mailto:rooms@royalorchidhotels.com">rooms@royalorchidhotels.com</a></span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="box_warp2">
                                                    <h3>Chennai </h3>
                                                    <p><i class="fa fa-map-marker"></i>Central Deccan Regional Office: 36,
                                                        Royapettah High Road, Chennai- 600014</p>
                                                    <p>Mr. Sathiyan Ram<br> <i class="fa fa-ticket" aria-hidden="true"></i>
                                                        Associate Director of Sales - RSO Chennai<br> <span
                                                            style="line-height: 1.6em;"><strong><i
                                                                    class="fa fa-phone"></i></strong><a
                                                                href="tel:919600005305">+91 9600005305</a></span><br> <span
                                                            style="line-height: 1.6em;"><strong><i
                                                                    class="fa fa-envelope"></i></strong> <a
                                                                href="mailto:chennairso@royalorchidhotels.com">chennairso@royalorchidhotels.com</a></span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="box_warp2">
                                                    <h3>Delhi </h3>
                                                    <p><i class="fa fa-map-marker"></i> Regenta Suites By Royal Orchid
                                                        Hotels Limited, Element One Mall, Sector 49, Sohna Road, Gurugram -
                                                        122018 (Haryana)</p>
                                                    <p>Mr. Sandeep Kumar Rajput<br> <i class="fa fa-ticket"
                                                            aria-hidden="true"></i> Assistant Vice President - Sales
                                                        (North)<br> <span style="line-height: 1.6em;"><strong><i
                                                                    class="fa fa-phone"></i></strong><a
                                                                href="tel:919910971118">+91 9910971118</a></span><br> <span
                                                            style="line-height: 1.6em;"><strong><i
                                                                    class="fa fa-envelope"></i></strong> <a
                                                                href="mailto:srajput@royalorchidhotels.com">srajput@royalorchidhotels.com</a></span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="box_warp2">
                                                    <h3>Gujarat </h3>
                                                    <p><i class="fa fa-map-marker"></i> Arved Transcube Plaza, Opp Ranip
                                                        BRTS bus stop, 132 ft. ring road, Ranip, Ahmedabad - 380 013</p>
                                                    <p>Mr. Kounish Chakraborty<br> <i class="fa fa-ticket"
                                                            aria-hidden="true"></i> Director of Sales - Gujarat<br> <span
                                                            style="line-height: 1.6em;"><strong><i
                                                                    class="fa fa-phone"></i></strong><a
                                                                href="tel:918980088610"> +91 8980088610</a></span><br>
                                                        <span style="line-height: 1.6em;"><strong><i
                                                                    class="fa fa-envelope"></i></strong> <a
                                                                href="mailto:dsm.rocahmd@royalorchidhotels.com">dsm.rocahmd@royalorchidhotels.com</a></span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="box_warp2">
                                                    <h3>Hyderabad </h3>
                                                    <p><i class="fa fa-map-marker"></i> Road No 1, Banjara Hills,
                                                        Hyderabad, 500 033</p>
                                                    <p><!--Mr. Kounish Chakraborty<br />--> <i class="fa fa-ticket"
                                                            aria-hidden="true"></i> Director of Sales<br> <span
                                                            style="line-height: 1.6em;"><strong><i
                                                                    class="fa fa-phone"></i></strong><a
                                                                href="tel:+91 7338277641">+91 7338277641</a></span><br>
                                                        <span style="line-height: 1.6em;"><strong><i
                                                                    class="fa fa-envelope"></i></strong> <a
                                                                href="mailto:sales1.hyd@royalorchidhotels.com">sales1.hyd@royalorchidhotels.com</a></span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="box_warp2">
                                                    <h3>Kolkata </h3>
                                                    <p><i class="fa fa-map-marker"></i> 621, Prantik Pally, NR Acropolis
                                                        Mall Kasba, Kolkata- 700107</p>
                                                    <p>Mr. Vikash Singh<br> <i class="fa fa-ticket"
                                                            aria-hidden="true"></i> Associate Director of Sales<br> <span
                                                            style="line-height: 1.6em;"><strong><i
                                                                    class="fa fa-phone"></i></strong><a
                                                                href="tel:+91 9810598342"> +91 9810598342</a></span><br>
                                                        <span style="line-height: 1.6em;"><strong><i
                                                                    class="fa fa-envelope"></i></strong> <a
                                                                href="mailto:sales.kolkata@royalorchidhotels.com">sales.kolkata@royalorchidhotels.com</a></span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="box_warp2">
                                                    <h3>Mumbai </h3>
                                                    <p><i class="fa fa-map-marker"></i> Office Nos. 407 4th Floor, The
                                                        Summit Business Bay-Omkar, 513 Andheri-Kurla Road, Near WEH Metro
                                                        Station, Opp. PVR Cinema Gundavali, Andheri East, Mumbai-400093</p>
                                                    <p>Ms. Aditi Pal<br> <i class="fa fa-ticket" aria-hidden="true"></i>
                                                        AVP Sales – West ( Mumbai &amp; Gujrat)<br> <span
                                                            style="line-height: 1.6em;"><strong><i
                                                                    class="fa fa-phone"></i></strong><a
                                                                href="tel:+91 9004478267">+91 9004478267</a></span><br>
                                                        <span style="line-height: 1.6em;"><strong><i
                                                                    class="fa fa-envelope"></i></strong> <a
                                                                href="aditi@royalorchidhotels.com ">aditi@royalorchidhotels.com
                                                            </a>&amp; <a
                                                                href="sales.mumbai@royalorchidhotels.com">sales.mumbai@royalorchidhotels.com</a></span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="box_warp2">
                                                    <h3>Mysore </h3>
                                                    <p><i class="fa fa-map-marker"></i> #5,&nbsp;Jhansi Lakshmibai Road,
                                                        Mysore - 570 005</p>
                                                    <p><span style="line-height: 1.6em;"><strong><i
                                                                    class="fa fa-phone"></i></strong><a
                                                                href="tel:+919902000142">+91 990 200 0142</a></span><br>
                                                        <span style="line-height: 1.6em;"><strong><i
                                                                    class="fa fa-envelope"></i></strong> <a
                                                                href="mailto:metropole@royalorchidhotels.com">metropole@royalorchidhotels.com</a></span>
                                                    </p>
                                                    <p>Mr. Vijay Kumar<br> <i class="fa fa-ticket" aria-hidden="true"></i>
                                                        Director of Sales<br> <span style="line-height: 1.6em;"><strong><i
                                                                    class="fa fa-phone"></i></strong><a
                                                                href="tel:919902000143">+91 9902000143</a></span><br> <span
                                                            style="line-height: 1.6em;"><strong><i
                                                                    class="fa fa-envelope"></i></strong> <a
                                                                href="mailto:dos.mysore@royalorchidhotels.com">dos.mysore@royalorchidhotels.com</a></span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="box_warp2">
                                                    <h3>Pune </h3>
                                                    <p><i class="fa fa-map-marker"></i> Marisoft Annexe, Kalyani Nagar,
                                                        Pune, Maharashtra- 411 014</p>
                                                    <p>Mr. Dhanaanjay Misal<br> <i class="fa fa-ticket"
                                                            aria-hidden="true"></i> Asst. Vice President- Sales (Pune &amp;
                                                        Goa)<br> <span style="line-height: 1.6em;"><strong><i
                                                                    class="fa fa-phone"></i></strong><a
                                                                href="tel:919766211711">+91 9766211711</a></span><br> <span
                                                            style="line-height: 1.6em;"><strong><i
                                                                    class="fa fa-phone"></i></strong><a
                                                                href="tel:912040003004"> +91 20 4000 3004</a><br> <span
                                                                style="line-height: 1.6em;"><strong><i
                                                                        class="fa fa-envelope"></i></strong> <a
                                                                    href="mailto:dhanaanjaymisal@royalorchidhotels.com">dhanaanjaymisal@royalorchidhotels.com</a></span></span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="box_warp2">
                                                    <h3>Punjab </h3>
                                                    <p><i class="fa fa-map-marker"></i> Central Cassia Zirakpur, Patiala
                                                        Rd, Green Enclave, Lohgarh, Zirakpur - 140 603 </p>
                                                    <p>Mr. Sanjeev Kumar<br> <i class="fa fa-ticket"
                                                            aria-hidden="true"></i> Asst. Director of Sales<br>
                                                        <!--<span style="line-height: 1.6em;"><strong><i class="fa fa-phone"></i></strong><a href="tel:912040003004"> +91 20 4000 3004</a><br />-->
                                                        <span style="line-height: 1.6em;"><strong><i
                                                                    class="fa fa-envelope"></i></strong> <a
                                                                href="mailto:ados.punjab@royalorchidhotels.com">ados.punjab@royalorchidhotels.com</a></span>
                                                    </p>
                                                    <p>Mr. Prabhnoor<br>
                                                        <!--<i class="fa fa-ticket" aria-hidden="true"></i> Asst. Director of Sales<br />-->
                                                        <span style="line-height: 1.6em;"><strong><i
                                                                    class="fa fa-phone"></i></strong><a
                                                                href="tel:919717311229">+91 9717311229</a></span><br> <span
                                                            style="line-height: 1.6em;"><strong><i
                                                                    class="fa fa-envelope"></i></strong> <a
                                                                href="mailto:sales.punjab@royalorchidhotels.com">sales.punjab@royalorchidhotels.com</a></span>
                                                    </p>
                                                </div>
                                            </div> --}}
                                        </div>
                                        <div id="media_tab4" class="tab-pane active">
                                            <div class="col-md-3"></div>
                                            {{-- <div class="col-md-6">
                                                <h2>Select Location</h2> <select name="DdlCity" id="DdlCity"
                                                    class="form-control" onchange="showhot();">
                                                    <option value="1113">Agra</option>
                                                    <option value="1">Ahmedabad</option>
                                                    <option value="1033">Ajmer</option>
                                                    <option value="1094">Ambala</option>
                                                    <option value="2">Amritsar</option>
                                                    <option value="3">Bangalore</option>
                                                    <option value="1064">Belagavi</option>
                                                    <option value="1057">Bharatpur</option>
                                                    <option value="4">Bharuch</option>
                                                    <option value="1085">Bhopal</option>
                                                    <option value="1004">Bhuj</option>
                                                    <option value="1005">Chandigarh</option>
                                                    <option value="1028">Chennai</option>
                                                    <option value="1056">Dahej</option>
                                                    <option value="1034">Dehradun</option>
                                                    <option value="1082">Dharamshala</option>
                                                    <option value="1088">Digha</option>
                                                    <option value="1103">Gangtok</option>
                                                    <option value="1007">Goa</option>
                                                    <option value="1098">Greater Noida</option>
                                                    <option value="1092">Guhagar</option>
                                                    <option value="1075">Gurugram</option>
                                                    <option value="1009">Hampi</option>
                                                    <option value="1026">Haridwar</option>
                                                    <option value="1106">Igatpuri</option>
                                                    <option value="1039">Indore</option>
                                                    <option value="1012">Jaipur</option>
                                                    <option value="1110">Jamnagar</option>
                                                    <option value="1083">Jhansi</option>
                                                    <option value="1074">Kabini Wildlife</option>
                                                    <option value="1041">Kanpur</option>
                                                    <option value="2110">Kasauli</option>
                                                    <option value="1076">Kedarnath</option>
                                                    <option value="1100">Kolhapur</option>
                                                    <option value="1024">Kolkata</option>
                                                    <option value="1078">Ladakh</option>
                                                    <option value="1070">Lonavala</option>
                                                    <option value="1093">Lucknow</option>
                                                    <option value="1031">Ludhiana</option>
                                                    <option value="1014">Mahabaleshwar</option>
                                                    <option value="1062">Manali</option>
                                                    <option value="1097">McLeod Ganj</option>
                                                    <option value="1084">Mohali</option>
                                                    <option value="1069">Morbi</option>
                                                    <option value="1111">Mumbai</option>
                                                    <option value="1015">Mussoorie</option>
                                                    <option value="1016">Mysore</option>
                                                    <option value="1058">Nagpur</option>
                                                    <option value="1046">Nashik</option>
                                                    <option value="1018">Navi Mumbai</option>
                                                    <option value="1096">Nellore</option>
                                                    <option value="2109">Nepal</option>
                                                    <option value="1068">Noida</option>
                                                    <option value="1112">Panchkula</option>
                                                    <option value="1066">Pench</option>
                                                    <option value="1087">Phagwara</option>
                                                    <option value="1019">Pune</option>
                                                    <option value="1022">Rajkot</option>
                                                    <option value="1027">Ranthambore</option>
                                                    <option value="1067">Rishikesh</option>
                                                    <option value="1107">Sakleshpur</option>
                                                    <option value="1073">Sambalpur</option>
                                                    <option value="1071">Shimla</option>
                                                    <option value="1021">Shimoga</option>
                                                    <option value="1055">Somnath</option>
                                                    <option value="1099">Sri Lanka</option>
                                                    <option value="1042">Srinagar</option>
                                                    <option value="1072">Udaipur</option>
                                                    <option value="1023">Vadodara</option>
                                                    <option value="1060">Vapi</option>
                                                    <option value="1079">Varanasi</option>
                                                </select>
                                            </div> --}}

                                            <div id="mes">
                                                <div class="col-sm-6">
                                                    <div class="box_warp2">
                                                        {{-- @dd(getSettings()) --}}
                                                        <h3>Lucknow</h3>
                                                        <p><b><i class="fa fa-map-marker"></i> </b>
                                                            {{ getSettings()->address }}</p>
                                                        <p><b><i class="fa fa-mobile"></i> </b><a
                                                                href="tel:+91 {{ getSettings()->contact }}"> +91
                                                                {{ getSettings()->contact }} </a></p>
                                                        <p><b><i class="fa fa-phone"></i> </b><a
                                                                href="tel:+91 {{ getSettings()->contact }}"> +91
                                                                {{ getSettings()->contact }}</a> </p>
                                                        <p><b><i class="fa fa-envelope"></i> </b><a
                                                                href="mailto:{{ getSettings()->email }}">
                                                                {{ getSettings()->email }}</a> </p>
                                                    </div>
                                                </div>
                                                <div>
                                                    {{-- <div id="mes">
                                                <div class="col-sm-6">
                                                    <div class="box_warp2">
                                                        <h3>Regenta Central, Antarim, Ahmedabad</h3>
                                                        <p><b><i class="fa fa-map-marker"></i> </b> Between Girish Coldrink
                                                            and Xaviers Corner, Chimanlal Girdharlal Rd, Navrangpura,
                                                            Ahmedabad, Gujarat 380009</p>
                                                        <p><b><i class="fa fa-mobile"></i> </b><a
                                                                href="tel:+91 7069039301"> +91 7069039301 </a></p>
                                                        <p><b><i class="fa fa-phone"></i> </b><a
                                                                href="tel:+91 7966004400"> +91 7966004400</a> </p>
                                                        <p><b><i class="fa fa-envelope"></i> </b><a
                                                                href="mailto:gm.rcam@royalorchidhotels.com">
                                                                gm.rcam@royalorchidhotels.com</a> </p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="box_warp2">
                                                        <h3>Regenta Inn, Ranip, Ahmedabad</h3>
                                                        <p><b><i class="fa fa-map-marker"></i> </b> Arved Transcube
                                                            Plaza,Opp. Adi-Jati Girls Hostel, BRTS Stand, Ranip, Ahmedabad,
                                                            Gujarat - 382480</p>
                                                        <p><b><i class="fa fa-mobile"></i> </b><a
                                                                href="tel:+91 8980803490"> +91 8980803490 </a></p>
                                                        <p><b><i class="fa fa-phone"></i> </b><a
                                                                href="tel:+91 7927533000"> +91 7927533000</a> </p>
                                                        <p><b><i class="fa fa-envelope"></i> </b><a
                                                                href="mailto:gm.rgamd@royalorchidhotels.com">
                                                                gm.rgamd@royalorchidhotels.com</a> </p>
                                                    </div>
                                                </div>
                                            </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
@endsection
