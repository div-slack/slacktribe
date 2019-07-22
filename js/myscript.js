 $(document).ready(function(){
            $(".navbar-toggler").click(function(){
                $(".menu").toggleClass("displaynone");
            });
              $(".subscribe-button").click(function(){
                 $(".myform").toggleClass("displaynone");                          
                                           
                                           });
     
            $(".carousel").attr(data-pause, false);
          });