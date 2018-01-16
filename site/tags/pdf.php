<?php

kirbytext::$tags['pdf'] = array(
  'attr' => array(
    'text',
  ),
  'html' => function($tag) {

    $url  = $tag->attr('pdf');
    $text = $tag->attr('text');
    $file = $tag->file($url);

    $html = '<div class="pdf-wrapper">';
    $html .= '<a href="'.$file->url().'" title="'.$text.'" target="_blank">'.$text.'</a>';
    $html .= '</div>';


    return $html;

  }
);
