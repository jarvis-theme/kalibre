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
        {{ Theme::place('content') }}
        {{ Theme::partial('subscribe') }} 
        {{ Theme::partial('footer') }} 
        {{ Theme::partial('defaultjs') }} 
        <script type="text/javascript">
            $(document).ready(function(){
                $('.btnSharing').on('click', function(){
                    var webUrl = window.location.href;
                    var title = $(this).attr('data-title');
                    var img = $("meta[property='og:image']").attr("content");
                    type = $(this).attr('data-social');
                    if (type.length)
                    {
                        switch(type)
                        {
                            case 'twitter':
                                window.open('https://twitter.com/intent/tweet?text='+title+' '+webUrl, 'sharertwt', 'toolbar=0,status=0,width=640,height=445');
                                break;
                            case 'facebook':
                                window.open('https://www.facebook.com/sharer/sharer.php?u='+webUrl, 'sharer', 'toolbar=0,status=0,width=660,height=445');
                                break;
                            case 'google-plus':
                                window.open('https://plus.google.com/share?url='+webUrl, 'sharer', 'toolbar=0,status=0,width=660,height=445');
                                break;
                            case 'linkedin':
                                window.open('http://www.linkedin.com/shareArticle?mini=true&url='+webUrl+'&title='+title+'&source='+webUrl, 'sharerpinterest', 'toolbar=0,status=0,width=660,height=445');
                                break;
                            case 'pinterest':
                                window.open('http://pinterest.com/pin/create/button/?url='+webUrl+'&media='+img+'?v=14934733', 'sharerpinterest', 'toolbar=0,status=0,width=660,height=445');
                                break;
                        }
                    }
                });
            });
        </script>
        {{ Theme::partial('analytic') }} 
        {{ Theme::asset()->scripts() }} 
    </body>
</html>