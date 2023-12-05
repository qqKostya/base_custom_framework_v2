<?php

namespace myfrm\middleware;

class Guest
{
    public function handle()
    {
        if (checkAuth()) {
            redirect('/register');
        }
    }
}