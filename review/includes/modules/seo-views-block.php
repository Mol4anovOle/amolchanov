  <section class="seo_section">
     
        <div class="container">
            <div class="seo-text">
            <?php
            if (have_posts()) {
                the_post();
                the_content();
            }
            ?>
        </div>    
        </div>

        
   </section>