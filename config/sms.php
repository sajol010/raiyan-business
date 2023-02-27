<?php

return [
    "baseUrl"=>env("SMS_URL", 'http://g.dianasms.com/smsapi'),
    "apiKey"=>env("SMS_GATEWAY_API_KEY"),
    "senderID"=>env("SMS_GATEWAY_SENDER_ID")
];
