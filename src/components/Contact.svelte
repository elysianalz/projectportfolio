
<main class="container-fluid">

  <div class="row justify-content-center">
  <!-- <form class="row g-3" method="post" action="http://localhost/send_mail.php">
    <h2 class="display-6">Contact me</h2>
    <div class="col-md-6">
      <label class="form-label">First name</label>
      <input type="text" class="form-control">
    </div>

    <div class="col-md-6">
      <label  class="form-label">Last name</label>
      <input type="text" class="form-control">
    </div>

    <div class="col-12">
      <label class="form-label">Company</label>
      <input type="text" class="form-control" >
    </div>

    <div class="col-12">
      <label class="form-label">Email address</label>
      <input type="email" class="form-control" >
    </div>

    <div class="col-md-12">
      <label class="form-label">Subject</label>
      <input type="text" class="form-control">
    </div>

    <div class="col-md-12">
      <label class="form-label">Message</label>
      <textarea type="text" class="form-control"></textarea>
    </div>


    <div class="col-12">
      <button type="submit" class="btn btn-primary float-end">Send message</button>
    </div>

  </form> -->
  <button onclick="sendEmail()" class="btn btn-info send-email">send email: matthew.beerens@gmail.com</button>
  </div>
</main>

<style>
  main {
    margin-top: 1em;
    padding: 1em;
  }

  form {
    margin-top: 15px;
    max-width: 800px;
  }

  .send-email {
    max-width: 400px;
  }
</style>
