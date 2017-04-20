jQuery(function(){
  $(".error").delay(3000).fadeOut(3000);


  //login page
  $("#userInput").blur(function(event) {
    if(this.value == ''){
      $(".userInputError").fadeIn("slow");
    }
    if(this.value != ''){
      $(".userInputError").fadeOut("slow");
    }

  });

  $("#passInput").blur(function(event) {
    if(this.value == ''){
      $(".passInputError").fadeIn("slow");
    }
    if(this.value != ''){
      $(".passInputError").fadeOut("slow");
    }

  });

  $("#tname").blur(function(event) {
    if(this.value == ''){
      $("#fillError").fadeIn("slow");
    }
    if(this.value != ''){
      $("#fillError").fadeOut("slow");
    }

  });

  /*register page*/
  $("#user").blur(function(event) {
    if(this.value == ''){
      $(".userError").fadeIn("slow");
    }
    if(this.value != ''){
      $(".userError").fadeOut("slow");
    }

  });

  $("#email").blur(function(event) {
    if(this.value == ''){
      $(".emailError").fadeIn("slow");
    }
    if(this.value != ''){
      $(".emailError").fadeOut("slow");
    }

  });

  $("#password").blur(function(event) {
    if(this.value == ''){
      $(".passwordError").fadeIn("slow");
    }
    if(this.value != ''){
      $(".passwordError").fadeOut("slow");
    }

  });

  });
