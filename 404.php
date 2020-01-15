<?php		
	include 'header.php';
?>

<div id="primary" class="content-area">
 <main id="main" class="site-main" role="main">
    <div class="row">
     <section class="error-404 not-found" style="text-align:center">
      <header class="page-header">
        <h1 class="page-title">
         <i class="fa fa-exclamation-triangle"></i> <?php esc_html_e('Oops! That page can&rsquo;t be found.', ''); ?>
        </h1>
      </header>

        <div class="page-content">
            <p><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', ''); ?></p>
<br>
        </div>
      </section>
    </div>
 </main>
</div>


<?php		
	include 'footer.php';
?>