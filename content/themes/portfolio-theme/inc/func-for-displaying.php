<?php 

class Display 
{
    function display_terms_thumb()
    {         
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
                    return '<img class="img-thumbnail" src="' . $term_thumbnail["url"] . '" alt="html5-logo"> ';
                } 
            }
        }
    }
}