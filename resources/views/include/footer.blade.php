
<footer>
    <div class="footer">
    <div class="container">
    
    <div class="row pre-footer">
    <div class="col-md-4">
    <div class="contact-box">
    <i class="fa fa-map-marker" aria-hidden="true"></i>
    <div class="contact-details">
    <h4 class="pre-footer-title">HEAD OFFICE</h4>
    <p> {{setting('site.location')}}</p>
</div>
    </div>
    </div>
    <div class="col-md-4">
    <div class="contact-box">
    <i class="fa fa-phone" aria-hidden="true"></i>
    <div class="contact-details">
    <h4 class="pre-footer-title">CALL US</h4>
    <p> {{setting('site.phone')}}</p>
    </div>
    </div>
    </div>
    <div class="col-md-4">
    <div class="contact-box">
    <i class="fa fa-envelope" aria-hidden="true"></i>
    <div class="contact-details">
    <h4 class="pre-footer-title">EMAIL US</h4>
    <p> <a href="mailto:{{setting('site.email')}}">{{setting('site.email')}}</a> </p>
</div>
    </div>
    </div>
    </div>
    
    
    <div class="row widgets">
    <div class="col-md-4 col-sm-6">
    <div class="about-txt widget">
    <img src="{{asset('/storage/app/public/'.setting('site.wlogo'))}}" style="width: 70%;" alt="logo" />
    <p>{{setting('site.description')}} </p>
    <div class="widgets-social">
    <a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> </a>
    <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
    <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a>
    <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
    </div>
    </div>
    </div>
    <div class="col-md-2 col-sm-6">
    <div class="quick-links widget">
    <h2 class="widget-title">QUICK LINKS</h2>
    <ul>
    <li> <a href="#"> Home </a> </li>
    <li> <a href="#"> About </a> </li>
    <li> <a href="#"> Services </a> </li>
    <li> <a href="#"> Policies </a> </li>

    </ul>
    </div>
    </div>
    <div class="spacer-50 visible-sm"></div>
    <div class="col-md-3 col-sm-6" style="margin-top: 45px;">
    <div class="our-services widget">
        <h2 class="widget-title"></h2>

    <ul>
        <li> <a href="#">    CONDUCT OF INTEREST </a> </li>
    <li> <a href="#"> VALUING CREATION </a> </li>
    <li> <a href="#"> Safety Culture</a> </li>
    <li> <a href="#"> CONTACT </a> </li>
    
    </ul>
    </div>
    </div>
    <div class="col-md-3 col-sm-6">
    <div class="newsletter widget">
    <h2 class="widget-title">Newsletter</h2>
    <p>Subscribe to our newsletters to receive latest news and updates.</p>
    
    <form action="https://demo.web3canvas.com/themeforest/offshore/php/subscribe.php" id="subscribeform" method="post">
    <div class="form-group">
    <input type="email" id="email" name="email" placeholder="Enter your email" class="form-control" title="Please enter your email" data-msg-email="Please enter a valid email">
    </div>
    <button type="submit" class="btn btn-block" id="js-subscribe-btn"> Subscribe Now! </button>
    <div id="js-subscribe-result" data-success-msg="Done. Subscribed" data-error-msg="Oops. Error!"></div>
    </form>
    </div>
    </div>
    </div>
    
    </div>
    </div>
    
    <div class="copyright">
    <div class="container">
    <div class="row copyright-bar">
    <div class="col-md-6">
    <p>Copyright © 2023  All rights reserved.</p>
    </div>
 
    </div>
    </div>
    </div>
    
    </footer>
    
    
    <a href="#0" class="cd-top"> Top </a>
    </div>
    
    
    
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.min.js"></script>
    
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    
    <script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
    
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    
    <script src="{{ asset('js/back-to-top.js') }}"></script>
    
    <script src="{{ asset('js/validate.js') }}"></script>
    
    <script src="{{ asset('js/subscribe.js') }}"></script>
    
    <script src="{{ asset('js/main.js') }}"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vb26e4fa9e5134444860be286fd8771851679335129114" integrity="sha512-M3hN/6cva/SjwrOtyXeUa5IuCT0sedyfT+jK/OV+s+D0RnzrTfwjwJHhd+wYfMm9HJSrZ1IKksOdddLuN6KOzw==" data-cf-beacon='{"rayId":"7b24640229d901c5","version":"2023.3.0","r":1,"b":1,"token":"1a2187940c214caa9d3fed19b4904902","si":100}' crossorigin="anonymous"></script>
   
<script>
    var div=document.getElementById("titleworddirector") ;
     var excerpt=div.innerText.substring(0,500);
     div.innerHTML=excerpt+" ....";
</script>
   

</body>
    
    </html>
    