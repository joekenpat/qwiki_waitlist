<?php
//Load Composer's autoloader
require '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable("../");
$dotenv->load();
$dotenv->required(['APP_URL']);

?>
<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <title>Welcome to Qwiki!</title>

  <style>
    body {
      margin: 0;
      padding: 0;
      -webkit-text-size-adjust: none;
      -ms-text-size-adjust: none;
    }

    img {
      line-height: 100%;
      outline: none;
      text-decoration: none;
      -ms-interpolation-mode: bicubic;
    }

    a img {
      border: none;
    }

    #backgroundTable {
      margin: 0;
      padding: 0;
      width: 100% !important;
    }

    a,
    a:link {
      color: #2A5DB0;
      text-decoration: underline;
    }

    table td {
      border-collapse: collapse;
    }

    span {
      color: inherit;
      border-bottom: none;
    }

    span:hover {
      background-color: transparent;
    }
  </style>

  <style>
    .scalable-image img {
      max-width: 100% !important;
      height: auto !important
    }

    .button a {
      transition: background-color .25s, border-color .25s
    }

    .button a:hover {
      background-color: #e1e1e1 !important;
      border-color: #0976a5 !important
    }

    @media only screen and (max-width: 400px) {
      .preheader {
        font-size: 12px !important;
        text-align: center !important
      }

      .header--white {
        text-align: center
      }

      .header--white .header__logo {
        display: block;
        margin: 0 auto;
        width: 118px !important;
        height: auto !important
      }

      .header--left .header__logo {
        display: block;
        width: 118px !important;
        height: auto !important
      }
    }

    @media screen and (-webkit-device-pixel-ratio),
    screen and (-moz-device-pixel-ratio) {

      .sub-story__image,
      .sub-story__content {
        display: block !important
      }

      .sub-story__image {
        float: left !important;
        width: 200px
      }

      .sub-story__content {
        margin-top: 30px !important;
        margin-left: 200px !important
      }
    }

    @media only screen and (max-width: 550px) {
      .sub-story__inner {
        padding-left: 30px !important
      }

      .sub-story__image,
      .sub-story__content {
        margin: 0 auto !important;
        float: none !important;
        text-align: center
      }

      .sub-story .button {
        padding-left: 0 !important
      }
    }

    @media only screen and (max-width: 400px) {

      .featured-story--top table,
      .featured-story--top td {
        text-align: left
      }

      .featured-story--top__heading td,
      .sub-story__heading td {
        font-size: 18px !important
      }

      .featured-story--bottom:nth-child(2) .featured-story--bottom__inner {
        padding-top: 10px !important
      }

      .featured-story--bottom__inner {
        padding-top: 20px !important
      }

      .featured-story--bottom__heading td {
        font-size: 28px !important;
        line-height: 32px !important
      }

      .featured-story__copy td,
      .sub-story__copy td {
        font-size: 14px !important;
        line-height: 20px !important
      }

      .sub-story table,
      .sub-story td {
        text-align: center
      }

      .sub-story__hero img {
        width: 100px !important;
        margin: 0 auto
      }
    }

    @media only screen and (max-width: 400px) {
      .footer td {
        font-size: 12px !important;
        line-height: 16px !important
      }
    }

    @media screen and (max-width:600px) {
      table[class="columns"] {
        margin: 0 auto !important;
        float: none !important;
        padding: 10px 0 !important;
      }

      td[class="left"] {
        padding: 0px 0 !important;
      }
    }
  </style>

</head>

<body style="background: #e1e1e1;font-family:Arial, Helvetica, sans-serif; font-size:1em;">
  <table id="backgroundTable" width="100%" cellspacing="0" cellpadding="0" border="0" style="background:#e1e1e1;">
    <tr>
      <td class="body" align="center" valign="top" style="background:#e1e1e1;" width="100%">
        <table cellpadding="0" cellspacing="0">
          <tr>
            <td width="640">
            </td>
          </tr>
          <tr>
            <td class="main" width="640" align="center" style="padding: 0 10px;">
              <table style="min-width: 100%; " class="stylingblock-content-wrapper" width="100%" cellspacing="0" cellpadding="0">
                <tr>
                  <td class="stylingblock-content-wrapper camarker-inner">
                    <table cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="640" align="left">
                          <table width="100%" cellspacing="0" cellpadding="0">
                            <tr>
                              <td class="header header--left" style="padding: 20px 10px;" align="center">
                                <a href="#"><img class="header__logo" src="<?php echo $_ENV['APP_URL'] . "logo.png"; ?>" alt="logo" style="display: block; border: 0;" width="100" height="59"></a>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
              <table style="min-width: 100%; " class="stylingblock-content-wrapper" width="100%" cellspacing="0" cellpadding="0">
                <tr>
                  <td class="stylingblock-content-wrapper camarker-inner">
                    <table class="featured-story featured-story--top" cellspacing="0" cellpadding="0">
                      <tr>
                        <td style="padding-bottom: 20px;">
                          <table cellspacing="0" cellpadding="0">
                            <tr>
                              <td class="featured-story__inner" style="background: #fff;">
                                <table cellspacing="0" cellpadding="0">
                                  <!-- <tr>
                                            <td class="scalable-image" width="640" align="center">
                                            <a href="#"><img src="<?php echo $_ENV['APP_URL'] . "landArtboard.png"; ?>" alt="landing art" style="display: block; border: 0; max-width: 100%; height: auto;" width="640"></a>
                                            </td>
                                        </tr> -->
                                  <tr>
                                    <td class="featured-story__content-inner" style="padding: 32px 30px 45px;">
                                      <table cellspacing="0" cellpadding="0">
                                        <tr>
                                          <td class="featured-story__heading featured-story--top__heading" style="background: #fff;" width="640" align="left">
                                            <table cellspacing="0" cellpadding="0">
                                              <tr>
                                                <td style="font-family: Geneva, Tahoma, Verdana, sans-serif; font-size: 22px; color: #464646;" width="400" align="left">
                                                  <a href="#" style="text-decoration: none; color: #464646;">Welcome to <b>Qwiki</b>!</a>
                                                </td>
                                              </tr>
                                            </table>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td class="featured-story__copy" style="background: #fff;" width="640" align="center">
                                            <table cellspacing="0" cellpadding="0">
                                              <tr>
                                                <td style="font-family: Geneva, Tahoma, Verdana, sans-serif; font-size: 16px; line-height: 22px; color: #555555; padding-top: 16px;" align="left">
                                                  Hey <?php echo $_GET["user_name"]; ?>,
                                                  <br />
                                                  <br />
                                                  I am super excited to bring you <b>Qwiki</b>!<br />
                                                  An on-demand delivery platform that provides you with dispatch riders at the <b>click of a button.</b><br />
                                                  <br />
                                                  <b>Wondering who <b>Qwiki</b> is for? Well, It is for people who:</b><br />
                                                  <br />
                                                  <ul>
                                                    <li>love swift deliveries</li>
                                                    <li>are tired of giving directions to dispatch riders</li>
                                                    <li>love affordable delivery rates</li>
                                                    <li>need to know the exact location of the rider and package at every point in time.</li>
                                                  </ul><br />
                                                  <br />
                                                  All of this might seem too good to be true. But with <b>Qwiki</b>, it isn’t.<br />
                                                  <br />
                                                  We’re launching the Beta app soon and because you’re a part of the <b>#QwikiDreamTeam</b> you get exclusive access to the app, on top of that you get to enjoy massive discounts!<br />
                                                  <br />

                                                  When we launch, we’d be happy to hear what you love, what we can improve on, and what you’d like to see. Feel free to respond to this mail with your questions or even reach out to us on your favourite social media platform. <br />
                                                  <br />

                                                  <b>Know someone who would love <b>Qwiki</b>?</b><br />
                                                  <br />

                                                  Share this link with them so they can be a part of the <b>#QwikiDreamTeam</b><br />
                                                  <br />

                                                  Don’t forget to join our social media community<br />
                                                  <br />

                                                  Thank you so much for your support, we hope to keep building and iterating for you.<br />
                                                  <br />

                                                  With Love,<br />
                                                  <b>Abby from <b>Qwiki</b>.</b>
                                                </td>
                                              </tr>
                                            </table>
                                          </td>
                                        </tr>
                                      </table>
                                    </td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td class="footer" width="640" align="center" style="padding-top: 10px;">
              <table cellspacing="0" cellpadding="0">
                <tr>
                  <td align="center" style="font-family: Geneva, Tahoma, Verdana, sans-serif; font-size: 14px; line-height: 18px; color: #738597; padding: 0 20px 40px;">
                    <br> <br>
                    <strong>Thanks for reading!</strong>
                    <br>
                    You\'re receiving this email because you subscribed to our waiting list.
                    <br>
                    <br>
                    <br>
                    <a href="#" target="_blank"><img src="<?php echo $_ENV['APP_URL'] . "logo.png"; ?>" alt="logo" style="display: block; border: 0;" width="100"></a>
                    COMING SOON!!!
                    <br>
                    <img src="<?php echo $_ENV['APP_URL'] . "playstore_download_button.png"; ?>" alt="logo" style="display: block; border: 0;" width="100"> • <img src="<?php echo $_ENV['APP_URL'] . "applestore_download_button.png"; ?>" alt="logo" style="display: block; border: 0;" width="100">

                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>

  <!-- Exact Target tracking code -->

  </custom>
</body>

</html>
