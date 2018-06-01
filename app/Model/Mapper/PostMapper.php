<?php 

namespace Model\Mapper;

use Lib\Db\TableGateway;

class PostMapper extends TableGateway
{
	protected $entity = 'Model\Entity\Post';
	protected $table  = 'tb_posts';
}