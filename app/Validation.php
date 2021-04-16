<?php

namespace Imones;

class Validation {
    static public function newVietos($formData) {
        $klaidos = [];

        if(empty($formData['vardas'])) {
            $klaidos['vardas'] = "Prasome uzpildity pavadinima";
        }
        else if(strlen($formData['vardas']) <3) {
            $klaidos['vardas'] = "Pavadinimas negali buti trumpesnis nei 3 raides";
        }
        if(empty($formData['adresas'])) {
            $klaidos['adresas'] = "Prasome uzpildity adresa";
        }
        if(empty($formData['veikla'])) {
            $klaidos['veikla'] = "Prasome uzpildity veikla";
        }
        if(empty($formData['apibudinimas'])) {
            $klaidos['apibudinimas'] = " Prasome uzpildity apibudinima";
        }
        if(empty($formData['nuotrauka'])) {
            $klaidos['nuotrauka'] = "Prasome uzpildity Nuotraukos adresa";
        }

        if(!empty($klaidos)) {
            return $klaidos;
        }
        return 'Klaidu nerasta';
    }
}