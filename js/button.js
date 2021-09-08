const button = document.getElementById('sumate')

const device = navigator.userAgent

button.addEventListener('click', () => {
	if (
		device.match(/Iphone/i) ||
		device.match(/Ipod/i) ||
		device.match(/iPhone|iPad|iPod/i)
	) {
		window.location = 'https://apps.apple.com/ar/app/empre-app-emprendedores-cerca/id1566962202?l=en' //URL del APP Store
	} else {
		if (device.match(/Android/i)) {
			window.location = 'https://play.google.com/store/apps/details?id=com.app_r3777.layoutB' //URL del Play Store
		} else {
			window.location = 'https://login.aplicacionespymes.com/m/r3777/?appcode=r3777' //En el caso que el cliente este visitando desde un computador, lo enviamos a la web.
		}
	}
})
