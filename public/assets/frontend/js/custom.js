$("#txtsearchhotels").keypress(function (event) {
    if (event.keyCode == '13') {
        event.preventDefault();
    }
});
 // Create cookie
    function setCookie(cname, cvalue, exdays) {
        const d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        let expires = "expires="+ d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }
    // Delete cookie
    function deleteCookie(cname) {
        const d = new Date();
        d.setTime(d.getTime() + (24*60*60*1000));
        let expires = "expires="+ d.toUTCString();
        document.cookie = cname + "=;" + expires + ";path=/";
    }
    // Read cookie
    function getCookie(cname) {
        let name = cname + "=";
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');
        for(let i = 0; i <ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
        }
    if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
    }
    }
    return "";
    }
    // Set cookie consent
    function acceptCookieConsent(){
        deleteCookie('user_cookie_consent');
        setCookie('user_cookie_consent', 1, 30);
        document.getElementById("cookieNotice").style.display = "none";
    }
    let cookie_consent = getCookie("user_cookie_consent");
    if(cookie_consent != ""){
        document.getElementById("cookieNotice").style.display = "none";
    }else{
        //document.getElementById("cookieNotice").style.display = "block";
        document.getElementById("cookieNotice").style.visibility = "hidden";
    }
function showIt2() {
  document.getElementById("cookieNotice").style.visibility = "visible";
}
setTimeout("showIt2()", 7000);
//function myCarouselcs() {
//  document.getElementById("myCarousel").style.visibility = "visible";
//}
//setTimeout("myCarouselcs()", 3000);
//function belowSliderContentCs() {
//  document.getElementById("belowSliderContent").style.visibility = "visible";
//}
//setTimeout("belowSliderContentCs()", 4000);
$(document).ready(function () {
    var auto = $("#txtsearchhotels").autocomplete({
        source: function (request, response) {
            $.ajax({
                url: 'https://www.royalorchidhotels.com/RoyalOrchidService.asmx/GetHotelsTop',
                data: "{ 'prefix': '" + request.term + "',parentId:0}",
                dataType: "json",
                type: "POST",
                contentType: "application/json; charset=utf-8",
                async: true,
                success: function (data) {
                    $(".Hotelcitylist").text("");
                    if (!data.d.length) {
                        var result = [
                        {
                            label: 'We are not present there yet!',
                            value: response.term,
                            coltype: ''
                        }
                        ];
                        response(result);
                    }
                    else {
                        $(".Hotelcitylist").show();
                        response($.map(data.d, function (item) {
                            return {
                                label: item.split('!')[0],
                                val: item.split('!')[1],
                                coltype: item.split('!')[2],
                            }
                        }))
                    }
                },
                error: function (response) {
                    $(".Hotelcitylist").text("");
                    console.log(response.responseText);
                },
                failure: function (response) {
                    $(".Hotelcitylist").text("");
                    console.log(response.responseText);
                }
            });
        }
    });
    auto.data("ui-autocomplete")._renderItem = function (ul, item) {
        return $("<li>")
        .append('<a href=' + item.val + ' target="_blank"  class="row" >'
                        + '<div class="pullleft cl-8 ">'
                        + item.label + ' </div>'
                        + '<div class="pullright cl-4 text-right"><p>' + item.coltype + '</p></div></a>') //You can format the design in above code in whatever format you want.
            .appendTo($(".Hotelcitylist"));
    }
});
$(document).ready(function () {
    $("#BookingEngine_DdlCity").click(function () {
        $(".show-fields").show();
    });
    var scrollTop = $(".scrollTop");
    $(window).scroll(function () {
        var topPos = $(this).scrollTop();
        if (topPos > 100) {
            $(scrollTop).css("opacity", "1");
        } else {
            $(scrollTop).css("opacity", "0");
        }
    });
    $(scrollTop).click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    }); // click() scroll top EMD

    /*************************************
      LEFT MENU SMOOTH SCROLL ANIMATION
     *************************************/
    // declare variable
    var h1 = $("#h1").position();
    var h2 = $("#h2").position();
    var h3 = $("#h3").position();
    $('.link1').click(function () {
        $('html, body').animate({
            scrollTop: h1.top
        }, 500);
        return false;
    }); // left menu link2 click() scroll END
    $('.link2').click(function () {
        $('html, body').animate({
            scrollTop: h2.top
        }, 500);
        return false;
    }); // left menu link2 click() scroll END
    $('.link3').click(function () {
        $('html, body').animate({
            scrollTop: h3.top
        }, 500);
        return false;
    }); // left menu link3 click() scroll END
    $('.footer-brands').owlCarousel({
        loop: false,
        //margin:10,
        nav: false,
        responsive: {
            0: { items: 2 },
            800: { items: 2 },
            1000: { items: 2 },
            1366: { items: 3 }
        }
    });
    if ($(window).width() < 1024) {
        $('.footer-brands').owlCarousel({
            loop: false,
            margin: 10,
            autoplay: true,
            dots: false,
            nav: false,
            navText: ['<i class="fa fa-chevron-circle-left"></i>', '<i class="fa fa-chevron-circle-right"></i>'],
            responsive: {
                0: {items: 1},
                600: {items: 1},
                1000: {items: 1}
            }
        })
    };
    if (window.location.href.includes("royal-orchid-metropole-mysuru")) {
        $("#RoyalorchidMetropole").show();
    }
    else if (window.location.href.includes("hotel-royal-orchid-bangalore")) {
        $("#hotel_royal_orchid_bangalore").show();
    }
    else if (window.location.href.includes("royal-orchid-brindavan-garden-palace-spa-mysore")) {
        $("#Royalorchidbrindavan").show();
    }
    else if (window.location.href.includes("regenta-central-herald-mysore")) {
        $("#Regentacentralherald").show();
    }
    else if (window.location.href.includes("regenta-kabini-springs-resort")) {
        $("#Regentakabinisprings").show();
    }
    else if (window.location.href.includes("royal-orchid-central-shimoga")) {
        $("#RoyalorchidcentralShimoga").show();
    }
    $(".gallery_box label").click(function () {
        $(".gallery_box label").removeClass("gallery_tab_active");
        // instead of this do the below 
        $(this).addClass("gallery_tab_active");
    });
    $('.sidebar-menu').mouseenter(function () {
        $(this).children('.expand').addClass('turn');
    });
    $('.sidebar-menu').mouseleave(function () {
        if ($(this).hasClass('open')) {
        } else {
            $(this).children('.expand').removeClass('turn');
        }
    });
    $('.sidebar-menu').click(function (e) {
        if (e.target !== this)
            return;
        var $this = $(this);
        if ($this.hasClass('open')) {
            $('.sidebar-menu').removeClass('open');
            $('.sub-menu').stop(true).slideUp("fast");
            $('.expand').removeClass('turn');
            $this.removeClass('open');
            $this.children('.expand').removeClass('turn');
            $this.next().stop(true).slideUp("fast");
        }
        else {
            $('.sidebar-menu').removeClass('open');
            $('.sub-menu').stop(true).slideUp("fast");
            $('.expand').removeClass('turn');

            $this.addClass('open');
            $this.children('.expand').addClass('turn');
            $this.next().stop(true).slideDown("fast");
        }
    });
    $('#opmen').on('click', function () {
        $('#menn').slideToggle();
    });
    $('.find_close_btn').on('click', function () {
        $('#menn').slideToggle();
    });
    $('[data-toggle="tooltip"]').tooltip();
    $('.nav-pills li').click(function () {
        $(".nav-pills li").removeClass("active");
        $(".tab-pane").removeClass('active');
    });
    //if (window.location.href.includes("overview") || window.location.href.includes("stay") || window.location.href.includes("dine") || window.location.href.includes("wedding-and-events") || window.location.href.includes("things-to-do") || window.location.href.includes("gallery") ||window.location.href.includes("contact-us") ||window.location.href.includes("experience") || window.location.href == 'https://www.royalorchidhotels.com/') {
    $("#myModaldisclaimer").modal('show');
    //}
    if (window.location.href == 'https://www.royalorchidhotels.com/royal-orchid-central-grazia-navi-mumbai/overview') {
        $("#anniversarypop").modal('hide');
    }
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1;
    var yyyy = today.getFullYear();
    var tomorrow = new Date();
    tomorrow.setDate(tomorrow.getDate() + 1);
    var dd1 = tomorrow.getDate();
    var mm1 = tomorrow.getMonth() + 1; //January is 0!
    var yyyy1 = tomorrow.getFullYear();
    if (dd < 10) {
        dd = '0' + dd;
    }
    if (mm < 10) {
        mm = '0' + mm;
    }
    if (dd1 < 10) {
        dd1 = '0' + dd1;
    }
    if (mm1 < 10) {
        mm1 = '0' + mm1;
    }
    var checkin1 = dd + '/' + mm + '/' + yyyy;
    var checkout1 = dd1 + '/' + mm1 + '/' + yyyy1;
    $('#dp1').val(checkin1);
    $('#dp2').val(checkout1);
    var nowTemp = new Date();
    var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
    var checkin = $('#dp1').datepicker({
        beforeShowDay: function (date) {
            return date.valueOf() >= now.valueOf();
        },
        autoclose: true
    }).on('changeDate', function (ev) {
        var newDate = new Date(ev.date);
        newDate.setDate(newDate.getDate() + 1);
        checkout.datepicker("update", newDate);
        $('#dp2')[0].focus();
    });
    var checkout = $('#dp2').datepicker({
        beforeShowDay: function (date) {
            if (!checkin.datepicker("getDate").valueOf()) {
                return date.valueOf() >= new Date().valueOf();
            } else {
                return date.valueOf() > checkin.datepicker("getDate").valueOf();
            }
        },
        autoclose: true
    }).on('changeDate', function (ev) { });
}); // ready() END
$(document).mouseup(function (e) {
    var container = $(".Hotelcitylist"); // YOUR CONTAINER SELECTOR
    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        $("#txtsearchhotels").val('');
        $(".Hotelcitylist").text("");
        container.hide();
    }
});
$(".mobile_booking_engine").click(function () {
    $(".show-fields").show();
    $('.has-feedback').appendTo("#mobilebooking");
    $(".has-feedback").slideToggle();
});
$(".mobile_booking_engine").click(function () {
    $(".mobile_booking_engine").hide();
});
$(".booking_close_btn").click(function () {
    $(".has-feedback").slideToggle();
});
$(".booking_close_btn").click(function () {
    $(".mobile_booking_engine").show();
});
if ($(window).width() < 767) {
    //$(".nav-inner").appendTo("#append_menu");
    $(".col-sm-12.banner-heading").addClass("banner-heading-new");
} else { };
if ($(window).width() <= 1024) {
    $(".nav-inner").appendTo("#append_menu");
    $(".property_menu_btn").click(function () { $(".nav-inner").slideToggle(); });
};
if ($(window).width() < 1024) {
    $(".findhotel_link").click(function () {
        $(".sidebar-1").slideToggle();
    });
    $(".findhotel_Intlink").click(function () {
        $(".sidebar-2").slideToggle();
    });
};
if ($(window).width() < 1024) {
    $(".mobile_about").click(function () {
        $(".dropdown_hover_box").slideToggle();
    });
};
$(".property_menu_bar").click(function () {
    $(".menu").addClass("side_menu");
});
$(".close_btn").click(function () {
    $(".menu").removeClass("side_menu");
});
function GotoSubscription() {
    var email = $("[id$=_exampleInputEmail]").val();
    var unsub = 0;
    $.ajax({
        type: "POST",
        url: 'https://www.royalorchidhotels.com/RoyalOrchidService.asmx/Subscription',
        data: "{'email':'" + $("[id$=_exampleInputEmail]").val() + "','unsub':" + unsub + "}",
        contentType: "application/json; charset=utf-8",
        async: false,
        success: function (result) {
            $("[id$=_exampleInputEmail]").val("");
            $("#corrcetemai").text("Thank you for subscribing.");
            $("#corrcetemai").css("color", "#fb6969");
        },
        Error: function (result) {
            alert(result.d);
        }
    });
}
function topbook(propertyid) {
    var location = "https://bookings.royalorchidhotels.com/?chainId=5731&propertyId=" + propertyid + "&triggerSearch=true";
    window.open(location);
}
function ValidateBookingHotel() {
    if (document.getElementById("InnerBookingEngine_DdlHotel").value == "0") {
        alert("Please Select Hotel.");
        document.getElementById("InnerBookingEngine_DdlHotel").focus();
        return false;
    }
    else if ($("#dp1").val() == "") {
        alert("Please Select check-in date.");
        $("#dp1").focus();
        return false;
    }
    else if ($("#dp2").val() == "") {
        alert("Please Select check-out date.");
        $("#dp2").focus();
        return false;
    }
    else if ($("#adut").val() == "0") {
        alert("Please Select adults.");
        $("#adut").focus();
        return false;
    }
    else {
        var dt1 = $("#dp1").val();
        var adut = $("#adut").val();
        var room = $("#rooms").val();
        var child = $("#child").val();
        if (adut == "Adults") {
            adut = 1;
        }
        else {
            adut = adut;
        }
        var dt2 = $("#dp2").val()
        var arr = dt1.split("/");
        var checkin = arr[2] + '-' + arr[1] + '-' + arr[0];
        var arr1 = dt2.split("/");
        var checkout = arr1[2] + '-' + arr1[1] + '-' + arr1[0];
        var checkin1 = new Date(arr[1] + '/' + arr[0] + '/' + arr[2]);
        var checkin11 = arr[1] + '/' + arr[0] + '/' + arr[2];
        var checkout1 = new Date(arr1[1] + '-' + arr1[0] + '-' + arr1[2]);
        var checkout11 = arr1[1] + '-' + arr1[0] + '-' + arr1[2];
        var d1 = new Date();
        var d2 = new Date(checkin1);
        var timeDiff = d2.getTime() - d1.getTime();
        var DaysDiff = timeDiff / (1000 * 3600 * 24);
        var PromoCode = $("#PromoCode").val();
        var sla
        if (DaysDiff <= 3) {
            sla = 'B3';
        }
        else if (DaysDiff > 3 && DaysDiff <= 7) {
            sla = 'B7';
        }
        else if (DaysDiff > 7 && DaysDiff <= 15) {
            sla = 'B15';
        }
        else if (DaysDiff > 15) {
            sla = 'B25';
        }
        var location = "https://bookings.royalorchidhotels.com/?chainId=5731&propertyId=" + document.getElementById("InnerBookingEngine_DdlHotel").value + "&rooms=" + room + "&adults=" + adut + "&checkIn=" + checkin + "&children=" + child + "&checkOut=" + checkout + "&promocode=" + PromoCode + "&triggerSearch=true&rlsa=" + sla;
        window.open(location);
        aftersuccesSbooking(sla, checkin11, checkout11);
    }
}
$('#myCarousel').carousel({
    interval: 20000,
    pause: false
});
$(document).ready(function () {
    var showChar = 325;
    var ellipsestext = "...";
    var moretext = "<p style='font-size:14px;text-transform:capitalize;border-bottom:1px solid #943c90;display:inline;font-weight:100;color: #943c90;'>Read More</p>";
    var lesstext = "<p style='font-size:14px;text-transform:capitalize;border-bottom:1px solid #943c90;display:inline;font-weight:100;color: #943c90;'>Read Less</p>"; 
    $('.more1').each(function () {
        var content = $(this).html();

        if (content.length > showChar) {

            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
            var html = c + '<span class="moreelipses">' + ellipsestext + '</span><span class="morecontent"><span id="moore">' + h + '</span><a href="" class="morelink">' + moretext + '</a></span>';
            /* var html = c +'<span class="morecontent right"><span>'+ h +'</span><a href="" class="morelink right"  >' + moretext + '</a></span>';*/

            $(this).html(html);
        }

    }); 
    $(".morelink").click(function () {
        if ($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
    $('#tab_content .nav li .expand').on('click', function () {
        if ($(this).parent().hasClass('active')) {
            $(this).parent().removeClass('active');
            $('#cityCollapse').addClass('hide');
        }
        else {
            $('#tab_content .nav li').removeClass('active');
            $(this).parent().addClass('active');
            $('#cityCollapse').removeClass('hide');
        }
    });
    $('.grid108').on('click', function () {
        var dataid = $(this).data('id');
        $("#" + dataid).click();
    });
    $('.grid85').on('click', function () {
        var dataid = $(this).data('id');
        $.ajax({
            type: "POST",
            url: 'https://www.royalorchidhotels.com/RoyalOrchidService.asmx/GetHotel2019',
            contentType: "application/json; charset=utf-8",
            data: "{CityID:" + dataid + "}",
            cache: false,
            asyn: false,
            success: function (result) {
                $("#cityCollapse").show();
                $("#cityCollapse").html(result.d);
            }
        });
    });
    $('.grid86').on('click', function () {
        var dataid = $(this).data('id');
        $.ajax({
            type: "POST",
            url: 'https://www.royalorchidhotels.com/RoyalOrchidService.asmx/GetHotelBespoke2019',
            contentType: "application/json; charset=utf-8",
            data: "{CityID:" + dataid + "}",
            cache: false,
            asyn: false,
            success: function (result) {
                $("#cityCollapse").html(result.d);
            }
        });
    });
    $('#myTabs a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
        $('#cityCollapse').addClass('hide');

    });
    //bind scroll here
    $(window).bind("scroll", function () {
        if ($(window).width() > 767) {
            if ($(window).scrollTop() > 450) {
                $(".booking-engine").addClass("fixed_booking");
            } else if ($(window).scrollTop() > -450) {
                $(".booking-engine").removeClass("fixed_booking");
            }
        }
    });
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll >= 200) {
            $("header").addClass("header_fixed");
        } else {
            $("header").removeClass("header_fixed");
        }
    });
});
$('.sign-btn').on('click', function () {
    var target = $(this).attr('data-target');
    var submitBtn_id = $(this).data('submitbtn');
    $('.sign-btn').removeClass('active');
    $(this).addClass('active');
    $('.sign-form').hide();
    $(target).fadeIn();
    $("#signModal .modal-footer .btn").hide();
    console.log(submitBtn_id);
    $(submitBtn_id).show();
});
if (window.location.href.lastIndexOf('/regenta-place-cunningham-bangalore/') > -1) {
    $(".circle-top").css("background", "url('https://www.royalorchidhotels.com/images/CunBang.png')");
    $(".circle-5").css("background", "url('https://www.royalorchidhotels.com/images/CunBang.png')");
    $(".circle-banq").css("background", "url('https://www.royalorchidhotels.com/images/CunBang.png')");
    $(".dots-1").addClass("Cuncircle");
    $(".dots-3").addClass("Cuncircle");
    $(".dots-banq").addClass("Cuncircle");
    $(".dots-fac").addClass("Cuncircle");
}
$(document).ready(function () {
    $("option").each(function () {
        $(this).text($(this).text().charAt(0).toUpperCase() + $(this).text().slice(1));
    });
    $('.room_newslider').owlCarousel({
        items: 3,
        dots: false,
        nav: false,
        loop: true,
        responsive: {
            0: { items: 1, nav: false },
            600: { items: 1, nav: false },
            1000: { items: 3, nav: true, loop: false }
        }
    });
});
$(".menutab2").click(function () {
    $(".upcoming_hotels").show();
    $("#city .nav").hide();
});
$(".menutab1").click(function () {
    $(".upcoming_hotels").hide();
    $("#city .nav").show();
});
$(document).on("click", ".gridguest", function () {
    var usertype = $(this).data('title');
    $(".newsign_form #hidusertype").val(usertype);
});
$(".login_btn").click(function () {
    $("#signin_form").show();
    $("#signup_form").hide();
    $("#forgot_form").hide();
    //$("#errmess").hide();
    clearsignup();
    $("#sign_heading").text('Sign In');
});
$(".register_btn").click(function () {
    $("#signin_form").hide();
    $("#signup_form").show();
    $("#forgot_form").hide();
    clearsignup();
    $("#sign_heading").text('Register');
});
$("#loginemailforgot").click(function () {
    $("#divemailforgot").show();
    $("#divmobileforgot").hide();
    $("#forgototpdivemail").show();
    $("#divemailforgototp").hide();
    $("#sign_heading").text('Forgot Password');
});
$("#forgotPassword").click(function () {
    $("#signin_form").hide();
    $("#signup_form").hide();
    $("#forgot_form").show();
    clearsignup();
    $("#sign_heading").text('Forgot Password');
});
$("#backemailforgototpsend").click(function () {
    $("#forgototpdivemail").show();
    $("#divemailforgototp").hide();
    $("#sign_heading").text('Forgot Password');
});
$("#loginmobileforgot").click(function () {
    $("#divmobileforgot").show();
    $("#divemailforgot").hide();
    $("#forgototpdivmobile").show();
    $("#divmobileforgototp").hide();
    $("#sign_heading").text('Forgot Password');
});
$("#backemobileforgototpsend").click(function () {
    $("#forgototpdivmobile").show();
    $("#divmobileforgototp").hide();
    $("#sign_heading").text('Forgot Password');
});
$("#verify_email").click(function () {
    $("#varify_by_mail_or_mobile").show();
});
$("#varify_forget_otp").click(function () {
    $("#varify_by_mail_or_mobile").hide();
    $("#verify_div").show();
});
$("#signModal_new").on('hide.bs.modal', function () {
    $("#signup_form").hide();
    $("#signin_form").hide();
    $("#forgot_form").hide();
    $("#varify_by_mail_or_mobile").hide();
    clearsignup();
    $("#verify_div").hide();
});
function clearsignup() {
    $("#txtSignupFName").val('');
    $("#txtSignupLName").val('');
    $("#txtSignupEmail").val('');
    $("#txtSignupPassword").val('');
    $("#txtSignupCity").val('');
    $("#txtSignupPhone").val('');
    $("#divotp").hide();
    $("#txtotp").val('');
    $("#txtSignInEmail").val('');
    $("#txtSignInPassword").val('');
    $("#txtforgotEmail").val('');
    $("#txtSignInEmailforgototp").val('');
    $("#txtSignInEmailforgotpassword").val('');
}
function sethotel() {
    var url = window.location.href;
    var cityid = $("#BookingEngine_DdlCity").val();
    DeleteAllValues108();
    $("#BookingEngine_DdlHotel").append($("<option></option>").val("0").html("Select Hotel"));
    if (url.includes("summer-package")) {
        $.ajax({
            type: "POST",
            url: 'https://www.royalorchidhotels.com/RoyalOrchidService.asmx/LoadSetHotelSummerPackage',
            data: "{'CityID':'" + cityid + "'}",
            dataType: "json",
            cache: false,
            processData: false,
            contentType: false,
            async: true,
            headers: {
                "cache-control": "no-cache"
            },
            contentType: "application/json", success: function (res) {
                $.each(res.d, function (data, value) {
                    $("#BookingEngine_DdlHotel").append($("<option></option>").val(value.BookingURL).html(value.SJ_Name1));
                })
            }
        });
    }
    else {
        $.ajax({
            type: "POST",
            url: 'https://www.royalorchidhotels.com/RoyalOrchidService.asmx/LoadSetHotel',
            data: "{'CityID':'" + cityid + "'}",
            dataType: "json",
            cache: false,
            processData: false,
            contentType: false,
            async: true,
            headers: {
                "cache-control": "no-cache"
            },
            contentType: "application/json", success: function (res) {
                $.each(res.d, function (data, value) {
                    $("#BookingEngine_DdlHotel").append($("<option></option>").val(value.BookingURL).html(value.SJ_Name));
                })
            }
        });
    }
}
function DeleteAllValues108() {
    var listBox = document.getElementById("BookingEngine_DdlHotel");
    listBox.options.length = 0;
    return false;
}
function aftersuccesSbooking() {
    $.ajax({
        type: "POST",
        contentType: "application/json; charset=utf-8",
        url: 'https://www.royalorchidhotels.com/RoyalOrchidService.asmx/BookingSaveForm',
        data: "{'CityName':'" + $("[id$=_DdlCity] option:selected").text() + "','HotelName':'" + $("[id$=_DdlHotel] option:selected").text() + "','CheckInDate':'" + $("#dp1").val() + "','CheckOutDate':'" + $("#dp2").val() + "','NoOfAdults':'" + $("#adut").val() + "','PromoCode':'" + $('#PromoCode').val() + "'}",
        cache: false,
        async: false,
        success: function (result) {
            if (result.d == "Success") {
                $("#txtname").val("");
                $("#txtemail").val("");
                $("#arrivaldate").val("");
                $("#txtphone").val("");
                $("#drdguest").find('option:first').attr('selected', 'selected');
                //$("#DdlEquiryCountry").find('option:first').attr('selected', 'selected');
                $("#ddlhotel").find('option:first').attr('selected', 'selected');
            }
        },
        Error: function (result) {
            alert(result.d);
        }
    });
}
if (window.location.href.indexOf("https://www.royalorchidhotels.com/") != -1) {
    $("#mysore_modal").modal('show');
}
function CallChangeCity(City) {
    if (City != 'Book Now') {
        var url = 'https://www.royalorchidhotels.com/' + City + '-hotels';
        window.location.href = url;
    }
}
function ValidateBookingHotelCorparate() {
    if (document.getElementById("BookingEngine_DdlCity").value == "0") {
        alert("Please Select City.");
        document.getElementById("BookingEngine_DdlCity").focus();
        return false;
    }
    else if (document.getElementById("BookingEngine_DdlHotel").value == "0") {
        alert("Please Select Hotel.");
        document.getElementById("BookingEngine_DdlHotel").focus();
        return false;
    }
    else if ($("#dp1").val() == "") {
        alert("Please Select check-in date.");
        $("#dp1").focus();
        return false;
    }
    else if ($("#dp2").val() == "") {
        alert("Please Select check-out date.");
        $("#dp2").focus();
        return false;
    }
    else if ($("#room").val() == "0") {
        alert("Please Select no of rooms");
        $("#room").focus();
        return false;
    }
    else if ($("#adut").val() == "0") {
        alert("Please Select adults.");
        $("#adut").focus();
        return false;
    }
    else {
        var PromoCode = $("#PromoCode").val();
        var room = $("#room").val();
        var dt1 = $("#dp1").val();
        var adut = $("#adut").val();
        if (adut == "Adult") {
            adut = 1;
        }
        else {
            adut = adut;
        }
        var child = $("#child").val();
        var dt2 = $("#dp2").val()
        var arr = dt1.split("/");
        var checkin = arr[2] + '-' + arr[1] + '-' + arr[0];
        //yyyy/mm/dd
        var arr1 = dt2.split("/");
        var checkout = arr1[2] + '-' + arr1[1] + '-' + arr1[0];
        var checkin1 = new Date(arr[1] + '/' + arr[0] + '/' + arr[2]);
        var checkin11 = arr[1] + '/' + arr[0] + '/' + arr[2];
        var checkout1 = new Date(arr1[1] + '-' + arr1[0] + '-' + arr1[2]);
        var checkout11 = arr1[1] + '-' + arr1[0] + '-' + arr1[2];
        var d1 = new Date();
        var d2 = new Date(checkin1);
        var timeDiff = d2.getTime() - d1.getTime();
        var DaysDiff = timeDiff / (1000 * 3600 * 24);
        var sla
        if (DaysDiff <= 3) {
            sla = 'B3';
        }
        else if (DaysDiff > 3 && DaysDiff <= 7) {
            sla = 'B7';
        }
        else if (DaysDiff > 7 && DaysDiff <= 15) {
            sla = 'B15';
        }
        else if (DaysDiff > 15) {
            sla = 'B25';
        }
        var location = "";
        var city = $("#BookingEngine_DdlCity option:selected").text().toLowerCase();
        location = "https://bookings.royalorchidhotels.com/?propertyId=" + document.getElementById("BookingEngine_DdlHotel").value + "&rooms=" + room + "&adults=" + adut + "&checkIn=" + checkin + "&children=" + child + "&checkOut=" + checkout + "&promocode=" + PromoCode + "&rlsa=" + sla;
        window.open(location);
        aftersuccesSbooking(sla, checkin11, checkout11);
    }
}
$(document).ready(function () {
    $('.why-b1').owlCarousel({
        loop: true,
        autoplayHoverPause: true,
        margin: 10,
        autoplay: true,
        nav: true,
        dots: false,
        items: 2,
        navText: ['<', '>'],
        responsive: {
            0: { items: 1 },
            600: { items: 1 },
            667: { items: 2 },
            768: { items: 2 },
            900: { items: 2 },
            1000: { items: 3 }
        }
    });
});
function ShowHomeInclusion(SJHO_ID) {
    $.ajax({
        type: "POST",
        url: 'https://www.royalorchidhotels.com/RoyalOrchidService.asmx/Getoverviewmodaldatahomecommon',
        contentType: "application/json; charset=utf-8",
        data: "{SJHO_ID:" + SJHO_ID + "}",
        cache: false,
        asyn: false,
        success: function (result) {
            $("#myModal303 .modal-content").html(result.d);
            $("#myModal303").modal('show');
        }
    });
} 










