<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Stock43
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $id = intval($this->input->get('id'));
        $ordre = 'asc';
        $r = $this->db->query("SELECT * FROM clients WHERE id = " . $id);
        return $r;
    }

}
