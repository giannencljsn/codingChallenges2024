<?php

class Message{
    public $id = 0;
    public $sender = ""; 
    public $recipient = "";
    public $subject = "";
    public $content = "";
    public $property = [];


        function __construct(){
        $this->property = $this->extractProperties();
    }

    public function extractProperties(){
        return get_object_vars($this);
    }
    //Q1: is_valid function to loop through each, return false if one is empty
        function is_valid(){
            $this->property = array(
                'id' => $this->id,
                'sender' => $this->sender,
                'recipient' => $this->recipient,
                'subject' => $this->subject,
                'content' => $this->content
            );
            foreach($this->property as $value){
                if($value === '' && $value !==0){
                    return false;
                }

            }
            return true;
        }

    //Q2: to_json, return a valid JSON string representation of the object
    function to_json(...$keys) {
        $json = [];

        if(!empty($keys)){
            foreach ($keys as $key) {
                if (property_exists($this, $key)) {
                    $json[$key] = $this->$key;
                }
            }
            return json_encode($json);
        }else{
            return json_encode($this->property);
        }
       
    }
 
       
    //Q3: from_json, takes valid JSON string representing a message, can set the values of the object based on the JSON file
    // Method to decode a JSON string and set object properties
         // Method to decode a JSON string and set or get object properties
  
         public function from_json($json_string) {
            $data = json_decode($json_string, true);
    
            if ($data === null) {
                return false; // JSON is invalid
            }
    
            foreach ($data as $key => $value) {
                if (property_exists($this, $key)) {
                    // Set or update property value
                    $this->$key = $value;
                }
            }
    
            return true; // Object properties updated
        }
    }

      
$message = new Message();

$message->id = 1;
$message->sender = "Sender Name";
$message->recipient = "Recipient Name";
$message->subject = "Subject Name";
$message->content = "Content Name";

echo $message->is_valid() ? "True": "False";
echo "<br>";
echo $message->to_json();
echo "<br>";
echo $message->to_json("id","recipient","sender");
echo "<br>";

// Set properties from JSON string
$message->from_json('{ "id": 1, "recipient": "recipient@email.test", "sender": "sender@email.test", "content": "Hello! This is my content!", "subject": "Test Subject" }');
echo "<br>";
// Get individual property values
echo $message->sender . "\n"; //outputs : sender@email.test
echo "<br>";
// Update individual property value
$message->from_json('{ "sender": "newsender@mail.com" }');
echo "<br>";

// Get updated individual property value
echo $message->sender . "\n"; //outputs : newsender@mail.com





