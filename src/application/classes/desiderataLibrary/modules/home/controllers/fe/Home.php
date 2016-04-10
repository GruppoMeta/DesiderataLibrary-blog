<?php
class desiderataLibrary_modules_home_controllers_fe_Home extends org_glizy_mvc_core_Command
{
    public function execute()
    {
        $mapPages = array();
        $filters = array();
        $contentProxy = org_glizy_ObjectFactory::createObject('org.glizycms.contents.models.proxy.ContentProxy');
        $languageId = org_glizy_ObjectValues::get('org.glizy', 'languageId');
        $siteMap = $this->application->getSiteMap();
        $siteArray = $siteMap->getSiteArray();
        $publications = array();
        foreach($siteArray as $m) {
            if ($m['pageType']==='desiderataLibrary.modules.blog.views.FrontEnd') {
                $content = $contentProxy->readContentFromMenu($m['id'], $languageId);
                if (@$content->category) {
                    if ($content->cover) {
                        $content->cover = json_decode($content->cover);
                    }

                    $publications[] = $content;
                    $content->__url__ = __Link::makeUrl('link', array('pageId' => $m['id']));
                    $mapPages[$content->category] = $m['id'];
                    $filters[] = array('field' => 'category', 'value' => $content->category, 'condition' => '=');
                }
            }
        }

        __Session::set('home.mapPages', $mapPages);

        $f = new StdClass;
        $f->__OR__ = $filters;
        $this->setComponentsAttribute('ModuleDP', 'filters', $f);

        $c = $this->view->getComponentById('publications');
        $c->setContent($publications);
        // $this->setComponentsAttribute('publications', 'data', $publications);
    }
}