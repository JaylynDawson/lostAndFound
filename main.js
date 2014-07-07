$(function() {

    var headerButtons = function() {
        $('.logInButtons').toggle();
        $('.logOutButton').toggle();
    }

    var stopModalScrolling = function() {
        $('html').css('overflow', 'hidden');
    }

    var resetScrolling = function() {
        $('html').css('overflow', 'visable');
    }

// BUTTONS
$('form').on('submit', function(event) {
    event.preventDefault();
    $('.modal').hide();
});

$('.logInSubmitButton').on('click', function() {
    headerButtons();
});

$('.registerSubmitButton').on('click', function() {
    headerButtons();
});

// $('.logOutButton a').on('click', function() {
//     headerButtons();
// });

$('.exitButton').on('click', function() {
    $('.modal').hide();
});


// MODALS
$('.logInButton').on('click', function() {
    $('.logInModal').show();
    $('.decisionModal').hide();
});

$('.registerButton').on('click', function() {
    $('.registerModal').show();
    stopModalScrolling();
    $('.decisionModal').hide();
});

$('.forgotPassword').on('click', function() {
    $(this).parents('.modal').hide();
    $('.forgotPasswordModal').show();
});

$('.modal').on('click', function() {
    $(this).hide();
});

$('.modal form').on('click', function(event) {
    event.stopPropagation();
});

$('.mediaObject2').on('click', function(event) {
    event.preventDefault();
    var itemClass = $(this).attr('class');
    var innerClass = $(this).find('div').attr('class');

    if (itemClass == 'mediaObject2 lostItem' ) {
        $(this).removeClass('lostItem');
    }
    else if (innerClass != 'addNewItem' && innerClass != 'addNewFoundItem') {
        $(this).addClass('lostItem');
    }
});

$('.addNewItem').on('click', function(event) {
    event.preventDefault();
    $('.itemModal').show();
});

$('.itemModal .submitButton').on('click', function(event){
    event.preventDefault();
    $('.itemModal').hide();
});

$('.addNewFoundItem').on('click', function(event) {
    event.preventDefault();
    $('.foundItemModal').show();
});

$('.foundItemModal .submitButton').on('click', function(event){
    event.preventDefault();
    $('.foundItemModal').hide();
});

$('.updateAccountButton').on('click', function() {
    $('.updateAccountModal').show();
});

$('.deleteAccountButton').on('click', function() {
    $('.deleteAccountModal').show();
});




$('.indexLostButton').on('click', function(event) {
    event.preventDefault();
    $('.indexItemModal').show();
});

$('.indexItemModal .submitButton').on('click', function(event){
    event.preventDefault();
    $('.indexItemModal').hide();
    $('.decisionModal').show();
});

$('.indexFoundButton').on('click', function(event) {
    event.preventDefault();
    $('.indexFoundItemModal').show();
});

$('.indexFoundItemModal .submitButton').on('click', function(event){
    event.preventDefault();
    $('.indexFoundItemModal').hide();
    $('.decisionModal').show();
});



});