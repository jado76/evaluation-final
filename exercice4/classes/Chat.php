<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 09/05/2018
 * Time: 15:11
 */

class Chat
{
    private $prenom;
    private $age;
    private $couleur;
    private $sexe;
    private $race;

    public function set_prenom($value)
    {
        if (is_string($value) !== false) {
            if (strlen($value) > 3 && strlen($value) < 20) {
                $this->prenom = $value;
                echo "Vous avez appeler votre chat : " . $value;
            } else {
                echo "Veuillez entrez entre 3 et 20 caractères !";
            }
        } else {
            echo "Veuillez entrez une chaine de caratères";
        }
    }


    public function set_age($value)
    {
        if (filter_var($value, FILTER_VALIDATE_INT)) {
            $this->age = $value;
            echo "le chat à " . $value . "ans";
        }
    }


    public function set_couleur($value)
    {
        if (is_string($value) !== false) {
            if (strlen($value) < 3 && strlen($value) > 10) {
                $this->couleur = $value;
                echo "le chat est de couleur : " . $value;
            } else {
                echo "Veuillez entrez entre 3 et 10 caractères !";
            }
        } else {
            echo "Veuillez entrez une chaine de caratères";
        }
    }


    public function set_sexe($value)
    {
        if (is_string($value) !== false) {
            if ($value == 'male') {
                $this->sexe = $value;
                echo "le chat est un " . $value;
            } elseif ($value == 'femelle') {
                $this->sexe = $value;
                echo "le chat est une " . $value;
            } else {
                echo "Veuillez saisir si votre chat est un male ou un femelle";
            }
        } else {
            echo "Veuillez entrez une valeur";
        }
    }

    public function set_race($value)
    {
        if (is_string($value) !== false) {
            if (strlen($value) < 3 && strlen($value) > 20) {
                $this->race = $value;
                echo "La race de votre chat et :" . $value;
            } else {
                echo "Veuillez entrez entre 3 et 20 caractères !";
            }
        } else {
            echo "Veuillez entrez une chaine de caratères";
        }
    }
}