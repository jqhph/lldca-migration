<?php

namespace Swoft\Migrations\Database\Column;

use Phinx\Db\Adapter\AdapterInterface;

class Geometry extends Column
{
    protected $type = AdapterInterface::PHINX_TYPE_GEOMETRY;
}
