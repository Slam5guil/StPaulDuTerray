<?php
class SejourDAO {
 	private $_db;
  	public function __construct($db){
  		$this->db=$db;
  	}
	/*public function setdb($p_db){
		$this->db = $p_db;
	}
	public function getdb(){
		return $this->db;
	}*/
	public function getSejour($db){
		$news=[];
		$q =$db->exec("select * from sejour order by sejno");
	while ($donnees = $q->fetchAll(PDO::FETCH_BOTH))
    {
      $news[] = new News($donnees[0],$donnees[1],$donnees[2],$donnees[3],$donnees[4]);
    }
	}	
}
?>