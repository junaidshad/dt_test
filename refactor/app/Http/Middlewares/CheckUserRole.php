<?php

/**
 * We also need to register this middleware in Kernel.php file. And the in the route files apply the middleware where necessary.
 */
class CheckUserRole
{
    public function handle($request, Closure $next)
    {
        if (!in_array($request->__authenticatedUser->user_type, [config('roles.ADMIN_ROLE_ID'), config('roles.SUPERADMIN_ROLE_ID')])) {
            return response('Unauthorized', 403);
        }

        return $next($request);
    }
}
