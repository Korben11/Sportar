<!--    Article tag - group of similar information -->
<!--    contact    -->
<article>
  <header>
    <h1>Contact form</h1>
  </header>
  <h2>Ask your question here or call us on: +50 (0)46481321846</h2>
  <div id="form-main">
    <div id="form-div">
      <form name="formContact" class="form" id="formContact" onSubmit="validateContactForm();" action="MAILTO:jkorbacka@gmail.com" method="post" enctype="text/plain">
        
        <p class="name">
          <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" onblur="validateString(this.value, '#name');" />
        </p>
        
        <p class="email">
          <input required name="email" type="email" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" onblur="validateEmail(this.value);" />
        </p>
        
        <p class="text">
          <textarea required name="text" type="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Comment" onblur="validateString(this.value, '#comment');"></textarea>
        </p>
        
        
        <div class="submit">
          <input type="submit" value="Submit" id="button-blue"/>
          <div class="ease"></div>
        </div>
      </form>
    </div>
  </div>
</article>

<!-- <form name="formContact" class="form" id="formContact" onSubmit="validateContactForm(); return false;"> -->
