<div class="container">
    <h1 class="text-center">Signup</h1>
    <form action="./server/requests.php" method="post" class="d-flex flex-column align-items-center">
        <div class="mb-3 col-6">
            <label for="username" class="form-label">User Name</label>
            <input type="text" name="name" class="form-control" id="username" placeholder="Enter User Name">
        </div>
        <div class="mb-3 col-6">
            <label for="email" class="form-label">Email</label>
            <input type="emaill" name="email" class="form-control" id="email" placeholder="Enter User Email">
        </div>
        <div class="mb-3 col-6">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Enter User Password">
        </div>
        <div class="mb-3 col-6">
            <label for="address" class="form-label">Address</label>
            <input type="text" address class="form-control" id="address" placeholder="Enter User Address">
        </div>
        <button type="submit" name="signup" class="btn btn-primary">SignUp</button>
    </form>
</div>