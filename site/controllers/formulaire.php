<?php

return function($site, $pages, $page) {
  $error = null;
  if(r::method() === 'POST') {
    // The form has been sent
    
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
      // 'firstname' => get('firstname'),
      // 'firstname' => get('firstname'),
      // 'firstname' => get('firstname'),
      // 'firstname' => get('firstname'),
      // 'firstname' => get('firstname'),
      // 'firstname' => get('firstname'),
      // 'firstname' => get('firstname'),
    );
    
    $title = get('name') . "-" . get('firstname');
    // Create a new page as child of the current page
    // You can also use a different page by using `page('whatever')->children()->create()`
    $p = $page->children()->create($title, 'candidat', $data);


    // Upload an image
    // try {
    //   // This uses the form field with `name="file"`
    //   // See http://php.net/manual/en/features.file-upload.post-method.php#example-392 on how to structure your form
    //   $upload = new Upload($p->root() . DS . '{safeFilename}');
    // } catch(Error $e) {
    //   switch($e->getCode()) {
    //     case Upload::ERROR_MISSING_FILE:
    //       // File does not exist
    //       $error = 'No file uploaded.';
    //       break;
    //     // See the Upload class for other error values
    //   }
    // }
  }
  
  return compact('error');
};



// use Uniform\Form;

// return function ($site, $pages, $page) {
//    $form = new Form([
//       'name' => [
//          'rules' => ['required'],
//          'message' => 'Name is required',
//       ],
//       'firstname' => [
//          'rules' => ['required'],
//          'message' => 'First name is required',
//       ],
//       'birthdate' => [
//          'rules' => ['required'],
//          'message' => 'Birthdate is required',
//       ],
//       'address' => [
//          'rules' => ['required'],
//          'message' => 'Address is required',
//       ],
//       'country' => [
//          'rules' => ['required'],
//          'message' => 'Country is required',
//       ],
//       'email' => [
//          'rules' => ['required', 'email'],
//          'message' => 'Email is required',
//       ],

//       'website' => [],
//       'videoLink' => [],
//       'resume' => [
//          'rules' => ['required'],
//          'message' => 'Resume is required',
//       ],
//       'bio' => [
//          'rules' => ['required'],
//          'message' => 'Bio is required',
//       ],
//       'supernaturel' => [
//          'rules' => ['required'],
//          'message' => 'Supernaturel is required',
//       ],

//    ]);

//    if (r::is('POST')) {
//       $form->emailAction([
//          'to' => 'garcinsarah@gmail.com',
//          'from' => 'garcinsarah@gmail.com',
//          'subject' => 'Candidature Captitaine futur',
//       ]);
//    }

//    return compact('form');
// };
