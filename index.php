<?php 
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    $request_uri = '';
    
    if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off"){
         $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        header('HTTP/1.1 301 Moved Permanently');
        header('Location: ' . $redirect);
        exit();
    }
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Qset - Web Design and App Development</title>
<link href="styles.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<style type="text/css"> html,body { margin: 0; padding: 0; overflow-x: hidden; } </style>
<link rel="shortcut icon" type="image/x-icon" href="images/qset-favicon-image.ico">
</head>

<body>
  
  <header>
    <div class="header-container">
      <div class="hero-image">
        <nav>
          <div class="burger_inactive_1">
            <a href="#"><img src="images/burger-inactive-1.png" alt="Navigation - Qset - Web Design and App Development - Nairobi, Kenya"></a>
          </div>        
          <div class="burger_active_1">
            <a href="#"><img src="images/burger-active-1.png" alt="Navigation - Qset - Web Design and App Development - Nairobi, Kenya"></a>
            </div>
          <div class="qset_logo_white_1">
            <a href="./"><img src="images/qset-logo-white-1.png" width="60" height="47" alt="Qset Logo - Web Development"></a>
            </div> 
          <div class="nav-0">
            <ul>
              <li class="nav-2"><a class="nav-3" href="#about">About Us</a></li>
              <li><a class="nav-3" href="#services">Services</a></li>
              <li><a class="nav-3" href="#clients">Clients</a></li>
              <li><a class="nav-3" href="#contact">Contact Us</a></li>
              </ul>
          </div>
        </nav>
      </div>
    </div>  
  </header>
  
  <main>
    <div class="body-container">
      <div class="hero">
        <h1 class="hero_tagline"> Software, Web, &amp; <br>
          App Development </h1>
        <p class="hero_description">Achieve your business goals through compelling digital products.</p>
        <a href="#contact " target="_blank" class="contact_btn">GET IN TOUCH</a> 
        <a href="tel:+254725999504" target="_blank" class="call_btn">CALL US</a> 
        <img src="images/page-line-1.png" alt="" width="10" height="90" class="page-bar-1"/> 
      </div>
      <div class="abt">
        <p class="abt-anchr"><a id="about" name="about">&nbsp;</a></p>
        <img src="images/about-thmb-1.png" alt="" class="abt-thmb-1"/>
        <h1 class="abt-title-1">Let's innovate</h1>
        <p class="abt-dscrptn">We will assist your business to grow through our experience in ERP Software, Websites, and Mobile Apps.</p>
        <a href="#contact" class="abt-link-1">Contact us to learn more</a> 
        <img src="images/page-line-2.png" width="10" height="90" alt=""class="page-bar-2"/> 
      </div>   
      <div><p class="srvcs-anchr"><a id="services" name="services">&nbsp;</a></p></div>
      <div class="srvcs"> 
        <img src="images/service-thmb-1.png" width="361" height="360" alt="" class="srvc_thmb-1"/>
        <p class="srvc_txt-1">Communicate your vision on the web through a modern, captivating, and professional website.</p>
        <img src="images/service-thmb-2.png" alt="" width="361" height="360" class="srvc_thmb-2"/>
        <p class="srvc_txt-2">We offer award winning ERP software with Accounting, Inventory, and Asset Management tools.</p>
        <img src="images/service-thmb-3.png" alt="" width="361" height="360" class="srvc_thmb-3"/>
        <p class="srvc_txt-3">Get in touch with us to learn how we can bring your App idea to reality and deliver it to consumers.</p>
      </div>
      <div class="srvcs-mb-bg"></div>
      <div class="srvc-mbl">
        <p class="srvc-1">Software<br>Systems</p>
        <hr class="hr-1">
        <p class="srvc-2">Web<br>Design</p>
        <hr class="hr-2">
        <p class="srvc-3">App<br>Development</p>
        <hr class="hr-3">
      </div>       
      <div><p class="clnts-anchr"><a id="clients" name="clients"></a>&nbsp;</p></div>
      <div class="clnts">
        <div class="col-lg float-left logo-1">
          <a href="https://tads.co.ke" target="_blank"><img src="images/tads-1.png" width="196" height="81" alt="Tads Insurance - Web Design &amp; Development by Qset" class="logo-img-1"></a>
        </div>
        <div class="col-lg float-left logo-2">
          <a href="https://lann.co.ke" target="_blank"><img src="images/lann-1.png" alt="Lann Cabs - Web Design by Qset" width="195" height="159" class="logo-img-2"></a>
        </div>
        <div class="col-lg float-left logo-3">
          <a href="https://spa-limited.com" target="_blank"><img src="images/spa-1.png" alt="Spa Payment Integration Systems - Web Development" width="165" height="132" class="logo-img-3"></a>
        </div>
        <div class="col-lg float-left logo-4">
          <a href="https://empire.co.ke" target="_blank"><img src="images/empire-1.png" alt="Empire IT Solutions - Web Development, Web Design by Qset" width="246" height="60" class="logo-img-4"></a>
        </div>

      </div>
      <div>
        <p class="cntct-anchr"><a id="contact" name="contact">&nbsp;</a></p>
      </div>
      <div class="contact">
        <div class="cntct-hr-cntnr"><hr class="cntct-hr"></div>
        
        <style>
          .hide { position:absolute; top:-1px; left:-1px; width:1px; height:1px; }
        </style>
        <iframe name="hiddenFrame" class="hide"></iframe>
        <form action="mail.php" method="POST" target="hiddenFrame">
          <h1 class="cntct_title">Get in touch</h1>
          <p>
            <input name="name" type="text" class="input" id="name" placeholder="Name" required>
            </p>
          <p>
            <input name="email" type="email" class="input" id="email" placeholder="Email" required>
            </p>
          <p>
            <input name="phone" type="tel" class="input" id="phone" placeholder="Phone">
            </p>
          <p>
            <textarea name="message" class="input msg" id="message" placeholder="Message" required></textarea>
          </p>
          <p>
            <input type="submit" class="submit">
          </p>
          <p class="confirmation">
            Sent. Thank you.
          </p>
        </form>
        <div class="float-left contact-info">
          <p class="email"><a href="mailto:info@qset.co.ke" class="eml">info@qset.co.ke</a></p>
          <p class="phone"><a href="tel:+254725999504" class="eml">+254 725 999504</a></p>
          <p class="phone"><a href="tel:+254726730327" class="eml">+254 726 730327</a></p>
          <p class="address">6th Floor, Senteu Plaza <br>
            Galana / Lenana Road Junction <br>
            Nairobi, Kenya</p>
        </div>
      </div> 
    </div>
  </main>
  
  <footer>
    <div class="footer-1">
    </div>
    <div class="footer-container">
      <div class="ftr-col-1"> 
        <a href="./"><img src="images/qset-logo-black-2.png" alt="Qset Logo - Website Design and Development in Nairobi" width="86" height="67" class="qset-blk"></a> 
        <p class="ftr-adrs">6th Floor, Senteu Plaza <br>
          Galana / Lenana Road Junction <br>
          Nairobi, Kenya</p>
        <a href="mailto:info@qset.co.ke" class="ftr-adrs">info@qset.co.ke</a>
        <p class="ftr-adrs">+254 725 999504</p>
        <p class="ftr-adrs">+254 726 730327</p>	
      </div>
      <div class="ftr-col-2">
        <p class="ftr-ttl">Info</p>
        <p><a href="#about" class="ftr-itm">About Us</a></p>
        <p><a href="#services" class="ftr-itm">Services</a></p>
        <p><a href="#clients" class="ftr-itm">Clients</a></p>
        <p><a href="#contact" class="ftr-itm">Contact Us</a></p> 
      </div> 
      <div class="ftr-col-3">
        <p class="ftr-ttl">Services</p>
        <p><a href="#" class="ftr-itm">Web Design</a></p>
        <p><a href="#" class="ftr-itm">App Development</a></p>
        <p><a href="#" class="ftr-itm">Software Systems</a></p>
      </div>
      <div class="ftr-col-4">
        <p class="ftr-ttl">Social</p>
        <p><a href="https://twitter.com/QSetItConsult" target="_blank" class="ftr-itm">Twitter</a></p>
        <p><a href="https://facebook.com/qset.co.ke" class="ftr-itm" target="_blank">Facebook</a></p>
        <p><a href="#" class="ftr-itm">LinekedIn</a></p>
      </div>
      <div class="ftr-cprt">          
        <p class="ftr-itm cpyrt">© 2019 Qset Ltd. Web Design and Development by Qset and <a href="https://timchege.com" target="_blank" class="ftr-itm">Tim Chege.</a></p>
    </div>
  </footer>
	
</body>
  
</html>
