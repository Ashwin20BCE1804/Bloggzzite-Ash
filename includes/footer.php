
    <footer>
      
                <h2 class="brand"><a href="index.php"> Bl<span style="color: #ff591cbb">o</span>ggzz </a></h2>
                <div id="clockbox" style="color:#aaa;text-align:center;"></div>
                <script type="text/javascript">
var tday=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
var tmonth=["January","February","March","April","May","June","July","August","September","October","November","December"];

function GetClock(){
var d=new Date();
var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getFullYear();
var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

if(nhour==0){ap=" AM";nhour=12;}
else if(nhour<12){ap=" AM";}
else if(nhour==12){ap=" PM";}
else if(nhour>12){ap=" PM";nhour-=12;}

if(nmin<=9) nmin="0"+nmin;
if(nsec<=9) nsec="0"+nsec;

var clocktext=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
document.getElementById('clockbox').innerHTML=clocktext;
}

GetClock();
setInterval(GetClock,1000);
</script>
                <div class="footer-main-container">
                  <div>
                    <a href="javascript:void(0)" class="sub-container">Useful links</a>
                    <hr>
                    <p>Donations accepted ! contact Ashwin, Stduent at VIT Chennai for further details </a> <br>      
                    <i class="fa fa-info-circle"></i> Donations accepted <br>
                    
                   <a href="Our-Terms.php"> Terms & Conditions </a>|<a href="Privacy-policy.php"> Privacy policy</a> <br>

                    Contact us: Feedback is very much appreciated! <br>
                   <a href="mailto:ashwin.vitcse@gmail.com">Email: mail@gmail.com</a>  </p>
                  </div>
                  <div>
                  <a href="javascript:void(0)" class="sub-container">Useful links</a>
                  <hr>
                  <a href="index.php"> Home</a><br>
                  <a href="category.php?catid=2"> Politics</a>  <br>
                  <a href="category.php?catid=6"> Trending</a> <br>           
                  <a href="category.php?catid=7"> Business</a><br>
                  <a href="category.php?catid=5"> Entertainment</a><br>
                  <a href="category.php?catid=13"> Education</a><br>
                  <a href="category.php?catid=3"> Sports</a><br>
                  <a href="category.php?catid=9"> Health</a> <br>
                  <a href="category.php?catid=10"> International</a><br>
                  <a href="category.php?catid=12"></i> Biographies</a><br>
                </div>
                
                <div>
                  <a href="javascript:void(0)" class="sub-container"> Crypto Currency</a><br>
                  <hr>
                  <a href="category.php?catid=8">Crypto News</a> <br>
                  <a href="category.php?catid=8">Coin Prices</a><br>
                </div>
                <div>
                  <a href="javascript:void(0)" class="sub-container"> Socials</a><br>
                  <hr>
                  <a href="https//facebook.com/alphacodecamp" class="facb"><i class="fa fa-facebook"></i> Facebook</a><br>
                  <a href="https//alphacodecamp.com.ng" class="insg"><i class="fa fa-instagram"></i> Instagram</a><br>
                  <a href="https//alphacodecamp.com.ng" class="twit"><i class="fa fa-twitter"></i> Twitter</a><br>
                  <a href="https//alphacodecamp.com.ng" class="teleg"><i class="fa fa-telegram"></i> Telegram</a><br>
                </div>
                <div>
                  <a href="javascript:void(0)" class="sub-container"> Help & Support</a><br>
                  <hr>
                  <a href="contact-us.php"> Contact Us</a><br>
                  <a href="about-us.php"> About Us</a><br>
                  <a href="Advertise-with-us.php"> Advertise With Us (Ashwin)</a><br>
                  <a href="Write-for-us.php"> Write for Us</a>
                </div>
                <div>
                  <a href="javascript:void(0)" class="sub-container"> Our Apps</a><br>
                  <hr>
                  <img src="android-app.jpg" alt="android app">
                  <img src="ios-app.jpg" alt="Ios app">
                  
                </div>
                <div>
                  <a href="javascript:void(0)" class="sub-container"> Translate</a><br>
                  <hr>
                  <div id="ytWidget"></div><script src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=en&widgetTheme=dark&autoMode=false" type="text/javascript"></script>
                  
                </div>
                <div>
                  <a href="javascript:void(0)" class="sub-container"> Subscribe</a><br>
                  <hr>
                   </div>
                
                </div>
                <p class="footer-terms">Copyright &copy; <script>document.write(new Date().getFullYear())</script> Bloggzz. All right reserved. Ashwin sivasankar (CSE dept 3rd year)</p><br>
                
              </footer>