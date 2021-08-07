<?php
class PendidikanModel extends CI_Model
{
 public function get_all_sd()
 {
  $query = "SELECT * FROM tb_sd";
  return $this->db->query($query)->result_array();
 }
 public function get_all_smp()
 {
  $query = "SELECT * FROM tb_smp";
  return $this->db->query($query)->result_array();
 }
 public function get_all_sma()
 {
  $query = "SELECT * FROM tb_sma";
  return $this->db->query($query)->result_array();
 }
 public function get_all_univ()
 {
  $query = "SELECT * FROM tb_univ";
  return $this->db->query($query)->result_array();
 }
}
