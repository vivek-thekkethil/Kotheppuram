<?php include("header.php")?>

<section class="bg-light pt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
              <h5 class="text-primary">CONTACT US</h5>
              <p>Kotheppuram(Ho),Pallippuram(Po)<br>Pattambi<br>Palakkad(dist)<br>Kerala<br>679305(Pin)</p>
            </div>
            <div class="col-lg-4">

            </div>
        </div>

        <div class="col-lg-6">
            <p class="text-danger">* Marked are madatory fields</p>
        <form id="submit-form">
  <div class="form-group">
    <label for="name">Name<span class="text-danger">*</span></label>
    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter Your Name" required="requierd">
    
  </div>
  
  <div class="form-group">

    <label for="place">Place<span class="text-danger">*</span></label>
    <input type="text" class="form-control" name="place" id="place" aria-describedby="emailHelp" placeholder="Enter Your Place" required="requierd">
    
  </div>
  <div class="form-group">
      
    <label for="phone">Phone<span class="text-danger">*</span></label>
    <input type="tel" class="form-control" name="phone" id="phone" aria-describedby="emailHelp" placeholder="Enter Your Phone No" required="requierd">
    
  </div>

     
  <div class="form-group">
    <label for="query">Your Queries</label>
    <textarea class="form-control" name="message" id="Query" rows="3" placeholder="Type here....."></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
    </div>
  
</section>




<script>
        $("#submit-form").submit((e)=>{
            e.preventDefault()
            $.ajax({
                url:"https://script.google.com/macros/s/AKfycbyPgZRX3MlAT3KSKwApjY-WtLav0Y5z1rgvamSPJuV-g4Xs6cemTF_SG8Gq4p8gVnI76g/exec",
                data:$("#submit-form").serialize(),
                method:"post",
                success:function (response){
                    alert("Form submitted successfully")
                    window.location.reload()
                    //window.location.href="https://google.com"
                },
                error:function (err){
                    alert("Something Error")
    
                }
            })
        })
    </script>


<?php include("footer.php")?>