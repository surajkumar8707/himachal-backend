<div class="newslatter_section">
    <div class="container">
        <footer>
            <div class="row">
                <div class="col-md-12" style="text-align: center;">
                    <a href='about' class="prtnr">ABOUT US</a>
                    <a href='room-type' class="prtnr1">Room type</a>
                    <a href='{{ route('contact.us') }}' class="prtnr1">Contact Us</a>
                    <a href='booking' class="prtnr1">Booking</a>
                    <a href='privacy-and-policy' class="prtnr1">PRIVACY POLICY</a>
                    <a href='terms-and-conditions' class="prtnr1">TERMS & CONDITIONS</a>
                    <a href="../contact-us" class="prtnr caps">Contact Us</a>
                </div>
                <div class="col-sm-12">
                    <div class="footer_brand_wrapper_">
                    </div>
                </div>
                <div class="col-md-7 col-sm-12 text-right text-center-sm">
                    <div class="social_box row">
                        <div class="col-md-4 text-left"> <a href="#"
                                target="_blank"><i class="fab fa-facebook-f"></i></a> <a href="#" target="_blank"><i class="fab fa-instagram"></i></a> <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a> </div>
                        <div class="col-md-8 p0"> </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-12" style="text-align: right;">
                    <div id="Footer_UpdatePanel2">
                        <div class="ftr"> <input name="Footer$exampleInputEmail" type="text"
                                id="Footer_exampleInputEmail" autocomplete="off" class="form-control"
                                placeholder="Subscribe for updates" /> <input type="button" value="Subscribe"
                                onclick="return validatesubscription();" class="btn btn-default btn-submit" />
                            <div id="corrcetemai"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <p class="copryright_footer text-center">Copyright&copy;{{ date('Y').','.getSettings()->app_name }}.
                        All Rights Reserved.</p>
                </div>
            </div>
        </footer>
    </div>
</div>
