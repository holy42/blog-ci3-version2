<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Commande52
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $colonnes = ['nom', 'date', 'statut'];
        $tri = in_array($this->input->get('nom'), $colonnes, true) ? $this->input->get('nom') : 'nom';
        $r = $this->db->query("SELECT * FROM produits ORDER BY " . $tri);
        return $r;
    }

}
