<section  class="testimonials-section">
    <div class="container ">
      
<div class="testimonials_grid wrap">

      <?php                 if (have_rows('testimonials_item')):
                         while (have_rows('testimonials_item')) : the_row();?>
                        
                         <div class="testimonial_item" itemscope itemtype="https://schema.org/Review" >
                                <div class="review_info subject" itemprop="itemReviewed" itemscope itemtype="https://schema.org/Organization"><span itemprop="name" class="hidden">essayswriter.com</span>
                               <?php the_sub_field('review_subject');?> </div>
                                 <div itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating"
                                             class="description-title">
                                            <meta itemprop="worstRating" content="1">
                                            <meta itemprop="ratingValue" content="3">
                                            <meta itemprop="bestRating" content="5">
                                          <div class="star-line">
                                            <?php

                                            $rating_stars = get_sub_field('review_rating');
                                            $rating_stars_float=floor($rating_stars);
                                            $half_star=$rating_stars-$rating_stars_float;

                                            $i = 1;
                                            while ($i <= $rating_stars_float) {
                                                echo '<i  class="fa fa-star"></i>';
                                                $i++;

                                            };

                                            if($half_star!=0){
                                                echo "<i  class='fa fa-star-half' ></i>";

                                            };
                                            ?>
<span><?php the_sub_field('review_rating');?> </span>
                                        </div>
                                        </div>
                               <div class="wrap">
                                   <div class="work_type">Type of Work:<span class="level_value"> <?php the_sub_field('type_of_work');?></span></div>
                                   <div class="work_level">Level:<span class="level_value"> <?php the_sub_field('work_level');?></span></div>
                               </div> 
                                <div class="review_body" itemprop="reviewBody"> <?php the_sub_field('review_body');?></div>
                               
                           
                         
              
                
                 <div class="wrap">
                       <div class="review_info customer" itemprop="author" itemscope itemtype="https://schema.org/Person"> <div  itemprop="name"> <?php the_sub_field('review_author');?></div>
                             </div>
                          
                     <div class="review_date"> <?php the_sub_field('review_date');?></div>
                     
                     
                 </div>
                      
                      
                                        
                        
                              
                                 </div>  
                           
                           
                            
                            
                                
         
                                                   
                         
                                                        <?php endwhile;  endif;                    reset_rows();?>

     
     
      
</div>     

   
</div>



</section>