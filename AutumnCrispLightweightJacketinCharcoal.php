<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Madam Boutique</title>Fawn Color Kurti<link rel="shortcut icon" href="logo/12.png">


    
    <link href="css/stylesheet.css" rel="stylesheet">
   
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-picZoomer.css">
    
    <style type="text/css">

    .piclist{
        margin-top: 30px;
    }
    .piclist li{
        display: inline-block;
        width: 50px;
        height: 50px;
    }
    .piclist li img{
        width: 100%;
        height: auto;
    }

    /* custom style */
    .picZoomer-pic-wp,
    .picZoomer-zoom-wp{
        border: 1px solid #fff;
    }


    </style>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="src/jquery.picZoomer.js"></script>
    <script type="text/javascript">
        $(function() {
            $('.picZoomer').picZoomer();


            //切换图片
            $('.piclist li').on('click',function(event){
                var $pic = $(this).find('img');
                $('.picZoomer-pic').attr('src',$pic.attr('src'));
            });
        });
    </script>
</head>

<body>
<a href="index.html"><div id="logo"></div> </a>
<div id="nav">
    	<div id="navbar">
        	<ul>
            	<li><a href="index.html">Home</a></li>
                <li><a href="men.html"> Men </a></li>
                <li><a href="women.html"> Women </span></a></li>
                <li><a href="Newcollection2015.html">New Collection 2017</a></li>
                <li><a href="comparison.html">Comparison</a></li>  <li><a href="aboutus.php">About Us</a></li>
            </ul>
       	</div>
    </div><div id="maindiv">
<div id="DesignerJacket"><div class="picZoomer">
        <img src="img/women/26.jpg" height="700" width="400" alt="">
    </div>

    <ul class="piclist">
        <li><img src="img/women/25.jpg" alt=""></li>
        <li><img src="img/women/27.jpg" alt=""></li>
     
      
       
    </ul>
   
    
</div>
 <div id="detailsproduct">
    <p style="font-size:36px; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight:bold;"> Autumn Crisp Lightweight in Charcoal<span style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:16px;"> $39.00</span></p>
    <h2 style="font-weight:bold; font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif"> Product details </h2>
    <p style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:18px;">FABRIC: jinsy stuff</p>
    <h2  style="font-weight:bold; font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif;"> Size </h2>
    <p style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-family:21px;"> Small <br> Medium <br> Large </p>
    <p style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-family:21px;">Of course we all need that one piece in our wardrobe that is infinitely wearable! Breakfast, lunch or dinner, this fawn colored shade is a timeless look that will never go out of fashion. This shirt is figure flattering with long sleeves, a flared hemline and little chain link detailing on the neckline. Throw it on over your best pair of trousers for an effortlessly elegant look!</p>

</div>
    
    </div>
    
    
    
    
    

<div id="footer" align="center">

<table>
<tr>
<td><a href="aboutus.php"> <span> About Us </span>  </a></td>
<td> | </td>
<td> <a href="termsandconditions.php"> <span> Terms & Condition  </span> </a> </td>
<td> | </td>
<td><a href="ContactUs.php"><span> Contact Us </span></a></td>
</tr>
</table>

</div>
<div style="background-color:#CCC; width:100%; height:30px;">
	<div align="center" style="width:auto; height:auto; margin:auto;">
    	Copyright © 2017,Impressions Online MADAM Clothing Boutique
    </div>
</div>
</body>
</html>
