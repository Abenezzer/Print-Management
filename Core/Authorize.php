<?php

namespace Core;

class Authorize
{

    public static function route($middlewares)
    {
        foreach ($middlewares as $middleware) {
            $middleware = strtolower($middleware);
            $user = Session::get('user') ?? redirect('/');
            $role = strtolower($user['role']);

            if ($middleware === "teacher" && $role !== 'teacher') redirect('/');
            if ($middleware === "approver" && $role !== 'approver') redirect('/');
            if ($middleware === "admin" && $role !== 'admin') redirect('/');
            if ($middleware === "printer" && $role !== 'printer') redirect('/');
        }
    }
}