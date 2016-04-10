<?php
class desiderataLibrary_services_speakingUrl_ModuleResolver extends org_glizycms_speakingUrl_ModuleResolver
{
    protected function createResolvedVO($id)
    {
        $ar = org_glizy_objectFactory::createModel($this->model);
        if ($id && $ar->load($id)) {
            // cerca i pageType associati al modulo
            $pageId = false;
            $pageTitle = false;
            $pageType = strtolower($this->moduleVO->pageType);
            $application = org_glizy_ObjectValues::get('org.glizy', 'application');
            $contentProxy = org_glizy_ObjectFactory::createObject('org.glizycms.contents.models.proxy.ContentProxy');
            $languageId = org_glizy_ObjectValues::get('org.glizy', 'languageId');

            $siteMapArray = $application->getSiteMap()->getSiteArray();
            $IDs = array_keys($siteMapArray);
            foreach ($IDs as $key)
            {
                $menuNode = $siteMapArray[$key];
                if (strtolower($menuNode['pageType'])==$pageType) {
                    $content = $contentProxy->readContentFromMenu($menuNode['id'], $languageId);
                    if (property_exists($content, 'category') && $content->category==$ar->category) {
                        $pageId = $menuNode['id'];
                        $pageTitle = $menuNode['title'];
                        break;
                    }
                }
            }

            if ($pageId) {
                $url = __Link::makeUrl($this->routingUrl, array('pageId' => $pageId, 'pageTitle' => $pageTitle, 'document_id' => $id, 'title' => $ar->{$this->titleField}));
                $link = __Link::makeSimpleLink($ar->{$this->titleField}, $url);

                $resolvedVO = org_glizycms_speakingUrl_ResolvedVO::create(
                                        $ar,
                                        $url,
                                        $link,
                                        $ar->{$this->titleField}
                                    );
                return $resolvedVO;
            }
        }

        // TODO implementare, non va bene per i moduli
        // // the menu isn't found or isn't visible in this language
        // // redirect to home
        // return $this->makeUrlFromId(__Config::get('START_PAGE'), $fullLink);
        return org_glizycms_speakingUrl_ResolvedVO::create404();
    }

}
