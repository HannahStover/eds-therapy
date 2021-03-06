<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Insights</title>

    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="/apple-touch-icon.png/"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="/favicon-32x32.png/"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="/favicon-16x16.png/"
    />
    <link rel="manifest" href="/site.webmanifest" />

    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Font Awesome -->
    <script
      src="https://kit.fontawesome.com/b633fc80e7.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- axios -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />

    <!-- My Stylesheet -->
    <link rel="Stylesheet" type="text/css" href="styles.css" />
  </head>

  <body>
    <div class="preloader">
      <svg
        width="200"
        height="200"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 100 100"
        preserveAspectRatio="xMidYMid"
        class="lds-ripple"
        style="background: 0 0;"
      >
        <circle
          cx="50"
          cy="50"
          r="4.719"
          fill="none"
          stroke="#1d3f72"
          stroke-width="2"
        >
          <animate
            attributeName="r"
            calcMode="spline"
            values="0;40"
            keyTimes="0;1"
            dur="3"
            keySplines="0 0.2 0.8 1"
            begin="-1.5s"
            repeatCount="indefinite"
          />
          <animate
            attributeName="opacity"
            calcMode="spline"
            values="1;0"
            keyTimes="0;1"
            dur="3"
            keySplines="0.2 0 0.8 1"
            begin="-1.5s"
            repeatCount="indefinite"
          />
        </circle>
        <circle
          cx="50"
          cy="50"
          r="27.591"
          fill="none"
          stroke="#5699d2"
          stroke-width="2"
        >
          <animate
            attributeName="r"
            calcMode="spline"
            values="0;40"
            keyTimes="0;1"
            dur="3"
            keySplines="0 0.2 0.8 1"
            begin="0s"
            repeatCount="indefinite"
          />
          <animate
            attributeName="opacity"
            calcMode="spline"
            values="1;0"
            keyTimes="0;1"
            dur="3"
            keySplines="0.2 0 0.8 1"
            begin="0s"
            repeatCount="indefinite"
          />
        </circle>
      </svg>
    </div>
    <!-- Navigation -->
    <nav
      class="navbar navbar-expand-md sticky-top navbar-light bg-default-color-dark"
    >
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        href="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#">Home </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#approach">Approach</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#forms">Forms</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="#contact">Schedule</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Header -->
    <div class="page-content">
      <header class="parallax">
        <div class="container">
          <div class="row row-header">
            <div class="col-xs-12">
              <h1>Insights</h1>
            </div>
            <div class="col-xs-12 mt-3">
              <h3>
                Solution Focused Brief Therapy
                <!-- A place for counseling, coaching, & spiritual development. -->
              </h3>
            </div>
          </div>
          <div class="row mb-4 pb-5">
            <div class="col col-md-4 col-sm-8">
              <a href="#services">
                <button type="button" class="btn btn-md">
                  Services
                </button></a
              >
            </div>
            <div class="col col-md-4 col-sm-8">
              <a href="#approach">
                <button type="button" class="btn btn-md">
                  Approach
                </button></a
              >
            </div>
            <div class="col col-md-4 col-sm-8">
              <a href="#contact">
                <button type="button" class="btn btn-md">
                  Schedule
                </button></a
              >
            </div>
          </div>
        </div>
      </header>

      <!-- Services -->
      <div class="parallax-section d-none d-sm-block"></div>
      <div class="section" id="services">
        <div class="container">
          <h2>Services</h2>
          <hr />
          <div class="row mt-5">
            <div class="col-lg-6 col-md-6 col-xs-12 mt-4" id="Pre-Marital">
              <i class="fas fa-ring fa-3x"></i>
              <p></p>
              <h5>
                Pre-marital therapy can help ensure that you and your partner
                have a strong and healthy relationship.
              </h5>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12 mt-4" id="Marriage">
              <i class="fas fa-balance-scale fa-3x"></i>

              <p></p>
              <h5>
                Marriage counseling is important for addressing marital concerns
                and helps couples take time out of their busy lives to come
                together and focus on themselves and each other.
              </h5>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12 mt-4" id="Family">
              <i class="fas fa-baby-carriage fa-3x"></i>
              <p></p>
              <h5>
                The key to having and keeping a successful family unit moving
                forward is to be able to understand and identify the needs of
                the individual members and balance the well-being of the family
                unit.
              </h5>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12 mt-4" id="Child">
              <i class="fas fa-child fa-3x"></i>
              <p></p>
              <h5>
                Child counseling addresses issues that are negatively impacting
                a child's growth, development, mental health, and well-being.
              </h5>
            </div>
          </div>
        </div>
      </div>

      <!-- Approach -->
      <div class="parallax-section d-none d-sm-block"></div>
      <div class="section" id="approach">
        <div class="container">
          <img
            src="images/Elaine.png"
            alt="Image of Elaine"
            class="frame mt-4 d-lg-none"
          />
          <div class="media justify-content-center">
            <img
              src="images/Elaine.png"
              alt="Image of Elaine"
              class="frame mt-4 d-none d-lg-block"
            />
            <div class="media-body">
              <h2 class="mt-0">Approach</h2>
              <hr />

              <p class="mt-4">
                Elaine D. Stover received her MA in marriage, child, and family
                therapy in 1992, having completed her BA in intercultural
                studies in 1982. Elaine has a sense of humor and is culturally
                sensitive.

                <!-- She works with individuals and families to help
                navigate complex relationships and to set long-term goals. -->
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Contact -->
      <div class="parallax-section d-none d-sm-block"></div>
      <div class="section" id="contact">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-12 pb-5">
              <h2 class="text-center mb-4">Scheduling & Questions</h2>
              <hr />
              <!--Form with header-->
              <!-- <form action="contact.php" method="post"> -->
              
                <!--Body-->
                <?php
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
    <form  action="" method="post">
                     <div class="form-group pt-4">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fas fa-user text"></i>
                      </div>
                    </div>
                    <input type="hidden" name="action" value="submit">
                    <input
                      type="text"
                      class="form-control"
                      id="name"
                      name="name"
                      value=""
                      placeholder="First and Last Name"
                      required
                    />
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-envelope"></i>
                      </div>
                    </div>
                    <input
                      type="email"
                      class="form-control"
                      id="name"
                      name="email"
                      value=""
                      placeholder="Email Address"
                      required
                    />
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-comment"></i>
                      </div>
                    </div>
                    <textarea
                      class="form-control"
                      rows="5"
                      name="message"
                      placeholder="Your Message Here"
                      required
                    ></textarea>
                  </div>
                </div>
                <div 
                class="g-recaptcha" 
                data-sitekey="6LdRG6kZAAAAAEwsmfYPV3dZq56szVwyFr3HiCl6"></div>
                <div class="text-center">
                
                <input 
                class="btn rounded-0 py-2"
                type="submit"
                name="submit"
                value="Send email" />
                </div> 
               </div> 
              </form>
              

    <?php
    } 
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
        echo "All fields are required, please fill <a href=\"\">the form</a> again.";
        }
    else{        
        $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
        mail("admin@elainedstover.com", $subject, $message, $from);
        echo "Email sent!";
        }
      }
?>

              <!--Form with header-->
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="parallax-end d-none d-sm-block"></div>

    <!-- Footer -->
    <footer>
      <div class="footer">
        <div class="row justify-content-center">
          <div class="col-auto mt-3">
            <a
              href="http://www.hannahrosestover.co"
              target="blank"
              class="text-dark"
            >
              © Copyright 2020 Hannah Stover
            </a>
          </div>
        </div>
      </div>
    </footer>

    <?php
function verifyUser($user_response_token) {
  $params = array(
    'secret' => '6LdRG6kZAAAAABs1Qz4-DFCVlc_ZOMVkxOKSdxw_',
    'response' => $user_response_token
  );
  $post_data = http_build_query($params);
  $client = new Client([
    'headers' => [
      'Content-Type' => 'application/x-www-form- urlencoded'
    ],
    'verify' => false,
  ]);
  $response = $client->post(
    `https://www.google.com/recaptcha/api/siteverify`,
    ['body' => $post_data]);
    return json_decode($response->getBody(), true);
}
?>

<!-- // const axios = require('axios') -->

<!-- // axios.post(
//   `https://www.google.com/recaptcha/api/siteverify`, {
//   secret: '6LdRG6kZAAAAABs1Qz4-DFCVlc_ZOMVkxOKSdxw_',
//   response: req.body['g-recaptcha-response']
// }
// })
// .then((response) => {
//   console.log(response);
// }, (error) => {
//   console.log(error);
// });

  // axios({
  //   method: 'post',
  //   url: 'https://www.google.com/recaptcha/api/siteverify',
  //   data: {
  //     secret: '6LdRG6kZAAAAABs1Qz4-DFCVlc_ZOMVkxOKSdxw_',
  //     response: 'g-recaptcha-response'
  //   }
  // }); -->
<!-- reCAPTCHA: -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- My JS -->
    <script src="script.js"></script>
    <!-- Bootstrap JavaScript & JQuery -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script 
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
