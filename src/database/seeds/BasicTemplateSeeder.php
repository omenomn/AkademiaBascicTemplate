<?php

use Illuminate\Database\Seeder;
use App\Models\Template;
use App\Models\Style;
use App\Models\StyleLink;
use App\Models\Head;
use App\Models\Page;

class BasicTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $date = date('Y-m-d H:i:s');
        Style::insert([
            [
                'name' => 'Bootstrap',
                'slug' => 'bootstrap',
                'created_at' => $date,
                'updated_at' => $date,
            ],            
            [
                'name' => 'Full Calendar',
                'slug' => 'fullcalendar',
                'created_at' => $date,
                'updated_at' => $date,
            ],            
            [
                'name' => 'Main',
                'slug' => 'main',
                'created_at' => $date,
                'updated_at' => $date,
            ],            
            [
                'name' => 'Media Queries',
                'slug' => 'media_queries',
                'created_at' => $date,
                'updated_at' => $date,
            ],
        ]);

        $head = Head::create([
            'title' => 'GDATA Akademia',
            'slug' => 'main_head',
            'description' => '2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line ',
            'fb_id' => '3432432',
            'og_url' => 'http://gdata-akademia.dev/',
            'og_tyoe' => 'article',
            'og_title' => 'GDATA Akademia',
            'og_description' => '2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line ',
            'og_image' => 'og_default.png',
            'bottonm_content_slug' => 'default',
        ]);

        $styles = Style::get();

        $stylesToSave = [];

        foreach ($styles as $style) {
            $stylesToSave[] = new StyleLink([
                    'style_id' => $style->id,
                    'link' => null,
                    'type' => 'file',
                ]);
        }

        $stylesToSave[] = new StyleLink([
            'style_id' => null,
            'link' => '//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600,600italic,400italic,300italic,300',
            'type' => 'link',
        ]);        

        $stylesToSave[] = new StyleLink([
            'style_id' => null,
            'link' => '//cdn.jsdelivr.net/qtip2/2.2.1/jquery.qtip.min.css',
            'type' => 'link',
        ]);        

        $stylesToSave[] = new StyleLink([
            'style_id' => null,
            'link' => '//fonts.googleapis.com/css?family=Open+Sans&subset=latin,latin-ext',
            'type' => 'link',
        ]);        

        $stylesToSave[] = new StyleLink([
            'style_id' => null,
            'link' => '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.css',
            'type' => 'link',
        ]);        

        $stylesToSave[] = new StyleLink([
            'style_id' => null,
            'link' => '//cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css',
            'type' => 'link',
        ]);        

        $stylesToSave[] = new StyleLink([
            'style_id' => null,
            'link' => '//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css',
            'type' => 'link',
        ]);

        $stylesToSave[] = new StyleLink([
            'style_id' => null,
            'link' => '//fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext',
            'type' => 'link',
        ]);

        $head->styleLinks()->saveMany($stylesToSave);

        $template = Template::create([
            'name' => 'Główny szablon',
            'slug' => 'main_template',
            'head_id' => $head->id,
        ]);

        $page = Page::create([
            'template_id' => $template->id,
            'title' => 'Strona startowa',
            'slug' => 'start',
            'tags' => 'fds,dsfsdfds,dsfsdf',
            'content' => '<h1>your code</h1>',
        ]);
    }
}
