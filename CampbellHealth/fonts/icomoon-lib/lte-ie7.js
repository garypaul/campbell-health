/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icomoon\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-cog' : '&#xe001;',
			'icon-users' : '&#xe002;',
			'icon-location' : '&#xe003;',
			'icon-office' : '&#xe004;',
			'icon-bubbles' : '&#xe005;',
			'icon-bubbles-2' : '&#xe007;',
			'icon-bubbles-3' : '&#xe008;',
			'icon-aid' : '&#xe006;',
			'icon-pushpin' : '&#xe00a;',
			'icon-map' : '&#xe009;',
			'icon-map-2' : '&#xe00b;',
			'icon-calendar' : '&#xe00d;',
			'icon-notebook' : '&#xe00e;',
			'icon-location-2' : '&#xe00f;',
			'icon-heart' : '&#xe010;',
			'icon-heart-2' : '&#xe011;',
			'icon-phone-hang-up' : '&#xe012;',
			'icon-phone' : '&#xe013;',
			'icon-alarm' : '&#xe014;',
			'icon-alarm-2' : '&#xe015;',
			'icon-clock' : '&#xe016;',
			'icon-clock-2' : '&#xe017;',
			'icon-image' : '&#xe018;',
			'icon-bubble' : '&#xe019;',
			'icon-bubble-2' : '&#xe01a;',
			'icon-bubbles-4' : '&#xe01b;',
			'icon-quotes-left' : '&#xe01c;',
			'icon-numbered-list' : '&#xe01d;',
			'icon-star' : '&#xe01e;',
			'icon-star-2' : '&#xe01f;',
			'icon-star-3' : '&#xe020;',
			'icon-users-2' : '&#xe021;',
			'icon-arrow-right' : '&#xe022;',
			'icon-home' : '&#xe000;',
			'icon-coin' : '&#xe023;',
			'icon-mail' : '&#xe024;',
			'icon-cart' : '&#xe025;',
			'icon-arrow-down' : '&#xe026;',
			'icon-arrow-up' : '&#xe027;',
			'icon-arrow-down-2' : '&#xe028;',
			'icon-arrow-up-2' : '&#xe029;',
			'icon-plus' : '&#xe02a;',
			'icon-minus' : '&#xe02b;',
			'icon-calendar-2' : '&#xe00c;',
			'icon-services' : '&#xe02c;',
			'icon-clock-3' : '&#xe02d;',
			'icon-location-3' : '&#xe02e;',
			'icon-team' : '&#xe030;',
			'icon-email' : '&#xe02f;',
			'icon-menu' : '&#xe031;',
			'icon-menu-2' : '&#xe032;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, html, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};