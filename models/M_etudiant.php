<?php 
    require_once("connect.php");


    class ETUDIANT extends DB_CONNECT
    {
        public function M_insertion($nom, $prenom, $tel, $email, $mdp, $img)
        {
            $bdd= $this -> dbConnect();
            $sql = $bdd -> prepare ("INSERT INTO etudiant (nom_etudiant, prenom_etudiant, email_etudiant, mdp_etudiant, tel_etudiant, image_etudiant) VALUES (?, ?, ?, SHA1(?), ?, ?)");
            $sql -> execute(array($nom, $prenom, $email, $mdp, $tel, $img));
        }

        public function liste()
        {
            $bdd = $this -> dbConnect();
            $sql = $bdd -> prepare ("SELECT id_etudiant, nom_etudiant, prenom_etudiant, email_etudiant, tel_etudiant FROM etudiant");
            $sql = execute (array());
            $idEt = 
            $nomEt = array();
            $prenomEt = array();
            $emailEt = array();
            $telEt = array();
            while ($tab = $sql -> fetch()) {
                $idEt[] = $tab["id_etudiant"];
                $nomEt[] = $tab["nom_etudiant"];
                $prenomEt[] = $tab["prenom_etudiant"];
                $emailEt[] = $tab["email_etudiant"];
                $telEt[] = $tab["tel_etudiant"];
            }
        }
    }
    
?>