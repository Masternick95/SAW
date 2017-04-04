function pages(pagina){
	//var pagina = document.getElementById("page").value;
	var contenuto = document.getElementById("pagina_testo");
	
	var page1 = '&ldquo;&Egrave; una citt&agrave; di carta. Guardala: guarda tutti quei viottoli, quelle strade che girano su se stesse, quelle case che sono state costruite per cadere a pezzi. Tutte quelle persone di carta che vivono nelle loro case di carta, che si bruciano il futuro pur di scaldarsi. Tutti quei ragazzini di carta che bevono birra che qualche cretino ha comprato loro in qualche discount di carta. Cose sottili e fragili come carta. E tutti altrettanto sottili e fragili. Ho vissuto qui per diciotto anni e non ho mai incontrato qualcuno che si preoccupasse delle cose che contano davvero.&rdquo;<br><cite>Citt&agrave; di Carta<cite>';
	var page2 = '&ldquo;Ragazzini di carta che bevono birra che qualche cretino ha comprato loro in qualche discount di carta.&rdquo;<br><cite>Citt&agrave; di Carta<cite>';
	var page3 = '&ldquo;Le citt&agrave; sono sempre state come le persone, esse mostrano le loro diverse personalit&agrave; al viaggiatore. A seconda della citt&agrave; e del viaggiatore, pu&ograve scoccare un amore reciproco, o un&rsquo;antipatia, un&rsquo;amicizia o inimicizia. Solo attraverso i viaggi possiamo sapere dove c&rsquo;&Egrave; qualcosa che ci appartiene oppure no, dove siamo amati e dove siamo rifiutati.&rdquo;<br><cite>Roman Payne<cite>';
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