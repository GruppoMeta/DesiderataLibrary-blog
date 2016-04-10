<?php
class desiderataLibrary_modules_blog_controllers_be_Edit extends org_glizycms_contents_controllers_moduleEdit_Edit
{
    public function execute($id)
    {
        if ($id) {
            $c = $this->view->getComponentById('__model');
            $contentproxy = org_glizy_objectFactory::createObject('org.glizycms.contents.models.proxy.ModuleContentProxy');
            $data = $contentproxy->loadContent($id, $c->getAttribute('value'));
            $data['__id'] = $id;
        } else {
            $data = array();
        }
        if ($this->user->groupId === 8) {
            if (isset($data['document_detail_FK_user_id']) && $data['document_detail_FK_user_id']!==$this->user->id) {
                $this->logAndMessage('Permesso non disponibile');
                $this->changeAction('');
            }

            $data['author'] = $this->user->firstName.' '.$this->user->lastName;
            $this->setComponentsAttribute('author', 'readOnly', true);
        }

        $this->view->setData($data);
    }
}