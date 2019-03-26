<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Link not registered</title>

    <style>
    html, body {
      margin: 0;
      padding: 2rem;
      font-family:-apple-system, BlinkMacSystemFont, ubuntu, roboto, noto, 'segoe ui', arial, sans-serif;
    }

    /* Photon Colors http://design.firefox.com/photon/visual/color.html#red */

    html {
      background-color: #d70022; /* Red 60 */
      color: white;
    }

    body {
      max-width: 780px;
      margin: 0 auto;
      font-size: 15px;
    }

    h1 {
      font-size: 33px;
      font-weight: 300;
    }

    a {
      color: #ffffff; /* There is hover cover but cursor pointer */
    }

    a:hover {
      text-decoration: none;
    }

    .buttons {
      display: flex;
      margin: 2rem 0;
    }

    button {
      margin-right: 1rem;
      margin-bottom: 1rem;
      padding: 0 1rem;
      height: 32px;
      font-size: 15px;
      color: #ffffff;
      border: none;
      border-radius: 2px;
    }

    .primary {
      background-color: #5a0002; /* Red 80 */
    }

    .primary:hover,
    .primary:active {
      background-color: #3e0200; /* Red 90 */
    }

    .secondary {
      background-color: #a4000f; /* Red 70 */
    }

    .secondary:hover,
    .secondary:active {
      background-color: #5a0002; /* Red 80 */
    }
    </style>
  </head>
  <body>
    <header>
  <h1>Warning! - Link Not Registered</h1>
</header>
<main>
  <p>
    Sorry, the link cannot be accessed. Might you can check your account by login first.
  </p>
  <p>
    This happens usually because you have verified the link
  </p>
  <p>
    If you have any problem, you can contact Loopinc's Administrator.
  </p>
  <p>
    Advisory provided by <a href="{{ url('/')}} ">Loopinc Team</a>.
  </p>
  <div class="buttons">
    <button class="primary" id="primary">Login</button>
    <button class="secondary" id="secondary">Home</button>
  </div>
</main>
<!-- <footer>
  <a href="#!">Ignore this message</a>
</footer> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $("#primary").on("click", function(){
        window.location.href = "{{ url('backend/pages/signin') }}";
      })

      $("#secondary").on("click", function(){
        window.location.href = "{{ url('/') }}";
      })
    });
  </script>
  </body>
</html>
