<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">

</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="header">
        @if (Route::has('login'))
            <div class="top-right links nav navbar-nav">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        @endif
    </div>
    <div class="content">
        <div class="title m-b-md">
            {{ trans('validation.training_online')}}
        </div>

        <div class="links">
            <a href="#">{{ trans('validation.Courses')}}</a>
            <a href="#">{{ trans('validation.Teacher')}}</a>
            <a href="#">{{ trans('validation.Promotion')}}</a>
            <a href="#">{{ trans('validation.Advisory')}}</a>
        </div>
    </div>
</div>
</body>
</html>
