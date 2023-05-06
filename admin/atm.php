<?php require("./layout/db.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All in One Card</title>
</head>
<body>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">

<div class="Wrap">
  <div class="Base">
    <div class="Inner-wrap">
        <h1>All-in-One-Card</h1>
      
      <svg class="Chip" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 387.8 380.3" style="enable-background:new 0 0 387.8 380.3;" xml:space="preserve">
<style type="text/css">
	.st0{fill:url(#gold-gradient);stroke:#000000;stroke-width:10;stroke-miterlimit:10;}
</style>
<defs>
<linearGradient id="gold-gradient" x1="0%" y1="0%" x2="100%" y2="0%">
      <stop offset="0%" stop-color="#c79750"></stop>
      <stop offset="20%" stop-color="#e6b964"></stop>
      <stop offset="50%" stop-color=" #f8e889"></stop>
      <stop offset="80%" stop-color=" #deb15f"></stop>
      <stop offset="100%" stop-color=" #dfb461"></stop>
    </linearGradient>
</defs>
<g id="XMLID_4_">
	<path id="XMLID_1_" class="st0" d="M308.8,375.3H79.1C38.2,375.3,5,342.1,5,301.2V79.1C5,38.2,38.2,5,79.1,5h229.7
		c40.9,0,74.1,33.2,74.1,74.1v222.2C382.8,342.1,349.7,375.3,308.8,375.3z"/>
	<line id="XMLID_2_" class="st0" x1="109.9" y1="5.1" x2="109.9" y2="375.1"/>
	<line id="XMLID_3_" class="st0" x1="4.9" y1="95.1" x2="109.9" y2="95.1"/>
	<line id="XMLID_7_" class="st0" x1="4.9" y1="185.1" x2="109.9" y2="185.1"/>
	<line id="XMLID_8_" class="st0" x1="1.9" y1="275.1" x2="106.9" y2="275.1"/>
	<line id="XMLID_9_" class="st0" x1="276.9" y1="275.1" x2="381.9" y2="275.1"/>
	<line id="XMLID_10_" class="st0" x1="274.9" y1="185.1" x2="379.9" y2="185.1"/>
	<line id="XMLID_11_" class="st0" x1="277.9" y1="95.1" x2="382.9" y2="95.1"/>
	<g id="XMLID_6_">
		<g id="XMLID_14_">
			<g id="XMLID_32_">
				<path id="XMLID_33_" d="M277.4,90.1h-1c-2.5,0-4.5,2-4.5,4.5v272c0,2.5,2,4.5,4.5,4.5h1c2.5,0,4.5-2,4.5-4.5v-272
					C281.9,92.1,279.9,90.1,277.4,90.1z"/>
			</g>
		</g>
	</g>
</g>
</svg>
    
    <?php
    $result = $conn->query("SELECT * FROM card WHERE id='".$_GET["id"]."'");
    if($result->num_rows > 0){
        $i=0;
        while($row=$result->fetch_assoc()){
            $i++;
            ?>
        <div class="Card-number">
            <ul>
            <li id="first-li"><?php echo(substr($row["no"],0,4)) ?></li>
            <li><?php echo(substr($row["no"],4,4)) ?></li>
            <li><?php echo(substr($row["no"],8,4)) ?></li>
            <li id="last-li"><?php echo(substr($row["no"],12,4)) ?></li>
            </ul>
        </div>
        
        <div class='Name'>
            <h3><?php echo($row["name"]) ?></h3>
        </div>
    <?php }} ?>
    </div>
  </div>
</div>

<style>

html ,body{
  background: #252526;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
  height:100%;
  width:100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.Base {
  background: #ccc;
  height: 378px;
  width: 595px;
  border-radius: 15px;
}

.Inner-wrap {
  background-color: #0c0014;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 1600 800'%3E%3Cg %3E%3Cpolygon fill='%230d1838' points='1600%2C160 0%2C460 0%2C350 1600%2C50'/%3E%3Cpolygon fill='%230e315d' points='1600%2C260 0%2C560 0%2C450 1600%2C150'/%3E%3Cpolygon fill='%230f4981' points='1600%2C360 0%2C660 0%2C550 1600%2C250'/%3E%3Cpolygon fill='%231062a6' points='1600%2C460 0%2C760 0%2C650 1600%2C350'/%3E%3Cpolygon fill='%23117aca' points='1600%2C800 0%2C800 0%2C750 1600%2C450'/%3E%3C/g%3E%3C/svg%3E");
  background-size: auto 147%;
  background-position: center;
  position: relative;
  height: 100%;
  width: 100%;
  border-radius: 13px;
  padding: 20px 40px;
  box-sizing: border-box;
  color: #fff;
}

p {
  margin: 0;
  font-size: 2em;
}

/* Controls top right logo */

.Logo {
  position: absolute;
  height: 80px;
  width: 80px;
  right: 0;
  top: 0;
  padding: inherit;
  fill: #117aca;
}

/* Controls chip icon */

.Chip {
  height: 80px;
  margin: 40px 0 25px 0;
}

.gold path{
  fill: url(#gold-gradient);
}

svg {
  display: block;
}

/* Controls name size */

.Logo-name {
  transform: scale(.5);
  margin-left: -75px;
}

.Card-number p {
  text-align: center;
}

.Card-number {
  margin-top: -25px;
  display: flex;
  justify-content: center;
  color: rgba(255, 255, 255, 0.9);
}

ul {
  padding: 0;
}

ul li {
  list-style: none;
  float: left;
  margin: 0px 10px;
  font-size: 2.2em;
}

#first-li {
  margin-left: 0;
}

#last-li {
  margin-right: 0;
}

.Expire {
  font-size: .75em;
  text-align: center;
}

.Expire h4 {
  font-weight: 400;
  color: #aaa;
  margin: 0;
/*   word-spacing: 9999999px; */
  text-transform: uppercase;
}

.Expire p {
  font-size: 1.55em;
  color: rgba(255, 255, 255, 0.9);
}

.Name h3 {
  text-align: center;
  text-transform: uppercase;
  font-weight: 400;
  font-size: 1.35em;
  color: rgba(255, 255, 255, 0.85);
}

.Visa {
  width: 115px;
  position: absolute;
  bottom: -145px;
  right: 0;
  padding: inherit;
}
</style>
</body>
</html>