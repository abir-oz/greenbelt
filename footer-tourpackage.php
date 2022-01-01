
<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v8.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="1792616871006583"
  theme_color="#8ac440">
      </div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-0 offset-0 col-md-10 offset-md-1 footer_col text-lg-left text-md-left text-center">
                <div class="footer_about ">
                    <div class="logo_footer ">
                        <?php if (has_custom_logo()) {
                            the_custom_logo();
                        } else {
                            echo "<h1><a class='text-black h2 mb-0' href='" . home_url("/") . "'>" . get_bloginfo('name') . "</a></h1>";
                        }
                        ?>
                    </div>


                    <div class="footer_about_text mb-5">
                        <?php echo get_opt_value('opt-address','');?>

                    </div>


                    <?php
                    if (is_active_sidebar("footer-social")) {
                        $footer_social = dynamic_sidebar("footer-social");
                    }

                    ?>


                    <div class="copyright">

                        Copyright &copy;<?php _e(' 2020','greenbelt'); ?>
                        All rights reserved | by <a
                                href="<?php echo get_opt_value('opt-copy','#');?>" target="_blank"><?php echo get_opt_value('opt-name','');?></a>

                    </div>
                </div>
            </div>






            <div class="col-lg-4 footer_col d-lg-block d-none">
                <?php
                if (is_active_sidebar("footer-facebook")) {
                    $footer_social = dynamic_sidebar("footer-facebook");
                }

                ?>
            </div>

            <div class="col-lg-4 footer_col d-lg-block d-none">
                <?php
                if (is_active_sidebar("footer-tagcloud")) {
                    $footer_social = dynamic_sidebar("footer-tagcloud");
                }

                ?>
            </div>
        </div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>