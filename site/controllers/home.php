<?php

use Uniform\Form;

return function ($site, $pages, $page) {
   $form = new Form([
      'name' => [
         'rules' => ['required'],
         'message' => 'Name is required',
      ],
      'firstname' => [
         'rules' => ['required'],
         'message' => 'First name is required',
      ],
      'birthdate' => [
         'rules' => ['required'],
         'message' => 'Birthdate is required',
      ],
      'address' => [
         'rules' => ['required'],
         'message' => 'Address is required',
      ],
      'country' => [
         'rules' => ['required'],
         'message' => 'Country is required',
      ],
      'email' => [
         'rules' => ['required', 'email'],
         'message' => 'Email is required',
      ],

      'website' => [],
      'videoLink' => [],
      'resume' => [
         'rules' => ['required'],
         'message' => 'Resume is required',
      ],
      'bio' => [
         'rules' => ['required'],
         'message' => 'Bio is required',
      ],
      'supernaturel' => [
         'rules' => ['required'],
         'message' => 'Supernaturel is required',
      ],

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
