<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css-user/index-user.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <title>{{config('app.name')}}</title>


    </head>
    <body>

        {{-- start header  --}}

        <header>

            <div class="logo">
                <a href="{{route('home')}}">
                    <h2>
                        {{config('app.name')}}
                    </h2>
                </a>
            </div>

            <div class="burger-menu">
                <h3>
                    <a href="#">
                        <i class="fa-solid fa-bars"></i>
                    </a>
                </h3>
            </div>

            <div class="search">
                <form action="#" method="post" class="form-2">
                    @csrf
                    <input type="search" name="search" id="search">
                    <button type="submit">sub</button>
                </form>
            </div>

            <div class="navbar">
                <a href="#home" class="links">home</a>
                <a href="#services" class="links">services</a>
                <a href="#about" class="links">about</a>
                <a href="#contact" class="links">contact</a>
            </div>

            <div class="log">
                <a href="#" id="login">login</a>
                <a href="#" id="signin">signin</a>
            </div>
        </header>

        {{-- end header  --}}

        {{-- start home --}}

        <section id="home">
            <div class="contaner">
                <div class="left">
                    <div class="contaner-3">
                        <div class="card-heading">
                            <h2>heading</h2>
                        </div>
                        <div class="text">
                            <p>

                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br>
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, <br>
                                when an unknown printer took a galley of type and scrambled it to make a type <br>
                                specimen book. It has survived not only five centuries, but also the leap into <br>
                                electronic typesetting, remaining essentially unchanged. It was popularised in <br>
                                the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, <br>
                                and more recently with desktop publishing software like Aldus PageMaker including.


                            </p>
                        </div>
                        <div class="calltoaction">
                            <a href="#" class="call">join</a>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <img src="images/image.jpg" alt="505" width="170px">
                </div>
            </div>
        </section>

        {{-- end home --}}

        {{-- start services --}}


        <section id="services">
            <div class="contaner">
                <div class="card">
                    <img src="images/image.jpg" alt="505" width="70px" class="imgcard">
                    <h3>sevice</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam,
                        <br> quod impedit quaerat temporibus porro, officiis qui sapiente,
                    </p>
                    <div class="link-box">
                        <a href="#" class="lm">learnmore</a>
                        <a href="#" class="lm">learnmore</a>

                    </div>
                </div>
            </div>
        </section>

        {{-- end services --}}

        {{-- start about --}}

        <section id="about">
            <div class="contaner">
                <div class="card-2">


                    <img src="images/image.jpg" alt="505"  class="imgcard" width="70px">


                    <div class="cart-2text">
                        <p class="p-style">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque deserunt quibusdam,
                            <br> tempore nihil ducimus aliquid repudiandae assumenda ab voluptatibus tenetur,
                            <br> explicabo libero suscipit voluptas possimus animi voluptates quasi iusto?
                        </p>
                    </div>
                    <div class="cardinfo">
                        <a href="" class="links">go</a>
                    </div>

                </div>

                <div class="card-2">


                    <img src="images/image.jpg" alt="505"  class="imgcard" width="70px">


                    <div class="cart-2text">
                        <p class="p-style">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque deserunt quibusdam,
                            <br> tempore nihil ducimus aliquid repudiandae assumenda ab voluptatibus tenetur,
                            <br> explicabo libero suscipit voluptas possimus animi voluptates quasi iusto?
                        </p>
                    </div>
                    <div class="cardinfo">
                        <a href="" class="links">go</a>
                    </div>

                </div>
            </div>
        </section>

        {{-- end about --}}


        {{-- start contact --}}

        <section id="contact">
            <div class="contaner">
                <form action="#" method="post" class="form-2">

                    @csrf

                    <div class="contaner-2">

                        <div class="label-con">
                            <label for="name">name</label>
                            <label for="email">email</label>
                            <label for="phonenumber">phonenumber</label>
                            <label for="message">message</label>
                        </div>

                        <div class="input-con">
                            <input type="text" name="name" id="name" placeholder="name">
                            <input type="email" name="email" id="email" placeholder="example@email.com">
                            <input type="tel" name="phonenumber" id="phonenumber" placeholder="+962796632195">
                            <textarea name="message" id="message" cols="25" rows="10" placeholder="message"></textarea>
                            <button type="submit" >send</button>
                        </div>

                    </div>





                </form>
            </div>
        </section>

        {{-- end contact --}}

        {{-- start footer  --}}

        <footer>

        </footer>

        {{-- end footer  --}}


    </body>
</html>
