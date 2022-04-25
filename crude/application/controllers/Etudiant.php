<?php 
    class Etudiant extends CI_Controller 
    {
        public function __construct(){
            parent::__construct();
            $this->load->model('Model_etudiant');
        }

        public function ajout()  
        {
            $this->load->view('ajout_etudiant');
        }

        public function create()  
        {
            $this->Model_etudiant->etu_ajout();
            redirect('Etudiant');
        }


        public function index()
        {
            $etudiants = $this->Model_etudiant->tableau();          
            $donnee['etudiant'] = $etudiants;
            $this->load->view('affiche_etudiant',$donnee);
        }

        public function modif($numero)
        {
            $etudiants = $this->Model_etudiant->table($numero);   
            $donnee['etudiant'] = $etudiants;
            $this->load->view('modifier', $donnee);
        }

        public function actualiser($numero)
        {
            $etudiants = $this->Model_etudiant->update($numero);     
            $donnee['etudiant'] = $etudiants;
            redirect('Etudiant');
        }

        public function supprimer($numero)
        {
            $etudiants = $this->Model_etudiant->delete($numero);
            redirect('Etudiant');
        }

    }

?>