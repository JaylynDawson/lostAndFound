$(function() {


// MODALS
$('.logInButton').on('click', function() {
    $('.logInModal').show();
})

$('.registerButton').on('click', function() {
    $('.registerModal').show();
})

$('.forgotPassword').on('click', function() {
    $(this).parents('.modal').hide();
    $('.forgotPasswordModal').show();
})








$('.exitButton').on('click', function() {
    $('.modal').hide();
})






});