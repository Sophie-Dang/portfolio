<section id="skills">
    <div id="skills-wrap" class="content-container fadInBottom">
      <h3 class="section__title">Compétences</h3>
      <div class="skills-container">
        <div class="skills-content">
          <h6 class="skills-content__title">Je parle le ...</h6>
          <div class="skills-content__items">

            <?php
              $tax = 'technos';
              $terms = get_terms($tax,array('hide_empty' => false)); 
      
              foreach($terms as $term) 
              {
                  $term_parent_id =  $term->parent; 
              
                  if($term_parent_id == 20) 
                  {
                      $term_thumbnail = get_field('skill_image', $term);
          
                      if(!empty($term_thumbnail)) 
                      {
                          echo '<img class="img-thumbnail" src="' . $term_thumbnail["url"] . '" alt="html5-logo"> ';
                      } 
                  }
              }
            ?> 

          </div>
        </div>

        <div class="skills-content">
          <h6 class="skills-content__title">Je m'aide de ...</h6>
          <div class="skills-content__items">
            <?php
              foreach($terms as $term) 
              {
                  $term_parent_id =  $term->parent; 
              
                  if($term_parent_id == 21) 
                  {
                    $term_thumbnail = get_field('skill_image', $term);
        
                    if(!empty($term_thumbnail)) 
                    {
                        echo '<img class="img-thumbnail" src="' . $term_thumbnail["url"] . '" alt="html5-logo"> ';
                    } 
                  }
                }
              ?> 
          </div>
        </div>

        <div class="skills-content">
          <h6 class="skills-content__title">Des notions en ...</h6>
          <div class="skills-content__items">
            <?php
              foreach($terms as $term) 
              {
                $term_parent_id =  $term->parent; 
            
                if($term_parent_id == 22) 
                {
                  $term_thumbnail = get_field('skill_image', $term);
      
                  if(!empty($term_thumbnail)) 
                  {
                      echo '<img class="img-thumbnail" src="' . $term_thumbnail["url"] . '" alt="html5-logo"> ';
                  } 
                }
              }
            ?> 
          </div>
        </div>
      </div>
    </div>
</section>