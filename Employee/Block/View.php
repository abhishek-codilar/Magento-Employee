<?php

namespace Codilar\Employee\Block;

use Magento\Framework\View\Element\Template;
use Codilar\Employee\Model\Employee;
use Codilar\Employee\Model\ResourceModel\Employee\CollectionFactory;

class View extends Template
{
    /**
     * @var CollectionFactory
     */
    protected $collectionFactory;

    public function __construct(
        Template\Context $context,
        CollectionFactory $collectionFactory,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->collectionFactory = $collectionFactory;
    }

    /**
     * @return emp[]
     */
    public function getAllEmp()
    {
        $collection = $this->collectionFactory->create();
        return $collection->getItems();
    }
    public function getFormUrl() {
        return $this->getUrl('employee/employee/form');
    }

    public function getAddUrl()
    {
        return $this->getUrl('employee/employee/add');
    }
    public function getDeleteUrl()
    {
        return $this->getUrl('employee/employee/delete');
    }
    public function getEditUrl()
    {
        return $this->getUrl('employee/employee/edit');
    }
    public function getViewUrl()
    {
        return $this->getUrl('employee/employee/view');
    }
    public function getUpdateUrl()
    {
        return $this->getUrl('employee/employee/update');
    }
    public function getUpdateValues()
    {   
        $id=$this->getRequest()->getParam('entity_id');
        $collection=$this->collectionFactory->create();
        return $collection->getItemById($id);
    }
    public function getDetailsUrl()
    {
        return $this->getUrl('employee/employee/details');
    }
    public function getEmployee()
    {   
        $id=$this->getRequest()->getParam('entity_id');
        $collection=$this->collectionFactory->create();
        return $collection->getItemById($id);
    }

}