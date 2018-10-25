<?php
class TypePoke
{
  //variable
	private $_nom;
	private $_id;
	private $_caractéristique;
	private $_attaques;

  //constructeur
	public function __construct($donnees)
	{
		$this->hydrate($donnees);
	}

	public function hydrate($donnees)
	{
		foreach ($donnees as $key => $value)
		{
    		// On récupère le nom du setter correspondant à l'attribut.
			$method = 'set'.ucfirst($key);

    		// Si le setter correspondant existe.
			if (method_exists($this, $method))
			{
     	 		// On appelle le setter.
				$this->$method($value);
			}
		}
	}

  //Getter
	public function getNom()
	{
		return $this->_nom;
	}

	public function getId()
	{
		return $this->_id;
	}

	public function getCaractéristique()
	{
		return $this->_caractéristique;
	}

	public function getAttaques()
	{
		return $this->_attaques;
	}

  //Setter
	public function setNom($nom)
	{
		$this->_nom = $nom;
	}

	public function setId($id)
	{
		$this->_id = $id;
	}

	public function setCaractéristique($carac)
	{
		$this->_caractéristique = $carac;
	}

	public function setAttaques($atq)
	{
		$this->_attaques = $atq;
	}

  //fonction autre


	public function afficher()
	{
		echo "<tr><td>".$this->getNom()."</td><td>".$this->getId()."</td><td>".$this->getCaractéristique()."</td><td> ";
		echo join('<br> ', $this->getAttaques());
		echo "</td></tr>";
	}

}


// create curl resource
$ch = curl_init();

// set url
curl_setopt($ch, CURLOPT_URL, "http://145.239.32.254:8081/pokemon/types");

//return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// $output contains the output string
$output = curl_exec($ch);

// close curl resource to free up system resources
curl_close($ch);

$tabApi = json_decode($output);

for($i = 0; $i < sizeof($tabApi); $i++)
{
  $tabTypes[$i] = new TypePoke($tabApi[$i]);
  $tabTypes[$i]->afficher();
};


