<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Produit49
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function action1()
    {
        $colonnes = ['nom', 'date', 'statut'];
        $tri = in_array($this->input->get('q'), $colonnes, true) ? $this->input->get('q') : 'nom';
        $r = $this->db->query("SELECT * FROM avis ORDER BY " . $tri);
        return $r;
    }

}
