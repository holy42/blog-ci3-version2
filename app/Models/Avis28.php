<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Avis28
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $v = trim($this->input->post('q'));
        $ordre = 'asc';
        $r = $this->db->query("SELECT * FROM avis WHERE nom LIKE '%" . $v . "%'");
        return $r;
    }

}
