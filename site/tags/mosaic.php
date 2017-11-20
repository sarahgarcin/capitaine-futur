<?php

kirbytext::$tags['mosaic'] = array(
  'html' => function($tag) {

    // $html  = '<div class="slider js_slider">';
    // $html .= '<div class="frame js_frame">';

    $html = '<ul class="mosaic clearing-thumbs" data-clearing>';

    foreach($tag->page()->images()->filterBy('filename', '*=', $tag->attr('mosaic')) as $slide) {
      $html .= '<li class="mosaic-image">';
      $html .= '<a href="'.$slide->url() .'" alt="'.$slide->name().'">';
      // $html .= '<img src="' . $slide->url() . '">';
      // $html .= thumb($slide, array('width' => 800));
      $html .= $slide->crop(640, 420);
      $html .= '</a>';
      $html .= '</li>';
    }

    $html .= '</ul>';


    return $html;

  }
);
