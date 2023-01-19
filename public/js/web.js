
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

  // Element 2
  const el2 = document.querySelector('#contentSecunds article');

  // Element 3
  const el3 = document.querySelector('#contentThird article');

  if(!el) return;
  document.addEventListener('scroll', () => {
    const top = (document.documentElement && document.documentElement.scrollTop) || 
    document.body.scrollTop;

    if(top > 400){
      el.classList.add('effectfade');
    }

    if(top > 1100){
      el2.classList.add('effectfade');
    }

    if(top > 1600){
      el3.classList.add('effectfade');
    }
  })

}

function menuMobile(){
  const menu = document.getElementById('menu');
  const close = document.getElementById('close');
  const menulist = document.querySelector('.navigation-mobile');
  menu.onclick  = (e)=>{
    e.preventDefault();
    menulist.classList.toggle('show');
  }

  close.onclick  = (e)=>{
    e.preventDefault();
    menulist.classList.toggle('show');
  }
}



window.onload = textAuto(), effectFade(), menuMobile();
