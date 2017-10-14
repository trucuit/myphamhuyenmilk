<?php
class IndexModel extends Model
{
    private $_column = array('id', 'name', 'price', 'view', 'description');

    public function __construct()
    {
        parent::__construct();
    }

    public function listItem()
    {
        $result = $this->showAll();
        return $result;
    }
}
