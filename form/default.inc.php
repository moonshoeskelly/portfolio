<!--Form Breaks, does not load Properly -->
<style type="text/css">

* {
  margin: 0;
  padding: 0;
  border: 0;
}

/*#######################################
*
*
*             Background Image and Logo Section
*
*
*#######################################*/

body {
  background-image: url("../images/background.png");
  background-color: #FFCCCC;
  background-attachment: fixed;
  background-size: cover;
}

header img {
  min-width: 200px;
  width: 100%;
  max-width: 450px;
  margin: auto;
}

/*************HAMBURGER MENU STYLES *******************/
.hamburger{
  background:none;
  line-height:45px;
  color:#CC9933;
  border:0;
  font-size:2em;
  font-weight:bold;
  cursor:pointer;
  outline:none;
  z-index:10000000000000;
}
.cross{
  background:none;
  color:#CC9933;
  border:0;
  font-size:4em;
  line-height:65px;
  font-weight:bold;
  cursor:pointer;
  outline:none;
  z-index:10000000000000;
}
.menu{z-index:1000000; font-weight:bold; font-size:0.8em; width:100%; background:#f1f1f1; text-align:center; font-size:12px;}
.menu ul {margin: 0; padding: 0; list-style-type: none; list-style-image: none;}
.menu li {display: block;   padding:10px 0 10px 0; border-bottom:#dddddd 1px solid;}
.menu li:hover{display: block; background:#ffffff; padding:15px 0 15px 0; border-bottom:#dddddd 1px solid;}
.menu ul li a { text-decoration:none;  margin: 0px; color:#666;}
.menu ul li a:hover {  color: #666; text-decoration:none;}
.menu a{text-decoration:none; color:#666;}
.menu a:hover{text-decoration:none; color:#666;}

/***************END HAMBURGER MENU STYLES *****************/


/*#######################################
*
*
*            Fonts
*
*
*#######################################*/

h1 {
  font-family: 'Grand Hotel', cursive;
}

h2,
h3,
h4,
h5,
h6,
p {
  font-family: 'Montserrat', sans-serif;
  margin: 10px 1%;
  line-height: 25px;
}

/*#######################################
*
*
*             Header
*
*
*#######################################*/

header {
  position: fixed;
  z-index: 99;
  margin: 0 auto;
  top: 0;
  left: 0;
  right: 0;
  max-width: 600px;
  padding: 10px 2.167%;
  background-image: url("../images/background.png");
  background-color: #FFCCCC;
  background-attachment: fixed;
  background-size: cover;
  text-align: center;
}

header nav ul {
  text-align: center;
}

header nav ul li {
  display: inline;
}

header nav a {
  color: white;
  text-decoration: none;
  font-weight: bold;
  font-size: 1.25rem;
  font-family: 'Monsterrat', sans-serif;
  margin: 0 20px;
}

header ul li a {
}

header ul li a:hover {
  color: #333;
  font-weight: bold;
}

a:visited {
  color: #707070;
}

.desktop-menu {
	display: none;
}

/*#######################################
*
*
*             Container
*
*
*#######################################*/


.container {
  position: relative;
    padding-top: 55%;
    margin: 0 auto;
    max-width: 700px;
}

h1 {
  text-align: center;
  color: #CC9933;
  margin: 10px 2%;
  font-size: 2.3rem;
}

p::first-line {
  font-weight: bold;
}
/*#######################################
*
*
*             Footer
*
*
*#######################################*/

footer {
  clear: both;
  text-align: right;
  right: 1%;
  bottom: 1%;
  padding: 1% 2% 1% 0;
  margin: 0 9%;
}

.contact-footer {
  /* display: block; */
  /* text-align: right; */
  padding-right: 1.4%;
  margin-left: 56%;
  margin-bottom: 10px;
  color: white;
  text-decoration: none;
  font-weight: bold;
  font-size: 1.0625rem;
  font-family: 'Monsterrat', sans-serif;
  max-width: 100px;
  width: 100%;
  white-space: nowrap;
}


.contact-footer:hover {
  color: #333;
  font-weight: bold;
  box-shadow: 0 5px 0 0 rgba(0,0,0,.25);
  -webkit-box-shadow: 0 5px 0 0 rgba(0,0,0,.25);
  -moz-box-shadow: 0 5px 0 0 rgba(0,0,0,.25);
}

footer img{
  height: 50px;
  padding-top: 7px;
}

/*************START 434 MEDIA QUERY *******************/

@media (min-width: 434px) {

    .contact-footer {
      margin-left: 63%;
    }

}

/*************END 434 MEDIA QUERY *******************/

/*************START 500 MEDIA QUERY *******************/

@media (min-width: 500px) {

    .container {
      padding-top: 50%;
    }

    .contact-footer {
      margin-left: 65%;
    }

  }

/*************END 500 MEDIA QUERY *******************/

/*************IN BETWEEN 505-520 MEDIA QUERY *******************/
@media (min-width: 505px) and (max-width: 520px) {

header img {
    padding: 0 7px;
  }
}
/*************IN BETWEEN 505-520 MEDIA QUERY *******************/

/*************START 520 MEDIA QUERY *******************/

@media (min-width: 520px) {

    .hamburger {
      margin: 0 auto;
      display: block;
    }
    .cross {
      margin: 0 auto;
      display: block;
    }

    footer {
      margin: 0 15%;
    }

}

/*************END 520 MEDIA QUERY *******************/

/*************START 615 MEDIA QUERY *******************/

@media (min-width: 615px) {

    .hamburger {
      display: none;
    }
    .cross {
      display: none;
    }

    .desktop-menu {
      display: inline-block;
      width: 100%;
    }

    header ul li a:hover {
      box-shadow: 0 5px 0 0 rgba(0,0,0,.25);
      -webkit-box-shadow: 0 5px 0 0 rgba(0,0,0,.25);
      -moz-box-shadow: 0 5px 0 0 rgba(0,0,0,.25);
    }

    .container {
      padding-top: 40%;
    }

    h1 {
      text-align: left;
    }

    footer {
      margin: 0;
    }

    .contact-footer {
      display: block;
      text-align: right;
      width: auto;
      margin-left: 83%;
    }

    footer img {
      padding-top: 0;
    }

}

/*************END 615 MEDIA QUERY *******************/

/*************START 650 MEDIA QUERY *******************/
@media (min-width: 650px) {

  header {
    padding: 10px 3.767%;
  }

}
/*************END 650 MEDIA QUERY *******************/

/*************START 680 MEDIA QUERY *******************/

@media (min-width: 680px) {

    header {
      padding: .5% 7.5%;
    }

    .container {
      padding-top: 33%;
    }

    .contact-footer {
      margin-left: 84.9%;
    }

}

/*************END 680 MEDIA QUERY *******************/

/*************START 737 MEDIA QUERY *******************/

@media (min-width: 730px) {

    header {
      padding: .5% 10.5%;
    }
}
/*************END 680 MEDIA QUERY *******************/


/*************START 800 MEDIA QUERY *******************/

@media (min-width: 800px) {

    header {
      padding: .5% 7%;
    }

    .container {
      padding-top: 30%;
    }

    .contact-footer {
      margin-left: 87.9%;
    }

}

/*************END 800 MEDIA QUERY *******************/

/*************START 900 MEDIA QUERY *******************/

@media (min-width: 900px) {

    header {
      padding: .5% 10%;
    }

    .container {
      padding-top: 25%;
    }

    .contact-footer {
      margin-left: 89%;
    }

}

/*************END 900 MEDIA QUERY *******************/

/*************START 1080 MEDIA QUERY *******************/

@media (min-width: 1080px) {

    header {
      padding: .5% 12%;
    }

    .container {
      padding-top: 22%;
    }

    .contact-footer {
      margin-left: 91%;
    }

}

/*************END 1080 MEDIA QUERY *******************/

/*************START 1200 MEDIA QUERY *******************/

@media (min-width: 1200px) {

    header {
      padding: .5% 18%;
    }

    .container {
      padding-top: 19%;
    }

    .contact-footer {
      margin-left: 92.33%;
    }

}

/*************END 1200 MEDIA QUERY *******************/

</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<header>
  <img class="logo" src="images/cklogo-rect2.svg" alt="Home Logo" title="Clever Kelly Logo" />

  <button class="hamburger">&#9776;</button>
  <button class="cross">&#735;</button>

  <nav class="menu">
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="about.html">About Me</a></li>
      <li><a href="work.html">Work</a></li>
      <li><a href="resume.html">Resume</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
  </nav>

  <nav class="desktop-menu">
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="about.html">About Me</a></li>
      <li><a href="work.html">Work</a></li>
      <li><a href="resume.html">Resume</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
  </nav>
</header>

<div class="container">
  <h1>Sorry, something went wrong with your submission</h1>
  <p>Please try again</p>
</div>

<footer>
  <div class="socialmedia">
    <a class="contact-footer" href="contact.html" target="_blank">Contact Me</a>
      <a href="https://www.linkedin.com/in/kelly-dement-88996748/" target="_blank"><img src="images/linkedin-logo.png" alt="linkedin" title="linkedin" /></a>
    <a href="https://twitter.com/moonshoeskelly" target="_blank"><img src="images/twitter-rounded.png" alt="twitter" title="twitter" /></a>
  </div>
</footer>
<script src="scripts/hamburger.js"></script>
