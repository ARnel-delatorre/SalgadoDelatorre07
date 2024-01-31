<?php 
session_start();



?>


 

<?php include('header.php') ?>

            <div class="jumbotron text-center">

                <div class="container">

                    <div class="row">

                        <div class="col-md-12">

                            <h2>

                                <span><a href="index.php" class="btn btn-success " style="float: left;">HOME</a></span>

                            ADMIN LOGIN

                            </h2>

                        </div>

                    </div>

                </div>

            </div>

            <div class="">

                <div class="container">

                    <div class="row">

                        <div class="col-md-6 col-md-offset-3 jumbotron">

                            <form action="arnel.php"  method="post" >

                              <div class="form-group">

                                  Username:<input type="text" class="form-control" name="user" placeholder=" Enter Username" required>

                              </div>

                            <div class="form-group">

                                  Password:<input type="password" class="form-control" name="password" placeholder="Enter Password" required>

                            </div>

                              <div class="form-group">

                                  <input type="submit" name="login" value="LOGIN" class="btn btn-success btn-block text-center" > 

                              </div> 

                            </form>

                        </div>

                    </div>

                </div>

            </div>

          
<center><?php
        if(isset($_GET['msg'])){
                
               echo $_GET['msg']; 
                
                }
        
        
        ?>


<?php include('footer.php') ?>





