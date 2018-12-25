<!DOCTYPE html>
<html lang="en">
<head>
    <title>@lang("VIEW.BRAND_DATA.NAME")</title>
    @include("website.layout.links")
</head>

<body ng-app="app" ng-controller="base" ng-class="pageLoaded?'loaded':''">
<div class="loader"></div>
<header>
   @include("website.layout.header")
</header>
<main>
    @yield("content")
</main>


<footer>
    @include("website.layout.footer")
</footer>
@include("website.layout.scripts")
@yield("scripts")


</body>
</html>