<!--Something is missing -->
<style type="text/css">

* {
  margin: 0;
  padding: 0;
  border: 0;
}

body {
  background-image: url("../images/background.png");
  background-color: #FFCCCC;
  background-attachment: fixed;
  background-size: cover;
}

.logo {
  width: 500px;
}

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
  margin: 15px 0px;
  line-height: 25px;
}

header {
  position: fixed;
  z-index: 99;
  margin: 0 auto;
  top: 0;
  left: 0;
  right: 0;
  max-width: 600px;
  padding: 10px 100px;
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
  font-size: 20px;
  font-family: 'Monsterrat', sans-serif;
  margin: 0 20px;
}

.container {
  position: relative;
  top: 265px;
  margin: 0 auto;
  max-width: 700px;
}

h1 {
  text-align: left;
  color: #CC9933;
  margin: 10px 0 20px;
  font-size: 40px;
}

footer {
  text-align: right;
  position: fixed;
  right: 10px;
  bottom: 10px;
  padding: 10px 20px 10px 0;
}

.contact-footer {
  display: block;
  text-align: right;
  padding-bottom: 10px;
  padding-right: 10px;
  color: white;
  text-decoration: none;
  font-weight: bold;
  font-size: 17px;
  font-family: 'Monsterrat', sans-serif;
}

footer img{
  height: 50px;
}

</style>

<header>
  <img class="logo" src="images/cklogo-rect.svg" alt="Home Logo" title="Clever Kelly Logo" />
  <nav>
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
	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>

<footer>
  <div class="socialmedia">
    <a class="contact-footer" href="contact.html" target="_blank">Contact Me</a>
      <a href="https://www.linkedin.com/in/kelly-dement-88996748/" target="_blank"><img src="images/linkedin-logo.png" alt="linkedin" title="linkedin" /></a>
    <a href="https://twitter.com/moonshoeskelly" target="_blank"><img src="images/twitter-rounded.png" alt="twitter" title="twitter" /></a>
  </div>
</footer>
