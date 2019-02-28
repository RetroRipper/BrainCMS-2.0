
<!DOCTYPE HTML>
<html>
	<head>
		<meta name="csrf-token" content="u5HwQDeozBJWUG4iQZrZFePe3tn9L78zXkXJ70pi">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Habbo - Client</title>
		<script src="/hotel/js/jquery-latest.js" type="text/javascript"></script>
		<script src="/hotel/js/jquery-ui.js" type="text/javascript"></script>
		<script src="/hotel/js/flashclient.js"></script>
		<script type="text/javascript" src="/hotel/js/swfobject.js"></script>
		<link rel="stylesheet" href="/hotel/css/clientnew.css" type="text/css">
		<link rel="stylesheet" href="/hotel/css/no-flash.css" type="text/css">
		<script type="text/javascript">
			var flashvars = {
				"connection.info.host":"{{ config('hotel.clientvars.connection_info_host') }}",
				"connection.info.port":"{{ config('hotel.clientvars.connection_info_port') }}",
				"site.url" : "{{ env('APP_URL') }}",
				"url.prefix" : "{{ env('APP_URL') }}",
				"client.reload.url": "{{ config('hotel.clientvars.client_reload_url') }}",
				"client.fatal.error.url": "{{ config('hotel.clientvars.client_reload_url') }}",
				"client.connection.failed.url": "{{ config('hotel.clientvars.client_reload_url') }}",
				"logout.url": "{{ config('hotel.clientvars.logout_url') }}",
				"client.starting":"Please wait! Habbo is starting up.",
				"client.starting.revolving":"For science, you monster\/Loading funny message\u2026please wait.\/Would you like fries with that?\/Follow the yellow duck.\/Time is just an illusion.\/Are we there yet?!\/I like your t-shirt.\/Look left. Look right. Blink twice. Ta da!\/It\'s not you, it\'s me.\/Shhh! I\'m trying to think here.\/Loading pixel universe.",
				"client.notify.cross.domain":"1",
				"client.allow.cross.domain":"1",
				"flash.client.origin":"popup",
				"processlog.enabled":"0",
				"sso.ticket":"{{ $SSO }}",
				"productdata.load.url":"{{ config('hotel.clientvars.productdata_load_url') }}",
				"furnidata.load.url":"{{ config('hotel.clientvars.furnidata_load_url') }}",
				"external.texts.txt":"{{ config('hotel.clientvars.external_texts_txt') }}",
				"external.variables.txt":"{{ config('hotel.clientvars.external_variables_txt') }}",
				"external.figurepartlist.txt":"{{ config('hotel.clientvars.external_figurepartlist_txt') }}",
				"flash.dynamic.avatar.download.configuration":"{{ config('hotel.clientvars.flash_dynamic_avatar_download_configuration') }}",
				"external.override.texts.txt":"{{ config('hotel.clientvars.external_override_texts_txt') }}",
				"external.override.variables.txt":"{{ config('hotel.clientvars.external_override_variables_txt') }}",
				"flash.client.url":"{{ config('hotel.clientvars.flash_client_url') }}",
			};
			
			window.FlashExternalInterface.disconnect = function() {
				window.location.href = "{{ config('hotel.clientvars.client_reload_url') }}";
			};
			
			window.FlashExternalInterface.logout = function() {
				window.location.href = "http://127.0.0.1/logout";
			};
			
			var params = {
				"base" : "http://127.0.0.1/swf/other/game/",
				"allowScriptAccess" : "always",
				"menu" : "false",
				"wmode": "opaque"
			};
			
			swfobject.embedSWF('{{ config('hotel.clientvars.flash_client_url_swf') }}', 'client', '100%', '100%', '11.1.0', '//habboo-a.akamaihd.net/habboweb/63_1d5d8853040f30be0cc82355679bba7c/10404/web-gallery/flash/expressInstall.swf', flashvars, params, null, null);
		</script>
	</head>
	<body>
		<div id="client">
			<habbo-client-error>
				<div class="client-error__background-frank">
					<div class="client-error__text-contents">
						<h1 class="client-error__title">You're nearly in Habbo!</h1>
						<p>Click the yellow Hotel button below, then click 'run Flash' when prompted to. See you in the Hotel!</p>
					</div>
					<div class="client-error__hotel-button-div">
						<a href="https://www.adobe.com/go/getflashplayer" target="_blank" rel="noopener noreferrer" class="hotel-button">
							<span class="hotel-button__text">Hotel</span>
					</div>
				</div>
			</habbo-client-error>
		</div>
	</body>
</html>
