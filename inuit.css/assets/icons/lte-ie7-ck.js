/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */window.onload=function(){function e(e,t){var n=e.innerHTML;e.innerHTML="<span style=\"font-family: 'finest-icons'\">"+t+"</span>"+n}var t={"icon-star":"&#x2605;","icon-heart":"&#x2665;","icon-ok":"&#x2611;","icon-remove":"&#x2612;","icon-cog":"&#x2388;","icon-time":"&#x233d;","icon-tags":"&#x2326;","icon-chevron-down":"&#x25be;","icon-angle-left":"&#x25c2;","icon-angle-right":"&#x25bb;","icon-angle-up":"&#x25b4;","icon-angle-down":"&#x25bc;","icon-paperplane":"&#x274f;","icon-clock":"&#x272a;","icon-info":"&#x261d;","icon-warning":"&#x21;","icon-plus":"&#x2b;","icon-minus":"&#x2d;","icon-twitter":"&#x2604;","icon-search":"&#x260c;","icon-music":"&#xe000;","icon-ipod":"&#xe001;","icon-bag":"&#xe002;","icon-drink":"&#xe003;","icon-flower":"&#xe004;","icon-film":"&#xe005;","icon-mug":"&#xe006;","icon-coffee":"&#xe007;","icon-drink-2":"&#xe008;","icon-cake":"&#xe009;","icon-chat":"&#xe00a;","icon-chat-2":"&#xe00b;","icon-comments":"&#xe00c;","icon-info-2":"&#xe00d;","icon-cloud-dl":"&#xe00e;","icon-film-2":"&#xf008;","icon-glass":"&#xf000;","icon-map-marker":"&#xf041;","icon-quote-right":"&#xf10e;","icon-food":"&#xf0f5;","icon-coffee-2":"&#xf0f4;","icon-bullhorn":"&#xf0a1;","icon-leaf":"&#xf06c;","icon-calendar":"&#xf073;","icon-comments-2":"&#xf086;","icon-comment":"&#xf075;","icon-phone":"&#xf095;","icon-music-2":"&#xe00f;","icon-music-3":"&#xe010;","icon-megaphone":"&#xe011;","icon-newspaper":"&#xe012;","icon-location":"&#xe013;","icon-pushpin":"&#xe014;","icon-tv":"&#xe015;","icon-bookmark":"&#xe016;","icon-ticket":"&#xe017;","icon-microphone":"&#xe018;","icon-marker":"&#xe019;","icon-brush":"&#xe01a;","icon-food-2":"&#xe01b;","icon-calendar-2":"&#xe01c;","icon-image":"&#xe01d;","icon-envelope":"&#xe01e;","icon-instagram":"&#x2b12;","icon-foursquare":"&#x2691;","icon-facebook":"&#x260d;"},n=document.getElementsByTagName("*"),r,i,s,o,u;for(r=0;;r+=1){u=n[r];if(!u)break;i=u.getAttribute("data-icon");i&&e(u,i);o=u.className;o=o.match(/icon-[^\s'"]+/);o&&t[o[0]]&&e(u,t[o[0]])}};