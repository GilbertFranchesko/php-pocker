<?php
$pieces = explode('/', $_SERVER['REQUEST_URI']);

if ($pieces[1] == '') {
    $selected_lang = 'ua';
} else {
    $selected_lang = $pieces[1];
}

$lang = require_once $_SERVER['DOCUMENT_ROOT'] . '/lang/' . $selected_lang . '.php';
?>
<!DOCTYPE html>
<html lang="<?=$selected_lang?>">
<html>
<head>
  <meta charset="utf-8">
  <title><?=$lang['meta']['title']?></title>
  <meta content="<?=$lang['meta']['description']?>" name="description">
  <meta content="<?=$lang['meta']['og']['title']?>" property="og:title">
  <meta content="<?=$lang['meta']['og']['description']?>" property="og:description">
  <meta content="<?=$lang['meta']['twitter']['title']?>" property="twitter:title">
  <meta content="<?=$lang['meta']['twitter']['title']?>" property="twitter:description">
  <meta property="og:type" content="website">
  <meta content="summary_large_image" name="twitter:card">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="css/bootstrap.min.css?v=<?=time()?>" rel="stylesheet" type="text/css">
  <link href="css/custom.css?v=<?=time()?>" rel="stylesheet" type="text/css">
  <link href="css/responsive.css?v=<?=time()?>" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/slick.css?v=<?=time()?>">
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css?v=<?=time()?>">
  <script src="ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <script src="js/bootstrap.min.js"></script>
  <script src="js/gsap.min.js"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Stardos+Stencil:wght@700&display=swap" rel="stylesheet">

  <script src="js/bg.js"></script>
</head>

<body>
<div class="main-container">
  <canvas id="bg-animation" width="809" height="1051" class="skrollable skrollable-before"></canvas>
</div>
  <header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark " id="header_nav">
      <div class="container">
        <a class="navbar-brand" href="#">
          <h1 class="stardos_stencil">
<!--            <img src="images/logo.png" alt="" style="width: 50px;">-->

            <span>PATRIOT+NFT</span>
          </h1>
<!--          <img src="images/logo.png">-->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto mb-2 mb-lg-0 text-center">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"><?=$lang['main']?></a>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#road_map"><?=$lang['roadmap']?></a>
            </li>

          </ul>
            <?php if ($selected_lang == 'en'): ?>
                <div class="lang"><a href="/" style="color: white; text-decoration: unset">UA</a></div>
            <?php else: ?>
                <div class="lang"><a href="/en" style="color: white; text-decoration: unset">EN</a></div>
            <?php endif; ?>
        </div>
      </div>
    </nav>
  </header>

<style>
  @-webkit-keyframes zcwmini2 {
    0% {box-shadow: 0 0 8px 6px rgba(207,8,8, 0), 0 0 0 0 rgba(0,0,0,0), 0 0 0 0 rgba(207,8,8, 0);}
    10% {box-shadow: 0 0 8px 6px , 0 0 12px 10px rgba(0,0,0,0), 0 0 12px 14px ;}
    50% {box-shadow: 0 0 8px 6px rgba(207,8,8, 0), 0 0 0 40px rgba(0,0,0,0), 0 0 0 40px rgba(207,8,8, 0);}
  }
  @-moz-keyframes zcwmini2 {
    0% {box-shadow: 0 0 8px 6px rgba(207,8,8, 0), 0 0 0 0 rgba(0,0,0,0), 0 0 0 0 rgba(207,8,8, 0);}
    10% {box-shadow: 0 0 8px 6px , 0 0 12px 10px rgba(0,0,0,0), 0 0 12px 14px ;}
    50% {box-shadow: 0 0 8px 6px rgba(207,8,8, 0), 0 0 0 40px rgba(0,0,0,0), 0 0 0 40px rgba(207,8,8, 0);}
  }
  @keyframes zcwmini2 {
    0% {box-shadow: 0 0 8px 6px rgba(207,8,8, 0), 0 0 0 0 rgba(0,0,0,0), 0 0 0 0 rgba(207,8,8, 0);}
    10% {box-shadow: 0 0 8px 6px , 0 0 12px 10px rgba(0,0,0,0), 0 0 12px 14px ;}
    50% {box-shadow: 0 0 8px 6px rgba(207,8,8, 0), 0 0 0 40px rgba(0,0,0,0), 0 0 0 40px rgba(207,8,8, 0);}
  }

  .nav-link-opensea {
    position: fixed;
    right: 20px;
    bottom: 20px;
    display: block;
    z-index: 999;
  }
  .fab {
    border-radius: 100%;
    -webkit-animation: zcwmini2 3.5s 0s ease-out infinite;
    -moz-animation: zcwmini2 3.5s 0s ease-out infinite;
    animation: zcwmini2 3.5s 0s ease-out infinite;
  }
</style>
<a class="nav-link-opensea" href="https://opensea.io/collection/patriotplusnfts" target="_blank">
  <img src="images/opensea.svg" class="fab" style="width: 50px">
</a>

  <style>
    @font-face {
      font-family: 'TeXGyreSchola-Bold';
      src:url('fonts/TeXGyreSchola-Bold.ttf.woff') format('woff'),
      url('fonts/TeXGyreSchola-Bold.ttf.eot'),
      url('fonts/TeXGyreSchola-Bold.ttf.eot?#iefix') format('embedded-opentype');
      font-weight: normal;
      font-style: normal;
    }

    .button_a {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 10%;
    }

    .button_a .text_in_button {
      /*z-index: 999;*/
      /*position: absolute;*/
      /*font-family: 'TeXGyreSchola-Bold', serif;*/
      /*color: black;*/
    }

    * {
        font-family: 'TeXGyreSchola-Bold', serif !important;
    }

    .text-start {
      font-family: 'TeXGyreSchola-Bold', serif !important;
    }
    .bgdark {
      background: black;

      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      opacity: 0.5;
    }
  </style>

  <div class="" id="first_section">
<!--    <div class="bgdark"></div>-->
    <div class="row" style="max-width: 1400px; width: 100%">
      <div class="col-xl-4 col-lg-4 col-sm-6 col-6 order-lg-1 order-md-2 order-md-2  order-2" style="display: flex; align-items: center; justify-content: center; flex-direction: column">
<!--        <a href="https://discord.gg/secretkoalasociety"  target="_blank"><img class="btn-img" src="images/btn_discord.png" style="border-radius: 10px; padding: 0; margin-bottom: 30%; box-shadow: 0px 0px 5px 5px black"></a>-->
        <a class="button_a btn-outln" style="width: 209px" href="https://vm.tiktok.com/ZMLbtVagE/">
          <div class="text_in_button">TIKTOKI</div>
        </a>
        <a class="button_a btn-outln" style="width: 209px" href="https://www.youtube.com/channel/UCbMoWgmyn31O0kCZnrI_Jag">
          <div class="text_in_button">YOUTUBE</div>
        </a>
        <a class="button_a btn-outln" style="width: 209px" href="https://medium.com/@patriotplusnft/the-patriot-plus-nft-5fb380be347f">
          <div class="text_in_button">MEDIUM</div>
        </a>
      </div>

      <div class="col-xl-4 col-lg-4 col-sm-12 order-lg-2 order-md-1 order-1" style="display: flex; align-items: center; justify-content: center; flex-direction: column">
        <img src="images/gallery/main.gif" class="gifimg">
      </div>

      <div class="col-xl-4 col-lg-4 col-sm-6 col-6 order-lg-3 order-md-3 order-3" style="display: flex; align-items: center; justify-content: center; flex-direction: column">
<!--        <a href="https://twitter.com/Society_Koala" target="_blank"><img  class="btn-img" src="images/btn_twitter.png" style="border-radius: 10px; padding: 0; margin-bottom: 30%; box-shadow: 0px 0px 5px 5px black"></a>-->
        <a class="button_a btn-outln" style="width: 209px" href="https://t.me/joinchat/AAAAAFW2D1FjGjtH8odeiQ">
          <div class="text_in_button">TELEGRAM</div>
        </a>
        <a class="button_a btn-outln" style="width: 209px" href="https://twitter.com/donpatriot_news">
          <div class="text_in_button">TWITTER</div>
        </a>
        <a class="button_a btn-outln" style="width: 209px" href="https://donpatriot.news/">
          <div class="text_in_button">NEWS</div>
        </a>
      </div>
    </div>
<!--    <div class="" style="width: 100%;">-->
<!--      <div class="row m-0">-->
<!--        <div class="col-xl-3 col-lg-3 col-sm-6  ">-->
<!--          <div class="text-end btn_sx">-->
<!--            <a href="https://discord.gg/secretkoalasociety" target="_blank"><img src="images/btn_discord.png" style="border-radius: 10px; padding: 0; margin-bottom: 30%; box-shadow: 0px 0px 5px 5px black"></a>-->
<!--            <a class="button_a btn-outln" href="#nft-cards">-->
<!--              <div class="text_in_button">ПОСИЛАННЯ</div>-->
<!--            </a>-->
<!--            <a class="button_a btn-outln" href="#nft-cards">-->
<!--              <div class="text_in_button">ПОСИЛАННЯ</div>-->
<!--            </a>-->
<!--          </div>-->
<!--        </div>-->
<!--        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-10 m-auto d-none d-lg-block " style="pointer-events: none;">-->
<!--          <div class="wrap_gif text-center">-->
<!--            <div id="wrap_gif">-->
<!--              <div id="gif_img">-->
<!--                <img src="images/koalas-gif.gif">-->
<!--              </div>-->
<!--            </div>-->


<!--          </div>-->
<!--        </div>-->
<!--        <div class="col-xl-3 col-lg-3 col-sm-6 ">-->
<!--          <div class=" btn_dx ">-->
<!--            <a href="https://twitter.com/Society_Koala" target="_blank"><img src="images/btn_twitter.png" style="border-radius: 10px; padding: 0; margin-bottom: 30%; box-shadow: 0px 0px 5px 5px black"></a>-->
<!--            <a class="button_a btn-outln" href="#nft-cards">-->
<!--              <div class="text_in_button">ПОСИЛАННЯ</div>-->
<!--            </a>-->
<!--            <a class="button_a btn-outln" href="#nft-cards">-->
<!--              <div class="text_in_button">ПОСИЛАННЯ</div>-->
<!--            </a>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->

  </div>
  <a name="foo" id="nft-cards" style="scroll-margin-top:20px"></a>
  <div class="containe-fluid" id="second_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center">
          <div class="left-image">
            <br>
            <br>
            <img src="images/gallery/main.gif" alt="" width="400px">
          </div>
        </div>
        <div class="col-md-6  text-center mt-5" style="margin-top: 0 !important;">

<!--          <div class="div" style="width: 100%;">-->
<!--            <img src="images/logo.png" alt="" style="width: 50%; margin-bottom: 20px; margin-top: 20px">-->
<!--          </div>-->
          <p class="text-start">
              <?=$lang['second_section']?>
          </p>
        </div>
      </div>
    </div>
    <div id="gallery">

      <div class="variable slider">
        <div>
          <img src="images/gallery/1.jpg">
        </div>
        <div>
          <img src="images/gallery/2.jpg">
        </div>
        <div>
          <img src="images/gallery/3.jpg">
        </div>
        <div>
          <img src="images/gallery/4.jpg">
        </div>
        <div>
          <img src="images/gallery/5.png">
        </div>
        <div>
          <img src="images/gallery/6.jpg">
        </div>
        <div>
          <img src="images/gallery/7.jpg">
        </div>
        <div>
          <img src="images/gallery/8.jpg">
        </div>
        <div>
          <img src="images/gallery/9.jpg">
        </div>
        <div>
          <img src="images/gallery/10.jpg">
        </div>

      </div>

    </div>
  </div>
  
  </div>
  <a name="foo" id="roadmap" style="scroll-margin-top:-200px"></a>
  <div class="containe-fluid" id="road_map">
<!--    <img src="images/background_road_map_layer.png" style="max-width:1903px; position: absolute; bottom:0; z-index: 999;" id="overlay_five">-->
    <div id="wrap_road_map">

      <h1 align="center"  style="color: white; font-family: 'TeXGyreSchola-Bold', serif !important;text-transform: uppercase"><?=$lang['roadmap']?></h1>


      <div class="container">
        <div class="row">
          <p class="text-start" style="opacity: 0.7">
              <?=$lang['road_map_text']?>
          </p>
        </div>
      </div>





    </div>
  </div>
<br>
  <div class="containe-fluid" id="six_section">

    <div class="container">

      <div id="faq">
        <h2 class="text-center" style="font-family: 'TeXGyreSchola-Bold', serif !important;">F.A.Q.</h2>
          <?php foreach ($lang['faq'] as $faq): ?>
              <div class="square-wrapper">
                  <div class="box_faq square">
                      <h4 class="question_box_faq"><?=$faq['title']?></h4>
                      <p><?=$faq['content']?></p>
                  </div>
              </div>
          <?php endforeach; ?>
      </div>
    </div>
  </div>

  <footer>
    <div class="row m-0">
      <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 text-center align-self-end">
        <p style="padding-top: 80px;"><img src="images/logo_bw.png" style="width: 150px;"></p>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-2 col-sm-12 text-center align-self-start">

      </div>

      <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 text-start align-self-end">
        <ul id="contacts">
<!--          <li><a href="https://twitter.com/Society_Koala" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewbox="0 0 16 16">-->
<!--                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>-->
<!--              </svg> </a> </li>-->
<!--          <li><a href="https://discord.gg/secretkoalasociety" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-discord" viewbox="0 0 16 16">-->
<!--                <path d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0 8.258 8.258 0 0 0-.412-.833.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059.051.051 0 0 0-.018-.011 8.875 8.875 0 0 1-1.248-.595.05.05 0 0 1-.02-.066.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085 8.254 8.254 0 0 1-1.249.594.05.05 0 0 0-.03.03.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.235 13.235 0 0 0 4.001-2.02.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612Zm5.316 0c-.788 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612Z"></path>-->
<!--              </svg></a></li>-->
          <li>
            <a href="mailto:patriotplusnft@gmail.com">
                patriotplusnft@gmail.com
            </a>
          </li>
        </ul>

      </div>
    </div>
      <style>
          .copyr {
              display: flex;
              justify-content: center;
              font-size: 10pt;
              align-items: center;
              color: white;
          }
      </style>
      <div class="copyr">
          Розробка сайтiв - <a href="https://t.me/lexspeedkb">Олексiй Пилипенко</a> | <a href="mailto:lexspeedkb@gmail.com">lexspeedkb@gmail.com</a>
      </div>
  </footer>
  <script src="jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  <script src="js/custom.js" type="text/javascript"></script>

  <script>

    $(document).on('ready', function () {


      $('body').click(function (event) {
        console.log("sss")
        if ($(event.target).closest('.navbar').length) {
          return;
        } else {
          $('.navbar-collapse').collapse('hide');

        }
      });

      var prevScrollpos = window.pageYOffset;
      window.onscroll = function () {
      var currentScrollPos = window.pageYOffset;

      console.log(prevScrollpos +">="+ currentScrollPos)
        if (window.innerWidth > 991) {
         

        
          if (prevScrollpos > currentScrollPos) {

           
            // document.getElementById("header_nav").style.opacity = 0.0;

          } else {
            // document.getElementById("header_nav").style.display = 1
          }
          prevScrollpos = currentScrollPos;
          }
         
      }


$(window).scroll(function() {
 
	clearTimeout($.data(this, 'scrollTimer'));
	$.data(this, 'scrollTimer', setTimeout(function() {
    document.getElementById("header_nav").style.opacity = 1;
    console.log("stop");
	}, 250));
});





    });
  </script>
  <script src="jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function () {
      $(".variable").slick({
        dots: true,
        autoplay: false,
        infinite: true,

        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        focusOnSelect: true,
        focusOnChange: true,
        swipe: true,


        responsive: [
          {
            breakpoint: 1900,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 4,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
              dots: true
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: true,
              dots: true

            }
          }
        ]



      });

      backgroundAnimation()

    });
  </script>
  </div>
</body>

</html></html>