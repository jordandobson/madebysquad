<?php
include("_site/php/mailinglist.inc.php");

  $S_Email = $_POST["email"];
  $S_Message = "";
  $S_Result = "";
  
  $S_Error = "<strong>&larr;</strong>
                    <em>
                      <b>OOPS!</b>
                      <i>Invalid Email Address.</i>
                      <small>Please try again.</small>

                    </em>";
                    
  $S_Valid = "<strong>&larr;</strong>
                        <em>
                        <b>Thank You</b>
                        <i>for joining!</i>
                      </em>";
  
  if ($S_Email) {
    $S_Result = AddToList($S_Email);
    
    if ($S_Result == "good") {
      $S_Message = $S_Valid;
    } else {
      $S_Message = $S_Error;
    }
    
  } else if ($_POST) {
    $S_Message = $S_Error;
  }
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>

    <!-- Copyright 2008 The Squad -->
    <!-- All rights reserved, all code & design copyrighted. -->
    <!-- Development, design, HTML, CSS and JS made by Squad http://www.madebysquad.com -->
    <!-- Built & Designed By Andrew Kelly, Jordan Dobson & Brian Harper with Assistance from Phil Tapia -->

    <!-- ADD - IPhone CSS <link media="only screen and (max-device-width: 480px)" href="iphone.css" type="text/css" rel="stylesheet" /> -->
    <!-- ADD - Handheld CSS -->
    <!-- ADD - IPhone Layout Controls -->

    <link rel="icon" type="image/x-icon" href="/favicon.ico" />
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />    
    <link href="http://squad.gluenow.com/news/rss?ver=1" rel="alternate" title="RSS | Project Feed " type="application/rss+xml" />


    <title>THE SQUAD | Branding + Web + Design + Print + Motion | SINCE 2002</title>
    <link rel="stylesheet" href="/_site/css/screen.css" type="text/css" media="screen" />

    <!--[if lt IE 7]><link href="/_site/css/ie.css" media="all" rel="stylesheet" /><![endif]-->
    <!--[if gte IE 7]><link href="/_site/css/ie7.css" media="all" rel="stylesheet" /><![endif]-->

    <noscript><link rel="stylesheet" href="/_site/css/noscript.css" type="text/css" media="screen" /></noscript>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Squad Creative Design & Development Since 2002. Creators of Glue and MerchSquad. Located in Seattle, Washington USA." />
    <meta name="keywords" content="Made By Squad, Squad Studios, Squad, Glue, MerchSquad, Design, Development, Branding, Web, Print, Flash, Motion, Graphics, Simplicity, Creative, Marketing, Seattle, WA" />
    <meta name="DC.creator" content="Made By Squad - http://www.madebysquad.com" />
    <meta name="DC.subject" content="Creative Design and Development" />
    <meta name="author" content="The Squad" />
    <meta http-equiv="Cache-Control" content="Public" />
    <meta http-equiv="Pragma" content="Public" />
    <meta name="robots" content="index,follow" />
    <meta name="revisit-after" content="3 days" />
    <meta name="company" content="Squad" />
    <meta http-equiv="imagetoolbar" content="no" />
	
    <script src="/_site/js/adddomloadevent.js" type="text/javascript"></script>
    <script src="/_site/js/global.js" type="text/javascript"></script>
    <script src="/_site/js/mailinglist.js" type="text/javascript"></script>
  </head>
  <body>
    <div id="wrapper">
      <h1><a href="#/About" title="Learn more about The Squad" id="logo">The Squad</a></h1>
      <hr size="1" />
      <ul id="projects">
          <li id="/Project/ClubPop">
              <h2><a href="#/Project/ClubPop" class=""><strong>Pop</strong><small><em> Show Poster Design <b>&#9660;</b></em></small></a></h2>
              <p><span><img src="/_site/sample/1-squad-pop-shout.jpg" width="335" height="525" alt="Made By Squad | POP | Shout Out Poster" border="0" /><img src="/_site/sample/2-squad-pop-glass-candy.jpg" width="335" height="525" alt="Made By Squad | POP | Glass Candy Poster" border="0" /><img src="/_site/sample/3-squad-pop-raz-rez.jpg" width="335" height="525" alt="Made By Squad | POP | RAZ REZ Poster" border="0" /><img src="/_site/sample/4-squad-pop-vhs-or-beta.jpg" width="335" height="525" alt="Made By Squad | POP | VHS or Beta Poster" border="0" /></span></p><hr size="1" />
          </li>
          <li id="/Project/Barcelona">
              <h2><a href="#/Project/Barcelona" class=""><strong>Barcelona</strong><small><em> Branding + Photography + Packaging + Website + More <b>&#9660;</b></em></small></a></h2>
              <p><span><img src="/_site/sample/1-squad-barcelona-cover.jpg" width="680" height="332" alt="Made By Squad | Barcelona | Album Cover" border="0" /><img src="/_site/sample/2-squad-barcelona-polaroid1.jpg" width="335" height="343" alt="Made By Squad | Barcelona | Artist Polaroid Photography" border="0" /><img src="/_site/sample/3-squad-barcelona-polaroid2.jpg" width="335" height="343" alt="Made By Squad | Barcelona | Artist Polaroid Photography" border="0" /><img src="/_site/sample/4-squad-barcelona-booklet.jpg" width="680" height="332" alt="Made By Squad | Barcelona | Album Packaging Booklet" border="0" /><img src="/_site/sample/5-squad-barcelona-polaroid3.jpg" width="680" height="332" alt="Made By Squad | Barcelona | Artist Polaroid Photography" border="0" /><img src="/_site/sample/6-squad-barcelona-site-home.jpg" width="680" height="567" alt="Made By Squad | Barcelona | Artist Home Page Web Design" border="0" /><img src="/_site/sample/7-squad-barcelona-site-download.jpg" width="680" height="431" alt="Made By Squad | Barcelona | Hidden / Secret Download Page" border="0" /><img src="/_site/sample/8-squad-barcelona-myspace.jpg" width="680" height="463" alt="Made By Squad | Barcelona | Myspace Design" border="0" /></span></p><hr size="1" />
          </li>
          <li id="/Project/WestAspen">
              <h2><a href="#/Project/WestAspen" class=""><strong>West Aspen Merch</strong><small><em> E-Store + Backend <b>&#9660;</b></em></small></a></h2>
              <p><span><img src="http://madebysquad.com/_site/sample/1-squad-westaspen-detail.jpg" width="680" height="580" alt="Made By Squad | West Aspen Merch | Ecommerce Store Product Detail Page" border="0" hspace="5" vspace="5" /><img src="http://madebysquad.com/_site/sample/2-squad-westaspen-skin1.jpg" width="335" height="335" alt="Made By Squad | West Aspen Merch | Ecommerce Multiple Artist Store Home Page" border="0" hspace="5" vspace="5" /><img src="http://madebysquad.com/_site/sample/3-squad-westaspen-skin2.jpg" width="335" height="335" alt="Made By Squad | West Aspen Merch | Direve Thru Records Store Skin" border="0" hspace="5" vspace="5" /><img src="http://madebysquad.com/_site/sample/4-squad-westaspen-skin3.jpg" width="335" height="335" alt="Made By Squad | West Aspen Merch | Artist Store Add to Cart Page" border="0" hspace="5" vspace="5" /><img src="http://madebysquad.com/_site/sample/5-squad-westaspen-tabs.jpg" width="335" height="335" alt="Made By Squad | West Aspen Merch | E-commerce Store Navigation + Cart Close Up" border="0" hspace="5" vspace="5" /><img src="http://madebysquad.com/_site/sample/6-squad-westaspen-cart.jpg"; width="680" height="580" alt="Made By Squad | West Aspen Merch | Multi Artist Store Cart Listing Page" border="0" hspace="5" vspace="5" /></span></p><hr size="1" />
          </li>
          <li id="/Project/KingsRoad">
              <h2><a href="#/Project/KingsRoad" class=""><strong>Epitaph + KingsRoad</strong><small><em> E-Store + Backend <b>&#9660;</b></em></small></a></h2>
              <p><span><img src="/_site/sample/1-squad-kingsroad-artist.jpg" width="680" height="490" alt="Made by Squad | Kings Road + Epitaph | Artist Store Page" border="0" /><img src="/_site/sample/2-squad-kingsroad-artistdetail.jpg" width="680" height="515" alt="Made by Squad | Kings Road + Epitaph | Artist Store Product Detail Page" border="0" /><img src="/_site/sample/3-squad-kingsroad-cart-shipping.jpg" width="335" height="460" alt="Made by Squad | Kings Road + Epitaph | Store Multi-Artist Cart and Shipping Info Page" border="0" /><img src="/_site/sample/4-squad-kingsroad-checkout.jpg" width="335" height="460" alt="Made by Squad | Kings Road + Epitaph | Store Checkout Billing Info Page" border="0" /></span></p><hr size="1" />
          </li>
          <li id="/Project/JohnMayer">
              <h2><a href="#/Project/JohnMayer" class=""><strong>John Mayer + Clear</strong><small><em> Tour Website +  Mobile Voting <b>&#9660;</b></em></small></a></h2>
              <p><span><img src="/_site/sample/1-squad-mayer-dates.jpg" width="335" height="535" alt="Made By Squad | John Mayer | Artist iPhone Tour Dates Home Page" border="0" /><img src="/_site/sample/2-squad-mayer-vote.jpg" width="335" height="535" alt="Made By Squad | John Mayer | Artist iPhone Encore Mobile Voting Page" border="0" /><img src="/_site/sample/3-squad-mayer-map.jpg" width="335" height="500" alt="Made By Squad | John Mayer | Artist Tour Website Home Page" border="0" /><img src="/_site/sample/4-squad-mayer-mapdetail.jpg" width="335" height="500" alt="Made By Squad | John Mayer | Artist Tour Site Detail Page" border="0" /></span></p><hr size="1" />
          </li>
          <li id="/Project/AnberlinVideoPostcard">
              <h2><a href="#/Project/AnberlinVideoPostcard" class=""><strong>Anberlin</strong><small><em> Flash Video Postcard <b>&#9660;</b></em></small></a></h2>
              <p><span><img src="/_site/sample/1-squad-anberlin-vp-postcards.jpg" width="680" height="332" alt="Made By Squad | Anberlin | Viral Video Postcard Backgrounds" border="0" /><img src="/_site/sample/2-squad-anberlin-vp-intro.jpg" width="680" height="332" alt="Made By Squad | Anberlin | Viral Webcam Video Postcard Menu" border="0" /><img src="/_site/sample/3-squad-anberlin-vp-cityselect.jpg" width="335" height="211" alt="Made By Squad | Anberlin | Viral Webcam Video Postcard Options" border="0" /><img src="/_site/sample/4-squad-anberlin-vp-recording.jpg" width="335" height="211" alt="Made By Squad | Anberlin | Viral Webcam Video Postcard Recording Page" border="0" /><img src="/_site/sample/5-squad-anberlin-vp-review.jpg" width="335" height="211" alt="Made By Squad | Anberlin | Viral Webcam Video Postcard Review Page" border="0" /><img src="/_site/sample/6-squad-anberlin-vp-sendit.jpg" width="335" height="211" alt="Made By Squad | Anberlin | Viral Webcam Video Postcard Email Share Form Page" border="0" /><img src="/_site/sample/7-squad-anberlin-vp-embed.jpg" width="680" height="370" alt="Made By Squad | Anberlin | Viral Webcam Video Postcard Social Embed Code Page" border="0" /></span></p><hr size="1" />
            </li>
          <li id="/Project/EDOC">
              <h2><a href="#/Project/EDOC" class=""><strong>EDOC</strong><small><em> Flash Website + Marketing + Consulting <b>&#9660;</b></em></small></a></h2>
              <p><span><img src="/_site/sample/1-squad-edoc-home.jpg" width="680" height="450" alt="Made By Squad | EDOC | Flash Experimental Clothing Store" border="0" /><img src="/_site/sample/2-squad-edoc-apparel.jpg" width="335" height="222" alt="Made By Squad | EDOC | Flash Experimental Clothing Store Apparel Listing Page" border="0" /><img src="/_site/sample/3-squad-edoc-appareldetail.jpg" width="335" height="222" alt="Made By Squad | EDOC | Flash Experimental Clothing Store Apparel Item Detail Page" border="0" /><img src="/_site/sample/4-squad-edoc-secret.jpg" width="680" height="450" alt="Made By Squad | EDOC | Flash Motion Animation Secret Code Page Still 1" border="0" /><img src="/_site/sample/5-squad-edoc-secret2.jpg" width="335" height="222" alt="Made By Squad | EDOC | Flash Motion Animation Secret Code Page Still 2" border="0" /><img src="/_site/sample/6-squad-edoc-secret3.jpg" width="335" height="222" alt="Made By Squad | EDOC | Flash Motion Animation Secret Code Page Still 2" border="0" /></span></p><hr size="1" />
            </li>
          <li id="/Project/Instruction">
              <h2><a href="#/Project/Instruction" class=""><strong>Geffen + Instruction</strong><small><em> Motion + Television Commercial <b>&#9660;</b></em></small></a></h2>
              <p><span><img src="/_site/sample/1-squad-instruction-1.jpg" width="335" height="223" alt="Made By Squad | Geffen + Instruction | Motion Graphics TV Commercial Spot Still 1" border="0" /><img src="/_site/sample/2-squad-instruction-2.jpg" width="335" height="223" alt="Made By Squad | Geffen + Instruction | Motion Graphics TV Commercial Spot Still 2" border="0" /><img src="/_site/sample/3-squad-instruction-3.jpg" width="335" height="223" alt="Made By Squad | Geffen + Instruction | Motion Graphics TV Commercial Spot Still 3" border="0" /><img src="/_site/sample/4-squad-instruction-4.jpg" width="335" height="223" alt="Made By Squad | Geffen + Instruction | Motion Graphics TV Commercial Spot Still 4" border="0" /><img src="/_site/sample/5-squad-instruction-5.jpg" width="220" height="146" alt="Made By Squad | Geffen + Instruction | Motion Graphics TV Commercial Spot Still 5" border="0" /><img src="/_site/sample/6-squad-instruction-6.jpg" width="220" height="146" alt="Made By Squad | Geffen + Instruction | Motion Graphics TV Commercial Spot Still 6" border="0" /><img src="/_site/sample/7-squad-instruction-7.jpg" width="220" height="146" alt="Made By Squad | Geffen + Instruction | Motion Graphics TV Commercial Spot Still 7" border="0" /><img src="/_site/sample/8-squad-instruction-8.jpg" width="220" height="146" alt="Made By Squad | Geffen + Instruction | Motion Graphics TV Commercial Spot Still 8" border="0" /><img src="/_site/sample/9-squad-instruction-9.jpg" width="220" height="146" alt="Made By Squad | Geffen + Instruction | Motion Graphics TV Commercial Spot Still 9" border="0" /><img src="/_site/sample/10-squad-instruction-10.jpg" width="220" height="146" alt="Made By Squad | Geffen + Instruction | Motion Graphics TV Commercial Spot Still 10" border="0" /></span></p><hr size="1" />
            </li>
          <li id="/Project/Anberlin">
              <h2><a href="#/Project/Anberlin" class=""><strong>Anberlin &ldquo;Cities&rdquo;</strong><small><em> Album Website <b>&#9660;</b></em></small></a></h2>
              <p><span><img src="/_site/sample/1-squad-anberlin-nav.jpg" width="680" height="414" alt="Made By Squad | Anberlin | Experimental Flash Album Site Menu" border="0" /><img src="/_site/sample/2-squad-anberlin-navday.jpg" width="335" height="204" alt="Made By Squad | Anberlin | Experimental Flash Album Site Menu Day View" border="0" /><img src="/_site/sample/3-squad-anberlin-navnight.jpg" width="335" height="204" alt="Made By Squad | Anberlin | Experimental Flash Album Site Menu Night View" border="0" /><img src="/_site/sample/4-squad-anberlin-section.jpg" width="335" height="204" alt="Made By Squad | Anberlin | Experimental Flash Album Site Menu Wallpaper Section" border="0" /><img src="/_site/sample/5-squad-anberlin-zoom.jpg" width="335" height="204" alt="Made By Squad | Anberlin | Experimental Flash Album Site Menu Section Zoom" border="0" /><img src="/_site/sample/6-squad-anberlin-secret.jpg" width="680" height="414" alt="Made By Squad | Anberlin | Experimental Flash Album Site Menu Secret Section" border="0" /><img src="/_site/sample/7-squad-anberlin-passport.jpg" width="335" height="174" alt="Made By Squad | Anberlin | Experimental Flash Album Site Passport Stamp Menu" border="0" /><img src="/_site/sample/8-squad-anberlin-passportpage.jpg" width="335" height="174" alt="Made By Squad | Anberlin | Experimental Flash Album Site Passport Page Animation" border="0" /></span></p><hr size="1" />
            </li>
          <li id="/Project/JeremyEnigk">
              <h2><a href="#/Project/JeremyEnigk" class=""><strong>Jeremy Enigk</strong><small><em> Branding + Packaging + Clothing <b>&#9660;</b></em></small></a></h2>
              <p><span><img src="/_site/sample/1-squad-enigk-cover.jpg" width="680" height="333" alt="Made By Squad | Jeremy Enigk | World Waits Album Cover Design" border="0" /><img src="/_site/sample/2-squad-enigk-digipack.jpg" width="680" height="321" alt="Made By Squad | Jeremy Enigk | World Waits Album Design of Digipak Inside Cover" border="0" /><img src="/_site/sample/3-squad-enigk-booklet.jpg" width="680" height="177" alt="Made By Squad | Jeremy Enigk | World Waits Album Booklet Design" border="0" /><img src="/_site/sample/4-squad-enigk-merchdetail.jpg" width="335" height="266" alt="Made By Squad | Jeremy Enigk | World Waits Shirt Merch Design Detail" border="0" /><img src="/_site/sample/5-squad-enigk-merch.jpg" width="335" height="266" alt="Made By Squad | Jeremy Enigk | World Waits Clothing Design Sample" border="0" /></span></p><hr size="1" />
            </li>
          <li id="/Project/Mae">
              <h2><a href="#/Project/Mae" class=""><strong>Mae &ldquo;The Everglow&rdquo;</strong><small><em> Game Album Website <b>&#9660;</b></em></small></a></h2>
              <p><span><img src="/_site/sample/1-squad-mae-interface.jpg" width="680" height="564" alt="Made By Squad | Mae | The Everglow Viral Album Site Flash Game Design" border="0" /><img src="/_site/sample/2-squad-mae-matchinggame.jpg" width="335" height="150" alt="Made By Squad | Mae | The Everglow Viral Album Site Flash Matching Game" border="0" /><img src="/_site/sample/3-squad-mae-puzzlegame.jpg" width="335" height="150" alt="Made By Squad | Mae | The Everglow Viral Album Site Flash Puzzle Game" border="0" /><img src="/_site/sample/4-squad-mae-theocean.jpg" width="680" height="306" alt="Made By Squad | Mae | The Everglow Viral Album Site Flash Intro Screen" border="0" /><img src="/_site/sample/5-squad-mae-theoceangame.jpg" width="680" height="306" alt="Made By Squad | Mae | The Everglow Viral Album Site Whale Flash Driving Game Design" border="0" /><img src="/_site/sample/6-squad-mae-suitcase.jpg" width="680" height="306" alt="Made By Squad | Mae | The Everglow Viral Album Site Flash Reward Suitcase Menu" border="0" /><img src="/_site/sample/7-squad-mae-makingof.jpg" width="335" height="150" alt="Made By Squad | Mae | The Everglow Viral Album Site Flash Video Reward Page" border="0" /><img src="/_site/sample/8-squad-mae-weresofar.jpg" width="335" height="150" alt="Made By Squad | Mae | The Everglow Viral Album Site Flash Game Loading Screen" border="0" /><img src="/_site/sample/9-squad-mae-everglow.jpg" width="680" height="306" alt="Made By Squad | Mae | The Everglow Viral Album Site Discovery Flash Based Experience" border="0" /></span></p><hr size="1" />
            </li>
          <li id="/Project/FurtherSeemsForever">
              <h2><a href="#/Project/FurtherSeemsForever" class=""><strong>Further Seems Forever</strong><small><em> Motion + Television Commercial <b>&#9660;</b></em></small></a></h2>
              <p><span><img src="/_site/sample/1-squad-fsf-1.jpg" width="335" height="224" alt="Made By Squad | Further Seems Forever | Hide Nothing Album Commercial + Motion Graphics Design Still 1" border="0" /><img src="/_site/sample/2-squad-fsf-2.jpg" width="335" height="224" alt="Made By Squad | Further Seems Forever | Hide Nothing Album Commercial + Motion Graphics Design Still 2" border="0" /><img src="/_site/sample/3-squad-fsf-3.jpg" width="335" height="224" alt="Made By Squad | Further Seems Forever | Hide Nothing Album Commercial + Motion Graphics Design Still 3" border="0" /><img src="/_site/sample/4-squad-fsf-4.jpg" width="335" height="224" alt="Made By Squad | Further Seems Forever | Hide Nothing Album Commercial + Motion Graphics Design Still 4" border="0" /><img src="/_site/sample/5-squad-fsf-5.jpg" width="335" height="224" alt="Made By Squad | Further Seems Forever | Hide Nothing Album Commercial + Motion Graphics Design Still 5" border="0" /><img src="/_site/sample/6-squad-fsf-6.jpg" width="335" height="224" alt="Made By Squad | Further Seems Forever | Hide Nothing Album Commercial + Motion Graphics Design Still 6" border="0" /></span></p><hr size="1" />
            </li>
          <li id="/Project/AndrewFreedman">
              <h2><a href="#/Project/AndrewFreedman" class=""><strong>Andrew E. Freedman</strong><small><em> Identity + Branding + Website <b>&#9660;</b></em></small></a></h2>
              <p><span><img src="/_site/sample/1-squad-aef-thankyou.jpg" width="680" height="360" alt="Made By Squad | Andrew Freedman | Public Relations Web Design Thank You Intro" border="0" /><img src="/_site/sample/2-squad-aef-home.jpg" width="680" height="484" alt="Made By Squad | Andrew Freedman | Public Relations Web Design Home Page" border="0" /><img src="/_site/sample/3-squad-aef-clients.jpg" width="680" height="484" alt="Made By Squad | Andrew Freedman | Public Relations Web Design Clients Page" border="0" /></span></p><hr size="1" />
            </li>
          <li id="/Project/Underoath">
              <h2><a href="#/Project/Underoath" class=""><strong>underØATH</strong><small><em> Motion + Album Website + Ecard <b>&#9660;</b></em></small></a></h2>
              <p><span><img src="/_site/sample/1-squad-underoath-home.jpg" width="680" height="460" alt="Made By Squad | Underoath | Chasing Safety Flash Album Site Design Home Page" border="0" /><img src="/_site/sample/2-squad-underoath-intro-eye.jpg" width="335" height="350" alt="Made By Squad | Underoath | Chasing Safety Flash Album Site Design Intro Animation Still 1" border="0" /><img src="/_site/sample/3-squad-underoath-intro-bottle.jpg" width="335" height="350" alt="Made By Squad | Underoath | Chasing Safety Flash Album Site Design Intro Animation Still 2" border="0" /><img src="/_site/sample/4-squad-underoath-intro-hand.jpg" width="220" height="220" alt="Made By Squad | Underoath | Chasing Safety Flash Album Site Design Intro Animation Still 3" border="0" /><img src="/_site/sample/5-squad-underoath-intro-needle.jpg" width="220" height="220" alt="Made By Squad | Underoath | Chasing Safety Flash Album Site Design Intro Animation Still 4" border="0" /><img src="/_site/sample/6-squad-underoath-intro-three-needles.jpg" width="220" height="220" alt="Made By Squad | Underoath | Chasing Safety Flash Album Site Design Intro Animation Still 5" border="0" /><img src="/_site/sample/7-squad-underoath-intro-v2.jpg" width="335" height="335" alt="Made By Squad | Underoath | Chasing Safety Flash Viral Ecard Design Intro Screen" border="0" /><img src="/_site/sample/8-squad-underoath-intro-v2-face.jpg" width="335" height="335" alt="Made By Squad | Underoath | Chasing Safety Viral Flash Ecard Design Intro Motion Still 1" border="0" /><img src="/_site/sample/9-squad-underoath-intro-v2-stage.jpg" width="335" height="335" alt="Made By Squad | Underoath | Chasing Safety Viral Flash Ecard Design Intro Motion Still 1" border="0" /><img src="/_site/sample/10-squad-underoath-menu-v2.jpg" width="335" height="335" alt="Made By Squad | Underoath | Chasing Safety Viral Flash Ecard Design Menu" border="0" /></span>
</p><hr size="1" />
            </li>
          <li id="/Project/ReelBigFish">
              <h2><a href="#/Project/ReelBigFish" class=""><strong>Reel Big Fish + Zolof The Rock And Roll Destroyer</strong><small><em> Album Packaging <b>&#9660;</b></em></small></a></h2>
              <p><span><img src="/_site/sample/1-squad-RBF-cover.jpg" width="680" height="330" alt="Made By Squad | Reel Big Fish | Album Cover Design" border="0" /><img src="/_site/sample/2-squad-RBF-coverback.jpg" width="680" height="284" alt="Made By Squad | Reel Big Fish | Album Cover + Tray Card Design" border="0" /><img src="/_site/sample/3-squad-RBF-type.jpg" width="680" height="330" alt="Made By Squad | Reel Big Fish | Album Cover Type Specimen" border="0" /><img src="/_site/sample/4-squad-RBF-cd.jpg" width="680" height="314" alt="Made By Squad | Reel Big Fish | Album Insert + CD Design" border="0" /></span></p><hr size="1" />
            </li>
          <li id="/Project/ShirtDesigns">
              <h2><a href="#/Project/ShirtDesigns" class=""><strong>Various Shirts</strong><small><em> Merchandise Design <b>&#9660;</b></em></small></a></h2>
              <p><span><img src="/_site/sample/1-squad-shirts-carlcartee.jpg" width="335" height="420" alt="Made By Squad | Car Cartee | Merch Clothing Shirt Design" border="0" /><img src="/_site/sample/2-squad-shirts-themaine.jpg" width="335" height="420" alt="Made By Squad | The Maine | Merch Clothing Shirt Design" border="0" /><img src="/_site/sample/3-squad-shirts-AARfront.jpg" width="335" height="420" alt="Made By Squad | All American Rejects | Merch Clothing Shirt Design" border="0" /><img src="/_site/sample/4-squad-shirts-AARback.jpg" width="335" height="420" alt="Made By Squad | All American Rejects | Merch Clothing Shirt Design" border="0" /><img src="/_site/sample/5-squad-shirts-money.jpg" width="335" height="420" alt="Made By Squad | Legal Tinder | Merch Clothing Shirt Design" border="0" /><img src="/_site/sample/6-squad-shirts-acceptance.jpg" width="335" height="420" alt="Made By Squad | Acceptance | Clothing Merch Shirt Design" border="0" /><img src="/_site/sample/7-squad-shirts-enigk.jpg" width="335" height="420" alt="Made By Squad | Jeremy Enigk | Shirt Clothing Merch Design" border="0" /><img src="/_site/sample/8-squad-shirts-panic.jpg" width="335" height="420" alt="Made By Squad | Panic At The Disco | Shirt Clothing Merch Design" border="0" /></span></p><hr size="1" />
          </li>
          <li id="/About" class="more">
          <h2>
             <a href="#/About" class=""><strong><span>More About Squad</span></strong></a>
          </h2>
          <div id="moreinfo">            
            <dl id="about">
              <dt><strong>Since 2002</strong></dt><dd><p>We thrive on <i>Creative Solutions</i> by crafting intelligent interactive experiences, viral web campaigns, beautiful print designs and comprehensive brand identities. Our other sites and services include<span>:</span></p></dd><dd><ul><li id="glue"><a href="http://GlueNow.com/" title="Our Simple Web &amp; Mobile Content Publishing Tool" target="_glue">Glue</a></li><li id="merchsquad"><a href="http://MerchSquad.com/" title="Our Simple E-Commerce Stores" target="_merchsquad">MerchSquad</a></li><li id="blog"><a href="http://SquadBlog.com/" title="Daily Posts from The Squad" target="_blog">SquadBlog</a></li><li id="twitter"><a href="http://SquadBlog.com/" title="Read Twitter Posts from The Squad" target="_twitter">Twitter</a></li></ul></dd>
              <hr size="1" />
            </dl>
            <dl id="contact" class="vcard">
              <dt><strong><span>Contact </span><a href="http://feeds.technorati.com/contacts/http://madebysquad.com/" title="Add to Your Address Book">vCard</a></strong></dt>
              <dd class="hide"><p><img src="http://madebysquad.com/_site/img/vCard_Logo.jpg" class="photo" width="50" height="50" alt="Squad VCard Logo" /><br/> <a href="http://MadeBySquad.com" class="url fn org"><b>Squad</b></a><br/><i class="title hide">Branding, Web, Design, Print &amp; Motion</i></p></dd>
              <dd class="tel"><u class="type">Phone</u> <em class="value">(206) 622-0408</em></dd>
              <dd class="email"><u class="type">Email</u> <a href="mailto:hello@madebysquad.com" title="Say hello!" class="value"><b><i>hello</i>@MadeBySquad.com</b></a></dd>
              <dd class="hide"><p class="adr"><u class="type hide">Work</u> <a href="http://maps.google.com/maps?f=q&hl=en&geocode=&q=Made+By+Squad&sll=47.601792,-122.299582&sspn=0.001134,0.00235&ie=UTF8&t=h&z=19&iwloc=A" title="Map to the Squad" target="_blank"><span class="street-address">2508-B E Yesler Way </span><br/><span class="locality">Seattle</span>, <abbr title="Washington" class="region">WA</abbr> <span class="postal-code">98122</span> &nbsp;&nbsp;&nbsp; <span class="country-name hide">USA</span></a></p></dd>
              <dd><form action="/#alert" method="post" id="alert" <?php echo ($S_Result == "good" ? "class=\"success\"" : "class=\"error\""); ?>><br /><input id="email" type="text" class="" name="email" value="Join Our Email List" /><input id="submit" type="submit" value="+" /><span id="alert_msg"><?php echo ($S_Message ? $S_Message : ""); ?></span></form></dd>
              <hr size="1" />
            </dl>
            <dl id="clients">
              <dt><strong>Our Clients</strong></dt>
              <dd><p>Here are a few clients we've done work for over the years.</p></dd>
              <dd>
                <ul>
                  <li>Capital One</li>
                  <li>Columbia Records</li>
                  <li>Chase Bank</li>
                  <li>EMI</li>
                  <li>Epic Records</li>
                  <li>Epitaph Records</li>
                  <li>Fueled by Ramen Records</li>
                  <li>Geffen Records</li>
                  <li>Hopeless Records</li>
                  <li>Interscope Records</li>
                  <li>Island Records</li>
                  <li>John Mellencamp</li>
                  <li>Lindsey Buckingham</li>
                  <li>Madonna</li>
                  <li>Microsoft</li>
                  <li>RDF USA</li>
                  <li>SmartPunk</li>
                  <li>Sony BMG</li>
                  <li>Starbucks</li>
                  <li>Suretone Records</li>
                  <li>Tooth & Nail Records</li>
                  <li>Warner Bros</li>
                </ul>
              </dd>
              <hr size="1" />
            </dl>
          </div>
        </li>
      </ul>
    </div>
	<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
	<script type="text/javascript"> _uacct = "UA-76392-2"; urchinTracker();</script>
  <script type="text/javascript" src="http://include.reinvigorate.net/re_.js"></script>
	<script type="text/javascript">re_("20l82-k327uj6h7h");</script>
  </body>
</html>