<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/cormorant-2" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Our Service</title>
    <style>
    @import url('https://fonts.cdnfonts.com/css/montserrat');
*{

}
.container{
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}
.container .post{
  display: none;
}
.container .text{
  font-size: 25px;
  color: #D9D9D9;
  font-weight: 500;
}
.container .edit{
  position: absolute;
  right: 10px;
  top: 5px;
  font-size: 16px;
  color: #D9D9D9;
  font-weight: 500;
  cursor: pointer;
}
.container .edit:hover{
  text-decoration: underline;
}
.container .star-widget input{
  display: none;
}
.star-widget label{
  font-size: 70px;
  color: #D9D9D9;
  padding: 10px;
  float: right;
  transition: all 0.2s ease;
}
input:not(:checked) ~ label:hover,
input:not(:checked) ~ label:hover ~ label{
  color: #FFDA69;
}
input:checked ~ label{
  color: #FFDA69;
}
#rate-1:checked ~ form header:before{
  content: "I just hate it ";
}
#rate-2:checked ~ form header:before{
  content: "I don't like it ";
}
#rate-3:checked ~ form header:before{
  content: "It is awesome ";
}
#rate-4:checked ~ form header:before{
  content: "I just like it ";
}
#rate-5:checked ~ form header:before{
  content: "I just love it ";
}
.container form{
  display: none;
}
input:checked ~ form{
  display: block;
}
form header{
  width: 100%;
  font-size: 30px;
  color: #FFDA69;
  font-weight: 500;
  margin: 5px 0 px 0;
  text-align: center;
  transition: all 0.2s ease;
}
form .textarea{
  height: 100px;
  width: 100%;
  overflow: hidden;
}
form .textarea textarea{
  height: 100%;
  width: 100%;
  outline: none;
  background: #A7BDAF;
border: 2px solid #A7BDAF;
border-radius: 20px;
color: #FFFFFF;
  padding: 10px;
  font-size: 18px;
  resize: none;
}
.textarea textarea:focus{
  border-color: #FFFFFF;
}
form .btn{
  height: 45px;
  width: 100%;
  margin: 15px 0;
}
form .btn button{
  height: 100%;
  width: 100%;
  background: #023A15;
border: 2px solid #023A15;
border-radius: 20px;
  color: #FFFFFF;
  font-size: 17px;
  font-weight: 500;
  text-transform: uppercase;
  cursor: pointer;
  transition: all 0.3s ease;
}
form .btn button:hover{
  background: #1b1b1b;
}
</style>

</head>

<body class="bg-[#023A15]">
    <nav class="flex flex-wrap items-center justify-between py-4">
        <div class="ml-24">
            <img src="logotal.svg" alt="">
        </div>

        <div class="flex gap-[70px] text-white">
            <a class="" href="">Home</a>
            <a href="">About</a>
            <a href="" >Service</a>
            <a href="" class="text-white/[0.4]">Order</a>
            <a href="">Shopping Cart</a>
        </div>
        <div class="flex items-center mr-12 gap-4">
            <i class="fa-solid fa-lg fa-magnifying-glass text-white w-"></i>
            <div
                class="w-[145px] gap-2 h-[48px] ring-1 ring-white/[0.4] flex pl-1 items-center rounded-lg bg-[#AAAAAA]/[0.48]">
                <img class="w-12 h-12 flex rounded-full"
                    src="https://www.simplilearn.com/ice9/free_resources_article_thumb/what_is_image_Processing.jpg"
                    alt="">
                <h1 class="text-white">pengguna 1</h1>
            </div>
        </div>
    </nav>
    <div class="bg-[#FDF5F3] text-[#023A15] px-[128px]">
        <div style="font-family: 'Cormorant', sans-serif;" class="text-6xl flex justify-center items-center mt-12">
            <h1 class="text-[60px] mt-12">Rate Our Service!</h1>
        </div>

        <div class="flex flex-row left gap-20 mt-20">
            <div class="w-[406px]">
                <img class="w-[406px] h-[475px] z-10 rounded-t-full"
                    src="https://img.freepik.com/free-photo/young-woman-with-clay-mask-her-face_169016-19072.jpg?w=1060&t=st=1685644780~exp=1685645380~hmac=d7966ae5cdf0de37d1a6a0a89d18e10b6687bcee9b9fd960485b78b023d3e500"
                    alt="">
            </div>
            <div style="font-family: 'Cormorant', sans-serif;">
            <h2 class="text-[30px] mt-12">Face Scrub + Botox Filler:</h2>
            <div class="container">
                <div class="post">
                </div>
                <div class="star-widget">
                  <input type="radio" name="rate" id="rate-5">
                  <label for="rate-5" class="fas fa-star"></label>
                  <input type="radio" name="rate" id="rate-4">
                  <label for="rate-4" class="fas fa-star"></label>
                  <input type="radio" name="rate" id="rate-3">
                  <label for="rate-3" class="fas fa-star"></label>
                  <input type="radio" name="rate" id="rate-2">
                  <label for="rate-2" class="fas fa-star"></label>
                  <input type="radio" name="rate" id="rate-1">
                  <label for="rate-1" class="fas fa-star"></label>
                  <form action="#">
                    <header></header>
                    <div class="textarea">
                      <textarea placeholder="Give your feedback here..."></textarea>
                    </div>
                    <div class="btn">
                      <button type="submit">Post</button>
                    </div>
                  </form>
                </div>
              </div>
              <script>
                const btn = document.querySelector("button");
                const post = document.querySelector(".post");
                const widget = document.querySelector(".star-widget");
                const editBtn = document.querySelector(".edit");
                btn.onclick = ()=>{
                  widget.style.display = "none";
                  post.style.display = "block";
                  editBtn.onclick = ()=>{
                    widget.style.display = "block";
                    post.style.display = "none";
                  }
                  return false;
                }
              </script>
</body>

</html>
