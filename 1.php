<?php
//neveshteh shode tvasatoe #elyas #galikeshi @sudo_avenger
ob_start();
//token ro inja vared konid
define('API_KEY','188707250:AAGQUoT-wdOCX2u7iR1VIyewchFHTUGGWyA');
$admin = "125858918";
$admin2 = "233503938";
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $message->message_id;
$chat_id = $message->chat->id;
$fname = $message->chat->first_name;
$uname = $message->chat->username;
$text1 = $message->text;
$fadmin = $message->from->id;
$chatid = $update->callback_query->message->chat->id;
$data = $update->callback_query->data;
$reply = $update->message->reply_to_message->forward_from->id;
$forward = $update->message->forward_from;
$query=$update->callback_query;
$inline=$update->inline_query;
$channel_forward = $update->channel_post->forward_from;
$channel_text = $update->channel_post->text;
$messageid = $update->callback_query->message->message_id;



if($text1=="/start"){
 
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"سلام این بات\n رو ناد  خان ساخته احترام بزار"
]);
}



elseif($tex1=="/start"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"لطفا یک دکمه انتخاب کنید",
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"دکمه2"],['text'=>"دکمه اول"]
],
]
])
]);
}elseif($tex1=="دکمه اول"),($tex1=="دکمه2"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"سلام",

]);









؟>
