function CheckNumberKey(n) {
    var t = n.which ? n.which : event.keyCode;
    if (t > 31 && (t < 48 || t > 57)) return !1
}
function validatesubscription() {
    var n = $("[id$=_exampleInputEmail]").val();
    if (n == "" || n == "Email") return alert("Please Enter Email Id !"), $("[id$=_exampleInputEmail]").focus(), !1;
    if (/[0-9a-zA-Z' ']{0,}/.test(n))
        if (/^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/.test(n)) GotoSubscription();
        else return alert("Please enter a valid Email Id !"), $("[id$=_exampleInputEmail]").focus(), !1;
    else return alert("Please enter a valid Email Id !"), $("[id$=_exampleInputEmail]").focus(), !1
}
function Enquirygolf() {
    var t = $.trim($("#txtname").val()),
        u = $("#RdProfessional").val(),
        i = $("#txtprefereddate").val(),
        r = $("#txttime").val(),
        f = $("#RadioButtonList1").val(),
        n = $("#txtemail").val();
    if (t == "" || t == "Name") return alert("Please enter your full name !"), $("#txtname").focus(), !1;
    if (n == "" || n == "Email") return alert("Please enter email id !"), $("#txtemail").focus(), !1;
    if (/[0-9a-zA-Z' ']{0,}/.test(n)) {
        if (r == "") return alert("Please enter time !"), $("#txttime").focus(), !1;
        if (i == "" || i == "Date") return alert("Please select date !"), $("#arrivaldate").focus(), !1
    } else return alert("Please enter a valid Email Id ! "), $("#txtemail").focus(), !1
}
function EnquiryFormDining() {
    var i = $.trim($("#txtname").val()),
        n = $("#txtemail").val(),
        u = $("#drdguest").val(),
        f = $("#ddhotel").val(),
        r = $("#arrivaldate").val(),
        t = $("#txtphone").val();
    if (i == "" || i == "Name") return alert("Please enter your name !"), $("#txtname").focus(), !1;
    if (n == "" || n == "Email") return alert("Please enter email id !"), $("#txtemail").focus(), !1;
    if (/[0-9a-zA-Z' ']{0,}/.test(n))
        if (/^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/.test(n)) {
            if (u == "0" || n == "Guest") return alert("Please enter no. of guest !"), $("#drdguest").focus(), !1;
            if (r == "" || r == "Date") return alert("Please select date !"), $("#arrivaldate").focus(), !1;
            if (t == "" || t == "Phone") return alert("Please enter your phone no.!"), $("#txtphone").focus(), !1;
            if (t.length < 10) return alert("Please enter your valid contact number"), $("#txtphone").focus(), !1;
            if (f == "0" || n == "Select Hotel") return alert("Please select hotel !"), $("#ddhotel").focus(), !1;
            aftersuccesSdining()
        } else return alert("Please enter a valid Email Id !"), $("#txtemail").focus(), !1;
    else return alert("Please enter a valid Email Id ! "), $("#txtemail").focus(), !1
}
function WeddingForm() {
    var i = $("#txtname1").val(),
        n = $("#txtemail1").val(),
        t = $("#txtphone1").val(),
        r = $("#arrivaldate1").val(),
        u = $("#txtmessage1").val();
    if (i == "" || i == "Name") return alert("Please enter your name !"), $("#txtname1").focus(), !1;
    if (n == "" || n == "Email") return alert("Please enter email id !"), $("#txtemail1").focus(), !1;
    if (/[0-9a-zA-Z' ']{0,}/.test(n))
        if (/^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/.test(n)) {
            if (t == "" || t == "Phone") return alert("Please enter your phone no.!"), $("#txtphone1").focus(), !1;
            if (/^\d{10}$/.test(t)) {
                if (t.length < 10) return alert("Please enter your valid contact number"), $("#txtphone1").focus(), !1;
                if (r == "" || r == "Date") return alert("Please select date.!"), $("#arrivaldate1").focus(), !1;
                if (u == "" || u == "Message") return alert("Please enter message.!"), $("#txtmessage1").focus(), !1;
                aftersuccesSweding()
            } else return alert("Please enter your valid contact number"), $("#txtphone1").focus(), !1
        } else return alert("Please enter a valid Email Id !"), $("#txtemail1").focus(), !1;
    else return alert("Please enter a valid Email Id ! "), $("#txtemail1").focus(), !1
}
function WeddingForm108() {
    var i = $("#txtname108").val(),
        n = $("#txtemail108").val(),
        r = $("#txtOccasion").val(),
        t = $("#txtphone108").val(),
        u = $("#arrivaldate108").val(),
        f = $("#txtCity").val(),
        e = $("#txtmessage108").val();
    if (i == "" || i == "Name") return alert("Please enter your name !"), $("#txtname108").focus(), !1;
    if (n == "" || n == "Email") return alert("Please enter email id !"), $("#txtemail108").focus(), !1;
    if (/[0-9a-zA-Z' ']{0,}/.test(n))
        if (/^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/.test(n)) {
            if (r == "" || r == "Occasion") return alert("Please enter Occasion !"), $("#txtOccasion").focus(), !1;
            if (t == "" || t == "Phone") return alert("Please enter your phone no.!"), $("#txtphone108").focus(), !1;
            if (/^\d{10}$/.test(t)) {
                if (t.length < 10) return alert("Please enter your valid contact number"), $("#txtphone108").focus(), !1;
                if (u == "" || u == "Date") return alert("Please select date.!"), $("#arrivaldate108").focus(), !1;
                if (f == "" || f == "City") return alert("Please enter city !"), $("#txtCity").focus(), !1;
                if (e == "" || e == "Message") return alert("Please enter message.!"), $("#txtmessage108").focus(), !1;
                aftersuccesSweding108()
            } else return alert("Please enter your valid contact number"), $("#txtphone108").focus(), !1
        } else return alert("Please enter a valid Email Id !"), $("#txtemail108").focus(), !1;
    else return alert("Please enter a valid Email Id ! "), $("#txtemail108").focus(), !1
}
function PartnerForm108() {
    var i = $("#txtname108").val(),
        n = $("#txtemail108").val(),
        t = $("#txtphone108").val(),
        r = $("#txtmessage108").val();
    if (i == "" || i == "Name") return alert("Please enter your name !"), $("#txtname108").focus(), !1;
    if (t == "" || t == "Phone") return alert("Please enter your phone no.!"), $("#txtphone108").focus(), !1;
    if (/^\d{10}$/.test(t)) {
        if (t.length < 10) return alert("Please enter your valid contact number"), $("#txtphone108").focus(), !1;
        if (n == "" || n == "Email") return alert("Please enter email id !"), $("#txtemail108").focus(), !1;
        if (/[0-9a-zA-Z' ']{0,}/.test(n))
            if (/^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/.test(n)) {
                if (r == "" || r == "Message") return alert("Please enter message.!"), $("#txtmessage108").focus(), !1;
                aftersuccesspartner108()
            } else return alert("Please enter a valid Email Id !"), $("#txtemail108").focus(), !1;
        else return alert("Please enter a valid Email Id ! "), $("#txtemail108").focus(), !1
    } else return alert("Please enter your valid contact number"), $("#txtphone108").focus(), !1
}
function WeddingFormMeeting() {
    var i = $("#DdCategory").val(),
        r = $("#txtname1").val(),
        n = $("#txtemail1").val(),
        u = $("#drdguest1").val(),
        t = $("#txtphone1").val(),
        f = $("#arrivaldate1").val(),
        e = $("#txtmessage1").val,
        p = $('#Label1').val,
        q = $('#Label2').val;
    ff = $('#ebcaptchainput').val;
    if (i == "0" || i == "Select Category") return alert("Please select category !"), $("#DdCategory").focus(), !1;
    if (r == "" || r == "Name") return alert("Please enter your name !"), $("#txtname1").focus(), !1;
    if (n == "" || n == "Email") return alert("Please enter email id !"), $("#txtemail1").focus(), !1;
    if (/[0-9a-zA-Z' ']{0,}/.test(n))
        if (/^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/.test(n)) {
            if (u == "" || u == "0" || n == "No. of Guests") return alert("Please enter no. of guest !"), $("#drdguest1").focus(), !1;
            if (t == "" || t == "Phone") return alert("Please enter your phone no.!"), $("#txtphone1").focus(), !1;
            if (/^\d{10}$/.test(t)) {
                if (t.length < 10) return alert("Please enter your valid contact number"), $("#txtphone1").focus(), !1;
                if (f == "" || f == "Date") return alert("Please select date.!"), $("#arrivaldate1").focus(), !1;
                if (e == "" || e == "Message") return alert("Please enter message.!"), $("#txtmessage1").focus(), !1;
                //if (ff == "" || ff!=p+q) return alert("Please enter valid captcha.!"), $("#ebcaptchainput").focus(), !1;
                aftersuccesSwedingmeeting()
            } else return alert("Please enter your valid contact number ! "), $("#txtphone1").focus(), !1
        } else return alert("Please enter a valid Email Id !"), $("#txtemail1").focus(), !1;
    else return alert("Please enter a valid Email Id ! "), $("#txtemail1").focus(), !1
}
function ValidateReservationEnquiry() {
    var RegEmail = /^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/;
    var RegPhNo = /^\d{10}$/;
    var AlphaNumeric = /[0-9a-zA-Z' ']{0,}/;
    var bookername = $.trim($("#txtReservationName").val());
    var email = $("#txtReservationEmail").val();
    var phone = $("#txtReservationMobile").val();
    var companyName = $.trim($("#ReservationCompanyName").val());
    var enquiryDetails = $.trim($("#ReservationEnquiryDetails").val());
    if (bookername == "") {
        alert("please enter name");
        $("#txtReservationName").focus();
        return false;
    }
    else if (email == "" || email == "Email") {
        alert("Please enter email id !");
        $("#txtReservationEmail").focus();
        return false;
    }
    else if (!AlphaNumeric.test(email)) {
        alert("Please enter a valid Email Id ! ");
        $("#txtReservationEmail").focus();
        return false;
    }
    else if (!RegEmail.test(email)) {
        alert("Please enter a valid Email Id !");
        $("#txtReservationEmail").focus();
        return false;
    }
    else if (phone == "" || phone == "Phone") {
        alert("Please enter your phone no.!");
        $("#txtReservationMobile").focus();
        return false;
    }
    else if (companyName == "") {
        alert("please enter Company Name");
        $("#ReservationCompanyName").focus();
        return false;
    }
    else if (enquiryDetails == "") {
        alert("please enter in Enquiry Details");
        $("#ReservationEnquiryDetails").focus();
        return false;
    }
    else {
        ValidateReservationEnquiryChild();
        return true;
    }
}
function ValidateReservationEnquiryChild() {
    var bookername = $.trim($("#txtReservationName").val());
    var email = $("#txtReservationEmail").val();
    var phone = $("#txtReservationMobile").val();
    var companyName = $.trim($("#ReservationCompanyName").val());
    var enquiryDetails = $.trim($("#ReservationEnquiryDetails").val());
    $.ajax({
        type: "POST",
        url: "/RoyalOrchidService.asmx/ReservationEnquiry",
        data: "{'ReservationName':'" + bookername + "','ReservationEmail':'" + email + "','ReservationMobile':'" + phone + "','ReservationCompanyName':'" + companyName + "','ReservationEnquiryDetails':'" + enquiryDetails + "'}",
        contentType: "application/json; charset=utf-8",
        async: true,
        success: function (result) {
            window.location.href = "https://www.royalorchidhotels.com/Thankyou.aspx";
        },
        Error: function (result) {
            alert(result.d);
        }
    });
}
function BespokeForm() {
    var i = $("#txtnameBe").val(),
        n = $("#txtemailBe").val(),
        r = $("#drdguestBe").val(),
        t = $("#txtphoneBe").val();
    if (i == "" || i == "Name") return alert("Please enter your name !"), !1;
    if (n == "" || n == "Email") return alert("Please enter email id !"), !1;
    if (/[0-9a-zA-Z' ']{0,}/.test(n))
        if (/^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/.test(n)) {
            if (r == "" || n == "No. of Guests") return alert("Please enter no. of guest !"), !1;
            if (t == "" || t == "Phone") return alert("Please enter your phone no.!"), !1;
            if (t.length < 10) return alert("Please enter your valid contact number"), !1;
            aftersuccessBespoke()
        } else return alert("Please enter a valid Email Id !"), !1;
    else return alert("Please enter a valid Email Id ! "), !1
}
function ExperienceForm() {
    var i = $("#txtname").val(),
        r = $("#txtsubject").val(),
        n = $("#txtemail").val(),
        t = $("#txtphone").val();
    if (i == "" || i == "Name") return alert("Please enter your name !"), !1;
    if (r == "" || r == "Name") return alert("Please enter your subject !"), !1;
    if (n == "" || n == "Email") return alert("Please enter email id !"), !1;
    if (/[0-9a-zA-Z' ']{0,}/.test(n))
        if (/^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/.test(n)) {
            if (t == "" || t == "Phone") return alert("Please enter your phone no.!"), !1;
            if (t.length < 10) return alert("Please enter your valid contact number"), !1;
            aftersuccesSexperience()
        } else return alert("Please enter a valid Email Id !"), !1;
    else return alert("Please enter a valid Email Id ! "), !1
}
function ContactForm() {
    var i = $("#txtname").val(),
        r = $("#txtsubject").val(),
        t = $("#txtphone").val(),
        n = $("#txtemail").val();
    if (i == "" || i == "Name") return alert("Please enter your name !"), !1;
    if (r == "" || r == "Name") return alert("Please enter your subject !"), !1;
    if (t == "" || t == "Phone") return alert("Please enter your phone no.!"), !1;
    if (t.length < 10) return alert("Please enter your valid contact number"), !1;
    if (n == "" || n == "Email") return alert("Please enter email id !"), !1;
    if (/[0-9a-zA-Z' ']{0,}/.test(n))
        if (/^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/.test(n)) aftersuccesSContact();
        else return alert("Please enter a valid Email Id !"), !1;
    else return alert("Please enter a valid Email Id ! "), !1
}
function Planevents() {
    var i = $("#txtname").val(),
        n = $("#txtemail").val(),
        r = $("#drdguest").val(),
        u = $("#arrival-date").val(),
        t = $("#txtphone").val();
    if (i == "" || i == "Name") return alert("Please enter your name !"), !1;
    if (n == "" || n == "Email") return alert("Please enter email id !"), !1;
    if (/[0-9a-zA-Z' ']{0,}/.test(n))
        if (/^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/.test(n)) {
            if (r == "0" || r == "No. of Guests") return alert("Please enter no. of guest !"), !1;
            if (t == "" || t == "Phone") return alert("Please enter your phone no.!"), !1;
            if (t.length < 10) return alert("Please enter your valid contact number"), !1;
            aftersuccesSPlan()
        } else return alert("Please enter a valid Email Id !"), !1;
    else return alert("Please enter a valid Email Id ! "), !1
}
function planevent1() {
    var i = $("#txtname1").val(),
        n = $("#txtemail1").val(),
        r = $("#drdguest1").val(),
        t = $("#txtphone1").val(),
        u = $("#drdhotel").val();
    if (i == "" || i == "Name") return alert("Please enter your name !"), !1;
    if (n == "" || n == "Email") return alert("Please enter email id !"), !1;
    if (/[0-9a-zA-Z' ']{0,}/.test(n))
        if (/^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/.test(n)) {
            if (r == "" || r == "No. of Guests") return alert("Please enter no. of guest !"), !1;
            if (t == "" || t == "Phone") return alert("Please enter your phone no.!"), !1;
            if (t.length < 10) return alert("Please enter your valid contact number"), !1;
            if (u == "" || u == "0") return alert("Please choose hotel.!"), !1;
            aftersuccesSweddingevents()
        } else return alert("Please enter a valid Email Id !"), !1;
    else return alert("Please enter a valid Email Id ! "), !1
}
function ValidateOfferSearch() {
    var n = $("#DdlCity").val(),
        t = $("#DdlHotel").val();
    return n == "" || n == "0" ? (alert("Please select city !"), $("#DdlCity").focus(), !1) : t == "" || t == "0" ? (alert("Please select hotel !"), $("#DdlHotel").focus(), !1) : !0
}
function validatecareer() {
    var i = $.trim($("#txtname").val()),
        t = $("#txtphone").val(),
        n = $("#txtemail").val(),
        r = $("#txtappliedfor").val(),
        f = $("#careerresume").val(),
        o = f.split(".").pop(),
        u = $("#careerresume").val(),
        e = u.substring(u.lastIndexOf(".") + 1).toLowerCase();
    if (i == "" || i == "Name") return alert("Please enter your Name !"), !1;
    if (n == "" || n == "Email") return alert("Please enter Email Id !"), !1;
    if (/[0-9a-zA-Z' ']{0,}/.test(n))
        if (/^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/.test(n)) {
            if (t == "" || t == "Phone") return alert("Please enter your Phone no.!"), !1;
            if (t.length < 10) return alert("Please enter your valid Contact number"), !1;
            if (r == "" || r == "Applied for") return alert("Please enter your job!"), !1;
            if ($("#careerresume").get(0).files.length === 0) return alert("Attachment Required"), $("#careerresume").focus(), !1;
            if (["pdf", "doc", "docx"].indexOf(e) <= -1) return alert("Please Upload only pdf,doc extension flle"), !1
        } else return alert("Please enter a valid Email Id !"), !1;
    else return alert("Please enter a valid Email Id ! "), !1
}
function validatewedding() {
    var t = /^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/,
        i = /[0-9a-zA-Z' ']{0,}/,
        u = $("#txtevents ").val(),
        n = $("#txtemail").val(),
        f = $("#txtguest").val(),
        e = $("#txtrooms").val(),
        r = $("#txtphone").val(),
        o = $("#drdcity").val();
    if (u == "") return alert("Please enter Name !"), !1;
    if (n == "") return alert("Please enter email id !"), !1;
    if (i.test(n))
        if (t.test(n)) {
            if (f == "") return alert("Please select No. of Guest !"), !1;
            if (e == "") return alert("Please select Date !"), !1;
            if (r == "") return alert("Please enter your phone no.!"), !1;
            if (r.length < 10) return alert("Please enter your valid contact number"), !1;
            if (n == "") return alert("Please enter email id !"), !1;
            if (i.test(n))
                if (t.test(n)) {
                    if (o == "") return alert("Please enter Message !"), !1;
                    aftersuccesSWeeding()
                } else return alert("Please enter a valid Email Id !"), !1;
            else return alert("Please enter a valid Email Id ! "), !1
        } else return alert("Please enter a valid Email Id !"), !1;
    else return alert("Please enter a valid Email Id ! "), !1
}
function validatedinerewards() {
    var i = $.trim($("#txtName").val()),
        r = $.trim($("#TextBox1").val()),
        t = $("#txtMobile").val(),
        n = $("#txtemail").val();
    if (i == "") return alert("Please enter name !"), $("#txtName").focus(), !1;
    if (n == "") return alert("Please enter email id !"), $("#txtemail").focus(), !1;
    if (/[0-9a-zA-Z' ']{0,}/.test(n))
        if (/^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/.test(n)) {
            if (r == "") return alert("Please enter City !"), $("#TextBox1").focus(), !1;
            if (t == "") return alert("Please enter mobile !"), $("#txtMobile").focus(), !1;
            if (t.length < 10) return alert("Please enter your valid contact number"), $("#txtMobile").focus(), !1;
            aftersuccessDineRewards()
        } else return alert("Please enter a valid Email Id !"), $("#txtemail").focus(), !1;
    else return alert("Please enter a valid Email Id ! "), $("#txtemail").focus(), !1
}
function validatepartner() {
    var i = $("#txtBusinessName").val(),
        r = $("#txtName ").val(),
        t = $("#txtMobile").val(),
        n = $("#txtemail").val(),
        u = $("#txtMessage").val();
    if (i == "") return alert("Please business name !"), $("#txtBusinessName").focus(), !1;
    if (r == "") return alert("Please enter Name !"), $("#txtName ").focus(), !1;
    if (t == "") return alert("Please enter mobile !"), $("#txtMobile").focus(), !1;
    if (t.length < 10) return alert("Please enter your valid contact number"), $("#txtMobile").focus(), !1;
    if (n == "") return alert("Please enter email id !"), $("#txtemail").focus(), !1;
    if (/[0-9a-zA-Z' ']{0,}/.test(n))
        if (/^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/.test(n)) {
            if (u == "") return alert("Please enter Message !"), $("#txtMessage ").focus(), !1
        } else return alert("Please enter a valid Email Id !"), $("#txtemail").focus(), !1;
    else return alert("Please enter a valid Email Id ! "), $("#txtemail").focus(), !1
}
function FeedBackForm() {
    var r = $.trim($("#txtFirstName").val()),
        t = $.trim($("#txtMobile").val()),
        n = $("#txtEmail").val(),
        u = $("#DdHotels").val(),
        f = $.trim($("#txtComment").val()),
        i = $("#txtInput").val(),
        e = $("#mainCaptcha").val();
    if (r == "") return alert("Please enter first name !"), $("#txtFirstName").focus(), !1;
    if (t == "" || t == "Phone") return alert("Please enter your mobile no.!"), $("#txtMobile").focus(), !1;
    if (t.length < 10) return alert("Please enter your valid mobile number"), $("#txtMobile").focus(), !1;
    if (n == "" || n == "Email") return alert("Please enter email id !"), $("#txtEmail").focus(), !1;
    if (/[0-9a-zA-Z' ']{0,}/.test(n))
        if (/^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/.test(n)) {
            if (u == "0") return alert("Please select hotel !"), $("#DdHotels").focus(), !1;
            if (f == "") return alert("Please enter comment !"), $("#txtComment").focus(), !1;
            if (i == "") return alert("Please enter captcha code !"), $("#txtCaptcha").focus(), !1;
            if (i != e) return alert("Captcha code mismatch!"), $("#txtCaptcha").focus(), !1
        } else return alert("Please enter a valid Email Id !"), $("#txtEmail").focus(), !1;
    else return alert("Please enter a valid Email Id ! "), $("#txtEmail").focus(), !1
}
function AfterSucessFeedBackForm() {
    var n = window.location.pathname.split("/");
    $.ajax({
        type: "POST",
        contentType: "application/json; charset=utf-8",
        url: SiteURL + "RoyalOrchidService.asmx/FeedBackforms",
        data: "{'name':'" + $("#txtname").val() + "','email':'" + $("#txtemail").val() + "','phone':'" + $("#txtphone").val() + "','messages':'" + $("textarea#txtmessage").val() + "','hotelname':'" + n[2] + "'}",
        cache: !1,
        async: !1,
        success: function (n) {
            n.d == "Success" && ($("#txtname").val(""), $("#txtemail").val(""), $("#txtphone").val(""), window.location.href = "/thankyou")
        },
        Error: function (n) {
            alert(n.d)
        }
    })
}
$(window).scroll(function () {
    var n = $(window).scrollTop();
    n >= 50 ? $("header").addClass("header-fiexd") : $("header").removeClass("header-fiexd")
});
$(window).scroll(function () {
    var n = $(window).scrollTop();
    n >= 200 ? ($("header").addClass("header_fixed"), $(".banner-text").addClass("booking_engine_fixed")) : ($("header").removeClass("header_fixed"), $(".banner-text").removeClass("booking_engine_fixed"))
});
function validateloyaltysubscription() {
    var RegEx = /^[a-zA-Z][a-zA-Z ]+$/;
    var RegexSpecialCharacter = /^[a-zA-Z][a-zA-Z ][0-9]+$/;
    var RegEmail = /^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/;
    var RegPhNo = /^[0-9,()-]{1,50}$/;
    var WebSiteExp = /^[a-zA-Z0-9\-\.]+\.(com|org|net|mil|edu|COM|ORG|NET|MIL|EDU)$/;
    var AlphaNumeric = /[0-9a-zA-Z' ']{0,}/;
    var email = $("#exampleInputEmail").val();
    if (email == "" || email == "Email") {
        alert("Please Enter Email Id !");
        $("#exampleInputEmail").focus();
        return false;
    }
    else if (!AlphaNumeric.test(email)) {
        alert("Please enter a valid Email Id !")
        $("#exampleInputEmail").focus();
        return false;
    }
    else if (!RegEmail.test(email)) {
        alert("Please enter a valid Email Id !")
        $("#exampleInputEmail").focus();
        return false;
    }
    else {
        GotoSubscription();
    }
}
function ValidateSigninQueryForm() {
    var RegEx = /^[a-zA-Z][a-zA-Z ]+$/;
    var RegexSpecialCharacter = /^[a-zA-Z][a-zA-Z ][0-9]+$/;
    var RegEmail = /^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/;
    var RegPhNo = /^\d{10}$/;
    var WebSiteExp = /^[a-zA-Z0-9\-\.]+\.(com|org|net|mil|edu|COM|ORG|NET|MIL|EDU)$/;
    var AlphaNumeric = /[0-9a-zA-Z' ']{0,}/;
    var Email = $("#txtSignInEmail");
    var Password = $("#txtSignInPassword");
    if (Email.val() == "" || Email.val() == "Login ID/ Registered Email ID") {
        alert('Please enter your Email ID');
        Email.focus();
        return false;
    }
    else if (!AlphaNumeric.test(Email.val())) {
        alert("Please enter a valid Email Id ! ");
        Email.focus();
        return false;
    }
    else if (!RegEmail.test(Email.val())) {
        alert("Please enter a valid Email Id !");
        Email.focus();
        return false;
    }
    else if (Password.val() == "" || Password.val() == "Password") {
        alert('Please enter your password');
        Password.focus();
        return false;
    } else {
    }

}
function SignUpIssueOtp() {
    var RegEx = /^[a-zA-Z][a-zA-Z ]+$/;
    var RegexSpecialCharacter = /^[a-zA-Z][a-zA-Z ][0-9]+$/;
    var RegEmail = /^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/;
    var RegPhNo = /^\d{10}$/;
    var WebSiteExp = /^[a-zA-Z0-9\-\.]+\.(com|org|net|mil|edu|COM|ORG|NET|MIL|EDU)$/;
    var AlphaNumeric = /[0-9a-zA-Z' ']{0,}/;
    var title = $("#SelectSignupTitle");
    var fname = $("#txtSignupFName");
    var lname = $("#txtSignupLName");
    var email = $("#txtSignupEmail");
    var city = $("#txtSignupCity");
    var countrycode = $("#SignupcountryCode");
    var phone = $("#txtSignupPhone");
    var Password = $("#txtSignupPassword");
    if (fname.val() == "" || fname.val() == "First Name") {
        alert("Please enter your first name!");
        fname.focus();
        return false;
    }
    else if (lname.val() == "" || lname.val() == "Last Name") {
        alert("Please enter your last name!");
        lname.focus();
        return false;
    }
    else if (email.val() == "" || email.val() == "Email") {
        alert("Please enter your email!");
        email.focus();
        return false;
    }
    else if (!AlphaNumeric.test(email.val())) {
        alert("Please enter a valid Email Id ! ");
        email.focus();
        return false;
    }
    else if (!RegEmail.test(email.val())) {
        alert("Please enter a valid Email Id !");
        email.focus();
        return false;
    }
    else if (Password.val() == "" || Password.val() == "Pasword") {
        alert("Please enter password!");
        Password.focus();
        return false;
    }
    else if (city.val() == "" || city.val() == "City") {
        alert("Please enter your city!");
        city.focus();
        return false;
    }
    else if (phone.val() == "" || phone.val() == "Phone") {
        alert("Please enter your phone no.!");
        phone.focus();
        return false;
    }
    else if (phone.val().length < 10) {
        alert('Please enter your valid contact number');
        $("#txtSignupPhone").focus();
        return false;
    }
    else {
        sendOTPForUser();
    }
}
function sendOTPForUser() {
    var Mobile = $("#txtSignupPhone").val();
    var Email = $("#txtSignupEmail").val();
    var CountryCode = $("#SignupcountryCode").val();
    $.ajax({
        type: "POST",
        url: '/RoyalLoyalty.asmx/SingupMemderIssueOTP',
        data: "{ 'Mobile': '" + Mobile + "', 'Email': '" + Email + "', 'CountryCode': '" + CountryCode + "','UType':'" + $("#hidusertype").val() + "' }",
        contentType: "application/json; charset=utf-8",
        async: true,
        beforeSend: function () {
            $(".loadingPage").fadeIn();
        },
        success: function (data) {
            var t = JSON.parse(data.d);
            var iNum = parseInt(parseInt(t['createdId']));
            if (iNum > 0) {
                $(".loadingPage").fadeOut();
                $("#divotp").show();
                $("#divotp1").show();
                $("#lblotpmob").text('OTP send to mobile-' + $("#txtSignupPhone").val());
                $("#divissueotp").hide();
                $("#register_Id").prop('disabled', false);
            }
            else if (iNum == 0) {
                $(".loadingPage").fadeOut();
                $("#errmess").html("Wrong Mobile Number");
            }
            else {
                $(".loadingPage").fadeOut();
                $("#errmess").html(data.d)
            }

        },
        error: function (jqXHR, textStatus, ex) { }
    });
}
function ValidateSignUpQueryForm() {
    var RegEx = /^[a-zA-Z][a-zA-Z ]+$/;
    var RegexSpecialCharacter = /^[a-zA-Z][a-zA-Z ][0-9]+$/;
    var RegEmail = /^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/;
    var RegPhNo = /^\d{10}$/;
    var WebSiteExp = /^[a-zA-Z0-9\-\.]+\.(com|org|net|mil|edu|COM|ORG|NET|MIL|EDU)$/;
    var AlphaNumeric = /[0-9a-zA-Z' ']{0,}/;
    var title = $("#SelectSignupTitle").val();
    var Fname = $.trim($("#txtSignupFName").val());
    var Lname = $.trim($("#txtSignupLName").val());
    var email = $.trim($("#txtSignupEmail").val());
    var phone = $.trim($("#txtSignupPhone").val());
    var city = $.trim($("#txtSignupCity").val());
    var countrycode = $("#SignupcountryCode").val();
    var password = $("#txtSignupPassword").val();
    if (Fname == "" || Fname == "Name") {
        alert("Please enter your first name !");
        $("#txtSignupFName").focus();
        return false;
    }
    else if (Lname == "" || Lname == "Name") {
        alert("Please enter your last name !");
        $("#txtSignupLName").focus();
        return false;
    }
    else if (email == "" || email == "Email") {
        alert("Please enter email id !");
        $("#txtSignupEmail").focus();
        return false;
    }
    else if (!AlphaNumeric.test(email)) {
        alert("Please enter a valid Email Id ! ");
        $("#txtSignupEmail").focus();
        return false;
    }
    else if (!RegEmail.test(email)) {
        alert("Please enter a valid Email Id !");
        $("#txtSignupEmail").focus();
        return false;
    }
    else if (password == "" || password == "Password") {
        alert("Please enter password!");
        $("#txtSignupPassword").focus();
        return false;
    }
    else if (phone == "" || phone == "Phone") {
        alert("Please enter your phone no.!");
        $("#txtSignupPhone").focus();
        return false;
    } if (city == "" || city == "City") {
        alert("Please enter your City !");
        $("#txtSignupcity").focus();
        return false;
    }
    else {
        sendSignUpForUser();
    }
}
function sendSignUpForUser() {
    var title = $("#SelectSignupTitle").val();
    var txtName = $("#txtSignupFName").val();
    var LName = $("#txtSignupLName").val();
    var Email = $("#txtSignupEmail").val();
    var Mobile = $("#txtSignupPhone").val();
    var CityName = $("#txtSignupCity").val();
    var countrycode = $("#SignupcountryCode").val();
    var code = $("#txtotp").val();
    var password = $("#txtSignupPassword").val();
    $.ajax({
        type: "POST",
        url: "/RoyalLoyalty.asmx/ValidateOtpMobile",
        data: "{Title:'" + title + "',FName:'" + txtName + "',LName:'" + LName + "',Email:'" + Email + "',Mobile:'" + Mobile + "',CityName:'" + CityName + "',Code:'" + code + "',CountryCode:'" + countrycode + "',Password:'" + password + "',currenturl:'Home',memberid:'','UType':'" + $("#hidusertype").val() + "'}",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        processData: true,
        global: true,
        async: true,
        crossDomain: true,
        cache: false,
        beforeSend: function () {
            $(".loadingPage").fadeIn();
        },
        success: function (response) {
            if (response.d == "Login create successful") {
                sendSigninAfterSignUp();
            }
            else {
                $(".loadingPage").fadeOut();
                $("#errmess").html(response.d);
            }
        },
        error: function (jqXHR, textStatus, ex) { }
    });
}
function sendSigninAfterSignUp() {
    var email = $("#txtSignupEmail").val();
    var password = $("#txtSignupPassword").val();
    $.ajax({
        type: "POST",
        url: '/RoyalLoyalty.asmx/RoyalLoginEmail',
        data: "{ 'Email':'" + email + "','Passwod':'" + password + "','Isremember': '1','UType':'" + $("#hidusertype").val() + "' }",
        contentType: "application/json; charset=utf-8",
        async: true,
        success: function (data) {
            var res = data.d.split('|');
            if (res[0] == "Success") {
                window.open("https://loyalty.royalorchidhotels.com/#/dashboard/" + res[4]);
                window.location.reload();
            }
            else {
                $("#errmess").html(data.d);
                return false;
            }
        },
        error: function (jqXHR, textStatus, ex) { }
    });
}
function ForgotIssueOtp() {
    var RegEx = /^[a-zA-Z][a-zA-Z ]+$/;
    var RegexSpecialCharacter = /^[a-zA-Z][a-zA-Z ][0-9]+$/;
    var RegEmail = /^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/;
    var RegPhNo = /^\d{10}$/;
    var WebSiteExp = /^[a-zA-Z0-9\-\.]+\.(com|org|net|mil|edu|COM|ORG|NET|MIL|EDU)$/;
    var AlphaNumeric = /[0-9a-zA-Z' ']{0,}/;
    var email = $.trim($("#txtForgotEmail").val());
    var phone = $.trim($("#txtForgorMobile").val());
    var countrycode = $("#ForgotcountryCodeMobile").val();
    if (email == "" || email == "Email") {
        alert("Please enter email id !");
        $("#txtForgotEmail").focus();
        return false;
    }
    else if (phone == "" || phone == "Phone") {
        alert("Please enter your phone no.!");
        $("#txtSignupPhone").focus();
        return false;
    }
    if (email != "") {
        if (!AlphaNumeric.test(email)) {
            alert("Please enter a valid Email Id ! ");
            $("#txtForgotEmail").focus();
            return false;
        }
        else if (!RegEmail.test(email)) {
            alert("Please enter a valid Email Id !");
            $("#txtForgotEmail").focus();
            return false;
        }
    }
    else if (phone != "") {
        if (phone.length < 10) {
            alert('Please enter your valid contact number');
            $("#txtSignupPhone").focus();
            return false;
        }
    }
    else {
    }
}
///************************************************************************Forgot Password Start*********************************************
///Forgot Password by Mobile OTP
function ForgotOtpMobile() {
    var RegEx = /^[a-zA-Z][a-zA-Z ]+$/;
    var RegexSpecialCharacter = /^[a-zA-Z][a-zA-Z ][0-9]+$/;
    var RegEmail = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    var RegPhNo = /^[0-9,()-]{1,50}$/;
    var WebSiteExp = /^[a-zA-Z0-9\-\.]+\.(com|org|net|mil|edu|COM|ORG|NET|MIL|EDU)$/;
    var Mobile = $("#txtforgotmobile");
    var countryCode = $("#forgotcountryCodeMobile");
    if (Mobile.val() == "" || Mobile.val() == "Enter Mobile") {
        alert('Please enter your Mobile');
        Mobile.focus();
        return false;
    }
    else if (Mobile.val().length < 10) {
        alert('Please enter valid Mobile');
        Mobile.focus();
        return false;
    }
    else {
        ForgotOtpMobileIssue();
    }
}
function ForgotOtpMobileIssue() {
    var mobile = $("#txtforgotmobile").val();
    var countryCode = $("#forgotcountryCodeMobile").val();
    $.ajax({
        type: "POST",
        url: '/RoyalLoyalty.asmx/ForgotMobileIssueOTP',
        data: "{ 'CountryCode':'" + countryCode + "','Mobile':'" + mobile + "','UType':'" + $("#hidusertype").val() + "'}",
        contentType: "application/json; charset=utf-8",
        async: true,
        success: function (data) {
            var t = JSON.parse(data.d);
            var iNum = parseInt(t['createdId']);
            if (iNum > 0) {
                $("#forgototpdivmobile").hide();
                $("#divmobileforgototp").show();
                $(".radiobox").hide();
                $("#sign_heading").text('Forgot Password');
            }
            else if (iNum == 0) {
                $("#errmess").html("Wrong Mobile Number");
            }
            else {
                $("#errmess").html(data.d)
            }
        },
        error: function (jqXHR, textStatus, ex) { }
    });
}
// Forgot Password by Mobile OTP Validate
function ForgotOtpMobileValidate() {
    var RegEx = /^[a-zA-Z][a-zA-Z ]+$/;
    var RegexSpecialCharacter = /^[a-zA-Z][a-zA-Z ][0-9]+$/;
    var RegEmail = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    var RegPhNo = /^[0-9,()-]{1,50}$/;
    var WebSiteExp = /^[a-zA-Z0-9\-\.]+\.(com|org|net|mil|edu|COM|ORG|NET|MIL|EDU)$/;
    var Mobile = $("#txtforgotmobile");
    var mobcode = $("#txtforgotPhoneOtp");
    var countryCode = $("#forgotcountryCodeMobile");
    var password = $("#txtforgotmobilePassword");
    if (mobcode.val() == "" || mobcode.val() == "Enter mobile OTP") {
        alert('Please enter your Mobile OTP');
        mobcode.focus();
        return false;
    }
    if (mobcode.val().length < 6) {
        alert('Please enter valid Mobile OTP');
        mobcode.focus();
        return false;
    }
    if (password.val() == "" || password.val() == "Enter password") {
        alert('Please enter your password');
        mobcode.focus();
        return false;
    }
    else {
        ForgotOtpMobileIssueValidate();
    }
}
function ForgotOtpMobileIssueValidate() {
    var Mobile = $("#txtforgotmobile").val();
    var mobcode = $("#txtforgotPhoneOtp").val();
    var countryCode = $("#forgotcountryCodeMobile").val();
    var password = $("#txtforgotmobilePassword").val();
    $.ajax({
        type: "POST",
        url: '/RoyalLoyalty.asmx/ValidateForgotMobileIssueOTP',
        data: "{ 'CountryCode':'" + countryCode + "','Mobile':'" + Mobile + "','Code':'" + mobcode + "','Password':'" + password + "','UType':'" + $("#hidusertype").val() + "'}",
        contentType: "application/json; charset=utf-8",
        async: true,
        success: function (data) {
            alert(data.d);
            if (data.d == "Password Reset Successful.") {
                ForgotSignInByMobile();
            }
            else {
                $("#errmess").html(data.d);
                return false;
            }
        },
        error: function (jqXHR, textStatus, ex) { }
    });
}
function ForgotSignInByMobile() {
    var mobile = $("#txtforgotmobile").val();
    var password = $("#txtforgotmobilePassword").val();
    var countryCode = $("#forgotcountryCodeMobile").val();
    $.ajax({
        type: "POST",
        url: '/RoyalLoyalty.asmx/RoyalLoginMobile',
        data: "{ 'CountryCode':'" + countryCode + "','Mobile':'" + mobile + "','Passwod':'" + password + "','Isremember': '1' ,'UType':'" + $("#hidusertype").val() + "'}",
        contentType: "application/json; charset=utf-8",
        async: true,
        success: function (data) {
            var res = data.d.split('|');
            if (res[0] == "Success") {
                window.location.reload();
            }
            else {
                $("#errmess").html(data.d);
                return false;
            }
        },
        error: function (jqXHR, textStatus, ex) { }
    });
}
///Forgot Password by Email OTP
function ForgotOtpEmail() {
    var RegEx = /^[a-zA-Z][a-zA-Z ]+$/;
    var RegexSpecialCharacter = /^[a-zA-Z][a-zA-Z ][0-9]+$/;
    var RegEmail = /^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/;
    var RegPhNo = /^\d{10}$/;
    var WebSiteExp = /^[a-zA-Z0-9\-\.]+\.(com|org|net|mil|edu|COM|ORG|NET|MIL|EDU)$/;
    var AlphaNumeric = /[0-9a-zA-Z' ']{0,}/;
    var Email = $("#txtforgotEmail");
    if (Email.val() == "" || Email.val() == "Enter Email") {
        alert('Please enter your Email ID');
        Email.focus();
        return false;
    }
    else if (!AlphaNumeric.test(Email.val())) {
        alert("Please enter a valid Email Id ! ");
        Email.focus();
        return false;
    }
    else if (!RegEmail.test(Email.val())) {
        alert("Please enter a valid Email Id !");
        Email.focus();
        return false;
    }
    else {
        ForgotOtpEmailIssue();
    }
}
function ForgotOtpEmailIssue() {
    var email = $("#txtforgotEmail").val();
    $.ajax({
        type: "POST",
        url: '/RoyalLoyalty.asmx/ForgotEmailIssueOTP',
        data: "{ 'Email':'" + email + "','UType':'" + $("#hidusertype").val() + "'}",
        contentType: "application/json; charset=utf-8",
        async: true,
        beforeSend: function () {
            $(".loadingPage").fadeIn();
        },
        success: function (data) {
            var t = JSON.parse(data.d);
            var iNum = parseInt(t['createdId']);
            if (iNum > 0) {
                $(".loadingPage").fadeOut();
                $("#forgototpdivemail").hide();
                $("#divemailforgototp").show();
                $(".radiobox").hide();
                $("#sign_heading").text('Forgot Password');
            }
            else {
                $(".loadingPage").fadeOut();
                $("#errmess").html(data.d)
            }
        },
        error: function (jqXHR, textStatus, ex) { }
    });
}
// Forgot Password by Email OTP Validate
function ForgotOtpEmailValidate() {
    var RegEx = /^[a-zA-Z][a-zA-Z ]+$/;
    var RegexSpecialCharacter = /^[a-zA-Z][a-zA-Z ][0-9]+$/;
    var RegEmail = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    var RegPhNo = /^[0-9,()-]{1,50}$/;
    var WebSiteExp = /^[a-zA-Z0-9\-\.]+\.(com|org|net|mil|edu|COM|ORG|NET|MIL|EDU)$/;
    var Email = $("#txtforgotEmail");
    var emailcode = $("#txtSignInEmailforgototp");
    var password = $("#txtSignInEmailforgotpassword");
    if (emailcode.val() == "" || emailcode.val() == "Enter Email OTP") {
        alert('Please enter your Email OTP');
        emailcode.focus();
        return false;
    }
    if (emailcode.val().length < 6) {
        alert('Please enter valid Email OTP');
        emailcode.focus();
        return false;
    }
    if (password.val() == "" || password.val() == "Enter Password") {
        alert('Please enter password');
        password.focus();
        return false;
    }
    else {
        ForgotOtpEmailIssueValidate();
    }
}
function ForgotOtpEmailIssueValidate() {
    var Email = $("#txtforgotEmail").val();
    var emailcode = $("#txtSignInEmailforgototp").val();
    var password = $("#txtSignInEmailforgotpassword").val();
    $.ajax({
        type: "POST",
        url: '/RoyalLoyalty.asmx/ValidateForgotEmailIssueOTP',
        data: "{ 'Email':'" + Email + "','Code':'" + emailcode + "','Password':'" + password + "','UType':'" + $("#hidusertype").val() + "'}",
        contentType: "application/json; charset=utf-8",
        async: true,
        success: function (data) {
            var res = data.d.split('|');
            if (data.d == "Password Reset Successful.") {
                ForgotSignInByEmail();
            }
            else {
                $(".loadingPage").fadeOut();
                $("#errmess").html(data.d);
                return false;
            }
        },
        error: function (jqXHR, textStatus, ex) { }
    });
}
function ForgotSignInByEmail() {
    var email = $("#txtforgotEmail").val();
    var password = $("#txtSignInEmailforgotpassword").val();
    $.ajax({
        type: "POST",
        url: '/RoyalLoyalty.asmx/RoyalLoginEmail',
        data: "{ 'Email':'" + email + "','Passwod':'" + password + "','Isremember': '1' ,'UType':'" + $("#hidusertype").val() + "'}",
        contentType: "application/json; charset=utf-8",
        async: true,
        beforeSend: function () {
            $(".loadingPage").fadeIn();
        },
        success: function (data) {
            var res = data.d.split('|');
            if (res[0] == "Success") {
                window.location.reload();
            }
            else {
                $(".loadingPage").fadeOut();
                $("#errmess").html(data.d);
                return false;
            }
        },
        error: function (jqXHR, textStatus, ex) { }
    });
}
///************************************************************************Forgot Password End*********************************************
///***************************************Sign In By Mobile*******************************************************************
///Sign In by Mobile OTP
function SignInOtpMobile() {
    //alert("hi");
    var RegEx = /^[a-zA-Z][a-zA-Z ]+$/;
    var RegexSpecialCharacter = /^[a-zA-Z][a-zA-Z ][0-9]+$/;
    //var RegEmail = /^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/;
    var RegEmail = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    var RegPhNo = /^[0-9,()-]{1,50}$/;
    var WebSiteExp = /^[a-zA-Z0-9\-\.]+\.(com|org|net|mil|edu|COM|ORG|NET|MIL|EDU)$/;
    var Mobile = $("#txtSigninmobile");
    var countryCode = $("#SignincountryCodeMobile");
    if (Mobile.val() == "" || Mobile.val() == "Enter Mobile") {
        alert('Please enter your Mobile');
        Mobile.focus();
        return false;
    }
    else if (Mobile.val().length < 10) {
        alert('Please enter your mobile number');
        Mobile.focus();
        return false;
    }
    else {
        SignInOtpMobileIssue();
    }
}
function SignInOtpMobileIssue() {
    var mobile = $("#txtSigninmobile").val();
    var countryCode = $("#SignincountryCodeMobile").val();
    $.ajax({
        type: "POST",
        url: '/RoyalLoyalty.asmx/SignInIssueOtpMobile',
        data: "{ 'CountryCode':'" + countryCode + "','Mobile':'" + mobile + "','UType':'" + $("#hidusertype").val() + "'}",
        contentType: "application/json; charset=utf-8",
        async: true,
        global: false,
        beforeSend: function () {
            $(".loadingPage").fadeIn();
        },
        success: function (data) {
            if (data.d == "Mobile no. is not registered") {
                $(".loadingPage").fadeOut();
                $("#errmess").html('Mobile no. is not registered.')
                $("#A3").show();
            }
            else {
                var t = JSON.parse(data.d);
                var iNum = parseInt(t['createdId']);
                if (iNum > 0) {
                    $(".loadingPage").fadeOut();
                    $("#errmess").html('');
                    $("#A3").hide();
                    $("#divmobileotp").show();
                    $("#otpdivmobile").hide();
                    $(".radiobox").hide();
                    $("#sign_heading").text('Verify Your Mobile Number');
                }
                else {
                    $("#A3").hide();
                    $(".loadingPage").fadeOut();
                    $("#errmess").html(data.d);
                }
            }
        },
        error: function (jqXHR, textStatus, ex) { }
    });
}
// Sign In by Mobile OTP Validate
function SignInOtpMobileValidate() {
    //alert("hi");
    var RegEx = /^[a-zA-Z][a-zA-Z ]+$/;
    var RegexSpecialCharacter = /^[a-zA-Z][a-zA-Z ][0-9]+$/;
    //var RegEmail = /^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/;
    var RegEmail = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    var RegPhNo = /^[0-9,()-]{1,50}$/;
    var WebSiteExp = /^[a-zA-Z0-9\-\.]+\.(com|org|net|mil|edu|COM|ORG|NET|MIL|EDU)$/;
    var Mobile = $("#txtSigninmobile");
    var mobcode = $("#txtSignInPhoneOtp");
    var countryCode = $("#SignincountryCodeMobile");
    if (mobcode.val() == "" || mobcode.val() == "Enter Mobile OTP") {
        alert('Please enter your Mobile OTP');
        mobcode.focus();
        return false;
    }
    if (mobcode.val().length < 6) {
        alert('Please enter valid Mobile OTP');
        mobcode.focus();
        return false;
    }
    else {
        SignInOtpMobileIssueValidate();
    }
}
function SignInOtpMobileIssueValidate() {
    var Mobile = $("#txtSigninmobile").val();
    var mobcode = $("#txtSignInPhoneOtp").val();
    var countryCode = $("#SignincountryCodeMobile").val();
    $.ajax({
        type: "POST",
        url: '/RoyalLoyalty.asmx/SignInIssueOtpMobileValidate',
        data: "{ 'CountryCode':'" + countryCode + "','Mobile':'" + Mobile + "','CodeMob':'" + mobcode + "','UType':'" + $("#hidusertype").val() + "'}",
        contentType: "application/json; charset=utf-8",
        async: true,
        global: false,
        beforeSend: function () {
            $(".loadingPage").fadeIn();
        },
        success: function (data) {
            var res = data.d.split('|');
            if (res[0] == "Success") {
                window.open("https://loyalty.royalorchidhotels.com/#/dashboard/" + res[4]);
                window.location.reload();
            }
            else {
                $(".loadingPage").fadeOut();
                $("#errmess").html(data.d);
                return false;
            }
        },
        error: function (jqXHR, textStatus, ex) { }
    });
}
///************************************************************************Sign In by Mobile End*********************************************
