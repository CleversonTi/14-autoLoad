<?php
	interface Veiculo{
		public function acelerar($velocidade);
		public function frenar($velocidade);
		public function trocarMarchar($marcha);

	}
	abstract class Automovel implements Veiculo{
		public function acelerar($velocidade){
			echo "O Veiculo Acelorou até ". $velocidade . "KM";
		}

		public function frenar($velocidade){ 
			echo "O Veiculo frenou até ". $velocidade . "KM";
		}

		public function trocarMarchar($marcha){
			echo "O Veiculo engatou a marcha ". $marcha . "KM";
		}
	}
?>
