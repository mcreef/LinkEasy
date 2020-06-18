<?php

/*
GRAVATAR INTEGARAION
CHANGE $email to your GRAVATAR E-Mail address so that youll always have an updated profile pictue.
Sign Up for GRAVATAR here: http://gravatar.org/
*/
$email = "your@email.here";
$default = "https://pbs.twimg.com/profile_images/1028344178294419456/UM_bdwXQ_400x400.jpg";
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

<!-- SCRIPTS AND STUFF -->

<!-- TIKTOK FONT AWESOME ICON -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"></script>
<script type="text/javascript">
    var faTikTok = {
        prefix: 'fab',
        iconName: 'tiktok',
        icon: [24, 24, [], 'e001', 'M12.53.02C13.84 0 15.14.01 16.44 0c.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z']
    }

    FontAwesome.library.add(
        faTikTok
    )
</script>

<!-- NUMBER STUFF -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-169247260-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-169247260-1');
</script>

</head>

<body>

<div class="section padding-top-50 padding-bottom-50 center-align">

	<!-- PICTURE -->
	<a href="#"><img class="avy round" src="<?php echo $grav_url; ?>"></a>

	<!-- NAME -->
	<h1 class="padding-top-15">Matthias Claudius Reef</h1>

	<!-- DESCRIPTION -->
	<h2 class="padding-top-15">Photographer & Developer</br><b>Founder of REBE Clothing</b><!--</br><a href="#" class="preul underline">Want to know more about me? Send a DM!</a>.--></h2>

	<!-- SOCIAL ICONS -->
	<div><p class="padding-top-50">
		<a href="https://instagram.com/matthias.log" target="_blank" class="social-spacing"><i class="fab fa-instagram fa-2x"></i></a>
		<a href="https://www.tiktok.com/@mcreef" target="_blank" class="social-spacing"><i class="fab fa-tiktok fa-2x"></i></a>
		<a href="https://twitter.com/reef_matt" target="_blank" class="social-spacing"><i class="fab fa-twitter fa-2x"></i></a>
		<a href="https://snapchat.com/add/logtainment" target="_blank" class="social-spacing"><i class="fab fa-snapchat-ghost fa-2x"></i></a>
	</div>

	<div class="clear"></div>

</div>

<div class="section padding-bottom-50 center-align">

	<!-- BUTTONS -->
	<a href="https://rebeclothing.com/" target="_blank"><div class="button"><p class="white">REBE Clothing</p></div></a>

	<a href="https://matthiasreef.de/" target="_blank"><div class="button"><p class="white">Photography Portfolio</p></div></a>

	<a href="https://verse.me/$logmc" target="_blank"><div class="button"><p class="white">Donate via VERSE</p></div></a>

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
	<!-- COPYRIGHT TEXT -->
	<small class="light-grey">&copy; 2020 mcreef & logtainment digital services</small></br>
	<small class="light-grey"><a href="https://matthiasreef.de/imprint-privacy" class="preul underline">Imprint & Privacy Policy</a></small>
  <small class="light-grey"><a href="https://github.com/mcreef/LinkEasy" class="preul underline">This Project is Open Source Licensed under the GPL 2.0 License - Find the sourcecode on GitHub</a></small>
</div>

</body>

<script>
</script>
<!-- IF YOUVE READ UNTIL HERE - YOURE COOL AS HELL -->
</html>
