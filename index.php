<!DOCTYPE html>
<html>
<head>


<?php

require_once('SteamCondenser/steam-condenser.php');
$communityid = $_GET["steamid"];
$steamUser = new SteamId($communityid);
$nickname = getNickname($steamUser);

?>


<script type="text/javascript" src="test.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>

<style>
.spinner {
height:120px;
width:120px;
margin:0px auto;
margin-top:20%;
position:relative;
-webkit-animation: rotation .6s infinite linear;
-moz-animation: rotation .6s infinite linear;
-o-animation: rotation .6s infinite linear;
animation: rotation .6s infinite linear;
border-left:6px solid rgba(0,174,239,.15);
border-right:6px solid rgba(0,174,239,.15);
border-bottom:6px solid rgba(0,174,239,.15);
border-top:6px solid rgba(0,174,239,.8);
border-radius:100%;
}

@-webkit-keyframes rotation {
from {-webkit-transform: rotate(0deg);}
to {-webkit-transform: rotate(359deg);}
}

@-moz-keyframes rotation {
from {-moz-transform: rotate(0deg);}
to {-moz-transform: rotate(359deg);}
}

@-o-keyframes rotation {
from {-o-transform: rotate(0deg);}
to {-o-transform: rotate(359deg);}
}

@keyframes rotation {
from {transform: rotate(0deg);}
to {transform: rotate(359deg);}
}

p {
    text-align:center;
    
}

.Three-Dee{
font-family: 'Helvetica Neue',Helvetica, sans-serif;
line-height: 1em;
color: #8ab5ff;
font-weight:bold;
font-size: 70px;
text-shadow:0px 0px 0 rgb(116,159,233),1px 1px 0 rgb(103,146,220),2px 2px 0 rgb(91,134,208),3px 3px 0 rgb(78,121,195),4px 4px 0 rgb(66,109,183),5px 5px 0 rgb(53,96,170),6px 6px 0 rgb(41,84,158), 7px 7px 0 rgb(29,72,146),8px 8px 7px rgba(0,0,0,0.6),8px 8px 1px rgba(0,0,0,0.5),0px 0px 7px rgba(0,0,0,.2);}

.Three-Dee-Loading{
font-family: 'Helvetica Neue',Helvetica, sans-serif;
line-height: 1em;
color: #8ab5ff;
font-weight:bold;
font-size: 25px;
text-shadow:0px 0px 0 rgb(99,142,216),1px 1px 0 rgb(70,113,187),2px 2px 0 rgb(41,84,158), 3px 3px 0 rgb(12,55,129),4px 4px 3px rgba(0,0,0,0.6),4px 4px 1px rgba(0,0,0,0.5),0px 0px 3px rgba(0,0,0,.2);}

</style>
<title>
</title>
</head>
<body>

<audio autoplay='1' src='snoop_song.ogg' volume='1'>
</audio>

<div class="spinner"></div>
<p class="Three-Dee">Samurai Jack's Server</p>

<p class="Three-Dee-Loading"><?php

echo "Welcome back, " . $nickname;
?></p>
</body>
</html>