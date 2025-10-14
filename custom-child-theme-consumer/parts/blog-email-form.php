<div class="email-subscription parts">
    <div class="subs-container">
      <h1>Subscribe to Reloverse</h1>

      <form id="newsletter" action="https://pardot.santaferelo.com/l/75942/2022-12-02/chqgc4">
        <div class="inputgroup">
          <input type="mail" name='email' placeholder="Email address" required>
          <button type="submit" id='register' class='the-button'>Subscribe</button>
        </div>
      </form>
      <p class="error-notice hidden"></p>
    </div>
</div>

<style>
  .footer{
    margin-left: -10px;
  }
  .subs-container {
    max-width: 425px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.single-blog .subs-container{
  max-width:425px;
  align-items:flex-start;;
}
.email-subscription h4{
    color:#353c41;
    font-size: 23px;
    line-height: 1.5;
}
.single-blog .email-subscription{
  justify-content: flex-start;
  padding-left: 0;
}
.email-subscription {
    padding:1rem 2rem;
    margin: 50px auto 10px;
    display: flex;
    justify-content: center;
}
input[name='email']{
  padding:.9rem;
  width: 380px;
  margin-bottom: 1rem;
  border: 1px solid rgba(0,0,0,.15);
}
form#newsletter {
    margin-top: 2rem;
    margin-bottom: 3rem;
}
.error-notice{
    color:red;
    font-size:16px;
    display: block;
}
.error-notice.hidden{
    display: none;
}
@media (max-width: 767px) {
    input[name='email']{
        width:100%;
    }
    form#newsletter{
      width:100%;
      margin-top: 0;
    }
    .subs-container h1{
      font-size: 28px;
    }
    .subs-container{
      width: 100%;
      align-items:flex-start;
    }
    .email-subscription{
      padding: 0;
      margin: 0;
    }
}
.the-button {
    display: block;
    min-width: 195px;
    width:100%;
    padding-top: 15px;
    padding-bottom: 15px;
    background-color: #000;
    border: 2px solid #000;
    text-align: left;
    padding-left: 1rem;
    font-weight: bold;
    color: #ffffff;
    -webkit-transition: all 0.3s ease-in-out 0s;
    transition: all 0.3s ease-in-out 0s;
}
</style>
<script>
  const form = document.querySelector('#newsletter')
  const email= document.querySelector('input[name=email]')
  const notif= document.querySelector('.error-notice')

  if(form){
    email.addEventListener('focus',function(){
        notif.classList.add('hidden');
        console.log('HELLO')
    })
    form.querySelector('#register').addEventListener('click',function(e){
      e.preventDefault();
      if(email.value==''){
        notif.innerHTML='Email must not be empty!'
        notif.classList.remove('hidden')
        return
      }
      if(!ValidateEmail(email)){
        notif.innerHTML='Email must be in valid format!'
        notif.classList.remove('hidden')
        return
      }

      form.submit();
      
    })
  }
  function ValidateEmail(input) {

    var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    if (input.value.match(validRegex)) {

      return true;

    } else {

      return false;

    }

  }
</script>