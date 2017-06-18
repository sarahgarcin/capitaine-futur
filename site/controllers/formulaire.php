<?php

return function($site, $pages, $page) {
  $error = null;
  if(r::method() === 'POST') {
    // The form has been sent
    // echo "The form has been sent";
   // put all the links in a one field
   $links = get('links');
   $strlinks= '';
   foreach($links as $link){
      $strlinks .= $link.', ';
   }

   // Build an array of the data you want to allow as fields
   // get() fetches the form field value with that `name`
    $data = array(
      'name' => get('name'),
      'firstname' => get('firstname'),
      'links' => $strlinks,
      'birthdate' => get('birthdate'),
      'address' => get('address'),
      'address2' => get('address2'),
      'country' => get('country'),
      'email' => get('email'),
      'phone' => get('phone'),
      'company' => get('company'),
      'bio' => get('bio'),
      'philosophy' => get('philosophy'),
      'projectTitle' => get('projectTitle'),
      'resume' => get('resume'),
      'supernaturel' => get('supernaturel'),
      'visitors' => get('visitors'),
      'space' => get('space'),
    );
    
    $title = get('name') . "-" . get('firstname');
    // Create a new page as child of the current page
    // You can also use a different page by using `page('whatever')->children()->create()`
    $p = $page->children()->create($title, 'candidat', $data);

    $upload = upload($p->root() . DS . '{safeName}');
    $uploadFile = upload($p->root() . DS . '{safeName}', array('input' => 'file-folder'));

  }
  
  return compact('error');
};
