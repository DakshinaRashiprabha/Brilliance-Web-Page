<!DOCTYPE html>
<html>
<head>
<title>Form page</title>

<link rel="stylesheet" href="form.css">

</head>
<body>

<form action="PackageFormW.php" method="post">
<table>
<mark>

</mark>
<tr><th><lable>Customer Name :</lable><br><br></th>
<th><input type="text" name="CustomerName"><br><br></th>
</tr>
<tr>
<th>  Wedding</th>
</tr>

<tr>
<th>Album</th>
<td><br><lable>Size</lable><br><br>
<ul>
<li><input type="radio" name="asize"  >    8 X 29</li>
<li><input type="radio" name="asize" >  10 X 20</li>
<li><input type="radio" name="asize" >  10 X 24</li>
<li><input type="radio" name="asize" >  12 X 16</li>
<li><input type="radio" name="asize" >  12 X 18</li>
<li><input type="radio" name="asize" >  12 X 24</li>
</ul>
<br></td>
<td><br><lable>Pages</lable><br><br>
<ul>
<li><input type="radio" name="apage" >  10</li>
<li><input type="radio" name="apage">  20</li>
<li><input type="radio" name="apage">  30</li>
<li><input type="radio" name="apage">  40</li>
<li><input type="radio" name="apage">  50</li>
<li><input type="radio" name="apage">  60</li>
</ul>
<br>
</td>

<td><br><lable>Lamination</lable><br><br>
<ul>
<li><input type="radio" name="alamination">  Glass</li>
<li><input type="radio" name="alamination">  Matle</li>
<li><input type="radio" name="alamination">  Silky matle</li>
<li><input type="radio" name="alamination">  Velvet</li>
<li><input type="radio" name="alamination">  Sard glass</li>
<li><input type="radio" name="alamination">  Metalic</li>
</ul>
<br>
</td>
<td><br><lable>Album casing</lable><br><br>
<ul>
<li><input type="radio" name="acasing">  Album bag</li>
<li><input type="radio" name="acasing">  Album box</li>
</ul>
</td>
</tr>

<tr>
<th>Enlargement</th>
<td><br><lable>Size</lable><br><br>
<ul>
<li><input type="radio" name="esize">    8 X 12</li>
<li><input type="radio" name="esize">  10 X 15</li>
<li><input type="radio" name="esize">  12 X 18</li>
<li><input type="radio" name="esize">  16 X 24</li>
<li><input type="radio" name="esize">  20 X 30</li>
</ul>
</td>

<td><br><lable>Type</lable><br><br>
<ul>
<li><input type="radio" name="etype">  White box frame</li>
<li><input type="radio" name="etype">  Wooden frame</li>
<li><input type="radio" name="etype">  Black frame</li>
<li><input type="radio" name="etype">  Fiber</li>
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
<li><input type="radio" name="tcsize" >  4 X 6</li>
<li><input type="radio" name="tcsize" >  4 X 8</li>
<li><input type="radio" name="tcsize" >  5 X 7</li>
<li><input type="radio" name="tcsize" >  5 X 8</li>
<li><input type="radio" name="tcsize" >  6 X 6</li>
<li><input type="radio" name="tcsize" >  6 X 8</li>
</ul>
</td>

<td></td>
<td></td>
<td><br><lable>Quantity</lable><br><br>
<ul>
<li><input type="Text" name="tcQuantity"></li>
Minimum - 50 <br>Maximum - 300
</ul>
</td><td></td><td></td><td></td>
<td><br><br><br><br><br><br><br><br>
<a href= "https://wa.me/+94740147044">
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