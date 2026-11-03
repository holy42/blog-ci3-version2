<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Livraison78
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $sql = "SELECT * FROM produits WHERE email = '";
        $sql .= $this->input->get('ref');
        $sql .= "'";
        $r = $this->db->query($sql);
        return $r;
    }

}
