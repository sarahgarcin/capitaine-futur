<?php

use Uniform\Form;

return function ($site, $pages, $page) {
   $form = new Form([
      'email' => [
         'rules' => ['required', 'email'],
         'message' => 'Email is required',
      ],
      'message' => [],
      'name' => [
         'rules' => ['required', 'name'],
         'message' => 'Name is required',
      ],
      'firsname' => [
         'rules' => ['required', 'firstname'],
         'message' => 'First name is required',
      ],
      'birthdate' => [
         'rules' => ['required', 'birthdate'],
         'message' => 'Birthdate is required',
      ],
      'adress' => [
         'rules' => ['required', 'address'],
         'message' => 'Adress is required',
      ],

      Pays de résidence
      Contact e-mail
      Site internet

      Liens vers vidéo
   ]);

   if (r::is('POST')) {
      $form->emailAction([
         'to' => 'garcinsarah@gmail.com',
         'from' => 'garcinsarah@gmail.com',
         'subject' => 'Candidature Captitaine futur',
      ]);
   }

   return compact('form');
};
