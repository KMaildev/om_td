<?php

class Oversea_jobs_model extends CI_Model
{

	public function get_all_oversea_jobs()
	{
		$this->db->select("*");
		$this->db->from("oversea_jobs");
		$this->db->group_by("name");
		return $this->db->get()->result();
	}

	public function get_oversea_jobs()
	{
		$this->db->select("*");
		$this->db->from("oversea_jobs");
		return $this->db->get()->result();
	}
}
