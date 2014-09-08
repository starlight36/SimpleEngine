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
 * Class ProcessActor
 * @package SimpleEngine\Entity
 *
 * @ORM\Entity()
 * @ORM\Table(name="engine_process_actor", uniqueConstraints={
 *      @UniqueConstraint(name="uiq_process_actor_type_name", columns={"type", "name"})}
 * })
 */
class ProcessActor
{

    /**
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
     * @ORM\Column(type="string", length=50)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $name;

} 