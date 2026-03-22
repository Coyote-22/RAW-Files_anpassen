<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>GFHL - League Records</title>
<script src="GFHL.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Nina Rohac - STHS - Version : 3.4.7.7 - GFHL-STHS.db - GFHL-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style>:root {
  --main-menu-background-color: #ffffff;
  --main-menu-text-color: #000000;
  --main-menu-background-color-hover: #ffffff;
  --main-menu-text-color-hover: #191919;
  --main-submenu-background-color: #f2f2f2;
  --main-submenu-text-color: #000000;
  --main-submenu-background-color-hover: #dedede;
  --main-submenu-text-color-hover: #000000;
  --main-table-background-head: #dedede;
  --main-table-background-head-text: #000000;
  --main-table-odd: #ffffff;
  --main-table-even: #efefef;
  --main-table-text-color: #000000;
  --main-table-backgroud-color-hover: #ebf2fa;
  --main-table-text-color-hover: #000000;
  --main-table-backgroud-disabled: #dddddd;
  --main-sort-background-color: #8dbdd8;
  --main-sort-text-color: #333333;
  --main-filter-background-color: #eeeeee;
  --main-filter-text-color: #333333;
  --main-button-background: #99bfe6;
  --main-button-hover: #5797d7; 
  --main-button-text: #000000;
}</style>
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<?php If (file_exists("STHSSetting.php") == true){
require_once "STHSSetting.php";
$db = new SQLite3($DatabaseFile);
include "Menu.php";}?>
<h1 class="STHSLeagueRecord_TeamRecords">Team Records</h1>
<table class="STHSRecordTable">
<tr><td colspan="6"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Canadiens</td><td>2008</td><td>535</td><td>11</td><td></td></tr>
<tr><td>2</td><td>Wild</td><td>2011</td><td>1158</td><td>11</td><td></td></tr>
<tr><td>3</td><td>Kings</td><td>2013</td><td>187</td><td>11</td><td></td></tr>
<tr><td>4</td><td>Blackhawks</td><td>2013</td><td>227</td><td>11</td><td></td></tr>
<tr><td>5</td><td>Blackhawks</td><td>2013</td><td>452</td><td>11</td><td></td></tr>
<tr><td>6</td><td>Red Wings</td><td>2013</td><td>925</td><td>11</td><td></td></tr>
<tr><td>7</td><td>New Jersey Devils</td><td>2025</td><td>565</td><td>11</td><td><a href="GFHL-565.html">Game Direct Link</a></td></tr><tr><td>8</td><td>Maple Leafs</td><td>2008</td><td>551</td><td>10</td><td></td></tr>
<tr><td>9</td><td>Kings</td><td>2008</td><td>1156</td><td>10</td><td></td></tr>
<tr><td>10</td><td>Blue Jackets</td><td>2008</td><td>1208</td><td>10</td><td></td></tr>

<tr><td colspan="6"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Blackhawks</td><td>2013</td><td>357</td><td></td><td></td></tr>
<tr><td>2</td><td>Maple Leafs</td><td>2008</td><td>344</td><td></td><td></td></tr>
<tr><td>3</td><td>Blue Jackets</td><td>2013</td><td>332</td><td></td><td></td></tr>
<tr><td>4</td><td>Red Wings</td><td>2013</td><td>331</td><td></td><td></td></tr>
<tr><td>5</td><td>Capitals</td><td>2008</td><td>328</td><td></td><td></td></tr>
<tr><td>6</td><td>Blues</td><td>2008</td><td>321</td><td></td><td></td></tr>
<tr><td>7</td><td>Lightning</td><td>2013</td><td>313</td><td></td><td></td></tr>
<tr><td>8</td><td>Hurricanes</td><td>2008</td><td>310</td><td></td><td></td></tr>
<tr><td>9</td><td>Canadiens</td><td>2008</td><td>307</td><td></td><td></td></tr>
<tr><td>10</td><td>Detroit Red Wings</td><td>2021</td><td>277</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Washington Capitals</td><td>2016</td><td>99</td><td></td><td></td></tr>
<tr><td>2</td><td>Washington Capitals</td><td>2017</td><td>110</td><td></td><td></td></tr>
<tr><td>3</td><td>Panthers</td><td>2013</td><td>118</td><td></td><td></td></tr>
<tr><td>4</td><td>Rangers</td><td>2013</td><td>127</td><td></td><td></td></tr>
<tr><td>5</td><td>Predators</td><td>2013</td><td>130</td><td></td><td></td></tr>
<tr><td>6</td><td>Coyotes</td><td>2013</td><td>138</td><td></td><td></td></tr>
<tr><td>7</td><td>Stars</td><td>2013</td><td>169</td><td></td><td></td></tr>
<tr><td>8</td><td>Sabres</td><td>2009</td><td>174</td><td></td><td></td></tr>
<tr><td>9</td><td>Dallas Stars</td><td>2019</td><td>177</td><td></td><td></td></tr>
<tr><td>10</td><td>New Jersey Devils</td><td>2022</td><td>177</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Panthers</td><td>2008</td><td>375</td><td></td><td></td></tr>
<tr><td>2</td><td>Wild</td><td>2008</td><td>346</td><td></td><td></td></tr>
<tr><td>3</td><td>Stars</td><td>2008</td><td>344</td><td></td><td></td></tr>
<tr><td>4</td><td>Predators</td><td>2008</td><td>339</td><td></td><td></td></tr>
<tr><td>5</td><td>Bruins</td><td>2008</td><td>337</td><td></td><td></td></tr>
<tr><td>6</td><td>Edmonton Oilers</td><td>2023</td><td>317</td><td></td><td></td></tr>
<tr><td>7</td><td>Columbus Blue Jackets</td><td>2019</td><td>295</td><td></td><td></td></tr>
<tr><td>8</td><td>Montreal Canadiens</td><td>2018</td><td>285</td><td></td><td></td></tr>
<tr><td>9</td><td>Tampa Bay Lightning</td><td>2023</td><td>285</td><td></td><td></td></tr>
<tr><td>10</td><td>Washington Capitals</td><td>2018</td><td>281</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Lightning</td><td>2013</td><td>153</td><td></td><td></td></tr>
<tr><td>2</td><td>Flyers</td><td>2013</td><td>170</td><td></td><td></td></tr>
<tr><td>3</td><td>Detroit Red Wings</td><td>2022</td><td>171</td><td></td><td></td></tr>
<tr><td>4</td><td>Winnipeg Jets</td><td>2020</td><td>173</td><td></td><td></td></tr>
<tr><td>5</td><td>Carolina Hurricanes</td><td>2019</td><td>176</td><td></td><td></td></tr>
<tr><td>6</td><td>Carolina Hurricanes</td><td>2022</td><td>179</td><td></td><td></td></tr>
<tr><td>7</td><td>Ottawa Senators</td><td>2016</td><td>181</td><td></td><td></td></tr>
<tr><td>8</td><td>Montreal Canadiens</td><td>2017</td><td>181</td><td></td><td></td></tr>
<tr><td>9</td><td>Colorado Avalanche</td><td>2020</td><td>181</td><td></td><td></td></tr>
<tr><td>10</td><td>New Jersey Devils</td><td>2019</td><td>186</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Canadiens</td><td>2008</td><td>535</td><td>22</td><td></td></tr>
<tr><td>2</td><td>Oilers</td><td>2009</td><td>983</td><td>19</td><td></td></tr>
<tr><td>3</td><td>Red Wings</td><td>2013</td><td>925</td><td>19</td><td></td></tr>
<tr><td>4</td><td>Vancouver Canucks</td><td>2025</td><td>764</td><td>19</td><td><a href="GFHL-764.html">Game Direct Link</a></td></tr><tr><td>5</td><td>Maple Leafs</td><td>2008</td><td>551</td><td>18</td><td></td></tr>
<tr><td>6</td><td>Capitals</td><td>2008</td><td>558</td><td>18</td><td></td></tr>
<tr><td>7</td><td>Capitals</td><td>2008</td><td>572</td><td>18</td><td></td></tr>
<tr><td>8</td><td>Coyotes</td><td>2010</td><td>1126</td><td>18</td><td></td></tr>
<tr><td>9</td><td>Islanders</td><td>2011</td><td>50</td><td>18</td><td></td></tr>
<tr><td>10</td><td>Blackhawks</td><td>2013</td><td>227</td><td>18</td><td></td></tr>

<tr><td colspan="6"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Maple Leafs</td><td>2008</td><td>625</td><td></td><td></td></tr>
<tr><td>2</td><td>Capitals</td><td>2008</td><td>594</td><td></td><td></td></tr>
<tr><td>3</td><td>Blackhawks</td><td>2013</td><td>568</td><td></td><td></td></tr>
<tr><td>4</td><td>Blues</td><td>2008</td><td>565</td><td></td><td></td></tr>
<tr><td>5</td><td>Blue Jackets</td><td>2013</td><td>561</td><td></td><td></td></tr>
<tr><td>6</td><td>Canadiens</td><td>2008</td><td>560</td><td></td><td></td></tr>
<tr><td>7</td><td>Hurricanes</td><td>2008</td><td>554</td><td></td><td></td></tr>
<tr><td>8</td><td>New Jersey Devils</td><td>2024</td><td>463</td><td></td><td></td></tr>
<tr><td>9</td><td>Detroit Red Wings</td><td>2021</td><td>458</td><td></td><td></td></tr>
<tr><td>10</td><td>Toronto Maple Leafs</td><td>2021</td><td>453</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Washington Capitals</td><td>2016</td><td>168</td><td></td><td></td></tr>
<tr><td>2</td><td>Washington Capitals</td><td>2017</td><td>172</td><td></td><td></td></tr>
<tr><td>3</td><td>Panthers</td><td>2013</td><td>178</td><td></td><td></td></tr>
<tr><td>4</td><td>Rangers</td><td>2013</td><td>198</td><td></td><td></td></tr>
<tr><td>5</td><td>Coyotes</td><td>2013</td><td>207</td><td></td><td></td></tr>
<tr><td>6</td><td>Predators</td><td>2013</td><td>209</td><td></td><td></td></tr>
<tr><td>7</td><td>Buffalo Sabres</td><td>2015</td><td>274</td><td></td><td></td></tr>
<tr><td>8</td><td>New Jersey Devils</td><td>2022</td><td>274</td><td></td><td></td></tr>
<tr><td>9</td><td>Stars</td><td>2013</td><td>276</td><td></td><td></td></tr>
<tr><td>10</td><td>Pittsburgh Penguins</td><td>2020</td><td>278</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Canadiens</td><td>2008</td><td>535</td><td>33</td><td></td></tr>
<tr><td>2</td><td>Red Wings</td><td>2013</td><td>925</td><td>30</td><td></td></tr>
<tr><td>3</td><td>Oilers</td><td>2009</td><td>983</td><td>29</td><td></td></tr>
<tr><td>4</td><td>Blackhawks</td><td>2013</td><td>227</td><td>29</td><td></td></tr>
<tr><td>5</td><td>Blackhawks</td><td>2013</td><td>452</td><td>29</td><td></td></tr>
<tr><td>6</td><td>New Jersey Devils</td><td>2025</td><td>565</td><td>29</td><td><a href="GFHL-565.html">Game Direct Link</a></td></tr><tr><td>7</td><td>Vancouver Canucks</td><td>2025</td><td>764</td><td>29</td><td><a href="GFHL-764.html">Game Direct Link</a></td></tr><tr><td>8</td><td>Maple Leafs</td><td>2008</td><td>551</td><td>28</td><td></td></tr>
<tr><td>9</td><td>Kings</td><td>2008</td><td>1156</td><td>28</td><td></td></tr>
<tr><td>10</td><td>Coyotes</td><td>2010</td><td>1126</td><td>28</td><td></td></tr>

<tr><td colspan="6"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>2</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>3</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>4</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>5</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>6</td><td>New Jersey Devils</td><td>2024</td><td>739</td><td></td><td></td></tr>
<tr><td>7</td><td>Detroit Red Wings</td><td>2021</td><td>735</td><td></td><td></td></tr>
<tr><td>8</td><td>Toronto Maple Leafs</td><td>2021</td><td>722</td><td></td><td></td></tr>
<tr><td>9</td><td>Detroit Red Wings</td><td>2019</td><td>719</td><td></td><td></td></tr>
<tr><td>10</td><td>Montreal Canadiens</td><td>2024</td><td>709</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Game Points  in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Washington Capitals</td><td>2016</td><td>267</td><td></td><td></td></tr>
<tr><td>2</td><td>Washington Capitals</td><td>2017</td><td>282</td><td></td><td></td></tr>
<tr><td>3</td><td>Panthers</td><td>2013</td><td>296</td><td></td><td></td></tr>
<tr><td>4</td><td>Rangers</td><td>2013</td><td>325</td><td></td><td></td></tr>
<tr><td>5</td><td>Predators</td><td>2013</td><td>339</td><td></td><td></td></tr>
<tr><td>6</td><td>Coyotes</td><td>2013</td><td>345</td><td></td><td></td></tr>
<tr><td>7</td><td>Stars</td><td>2013</td><td>445</td><td></td><td></td></tr>
<tr><td>8</td><td>New Jersey Devils</td><td>2022</td><td>451</td><td></td><td></td></tr>
<tr><td>9</td><td>Pittsburgh Penguins</td><td>2020</td><td>458</td><td></td><td></td></tr>
<tr><td>10</td><td>Dallas Stars</td><td>2019</td><td>460</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Kings</td><td>2008</td><td>870</td><td>58</td><td></td></tr>
<tr><td>2</td><td>Canadiens</td><td>2008</td><td>535</td><td>57</td><td></td></tr>
<tr><td>3</td><td>San Jose Sharks</td><td>2025</td><td>124</td><td>56</td><td><a href="GFHL-124.html">Game Direct Link</a></td></tr><tr><td>4</td><td>Hurricanes</td><td>2009</td><td>561</td><td>55</td><td></td></tr>
<tr><td>5</td><td>Avalanche</td><td>2008</td><td>5</td><td>54</td><td></td></tr>
<tr><td>6</td><td>Canadiens</td><td>2008</td><td>434</td><td>54</td><td></td></tr>
<tr><td>7</td><td>Vegas Golden Knights</td><td>2017</td><td>771</td><td>54</td><td></td></tr>
<tr><td>8</td><td>Toronto Maple Leafs</td><td>2025</td><td>733</td><td>54</td><td><a href="GFHL-733.html">Game Direct Link</a></td></tr><tr><td>9</td><td>Blue Jackets</td><td>2012</td><td>1004</td><td>53</td><td></td></tr>
<tr><td>10</td><td>Montreal Canadiens</td><td>2018</td><td>199</td><td>53</td><td></td></tr>

<tr><td colspan="6"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Lightning</td><td>2010</td><td>2954</td><td></td><td></td></tr>
<tr><td>2</td><td>Blackhawks</td><td>2011</td><td>2923</td><td></td><td></td></tr>
<tr><td>3</td><td>Panthers</td><td>2010</td><td>2918</td><td></td><td></td></tr>
<tr><td>4</td><td>Lightning</td><td>2011</td><td>2909</td><td></td><td></td></tr>
<tr><td>5</td><td>Blue Jackets</td><td>2012</td><td>2903</td><td></td><td></td></tr>
<tr><td>6</td><td>Red Wings</td><td>2010</td><td>2901</td><td></td><td></td></tr>
<tr><td>7</td><td>Stars</td><td>2010</td><td>2859</td><td></td><td></td></tr>
<tr><td>8</td><td>Senators</td><td>2010</td><td>2834</td><td></td><td></td></tr>
<tr><td>9</td><td>Oilers</td><td>2010</td><td>2825</td><td></td><td></td></tr>
<tr><td>10</td><td>Avalanche</td><td>2010</td><td>2824</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Los Angeles Kings</td><td>2016</td><td>1410</td><td></td><td></td></tr>
<tr><td>2</td><td>Predators</td><td>2013</td><td>1580</td><td></td><td></td></tr>
<tr><td>3</td><td>Rangers</td><td>2013</td><td>1626</td><td></td><td></td></tr>
<tr><td>4</td><td>Sharks</td><td>2013</td><td>1672</td><td></td><td></td></tr>
<tr><td>5</td><td>Sabres</td><td>2009</td><td>1681</td><td></td><td></td></tr>
<tr><td>6</td><td>Washington Capitals</td><td>2016</td><td>1687</td><td></td><td></td></tr>
<tr><td>7</td><td>Penguins</td><td>2013</td><td>1709</td><td></td><td></td></tr>
<tr><td>8</td><td>Coyotes</td><td>2013</td><td>1717</td><td></td><td></td></tr>
<tr><td>9</td><td>Panthers</td><td>2013</td><td>1737</td><td></td><td></td></tr>
<tr><td>10</td><td>Bruins</td><td>2013</td><td>1824</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Nashville Predators</td><td>2017</td><td>691</td><td>30</td><td></td></tr>
<tr><td>2</td><td>Philadelphia Flyers</td><td>2025</td><td>204</td><td>30</td><td><a href="GFHL-204.html">Game Direct Link</a></td></tr><tr><td>3</td><td>Philadelphia Flyers</td><td>2025</td><td>453</td><td>30</td><td><a href="GFHL-453.html">Game Direct Link</a></td></tr><tr><td>4</td><td>Detroit Red Wings</td><td>2023</td><td>12</td><td>29</td><td></td></tr>
<tr><td>5</td><td>St.Louis Blues</td><td>2025</td><td>324</td><td>29</td><td><a href="GFHL-324.html">Game Direct Link</a></td></tr><tr><td>6</td><td>Blues</td><td>2011</td><td>1043</td><td>28</td><td></td></tr>
<tr><td>7</td><td>Blue Jackets</td><td>2012</td><td>678</td><td>27</td><td></td></tr>
<tr><td>8</td><td>New York Rangers</td><td>2024</td><td>1003</td><td>27</td><td></td></tr>
<tr><td>9</td><td>Seattle Kraken</td><td>2025</td><td>693</td><td>27</td><td><a href="GFHL-693.html">Game Direct Link</a></td></tr><tr><td>10</td><td>Flyers</td><td>2010</td><td>379</td><td>26</td><td></td></tr>

<tr><td colspan="6"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>2</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>3</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>4</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>5</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>6</td><td>Tampa Bay Lightning</td><td>2021</td><td>918</td><td></td><td></td></tr>
<tr><td>7</td><td>Anaheim Ducks</td><td>2018</td><td>917</td><td></td><td></td></tr>
<tr><td>8</td><td>Montreal Canadiens</td><td>2018</td><td>914</td><td></td><td></td></tr>
<tr><td>9</td><td>Colorado Avalanche</td><td>2019</td><td>910</td><td></td><td></td></tr>
<tr><td>10</td><td>Edmonton Oilers</td><td>2024</td><td>905</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Hurricanes</td><td>2009</td><td>518</td><td></td><td></td></tr>
<tr><td>2</td><td>Capitals</td><td>2009</td><td>549</td><td></td><td></td></tr>
<tr><td>3</td><td>Canadiens</td><td>2009</td><td>550</td><td></td><td></td></tr>
<tr><td>4</td><td>Blackhawks</td><td>2009</td><td>577</td><td></td><td></td></tr>
<tr><td>5</td><td>Flames</td><td>2009</td><td>581</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Flames</td><td>2010</td><td>2854</td><td></td><td></td></tr>
<tr><td>2</td><td>Flames</td><td>2012</td><td>2839</td><td></td><td></td></tr>
<tr><td>3</td><td>Avalanche</td><td>2010</td><td>2838</td><td></td><td></td></tr>
<tr><td>4</td><td>Avalanche</td><td>2011</td><td>2838</td><td></td><td></td></tr>
<tr><td>5</td><td>Blues</td><td>2011</td><td>2821</td><td></td><td></td></tr>
<tr><td>6</td><td>Wild</td><td>2010</td><td>2803</td><td></td><td></td></tr>
<tr><td>7</td><td>Sabres</td><td>2010</td><td>2790</td><td></td><td></td></tr>
<tr><td>8</td><td>Sabres</td><td>2011</td><td>2788</td><td></td><td></td></tr>
<tr><td>9</td><td>Panthers</td><td>2010</td><td>2784</td><td></td><td></td></tr>
<tr><td>10</td><td>Devils</td><td>2010</td><td>2781</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Lightning</td><td>2013</td><td>1753</td><td></td><td></td></tr>
<tr><td>2</td><td>Red Wings</td><td>2013</td><td>1759</td><td></td><td></td></tr>
<tr><td>3</td><td>Blackhawks</td><td>2013</td><td>1772</td><td></td><td></td></tr>
<tr><td>4</td><td>Stars</td><td>2013</td><td>1797</td><td></td><td></td></tr>
<tr><td>5</td><td>Kings</td><td>2013</td><td>1799</td><td></td><td></td></tr>
<tr><td>6</td><td>Maple Leafs</td><td>2013</td><td>1833</td><td></td><td></td></tr>
<tr><td>7</td><td>Jets</td><td>2013</td><td>1837</td><td></td><td></td></tr>
<tr><td>8</td><td>Canadiens</td><td>2009</td><td>1877</td><td></td><td></td></tr>
<tr><td>9</td><td>Senators</td><td>2013</td><td>1893</td><td></td><td></td></tr>
<tr><td>10</td><td>Capitals</td><td>2013</td><td>1936</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Oilers</td><td>2009</td><td>350</td><td>109</td><td></td></tr>
<tr><td>2</td><td>Devils</td><td>2011</td><td>722</td><td>107</td><td></td></tr>
<tr><td>3</td><td>Rangers</td><td>2011</td><td>1204</td><td>94</td><td></td></tr>
<tr><td>4</td><td>Sabres</td><td>2011</td><td>722</td><td>91</td><td></td></tr>
<tr><td>5</td><td>Senators</td><td>2010</td><td>94</td><td>85</td><td></td></tr>
<tr><td>6</td><td>Islanders</td><td>2011</td><td>522</td><td>85</td><td></td></tr>
<tr><td>7</td><td>Devils</td><td>2009</td><td>682</td><td>84</td><td></td></tr>
<tr><td>8</td><td>Rangers</td><td>2010</td><td>392</td><td>84</td><td></td></tr>
<tr><td>9</td><td>Rangers</td><td>2011</td><td>522</td><td>83</td><td></td></tr>
<tr><td>10</td><td>Oilers</td><td>2013</td><td>170</td><td>82</td><td></td></tr>

<tr><td colspan="6"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Rangers</td><td>2011</td><td>2460</td><td></td><td></td></tr>
<tr><td>2</td><td>Blues</td><td>2013</td><td>2303</td><td></td><td></td></tr>
<tr><td>3</td><td>Sabres</td><td>2010</td><td>2284</td><td></td><td></td></tr>
<tr><td>4</td><td>Rangers</td><td>2010</td><td>2208</td><td></td><td></td></tr>
<tr><td>5</td><td>Panthers</td><td>2010</td><td>1932</td><td></td><td></td></tr>
<tr><td>6</td><td>Blue Jackets</td><td>2013</td><td>1879</td><td></td><td></td></tr>
<tr><td>7</td><td>Panthers</td><td>2011</td><td>1774</td><td></td><td></td></tr>
<tr><td>8</td><td>Flyers</td><td>2010</td><td>1759</td><td></td><td></td></tr>
<tr><td>9</td><td>Ducks</td><td>2010</td><td>1726</td><td></td><td></td></tr>
<tr><td>10</td><td>Senators</td><td>2010</td><td>1685</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Ottawa Senators</td><td>2017</td><td>277</td><td></td><td></td></tr>
<tr><td>2</td><td>Winnipeg Jets</td><td>2022</td><td>296</td><td></td><td></td></tr>
<tr><td>3</td><td>Winnipeg Jets</td><td>2021</td><td>322</td><td></td><td></td></tr>
<tr><td>4</td><td>New Jersey Devils</td><td>2017</td><td>372</td><td></td><td></td></tr>
<tr><td>5</td><td>Ottawa Senators</td><td>2015</td><td>397</td><td></td><td></td></tr>
<tr><td>6</td><td>Colorado Avalanche</td><td>2020</td><td>400</td><td></td><td></td></tr>
<tr><td>7</td><td>Carolina Hurricanes</td><td>2021</td><td>423</td><td></td><td></td></tr>
<tr><td>8</td><td>Dallas Stars</td><td>2021</td><td>426</td><td></td><td></td></tr>
<tr><td>9</td><td>Winnipeg Jets</td><td>2023</td><td>439</td><td></td><td></td></tr>
<tr><td>10</td><td>New Jersey Devils</td><td>2019</td><td>442</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Ducks</td><td>2008</td><td>1072</td><td>48</td><td></td></tr>
<tr><td>2</td><td>New York Rangers</td><td>2021</td><td>452</td><td>48</td><td></td></tr>
<tr><td>3</td><td>Edmonton Oilers</td><td>2016</td><td>1218</td><td>46</td><td></td></tr>
<tr><td>4</td><td>New York Islanders</td><td>2014</td><td>698</td><td>45</td><td></td></tr>
<tr><td>5</td><td>Canucks</td><td>2013</td><td>392</td><td>44</td><td></td></tr>
<tr><td>6</td><td>Montreal Canadiens</td><td>2021</td><td>1000</td><td>44</td><td></td></tr>
<tr><td>7</td><td>Washington Capitals</td><td>2016</td><td>969</td><td>43</td><td></td></tr>
<tr><td>8</td><td>St.Louis Blues</td><td>2014</td><td>409</td><td>42</td><td></td></tr>
<tr><td>9</td><td>Detroit Red Wings</td><td>2015</td><td>1055</td><td>42</td><td></td></tr>
<tr><td>10</td><td>Ottawa Senators</td><td>2020</td><td>697</td><td>42</td><td></td></tr>

<tr><td colspan="6"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Blue Jackets</td><td>2010</td><td>1913</td><td></td><td></td></tr>
<tr><td>2</td><td>Colorado Avalanche</td><td>2014</td><td>1906</td><td></td><td></td></tr>
<tr><td>3</td><td>Panthers</td><td>2010</td><td>1901</td><td></td><td></td></tr>
<tr><td>4</td><td>Ottawa Senators</td><td>2020</td><td>1898</td><td></td><td></td></tr>
<tr><td>5</td><td>Canucks</td><td>2010</td><td>1892</td><td></td><td></td></tr>
<tr><td>6</td><td>San Jose Sharks</td><td>2015</td><td>1888</td><td></td><td></td></tr>
<tr><td>7</td><td>Washington Capitals</td><td>2018</td><td>1881</td><td></td><td></td></tr>
<tr><td>8</td><td>Vancouver Canucks</td><td>2015</td><td>1879</td><td></td><td></td></tr>
<tr><td>9</td><td>Chicago Blackhawks</td><td>2015</td><td>1876</td><td></td><td></td></tr>
<tr><td>10</td><td>Nashville Predators</td><td>2020</td><td>1876</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Penguins</td><td>2011</td><td>1093</td><td></td><td></td></tr>
<tr><td>2</td><td>Capitals</td><td>2011</td><td>1127</td><td></td><td></td></tr>
<tr><td>3</td><td>Flames</td><td>2011</td><td>1159</td><td></td><td></td></tr>
<tr><td>4</td><td>Ducks</td><td>2011</td><td>1175</td><td></td><td></td></tr>
<tr><td>5</td><td>Bruins</td><td>2012</td><td>1207</td><td></td><td></td></tr>
<tr><td>6</td><td>Red Wings</td><td>2011</td><td>1236</td><td></td><td></td></tr>
<tr><td>7</td><td>Panthers</td><td>2011</td><td>1237</td><td></td><td></td></tr>
<tr><td>8</td><td>Sabres</td><td>2011</td><td>1242</td><td></td><td></td></tr>
<tr><td>9</td><td>Blackhawks</td><td>2011</td><td>1242</td><td></td><td></td></tr>
<tr><td>10</td><td>Flyers</td><td>2011</td><td>1256</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Ottawa Senators</td><td>2024</td><td>10</td><td></td><td></td></tr>
<tr><td>2</td><td>Ottawa Senators</td><td>2023</td><td>9</td><td></td><td></td></tr>
<tr><td>3</td><td>St.Louis Blues</td><td>2024</td><td>9</td><td></td><td></td></tr>
<tr><td>4</td><td>Philadelphia Flyers</td><td>2015</td><td>8</td><td></td><td></td></tr>
<tr><td>5</td><td>Winnipeg Jets</td><td>2018</td><td>8</td><td></td><td></td></tr>
<tr><td>6</td><td>Dallas Stars</td><td>2014</td><td>7</td><td></td><td></td></tr>
<tr><td>7</td><td>Nashville Predators</td><td>2015</td><td>7</td><td></td><td></td></tr>
<tr><td>8</td><td>Washington Capitals</td><td>2018</td><td>7</td><td></td><td></td></tr>
<tr><td>9</td><td>Ottawa Senators</td><td>2020</td><td>7</td><td></td><td></td></tr>
<tr><td>10</td><td>Dallas Stars</td><td>2021</td><td>7</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Minnesota Wild</td><td>2023</td><td>30,10%</td><td></td><td></td></tr>
<tr><td>2</td><td>St.Louis Blues</td><td>2022</td><td>28,50%</td><td></td><td></td></tr>
<tr><td>3</td><td>St.Louis Blues</td><td>2014</td><td>28,40%</td><td></td><td></td></tr>
<tr><td>4</td><td>Buffalo Sabres</td><td>2022</td><td>28,30%</td><td></td><td></td></tr>
<tr><td>5</td><td>Utah Hockey Club</td><td>2024</td><td>28,20%</td><td></td><td></td></tr>
<tr><td>6</td><td>Wild</td><td>2011</td><td>28,10%</td><td></td><td></td></tr>
<tr><td>7</td><td>St.Louis Blues</td><td>2019</td><td>28,10%</td><td></td><td></td></tr>
<tr><td>8</td><td>Los Angeles Kings</td><td>2022</td><td>28,10%</td><td></td><td></td></tr>
<tr><td>9</td><td>Arizona Coyotes</td><td>2021</td><td>27,90%</td><td></td><td></td></tr>
<tr><td>10</td><td>Carolina Hurricanes</td><td>2018</td><td>27,70%</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Flyers</td><td>2013</td><td>88,50%</td><td></td><td></td></tr>
<tr><td>2</td><td>Kings</td><td>2010</td><td>88,30%</td><td></td><td></td></tr>
<tr><td>3</td><td>Lightning</td><td>2013</td><td>88,30%</td><td></td><td></td></tr>
<tr><td>4</td><td>Red Wings</td><td>2010</td><td>87,90%</td><td></td><td></td></tr>
<tr><td>5</td><td>Ducks</td><td>2013</td><td>87,40%</td><td></td><td></td></tr>
<tr><td>6</td><td>Senators</td><td>2013</td><td>87,30%</td><td></td><td></td></tr>
<tr><td>7</td><td>Islanders</td><td>2010</td><td>87,20%</td><td></td><td></td></tr>
<tr><td>8</td><td>Hurricanes</td><td>2009</td><td>86,60%</td><td></td><td></td></tr>
<tr><td>9</td><td>Capitals</td><td>2013</td><td>86,40%</td><td></td><td></td></tr>
<tr><td>10</td><td>Winnipeg Jets</td><td>2020</td><td>86,40%</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Rangers</td><td>2013</td><td>6,90%</td><td></td><td></td></tr>
<tr><td>2</td><td>Panthers</td><td>2013</td><td>10,30%</td><td></td><td></td></tr>
<tr><td>3</td><td>Coyotes</td><td>2013</td><td>10,70%</td><td></td><td></td></tr>
<tr><td>4</td><td>Montreal Canadiens</td><td>2016</td><td>10,70%</td><td></td><td></td></tr>
<tr><td>5</td><td>Sharks</td><td>2013</td><td>10,90%</td><td></td><td></td></tr>
<tr><td>6</td><td>Predators</td><td>2013</td><td>11,10%</td><td></td><td></td></tr>
<tr><td>7</td><td>Capitals</td><td>2013</td><td>11,50%</td><td></td><td></td></tr>
<tr><td>8</td><td>Thrashers</td><td>2010</td><td>12,10%</td><td></td><td></td></tr>
<tr><td>9</td><td>Flyers</td><td>2013</td><td>12,30%</td><td></td><td></td></tr>
<tr><td>10</td><td>Sabres</td><td>2013</td><td>12,50%</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Florida Panthers</td><td>2021</td><td>70,10%</td><td></td><td></td></tr>
<tr><td>2</td><td>Toronto Maple Leafs</td><td>2022</td><td>71,10%</td><td></td><td></td></tr>
<tr><td>3</td><td>San Jose Sharks</td><td>2014</td><td>71,40%</td><td></td><td></td></tr>
<tr><td>4</td><td>Colorado Avalanche</td><td>2022</td><td>71,40%</td><td></td><td></td></tr>
<tr><td>5</td><td>Arizona Coyotes</td><td>2023</td><td>71,70%</td><td></td><td></td></tr>
<tr><td>6</td><td>Blues</td><td>2011</td><td>72,10%</td><td></td><td></td></tr>
<tr><td>7</td><td>Pittsburgh Penguins</td><td>2023</td><td>72,10%</td><td></td><td></td></tr>
<tr><td>8</td><td>San Jose Sharks</td><td>2022</td><td>72,60%</td><td></td><td></td></tr>
<tr><td>9</td><td>Vegas Golden Knights</td><td>2022</td><td>72,70%</td><td></td><td></td></tr>
<tr><td>10</td><td>Columbus Blue Jackets</td><td>2019</td><td>72,80%</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Lightning</td><td>2013</td><td>67</td><td></td><td></td></tr>
<tr><td>2</td><td>Winnipeg Jets</td><td>2020</td><td>62</td><td></td><td></td></tr>
<tr><td>3</td><td>Blackhawks</td><td>2013</td><td>61</td><td></td><td></td></tr>
<tr><td>4</td><td>Blue Jackets</td><td>2013</td><td>60</td><td></td><td></td></tr>
<tr><td>5</td><td>Red Wings</td><td>2013</td><td>60</td><td></td><td></td></tr>
<tr><td>6</td><td>Hurricanes</td><td>2009</td><td>58</td><td></td><td></td></tr>
<tr><td>7</td><td>Detroit Red Wings</td><td>2022</td><td>57</td><td></td><td></td></tr>
<tr><td>8</td><td>Lightning</td><td>2011</td><td>56</td><td></td><td></td></tr>
<tr><td>9</td><td>Maple Leafs</td><td>2012</td><td>56</td><td></td><td></td></tr>
<tr><td>10</td><td>Winnipeg Jets</td><td>2021</td><td>56</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Stars</td><td>2008</td><td>13</td><td></td><td></td></tr>
<tr><td>2</td><td>Washington Capitals</td><td>2016</td><td>15</td><td></td><td></td></tr>
<tr><td>3</td><td>Sabres</td><td>2009</td><td>18</td><td></td><td></td></tr>
<tr><td>4</td><td>Coyotes</td><td>2013</td><td>18</td><td></td><td></td></tr>
<tr><td>5</td><td>Washington Capitals</td><td>2017</td><td>18</td><td></td><td></td></tr>
<tr><td>6</td><td>Panthers</td><td>2013</td><td>19</td><td></td><td></td></tr>
<tr><td>7</td><td>Predators</td><td>2013</td><td>19</td><td></td><td></td></tr>
<tr><td>8</td><td>Panthers</td><td>2008</td><td>20</td><td></td><td></td></tr>
<tr><td>9</td><td>Predators</td><td>2008</td><td>19</td><td></td><td></td></tr>
<tr><td>10</td><td>Wild</td><td>2008</td><td>16</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Washington Capitals</td><td>2016</td><td>67</td><td></td><td></td></tr>
<tr><td>2</td><td>Sabres</td><td>2009</td><td>64</td><td></td><td></td></tr>
<tr><td>3</td><td>Coyotes</td><td>2013</td><td>64</td><td></td><td></td></tr>
<tr><td>4</td><td>Washington Capitals</td><td>2017</td><td>64</td><td></td><td></td></tr>
<tr><td>5</td><td>Panthers</td><td>2013</td><td>63</td><td></td><td></td></tr>
<tr><td>6</td><td>Predators</td><td>2013</td><td>63</td><td></td><td></td></tr>
<tr><td>7</td><td>Stars</td><td>2008</td><td>60</td><td></td><td></td></tr>
<tr><td>8</td><td>Columbus Blue Jackets</td><td>2019</td><td>60</td><td></td><td></td></tr>
<tr><td>9</td><td>Bruins</td><td>2012</td><td>59</td><td></td><td></td></tr>
<tr><td>10</td><td>Edmonton Oilers</td><td>2023</td><td>57</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Lightning</td><td>2013</td><td>15</td><td></td><td></td></tr>
<tr><td>2</td><td>Winnipeg Jets</td><td>2020</td><td>20</td><td></td><td></td></tr>
<tr><td>3</td><td>Blackhawks</td><td>2013</td><td>21</td><td></td><td></td></tr>
<tr><td>4</td><td>Blue Jackets</td><td>2013</td><td>22</td><td></td><td></td></tr>
<tr><td>5</td><td>Red Wings</td><td>2013</td><td>22</td><td></td><td></td></tr>
<tr><td>6</td><td>Hurricanes</td><td>2009</td><td>24</td><td></td><td></td></tr>
<tr><td>7</td><td>Capitals</td><td>2008</td><td>25</td><td></td><td></td></tr>
<tr><td>8</td><td>Detroit Red Wings</td><td>2022</td><td>25</td><td></td><td></td></tr>
<tr><td>9</td><td>Lightning</td><td>2011</td><td>26</td><td></td><td></td></tr>
<tr><td>10</td><td>Maple Leafs</td><td>2012</td><td>26</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Lightning</td><td>2013</td><td>140</td><td></td><td></td></tr>
<tr><td>2</td><td>Winnipeg Jets</td><td>2020</td><td>129</td><td></td><td></td></tr>
<tr><td>3</td><td>Blackhawks</td><td>2013</td><td>126</td><td></td><td></td></tr>
<tr><td>4</td><td>Blue Jackets</td><td>2013</td><td>125</td><td></td><td></td></tr>
<tr><td>5</td><td>Red Wings</td><td>2013</td><td>125</td><td></td><td></td></tr>
<tr><td>6</td><td>Ottawa Senators</td><td>2016</td><td>123</td><td></td><td></td></tr>
<tr><td>7</td><td>Winnipeg Jets</td><td>2021</td><td>121</td><td></td><td></td></tr>
<tr><td>8</td><td>Maple Leafs</td><td>2012</td><td>120</td><td></td><td></td></tr>
<tr><td>9</td><td>Detroit Red Wings</td><td>2019</td><td>119</td><td></td><td></td></tr>
<tr><td>10</td><td>Colorado Avalanche</td><td>2020</td><td>119</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Washington Capitals</td><td>2016</td><td>35</td><td></td><td></td></tr>
<tr><td>2</td><td>Stars</td><td>2008</td><td>41</td><td></td><td></td></tr>
<tr><td>3</td><td>Sabres</td><td>2009</td><td>43</td><td></td><td></td></tr>
<tr><td>4</td><td>Los Angeles Kings</td><td>2016</td><td>44</td><td></td><td></td></tr>
<tr><td>5</td><td>Panthers</td><td>2013</td><td>46</td><td></td><td></td></tr>
<tr><td>6</td><td>Predators</td><td>2013</td><td>47</td><td></td><td></td></tr>
<tr><td>7</td><td>Panthers</td><td>2008</td><td>49</td><td></td><td></td></tr>
<tr><td>8</td><td>Predators</td><td>2008</td><td>50</td><td></td><td></td></tr>
<tr><td>9</td><td>Wild</td><td>2008</td><td>53</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>2</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>3</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>4</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>5</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>6</td><td>Detroit Red Wings</td><td>2019</td><td>25</td><td></td><td></td></tr>
<tr><td>7</td><td>Carolina Hurricanes</td><td>2020</td><td>25</td><td></td><td></td></tr>
<tr><td>8</td><td>Colorado Avalanche</td><td>2020</td><td>25</td><td></td><td></td></tr>
<tr><td>9</td><td>New Jersey Devils</td><td>2024</td><td>25</td><td></td><td></td></tr>
<tr><td>10</td><td>Buffalo Sabres</td><td>2018</td><td>24</td><td></td><td></td></tr>

<tr><td colspan="6"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>2</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>3</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>4</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>5</td><td></td><td>0</td><td>32000</td><td></td><td></td></tr>
<tr><td>6</td><td>St.Louis Blues</td><td>2019</td><td>26</td><td></td><td></td></tr>
<tr><td>7</td><td>Detroit Red Wings</td><td>2020</td><td>24</td><td></td><td></td></tr>
<tr><td>8</td><td>Winnipeg Jets</td><td>2021</td><td>24</td><td></td><td></td></tr>
<tr><td>9</td><td>Detroit Red Wings</td><td>2019</td><td>23</td><td></td><td></td></tr>
<tr><td>10</td><td>Boston Bruins</td><td>2021</td><td>23</td><td></td><td></td></tr>

</table>
<h1 class="STHSLeagueRecord_PlayersRecords">Players Records</h1>
<table class="STHSRecordPlayerGoalerTable">
<tr><td colspan="7"><b>Most Ice Time In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>James Wisniewski</td><td>Rangers</td><td>2010</td><td>530</td><td>35:51</td><td></td></tr>
<tr><td>2</td><td>Michal Rozsival</td><td>Rangers</td><td>2010</td><td>870</td><td>35:37</td><td></td></tr>
<tr><td>3</td><td>Douglas Murray</td><td>Bruins</td><td>2010</td><td>315</td><td>35:24</td><td></td></tr>
<tr><td>4</td><td>Michal Rozsival</td><td>Rangers</td><td>2010</td><td>1089</td><td>35:22</td><td></td></tr>
<tr><td>5</td><td>Dennis Seidenberg</td><td>Coyotes</td><td>2011</td><td>44</td><td>35:14</td><td></td></tr>
<tr><td>6</td><td>Marc Staal</td><td>Maple Leafs</td><td>2011</td><td>795</td><td>35:08</td><td></td></tr>
<tr><td>7</td><td>Niklas Kronwall</td><td>Vancouver Canucks</td><td>2014</td><td>529</td><td>34:58</td><td></td></tr>
<tr><td>8</td><td>Zdeno Chara</td><td>Blackhawks</td><td>2010</td><td>1034</td><td>34:54</td><td></td></tr>
<tr><td>9</td><td>Trevor Daley</td><td>Montreal Canadiens</td><td>2015</td><td>360</td><td>34:53</td><td></td></tr>
<tr><td>10</td><td>Mike Green</td><td>Canadiens</td><td>2011</td><td>603</td><td>34:50</td><td></td></tr>

<tr><td colspan="7"><b>Most Ice Time In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Shea Weber</td><td>Maple Leafs</td><td>2012</td><td>2104</td><td></td><td></td></tr>
<tr><td>2</td><td>Dion Phaneuf</td><td>Red Wings</td><td>2012</td><td>2080</td><td></td><td></td></tr>
<tr><td>3</td><td>Mark Streit</td><td>Islanders</td><td>2011</td><td>2073</td><td></td><td></td></tr>
<tr><td>4</td><td>Kevin Bieksa</td><td>Maple Leafs</td><td>2012</td><td>2062</td><td></td><td></td></tr>
<tr><td>5</td><td>Drew Doughty</td><td>Stars</td><td>2011</td><td>2061</td><td></td><td></td></tr>
<tr><td>6</td><td>Dan Boyle</td><td>Avalanche</td><td>2012</td><td>2041</td><td></td><td></td></tr>
<tr><td>7</td><td>Roman Josi</td><td>Minnesota Wild</td><td>2019</td><td>2039</td><td></td><td></td></tr>
<tr><td>8</td><td>Seth Jones</td><td>Washington Capitals</td><td>2019</td><td>2038</td><td></td><td></td></tr>
<tr><td>9</td><td>Thomas Chabot</td><td>Anaheim Ducks</td><td>2022</td><td>2037</td><td></td><td></td></tr>
<tr><td>10</td><td>Victor Hedman</td><td>Detroit Red Wings</td><td>2019</td><td>2036</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Goals In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Alex Ovechkin</td><td>Vancouver Canucks</td><td>2014</td><td>3</td><td>8</td><td></td></tr>
<tr><td>2</td><td>Jonathan Toews</td><td>Blackhawks</td><td>2013</td><td>306</td><td>6</td><td></td></tr>
<tr><td>3</td><td>Patrick Kane</td><td>Red Wings</td><td>2013</td><td>821</td><td>6</td><td></td></tr>
<tr><td>4</td><td>Rick Nash</td><td>Penguins</td><td>2013</td><td>890</td><td>6</td><td></td></tr>
<tr><td>5</td><td>Evander Kane</td><td>Red Wings</td><td>2012</td><td>101</td><td>5</td><td></td></tr>
<tr><td>6</td><td>Phil Kessel</td><td>Sharks</td><td>2012</td><td>598</td><td>5</td><td></td></tr>
<tr><td>7</td><td>Alexandre Burrows</td><td>Kings</td><td>2012</td><td>1171</td><td>5</td><td></td></tr>
<tr><td>8</td><td>Brad Marchand</td><td>Penguins</td><td>2013</td><td>25</td><td>5</td><td></td></tr>
<tr><td>9</td><td>Thomas Vanek</td><td>Blue Jackets</td><td>2013</td><td>168</td><td>5</td><td></td></tr>
<tr><td>10</td><td>Mike Cammalleri</td><td>Kings</td><td>2013</td><td>187</td><td>5</td><td></td></tr>

<tr><td colspan="7"><b>Most Goals In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Steven Stamkos</td><td>Ducks</td><td>2013</td><td>102</td><td></td><td></td></tr>
<tr><td>2</td><td>Jonathan Toews</td><td>Blackhawks</td><td>2013</td><td>100</td><td></td><td></td></tr>
<tr><td>3</td><td>Patrick Kane</td><td>Red Wings</td><td>2013</td><td>96</td><td></td><td></td></tr>
<tr><td>4</td><td>Derek Stepan</td><td>Blackhawks</td><td>2013</td><td>86</td><td></td><td></td></tr>
<tr><td>5</td><td>Andrew Ladd</td><td>Avalanche</td><td>2013</td><td>80</td><td></td><td></td></tr>
<tr><td>6</td><td>Ryan Getzlaf</td><td>Red Wings</td><td>2013</td><td>68</td><td></td><td></td></tr>
<tr><td>7</td><td>Chris Stewart</td><td>Ducks</td><td>2013</td><td>67</td><td></td><td></td></tr>
<tr><td>8</td><td>Jason Spezza</td><td>Lightning</td><td>2013</td><td>66</td><td></td><td></td></tr>
<tr><td>9</td><td>Nathan MacKinnon</td><td>Detroit Red Wings</td><td>2019</td><td>65</td><td></td><td></td></tr>
<tr><td>10</td><td>Steven Stamkos</td><td>Ducks</td><td>2012</td><td>62</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Assists In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Pavel Datsyuk</td><td>Vancouver Canucks</td><td>2014</td><td>3</td><td>7</td><td></td></tr>
<tr><td>2</td><td>Martin St. Louis</td><td>Islanders</td><td>2011</td><td>473</td><td>6</td><td></td></tr>
<tr><td>3</td><td>Derek Stepan</td><td>Blackhawks</td><td>2013</td><td>306</td><td>6</td><td></td></tr>
<tr><td>4</td><td>Pavel Datsyuk</td><td>Canucks</td><td>2013</td><td>1169</td><td>6</td><td></td></tr>
<tr><td>5</td><td>Pavel Datsyuk</td><td>Canucks</td><td>2013</td><td>1204</td><td>6</td><td></td></tr>
<tr><td>6</td><td>Anze Kopitar</td><td>Philadelphia Flyers</td><td>2025</td><td>840</td><td>6</td><td><a href="GFHL-840.html">Game Direct Link</a></td></tr><tr><td>7</td><td>Filip Kuba</td><td>Sabres</td><td>2008</td><td>799</td><td>5</td><td></td></tr>
<tr><td>8</td><td>Stephen Weiss</td><td>Red Wings</td><td>2008</td><td>1098</td><td>5</td><td></td></tr>
<tr><td>9</td><td>Henrik Zetterberg</td><td>Maple Leafs</td><td>2009</td><td>1150</td><td>5</td><td></td></tr>
<tr><td>10</td><td>Ryan Getzlaf</td><td>Red Wings</td><td>2010</td><td>34</td><td>5</td><td></td></tr>

<tr><td colspan="7"><b>Most Assists In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Ryan Getzlaf</td><td>Red Wings</td><td>2013</td><td>104</td><td></td><td></td></tr>
<tr><td>2</td><td>Jonathan Toews</td><td>Blackhawks</td><td>2013</td><td>99</td><td></td><td></td></tr>
<tr><td>3</td><td>Steven Stamkos</td><td>Ducks</td><td>2013</td><td>99</td><td></td><td></td></tr>
<tr><td>4</td><td>Brad Richards</td><td>Avalanche</td><td>2013</td><td>97</td><td></td><td></td></tr>
<tr><td>5</td><td>Derek Stepan</td><td>Blackhawks</td><td>2013</td><td>96</td><td></td><td></td></tr>
<tr><td>6</td><td>Patrick Kane</td><td>Red Wings</td><td>2013</td><td>92</td><td></td><td></td></tr>
<tr><td>7</td><td>Steven Stamkos</td><td>Ducks</td><td>2012</td><td>81</td><td></td><td></td></tr>
<tr><td>8</td><td>Andrew Ladd</td><td>Avalanche</td><td>2013</td><td>81</td><td></td><td></td></tr>
<tr><td>9</td><td>Jonathan Toews</td><td>Blackhawks</td><td>2012</td><td>76</td><td></td><td></td></tr>
<tr><td>10</td><td>Saku Koivu</td><td>Predators</td><td>2011</td><td>74</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Points In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Alex Ovechkin</td><td>Vancouver Canucks</td><td>2014</td><td>3</td><td>9</td><td></td></tr>
<tr><td>2</td><td>Jonathan Toews</td><td>Blackhawks</td><td>2013</td><td>227</td><td>8</td><td></td></tr>
<tr><td>3</td><td>Jonathan Toews</td><td>Blackhawks</td><td>2013</td><td>452</td><td>8</td><td></td></tr>
<tr><td>4</td><td>Derek Stepan</td><td>Blackhawks</td><td>2013</td><td>452</td><td>8</td><td></td></tr>
<tr><td>5</td><td>Rick Nash</td><td>Penguins</td><td>2013</td><td>890</td><td>8</td><td></td></tr>
<tr><td>6</td><td>Steven Stamkos</td><td>Ducks</td><td>2013</td><td>919</td><td>8</td><td></td></tr>
<tr><td>7</td><td>Pavel Datsyuk</td><td>Vancouver Canucks</td><td>2014</td><td>3</td><td>8</td><td></td></tr>
<tr><td>8</td><td>Martin St. Louis</td><td>Islanders</td><td>2011</td><td>473</td><td>7</td><td></td></tr>
<tr><td>9</td><td>Mikhail Grabovski</td><td>Wild</td><td>2011</td><td>1158</td><td>7</td><td></td></tr>
<tr><td>10</td><td>Jeff Carter</td><td>Kings</td><td>2013</td><td>105</td><td>7</td><td></td></tr>

<tr><td colspan="7"><b>Most Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Steven Stamkos</td><td>Ducks</td><td>2013</td><td>201</td><td></td><td></td></tr>
<tr><td>2</td><td>Jonathan Toews</td><td>Blackhawks</td><td>2013</td><td>199</td><td></td><td></td></tr>
<tr><td>3</td><td>Patrick Kane</td><td>Red Wings</td><td>2013</td><td>188</td><td></td><td></td></tr>
<tr><td>4</td><td>Derek Stepan</td><td>Blackhawks</td><td>2013</td><td>182</td><td></td><td></td></tr>
<tr><td>5</td><td>Ryan Getzlaf</td><td>Red Wings</td><td>2013</td><td>172</td><td></td><td></td></tr>
<tr><td>6</td><td>Andrew Ladd</td><td>Avalanche</td><td>2013</td><td>161</td><td></td><td></td></tr>
<tr><td>7</td><td>Steven Stamkos</td><td>Ducks</td><td>2012</td><td>143</td><td></td><td></td></tr>
<tr><td>8</td><td>Chris Stewart</td><td>Ducks</td><td>2013</td><td>138</td><td></td><td></td></tr>
<tr><td>9</td><td>Nathan MacKinnon</td><td>Detroit Red Wings</td><td>2019</td><td>138</td><td></td><td></td></tr>
<tr><td>10</td><td>Michael Ryder</td><td>Avalanche</td><td>2013</td><td>134</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Justin Faulk</td><td>Rangers</td><td>2013</td><td>1106</td><td>19</td><td></td></tr>
<tr><td>2</td><td>Milan Lucic</td><td>Oilers</td><td>2011</td><td>864</td><td>17</td><td></td></tr>
<tr><td>3</td><td>Mike Richards</td><td>Flyers</td><td>2010</td><td>220</td><td>15</td><td></td></tr>
<tr><td>4</td><td>Claude Giroux</td><td>Flyers</td><td>2010</td><td>858</td><td>15</td><td></td></tr>
<tr><td>5</td><td>Daniel Alfredsson</td><td>Bruins</td><td>2011</td><td>816</td><td>15</td><td></td></tr>
<tr><td>6</td><td>David Backes</td><td>Dallas Stars</td><td>2014</td><td>674</td><td>15</td><td></td></tr>
<tr><td>7</td><td>Sam Reinhart</td><td>Boston Bruins</td><td>2020</td><td>524</td><td>15</td><td></td></tr>
<tr><td>8</td><td>Nathan Horton</td><td>Islanders</td><td>2010</td><td>373</td><td>14</td><td></td></tr>
<tr><td>9</td><td>John Tavares</td><td>Wild</td><td>2011</td><td>356</td><td>14</td><td></td></tr>
<tr><td>10</td><td>Henrik Zetterberg</td><td>Blue Jackets</td><td>2011</td><td>362</td><td>14</td><td></td></tr>

<tr><td colspan="7"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Nathan MacKinnon</td><td>Detroit Red Wings</td><td>2019</td><td>457</td><td></td><td></td></tr>
<tr><td>2</td><td>Patrick Sharp</td><td>Lightning</td><td>2011</td><td>437</td><td></td><td></td></tr>
<tr><td>3</td><td>Steven Stamkos</td><td>Ducks</td><td>2012</td><td>435</td><td></td><td></td></tr>
<tr><td>4</td><td>Milan Hejduk</td><td>Panthers</td><td>2010</td><td>429</td><td></td><td></td></tr>
<tr><td>5</td><td>Alexandre Burrows</td><td>Kings</td><td>2012</td><td>407</td><td></td><td></td></tr>
<tr><td>6</td><td>Patric Hornqvist</td><td>Nashville Predators</td><td>2018</td><td>396</td><td></td><td></td></tr>
<tr><td>7</td><td>Daniel Sedin</td><td>Maple Leafs</td><td>2012</td><td>388</td><td></td><td></td></tr>
<tr><td>8</td><td>Max Pacioretty</td><td>Devils</td><td>2011</td><td>384</td><td></td><td></td></tr>
<tr><td>9</td><td>Steven Stamkos</td><td>Ducks</td><td>2011</td><td>384</td><td></td><td></td></tr>
<tr><td>10</td><td>Henrik Zetterberg</td><td>Maple Leafs</td><td>2008</td><td>381</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Shaone Morrisonn</td><td>Panthers</td><td>2009</td><td>420</td><td>11</td><td></td></tr>
<tr><td>2</td><td>Kyle Quincey</td><td>Maple Leafs</td><td>2010</td><td>536</td><td>9</td><td></td></tr>
<tr><td>3</td><td>Andrej Sekera</td><td>Capitals</td><td>2011</td><td>389</td><td>9</td><td></td></tr>
<tr><td>4</td><td>Jonathan Ericsson</td><td>Vancouver Canucks</td><td>2015</td><td>934</td><td>9</td><td></td></tr>
<tr><td>5</td><td>Ron Hainsey</td><td>New York Rangers</td><td>2018</td><td>245</td><td>9</td><td></td></tr>
<tr><td>6</td><td>Erik Karlsson</td><td>Ottawa Senators</td><td>2021</td><td>510</td><td>9</td><td></td></tr>
<tr><td>7</td><td>Joseph Corvo</td><td>Lightning</td><td>2008</td><td>71</td><td>8</td><td></td></tr>
<tr><td>8</td><td>Braydon Coburn</td><td>Canucks</td><td>2008</td><td>198</td><td>8</td><td></td></tr>
<tr><td>9</td><td>Andrej Meszaros</td><td>Blue Jackets</td><td>2008</td><td>261</td><td>8</td><td></td></tr>
<tr><td>10</td><td>Mark Stuart</td><td>Sabres</td><td>2009</td><td>661</td><td>8</td><td></td></tr>

<tr><td colspan="7"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Duncan Keith</td><td>Flames</td><td>2012</td><td>134</td><td></td><td></td></tr>
<tr><td>2</td><td>Chris Pronger</td><td>Capitals</td><td>2010</td><td>133</td><td></td><td></td></tr>
<tr><td>3</td><td>Keith Yandle</td><td>Kings</td><td>2011</td><td>133</td><td></td><td></td></tr>
<tr><td>4</td><td>Ryan McDonagh</td><td>Chicago Blackhawks</td><td>2018</td><td>133</td><td></td><td></td></tr>
<tr><td>5</td><td>Alex Pietrangelo</td><td>Dallas Stars</td><td>2024</td><td>133</td><td></td><td></td></tr>
<tr><td>6</td><td>Willie Mitchell</td><td>Blues</td><td>2011</td><td>132</td><td></td><td></td></tr>
<tr><td>7</td><td>Andy Greene</td><td>Stars</td><td>2008</td><td>131</td><td></td><td></td></tr>
<tr><td>8</td><td>Dennis Seidenberg</td><td>Coyotes</td><td>2010</td><td>131</td><td></td><td></td></tr>
<tr><td>9</td><td>Lubomir Visnovsky</td><td>Maple Leafs</td><td>2011</td><td>131</td><td></td><td></td></tr>
<tr><td>10</td><td>Carl Gunnarsson</td><td>Avalanche</td><td>2010</td><td>130</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Plus Minus In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Alex Ovechkin</td><td>Vancouver Canucks</td><td>2014</td><td>3</td><td>7</td><td></td></tr>
<tr><td>2</td><td>Pavel Datsyuk</td><td>Vancouver Canucks</td><td>2014</td><td>3</td><td>7</td><td></td></tr>
<tr><td>3</td><td>Anton Lundell</td><td>Ottawa Senators</td><td>2025</td><td>57</td><td>7</td><td><a href="GFHL-57.html">Game Direct Link</a></td></tr><tr><td>4</td><td>Nikolaj Ehlers</td><td>Ottawa Senators</td><td>2025</td><td>57</td><td>7</td><td><a href="GFHL-57.html">Game Direct Link</a></td></tr><tr><td>5</td><td>Seth Jarvis</td><td>Ottawa Senators</td><td>2025</td><td>57</td><td>7</td><td><a href="GFHL-57.html">Game Direct Link</a></td></tr><tr><td>6</td><td>Jarret Stoll</td><td>Bruins</td><td>2010</td><td>506</td><td>6</td><td></td></tr>
<tr><td>7</td><td>Martin Erat</td><td>Bruins</td><td>2010</td><td>506</td><td>6</td><td></td></tr>
<tr><td>8</td><td>Jeff Carter</td><td>Kings</td><td>2013</td><td>105</td><td>6</td><td></td></tr>
<tr><td>9</td><td>Jeff Carter</td><td>Kings</td><td>2013</td><td>187</td><td>6</td><td></td></tr>
<tr><td>10</td><td>Mike Cammalleri</td><td>Kings</td><td>2013</td><td>187</td><td>6</td><td></td></tr>

<tr><td colspan="7"><b>Most Plus Minus In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Patrick Kane</td><td>Red Wings</td><td>2013</td><td>98</td><td></td><td></td></tr>
<tr><td>2</td><td>James van Riemsdyk</td><td>Red Wings</td><td>2013</td><td>95</td><td></td><td></td></tr>
<tr><td>3</td><td>Jonathan Toews</td><td>Blackhawks</td><td>2013</td><td>84</td><td></td><td></td></tr>
<tr><td>4</td><td>Ryan Getzlaf</td><td>Red Wings</td><td>2013</td><td>84</td><td></td><td></td></tr>
<tr><td>5</td><td>Derek Stepan</td><td>Blackhawks</td><td>2013</td><td>83</td><td></td><td></td></tr>
<tr><td>6</td><td>Andrew Ladd</td><td>Avalanche</td><td>2013</td><td>81</td><td></td><td></td></tr>
<tr><td>7</td><td>Brad Richards</td><td>Avalanche</td><td>2013</td><td>79</td><td></td><td></td></tr>
<tr><td>8</td><td>Michael Ryder</td><td>Avalanche</td><td>2013</td><td>76</td><td></td><td></td></tr>
<tr><td>9</td><td>Jason Spezza</td><td>Lightning</td><td>2013</td><td>66</td><td></td><td></td></tr>
<tr><td>10</td><td>Alexander Edler</td><td>Red Wings</td><td>2013</td><td>55</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Worse Plus Minus In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Craig Rivet</td><td>Devils</td><td>2010</td><td>428</td><td>-6</td><td></td></tr>
<tr><td>2</td><td>Martin Erat</td><td>Bruins</td><td>2011</td><td>598</td><td>-6</td><td></td></tr>
<tr><td>3</td><td>Brent Burns</td><td>Maple Leafs</td><td>2013</td><td>185</td><td>-6</td><td></td></tr>
<tr><td>4</td><td>Ray Whitney</td><td>Maple Leafs</td><td>2013</td><td>185</td><td>-6</td><td></td></tr>
<tr><td>5</td><td>Tomas Plekanec</td><td>Maple Leafs</td><td>2013</td><td>185</td><td>-6</td><td></td></tr>
<tr><td>6</td><td>Matt Hunwick</td><td>Panthers</td><td>2013</td><td>452</td><td>-6</td><td></td></tr>
<tr><td>7</td><td>Chad Billins</td><td>Panthers</td><td>2013</td><td>452</td><td>-6</td><td></td></tr>
<tr><td>8</td><td>Mike Cammalleri</td><td>Kings</td><td>2013</td><td>488</td><td>-6</td><td></td></tr>
<tr><td>9</td><td>Jason Demers</td><td>Kings</td><td>2013</td><td>842</td><td>-6</td><td></td></tr>
<tr><td>10</td><td>Ryan Suter</td><td>Chicago Blackhawks</td><td>2017</td><td>632</td><td>-6</td><td></td></tr>

<tr><td colspan="7"><b>Worse Plus Minus In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Rob Scuderi</td><td>Panthers</td><td>2013</td><td>-58</td><td></td><td></td></tr>
<tr><td>2</td><td>Matt Hunwick</td><td>Senators</td><td>2013</td><td>-53</td><td></td><td></td></tr>
<tr><td>3</td><td>Brian Pothier</td><td>Panthers</td><td>2008</td><td>-50</td><td></td><td></td></tr>
<tr><td>4</td><td>Alexander Steen</td><td>Rangers</td><td>2013</td><td>-50</td><td></td><td></td></tr>
<tr><td>5</td><td>Henrik Sedin</td><td>Maple Leafs</td><td>2013</td><td>-50</td><td></td><td></td></tr>
<tr><td>6</td><td>Ron Hainsey</td><td>Sharks</td><td>2013</td><td>-46</td><td></td><td></td></tr>
<tr><td>7</td><td>Shane O'Brien</td><td>Panthers</td><td>2008</td><td>-45</td><td></td><td></td></tr>
<tr><td>8</td><td>Andy Greene</td><td>Stars</td><td>2008</td><td>-41</td><td></td><td></td></tr>
<tr><td>9</td><td>Daniel Sedin</td><td>Panthers</td><td>2013</td><td>-40</td><td></td><td></td></tr>
<tr><td>10</td><td>Cam Fowler</td><td>Pittsburgh Penguins</td><td>2024</td><td>-39</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Brandon Crombeen</td><td>Panthers</td><td>2013</td><td>579</td><td>46</td><td></td></tr>
<tr><td>2</td><td>Scott Hartnell</td><td>Bruins</td><td>2011</td><td>950</td><td>44</td><td></td></tr>
<tr><td>3</td><td>Austin Watson</td><td>Vegas Golden Knights</td><td>2019</td><td>262</td><td>44</td><td></td></tr>
<tr><td>4</td><td>Sean Avery</td><td>Rangers</td><td>2011</td><td>1204</td><td>41</td><td></td></tr>
<tr><td>5</td><td>Steve Ott</td><td>Blues</td><td>2013</td><td>918</td><td>41</td><td></td></tr>
<tr><td>6</td><td>Derek Dorsett</td><td>Panthers</td><td>2012</td><td>907</td><td>39</td><td></td></tr>
<tr><td>7</td><td>Zack Kassian</td><td>Kings</td><td>2013</td><td>105</td><td>39</td><td></td></tr>
<tr><td>8</td><td>Mark Fraser</td><td>Blue Jackets</td><td>2013</td><td>219</td><td>39</td><td></td></tr>
<tr><td>9</td><td>Scott Hartnell</td><td>Bruins</td><td>2013</td><td>1092</td><td>39</td><td></td></tr>
<tr><td>10</td><td>Brandon Crombeen</td><td>Panthers</td><td>2013</td><td>1112</td><td>39</td><td></td></tr>

<tr><td colspan="7"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Mark Fraser</td><td>Blue Jackets</td><td>2013</td><td>757</td><td></td><td></td></tr>
<tr><td>2</td><td>Brandon Crombeen</td><td>Panthers</td><td>2013</td><td>565</td><td></td><td></td></tr>
<tr><td>3</td><td>Sean Avery</td><td>Rangers</td><td>2011</td><td>552</td><td></td><td></td></tr>
<tr><td>4</td><td>Steve Ott</td><td>Blues</td><td>2013</td><td>526</td><td></td><td></td></tr>
<tr><td>5</td><td>Derek Dorsett</td><td>Panthers</td><td>2012</td><td>522</td><td></td><td></td></tr>
<tr><td>6</td><td>Ryane Clowe</td><td>Senators</td><td>2013</td><td>517</td><td></td><td></td></tr>
<tr><td>7</td><td>Adam McQuaid</td><td>Rangers</td><td>2011</td><td>425</td><td></td><td></td></tr>
<tr><td>8</td><td>Corey Perry</td><td>Blues</td><td>2013</td><td>422</td><td></td><td></td></tr>
<tr><td>9</td><td>Chris Neil</td><td>Coyotes</td><td>2013</td><td>420</td><td></td><td></td></tr>
<tr><td>10</td><td>Sean Avery</td><td>Rangers</td><td>2010</td><td>402</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Luke Schenn</td><td>Senators</td><td>2013</td><td>521</td><td>12</td><td></td></tr>
<tr><td>2</td><td>Ryan O'Byrne</td><td>Flames</td><td>2008</td><td>696</td><td>11</td><td></td></tr>
<tr><td>3</td><td>Brenden Morrow</td><td>Penguins</td><td>2008</td><td>771</td><td>11</td><td></td></tr>
<tr><td>4</td><td>Mike Komisarek</td><td>Canadiens</td><td>2008</td><td>863</td><td>11</td><td></td></tr>
<tr><td>5</td><td>Nick Boynton</td><td>Coyotes</td><td>2008</td><td>1096</td><td>11</td><td></td></tr>
<tr><td>6</td><td>Derian Hatcher</td><td>Avalanche</td><td>2008</td><td>1131</td><td>11</td><td></td></tr>
<tr><td>7</td><td>Zdeno Chara</td><td>Canadiens</td><td>2013</td><td>46</td><td>11</td><td></td></tr>
<tr><td>8</td><td>Dmitry Kulikov</td><td>Canucks</td><td>2013</td><td>392</td><td>10</td><td></td></tr>
<tr><td>9</td><td>Troy Brouwer</td><td>Flames</td><td>2013</td><td>545</td><td>10</td><td></td></tr>
<tr><td>10</td><td>Troy Brouwer</td><td>Flames</td><td>2013</td><td>856</td><td>10</td><td></td></tr>

<tr><td colspan="7"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Brenden Morrow</td><td>Penguins</td><td>2008</td><td>299</td><td></td><td></td></tr>
<tr><td>2</td><td>Zdeno Chara</td><td>Blackhawks</td><td>2008</td><td>280</td><td></td><td></td></tr>
<tr><td>3</td><td>Brenden Morrow</td><td>Penguins</td><td>2009</td><td>270</td><td></td><td></td></tr>
<tr><td>4</td><td>Brooks Orpik</td><td>Maple Leafs</td><td>2009</td><td>267</td><td></td><td></td></tr>
<tr><td>5</td><td>Doug Murray</td><td>Bruins</td><td>2008</td><td>257</td><td></td><td></td></tr>
<tr><td>6</td><td>Brady Tkachuk</td><td>Montreal Canadiens</td><td>2022</td><td>235</td><td></td><td></td></tr>
<tr><td>7</td><td>Evander Kane</td><td>New York Rangers</td><td>2020</td><td>215</td><td></td><td></td></tr>
<tr><td>8</td><td>Jacob Trouba</td><td>Colorado Avalanche</td><td>2020</td><td>198</td><td></td><td></td></tr>
<tr><td>9</td><td>Evander Kane</td><td>Boston Bruins</td><td>2019</td><td>197</td><td></td><td></td></tr>
<tr><td>10</td><td>Tom Wilson</td><td>Calgary Flames</td><td>2023</td><td>197</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Mathieu Perreault</td><td>Tampa Bay Lightning</td><td>2014</td><td>5</td><td></td><td></td></tr>
<tr><td>2</td><td>Filip Forsberg</td><td>Arizona Coyotes</td><td>2015</td><td>4</td><td></td><td></td></tr>
<tr><td>3</td><td>Patrick Sharp</td><td>Philadelphia Flyers</td><td>2016</td><td>4</td><td></td><td></td></tr>
<tr><td>4</td><td>Patric Hornqvist</td><td>Nashville Predators</td><td>2017</td><td>4</td><td></td><td></td></tr>
<tr><td>5</td><td>Filip Forsberg</td><td>Nashville Predators</td><td>2019</td><td>4</td><td></td><td></td></tr>
<tr><td>6</td><td>Timo Meier</td><td>Boston Bruins</td><td>2020</td><td>4</td><td></td><td></td></tr>
<tr><td>7</td><td>Connor Brown</td><td>Winnipeg Jets</td><td>2020</td><td>4</td><td></td><td></td></tr>
<tr><td>8</td><td>Andrew Mangiapane</td><td>Anaheim Ducks</td><td>2021</td><td>4</td><td></td><td></td></tr>
<tr><td>9</td><td>Dillon Dube</td><td>New Jersey Devils</td><td>2023</td><td>4</td><td></td><td></td></tr>
<tr><td>10</td><td>Jason Pominville</td><td>Lightning</td><td>2012</td><td>3</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Most Hat Trick In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Patrick Kane</td><td>Red Wings</td><td>2013</td><td>15</td><td></td><td></td></tr>
<tr><td>2</td><td>Jonathan Toews</td><td>Blackhawks</td><td>2013</td><td>14</td><td></td><td></td></tr>
<tr><td>3</td><td>Steven Stamkos</td><td>Ducks</td><td>2013</td><td>13</td><td></td><td></td></tr>
<tr><td>4</td><td>Derek Stepan</td><td>Blackhawks</td><td>2013</td><td>10</td><td></td><td></td></tr>
<tr><td>5</td><td>Andrew Ladd</td><td>Avalanche</td><td>2013</td><td>8</td><td></td><td></td></tr>
<tr><td>6</td><td>Jeff Carter</td><td>Kings</td><td>2013</td><td>8</td><td></td><td></td></tr>
<tr><td>7</td><td>Thomas Vanek</td><td>Blue Jackets</td><td>2013</td><td>8</td><td></td><td></td></tr>
<tr><td>8</td><td>Steven Stamkos</td><td>Ducks</td><td>2012</td><td>7</td><td></td><td></td></tr>
<tr><td>9</td><td>Chris Stewart</td><td>Ducks</td><td>2013</td><td>5</td><td></td><td></td></tr>
<tr><td>10</td><td>Jason Spezza</td><td>Lightning</td><td>2013</td><td>5</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Best Faceoff in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Jeff Carter</td><td>Calgary Flames</td><td>2022</td><td>63,10%</td><td></td><td></td></tr>
<tr><td>2</td><td>Vernon Fiddler</td><td>Dallas Stars</td><td>2015</td><td>62,10%</td><td></td><td></td></tr>
<tr><td>3</td><td>Auston Matthews</td><td>Buffalo Sabres</td><td>2022</td><td>62,00%</td><td></td><td></td></tr>
<tr><td>4</td><td>Leon Draisaitl</td><td>Arizona Coyotes</td><td>2023</td><td>61,90%</td><td></td><td></td></tr>
<tr><td>5</td><td>Ryan Johansen</td><td>New York Rangers</td><td>2024</td><td>61,60%</td><td></td><td></td></tr>
<tr><td>6</td><td>Paul Gaustad</td><td>Stars</td><td>2013</td><td>61,30%</td><td></td><td></td></tr>
<tr><td>7</td><td>Jordan Staal</td><td>Montreal Canadiens</td><td>2024</td><td>61,30%</td><td></td><td></td></tr>
<tr><td>8</td><td>David Krejci</td><td>Carolina Hurricanes</td><td>2021</td><td>61,00%</td><td></td><td></td></tr>
<tr><td>9</td><td>John Tavares</td><td>Minnesota Wild</td><td>2020</td><td>60,80%</td><td></td><td></td></tr>
<tr><td>10</td><td>Rod Brind'Amour</td><td>Blackhawks</td><td>2008</td><td>60,60%</td><td></td><td></td></tr>

</table>
<h1 class="STHSLeagueRecord_GoaliesRecords">Goalies Records</h1>
<table class="STHSRecordTable">
<tr><td colspan="7"><b>Shutout In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Antti Niemi</td><td>Lightning</td><td>2013</td><td>11</td><td></td><td></td></tr>
<tr><td>2</td><td>Henrik Lundqvist</td><td>Rangers</td><td>2013</td><td>9</td><td></td><td></td></tr>
<tr><td>3</td><td>Tomas Vokoun</td><td>Maple Leafs</td><td>2009</td><td>8</td><td></td><td></td></tr>
<tr><td>4</td><td>Jimmy Howard</td><td>Blue Jackets</td><td>2013</td><td>7</td><td></td><td></td></tr>
<tr><td>5</td><td>Ryan Miller</td><td>Flyers</td><td>2013</td><td>7</td><td></td><td></td></tr>
<tr><td>6</td><td>Martin Brodeur</td><td>Devils</td><td>2008</td><td>6</td><td></td><td></td></tr>
<tr><td>7</td><td>Jose Theodore</td><td>Sharks</td><td>2009</td><td>6</td><td></td><td></td></tr>
<tr><td>8</td><td>Pekka Rinne</td><td>Flames</td><td>2009</td><td>6</td><td></td><td></td></tr>
<tr><td>9</td><td>Roberto Luongo</td><td>Islanders</td><td>2009</td><td>6</td><td></td><td></td></tr>
<tr><td>10</td><td>Darcy Kuemper</td><td>Detroit Red Wings</td><td>2022</td><td>6</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Shots Received In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Pekka Rinne</td><td>Flames</td><td>2012</td><td>2685</td><td></td><td></td></tr>
<tr><td>2</td><td>Marc-Andre Fleury</td><td>Blackhawks</td><td>2011</td><td>2683</td><td></td><td></td></tr>
<tr><td>3</td><td>Jonathan Quick</td><td>Panthers</td><td>2010</td><td>2677</td><td></td><td></td></tr>
<tr><td>4</td><td>Jonathan Quick</td><td>Panthers</td><td>2012</td><td>2674</td><td></td><td></td></tr>
<tr><td>5</td><td>Evgeni Nabokov</td><td>Canucks</td><td>2011</td><td>2587</td><td></td><td></td></tr>
<tr><td>6</td><td>Kari Lehtonen</td><td>Coyotes</td><td>2011</td><td>2583</td><td></td><td></td></tr>
<tr><td>7</td><td>Tomas Vokoun</td><td>Stars</td><td>2010</td><td>2579</td><td></td><td></td></tr>
<tr><td>8</td><td>Henrik Lundqvist</td><td>Rangers</td><td>2010</td><td>2558</td><td></td><td></td></tr>
<tr><td>9</td><td>Cam Ward</td><td>Oilers</td><td>2010</td><td>2546</td><td></td><td></td></tr>
<tr><td>10</td><td>Carey Price</td><td>Canadiens</td><td>2011</td><td>2536</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Ilya Bryzgalov</td><td>Hurricanes</td><td>2009</td><td>56</td><td></td><td></td></tr>
<tr><td>2</td><td>Jaroslav Halak</td><td>Maple Leafs</td><td>2012</td><td>56</td><td></td><td></td></tr>
<tr><td>3</td><td>Niklas Backstrom</td><td>Red Wings</td><td>2013</td><td>56</td><td></td><td></td></tr>
<tr><td>4</td><td>Tim Thomas</td><td>Lightning</td><td>2011</td><td>55</td><td></td><td></td></tr>
<tr><td>5</td><td>Marc-Andre Fleury</td><td>Blackhawks</td><td>2012</td><td>55</td><td></td><td></td></tr>
<tr><td>6</td><td>Mike Smith</td><td>Lightning</td><td>2012</td><td>52</td><td></td><td></td></tr>
<tr><td>7</td><td>Marc-Andre Fleury</td><td>Blackhawks</td><td>2011</td><td>50</td><td></td><td></td></tr>
<tr><td>8</td><td>Kari Lehtonen</td><td>Coyotes</td><td>2012</td><td>50</td><td></td><td></td></tr>
<tr><td>9</td><td>Jonathan Quick</td><td>Panthers</td><td>2010</td><td>49</td><td></td><td></td></tr>
<tr><td>10</td><td>Henrik Lundqvist</td><td>Rangers</td><td>2011</td><td>49</td><td></td><td></td></tr>

<tr><td colspan="7"><b>Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Player Name</td><td class="STHSW200">Team Name</td><td class="STHSW50">Year</td><td class="STHSW75">Value</td><td></td><td></td></tr>
<tr><td>1</td><td>Josh Harding</td><td>Stars</td><td>2012</td><td>46</td><td></td><td></td></tr>
<tr><td>2</td><td>Jimmy Howard</td><td>Washington Capitals</td><td>2016</td><td>44</td><td></td><td></td></tr>
<tr><td>3</td><td>Kari Lehtonen</td><td>Coyotes</td><td>2011</td><td>42</td><td></td><td></td></tr>
<tr><td>4</td><td>Evgeni Nabokov</td><td>Canucks</td><td>2009</td><td>41</td><td></td><td></td></tr>
<tr><td>5</td><td>Evgeni Nabokov</td><td>Canucks</td><td>2008</td><td>40</td><td></td><td></td></tr>
<tr><td>6</td><td>Jean-Sebastien Giguere</td><td>Senators</td><td>2009</td><td>40</td><td></td><td></td></tr>
<tr><td>7</td><td>Brian Elliott</td><td>Flyers</td><td>2011</td><td>40</td><td></td><td></td></tr>
<tr><td>8</td><td>Carey Price</td><td>Canadiens</td><td>2011</td><td>40</td><td></td><td></td></tr>
<tr><td>9</td><td>Alex Auld</td><td>Wild</td><td>2008</td><td>39</td><td></td><td></td></tr>
<tr><td>10</td><td>Ray Emery</td><td>Stars</td><td>2009</td><td>39</td><td></td><td></td></tr>

</table>
<h1 class="STHSLeagueRecord_GameRecords">Game Records</h1>
<table class="STHSRecordPlayerGoalerTable">
<tr><td colspan="7"><b>Most Goals</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Home Team Name</td><td class="STHSW200">Visitor Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Winnipeg Jets</td><td>Tampa Bay Lightning</td><td>2014</td><td>103</td><td>17</td><td></td></tr>
<tr><td>2</td><td>Washington Capitals</td><td>Calgary Flames</td><td>2025</td><td>1009</td><td>17</td><td><a href="GFHL-1009.html">Game Direct Link</a></td></tr><tr><td>3</td><td>Kings</td><td>Sharks</td><td>2013</td><td>187</td><td>16</td><td></td></tr>
<tr><td>4</td><td>Carolina Hurricanes</td><td>Washington Capitals</td><td>2024</td><td>1193</td><td>16</td><td></td></tr>
<tr><td>5</td><td>New Jersey Devils</td><td>Buffalo Sabres</td><td>2025</td><td>565</td><td>16</td><td><a href="GFHL-565.html">Game Direct Link</a></td></tr><tr><td>6</td><td>Penguins</td><td>Capitals</td><td>2008</td><td>324</td><td>15</td><td></td></tr>
<tr><td>7</td><td>Islanders</td><td>Canadiens</td><td>2008</td><td>535</td><td>15</td><td></td></tr>
<tr><td>8</td><td>Islanders</td><td>Rangers</td><td>2011</td><td>50</td><td>15</td><td></td></tr>
<tr><td>9</td><td>Wild</td><td>Blues</td><td>2011</td><td>283</td><td>15</td><td></td></tr>
<tr><td>10</td><td>Wild</td><td>Panthers</td><td>2011</td><td>1158</td><td>15</td><td></td></tr>

<tr><td colspan="7"><b>Most Assists</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Home Team Name</td><td class="STHSW200">Visitor Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Islanders</td><td>Canadiens</td><td>2008</td><td>535</td><td>30</td><td></td></tr>
<tr><td>2</td><td>Penguins</td><td>Capitals</td><td>2008</td><td>324</td><td>28</td><td></td></tr>
<tr><td>3</td><td>Winnipeg Jets</td><td>Tampa Bay Lightning</td><td>2014</td><td>103</td><td>28</td><td></td></tr>
<tr><td>4</td><td>Lightning</td><td>Capitals</td><td>2008</td><td>558</td><td>27</td><td></td></tr>
<tr><td>5</td><td>Islanders</td><td>Rangers</td><td>2011</td><td>50</td><td>27</td><td></td></tr>
<tr><td>6</td><td>Carolina Hurricanes</td><td>Washington Capitals</td><td>2024</td><td>1193</td><td>27</td><td></td></tr>
<tr><td>7</td><td>New Jersey Devils</td><td>Buffalo Sabres</td><td>2025</td><td>565</td><td>27</td><td><a href="GFHL-565.html">Game Direct Link</a></td></tr><tr><td>8</td><td>Washington Capitals</td><td>Calgary Flames</td><td>2025</td><td>1009</td><td>27</td><td><a href="GFHL-1009.html">Game Direct Link</a></td></tr><tr><td>9</td><td>Nashville Predators</td><td>Anaheim Ducks</td><td>2018</td><td>360</td><td>26</td><td></td></tr>
<tr><td>10</td><td>Tampa Bay Lightning</td><td>Dallas Stars</td><td>2024</td><td>325</td><td>26</td><td></td></tr>

<tr><td colspan="7"><b>Most Points</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Home Team Name</td><td class="STHSW200">Visitor Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Islanders</td><td>Canadiens</td><td>2008</td><td>535</td><td>45</td><td></td></tr>
<tr><td>2</td><td>Winnipeg Jets</td><td>Tampa Bay Lightning</td><td>2014</td><td>103</td><td>45</td><td></td></tr>
<tr><td>3</td><td>Washington Capitals</td><td>Calgary Flames</td><td>2025</td><td>1009</td><td>44</td><td><a href="GFHL-1009.html">Game Direct Link</a></td></tr><tr><td>4</td><td>Penguins</td><td>Capitals</td><td>2008</td><td>324</td><td>43</td><td></td></tr>
<tr><td>5</td><td>Carolina Hurricanes</td><td>Washington Capitals</td><td>2024</td><td>1193</td><td>43</td><td></td></tr>
<tr><td>6</td><td>New Jersey Devils</td><td>Buffalo Sabres</td><td>2025</td><td>565</td><td>43</td><td><a href="GFHL-565.html">Game Direct Link</a></td></tr><tr><td>7</td><td>Islanders</td><td>Rangers</td><td>2011</td><td>50</td><td>42</td><td></td></tr>
<tr><td>8</td><td>Lightning</td><td>Capitals</td><td>2008</td><td>558</td><td>41</td><td></td></tr>
<tr><td>9</td><td>Kings</td><td>Sharks</td><td>2013</td><td>187</td><td>41</td><td></td></tr>
<tr><td>10</td><td>Tampa Bay Lightning</td><td>Dallas Stars</td><td>2024</td><td>325</td><td>41</td><td></td></tr>

<tr><td colspan="7"><b>Most Shots</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Home Team Name</td><td class="STHSW200">Visitor Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Minnesota Wild</td><td>Toronto Maple Leafs</td><td>2025</td><td>1060</td><td>96</td><td><a href="GFHL-1060.html">Game Direct Link</a></td></tr><tr><td>2</td><td>Philadelphia Flyers</td><td>Colorado Avalanche</td><td>2025</td><td>453</td><td>95</td><td><a href="GFHL-453.html">Game Direct Link</a></td></tr><tr><td>3</td><td>Blue Jackets</td><td>Avalanche</td><td>2010</td><td>229</td><td>93</td><td></td></tr>
<tr><td>4</td><td>Toronto Maple Leafs</td><td>Buffalo Sabres</td><td>2025</td><td>132</td><td>93</td><td><a href="GFHL-132.html">Game Direct Link</a></td></tr><tr><td>5</td><td>New York Rangers</td><td>Buffalo Sabres</td><td>2021</td><td>275</td><td>92</td><td></td></tr>
<tr><td>6</td><td>Devils</td><td>Predators</td><td>2012</td><td>879</td><td>91</td><td></td></tr>
<tr><td>7</td><td>Calgary Flames</td><td>St.Louis Blues</td><td>2021</td><td>743</td><td>91</td><td></td></tr>
<tr><td>8</td><td>Vegas Golden Knights</td><td>Boston Bruins</td><td>2024</td><td>1101</td><td>91</td><td></td></tr>
<tr><td>9</td><td>Oilers</td><td>Blackhawks</td><td>2011</td><td>759</td><td>90</td><td></td></tr>
<tr><td>10</td><td>Columbus Blue Jackets</td><td>New York Rangers</td><td>2024</td><td>1062</td><td>90</td><td></td></tr>

<tr><td colspan="7"><b>Most Pim</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Home Team Name</td><td class="STHSW200">Visitor Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Devils</td><td>Sabres</td><td>2011</td><td>722</td><td>198</td><td></td></tr>
<tr><td>2</td><td>Oilers</td><td>Kings</td><td>2009</td><td>350</td><td>172</td><td></td></tr>
<tr><td>3</td><td>Rangers</td><td>Islanders</td><td>2011</td><td>522</td><td>168</td><td></td></tr>
<tr><td>4</td><td>Rangers</td><td>Senators</td><td>2010</td><td>392</td><td>152</td><td></td></tr>
<tr><td>5</td><td>Sabres</td><td>Canucks</td><td>2010</td><td>249</td><td>145</td><td></td></tr>
<tr><td>6</td><td>Kings</td><td>Oilers</td><td>2013</td><td>170</td><td>144</td><td></td></tr>
<tr><td>7</td><td>New York Rangers</td><td>New Jersey Devils</td><td>2023</td><td>1198</td><td>144</td><td></td></tr>
<tr><td>8</td><td>Sabres</td><td>Senators</td><td>2010</td><td>94</td><td>136</td><td></td></tr>
<tr><td>9</td><td>Rangers</td><td>Devils</td><td>2009</td><td>682</td><td>134</td><td></td></tr>
<tr><td>10</td><td>Penguins</td><td>Rangers</td><td>2011</td><td>1204</td><td>130</td><td></td></tr>

<tr><td colspan="7"><b>Most Hits</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW200">Home Team Name</td><td class="STHSW200">Visitor Team Name</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW120">Link</td></tr>
<tr><td>1</td><td>Coyotes</td><td>Ducks</td><td>2008</td><td>1072</td><td>81</td><td></td></tr>
<tr><td>2</td><td>Boston Bruins</td><td>Montreal Canadiens</td><td>2021</td><td>1000</td><td>78</td><td></td></tr>
<tr><td>3</td><td>New York Islanders</td><td>New York Rangers</td><td>2014</td><td>698</td><td>75</td><td></td></tr>
<tr><td>4</td><td>Arizona Coyotes</td><td>New York Rangers</td><td>2021</td><td>452</td><td>75</td><td></td></tr>
<tr><td>5</td><td>Columbus Blue Jackets</td><td>Detroit Red Wings</td><td>2015</td><td>1055</td><td>73</td><td></td></tr>
<tr><td>6</td><td>St.Louis Blues</td><td>Florida Panthers</td><td>2014</td><td>409</td><td>70</td><td></td></tr>
<tr><td>7</td><td>Washington Capitals</td><td>Calgary Flames</td><td>2019</td><td>219</td><td>70</td><td></td></tr>
<tr><td>8</td><td>Philadelphia Flyers</td><td>Colorado Avalanche</td><td>2023</td><td>707</td><td>70</td><td></td></tr>
<tr><td>9</td><td>Rangers</td><td>Islanders</td><td>2008</td><td>554</td><td>69</td><td></td></tr>
<tr><td>10</td><td>Columbus Blue Jackets</td><td>San Jose Sharks</td><td>2015</td><td>305</td><td>69</td><td></td></tr>

</table>
<?php include "Footer.php";?>
