<?php

// HERE WE START
global $sw_core_loader;
$options = $sw_core_loader->settings;
//exit();?>

<div id="socialize-bottom-container">

    <div class="socialize-outer-center">
        <div class="socialize-inner-center socialize-wrapper">

            <?php if($options['EnableFacebook']): ?>
                <div class="socialize-facebook" style="width: <?php echo $options['FacebookWidth'];?>px;">

                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=<?php echo $options['FacebookAppId'];?>";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>

                    <div class="fb-like" data-href="<?php echo $options['LikeUrl'];?>"
                         data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>

                </div>
            <?php endif;?>


            <?php if($options['EnableTwitter']): ?>
                <div class="socialize-twitter" style="width: <?php echo $options['TwitterWidth'];?>px;">

                    <a href="https://twitter.com/share" class="twitter-share-button"
                       data-url="<?php echo $options['LikeUrl'];?>">Tweet</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
                            if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';
                                fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                </div>
            <?php endif;?>

            <?php if($options['EnablePinterest']): ?>
                <div class="socialize-pinterest" style="width: <?php echo $options['PinterestWidth'];?>px;">
                    <script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js"></script>
                    <a href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark" >
                        <img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" />
                    </a>
                </div>
            <?php endif;?>


            <?php if($options['EnableGoogle']): ?>
                <div class="socialize-google" style="width: <?php echo $options['GoogleWidth'];?>px;">
                    <!-- Place this tag in your head or just before your close body tag. -->
                    <script type="text/javascript" src="https://apis.google.com/js/platform.js"></script>
                    <!-- Place this tag where you want the +1 button to render. -->
                    <div class="g-plusone" data-size="tall" data-annotation="inline"
                         data-width="<?php echo $options['GoogleWidth'];?>"
                         data-href="<?php echo $options['LikeUrl'];?>"></div>
                </div>
            <?php endif;?>

            <?php if($options['EnableStumbleUpon']): ?>
                <div class="socialize-stumbleupon" style="width: <?php echo $options['StumbleUponWidth'];?>px;">
                    <!-- Place this tag where you want the su badge to render -->
                    <su:badge layout="1"></su:badge>

                    <!-- Place this snippet wherever appropriate -->
                    <script type="text/javascript">
                        (function() {
                            var li = document.createElement('script'); li.type = 'text/javascript'; li.async = true;
                            li.src = ('https:' == document.location.protocol ? 'https:' : 'http:') + '//platform.stumbleupon.com/1/widgets.js';
                            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(li, s);
                        })();
                    </script>
                </div>
            <?php endif;?>

            <?php if($options['EnableLinkedIn']): ?>
                <div class="socialize-linkedin" style="width: <?php echo $options['LinkedInWidth'];?>px;">
                    <script src="//platform.linkedin.com/in.js" type="text/javascript">
                        lang: en_US
                    </script>
                    <script type="IN/Share"
                            data-url="<?php echo $options['GoogleWidth'];?>"
                            data-counter="right"></script>
                </div>
            <?php endif;?>


        </div>
    </div>

</div>
<div class="developer-copyright"><a href="http://www.kidzarella.com/ru/boys.html">одежда для мальчиков</a>магазин</div>
