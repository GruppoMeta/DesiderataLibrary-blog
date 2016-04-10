<?php
class desiderataLibrary_Multisite
{
    public static function init()
    {
        $siteName = getenv('GLIZY_APPNAME');
        if (!$siteName) {
            org_glizy_helpers_Navigation::accessDenied();
        }

        if (!file_exists(org_glizy_Paths::get('CACHE').$siteName)) {
            mkdir(org_glizy_Paths::get('CACHE').$siteName);
        }
        if (!file_exists(org_glizy_Paths::get('APPLICATION_TO_ADMIN_CACHE').$siteName)) {
            mkdir(org_glizy_Paths::get('APPLICATION_TO_ADMIN_CACHE').$siteName);
        }

        $application = &org_glizy_ObjectValues::get('org.glizy', 'application');
        org_glizy_Paths::set('CACHE', org_glizy_Paths::get('CACHE').$siteName.'/');
        org_glizy_Paths::set('CACHE_CODE', org_glizy_Paths::get('CACHE_CODE').$siteName.'/');
        org_glizy_Paths::set('CACHE_IMAGES', org_glizy_Paths::get('CACHE_IMAGES').$siteName.'/');
        org_glizy_Paths::set('CACHE_CSS', org_glizy_Paths::get('CACHE_CSS').$siteName.'/');
        org_glizy_Paths::set('APPLICATION_TO_ADMIN_CACHE', org_glizy_Paths::get('APPLICATION_TO_ADMIN_CACHE').$siteName.'/');

        if ( is_null( $application ) || !$application->isAdmin() ) {
            org_glizy_Paths::set('APPLICATION_MEDIA_ARCHIVE', org_glizy_Paths::get('APPLICATION').'mediaArchive/'.$siteName.'/');
        } else {
            org_glizy_Paths::set('APPLICATION_MEDIA_ARCHIVE', org_glizy_Paths::get('APPLICATION_TO_ADMIN').'mediaArchive/'.$siteName.'/');
        }

        org_glizy_dataAccessDoctrine_DataAccess::initCache();
    }

    public static function checkUser()
    {
        $user = org_glizy_ObjectValues::get('org.glizy', 'user');
        if ($user && $user->isLogged() && __Session::get('desiderata.checkEditor', false)===false) {
            $ar = __ObjectFactory::createModel('org.glizy.models.User');
            $ar->load($user->id);
            if ($ar->user_FK_usergroup_id!=1 && $ar->user_FK_editor_id!=__Config::get('desiderataLibrary.blog.editor')) {
                // non consentito
                $authClass = org_glizy_ObjectFactory::createObject(__Config::get('glizy.authentication'));
                if ($authClass) {
                    $authClass->logout();
                }

                org_glizy_Session::set('glizy.loginError', org_glizy_locale_Locale::get('GLZ_LOGIN_NOACCESS'));
                org_glizy_helpers_Navigation::gotoUrl(org_glizy_helpers_Link::makeUrl('link', array('pageId' => 'login')));
            }

            __Session::set('desiderata.checkEditor', true);
        }
    }
}
