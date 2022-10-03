const confere = setInterval('loadingPage()', 1000);
function loadingPage() {
  const body = document.querySelector('body');
  const loadingContainer = document.querySelector('.loadingContainer');
  const msg = document.querySelector('#msg');
  switch (document.readyState) {
    case "loading":
      msg.innerHTML = 'Aguarde... estamos preparando tudo. 50%..';
      break;
    case "loaded":
      msg.innerHTML = 'Aguarde... estamos preparando tudo. 70%..';
      break;
    case "interactive":
      msg.innerHTML = 'Quase tudo pronto 99%...'
      break;
    case "complete":
      msg.innerHTML = 'Pronto.'
      body.style.overflow = 'auto';
      loadingContainer.style.zIndex = '0';
      loadingContainer.style.opacity = '0';
      counts();
      navegationPage();
      openMenuMobile();
      openVideo();
      textAuto();
      clearInterval(confere);
      break;
  }
}

function textAuto(num = 0) {
  const textAuto = document.getElementById('textAuto');
  textAuto.innerHTML = "";
  let n = num;
  let i = 0;
  const text = [
    'percebem, aprendem, recordam, e pensam sobre a informação.'
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

function openVideo() {
  const playVideo = document.querySelectorAll('.playVideo');
  const video = document.querySelectorAll('.videoCamp video');

  for (let i = 0; i < video.length; i++) {
    playVideo[i].addEventListener('click', () => {
      video[i].requestFullscreen();
    });
  }
}

function openMenuMobile() {
  const menuactivemobile = document.getElementById('menu-active-mobile');
  const menumobile = document.querySelector('.menu-mobile');
  document.addEventListener('click', (e) => {
    if (e.target === menuactivemobile) {
      e.preventDefault();
      menumobile.style.left = '0';
    } else {
      menumobile.style.left = '-2000px';
    }
  })
}

function navegationPage() {
  const gotopa = document.querySelectorAll('.navLocation');
  for (let i = 0; i < gotopa.length; i++) {
    gotopa[i].addEventListener('click', (e) => {
      e.preventDefault();
      window.location.href = gotopa[i].getAttribute('href');
      history.replaceState(null, null, ' ');
    })
  }
}

function counts() {
  const videoContainer = document.querySelectorAll('.videoContainer');
  const descCamp = document.querySelectorAll('.descCamp');
  const videoCamp = document.querySelectorAll('.videoCamp');
  const ezpointInfo = document.querySelectorAll('.appInfo');
  const gotop = document.querySelector('.gotop');
  const body = document.querySelector('body');
  document.addEventListener('scroll', () => {

    let ntp = videoContainer[0].getBoundingClientRect();
    if (ntp.top < 300) {
      gotop.style.display = 'flex';
    }
    if (ntp.top > 300) {
      gotop.style.display = 'none';
    }


    for (let i = 0; i < videoContainer.length; i++) {
      let ez = videoContainer[i].getBoundingClientRect();
      if (ez.top < 450) {
        if (body.clientWidth <= 460) return;
        descCamp[i].style.transition = `0.3s all`;
        descCamp[i].style.marginLeft = "0px";
        descCamp[i].style.opacity = "100%";
        videoCamp[i].style.transition = `0.3s all`;
        videoCamp[i].style.marginRight = "0px";
        videoCamp[i].style.opacity = "100%";
      }
    }

    for (let i = 0; i < ezpointInfo.length; i++) {
      let ezi = ezpointInfo[i].getBoundingClientRect();
      if (ezi.top < 450) {
        if (body.clientWidth <= 460) return;
        ezpointInfo[i].style.opacity = "100%";
      }
    }
  })
}

window.onload = loadingPage();
