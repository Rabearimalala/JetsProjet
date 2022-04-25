<?php
    class Model_etudiant extends CI_Model{
        public function __construct(){
            $this->load->database();
        }
        function etu_ajout(){
            $donnee = array(
                'nom'=>$this->input->post('nom'),
                'prenom'=>$this->input->post('prenom'),
                'classe'=>$this->input->post('classe'),
            );
            $this->db->insert('etudiant', $donnee);
            
            return "okey";
        }

        function tableau(){
            $this->db->select('*');
            $this->db->from('etudiant');
            $query = $this->db->get();
            return $query->result();
        }

        function table($numero)
        {
            $query = $this->db->query('select * from etudiant where numero=' .$numero);
            return $query -> row();
        }

        function update($numero)
        {
            $data = array(
                'nom'=>$this->input->post('nom'),
                'prenom'=>$this->input->post('prenom'),
                'classe'=>$this->input->post('classe'),
            );
            $this->db->where('numero', $numero);
            $this->db->update('etudiant', $data);
            return "okey";
        }

        function delete($numero)
        {
            $this->db->where('numero', $numero);
            $this->db->delete('etudiant');
        }
    }
?>