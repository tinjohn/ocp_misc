<!DOCTYPE html>
<html lang='en' class=''>
<?PHP
  $x = isset($_REQUEST['x']) ? $_REQUEST['x'] : 60;
  $y = isset($_REQUEST['y']) ? $_REQUEST['y'] : 60;
  $z = isset($_REQUEST['z']) ? $_REQUEST['z'] : 0;
?>
<head>

  <meta charset='UTF-8'>
  <title>Kompetenzdimensionen Würfel <?php echo $x.'_'.$y.'_'.$z.' Grad';?></title>

  <meta name="robots" content="noindex">



  <style class="INLINE_PEN_STYLESHEET_ID">
    :root {
  /*--border: #283741;*/
  --border: rgb(199, 199, 199);

  --size: max(min(50vw, 50vh), 350px);
  --main-color: rgb(236, 251, 255);
  --background: #ffffff;
  --opac: 1;
}

*,
html {
  margin: 0;
  box-sizing: border-box;
  font-family: Arial, Lato, sans-serif;
}

body {
  background: var(--background);
  color: rgb(43, 43, 43);
}

.container {
  width: var(--size);
  height: var(--size);
  margin: calc(var(--size) / 2);
}

.cube {
  position: relative;
  width: var(--size);
  height: var(--size);
  transform-style: preserve-3d;
  transform: rotateX(-<?php echo $x; ?>deg) rotateY(-<?php echo $y; ?>deg) rotateZ(-<?php echo $z; ?>deg);
  font-family: Arial, sans-serif;
}

.face {
  width: var(--size);
  height: var(--size);
  position: absolute;
  background-color: var(--main-color);
  border: 4px solid var(--border);
  box-shadow: 0px 0px 0px 1px var(--border);
  border-collapse: collapse;
  border-radius: 1px;
}

.PbrD {
  background-color: rgba(235, 52, 192, var(--opac));
}
.DueH {
  background-color: rgba(132, 189, 72, var(--opac));
}
.BidZ {
  background-color: rgba(250, 164, 5, var(--opac));
}

.TiRma {
  background-color: rgba(177, 126, 216, var(--opac));
}

.IuW {
  background-color: rgba(255, 87, 119, var(--opac));
}
.VPuT {
  background-color: rgba(1, 141, 246, var(--opac));
}

.DB {
  background-color: rgba(204, 153, 0, var(--opac));
}
/*

.Wissen {
  background-color: rgba(110, 250, 119,var(--opac));
}

.Koennen {
  background-color: rgba(125, 209, 131,var(--opac));
}

.Haltung {
  background-color: rgb(102, 173, 107,var(--opac));
}

*/
.Wissen {
  background-color: rgba(255, 209, 209, var(--opac));
}

.Koennen {
  background-color: rgba(255, 166, 166, var(--opac));
}

.Haltung {
  background-color: rgb(252, 98, 98, var(--opac));
}

.kr {
  background-color: rgba(255, 213, 141, var(--opac));
}
.emo {
  background-color: rgba(255, 213, 80, var(--opac));
}
.sk {
  background-color: rgba(255, 213, 20, var(--opac));
}
.ik {
  background-color: rgba(255, 200, 20, var(--opac));
}
.it {
  background-color: rgba(255, 191, 0, var(--opac));
}

.cube > table tr {
  border-bottom: 0px solid var(--border);
  text-align: center;
}

.cube > table tr:last-child {
  border-bottom: none;
}

.cube .left {
  filter: brightness(0.8) hue-rotate(10deg);
  transform: translateZ(calc(var(--size) / 2)) rotateZ(-90deg);
}

.cube .right {
  color: #ffffff;
  filter: brightness(1.03) hue-rotate(-10deg);
  transform: translateX(calc(var(--size) / 2)) rotateY(90deg) rotateZ(0deg);
}

.cube .top {
  transform: translateY(calc(var(--size) / 2 * -1)) rotateX(90deg) rotateZ(0deg);
}

.cube > table td {
  padding: 12px;
}

  </style>



<script>
window.onload = init;

function init() {
  let reversed = document.querySelectorAll(".table-reverse tbody");
  if (reversed.length) {
    reversed.forEach((x) => reverseChildren(x));
  }

  let td = document.querySelectorAll(".text-fit td");
  if (td.length) {
    //td.forEach((x) => textFit(td));
  }

  window.onresize = tableTextFit;
}

function reverseChildren(parent) {
  for (var i = 1; i < parent.childNodes.length; i++) {
    parent.insertBefore(parent.childNodes[i], parent.firstChild);
  }
}

function tableTextFit() {
  let tables = document.querySelectorAll("table tbody");
  let mintablestfs = 1 / 10;
  let maxtablestfs = 100;

  if (tables.length) {
    tables.forEach((table) => {
      table.style.fontSize = "0.1rem";
      const rect = table.getBoundingClientRect();
      const max = rect.height;
      for (let i = 2; i <= 100; i++) {
        table.style.fontSize = i / 10 + "rem";

        const rect = table.getBoundingClientRect();
        if (rect.height > max) {
          tablestfs = (i - 1) / 10;
          if (maxtablestfs > tablestfs) {
            maxtablestfs = tablestfs;
          }
          break;
        }
      }
    });
  }

  let tablesx = document.querySelectorAll("table tbody");
  if (tablesx.length) {
    tablesx.forEach((table) => {
      table.style.fontSize = maxtablestfs + "rem";
    });
  }
}


</script>
</head>

<body>
  <div class="container">
  <div class="cube">
    <table class="face right">
      <tbody>
        <tr class="DueH">
          <td>Datenschutz und ethische Herausforderungen</td>
        </tr>
        <tr class="PbrD">
          <td>Pflege bei räumlicher Distanz</td>
        </tr>
        <tr class="BidZ">
          <td>Blick in die Zukunft</td>
        </tr>
        <tr class="TiRma">
          <td>Technologie-induzierte Risiken managen und adressieren</td>
        </tr>
        <tr class="IuW">
          <td>Informations- und Wissensmanagement</td>
        </tr>
        <tr class="VPuT">
          <td>Vereinbarkeit von Pflege und Technik</td>
        </tr>
        <tr class="DB">
          <td>Digital Basics</td>
        </tr>
      </tbody>
    </table>

    <table class="face left table-reverse">
      <tbody>
        <tr class="Wissen">
          <td>Haltung</td>
        </tr>
        <tr class="Koennen">
          <td>Können</td>
        </tr>
        <tr class="Haltung">
          <td>Wissen</td>
        </tr>
      </tbody>
    </table>

    <table class="face top">
      <tbody>
        <tr class="kr">
          <td>kritisch-reflexiv</td>
        </tr>
        <tr class="emo">
          <td>emotional</td>
        </tr>
        <tr class="sk">
          <td>sozial-kommunikativ</td>
        </tr>
        <tr class="ik">
          <td>inhaltlich-kognitiv</td>
        </tr>
        <tr class="it">
          <td>instrumentell-technisch</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<div>

</div>

<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>
  <script  src="https://cdpn.io/cpe/boomboom/pen.js?key=pen.js-a13b73cd-ad5c-f864-5574-e6fe5a209853" crossorigin></script>
</body>

</html>
