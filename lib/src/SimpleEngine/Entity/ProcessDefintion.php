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
 * Entity Class ProcessDefintion
 * @package SimpleEngine\Entity
 *
 * @ORM\Entity()
 * @ORM\Table(name="engine_process_defintion", uniqueConstraints={
 *      @UniqueConstraint(name="uiq_process_name_revision", columns={"name", "revision"})
 * })
 */
class ProcessDefintion
{
    const STATE_DRAFT = 0;
    const STATE_ACTIVE = 1;
    const STATE_INACTVIE = 2;

    /**
     * ID
     * @var int
     *
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="bigint")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(type="bigint")
     */
    private $revision = 1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_time", type="datetime")
     */
    private $createTime;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_latest_revision", type="boolean")
     */
    private $isLatestRevision = true;

    /**
     * @var string
     *
     * @ORM\Column(name="defintion_content", type="text")
     */
    private $defintionContent;

    /**
     * @var int
     *
     * @ORM\Column(type="smallint")
     */
    private $state = self::STATE_DRAFT;

    /**
     * @var ProcessInstance
     *
     * @ORM\OneToMany(targetEntity="SimpleEngine\Entity\ProcessInstance", mappedBy="process")
     */
    private $instances;


} 