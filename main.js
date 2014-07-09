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

    var inputReset = function() {
        $('input').val('');
        $('input').removeClass('inputError');
        $('form .message').text('');
    }

    var formValidation = function(currentObject) {
        var thisModal = $(currentObject).parents('.modal');
        var inputText = thisModal.find('input');
        inputText.each(function(){
            var value = $(this).val();
            if (value == '') {
                $('form .message').prepend().text('Error!!!!');
                $(this).addClass('inputError');
            }
            else {
                $('form .message').prepend().text('');
                formValidation();
            }

        });


        
    }

// Form validation
$('.submitButton').on('click', function(event) {
    event.preventDefault();
    var currentObject = $(this);
    formValidation(currentObject);
    if ($('.message').text() == '') {
        $(this).parents('.modal').hide();
        inputReset();
        if ($(this).hasClass('logInSubmitButton') || $(this).hasClass('registerSubmitButton')) {
            headerButtons();
        }
    }
});

// MODALS
// $('form').on('submit', function(event) {
//     event.preventDefault();
//     $('.modal').hide();
//     inputReset();
// });

$('.exitButton').on('click', function() {
    $('.modal').hide();
    inputReset();
});

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
    inputReset();
});

$('.modal form').on('click', function(event) {
    event.stopPropagation();
});

$('.addNewItem').on('click', function(event) {
    event.preventDefault();
    $('.itemModal').show();
});

$('.itemModal .submitButton').on('click', function(event){
    event.preventDefault();
    $('.itemModal').hide();
    inputReset();
});

$('.addNewFoundItem').on('click', function(event) {
    event.preventDefault();
    $('.foundItemModal').show();
});

$('.foundItemModal .submitButton').on('click', function(event){
    event.preventDefault();
    $('.foundItemModal').hide();
    inputReset();
});

$('.updateAccountButton').on('click', function() {
    $('.updateAccountModal').show();
});

$('.deleteAccountButton').on('click', function() {
    $('.deleteAccountModal').show();
});


// Media Object
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


// Functions specific to index page

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