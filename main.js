$(function(){
//サイコロを投げた時の処理

$(`#beginning`).click(function(){
  $('.select1').addClass('none');
  $('.select2').removeClass('none');
});

$(`#one`).click(function(){
  $('.select2').addClass('none');
  $('.game').removeClass('none');
  player = 1;
  leftVal1 = 100; //残りのマス
  diceSum1 = 0; //出目の合計
  diceSumId1 = ("square" + diceSum1) //出目の合計値=コマの位置
  countNum1 = 0; //振った回数
  document.getElementById('square0').insertAdjacentHTML('afterbegin', '<i id="currentPosition1" class="fas fa-car-side playerIcon1"></i>');
  document.getElementById("playerNumber").value = 1;
});

$(`#two`).click(function(){
  $('.select2').addClass('none');
  $('.game').removeClass('none');
  player = 2;
  leftVal1 = 100; //残りのマス
  diceSum1 = 0; //出目の合計
  diceSumId1 = ("square" + diceSum1) //出目の合計値=コマの位置
  countNum1 = 0; //振った回数
  leftVal2 = 100; //残りのマス
  diceSum2 = 0; //出目の合計
  diceSumId2 = ("square" + diceSum2) //出目の合計値=コマの位置
  countNum2 = 0; //振った回数
  document.getElementById('square0').insertAdjacentHTML('afterbegin', '<i id="currentPosition1" class="fas fa-car-side playerIcon1"></i>');
  document.getElementById('square0').insertAdjacentHTML('afterbegin', '<i id="currentPosition2" class="fas fa-car-side playerIcon2"></i>');
  document.getElementById("playerNumber").value = 2;
});

$(`#three`).click(function(){
  $('.select2').addClass('none');
  $('.game').removeClass('none');
  player = 3;
  leftVal1 = 100; //残りのマス
  diceSum1 = 0; //出目の合計
  diceSumId1 = ("square" + diceSum1) //出目の合計値=コマの位置
  countNum1 = 0; //振った回数
  leftVal2 = 100; //残りのマス
  diceSum2 = 0; //出目の合計
  diceSumId2 = ("square" + diceSum2) //出目の合計値=コマの位置
  countNum2 = 0; //振った回数
  leftVal3 = 100; //残りのマス
  diceSum3 = 0; //出目の合計
  diceSumId3 = ("square" + diceSum3) //出目の合計値=コマの位置
  countNum3 = 0; //振った回数
  document.getElementById('square0').insertAdjacentHTML('afterbegin', '<i id="currentPosition1" class="fas fa-car-side playerIcon1"></i>');
  document.getElementById('square0').insertAdjacentHTML('afterbegin', '<i id="currentPosition2" class="fas fa-car-side playerIcon2"></i>');
  document.getElementById('square0').insertAdjacentHTML('afterbegin', '<i id="currentPosition3" class="fas fa-car-side playerIcon3"></i>');
  document.getElementById("playerNumber").value = 3;
});

$(`#four`).click(function(){
  $('.select2').addClass('none');
  $('.game').removeClass('none');
  player = 4;
  leftVal1 = 100; //残りのマス
  diceSum1 = 0; //出目の合計
  diceSumId1 = ("square" + diceSum1) //出目の合計値=コマの位置
  countNum1 = 0; //振った回数
  leftVal2 = 100; //残りのマス
  diceSum2 = 0; //出目の合計
  diceSumId2 = ("square" + diceSum2) //出目の合計値=コマの位置
  countNum2 = 0; //振った回数
  leftVal3 = 100; //残りのマス
  diceSum3 = 0; //出目の合計
  diceSumId3 = ("square" + diceSum3) //出目の合計値=コマの位置
  countNum3 = 0; //振った回数
  leftVal4 = 100; //残りのマス
  diceSum4 = 0; //出目の合計
  diceSumId4 = ("square" + diceSum3) //出目の合計値=コマの位置
  countNum4 = 0; //振った回数
  document.getElementById('square0').insertAdjacentHTML('afterbegin', '<i id="currentPosition1" class="fas fa-car-side playerIcon1"></i>');
  document.getElementById('square0').insertAdjacentHTML('afterbegin', '<i id="currentPosition2" class="fas fa-car-side playerIcon2"></i>');
  document.getElementById('square0').insertAdjacentHTML('afterbegin', '<i id="currentPosition3" class="fas fa-car-side playerIcon3"></i>');
  document.getElementById('square0').insertAdjacentHTML('afterbegin', '<i id="currentPosition4" class="fas fa-car-side playerIcon4"></i>');
  document.getElementById("playerNumber").value = 4;
});

});
