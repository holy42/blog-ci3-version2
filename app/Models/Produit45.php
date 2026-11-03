<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Produit45
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $id = intval($this->input->get('page'));
        $ordre = 'asc';
        $r = $this->db->query("SELECT * FROM utilisateurs WHERE id = " . $id);
        return $r;
    }

}
