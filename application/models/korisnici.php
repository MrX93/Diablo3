<?php

class Korisnici extends CI_Model
{
    function logovanje($meil,$sifra)
    {
        $podaci['logovanje']=$this->db->get_where('korisnici', array('meil' => $meil, 'sifra' => $sifra))->result_array();
        return $podaci;
    }
}

