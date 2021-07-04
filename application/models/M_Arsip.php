<?php 
class M_Arsip extends CI_Model
{
	public function get_tahun()
	{
		$query = $this->db->query("SELECT YEAR(artikel_tanggal) AS tahun FROM artikel GROUP BY YEAR(artikel_tanggal) ORDER BY YEAR(artikel_tanggal) ASC");
		return $query->result();
	}

	function by_tahun($tahun1)
	{
		$query = $this->db->query("SELECT * FROM artikel WHERE YEAR(artikel_tanggal) = '$tahun1' ORDER BY YEAR(artikel_tanggal) ASC");
		return $query->result();
	}
}
?>