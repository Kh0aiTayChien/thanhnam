<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>THANH NAM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"
            integrity="sha512-6DC1eE3AWg1bgitkoaRM1lhY98PxbMIbhgYCGV107aZlyzzvaWCW1nJW2vDuYQm06hXrW0As6OGKcIaAVWnHJw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <link href="{{asset('img/img.png')}}" rel="icon" type="image/png">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script
        src = "https://cdn.jsdelivr.net/gh/KodingKhurram/animate.css-dynamic@main/animate.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.5/dist/js.cookie.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.rawgit.com/tarkhov/postboot/v1.0.3/dist/css/postboot.min.css"/>
    <link href="{{asset('/css/header.css')}}" rel="stylesheet">
    <link href="{{asset('/css/footer.css')}}" rel="stylesheet">
    <link href="{{asset('/css/homepage/section-1.css')}}" rel="stylesheet">
    <link href="{{asset('/css/homepage/section-2.css')}}" rel="stylesheet">
    <link href="{{asset('/css/homepage/section-3.css')}}" rel="stylesheet">
    <link href="{{asset('/css/homepage/section4.css')}}" rel="stylesheet">
    <link href="{{asset('/css/homepage/section5.css')}}" rel="stylesheet">
    <link href="{{asset('/css/homepage/about.css')}}" rel="stylesheet">
    <link href="{{asset('/css/introduce/sec1-GT.css')}}" rel="stylesheet">
    <link href="{{asset('/css/pools/sec1.css')}}" rel="stylesheet">
     <script>
            console.log(1);
      </script>
    <style>
        body {
            overflow-x: hidden;
            touch-action: pan-y;
        }
    </style>
    {!! SEO::generate() !!}
</head>
<body>
@include('page-layout/header')
@yield('section')
@include('page-layout/footer')
</body>
</html>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-16989148690"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-16989148690');
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        function initAOS() {
            if (window.innerWidth >= 800) {
                AOS.init();
            } else {
                AOS.init({
                    disable: true
                });
            }
        }

        // Khởi tạo AOS khi tải trang 1
        initAOS();

        // Lắng nghe sự kiện thay đổi kích thước màn hình 1
        window.addEventListener('resize', function() {
            initAOS();
        });
    });
</script>
