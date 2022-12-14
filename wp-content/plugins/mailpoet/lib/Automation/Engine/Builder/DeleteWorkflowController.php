<?php declare(strict_types = 1);

namespace MailPoet\Automation\Engine\Builder;

if (!defined('ABSPATH')) exit;


use MailPoet\Automation\Engine\Data\Workflow;
use MailPoet\Automation\Engine\Exceptions;
use MailPoet\Automation\Engine\Storage\WorkflowStorage;

class DeleteWorkflowController {
  /** @var WorkflowStorage */
  private $workflowStorage;

  public function __construct(
    WorkflowStorage $workflowStorage
  ) {
    $this->workflowStorage = $workflowStorage;
  }

  public function deleteWorkflow(int $id): Workflow {
    $workflow = $this->workflowStorage->getWorkflow($id);
    if (!$workflow) {
      throw Exceptions::workflowNotFound($id);
    }

    if ($workflow->getStatus() !== Workflow::STATUS_TRASH) {
      throw Exceptions::workflowNotTrashed($id);
    }

    $this->workflowStorage->deleteWorkflow($workflow);
    return $workflow;
  }
}
