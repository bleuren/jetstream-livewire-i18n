<?php

namespace Bleuren\JetstreamLivewireI18n\Providers;

use Illuminate\Support\ServiceProvider;
use Bleuren\JetstreamLivewireI18n\Commands\PublishTranslationsCommand;

class JetstreamLivewireI18nServiceProvider extends ServiceProvider
{
    public function register()
    {
        // 移除設定檔合併
    }

    public function boot()
    {
        // 發布 Jetstream 視圖覆寫
        $this->publishes([
            __DIR__ . '/../../resources/views/jetstream/auth' => resource_path('views/auth'),
            __DIR__ . '/../../resources/views/jetstream/profile' => resource_path('views/profile'),
            __DIR__ . '/../../resources/views/jetstream/api' => resource_path('views/api'),
            __DIR__ . '/../../resources/views/jetstream/emails' => resource_path('views/emails'),
            __DIR__ . '/../../resources/views/jetstream/teams' => resource_path('views/teams'),
        ], 'jetstream-livewire-i18n-views-jetstream');

        // 發布 Laravel 專案視圖
        $this->publishes([
            __DIR__ . '/../../resources/views/dashboard.blade.php' => resource_path('views/dashboard.blade.php'),
            __DIR__ . '/../../resources/views/navigation-menu.blade.php' => resource_path('views/navigation-menu.blade.php'),
        ], 'jetstream-livewire-i18n-views-navigation-menu');

        // 發布語言文件
        $this->publishes([
            __DIR__ . '/../../lang' => lang_path(),
        ], 'jetstream-livewire-i18n-lang');

        // 註冊命令
        if ($this->app->runningInConsole()) {
            $this->commands([
                PublishTranslationsCommand::class,
            ]);
        }
    }
}