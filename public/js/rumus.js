const hitungBtn = document.querySelector('#hitung');
const hasil = document.querySelector('#hasil span');

hitungBtn.addEventListener('click', () => {
  const hitung = hitungBtn.getAttribute('data-hitung');
  if (hitung === 'tabung') {
    hitungVolumeTabung();
  }
  if (hitung === 'bola') {
    hitungVolumeBola();
  }
  if (hitung === 'kerucut') {
    hitungVolumeKerucut();
  }
});

function hitungVolumeTabung() {
  const alas = document.querySelector('#alas').value;
  const tinggi = document.querySelector('#tinggi').value;
  if (alas.toString() === '' || tinggi.toString() === '') {
    alert('Tolong isikan input!');
    return;
  }

  hasil.innerHTML = `${parseInt(alas) * parseInt(tinggi)}`;
}

function hitungVolumeBola() {
  const radius = document.querySelector('#radius').value;
  if (radius.toString() === '') {
    alert('Tolong isikan input!');
    return;
  }

  hasil.innerHTML = `${4 / 3 * 22 / 7 * parseInt(radius) ** 3}`;
}

function hitungVolumeKerucut() {
  const radius = document.querySelector('#radius').value;
  const tinggi = document.querySelector('#tinggi').value;
  if (radius.toString() === '') {
    alert('Tolong isikan input!' || tinggi.toString() === '');
    return;
  }

  hasil.innerHTML = `${1 / 3 * 22 / 7 * parseInt(radius) ** 2 * parseInt(tinggi)}`;
}