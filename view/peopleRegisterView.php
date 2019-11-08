 <p>Introduire nouveau contact</p>

  <div class="container">
    <div class="row">
      <div class="col-9">

        <form action="" method="post">

          <div class="form-group">
            <label for="exampleInputEmail1">Firstname</label>
            <input type="text" class="form-control" id="exampleInputUsername" aria-describedby="emailHelp" placeholder="Enter username" name="first_name">
            <small id="emailHelp" class="form-text text-muted">Prénom</small>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Lastname</label>
            <input type="text" class="form-control" id="exampleInputUsername" aria-describedby="emailHelp" placeholder="Enter username" name="last_name">
            <small id="emailHelp" class="form-text text-muted">Nom</small>
          </div>


          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>


          <div class="form-group">
           <label for="exampleFormControlSelect1">Société</label>
             <select class="form-control" id="exampleFormControlSelect1">
             <option><?php selectCompany(); ?> </option>    
          </select>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
