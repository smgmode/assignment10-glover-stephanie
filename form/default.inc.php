<style type="text/css">
* {
	margin:0;
	padding: 0;
	border: 0;
}

.hero-image-section {
  background-image: url("../images/hero-image.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  height: 100%;
  width: 100%;
  text-align: center;
  font-size: 25px;
}

.container {
  text-align: center;
  font-size: 10px;
  color: blue;
  padding-top: 50px;
  font-size: 16px;
}

label.label_input_wrap {
  vertical-align: top;
  display: block;
  margin: 0 auto;
  padding: 10px 0;
}

input,
textarea {
  border: 8px solid yellow;
  padding: 9px 11px;
  text-decoration-color: blue;
}

 input[type="submit"] {
  width: 100px;
  padding: 12px 20px;
  margin: 8px 0;
  text-align: center;
}
</style>


<section class="hero-image-section" id="home">
  <h2>Welcome to Our Home Page!</h2>

  <div class="container">
    <section class="contact-section" id="contact-us">
      <h2>Questions? Contact Us</h2>
    </section>
  </div>

  <div class="container">
  <h2> Sorry Something went wrong with your submission</h2>
  <p>Please try again</p>
  </div>

  <form class="form" id="test_form" name="test_form" method="" action="form.php" onsubmit="return validateForm(this)"></form>
  <div class="first-name">
    <label for="firstname" class="label_input_wrap">First Name:</label>
    <input type="text" name="firstname" id="firstname" required />
  </div>

  <div class="last-name">
    <label for="lastname" class="label_input_wrap">Last Name:</label>
    <input type="text" name="lastname" id="lastname" placeholder="ex. Smith" />
  </div>

  <div class="email">
    <label for="email" class="label_input_wrap">Email: </label>
    <input type="email" name="email" placeholder="test@example.com" id="email"/>
  </div>

  <div class="telephone">
    <label for="telephone" class="label_input_wrap">Telephone: </label>
    <input type="tel" name="telephone" placeholder="555-555-5555" id="telephone" />
  </div>

  <div class="comments">
    <label for="comments" class="label_input_wrap">Comments: </label>
    <textarea name="comments" maxlength="1000" cols="55" rows="15" placeholder="Please Leave Us a Message" id="comments"></textarea>
  </div>

  <div class="radiobutton">
    <h3>If you want work with us, please choose one of the following:</h3>
    <input type="radio" name="projects" value="ideation"  id="ideation"/><label for="ideation">Ideation</label>
    <input type="radio" name="projects" value="webdesign" id="webdesign" /><label for="webdesign">Webdesign</label>
    <input type="radio" name="projects" value="branding" id="branding" /><label for="branding">Branding</label>
  </div>

  <div class="dropdown">
    <label for="communication" class="label_input_wrap">How do you want us to contact you?</label>
    <select name="communication" id="communication">
      <option value="e-mail" selected>E-mail</option>
      <option value="telephone">Telephone</option>
    </select>
   </div>

   <div class="submit">
    <input type="submit" value="Submit"/>
  </div>
</section>
