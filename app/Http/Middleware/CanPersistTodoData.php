<?php

namespace App\Http\Middleware;

use Closure;
use App\Todo;
use Auth;

class CanPersistTodoData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        \Log::info($request->method());
        $hasPermission = true;
        $method = $request->method();
        if (strpos($request->path(), 'todo') !== false && ($method == 'PUT' || $method == 'DELETE')) {
            $id = $request->segment(2);
            $todo = Todo::find($id);
            $hasPermission = $todo ? Auth::user()->id == $todo->user_id : true;
        }

        return $hasPermission ? $next($request) : response('Unauthorized.', 401);
    }
}
