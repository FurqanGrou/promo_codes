<!DOCTYPE html>
<html lang="ar" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promo Code</title>
</head>

<body style="direction: {{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

    <div>
        <div style="text-align: center;font-family: arial, sans-serif">
            <h3>{{ __('Payment is successfully received') }}</h3>
        </div>
        <br>
        <div style="font-weight: bold;font-size: 16px;">
            <p>
                {{ __('To complete the course registration process') }}
                {{ __('Please register and login to Al Nuraniah platform through the following link') }}
                <a href="https://eservices.fg2020.com">https://eservices.fg2020.com</a>
            </p>

            <p> {{ __('A video explaining Al Nuraniah platform registration process') }}
                <a href="{{ __('youtube_link') }}">{{ __('youtube_link') }}</a>
            </p>

            <p>
                {{ __('Important Note') }}<br>
                {{ __('When choosing the payment method, please us the following code', ['code' => $order->promoCode->code]) }}
            </p>

            <p>
                {{ __('Do not hesitate to contact us through the following email if you have any questions') }}
                <a href="mailto:courses@furqangroup.com">courses@furqangroup.com</a>
            </p>

            <br>
            <p style="text-align: center">{{ __('We are pleased for your joining Al Nuraniah course. Thank you for your trust') }}</p>
        </div>
    </div>

</body>

</html>
