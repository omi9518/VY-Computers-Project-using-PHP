
<?php  
 $connect = mysqli_connect("localhost", "root", "", "VYCOMP");  
 $sql = "SELECT * FROM om";  
 $result = mysqli_query($connect, $sql);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Admin Panel</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
           <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> 
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container">  
                <h3><center>VY computers</h3><br />                 
                <div class="table-responsive">  
                <table class="table table-striped table-dark">
                <thead>
                <a href=LoginForm.php>logoout</a>
    <tr>
    <th scope="col">SNo</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Address</th>
      <th scope="col">Problem</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
                          <?php  
                          if(mysqli_num_rows($result) > 0)  
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {  
                          ?>  
                          <tr>  
                          <td><?php echo $row["id"]; ?></td>  
                               <td><?php echo $row["fname"]; ?></td>  
                               <td><?php echo $row["email"]; ?></td>  
                               <td><?php echo $row["contact"];?></td> 
                               <td><?php echo $row["addr"];?></td>  
                               <td><?php echo $row["Problem"];?></td>  
                               <td>
                                   <button class="btn btn-danger text-white"><a style="color:white"; href="delete.php ?id=<?php echo $row["id"]; ?>">Delete</a>
                              </td>   
                          </tr>  
                         
                          <?php  
                               }  
                               
                          }  
                          
                          ?>   
                          
                     </table>  
                </div>  
           </div>  
           <br />  
      </body>  
 </html>  



 