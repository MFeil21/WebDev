
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
	//Ermittle die vollen Sitze
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
		else {
			console.log("Gleichstand = " + gleichstand)
			break
		}
	}
console.log(ergebnis)