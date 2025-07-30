namespace Varunazad\LaravelUserActivityLog;

use Illuminate\Support\ServiceProvider;

class UserActivityServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publish the config file
        $this->publishes([
            __DIR__.'/../config/user-activity-log.php' => config_path('user-activity-log.php'),
        ], 'user-activity-log-config'); // <-- Tag added here

        // Load migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        // (Optional) Load views, routes, etc. if needed
        // $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'user-activity-log');
    }

    public function register()
    {
        // Merge default config
        $this->mergeConfigFrom(
            __DIR__.'/../config/user-activity-log.php',
            'user-activity-log'
        );
    }
}
