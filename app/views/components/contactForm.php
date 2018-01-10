<div class="contact-message">
  <p>If you’re looking for more information or would like a quote for our services, please fill out the form below.</p>
</div>

<div class="alert alert-danger" role="alert" style="display:none;" id="sendError">
  Oops, there seems to have been a problem. Make sure you filled everything out correctly and try again.
</div>

<form action="/post/" method="post" id="contactForm">
  <div class="form-group">
    <label for="contactName">Full Name</label>
    <input type="text" class="form-control" id="contactName" name="contactName" placeholder="Full Name">
  </div>
  <div class="form-group">
    <label for="contactEmail">Email address</label>
    <input type="email" class="form-control" id="contactEmail" name="contactEmail" placeholder="Email">
  </div>
  <div class="form-group">
    <label>Your message</label>
    <textarea class="form-control" rows="5" name="message" placeholder="Leave a message here"></textarea>
  </div>
  <div style="display: none;">
    <label for="address">Address</label>
    <input type="text" name="address" id="address" value="flag">
    <p>Humans: please leave this field blank.</p>
  </div>
  <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
</form>

<div class="alert alert-success" style="display:none;" id="sendSuccess">
  <p>Thanks, we'll be getting back to you ASAP!</p>
</div>


<script>
  var hash = window.location.hash;
  switch (hash) {
    case '#error':
    case '#sendError':
      // show error alert
      var sendErrorElement = document.getElementById('sendError');
      sendErrorElement.style.display = 'block';
      setTimeout(function() {
        document.getElementById('sendError').scrollIntoView();
      }, 500);
      break;
    case '#success':
      // hide form //
      var contactForm = document.getElementById('contactForm');
      contactForm.style.display = 'none';
      // show success message //
      var sendSuccessElement = document.getElementById('sendSuccess');
      sendSuccessElement.style.display = 'block';
      setTimeout(function() {
        document.getElementById('sendSuccess').scrollIntoView();
      }, 500);
      break;
    default:

  }
</script>
