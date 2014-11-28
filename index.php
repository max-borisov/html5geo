<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="geo.js"></script>
    <style type="text/css">
        #main {
            width: 80%;
            /*font-size: 1.5em;*/
            font-size: 50px;
            margin: 0 auto;
            text-align: center;
        }
        #main div {
            padding: 15px 0;
        }
    </style>
</head>
<body>

<script type="text/javascript">
    $(function() {
        Geo.location();
    })
</script>

<div id="main">
    <div id="time">Данные обновлены в <span id="time-span"></span></div>
    <div id="lat"></div>
    <div id="lng"></div>
</div>

<script type="text/javascript">

</script>

</body>
</html>