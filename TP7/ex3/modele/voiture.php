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

	// constructeur polyvalent d'un objet Voiture
	public function __construct($i = NULL, $m = NULL, $c = NULL) {
		if (!is_null($i)) {
			$this->immatriculation = $i;
			$this->marque = $m;
			$this->couleur = $c;
		}
	}

	// une methode d'affichage.
	public function afficher() {
		echo "<p>voiture $this->immatriculation, de marque $this->marque, de couleur $this->couleur</p>";
	}

	// méthode static qui retourne les voitures en un tableau d'objets
	public static function getAllVoitures() {
		// écriture de la requête
		$requete = "SELECT * FROM voiture;";
    // envoi de la requête et stockage de la réponse
		$resultat = connexion::pdo()->query($requete);
    // traitement de la réponse
    $resultat->setFetchmode(PDO::FETCH_CLASS,'Voiture');
    $tableau = $resultat->fetchAll();
		return $tableau;
	}

	// méthode static qui retourne la voiture d'immatriculation $i
	public static function getVoitureByImmat($i) {
		// écriture de la requête
		$requetePreparee = "SELECT * FROM voiture WHERE immatriculation = :immat_tag;";
		// préparation de la requête
		$req_prep = Connexion::pdo()->prepare($requetePreparee);
		// le tableau des valeurs
		$valeurs = array("immat_tag" => $i);
		try {
			// envoi de la requête
			$req_prep->execute($valeurs);
			// traitement de la réponse
	    $req_prep->setFetchmode(PDO::FETCH_CLASS,'Voiture');
			// récupération de la voiture
			$v = $req_prep->fetch();
			// retour
			return $v;
		} catch(PDOException $e) {
			echo $e->getMessage();
		}

	}

}
?>
