<!-- LINKEASY BY MATTHIAS CLAUDIUS REEF - V1.0 -->
<?php
/*
GRAVATAR INTEGARAION
CHANGE $email to your GRAVATAR E-Mail address so that youll always have an updated profile pictue.
Sign Up for GRAVATAR here: http://gravatar.org/
*/
$email = "your@email.here";
$default = "https://mcreef.de/src/user_placeholder.png";
$size = 400;

$grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;

function get_gravatar( $email, $s = 80, $d = 'mp', $r = 'g', $img = false, $atts = array() ) {
    $url = 'https://www.gravatar.com/avatar/';
    $url .= md5( strtolower( trim( $email ) ) );
    $url .= "?s=$s&d=$d&r=$r";
    if ( $img ) {
        $url = '<img src="' . $url . '"';
        foreach ( $atts as $key => $val )
            $url .= ' ' . $key . '="' . $val . '"';
        $url .= ' />';
    }
    return $url;
}

?>
<html>

<head>

<!-- RESPONSIVE THING -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- TITLE & DESCRIPTION -->
<!-- PUT HERE YOUR NAME -->
<title>@mcreef Links</title>
<meta name="description" content="Digital business card with links to different platforms of Matthias Claudius Reef.">
<meta name="keywords" content="linktree, personal, matthias, reef, tiktok, links, rebeclothing, influencer">

<!-- FAVICON -->
<link rel="icon" href="<?php echo $grav_url; ?>" sizes="32x32" />
<link rel="icon" href="<?php echo $grav_url; ?>" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="<?php echo $grav_url; ?>" />

<!-- FONTS -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900" rel="stylesheet">

<!-- STYLE -->
<link rel='stylesheet' href='css/style.css'>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

<!-- META -->
<meta property="og:type" content="website" />
<meta property="og:title" content="Matthias Claudius Reef" />
<meta property="og:url" content="https://mcreef.de/" />
<meta property="og:site_name" content="Matthias Claudius Reef" />
<meta property="og:image" content="<?php echo $grav_url; ?>" />
<meta property="og:image:width" content="512" />
<meta property="og:image:height" content="512" />
<meta property="og:locale" content="de_DE" />
<meta name="twitter:text:title" content="Home" />
<meta name="twitter:image" content="<?php echo $grav_url; ?>" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Photographer, Developer, Founder of REBE Clothing - LINKS" />

<!-- FONT AWESOME SCRIPT -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>

<!-- GOOGLE ANALYTIC STUFF -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-xxxxxxxxx-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-xxxxxxxxx-1');
</script>

</head>

<body>

<div class="section padding-top-50 padding-bottom-50 center-align">

	<!-- PICTURE -->
	<a href="#"><img class="avy round" src="<?php echo $grav_url; ?>"></a>

	<!-- NAME -->
	<h1 class="padding-top-15">Your Name Here</h1>

	<!-- DESCRIPTION -->
	<h2 class="padding-top-15">What do you do?</br><b>You can also Highlight in Bold Text</b><!--</br><a href="#" class="preul underline">Want to know more about me? Send a DM!</a>.--></h2>

	<!-- SOCIAL ICONS -->
	<div><p class="padding-top-50">
		<a href="#" target="_blank" class="social-spacing"><i class="fab fa-instagram fa-2x"></i></a>
		<a href="#" target="_blank" class="social-spacing"><i class="fab fa-tiktok fa-2x"></i></a>
		<a href="#" target="_blank" class="social-spacing"><i class="fab fa-twitter fa-2x"></i></a>
		<a href="#" target="_blank" class="social-spacing"><i class="fab fa-snapchat-ghost fa-2x"></i></a>
    <a href="#" target="_blank" class="social-spacing"><i class="fab fa-github fa-2x"></i></a>
	</div>

	<div class="clear"></div>

</div>

<div class="section padding-bottom-50 center-align">

	<!-- BUTTONS -->
	<a href="#" target="_blank"><div class="button"><p class="white">Link 1</p></div></a>

	<a href="#" target="_blank"><div class="button"><p class="white">Link 2</p></div></a>

	<a href="#" target="_blank"><div class="button"><p class="white">Link 3</p></div></a>

	<!--
	<a href="#" target="_blank"><div class="button"><p class="white">Link 4 Change the color too</p></div></a>
	-->

	<!--
	<a href="#" target="_blank"><div class="button"><p class="white">Link 5</p></div></a>
	-->

	<!--
	<a href="#" target="_blank"><div class="button"><p class="white">Link 5 Hidden Button</p></div></a>
	-->

	<!--
	<a href="#" target="_blank"><div class="button"><p class="white">Link 6 </p></div></a>
	-->

	<div class="clear"></div>

</div>

<div class="section padding-bottom-100 center-align">
	<!-- COPYRIGHT TEXT - DO NOT CHANGE EXCEPT FOR IMPRINT & PRIVACY-->
	<small class="light-grey">&copy; 2020 mcreef & logtainment digital services</small></br>
	<small class="light-grey"><a href="#" class="preul underline">Imprint & Privacy Policy</a></small><small class="light-grey">  ·  </small><small class="light-grey"><a href="https://github.com/mcreef/LinkEasy" class="preul underline">Made with LinkEasy</a></small>
</div>

</body>

<script>
</script>
<!-- IF YOUVE READ UNTIL HERE - YOURE COOL AS HELL -->
</html>
