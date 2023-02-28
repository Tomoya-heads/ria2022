<?php

function acf_select_field_choices( $field ) {
  // reset choices
  $field['choices'] = array();

  // if has rows
  if( have_rows('acf_idea_design_group', 'option') ) {
      // while has rows
      while( have_rows('acf_idea_design_group', 'option') ) {
          // instantiate row
          the_row();
          // vars
          $value = get_sub_field('acf_idea_design_ttl');
          $label = get_sub_field('acf_idea_design_ttl');

          // append to choices
          $field['choices'][ $value ] = $label;
      }
  }

  // return the field
  return $field;
}

add_filter('acf/load_field/name=acf_idea_design_select', 'acf_select_field_choices');
