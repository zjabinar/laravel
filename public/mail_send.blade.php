<?php

$val_email = Input::get('email');
$message = Input::get('msg');

$data['name'] = 'Zaldy Jabinar';
Mail::send('emails.welcome', $data, function($message) {
    $message->to($val_email, 'ZALDY')->subject('Email using Laravel!');

