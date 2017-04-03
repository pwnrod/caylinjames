<?php

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['submit'])) {
      empty($_POST['name']) ? $name = " - " : $name = $_POST['name'];
      empty($_POST['email']) ? $email = " - " : $email = $_POST['email'];
      empty($_POST['number']) ? $number = " - " : $number = $_POST['number'];
      empty($_POST['comment']) ? $comment = " - " : $comment = $_POST['comment'];
    }

    mail("hearyoume9876@gmail.com", "New Message Recieved From Website!", $comment, "From: " . $email);
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Caylin James</title>
    <link href="https://fonts.googleapis.com/css?family=Noticia+Text|Open+Sans|Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet" >
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/myStyle.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <a name="top" id="top"></a>
    <header>
        <div class="container">
            <div class="row">
                <div class="container-fluid logo">
                    <p class="lmain">Caylin James</p>
                    <p class="lsub"><span style="color: #55a7b2">Web Developer</span> - <span style="color: #359a70">Seeking Internship</span></p>
                </div>
            </div>
            <div class="row">
              <div class="col-sm-12 flexslider">

                  <ul class="slides">
                    <li><a href=""><img src="img/image_1.jpg"></a></li>
                    <li><a href=""><img src="img/image_2.png"></a></li>
                  </ul>

              </div>
            </div>
            <div class="row">
                <div class="container-fluid quickInfo">
                    <!--  <a href="#"><i class="fa fa-download">&nbsp;</i>Download My Resume</a> -->
                    <a href="tel:5022162488"><i class="fa fa-phone">&nbsp;</i>(502)-216-2488</a>
                    <a href="mailto:hearyoume9876@gmail.com"><i class="fa fa-envelope">&nbsp;</i>Contact Me Now</a>
                </div>
            </div>
        </div>
    </header>

    <nav>
        <div class="container">
            <div class="row">
                <div class="container-fluid">
                  <div class="navs">

                    <div class="box">
                        <div class="about-box slider-box">
                            <a href="#location" class="anchorLink" id="about-content">
                                <p class="top">About Me</p>
                                <p class="mid"></p>
                                <p class="bot">Information about me</p>
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="box">
                        <div class="resume-box slider-box">
                            <a href="#location" class="anchorLink" id="resume-content">
                                <p class="top">Resume</p>
                                <p class="mid"></p>
                                <p class="bot">Education and Skills</p>
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="box">
                        <div class="portfolio-box slider-box">
                            <a href="#location" class="anchorLink" id="portfolio-content">
                                <p class="top">Portfolio</p>
                                <p class="mid"></p>
                                <p class="bot">Previous Projects</p>
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="box">
                        <div class="contact-box slider-box">
                            <a href="#location" class="anchorLink" id="contact-content">
                                <p class="top">Contact Me</p>
                                <p class="mid"></p>
                                <p class="bot">Send me a message</p>
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="container-fluid">
                    <a name="location" id="location"></a>
                </div>
                <div class="container-fluid">
                    <div class="about-content box-content" style="display: none;">
                        <h2>About Me</h2>
                        <div class="border"></div>
                        <img src="img/smallpic.jpg" class="profile">
                        <div class="social-icons">
                            <a href="https://plus.google.com/u/0/+CaylinJames" target="_blank"><i class="icon-social-google"></i>&nbsp;</a>
                            <a href="https://www.linkedin.com/in/caylin-james-805a42126/" target="_blank"><i class="icon-social-linkedin"></i>&nbsp;</a>
                            <a href="https://github.com/pwnrod" target="_blank"><i class="icon-social-github"></i>&nbsp;</a>
                            <a href="http://www.soundcloud.com/pwnrod" target="_blank"><i class="icon-social-soundcloud"></i>&nbsp;</a>
                        </div>
                        <p>I am a Computer Information Technologies student at Jefferson Community and Technical College. I specialize in Web Development and have a great understanding of the object oriented methodology. I'm expected to graduate in Summer 2017 and I'm actively seeking an internship as the final class to finish out my associate's degree.</p>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="container-fluid">
                  <div class="resume-content box-content" style="display: none;">
                    <h2>Resume</h2>
                    <div class="border"></div>
                    <div class="resume">
                      <div class="row">
                        <div class="col-sm-3">
                          <h3>Education</h3>
                        </div>
                        <div class="col-sm-9">
                          <div class="rcontent">
                            <h4>Jefferson Community and Technical College - Louisville, KY</h4>
                            <p class="tag">Computer Information Technology - Programming Track with a focus in Web Development Technologies 2015 - 2017</p>
                            <p>Dean's List for 4 consecutive full-time semesters.</p>
                            <p>Recipient of the Outstanding Achievement Award for the Computer & Information Technologies program for the 2016-2017 school year.</p>
                          </div>
                        </div>
                      </div>
                      <div class="border"></div>
                      <div class="row">
                        <div class="col-sm-3">
                          <h3>Skills</h3>
                        </div>
                        <div class="col-sm-9">
                          <div class="rcontent">
                            <h4>Web Developer</h4>
                            <p class="tag">Languages</p>
                            <div class="skills">
                              <a href="www.php.net"><span class="skill">PHP</span></a>
                              <a href="#"><span class="skill">MySQL</span></a>
                              <a href="#"><span class="skill">HTML5</span></a>
                              <a href="#"><span class="skill">CSS3</span></a>
                              <a href="#"><span class="skill">JavaScript</span></a>
                              <a href="#"><span class="skill">C#</span></a>
                              <a href="#"><span class="skill">C++</span></a>
                            </div>
                            <p class="tag">Frameworks</p>
                            <div class="skills">
                              <a href="#"><span class="skill">Bootstrap</span></a>
                              <a href="#"><span class="skill">jQuery</span></a>
                            </div>
                            <p class="tag">IDE's</p>
                            <div class="skills">
                              <a href="#"><span class="skill">Atom</span></a>
                              <a href="#"><span class="skill">Sublime Text 3</span></a>
                              <a href="#"><span class="skill">Visual Studio</span></a>
                              <a href="#"><span class="skill">Eclipse</span></a>
                            </div>
                            <p class="tag">Other Skills</p>
                            <div class="skills">
                              <a href="#"><span class="skill">Git</span></a>
                              <a href="#"><span class="skill">Terminal</span></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="container-fluid">
                  <div class="portfolio-content box-content" style="display: none;">
                    <h2>Portfolio</h2>
                    <div class="border"></div>
                    <div class="portfolio">

                    </div>
                  </div>
                </div>
                <div class="container-fluid">
                  <div class="contact-content box-content" style="display: none;">
                    <h2>Contact Me</h2>
                    <div class="border"></div>
                    <div class="contact">
                      <div class="row">
                        <div class="col-sm-6">

                          <form class="form-horizontal" action="index.php" method="post">
                            <input type="hidden" name="post-submit" value="1">
                            <div class="form-group">
                              <label class="col-sm-2 control-label" for="name">Name</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" id="name" required>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label" for ="email">Email</label>
                              <div class="col-sm-10">
                                <input type="email" class="form-control" name="email" id="email" required>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label" for ="number">Number</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" name="number" id="number">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label" for ="comment">Comment</label>
                              <div class="col-sm-10">
                                <textarea class="form-control" name="comment" id="comment" rows="3" required></textarea>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" name="submit" class="btn btn-default">Submit</button>
                                <button type="reset" class="btn btn-default">Reset</button>
                              </div>
                            </div>
                          </form>
                        </div>
                        <div class="col-sm-6">
                          <div class="address">
                            <div class="row">
                              <div class="col-sm-6">
                                <address>
                                  Caylin P. James<br />
                                  hearyoume9876@gmail.com<br />
                                  Cell: (502) 216-2488<br />
                                </address>
                              </div>
                              <div class="col-sm-6">
                                <address>
                                  152 Superior Ct.<br />
                                  Apartment 8<br />
                                  Shepherdsville, KY 40165<br />
                                </address>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
            </div>
        </div>
    </div>

    <div class="back-to-top">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="to-top">
              <a href="#top" class="to-top anchorLink"><i class="fa fa-arrow-circle-up"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <p>Copyright &copy; 2017 - Caylin James</p>
                </div>
                <div class="col-sm-3 col-sm-offset-5">
                    <div class="social">
                        <a href="https://plus.google.com/u/0/+CaylinJames" target="_blank"><i class="icon-social-google"></i></a>
                        <a href="https://www.linkedin.com/in/caylin-james-805a42126/" target="_blank"><i class="icon-social-linkedin"></i></a>
                        <a href="https://github.com/pwnrod" target="_blank"><i class="icon-social-github"></i></a>
                        <a href="http://www.soundcloud.com/pwnrod" target="_blank"><i class="icon-social-soundcloud"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/jquery.js"></script>
    <script src="js/easing.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/jquery.anchor.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
