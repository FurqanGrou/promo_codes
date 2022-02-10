<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Courses Promo Codes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <style>

        * {
            margin: 0;
            padding: 0
        }

        html {
            height: 100%
        }

        p {
            color: grey
        }

        .btn-primary {
            background-color: #25408F !important;
            border-color: #25408F !important;
        }

        .label-time {
            margin-right: 25px !important;
        }

        .input-time {
            width: auto !important;
        }

        @if(app()->getLocale() != 'ar')
        .text-right {
            text-align: left !important;
        }
        .label-time {
            margin-left: 25px;
            margin-right: 0 !important;
        }
        .input-time {
            margin: 0 !important;
        }
        @endif

    #heading {
            text-transform: uppercase;
            color: #25408F;
            font-weight: normal
        }

        #msform {
            text-align: center;
            position: relative;
            margin-top: 20px;
            font-family: 'Cairo', sans-serif;
        }

        #msform fieldset {
            background: white;
            border: 0 none;
            border-radius: 0.5rem;
            box-sizing: border-box;
            width: 100%;
            margin: 0;
            padding-bottom: 20px;
            position: relative
        }

        .form-card {
            text-align: left
        }

        #msform fieldset:not(:first-of-type) {
            display: none
        }

        #msform input,
        #msform textarea {
            padding: 8px 15px 8px 15px;
            border: 1px solid #ccc;
            border-radius: 0px;
            margin-bottom: 25px;
            margin-top: 2px;
            width: 100%;
            box-sizing: border-box;
            font-family: 'Cairo', sans-serif;
            color: #2C3E50;
            background-color: #ECEFF1;
            font-size: 16px;
            letter-spacing: 1px
        }

        #msform input:focus,
        #msform textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #25408F;
            outline-width: 0
        }

        #msform .action-button {
            width: 100px;
            background: #25408F;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 0px 10px 5px;
            float: right
        }

        #msform .action-button:hover,
        #msform .action-button:focus {
            background-color: #311B92
        }

        #msform .action-button-previous {
            width: 100px;
            background: #616161;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px 10px 0px;
            float: right
        }

        #msform .action-button-previous:hover,
        #msform .action-button-previous:focus {
            background-color: #000000
        }

        .card {
            z-index: 0;
            border: none;
            position: relative
        }

        .fs-title {
            font-size: 25px;
            color: #25408F;
            margin-bottom: 15px;
            font-weight: normal;
            text-align: left
        }

        .purple-text {
            color: #25408F;
            font-weight: normal
        }

        .steps {
            font-size: 25px;
            color: gray;
            margin-bottom: 10px;
            font-weight: normal;
            text-align: right
        }

        .fieldlabels {
            color: gray;
            text-align: left
        }

        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            color: lightgrey
        }

        #progressbar .active {
            color: #25408F
        }

        #progressbar li {
            list-style-type: none;
            font-size: 15px;
            width: 33%;
            float: left;
            position: relative;
            font-weight: 400
        }

        #progressbar #account:before {
            font-family: FontAwesome;
            content: "\f13e"
        }

        #progressbar #personal:before {
            font-family: FontAwesome;
            content: "\f007"
        }

        #progressbar #payment:before {
            font-family: FontAwesome;
            content: "\f030"
        }

        #progressbar #confirm:before {
            font-family: FontAwesome;
            content: "\f00c"
        }

        #progressbar li:before {
            width: 50px;
            height: 50px;
            line-height: 45px;
            display: block;
            font-size: 20px;
            color: #ffffff;
            background: lightgray;
            border-radius: 50%;
            margin: 0 auto 10px auto;
            padding: 2px
        }

        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: lightgray;
            position: absolute;
            left: 0;
            top: 25px;
            z-index: -1
        }

        #msform label {
            color: black !important;
            font-weight: bold !important;
            font-family: 'Cairo', sans-serif;
        }

        #msform #checks-section label {
            color: black !important;
        }

        #progressbar li.active:before,
        #progressbar li.active:after {
            background: #25408F
        }

        .progress {
            height: 20px
        }

        .progress-bar {
            background-color: #25408F
        }

        .fit-image {
            width: 100%;
            object-fit: cover
        }
    </style>

    <style>
        .ltr-table {
            margin: auto !important;
        }
        .ltr-table tr td{
            text-align: center !important;
            font-size: 12pt;
            color: #000000;
            font-width: bold;
            padding: 5px;
        }
        @if(app()->getLocale() == 'ar')
            #msform .label-right {
            text-align: right !important;
        }
        @endif

                #top-nav-links .nav-item {
            margin: 5px;
        }
        #top-nav-links .nav-item a {
            background: transparent !important;
            border-color: transparent !important;
            color: #f68b32 !important;
            font-size: 13px;
            font-weight: bold;
            font-family: Cairo;
        }
    </style>

    {{--  checkout frame styles  --}}
    <style>*,*::after,*::before{box-sizing:border-box}html{padding:1rem;background-color:#FFF;font-family: 'Cairo', sans-serif;, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif}#payment-form{width:31.5rem;margin:0 auto}iframe{width:100%}.one-liner{display:flex;flex-direction:column}#pay-button{border:none;border-radius:3px;color:#FFF;font-weight:500;height:40px;width:100%;background-color:#13395E;box-shadow:0 1px 3px 0 rgba(19,57,94,0.4)}#pay-button:active{background-color:#0B2A49;box-shadow:0 1px 3px 0 rgba(19,57,94,0.4)}#pay-button:hover{background-color:#15406B;box-shadow:0 2px 5px 0 rgba(19,57,94,0.4)}#pay-button:disabled{background-color:#697887;box-shadow:none}#pay-button:not(:disabled){cursor:pointer}.card-frame{border:solid 1px #13395E;border-radius:3px;width:100%;margin-bottom:8px;height:40px;box-shadow:0 1px 3px 0 rgba(19,57,94,0.2)}.card-frame.frame--rendered{opacity:1}.card-frame.frame--rendered.frame--focus{border:solid 1px #13395E;box-shadow:0 2px 5px 0 rgba(19,57,94,0.15)}.card-frame.frame--rendered.frame--invalid{border:solid 1px #D96830;box-shadow:0 2px 5px 0 rgba(217,104,48,0.15)}.success-payment-message{color:#13395E;line-height:1.4}.token{color:#b35e14;font-size:0.9rem;font-family: 'Cairo', sans-serif;}@media screen and (min-width: 31rem){.one-liner{flex-direction:row}.card-frame{width:318px;margin-bottom:0}#pay-button{width:175px;margin-left:8px}}</style>

</head>
<body>

<div class="container-fluid">

    <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-center">
        <ul class="navbar-nav" id="top-nav-links">
            <li class="nav-item">
                <a class="btn btn-primary" data-toggle="modal" data-target="#Terms-And-Conditions" href="#">{{ __('Terms And Conditions') }}</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-primary" data-toggle="modal" data-target="#Refund-Policy" href="#">{{ __('Refund Policy') }}</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-primary" data-toggle="modal" data-target="#Privacy-Policy" href="#">{{ __('Privacy Policy') }}</a>
            </li>
        </ul>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="Terms-And-Conditions" tabindex="-1" role="dialog" aria-labelledby="Terms-And-Conditions" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">{{ __('Terms And Conditions') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! __('Terms And Conditions Text') !!}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="Refund-Policy" tabindex="-1" role="dialog" aria-labelledby="Refund-Policy" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">{{ __('Refund Policy') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! __('Refund Policy Text') !!}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="Privacy-Policy" tabindex="-1" role="dialog" aria-labelledby="Privacy-Policy" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">{{ __('Privacy Policy') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! __('Privacy Policy Text') !!}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">

            <ul class="navbar-nav m-auto">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li class="nav-item active">
                        <a class="nav-link"
                           href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"> {{ $properties['native'] }}
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                @endforeach
            </ul>

        </div>
    </nav>

    <div class="alert alert-danger d-none" id="support-cookies" style="text-align: center;font-weight: bold;">{!! __('Support Cookies') !!}</div>

    <div class="row justify-content-center">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2 id="heading">{{ __('Form Title') }}</h2>

                @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif

                <form id="msform" action="{{ route('semester.subscribeOneToOne') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                <!-- progressbar -->
                    <ul id="progressbar" class="d-flex flex-row">
                        <li class="active" id="account"><strong>{{ __('resubscribe.Information and notes') }}</strong></li>
                        <li id="personal"><strong>{{ __('resubscribe.Register') }}</strong></li>
                        <li id="confirm"><strong>{{ __('resubscribe.Payment and termination') }}</strong></li>
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <br>
                    <!-- fieldsets -->
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="fs-title text-center">{{ __('resubscribe.General information') }}</h2>
                                </div>
                            </div>

                            @if(app()->getLocale() == 'ar')
                                <p class="text-right">

                                    أعزاءنا أولياء الأمور.. بناء على طلب العديد من أولياء الأمور، تعلن مجموعة الفرقان عن إطلاق المرحلة الأولى من نظام التعليم الفردي لطلاب وطالبات قسم الحفظ ابتداء من الفصل الدراسي القادم، حيث سيتم في المرحلة الأولى تطبيق النظام على عدد محدد من طلاب وطالبات قسم الحفظ ، وفي المرحلة الثانية سيتم إتاحة خيار التعليم الفردي لبقية الأقسام، حيث يتميز نظام التعليم الفردي بتخصيص معلم خاص لكل طالب، وتقليل مدة الحلقة مع الحفاظ على جودة التعليم المعهودة، يرجى الاطلاع على التفاصيل التالية:


                                    <br>
                                    <br>

                                <table class="ltr-table" border="2">
                                    <tbody>
                                    <tr>
                                        <td>الفئة المستهدفة:</td>
                                        <td style="color: #48742b;">طلاب وطالبات قسم الحفظ</td>
                                    </tr>
                                    <tr>
                                        <td>مدة الحصة:</td>
                                        <td style="color: #48742b;">ساعة يوميا (5 أيام في الأسبوع)</td>
                                    </tr>
                                    <tr>
                                        <td>الفترة:</td>
                                        <td style="color: #48742b;">يمكن اختيار الوقت المفضل ضمن الأوقات المحددة أدناه</td>
                                    </tr>
                                    <tr>
                                        <td>الرسوم الدراسية:</td>
                                        <td style="color: #48742b;">{{ $course->price }}$ ({{ intval($course->price*3.75) }} ريال) للفصل الدراسي</td>
                                    </tr>
                                    <tr>
                                        <td>مدة الفصل الدراسي:</td>
                                        <td style="color: #48742b;">4 أشهر</td>
                                    </tr>
                                    </tbody>
                                </table>

                                <br>

                                <span style="display: block; color: #ea3223; font-weight: bold; text-align: center !important;">
                                            هام! في حال الرغبة في التسجيل في مسار التعليم الفردي يرجى تعبئة الاستمارة التالية، وستكون بداية الفصل الدراسي الأول للطلاب والطالبات من تاريخ 02/01/2022م الموافق 29/05/1443هـ إلى 28/04/2022م الموافق 27/09/1443هـ.
                                        </span>

                                <br>
                                <br>

                                <span class="d-block text-center" style="font-weight: bold;">
                                            في حال وجود استفسارات حول آليات سداد الرسوم وخيارات الدفع المتاحة نفيدكم أنه قد تم تخصيص أحد ممثلي قسم الحسابات للرد على استفساراتكم حيال الأمر وتقديم الدعم الكامل عبر المكتب الافتراضي لحل أي عوائق إن شاء الله..
                                        </span>

                                <br>
                                <br>

                                <span class="d-block text-center" style="color: #ea3223; font-weight: bold;">رابط المكتب الافتراضي:</span>
                                <a class="text-center w-100 d-block" href="https://furqangroup.zoom.us/j/99947595293">https://furqangroup.zoom.us/j/99947595293</a>
                                <br>

                                <span class="d-block text-center" style="font-weight: bold !important; color: black; color: #ea3223;">الأسئلة الشائعة:</span>

                                <span class="d-block text-center" style="color: #48742b;">أوقات الاستقبال من (الأحد إلى الخميس):</span>

                                <ul class="text-right">
                                    <li>9:00 صباحا - 10:00 مساء بتوقيت مكة المكرمة (GMT+3)</li>
                                    <li>7:00 صباحا - 08:00 مساء بتوقيت المغرب العربي وفرنسا  (GMT+1)</li>
                                    <li>1:00 صباحا - 02:00 مساء بتوقيت نيويورك ( GMT-5)</li>
                                </ul>

                                <span class="text-center d-block">مع تمنياتنا للجميع بالتوفيق والنجاح.</span>

                                </p>
                            @else
                                <p>
                                    <span class="d-block">Dear Parents,</span>
                                    <span class="d-block">
                                            Furqan Group is pleased to announce the launch of one-to-one classes for students in the memorization (Hifz) program. This initiative comes in response to several requests we have been receiving from parents. The initial phase of one-to-one class project will start from the next semester with limited capacity solely for .students in the memorization trajectory.

Students from other trajectories shall be able to .enroll in the second phase of the project.
                                        </span>

                                    <br>

                                    <span class="d-block">
                                            In the one-to-one class system, a private tutor is assigned for each student individually. The class duration is reduced while the quality of education is maintained equally to the regular class :systems. Kindly review the following details:
                                        </span>

                                <table class="ltr-table" border="2">
                                    <tbody>
                                    <tr>
                                        <td>Target group</td>
                                        <td style="color: #48742b;">Students in Memorization program (Hifz)</td>
                                    </tr>
                                    <tr>
                                        <td>Class duration</td>
                                        <td style="color: #48742b;">1 hour, 5 days a week (Sunday to Thursday)</td>
                                    </tr>
                                    <tr>
                                        <td>Time</td>
                                        <td style="color: #48742b;">The desired session can be chosen below</td>
                                    </tr>
                                    <tr>
                                        <td>Fees</td>
                                        <td style="color: #48742b;">{{ $course->price }}$ ({{ intval($course->price*3.75) }} SAR) per semester</td>
                                    </tr>
                                    <tr>
                                        <td>Semester duration</td>
                                        <td style="color: #48742b;">4 months</td>
                                    </tr>
                                    </tbody>
                                </table>

                                <br>
                                <span class="d-block" style="color: #bb271a; font-weight: bold; text-align: center;">
                                            Important! If you would like to register for the one-to-one class system, please fill out the following form. The First semester is to begin .from 02.01.2022 until 29.04.2022.
                                        </span>

                                <br>

                                <span class="d-block">
                                            If you had any questions regarding the payment options and methods, we would like to inform you that you can visit our virtual office where we have assigned one of our representatives from the financial department to answer your questions and help you with that.
                                        </span>

                                <span class="w-100 text-center d-block" style="color: #bb271a; font-weight: bold;">
                                            virtual office link:
                                        </span>

                                <a class="w-100 text-center d-block" href="https://furqangroup.zoom.us/j/99947595293">
                                    https://furqangroup.zoom.us/j/99947595293
                                </a>
                                <br>

                                <span class="w-100 text-center d-block" style="color: #bb271a; font-weight: bold;">
                                            Virtual office times:
                                        </span>

                                <span class="w-100 text-center d-block" style="color: #48742b; font-weight: bold;">
                                            From Sunday till Thursday
                                        </span>
                                <span class="w-100 text-center d-block" style="color: #bb271a; font-weight: bold;">
                                            at
                                        </span>

                                <ul>
                                    <li>09:00AM - 10:00PM Mecca time (GMT + 3)</li>
                                    <li>07:00AM - 08:00PM Morocco and France time (GMT+1)</li>
                                    <li>01:00AM - 02:00PM New York time (GMT-5)</li>
                                </ul>

                                <span class="w-100 text-center d-block" style="color: black; font-weight: bold;">
                                            We wish you all good health and success by Allah will.
                                        </span>

                                </p>
                            @endif

                        </div>

                        <input type="button" name="next" class="next action-button" value="{{ __('resubscribe.Next') }}" />
                    </fieldset>

                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">{{ __('resubscribe.Register') }}</h2>
                                </div>
                            </div>

                            <div class="form-group text-right" id="std-name-section">
                                <div class="alert alert-danger d-none" role="alert">
                                </div>
                                <label for="std-name" class="text-right">{{ __('resubscribe.Name') }} *</label>
                                <input type="text" min="0" name="student_name" class="form-control" id="std-name" placeholder="{{ __('resubscribe.Name') }}" required>
                            </div>

                            <div class="form-group text-right">
                                <label for="std-email">{{ __('resubscribe.Email') }}</label>
                                <input type="email" class="form-control" name="email" id="std-email" placeholder="{{ __('resubscribe.Email') }}" required>
                            </div>
                            <div class="form-group text-right" id="confirm-email">
                                <label for="std-email-conf">{{ __('resubscribe.Confirm Email') }}</label>
                                <input type="email" class="form-control" id="std-email-conf" placeholder="{{ __('resubscribe.Confirm Email') }}" required>
                            </div>

                        </div>
                        <input type="button" name="next" class="next action-button" value="{{ __('resubscribe.Next') }}" />
                        <input type="button" name="previous" class="previous action-button-previous" value="{{ __('resubscribe.Previous') }}" />
                    </fieldset>

                    <fieldset id="checks-section">

                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">{{ __('resubscribe.Payment and termination') }}</h2>
                                </div>
                            </div>

                            <div class="form-group text-right">
                                <div class="form-check text-right">
                                    <input class="form-check-input w-auto" type="checkbox" value="" id="agree-terms" required>
                                    <label class="form-check-label mr-4" for="agree-terms">
                                        {{ __('resubscribe.terms and conditions') }}
                                    </label>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div>
                                <div class="form-check text-right">
                                    <input class="form-check-input w-auto" type="radio" name="payment_method" id="checkout_gateway" value="checkout_gateway">
                                    <label class="form-check-label mr-4" for="checkout_gateway">
                                        {!! __('Payment via credit card', ['amount' => $course->price]) . '$' !!}
                                    </label>
                                    <img class="text-center d-block" style="width: 38%;margin: auto;margin-top: 9px;" src="{{ asset('card-icons/cards.png') }}" alt="Cards icons">
                                </div>

                                <br>

                            </div>

                            <input type="hidden" name="token_pay" id="token_pay">
                        </div>

                        <button type="submit" id="submit-main-form" class="btn btn-secondary w-100 mt-2" disabled>{{ __('resubscribe.Send') }}</button>
                        <input type="button" name="previous" class="previous action-button-previous" value="{{ __('resubscribe.Previous') }}" />

                    </fieldset>

                </form>

                <form id="payment-form" method="POST" action="https://merchant.com/charge-card" class="d-none">

                    <div class="one-liner" style="flex-direction: column;justify-content: space-between;align-items: center;height: 100px;">
                        <div class="card-frame"></div>
                        <button class="btn btn-primary" id="pay-button" disabled>
                            {{ __('resubscribe.Checkout') }}
                            <i class="fas fa-spinner fa-spin d-none"></i>
                        </button>
                    </div>
                    <p class="error-message text-center"></p>
                    <p class="success-payment-message text-center"></p>
                </form>

            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{--                    <form id="payment-form" method="POST" action="https://merchant.com/charge-card">--}}
                {{--                        <div class="one-liner" style="flex-direction: column;justify-content: space-between;align-items: center;height: 100px;">--}}
                {{--                            <div class="card-frame"></div>--}}
                {{--                            <button class="btn btn-primary" id="pay-button" disabled>--}}
                {{--                                إتمام الدفع--}}
                {{--                            </button>--}}
                {{--                        </div>--}}
                {{--                        <p class="error-message text-center"></p>--}}
                {{--                        <p class="success-payment-message text-center"></p>--}}
                {{--                    </form>--}}
            </div>
            <div class="modal-footer d-none">
                <button type="button" class="d-none" id="close-modal" data-dismiss="modal">إغلاق</button>
            </div>
        </div>
    </div>
</div>

<!-- add frames script -->
<script src="https://cdn.checkout.com/js/framesv2.min.js"></script>
<script src="{{ asset('app.js') }}?v=63.61"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){

        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;
        var current = 1;
        var steps = $("fieldset").length;

        setProgressBar(current);

        $(".next").click(function(){

            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;

            current_fs = $(this).parent();

            if(validate(current_fs)){
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();

                //hide the current fieldset with style
                current_fs.animate({opacity: 0}, {
                    step: function(now) {

                        // for making fieldset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({'opacity': opacity});
                    },
                    duration: 500
                });
                setProgressBar(++current);
            }
            if($('#checkout_gateway').is(':checked')){
                $("#payment-form").removeClass('d-none');
            }
        });

        $(".previous").click(function(){

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //Remove class active
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();

            //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function(now) {
                    // for making fieldset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    previous_fs.css({'opacity': opacity});
                },
                duration: 500
            });
            setProgressBar(--current);

            $("#payment-form").addClass('d-none');

        });

        function setProgressBar(curStep){
            var percent = parseFloat(100 / steps) * curStep;
            percent = percent.toFixed();
            $(".progress-bar")
                .css("width",percent+"%")
        }

        $(".submit").click(function(){
            return false;
        })

        $(document).on('click', 'form #std-number-search', function (e) {
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '{{ route('semester.registration.getStudentInfo') }}?std_number=' + $('form #std-number').val() + '&std_section=' + $('form #std-section').val() + '&form_type=one_to_one',
                success: function (data) {
                    $('form #std-name').val(data.name);
                    $('form #std-name').css('border-color', 'green');
                    $('form #std-name-section .alert').addClass('d-none');
                },
                error: function (data){
                    $('form #std-name').val('');
                    $('form #std-name').attr("placeholder", data.responseJSON.msg);
                    $('form #std-name').attr("title", data.responseJSON.msg);
                    $('form #std-name').css('border-color', 'red');
                    $('form #std-name-section .alert').html(data.responseJSON.msg);
                    $('form #std-name-section .alert').removeClass('d-none');
                }
            });
        });

        $(document).on('click', 'form #hsbc', function (e) {

            if($('#agree-terms').is(':checked')){
                $("#hsbc-section-elements").removeClass('d-none');
                $("#hsbc-section-elements").show();
                $("#hsbc-section-elements input").prop('required',true);

                $("#payment-form").addClass('d-none');

                $("#submit-main-form").removeAttr('disabled');
                $("#submit-main-form").removeClass('btn-secondary');
                $("#submit-main-form").addClass('btn-primary');
                $("#submit-main-form").removeClass('d-none');
            }else{
                e.preventDefault();
                alert('{{ __('You must agree that the previous information is correct') }}');
            }
        });

        $(document).on('click', 'form #checkout_gateway', function (e) {

            if($('#agree-terms').is(':checked')){
                $("#hsbc-section-elements").addClass('d-none');
                $("#hsbc-section-elements").hide();
                $("#hsbc-section-elements input").removeAttr('required');

                $("#payment-form").removeClass('d-none');
                $("#submit-main-form").addClass('d-none');

            }else{
                e.preventDefault();
                alert('{{ __('You must agree that the previous information is correct') }}');
            }

        });

        function validate(current_fs) {
            let inputs     = current_fs.find("input[required]");
            let radioBoxes = current_fs.find('input[type=radio]');

            flag = true;

            for (index = 0; index < radioBoxes.length; ++index) {
                if (!radioBoxes[index].checked){
                    $(radioBoxes[index]).css('border-color', 'red');
                    flag = false;
                }else{
                    $(radioBoxes[index]).css('border-color', 'green');
                    flag = true;
                    break;
                }

            }

            if(!flag){
                $('.error-msg-times').remove();
                $('#confirm-email').append(`<div class="alert alert-danger error-msg-times" role="alert">
                                              {{ __('please confirm your email') }}
                </div>`);
            }else{
                $('.error-msg-times').remove();
            }

            for (index = 0; index < inputs.length; ++index) {
                if (inputs[index].value == null || inputs[index].value == ""){
                    $(inputs[index]).css('border-color', 'red');
                    flag = false;
                }else{
                    $(inputs[index]).css('border-color', 'green');
                }

                if ($(inputs[index]).attr('id') == 'std-email' || $(inputs[index]).attr('id') == 'std-email-conf'){
                    if ($('#std-email').val() == $('#std-email-conf').val() &&
                        $('#std-email').val() != "" &&
                        $('#std-email').val() != null &&
                        $('#std-email-conf').val() != "" &&
                        $('#std-email-conf').val() != null
                    ){
                        $('#std-email-conf').css('border-color', 'green');
                        $('#std-email').css('border-color', 'green');
                    }else{
                        $('#std-email-conf').css('border-color', 'red');
                        $('#std-email').css('border-color', 'red');
                        flag = false;
                    }

                }

            }

            return flag;
        }

        $(document).on('change', 'form#msform input[required]', function (e) {
            if ($(this).val() != "" && $(this).val() != null){
                $(this).css('border-color', 'green');
            }
        });

        if (navigator.cookieEnabled == false) {
            $('#support-cookies').removeClass('d-none');
        }else{
            $('#support-cookies').addClass('d-none');
        }

    });
</script>

</body>
</html>
