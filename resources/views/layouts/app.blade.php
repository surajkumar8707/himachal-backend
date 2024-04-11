<!DOCTYPE html> <!--demo-->
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head id="Head1">
    <link rel="canonical" href="https://www.royalorchidhotels.com" lang="en" />
    <meta name="google-site-verification" content="ABbmA74E7dibyrcRq7uZgaO3ckpZprS2L_69gd1I2OA" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="Cache-Control" content="Public" />
    <title>
        {{ getSettings()->app_name; }} | @yield('title')
    </title>
    <link href="{{ public_asset('assets/frontend/css/site.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet" type="text/css" />
    <link href="css/owl.theme.default.min.css" rel="stylesheet" defer="" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="images/favicon1.ico" />
    <!-- <link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" type="text/css" /> -->
    <meta name="keywords"
        content="management hotels, Hotel Management Company &amp; Services, hotel management companies, Hotel Management Company,  hotel management companies,  hotel groups,  hotel group,  hotel management group,  hotel management groups,  top hotel management companies,  luxury hotel management,  hotel management firms,  hotel management firm,  luxury hotel groups,  hotel management services, 5 star hotel, 5 star hotels in india, top 5 hotels in india,  five star hotel,  five star hotels in india, best hotels in i" />
    <meta name="description" content="Royal Orchid Hotels - A group of best business &amp; luxury hotels in India. Discover hotels that have a soul, a reflection of our distinctly warm, Indian Hospitality. We manage, franchise and own various hotels across the country. " />
</head>

<body>
    <form name="form1" method="post" action="./" id="form1">
        <div> <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" /> <input type="hidden"
                name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" /> <input type="hidden" name="__VSTATE"
                id="__VSTATE"
                value="H4sIAAAAAAAEAK1VXW/bNhSFXVu2G3Qp0DWPgeaXbhgcS7Ilx8Oyh64YUgzdgHUY9mZci4xIiyI1UrKX/eP9iu1eOmmyj3QZ0sCRLnk/zrmH0tUfnUN22B9ly2U8myVpdHjUPX72EyjJoOE/8F9a7po3hvFu56jbfXTIjnrdDsX0fuS/Nv3fD75kchvmCpw7C8c5WNM6riZSa27D8Vd/8cqGVyHkjdxyckEoLL84G4umqd0X0+lutzux5hKUsbmQTJiGK3eSm2pqLi64dZgiqyI0OlcyL8/GyuTQSKPPXty3wotx6Gx+Np6+rqDgbuqwS26nSbyaz1dJlMxXsTfniziKQp8eroFaWWm+C538jZ/UuhiHoJqzMcZMfMxkH4P8poD/2PI/+74i/2/wEcJGe/hoRmacvK2t1EWYm/pyUkl9C3Tvmbx8h/i/0dJVmr5rlsxUQFXLk019jXFO6/fVvj658O4jCe/QmuBnN/BoxqbmWpvdLQLf406IW/+l6AN4xNkqvjrzaEFmPI9nWfZzmqXhp8lnXvUbQm9bPXGg2T1P+v5PtuUF1w1MSlhLLSfOn66bWO6MbaZmy+1W8t1Dnvz7IbzntOKb08Lf4ltf55Y2+40PJ8lDmr3rsOOrhy5a4cuG5jx9wxtraqP4JL7VS3W9++HaYVZu6Y0Vhkbq5YOm2N9r3TXPTq8GCrYb+4GS4oiL5vut2JvRLI5vd/5qXzo8v6F5I4C/sm4Xp38Xp//Tw6Pg+MkraIC+Ad9Irlh/+LVsLr+Dih9/RA78gLR87wnI8/rV8cHqE/K8NK1mBXv6/LxHjh4UFkYgKs5gDawPm4rbAKo1KBhCZWXjwI7wtStIDz5ccwUFbOVoLcBCU7d2QFabi2AtTA2qtxbt5nEu8G2VBVgxyAWOF5B9BoJvhowLC6zVB4zyKycQp4+RAgYFgjSmfFQYeFJYjp8/i0MI1RgUrUBQOyxa2yLdqu8n5hArSLbDfQQiJjKQmiHJYAMSl8MNVJrygg2ycfJw/wqGO6mYkhc8KEET/xIctEqOSpTAamjEsDRKgHcZVaJmgQIGpRgqo2GLhAeqzUucj0PVMiFBw5MKBMqnuBPIJ6hwS8mDKlfcsBD72gSVwU5lvzJ2LYOqRX3lqGqdM8ZKHlSXjngjW0TFmxOyPEAsGe5DB5orkr+vOUrc96qMatC5KFvUD8d1LoY1ioTo0KtbzQMLm9I0BxZ0g2qtMXlkJdVFjo8dlMQVwUbOnzXBorPC3uhmCrybisQYOStDBbqEIVpez0HL9gJvgRlGiFvA49iihdTl8/NO1MOne9aJe3E0m+FlOe8kHTKyOV7SRYdupyleIrIispJTcmWU4r0JXXAP1xSyoDIUsiTHwucuKS2jEJ9Gyzgh6IhyKW1BpeZxL9nvLXwwWQk5FlRvQcslBc+Ib0yOjDCWBHnql0sq6r2EGxNaSrlzsmLPKkMMTygjzkQjysh7SlViz5T2ElpmC6JB1sKTpMoJXVIqv6Tgue/SZ3jdPPvlx58/Oi8+0B9jfwKnth6qewoAAA==" />
            <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="" />
        </div>
        <script type="text/javascript">
            //<![CDATA[
            var theForm = document.forms['form1'];
            if (!theForm) {
                theForm = document.form1;
            }

            function __doPostBack(eventTarget, eventArgument) {
                if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
                    theForm.__EVENTTARGET.value = eventTarget;
                    theForm.__EVENTARGUMENT.value = eventArgument;
                    theForm.submit();
                }
            }
            //]]>
        </script>
        <script
            src="/WebResource.axd?d=pynGkmcFUV13He1Qd6_TZIYGj6gEJLF62jAbnTn6vAlt8Pe8i4zURe31n8qkHzltUJrrT_vKcsGmNCDGscTMdA2&amp;t=637118431340000000"
            type="text/javascript"></script>
        <script src="Scripts/WebForms/MsAjax/MicrosoftAjax.js" type="text/javascript"></script>
        <script type="text/javascript">
            //<![CDATA[
            if (typeof(Sys) === 'undefined') throw new Error('ASP.NET Ajax client-side framework failed to load.');
            //]]>
        </script>
        <script src="Scripts/WebForms/MsAjax/MicrosoftAjaxWebForms.js" type="text/javascript"></script>
        <script type="text/javascript">
            //<![CDATA[
            Sys.WebForms.PageRequestManager._initialize('TopMenu$ScriptManager1', 'form1', ['tFooter$UpdatePanel2', ''], [], [],
                90, '');
            //]]>
        </script>

        @include('layouts.header')

        <!-- </div> -->
        <div class="modal fade" id="menuBox" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content panel-body">
                    <div class="container-fluid">
                        <ul class="nav nav-tabs" id="myTabs">
                            <li role="presentation" class="active"><a href="#city" aria-controls="city"
                                    role="tab" data-toggle="tab" class="menutab1">Our Hotels</a></li>
                            <li role="presentation"><a href="#Intcity" aria-controls="Intcity" role="tab"
                                    data-toggle="tab" class="menutab3">International Hotels</a></li>
                            <li role="presentation1"><a href="#bespoke_hotels" aria-controls="bespoke_hotels"
                                    role="tab" data-toggle="tab" class="menutab2">Upcoming Hotels</a></li>
                        </ul>
                        <div id="all_tabs">
                            <div class="tab-content predictive-search" id="tab_content">
                                <div role="tabpanel" class="tab-pane fade in active" id="city">
                                    <div class="sdbx"> <input name="txtsearchhotels" id="txtsearchhotels"
                                            type="text" class="search_Destination ui-autocomplete-input"
                                            autocomplete="off" placeholder="Search destinations and hotels">
                                        <div class="sddbox">
                                            <div class="Hotelcitylist"></div>
                                        </div>
                                    </div>
                                    <ul class="nav navbar-nav">
                                        <li><a class="expand mr0 grid85" id="pic1113" href="javascript:void(0)"
                                                data-id="1113"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1113"
                                                href="/regenta-place-raaj-agra/overview">Agra</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1" href="javascript:void(0)"
                                                data-id="1"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0"
                                                onclick="OpenCitySearch('ahmedabad')"
                                                href="/ahmedabad-hotels">Ahmedabad</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1033" href="javascript:void(0)"
                                                data-id="1033"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1033"
                                                href="/regenta-inn-embassy-ajmer/overview">Ajmer</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1094" href="javascript:void(0)"
                                                data-id="1094"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1094"
                                                href="/regenta-central-city-vilas-palace-ambala/overview">Ambala</a>
                                        </li>
                                        <li><a class="expand mr0 grid85" id="pic2" href="javascript:void(0)"
                                                data-id="2"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0"
                                                onclick="OpenCitySearch('amritsar')"
                                                href="/amritsar-hotels">Amritsar</a></li>
                                        <li><a class="expand mr0 grid85" id="pic3" href="javascript:void(0)"
                                                data-id="3"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0"
                                                onclick="OpenCitySearch('bangalore')"
                                                href="/bangalore-hotels">Bangalore</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1064" href="javascript:void(0)"
                                                data-id="1064"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1064"
                                                href="/regenta-resort-belagavi/overview">Belagavi</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1057" href="javascript:void(0)"
                                                data-id="1057"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1057"
                                                href="/regenta-resort-bharatpur/overview">Bharatpur</a></li>
                                        <li><a class="expand mr0 grid85" id="pic4" href="javascript:void(0)"
                                                data-id="4"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic4"
                                                href="/regenta-central-harimangla-bharuch/overview">Bharuch</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1085" href="javascript:void(0)"
                                                data-id="1085"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1085"
                                                href="/regenta-place-bhopal/overview">Bhopal</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1004" href="javascript:void(0)"
                                                data-id="1004"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1004"
                                                href="/regenta-resort-bhuj/overview">Bhuj</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1005" href="javascript:void(0)"
                                                data-id="1005"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1005"
                                                href="/regenta-central-cassia-chandigarh/overview">Chandigarh</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1028" href="javascript:void(0)"
                                                data-id="1028"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0"
                                                onclick="OpenCitySearch('chennai')" href="/chennai-hotels">Chennai</a>
                                        </li>
                                        <li><a class="expand mr0 grid85" id="pic1056" href="javascript:void(0)"
                                                data-id="1056"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1056"
                                                href="/regenta-central-hestia-dahej/overview">Dahej</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1034" href="javascript:void(0)"
                                                data-id="1034"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1034"
                                                href="/regenta-dehradun-by-royal-orchid-hotels-ltd/overview">Dehradun</a>
                                        </li>
                                        <li><a class="expand mr0 grid85" id="pic1082" href="javascript:void(0)"
                                                data-id="1082"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1082"
                                                href="/regenta-resort-exotica-dharamshala-on-hilltop/overview">Dharamshala</a>
                                        </li>
                                        <li><a class="expand mr0 grid85" id="pic1088" href="javascript:void(0)"
                                                data-id="1088"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1088"
                                                href="/regenta-inn-digha/overview">Digha</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1103" href="javascript:void(0)"
                                                data-id="1103"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1103"
                                                href="/regenta-inn-gangtok/overview">Gangtok</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1007" href="javascript:void(0)"
                                                data-id="1007"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0"
                                                onclick="OpenCitySearch('goa')" href="/goa-hotels">Goa</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1098" href="javascript:void(0)"
                                                data-id="1098"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1098"
                                                href="/regenta-inn-greater-noida/overview">Greater Noida</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1092" href="javascript:void(0)"
                                                data-id="1092"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1092"
                                                href="/regenta-resort-mango-village-guhagar/overview">Guhagar</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1075" href="javascript:void(0)"
                                                data-id="1075"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1075"
                                                href="/regenta-suites-gurugram/overview">Gurugram</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1009" href="javascript:void(0)"
                                                data-id="1009"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1009"
                                                href="/royal-orchid-central-kireeti-hampi/overview">Hampi</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1026" href="javascript:void(0)"
                                                data-id="1026"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1026"
                                                href="/regenta-orkos-haridwar/overview">Haridwar</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1106" href="javascript:void(0)"
                                                data-id="1106"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1106"
                                                href="/regenta-place-igatpuri/overview">Igatpuri</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1039" href="javascript:void(0)"
                                                data-id="1039"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1039"
                                                href="/regenta-central-indore/overview">Indore</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1012" href="javascript:void(0)"
                                                data-id="1012"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0"
                                                onclick="OpenCitySearch('jaipur')" href="/jaipur-hotels">Jaipur</a>
                                        </li>
                                        <li><a class="expand mr0 grid85" id="pic1110" href="javascript:void(0)"
                                                data-id="1110"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1110"
                                                href="/regenta-inn-motikhavdi-jamnagar/overview">Jamnagar</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1083" href="javascript:void(0)"
                                                data-id="1083"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1083"
                                                href="/regenta-place-jhansi/overview">Jhansi</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1074" href="javascript:void(0)"
                                                data-id="1074"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1074"
                                                href="/regenta-jungle-resort-kabini-springs/overview">Kabini
                                                Wildlife</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1041" href="javascript:void(0)"
                                                data-id="1041"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1041"
                                                href="/regenta-central-the-crystal-kanpur/overview">Kanpur</a></li>
                                        <li><a class="expand mr0 grid85" id="pic2110" href="javascript:void(0)"
                                                data-id="2110"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic2110"
                                                href="/velmore-kasauli/overview">Kasauli</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1076" href="javascript:void(0)"
                                                data-id="1076"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1076"
                                                href="/regenta-resort-madhuganga-ukhimath/overview">Kedarnath</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1100" href="javascript:void(0)"
                                                data-id="1100"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1100"
                                                href="/regenta-place-raysons-kolhapur/overview">Kolhapur</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1024" href="javascript:void(0)"
                                                data-id="1024"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0"
                                                onclick="OpenCitySearch('kolkata')" href="/kolkata-hotels">Kolkata</a>
                                        </li>
                                        <li><a class="expand mr0 grid85" id="pic1078" href="javascript:void(0)"
                                                data-id="1078"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1078"
                                                href="/lasermo-ladakh/overview">Ladakh</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1070" href="javascript:void(0)"
                                                data-id="1070"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1070"
                                                href="/regenta-sgs-greenotel-lonavala/overview">Lonavala</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1093" href="javascript:void(0)"
                                                data-id="1093"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1093"
                                                href="/regenta-central-lucknow/overview">Lucknow</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1031" href="javascript:void(0)"
                                                data-id="1031"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1031"
                                                href="/regenta-central-klassik-ludhiana/overview">Ludhiana</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1014" href="javascript:void(0)"
                                                data-id="1014"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0"
                                                onclick="OpenCitySearch('mahabaleshwar')"
                                                href="/mahabaleshwar-hotels">Mahabaleshwar</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1062" href="javascript:void(0)"
                                                data-id="1062"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0"
                                                onclick="OpenCitySearch('manali')" href="/manali-hotels">Manali</a>
                                        </li>
                                        <li><a class="expand mr0 grid85" id="pic1097" href="javascript:void(0)"
                                                data-id="1097"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1097"
                                                href="/regenta-inn-luxinna-heights-bhagsunag-mcleodganj/overview">Mcleod
                                                Ganj</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1084" href="javascript:void(0)"
                                                data-id="1084"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1084"
                                                href="/regenta-place-mohali/overview">Mohali</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1069" href="javascript:void(0)"
                                                data-id="1069"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1069"
                                                href="/regenta-inn-morbi/overview">Morbi</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1111" href="javascript:void(0)"
                                                data-id="1111"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1111"
                                                href="/regenta-place-the-emerald-juhu-mumbai/overview">Mumbai</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1015" href="javascript:void(0)"
                                                data-id="1015"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1015"
                                                href="/royal-orchid-fort-resort-mussoorie/overview">Mussoorie</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1016" href="javascript:void(0)"
                                                data-id="1016"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0"
                                                onclick="OpenCitySearch('mysore')" href="/mysore-hotels">Mysore</a>
                                        </li>
                                        <li><a class="expand mr0 grid85" id="pic1058" href="javascript:void(0)"
                                                data-id="1058"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1058"
                                                href="/regenta-central-hotel-convention-centre-nagpur/overview">Nagpur</a>
                                        </li>
                                        <li><a class="expand mr0 grid85" id="pic1046" href="javascript:void(0)"
                                                data-id="1046"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1046"
                                                href="/regenta-resort-soma-vine-village-nashik/overview">Nashik</a>
                                        </li>
                                        <li><a class="expand mr0 grid85" id="pic1018" href="javascript:void(0)"
                                                data-id="1018"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1018"
                                                href="/royal-orchid-central-grazia-navi-mumbai/overview">Navi
                                                Mumbai</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1096" href="javascript:void(0)"
                                                data-id="1096"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1096"
                                                href="/regenta-inn-bhavani-nellore/overview">Nellore</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1068" href="javascript:void(0)"
                                                data-id="1068"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1068"
                                                href="/regenta-central-noida/overview">Noida</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1112" href="javascript:void(0)"
                                                data-id="1112"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1112"
                                                href="/regenta-place-morni-hills-panchkula/overview">Panchkula</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1066" href="javascript:void(0)"
                                                data-id="1066"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1066"
                                                href="/regenta-resort-aranyaani-pench/overview">Pench</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1087" href="javascript:void(0)"
                                                data-id="1087"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1087"
                                                href="/regenta-place-phagwara/overview">Phagwara</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1019" href="javascript:void(0)"
                                                data-id="1019"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0"
                                                onclick="OpenCitySearch('pune')" href="/pune-hotels">Pune</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1022" href="javascript:void(0)"
                                                data-id="1022"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1022"
                                                href="/regenta-rpj-rajkot/overview">Rajkot</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1027" href="javascript:void(0)"
                                                data-id="1027"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1027"
                                                href="/regenta-resort-vanya-mahal-ranthambore/overview">Ranthambore</a>
                                        </li>
                                        <li><a class="expand mr0 grid85" id="pic1067" href="javascript:void(0)"
                                                data-id="1067"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1067"
                                                href="/regenta-inn-on-the-ganges-rishikesh/overview">Rishikesh</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1107" href="javascript:void(0)"
                                                data-id="1107"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1107"
                                                href="/regenta-resorts-sakleshpur/overview">Sakleshpur</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1073" href="javascript:void(0)"
                                                data-id="1073"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1073"
                                                href="/regenta-inn-sambalpur/overview">Sambalpur</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1071" href="javascript:void(0)"
                                                data-id="1071"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0"
                                                onclick="OpenCitySearch('shimla')" href="/shimla-hotels">Shimla</a>
                                        </li>
                                        <li><a class="expand mr0 grid85" id="pic1021" href="javascript:void(0)"
                                                data-id="1021"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1021"
                                                href="/royal-orchid-central-shimoga/overview">Shimoga</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1055" href="javascript:void(0)"
                                                data-id="1055"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1055"
                                                href="/regenta-central-somnath/overview">Somnath</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1042" href="javascript:void(0)"
                                                data-id="1042"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1042"
                                                href="/regenta-central-srinagar/overview">Srinagar</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1072" href="javascript:void(0)"
                                                data-id="1072"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0"
                                                onclick="OpenCitySearch('udaipur')" href="/udaipur-hotels">Udaipur</a>
                                        </li>
                                        <li><a class="expand mr0 grid85" id="pic1023" href="javascript:void(0)"
                                                data-id="1023"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0"
                                                onclick="OpenCitySearch('vadodara')"
                                                href="/vadodara-hotels">Vadodara</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1060" href="javascript:void(0)"
                                                data-id="1060"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1060"
                                                href="/regenta-central-harsha-vapi/overview">Vapi</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1079" href="javascript:void(0)"
                                                data-id="1079"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0"
                                                onclick="OpenCitySearch('varanasi')"
                                                href="/varanasi-hotels">Varanasi</a></li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="Intcity">
                                    <ul class="nav navbar-nav">
                                        <li><a class="expand mr0 grid85" id="pic2109" href="javascript:void(0)"
                                                data-id="2109"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic2109"
                                                href="/regenta-place-sabrina-nepal/overview">Nepal</a></li>
                                        <li><a class="expand mr0 grid85" id="pic1099" href="javascript:void(0)"
                                                data-id="1099"><i class="fas fa-plus"></i><i
                                                    class="fas fa-minus"></i></a><a class="ml0" data-id="pic1099"
                                                href="/regenta-arie-lagoon-negombo-sri-lanka/overview">Sri Lanka</a>
                                        </li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="bespoke_hotels">
                                    <div class="upcoming_hotels">
                                        <h3>Upcoming Hotel Cities</h3>
                                        <div class="upcom-hotel">
                                            <div class="width_25">
                                                <h3>International</h3>
                                                <ul>
                                                    <li>Regenta Place, Kathmandu, Nepal</li>
                                                    <li>Regenta Resort, Chitwan, Nepal</li>
                                                    <li>Regenta Central, Lalitpur, Nepal</li>
                                                </ul>
                                            </div>
                                            <div class="width_25">
                                                <h3>North</h3>
                                                <ul>
                                                    <li>Regenta Place, Agra</li>
                                                    <li>Regenta Inn, Gurgaon, Sector-47</li>
                                                    <li>Regenta Inn, Raipur</li>
                                                    <li>Regenta Inn, Gwalior</li>
                                                    <li>Regenta Resort (Velmore), Kasauli</li>
                                                    <li>Regenta Resort, Pushkar</li>
                                                    <li>Regenta Inn, Jaipur</li>
                                                    <li>Regenta Central, Varanasi</li>
                                                    <li>Regenta Place/Central, Bhadohi</li>
                                                    <li>Regenta Central, Gurgaon, Sector-70</li>
                                                    <li>Regenta Place, Vrindavan, Uttarpradesh</li>
                                                </ul>
                                            </div>
                                            <div class="width_25">
                                                <h3>South</h3>
                                                <ul>
                                                    <li>Regenta Central, Tirupati</li>
                                                </ul>
                                            </div>
                                            <div class="width_25">
                                                <h3>East</h3>
                                                <ul>
                                                    <li>Regenta Central, Puri-Orissa</li>
                                                    <li>Regenta Inn, Tezpur Assam</li>
                                                </ul>
                                            </div>
                                            <div class="width_25">
                                                <h3>West</h3>
                                                <ul>
                                                    <li>Regenta Resort, Dapoli</li>
                                                    <li>Regenta Inn, Dhule</li>
                                                    <li>Regenta Central, Solapur</li>
                                                    <li>Regenta Central, Nanded</li>
                                                    <li>Regenta Resort, Gir</li>
                                                    <li>Regenta Central, Rajkot</li>
                                                    <li>Regenta Resort, Bhavnagar</li>
                                                    <li>Regenta, Surat</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div> <br>
                            <div class="hide" id="cityCollapse"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- menu css -->



        @yield('content')

        <div class="modal" id="myModal303" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1">
            <div class="modal-dialog" role="document">
                <div class="modal-content"></div>
            </div>
        </div>
        <style>
            .resturant_name_box p {
                color: #fff;
                padding: 0 15px;
                font-size: 16px;
                line-height: 28px;
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
        <script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js" type="text/javascript"></script>
        <script src="https://code.jquery.com/ui/1.11.0/jquery-ui.min.js" type="text/javascript"></script>
        <script src="{{ public_asset("assets/frontend/js/bootstrap.min.js") }}" type="text/javascript"></script>
        <script src="{{ public_asset("assets/frontend/js/owl.carousel.min.js") }}" type="text/javascript"></script>
        <script src='{{ public_asset("assets/frontend/js/bootstrap-datepicker.js") }}'></script>
        </script>

        <div id="cookieNotice" class="light display-right">
            <div id="closeIcon"></div>
            <div class="content-wrap msg-wrap">
                <h4 class="modal-title">PRIVACY AND COOKIES POLICY</h4>
                <p>
                    The authentic and official website for Royal Orchid Hotels is <a
                        href="https://www.royalorchidhotels.com/" target="_blank">www.royalorchidhotels.com.</a> We
                    do not have any connections with other websites that might have similar names. Any information or
                    content found on these sites might be misleading or incorrect. We do not vouch for or back any such
                    unauthorized websites, and we will not be liable for any damage or harm caused by accessing or using
                    these sites. We strongly recommend our users to only visit our official website for trustworthy and
                    accurate information. For more information, please visit our <a
                        href="https://www.royalorchidhotels.com/privacy-and-policy" target="_blank">Privacy &
                        Cookies Policy.</a> </p> <button type="button" class="btn-primary"
                    onclick="acceptCookieConsent();">Accept</button>
            </div>
        </div> <a class="mobile_booking_engine" href="javascript:void(0)">BOOK NOW</a>
        <div id="mobilebooking"></div>

        @include('layouts.footer')
        <div id="stop" class="scrollTop"> <span><a href=""><i class="fa fa-angle-up"></i></a></span>
        </div>

        <script src='{{ public_asset("assets/frontend/js/lightbox.min.js") }}'></script>
        <script src='{{ public_asset("assets/frontend/js/custom.js") }}'></script>
        <script src='{{ public_asset("assets/frontend/js/validations.js") }}'></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <script src='https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js' async></script>
    </form>
</body>

</html>
