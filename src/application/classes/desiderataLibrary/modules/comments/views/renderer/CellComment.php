<?php
class desiderataLibrary_modules_comments_views_renderer_CellComment extends org_glizy_components_render_RenderCellRecordSetList
{
    private $commentProxy;

    function __construct(&$application)
    {
        parent::__construct($application);
        $this->commentProxy = org_glizy_ObjectFactory::createObject('desiderataLibrary.modules.comments.models.CommentProxy');
    }

    function renderCell( &$ar, $params )
    {
        $ar->isAdmin = $this->commentProxy->canAdmin($ar);
        $ar->text = nl2br($ar->text);
        $ar->date = glz_defaultDate2locale( __T('GLZ_DATETIME_FORMAT'), $ar->date->date);
        $ar->__urldelete__ = $ar->isAdmin ? __Link::addParams(array('commentAction' => 'deleteComment', 'cid' => $ar->simple_document_id)) : '';
    }
}
