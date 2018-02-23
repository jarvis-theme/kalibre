<!DOCTYPE html>
<html>
    <head>
        {{ Theme::partial('seostuff') }} 
        {{ Theme::asset()->styles() }} 
        {{ Theme::partial('defaultcss') }} 
    </head>
    <body>
        <!--  Preloader  -->
        <!-- <div id="preloader">
            <div id="loading"> </div>
        </div> -->
        {{ Theme::partial('header') }}
        {{ Theme::partial('slider') }}
        {{ Theme::place('content') }}
        {{ Theme::partial('subscribe') }} 
        {{ Theme::partial('footer') }} 
        {{ Theme::partial('defaultjs') }} 
        {{ Theme::partial('analytic') }} 
    </body>
</html>