<?php 

namespace Model\Mapper;

use Lib\Db\TableGateway;

class UserMapper extends TableGateway
{
	protected $entity = 'Model\Entity\User';
	protected $table  = 'tb_users';
}