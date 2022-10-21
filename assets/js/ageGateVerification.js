/* 
    Custom age gate verification
*/

$(document).ready(() => {

    const URL_REDIRECT = "https://www.google.com/"

    if(Cookies.get('ageVerification') !== 'true'){
        $('.age-verification-popup-container').addClass('age-verification-popup-show');
    }else{
        $('.age-verification-popup-container').removeClass('age-verification-popup-show');
    }

    $('.age-verification-item-allow-buttons-yes').on('click', function () {
        $('.age-verification-popup-container').removeClass('age-verification-popup-show');
        Cookies.set('ageVerification', 'true', { expires: 30 });
    });

    $('.age-verification-item-allow-buttons-no').on('click', function () {
        window.location.href = URL_REDIRECT;
    });
});