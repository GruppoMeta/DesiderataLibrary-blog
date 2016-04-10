<?php
class desiderataLibrary_modules_blog_views_components_StorytellerCmp extends org_glizy_components_Component
{
    /**
     * Init
     *
     * @return  void
     * @access  public
     */
    function init()
    {
        // define the custom attributes
        $this->defineAttribute('label',     false,  NULL,   COMPONENT_TYPE_STRING);

        // call the superclass for validate the attributes
        parent::init();
    }

    function process()
    {
        $content = org_glizy_helpers_Convert::formEditObjectToStdObject($this->_parent->loadContent($this->getId(), true));
        $this->_content = new desiderataLibrary_modules_blog_views_skins_StorytellerSkinIterator($content,
            $this->_application->getPageId(),
            __Routing::scriptUrl());
    }

    public static function compileAddPrefix($compiler, &$node, $componentId, $idPrefix)
    {
        return $idPrefix.'\''.$componentId.'-\'.';
    }
}
