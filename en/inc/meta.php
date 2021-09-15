<?php
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

<link rel="canonical" href="<?php echo $actual_link; ?>"/>
<meta property="og:title" content="Home | Meccfor"/>
<meta property="og:url" content="<?php echo $actual_link; ?>"/>
<meta property="og:site_name" content="Meccfor"/>
<meta property="og:type" content="website"/>
<link rel="alternate" href="<?php echo $actual_link; ?>" hreflang="x-default"/>
<!-- 
<link rel="alternate" href="https://www.meccfor.com/?lang=en" hreflang="en-gb"/>
<link rel="alternate" href="https://www.meccfor.com/" hreflang="it-it"/>
-->
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:title" content="Home | Meccfor"/>
