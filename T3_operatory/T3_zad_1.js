
    const a = parseFloat(prompt("Podaj a: "));
    const b = parseFloat(prompt("Podaj b: "));
    document.getElementById("parameters").innerHTML = `bok a: <b>${a} cm</b> <br> bok b: <b>${b} cm</b> <br> pole: <b>${a*b} cm^2</b> <br> obwód: <b>${2*a + 2*b} cm</b>`;
