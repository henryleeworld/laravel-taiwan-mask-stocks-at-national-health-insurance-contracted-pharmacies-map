<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta property="og:title" content="台灣健保特約藥局口罩庫存地圖">
    <meta property="og:description" content="健保署口罩管控系統開放時間為 7 時至 23 時，口罩開放購買時間及方式，視各家健保特約藥局及衛生所作業而定。">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://i.imgur.com/l2VMxIj.png">
    <title>台灣健保特約藥局口罩庫存地圖</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ol3/4.6.5/ol.css" type="text/css">
    <link rel="stylesheet" href="css/ol3-sidebar.min.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/dark-hive/jquery-ui.min.css" integrity="sha512-gCFexX+67Pl9rPa75MMyEH2I5jbD5tqij8VBYcsLVwgVfVEdfon+9CEjVnXPtqoHLXjxrjMcyHLaee65dt/jxw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/dark-hive/theme.min.css" integrity="sha512-pN35/N51n1IeABlNGOSb5ltVKGbvUE8exTMhiB/4ijuy+UOYEWawQZzEs2yUvvCWopRO3uiRueeGnd/mQD0eTQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/mask-stocks.css" type="text/css" />
    @yield('styles')
</head>

<body>
    @yield("content")
    <div id="map" class="sidebar-map"></div>
    <script src="js/routie.min.js" type="text/javascript" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ol3/4.6.5/ol.js" type="text/javascript" defer></script>
    <script src="js/ol5-sidebar.min.js" type="text/javascript" defer></script>
    <script src="js/mask-stocks.js" type="text/javascript" defer></script>
</body>
</html>