<?php
/**
 * Created by PhpStorm.
 * User: mrx
 * Date: 01.02.19
 * Time: 11:58
 */
?>
<hr/>
<footer>
    Copyright &copy; <?php echo date('Y'); ?> design by ComfyLife
</footer>

<script src="<?php echo get_template_directory_uri(); ?>/js/script.js?v=<?php echo current_time('timestamp', 0); ?>"></script>

<?php wp_footer(); ?>
</body>
</html>
