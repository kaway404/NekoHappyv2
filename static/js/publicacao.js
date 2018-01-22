var msg = document.getElementById('bakaetes');
var closemsg = document.getElementById('close');
$(function() {
$("#publish").click(function() {
var textcontent = $("#content").val();
var dataString = 'content='+ textcontent;
if(textcontent=='')
{
$("#fuck").text("Você não pode deixar o campo vazio.");
msg.style = "display: block";
}
else
{
$.ajax({
type: "POST",
url: "actionpost.php",
data: dataString,
cache: true,
success: function(html){
$("#show").after(html);
document.getElementById('content').value='';
$("#flash").hide();
$("#content").focus();
}  
});
}
location.reload();
return false;
});
});

 $('#close').click(function(){
        	msg.style = "display: none;";
   		 });
