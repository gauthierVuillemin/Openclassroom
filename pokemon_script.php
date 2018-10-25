<?php

class Pokemon
{
  //variable
  private $_nom;
  private $_numero;
  private $_type;
  private $_image;

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

  public function getNumero()
  {
    return $this->_numero;
  }

  public function getType()
  {
    return $this->_type;
  }

  public function getImage()
  {
    return $this->_image;
  }

  //Setter
  public function setNom($nom)
  {
    $this->_nom = $nom;
  }

  public function setNumero($numero)
  {
    $this->_numero = $numero;
  }

  public function setType($type)
  {
    $this->_type = $type;
  }

  public function setImage($image)
  {
    $this->_image = $image;
  }

  //fonction autre

  public function parler()
  {
    /*
    echo "<div class='col-md-3'><img src=".$this->getImage()."><div class='info'><p><a href=poke_type.php?#".$this->getType().">".$this->getNom()."</a></p><p>".$this->getNumero()."</p><p>".$this->getType()."</p></div></div><div class='col-md-1> </div>'";
    */
    echo "<div class='block_poke col-md-3'><img src=".$this->getImage()."><div class='info'><p><a href=poke_type.php>".$this->getNom()."</a></p><p>".$this->getType()."</p><p>".$this->getNumero()."</p></div></div>";
    echo "<div class='col-md-1'></div>";
  }

}


// create curl resource
$ch = curl_init();
// set url
curl_setopt($ch, CURLOPT_URL, "http://145.239.32.254:8081/pokemon/pokemons");
//return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// $output contains the output string
$output = curl_exec($ch);
// close curl resource to free up system resources
curl_close($ch);

$tabApi = json_decode($output);


for($i = 0; $i < sizeof($tabApi); $i++)
{
  $pokeTab[$i] = new Pokemon($tabApi[$i]);
  $pokeTab[$i]->parler();
}





/*var req = new XMLHttpRequest();
req.open("GET", 'http://145.239.32.254:8081/pokemon/pokemons');

req.addEventListener("load", function () 
{
  if (req.status >= 200 && req.status < 400) 
  {
    console.log('requete OK');

    var apiTab = JSON.parse(req.responseText);
    console.log('apiTab Rempli');

    var tBody = document.getElementById("tBody");
    if(tBody != null)
    {
      console.log('tBody Trouver');
    }

    for(var i = 0; i < apiTab.length; i++)
    {
      console.log('tour de boucle : ' + i);
      var poke = [];
      poke[i] = createPoke(apiTab[i])
      tBody.appendChild(poke[i]);
    }
  } 
  else 
  {
   alert('erreur serveur api');
 }
});

req.addEventListener("error", function () 
{
  console.error("Erreur réseau avec l'URL " + url);
});

req.send(null);

*/
?>