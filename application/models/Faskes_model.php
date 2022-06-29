<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faskes_model extends CI_Model
{
   private $table_faskes = 'faskes';

   public function getAllDataFaskes()
   {
      $this->db->select('*');
      $this->db->from('faskes');
      $this->db->join('kecamatan', 'kecamatan.id_kecamatan = faskes.id', 'LEFT');
      $this->db->join('jenis_faskes', 'jenis_faskes.id_faskes = faskes.jenis_id', 'left');
      $query = $this->db->get();

      return $query->result();
   }
}