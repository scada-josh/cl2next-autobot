<?php
/*
 {
  "events": [
      {
        "replyToken": "nHuyWiB7yP5Zw52FIkcQobQuGDXCTA",
        "type": "message",
        "timestamp": 1462629479859,
        "source": {
             "type": "user",
             "userId": "U206d25c2ea6bd87c17655609a1c37cb8"
         },
         "message": {
             "id": "325708",
             "type": "text",
             "text": "Hello, world"
          }
      }
  ]
}
 */
require_once('./vendor/autoload.php');
// Namespace
use \LINE\LINEBot\HTTPClient\CurlHTTPClient;
use \LINE\LINEBot;
use \LINE\LINEBot\MessageBuilder\TextMessageBuilder;
// Token
$channel_token = 'N/pYjSeHHsoATphJIqboQ146qG6kOwEa8fbCEiDTT/dqfByxoBpwgByu2rXXUfrkcggYomr5ejsdVHDxrjKKsgfb7HqYCsSHKeRjmhPzaT6CDkxeA2uLvnfkjFt44V4nk8x6DUtEr3nN4mxlWwtQIwdB04t89/1O/w1cDnyilFU=';
$channel_secret = '31af7e7e2a682604ce10795a8fa2182a';
// Get message from Line API
$content = file_get_contents('php://input');
$events = json_decode($content, true);

error_log("LINE API Messaging");
error_log("Channel Token");
error_log($channel_token);
error_log("Content");
error_log($content);

if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
    
        // Line API send a lot of event type, we interested in message only.
		if ($event['type'] == 'message') {
            switch($event['message']['type']) {
                
                case 'text':
                    // Get replyToken
                    $replyToken = $event['replyToken'];
        
                    // Reply message
                    $respMessage = 'Hello, your message is '. $event['message']['text'];
            
                    $httpClient = new CurlHTTPClient($channel_token);
                    $bot = new LINEBot($httpClient, array('channelSecret' => $channel_secret));
        
                    $textMessageBuilder = new TextMessageBuilder($respMessage);
                    $response = $bot->replyMessage($replyToken, $textMessageBuilder);
                    
                    break;
            }
		}
	}
}
echo "OK";