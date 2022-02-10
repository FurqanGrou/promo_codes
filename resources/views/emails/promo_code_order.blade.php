<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>report</title>
</head>
<style>
    td {
        text-align: center;
        font-size: 20px;
        font-weight: bold;
        border: gray 1px solid;
        width: 400px;
        height: 35px;
    }

    table {
        border: gray 1px solid;
    }
</style>

<body>
<div style="border: 2px solid black; width: 70%; margin: 0 auto;">
    <div style="text-align: center;font-family: arial, sans-serif">
        <img src="{{ public_path('dashboard\assets\img\logo2.png') }}" alt="">
        <h1> شراء كوبون اشتراك للتسجيل في الدورات </h1>
    </div>

    <div>

        {{-- Detaiels--}}
        <table dir="rtl" style="width: 100%; font-weight: bold; border-collapse: collapse;">
            <tbody>
            <tr style="height: 40px;">
                <td style="width: 30%;padding-right:10px;text-align: right;border: 1px solid gray; font-size: 16px;font-family: arial, sans-serif">
                    الاسم:
                </td>
                <td style="border: 1px solid gray;width: 30%; font-size: 16px; text-align: center;font-family: arial, sans-serif">
                    الكوبون:
                </td>
                <td style="border: 1px solid gray;width: 40%; font-size: 16px; text-align: center;font-family: arial, sans-serif">
                    السعر:
                </td>
            </tr>
            <tr style="height: 40px">
                <td style="width: 30%;padding-right:10px;text-align: right;border: 1px solid gray; font-size: 16px;font-family: arial, sans-serif">
                    {{ $order->name }}
                </td>
                <td style="border: 1px solid gray;width: 30%; font-size: 16px; text-align: center;font-family: arial, sans-serif">
                    {{ $order->promoCode->code }}
                </td>
                <td style="border: 1px solid gray;width: 40%; font-size: 16px; text-align: center;font-family: arial, sans-serif">
                    {{ $order->cost . '$' }}
                </td>

            </tr>

            </tbody>
        </table>

    </div>
</div>
</body>

</html>
