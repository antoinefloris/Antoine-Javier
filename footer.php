<footer id="footer">
    <div id="footer-top">
        <ul>
            <li><div class="titre-footer">THE<b>ATRE</b>.</div></li>
            <li><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla, libero eu volutpat lacinia, turpis neque lobortis neque, vitae elementum sem tellus ut ipsum. Nunc fermentum ultrices purus, vel laoreet arcu condimentum ut. Nullam dapibus luctus libero. Praesent laoreet tempor felis ac varius...</p></li>
        </ul>


        <ul>
            <li><div class="titre-footer">Faire un don</div></li>
            <li><p><?php dynamic_sidebar("defaut"); ?></p></li>

        </ul>

        <ul>
            <li><div class="titre-footer2">Nous suivre</div></li>
            <li>
                <a href="https://www.facebook.com/antoineetjavier/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon-facebook-footer.png"></a>
                <a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon-twitter-footer.png"></a>
                <a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon-google-footer.png"></a>
                <a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon-youtube-footer.png"></a>

            </li>
        </ul>
        <div class="clearboth"></div>
    </div>

</footer>

<footer id="footer2">
    <div id="footer-bottom">
        <ul class="copyright">
            <li><a href="<?php bloginfo('url'); ?>/Mentionlegale "><b>© Tous droits réservés</b></a> 2016 site créé par <b>Antoine Floris</b> </li>
        </ul>


    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>