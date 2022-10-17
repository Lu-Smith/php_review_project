<main>
<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
       <label for="firstName">First Name</label>
       <input type="text" id="firstName" name="firstName" required autocomplete="off" aria-label="enter your first name">
       <label for="lastName">Last Name</label>
       <input type="text" id="lastName" name="lastName" required autocomplete="off" aria-label="enter your last name">
       <div class="buttons">
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
       </div>
    </form>  
</main>