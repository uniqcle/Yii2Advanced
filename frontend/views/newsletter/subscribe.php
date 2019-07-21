<?php 
//Если есть ошибки
if( $model->hasErrors() ){

//Если валидация не прошла. В модель записываются ошибки валидации
//Эти ошибки можно вызвать методом getErrors() это массив
$errors = $model->getErrors(); 

}


//Проверяем записано ли Flash сообщение
if( Yii::$app->session->hasFlash('subscribeStatus') ){

	echo Yii::$app->session->getFlash('subscribeStatus');
}

?>

<form method = "post">
  <div class="form-group row">
    <label for="inputName" class="col-sm-2 col-form-label">Your name</label>
    <div class="col-sm-10">
      <input type="name" name = "name" class="form-control" id="inputName" placeholder="John Doe">
    </div>
  </div>

    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" name = "email" class="form-control" id="inputEmail3" placeholder="jonh@google.com">
    </div>
  </div>
 
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Subscribe</button>
    </div>
  </div>
</form>