
function textAuto(num = 0) {
  const textAuto = document.getElementById('textAuto');
  textAuto.innerHTML = "";
  let n = num;
  let i = 0;
  const text = [
    'Memória, Atenção, Foco, Raciocínio, Criatividade, Agilidade.'
  ]
  const confere = setInterval(() => {
    if (n === text.length) {
      n = 0;
      return;
    }
    let textChange = text[n].split('');
    textAuto.innerHTML += textChange[i];
    i++;
    if (i >= textChange.length) {
      i = 0;
      n++;
      clearInterval(confere);
      textPause(n);
    }
  }, 100);
}

function textPause(num) {
  const confere = setInterval(() => {
    textAuto(num);
    clearInterval(confere);
  }, 2000);
}

window.onload = textAuto();
