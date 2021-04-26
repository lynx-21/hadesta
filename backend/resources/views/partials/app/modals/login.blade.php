<!-- form login -->
<div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog  pop-up-position border border-white rounded">
      <form action="{{ route('app.login_p') }}" method="POST">
      @csrf
      <div class="modal-content">
        <div class="modal-header" style="background-image: url('/app/img/circle-blues.png');">
          <h5 class="modal-title text-white" id="exampleModalLabel">Login</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
          <div class="mb-3 text-center">
              <button type="submit" class="btn btn-primary mt-4">Login</button>
          </div>
        </div>
        <div class="modal-footer justify-content-center text-white" style="background-image: url('/app/img/circle-blues.png');">
        <h6>Copyright &copy; 2021 Hadesta</h6>
        </div>
      </div>
    </form>
    </div>
</div>
<!-- akhir form login -->