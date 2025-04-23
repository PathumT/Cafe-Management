@extends('home')

@section('title', 'Contact')

@section('content')

        <section>
            <div class="col-md-6" data-col="one-second" style="padding:50px 70px 10px;background-color:#fff;border-radius: 32px;">
                <h4>Have a question?
                    <br/>
                    <b>Write to us!</b>
                </h4>
                <div id="contactWrapper">
                    <div id="contactform">
                        <form method="POST" id="reused_form" role="form" action="{{ url('send-email') }}">
                            @csrf
                            <!-- One Second (1/2) Column -->
                            <div class="column one-second">
                                <input placeholder="Your name"   id="name" type="text" name="Name" required maxlength="50"> </div>
                            <!-- One Second (1/2) Column -->
                            <div class="column one-second">
                                <input placeholder="Your e-mail" id="email" type="email" name="Email" required maxlength="50"> </div>
                            <div class="column one">
                                <input placeholder="Subject"     id="subject" type="text" name="Subject" maxlength="50"> </div>
                            <div class="column one">
                                <textarea placeholder="Message"  id="message" name="Message" rows="10" maxlength="6000" required></textarea>
                            </div>
                            <div class="column one">
                                <button class="button-primary"   id="submit" type="submit">Send A Message</button>
                            </div>
                        </form>
                        <div id="success_message" style="display:none">
                            <h3>Submitted the form successfully!</h3>
                            <p>We will get back to you soon.</p>
                        </div>
                        <div id="error_message" style="width:100%; height:100%; display:none;">
                            <h3>Error</h3> Sorry there was an error sending your form.</div>
                    </div>
                </div>
            </div>
        </section>

<style>
    /* Section */
.section {
  position: relative;
  padding-top: 100px;
  padding-bottom: 60px;
  background-color: #57e893;
}

.section .section-decoration {
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}

.section .container {
  position: relative;
}

.section .row {
  margin-left: -15px;
  margin-right: -15px;
}

/* Column */
.column {
  position: relative;
  float: left;
  width: 100%;
  padding-left: 15px;
  padding-right: 15px;
}

.column.one-second {
  width: 50%;
}

/* Typography */
h2 {
  font-size: 36px;
  line-height: 42px;
  font-weight: bold;
  color: #12263a;
}

h4 {
  font-size: 24px;
  line-height: 32px;
  font-weight: bold;
  color: #12263a;
  margin-bottom: 20px;
}

p {
  font-size: 16px;
  line-height: 24px;
  color: #12263a;
}

/* Form */
#contactWrapper {
  margin-top: 30px;
}

#contactform .column {
  margin-bottom: 20px;
}

#contactform input[type="text"],
#contactform input[type="email"],
#contactform textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

#contactform textarea {
  height: 150px;
}

#contactform button {
  padding: 10px 20px;
  background-color: #12263a;
  border: none;
  border-radius: 4px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #fff;
  cursor: pointer;
}

#success_message,
#error_message {
  margin-top: 20px;
  padding: 10px;
  border-radius: 4px;
  display: none;
}

#success_message h3,
#error_message h3 {
  margin: 0;
  font-size: 18px;
  line-height: 24px;
  font-weight: bold;
}

#success_message p,
#error_message p {
  font-size: 14px;
  line-height: 20px;
}

/* Animated Arrow */
.animated-arrow {
  position: relative;
}

.animated-arrow:before,
.animated-arrow:after {
  content: "";
  position: absolute;
  top: 50%;
  width: 0;
  height: 0;
  border-style: solid;
  transition: border-color 0.15s ease-in-out;
}

.animated-arrow-m:before,
.animated-arrow-m:after {
  content: "";
  position: absolute;
  bottom: -12px;
  width: 0;
  height: 0;
  border-style: solid;
  transition: border-color 0.15s ease-in-out;
}

.animated-arrow:before {
  left: -12px;
  border-width: 12px 0 12px 12px;
  border-color: transparent transparent transparent #676767;
}

.animated-arrow:after {
  left: -10px;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent #656565;
}

.animated-arrow-m:before {
  right: -12px;
  border-width: 12px 12px 12px 0;
  border-color: transparent #656565 transparent transparent;
}

.animated-arrow-m:after {
  right: -10px;
  border-width: 10px 10px 10px 0;
  border-color: transparent #676767 transparent transparent;
}

</style>
