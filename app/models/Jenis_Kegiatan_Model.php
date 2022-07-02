<?php

class Jenis_Kegiatan_Model
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getData()
  {
    $query = "SELECT * FROM jenis_kegiatan";
    $this->db->query($query);
    return $this->db->resultSet();
  }
}
