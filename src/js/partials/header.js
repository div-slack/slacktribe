$('ul.navul a').each(function () {
if (location.href == this.href)	$(this).parent().addClass('active');
});
