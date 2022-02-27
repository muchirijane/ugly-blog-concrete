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
        <main id="single-page">

            <section class="sp-header">
              <h1>My dog leslie</h1>
            </section>

          
          <div id="single-page-divider">
            <div class="left-side">
              <section class="text-content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Atque maxime libero recusandae quas excepturi facilis cumque
                  tenetur modi similique. Exercitationem quasi iusto optio atque
                  harum ea, amet voluptatum voluptates vero. Lorem ipsum dolor
                  sit amet, consectetur adipisicing elit. Sequi dolores qui
                  sapiente corrupti vitae, accusantium, fuga sunt aliquid
                  doloribus asperiores odit molestias nemo consectetur
                  laboriosam neque unde velit numquam eos?
                </p>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Atque maxime libero recusandae quas excepturi facilis cumque
                  tenetur modi similique. Exercitationem quasi iusto optio atque
                  harum ea, amet voluptatum voluptates vero. Lorem ipsum dolor
                  sit amet, consectetur adipisicing elit. Sequi dolores qui
                  sapiente corrupti vitae, accusantium, fuga sunt aliquid
                  doloribus asperiores odit molestias nemo consectetur
                  laboriosam neque unde velit numquam eos?
                </p>
              </section>
            </div>

            <div class="widgets">
              <section class="latest-posts-widget">
                <ul>
                  <li><a href="#">Blog post 1</a></li>
                  <li><a href="#">Blog post 2</a></li>
                  <li><a href="#">Blog post 3</a></li>
                </ul>
              </section>
            </div>
          </div>
          </div>
           
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
