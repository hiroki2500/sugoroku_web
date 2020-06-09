<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>すごろくゲーム</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="header">
        <h1>すごろくゲーム</h1>
      </div>
      <div class="choice">
       <p>プレイ人数を選んでください</p>
       <div id="selectPeople">
         <p id="one" class="btn">1人</p>
         <p id="two" class="btn">2人</p>
         <p id="three" class="btn">3人</p>
         <p id="four" class="btn">4人</p>
       </div>
      </div>
      <div class="game none">
        <div class="dice-contents">
          <div class="left-contents">
            <p id="turn">プレイヤー1のターン</p>
            <span class="roll-dice" id="rollDice">サイコロをふる</span>
            <p id="count">0投目</p>
            <p id="leftValue">ゴールまであと100マス</p>
          </div>
          <div class="right-contents">
            <img src="1.png">
          </div>
        </div>
        <div class="result-wrapper" id="result-modal">
      　  <div class="modal">
        　　 <p id="result"></p>
    　　  </div>
  　　  </div>
        <ul class="squares">
          <li class="square">0<div id="square0"></div></li>
          <li class="square">1<div id="square1"></div></li>
          <li class="square">2<div id="square2"></div></li>
          <li class="square">3<div id="square3"></div></li>
          <li class="square">4<div id="square4"></div></li>
          <li class="square event-square">5<div id="square5" class="event"></div></li>
          <li class="square">6<div id="square6"></div></li>
          <li class="square">7<div id="square7"></div></li>
          <li class="square">8<div id="square8"></div></li>
          <li class="square">9<div id="square9"></div></li>
          <li class="square event-square">10<div id="square10" class="event"></div></li>
          <li class="square">11<div id="square11"></div></li>
          <li class="square">12<div id="square12"></div></li>
          <li class="square">13<div id="square13"></div></li>
          <li class="square">14<div id="square14"></div></li>
          <li class="square event-square">15<div id="square15" class="event"></div></li>
          <li class="square">16<div id="square16"></div></li>
          <li class="square">17<div id="square17"></div></li>
          <li class="square">18<div id="square18"></div></li>
          <li class="square">19<div id="square19"></div></li>
          <li class="square event-square">20<div id="square20" class="event"></div></li>
          <li class="square">21<div id="square21"></div></li>
          <li class="square">22<div id="square22"></div></li>
          <li class="square">23<div id="square23"></div></li>
          <li class="square">24<div id="square24"></div></li>
          <li class="square event-square">25<div id="square25" class="event"></div></li>
          <li class="square">26<div id="square26"></div></li>
          <li class="square">27<div id="square27"></div></li>
          <li class="square">28<div id="square28"></div></li>
          <li class="square">29<div id="square29"></div></li>
          <li class="square event-square">30<div id="square30" class="event"></div></li>
          <li class="square">31<div id="square31"></div></li>
          <li class="square">32<div id="square32"></div></li>
          <li class="square">33<div id="square33"></div></li>
          <li class="square">34<div id="square34"></div></li>
          <li class="square event-square">35<div id="square35" class="event"></div></li>
          <li class="square">36<div id="square36"></div></li>
          <li class="square">37<div id="square37"></div></li>
          <li class="square">38<div id="square38"></div></li>
          <li class="square">39<div id="square39"></div></li>
          <li class="square event-square">40<div id="square40" class="event"></div></li>
          <li class="square">41<div id="square41"></div></li>
          <li class="square">42<div id="square42"></div></li>
          <li class="square">43<div id="square43"></div></li>
          <li class="square">44<div id="square44"></div></li>
          <li class="square event-square">45<div id="square45" class="event"></div></li>
          <li class="square">46<div id="square46"></div></li>
          <li class="square">47<div id="square47"></div></li>
          <li class="square">48<div id="square48"></div></li>
          <li class="square">49<div id="square49"></div></li>
          <li class="square event-square">50<div id="square50" class="event"></div></li>
          <li class="square">51<div id="square51"></div></li>
          <li class="square">52<div id="square52"></div></li>
          <li class="square">53<div id="square53"></div></li>
          <li class="square">54<div id="square54"></div></li>
          <li class="square event-square">55<div id="square55" class="event"></div></li>
          <li class="square">56<div id="square56"></div></li>
          <li class="square">57<div id="square57"></div></li>
          <li class="square">58<div id="square58"></div></li>
          <li class="square">59<div id="square59"></div></li>
          <li class="square event-square">60<div id="square60" class="event"></div></li>
          <li class="square">61<div id="square61"></div></li>
          <li class="square">62<div id="square62"></div></li>
          <li class="square">63<div id="square63"></div></li>
          <li class="square">64<div id="square64"></div></li>
          <li class="square event-square">65<div id="square65" class="event"></div></li>
          <li class="square">66<div id="square66"></div></li>
          <li class="square">67<div id="square67"></div></li>
          <li class="square">68<div id="square68"></div></li>
          <li class="square">69<div id="square69"></div></li>
          <li class="square event-square">70<div id="square70" class="event"></div></li>
          <li class="square">71<div id="square71"></div></li>
          <li class="square">72<div id="square72"></div></li>
          <li class="square">73<div id="square73"></div></li>
          <li class="square">74<div id="square74"></div></li>
          <li class="square event-square">75<div id="square75" class="event"></div></li>
          <li class="square">76<div id="square76"></div></li>
          <li class="square">77<div id="square77"></div></li>
          <li class="square">78<div id="square78"></div></li>
          <li class="square">79<div id="square79"></div></li>
          <li class="square event-square">80<div id="square80" class="event"></div></li>
          <li class="square">81<div id="square81"></div></li>
          <li class="square">82<div id="square82"></div></li>
          <li class="square">83<div id="square83"></div></li>
          <li class="square">84<div id="square84"></div></li>
          <li class="square event-square">85<div id="square85" class="event"></div></li>
          <li class="square">86<div id="square86"></div></li>
          <li class="square">87<div id="square87"></div></li>
          <li class="square">88<div id="square88"></div></li>
          <li class="square">89<div id="square89"></div></li>
          <li class="square event-square">90<div id="square90" class="event"></div></li>
          <li class="square">91<div id="square91"></div></li>
          <li class="square">92<div id="square92"></div></li>
          <li class="square">93<div id="square93"></div></li>
          <li class="square">94<div id="square94"></div></li>
          <li class="square event-square">95<div id="square95" class="event"></div></li>
          <li class="square">96<div id="square96"></div></li>
          <li class="square">97<div id="square97"></div></li>
          <li class="square">98<div id="square98"></div></li>
          <li class="square">99<div id="square99"></div></li>
          <li class="square">ゴール<div id="square100"></div></li>
        </ul>
        <div class="event-contents">
          <p id="eventInfo"></p>
        </div>
      </div>
      <div class="confirm-wrapper">
        <form action="confirm1.php" method="post">
          <div class="current-squares">
            <h3>フォームデータの送信（あとで不可視化）</h3>
            <span>プレイヤー1</span>
            <input type="text" name="player1" value="0">
            <span>プレイヤー2</span>
            <input type="text" name="player2" value="0">
            <span>プレイヤー3</span>
            <input type="text" name="player3" value="0">
            <span>プレイヤー4</span>
            <input type="text" name="player4" value="0">
            <input type="submit" value="送信">
          </div>
        </form>
      </div>
    </div>
    <script src="main.js"></script>
    <script src="game.js"></script>
  </body>
</html>
