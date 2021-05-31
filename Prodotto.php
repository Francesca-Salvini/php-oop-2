<?php

class Prodotto {
    public $marca;
    public $quantita;
    public $tipologia_prodotto;

    public function __construct($_marca, $_tipologia_prodotto, $_quantita) {
        $this->marca = $_marca;
        $this->tipologia_prodotto = $_tipologia_prodotto;
        $this->quantita = $_quantita;
    }

    public function getInfoData() {
        return [
            'marca' => $this->marca,
            'quantita' => $this->quantita,
            'tipologia_prodotto' => $this->tipologia_prodotto
        ];
    }
}
?>