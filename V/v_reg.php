<div class="container p-5">
<form class="mx-auto" style="width:550px;" id="form_reg" method="post">
    <div class="mb-3">
        <label for="name" class="form-label">Your Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required>
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone Number</label>
        <input class="form-control" type="tel" id="phone" name="phone" required>
    </div>
    <div class="mb-3">
        <label for="InputPassword1" class="form-label">Think of a Password</label>
        <input type="password" class="form-control" name="pass1" id="InputPassword1" required>
    </div>
    <div class="mb-3">
        <label for="InputPassword2" class="form-label">Repeat your Password</label>
        <input type="password" class="form-control" name="pass2" id="InputPassword2" aria-describedby="passHelp" required>
        <div id="passHelp" class="form-text"></div>
    </div>

    <button id="regSubmit" type="submit" onclick="ValidateReg()" class="btn btn-primary">Submit</button>
</form>
</div>