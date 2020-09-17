$(document).ready(function(){
  
  $("#loginAsEntreprise").click(function(){
        $(".loginAsFreeForm").hide();
        $(".CreateEntForm").hide();
         $(".CreateFreeForm").hide();
         $(".CreateClienttForm").hide();
        $(".loginAsClientForm").hide();
        $(".loginAsEntrepriseForm").slideToggle();
    });

   $("#loginAsFreelance").click(function(){
        
        $(".loginAsClientForm").hide();
        $(".CreateEntForm").hide();
        $(".CreateFreeForm").hide();
        $(".CreateClienttForm").hide();
         $(".loginAsEntrepriseForm").hide();
        $(".loginAsFreeForm").slideToggle();
	});
  
$("#createENt").click(function(){

        $(".loginAsClientForm").hide();
        $(".CreateEntForm").slideToggle();
        $(".loginAsEntrepriseForm").hide();
        $(".CreateFreeForm").hide();
        $(".CreateClienttForm").hide();
        $('#loginAsEntreprise').slider( 'disable' );
  });
$("#createFree").click(function(){
      
        $(".loginAsClientForm").hide();
        $(".CreateEntForm").hide();
        $(".CreateClienttForm").hide();
        $(".loginAsEntrepriseForm").hide();
        $(".loginAsFreeForm").hide();
        $(".CreateFreeForm").slideToggle();
  });
$("#loginAsClient").click(function(){
        $(".loginAsFreeForm").hide();
        $(".CreateEntForm").hide();
         $(".CreateFreeForm").hide();
        $(".loginAsEntrepriseForm").hide();
        $(".CreateClienttForm").hide();
        $(".loginAsClientForm").slideToggle();
    });

$("#createClient").click(function(){
        $(".loginAsFreeForm").hide();
        $(".CreateEntForm").hide();
         $(".CreateFreeForm").hide();
        $(".loginAsEntrepriseForm").hide();
        $(".loginAsClientForm").hide();
        $(".CreateClienttForm").slideToggle();

    });
$("#logEnt").click(function(){
        $(".loginAsEntrepriseForm").slideToggle();
    });
$("#logFree").click(function(){
       
        $(".loginAsFreeForm").slideToggle();
});
 
$("#plusDinfo").click(function(){
      
      $(".plusDinfoForm").slideToggle();
});
$("#plusInfo").click(function(){
      
      $(".delateSerForm ").slideToggle();
});

$("#contactForm").click(function(){
       $(".plusDinfoForm").hide();
      $(".onfoForm ").slideToggle('fast');
});
$("#plusDinf").click(function(){
       $(".plusDinfohh").slideToggle();
});
});