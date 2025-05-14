<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
         ProductName  
         <select name="product" id="">
            <?php
            $con=mysqli_connect("localhost","root","","student_record");
            $query=mysqli_query($con,"select * from product");
            while($row=mysqli_fetch_array($query)){
                ?>
            <option value="<?php echo$row[0]?>"><?php echo $row[1]?></option>
            <?php
        }?>  
         </select> 

         Quantity <input type="number" name="quantity">
         date <input type="date" name="date">
         Price <input type="number" name="price" value="500" readonly>
         <input type="submit" name="submit" value="Record">
    </form>
    <?php
    $con=mysqli_connect("localhost","root","","student_record");
    if(isset($_POST['submit'])){
        $pname=$_POST['product'];
        $quantity=$_POST['quantity'];
        $date=$_POST['date'];
        $price=$_POST['price'];
        $total=$quantity*$price;
        $add=mysqli_query($con,"insert into stockin values('','$pname','$quantity','$date','$price','$total')");
    }
    
    ?><table border=1>
        <tr>
            <td>ProductName</td>
            <td>Quantity</td>
            <td>Date</td>
            <td>Price</td>
            <td>TotalPrice</td>


        </tr>
        <tr>
            <?php
                $con=mysqli_connect("localhost","root","","student_record");
      $select=mysqli_query($con,"select * from product,stockin where product.pid=stockin.pid");
      while($row=mysqli_fetch_array($select)){
           echo"<tr>";
           echo"<td>".$row['pname']."</td>";
           echo"<td>".$row['quantity']."</td>";
           echo"<td>".$row['date']."</td>";
           echo"<td>".$row['price']."</td>";
           echo"<td>".$row['totalPrice']."</td>";




      }
            ?>
        </tr>

    </table>
</body>
</html>