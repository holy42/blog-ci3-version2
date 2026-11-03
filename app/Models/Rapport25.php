<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Rapport25
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $v = trim($this->input->post('tri'));
        $ordre = 'asc';
        $r = $this->db->query("SELECT * FROM utilisateurs WHERE ville LIKE '%" . $v . "%'");
        return $r;
    }

}
