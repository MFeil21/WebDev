
	/*
		stimmen = Array aller Stimmen der jeweiligen Parteien
		ergebnis = Array aller Sitze der jeweiligen Parteien
		summeStimmen = Anzahl aller abgegebener Stimmen
		summeErgebnis = Anzahl aller gültiger Stimmen nach Anwendung der 5% Hürde
	*/

	//Abfrage der Stimmen
	var stimmen = [] //SQL Abfrage hier einfügen
	var ergebnis = stimmen;
	
	//Setze alle Stimmen unter der 5% Hürde auf 0 und ermittle den Divisor
	var hürde = 0.05
	var summeStimmen = 0
	for(i of ergebnis){
		summeStimmen += i
	}
	var summeErgebnis = 0
	for(let [i,j] of ergebnis.entries()){
		if(j < summeStimmen*hürde){
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
	console.log(ergebnis)

	//Poll Bestätigung nur möglich wenn alle Felder ausgefüllt wurden. 
	function stimmeAbgeben() {
		if(document.getElementById("Vorname").value.length !== 0 && document.getElementById("Nachname").value.length !== 0 && document.getElementById("Geburtsdatum").value.length !== 0 && document.getElementById("Studiengang").value.length !== 0 && (b1.checked || b2.checked || b3.checked || b4.checked || b5.checked || b6.checked)){
			window.location.href = 'result.html'
		} else alert("Bitte alle Pflichtfelder ausfüllen und ihrer Demokratischen Pflicht nachkommen indem Sie eine Partei wählen.")
	}