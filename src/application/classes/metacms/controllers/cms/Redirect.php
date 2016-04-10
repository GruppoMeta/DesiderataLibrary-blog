<?php
class metacms_controllers_cms_Redirect extends org_glizy_mvc_core_Command
{
    public function execute($language, $module, $id)
    {
        // cerca il modulo
        $modules = org_glizy_Modules::getModules();
        foreach( $modules as $m ) {
            $model = $m->classPath.'.models.Model';
            if ($m->classPath==$model || $m->classPath==$module || $m->id==$module) {
                $this->redirectToPage($m, $id);
            }

        }

        exit;
    }

    private function redirectToPage($module, $id)
    {
        $model = $module->classPath.'.models.Model';
        $ar = org_glizy_ObjectFactory::createModel($model);
        if ($ar) {
            $ar->load($id);
            $sitemap = $this->application->getSiteMap();
            $menu = $sitemap->getMenuByPageType($module->pageType);

            // TODO migliorare
             org_glizy_helpers_Navigation::gotoUrl( GLZ_HOST.'/it/'.$menu->id.'/'.glz_sanitizeUrlTitle($menu->title).'/'.$id.'/'.glz_sanitizeUrlTitle($ar->title) );
//             $this->changePage($module->id, $ar->getValuesAsArray());
        }

    }
}