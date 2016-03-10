$(document).ready(function(){
function validate_email(email){
$.post('email_validate.php',{email:email},function(data){
$('#email_feedback').text(data);
})
}
$('#email').focusin(function(){
if($('#email').val()=='')
{
$('#email_feedback').text('Go on enter an email address')
}
else{
validate_email($('#email').val());
}
}).blur(function(){
$('#email_feedback').text('');
}).keyup(function(){
validate_email($('#email').val());
})
})