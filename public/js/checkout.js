Stripe.setPublishableKey('pk_test_IUB4hdTkVDDWtUqPz3GoFJRY');
var $form = $('#checkout-form');
$form.submit(function (event) {
    $('#card-errors').addClass('hidden');
    $form.find('button').prop('disabled', true);
    Stripe.card.createToken({
        number: $('#card-no').val(),
        cvc: $('#cvc').val(),
        exp_month: $('#expiry-month').val(),
        exp_year: $('#expiry-year').val(),
        name: $('#name').val()
    }, stripeResponseHandler);
    return false;
});

function stripeResponseHandler(status, response) {
    if (response.error) {
        $('#card-errors').removeClass('hidden');
        $('#card-errors').text(response.error.message);
        $form.find('button').prop('disabled', false);
    } else {
        var token = response.id;
        var grandTotal = $('#grandTotal').val();
        $form.append($('<input type="hidden" name="stripeToken" />>').val(token));
        $form.append($('<input type="hidden" name="cartTotal" />>').val(grandTotal));
        $form.get(0).submit();
    }
}