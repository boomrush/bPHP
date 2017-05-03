<?
/*
bPHP - Bootstrap PHP Language by SM Corp.
Russian language version

-----
Version: rel. 1.0
-----

(c) 2017
*/

echo '<head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"><script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script> <meta charset="utf-8"></head>';

class bphp {
public function alert($type, $text){
	if($type == 'error'){
	echo '
<div class="alert alert-danger" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong>Упс!</strong> '. $text .'
</div>
	';
}else if($type == 'success'){
		echo '
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
<div class="alert alert-success" role="alert">
  <strong>Отлично!</strong> '. $text .'
</div>
	';
}else if($type == 'warning'){
		echo '
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
<div class="alert alert-warning" role="alert">
  <strong>Упс!</strong> '. $text .'
</div>
	';
}else if($type == 'info'){
			echo '
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
<div class="alert alert-info" role="alert">
  <strong>Упс!</strong> '. $text .'
</div>
	';
}else{
	echo 'Ошибка: данный тип сообщения не найден!';
}
}

public function badge($type, $text){
	if($type == 'default'){
	echo '
<span class="badge badge-default">'.$text.'</span>
	';
}else if($type == 'primary'){
		echo '
<span class="badge badge-primary">'.$text.'</span>
	';
}else if($type == 'success'){
		echo '
<span class="badge badge-success">'.$text.'</span>
	';
}else if($type == 'info'){
			echo '
<span class="badge badge-info">'.$text.'</span>
	';
}else if($type == 'warning'){
			echo '
<span class="badge badge-warning">'.$text.'</span>
	';
}else if($type == 'danger'){
			echo '
<span class="badge badge-danger">'.$text.'</span>
	';
}else{
	echo 'Ошибка: данный тип иконки не найден!';
}
}








	}

	$bphp = new bphp();
?>
