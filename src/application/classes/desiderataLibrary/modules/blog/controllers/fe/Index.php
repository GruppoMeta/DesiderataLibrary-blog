<?php
class desiderataLibrary_modules_blog_controllers_fe_Index extends org_glizy_mvc_core_Command
{
    public function execute()
    {
        $data = $this->view->getContent();
        $category = @$data->category;
        if ($category) {
            $filters = new StdClass;
            $filters->category = array('value' => $category, 'condition' => '=');
            $this->setComponentsAttribute('ModuleDP', 'filters', $filters);
        } else {
            // TODO mostrare errore
        }
    }
}