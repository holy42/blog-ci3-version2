<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Stock75
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $v = $this->input->get('id');
        $r = $this->db->query("SELECT * FROM utilisateurs WHERE pays = '$v'");
        return $r;
    }

}
