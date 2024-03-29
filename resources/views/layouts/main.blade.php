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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ol3/4.6.5/ol.css" type="text/css">
    <link rel="stylesheet" href="css/ol3-sidebar.min.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" integrity="sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/dark-hive/jquery-ui.min.css" integrity="sha512-gCFexX+67Pl9rPa75MMyEH2I5jbD5tqij8VBYcsLVwgVfVEdfon+9CEjVnXPtqoHLXjxrjMcyHLaee65dt/jxw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/dark-hive/theme.min.css" integrity="sha512-pN35/N51n1IeABlNGOSb5ltVKGbvUE8exTMhiB/4ijuy+UOYEWawQZzEs2yUvvCWopRO3uiRueeGnd/mQD0eTQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/mask-stocks.css" type="text/css" />
    @yield('styles')
</head>

<body>
    @yield("content")
    <div id="map" class="sidebar-map"></div>
    <script src="js/routie.min.js" type="text/javascript" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ol3/4.6.5/ol.js" type="text/javascript" defer></script>
    <script src="js/ol5-sidebar.min.js" type="text/javascript" defer></script>
    <script src="js/mask-stocks.js" type="text/javascript" defer></script>
</body>
</html>