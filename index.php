<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Link-Shortener</title>
    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />

    <link rel="stylesheet" href="index.css" />
  </head>
  <body>
    <main class="fullPage">
      <form class="input-group flex-nowrap Mainform" action="#">
        <span class="input-group-text" id="addon-wrapping"
          ><i class="bi bi-link-45deg"></i
        ></span>
        <input
          type="text"
          class="form-control Input"
          placeholder="Enter Your URL"
          aria-label="url"
          aria-describedby="addon-wrapping"
          name="fullUrl"
          required
        />
        <button class="btn myBtn" data-bs-toggle="modal" data-bs-target="#exampleModal">Shortener</button>
      </form>
        <br />

      <div class="table-responsive registerLinkTable">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Short url</th>
              <th scope="col">Original url</th>
              <th scope="col">Click</th>
              <th scope="col">Delete</th>
              <th scope="col">Edit</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>localhost/k20</td>
              <td>https://daraz.com</td>
              <td>0</td>
              <td><i class="bi bi-trash-fill"></i></td>
              <td><i class="bi bi-pencil-fill"></i></td>
            </tr>
          </tbody>
        </table>
      </div>


      <div class="modal fade myPopup" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit your Short URL</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Short URL</label>
                  <input type="text" class="form-control" id="recipient-name" value="Example.com/xyz.com">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">Save</button>
            </div>
          </div>
        </div>
      </div>

    </main>

    <!-- JavaScript Bundle with Popper -->
    <script src="script.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
