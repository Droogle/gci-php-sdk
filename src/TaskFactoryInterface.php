<?php

namespace Droogle\GCI;

/**
 * Interface for Task Factor.
 */
interface TaskFactoryInterface {

  /**
   * Returns an instance of task from an array definition of a task.
   *
   * @param array $task
   *   The task properties.
   *
   * @return TaskInterface
   *   An Task object.
   */
  public function getTask(array $task);

}
