<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SmsService
{

    private $baseUrl;
    private $apiKey;
    private $senderID;
    private $otp;
    private $message;
    public function __construct($apiKey, $senderID){
        $this->baseUrl = config('sms.baseUrl');
        $this->apiKey = config('sms.apiKey');
        $this->senderID = config('sms.senderID');
    }

    /**
     * @param $mobieNumber
     * @return \Illuminate\Http\Client\Response
     */
    public function sendSms($mobieNumber): \Illuminate\Http\Client\Response
    {
        return Http::post($this->baseUrl, [
            "api_key" => $this->apiKey,
            "type" => "text",
            "contacts" => $mobieNumber,
            "senderid" => $this->senderID,
            "msg" => $this->getMessage()
        ]);
    }

    /**
     * @return array|string|string[]
     */
    private function getMessage(): array|string
    {
        return $this->processedMessage();
    }

    /**
     * @param $message
     * @return void
     */
    public function setTemplate($message): void
    {
        $this->message = $message;
    }

    /**
     * @return array|string|string[]
     */
    private function processedMessage(): array|string
    {
        return str_replace('%otp%', $this->otp, $this->message);
    }

    /**
     * @param $otp
     * @return void
     */
    public function setOtpCode($otp): void
    {
        $this->otp = $otp;
    }

}
