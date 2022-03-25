
<?php 


// I have three old hp monitors, not new. I want to sell it on my own website.
//  That’s why I should create a product upload form on my website, 
//  then upload my product with specification and available quantity.
//   My monitors have a 15.6 inch display. My monitor’s VGA cable status,
//    yes, I will sell it for 8000 tk.

// For creating a product upload form what specifications will be uploaded and what will be their data types?



 $monitor_pice = 3;             // Data type = "integer"       Please Check This Image Link = https://drive.google.com/file/d/15fiuxNY9DNpTCUnlUVeYEc8pV_PbFllT/view?usp=sharing
 $name = "HP Monitor";          // Data Type = "String"        Please Check This Image Link = https://drive.google.com/file/d/1KquG8qUxzi6AVH9J2xyUrXLbRaue8Ugj/view?usp=sharing
 $monitor_status_new = false;   // Data Type = "boolean"       Please Check This Image Link = https://drive.google.com/file/d/1CISuqb7SRzsYlkLypyFOI99lPVkw7Z_W/view?usp=sharing
 $monitor_size = 15.6;          // Data Type = "duble/float"   Please Check This Image Link = https://drive.google.com/file/d/1vkCbD7RPoMkR2qhTiy9vA5QNxwB4MsLV/view?usp=sharing
 $cable_status_vga = true;      // Data Type = "boolean"       Please Check This Image Link = https://drive.google.com/file/d/1TGMbbRTjr3RDoFpxId7Qx6aryLER2z4_/view?usp=sharing
 $amount = 8000;                // Date Type = "integer"       Please Check This Image Link = https://drive.google.com/file/d/1h45xCKtd-W7imHvD7S-Tv6eAT3cyIB9a/view?usp=sharing




      echo gettype ($monitor_pice);             // Data type = "integer"
      echo gettype ($name);                     // Data Type = "String"
      echo gettype ($monitor_status_new);       // Data Type = "boolean" 
      echo gettype ($monitor_size);             // Data Type = "duble/float"
      echo gettype ($cable_status_vga);         // Data Type = "boolean"  
      echo gettype ($amount);                   // Date Type = "integer" 



  echo " I have <b> {$monitor_pice}  {$monitor_status_new} {$name}s </b>. I want to sell it on my own website.That’s why I should create a product upload form on my website. then upload my product with specification and available quantity <br>

      My monitors have a <b> {$monitor_size} </b> inch display. My monitor’s VGA cable status,<b> {$cable_status_vga} </b> . I will sell it for {$amount} tk."      


      // Check This image link = https://drive.google.com/file/d/1kk40R1ZW76HgSDtZnqI2o0nJwHObGe7W/view?usp=sharing




     





?>
