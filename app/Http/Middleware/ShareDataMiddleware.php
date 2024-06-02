<?php
    
    namespace App\Http\Middleware;
    
    use Closure;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\View;
    
    class ShareDataMiddleware
    {
        public function handle(Request $request, Closure $next)
        {
            View::share('metaTitle', 'Blade Test');
            
            return $next($request);
        }
    }
