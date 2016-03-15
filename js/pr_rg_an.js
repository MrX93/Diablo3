$(document).ready(function()
{
																								
$("#login").click(function()
	{
	$("#loginforma").slideToggle(350);
	$("#anketaforma").fadeOut("swing");
	$("#registerforma").fadeOut("swing");	
	});
});

$(document).ready(function()
{
	$("#registerforma").hide();
							
$("#register").click(function()
	{
	$("#registerforma").slideToggle(400);
	$("#loginforma").fadeOut("swing");
	$("#anketaforma").fadeOut("swing");								
	});
});
	
$(document).ready(function()
{
	$("#anketaforma").hide();
							
$("#anketa").click(function()
	{
	$("#anketaforma").slideToggle(350);
	$("#loginforma").fadeOut("swing");
	$("#registerforma").fadeOut("swing");	
	});
});