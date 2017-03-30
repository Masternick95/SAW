function pages(pagina){
	//var pagina = document.getElementById("page").value;
	var contenuto = document.getElementById("pagina_testo");
	
	var page1 = '"E’ una città di carta. Guardala: guarda tutti quei viottoli, quelle strade che girano su se stesse, quelle case che sono state costruite per cadere a pezzi. Tutte quelle persone di carta che vivono nelle loro case di carta, che si bruciano il futuro pur di scaldarsi. Tutti quei ragazzini di carta che bevono birra che qualche cretino ha comprato loro in qualche discount di carta. Cose sottili e fragili come carta. E tutti altrettanto sottili e fragili. Ho vissuto qui per diciotto anni e non ho mai incontrato qualcuno che si preoccupasse delle cose che contano davvero.”<br><cite>Città di Carta<cite>';
	var page2 = '“ragazzini di carta che bevono birra che qualche cretino ha comprato loro in qualche discount di carta”<br><cite>Città di Carta<cite>';
	var page3 = '"Le città sono sempre state come le persone, esse mostrano le loro diverse personalità al viaggiatore. A seconda della città e del viaggiatore, può scoccare un amore reciproco, o un’antipatia, un’amicizia o inimicizia. Solo attraverso i viaggi possiamo sapere dove c’è qualcosa che ci appartiene oppure no, dove siamo amati e dove siamo rifiutati."<br><cite>Roman Payne<cite>';
	switch(pagina){
		case 1:
			//Pagina 1(default)
			contenuto.innerHTML = page1;
			break;
		case 2:
			contenuto.innerHTML = page2;
			break;
		case 3:
			contenuto.innerHTML = page3;
			break;
	}
}