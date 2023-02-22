<?php
class Voiture {

	private $immatriculation;
	private $marque;
	private $couleur;

	// getter
	public function getImmatriculation() {return $this->immatriculation;}
	public function getMarque() {return $this->marque;}
	public function getCouleur() {return $this->couleur;}

	// setter
	public function setImmatriculation($i) {$this->immatriculation = $i;}
	public function setMarque($m) {$this->marque = $m;}
	public function setCouleur($c) {$this->couleur = $c;}

	// un constructeur
	public function __construct($i=NULL, $m=NULL, $c=NULL)  {
		if(!is_null($i)){
			$this->immatriculation = $i;
			$this->marque = $m;
			$this->couleur = $c;
		}
	}

	// une methode d'affichage.
	public function afficher() {
		echo "<p>voiture $this->immatriculation, de marque $this->marque, de couleur $this->couleur</p>";
	}

	public static function getAllVoitures(){
		
		$requete = "SELECT * FROM voiture";
		$resultat = Connexion::pdo()->query($requete);
		$resultat->setFetchmode(PDO::FETCH_CLASS,"voiture");
		$tableau=$resultat->fetchAll();
		foreach($tableau as $voiture){
			echo " <p>voiture {$voiture->getimmatriculation()}, de marque {$voiture->getMarque()},de couleur {$voiture->getCouleur()}</p>";
				}
		}
}
?>
