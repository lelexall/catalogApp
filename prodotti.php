<?php


$json = array();


$categorie = array();

for ( $i=0;$i<5;$i++){
	$categoria = array();
	$categoria['id'] = 'c'.$i;
	$categoria['nome'] = 'categoria '.$i;
	$categoria['img'] = '';


	
	$prodotti = array();
	for ($j=0;$j<5;$j++) {
		$prodotto = array();
		$prodotto['id'] = 'p'.$j;
		$prodotto['titolo'] = 'prodotto '.$j;
		$prodotto['sottotitolo'] = 'subtitp '.$j;
		$prodotto['codice'] = substr($j.(rand()*10),0,7);
		$prodotto['prezzo'] = substr($j.(rand()*10),0,3);
		$prodotto['img'] = 'prodotto'.$j.'.jpg';
		$prodotto['testo'] = 'prodotto'.$i.'prodotto'.$i.'prodotto'.$i.'prodotto'.$i.'prodotto'.$i.'prodotto'.$i.'prodotto'.$i.'prodotto'.$i.'prodotto'.$i.'prodotto'.$i.'prodotto'.$i;
		


		$varianti = array();
		for ($k=0;$k<3;$k++) {
			$variante = array();
			$variante['label'] = 'variante'.$k;
			$variante['detail'] = 'variante detail'.$k;

			$varianti[] = $variante;

		}

		$prodotto['varianti'] = $varianti;

		$documenti = array();
		for ($k=0;$k<2;$k++) {
			$documento = array();
			$documento['nome'] = 'documento'.$k;
			$documento['path'] = 'documentopath'.$k.'.pdf';

			$documenti[] = $documento;

		}

		$prodotto['documenti'] = $documenti;


		$prodotti[] = $prodotto;
	}


	$categoria['prodotti'] = $prodotti;

	$categorie[] = $categoria;
}

$json['lista'] = $categorie;



echo json_encode($json);
?>