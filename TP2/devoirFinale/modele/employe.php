<?php
class Employe {

	private $login;
	private $nom;
	private $prenom;
	private $email;
	private $tel;

	// getter
	public function getLogin() {return $this->login;}
	public function getNom() {return $this->nom;}
	public function getPrenom() {return $this->prenom;}
	public function getEmail() {return $this->email;}
	public function getTel() {return $this->tel;}

	// setter
	public function setLogin($l) {$this->login = $l;}
	public function setNom($n) {$this->nom = $n;}
	public function setPrenom($p) {$this->prenom = $p;}
	public function setEmail($e) {$this->email = $e;}
	public function setTel($t) {$this->tel = $t;}

	// constructeur polyvalent d'un objet Utilisateur
	public function __construct($l = NULL, $n = NULL, $p = NULL, $e = NULL, $t = NULL) {
		if (!is_null($l)) {
			$this->login = $l;
			$this->nom = $n;
			$this->prenom = $p;
			$this->email = $e;
			$this->tel = $t;
		}
	}

	// une methode d'affichage.
	public function afficher() {
		echo "<p>employe $this->login ($this->prenom $this->nom), email = $this->email, tel = $this->tel</p>";
	}

	// méthode static qui retourne les voitures en un tableau d'objets
	public static function getAllEmployes() {
		// écriture de la requête
		$requete = "SELECT * FROM employe;";
    // envoi de la requête et stockage de la réponse
		$resultat = connexion::pdo()->query($requete);
    // traitement de la réponse
    $resultat->setFetchmode(PDO::FETCH_CLASS,'employe');
    $tableau = $resultat->fetchAll();
		return $tableau;
	}

	// méthode static qui retourne l'utilisateur de login $l
	public static function getEmployesByLogin($l) {
		// écriture de la requête
		$requetePreparee = "SELECT * FROM employe WHERE login = :login_tag;";
		// préparation de la requête
		$req_prep = Connexion::pdo()->prepare($requetePreparee);
		// le tableau des valeurs
		$valeurs = array("login_tag" => $l);
		try {
			// envoi de la requête
			$req_prep->execute($valeurs);
			// traitement de la réponse
	    $req_prep->setFetchmode(PDO::FETCH_CLASS,'Employe');
			// récupération de la voiture
			$e = $req_prep->fetch();
			// retour
			return $e;
		} catch(PDOException $e) {
			echo $e->getMessage();
		}

	}
}
?>
