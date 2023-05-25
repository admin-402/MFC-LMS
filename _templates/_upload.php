<main>
    <div class="py-5 text-center">
      <h2>Upload your book</h2>
    </div>
    <div class="row g-5">
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Borrow Info</h4>
        <form class="needs-validation" novalidate method="POST" action="../testupload.php" enctype="multipart/form-data">
          <div class="row g-3 text-center-container">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Book Name</label>
              <input name="book_name" type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid Book name is required.
              </div>
            </div>
            <div class="col-sm-6">
              <label for="lastName" class="form-label">Author Name</label>
              <input name="author_name" type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid Author name is required.
              </div>
            </div>
            <div class="col-md-3">
              <label for="zip" class="form-label">No of Pages</label>
              <input name="no_of_pages" type="text" class="form-control" id="zip" placeholder="" required>
              <div class="invalid-feedback">
                No of Pages required.
              </div>
            </div>
            <div class="col-md-3">
              <label for="zip" class="form-label">No of Copies</label>
              <input name="no_of_copies" type="text" class="form-control" id="zip" placeholder="" required>
              <div class="invalid-feedback">
                No of Copies Required
              </div>
            </div>
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Upload the thumbnail image</label>
            <input name="thumbnail_image" class="form-control" type="file" id="formFile">
          </div>
          <div>
            <label for="formFileLg" class="form-label">Upload the book as pdf</label>
            <input name="book_pdf" class="form-control form-control-lg" id="formFileLg" type="file">
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Upload</button>
        </form>
      </div>
    </div>
  </main>