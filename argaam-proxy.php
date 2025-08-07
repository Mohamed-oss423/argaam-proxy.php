<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: text/html; charset=UTF-8");

// رابط الصفحة من موقع أرقام
$url = "https://www.argaam.com/ae-ar/companies/dfm/emirates-nbd/overview";

// اجلب محتوى الصفحة
$html = file_get_contents($url);

// استخراج الجزء اللي فيه البيانات المطلوبة (مثلاً div معين)
preg_match('/<div class="company-share-holder-dtls custom-change">(.*?)<\/div>/s', $html, $matches);

// عرض النتيجة
echo isset($matches[0]) ? $matches[0] : "لم يتم العثور على البيانات";
?>
