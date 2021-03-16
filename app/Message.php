<?php

class Message{

    private $title;
    private $content;
    private $createdAt;

    function __construct($title, $content, $createdAt){
        $this->title = $title;
        $this->content = $content;
        $this->createdAt = $createdAt;
    }

    function timer(){
        
        $createdDate = DateTime::createFromFormat('Y-m-d H:i:s', $this->createdAt);
        $currentDate = new DateTime();

        $diff = $currentDate->getTimestamp() - $createdDate->getTimestamp();

        
        if( $diff >= 2*60*60) {
            return "plusieur heure";
        } elseif( $diff >= 60*60) {
            return "plus d'une heure";
        } elseif( $diff >= 37*60) {
            return "plus d'une demi heure";
        } elseif( $diff >= 1440) {
            return "environ une demi d'heure";
        } elseif($diff >= 120) {
            return "Quelque minutes";
        } elseif($diff == 60){
            return "Une minute";
        } {
          return "Moins d'une minute";
        }  
    }

}


// new Message("toto", "content", "2012-03-16 12:07:05");

// class DateTime {

//     public static function createFromFormat($format, $date) {
//       return new DateTime()
//     }

//     function __construct($date = now) {

//     } 
// }