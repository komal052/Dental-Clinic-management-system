<?php

class receptionist_model extends CI_model
{
	public function insertreceptionist($data)
	{
		$this->db->insert('receptionisttb',$data);
		return $this->db->insert_id();
	}

	public function updatereceptionist($data)
	{
		$this->db->where('receptionist_id_pk',$data['receptionist_id_pk']);
		return $this->db->update('receptionisttb',$data);
	}

	public function deletereceptionist($id)
	{
		$this->db->where('receptionist_id_pk',$id);
		$this->db->set('is_active',0);
		$this->db->update('receptionisttb');
	}
	public function receptionistdata($id)
	{
	 $query=$this->db->get_where('receptionisttb',array('is_active'=>1,'receptionist_id_pk'=>$id));
		return $query->row_array();
	}
	public function receptionistlist()
	{
		// $this->db->select('r.*,doctor_name');
		// $this->db->from('receptionisttb r');
		// $this->db->where('r.is_active',1);
		// $this->db->join('doctortb d','d.doctor_id_pk=r.doctor_id_fk');
		// $query=$this->db->get();
	  $query=$this->db->get_where('receptionisttb',array('is_active'=>1));
	   return $query->result_array();
}

}

?>