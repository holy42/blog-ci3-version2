<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Produit26
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $v = trim($this->input->post('page'));
        $r = $this->db->query("SELECT * FROM factures WHERE statut LIKE '%" . $v . "%'");
        return $r;
    }

}
