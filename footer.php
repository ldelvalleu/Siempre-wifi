<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FirstTheme
 */

?>

    <footer>
        <div class="container-fluid bg-dark-gray">
            <div class="row">
                <div class="col-3 mt-5">
                    <img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt=""class="img">
                </div>
                <div class="col-3 mt-5 text-center">
                    <h4 class="color-white">Copyright 2018</h4>
                </div>
                <div class="col-3 mt-5">
                    <div class="row">
                        <div class="col-6 text-right">
                            <img src="<?php echo get_template_directory_uri()?>/img/fb.png" alt=""class="img">
                        </div>
                        <div class="col-6">
                            <img src="<?php echo get_template_directory_uri()?>/img/tw.png" alt=""class="img">
                        </div>
                    </div>
                </div>
                <div class="col-3 mt-5">
                    <div class="row">
                        <p class="color-white">email@siemprewifi.com</p>
                    </div>
                    <div class="row">
                        <p class="color-white">www.siemprewifi.com</p>
                    </div>
                    <div class="row">
                        <p class="color-white">2222-4444</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
