<?php require_once "header.php"; ?>

<!doctype html>
<html lang="en">

<head>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
  <style>
    .container {
      padding: 2rem 0rem;
    }

    h4 {
      margin: 2rem 0rem;
    }

    .panel {
      border-radius: 4px;
      padding: 1rem;
      margin-top: 0.2rem;
      background-color: #F5F5F5;
      color: #323B40;
    }

    .panel.panel-blue {
      background-color: #E0F5FF;
      color: #00A5FA;
    }

    .panel.panel-big-height {
      min-height: 150px;
    }

    .item {
      border-radius: 4px;
      padding: 0.5rem;
      margin: 0.2rem;
    }

    .item.item-blue {
      background-color: #B9E5FE;
      color: #00A5FA;
    }

    .item.item-green {
      background-color: #B7E0DC;
      color: #019888;
    }

    .item.item-lime {
      background-color: #C7E8C8;
      color: #42B045;
    }

    .item.item-yellow {
      background-color: #FFEEBA;
      color: #FF9901;
    }

    .item.item-pink {
      background-color: #FABAD0;
      color: #EF075F;
    }

    .item.item-red {
      background-color: #FEC9C6;
      color: #FD3D08;
    }

    .item.item-big-width {
      min-width: 380px;
    }

    h6.namy {
      display: block;
      font-size: 14px;
      color: white;
      font-weight: 500;
      margin-top: 10px;
    }
  </style>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


</head>


<section class="home_banner_area">
  <div class="banner_inner">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="banner_content">
            <h2>Verify Your <span class="orengy">Site</span> <br> Just A Moment</h2>&nbsp;
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim. sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim. sed do eiusmod tempor incididunt.</p>
            <a class="banner_btn" href="#">Get Started <i class="fa fa-star" aria-hidden="true"></i></a>
            <button type="button" class="banner_btn2" data-toggle="modal" data-target="#form">Add Your Site <i class="fa fa-plus" aria-hidden="true"></i></button>




          </div>
        </div>
        <div class="col-lg-7">
          <div class="home_left_img">
            <img class="img-fluid" src="img/banner/home-left-1.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>





<!-- Modal Work Start -->
<div class="container">

</div>

<div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel">Verify Your Site <i class="fa fa-lock" aria-hidden="true"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form  role="form" id="contactForm" class="contact-form" data-toggle="validator" class="shake">
        <div class="modal-body">
          <div class="form-group">
            <label for="email">Website Title</label>
            <input type="text" class="form-control" id="email1" name="website_title" aria-describedby="emailHelp" required>
          </div>
          <div class="form-group">
            <label for="password">Website URL</label>
            <input type="text" class="form-control" id="password1" name="website_url" required>
            <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small>
          </div>

           <div class="hid" id="iframe">
          <div class="form-group">
            <label for="email">Notik IFrame</label>
            <input type="text" readonly class="form-control" id="email1" name="website_title" aria-describedby="emailHelp" value="<?php echo htmlspecialchars('<iframe src="./frame.php" width="100%" height="500px"></iframe>',ENT_QUOTES); ?>">
          
          </div>
          <div class="form-group">
            <label for="password">Ayetstudios Iframe  </label>
            <input type="text" readonly class="form-control" id="password1" name="website_url" value="<?php echo htmlspecialchars('<iframe src="./frame2.php" width="100%" height="500px"></iframe>',ENT_QUOTES); ?>" >
            <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small>
          </div>
          </div>

        </div>


        <div class="modal-footer border-top-0 d-flex justify-content-center">
        <button type="submit" id="submit" class="btn btn-success"><i class="fa fa-check"></i> Send Message</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal Work End  -->


<section class="work_area p_120">
  <div class="container">
    <div class="main_title">
      <h2>How It work for you</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
    </div>
    <div class="work_inner row">
      <div class="col-lg-4">
        <div class="work_item">
          <i class="fa fa-lock" aria-hidden="true"></i>
          <a href="#">
            <h4>Login First </h4>
          </a>
          <p>Here, I focus on a range of items and features that we use in life without giving them a second thought such as Coca Cola.</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="work_item">
          <i class="fa fa-globe" aria-hidden="true"></i>
          <a href="#">
            <h4>Verify Your Site</h4>
          </a>
          <p>Here, I focus on a range of items and features that we use in life without giving them a second thought such as Coca Cola.</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="work_item">
          <i class="fa fa-gift" aria-hidden="true"></i>
          <a href="#">
            <h4>Get Iframe</h4>
          </a>
          <p>Here, I focus on a range of items and features that we use in life without giving them a second thought such as Coca Cola.</p>
        </div>
      </div>
    </div>
  </div>
</section>





<footer class="footer_area p_120">
  <div class="container">
    <div class="row footer_inner">
      <div class="col-lg-5 col-sm-6">
        <aside class="f_widget ab_widget">
          <div class="f_title">
            <h3>Rooms Coin</h3>
          </div>
          <p>Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills,</p>
          <p>
            Copyright &copy;<script>
              document.write(new Date().getFullYear());
            </script> All Rights Reserved 
          </p>
        </aside>
      </div>
      
      
    </div>
  </div>
</footer>



<script src="js/jquery-3.2.1.min.js"></script>
<script src="js%2c_popper.js%2bjs%2c_bootstrap.min.js%2bjs%2c_stellar.js%2bvendors%2c_lightbox%2c_simpleLightbox.min.js.pagespeed.jc.wMFXI5aMJp.js"></script>
<script>
  eval(mod_pagespeed_hPSCMQz04Q);
</script>
<script>
  eval(mod_pagespeed_dEynfrF6PB);
</script>
<script>
  eval(mod_pagespeed_Qh1qEsN16w);
</script>
<script>
  eval(mod_pagespeed_tE1ZUYlmQ$);
</script>
<script src="vendors%2c_nice-select%2c_js%2c_jquery.nice-select.min.js%2bvendors%2c_isotope%2c_imagesloaded.pkgd.min.js%2bvendors%2c_isotope%2c_isotope-min.js%2bvendors%2c_owl-carousel%2c_owl.carous"></script>
<script>
  eval(mod_pagespeed_ZV1e5V6efh);
</script>
<script>
  eval(mod_pagespeed_EQ7McAL6uC);
</script>
<script>
  eval(mod_pagespeed_DzxxJU0jd3);
</script>
<script>
  eval(mod_pagespeed_D57aU6YYWR);
</script>
<script>
  eval(mod_pagespeed_3nAvbTOIHK);
</script>
<script src="vendors%2c_counter-up%2c_jquery.waypoints.min.js%2bvendors%2c_counter-up%2c_jquery.counterup.min.js%2bjs%2c_mail-script.js.pagespeed.jc.wnRGUTgTL3.js"></script>
<script>
  eval(mod_pagespeed_ZPaeKt6mkr);
</script>
<script>
  eval(mod_pagespeed_MUx66uz6Gc);
</script>
<script>
  eval(mod_pagespeed_unLYXUxN7S);
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="js/gmaps.min.js"></script>
<script src="js/theme.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"725e6907fca4b7df","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.6.0","si":100}' crossorigin="anonymous"></script>
<script type="text/javascript">

  $(document).ready(function() {



      $('#submit').click(function(e){

        e.preventDefault();
        var x =document.getElementById("iframe");
        var url = $("#email1").val();
        var password = $("#password1").val();
        $.ajax({

            type: "POST",

            url: "./data.php",

            dataType: "json",

            data: {url:url, password:password},

            success : function(data){
            
                if (data.code == "200"){

                    // alert("Hooray !  " +data.msg);
                    
                    x.style.display="block";

                } else {
                  alert("Invalid Data: " +data.msg);
                  x.style.display="none";

                }

            }

        });



      });

  });

</script>

</body>

<!-- Mirrored from preview.colorlib.com/theme/nexus/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Jul 2022 07:33:16 GMT -->

</html>