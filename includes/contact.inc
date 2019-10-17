<section class="contact section--fullHt">
  <h2 class="t-title--40l">&lt; contact &gt;</h2>
  <p class="t-body--18l">Get in touch by emailing hello@sharonhartsell.com or by filling out the form below.</p>
  <form method="post">
    <div>
      <label for="contactForm_name">Name</label>
      <input type="text" id="contactForm_name" name="name" />
    </div>
    <div>
      <label for="contactForm_email">Email</label>
      <input type="email" id="contactForm_email" name="email" />
    </div>
    <div>
      <label for="contactForm_msg">Message</label>
      <textarea id="contactForm_msg" name="msg"></textarea>
    </div>
    <button type="submit" class="t-title--20b t-caps">Send Message</button>
  </form>
  
  <?php if (!empty($_POST)) : ?>
  <?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];
  ?>
  <div>Thank you, <?php print $name; ?>, for your message!</div>
  <?php endif; ?>
</section>