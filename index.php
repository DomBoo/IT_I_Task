<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Startseite</title>
    <link href="style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>


  </head>
  <body>
    <header>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a>Admin</a>
          <ul id="submenu">
            <li><a href="post.html">New or Edit Post</a></li>
            <li><a href="pics.html">Pics Upload</a></li>
          </ul>
        </li>
      </ul>
    </header>

    <aside>
      <h2>Latest Posts</h2>
      <p>BLABLABLA</p>
      <p>Blalalala</p>
      <p>BLABLABLA</p>
      <p>Blalalala</p>
      <p>BLABLABLA</p>
      <p>Blalalala</p>
    </aside>

    <section>
      <article id="post1">
        <h2>Post</h2>
        <p>Das ist ein toller Post</p>
        <img src="CoverBack.jpg" width="200px" height="200px"/>
        <br>
        <br>
        <a href="fullpost.php">Continue reading...</a>
      </article>
      <article id="post2">
        <h2>Post</h2>
        <p>Das ist ein toller Post</p>
        <img src="CoverBack.jpg" width="200px" height="200px"/>
        <br>
        <br>
        <a href="fullpost.php">Continue reading...</a>
      </article>
      <article id="post3">
        <h2>Post</h2>
        <p>Das ist ein toller Post</p>
        <img src="CoverBack.jpg" width="200px" height="200px"/>
        <br>
        <br>
        <a href="fullpost.php">Continue reading...</a>
      </article>
    </section>

    <textarea id="MyID">

    </textarea>

    <script>
      var simplemde = new SimpleMDE({ element: document.getElementById("MyID") });
    </script>

  </body>
</html>
