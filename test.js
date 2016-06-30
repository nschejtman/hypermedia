var $container = $('#container');

render('/home.php');

function render(url){
var xhr = new XMLHttpRequest();
var location=window.location.hostname;
	var port = window.location.port;
xhr.open('GET', 'http://'+location+':'+port+url, true);
xhr.onload = function(){
	var html = xhr.response;
 	html = evilstringChopper(html, '<script src="/bower_components/jquery/dist/jquery.min.js"></script>');
	html = evilstringChopper(html, '<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>'); 	
	
    	$container.html(html);
	$container.ready(amazingHack);
};
xhr.send();
}

function amazingHack(){
	$container.find('a').each(function(idx, elem){
		var $elem = $(elem);
		var link = $elem.attr('href');	
		if(link && !link.includes('#') && !link.includes('javascript:')){
			$elem.attr('href', 'javascript:render("' + link + '");');		
		}
	});
}
function evilstringChopper(str,tumor){
	var index = str.indexOf(tumor);	
	return str.substring(0, index) + str.substring(index + tumor.length);
}


