<?php

namespace Dandaj\AkademiaBasicTemplate;

use Illuminate\Support\ServiceProvider;

class AkademiaBasicTemplateServiceProvider extends ServiceProvider
{
	public function register()
	{
		$this->app->bind('akademiaBasicTemplate', function ($app) {
			return new AkademiaBasicTemplate;
		});
	}

	public function boot()
	{
		$this->publishes([
			__DIR__ . '/database/seeds/BasicTemplateSeeder.php' => base_path('database/seeds/BasicTemplateSeeder.php'),
			__DIR__ . '/resources/views/bottomContentsHead/default.blade.php' => base_path('resources/views/admin/cms/templateHeads/bottomContents/default.blade.php'),			
			__DIR__ . '/resources/views/templates/main_template.blade.php' => base_path('resources/views/admin/cms/templates/templates/main_template.blade.php'),
			__DIR__ . '/storage/images/realSize/og_default.png' => base_path('storage/images/realSize/og_default.png'),
			__DIR__ . '/storage/images/thumbs/og_default.png' => base_path('storage/images/thumbs/og_default.png'),
			__DIR__ . '/public/cmsSources' => base_path('public/cmsSources'),
		]);
	}
}