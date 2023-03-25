<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

      button {
        height: 50px;
        width: 100px;
        background-color: green;
        color: white;
      }
      button:hover{
        
        box-shadow: 5px 5px 5px lightgray;

      
        background-color: red;

      }

      input {
        height: 20px;
        width: 300px;
        

      }
      input:hover {

       border: solid lightgray;
      box-shadow: 5px 5px 5px lightgray;
      }
    

    </style>
</head>
<body>
  <center>
    <p>This is main page</p>
<form method="post" action="add_book.php">
<div class="container">
  <div class="row box">
     <div class="col">
  <label for="name">Name:</label>
  </div>
  <div class="col">
  <input type="text" name="name" id="name" required><br>
  </div>
   </div>

    <div class="row">
     <div class="col">
  <label for="subject">Subject </label>
  </div>
  <div class="cool">
  <input type="text" name="subject" id="name" required><br>
  </div>
   </div>
  
   <div class="row">
     <div class="col">
  <label for="author">Author</label>
  </div>
  <div class="col">
  <input type="text" name="author" id="name" required><br>
  </div>
   </div>


  <div class="row">
     <div class="col">
  <label for="price">Price</label>
  </div>
  <div class="col">
  <input type="int" name="price" id="name" required><br>
  </div>
  </div>
  </div>
   
   <br>
   
  <button>submit</button>
 
</center>
</form>
</body>
</html>

