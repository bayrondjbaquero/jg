<?php

// User Login event
Event::listen('user.login', function($user)
{
    Session::put('user', $user);
});

// User logout event
Event::listen('user.logout', function()
{
	Session::flush();
});