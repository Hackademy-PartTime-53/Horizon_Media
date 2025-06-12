function crea_intervallo(ElementoHTML, numeromax, tempo) {
    let counter = 0;
    let id_interval = setInterval( () => {
        if (counter < numeromax) {
            counter ++;
            ElementoHTML.innerHTML = counter;

        } else {
            clearInterval(id_interval);
        }
    }, tempo );

}

let controllo_ripetizione = 'true';
let osserva = new IntersectionObserver ( entries => {
 entries.forEach(entrie => {
    if (entrie.isIntersecting && controllo_ripetizione == 'true' ) {
        crea_intervallo(number1, 6,0);
        crea_intervallo(number2, 257, 100);
        crea_intervallo(number3, 70, 500);
        controllo_ripetizione = 'false';
    }
 });
}

);
osserva.observe(number3);



document.addEventListener("DOMContentLoaded", function () {
  // Leaflet e chatbot codice già presente qui...

  // Intersection Observer per fade-in
  const faders = document.querySelectorAll('.fade-in-section');

  const appearOptions = {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px"
  };

  const appearOnScroll = new IntersectionObserver(function(entries, appearOnScroll) {
    entries.forEach(entry => {
      if (!entry.isIntersecting) {
        return;
      } else {
        entry.target.classList.add('is-visible');
        appearOnScroll.unobserve(entry.target); // basta attivare una volta
      }
    });
  }, appearOptions);

  faders.forEach(fader => {
    appearOnScroll.observe(fader);
  });
});

document.addEventListener("DOMContentLoaded", function () {
  // Dopo 3 secondi, mostra la chatbox
  setTimeout(() => {
    const chatbox = document.querySelector('.chatbox');
    if (chatbox) {
      chatbox.classList.add('visible');
    }
  }, 3000);
});


