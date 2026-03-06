<!-- = REQUIREMENTS = 
footer.php — must close the HTML document and call wp_footer()
-->

<?php
// Footer Section
?>


</main> <!-- Close main opened in header.php -->
<footer>
  <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
</footer>
<?php wp_footer(); ?>
</body>

</html>