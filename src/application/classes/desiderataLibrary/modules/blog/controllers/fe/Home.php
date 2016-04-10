<?php
class desiderataLibrary_modules_blog_controllers_fe_Home extends org_glizy_mvc_core_Command
{
    public function execute()
    {
        $filters = __Session::get('home.filters', false);
        if ($filters===false) {
            $mapPages = array();
            $filters = array();
            $contentProxy = org_glizy_ObjectFactory::createObject('org.glizycms.contents.models.proxy.ContentProxy');
            $languageId = org_glizy_ObjectValues::get('org.glizy', 'languageId');
            $siteMap = $this->application->getSiteMap();
            $siteArray = $siteMap->getSiteArray();
            foreach($siteArray as $m) {
                if ($m['pageType']==='desiderataLibrary.modules.blog.views.FrontEnd') {
                    $content = $contentProxy->readContentFromMenu($m['id'], $languageId);
                    if (@$content->category) {
                        $mapPages[$content->category] = $m['id'];
                        $filters[] = array('field' => 'category', 'value' => $content->category, 'condition' => '=');
                    }
                }
            }

            __Session::set('home.filters', $filters);
            __Session::set('home.mapPages', $mapPages);
        }

        $f = new StdClass;
        $f->__OR__ = $filters;
        $this->view->setAttribute('filters', $f);
    }
}