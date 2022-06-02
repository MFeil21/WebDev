
	/*
		stimmen = Array aller Stimmen der jeweiligen Parteien
		ergebnis = Array aller Sitze der jeweiligen Parteien
		summeStimmen = Anzahl aller abgegebener Stimmen
		summeErgebnis = Anzahl aller gültiger Stimmen nach Anwendung der 5% Hürde
	*/
	var json = document.querySelector('meta[name="json"]').content;
	//Abfrage der Stimmen
	//var json1 = <?php echo json_encode($json1); ?>;
    //var json2 = <?php echo json_encode($json2); ?>;
	console.log(json);
	var stimmen = [100, 200, 400, 50, 100, 200]; //SQL Abfrage hier einfügen
	var ergebnis = [...stimmen];
	//Setze alle Stimmen unter der 5% Hürde auf 0 und ermittle den Divisor
	var hürde = 0.05
	var summeStimmen = 0
	for(i of ergebnis){
		summeStimmen += i
	}
	var summeErgebnis = 0
	for(let [i,j] of ergebnis.entries()){
		if(j < summeStimmen * hürde){
			ergebnis[i] = 0
		}
		else{
			summeErgebnis += j
		}
	}	

	//Ermittlung der vollen Sitze
	var sitze = 20
	var übrig = sitze
	var rest = []
	ergebnis.forEach((element, index) => {
		rest.push(((element / summeErgebnis) * sitze)%1)
		ergebnis[index] = Math.floor((element / summeErgebnis) * sitze)
		übrig -= ergebnis[index]
	})

	//Verteilung der Reste
	while (übrig != 0){
		var gleichstand = false
		var max = 0
		var lose = 1
		for(i of rest){
			if (i == max){
				gleichstand = true
				lose ++
			}
			else if (i > max){
				gleichstand = false
				max = i
				lose = 1
			}
		}
		if (gleichstand == false){
			ergebnis[rest.indexOf(max)] = ergebnis[rest.indexOf(max)] + 1
			rest[rest.indexOf(max)] = 0
			übrig--
		}else if (übrig >= lose){
			while(lose > 0){
				ergebnis[rest.indexOf(max)] = ergebnis[rest.indexOf(max)] + 1
				rest[rest.indexOf(max)] = 0
				übrig--
				lose--
			}
		}

		//Theoretisch würden hier verlost werden. Bei einer aktiven Wahl ist das natürlich vor Wahlende unmöglich da sich das Ergebnis bei jedem Gleichstand neu erlosen würde.
		// Die fehlenden Sitze werden einfach vorerst ignoriert, in der Konsole wird der Vollständigkeithalber aber angezeigt dass hier ein Gleichstand herrscht. 
		else {
			console.log("Gleichstand = " + gleichstand)
			break
		}
	}

	//Poll Bestätigung nur möglich wenn alle Felder ausgefüllt wurden. 
	/*function stimmeAbgeben() {
			
			if(document.getElementById("Vorname").value.length !== 0 && document.getElementById("Nachname").value.length !== 0 && document.getElementById("Geburtsdatum").value.length !== 0 && document.getElementById("Studiengang").value.length !== 0 && (b1.checked || b2.checked || b3.checked || b4.checked || b5.checked || b6.checked)){
				window.location.href = 'result.html'
		} else alert("Bitte alle Pflichtfelder ausfüllen und ihrer Demokratischen Pflicht nachkommen indem Sie eine Partei wählen.")
	}*/
	//Diagramme Klasse Partei
	const partei = [
		{name: "DPP", wähler: stimmen[0], mandate: ergebnis[0], farbe : "#3366ff"},
		{name: "MUT", wähler: stimmen[1], mandate: ergebnis[1], farbe : "#00cc66"},
		{name: "NERD", wähler: stimmen[2], mandate: ergebnis[2], farbe : "#9933ff"},
		{name: "LUST", wähler: stimmen[3], mandate: ergebnis[3], farbe : "#ff0000"},
		{name: "FFF", wähler: stimmen[4], mandate: ergebnis[4], farbe : "#ffff00"},
		{name: "fNEP", wähler: stimmen[5], mandate: ergebnis[5], farbe : "#33cccc"}
	];
	if(übrig !== 0){
		partei.pop({name: "Losentscheid", mandate: übrig, farbe: "#000000"});
	}

	//Donut Diagramm
	let ctx = document.getElementById("donut").getContext("2d");
    let winkel = Math.PI;
    for (let party of partei) {
        let anteil = (party.mandate/(sitze*2)) * 2 * Math.PI;
        ctx.beginPath();
        ctx.arc(100, 100, 100, winkel, winkel + anteil);
        winkel += anteil;
        ctx.lineTo(100, 100);
        ctx.fillStyle = party.farbe;
        ctx.fill();
    }
	ctx.beginPath();
	ctx.arc(100, 100, 40, Math.PI, 0);
	ctx.lineTo(100, 100);
	ctx.fillStyle = "#ffffff";
    ctx.fill();

	//Balken Diagramm
	let ctx2 = document.getElementById("balken").getContext("2d");
	let balken = 0;
	for (let party of partei) {
		ctx2.fillStyle = party.farbe;
        ctx2.fillRect(balken+=40, 100, 20, (-party.wähler/summeStimmen)*200 );
    }