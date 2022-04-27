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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ol3/4.6.5/ol.css" type="text/css">
    <link rel="stylesheet" href="css/ol3-sidebar.min.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/dark-hive/jquery-ui.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/dark-hive/theme.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/mask-stocks.css" type="text/css" />
    @yield('styles')
</head>

<body>
    @yield("content")
    <div id="map" class="sidebar-map"></div>
    <script src="js/routie.min.js" type="text/javascript" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ol3/4.6.5/ol.js" type="text/javascript" defer></script>
    <script src="js/ol5-sidebar.min.js" type="text/javascript" defer></script>
    <script src="js/mask-stocks.js" type="text/javascript" defer></script>
</body>
</html>