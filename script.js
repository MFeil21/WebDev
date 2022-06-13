// Initialer Post mit dem Ergebnis für Alle Stimmen
window.post(0);
window.onload = fun1;

//Event Handler
let btn0 = document.getElementById("btn0")
btn0.addEventListener('click', event => { window.post(0); });

let btn1 = document.getElementById("btn1")
btn1.addEventListener('click', event => { window.post(1); });

let btn2 = document.getElementById("btn2")
btn2.addEventListener('click', event => { window.post(2); });

let btn3 = document.getElementById("btn3")
btn3.addEventListener('click', event => { window.post(3); });

let btn4 = document.getElementById("btn4")
btn4.addEventListener('click', event => { window.post(4); });

let btn5 = document.getElementById("btn5")
btn5.addEventListener('click', event => { window.post(5); });

let btn6 = document.getElementById("btn6")
btn6.addEventListener('click', event => { window.post(6); });

let btn7 = document.getElementById("btn7")
btn7.addEventListener('click', event => { window.post(7); });

let btn8 = document.getElementById("btn8")
btn8.addEventListener('click', event => { window.post(8); });

let btn9 = document.getElementById("btn9")
btn9.addEventListener('click', event => { window.post(9); });

let btn10 = document.getElementById("btn10")
btn10.addEventListener('click', event => { window.post(10); });

let btn11 = document.getElementById("btn11")
btn11.addEventListener('click', event => { window.post(11); });

let btn12 = document.getElementById("btn12")
btn12.addEventListener('click', event => { window.post(12); });

let btn13 = document.getElementById("btn13")
btn13.addEventListener('click', event => { window.post(13); });

function post (k)
{

  // Zugriff auf die Datenbank
  var xhr = new XMLHttpRequest ();
  xhr.open("POST", "query.php");
  xhr.onload = function () {
    var json = this.response;
    json = JSON.parse(json);
    for (var i = 0; i < 14; i++)
      {
        json[i] = JSON.parse(json[i]);
        json[i] = json[i].map(Number);
      }

    var stimmen = [...json[k] ];
    var ergebnis = [...stimmen ];

    // Setze alle Stimmen unter der 5% Hürde auf 0 und ermittle den Divisor
    var hürde = 0.05;
    var summeStimmen = 0;
    for (var i of ergebnis)
      {
        summeStimmen += i;
      }
    var summeErgebnis = 0;
    for (let [i, j] of ergebnis.entries())
      {
        if (j < summeStimmen * hürde)
          {
            ergebnis[i] = 0;
          }
        else
          {
            summeErgebnis += j;
          }
      }

    // Ermittlung der vollen Sitze
    var sitze = 20;
    var übrig = sitze;
    var rest = [];
    ergebnis.forEach((element, index) => {
      rest.push(((element / summeErgebnis) * sitze) % 1);
      ergebnis[index] = Math.floor((element / summeErgebnis) * sitze);
      übrig -= ergebnis[index];
    });

    // Verteilung der Reste
    while (übrig != 0)
      {
        var gleichstand = false;
        var max = 0;
        var lose = 1;
        for (i of rest)
          {
            if (i == max)
              {
                gleichstand = true;
                lose++;
              }
            else if (i > max)
              {
                gleichstand = false;
                max = i;
                lose = 1;
              }
          }
        if (gleichstand == false)
          {
            ergebnis[rest.indexOf(max)] = ergebnis[rest.indexOf(max)] + 1;
            rest[rest.indexOf(max)] = 0;
            übrig--;
          }
        else if (übrig >= lose)
          {
            while (lose > 0)
              {
                ergebnis[rest.indexOf(max)] = ergebnis[rest.indexOf(max)] + 1;
                rest[rest.indexOf(max)] = 0;
                übrig--;
                lose--;
              }
          }

        // Theoretisch würden hier verlost werden. Bei einer aktiven
        // Wahl ist das natürlich vor Wahlende unmöglich da sich das
        // Ergebnis bei jedem Gleichstand neu erlosen würde.
        // Die fehlenden Sitze werden einfach vorerst ignoriert, in
        // der Konsole wird der Vollständigkeithalber aber angezeigt
        // dass hier ein Gleichstand herrscht.
        else
          {
            console.log("Gleichstand = " + gleichstand + " :: " +
                            übrig + " Sitz(e) noch zu verlosen."     );
            break;
          }
      }

    // Diagramme Klasse Partei
    var partei = [
      {
        name : "DPP",
        wähler : stimmen[0],
        mandate : ergebnis[0],
        farbe : "#FFFF00"
      },
      {
        name : "MUT",
        wähler : stimmen[1],
        mandate : ergebnis[1],
        farbe : "#ffa500"
      },
      {
        name : "NERD",
        wähler : stimmen[2],
        mandate : ergebnis[2],
        farbe : "#ff0000"
      },
      {
        name : "LUST",
        wähler : stimmen[3],
        mandate : ergebnis[3],
        farbe : "#8b0000"
      },
      {
        name : "FFF",
        wähler : stimmen[4],
        mandate : ergebnis[4],
        farbe : "#808080"
      },
      {
        name : "fNEP",
        wähler : stimmen[5],
        mandate : ergebnis[5],
        farbe : "#000000"
      }
    ];
    if (übrig !== 0)
      {
        partei.push(
          {
            name : "Losentscheid",
            mandate : übrig,
            farbe : "#4d4df0"
          });
      }

    // Donut Diagramm
    let ctx = document.getElementById("donut").getContext("2d");
    let winkel = Math.PI;
    let reihe = 0;
    ctx.clearRect(0, 0, 1000, 1000);
    for (let party of partei)
      {
        let anteil = (party.mandate / (sitze * 2)) * 2 * Math.PI;
        ctx.beginPath();
        ctx.arc(150, 150, 150, winkel, winkel + anteil);
        winkel += anteil;
        ctx.lineTo(150, 150);
        ctx.fillStyle = party.farbe;
        ctx.fill();
        if(party.mandate > 0)
          {
            ctx.fillRect(400, reihe +11 , 10, 10);
            ctx.fillStyle = "#000000";
            ctx.font = "12px Arial";
            if(party.name === "Losentscheid")
              {
                ctx.fillText(party.mandate === 1 ? party.mandate + " Sitz zu verlosen" : party.mandate + " Sitze zu verlosen" ,420, reihe += 20);
              } else ctx.fillText(party.mandate === 1 ? party.mandate + " Sitz" : party.mandate + " Sitze" ,420, reihe += 20);
          }
      }
    ctx.beginPath();
    ctx.arc(150, 150, 60, Math.PI, 0);
    ctx.lineTo(150, 150);
    ctx.fillStyle = "#ffffff";
    ctx.fill();

    // Balken Diagramm

    let ctx2 = document.getElementById("balken").getContext("2d");
    let balken = 0;
    ctx2.clearRect(0, 0, 1000, 1000);
    for (let party of partei)
      {
        if (party.name !== "Losentscheid")
          {
            ctx2.fillStyle = party.farbe;
            ctx2.fillRect(balken += 80, 100, 40,
                          (-party.wähler / summeStimmen) * 150);
            ctx2.fillStyle = "#000000";
            ctx2.font = "15px Arial";
            ctx2.fillText( Math.round(party.wähler*1000/summeStimmen)/10 + " %", balken+10, 120)
          }
      }

  };
  xhr.send();
}

function fun1() {
  var ziel = document.getElementById("filterAlter");
  ziel.style.display = 'none';

  ziel = document.getElementById("filterStudiengang");
  ziel.style.display = 'none';
}

function fun2() {
  var ziel = document.getElementById("filterAlter");
  ziel.style.display = 'block';

  ziel = document.getElementById("filterStudiengang");
  ziel.style.display = 'none';
}

function fun3() {
  var ziel = document.getElementById("filterAlter");
  ziel.style.display = 'none';

  ziel = document.getElementById("filterStudiengang");
  ziel.style.display = 'block';
}
