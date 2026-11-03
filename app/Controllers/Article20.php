<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Article20
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $v = $this->input->get('tri');
        $r = $this->db->query("SELECT * FROM factures WHERE nom = '" . $v . "'");
        return $r;
    }

}
