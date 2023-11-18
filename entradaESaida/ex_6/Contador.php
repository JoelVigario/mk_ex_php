<?php

class Contador {
    private $ano_n;
    private $mes_n;
    private $dia_n;
    private $totDias;
    
    public function __construct($data) {
        $this->ano_n = date('Y', strtotime($data));
        $this->mes_n = date('m', strtotime($data));
        $this->dia_n = date('d', strtotime($data));
        $this->conte();
    }
    
    public function getAno_n() {
        return $this->ano_n;
    }

    public function getMes_n() {
        return $this->mes_n;
    }

    public function getDia_n() {
        return $this->dia_n;
    }

    public function setAno_n($ano_n): void {
        $this->ano_n = $ano_n;
    }

    public function setMes_n($mes_n): void {
        $this->mes_n = $mes_n;
    }

    public function setDia_n($dia_n): void {
        $this->dia_n = $dia_n;
    }
    
    public function getTotDias() {
        return $this->totDias;
    }

    private function setTotDias($totDias): void {
        $this->totDias += $totDias;
    }
    
    public function vcbissexto(int $ano): int {
        if ($ano % 400 == 0 || ($ano % 4 == 0 && $ano % 100 != 0)) {
            return 366;
        } else {
            return 365;
        }
    }
    
    /**
     *  Caso a pesso não tenha nascido em dezembro esta função será
     *  usada para calcular a soma dos dias 
     *  de cada mês restante do ano de nascimento
    */
    function totDiasMeses (int $próximomês, int $ano): int {
        $total = 0;
        $terminado = false;
        do {
            if ($próximomês >= 13) {
                $terminado = true;
            } else if ($ano == date('Y') && $próximomês > date('m')) {
                $terminado = true;
            }  else if ($ano == date('Y') && $próximomês == date('m')) {
                $total += date('d');
                $terminado = true;
            } else {
                $total += cal_days_in_month(CAL_GREGORIAN, $próximomês++, $ano);
            }
        } while (!$terminado);
        return $total;
    }
    
    public function totDiasAnos ($ano = 0) {
        if ( $ano == date('Y') || $ano == date('Y') - 1 ) {
            return 0;
        } else {
            $totDiasAno = 0;
            $terminado = false;
            do {
                if (++$ano == date('Y')) {
                    $terminado = true;
                } else {
                    $totDiasAno += $this->vcbissexto($ano);
                }
            } while (!$terminado);
            return $totDiasAno;
        }
    }
    
    /**
    * Recebe a diferença entre o total de dias do mês e o dia em pessoa nasceu
    * cal_days_in_month: calcula o total de dias que tem no mês
    * CAL_GREGORIAN: utiliza o calendário gregoriano, o mais utilizado
    */
    public function conte(): int {
        if ($this->getMes_n() == date('m') && $this->getAno_n() == date('Y')) {
            $this->setTotDias(date('d') - $this->getDia_n());
            return $this->getTotDias();
        } else {
            $this->setTotDias(cal_days_in_month(CAL_GREGORIAN, $this->mes_n, $this->ano_n) - $this->dia_n);
        }
        
        // calcula o quantos dias a pessoa viveu no ano em que nasceu
        $this->setTotDias( $this->totDiasMeses( $this->getMes_n() + 1, $this->getAno_n() ) );
        // se a pessoa não nasceu no ano em que estamos, calcula o total de dias em cada ano que viveu
        $this->setTotDias( $this->totDiasAnos( $this->getAno_n() ) );
        // conta a quantidade de dias do ano actual
        
        if ($this->getAno_n() != date('Y')) {
            $this->setTotDias( $this->totDiasMeses(1, date('Y')) );
        }
        
        return $this->getTotDias();
    }
    
}
