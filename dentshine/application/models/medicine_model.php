<?php
class medicine_model extends CI_model
{
	 function insertmedicine($data)
	 {
         $this->db->insert('medicinetb',$data);
         return $this->db->insert_id();
	 }

	 function updatemedicine($data)
	 {
	 	$this->db->where('medicine_id_pk',$data['medicine_id_pk']);
	 	return $this->db->update('medicinetb',$data);
	 }
	 function deletemedicine($id)
	 {
	 	$this->db->where('medicine_id_pk',$id);
	 	$this->db->set('is_active',0);
	 	$this->db->update('medicinetb');
	 }

	 function medicinedata($id)
	 {
	  $query=$this->db->get_where('medicinetb',array('is_active'=>1,'medicine_id_pk'=>$id));
      return $query->row_array();
	 }

	 function medicinelist()
	 {
         $query=$this->db->get_where('medicinetb',array('is_active'=>1));
         return $query->result_array();
	 }
}

?>