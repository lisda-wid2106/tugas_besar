<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class SiswaModel extends Model
{
     
 
 
    public function getSiswa()
    {
     $query=  $this->db->table('users')
                       ->select('*')
                       ->where('role', 'siswa');
        return $query->get();
    }
 
    public function saveSiswa($data){
        $query = $this->db->table('users')->insert($data);
        return $query;
    }
 
    public function updateSiswa($data, $id)
    {
        $query = $this->db->table('users')->update($data, array('id' => $id));
        return $query;
    }
 
    public function deleteSiswa($id)
    {
        $query = $this->db->table('users')->delete(array('id' => $id));
        return $query;
    } 
 
   
}