<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Categorie12
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $r = $this->db->query("INSERT INTO utilisateurs (nom) VALUES ('" . $this->input->post('cat') . "')");
        return $r;
    }

}
