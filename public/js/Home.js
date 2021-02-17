$(".headerCarousel").owlCarousel({
  center: true,
  margin: 100,
  loop: true,
  autoWidth: true,
  items: 4,
  autoplay: true,
  autoplayTimeout: 5000,
});

function startCaraosel() {
  const cards = Array.from(document.querySelectorAll(".carausel-img"));
  const cardNow = cards[cek];

  const dot = Array.from(document.querySelectorAll(".slider"));
  const dotNow = dot[cek];

  cek == dataHeader.length - 1 ? (cek = 0) : (cek += 1);
  const cardNext = cards[cek];
  const dotNext = dot[cek];

  dotNow.classList.remove("active");
  dotNext.classList.add("active");

  cardNow.style.marginLeft = `-100%`;
  cardNow.style.opacity = "0";
  cardNext.style.opacity = "1";
  cardNext.style.marginLeft = `0`;

  setTimeout(() => {
    cardNow.style.position = "absolute";
    cardNow.style.marginLeft = "100%";
  }, 500);
}

const harga = Array.from(document.querySelectorAll(".stuff-fare"));
const formatter = new FormatMoney();

if (harga.length > 0) {
  harga.map((h) => {
    h.innerHTML = formatter.toRupiah(h.dataset.fare);
  });
}
