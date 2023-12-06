<?php

namespace myfrm\middleware;

class Auth
{
    public function handle()
    {
        if (!checkAuth()) {
            redirect(LOGIN_PAGE);
        }
    }
}