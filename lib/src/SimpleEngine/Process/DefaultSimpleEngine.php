<?php
/*---------------------------------------------------------------------------
 * SimpleEngine - A simple PHP workflow & business rule engine.
 *---------------------------------------------------------------------------
 * Copyright 2014, starlight36 <me@starlight36.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *-------------------------------------------------------------------------*/

namespace SimpleEngine\Process;

use SimpleEngine\HistoryService;
use SimpleEngine\InstanceService;
use SimpleEngine\ProcessService;
use SimpleEngine\RuleService;
use SimpleEngine\SimpleEngine;
use SimpleEngine\TaskService;

class DefaultSimpleEngine implements SimpleEngine
{

    /**
     * @return ProcessService
     */
    public function getProcessService()
    {
        // TODO: Implement getProcessService() method.
    }

    /**
     * @return InstanceService
     */
    public function getInstanceService()
    {
        // TODO: Implement getInstanceService() method.
    }

    /**
     * @return TaskService
     */
    public function getTaskService()
    {
        // TODO: Implement getTaskService() method.
    }

    /**
     * @return HistoryService
     */
    public function getHistoryService()
    {
        // TODO: Implement getHistoryService() method.
    }

    /**
     * @return RuleService
     */
    public function getRuleService()
    {
        // TODO: Implement getRuleService() method.
    }
}