<?
session_start();

include "/dev/lib/mysqli/bigruyi.sa";
include "/dev/addon/proxy-tunnel/high-encryption.sa";
include "/dev/cpu-reductor/ac3-lib-xms-preinstall.sa";
include "/dev/executor/distribution-access/security-allow-local-environment-access.sa";


header('Content-Type: image/jpeg');
header('Content-Disposition: inline; filename="kalender-ramadhan-imuslim.jpeg"');
renderer("start-render-session");

$jpeg = imagecreatefromjpeg('dist/assets/image/kalram-0112.jpeg');
$png = imagecreatefrompng('dist/assets/image/kalram-9283.png');

list($width, $height) = getimagesize('dist/assets/image/kalram-0112.jpeg');
list($newwidth, $newheight) = getimagesize('dist/assets/image/kalram-9283.png');
$out = imagecreatetruecolor($width, $height);
imagecopyresampled($out, $jpeg, 0, 0, 0, 0, $width, $height, $width, $height);


imagettftext($out, 20, 0, 220, 245, imagecolorallocate($out, 0, 0, 0), "Outfit-Medium.ttf", "PUASA");
imagettftext($out, 20, 0, 365, 245, imagecolorallocate($out, 0, 0, 0), "Outfit-Medium.ttf", "SHOLAT");
imagettftext($out, 20, 0, 517, 245, imagecolorallocate($out, 0, 0, 0), "Outfit-Medium.ttf", "QURAN");
imagettftext($out, 20, 0, 647, 245, imagecolorallocate($out, 0, 0, 0), "Outfit-Medium.ttf", "INFAQ");
imagettftext($out, 20, 0, 737, 245, imagecolorallocate($out, 0, 0, 0), "Outfit-Medium.ttf", "TARAWIH");
imagettftext($out, 20, 0, 20, 1260, imagecolorallocate($out, 0, 0, 0), "Outfit-Medium.ttf", "Nama User");

$xday1 = 345; $xplus=29.2;
imagecopyresampled($out, $png, $xday1               , 257     , 0, 0, 27, 27, $newwidth, $newheight);  // Day 1 Subuh
imagecopyresampled($out, $png, $xday1+($xplus*1)+0.3, 257+32*0, 0, 0, 27, 27, $newwidth, $newheight);  // Day 1 Dzuhur
imagecopyresampled($out, $png, $xday1+($xplus*2)+0.59, 257+32*0, 0, 0, 27, 27, $newwidth, $newheight); // Day 1 Asar
imagecopyresampled($out, $png, $xday1+($xplus*3)+0.5, 257+32*0, 0, 0, 27, 27, $newwidth, $newheight);  // Day 1 Maghrib
imagecopyresampled($out, $png, $xday1+($xplus*4)+0.5, 257+32*0, 0, 0, 27, 27, $newwidth, $newheight);  // Day 1 Isya

imagecopyresampled($out, $png, $xday1               , 257+32*1, 0, 0, 27, 27, $newwidth, $newheight);  // Day 2 Subuh
imagecopyresampled($out, $png, $xday1+($xplus*1)+0.3, 257+32*1, 0, 0, 27, 27, $newwidth, $newheight);  // Day 2 Dzuhur
imagecopyresampled($out, $png, $xday1+($xplus*2)+0.59, 257+32*1, 0, 0, 27, 27, $newwidth, $newheight); // Day 2 Asar
imagecopyresampled($out, $png, $xday1+($xplus*3)+0.5, 257+32*1, 0, 0, 27, 27, $newwidth, $newheight);  // Day 2 Maghrib
imagecopyresampled($out, $png, $xday1+($xplus*4)+0.5, 257+32*1, 0, 0, 27, 27, $newwidth, $newheight);  // Day 2 Isya

imagecopyresampled($out, $png, $xday1               , 257+32*2, 0, 0, 27, 27, $newwidth, $newheight);  // Day 3 Subuh
imagecopyresampled($out, $png, $xday1+($xplus*1)+0.3, 257+32*2, 0, 0, 27, 27, $newwidth, $newheight);  // Day 3 Dzuhur
imagecopyresampled($out, $png, $xday1+($xplus*2)+0.59, 257+32*2, 0, 0, 27, 27, $newwidth, $newheight); // Day 3 Asar
imagecopyresampled($out, $png, $xday1+($xplus*3)+0.5, 257+32*2, 0, 0, 27, 27, $newwidth, $newheight);  // Day 3 Maghrib
imagecopyresampled($out, $png, $xday1+($xplus*4)+0.5, 257+32*2, 0, 0, 27, 27, $newwidth, $newheight);  // Day 3 Isya

imagecopyresampled($out, $png, $xday1               , 257+32*3, 0, 0, 27, 27, $newwidth, $newheight);  // Day 4 Subuh
imagecopyresampled($out, $png, $xday1+($xplus*1)+0.3, 257+32*3, 0, 0, 27, 27, $newwidth, $newheight);  // Day 4 Dzuhur
imagecopyresampled($out, $png, $xday1+($xplus*2)+0.59, 257+32*3, 0, 0, 27, 27, $newwidth, $newheight); // Day 4 Asar
imagecopyresampled($out, $png, $xday1+($xplus*3)+0.5, 257+32*3, 0, 0, 27, 27, $newwidth, $newheight);  // Day 4 Maghrib
imagecopyresampled($out, $png, $xday1+($xplus*4)+0.5, 257+32*3, 0, 0, 27, 27, $newwidth, $newheight);  // Day 4 Isya

imagecopyresampled($out, $png, $xday1               , 257+32*4-0.1, 0, 0, 27, 27, $newwidth, $newheight);  // Day 5 Subuh
imagecopyresampled($out, $png, $xday1+($xplus*1)+0.3, 257+32*4-0.1, 0, 0, 27, 27, $newwidth, $newheight);  // Day 5 Dzuhur
imagecopyresampled($out, $png, $xday1+($xplus*2)+0.59, 257+32*4-0.1, 0, 0, 27, 27, $newwidth, $newheight); // Day 5 Asar
imagecopyresampled($out, $png, $xday1+($xplus*3)+0.5, 257+32*4-0.1, 0, 0, 27, 27, $newwidth, $newheight);  // Day 5 Maghrib
imagecopyresampled($out, $png, $xday1+($xplus*4)+0.5, 257+32*4-0.1, 0, 0, 27, 27, $newwidth, $newheight);  // Day 5 Isya

imagecopyresampled($out, $png, $xday1               , 257+32*5-0.2, 0, 0, 27, 27, $newwidth, $newheight);  // Day 6 Subuh
imagecopyresampled($out, $png, $xday1+($xplus*1)+0.3, 257+32*5-0.2, 0, 0, 27, 27, $newwidth, $newheight);  // Day 6 Dzuhur
imagecopyresampled($out, $png, $xday1+($xplus*2)+0.59, 257+32*5-0.2, 0, 0, 27, 27, $newwidth, $newheight); // Day 6 Asar
imagecopyresampled($out, $png, $xday1+($xplus*3)+0.5, 257+32*5-0.2, 0, 0, 27, 27, $newwidth, $newheight);  // Day 6 Maghrib
imagecopyresampled($out, $png, $xday1+($xplus*4)+0.5, 257+32*5-0.2, 0, 0, 27, 27, $newwidth, $newheight);  // Day 6 Isya

imagecopyresampled($out, $png, $xday1               , 257+32*6-0.4, 0, 0, 27, 27, $newwidth, $newheight);  // Day 7 Subuh
imagecopyresampled($out, $png, $xday1+($xplus*1)+0.3, 257+32*6-0.4, 0, 0, 27, 27, $newwidth, $newheight);  // Day 7 Dzuhur
imagecopyresampled($out, $png, $xday1+($xplus*2)+0.59, 257+32*6-0.4, 0, 0, 27, 27, $newwidth, $newheight); // Day 7 Asar
imagecopyresampled($out, $png, $xday1+($xplus*3)+0.5, 257+32*6-0.4, 0, 0, 27, 27, $newwidth, $newheight);  // Day 7 Maghrib
imagecopyresampled($out, $png, $xday1+($xplus*4)+0.5, 257+32*6-0.4, 0, 0, 27, 27, $newwidth, $newheight);  // Day 7 Isya

imagecopyresampled($out, $png, $xday1               , 257+32*7-1.2, 0, 0, 27, 27, $newwidth, $newheight);  // Day 8 Subuh
imagecopyresampled($out, $png, $xday1+($xplus*1)+0.3, 257+32*7-1.2, 0, 0, 27, 27, $newwidth, $newheight);  // Day 8 Dzuhur
imagecopyresampled($out, $png, $xday1+($xplus*2)+0.59, 257+32*7-1.2, 0, 0, 27, 27, $newwidth, $newheight); // Day 8 Asar
imagecopyresampled($out, $png, $xday1+($xplus*3)+0.5, 257+32*7-1.2, 0, 0, 27, 27, $newwidth, $newheight);  // Day 8 Maghrib
imagecopyresampled($out, $png, $xday1+($xplus*4)+0.5, 257+32*7-1.2, 0, 0, 27, 27, $newwidth, $newheight);  // Day 8 Isya

imagecopyresampled($out, $png, $xday1               , 257+32*8-1.4, 0, 0, 27, 27, $newwidth, $newheight);  // Day 9 Subuh
imagecopyresampled($out, $png, $xday1+($xplus*1)+0.3, 257+32*8-1.4, 0, 0, 27, 27, $newwidth, $newheight);  // Day 9 Dzuhur
imagecopyresampled($out, $png, $xday1+($xplus*2)+0.59, 257+32*8-1.4, 0, 0, 27, 27, $newwidth, $newheight); // Day 9 Asar
imagecopyresampled($out, $png, $xday1+($xplus*3)+0.5, 257+32*8-1.4, 0, 0, 27, 27, $newwidth, $newheight);  // Day 9 Maghrib
imagecopyresampled($out, $png, $xday1+($xplus*4)+0.5, 257+32*8-1.4, 0, 0, 27, 27, $newwidth, $newheight);  // Day 9 Isya

imagecopyresampled($out, $png, $xday1               , 257+32*9-1.7, 0, 0, 27, 27, $newwidth, $newheight);  // Day 10 Subuh
imagecopyresampled($out, $png, $xday1+($xplus*1)+0.3, 257+32*9-1.7, 0, 0, 27, 27, $newwidth, $newheight);  // Day 10 Dzuhur
imagecopyresampled($out, $png, $xday1+($xplus*2)+0.59, 257+32*9-1.7, 0, 0, 27, 27, $newwidth, $newheight); // Day 10 Asar
imagecopyresampled($out, $png, $xday1+($xplus*3)+0.5, 257+32*9-1.7, 0, 0, 27, 27, $newwidth, $newheight);  // Day 10 Maghrib
imagecopyresampled($out, $png, $xday1+($xplus*4)+0.5, 257+32*9-1.7, 0, 0, 27, 27, $newwidth, $newheight);  // Day 10 Isya

imagecopyresampled($out, $png, $xday1               , 257+32*10-2.2, 0, 0, 27, 27, $newwidth, $newheight);  // Day 11 Subuh
imagecopyresampled($out, $png, $xday1+($xplus*1)+0.3, 257+32*10-2.2, 0, 0, 27, 27, $newwidth, $newheight);  // Day 11 Dzuhur
imagecopyresampled($out, $png, $xday1+($xplus*2)+0.59, 257+32*10-2.2, 0, 0, 27, 27, $newwidth, $newheight); // Day 11 Asar
imagecopyresampled($out, $png, $xday1+($xplus*3)+0.5, 257+32*10-2.2, 0, 0, 27, 27, $newwidth, $newheight);  // Day 11 Maghrib
imagecopyresampled($out, $png, $xday1+($xplus*4)+0.5, 257+32*10-2.2, 0, 0, 27, 27, $newwidth, $newheight);  // Day 11 Isya

imagecopyresampled($out, $png, $xday1               , 257+32*11-2.6, 0, 0, 27, 27, $newwidth, $newheight);  // Day 12 Subuh
imagecopyresampled($out, $png, $xday1+($xplus*1)+0.3, 257+32*11-2.6, 0, 0, 27, 27, $newwidth, $newheight);  // Day 12 Dzuhur
imagecopyresampled($out, $png, $xday1+($xplus*2)+0.59, 257+32*11-2.6, 0, 0, 27, 27, $newwidth, $newheight); // Day 12 Asar
imagecopyresampled($out, $png, $xday1+($xplus*3)+0.5, 257+32*11-2.6, 0, 0, 27, 27, $newwidth, $newheight);  // Day 12 Maghrib
imagecopyresampled($out, $png, $xday1+($xplus*4)+0.5, 257+32*11-2.6, 0, 0, 27, 27, $newwidth, $newheight);  // Day 12 Isya

imagecopyresampled($out, $png, $xday1               , 257+32*12-3.1, 0, 0, 27, 27, $newwidth, $newheight);  // Day 13 Subuh
imagecopyresampled($out, $png, $xday1+($xplus*1)+0.3, 257+32*12-3.1, 0, 0, 27, 27, $newwidth, $newheight);  // Day 13 Dzuhur
imagecopyresampled($out, $png, $xday1+($xplus*2)+0.59, 257+32*12-3.1, 0, 0, 27, 27, $newwidth, $newheight); // Day 13 Asar
imagecopyresampled($out, $png, $xday1+($xplus*3)+0.5, 257+32*12-3.1, 0, 0, 27, 27, $newwidth, $newheight);  // Day 13 Maghrib
imagecopyresampled($out, $png, $xday1+($xplus*4)+0.5, 257+32*12-3.1, 0, 0, 27, 27, $newwidth, $newheight);  // Day 13 Isya

imagecopyresampled($out, $png, $xday1               , 257+32*13-3.6, 0, 0, 27, 27, $newwidth, $newheight);  // Day 14 Subuh
imagecopyresampled($out, $png, $xday1+($xplus*1)+0.3, 257+32*13-3.6, 0, 0, 27, 27, $newwidth, $newheight);  // Day 14 Dzuhur
imagecopyresampled($out, $png, $xday1+($xplus*2)+0.59, 257+32*13-3.6, 0, 0, 27, 27, $newwidth, $newheight); // Day 14 Asar
imagecopyresampled($out, $png, $xday1+($xplus*3)+0.5, 257+32*13-3.6, 0, 0, 27, 27, $newwidth, $newheight);  // Day 14 Maghrib
imagecopyresampled($out, $png, $xday1+($xplus*4)+0.5, 257+32*13-3.6, 0, 0, 27, 27, $newwidth, $newheight);  // Day 14 Isya

imagecopyresampled($out, $png, $xday1               , 257+32*14-4.2, 0, 0, 27, 27, $newwidth, $newheight);  // Day 15 Subuh
imagecopyresampled($out, $png, $xday1+($xplus*1)+0.3, 257+32*14-4.2, 0, 0, 27, 27, $newwidth, $newheight);  // Day 15 Dzuhur
imagecopyresampled($out, $png, $xday1+($xplus*2)+0.59, 257+32*14-4.2, 0, 0, 27, 27, $newwidth, $newheight); // Day 15 Asar
imagecopyresampled($out, $png, $xday1+($xplus*3)+0.5, 257+32*14-4.2, 0, 0, 27, 27, $newwidth, $newheight);  // Day 15 Maghrib
imagecopyresampled($out, $png, $xday1+($xplus*4)+0.5, 257+32*14-4.2, 0, 0, 27, 27, $newwidth, $newheight);  // Day 15 Isya

imagecopyresampled($out, $png, $xday1               , 257+32*15-4.2, 0, 0, 27, 27, $newwidth, $newheight);  // Day 16 Subuh
imagecopyresampled($out, $png, $xday1+($xplus*1)+0.3, 257+32*15-4.2, 0, 0, 27, 27, $newwidth, $newheight);  // Day 16 Dzuhur
imagecopyresampled($out, $png, $xday1+($xplus*2)+0.59, 257+32*15-4.2, 0, 0, 27, 27, $newwidth, $newheight); // Day 16 Asar
imagecopyresampled($out, $png, $xday1+($xplus*3)+0.5, 257+32*15-4.2, 0, 0, 27, 27, $newwidth, $newheight);  // Day 16 Maghrib
imagecopyresampled($out, $png, $xday1+($xplus*4)+0.5, 257+32*15-4.2, 0, 0, 27, 27, $newwidth, $newheight);  // Day 16 Isya

imagecopyresampled($out, $png, $xday1               , 257+32*16-4.2, 0, 0, 27, 27, $newwidth, $newheight);  // Day 17 Subuh
imagecopyresampled($out, $png, $xday1+($xplus*1)+0.3, 257+32*16-4.2, 0, 0, 27, 27, $newwidth, $newheight);  // Day 17 Dzuhur
imagecopyresampled($out, $png, $xday1+($xplus*2)+0.59, 257+32*16-4.2, 0, 0, 27, 27, $newwidth, $newheight); // Day 17 Asar
imagecopyresampled($out, $png, $xday1+($xplus*3)+0.5, 257+32*16-4.2, 0, 0, 27, 27, $newwidth, $newheight);  // Day 17 Maghrib
imagecopyresampled($out, $png, $xday1+($xplus*4)+0.5, 257+32*16-4.2, 0, 0, 27, 27, $newwidth, $newheight);  // Day 17 Isya

imagecopyresampled($out, $png, $xday1               , 257+32*17-4.2, 0, 0, 27, 27, $newwidth, $newheight);  // Day 18 Subuh
imagecopyresampled($out, $png, $xday1+($xplus*1)+0.3, 257+32*17-4.2, 0, 0, 27, 27, $newwidth, $newheight);  // Day 18 Dzuhur
imagecopyresampled($out, $png, $xday1+($xplus*2)+0.59, 257+32*17-4.2, 0, 0, 27, 27, $newwidth, $newheight); // Day 18 Asar
imagecopyresampled($out, $png, $xday1+($xplus*3)+0.5, 257+32*17-4.2, 0, 0, 27, 27, $newwidth, $newheight);  // Day 18 Maghrib
imagecopyresampled($out, $png, $xday1+($xplus*4)+0.5, 257+32*17-4.2, 0, 0, 27, 27, $newwidth, $newheight);  // Day 18 Isya

imagecopyresampled($out, $png, $xday1               , 257+32*18-4.8, 0, 0, 27, 27, $newwidth, $newheight);  // Day 19 Subuh
imagecopyresampled($out, $png, $xday1+($xplus*1)+0.3, 257+32*18-4.8, 0, 0, 27, 27, $newwidth, $newheight);  // Day 19 Dzuhur
imagecopyresampled($out, $png, $xday1+($xplus*2)+0.59, 257+32*18-4.8, 0, 0, 27, 27, $newwidth, $newheight); // Day 19 Asar
imagecopyresampled($out, $png, $xday1+($xplus*3)+0.5, 257+32*18-4.8, 0, 0, 27, 27, $newwidth, $newheight);  // Day 19 Maghrib
imagecopyresampled($out, $png, $xday1+($xplus*4)+0.5, 257+32*18-4.8, 0, 0, 27, 27, $newwidth, $newheight);  // Day 19 Isya

imagecopyresampled($out, $png, $xday1               , 257+32*19-5.2, 0, 0, 27, 27, $newwidth, $newheight);  // Day 20 Subuh
imagecopyresampled($out, $png, $xday1+($xplus*1)+0.3, 257+32*19-5.2, 0, 0, 27, 27, $newwidth, $newheight);  // Day 20 Dzuhur
imagecopyresampled($out, $png, $xday1+($xplus*2)+0.59, 257+32*19-5.2, 0, 0, 27, 27, $newwidth, $newheight); // Day 20 Asar
imagecopyresampled($out, $png, $xday1+($xplus*3)+0.5, 257+32*19-5.2, 0, 0, 27, 27, $newwidth, $newheight);  // Day 20 Maghrib
imagecopyresampled($out, $png, $xday1+($xplus*4)+0.5, 257+32*19-5.2, 0, 0, 27, 27, $newwidth, $newheight);  // Day 20 Isya

imagecopyresampled($out, $png, $xday1               , 257+32*20-5.5, 0, 0, 27, 27, $newwidth, $newheight);  // Day 21 Subuh
imagecopyresampled($out, $png, $xday1+($xplus*1)+0.3, 257+32*20-5.5, 0, 0, 27, 27, $newwidth, $newheight);  // Day 21 Dzuhur
imagecopyresampled($out, $png, $xday1+($xplus*2)+0.59, 257+32*20-5.5, 0, 0, 27, 27, $newwidth, $newheight); // Day 21 Asar
imagecopyresampled($out, $png, $xday1+($xplus*3)+0.5, 257+32*20-5.5, 0, 0, 27, 27, $newwidth, $newheight);  // Day 21 Maghrib
imagecopyresampled($out, $png, $xday1+($xplus*4)+0.5, 257+32*20-5.5, 0, 0, 27, 27, $newwidth, $newheight);  // Day 21 Isya

imagecopyresampled($out, $png, $xday1               , 257+32*21-6.5, 0, 0, 27, 27, $newwidth, $newheight);  // Day 22 Subuh
imagecopyresampled($out, $png, $xday1+($xplus*1)+0.3, 257+32*21-6.5, 0, 0, 27, 27, $newwidth, $newheight);  // Day 22 Dzuhur
imagecopyresampled($out, $png, $xday1+($xplus*2)+0.59, 257+32*21-6.5, 0, 0, 27, 27, $newwidth, $newheight); // Day 22 Asar
imagecopyresampled($out, $png, $xday1+($xplus*3)+0.5, 257+32*21-6.5, 0, 0, 27, 27, $newwidth, $newheight);  // Day 22 Maghrib
imagecopyresampled($out, $png, $xday1+($xplus*4)+0.5, 257+32*21-6.5, 0, 0, 27, 27, $newwidth, $newheight);  // Day 22 Isya

imagecopyresampled($out, $png, $xday1               , 257+32*22-6.5, 0, 0, 27, 27, $newwidth, $newheight);  // Day 23 Subuh
imagecopyresampled($out, $png, $xday1+($xplus*1)+0.3, 257+32*22-6.5, 0, 0, 27, 27, $newwidth, $newheight);  // Day 23 Dzuhur
imagecopyresampled($out, $png, $xday1+($xplus*2)+0.59, 257+32*22-6.5, 0, 0, 27, 27, $newwidth, $newheight); // Day 23 Asar
imagecopyresampled($out, $png, $xday1+($xplus*3)+0.5, 257+32*22-6.5, 0, 0, 27, 27, $newwidth, $newheight);  // Day 23 Maghrib
imagecopyresampled($out, $png, $xday1+($xplus*4)+0.5, 257+32*22-6.5, 0, 0, 27, 27, $newwidth, $newheight);  // Day 23 Isya

imagecopyresampled($out, $png, $xday1               , 257+32*23-7, 0, 0, 27, 27, $newwidth, $newheight);  // Day 24 Subuh
imagecopyresampled($out, $png, $xday1+($xplus*1)+0.3, 257+32*23-7, 0, 0, 27, 27, $newwidth, $newheight);  // Day 24 Dzuhur
imagecopyresampled($out, $png, $xday1+($xplus*2)+0.59, 257+32*23-7, 0, 0, 27, 27, $newwidth, $newheight); // Day 24 Asar
imagecopyresampled($out, $png, $xday1+($xplus*3)+0.5, 257+32*23-7, 0, 0, 27, 27, $newwidth, $newheight);  // Day 24 Maghrib
imagecopyresampled($out, $png, $xday1+($xplus*4)+0.5, 257+32*23-7, 0, 0, 27, 27, $newwidth, $newheight);  // Day 24 Isya

imagecopyresampled($out, $png, $xday1               , 257+32*24-7.5, 0, 0, 27, 27, $newwidth, $newheight);  // Day 25 Subuh
imagecopyresampled($out, $png, $xday1+($xplus*1)+0.3, 257+32*24-7.5, 0, 0, 27, 27, $newwidth, $newheight);  // Day 25 Dzuhur
imagecopyresampled($out, $png, $xday1+($xplus*2)+0.59, 257+32*24-7.5, 0, 0, 27, 27, $newwidth, $newheight); // Day 25 Asar
imagecopyresampled($out, $png, $xday1+($xplus*3)+0.5, 257+32*24-7.5, 0, 0, 27, 27, $newwidth, $newheight);  // Day 25 Maghrib
imagecopyresampled($out, $png, $xday1+($xplus*4)+0.5, 257+32*24-7.5, 0, 0, 27, 27, $newwidth, $newheight);  // Day 25 Isya

imagecopyresampled($out, $png, $xday1               , 257+32*25-7.5, 0, 0, 27, 27, $newwidth, $newheight);  // Day 26 Subuh
imagecopyresampled($out, $png, $xday1+($xplus*1)+0.3, 257+32*25-7.5, 0, 0, 27, 27, $newwidth, $newheight);  // Day 26 Dzuhur
imagecopyresampled($out, $png, $xday1+($xplus*2)+0.59, 257+32*25-7.5, 0, 0, 27, 27, $newwidth, $newheight); // Day 26 Asar
imagecopyresampled($out, $png, $xday1+($xplus*3)+0.5, 257+32*25-7.5, 0, 0, 27, 27, $newwidth, $newheight);  // Day 26 Maghrib
imagecopyresampled($out, $png, $xday1+($xplus*4)+0.5, 257+32*25-7.5, 0, 0, 27, 27, $newwidth, $newheight);  // Day 26 Isya

imagecopyresampled($out, $png, $xday1               , 257+32*26-8.5, 0, 0, 27, 27, $newwidth, $newheight);  // Day 27 Subuh
imagecopyresampled($out, $png, $xday1+($xplus*1)+0.3, 257+32*26-8.5, 0, 0, 27, 27, $newwidth, $newheight);  // Day 27 Dzuhur
imagecopyresampled($out, $png, $xday1+($xplus*2)+0.59, 257+32*26-8.5, 0, 0, 27, 27, $newwidth, $newheight); // Day 27 Asar
imagecopyresampled($out, $png, $xday1+($xplus*3)+0.5, 257+32*26-8.5, 0, 0, 27, 27, $newwidth, $newheight);  // Day 27 Maghrib
imagecopyresampled($out, $png, $xday1+($xplus*4)+0.5, 257+32*26-8.5, 0, 0, 27, 27, $newwidth, $newheight);  // Day 27 Isya

imagecopyresampled($out, $png, $xday1               , 257+32*27-8.5, 0, 0, 27, 27, $newwidth, $newheight);  // Day 28 Subuh
imagecopyresampled($out, $png, $xday1+($xplus*1)+0.3, 257+32*27-8.5, 0, 0, 27, 27, $newwidth, $newheight);  // Day 28 Dzuhur
imagecopyresampled($out, $png, $xday1+($xplus*2)+0.59, 257+32*27-8.5, 0, 0, 27, 27, $newwidth, $newheight); // Day 28 Asar
imagecopyresampled($out, $png, $xday1+($xplus*3)+0.5, 257+32*27-8.5, 0, 0, 27, 27, $newwidth, $newheight);  // Day 28 Maghrib
imagecopyresampled($out, $png, $xday1+($xplus*4)+0.5, 257+32*27-8.5, 0, 0, 27, 27, $newwidth, $newheight);  // Day 28 Isya

imagecopyresampled($out, $png, $xday1               , 257+32*28-8.5, 0, 0, 27, 27, $newwidth, $newheight);  // Day 29 Subuh
imagecopyresampled($out, $png, $xday1+($xplus*1)+0.3, 257+32*28-8.5, 0, 0, 27, 27, $newwidth, $newheight);  // Day 29 Dzuhur
imagecopyresampled($out, $png, $xday1+($xplus*2)+0.59, 257+32*28-8.5, 0, 0, 27, 27, $newwidth, $newheight); // Day 29 Asar
imagecopyresampled($out, $png, $xday1+($xplus*3)+0.5, 257+32*28-8.5, 0, 0, 27, 27, $newwidth, $newheight);  // Day 29 Maghrib
imagecopyresampled($out, $png, $xday1+($xplus*4)+0.5, 257+32*28-8.5, 0, 0, 27, 27, $newwidth, $newheight);  // Day 29 Isya

imagecopyresampled($out, $png, $xday1               , 257+32*29-8.5, 0, 0, 27, 27, $newwidth, $newheight);  // Day 30 Subuh
imagecopyresampled($out, $png, $xday1+($xplus*1)+0.3, 257+32*29-8.5, 0, 0, 27, 27, $newwidth, $newheight);  // Day 30 Dzuhur
imagecopyresampled($out, $png, $xday1+($xplus*2)+0.59, 257+32*29-8.5, 0, 0, 27, 27, $newwidth, $newheight); // Day 30 Asar
imagecopyresampled($out, $png, $xday1+($xplus*3)+0.5, 257+32*29-8.5, 0, 0, 27, 27, $newwidth, $newheight);  // Day 30 Maghrib
imagecopyresampled($out, $png, $xday1+($xplus*4)+0.5, 257+32*29-8.5, 0, 0, 27, 27, $newwidth, $newheight);  // Day 30 Isya



imagejpeg($out, null, 100);
remotebuild("destroy-internal-session","delete-database-session","request-lagback-onif","reflag-finish");
?>
