<?php
class desiderataLibrary_modules_blog_Module
{
    static function registerModule()
    {
        $moduleVO = org_glizy_Modules::getModuleVO();
        $moduleVO->id = 'desiderataLibrary.modules.blog';
        $moduleVO->description = 'Modulo blog';
        $moduleVO->version = '1.0.0';
        $moduleVO->classPath = $moduleVO->id;
        $moduleVO->pageType = $moduleVO->id.'.views.FrontEnd';
        $moduleVO->name = __T($moduleVO->pageType);
        $moduleVO->unique = false;
        $moduleVO->author = 'META srl';
        $moduleVO->authorUrl = 'http://www.gruppometa.it';
        $moduleVO->pluginUrl = 'http://www.gruppometa.it';
        $moduleVO->siteMapAdmin = '<glz:Page pageType="desiderataLibrary.modules.blog.views.Admin" id="'.$moduleVO->id.'" value="{i18n:desiderataLibrary.modules.blog.views.FrontEnd}" icon="icon-circle-blank" adm:acl="*" />';

        org_glizy_Modules::addModule( $moduleVO );
        org_glizycms_speakingUrl_Manager::registerResolver(
                org_glizy_ObjectFactory::createObject('desiderataLibrary.services.speakingUrl.ModuleResolver', $moduleVO, 'desiderataLibrary_blog_link')
            );
    }
}

