<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="p-3">
      <button type="button" class="btn btn-primary btn-sm position-relative">
        Small button
        <div
          id="notification"
          class="position-absolute bg-danger rounded-circle top-0 start-100 translate-middle"
          style="width: 20px; height: 20px"
        ></div>
      </button>
    </div>
    <div id="data"></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://www.gstatic.com/firebasejs/7.21.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.21.1/firebase-database.js"></script>
    <script src="{{ asset('firebase-config.js') }}"></script>
    <script>
      firebase.database().ref('notification').on("value", (data) => {
        const snapshot = data.val()
        if (snapshot) {
          for (const [key, value] of Object.entries(snapshot)) {
            console.log(snapshot)
          }
        }
      })
    </script>
  </body>
</html>