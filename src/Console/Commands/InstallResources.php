<?php

namespace AndreyArtamonov\EditorJS\Console\Commands;

use Illuminate\Console\Command;

class InstallResources extends Command
{
    protected $signature = 'editorjs:install';
    protected $description = 'Install the EditorJS for Laravel';

    public function getVersions() {

    }

    public function handle()
    {
//        $this->
        $this->info('Test');
    }
}
