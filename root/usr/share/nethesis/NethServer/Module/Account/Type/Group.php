<?php
namespace NethServer\Module\Account\Type;

/*
 * Copyright (C) 2011 Nethesis S.r.l.
 * 
 * This script is part of NethServer.
 * 
 * NethServer is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * NethServer is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with NethServer.  If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * Manage system user groups
 * 
 * @link http://redmine.nethesis.it/issues/185
 */
class Group extends \Nethgui\Controller\TableController
{

    public function initialize()
    {
        $adapter = new Group\GroupAdapter($this->getPlatform());

        $this
            ->setTableAdapter($adapter)
            ->setColumns($adapter->getColumns())
            ->addTableAction(new Group\Modify('create'))
            ->addTableAction(new \Nethgui\Controller\Table\Help('Help'))
            ->addRowAction(new Group\Modify('update'))
            ->addRowAction(new Group\Modify('delete'))
        ;

        parent::initialize();
    }
}
