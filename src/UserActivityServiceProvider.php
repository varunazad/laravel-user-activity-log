namespace Varunazad\LaravelUserActivityLog;

use Illuminate\Support\ServiceProvider;

class UserActivityServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/user-activity-log.php' => config_path('user-activity-log.php'),
        ]);

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/user-activity-log.php', 'user-activity-log'
        );
    }
}
