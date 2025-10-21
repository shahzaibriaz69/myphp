<div class="container">
    <h1 class="heading">Sign Up</h1>
    <form method="post" action="./server/requests.php">
        <div class="mb-3">
            <label for="username" class="form-label">username</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="Enter Your Username">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Your Email</label>
            <input type="text" name="email" class="form-control" id="email" placeholder="Enter Your Email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Your Password</label>
            <input type="Password" name="password" class="form-control" id="password" placeholder="Enter Your Password">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" name="address" class="form-control" id="address" placeholder="Enter Your Address">
        </div>
        <button type="Submit" name="signup" class="btn btn-primary">Signup</button>
</div>
</form>