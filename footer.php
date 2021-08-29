</div>
<footer id="footer" role="contentinfo">
    <div class="about">
        <h2>ABOUT US</h2>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Impedit in modi labore aut fugiat placeat ratione sint quidem voluptatem doloremque?
            Hic soluta inventore tenetur placeat minus illum architecto cupiditate ad.
        </p>
        <div class="social">
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
        </div>
    </div>
    <div class="working">
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
    <div id="copyright">
        &copy; <?php echo esc_html(date_i18n(__('Y', 'blankslate'))); ?> <?php echo esc_html(get_bloginfo('name')); ?>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>