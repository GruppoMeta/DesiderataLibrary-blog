<?php
class desiderataLibrary_modules_blog_controllers_Faker extends org_glizy_mvc_core_Command
{
    public function execute()
    {
        metacms_helpers_FakerHelper::populate(
                'desiderataLibrary.modules.blog.models.Model',
                array(
                    'title' => 'title',
                    'subtitle' => 'title',
                    'date' => 'date',
                    'category' => 'category-2',
                    'text' => 'longText',
                    'author' => 'person',
                    'urlLink' => 'url',
                    'image' => 'image'
                )
            );
        $this->changeAction('index');
    }
}