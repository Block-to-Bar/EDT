$(document).ready(function() {
	
						$(".idiomaboton").click(function(){
  $('#idiomas').toggle(300);
		
			
});	

	  $(".enelindex").click(function(event){
                event.preventDefault()
                
                $('html, body').animate({
                scrollTop: $($(this).attr("href")).offset().top
                }, 1000);
            });
												
												
												
						
												
												
												
												
												
												
												
												
	
	});