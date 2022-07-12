<?php

namespace AlexWestergaard\PhpGa4\Event;

use AlexWestergaard\PhpGa4\Interface;
use AlexWestergaard\PhpGa4\Model;
use AlexWestergaard\PhpGa4\Item;

class ViewItemList extends Model\Event implements Interface\ViewItemList
{
    protected $item_list_id;
    protected $item_list_name;
    protected $items = [];

    public function getName(): string
    {
        return 'view_item_list';
    }

    public function getParams(): array
    {
        return [
            'item_list_id',
            'item_list_name',
            'items',
        ];
    }

    public function getRequiredParams(): array
    {
        return ['items'];
    }

    public function setItemListId(string $id)
    {
        $this->item_list_id = $id;
    }

    public function setItemListName(string $name)
    {
        $this->item_list_name = $name;
    }

    public function addItem(Item $item)
    {
        $this->items[] = $item->toArray();
    }
}