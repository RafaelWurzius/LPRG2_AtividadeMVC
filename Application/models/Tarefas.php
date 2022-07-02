<?php

namespace Application\models;

use Application\core\Database;
use PDO;
class Tarefas
{
  /** Poderiamos ter atributos aqui */

  /**
  * Este método busca todas as tarefas armazenadas na base de dados
  *
  * @return   array
  */
  public static function findAll()
  {
    $conn = new Database();
    $result = $conn->executeQuery('SELECT * FROM tarefas');
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

  /**
  * Este método busca uma tarefa armazenada na base de dados com um
  * determinado ID
  * @param    int     $id   Identificador único da tarefa
  *
  * @return   array
  */
  public static function findById(int $id)
  {
    $conn = new Database();
    $result = $conn->executeQuery('SELECT * FROM tarefas WHERE id = :ID LIMIT 1', array(
      ':ID' => $id
    ));

    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

}
