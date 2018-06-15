<?php 

namespace Lib\Db;

use PDO;
use PDOStatement;
use PDOException;

abstract class TableGateway
{
	protected $con;

	public function __construct()
	{
		$this->con = Connection::getInstance();
	}

	private function bind(PDOStatement $stmt, array $data)
	{
		foreach ($data as $key => $value) {
			$stmt->bindValue(':'.$key,$value);
		}
		return $stmt;
	}

	public function insert(array $data)
	{
		foreach ($data as $key => $value) {
			$keys[] = $key;
			$params[] = ":{$key}";
		}
		
		$keys = implode(',', $keys);
		$params = implode(',', $params);

		$sql = "INSERT INTO {$this->table} ({$keys}) VALUES ({$params})";

		try {
			$this->con->beginTransaction();

			$stmt = $this->con->prepare($sql);

			$stmt = $this->bind($stmt,$data);

			$stmt->execute();

			$this->con->commit();

		} catch (PDOException $e) {			
			$this->con->rollback();
			echo "Erro: " . $e->getMessage();
		}

	}
	public function update(array $data, string $where)
	{
		foreach ($data as $key => $value) {
			$sets[] = "{$key}=:{$key}";
		}

		$sets = implode(',', $sets);

		$sql = "UPDATE {$this->table} SET {$sets} WHERE {$where}";
	
		try {
			$this->con->beginTransaction();

			$stmt = $this->con->prepare($sql);

			$stmt = $this->bind($stmt,$data);

			$stmt->execute();

			$this->con->commit();
		} catch (PDOException $e) {
			$this->con->rollback();
			echo "Erro: " . $e->getMessage();
		} 
	}
	public function delete(string $where)
	{
		$sql = "DELETE FROM {$this->table} WHERE {$where}";

		try {
			$this->con->beginTransaction();

			$this->con->exec($sql);

			$this->con->commit();
		} catch (PDOException $e) {
			$this->con->rollback();
			echo "Erro: " . $e->getMessage();	
		}
	}
	public function find(string $keys = '*', string $where)
	{
		$sql = "SELECT {$keys} FROM {$this->table} WHERE {$where}";

		$stmt = $this->con->query($sql);

		return $stmt->fetchObject($this->entity);
	}
	public function findAll(
		string $keys = '*',
		string $where = null,
		string $filter = null,
		string $order = null,
		int $limit = null
		)
	{
		$sql = "SELECT {$keys} FROM {$this->table}";
		if($where){
			$sql .= " WHERE {$where}";
		}
		if ($filter && $where) {
			$sql .= " AND $filter";
		}
		if ($order) {
			$sql .= " ORDER BY {$order}";
		}
		if ($limit) {
			$sql .= " LIMIT {$limit}";
		}

		$stmt = $this->con->query($sql);

		return $stmt->fetchAll(PDO::FETCH_CLASS,$this->entity);
	}
}