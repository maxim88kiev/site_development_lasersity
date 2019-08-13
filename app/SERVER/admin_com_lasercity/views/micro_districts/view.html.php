<?php defined('_JEXEC') or die;

jimport('helpers.libraries.view_legacy', JPATH_COMPONENT_ADMINISTRATOR);

class lasercityViewmicro_districts extends ViewLegacy
{
    function setData()
    {
        $this->add_filters = true;
        $this->title = 'COM_LASERCITY_VIEW_NAME_MICRO_DISTRICTS';
		$this->tool_bar = 'list';
    }

    function setTableHEAD()
    {
        $this->getTH('text', '№');
        $this->getTH('check-all');
        $this->getTH('sort', 'JSTATUS', 'published');
        $this->getTH('sort', 'COM_LAVERCITY_TABLE_TITLE', 'title', 30);
        $this->getTH('sort', 'COM_LASERCITY_TABLE_CITY', 'lang_city', 30);
        $this->getTH('sort', 'COM_LASERCITY_TABLE_DISTRICT', 'lang_district', 30);
        $this->getTH('sort', 'COM_LAVERCITY_TABLE_ALIAS', 'alias', 10);
        $this->getTH('sort', 'ID', 'id');
    }

    function setTableBODY($i, $item)
    {
        $this->getTD('text', $i + 1);
        $this->getTD('check', $item->id, $i);
        $this->getTD('publish', $item->published, $i);
        $this->getTD('link', $item->title, $item->id);
        $this->getTD('text', $item->lang_city, $item->id);
        $this->getTD('text', $item->lang_district, $item->id);
        $this->getTD('text', $item->alias, $item->id);
        $this->getTD('text', $item->id);
    }
}