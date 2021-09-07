</div>
<footer id="footer" role="contentinfo">
    <div class="footer">
        <div class="about">
            <h2>ABOUT US</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Impedit in modi labore aut fugiat placeat ratione sint quidem voluptatem doloremque?
                Hic soluta inventore tenetur placeat minus illum architecto cupiditate ad.
            </p>
            <div id="footer-site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                <?php
                if (is_front_page() || is_home() || is_front_page() && is_home()) {
                    echo '<h1>';
                }
                echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '" rel="home" itemprop="url"><span itemprop="name">' . esc_html(get_bloginfo('name')) . '</span></a>';
                if (is_front_page() || is_home() || is_front_page() && is_home()) {
                    echo '</h1>';
                }
                ?>
            </div>
            <div class="social">
                <a href="" class="icon">
                    <img src="/wp-content/themes/Constructo/assets/img/facebook-footer.png" alt="">
                </a>
                <a href="" class="icon">
                    <img src="/wp-content/themes/Constructo/assets/img/instagram-footer.png" alt="">
                </a>
                <a href="" class="icon">
                    <img src="/wp-content/themes/Constructo/assets/img/twitter-footer.png" alt="">
                </a>
                <a href="" class="icon">
                    <img src="/wp-content/themes/Constructo/assets/img/linkedin-footer.png" alt="">
                </a>
            </div>
        </div>
        <div class="working">
            <h2>Working Hours</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Impedit in modi labore aut fugiat placeat ratione sint quidem voluptatem doloremque?
                Hic soluta inventore tenetur placeat minus illum architecto cupiditate ad.
            </p>
            <div class="hours">
                <div class="m-f">
                    <span>Monday-Friday:</span>
                    <span>10:00 - 16:00</span>
                </div>
                <div class="sat">
                    <span>Saturday:</span>
                    <span>12:00 - 15:00</span>
                </div>
                <div class="sun">
                    <span>Sunday and holidays:</span>
                    <span>Closed</span>
                </div>
            </div>
        </div>
    </div>

    <div id="copyright">
        &copy; <?php echo esc_html(date_i18n(__('Y', 'blankslate'))); ?> <?php echo esc_html(get_bloginfo('name')); ?>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>