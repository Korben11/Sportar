<!--    Article tag - group of similar information -->
<!--    contact    -->
<article>
  <header>
    <h1>Contact form</h1>
  </header>
  <h2>Ask your question here or call us on: +50 (0)46481321846</h2>
  <div id="form-main">
    <div id="form-div">
      <form class="form" id="formContact">
        
        <p class="name">
          <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
        </p>
        
        <p class="email">
          <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
        </p>
        
        <p class="text">
          <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Comment"></textarea>
        </p>
        
        
        <div class="submit">
          <input type="submit" value="SEND" id="button-blue"/>
          <div class="ease"></div>
        </div>
      </form>
    </div>
  </div>
</article>