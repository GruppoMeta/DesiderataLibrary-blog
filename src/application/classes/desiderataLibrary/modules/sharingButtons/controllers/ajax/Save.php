<?php
class desiderataLibrary_modules_sharingButtons_controllers_ajax_Save extends org_glizycms_contents_controllers_activeRecordEdit_ajax_SaveClose
{

    public function execute($data)
    {
        $data = json_decode($data);
        $shareButtons['enable'] = $data ->sharingButtonCheck;
        $shareButtons['dim'] = $data ->shareButtonDim;
        $shareButtons['buttonList'] = $data->enabledButton;
        desiderataLibrary_modules_sharingButtons_views_SharingButton::setSharingButtonList($shareButtons);
        return true;
    }
}