/* mail obfuscation */
var mailitems = document.querySelectorAll(".mc-mailer");
if (mailitems.length > 0){
	Array.from(mailitems).forEach((el) => {
		var d = el.dataset;
		el.href = "mailto:"+d.user+"@"+d.domain;
		el.innerHTML = d.user+"@"+d.domain;
	})
}