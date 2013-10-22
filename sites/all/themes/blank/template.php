<?php

function blank_preprocess_html(&$variables) {
  drupal_add_js(array('epe'=>array('base_path'=>base_path())),'setting');
}
