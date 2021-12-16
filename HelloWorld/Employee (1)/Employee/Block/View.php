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
}