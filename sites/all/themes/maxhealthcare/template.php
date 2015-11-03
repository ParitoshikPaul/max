<?php
/**
 * Created by PhpStorm.
 * User: Paritoshik
 * Date: 9/7/2015
 * Time: 3:58 PM
 */

/*
 * *********** ENTITY REFERENCE NODE LOAD FOR EVERY SPECIALITY i.e.: DOCTORS
 * @param
 * @nid - node id of the
 * */

function entity_reference_nodes($node_type, $node_id){
    $query = new EntityFieldQuery();
    $query->entityCondition('entity_type', 'node')
        ->entityCondition('bundle', $node_type)
        ->propertyCondition('status', NODE_PUBLISHED)
        ->fieldCondition('field_speciality', 'target_id', $node_id, '=')
        ->addMetaData('account', user_load(1)); // Run the query as user   1.
    $result = $query->execute();
    $treat = node_load(7);
    $treatments_arr = array();
    foreach ($result['node'] as $treatments):
        $treatment = node_load($treatments->nid);
        $treatments_arr[] = array('title' => $treatment->title, 'id' => $treatment->nid);
    endforeach;

   return $treatments_arr;
}
/*
 * *********** ENTITY USER LOAD FOR EVERY TREATMENT i.e.: DOCTORS
 * @param
 * @nid - node
 * */

function entity_reference_users($nid){

        $query = new EntityFieldQuery();
        $query->entityCondition('entity_type', 'user');
        $result = $query->execute();
        foreach ($result['user'] as $doctors):
        $doctor = user_load($doctors->uid);
        if ($doctor->field_speciality['und'][0]['target_id'] == $nid):
            $doctor_arr[$doctors->uid] = array('name' => $doctor->name, 'designation' => $doctor->field_designation['und'][0]['value'], 'profile_link' => $doctor->field_view_profile_link['und'][0]['value']);
        endif;
        endforeach;
        return $doctor_arr;

    }

/**
 * Override theme_breadcrumb().
 */
function maxhealthcare_breadcrumb($breadcrumb) {
  $links = array();
  $path = '';
  
// Get URL arguments
  $arguments = explode('/', request_uri());
  
// Remove empty values
  foreach ($arguments as $key => $value) {
    if (empty($value)) {
      unset($arguments[$key]);
    }
  }
  $arguments = array_values($arguments);
  
// Add 'Home' link
  $links[] = l(t('Home'), '<front>');
  
// Add other links
  if (!empty($arguments)) {
    foreach ($arguments as $key => $value) {
      // Don't make last breadcrumb a link
      if ($key == (count($arguments) - 1)) {
        $links[] = drupal_get_title();
      } else {
        if (!empty($path)) {
          $path .= '/'. $value;
        } else {
          $path .= $value;
        }
        $links[] = l(drupal_ucfirst($value), $path);
      }
    }
  }
  
// Set custom breadcrumbs
  drupal_set_breadcrumb($links);
  
// Get custom breadcrumbs
  $breadcrumb = drupal_get_breadcrumb();
  

// Hide breadcrumbs if only 'Home' exists
  if (count($breadcrumb) > 1) {
    return '<div class="breadcrumb">'. implode(' &raquo; ', $breadcrumb) .'</div>';
  }
}