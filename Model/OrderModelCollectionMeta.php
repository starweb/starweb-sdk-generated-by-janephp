<?php

namespace Starweb\Sdk\Model;

class OrderModelCollectionMeta
{
    /**
     * 
     *
     * @var PaginationModel
     */
    protected $pagination;
    /**
     * 
     *
     * @return PaginationModel
     */
    public function getPagination() : ?PaginationModel
    {
        return $this->pagination;
    }
    /**
     * 
     *
     * @param PaginationModel $pagination
     *
     * @return self
     */
    public function setPagination(?PaginationModel $pagination) : self
    {
        $this->pagination = $pagination;
        return $this;
    }
}