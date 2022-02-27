<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/primary.css" />
    <title>Concrete5 website</title>
  </head>
  <body>
    <div class="ccm-page">
      <!-- From here, everything is your code (not concrete) -->
      <!-- Use "body-content" as the <body> replacement -->
      <div id="body-content">
        <!-- All <body> content goes below here -->

        <!-- Header section which will be global later-->
        <header>
          <nav>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">About</a></li>
            </ul>
          </nav>
        </header>

        <!-- Template section which will be used for template/page specific elements -->
        <!-- An example of two different templates would be "Fullwidth page" and "Page with widget" -->
        <main id="default-page">
          <section class="hero-big-img">
            <div class="bg-img"></div>
            <h1>An ugly looking block</h1>
          </section>

          <section class="latest-blog-posts">
            <p class="label">Recent blog posts</p>

            <div class="latest-blog-posts-container">
              <div class="post">
                <p class="title">Blog post 1</p>
                <p class="desc">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                  Vitae pariatur commodi facilis maxime dolor non ab possimus
                  sequi. Eos unde esse blanditiis et assumenda nemo aut dolorem
                  dolorum ratione ipsa.
                </p>
                <a href="#">read more</a>
              </div>

              <div class="post">
                <p class="title">Blog post 2</p>
                <p class="desc">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                  Vitae pariatur commodi facilis maxime dolor non ab possimus
                  sequi. Eos unde esse blanditiis et assumenda nemo aut dolorem
                  dolorum ratione ipsa.
                </p>
                <a href="#">read more</a>
              </div>

              <div class="post">
                <p class="title">Blog post 3</p>
                <p class="desc">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                  Vitae pariatur commodi facilis maxime dolor non ab possimus
                  sequi. Eos unde esse blanditiis et assumenda nemo aut dolorem
                  dolorum ratione ipsa.
                </p>
                <a href="#">read more</a>
              </div>
            </div>
          </section>
        </main>

        <!-- Footer section which will be global -->
        <footer>
          <p>Copyright 2019</p>
        </footer>

        <!-- All <body> content goes above here -->
      </div>
    </div>
    <script src="scripts/main.js" type="text/javascript"></script>     
  </body>
</html>
