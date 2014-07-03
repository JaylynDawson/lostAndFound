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

$('.logOutButton a').on('click', function() {
    headerButtons();
});

$('.exitButton').on('click', function() {
    $('.modal').hide();
});


// MODALS
$('.logInButton').on('click', function() {
    $('.logInModal').show();
});

$('.registerButton').on('click', function() {
    $('.registerModal').show();
    stopModalScrolling();
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





});