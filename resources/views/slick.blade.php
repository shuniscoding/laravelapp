<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/common.css')}}">
</head>
<body>
    <div class="slick">
        <ul class="slider">
            <li><a href="#"><img src="/images/01.jpeg" alt="image01"></a></li>
            <li><a href="#"><img src="/images/02.jpeg" alt="image02"></a></li>
            <li><a href="#"><img src="/images/03.jpeg" alt="image03"></a></li>
            <li><a href="#"><img src="/images/04.jpeg" alt="image03"></a></li>
            <li><a href="#"><img src="/images/05.jpeg" alt="image03"></a></li>
            <li><a href="#"><img src="/images/06.jpeg" alt="image03"></a></li>
        </ul>
    </div>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    @include('parts.slick_script')
</body>
</html>
