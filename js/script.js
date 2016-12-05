$(document).ready(function(){
	$('body').on('submit','form', function (e) {
		e.preventDefault();
    if(document.getElementById('verbinput').value !== ''){
			$.ajax({ url: 'post.php',
        data: {action: 'check', word: document.getElementById('verbinput').value},
        encoding:"UTF-8",
        method: 'POST',
    		dataType:"json", 
        success: function(d) {
          document.getElementById('verbinput').value = d[2];
          if(d[0] === true){
          	document.getElementById('verbinput').className = 'form-control input-lg success';
          	$('.next-btn').focus();
          } else {
          	document.getElementById('verbinput').className = 'form-control input-lg fail';
          }
        }
			});
		}
	});

	$('body').on('click','.next-btn', function (e) {
		e.preventDefault();
		$.ajax({ url: 'post.php',
      data: {action: 'refresh', word: document.getElementById('verbinput').value},
      encoding:"UTF-8",
      method: 'POST',
  		dataType:"html", 
      success: function(d) {
        $('.inner.cover').replaceWith(d);
        $('#verbinput').focus();
      }
		});
	});

	$('body').on('click','.show-btn', function (e) {
		e.preventDefault();
		$.ajax({ url: 'post.php',
      data: {action: 'show'},
      encoding:"UTF-8",
      method: 'POST',
  		dataType:"json", 
      success: function(d) {
        document.getElementById('verbinput').value = d['て-form'];
      	document.getElementById('verbinput').className = 'form-control input-lg success';
      	$('.next-btn').focus();
      }
		});
	});
});
