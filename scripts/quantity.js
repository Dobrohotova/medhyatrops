/*Переключение количества товаров и цены*/
  function OutputPrices() {
  var input = $('.count');
  var price = $('.price-val');
  var priceObject = $('.price-val').attr('data-price').split(','); //получаем все значения из data-prices и преобразуем их в массив
  //Выводим цену в зависимости от количества
  if (input.val() < 20) {
  price.text(parseInt(input.val()) * priceObject[0]); //Количество менее 20
  };
  if (input.val() >= 20 && input.val() < 50) {
  price.text(parseInt(input.val()) * priceObject[1]); //Количество в диапазоне от 20 до 50
  };
  if (input.val() >= 50 && input.val() < 100) {
  price.text(parseInt(input.val()) * priceObject[2]); //Количество в диапазоне от 50 до 100
  };
  if (input.val() >= 100 && input.val() < 500) {
  price.text(parseInt(input.val()) * priceObject[3]); //Количество в диапазоне от 100 до 500
  };
  if (input.val() >= 500 && input.val() < 1000) {
  price.text(parseInt(input.val()) * priceObject[4]); //Количество в диапазоне от 500 до 1000
  };
  if (input.val() >= 1000) {
  price.text(parseInt(input.val()) * priceObject[5]); //Количество более 1000
  };
  return false;
  // Окончание секции "Выводим цену в зависимости от количества"
  };
//Изменение цены при нажатии на "минус"
  $('.minus').click(function () {
  var input = $(this).parent().find('input');
  var count = parseInt(input.val()) - 1;
  count = count < 1 ? 1 : count;
  input.val(count);
  OutputPrices()
  });
  //Окончание "Изменение цены при нажатии на "минус""
  //Изменение цены при нажатии на "плюс"
  $('.plus').click(function () {
  var input = $(this).parent().find('input');
  input.val(parseInt(input.val()) + 1); //увеличиваем значение input на 1
  OutputPrices()
  });
  //Окончание "Изменение цены при нажатии на "плюс""
 //Отслеживаем изменение инпута при помощи мыши, и меняем цену
 $('.number input').change(function(){
  OutputPrices()
  //Сбрасывание значения, в случае, если пользователь попытается стереть значение из input
  var input = $('.count');
  var price = $('.price-val');
  if (input.val() == '') {
  input.val('0')
  };
  if (price.text() == 'NaN') {
  price.text('0')
  }
  return false;
  //Окончание секции "Сбрасывание значения, в случае, если пользователь попытается стереть значение из input"
 });
/*Окончание секции "Переключение количества товаров и цены"*/