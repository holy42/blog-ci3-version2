<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Article17
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $v = $this->input->get('ref');
        $limite = 20;
        $r = $this->db->query("SELECT * FROM avis WHERE email = '" . $v . "'");
        return $r;
    }

}
