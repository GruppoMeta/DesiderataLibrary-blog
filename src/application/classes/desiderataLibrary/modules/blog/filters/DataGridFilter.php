<?php

class desiderataLibrary_modules_blog_filters_DataGridFilter implements org_glizy_components_interfaces_ISearchFilters
{
    public function getFilters($filters) {
        $user = org_glizy_ObjectValues::get('org.glizy', 'user');
        if ($user->groupId === 8) {
            if (count($filters)) {
                $newFilters = array();
                foreach($filters as $k=>$v) {
                    $newFilters[$k] = array(
                                            array('field' => 'document_detail_FK_user_id', 'value' => $user->id, 'condition' => '='),
                                            array('field' => $k, 'value' => $v['value'], 'condition' => $v['condition'])
                                            );
                }
                $filters = $newFilters;
            } else {
                $filters['document_detail_FK_user_id'] = array('value' => $user->id, 'condition' => '=');
            }
        }

        return $filters;
    }
}