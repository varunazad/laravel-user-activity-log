namespace Varunazad\UserActivityLog\Middleware;

use Closure;
use Varunazad\UserActivityLog\Models\UserActivity;

class LogUserActivity
{
    public function handle($request, Closure $next)
    {
        if (auth()->check()) {
            UserActivity::create([
                'user_id' => auth()->id(),
                'url' => $request->fullUrl(),
                'method' => $request->method(),
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'route' => $request->route() ? $request->route()->getName() : null,
            ]);
        }

        return $next($request);
    }
}
