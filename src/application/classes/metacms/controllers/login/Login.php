<?php
class metacms_controllers_login_Login extends org_glizy_mvc_core_Command
{
    public function execute()
    {
        $c = $this->view->getComponentById('formLoginPage');
        if (is_object($c)) {
            $speakingUrlManager = $this->application->retrieveProxy('org.glizycms.speakingUrl.Manager');
            $url = $speakingUrlManager->makeUrl($this->view->loadContent('loginPage'));
            $c->setAttribute('accessPageId', $url);
        }
    }
}