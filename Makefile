assets:
	cp vendor/twitter/bootstrap/assets/js/html5shiv.js public/assets/js/html5shiv.js
	cp vendor/twitter/bootstrap/assets/js/respond.min.js public/assets/js/respond.min.js
	cp vendor/twitter/bootstrap/dist/js/bootstrap.min.js public/assets/js/bootstrap.min.js
	cp -R vendor/twitter/bootstrap/dist/fonts public/assets

less:
	lessc -x asset_src/less/main.less public/assets/css/main.min.css