<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ruslan Aliev | Android developer</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <link rel="icon" href="/favicon.png" sizes="64x64">
    <link rel="stylesheet" href="/public/css/app.css">
    <meta name="theme-color" content="#4c33fb">
</head>

<body>

    <div id="app">
    	<main-layout>
            <keep-alive>
                <router-view></router-view>
            </keep-alive>
    	</main-layout>
    </div>
    <script src="/public/js/app.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-102163073-1', 'auto');
      ga('send', 'pageview');
    </script>
</body>
</html>
