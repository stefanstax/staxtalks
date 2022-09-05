<?php

// Build email function using php 
add_action('phpmailer_init', 'setup_phpmailer_init');
function setup_phpmailer_init($phpmailer)
{
  $defaultEmailName = "StaxTalks | Hey Bro";

  $phpmailer->Host = 'smtp.titan.email'; // for example, smtp.mailtrap.io
  $phpmailer->Port = 465; // set the appropriate port: 465, 2525, etc.
  $phpmailer->Username = 'no-reply@staxtalks.com'; // your SMTP username
  $phpmailer->Password = 'FleurdelisMailsHostingerStaxTalks20$'; // your SMTP password
  $phpmailer->SMTPAuth = true;
  $phpmailer->SMTPSecure = 'ssl'; // preferable but optional
  $phpmailer->IsSMTP();
}
