<?php 
$testimonials_id = 155;

?>

<section  class="testimonials-section ">
    <div class="container background--combo ">
      
          
      <h2 class="section__title text--capitalize ">
                Our Essay Writing Service Features

            </h2>

    <div class="testimonials_items wrap">
      <?php                 if (have_rows('testimonials',$testimonials_id)):
                         while (have_rows('testimonials',$testimonials_id)) : the_row();?>
                      
                         <div class="testimonial_item " itemscope itemtype="https://schema.org/Review">
                             <div class="wrap">
                             <div class="review_info" itemprop="author" itemscope itemtype="https://schema.org/Person"> <div  itemprop="name"><?php the_sub_field('testimonials_name');?></div> </div>
                             <div class="author_country" itemprop="itemReviewed" itemscope itemtype="https://schema.org/Organization"><span itemprop="name" class="hidden"><? echo bloginfo();?></span><?php the_sub_field('country');?></div>
                             </div>
                            <div itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating"
                                             class="description-title">
                                            <meta itemprop="worstRating" content="1">
                                            <meta itemprop="ratingValue" content="3">
                                            <meta itemprop="bestRating" content="5">
                                          <div class="star-line">
                                            <?php

                                            $rating_stars = 5;
                                            $rating_stars_float=floor($rating_stars);
                                            

                                            $i = 1;
                                            while ($i <= $rating_stars_float) {
                                                echo '<i  class="fa fa-star"></i>';
                                                $i++;

                                            };

                                           
                                            ?></div></div>
              <div class="review_recommend">Would recommend</div>
                 <div class="review_body" itemprop="reviewBody"> <?php the_sub_field('review');?></div>
                 
                      
                   <div class="wrap">
                       <div class="review_date"> <?php the_sub_field('review_date');?></div>
                       <div class="review_verified text--center">Verified</div>
                   </div>                     
                        
                              
                                
                           </div>
                           
                            
                            
                                
         
                                        
                         
                                                        <?php endwhile;  endif;                    reset_rows();?>

     
     
      
</div>     


</div>

</section>