$(document).ready(function(){


$("#hideLogin").click(function(){ // once this element is clicked, hide login form, show register form
$("#loginForm").hide();
$("#RegisterForm").show();
});

$("#hideRegister").click(function(){
$("#loginForm").show();
$("#RegisterForm").hide();
});
});