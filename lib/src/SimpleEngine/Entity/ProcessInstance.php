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

namespace SimpleEngine\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class ProcessInstance
 * @package SimpleEngine\Entity
 *
 * @ORM\Entity()
 * @ORM\Table(name="engine_process_instance", indexes={
 *      @ORM\Index(name="idx_process_instance_business_key", columns={"business_key"}),
 *      @ORM\Index(name="idx_process_instance_owner", columns={"owner"}),
 * })
 */
class ProcessInstance
{
    const STATE_CLOSE = 0;
    const STATE_OPEN = 1;

    /**
     * @var int
     *
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="bigint")
     */
    private $id;

    /**
     * @var ProcessDefintion
     *
     * @ORM\ManyToOne(targetEntity="SimpleEngine\Entity\ProcessDefintion", inversedBy="instances")
     * @ORM\JoinColumn
     */
    private $process;

    /**
     * @var string
     *
     * @ORM\Column(name="business_key", type="string", length=255)
     */
    private $businessKey;

    /**
     * @var string
     *
     * @ORM\Column(name="create_time", type="datetime")
     */
    private $createTime;

    /**
     * @var ProcessActor
     *
     * @ORM\ManyToOne(targetEntity="SimpleEngine\Entity\ProcessActor")
     * @ORM\JoinColumn()
     */
    private $owner;

    /**
     * @var int
     *
     * @ORM\Column(type="smallint")
     */
    private $state = self::STATE_OPEN;

    /**
     * @var ProcessTask[]
     *
     * @ORM\OneToMany(targetEntity="SimpleEngine\Entity\ProcessTask", mappedBy="instance")
     */
    private $tasks;

} 