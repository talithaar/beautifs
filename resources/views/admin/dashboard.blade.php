<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="nav flex justify-center">
        <nav class="flex">
            <p>Logo</p>
            <div class="nav-items flex align-center">
                <div class="nav-item">
                    Admin Account
                </div>
                <div class="nav-item">
                    <div class="" style="width: 40px; height: 40px; background-color: black; border-radius: 100%;"></div>
                </div>
                <div class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" style="border: none; background-color: transparent; cursor: pointer">Logout</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <div class="flex justify-center">
        <section class="left">
            <div class="pad-content flex justify-center">
                <h1>ADMIN</h1>
            </div>
            <div class="pad-content" style="margin: -20px 0;">
                <hr>
            </div>
            <div class="pad2 flex" style="flex-direction: column; gap: 10px;">
                <h4>Fitur</h4>
                <div class="padl-10 flex" style="flex-direction: column; gap: 10px;">
                    <a style=" text-decoration: none; color: black; font-weight: bold" href="/admin">Daftar User</a>
                    <a style=" text-decoration: none; color: black;" href="/order">Daftar Order</a>
                </div>
            </div>
            <div class="pad-content" style="margin: -20px 0;">
                <hr>
            </div>
        </section>
        <section class="right pad2 flex align-center" id="style-2">
                <h1>Table User</h1>
                <div class="w100 flex flex-wrap" style="background-color: white;">
                    <table>
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Username</th>
                            <th scope="col">Verified at</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td data-label="Account">Akun 1</td>
                            <td data-label="Due Date">Username</td>
                            <td data-label="Period">03/01/2016 - 03/31/2016</td>
                          </tr>
                          <tr>
                            <td data-label="Account">Akun 2</td>
                            <td data-label="Due Date">Username</td>
                            <td data-label="Period">03/01/2016 - 03/31/2016</td>
                          </tr>
                          <tr>
                            <td data-label="Account">Akun 3</td>
                            <td data-label="Due Date">Username</td>
                            <td data-label="Period">03/01/2016 - 03/31/2016</td>
                          </tr>
                          <tr>
                            <td data-label="Account">Akun 4</td>
                            <td data-label="Due Date">Username</td>
                            <td data-label="Period">03/01/2016 - 03/31/2016</td>
                          </tr>
                          <tr>
                            <td data-label="Account">Akun 5</td>
                            <td data-label="Due Date">Username</td>
                            <td data-label="Period">03/01/2016 - 03/31/2016</td>
                          </tr>
                          <tr>
                            <td data-label="Account">Akun 6</td>
                            <td data-label="Due Date">Username</td>
                            <td data-label="Period">03/01/2016 - 03/31/2016</td>
                          </tr>
                          <tr>
                            <td data-label="Account">Akun 7</td>
                            <td data-label="Due Date">Username</td>
                            <td data-label="Period">03/01/2016 - 03/31/2016</td>
                          </tr>
                        </tbody>
                      </table>

                </div>
                <h1 class="pad2 pt10">Free Field</h1>
                <div class="w100 flex flex-wrap" style="background-color: white;">
                    <div class="tiny-card mx20 my10 flex column align-center" style="overflow: hidden; background-color: rgb(217, 217, 217);">
                        <img src="assets/images/dummy-img.png" alt="">
                        <h4 class="pad2">Title</h4>
                    </div>
                    <div class="tiny-card mx20 my10 flex column align-center" style="overflow: hidden; background-color: rgb(217, 217, 217);">
                        <img src="assets/images/dummy-img.png" alt="">
                        <h4 class="pad2">Title</h4>
                    </div>
                    <div class="tiny-card mx20 my10 flex column align-center" style="overflow: hidden; background-color: rgb(217, 217, 217);">
                        <img src="assets/images/dummy-img.png" alt="">
                        <h4 class="pad2">Title</h4>
                    </div>
                    <div class="tiny-card mx20 my10 flex column align-center" style="overflow: hidden; background-color: rgb(217, 217, 217);">
                        <img src="assets/images/dummy-img.png" alt="">
                        <h4 class="pad2">Title</h4>
                    </div>
                    <div class="tiny-card mx20 my10 flex column align-center" style="overflow: hidden; background-color: rgb(217, 217, 217);">
                        <img src="assets/images/dummy-img.png" alt="">
                        <h4 class="pad2">Title</h4>
                    </div>
                    <div class="tiny-card mx20 my10 flex column align-center" style="overflow: hidden; background-color: rgb(217, 217, 217);">
                        <img src="assets/images/dummy-img.png" alt="">
                        <h4 class="pad2">Title</h4>
                    </div>

                </div>


            </div>
        </section>

    </div>
</body>
</html>
