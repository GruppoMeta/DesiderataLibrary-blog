<?php
class desiderataLibrary_modules_blog_views_renderers_CellBlog extends org_glizy_components_render_RenderCellRecordSetList
{
    public function renderCell( $row, $params )
    {
        $mapPages = __Session::get('home.mapPages');
        $pageId = isset($mapPages[$row->category]) ? $mapPages[$row->category] : 0;
        if ($pageId) {
            $row->__url__= __Link::makeUrl('desiderataLibrary_blog_link', array('pageId' => $pageId, 'document_id' => $row->document_id, 'title' => $row->title ));
        }
    }
}