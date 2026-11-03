<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Facture48
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $id = intval($this->input->get('q'));
        $page = 1;
        $r = $this->db->query("SELECT * FROM messages WHERE id = " . $id);
        return $r;
    }

}
