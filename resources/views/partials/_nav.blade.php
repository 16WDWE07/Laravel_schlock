<nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Schlocktoberfest</a>
      </div>

         <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="./">Home</a></li>
              <li><a href="./about">About</a></li> 
              <li><a href="./movies">Movies</a></li>  
              <li><a href="./contact">Contact</a></li>    
            </ul>        

            <ul>

              <li><a href=".\?page=register">Register</a></li>
              <li><a href=".\?page=login">Login</a></li>  

            

            </ul> 

            
            <form method="get" action="./" class="navbar-form navbar-right">
              <div class="form-group">
                <input type="hidden" name="page" value="search">
                <input type="text" name="q" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">Search</button>
            </form>    
                
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>


