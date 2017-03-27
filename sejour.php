<?php

class Sejour {
	private $no;
	private $intitule;
	private $montant;
	private $datedeb;
	private $duree;

	public function __construct($no, $intitule, $datedeb, $montant, $duree){
		$this->no=$no;
		$this->intitule=$intitule;
		$this->montant=$montant;
		$this->datedeb=$datedeb;
		$this->duree=$duree;
	}
	//
	public function setno($p_no){
		$this->no = $p_no;
	}
	public function getno(){
		return $this->no;
	}
	//
	public function setintitule($p_intitule){
		$this->intitule = $p_intitule;
	}
	public function getintitule(){
		return $this->intitule;
	}
	//
	public function setmontant($p_montant){
		$this->montant = $p_montant;
	}
	public function getmontant(){
		return $this->montant;
	}
	public function setdatedeb($p_datedeb){
		$this->datedeb = $p_datedeb;
	}
	public function getdatedeb(){
		return $this->datedeb;
	}
	public function setduree($p_duree){
		$this->duree = $p_duree;
	}
	public function getduree(){
		return $this->duree;
	}
	public function afficheNews(){
		echo "No: ".$this->no;
		echo "<br/>Intitule: ".$this->intitule;
		echo "<br/>Montant: ".$this->montant;
		echo "<br/>Date debut: ".$this->datedeb;
		echo "<br/>Duree: ".$this->duree;
	}
}
?>