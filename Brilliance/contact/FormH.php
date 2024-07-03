<!DOCTYPE html>
<html>
<head>
<title>Form page</title>

<link rel="stylesheet" href="form.css">

</head>
<body>

<form action="PackageFormH.php" method="post">
<table>
<mark>

</mark>
<tr><th><lable>Customer Name :</lable><br><br></th>
<th><input type="text" name="CustomerName"><br><br></th>
<th><lable>Contact Number :</lable><br><br></th>
<th><input type="text" name="ContactNumber"><br><br></th>
</tr>
<tr>
<th>  Homecomming</th>
</tr>

<tr>
<th>Album</th>
<td><br><lable>Size</lable><br><br>
<ul>
<li><input type="radio" name="asize" value="8 X 29">    8 X 29</li>
<li><input type="radio" name="asize" value="10 X 20">  10 X 20</li>
<li><input type="radio" name="asize" value="10 X 24">  10 X 24</li>
<li><input type="radio" name="asize" value="12 X 16">  12 X 16</li>
<li><input type="radio" name="asize" value="12 X 18">  12 X 18</li>
<li><input type="radio" name="asize" value="12 X 24">  12 X 24</li>
</ul>
<br></td>
<td><br><lable>Pages</lable><br><br>
<ul>
<li><input type="radio" name="apage" value="10">  10</li>
<li><input type="radio" name="apage" value="20">  20</li>
<li><input type="radio" name="apage" value="30">  30</li>
<li><input type="radio" name="apage" value="40">  40</li>
<li><input type="radio" name="apage" value="50">  50</li>
<li><input type="radio" name="apage" value="60">  60</li>
</ul>
<br>
</td>


<td><br><lable>Lamination</lable><br><br>
<ul>
<li><input type="radio" name="alamination" value="Glass">  Glass</li>
<li><input type="radio" name="alamination" value="Matle">  Matle</li>
<li><input type="radio" name="alamination" value="Silky matle">  Silky matle</li>
<li><input type="radio" name="alamination" value="Velvet">  Velvet</li>
<li><input type="radio" name="alamination" value="Sard glass">  Sard glass</li>
<li><input type="radio" name="alamination" value="Metalic">  Metalic</li>
</ul>
<br>
</td>
<td><br><lable>Album casing</lable><br><br>
<ul>
<li><input type="radio" name="acasing" value="Album bag">  Album bag</li>
<li><input type="radio" name="acasing" value="Album box">  Album box</li>

</ul>
</td>
</tr>

<tr>
<th>Enlargement</th>
<td><br><lable>Size</lable><br><br>
<ul>
<li><input type="radio" name="esize" value="8 X 12">    8 X 12</li>
<li><input type="radio" name="esize" value="10 X 15">  10 X 15</li>
<li><input type="radio" name="esize" value="12 X 18">  12 X 18</li>
<li><input type="radio" name="esize" value="16 X 24">  16 X 24</li>
<li><input type="radio" name="esize" value="20 X 30">  20 X 30</li>
</ul>
</td>

<td><br><lable>Type</lable><br><br>
<ul>
<li><input type="radio" name="etype" value="White box frame">  White box frame</li>
<li><input type="radio" name="etype" value="Wooden frame">  Wooden frame</li>
<li><input type="radio" name="etype" value="Black frame">  Black frame</li>
<li><input type="radio" name="etype" value="Fiber">  Fiber</li>
<li></li>
</ul>
<br>
</td>
<td></td>
<td><br><lable>Quantity</lable><br><br>
<ul>
<li><input type="Text" name="eQuantity"></li>
Minimum - 1 <br>Maximum - 6
</ul>
<br><br><br>
</td>
</tr>

<tr>
<th>Thank you card</th>
<td><br><lable>Size</lable><br><br>
<ul>
<li><input type="radio" name="tcsize" value="4 X 6">  4 X 6</li>
<li><input type="radio" name="tcsize" value="4 X 8">  4 X 8</li>
<li><input type="radio" name="tcsize" value="5 X 7">  5 X 7</li>
<li><input type="radio" name="tcsize" value="5 X 8">  5 X 8</li>
<li><input type="radio" name="tcsize" value="6 X 6">  6 X 6</li>
<li><input type="radio" name="tcsize" value="6 X 8">  6 X 8</li>
</ul>
</td>

<td></td>
<td></td>
<td><br><lable>Quantity</lable><br><br>
<ul>
<li><input type="text" name="tcQuantity"></li>

Minimum - 50 <br>Maximum - 300
</ul>
</td><td></td><td></td><td></td>
<td><br><br><br><br><br><br><br><br>
<input type="submit" name="submit" value="Send"></a></td>
<td><br><br><br><br><br><br><br><br>
<div class="Link">
<h3><a href = "PachageFormLink.php" >Back</a></h3>
</div></td>
</tr>
</table>
</form>
</body>
</html>