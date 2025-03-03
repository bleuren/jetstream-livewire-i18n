<?php

namespace Bleuren\JetstreamLivewireI18n\Commands;

use Illuminate\Console\Command;

class PublishTranslationsCommand extends Command
{
    protected $signature = 'jetstream-i18n:publish {--force : Overwrite existing files}';
    protected $description = 'Publish Jetstream Livewire i18n translations and resources';

    public function handle()
    {
        $force = $this->option('force');

        // 發布 Jetstream 視圖覆寫
        $this->call('vendor:publish', [
            '--tag' => 'jetstream-livewire-i18n-views-jetstream',
            '--force' => $force,
        ]);

        // 發布 Laravel 專案視圖
        $this->call('vendor:publish', [
            '--tag' => 'jetstream-livewire-i18n-views-navigation-menu',
            '--force' => $force,
        ]);

        // 發布語言文件
        $this->call('vendor:publish', [
            '--tag' => 'jetstream-livewire-i18n-lang',
            '--force' => $force,
        ]);

        $this->info('Jetstream Livewire i18n resources published successfully!');
    }
}