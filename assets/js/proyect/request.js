$("#new_card").hide();


$("#new_request").click(function(){
	$("#list_card").hide();
	$("#new_card").show();
});
$("#exit_card").click(function(){
	$("#list_card").show();
	$("#new_card").hide();
});

//funcion de tiempo
  function tiempo(e){
  	
  	setTimeout(function(){
  		location.href = "?controller="+e;
  	},1500);

   
 }


