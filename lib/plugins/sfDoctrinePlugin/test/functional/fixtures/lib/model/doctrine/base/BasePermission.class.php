<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BasePermission extends myDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('permission');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
    }

    public function setUp()
    {
        $this->hasMany('User as Users', array(
             'refClass' => 'UserPermission',
             'local' => 'permission_id',
             'foreign' => 'user_id'));

        $this->hasMany('Group as Groups', array(
             'refClass' => 'GroupPermission',
             'local' => 'permission_id',
             'foreign' => 'group_id'));
    }
}