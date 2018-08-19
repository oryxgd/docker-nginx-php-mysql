<?php
$domain = $_GET["domain"];
if($domain == "xvideos-xhamster-xnxx.com") {
header('Location: https://www.check-my-ip.net/');
exit;
}

$ip = $_SERVER['REMOTE_ADDR']; // the IP address to query
$cepanje = explode(".", $ip);
$cepanje = $cepanje[0].".".$cepanje[1].".".$cepanje[2];
include("checkmyipapi.php");
$query = xmlip($ip);
$xml = simplexml_load_string($query);
$country = (string) $xml->countryName;
$countryCode = (string) $xml->countryCode;
$regionName = (string) $xml->regionName;
$city = (string) $xml->cityName;
$zip = (string) $xml->zipCode;
$lat = (string) $xml->latitude;
$lon = (string) $xml->longitude;
$timezone = (string) $xml->timeZone;

$imestranice = "Your IP address";

include("header.php");
echo 'Your IP Address<h1>'.$ip.' - Check My IP</h1><hr>';
echo '<table bgcolor="#f1f1f1" cellpadding="5">';
$maladrzava = strtolower($countryCode);
echo '<tr><td align="right">Country:  </td><td><h2> '.$country.'</h2></td></tr>';

echo '<tr><td align="right">Check Range:  </td><td><h2><a href="/all-ip-addresses/'.$cepanje.'">'.$cepanje.'.0 - '.$cepanje.'.255</a></h2></td></tr>';
echo '<tr><td align="right">Country code:  </td><td><h2> '.$countryCode.'</h2></td></tr>';
echo '<tr><td align="right">Region name:  </td><td><h2> '.$regionName.'</h2></td></tr>';
echo '<tr><td align="right">City:  </td><td><h2> '.$city.'</h2></td></tr><tr><td align="right"></td><td>';

if($kitamirke != 1) { ?>

    <!-- <script data-cfasync="false" type="text/javascript" src="//www.increaserev.com/ads/336x280_responsive.js"></script>-->

</td></tr>

<?php } 

echo '<tr><td align="right">Zip Code:  </td><td><h2> '.$zip.'</h2></td></tr>';
echo '<tr><td align="right">Latitude:  </td><td><h2> '.$lat.'</h2></td></tr>';
echo '<tr><td align="right">Longitude:  </td><td><h2> '.$lon.'</h2></td></tr>';
echo '<tr><td align="right">Location:  </td><td><img src="https://maps.googleapis.com/maps/api/staticmap?center='.$city.'&key=AIzaSyCDfiO-ThA22XEvtYTqsK6MEXSROCGufE0&maptype=roadmap&size=300x300&&markers=color:red%7Clabel:C%7C'.$lat.','.$lon.'" /></td></tr>';
echo '<tr><td align="right">Timezone:  </td><td><h2> '.$timezone.'</h2></td></tr>';

echo '<tr><td align="right"></td><td>';
?>
<!-- <script data-cfasync="false" type="text/javascript" src="//www.increaserev.com/ads/336x280_responsive.js"></script> -->
<br />
<?php
echo '</td></tr>';
?>

<tr><td align="right">WhoIS lookup:  </td><td id="whois"></td></tr>
<script>$('#whois').load('/whois.php?domain=<?php echo $ip; ?>');</script>



<?php
echo '<tr><td align="right">Download Image:  </td><td><img src="/'.$ip.'-ip-address.png" width="200px"/></td></tr>';
echo '</table><hr>';



include("footer.php");

?>