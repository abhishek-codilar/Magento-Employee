<?php

namespace Codilar\Employee\Controller\Employee;

use Magento\Framework\App\Action\Action;
use Codilar\Employee\Model\EmployeeFactory as ModelFactory;
use Codilar\Employee\Model\ResourceModel\Employee as ResourceModel;
use Magento\Framework\App\Action\Context;

class Delete extends Action
{

    protected $modelFactory;
    protected $resourceModel;
    public function __construct(
        Context $context,
        ModelFactory $modelFactory,
        ResourceModel $resourceModel
    )
    {
        parent::__construct($context);
        $this->modelFactory = $modelFactory;
        $this->resourceModel = $resourceModel;
    }

    public function execute()
    {

        $model = $this->modelFactory->create();
        $id= $this->getRequest()->getParam('entity_id');
        $model->load($id);
        $model->delete();
        $this->messageManager->addSuccessMessage(__("Successfully deleted"));
        return $this->resultRedirectFactory->create()->setPath('employee/employee/view');
    }
}