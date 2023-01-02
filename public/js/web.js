
function textAuto(num = 0) {
  const textAuto = document.getElementById('textAuto');
  if(!textAuto) return;
  textAuto.innerHTML = "";
  let n = num;
  let i = 0;
  const text = [
    'Memória', 'Atenção', 'Foco', 'Raciocínio', 'Criatividade', 'Agilidade'
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

function effectFade(){
  // Element 1
  const el = document.querySelector('#contentFirst article');
  if(!el) return;
  document.addEventListener('scroll', (event) => {
    if(event.path[1].scrollY > 300){
      el.classList.add('effectfade');
    }
  })

  // Element 2
  const el2 = document.querySelector('#contentSecunds article');
  document.addEventListener('scroll', (event) => {
    if(event.path[1].scrollY > 1000){
      el2.classList.add('effectfade');
    }
  })

  // Element 3
  const el3 = document.querySelector('#contentThird article');
  document.addEventListener('scroll', (event) => {
    if(event.path[1].scrollY > 1300){
      el3.classList.add('effectfade');
    }
  })
}



window.onload = textAuto(), effectFade();
