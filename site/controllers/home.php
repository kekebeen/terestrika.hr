<?php

use Uniform\Form;

return function ($site, $pages, $page) {
  $form = new Form([
    'email' => [
      'rules' => ['required', 'email'],
      'message' => 'Email is required',
    ],
    'name' => [
      'rules' => ['required'],
      'message' => 'Name is required'
    ],
    'subject' => [
      'rules' => ['required'],
      'message' => 'Subject is required'
    ],
    'message' => [
      'rules' => ['required'],
      'message' => ['Message is required']
    ],
  ]);

  if (r::is('POST')) {
    $form->emailAction([
      'subject' => 'New request from {email}',
      'to' => 'test@terestrika.hr',
      'from' => 'test@terestrika.hr',
    ])
      ->logAction([
        'file' => kirby()->roots()->site() . '/mailer.log',
      ]);
  }

  return compact('form');
};
