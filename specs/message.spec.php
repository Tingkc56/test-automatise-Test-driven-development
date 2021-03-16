<?php 

require("./app/Message.php");


it("should return 'Moins d'une minute' with current time", function() {
    // Shameless green  
  
    $createdAt = date("Y-m-d H:i:s");
    $message = new Message("Un super post pikaface", "Un super contenu", $createdAt);
  
    expect("Moins d'une minute")->to->equal($message->timer());
  });



  it("should return 'une minute' with current time", function() {
    // Shameless green  

    //arrange
    $createdAt = 
    date(
      "Y-m-d H:i:s", 
      strtotime(date("Y-m-d H:i:s")." -1 minutes")
    );

    //act
    $message = new Message("Un super post pikaface", "Un super contenu", $createdAt);
  
    expect("Une minute")->to->equal($message->timer());
  });

  it("should return 'quelque minutes' with current time", function() {

    //arrange
    $createdAt = 
    date(
      "Y-m-d H:i:s", 
      strtotime(date("Y-m-d H:i:s")." -2 minutes")
    );

    //act
    $message = new Message("Un super post pikaface", "Un super contenu", $createdAt);
  
    expect("Quelque minutes")->to->equal($message->timer());
  });

  it("should return 'environ une demi d'heure' with current time", function() {

    //arrange

    $createdAt = 
    date(
      "Y-m-d H:i:s", 
      strtotime(date("Y-m-d H:i:s")." -24 minutes")
    );

    //act
    $message = new Message("Un super post pikaface", "Un super contenu", $createdAt);
  
    expect("environ une demi d'heure")->to->equal($message->timer());
  });

  it("should return 'plus d'une demi heure' with current time", function() {

    //arrange
 
    $createdAt = 
    date(
      "Y-m-d H:i:s", 
      strtotime(date("Y-m-d H:i:s")." -37 minutes")
    );

    //act
    $message = new Message("Un super post pikaface", "Un super contenu", $createdAt);
  
    expect("plus d'une demi heure")->to->equal($message->timer());
  });

  it("should return 'plus d'une heure' with current time", function() {

    //arrange
    $createdAt = date("Y-m-d H:i:s");
    $createdAt = 
    date(
      "Y-m-d H:i:s", 
      strtotime(date("Y-m-d H:i:s")." -60 minutes")
    );

    //act
    $message = new Message("Un super post pikaface", "Un super contenu", $createdAt);
  
    expect("plus d'une heure")->to->equal($message->timer());
  });

  it("should return 'plusieur heure' with current time", function() {

    //arrange
    $createdAt = date("Y-m-d H:i:s");
    $createdAt = 
    date(
      "Y-m-d H:i:s", 
      strtotime(date("Y-m-d H:i:s")." -120 minutes")
    );

    //act
    $message = new Message("Un super post pikaface", "Un super contenu", $createdAt);
  
    expect("plusieur heure")->to->equal($message->timer());
  });


