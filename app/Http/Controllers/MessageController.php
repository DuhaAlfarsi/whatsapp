<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;


class MessageController extends Controller
{
    public function send(){
        $sid    = "ACca636c8b624c42d60edc494bea543583"; 
        $token  = "ccef8a39968727b5fef739f226c0c93c"; 
        $twilio = new Client($sid, $token); 
        
        $message = $twilio->messages 
                        ->create("whatsapp:+96891220526", // to 
                                array( 
                                    "from" => "whatsapp:+14155238886",       
                                    "body" => "هلا" 
                                ) 
                        ); 
        
        print($message->sid);

            }

}
